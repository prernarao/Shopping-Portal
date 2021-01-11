<!-- <!DOCTYPE html> -->
<?php include("auth.php"); ?>
<?php require 'itemdisp.php'?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stuff.css">
<style>

body {margin:0;}



.before {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.before span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.before span:after {
  content: '«';
  position: relative;
  opacity: 0;
  top: 0;
  right: 0px;
  transition: 0.5s;
}

.before:hover span {
  padding-left: 25px;
}

.before:hover span:after {
  opacity: 1;
  right: 130px;
}

.after {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  float: right;
}

.after span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.after span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: 0px;
  transition: 0.5s;
}

.after:hover span {
  padding-right: 25px;
}

.after:hover span:after {
  opacity: 1;
  right: -30px;
}


</style>

<link rel="stylesheet" href="w3.css">
</head>
<body>

<div class="nav">

    <ul>
      <li><big><strong><a class="active" href="proj.php">HOME</a></big></strong></li>
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
<div class="sidebar">
<ul>
    <li><a  href="mt.php?name=MT">T-Shirts</a></li>
    <li><a href="ms.php?name=MS">Shirts</a></li>
    <li><a href="mb.php?name=MB">Bottoms</a></li>
    <li><a class="active" href="mspo.php?name=MPSO">Sportswear</a></li>
    <li>  <a href="ma.php?name=MA">Accessories</a></li>
    <li><a href="mf.php?name=MF">Footwear</a></li>
</ul>
</div>
<div class="main">
<!-- <p><strong>Note:</strong> We use href="#" for test links. In a real web site this would be URLs.</p> -->
<?php
    display();
?>
<button class="before"style="vertical-align:middle" onclick="plusDivs(-1)"><span>Previous</span></button>
<button class="after" style="vertical-align:middle" onclick="plusDivs(1)"><span>Next</span></button>

</div>

<script src='script.js' type="text/javascript"></script>


</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black_fixed by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:36 GMT -->
</html>
