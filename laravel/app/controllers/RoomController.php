<?php

class RoomController extends BaseController {

	public function addRoom(){
		$room = new Room;
		$room->name = Input::get('name');
		$room->price = Input::get('price');
		$room->roomDetail = Input::get('detail');
		$room->roomStatus = Input::get('status');
		//$room->date = Input::get('date');
		if(Input::hasFile('uploadField')){
			$file = Input::file('uploadField');
			$destinationPath = "roomPicture";
			$filename = date('Y-m-d').'_'.$file->getClientOriginalName(); 
			$uploadSuccess = $file->move($destinationPath, $filename);
			$room->path = $filename;
		}
		$hotelname = Input::get('hotelname');
		$hotelDB = Hotel::where('name','like',$hotelname)->get();
		if($hotelname == $hotelDB[0]->name){
			$room->hotelid = $hotelDB[0]->id;
			$room->save();
		}
		
		return Redirect::to('addnewroom');
	}

	public function getpageroom(){
		$roomid = $_GET["ID"];
		$roomidTmp = Room::find($roomid);
		//$roomnameTmp = Room::where('hotelid','like',$hotelid)->get();
		/*$tmpHotel = Hotel::find($_GET["province"]);*/
		//$tmpHotel = Hotel::where('province','like',$province)->get();
		/*return $name;
		echo count($tmpHotel);
		return View::make('admin_page')->with('User',$tmpHotel);
		for($i =0;$i<count($tmpHotel);$i++){
			echo $tmpHotel[$i]->name;
		}*/
		//echo $roomidTmp->name;
		//echo $roomnameTmp[0]->name;
		return View::make('room')->with('Room',$roomidTmp);
	}

	public function bookRoom(){
		$userid = Auth::user()->id;
		$roomID = Input::get('roomID');
		$thisroom = Book::where('roomid','like',$roomID)->get();
		$date = Input::get('bday');
		$adate = explode("-",$date);//Y-m-d
		$forday = Input::get('quantity')-1;
		$size = count($thisroom);
		$RS = 0;
		if($size == 0){
			$RS=1;
		}else{
			for($i = 0; $i<$size; $i++){
				$start=$thisroom[$i]->start;
				$end=$thisroom[$i]->end;
				$enddate=date ("Y-m-d", mktime(0, 0, 0, $adate[1], $adate[2]+$forday, $adate[0]));
				$start_ts=strtotime($start);
				$end_ts=strtotime($end);
				$date_ts=strtotime($date);
				$enddate_ts=strtotime($enddate);
				if((($date_ts >= $start_ts) && ($date_ts <= $end_ts)) || (($enddate_ts >= $start_ts) && ($enddate_ts <= $end_ts)) ) {
					$RS = 0;
				}else{
					$RS = 1;
				}
			}
		}
		if($RS == 1){
			$book = new Book;
			$book->userid = $userid;
			$book->roomID = $roomID;
			$room = Room::find($roomID);
			$book->start = $date;
			$book->end = date ("Y-m-d", mktime(0, 0, 0, $adate[1], $adate[2]+$forday, $adate[0]));
			$todate = $book->end;
			$book->save();

			$user = User::find($userid);
			$username = $user->name;
			$details = "Room : {$room->name}
			<p>Date : $date to $todate</p>
			<p>Booked by : $username</p>";
			Mail::send('emails.emailhotel',array('detail' => $details), function($message)
			{
				$message->to(Input::get('hotelemail'))->subject('Notice!');
			});

			return View::make('success');
			//return Redirect::to('room')->with('notice','Success');
		}else{
			return View::make('fail');
			//return Redirect::to('room')->with('notice','Sorry, this room is full!!.');
		}
	}

	public function cancelBook(){
		$userid = Auth::user()->id;
		$bookid = Input::get('bookid');
		$book = Book::find($bookid);
		$book->delete();
		return View::make('success');
	}


}

?>