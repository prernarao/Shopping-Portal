<?php include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stuff.css">
<style>
    a{
        text-decoration: none;
    }

.bot li{
    text-indent: -120px;
    padding-left : 100px;
    padding-right: 40px;
    text-align: left;
    display: inline-block;
    text-decoration: none;
    list-style-type:disc;
    color:grey;
}

.bot1 li{
    text-indent: 30px;
    padding-left : 30px;
    padding-right: 40px;
    text-align: left;
    list-style-type: none;
    text-decoration: none;
}
  body {margin:0;
	background-image:url("bg2.jpg");
    color: white;
  }


  .main {
      margin-top: 1000px; /* Add a top margin to avoid content overlay */
      z-index: -1;
  }

  .men{
    color:#000000;position:relative;top:70%;left:750px;
    border-color:#FFFFFF;border-style: solid;
    border-width: 2px;;background:#FFFFFF;
  }
  .women{
    color:#000000; text-align: center;position:absolute;top:70%;left:450px;
    border-color:#FFFFFF; border-style: solid; border-width: 2px;;background:#FFFFFF;
    }

</style>

<link rel="stylesheet" href="w3.css">
</head>
<body>
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
<br>

<div class="heading">
  <br>
	<a class="active" href="proj.php" style="text-decoration:none;"><h1><center><img src="fontname.png"></h1></a></center>
</div>
<center>
<div class="some">
  <img src="wp2.jpg" style="max-width:95%;">
</div></center>


<br><br><br>
<center>
<div class="content1" style="height:25%;width:85%;position:relative;">

<a href="men.php"><img class="mySlides" src="p1.jpg" style="width:100%; height:100%;"></a>
<a href="women.php"><img class="mySlides" src="p2.jpg" style="width:100%; height:100%;"></a>

<a class="w3-btn-floating" style="position:absolute;top:45%;left:7%" onclick="plusDivs(-1)"><</a>
<a class="w3-btn-floating" style="position:absolute;top:45%;right:7%" onclick="plusDivs(1)">></a>

</center>
</div>
</div>
<br><br><br>
<center>
<section class="w3-row-padding">
  <span class="w3-half">
    <a href="men.php" style="text-decoration:none;"><h2>MEN</h2></a>
    <a href="men.php"><img src="botguy.jpg" alt="Random Name" style="width:50%"></a>

	<ul class="bot1" style='position:relative;left:28%'>
		<li><a href="mt.php?name=MT">T-Shirts</a><br></li>
		<li><a href="ms.php?name=MS">Shirts</a><br></li>
		<li><a href="mb.php?name=MB">Bottoms</a><br></li>
		<li><a href="mspo.php?name=MSPO">Sportswear</a><br></li>
		<li><a href="ma.php?name=MA">Accessories</a><br></li>
		<li><a href="mf.php?name=MF">Footwear</a></li>
	</ul>
</span>
  <span class="w3-half">
    <a href="women.php" style="text-decoration:none;"><h2>WOMEN</h2></a>
    <a href="women.php"><img src="botgirl.jpg" alt="Random Name" style="width:50%"></a>
	<ul class="bot1" style='position:relative;left:29%'>
    <li><a href="we.php?name=WE">Ethnicwear</a><br></li>
		<li><a href="wt.php?name=WT">Tops</a><br></li>
		<li><a href="wb.php?name=WB">Bottomwear</a><br></li>
		<li><a href="ws.php?name=WS">Skirts and Dresses</a><br></li>
		<li><a href="wa.php?name=WA">Accessories</a><br></li>
		<li><a href="wf.php?name=WF">Footwear</a></li>
  </ul>
</span>
</section>
</center>
<br><br><br><br>

<ul>
<a href="faqpage.html">USEFUL LINKS</a>
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
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

</body>
</html>
