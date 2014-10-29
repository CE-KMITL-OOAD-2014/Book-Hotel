<?php
class commentTest extends testCase{
	$obj = new opinion();
	$obj->setComment("Very good.");
	$obj->setStar("5");
	$obj->setTime("20-11-2557");

	$this->assertEqual("Very good.",$obj->getComment());
	$this->assertEqual("5",$obj->getStar());
	$this->assertEqual("20-11-2557",$obj->getTime());
}

?>