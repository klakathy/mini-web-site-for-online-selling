<?php
session_start();
?>

<html>
  <head>
    <title>JHU Student Secondhand Exchange Platform </title>
    <link href="css/homepage.css" type="text/css" rel="stylesheet"/>
    <script type="text/JavaScript" src="js/mainmenu.js"></script>
		<script type="text/JavaScript" src="js/time.js"></script>
  </head>

  <body>
  <?php include 'menu.php' ?>     
  <!--2 cover image part-->
    <div id="top" class="container" style="margin-top: 30px;">
      <!--border--><div style="height: 40px;"></div>
      <img src="images/jhu02.jpg" alt="image loading failure" style="width: 100%" />
      <div class="text-onimage">
        <h2>JHU Student Secondhand Exchange Platform</h2>
        <p><b>Welcome to the JHU Student Secondhand Exchange Platform Website!</b></p>
      </div>
      <div class="container-end" style="height: 30px;"></div>
    </div>

  <!--3 title part-->
   <div id="provides" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>JHU SSEP Provides</h1>

        <p><b>JHU Student Secondhand Exchange Platform Website allows you to buy a second hand item, sell your used products, and post your needs.</b></p>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn choice_image">
          <a href="#housing" style="width: 27%;">
              <img src="images/jhu17.jpg" width="100%"/><p>Sale</p>
          </a>
          <a href="#want" style="width: 27%;">
              <img src="images/jhu18.jpg" width="100%"/><p>Want</p>
          </a> 
          <a href="posting.html" style="width: 27%;">
              <img src="images/jhu19.jpg" width="100%"/><p>Post</p>
          </a>        
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--4-1 House part-->
    <div id="housing" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Housing/Apartment Rent</h1>
        <p><b>Find a house in JHU SSEP</b></p>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn  choice_image" >
          <button type="button" style="width: 40%;" onclick="item_no()">
            <img src="images/outside.jpg" width="100%"/><p>HOUSE 1<br/>$100</p>
          </button>
          <button type="button" style="width: 40%;" onclick="item_no()">
            <img src="images/outside.jpg" width="100%"/><p>HOUSE 2<br/>$200</p>
          </button>
        </div>
        <div class="choice_btn">
          <a href="list_housing.php" class="btn_rightalign">more</a>
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

    <script type="text/javascript">
      function item_no(){
        alert("This item is unavailable now.\nPlease go to car / book for examples.");
      }
    </script>

  <!--4-2 car part-->
    <div id="automotive" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Automotive</h1>
        <p><b>Find vehicles in JHU SSEP</b></p>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn  choice_image">
          <a href="list_automotive_car.php" target="_blank" style="width: 40%;">
              <img src="images/car6.jpg"/><p>CAR 1<br/>$10000</p>
          </a>
          <a href="list_automotive_car.php" target="_blank" style="width: 40%;">
              <img src="images/car7.jpg"/><p>CAR 2<br/>$20000</p> 
          </a> 
        </div>
        <div class="choice_btn">
          <a href="list_automotive.php" class="btn_rightalign">more</a>
        </div>
       </div> 
      <!--end--><div class="container-end"></div>
    </div>

  <!--4-3 book part-->
    <div id="books" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Books</h1>
        <p><b>Find books in JHU SSEP</b></p>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn  choice_image" >
          <a href="list_books_book.php" target="_blank" style="width: 40%;">
            <img src="images/book1.jpg" /><p>BOOK 1<br/>$10</p>
          </a>
          <a href="list_books_book.php" target="_blank" style="width: 40%;">
              <img src="images/book1.jpg"/><p>BOOK 2<br/>$20</p>
          </a>
        </div>      
        <div class="choice_btn"style=>
          <a href="list_books.php" class="btn_rightalign" >more</a>
        </div>
      </div> 
      <!--end--><div class="container-end"></div>
    </div>

  <!--4-4 other part-->
    <div id="supplies" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Appliances/Electronics</h1>
        <p><b>Find supplies in JHU SSEP</b></p>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn  choice_image">
          <button type="button" style="width: 40%;" onclick="item_no()">
            <img src="images/game.jpg" width="100%"/><p>PS4 1<br/>$100</p>
          </button>
          <button type="button" style="width: 40%;" onclick="item_no()">
            <img src="images/game.jpg" width="100%"/><p>PS4 2<br/>$200</p>
          </button>
        </div>
        <div class="choice_btn">
          <a href="list_appliance.php" class="btn_rightalign">more</a>
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>

  <!--5 want part-->
    <div id="want" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>Want</h1>
        <p><b>Find requests in JHU SSEP</b></p>
      </div>
      <!--start--><div class="container-start"></div>
      <div class="container_content">
        <div class="choice_btn  choice_image">
          <a href="list_want_rentpost.php" target="_blank" style="width: 40%;">
              <img src="images/apartment.jpg"/><p>Apartment</p>
          </a>
          <a href="list_want_appliancepost.php" target="_blank" style="width: 40%;">
              <img src="images/appliance.jpg"/><p>Appliance</p>
          </a>         
        </div>
        <div class="choice_btn">
          <a href="list_want.php" class="btn_rightalign" style="">more</a>
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>


  <!--7-1 go up menu-->
    <div class="goup">
      <button type="button" class="dropbtn"><a href="#top"><img src="images/goup.png" alt="TOP" height="40" width="40"/><br/>TOP</a></button>
      <div class="goup-menu">
        <a href="#provides" style="padding: 10 10px;">Provides</a>
        <a href="#housing" style="padding: 10 10px;">Housing</a>
        <a href="#automotive" style="padding: 10 10px;">Automotive</a>
        <a href="#books" style="padding: 10 10px;">Books</a>
        <a href="#supplies" style="padding: 10 10px;">Supplies</a>
        <a href="#want" style="padding: 10 10px;">Want</a>
      </div>
    </div>           
    
  <footer id="copyright"align="center" style="padding: 10 20 10 20px; min-width: 700px;overflow-x: hidden;">
    <span id="de" style="float: left;">CLOCK</span>
    &copy:DC Student Secondhand Exchange Platform 2019
    <span id="stay" style="float: right;">CLOCK</span>
  </footer>

  </body>

</html>
