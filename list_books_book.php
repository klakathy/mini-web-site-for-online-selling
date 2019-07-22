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
$itemid=1190301002;

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
    <script type="text/JavaScript" src="js/time.js"></script>

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
    <div id="top" class="container">
      <!--border--><div style="height: 70px;"></div>
      <div class="container_content">
        <div class="choice_btn  choice_image">
          <img src="images/book1.jpg" alt="image loading failure" title="selling"/>
          <div>
            <h1>Selling Textbooks In Physical Therapy</h1>
            <h2>Perfered Price: $15</h2>
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
      <div align="center" style="background-color: white; padding: 30 30 30 30px;">
        <h1>Descriptioin</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div style="background-color: white;min-width: 700px;">
        <div class="choice_btn" style="padding: 20px 10%;">
          <h3>Description</h3>
          <p>With all of my didactic school work done for the Doctorate of Physical Therapy program, I finally sat down and went through my grad school textbooks. Many of the books I used in my PT courses were very useful and much needed resources. However, when your girlfriend is also in the PT program, you end up with two copies of each text. Therefore, we organized what texts we wanted to keep as future resources and made a nice bundle that we plan to sell for a low price to an incoming PT student.</p>
          <p>If you are an incoming freshman or new here, be sure to ask around. There are plenty of students that would be more than happy to sell or borrow you their textbooks from previous classes!</p>
          <p>Contact me for more details.</p>
          <p>Source: <a href="https://www.scholasticastudents.com/blog/jheaton/selling-books/" target="_blank"> https://www.scholasticastudents.com/blog/jheaton/selling-books/ </a></p>    
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--3-2 Picture part-->
    <div id="picture" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div align="center" style="background-color: white; padding: 30 30 30 30px;">
        <h1>Pictures</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div style="background-color: white;min-width: 700px;">
        <div class="choice_btn" style="padding: 20px 10%;">
          <p>Click on images to change size</p>
          <p><img src="images/book1.jpg" title="book1" alt="image loading failure" width="400" onclick="size(this)"/></p>
          <p><img src="images/book2.jpg" title="book2" alt="image loading failure" width="400" onclick="size(this)"/></p>
          <p><img src="images/book3.jpg" title="book3" alt="image loading failure" width="400" onclick="size(this)"/></p>
          <p><img src="images/book4.jpg" title="book4" alt="image loading failure" width="400" onclick="size(this)"/></p> 
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--3-3 Post part-->
    <div id="post" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div align="center" style="background-color: white; padding: 30 30 30 30px;">
        <h1>Post Information</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div style="background-color: white;min-width: 700px;">
        <div class="choice_btn" style="padding: 20px 10%;">
          <h3>Post information</h3>
          <p>This entry is posted by <a href="ABC.php">ABC</a></p>
          <p><a href="ABC.php"><img src="images/photo_ABC.jpg" alt="image loading failure" title="ABC" width="200" height="200" border="2"/></a></p>
          <hr/>
          <p>This item is posted on 02.01.2019<br/></p>
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
      <div align="center" style="background-color: white; padding: 30 30 30 30px;">
        <h1>Purchase Information</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div style="background-color: white;min-width: 700px;">
        <div class="choice_btn" style="padding: 20px 10%;">
          <h3>Purchase Information</h3>
          <hr/>
          <p>Price: <b>$15</b></p>
          <p><i>Owner says: </i><br/>Each book is sold in 50% discount. Price can reduce if buying more.</p>
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
      <div align="center" style="background-color: white; padding: 30 30 30 30px;">
        <h1>Contact Information</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div style="background-color: white;min-width: 700px;">
        <div class="choice_btn" style="padding: 20px 10%;">
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
    
  <!--4 contact div-->
    <div id="window0" class="window0">
      <div class="window0-content" align="left">
        <span class="close" onclick="closecontact()">&times;</span>
        <section id="about_section">
          <h2>About Us</h2>
          <p style="font-size: 100%">
            This web site is designed by Yiran Gao, Zixiao Guo, Minqiang Liang, Xiaoyue Niu.
            <br/><br/>This project is a resale website, named JHU Student Second-hand Exchange Platform, particularly designed for JHU students. It provides platforms for students to sell and buy second-hand things from each other. This website is launched as a descendent of the university site, that only students or alumni from JHU registered in our database are served as customers. We do not sell or buy any products, but users are able to publish the items they no longer use or they want to buy in JHU SSEP. No online transactions will be made via the platform, users are able to contact for further information per methods provided by the publisher, and are encouraged to check the items and finish the transaction by themselves.
          </p>
        </section>
        <section id=contact_section>
          <h2>Contact Form</h2>
          <form name="form_contact">
            <h3>Name<sup>*</sup><input type="text" size="40" name="name_contact" id="name_contact" class="resizedTextbox" required="required"/></h3>
            <h3>Email<sup>*</sup><input type="text" size="40" name="email_contact" id="email_contact" class="resizedTextbox" required="required"/></h3>
            <h3>Phone (Optional) <input type="text"size="21"  name="phone_contact" id="phone_contact" class="resizedTextbox"</h3>
            <h3>Message<sup>*</sup></h3>
            <br/><textarea name="message_contact"  style="width: 90%;" rows="10" required="required"></textarea>
            <br/><input type="submit" value="Submit" onclick="checkform()"/>
          </form>
        </section>
        
      </div>
    </div>

  <!--5 go up menu-->
    <div class="goup">
      <button type="button" class="dropbtn"><a href="#top"><img src="images/goup.png" alt="TOP" height="40" width="40"/><br/>TOP</a></button>
      <div class="goup-menu">
        <a href="#description" style="padding: 10 10px;">Description</a>
        <a href="#picture" style="padding: 10 10px;">Pictures</a>
        <a href="#post" style="padding: 10 10px;">Post</a>
        <a href="#purchase" style="padding: 10 10px;">Purchase</a>
        <a href="#contact" style="padding: 10 10px;">Contact</a>
      </div>
    </div>
   

  </body>
  
  <footer id="copyright"align="center" style="padding: 10 20 10 20px; min-width: 700px;overflow-x: hidden;">
    <span id="de" style="float: left;">CLOCK</span>
    &copy:DC Student Secondhand Exchange Platform 2019
    <span id="stay" style="float: right;">CLOCK</span>
  </footer>

</html>
