<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Feedback</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
  <?php
      if(!empty($_POST['name'])){
        $name = $_POST['name'];
      } else {
        $name = NULL;
        echo "<p class='error'>Please provide a name.</p>";
      }

      if(!empty($_POST['email'])){
        $email = $_POST['email'];
      } else {
        $email = NULL;
        echo "<p class='error'>Please provide an email address.</p>";
      }

      if(!empty($_POST['comments'])){
        $comments = $_POST['comments'];
      } else {
        $comments = NULL;
        echo "<p class='error'>Please provide your comments.</p>";
      }

      if(isset($_POST['gender'])){
        // check if male, female or something else
        $gender = $_POST['gender'];
        if($gender === "M"){
          echo "<p>Greetings, sir.</p>";
        } elseif ($gender === "F"){
          echo "<p>Greetings, madame.</p>";
        } else {
          $gender = NULL;
          echo "<p class='error'>A gender should be either Male or Female only</p>";
        }
      } else {
        $gender = NULL;
        echo "<p class='error'>Please select a gender Male or Female.</p>";
      }

      if($name && $email && $comments && $gender){
        echo "<p>Thank you, $name, for the following comments ($comments). We will get back to you at $email.</p>";
      } else {
        echo "<p>Please go back and complete the form. Thank you.</p>";
      }


  ?>
  </body>
</html>
