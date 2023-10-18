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
/* Centered Heading Styles */
.centered-heading {
    text-align: center; 
    margin-bottom: 20px;
}

/* Styles for the h2 */
.centered-heading h2 {
    font-weight: lighter; 
}

/* Center the video section content using flexbox */
.video-section {
    background-color: white;
    position: relative;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Style for the video container */
.video {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Style for the video */
.video video {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 50px;
}



/* C2, C4 */
/* Style for the paragraph section */
.paragraph-section {
    padding: 30px 0; 
}

/* Style for the paragraph text */
.paragraph-text {
    font-size: 16px;
    line-height: 1.8;
    text-align: center;
    max-width: 1000px;
    margin: 0 auto;
    color: black;
    font-family: Trebuchet MS, sans-serif;
}



/* C3 */
/* Advantage Section Styles */
.advantage-section {
    padding: 30px 0;
    background-color: white;
}

/* Advantage Heading Styles */
.advantage-heading {
    font-weight: lighter;
    text-align: center;
    margin-bottom: 20px;
}

/* Advantage Images Container Styles */
.advantage-images {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

/* Advantage Image Styles */
.advantage-image {
    width: calc(25% - 20px);
    text-align: center;
}

.advantage-image img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
    border-radius: 5px;
}



/* C5 */
/* CSS for the image-quote container */
.image-quote-container {
  display: flex;
  align-items: center;
  margin-top: 30px;
}

/* CSS for the image container */
.image-container {
  flex: 1;
  margin-right: 20px;
  margin-left: 50px;
  text-align: center;
}

/* CSS for the image */
.image-container img {
  max-width: 100%; 
  border-radius: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); 
}

/* CSS for the quote container */
.quote-container {
  flex: 2;
}

/* CSS for the blockquote (quote) */
blockquote {
  font-size: 18px;
  line-height: 1.5;
  color: #333;
  margin-top: 10px;
  font-style: italic;
  max-width: 700px;
  text-align: justify;
  margin-left: 20px;
}

/* CSS for the quote author (footer) */
blockquote footer {
  margin-top: 10px;
  font-style: italic;
  color: #666;
}

/* Add a background color to the container wrapping the image and quote */
.container-with-background {
  background-color: #E0E8E0;
  padding: 20px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
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