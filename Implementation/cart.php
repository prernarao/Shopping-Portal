<?php include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/stuff.css">
    <link rel="stylesheet" type="text/css" href="css/cartcss.css">
    <style>

      body {margin:0;
    	/* background-image:url("bg2.jpg"); */
      background:black;

    }

    .shopping-cart {
      width: 90%;
      height: 160px;
      margin:  auto;
      background: #FFFFFF;
      border-radius: 6px;
      display:flex;
      flex-direction: column;
    }
    .botbut{padding: 0 0 0 0;
         width:100px;
         background-color: red;
         color: white;
         position: absolute;
        left:40%;
    }
      .navbar {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #d9ff89;
      }
      li {
          float: left;
      }
      .bottomlist {float: right;}
      li a, .dropbtn {
          display: inline-block;
          color: gray;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }
      li .dropdown:hover .dropbtn {
          background-color: red;
      }
      li.dropdown {
          display: inline-block;
      }
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
      .nav {
          /*overflow: hidden;*/
          position: relative; /* Set the navbar to fixed position */
          top: 0; /* Position the navbar at the top of the page */
          width: 100%; /* Full width */
          z-index: 100;
      }
      .main {
          margin-top: 1000px; /* Add a top margin to avoid content overlay */
          z-index: -1;
      }
      .some {
        /* background-image: url("bg2.jpg"); */
        max-width:10000px;
        max-height: 10000px;

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
        a{
            text-decoration: none;
        }

        .total{
            /*width:90%;*/
            text-align: right;
            padding-right: 15px;
            padding-top: 15px;
            border-top: 1px solid grey;

            position: relative;
            font-size: 18px;
        }


    </style>

    <link rel="stylesheet" href="css/w3.css">
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
    </div>


    <div class="heading">
      <br>
    	<a class="active" href="proj.php" style="text-decoration:none;"><h1><center><img src="images/fontname.png"></h1></a></center>
    </div>
    <div id = 'sc' class="shopping-cart">
        <div class="title" style="font-size:20px;">
          CART
        </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";
$conn =mysqli_connect($servername,$username,$password,$dbname);
$table=$_SESSION['username'];

$query  = "SELECT * FROM $table";
$get=mysqli_query($conn,$query);
if (mysqli_num_rows($get)==0){
    echo "<b><p id = 'empty' style='color:red;position:relative;left:46%;font-size:18px;'>EMPTY CART!</p></b>";
}
else{
    $total=0;
    while($row = mysqli_fetch_assoc($get))
        {   $id=$row['PRODUCTID'];
            $querymain="SELECT * FROM `TABLE 1` WHERE PRODUCTID LIKE '".$id."'";
            $getmain=mysqli_query($conn,$querymain);
            $rowmain = mysqli_fetch_assoc($getmain);
            echo "<div class='item'>";
                echo "<button >";
                    echo "<a class='delete-btn' href='docart.php?do=remove&id=".$row['ID']."'>x</a>";
                echo "</button>";

                echo "<div class='image'>";
                    echo "<img style='height:98px; padding-right:10px;' src='".$rowmain['IMGSRC']."'>";
                echo "</div>";

                echo "<div class='description'>";
                    echo "<span>".$rowmain['ITEM']."</span>";
                    echo "<br>";
                    // echo "<span>".$rowmain['DESCRIPTION']."</span>";
                    if(!$row['SIZE']==''){
                        echo "<span>SIZE : ".$row['SIZE']."</span>";
                    }
                echo "</div>";

                echo '<div class="quantity">';
                    echo "<a href='docart.php?do=inc&id=".$row['ID']."&count=".$row['COUNT']."'><button class='plus-btn' >+</button></a>";
                    echo "<input type='text' disabled='true' name='name' value='".$row['COUNT']."'>";
                   // echo "<span>".$row['COUNT']."</span>";
                   echo "<a href='docart.php?do=dec&id=".$row['ID']."&count=".$row['COUNT']."'><button class='minus-btn' >-</button></a>";
                echo'</div>';
                $price = $rowmain['DISCOUNTEDPRICE']*$row['COUNT'];
                $total+=$price;
                echo "<div class='total-price' style='width:200px'>Rs. ".$price."</div>";
            echo "</div>";




        }
        echo "<br><div class='total' style='padding-left:15px;'>";
            echo "<a href='docart.php?do=all&flg=0'><button style='float:left; width:100px; font-size:14px' type='button' name='button'>";
            echo "Remove All";
            echo "</button></a>";
            echo "<a href='docart.php?do=all&flg=1'><button class='botbut'>BUY NOW</button></a>";
            echo "TOTAL PRICE : Rs. ".$total."";
        echo "</div>";

        echo "<br>";


}
$get=mysqli_query($conn,$query);
 ?>
</div>

<ul style="color:white; list-style-type:none">
<a href="faqpage.html">USEFUL LINKS</a>
<ul class="bot" style=" list-style-type:none">
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
    var x=document.getElementsByClassName('item');
    var l=x.length;
    var k=document.getElementById('sc');
    var z=(145+120*l)+'px';
    k.style.height=z;
</script>
</body>
</html>
