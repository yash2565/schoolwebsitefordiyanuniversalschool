<?php 
   $host="localhost";
   $username= "root";
   $password= "";
   $database = "registration"; // use yours data base
    //creating databse cannection
   $con=mysqli_connect($host,$username,$password,$database );

   if(!$con)
   {
       die("connection failed:". mysqli_connect_error());
   }
   
     ?>