<?php
echo '<option value="">Select...</option>';

include_once "inc/fintoozler.php";

if($_POST['model']) {
  $tsresult = $mysqli->query("SELECT * FROM products WHERE competitor = '".$_POST['manufacturer']."' AND model = '".$_POST['model']."' ORDER BY type_size ASC");

  while($tsrow = $tsresult->fetch_array(MYSQLI_ASSOC)) {
    echo '<option value="' . $tsrow['type_size'] . '">' . $tsrow['type_size'] . '</option>';
  }

  $tsresult->close();
}
?>