<?php

if (isset($_POST["btn1"]))
{
	
	$a= strtolower($_POST["txt1"]);
	$string= ucfirst($a);
    $ch=array ('a','b','c','d','e','f','g','h', 'i', 'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    $string = preg_replace_callback('/[.!?].*?\w/', create_function('$ch', 'return strtoupper($ch[0]);'), $string);
	$string = str_replace("ahura","Ahura", $string);
	echo $string;

}

?> 

