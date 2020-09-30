<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 10px;
  text-align: center;
  background: #1a88bc;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 20%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 80%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #1a88bc;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>iProblemSolver</h1>
  <h3>The <b>complete</b> solution is here.</h3>
</div>

<div class="navbar">
  <a href="#">Home</a>
  <a href="login.php"  class="active">Login</a>
  <a href="register.php">Register</a>
  <a href="#" class="right">About Us</a>
</div>

<div class="row">
  <?php require('dynamic/left.php') ?>
  <div class="main">
    <h1>Demographic Questionaire</h1>
    <div style="margin-bottom: 10px;">
      <b>Name:</b>
      <input></input>
    </div>
    <div style="margin-bottom: 10px;">
      <b>Gender:</b>
      <input type="radio"></input> Male
      <input type="radio"></input> Female
    </div>
    <div style="margin-bottom: 10px;">
      <b>Age:</b>
      <input></input>
    </div>
    <div style="margin-bottom: 10px;">
      <b>Location:</b>
      <input></input>
    </div>
    <div style="margin-bottom: 10px;">
      <b>What is your parent's occupaction?</b><br>
      <div style="margin-left: 20px;margin-top: 10px;">
        <div style="margin-bottom: 6px;">
          Father
          <input></input>
        </div>
        <div style="margin-bottom: 6px;">
          Mother
          <input></input>
        </div>
      </div>
    </div>
    <div style="margin-bottom: 10px;">
      <b>Education you had completed?</b>
      <input></input>
    </div>
    <div style="margin-bottom: 10px;">
      <b>Your grades in Mathematics in your latest examination?</b>
      <input></input>
    </div>
    <input type="submit" value="Next">
  </div>
</div>

<div class="footer">
  <h2>Designed & maintained @ IProblemSolver</h2>
</div>

</body>
</html>
