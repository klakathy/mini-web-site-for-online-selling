# Online selling website
*A online-selling platform for second-hand items for students based on PHP and MySQL.*  
<br/>
![add icon/screenshot](images/logo1.jpg)  
<br/>

This repository includes a website designed in purpose for JHU students as an online platform to exchange secondhand products. It provides platforms for students to sell and buy second-hand (idle) things from each other. This website is launched as a descendant of the university site, that it does not sell or buy any products. Instead, users can publish the items they no longer need, or they want to buy on the website. No online transactions will be made via the platform, users are able to contact the corresponding buyer/seller for further information per methods provided by the publisher and are encouraged to check the items and finish the transaction by themselves. Univeristy students, professors and officers are targeting users of this website.
<br/><br/>

## Getting started

### Usage
The website can perform successfully through popular web browsers, Chrome, Firefox, Safari, etc. without installation after publishing. On mobile devices is also supported. For more stable usage, Chrome is recommended on mobile side.
<br/>

### Testing data
The website is developed based on MySQL, sample data format can be seen in file [seep_sample.sql](seep_sample.sql). It currently has data of four simulated product for purchase or sell. Other testing data of the project are simulated randomly and are not stored in the database. 
<br/>
Key informations needed for the website contain the product description for each item posted for selling or wanting, users' account information and their saved favorite products, as well as the data recording new posted products. 
Change of SQL platform may result to invalid SQL data format or failure of query functions on the website.
<br/><br/>

### Resources  
  - Environment: HTML, PHP  
  - SQL: MySQL  
  - Other: JavaScript, CSS knowledge is needed for webpage coding, as well.  
    <br/>
  - To setup the website:
    - Import SQL data in file [seep_sample.sql](seep_sample.sql) and complete database account properties setting in `db.properties` in file [login.php](login.php).  
    - Download `.php`, `.html` files, and `css`, `js`, `images`, `iii` folders in targeting folder supporting internet information services.  
    <br/>
  - Architecture Overview  
    PHP is used for backend running.  
    ![code structure](readme_img/structure1.png)  


## Features

![example gif](readme_img/XXXXXXXXXXXXX)  
The website focus on building platform severing for both sides of buyers and sellers. To build a neat and concise structure of the website, the main features are grouped into six categories (respectively in each webpage) for satisfying different needs of users.  
<br/>

## Login page
*For testing purpose, this step can be omitted by mannually typing homepage address, if no sql is setted.*  
![login](readme_img/login1.png)  
<br/>

## User profile page:
![user](readme_img/user1.png)  
Record users' favorites, posts and wants.  
<br/>

## Homepage:
![home](readme_img/home1.png)  
The website allows users to change theme color by selecting or defining the color under top bar.  
<br/>

## List page:
![search](readme_img/search1.png)  
<br/>

## item page:
![item](readme_img/item1.png)  
In each product's page, a sign indicating adding to favorites or already saved is provided.
<br/>

## post page:
![post](readme_img/post1.png)  
When posting an item, users can add or delete multiple pictures to describe the product. After posting successfully, the content will not show in the website until it is reviewed. However, a sample page displaying the stored posted data will appear.
<br/>

- Overview of the product webpages  
  ![website structure](readme_img/structure2.png)  
<br/><br/>

## Documentation

A detailed user manual, explaining usage instructions of different roles of users is uploaded in `readme_img` folder, [manual.pdf](/readme_img/manual.pdf). For further needs, please read the user manual.   
<br/>
