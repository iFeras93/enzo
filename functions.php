<?php


function Encrypt($text)
{
	# code...
	$encrypted_text= trim(md5($text)); 

	return $encrypted_text;

}