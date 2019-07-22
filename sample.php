<?php
session_start();

require_once 'login.php';
$db = new mysqli($db_hostname,$db_username,$db_password, $db_database);
if ($db->connect_error)
{
  echo "<script>alert('Failed to connect to MySQL: " . $db->connect_error."')</script>";
}
$userid=$_SESSION['userid'];
if($itemid=$_GET['item']){
  $result=$db->query("SELECT * FROM tmplist WHERE item = '$itemid'");
  if($result->num_rows!=1){
    echo "error";exit();
  }else {
    $r=$result->fetch_assoc();
    $title=$r['title'];
    $ownerid=$r['user'];
    $showname=$r['showname'];
    $date=$r['day'];
    $class=$r['class'];
    $email=$r['email'];
    $phone=$r['phone'];
    $ccontact=$r['ccontact'];
    $price=$r['price'];
    $cprice=$r['cprice'];
    $place=$r['place'];
    $cplace=$r['cplace'];
    $message=$r['message'];
    $pics=$r['pic'];

  }
}else {require_once 'postingvalue.php';}
$owner="anonymous";
 
if($showname==1){
  $qname="SELECT * FROM userlist WHERE id = '$ownerid'";
  if($rname=$db->query($qname)){
    $row=$rname->fetch_assoc();
    $owner=$row['name'];
    if($owner=="")$owner=$row['email'];
  }
  else $owner="error";
}

$ext=explode(",", $pics);
?>

<html>
  <head>
    <title>Description Page</title>
    <script type="text/JavaScript" src="js/imagesize.js"></script>
    <link href="css/homepage.css" type="text/css" rel="stylesheet"/>
    <script type="text/JavaScript" src="js/mainmenu.js"></script>
    <script type="text/JavaScript" src="js/time.js"></script>
  </head>

  <body>
  <?php include 'menu.php'; ?>

  <!--2 title part-->
    <div id="top" class="container">
      <!--border--><div style="height: 70px;"></div>
      <div class="container_content">
        <div class="choice_btn  choice_image">
          <img src="<?php if($ext[0]!="") echo "iii/".$itemid."_0.".$ext[0];else echo "images/no_image.jpg"; ?>" alt="image loading failure" title="selling" class="title_image" />
          <div>
            <h1><?php echo $title;?></h1>
            <h2>Perfered Price: $<?php echo $price;?></h2>
            <h3>Provided by: <?php echo $owner;?></h3>
          </div>        
        </div>
      </div>      
      <!--end--><div class="container-end" style="height: 30px;"></div>
    </div>

  <!--3 Detail part-->
    <div class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Detail</h1>
      </div>
      <!--start--><div class="container-start"></div>

      <div class="container_content" >
    <!--3-1 Description part-->
        <div id="description" class="choice_btn">
          <h3>Description</h3>
          <pre><?php echo $message;?></pre> 
        </div>
    <!--3-2 Picture part-->
        <div id="picture" class="choice_btn">
          <h3>Picture</h3>
          <p>Click on images to change size</p>
          <?php
            $i=0;
            $picnum=count($ext)-1;
            while ($i<$picnum) {
              $src=$itemid."_".$i.".".$ext[$i];
              echo "<p><img src='iii/".$src."' alt='image loading failure' width='400' onclick='size(this)'/></p>";
              $i++;
            }
          ?>
        </div>
    <!--3-3 Post part-->
        <div id="post" class="choice_btn">
          <h3>Post information</h3>
          <p>This entry is posted by <a href="ABC.html"><?php echo $owner;?></a></p>
          <p><a href="ABC.html"><img src="images/photo_ABC.jpg" alt="image loading failure" title="ABC" width="200" height="200" border="2"/></a></p>
          <hr/>
          <p>This item is posted on <?php echo $date;?><br/></p>
        </div>
    <!--3-4 Purchase part-->
        <div id="purchase" class="choice_btn">
          <h3>Purchase Information</h3>
          <hr/>
          <p>Price: <b>$<?php echo $price;?></b></p>
          <p><i>Owner says: <br/>&nbsp;&nbsp;<?php if($cprice!=0) echo $cprice; else echo "no comments on price";?></i></p>
          <hr/>
          <p>Place: <b><?php echo $place;?></b></p>
          <p><i>Owner says: <br/>&nbsp;&nbsp;<?php if($cplace!=0) echo $cplace; else echo "no comments on place";?></i></p>
        </div>
    <!--3-5 Contact part-->
        <div id="contact" class="choice_btn">
          <h3>Contact Information</h3>
          <hr/>
          <p>Email:<?php echo $email;?>
            <?php if($phone!="") echo '<br/>Cell:'.$phone;?><br/><br/>          
            <?php if($ccontact!="") echo 'Others: <br/>&nbsp;&nbsp;'.$ccontact;?>
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
