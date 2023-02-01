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
        width: 890px;
        font-size: 20px;
    }
    #tbl th{
        background-color: silver;
        color: black;
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

    
    
    ?>
    <div id='mother'>
    <form method='POST'>
        <aside>
            <div id="div">
            <img src ='https://w7.pngwing.com/pngs/957/974/png-transparent-hospital-logo-clinic-health-care-physician-business-thumbnail.png' alt="icon " width=200px>
            <h3> for booking </h3>
            <label> Num:</label><br>
            <input type="text" name="id" id='id'><br>
            <label> Name:</label><br>
            <input type="text" name="name" id='name'><br>
            <label>  Phone:</label><br>
            <input type="text" name="phone" id='phone'><br>
            <label> Address:</label><br>
            <input type="text" name="address" id='address'><br><br>
            <button name="add">add</button>
            <button name="del">delete</button>

            </div>
        </aside>
        <main>
            <table id='tbl'>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            </tr>
            <?php
            while ($row= mysqli_fetch_all($res)){
                echo "<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['name']."</td>";
                echo"<td>".$row['phone']."</td>";
                echo"<td>".$row['address']."</td>";
                echo"</tr>";

            }
            ?>
            </table>
        </main>
    </form>
</body>
</html>
