/* forgot */
<?php header("Content-type: text/css"); ?>
/* Reset default margin, padding, and box-sizing for all elements */
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box
}

p{
  font-family: Trebuchet MS, sans-serif;
}

/* Styling for the forgot page container */
.forgot-page{
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

/* Styling for the forgot form container */
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

/* Change the color of the placeholder for the username input field */
input[name="email"]::placeholder {
    color: #555555;
}

/* Change the color of the placeholder for the password input field */
input[name="studno"]::placeholder {
    color: #555555; 
}

#btn{
    font-family: Trebuchet MS, sans-serif;
    text-transform: uppercase; 
    background: black;
    color: white;
    text-align: center;
    font-size: 13px;
    transition: background 0.3s;
    } 

h2{
    color: black;
    text-align: center;
    font-family: Trebuchet MS, sans-serif;
    padding-bottom: 20px;
    }

h6 {
    color: black;
    text-align: center;
    font-family: Trebuchet MS, sans-serif;
    }

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
  /* Adjust the form container's margin for better spacing on small screens */
  .form {
    max-width: 100%; 
    margin: 0 auto; 
    padding: 20px; 
  }

  /* Reduce font size for headings and subheadings */
  h2 {
    font-size: 20px;
  }

  h6 {
    font-size: 16px;
  }

  /* Adjust input field styles for better mobile usability */
  .form input {
    padding: 10px;
    font-size: 14px; 
  }

  /* Center-align the "Go Back" link for better mobile readability */
  .form a {
    text-align: center;
    display: block; 
    margin-top: 10px; 
  }

  /* Center-align the social icons in the footer */
  .footer-col-1 {
    text-align: center;
  }

  /* Adjust the font size and spacing in the footer */
  .footer-h3 {
    font-size: 18px;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .footer-p {
    font-size: 12px;
    font-weight: lighter;
  }

  /* Reduce the size of social icons for mobile screens */
  .social-icon {
    width: 30px;
    height: 30px;
  }

  /* Center-align the logo in the footer */
  .footer-col-2 {
    text-align: center;
  }

  /* Adjust the font size for the copyright text */
  .Copyright {
    font-size: 10px;
  }
}

/* Styles for medium-sized screens (e.g., tablets) */
@media (min-width: 768px) and (max-width: 992px) {
  /* Adjust the form container's margin for better spacing on medium-sized screens */
  .form {
    max-width: 70%;
    margin: 0 auto;
    padding: 30px; 
  }

  /* Increase font size for headings and subheadings */
  h2 {
    font-size: 24px;
  }

  h6 {
    font-size: 18px;
  }

  /* Adjust input field styles for better tablet usability */
  .form input {
    padding: 12px;
    font-size: 16px;
  }

  /* Center-align the "Go Back" link for better tablet readability */
  .form a {
    text-align: center;
    display: block;
    margin-top: 15px;
  }

  /* Center-align the social icons in the footer */
  .footer-col-1 {
    text-align: center;
  }

  /* Adjust the font size and spacing in the footer */
  .footer-h3 {
    font-size: 20px;
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .footer-p {
    font-size: 14px;
    font-weight: lighter;
  }

  /* Increase the size of social icons for better tablet visibility */
  .social-icon {
    width: 40px;
    height: 40px;
  }

  /* Center-align the logo in the footer */
  .footer-col-2 {
    text-align: center;
  }

  /* Adjust the font size for the copyright text */
  .Copyright {
    font-size: 12px;
  }
}


/* Default styles for larger screens (e.g., laptops) */
/* No need to modify above styles, as they are for larger screens */