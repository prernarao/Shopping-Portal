<?php include("auth.php"); ?>
<!DOCTYPE html>
<html>
<title>Men's Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  li {
      float:left;
  }
  .bottomlist {float: left;}
  li a, .dropbtn {
      color: gray;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
  }
  li a:hover, .dropdown:hover .dropbtn {
    /*  background-color: lightgray;*/
  }
  li.dropdown {
  }

  .bodyclass{
      padding-left: 100px;
  }


  .bot li{
      text-indent: -120px;
      padding-left : 100px;
      padding-right: 40px;
      text-align: left;
  }
  .bot1 li{
      text-indent: 30px;
      padding-left : 30px;
      padding-right: 40px;
      text-align: left;
  }
  body{background-image:url("bg2.jpg");color:white;}
  .dropdown-content {
      display: none;
      position: relative;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 99;
  }
  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
  }
  .dropdown-content a:hover {background-color: #f1f1f1}
  .dropdown:hover .dropdown-content {
      display: block;
  }


  .main {
      margin-top: 1000px; /* Add a top margin to avoid content overlay */
      z-index: -1;
  }


  .dispp{position: relative;
      align-items: center;
      padding-right: 100px;
      padding-left: 100px;
      padding-top: 40px;
  }
  .btn{border:none; padding:12px 24px!important;
    display:inline-block;
    padding:8px 16px;text-decoration: none;
    vertical-align:middle;
    font-size: 18px;
    color:white;background-color:black;
    text-align:center;}
  .btn:hover{color:black!important;background-color:#ccc!important}
  body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" type="text/css" href="stuff.css">
</head>
<body >

<!-- Sidebar/menu -->
<div class="nav">

    <ul>
	<li>
      <big><strong><a class="active" href="proj.php">HOME</a></big></strong></li>
      <li class="dropdown">
        <a href="men.php" class="dropbtn">MEN</a>
        <div class="dropdown-content">
          <a href="mt.php?name=MT">T-Shirts</a>
          <a href="ms.php?name=MS">Shirts</a>
          <a href="mb.php?name=MB">Bottoms</a>
          <a href="mspo.php?name=MSPO">Sportswear</a>
          <a href="ma.php?name=MA">Accessories</a>
          <a href="mf.php?name=MF">Footwear</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="women.php" class="dropbtn">WOMEN</a>
        <div class="dropdown-content">
            <a href="we.php?name=WE">Ethnicwear</a>
            <a href="wt.php?name=WT">Tops</a>
            <a href="ws.php?name=WS">Skirts and Dresses</a>
            <a href="wb.php?name=WB">Bottomwear</a>
            <a href="wa.php?name=WA">Accessories</a>
            <a href="wf.php?name=WF">Footwear</a>
        </div>
      </li>
      <li class="dropdown">
        <a class="dropbtn">FOOTWEAR</a>
        <div class="dropdown-content">
          <a href="wf.php?name=WF">Women's Footwear</a>
          <a href="mf.php?name=MF">Men's Footwear</a>
        </div>
      </li>
      <li class="dropdown">
        <a class="dropbtn">ACCESSORIES</a>
        <div class="dropdown-content">
          <a href="wa.php?name=WA">Women's Accessories</a>
          <a href="ma.php?name=MA">Men's Accessories</a>
        </div>
      </li>
      <li  id="cart">

        <a href="cart.php">CART</a>
    </li>
      <li style="float:right;" >

        <a href="logout.php"  >LOGOUT</a>
      </li>
  </ul>
</div>

<!-- Top menu on small screens -->

<div class="heading">
  <br>
	<a class="active" href="proj.php" style="text-decoration:none;"><h1><center><img src="fontname.png"></h1></a></center>
</div>


<!-- Overlay effect when opening sidebar on small screens -->
<!-- <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div> -->

<!-- !PAGE CONTENT! -->


  <!-- Push down content on small screens -->
  <!-- <div class="w3-hide-large" style="margin-top:83px"></div> -->



  <!-- Image header -->

  <div class="dispp" >
    <img src="whpkid.jpg" style="width:100%">
    <div style="position:absolute;left:0;top:0;padding:24px 48px 0px 10%">
      <h1 style="color:white;text-shadow:0 4px 4px 0;font-size:64px">New arrivals</h1>
      <h1 style="color:white;text-shadow:0 4px 4px 0;">COLLECTION 2017</h1>
      <p><a href="#options" class="btn">SHOP NOW</a></p>
    </div>
  </div>

<br><br>

  <!-- Product grid -->
  <center>
  <div style="padding:0 8px">
    <div class="bodyclass" style="display:inline-block;">
        <a href="mt.php?name=MT"><img src="MT/mt1.jpg" style="box-shadow: 0 4px 10px 0;width:250px"></a>
        <p>T-Shirts</p>
    </div>
    <div class="bodyclass" style="display:inline-block;">
        <a href="mb.php?name=MB"><img src="MB/mb1.jpg" style="box-shadow: 0 4px 10px 0;width:250px"></a>
        <p>Bottoms</p>
    </div>
    <div class="bodyclass" style="display:inline-block;">
        <a href="mf.php?name=MF"><img src="MF/mf1.jpg" style="box-shadow: 0 4px 10px 0;width:250px"></a>
        <p>Footwear</p>
    </div>
  </div>
  <div>
    <div class="bodyclass" style="display:inline-block;">
        <a href="ma.php?name=MA"><img src="MA/ma1.jpg" style="box-shadow: 0 4px 10px 0;width:250px"></a>
        <p>Accessories</p>
    </div>
    <div class="bodyclass" style="display:inline-block;">
        <a href="mspo.php?name=MSPO"><img src="MSPO/ms1.jpg" style="box-shadow: 0 4px 10px 0;width:250px"></a>
        <p>Sportswear</p>
    </div>
    <div class="bodyclass" style="display:inline-block;">
        <a href="ms.php?name=MS"><img src="MS/ms1.jpg" style="box-shadow: 0 4px 10px 0;width:250px"></a>
        <p>Shirts</p>
    </div>

  </div>
</center>


<br><br><br>
  <!-- Footer -->
<footer>
    <ul>
    <a href="faqpage.html" style="text-decoration:none;">USEFUL LINKS</a>
    <ul class="bot">
      <li><a href="faqpage.html">Contact Us</a>
      <li><a href="faqpage.html">FAQ</a>
      <li><a href="faqpage.html">T & C</a>
      <li><a href="faqpage.html">Terms Of Use</a>
      <li><a href="faqpage.html">Track Orders</a>
      <li><a href="faqpage.html">Shipping</a>
      <li><a href="faqpage.html">Cancellation</a>
      <li><a href="faqpage.html">Returns</a>
    </ul>
    </ul>
</footer>
</body>
</html>
