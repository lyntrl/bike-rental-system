<?php header("Content-type: text/css"); ?>
/* log-in */
/* Reset default margin, padding, and box-sizing for all elements */
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box
}

/* Styling for h2 */
h2{
  font-family: Trebuchet MS, sans-serif;
 }

/* Styling for h6 */
h6{
  font-family: Trebuchet MS, sans-serif;
  padding-bottom: 50px;
}

/* Styling for paragraphs */
p{
  font-family: Trebuchet MS, sans-serif;
 }

 /* Styling for the login page container */
 .login-page {
    width: 100%; 
    height: 100vh; 
    background-image: url('images/ima/1.png'); 
    background-size: cover;
    background-position: center; 
    align-items: center;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

/* Styling for the login form container */
.form{ 
    position: relative;
    z-index: 1;
    max-width: 350px;
    padding: 60px;
    text-align: center;
    margin-right: 100px;
    background: white;
}

/* Styling for form inputs */
.form input{ 
    font-family: Trebuchet MS, sans-serif;
    outline: 1; 
    width: 100%; 
    border: 2px solid black; 
    border-radius: 30px;
    margin: 0 0 15px; 
    padding: 15px; 
    box-sizing: border-box; 
    font-size: 14px; 
    } 

/* Change the color of the placeholder */
input[name="eid"]::placeholder, input[name="pwd"]::placeholder {
    color: #555555;
}

a[href="forgot.php"] p {
    font-size: 13px; 
}

/* Styling for the login button */
#btn{
    font-family: Trebuchet MS, sans-serif; 
    text-transform: uppercase; 
    background: black;
    color: white;
    text-align: center;
    font-size: 13px;
    transition: background 0.3s;
    } 

/* Styling for error messages */
.error {color: #FF0000;}

/* footer */
/* Styling for the footer container */
.footer{
    background: #F0F0F0;
    color: black;
    font-size: 16px;
    text-align: center;
    padding: 10px 0 20px;
}

/* Styling for paragraphs within the footer */
.footer-p{
    color: black;
    font-weight: bold;
}

/* Styling for footer heading */
.footer-h3{
    color: black;
    padding-top: 30px;
    margin-bottom: 20px;
    font-size: 20px;
    font-weight: bold;
}

/* Styling for the footer container */
.footer-container{
    margin: auto;
    max-width: 1000px;
    padding-left: 5px;
    padding-right: 5px;
}

/* Styling for the row in the footer */
.footer-row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}

/* Styling for the first column in the footer */
.footer-col-1{
    min-height: 200px;
    margin-bottom: 20px;
    font-family: Trebuchet MS, sans-serif;
    flex-basis: 12%;
    text-align: center;
}

/* Styling for social media icons */
.social-icon {
    width: 100px; 
    height: 100px;  
}

/* Styling for the second column in the footer */
.footer-col-2{
    padding-left: 5px;
    min-height: 200px;
    margin-bottom: 20px;
    flex: 1;
    font-family: Trebuchet MS, sans-serif;
    text-align: center;
}

/* Styling for images in the second column of the footer */
.footer-col-2 img{
    width: 180px;
    margin-bottom: 20px;
}

/* Styling for the third column in the footer */
.footer-col-3{
    min-height: 200px;
    margin-bottom: 10px;
    font-family: Trebuchet MS, sans-serif;
    flex-basis: 12%;
    text-align: center;
}

/* Styling for the footer unordered list */
.footer-ul{
    list-style-type: none;
    display: flex;
    list-style: none;
    padding: 0;
}

/* Styling for list items in the footer unordered list */
.footer-ul li {
    margin-right: 1px; 
}

/* Styling for the horizontal rule in the footer */
.footer-hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}

/* Styling for the copyright text in the footer */
.Copyright{
    font-size: 12px;
    text-align: center
}




/* RESPONSIVENESS */
/* Styles for smaller screens (e.g., mobile phones) */
@media (max-width: 768px) {
  .form {
    max-width: 100%;
    margin: 0 auto;
  }
  h6 {
    padding-bottom: 10px; /* Reduce padding on small screens */
    font-size: 12px;
  }
  input[type="text"], input[type="password"] {
    padding: 10px;
  }
  /* Adjust styling for social icons */
  .social-icon {
    width: 40px;
    height: 40px;
  }
  /* Reduce font size and spacing in the footer */
  .footer-h3 {
    font-size: 18px;
    margin-bottom: 10px;
  }
  .footer-p {
    font-size: 12px;
  }
  /* Adjust spacing in the footer unordered list */
  .footer-ul {
    margin-top: 10px;
  }
}


/* Styles for medium-sized screens (e.g., tablets) */
@media (max-width: 992px) {
  .form {
    max-width: 80%;
    margin: 0 auto;
  }
  /* Adjust input styles for better readability on tablets */
  .form input[type="text"],
  .form input[type="password"] {
    font-size: 16px;
    padding: 12px;
  }

  /* Increase spacing between form elements */
  .form input[type="text"],
  .form input[type="password"],
  .form input[type="submit"] {
    margin-bottom: 20px;
  }
  .footer-col-3{
    margin-right: 30px;
}
}


/* Default styles for larger screens (e.g., laptops) */
/* No need to modify above styles, as they are for larger screens */