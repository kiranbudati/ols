<?php
		
include('../config.php');

$data=mysql_real_escape_string($_GET['comp_type']);

$sql = "SELECT DISTINCT comp_name FROM components WHERE comp_type='$data'";

$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
	
	echo "<option disabled selected value>Select Component Name</option>
";
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <option value="<?php echo $row['comp_name'] ?>"><?php echo $row['comp_name'] ?></option>
        <?php
    }

}


?>