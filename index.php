<html>.,,hhhhhh
<?php
echo "</br>**************************</br>";
//write a php program to calculate sum of marks of all subjects of a student
//passing array to function
$marks=array(10,20,30,40);
$sum=0;
//function total($subject)
function total($subject=array(10,20,30)) //default array argument
{
	$sum=0;
	foreach($subject as $num)
	{
		$sum+=$num;
	}
 return$sum;
}
//echo total($marks);
echo total();//for default array argument

echo "</br>**************************</br>";
//return type declaration
function sum($g,$f):int{
return $g+$f;

}
//if strict mode is on this will show an error
echo sum(2,4.2); //6
echo "</br>";


//srtict mode=
//declare(strict_types=1);

function add(int $a,int $b)
{
	return ($a+$b);
}
//if strict mode is on this will show an error

//echo add(2,4);
echo add(2,"4");
echo "</br>**************************</br>";
//type declaration is also possible in php
//Scalar type declaration comes in two flavours
// 1 coercive (default)
// 2 strict  
echo "naya hai yah";
echo "</br>";
$as="dfgs";
$rf=98;
echo gettype($as);echo "</br>";
echo gettype($rf);
echo "</br>**************************</br>";
FUNCTION d($name,$phone,$address=NULL)
{
	if($address==NULL)
	{
		ECHO "Sorry data not found";
		echo "$address";
	}
	else
	{
		echo "Your name is $name ,your no is $phone";
	    echo " $address";
	}
}
d("Ravan","4464738883","borivali");
echo "<br>";
d("Ravan","4464738883");
echo "</br>**************************</br>";
//Default arguments
function disp($name1,$name2,$name3="Geeky shows")
{
 echo "<br/>$name1 to $name2 $name3<br/>";	
}

/*
FOLLOWING SYNTAX WILL PRODUCE AN ERROR
function disp($name1,$name2="Geeky shows,$name3")
{
 echo "<br/>$name1 to $name2 $name3<br/>";	
}
*/
disp("Welcome","Your");//Welcome to your Geeky Shows
disp("Welcome","Your","PHP");//Welcome to your PHP
echo "</br>**************************</br>";

//Function in php
function display()
{
 echo "Welcome to geekyshows";
}
function _DISPLAY8($N1,$N2)
{
	ECHO "$N1 to the $N2";
}
_DISPLAY8("Welcome","Geekyshows");
echo "</br>";
ECHO PHP_OS; //OUTPUT= WINNT
echo "</br>**************************</br>";
print "boss";
echo "</br>";
display();
dISPLAY();//FUNCTION NAMES ARE CASE INSENSATIVE
echo "</br>";
printf("RAM");
echo "</br>";
$U=SPRINTF("dESK");
ECHO $U;
echo "</br>**************************</br>";
$p="dumb";
$k="NAUGHTY";
ECHO STRTOLOWER($k);
echo "</br>";
echo strtoupper($p);
echo "</br>";
echo strlen("vivek");
echo "</br>**************************</br>";
//associative array
$fees=array("Rahul"=>500,"Sonam"=>600,"Sumit"=>700);
//array keys function
$keys=array_keys($fees);
echo $fees["Rahul"]."</br>";
echo$keys[0]."<br />";
echo$keys[2]."<br />";
echo "</br>**************************</br>";
echo "</br>**************************</br>";
//we use unset function for deleting an array element
foreach($fees as $km)
{
	echo $km;
echo "</br>";
}
//unset($fees["Rahul"]);

echo "</br>**************************</br>";
echo "**************************</br>";
$i=0;
for($i=0;$i<count($keys);$i++)
{
	echo $keys[$i]."<br />";
	echo $fees[$keys[$i]]."<br />";
}

echo "dwbug<br>";
echo "**************************</br>";
//for each with associative array
foreach($fees as $money):
echo$money."</br>";
endforeach;

echo "**************************</br>";
//for each with associative array
foreach($fees as $key=> $money):
echo $key."=>".$money."</br>";
endforeach;

echo "**************************</br>";
for($i=0;$i<count($keys);$i++)
{
	echo $fees[$keys[$i]]."<br />";
	//echo $fees["Rahul"]."<br />";
}
echo "**************************</br>";
$stats=array("a"=>1,"b"=>2,"c"=>3,"4"=>"df","x"=>55);
$desk=array_keys($stats);
echo $desk[3]."</br>";
echo $stats[$desk[3]]."</br>";

$a=0;
while($a<3):
echo $keys[$a]."<br>";
 $a+=1;
endwhile;

$a=1;
while($a<5):
echo $a."<br>";
 $a+=1;
endwhile;
//same is for for-loop
$p="vicky shows<br>";
echo$p;
echo 'Geeky shows<br>';
echo("Vicky don<br>");
echo "visit","Datsun";
echo 234.5;
echo"<br><b>pampers</b><br>";
if(10>3)
{
	echo"Yes it is true<br>";
}
echo PHP_VERSION ."<BR>";
if(10>3):
echo"Yes it is true<br>";
endif;
$value1=10;
$value2=20;
echo"he was $value1<br>";
echo$value1+$value2;
echo$sum=$value1+$value2;
echo$sum=$value1+$value2;
echo"value of sum is ".$sum;
print"I am the best";
//the word tokyo is called as token in php
echo<<<tokyo
india is my country
all indians are my brothers
tokyo;
//this is comment1   ##########
#this is comment 2 
/*fvvvvvvvvvvvvvvvvvvvvvf
*/                   
echo "</br>**************************</br>";
#print_r function for debugging
print_r($fees);
echo "</br>";
print_r($keys);
$ds=print_r($fees,true);
print "</br>".$ds;
?>