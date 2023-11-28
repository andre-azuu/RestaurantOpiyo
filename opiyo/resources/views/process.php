<?php

/**
 * Handle all database operations
 */

if(isset($_POST) && $_POST["submit"] == "submit"){
    //User defined variables 
   // var_dump($_POST);


   //User defined variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $postalCode = $_POST['postalCode'];
    $fullPhoneNo = '+'.$postalCode.$phone;
    $today = date('Y-m-d H:i:s');

    //Validation

    //store data in database table
    
    //make database connection
    $db = mysqli_connect('localhost','root','','opiyo');

    // if (mysqli_connect_errno()){
    //     echo "Database connection failed" . mysqli_connect_errno();
    //     echo "What an L";
   


    $sql = "INSERT INTO `contact`(`name`,`email`,`country`, `contact_date`,`phone`, `message`) 
    VALUES ('$name','$email','$country','$today', '$phone', '$message')";
    

//Insert data 
mysqli_query($db,$sql);

echo "Message has been recieved";
echo "<a href=welcome.blade.php > Go to homepage ";


}else{
    header('Location:index.php');

}