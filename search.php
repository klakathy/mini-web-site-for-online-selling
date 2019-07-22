<?php
$itemname=$_POST['search_text'];
$category=$_POST['select_search_list'];
require_once 'login.php';
$conn = new mysqli($db_hostname,$db_username,$db_password, $db_database);

if ($conn->connect_error)
{
  echo "Failed to connect to MySQL: " . $conn->connect_error;
}

$query="SELECT * FROM itemlist WHERE class='$category' AND name like '%$itemname%'";
$result=$conn->query($query);

?>

<html>
	<head>
		<title>JHU SSEP - Search Result</title>
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
        <h1>Search Result</h1>
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

            <?php            
              if ($result->num_rows==0) {
                echo '<tr><td colspan="3">no record</td></tr>';
              }else{
                while ($r=$result->fetch_assoc()) {
                  $ss1='<tr><td><time datetime="'.$r['date'].'">'.$r['date'].'<time></td><td><a href="'.$r['url'].'" target="_blank">'.$r['name'].'</a></td><td>'.$r['price'].'</td></tr>';
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