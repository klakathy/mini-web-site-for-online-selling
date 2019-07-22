<?php
session_start();
require_once 'login.php';
$db = new mysqli($db_hostname,$db_username,$db_password, $db_database);
if ($db->connect_error)
{
  echo "<script>alert('Failed to connect to MySQL: " . $db->connect_error."')</script>";
}

$userid=$_SESSION['userid'];

//$itemid=$_GET['item'];
$itemid=2190301001;

$query= "SELECT * FROM likelist WHERE user = '$userid' AND item = '$itemid'";
$result = $db->query($query);
$qpost= "SELECT user FROM itemlist WHERE user = '$userid' AND item = '$itemid'";
$rpost = $db->query($qpost);
if($rpost->num_rows!=0) $status= "my post";
elseif($result->num_rows==0) {$status="add to likelist";}
else $status= "my likeitem";

?>

<html>
  <head>
    <title>Description Page</title>
    <script type="text/JavaScript" src="js/imagesize.js"></script>
    <link href="css/homepage.css" type="text/css" rel="stylesheet"/>
    <script type="text/JavaScript" src="js/mainmenu.js"></script>
    <!--script type="text/JavaScript" src="js/time.js"></script-->

    <script type="text/javascript">
      function changelike(a0){
        var s=0;
        if(a0.innerText=="my likeitem")s=1;
        else if(a0.innerText=="add to likelist")s=2;
        else return;
        if (window.XMLHttpRequest)xmlhttp=new XMLHttpRequest();
        else xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        var src='changelike.php?s='+s+'&item=<?php echo $itemid;?>';
        xmlhttp.open("GET",src,true);
        xmlhttp.send();
        xmlhttp.onreadystatechange=function(){ a0.innerHTML=xmlhttp.responseText;}      
      }
    </script>
  </head>

  <body>
  <?php include 'menu.php';?> 
  <!--2 title part-->
    <div id="top" class="container">
      <!--border--><div style="height: 70px;"></div>
      <div class="container_content">
        <div class="choice_btn  choice_image">
          <img src="images/car6.jpg" alt="image loading failure" title="selling" class="title_image" />         
          <div>
            <h1>Sell my car bought last year</h1>
            <h2>Perfered Price: $15,000</h2>
            <h3>Provided by: ABC</h3>
          </div>     
        </div>
      </div>     
      <!--end--><div class="container-end" style="height: 30px;"></div>
    </div>
    <div style="height: 30px;background-color: white; padding: 15 15px;" align="center">
      status:
      <button style="font-size: 150%;" onclick="changelike(this)"><?php echo $status;?></button>
    </div>

  <!--3-1 Description part-->
    <div id="description" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Descriptioin</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content" >
        <div class="choice_btn">
          <h3 id="description">Description</h3>
          <p>DARCARS Kia Temple Hill has a wide selection of exceptional pre-owned vehicles to choose from, including this KIA CERTIFIED 2015 Kia Optima LX. Your buying risks are reduced thanks to a CARFAX BuyBack Guarantee. Enjoy an extra level of calm when purchasing thisKia Optima LX, it's a CARFAX One-Owner. The CARFAX report shows everything you need to know to confidently make your pre-owned purchase. You know exactly what you are getting when you purchase a Certified Pre-Owned like this Kia Optima. This wonderfully fuel-efficient vehicle offers a supple ride, quick acceleration and superior styling without sacrificing MPGs. The Optima LX has been lightly driven and there is little to no wear and tear on this vehicle. The care taken on this gently used vehicle is reflective of the 38,854mi put on this Kia. This gently driven vehicle has been well-kept and still has the showroom shine. More information about the 2015 Kia Optima: Compared to other mid-size sedans, the Kia Optima stands out in many ways. Showcasing Kia's more Euro-influenced design direction, the Optima's styling is much more edgy than that of most other mid-size sedans.</p>
          <p>
            Fuel Type: Gasoline<br/>
            Exterior Color: Silver<br/>
            City MPG: 23<br/>
            Highway MPG: 34<br/>
            Stock: 94020A<br/>
            Drivetrain: FWD<br/>
            Transmission: 6-Speed Automatic<br/>
            Engine: 2.4L I4 16V GDI DOHC<br/>
            VIN: KNAGM4A73F5651444<br/>
            Mileage: 38,854
          </p>
          <p>Contact me for more details.</p>
          <p>Source: <a href="https://www.cars.com/vehicledetail/detail/755592977/overview/" target="_blank">https://www.cars.com/vehicledetail/detail/755592977/overview/ </a></p> 
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--3-2 Picture part-->
    <div id="picture" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Pictures</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn">
          <p>Click on images to change size</p>
          <p><img src="images/car7.jpg" title="car1" alt="image loading failure" width="400" onclick="size(this)"/></p>
          <p><img src="images/car6.jpg" title="car2" alt="image loading failure" width="400" onclick="size(this)"/></p>
          <p><img src="images/car1.png" title="car3" alt="image loading failure" width="400" onclick="size(this)"/></p>
          <p><img src="images/car2.jpg" title="car4" alt="image loading failure" width="400" onclick="size(this)"/></p>
          <p><img src="images/car5.jpg" title="car5" alt="image loading failure" width="400" onclick="size(this)"/></p> 
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--3-3 Post part-->
    <div id="post" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Post Information</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn">
          <h3>Post information</h3>
          <p>This entry is posted by <a href="ABC.html">ABC</a></p>
          <p><a href="ABC.html"><img src="images/photo_ABC.jpg" alt="image loading failure" title="ABC" width="200" height="200" border="2"/></a></p>
          <hr/>
          <p>This item is posted on 01.01.2019<br/></p>
          <p><i>other:</i> <br/>
            This will probalbly be available until June.
          </p>
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--3-4 Purchase part-->
    <div id="purchase" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Purchase Information</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn">
          <h3>Purchase Information</h3>
          <hr/>
          <p>Price: <b>$15,000</b></p>
          <p><i>Owner says: </i><br/><i>Owner has no comments.</i></p>
          <hr/>
          <p>Place: <b>Baltimore</b></p>
          <p><i>Owner says: </i><br/>I will go to DC every Tuesday.</p>
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--3-5 Contact part-->
    <div id="contact" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Contact Information</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn">
          <h3>Contact Information</h3>
          <hr/>
          <p>Email:123123@jhu.edu<br/>
            Cell:123123<hr/>
            Others: <br/>
            Please send me sms or email. Do not call!
          </p>
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--5 go up menu-->
    <div class="goup">
      <button type="button" class="dropbtn"><a href="#top"><img src="images/goup.png" alt="TOP" height="40" width="40"/><br/>TOP</a></button>
      <div class="goup-menu">
        <a href="#description">Description</a>
        <a href="#picture">Pictures</a>
        <a href="#post">Post</a>
        <a href="#purchase">Purchase</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
  
  <footer id="copyright"align="center" style="padding: 10 20 10 20px; min-width: 700px;overflow-x: hidden;">
    <span id="de" style="float: left;">CLOCK</span>
    &copy:DC Student Secondhand Exchange Platform 2019
    <span id="stay" style="float: right;">CLOCK</span>
  </footer>   

  </body>

</html>
