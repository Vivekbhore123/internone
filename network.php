<?php
/*
class Abc{
	var $doc;
	function docum($number)
	{
		global $doc;
        $doc=$number;
        echo "model name is: $doc <br>";		
	}
}
$obj=new Abc();
$obj->docum('pappu');

echo "*************using this keyword as follows********************************";
class Mobile{
	var $modal;
	function __construct()
	{
		echo"<br>Mission successful, constructor called";
	}
	function fiction($number)
	{
		$this->modal=$number;
        echo "<br>model name is: $this->modal";		
	}
	
	function __destruct()
{
	echo "<br>Destructor called : $this->modal";
}
}
$ob=new Mobile();
$ob->fiction('sharbat');
$ob->fiction('masti');
$snoopy=new Mobile();
$snoopy->fiction('kalla');
echo "<br>**********file handling*********************<br>";
echo "<br>**********file handling*********************<br>";
$myfile=fopen("index.php","rw") or die("Unable to open the file");
echo fgets($myfile);
//echo fread($myfile,filesize("index.php"));
fclose($myfile);

echo "<h1>Practice</h1>";
class Father{
	public static $a=10;
	public function disposal()
	{
		echo self::$a;
		echo "	Hiii<br>";
	}
	
}
//we can access static variable inside both static or 
//non-static method but we cant access non static variable 
//inside static method 

Father::disposal();
$json=new Father;
$json->disposal();

abstract class Baba{
	function dis()
	{
		echo "	normal method<br>";
	}
	abstract function absfunction();
}
class Baccha extends Baba{
	public function absfunction()
	{
		echo "<br>Abstract Method";
	}
}
$thing=new Baccha;
$thing->absfunction();
$thing->dis();

class Parental{
	const mark=101;
	function fun(){
		echo self::mark;
		
	}
}
$o=new Parental;
$o->fun();
echo "<br>".Parental::mark;
*/
?>


















