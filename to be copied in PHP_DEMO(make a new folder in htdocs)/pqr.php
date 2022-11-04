<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("https://1.bp.blogspot.com/-sTxAHAxirGM/WVbAe2098nI/AAAAAAABENs/_I5sYMYgLOUzaIE7FfF4qdGX-hoAkq9SgCLcBGAs/s1600/Blog_20170624_113552.jpg");

  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
.button{
  display:inline-block;
  text-decoration:none;
  color:yellow;
  font-weight:bold;
  min-width:132px;
  min-height:37px;
  border:1px solid black;
  border-radius:12px;
  text-align:center;
  background-color:gray;
  box-shadow:8px 8px 8px gray;
  margin:10px;
  
  }
.button:active{
  background-color:green;
position:relative;
  top:8px;
  left:8px;

}
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
<h2 style="font-size:30px">Select table to view data</h2>
<p>Only for admin to access</p>
<a href="http://localhost/PHP_DEMO/t4 - select.php" class="button" target="_blank">Airline Companies</a>
<a href="http://localhost/PHP_DEMO/t1 - select.php" class="button" target="_blank">Airports</a>
<a href="http://localhost/PHP_DEMO/t2 - select.php" class="button" target="_blank">Airport Employees</a>
<a href="http://localhost/PHP_DEMO/t3 - select.php" class="button" target="_blank">Flight details</a>
<a href="http://localhost/PHP_DEMO/t5 - select.php" class="button" target="_blank">Passenger details</a>
<a href="http://localhost/PHP_DEMO/t6 - select.php" class="button" target="_blank">Ticket details</a>
</a></p></button>
</div>

</body>
</html>