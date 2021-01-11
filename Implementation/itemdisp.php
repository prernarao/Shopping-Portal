<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Project";
    $conn =mysqli_connect($servername,$username,$password,$dbname);
    $_SESSION['curr']=$_SERVER["REQUEST_URI"];


    function display(){
        global $conn;
        $name=$_GET['name'];
        $query  ="SELECT * FROM `TABLE 1` WHERE TEGORY LIKE '".$name."'";
        $get=mysqli_query($conn,$query);
        $i=1;
        if (mysqli_num_rows($get)==0){
            echo 'FAILURE';
        }
        else{
            while($row = mysqli_fetch_assoc($get)) {


                if($i%8==1)
                    echo "<div class='mySlides'>";

                echo '<div class="blk" id="myBtn'.$i.'" onclick="blk(event,'.$i.')">';
                    echo '<div id="myModal'.$i.'" class="modal">';
                        echo '<div class="modal-content" style="align:center; position:relative;">';
                            echo '<div id="desc'.$i.'">';
                            echo '<p id="image'.$i.'" style="text-align:center;"><img id="prodpic'.$i.'" src="'.$row['IMGSRC'].'" style="height:70%;width:100%;"></p>';
                                echo '<p id="prodtitle'.$i.'" style="color:white;">'.$row['ITEM'].'</p>';
   			                    echo '<p id="prodabout'.$i.'" style="color:white">'.$row['DESCRIPTION'].'</p>';
   			                    echo '<pre id="prodprice'.$i.'" style="color:white">PRICE: <del style="color:red;">'.$row['MRP'].'</del>   <span style="color:lime;">'.$row['DISCOUNTEDPRICE'].'</spam></pre>';
                            echo '<form method="post" action="do.php?id='.$row['PRODUCTID'].'">';
                            if($row['TEGORY']!='MA' && $row['TEGORY']!='WA')
                            {

                            echo '<span id="size'.$i.'" style="color:white;">SIZE ';
                                echo '<select name="size" style="color:black">';
                                echo '<option value="XS">XS</option>';
                                echo '<option value="S">S</option>';
                                echo '<option value="M">M</option>';
                                echo '<option value="L">L</option>';
                                echo '<option value="XL">XL</option>';
                                echo '</select> </span>';
                            }
                            echo  '<input type="submit" value="ADD TO CART" id="confirm'.$i.'" style="float:right;"></input>' ;
                            echo '</form>';
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    echo '<div class="container">';
                        echo '<img src="'.$row['IMGSRC'].'">' ;
                        echo '<div class="bottom-left"><del>Rs. '.$row['MRP'].'</del></div>';
                        echo '<div class="bottom-right">Rs. '.$row['DISCOUNTEDPRICE'].'</div>';
                        echo '<div class="centered">'.$row['ITEM'].'</div>';
                    echo "</div>";
                echo "</div>";

                if($i%8==0 && $i!=1)
                    echo "</div>";
                $i+=1;
            }
        }
    }
 ?>
