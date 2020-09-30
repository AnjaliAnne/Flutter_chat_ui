<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
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
  padding: 80px;
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
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
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
  padding: 1px;
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
  <h1>IProblemSolver</h1>
  <h3>The <b>complete</b> solution is here.</h3>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="#" class="active">Register</a>
  <a href="#" class="right">Link</a>
</div>

<div class="row">
  <div class="side">
  <h2>About Us</h2>
    <h5>Educational technology:</h5>
    <div style="height:310px;">
    <img src="KK.jpeg" alt="image" style="width: 100%;">
    </div>
    <p>The Learning App is the common brand name for Think and Learn Private Ltd., an Indian educational technology and online tutoring firm founded in 2011 by Byju Raveendran at Bangalore. In March 2019, it was the world's most valued edtech company at $5.4 billion.</p>
    
  </div>
  <div class="main">
  <h2>Register your account</h2>
    <form action=home.php>
    <p>
    Email:
    <input type="email" placeholder="Enter here" style="width: 30%;">
    </p>
    <p>
    Name:
    <input type="text" placeholder="Enter here" style="width: 30%;">
    </p>
    <p>
    Phone No:
    <input type="number" placeholder="Enter here" style="width: 30%;">
    </p>
    <p>
    Password:
    <input type="password" placeholder="Enter here" style="width: 30%;">
    </p>
    <p>
    Confirm Password:
    <input type="password" placeholder="Enter here" style="width: 30%;">
    </p>
    <input type="submit" style="background: #1a88bc;padding: 7px;border-radius: 5px;">
    </form>
  </div>
</div>

<div class="footer">
  <h2>Designed & maintained @ IProblemSolver</h2>
</div>

</body>
</html>
