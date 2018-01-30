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
    <div class="comp-part">
      <?php echo $row['competitor'] . "<br>" . $row['model'] . " " . $row['type_size']; ?>
    </div>
    <div>Compare to our</div>
    <div class="rathi-part">
      Rathi<br><?php echo $row['model'] . " " . $row['rathi_type_size']; ?>
    </div>
  </div>
  <a href="<?php echo $_POST['topdir'] . strtolower($row['type']); ?>.php">See Rathi part details</a>
  <?php
} else {
  ?>
  <h1>No Equivalent Found</h1>
  Contact us for more information.<br>
  <a href="<?php echo $_POST['topdir']; ?>about.php">Contact a Rathi rep</a>
  <?php
}

$result->close();
?>