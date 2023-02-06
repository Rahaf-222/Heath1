<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
    body{
        background-color: whitesmoke;
    }
    #mother{
        widwidth: 100%;
        font-size: 20px;
    }
    main{
        float: right;
        border: 1px solid gray ;
        padding: 5px;
    }
    input{

        padding: 4px;
        border:2px solid black ;
        text-align: center;
        font-size: 17px
        font-family: 'Roboto', sans-serif;

    }
    aside{
        text-align: center;
        width:300px;
        float:left;
        border: 1px solid black;
        paddpadding: 10px;
        font-size:20px;
        background-color: silver;
        color:white;
    }
    #tbl{
    width: 100%;
    text-align: center;
    border-collapse: collapse;
    font-size: 20px;
    }
    #tbl th{
        background-color: #00a9b0;
        color: #fff;
        font-size:20px;
        padding: 10px;
    }
    aside button{
        width: 190px;
        padding: 8px;
        margin-top: 7px ;
        font-size:17px ;
        font-family: 'Roboto', sans-serif;
        font-font-weight: bold;


    }
    </style>
    <title>Document</title>
</head>
<body>
<?php
include("header.php");


?>
    
    
    <br></br>
    <br></br>
    <br></br>
   

    <table id="tbl">
    <th>id</th>
    <th>name</th>
    <th>phone</th>
    <th>email</th>
    <th>teeth</th>
    <th>doctor</th>
    <th>date</th>


    </table>
    <?php
    $host="localhost";
    $user = "root";
    $password = "rootroot";
    $dbName = "hospital";
    $conn=mysqli_connect($host, $user, $password,$dbName);
    

    $query = "SELECT * FROM patient";
    $result = mysqli_query($conn,$query);

    if ($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] . "</td><td>" . $row['teeth'] . "</td><td>" . $row['doctor'] . "</td><td>" . $row['date'] . "</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "يوجد خطا ماء";
    }
    ?>
 
           
    </main>
    </form>
</body>
</html>
  