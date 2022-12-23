<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

       
        $sn = $_POST['sn'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $visa = $_POST['visa'];
        $dob = $_POST['dob'];
        $experience = $_POST['experience'];
        $acm = $_POST['acm'];
        $catagory = $_POST['catagory'];
        $status = $_POST['status'];
        $img = $_POST['img'];

        if($sn != ""  &&  $fname != "" && $lname != "" && $address != ""  &&  $email != "" && $location != ""&& $visa != ""  &&  $dob != "" && $experience != "" && $acm != ""  &&  $catagory != "" && $status != "" && $img != " "){

        try {

            $sql = "INSERT INTO consultantdetails (`sn`, `fname`, `lname`, 'address', 'email', 'location', 'visa', 'dob', 'experience', 'acm', 'catagory', 'status', 'img') VALUES (`$sn`, `$fname`, `$lname`, '$address', '$email', '$location', '$visa', '$dob', '$experience', '$acm', '$catagory', '$status', '$img')";
        } catch(Exception $e) {
            echo 'Error Message: ' .$e->getMessage();
          }
          
        
                    if (mysqli_query($conn, $sql)) 

                header("location: index.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Details cannot be empty!";
        }
?>