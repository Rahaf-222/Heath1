<?php
        $host = 'localhost';
        $user = "root";
        $pass = '';
        $db='visitor';
        $con = mysqli_connect($host, $user, $pass, $db);
        $res = mysqli_query($con, "select * from visitor");
        #buttton variable
        $id = '';
        $name = '';
        $phone = '';
        $address='';
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        }
        if(isset($_POST['phone'])){
            $phone = $_POST['phone'];
        }
        if(isset($_POST['address'])){
            $address = $_POST['address'];
        }
        $sqls = '';
        if(isset($_POST['add'])){
            $sqls = "insert into visitor value($id,'$name',$phone,'$address')";
            mysqli_query($con, $sqls);
            header("location : home.php");
        }
        if(isset($_POST['del'])){
            $sqls = "delete from visitor where name ='$name'";
            mysqli_query($con, $sqls);
            header("location : home.php");
    
        }
        while ($row= mysqli_fetch_all($res)){
            echo "<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['name']."</td>";
            echo"<td>".$row['phone']."</td>";
            echo"<td>".$row['address']."</td>";
            echo"</tr>";

        }
        ?>
       
               
            
              
                

