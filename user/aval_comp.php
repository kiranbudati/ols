<?php 
	include('../config.php');

	$cname=mysql_real_escape_string($_GET['comp_name']);

$comp_name = "SELECT * FROM components WHERE comp_name='$cname'";

$result1 = mysql_query($comp_name) or die(mysql_error()); 
If (mysql_num_rows($result1) > 0) {
	
    while ($row = mysql_fetch_array($result1)) {
        ?>	
				<?php echo "Available:".$row['aval_comp']; $aval_comp = $row['aval_comp']; ?>	


				<input type="number" min="1" max="<?php echo $aval_comp ?>"  class="form-control" name="num_comp" id="num_comp" required>
        <?php
    }

}

?>