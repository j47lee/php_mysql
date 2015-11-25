<?php
  $page_title = "Calculator";
  include('includes/header.html');

  //form submission
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //form validation
    if(isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency'])
      && is_numeric($_POST['distance'])
      && is_numeric($_POST['gallon_price'])
      && is_numeric($_POST['efficiency'])){
        //calculation
        $gallons = $_POST['distance'] / $_POST['efficiency'];
        $dollars = $gallons * $_POST['gallon_price'];
        $hours = $_POST['distance']/65;

        echo '<h1>Total Estimated Cost</h1><p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . ' miles per gallon, and paying an average of $' . $_POST['gallon_price'] . 'per gallon, is $' . number_format ($dollars, 2) . '. If you drive at an average of 65 miles per hour, the trip will take approximately ' . number_format($hours, 2) . ' hours.</p>';

    } else {
      echo '<h1>Error!</h1><p class="error">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
    }//end form validation
  } //end form submission

?>

<h1>Trip Cost Calculator</h1>
<form action="calculator.php" method="post">
  <div>Distance: <input type="text" name="distance"></div>
  <div>Ave. price per gallon:
    <input type="radio" name="gallon_price" value="3.00" /> 3.00
    <input type="radio" name="gallon_price" value="3.50" /> 3.50
    <input type="radio" name="gallon_price" value="4.00" /> 4.00
  </div>
  <div>Fuel Efficiency:
    <select name="efficiency">
      <option value="10">Terrible</option>
      <option value="20">Decent</option>
      <option value="30">Good</option>
      <option value="40">Very Good</option>
      <option value="50">Outstanding</option>
    </select>
  </div>
  <div><input type="submit" name="submit" value="Calculate!"></div>
  <div></div>

</form>

<?php include('includes/footer.html'); ?>
