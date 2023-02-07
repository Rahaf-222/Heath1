<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <header class="header">

    

        <nav class="navbar">
            <a href="./index.html">home</a>
            <a href="./book.html">Book</a>
            <a href="./search.html">Search</a>
          
      
        </nav>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
    </header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Book Now</h3>
    </div>
</section>
<section class="book" id="book">

   

    <div class="row">

        <div class="image">
            <img src="image/doc-3-r.png" alt="doctor" width="300px" height="500px">
        </div>

        <form action="book.php" method="post">
            <h3>book appointment</h3>
            <input type="text" placeholder="your name" name="name" class="box">
            <input type="number" placeholder="your number" name="phone" class="box">
            <input type="email" placeholder="your email" name="email" class="box">
            <select name="teeth" class="box" >
              <option value="teeth">teeth</option>
              <option value="Dermatology">Dermatology</option>
              <option value="Nose">Nose, ear and throat</option>
              <option value="Esoteric">Esoteric</option>
            </select>
            <select name="doctor" class="box">
                <option value="Doctors">Doctors</option>
                <option value="Mohammad">Mohammad</option>
                <option value="Khaled">Khaled</option>
                <option value="Ali">Ali</option>
                <option value="yasser">yasser</option>
              </select>
              <input type="date" name="date" class="box">
            <input type="submit" value="book now" name="send" class="btn">
        </form>
        

    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="book.html""> <i class="fas fa-chevron-right"></i> book an appointment </a>
            <a href="search.html"> <i class="fas fa-chevron-right"></i> Search an Doctors</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +966552727630 </a>
            <a href="#"> <i class="fas fa-phone"></i> +966552727630</a>
            <a href="#"> <i class="fas fa-envelope"></i> Rahaf.dhafer44@gmail.com</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Saudi Arabias </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         
        </div>

    </div>

    <div class="credit"> created by <span>Team</span> | all rights reserved </div>

</section>
</body>
</html>

<?php
        $host="localhost";
        $user = "root";
        $password = "rootroot";
        $dbName ="hospital";
        $conn=mysqli_connect($host, $user, $password,$dbName);

            
            $pName = $_POST['name'];
            $pPhone = $_POST['phone'];
            $pEmail = $_POST['email'];
            $pTeeth = $_POST['teeth'];
            $pDoctor = $_POST['doctor'];
            $pDate = $_POST['date'];
            $pSend = $_POST['send'];

        if($pSend){    
             $query="INSERT INTO patient(name,phone,email,teeth,doctor,date)VALUE('$pName','$pPhone','$pEmail','$pTeeth','$pDoctor','$pDate','$pSend')";
             $result=mysqli_query($conn,$query);
             echo "<p style='color:green'>"."the booking is done ."."</p>"; 
        }
        else{
            echo "<p style='color:red'>"."there is error try again ."."</p>"; 
        }



        
        ?>