<?php
  //define constant
  define('TAX_RATE', 0.2005);
  //get the total pay and the money the government takes away
  $hoursWorked = isset($_POST["hours-worked"]) ? $_POST["hours-worked"] : 0;
  $hourlyRate = isset($_POST["hourly-rate"]) ? $_POST["hourly-rate"] : 0;

  $totalPay = $hoursWorked * $hourlyRate;
  $tax = $totalPay * TAX_RATE;
  $takeHomeSalary = $totalPay - $tax;
?>
<h3>Results:</h3>
Your pay will be $<?php echo number_format($takeHomeSalary, 2); ?>