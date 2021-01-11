<?php
    session_start();
    $do= $_GET['do'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Project";
    $conn =mysqli_connect($servername,$username,$password,$dbname);
    $table=$_SESSION['username'];
    $target='cart.php';
    switch($do){
        case "remove":
        $id= $_GET['id'];
        $sql = "DELETE FROM $table WHERE ID='".$id."'";
        break;
        case "inc":
        $id= $_GET['id'];
            $count= $_GET['count'];
            $count+=1;
            $sql="UPDATE $table SET count='".$count."' WHERE ID='".$id."'";
            break;
        case "dec":
            $id= $_GET['id'];
            $count= $_GET['count'];
            $count-=1;
            if($count==0){
                $sql = "DELETE FROM $table WHERE ID='".$id."'";
                break;
            }
            $sql="UPDATE $table SET count='".$count."' WHERE ID='".$id."'";
            break;
        case "all":
            $sql="DELETE FROM $table";
            if($_GET['flg']==1)
                $target='endpage.html';
            break;
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: $target");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
 ?>
