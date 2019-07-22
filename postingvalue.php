<?php

$showname=$_POST['showname'];
$class=$_POST['sell']+7;
$title=$_POST['itemtitle'];
$email=$_POST['itememail'];
$phone=$_POST['itemphone'];
$ccontact=$_POST['c-contact'];
$price=$_POST['itemprice'];
$cprice=$_POST['c-price'];
$place=$_POST['itemplace'];
$oplace=$_POST['otherplace'];
$cplace=$_POST['c-place'];
$message=$_POST['itemmessage'];
$picture=$_FILES['picture'];




if($place==3)$place=$oplace;
elseif($place==2)$place="Baltimore";
else $place="DC";

$date=date("Y-m-d");

$qdate="SELECT MAX(item%1000) FROM tmplist WHERE day = '$date' AND class ='$class'";
$tmpid=$db->query($qdate);
$tmpid=$tmpid->fetch_assoc();
$tmpid=$tmpid['MAX(item%1000)']+1;
$tmpid=str_pad($tmpid,3,"0",STR_PAD_LEFT);
$tmpdate=date_create($date);
$tmpdate=date_format($tmpdate, "ymd");
$itemid=$class.$tmpdate.$tmpid;

$pics="";
$i=0;
$picnum=0;
while($i<count($picture['name'])){
  $type = strtolower(pathinfo(basename( $picture["name"][$i]),PATHINFO_EXTENSION));  
  $target_file = "iii/".$itemid."_".$picnum.".".$type;
  echo '<script>console.log("type='.$type.'  tar='.$target_file.'");</script>';
  if($type!=''&&!file_exists($target_file)){
    if (move_uploaded_file($picture["tmp_name"][$i], $target_file)) {
      $picnum++;$pics.=$type.","; echo '<script>console.log("pic='.$picnum.'  pics='.$pics.'");</script>';
    }else echo '<script>alert("fail");</script>';
  }
  echo '<script>console.log("i='.$i.'  f='.$picture["name"][$i].'");</script>';
  $i++;
}

$insert="INSERT INTO tmplist (item, user, showname, day, class, title, email, phone, ccontact, price, cprice, place, cplace, message, pic) VALUES ('$itemid', '$userid','$showname', '$date', '$class', '$title', '$email', '$phone', '$ccontact', '$price', '$cprice', '$place', '$cplace', '$message', '$pics')";
$db->query($insert);

$ownerid=$userid;

?>