<?php require 'index.php'; ?>
<?php require 'connectdb.php'; ?>


<?php
                                        $sql_cs_activity = "SELECT * FROM cs_activity";
                                        $res_cs_activity = pg_query($db, $sql_cs_activity);
                                    
                                        while($row_cs_activity = pg_fetch_array($res_cs_activity))
                                        {
                                            $ac_name = $row_cs_activity['ac_name'];
                                            $ac_id = $row_cs_activity['ac_id'];
                                            echo "<option value='$ac_name'>$ac_id</option>";
                                        }
                                    ?>


<!DOCTYPE html>
<html>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
    <body>
    <form action="index.php" method="post"></form>
        <div class="container">
            <h2>กรอกข้อมูลกิจกรรม</h2>
            <br>
                                
                            </select>
                    </div>
                </div>

                <!-- data_name_eng -->
                <div class="form-group">
                    id :
                    <div class="col-md-10">
                        <input name="ac_id" type="text" class="form-control">
                    </div>
                </div>
    
  <!-- data_name_eng -->
  <div class="form-group">
                   photo :
                    <div class="col-md-10">
                        <input name="ac_photo" type="text" class="form-control">
                    </div>
                </div>
    
      <!-- data_name_eng -->
      <div class="form-group">
                    name :
                    <div class="col-md-10">
                        <input name="ac_name" type="text" class="form-control">
                    </div>
                </div>
    
      <!-- data_name_eng -->
      <div class="form-group">
                   date :
                    <div class="col-md-10">
                        <input name="ac_date" type="text" class="form-control">
                    </div>
                </div>
    
      <!-- data_name_eng -->
      <div class="form-group">
                    place :
                    <div class="col-md-10">
                        <input name="ac_place" type="text" class="form-control">
                    </div>
                </div>
    
      <!-- data_name_eng -->
      <div class="form-group">
                    detail :
                    <div class="col-md-10">
                        <input name="ac_detail" type="text" class="form-control">
                    </div>
                </div>
    
      <!-- data_name_eng -->
      <div class="form-group">
              contact :
                    <div class="col-md-10">
                        <input name="ac_contact" type="text" class="form-control">
                    </div>
                </div>
    

                 <!-- data_name_eng -->
      <div class="form-group">
                   founder :
                    <div class="col-md-10">
                        <input name="ac_founder" type="text" class="form-control">
                    </div>
                </div>
    
                <!-- button -->
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="index.php" class="btn btn-danger">กลับหน้าหลัก</a>
                    </div>
                </div>
                <br><br>
                
            </form>
        </div>
    </body>
</html>
