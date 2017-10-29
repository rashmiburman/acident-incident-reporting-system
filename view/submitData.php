<?php
include_once 'controller.php'; 
$obj=new controller();
	$location=$_POST['location'];
	//echo $location;
	$numberOfPerson=$_POST['numberOfPerson'];
	$injuryLevel=$_POST['injuryLevel'];
	$anyDeath=$_POST['anyDeath'];
	$personName=$_POST['reportingPersonName'];
	$personEmail=$_POST['reportingPersonEmail'];
	$personPhone=$_POST['reportingPersonPhone'];
	$reason=$_POST['reasonOfAccident'];
	//echo $location.$numberOfPerson.$injuryLevel.$anyDeath.$personPhone.$personEmail.$personName;
	/*
	insert into incident VALUES('1','lovely pofessional university','1','2','fj','false','djf','md.khalidrazakhan@gmail.com','9835555982')
	*/
	$id=$obj->getID('incident');
	$date=date('y-m-d');
	//echo $id;
	$sql_insert="insert into incident VALUES('$id','$location','$numberOfPerson','$injuryLevel','$reason','$anyDeath','$personName','$personEmail','$personPhone','$date')";
	if(mysql_query($sql_insert)){
		echo "1";
	}
	else{
		echo "0";
	}

?>