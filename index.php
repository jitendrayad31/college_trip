<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];
        
        $servername = "localhost";
         $username = "root";
         $password = "";
         $database = "clgdata";

         // create a connection 
         $con = mysqli_connect($servername, $username, $password, $database);
    
         // ie if connection was not successful    
        if(!$con){
            // die("sorry we faild to connect ". mysqli_connec_error());
        }
        else{
            // echo "connection was successful";
        }
        // submit these to a database
          
        // sql query to be executed
        $sql = "INSERT INTO `clgdata`. `trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc')";
        $result = mysqli_query($con, $sql);

     
        if($result){
            // echo '<div class="alert alert-success alert-dismissiable fade show" role="alert">
           
            // <button type = "button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
             
        }
        else{
            echo "The record was not inserted successfully! because of this error --->".
             mysqli_error($con);
            
        }

    }

?>
    
    <div class="container">
        <h1>Welcome to CIITM us trip form</h1>
        <p>Enter you details and submit this form to conform your participation in the trip</p>
        <p class="submitmsg">thanks for submitting your form. We are happy to see you joining us for the trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender"> 
            <input type="email" name="email" id="email" placeholder="Enter your email">
             <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter your information here"></textarea>
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>