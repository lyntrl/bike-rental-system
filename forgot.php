<?php 
$success = 0;
$invalid = 0;
$userEmail = 0; // Add this line to initialize $userEmail
$invalidPrefix = 0;
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
  include ('C:\xampp\htdocs\All\includes\dbh.inc.php');
  $email = $_POST['email'];
  $studno = $_POST['studno'];

  // Check if the email ends with "@iskwela.psau.edu.ph"
  if (!endsWith($email, '@iskwela.psau.edu.ph')) {
      $userEmail = 1;
  } else {
      // Check if the studno starts with C20
      $allowedPrefixes = ["C20"];

      if (!startsWith($studno, $allowedPrefixes)) {
          // Handle the case where studno doesn't start with the allowed prefixes
          $invalidPrefix = 1;
      } else {
          $sql = "SELECT * FROM account WHERE email='$email'";
          $result = mysqli_query($conn, $sql);

          // checks only one record if the details match
          $sql1 = "SELECT studno FROM account WHERE email='$email'";
          $result1 = mysqli_query($conn, $sql1);

          $dateTime = date('Y-m-d');

          if ($result) {
              $num = mysqli_num_rows($result);

              // Check if both email and corresponding studno exist
              if ($num > 0) {
                  $row1 = mysqli_fetch_assoc($result1);
                  $storedStudNo = $row1['studno'];

                  if ($storedStudNo == $studno) {
                      $sql = "INSERT INTO forgot (email, studno, postDate) VALUES ('$email', '$studno', '$dateTime')";
                      $result = mysqli_query($conn, $sql);

                      // header location to homepage
                      header("Location: index.php");
                      if ($result) {
                          $success = 1; // form is submitted
                      }
                  } else {
                      $invalid = 1;
                  }
              } else {
                  // Both email and corresponding studno do not exist
                  $notExists = 1;
              }
          }
      }
  }
}
// Function to check if a string ends with a specific suffix
function endsWith($haystack, $needle) {
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
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title> 

    <!---Bootstrap CDN-->
    <!---CSS File Path-->
   <link rel="stylesheet" type="text/css" media="screen" href="forg.php">
   <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head> 
<body> 
	<div class="forgot-page col-md-12"> 
		<div class="form"> 
			<form action=" " method="POST">
			
			 <!-- Form for Forgot Password -->
            <form id="formId" action="Create-Account" class="was-validated"> 
			<h2>Enter Email</h2>

			<!-- Forgot Password Form -->
			<form class="Forgot"> 
				<form action="/action_page.php">
				
				 <!-- Email Input -->
				<input type="text" id="mailId"name="email" placeholder="@iskwela.psau.edu.ph" required /> 
				<div class="valid-feedback">Valid.</div>
				
                <div id="invalid-mail" class="invalid-feedback">Please fill out this field.</div>
				<br> 

				<!-- Phone Number Input -->
				<h6>and</h6>
				<input type="text" id="studNoId"name="studno" placeholder="student number" required /> 
				<div class="valid-feedback">Valid.</div>
              
				<div id="invalid-no" class="invalid-feedback">Please fill out this field.</div>
				
				<span id="error-studno"></span> 
				<!-- Submit Button -->
				<input type="submit" onclick="return validateEmail() && validateStudNo();" value="Send Code" id="btn" />
                </form>
				<a href="signin.php">
				<p style="color: black">Go Back</p> 
			</a> 
			</form> 
		</form>
	</form>
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
	//ifs 
if($success){

	echo '<script> alert("Submitted Successfully");</script>';   
}
if($invalid){
    echo '<script> document.getElementById("error-studno").innerHTML="Invalid Credentials";</script>'; 
}
if($userEmail){
   echo '<script> document.getElementById("error-studno").innerHTML="Invalid Email Format";</script>'; 
}
if($invalidPrefix){
  echo '<script> document.getElementById("error-studno").innerHTML="Invalid Student Number Format"</script>';
}
if($notExists){
  echo '<script>document.getElementById("error-studno").innerHTML = "Account doesn\'t exists" </script>';
}

?>
</body> 
</html>