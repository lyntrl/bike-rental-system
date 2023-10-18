/* register */
<?php header("Content-type: text/css"); ?>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body{ 
    font-family: Trebuchet MS, sans-serif;
    } 

/* Styling for h6 */
h5 {
    text-align: center;
    font-family: Trebuchet MS, sans-serif;
    padding-bottom: 20px;
   }

/* Styling for the login page container */
.register-page{ 
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
    max-width: 450px;
    max-height: 610px;
    padding: 20px;
    text-align: center;
    margin-right: 50px;
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

    #column1{
        width: 50%;
        float: left;
        padding-right: 2%;
    }
    
    #column2{
        width: 50%;
        float: left;
        padding-left: 2%;
        
    }

    #column3{
        width: 50%;
        float: left;
        padding-right: 2%;
    }
    #column4{
        width: 50%;
        float: left;
        padding-left: 2%;
    }

/* Style for the custom file upload button */
.custom-file-upload {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  margin-top: 5px;
  margin-bottom: 40px;
  color: black;
  cursor: pointer;
  border-radius: 30px;
  font-family: Trebuchet MS, sans-serif;
  background-color: #fff;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
  text-align: left;
  width: 100%;
}

/* Style for the Font Awesome icon within the button */
.custom-file-upload i {
  margin-right: 10px;
  color: #000000;
}

/* Adjust the alignment of the text within the button */
.custom-file-upload span {
  flex-grow: 1;
  text-align: right;
}

/* Hide the default file input button */
input[type="file"] {
  display: none;
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

#create{
    font-family: Trebuchet MS, sans-serif;
    font-size: 13px;
    color: black;
}

/* Change the color of the placeholder for the first name input field */
input[name="first"]::placeholder, 
input[name="last"]::placeholder,
input[name="studno"]::placeholder,
input[name="phone"]::placeholder,
input[name="eid"]::placeholder,
input[name="pwd"]::placeholder {
    color: #555555;
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
    font-family: Trebuchet MS, sans-serif;
}




/* RESPONSIVENESS */
/* Media query for screens smaller than 768px (e.g., smartphones) */
@media (max-width: 768px) {
    .form {
        max-height: none; 
    }

    /* Center align the form elements */
    .single-column {
        width: 100%;
        float: none;
        padding-right: 0;
        padding-left: 0;
        margin-bottom: 15px;
    }

    /* Decrease font size and padding for better mobile usability */
    .form input {
        font-size: 16px;
        padding: 10px;
    }

    /* Modify footer layout for better mobile display */
    .footer-col {
        flex-basis: 100%;
        text-align: center;
    }

    /* Adjust social icons for better mobile display */
    .social-icon {
        width: 50px;
        height: 50px;
    }

    /* Adjust the header's background image for smaller screens */
    .header {
        background-size: cover;
        background-attachment: scroll;
    }
}



/* Media query for screens between 768px and 992px (e.g., tablets) */
@media (min-width: 768px) and (max-width: 992px) {
    .form {
        max-height: 542px;
    }
    
    /* Increase spacing between form elements */
    .form input {
        padding: 10px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    /* Modify the footer layout for tablets */
    .footer-col {
        flex-basis: 50%;
    }

    .footer-col-3 {
        margin-right: 30px;
    }
}


/* Default styles for larger screens (e.g., laptops) */
/* No need to modify above styles, as they are for larger screens */