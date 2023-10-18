<?php header("Content-type: text/css"); ?>
/* Reset styles for all elements */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global styles for the body */
body {
    background-color: white;
    font-family: Trebuchet MS, sans-serif;
}





/* NAVBAR */
/* Styles for the logo image */
.logo-item img {
    width: 130px;
    height: auto;
    margin-left: 150px;
    margin-right: 150px;
}

/* Center the navigation menu items */
.center-menu {
    list-style-type: none;
    display: flex;
    justify-content: center;
    align-items: center;
}

.center-menu li {
    margin-right: 25px; 
    margin-left: 25px; 
    font-size: 16px;
    font-family: Trebuchet MS, sans-serif;
}

/* Styles for anchor links */
a {
    text-decoration: none;
    color: #000000;
    font-family: Trebuchet MS, sans-serif;
}

.container {
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}



/* C1 */
/* Style for the Image, text, and button */
.image-section {
    background-color: white;
    position: relative;
}

/* Style for the text and button */
.text-and-button {
    position: absolute; 
    top: 50%; 
    left: 0; 
    transform: translateY(-50%); 
    padding: 20px;
    text-align: left;
    width: 50%; 
    box-sizing: border-box; 
    font-family: Trebuchet MS, sans-serif;
}

.text-and-button h1 {
    font-size: 35px;
    font-weight: bold;
    color: white;
    margin-bottom: 40px;
    margin-left: 150px;
    font-family: Trebuchet MS, sans-serif;
}

.text-and-button p {
    font-size: 16px;
    color: white;
    margin-bottom: 10px;
    margin-left: 150px;
    font-family: Trebuchet MS, sans-serif;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    border: 2px solid white;
    border-radius: 15px;
    font-weight: bold;
    margin-top: 20px;
    margin-left: 150px;
}

.btn:hover{
    background-color: #333333;
}

/* Style for the image */
.image img {
    max-width: 90%;
    height: auto;
    border-radius: 50px;
}

/* Style for the image */
.image {
    flex: 1;
    text-align: center;
    margin-bottom: 20px;
}



/* C2 */
/* Style for the icons and descriptions */
.image-icons {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin: 0 120px 0 120px;
}

/* Style for individual image icon containers */
.icon-container {
    text-align: center;
    width: 200px;
}

/* Style for individual image icons */
.icon-container img {
    width: 80%;
    height: auto;
    margin: 0 5px;
    position: relative;
    transition: transform 0.3s, border-color 0.3s;
}

/* Style for descriptions below the icons */
.icon-container p {
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
}

/* Style for the vertical divider line */
.icon-divider {
    height: 200px;
    border-left: 1px solid #d0d0d0;
    margin: 20px 10px;
}

.image-icons img:hover {
    transform: translateY(-5px);
}



/* C3 */
/* Style for bike images section */
.bike-images {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin: 20px 130px 0 110px;
}

/* Style for individual bike images */
.bike-images img {
    margin: 10px;
    width: 350px;
    height: auto;
}



/* Style for individual bike containers */
.bike {
    text-align: center;
    margin: 20px; 
    flex: 0 0 calc(33.33% - 40px);
    max-width: 350px;
    padding: 10px;
    box-sizing: border-box;
    height: 100%;
    display: flex;
    flex-direction: column;
}

/* Style for bike images */
.bike img {
    max-width: 100%;
    height: auto;
}

.bike h3 {
    font-size: 24px;
    color: black;
}

.bike p {
    font-size: 14px;
    color: black;
    text-align: justify;
    margin: 10px 0 0 10px;
}





/* Footer styles */
/* Styling for the footer container */
.footer {
    background: #F0F0F0;
    color: black;
    font-size: 16px;
    text-align: center;
    padding: 40px 0;
    margin-top: 50px;
}

/* Styling for paragraphs within the footer */
.footer-p {
    color: black;
    font-weight: bold;
}

/* Styling for footer heading */
.footer-h3 {
    color: black;
    padding-top: 30px;
    margin-bottom: 20px;
    font-size: 20px;
    font-weight: bold;
}

/* Styling for the footer container */
.footer-container {
    margin: auto;
    max-width: 1000px;
    padding-left: 5px;
    padding-right: 5px;
}

/* Styling for the row in the footer */
.footer-row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}

/* Styling for the first column in the footer */
.footer-col-1 {
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
.footer-col-2 {
    padding-left: 5px;
    min-height: 200px;
    margin-bottom: 20px;
    flex: 1;
    font-family: Trebuchet MS, sans-serif;
    text-align: center;
}

/* Styling for images in the second column of the footer */
.footer-col-2 img {
    width: 180px;
    margin-bottom: 20px;
}

/* Styling for the third column in the footer */
.footer-col-3 {
    min-height: 200px;
    margin-bottom: 10px;
    font-family: Trebuchet MS, sans-serif;
    flex-basis: 12%;
    text-align: center;
}

/* Styling for the footer unordered list */
.footer-ul {
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
.footer-hr {
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}

/* Styling for the copyright text in the footer */
.Copyright {
    font-size: 12px;
    text-align: center;
    font-family: Trebuchet MS, sans-serif;
}