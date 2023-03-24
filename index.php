<!DOCTYPE html>
<!-- Unit2-05-PHP-Salary-->
<html lang="en">
	<head>
    
    <!--Metadata-->
    <meta charset="utf-8">
    <meta name="description" content="salary">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    	<!-- Google's MDL -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css"> 
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-green.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
     <!-- Css file-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Salary program with PHP</title>
	</head>
	<body>
    <h1><?php echo "Salary program with PHP"; ?></h1>
    <?php echo "Please type in this information:"; ?>
    <br>
    
    <!-- Get the hours worked and the hourly rate of the user -->
    <form action="./results.php" method="post" target="results">
      <p>
        <label for="hours-worked">Number of hours worked:</label>
        <input type="text" id="hours-worked" name="hours-worked" placeholder="Hours worked">
      </p>
      <p>
        <label for="hourly-rate">Hourly rate:</label>
        <input type="text" id="hourly-rate" name="hourly-rate" placeholder="Hourly rate">
      </p>
      
      <!-- Raised button with ripple -->
      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
          Pay
      </button>
    </form>
 </body>
</html>