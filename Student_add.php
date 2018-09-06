<?php 
require 'index.php'; 
require 'connectdb.php'; 

//medicine
$sql_data = "SELECT MAX(ac_id) FROM cs_activity";
$res_data = pg_query($db, $sql_data);
$row_data = pg_fetch_row($res_data);
$row_data1 = $row_data[0];
$row_data2 = $row_data1 + 1;

?>




<!DOCTYPE html>
<html>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
    <body>
    <form action="student_insert.php" method="post" id = "from" enctype = "multipart/from-data " >
        
        
        
        
        <div class="container">
            <h2>กรอกข้อมูลกิจกรรม</h2>
            <br>
                                
            </select>
                    </div>
                </div>

              
    
  <!-- data_name_eng -->
  <!--<div class="form-group">
                    <div class="col-md-10">   
                    Picture : <input type="file" name="ac_photo"><br>
                    </div>
                </div> -->
    
      <!-- data_name_eng -->
      <div class="form-group">
                    name :
                    <div class="col-md-10">
                        <input name="ac_name"  type="text" class="form-control">
                    </div>
                </div>

                  <!-- data_image -->
                  <div class="form-group">
                    <label for="ac_photo" class="col-md-2 control-label">รูปภาพ :</label>
                    <div class="col-md-10">
                        <input type="file" name="ac_photo" accept="image/*" required>
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
                        <a href="ac_manage.php" class="btn btn-danger">กลับหน้าหลัก</a>
                    </div>
                </div>
                <br><br>
                
            </form>
        </div>
    </body>
</html>
