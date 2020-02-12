<?php



//databse connection

// $conn = new mysqli('localhost','root','','candidate_details');
// if($conn->connect_error){
//   die('Connection Failed');
//
// }
// else
// {
//   $stmt = $conn->prepare ("insert into profile(Fullname,Age,Gender,Description,Address)values(?,?,?,?,?)");
//   $stmt->bind_param("sisss",$fullname,$age,$gender,$description,$address);
//   $stmt->execute();
//   echo "Registeration Success";
//   $stmt->close();
//   $conn->close();
// }

$con = mysqli_connect("localhost", "root", "", "candidate_details") or die(mysqli_error($con));

$fullname=$_POST['fullname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$description=$_POST['description'];
$address=$_POST['address'];


$user_reg_query = "insert into profile(Fullname,Age,Gender,Description,Address) values ('$fullname', '$age', '$gender','$description','$address')";
$user_reg_submit = mysqli_query($con, $user_reg_query) or die(mysqli_error($con));
echo "User successfully inserted";
?>
