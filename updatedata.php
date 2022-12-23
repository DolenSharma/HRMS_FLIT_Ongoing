<!DOCTYPE html>

<?php

require_once "conn.php";
    if(isset($_POST["sn"]) && isset($_POST["name"]) && isset($_POST["rollno"])){
        $sn = $_POST['sn'];
        $name = $_POST['name'];
        $rollno = $_POST['rollno'];
        $sql = "UPDATE studentsdetails SET  'sn' = '$sn', 'name' = '$name', 'rollno' = '$rollno' WHERE id = ". $_GET['id'];
        if (mysqli_query($conn, $sql)) {
                header("location: index.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }
?>

<html lang="en">

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Window</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>
<body>
<section>
        <h1 style="text-align: center;margin: 50px 0;">UPDATE</h1>
        <?php
            require_once "conn.php";
            $sql = "SELECT * FROM consultantdetails WHERE id = ". $_GET["id"];
            if($reqsults = $conn->query($sql)){
                while($row = $reqsults->fetch_assoc()){
                    $id = $row['id'];
                    $sn = $row['sn'];
                    $fname = $row['fname'];
                    $lname = $row['lfname'];
                    $email = $row['email'];
                    $location = $row['location'];
                    $dob = $row['dob'];
                    $experience = $row['experience'];
                    $acm = $row['acm'];
                    $catagory = $row['catagory'];
                    $status = $row['status'];  
                    $img = $row['img'];
                    ?>
                  
        <div class="container">
            <form action="updatedata.php<?php echo $_GET['id']?>" method="post">
               <div class="row">
                        <div class="form-group col-lg-3">
                        <label for="">sn</label>
                        <input type="number" name="sn" id="sn" class="form-control" value="<?php echo $sn ?>" required>
                        </div>
                        <div class="form-group col-lg-4">
                        <label for="">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $fname ?>" required>
                    </div>

                    <div class="form-group col-lg-4">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lname ?>" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Address<Address></Address></label>
                        <input type="text" name="address" id="address" class="form-control" value="<?php echo $address ?>" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Email</label>
                        <input type="email" id="email" pattern="+@globex\.com" size="30" rvalue="<?php echo $email ?>" equired>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Location<Address></Address></label>
                        <input type="text" name="location" id="location" class="form-control" value="<?php echo $location ?>" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Visa</label>
                        <input type="text" name="visa" id="visa" class="form-control" value="<?php echo $visa ?>" required>
                    </div>
                    <div class="form-group col-lg-4">
                    <label>DOB:<input type="date" name="date" id ="date" min="2017-04-01" max="2017-04-30" value="<?php echo $dob ?>"/></label>
                    </div>

                      <div class="form-group col-lg-3">
                        <label for="">Experience</label>
                        <input type="number" name="experience" id="experience" class="form-control" value="<?php echo $experience ?>" required>
                    </div>   
                    
                    <div class="form-group col-lg-3">
                        <label for="">Assign CM</label>
                        <input type="text" name="acm" id="acm" class="form-control" value="<?php echo $acm ?>" required>
                    </div> 


                    <div class="form-group col-lg-3">
                    <label for="catagory">Catagory</label>
                        <input type="text" name="catagory" id="catagory" class="form-control" value="<?php echo $catagory ?>" required> 
                        <select name="catagory" id="catagory">
                            <option value="onsite">Onsitet</option>
                            <option value="remote">Remote</option>
                            <option value="both">Both</option>
                        </select>
                   </div>  

                   <div class="form-group col-lg-3">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" class="form-control" value="<?php echo $status ?>" required> 
                        <select name="status" id="status">
                            <option value="active">Active</option>
                            <option value="hold">Hold</option>
                            <option value="offered">Offered</option>
                        </select>
                   </div> 

                    <div>
                    
                                <label for="img">Select image:</label>
                                <input type="file" id="img" name="img" accept="image/*" value="<?php echo $img ?>" required>

                    </div>
                         <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" value = "Update" class="btn btn-primary">
                    </div>
               </div>
            </form>
            <?php
                }
            }
            ?>

        </div>
    </section>

</body>
</html>