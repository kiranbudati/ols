<div class="col-sm-4">
      <?php 
      	include('../config.php');
      	$query = mysql_query("SELECT DISTINCT comp_type FROM `components`");
      ?>
      
      <div class="scrollit" id="comp_type_search">
      	<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Avaliable component types</th>
		    </tr>
		  </thead>
		  <tbody>
			<?php
               If(mysql_num_rows($query)>0)
                    {
                        while($row=mysql_fetch_array($query))
                         {  

           ?>
            <tr class="active">
          	   <td id="<?php echo $row['comp_type']; ?>" onclick="typeThis(this);"><?php echo $row['comp_type']; ?></td> 
            </tr> 
           	<?php
             			}
                        }
                         ?>

			      	
		  </tbody>
		</table> 
		</div>
      </div>

      <div class="col-sm-4">
      <div class="scrollit" id="comp_name_search">
        <table class="table table-striped table-hover ">
      <thead>
        <tr>
          <th>Name</th>
          <th>No. of components</th>
        </tr>
      </thead>
      <tbody>
        <tr class="active">
          <td>Column content</td>
          <td>Column content</td>
        </tr>
      </tbody>
    </table> 
  </div>
</div>