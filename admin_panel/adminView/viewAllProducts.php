
<div >
  <h2>Reviews</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Review Image</th>
        <th class="text-center">User Name</th>
        <th class="text-center">Review</th>
        <th class="text-center">Application name</th>
        <th class="text-center">Points</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from reviews2, application2 WHERE reviews2.review_id=application2.review_id";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["review_image"]?>'></td>
      <td><?=$row["user_name"]?></td>
      <td><?=$row["user_review"]?></td>      
      <td><?=$row["application_id"]?></td> 
      <td><?=$row["points"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['review_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['review_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add review
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New review</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">User name:</label>
              <input type="text" class="form-control" id="u_name" required>
            </div>
            <div class="form-group">
              <label for="price">Points:</label>
              <input type="number" class="form-control" id="p_point" required>
            </div>
            <div class="form-group">
              <label for="qty">Review:</label>
              <input type="text" class="form-control" id="rev" required>
            </div>
            <div class="form-group">
              <label>application:</label>
              <select id="app" >
                <option disabled selected>Select application</option>
                <?php

                  $sql="SELECT * from application2";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['review_id']."'>".$row['application_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add review</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   