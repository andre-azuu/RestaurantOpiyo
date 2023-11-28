<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- A meta viewport element gives the browser
         instructions on how to control the page's dimensions and scaling. -->
    <!--
    The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
    The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.-->
    <meta name="viewport" content="width=device-width">
    <!-- Important for SEO : search engines look at this meta tags-->
    <meta name="keywords" content="Dairy,Milk,Cows">
    <meta name="author" content="BBIT 3101">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Restaurant locations</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- cdnjs Font Awesome !-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  
  
  
  <style>
    /* ===============
   Fonts [Web Fonts]
   =============== */

/* === Method 1 : using @import === */
/*Rubik*/
@import url('https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap');

/*Karla*/
@import url('https://fonts.googleapis.com/css?family=Karla&display=swap');

/* === Method 2 , using @font-face === */
@font-face {
  font-family: 'Satisfy';
  /*Format for modern browsers*/
  src : url('fonts/Satisfy/Satisfy-Regular.ttf') format('truetype');
}

html{
  /*Set the font-size of our html - important since we will be using em units*/
  font-size : 16px;
}

/* ===============
   Body style
   =============== */

body{
  font-family: 'Karla',sans-serif;

  /*Sets the height of a line box*/
  line-height: 1.5;

  padding: 0;

  margin: 0;

  background: linear-gradient(rgb(240, 232, 229), rgb(203, 11, 11));;
}

/* ===============
   Global styles
   =============== */

#container{
  display : grid;
 
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-areas: "hd hd hd"
                        "cnt cnt cnt"
                        "ft ft ft";
}


/*Why will this not work for all the styles applied?*/
#logo{
  font-family: 'Times New Roman',cursive; /*font stack*/

  /*Setting the right margin on the logo item to auto moves the extra space to the right of the logo,
  pushing the remaining items all the way to the right (the “main end”).*/

  margin-right: auto;

}

#logo-image{
  padding-top: 10px;
  display: inline;
  width : 50px;
}

/*child selector - only targets direct child */
#logo > h1{
  display: inline;
  font-weight: normal;
  font-size: 1.7rem;
  font-size: 60px;

}


/* ===============
   Header
   =============== */

header{

  grid-area: hd;

  /* hex color code [RR-GG-BB]1F9499 743c25

  background: #743c25;
  */


  /*
  https://cssgradient.io/
  */
  background: linear-gradient(rgb(240, 232, 229), rgb(203, 11, 11));

  color :rgb(255, 38, 0); /* #ffffff or #fff or white */

  /*the em unit means "my parent element's font-size".

  padding-top: 1em;

  /*It prevents the used value of the height property from
  becoming smaller than the value specified for min-height.*/

  min-height: 5.5em;

  border-bottom: 3px solid #006838;

}

/* ID Selector */
#menu {
  /*Turn our navigation ul into a flex container*/

  display: flex;

  /*Set the direction of flow -- our main axis is horizontal*/

  flex-direction: row;

  /*Allow menu items to flow over? -- Nor neccesary since we only have three*/


  /*Combining the two lines above
  flex-flow: row nowrap;  */

  /*defines how extra space should be distributed
    around or between items that are inflexible or have reached their maximum size
    justify-content : center;


  /*align items - remember this applies to the cross-axis*/

  align-items: center;

  margin: 0;

  /*Remove the list-style(bullets)*/
  list-style: none;

  font-family: 'Rubik', sans-serif;

  font-weight: 500;

}


/* ===============
   Menu Items (links)
   =============== */

/*Descendant selector - targets elements that are contained within other elements*/
#menu a{

  /*Change to a block item*/
  display: block;

  /*Add a border around the link tag*/
  
  color :rgb(255, 38, 0);

  /*Rounded borders*/
  border-radius: .5em;

  /*Add top & bottom, left & right padding*/
  padding: .5em 1em;

  /*Add margin after the borde*/
  margin: .5em;

  /*Remove link underline*/
  text-decoration: none;
}

#menu a:hover{
  border-bottom: 3px solid black;
  color : #f88737;
}

li.active a{
  border-bottom: 3px solid black;
  background: linear-gradient(rgb(240, 232, 229), rgb(203, 11, 11));
}


/* ===============
   Main
   =============== */

main{
  grid-area: cnt;
  margin-left: 20px;
  margin-right: 20px;
}

footer{
  grid-area: ft;
  margin: 0;
  padding : 0;
  color: red;
  /* 683700 - brownish */
  background: linear-gradient( rgb(203, 11, 11) ,rgb(255, 255, 255));
  text-align: center;
}





label {
  display: block;
  font-weight: bold;
  
}

input {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px 20px;
}

button {
  background-color: hsla(19, 91%, 22%, 0.96);
  color: white;
  padding: 10px 150px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #9d4408;
}

iframe {
  border-radius:100px ;
  border-color: brown;
  border-style: solid;
  padding-left: 300px;
}
div #about{
  margin-left: 100px;
}

#about{
  color: #ffff;
  font-family: "Lucida Console", "Courier New", monospace;
  font-style: oblique;
  font-size: 20px;
}
  </style>
  </head>
    
<body>
  <div>
  <h1>
  Our Location
</h1>

  </div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.929639415849!2d36.73166890000002!3d-1.2093222999999982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f232784be8e41%3A0x78cb62cab79c02fd!2sGNN%20Farm!5e0!3m2!1sen!2ske!4v1696016472721!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<div id="about">  
  <p  id="about">
  <h1>About us</h1>
At our dairy farm, we pride ourselves in providing high-quality dairy products straight from our happy and healthy cows. With a focus on animal welfare, our farm ensures that our cows are well-cared for, allowing them to produce the best milk possible. From our lush pastures to our state-of-the-art milking facilities, we strive to maintain the highest standards of cleanliness and efficiency. We are dedicated to delivering fresh, delicious milk and dairy products to our customers, ensuring that they can enjoy the taste of wholesome goodness in every sip and bite. 
</p> 
  </div>
  
</body>
      </main>