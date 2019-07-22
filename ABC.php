<?php
session_start();
require_once 'login.php';
$db = new mysqli($db_hostname,$db_username,$db_password, $db_database);
if ($db->connect_error)
{
  echo "<script>alert('Failed to connect to MySQL: " . $db->connect_error."')</script>";
}
$userid=$_SESSION['userid'];

$query= "SELECT * FROM likelist WHERE user = '$userid'";
$result = $db->query($query);
?>

<html>
  <head>
    <title>Document of ABC</title>
    <link href="css/homepage.css" type="text/css" rel="stylesheet"/>
    <script type="text/JavaScript" src="js/mainmenu.js"></script>
    <script type="text/JavaScript" src="js/time.js"></script>
  </head>

  <body>
  <?php include 'menu.php'; ?>

  <!--2 document part-->
    <div id="description" class="container">
      <!--border--><div style="height: 40px;"></div>
      <div class="container_title">
        <h1>ABC's Like List</h1>
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
            <tr><th colspan="3">Like List</th></tr>

            <?php            
              if ($result->num_rows==0) {
                echo '<tr><td colspan="3">no record</td></tr>';
              }else{
                while ($row=$result->fetch_assoc()) {
                  $itemid=$row['item'];
                  $ritem=$db->query("SELECT * FROM itemlist WHERE id = '$itemid'");
                  $r=$ritem->fetch_assoc();
                  $ss1='<tr><td><time datetime="'.$r['date'].'">'.$r['date'].'<time></td><td><a href="'.$r['url'].'" target="_blank">'.$r['name'].'</a></td><td>'.$r['price'].'</td></tr>';
                  echo $ss1;
                }
              }

              echo "<tr><th colspan='3'>My Post List</th></tr>";
              $rp=$db->query("SELECT * FROM itemlist WHERE owner = '$userid'");
              if ($rp->num_rows==0) {
                echo '<tr><td colspan="3">no record</td></tr>';
              }else{
                while ($r=$rp->fetch_assoc()) {
                  $ss1='<tr><td><time datetime="'.$r['date'].'">'.$r['date'].'<time></td><td><a href="'.$r['url'].'" target="_blank">'.$r['name'].'</a></td><td>'.$r['price'].'</td></tr>';
                  echo $ss1;
                }
              }

              echo "<tr><th colspan='3'>My TMP List</th></tr>";
              $rp=$db->query("SELECT * FROM tmplist WHERE user = '$userid'");
              if ($rp->num_rows==0) {
                echo '<tr><td colspan="3">no record</td></tr>';
              }else{
                while ($r=$rp->fetch_assoc()) {
                  $itemid=$r['item'];
                  $src="sample.php?item=$itemid";
                  $ss1='<tr><td><time datetime="'.$r['day'].'">'.$r['day'].'<time></td><td><a href="'.$src.'" target="_blank">'.$r['title'].'</a></td><td>'.$r['price'].'</td></tr>';
                  echo $ss1;
                }
              }
            ?>

          </table>        
        </div>
      </div>
      <!--end--><div class="container-end"></div>
    </div>


  <!--4 go up menu-->
    <div class="goup">
      <button type="button" class="dropbtn"><a href="#top"><img src="images/goup.png" alt="TOP" height="40" width="40"/><br/>TOP</a></button>
    </div> 

  </body>
  
  <footer id="copyright"align="center" style="padding: 10 20 10 20px; min-width: 700px;overflow-x: hidden;">
    <span id="de" style="float: left;">CLOCK</span>
    &copy:DC Student Secondhand Exchange Platform 2019
    <span id="stay" style="float: right;">CLOCK</span>
  </footer>

</html>