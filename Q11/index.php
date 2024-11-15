<?php
// Check if the user has submitted the form
if(isset($_POST['submit'])){
  // Get the selected colors from the form
  $foreground = $_POST['foreground'];
  $background = $_POST['background'];
  
  // Set the colors as cookies
  setcookie('foreground', $foreground, time() + (86400 * 30), "/");
  setcookie('background', $background, time() + (86400 * 30), "/");
}

// Check if the color cookies are set
if(isset($_COOKIE['foreground']) && isset($_COOKIE['background'])){
  // Get the selected colors from the cookies
  $foreground = $_COOKIE['foreground'];
  $background = $_COOKIE['background'];
}else{
  // Set default colors if the cookies are not set
  $foreground = '#000000'; // black
  $background = '#ffffff'; // white
}

// Color array
$color = array(
  'black' => "#000000",
  'white' => "#ffffff",
  'red' => "#ff0000",
  'blue' => "#0000ff"
);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Color Picker</title>
  <style>
  body {
  background-color: <?php echo $background; ?>;
  color: <?php echo $foreground; ?>;
  }
  </style>
</head>
<body>
  <h1>Color Picker</h1>
  <form method="post" action="">

  <label for="foreground">Foreground Color:</label>

  <select name="foreground" id="foreground">
  <?php
  // Display the color options
  foreach($color as $name => $value){
  echo "<option value=\"$value\" " . ($foreground == $value ? "selected" : "") . ">$name</option>";
  }
  ?>
  </select>

  <br> <br>

  <label for="background">Background Color:</label>

  <select name="background" id="background">
  <?php
  // Display the color options
  foreach($color as $name => $value){
  echo "<option value=\"$value\" " . ($background == $value ? "selected" : "") . ">$name</option>";
  }
  ?>
  </select>

  <br> <br>

  <input type="submit" name="submit" value="Save">
  </form>
  
  <h2>Confirmation:</h2>
  <p>Foreground Color: <?php echo $foreground; ?></p>
  <p>Background Color: <?php echo $background; ?></p>
</body>
</html>