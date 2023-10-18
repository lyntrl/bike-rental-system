<?php
$success = 0;
$user = 0;
$invalid = 0;
$userNo = 0;
$studEmail = 0; // Initialize studEmail variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('includes\dbh.inc.php');

    $email = $_POST['eid'];
    $pass = $_POST['pwd'];

    // Check if the email ends with "@iskwela.psau.edu.ph"
    if (!endsWith($email, "@iskwela.psau.edu.ph")) {
        $studEmail = 1; // Email doesn't end with "@iskwela.psau.edu.ph"
    } else {
        $sql = "SELECT * FROM account WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                // User with the provided email exists
                $hashedPassword = $row['pass'];

                // Check if the provided password matches the stored hashed password
                if (password_verify($pass, $hashedPassword)) {
                    $success = 1; // Login success
                    // Perform actions after successful login, if needed

                    // Redirect to index.php after successful login
                    header("Location: index.php");
                    exit(); // Ensure that no other code is executed after the header
                } else {
                    $invalid = 1; // Incorrect password
                }
            } else {
                $user = 1; // User does not exist
            }
        } else {
          //other error handling  
          //create a header location for a sub-page "error" just to let the user know the database is having some technical error
            echo '<script>document.getElementById("error-msg").innerHTML = "Error: ' . mysqli_error($conn) . '"; </script>';
        }
    }
}

// Function to check if a string ends with a specific suffix
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}
?>





<!DOCTYPE html> 
<html lang="en"> 
<head> 

  <!-- Metadata -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Title -->
  <title>Sign In</title> 
  
    <!---Bootstrap CDN-->
    <!---CSS File Path-->
    <link rel="stylesheet" type="text/css" media="screen" href="sign.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head> 
<body> 

  <!-- Header Section -->
	<div class="header">
	 <div class="login-page col-md-12"> 
		<div class="form"> 

      <!-- Sign In Form -->
			<form action=" " method="POST">
            <h2 style="color: black"> Member Login </h2>
            <h6 style="color: black"> Please fill in your basic info </h6>
            <input type="text" name="eid" id="eid" placeholder="Email" required /> 
            <input type="password" name="pwd" placeholder="Password" required />


            <div class="invalid-feedback">Please fill out this field.</div>

				<!-- Moved the "Forgot Password?" link here -->
				<a href="forgot.php"> 
					<p style="color: black">Forgot Password?</p> 
				</a>
				<br> 
        <span id="email-error" class="text-danger"></span>
				<input type="submit" value="Log In" id="btn" />
			</form> 

      <!-- Create Account -->
			<a href="register.php">
				<p style="color: black">Create Account</p> 
			</a> 
		</div> 
	</div>
</div>

	<!--- Footer Section -->
	  <div class="footer">
      <div class="footer-container">
         <div class="footer-row">

         <!-- Column 1 -->
        <div class="footer-col-1">
          <h3 class="footer-h3">Follow Us</h3>
            <ul class="footer-ul">
              <a href="https://www.facebook.com/profile.php?id=61552094544554&mibextid=ZbWKwL">
                <li>
                 <img class="social-icon" src="images/ima/1/fb.png" alt="Facebook">
                </li>
              </a>
              <a href="https://instagram.com/greenpath_rental?igshid=MzMyNGUyNmU2YQ==">
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
if($user){
  echo '<script>document.getElementById("email-error").innerHTML="User doesn\'t exist"</script>'; 
}
if($invalid){
  echo '<script> document.getElementById("email-error").innerHTML="Incorrect Password"</script>';
}
if($success){
  echo '<script> alert("logged in success"); </script>'; 
}
if($studEmail){
  echo '<script> document.getElementById("email-error").innerHTML="Invalid Email Format";</script>';
}
?>

</body> 
</html>