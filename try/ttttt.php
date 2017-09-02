  <div class="modal fade" id="adapaters" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adapters</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($adapters_sql)>0)
                           {
                             while($row=mysql_fetch_array($adapters_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- boards Modal -->
  <div class="modal fade" id="boards" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Boards</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($boards_sql)>0)
                           {
                             while($row=mysql_fetch_array($boards_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- bugstrips Modal -->
  <div class="modal fade" id="bugstrips" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bugstrips</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($bugstrips_sql)>0)
                           {
                             while($row=mysql_fetch_array($bugstrips_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- cables Modal -->
  <div class="modal fade" id="cables" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cables</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($cables_sql)>0)
                           {
                             while($row=mysql_fetch_array($cables_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- connectors Modal -->
  <div class="modal fade" id="connectors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connectors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($connectors_sql)>0)
                           {
                             while($row=mysql_fetch_array($connectors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- controllers Modal -->
  <div class="modal fade" id="controllers" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Controllers</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($controllers_sql)>0)
                           {
                             while($row=mysql_fetch_array($controllers_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- converters Modal -->
  <div class="modal fade" id="converters" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Converters</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($converters_sql)>0)
                           {
                             while($row=mysql_fetch_array($converters_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- diodes Modal -->
  <div class="modal fade" id="diodes" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Diodes</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($diodes_sql)>0)
                           {
                             while($row=mysql_fetch_array($diodes_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- glue Modal -->
  <div class="modal fade" id="glue" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Glue</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($glue_sql)>0)
                           {
                             while($row=mysql_fetch_array($glue_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- leds Modal -->
  <div class="modal fade" id="leds" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Leds</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($leds_sql)>0)
                           {
                             while($row=mysql_fetch_array($leds_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- meters Modal -->
  <div class="modal fade" id="meters" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Meters</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($meters_sql)>0)
                           {
                             while($row=mysql_fetch_array($meters_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- modules Modal -->
  <div class="modal fade" id="modules" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modules</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($modules_sql)>0)
                           {
                             while($row=mysql_fetch_array($modules_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- motors Modal -->
  <div class="modal fade" id="motors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Motors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($motors_sql)>0)
                           {
                             while($row=mysql_fetch_array($motors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- potentiometers Modal -->
  <div class="modal fade" id="potentiometers" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Potentiometers</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($potentiometers_sql)>0)
                           {
                             while($row=mysql_fetch_array($potentiometers_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- processors Modal -->
  <div class="modal fade" id="processors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Processors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($rectifiers_sql)>0)
                           {
                             while($row=mysql_fetch_array($rectifiers_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- relay Modal -->
  <div class="modal fade" id="relay" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Relay</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($relay_sql)>0)
                           {
                             while($row=mysql_fetch_array($relay_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- resistors Modal -->
  <div class="modal fade" id="resistors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Resistors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($resistors_sql)>0)
                           {
                             while($row=mysql_fetch_array($resistors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- sensors Modal -->
  <div class="modal fade" id="sensors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sensors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($sensors_sql)>0)
                           {
                             while($row=mysql_fetch_array($sensors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- soldering Modal -->
  <div class="modal fade" id="adapaters" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Soldering</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($soldering_sql)>0)
                           {
                             while($row=mysql_fetch_array($soldering_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- storage Modal -->
  <div class="modal fade" id="storage" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adapters</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($storage_sql)>0)
                           {
                             while($row=mysql_fetch_array($storage_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- transistors Modal -->
  <div class="modal fade" id="transistors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Transistors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($transistors_sql)>0)
                           {
                             while($row=mysql_fetch_array($transistors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- wires Modal -->
  <div class="modal fade" id="wires" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Wires</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>Name</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($wires_sql)>0)
                           {
                             while($row=mysql_fetch_array($wires_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 