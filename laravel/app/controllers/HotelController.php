<?php

class HotelController extends BaseController {

	public function addHotel(){
		$hotel = new Hotel;
		$hotel->name = Input::get('name');
		$hotel->email = Input::get('email');
		$hotel->phone = Input::get('phone');
		$hotel->province = Input::get('province');
		if(Input::hasFile('uploadField')){
			$file = Input::file('uploadField');
			$destinationPath = "hotelPicture";
			$filename = date('Y-m-d').'_'.$file->getClientOriginalName(); 
			$uploadSuccess = $file->move($destinationPath, $filename);
			$hotel->path = $filename;
		}
		


		$hotel->save();
		return Redirect::to('addnewhotel');
	}

	public function gethotelname($province)
	{

		/*$tmpHotel = Hotel::find($_GET["province"]);*/
		$tmpHotel = Hotel::where('province','like',$province)->get();
		/*return $name;
		echo count($tmpHotel);
		return View::make('admin_page')->with('User',$tmpHotel);
		for($i =0;$i<count($tmpHotel);$i++){
			echo $tmpHotel[$i]->name;
		}*/

		return View::make($province)->with('Hotel',$tmpHotel);
	}

	public function getpagehotel()
	{
		$hotelid = $_GET["ID"];
		$hotelnameTmp = Hotel ::find($hotelid);
		$roomnameTmp = Room::where('hotelid','like',$hotelid)->get();
		/*$tmpHotel = Hotel::find($_GET["province"]);*/
		//$tmpHotel = Hotel::where('province','like',$province)->get();
		/*return $name;
		echo count($tmpHotel);
		return View::make('admin_page')->with('User',$tmpHotel);
		for($i =0;$i<count($tmpHotel);$i++){
			echo $tmpHotel[$i]->name;
		}*/
		//echo $hotelnameTmp->name;
		//echo $roomnameTmp[0]->name;
		return View::make('hotel')->with('Hotelname',$hotelnameTmp)->with('Roomarray',$roomnameTmp);
	}

	public function addComment(){
		$opi = new Opin;
		$opi->userid = Auth::user()->id;
		$opi->hotelid = Input::get('hotelid');
		$opi->star = Input::get('star');
		$opi->comment = Input::get('comment');
		$opi->time = date('H:i:s d-m-Y');
		$opi->save();
		return View::make('success');
	}

}
