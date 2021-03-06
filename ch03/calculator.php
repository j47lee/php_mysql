<?php
  $page_title = "Calculator";
  include('includes/header.html');



  function calculate_trip_cost($miles, $mpg, $ppg) {
    $gallons = $_POST['distance'] / $_POST['efficiency'];
    $dollars = $gallons * $_POST['gallon_price'];
    return $dollars;
  }// end function

  //form submission
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //form validation
    if(isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency'])
      && is_numeric($_POST['distance'])
      && is_numeric($_POST['gallon_price'])
      && is_numeric($_POST['efficiency'])){
        //calculation
        calculate_trip_cost($_POST['distance'], $_POST['efficiency'], $_POST['gallon_price']);
        $hours = $_POST['distance']/65;

        echo '<h1>Total Estimated Cost</h1><p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging ' . $_POST['efficiency'] . ' miles per gallon, and paying an average of $' . $_POST['gallon_price'] . ' per gallon, is $' . number_format ($dollars, 2) . '. If you drive at an average of 65 miles per hour, the trip will take approximately ' . number_format($hours, 2) . ' hours.</p>';

    } else {
      echo '<h1>Error!</h1><p class="error">Please enter a valid distance, price per gallon, and fuel efficiency.</p>';
    }//end form validation
  } //end form submission

  function create_gallon_radio($value, $name = 'gallon_price'){
    echo '<input type="radio" name="' . $name . '" value="' . $value . '"';
    if (isset($_POST['gallon_price']) && $_POST['gallon_price']==="$value") {
      echo "checked='checked'";
    }
    echo '/> ' . $value;
  } //end function


?>

<h1>Trip Cost Calculator</h1>
<form action="calculator.php" method="post">
  <div>Distance:
    <input type="text" name="distance" value="<?php if(isset($_POST['distance'])){echo $_POST['distance'];} ?>">
  </div>
  <div>Ave. price per gallon:
    <?php
      create_gallon_radio('3.00');
      create_gallon_radio('3.50');
      create_gallon_radio('4.00');
      create_gallon_radio('4.50');
      create_gallon_radio('5.00');
    ?>
  </div>
  <div>Fuel Efficiency:
    <select name="efficiency">
      <option value="10" <?php
        if (isset($_POST['efficiency']) && $_POST['efficiency']==="10") {
          echo "selected=selected";
        }
      ?>>Terrible</option>
      <option value="20" <?php
        if (isset($_POST['efficiency']) && $_POST['efficiency']==="20") {
          echo "selected=selected";
        }
      ?>>Decent</option>
      <option value="30" <?php
        if (isset($_POST['efficiency']) && $_POST['efficiency']==="30") {
          echo "selected=selected";
        }
      ?>>Good</option>
      <option value="40" <?php
        if (isset($_POST['efficiency']) && $_POST['efficiency']==="40") {
          echo "selected=selected";
        }
      ?>>Outstanding</option>
    </select>
  </div>
  <div><input type="submit" name="submit" value="Calculate!"></div>
  <div></div>

</form>

<?php include('includes/footer.html'); ?>
