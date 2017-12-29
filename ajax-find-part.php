<?php
include_once "inc/fintoozler.php";

$result = $mysqli->query("SELECT * FROM products WHERE competitor = '".$_POST['manufacturer']."' AND model = '".$_POST['model']."' AND type_size = '".$_POST['type-size']."'");

$row = $result->fetch_array(MYSQLI_ASSOC);

if ($row['rathi_type_size'] != "") {
  ?>
  <script type="text/javascript">
    $(document).ready(function() { $('#<?php echo $_POST['fpr_id']; ?>').addClass('part-found'); });
  </script>

  <div>
    Compare the
    <h1><?php echo $row['competitor'] . "<br>" . $row['model'] . " " . $row['type_size']; ?></h1>
  </div>
  <div>
    to our equivalent
    <h1>Rathi<br><?php echo $row['model'] . " " . $row['rathi_type_size']; ?></h1>
  </div>
  <div style="clear: both; width: 100%;"></div>
  <a href="#">See Rathi part details</a>
  <?php
} else {
  ?>
  <h1>No Part Found</h1>
  Contact us for more information.<br>
  <a href="#">Contact a Rathi rep</a>
  <?php
}

$result->close();
?>