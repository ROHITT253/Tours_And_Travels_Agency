<?php
$connection=mysqli_connect('localhost','root','','book_db');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_POST['location'];
    $guests=$_POST['guests'];
    $arrivals=$_POST['arrivals'];
    $leaving=$_POST['leaving'];

    $status=mysqli_query($connection,"insert into book_form(name, email, phone, address,location,guests,arrivals,leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')");

if($status)
{
    echo"Registration Successful";
    header("location:home.html");
}
else
{
    echo"Error in SQL";
    echo mysqli_error($conn);
}






?>