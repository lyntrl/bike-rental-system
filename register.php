<?php
$success = 0;
$user = 0;
$invalid = 0;
$userEmail = 0;
$userNo = 0;
$uploaded= 0;
$invalidPrefix =0;

function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    return (substr($haystack, -$length) === $needle);
}

function startsWith($haystack, $prefixes) {
    foreach ($prefixes as $prefix) {
        $length = strlen($prefix);
        if ($length > 0 && substr($haystack, 0, $length) === $prefix) {
            return true;
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'includes\dbh.inc.php';

    $email = $_POST['eid'];
    $lname = $_POST['last'];
    $fname = $_POST['first'];
    $cp = $_POST['phone'];
    $studno = $_POST['studno'];
    $pass = $_POST['pwd'];
    $cpass = $_POST['cpass'];

    // Check if passwords match
    if ($pass === $cpass) {
        // Check if the email ends with "@iskwela.psau.edu.ph"
        if (!endsWith($email, "@iskwela.psau.edu.ph")) {
            $userEmail = 1; // Invalid email domain
        } else {
            // Check if the studno starts with C20
            $allowedPrefixes = ["C20"]; //change accordingly

            if (!startsWith($studno, $allowedPrefixes)) {
                $invalidPrefix = 1; // Invalid studno prefix
            } else {
                // Generate a unique filename for the uploaded photo
                $uploadFileName = uniqid() . '_' . basename($_FILES['id_photo']['name']);
                $uploadDir = 'C:\xampp\htdocs\All\imagesUpload\id_photos'; // Specify the upload directory Change this to your upload directory
                $uploadFile = $uploadDir . $uploadFileName;

                if (move_uploaded_file($_FILES['id_photo']['tmp_name'], $uploadFile)) {
                    // Photo uploaded successfully, now insert data into the database

                    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

                    $sql1 = "SELECT * FROM account WHERE studno='$studno'";
                    $result1 = mysqli_query($conn, $sql1);

                    if ($result1) {
                        $num1 = mysqli_num_rows($result1);

                        if ($num1 > 0) {
                            $userNo = 1; // Student number is already taken
                        } else {
                            $sql = "SELECT * FROM account WHERE email='$email'";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                $num = mysqli_num_rows($result);

                                if ($num > 0) {
                                    $user = 1; // User email is already taken
                                } else {
                                    $sql = "INSERT INTO account (email, lname, fname, cp, studno, pass, id_photo) VALUES ('$email', '$lname', '$fname', '$cp', '$studno', '$hashedPassword', '$uploadFileName')";
                                    $result = mysqli_query($conn, $sql);

                                    header("Location: index.php");

                                    if ($result) {
                                        $success = 1; // Registration success
                                    }
                                }
                            } else {
                                echo '<script>document.getElementById("error-msg").innerHTML = "Error: ' . mysqli_error($conn) . '"; </script>';
                            }
                        }
                    } else {
                        echo '<script>document.getElementById("error-msg").innerHTML = "Error: ' . mysqli_error($conn) . '"; </script>';
                    }
                } else {
                    echo '<script>document.getElementById("error-msg").innerHTML = "Error uploading photo"; </script>';
                }
            }
        }
    } else {
        $invalid = 1; // Passwords do not match
    }
}
?>



<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title> 

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" type="text/css" media="screen" href="reg.php">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- Link to the Font Awesome CSS -->
  <script src="https://kit.fontawesome.com/67cac72898.js" crossorigin="anonymous"></script>

</head> 
<body>
  <div class="header"> 
    <div class="register-page col-md-12"> 
      <div class="form"> 

        <!-- Registration Form -->
        <!-- Form submits data to "includes/signup.inc.php" via POST method -->
        <!-- enctype="multipart/form-data" is used for uploading files -->
        <form action=" " method="POST" enctype="multipart/form-data">
          <h5 style="color: black">Already a member? <a href="signin.php" style="color: black"> Sign In</a></h5>
          <div class="single-row">

            <!-- Input field for First Name, required -->
            <div class="single-column" id="column1">
              <input type="text" name="first" placeholder="First Name" required>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Input field for Last Name, required -->
            <div class="single-column" id="column2">
              <input type="text" name="last" placeholder="Last Name" required>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Input field for Student Number, required -->
            <div class="single-column" id="column3">
            <input type="text" name="studno" placeholder="Student Number" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Input field for Phone Number, required -->
            <div class="single-column" id="column4">
              <input type="text" name="phone" placeholder="Phone Number" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
          </div>
          <!-- Input field for Email, required -->
          <input type="text" name="eid" placeholder="Email" required>

          <!-- Input field for Password, required -->
          <input type="password" name="pwd" placeholder="Password" required>
           <!-- Input field for Password, required -->
           <input type="password" name="cpass" placeholder="Confirm Password" required>
          
           <!-- Upload image -->
          <!-- Input field for uploading an image file (ID photo), accepts only image files -->
          <label for="id_photo" class="custom-file-upload" id="upload_label" >
          <i class="fa-solid fa-id-card" style="color: #000000;"></i> Upload ID Photo / COR
          </label>
          <input type="file" name="id_photo" id="id_photo" accept="image/*"onclick="updateFileLabel(this)" required>
          <!-- End of file upload -->
          <span id="error-msg"></span>
          <!-- Submit button -->
          <input type="submit" value="SIGN UP" id="btn" />
        </form>

        <!-- Terms and Conditions link -->
        <p id="create">Creating an account means you agree to our <a href="terms.html" style="color: black"> Terms and Conditions.</a></p>
      </div> 
    </div>
  </div>
  <!-- Footer section -->
  <div class="footer">
      <div class="footer-container">
         <div class="footer-row">

         <!-- Column 1 -->
        <div class="footer-col-1">
          <h3 class="footer-h3">Follow Us</h3>
            <ul class="footer-ul">
              <a href="https://www.facebook.com/d.lgnc/">
                <li>
                 <img class="social-icon" src="images/ima/1/fb.png" alt="Facebook">
                </li>
              </a>
              <a href="https://www.instagram.com/d.lgnc/">
                <li>
                 <img class="social-icon" src="images/ima/1/ig.png" alt="Instagram">
                </li>
              </a>
            </ul>
        </div>

          <!-- Column 2 -->
            <div class="footer-col-2">
              <img src="images/ima/1/logo.png">
               <p class="footer-p">Paving Paths for Brighter Futures</p>
            </div>

          <!-- Column 3 -->
            <div class="footer-col-3">
             <h3 class="footer-h3">Contact Us</h3>
               <p class="footer-p" style="font-weight: lighter;">greenpath@gmail.com</p>
               <p class="footer-p" style="font-weight: lighter;">(+63) 968-459-3721</p>
           </div>
         </div>
          <hr class="footer-hr">
          <p class="Copyright" style="font-weight: bold;">Copyright 2022</p>
      </div>    
  </div>
  <?php
  if($uploaded){
    echo '<script>document.getElementById("upload_label").innerHTML =  "<i class="fa-solid fa-id-card" style="color: #000000;"></i> Your File"</script>'; 
  }
  if($user){
    echo '<script>document.getElementById("error-msg").innerHTML="User already exist"</script>'; 
  }
  if($invalid){
    echo '<script> document.getElementById("error-msg").innerHTML="Incorrect Password"</script>';
  }
  if($success){
    echo '<script> alert("logged in success"); </script>'; 
  }
  if($userEmail){
    echo '<script> document.getElementById("error-msg").innerHTML="Invalid email formatt"; </script>';
  }
  if($userNo){
    echo '<script> document.getElementById("error-msg").innerHTML="Student Number is already taken" ;</script>';
  } 
  if($invalidPrefix){
    echo '<script> document.getElementById("error-msg").innerHTML="Invalid Student Number Format";</script>';
  }
?>
<script>
function updateFileLabel(input) {
    // Get the file name from the input
  
    var fileName = input.files[0].name;

    // Update the label with the file name
    document.getElementById('upload_label').innerHTML = fileName;
}

</script>
</body> 
</html>
