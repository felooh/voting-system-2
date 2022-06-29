<?php


     ini_set('display_errors', 1);
     ini_set('display_string_error', 1);
     error_reporting(E_ALL);

      include 'connection.php';

     if(isset($_POST['submit'])){
         
         $votername = mysqli_real_escape_string($conn,$_POST['name']);
         $reg_no = mysqli_real_escape_string($conn,$_POST['reg_no']);
         $faculty = $_POST['faculty'];
         $residence = $_POST['residence'];
         $email = mysqli_real_escape_string($conn,$_POST['email']);
         $pass = md5($_POST['pass']);

        //  $insert = "INSERT INTO voter_table (votername,reg_no,faculty, residence, email, pass) VALUES('$votername','$reg_no', '$faculty', '$residence', '$email', '$pass')";
        //  mysqli_query($conn, $insert);


        $select = ("SELECT * FROM voter_table WHERE email = '$email'");

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){

            $error[] = 'Voter already exists...Proceed to login';
        }
        else{
            //if($pass != $conf_pass){
              //  $error[] = 'pass not matched';
           
            $insert = "INSERT INTO voter_table (votername, reg_no, faculty, residence, email, pass) VALUES('$votername','$reg_no', '$faculty', '$residence', '$email', '$pass')";
            
            mysqli_query($conn, $insert);
            header('location:home.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="styles.css">
    <title>Registration</title>
</head>
<header>
              <a href="home.php">
              <div class="logo"><img src="images/logo.avif"></div>
              </a>
    <div class="navbar_heading">
        <h1>Voter Registration Form</h1>
    </div>
</header>
<body>
    <div class="background">
    <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class = "error-msg">'.$error.'</span>';
                };
            };
            ?>
    <form action="" method="POST">
        <fieldset>
            <legend>Personal Details</legend>

            <label for="name">Name:  </label>
            <input type="text" placeholder="Enter your full name" name="name" required><br><br><br>

            <label for="reg_no">Registration number: </label>
            <input type="text"  placeholder="Enter regitration number" name="reg_no" required><br><br><br>

            <label for="faculty">Faculty: </label>
            <input list="faculties" placeholder="Select your faculty" name="faculty" required><br><br><br>

                 <datalist id="faculties">
                     <option value="FoA">Faculty of Agriculture</option>
                     <option value="FASS">Faculty of Arts & Social Sciences</option>
                     <option value="FEDCOS">Faculty of Education & Community Development Studies</option>
                     <option value="FET">Faculty of Engineering & Technology</option>
                     <option value="FERD">Faculty of Environment & Resource Development</option>
                     <option value="FHS">Faculty of Health Sciences</option>
                     <option value="FOL">Faculty of Law</option>
                     <option value="FOS">Faculty of Science</option>
                     <option value="FVMS">Faculty of Veterinary Medicine & Surgery</option>
                     <option value="IWGDS">Institute of Women, Gender & Development Studies</option>
                     <option value="SoDL">School of Open & Distance Learning</option>
                 </datalist>

            <label for="residence">Residence: </label>
            <input list="residences" placeholder="Select your residence" name="residence" required><br><br><br>

                  <datalist id="residences">
                      <option value="CBD"></option>
                      <option value="Maringo/Ruwenzori"></option>
                      <option value="Mama Ngina/Taifa/Thornton/Old Hall"></option>
                      <option value="Tatton"></option>
                      <option value="Riverside/Riverview"></option>
                      <option value="BuruBuru/Hollywood"></option>
                  </datalist>

            <label for="email">Email: </label>
            <input type="email" placeholder="Enter your email address" name="email" required><br><br><br>

            <label for="pass">pass: </label>
            <input type="password" placeholder="" name="pass" required><br><br><br>

            <!-- <label for="conf_pass">Confirm pass: </label>
            <input type="pass" name="conf_pass" required><br><br><br> -->

            <button name="submit" >Register</button>
        </fieldset>
    </form>
    </div>
</body>
</html>