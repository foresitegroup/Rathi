<?php
echo '<option value="">Select Model...</option>';

include_once "inc/fintoozler.php";

if($_POST['manufacturer']) {
  $modresult = $mysqli->query("SELECT * FROM products WHERE competitor = '".$_POST['manufacturer']."' GROUP BY model ORDER BY model ASC");

  while($modrow = $modresult->fetch_array(MYSQLI_ASSOC)) {
    echo '<option value="' . $modrow['model'] . '">' . $modrow['model'] . '</option>';
  }

  $modresult->close();
}
?>