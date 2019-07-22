<?php
  session_start();
?>
<html>
  <head>
    <title>JHU SSEP want list </title>
    <link href="css/homepage.css" type="text/css" rel="stylesheet"/>
    <script type="text/JavaScript" src="js/mainmenu.js"></script>
    <script type="text/JavaScript" src="js/time.js"></script>
    <script type="text/JavaScript" src="js/top.js"></script>
  </head>

  <body>
  <?php include 'menu.php'; ?>
  <!--2 cover image part-->
    <div id="top" class="container" style="margin-top: 30px;">
      <!--border--><div style="height: 40px;"></div>
      <img src="images/jhu02.jpg" alt="image loading failure" style="width: 100%" />
      <div class="text-onimage" style="width: 70%;height: 70%;left: 15%;top: 18%; margin-right: auto;text-align: center;padding: 0;">
        <h1 style="font-size: 350%;font-weight: 800;position: absolute;bottom: 50%;right: 50%;margin-right: -90px; margin-bottom: -45px;">WANT</h1>       
      </div>
      <div class="container-end" style="height: 30px;"></div>
    </div>
      
  <!--3 list part-->
    <div id="description" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Want to buy</h1>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn choice_list" >          

          <table id="myTable">
            <tr>
              <th>Date</th>
              <th>Description</th>
              <th>Price</th>
            </tr>
            <tr>
              <td><time class="result-date" datetime="2019-02-14 12:27" title="Tue 14 Feb 12:27:36 PM">Feb 14</time></td>
              <td><a href="list_books.php" target="_blank"> Seeking for Information Systems textbook</a></td>
              <td>155</td>
            </tr>
            <tr>
              <td><time class="result-date" datetime="2019-02-14 12:27" title="Tue 14 Feb 12:27:36 PM">Feb 14</time></td>
              <td><a href="list_appliance.php" target="_blank"> Looking for small size appliance</a></td>
              <td>175</td>
            </tr>
            <tr>
              <td><time class="result-date" datetime="2019-02-14 12:27" title="Tue 14 Feb 12:27:36 PM">Feb 14</time></td>
              <td><a href="list_housing.php" target="_blank"> Seeking for apartment sublease</a></td>
              <td>255</td>
            </tr>
            <tr>
              <td><time class="result-date" datetime="2019-02-13 12:27" title="Tue 13 Feb 12:27:36 PM">Feb 13</time></td>
              <td><a href="list_automotive.php" target="_blank">Want to buy a second-hand sedan as soon as possible</a></td>
              <td>250</td>
            </tr>                  
          </table>
          <span class="span_a btn_rightalign" style="" onclick="topFunction()" >go top</span>
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--5 go up menu-->
    <div class="goup">
      <button type="button" class="dropbtn"><a href="#top"><img src="images/goup.png" alt="TOP" height="40" width="40"/><br/>TOP</a></button>
      <div class="goup-menu">
        <a href="#description" style="padding: 10 10px;">List</a>
      </div>
    </div>            
         
  </body>
  
  <footer id="copyright"align="center" style="padding: 10 20 10 20px; min-width: 700px;overflow-x: hidden;">
    <span id="de" style="float: left;">CLOCK</span>
    &copy:DC Student Secondhand Exchange Platform 2019
    <span id="stay" style="float: right;">CLOCK</span>
  </footer>

</html>
