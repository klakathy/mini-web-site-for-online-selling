<?php
  echo'
  <!--1 top menu part-->
    <!--logo--><img src="images/logo1.jpg" alt="image loading failure" id="topmenulogo" onmouseover="menu_show()" onclick="menu_show()" onmouseout="menu_close()" />
    <div class="topbar">
      <div class="topbar1">
    <!--1-1 main menu-->
        <div class="godown" onmouseover="menu_show()" onclick="menu_show()" onmouseout="menu_close()" >
          
          <button type="button" class="dropbtn" style="padding: 23 19px;z-index: 2;">
            <img src="images/logo2.png" height="25"/>
          </button>    
         
          <div id="main_menu" class="godown-menu">
            <hr/><!--Home-->
              <a href="Homepage.php" style="font-weight: 800;">HOME</a>
            <hr/><!--Sale-->
              <h3 style="padding-right: 5%;">&bull; &nbsp;Sale</h3>
              <a href="list_housing.php">Housing/Apartment Rent</a>
              <a href="list_automotive.php">Automotive</a>
              <a href="list_books.php">Books</a>
              <a href="list_appliance.php">Appliances/Electronics</a>
            <hr/><!--want-->
              <h3 style="padding-right: 5%;">&bull; &nbsp;Want</h3>
              <a href="list_want.php">Want Lists</a>
              <a href="posting.html">Creat posts</a>
            <hr/><!--about/contact-->
              <span class="span_a" onclick="opencontact(1)">About Us</span>
              <span class="span_a" onclick="opencontact(2)">Contact Us</span>
            <hr/><!--copyright-->
              <a href="#copyright" style="border-top: 2;">Copyright</a>
          </div>
        </div>
         
    <!--1-2 search function still on working-->
        <div class="topbarsearch">
          <form name="search_on_list" action="search.php" target="_blank" onsubmit="return search_working()" method="post">
            <select name="select_search_list">
              <option value="3" selected="selected">Housing</option>
              <option value="2">Automoive</option>
              <option value="1">Books</option>
              <option value="4">Appliances</option>
              <option value="5">Want</option>
            </select>
            <input type="text" name="search_text" placeholder="Search something.."/>
            <input type="submit" name="search_submit" value=""/>
          </form>
        </div>

    <!--1-3 user info & contact icon-->
        <div class="topbaricon" style="">
          <a href="ABC.php" style="float: left;">
            <img src="images/photo_ABC.jpg" border="3" style="height: 47px;margin-top:8px;" alt="user: ABC" title="go to ABC page" />
          </a>
          <a href="index.html">
            <img src="images/logout.png" border="3" alt="Log Out" title="Log out and return to login page"/>
          </a>  
          <span class="span_a" onclick="opencontact(2)" style="float: right;">
            <img src="images/contact.png" alt="contact" title="contact us" border="3" style="height: 33px; padding: 3 3px;" />
          </span> 
        </div>    
      </div><!--for topbar1-->
      
    <!--1-4 change color-->
      <div class="topbar2">
      <!--default showing colors + random (left)-->
        <form name="colorform" target="iframe_nospace" onsubmit="remember_c()">
          <span style="display: inline-block;float: left; padding: 7 40 7 30px;">change page color here </span>
              <script type="text/javascript">
                wcolor(255,255,255);
                wcolor(172,194,232);
                wcolor(130,180,255);
                wcolor(81,122,167);
                wcolor(19,47,88);
                wcolor(55,71,159); 
                wcolor(25,200,170);          
              </script>
            <!--this is the default color-->
          <label class="color_container">
            <input type="radio" name="color_page" value="9"checked="checked" onclick="change_c(40,40,40)" />
            <span class="color_mark" style="background-color:rgb(40,40,40);"></span>
          </label>
            <!--this is random color part-->
          <input type="button" name="color_random" value="random" style="float: left;" onclick="change_c_random()"/>           
          <label class="color_container">
            <input type="radio" name="color_page" value="10" />
            <span id="color_r_and_c" class="color_mark" style="background-color:rgb(40,40,40);"></span>
            <input type="color" name="inputcolor_random" value="#000000" oninput="change_c_inputcolor(this)" />
          </label>

      <!--customize part (right)-->
          <div style="position: absolute; right: 15px;top: 0;" >
            customize R<input type="text" name="cr0" maxlength="3" />
            G<input type="text" name="cg0" maxlength="3" />
            B<input type="text" name="cb0" maxlength="3" />
            <input type="button" name="color_submit" value="OK" style="margin-left:0;" onclick="change_c_inputtext(cr0.value,cg0.value,cb0.value)"/>     
            <input type="submit" name="color_default_set" value="Remember" style="padding: 2px;"/>

            <!--iframe used for no changing submit of form(color/contact us)--><iframe name="iframe_nospace" src="#" style="width: 0px;height: 0px;"></iframe>         
          </div>
        </form>      
      </div><!--for topbar2-->
    </div><!--for topbar-->

    <!--1-5 contact div-->
    <div id="window0" class="window0">
      <div class="window0-content" align="left">
        <span class="close" onclick="closecontact()">&times;</span>
        <section id="about_section">
          <h2>About Us</h2>
          <p style="font-size: 100%">
            This web site is designed for a course.
            <br/><br/>This project is a resale website, named JHU Student Second-hand Exchange Platform, particularly designed for JHU students. It provides platforms for students to sell and buy second-hand things from each other. This website is launched as a descendent of the university site, that only students or alumni from JHU registered in our database are served as customers. We do not sell or buy any products, but users are able to publish the items they no longer use or they want to buy in JHU SSEP. No online transactions will be made via the platform, users are able to contact for further information per methods provided by the publisher, and are encouraged to check the items and finish the transaction by themselves.
          </p>
        </section>
        <section id="contact_section">
          <h2>Contact Form</h2>
          <form name="form_contact" target="iframe_nospace" onsubmit="return submitcontact()">
            <h3>Name<sup>*</sup><input type="text" size="40" name="name_contact" id="name_contact" required="required"/></h3>
            <h3>Email<sup>*</sup><input type="text" size="40" name="email_contact" id="email_contact" required="required"/></h3>
            <h3>Phone (Optional) <input type="text"size="21"  name="phone_contact" id="phone_contact" </h3>
            <h3>Message<sup>*</sup></h3>
            <br/><textarea name="message_contact" style="width: 90%;" rows="10" required="required"></textarea>
            <br/><input type="submit" value="Submit"/>
          </form>
        </section>        
      </div>
    </div>

    
    ';
?>

