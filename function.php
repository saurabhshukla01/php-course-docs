<?php

/*
if(is_dir("Ducat"))
{
	echo "Directory Already Exist";
}
else
{
	mkdir("Ducat");
	echo "Directory Create Successfully";
}
*/




/*
if(file_exists("abc.txt"))
{
	echo "File Already Exist";
}
else
{
	touch("abc.txt");
	echo "File Create Successfully";
}
*/




//touch("abc.txt");
//$fo = fopen("abc.txt","w");
//fwrite($fo,"Hello\nPHP");
//fputs($fo,"Hello\nPHP");





$fo = fopen("abc.txt","r");
//echo fread($fo,3);
//echo filesize("abc.txt");
//echo fread($fo,filesize("abc.txt"));
//echo fgets($fo);
//echo fgetc($fo);

/*
while(!feof($fo))
{
	echo fgetc($fo);
	echo "<br>";
}
*/




//file_put_contents("xyz.txt","Delhi\nNoida");


//echo file_get_contents("xyz.txt");


fclose($fo);








?>