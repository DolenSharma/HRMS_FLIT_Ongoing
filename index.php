<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultants</title>
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
        <h1 style="text-align: center;margin: 50px 0;">Consultant Form</h1>
        <div class="container">
            <form action="adddata.php" method="post">
               <div class="row">

                     <div class="form-group col-lg-3">
                        <label for="">SN</label>
                        <input type="number" name="sn" id="sn" class="form-control" required>
                    </div>    
                    <div class="form-group col-lg-4">
                        <label for="">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" required>
                    </div>

                    <div class="form-group col-lg-4">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Address<Address></Address></label>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Email</label>
                        <input type="email" id="email" pattern="+@globex\.com" size="30" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Location<Address></Address></label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="">Visa</label>
                        <input type="text" name="visa" id="visa" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-4">
                    <label>DOB:<input type="date" name="date" id ="date" min="1900-01-01" max="2025-04-30" /></label>
                    </div>

                      <div class="form-group col-lg-3">
                        <label for="">Experience</label>
                        <input type="number" name="experience" id="experience" class="form-control" required>
                    </div>   
                    
                    <div class="form-group col-lg-3">
                        <label for="">Assign CM</label>
                        <input type="text" name="acm" id="acm" class="form-control" required>
                    </div> 


                    <div class="form-group col-lg-3">
                    <label for="catagory">Catagory</label>
                        <select name="catagory" id="catagory">
                            <option value="onsite">Onsite</option>
                            <option value="remote">Remote</option>
                            <option value="both">Both</option>
                        </select>
                   </div>  

                   <div class="form-group col-lg-3">
                    <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="active">Active</option>
                            <option value="hold">Hold</option>
                            <option value="offered">Offered</option>
                        </select>
                   </div> 

                    <div>
                    
                                <label for="img">Select image:</label>
                                <input type="file" id="img" name="img" accept="image/*">

                    </div>
                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
               </div>
            </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Consultant ID</th>
                    <th scope="col">SN</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Location</th>
                    <th scope="col">Visa</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Assigned CM</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM consultantdetails";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $id = $row['id'];
                                $sn = $row['sn'];
                                $fname = $row['fname'];
                                $lname = $row['lname'];
                                $address = $row['address'];
                                $email = $row['email'];
                                $location = $row['location'];
                                $visa = $row['visa'];
                                $dob = $row['dob'];
                                $experience = $row['experience'];
                                $acm = $row['acm'];
                                $catagory = $row['catagory'];
                                $status = $row['status'];  
                                $img = $row['img'];

                                ?>
                    
                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $lname; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $location; ?></td>
                        <td><?php echo $visa; ?></td>
                        <td><?php echo $dob; ?></td>
                        <td><?php echo $experience; ?></td>
                        <td><?php echo $acm; ?></td>
                        <td><?php echo $catagory; ?></td>
                        <td><?php echo $status; ?></td>
                        <td><?php echo $img; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                } 
            } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>

</html>