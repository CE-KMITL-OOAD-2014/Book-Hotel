<?php
class roomTest extends testCase{
	$A = new room(NULL,1200,"standard",true);
	$A->setPrice(1400);//change price.
	$A->setRoomName("delux");//change name.
	$A->changRS();//test change room status.

	$this->assertEqual(1400,$A->getPrice());
	$this->assertEqual(false,$A->getRoomName());
	$this->assertEqual(false,$A->getRS());
}

?>