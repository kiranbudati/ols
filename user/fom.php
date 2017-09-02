       <div class="scrollit">
       <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($result)>0)
                           {
                             while($row=mysql_fetch_array($result))
                             {  

                        ?>
                        <tr>
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

<form class="form-horizontal" action="" method="POST" name="search_form">
               <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" name="search" type="text" required="">
                      <span class="input-group-btn">
                        <input type="submit" name="submit" class="btn btn-primary" value="Search">
                      </span>
                  </div>
                </div>
              </form>


              <div class="col-md-8 " style=" word-break:break-all;display: inline-block;    box-shadow: 5px 5px 2px #888888;
">
        <img src="img.jpg" style='height: 100%; width: 100%; object-fit: contain'/>
          dasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfkshdasgdagdagdhgahgdhagdahsgdhagsdhagdagskjdfjshjfhskjfhksjhfksdhfksh
        </div>