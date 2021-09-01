<?php

$txt ="What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
 when an unknown printer took a galley of type and scrambled it to make a type
 specimen book. It has survived not only five centuries, but also the leap into
 electronic typesetting, remaining essentially unchanged. It was popularised in
 the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
 and more recently with desktop publishing software like Aldus PageMaker including
 versions of Lorem Loremgrim Ipsumgrim foobar foos.";

/*** word and character matches operation ***/
//this matches with every single character except new line
preg_match_all("/./i",$txt,$matches);
 echo count($matches[0])."\n";

 // this matches with a world
preg_match_all('/Lorem/i',$txt,$matches);
echo count($matches[0])."\n";

/*** optional operation ***/
//this matches with a world with optional character
//character before question mark is optional character
preg_match('/foos?/i',$txt,$matches);
echo count($matches)."\n";

//if have one more optional character put them inside bracket
preg_match('/foo(bar)?/i',$txt,$matches);
echo count($matches)."\n";


/*** Ranges matches ***/
$number=1234567890;
$character='abcdekfp';
//we can matches with range number with square brackets
preg_match_all('/[0-5]/i',$number,$matches);
echo count($matches[0])."\n";
//also matches with range of character
preg_match_all('/[a-b]/i',$character,$matches);
echo count($matches[0])."\n";
//also we can mix matches with range number and characters
preg_match_all('/[0-5a-b]/i',$character.$number,$matches);
echo count($matches[0])."\n";
//if want uppercase use uppercase within matches

/*** plus operation - match one or more ***/
$spam1='we 
weeeeeeee
weeeeeeeeeeeeeeeeee
weeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee';

preg_match_all('/wee./i',$spam1,$matches);
echo count($matches[0])."\n";
