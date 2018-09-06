<?php
    require 'index.php';   
    require 'connectdb.php';      
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            var url = window.location; 
            // Will only work if string in href matches with location  

           $('ul.nav a[href="'+ url +'"]').parent().addClass('active');    
           // Will also work for relative and absolute hrefs  

           $('ul.nav a').filter(function() { 
                return this.href == url;
           }).parent().addClass('active');
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="student_add.php" class="btn btn-primary" >
                        <span class="glyphicon glyphicon-plus"> เพิ่มข้อมูลกิจกรรม</span>
                    </a>                    
                </div>
                
               
            </div>
            
            <h2>ข้อมูลกิจกรรม</h2> 
            <table class="table table-bordered">
                <thead>
                    
                    <!-- แบ่งหน้า -->
                    <?php 
                        //กำหนดจำนวนหน้า
                        $perpage = 20;
                        
                        //เช็คว่าเป็นค่าว่างหรือไม่
                        if (isset($_post['page'])) {
                            $page = $_post['page'];
                        } else {
                            $page = 1;
                        }

                        $start = ($page - 1) * $perpage;

                        $sqlPage = "SELECT * FROM cs_activity
                                    ORDER BY ac_id ASC limit {$perpage} offset {$start}
                                   ";
                        $queryPage = pg_query($db, $sqlPage);
                    ?>
                    
                    
                        <!--<th><center>#</center></th>-->
                        <th><center>ชื่อกิจกรรม</center></th>
                        <th><center>รูปกิจกรรม</center></th>
                        <th><center>ดูข้อมูล</center></th>
                        <th><center>แก้ไข</center></th>
                        <th><center>ลบ</center></th>
                    
                </thead>
                
                <!-- show data -->
                <?php while($row = pg_fetch_array($queryPage)){ ?>
                <tbody>
                    <tr>
                        <!-- ลำดับ 
                        <td><center><?php echo $row['ac_id']; ?></center></td>-->
            
                        <!-- ประเภท -->
                        <td><center><?php echo $row['ac_name']; ?></center></td>
            
                        <!-- img -->
                        <td><center><img src="C:\xampp\htdocs\data\sel\images<?php echo $row['ac_photo']; ?>" style="width:100px;height:100px;"></center></td>
            
                        <!-- ดูข้อมูล -->
                        <td><center><a href="show_herb_data.php?data_id=<?php echo $row['data_id']; ?>" class="btn btn-info btn-md">
                                
                        </a></center></td>
                        
                        <!-- edit -->
                        <td><center><a href="frm_herb_edit.php?data_id=<?php echo $row['data_id']; ?>" class="btn btn-warning btn-md">
                                <span class="glyphicon glyphicon-edit"></span>
                        </a></center></td>
                        
                        <!-- delete -->
                        <td><center><a href="herb_delete.php?data_id=<?php echo $row['data_id']; ?>" class="btn btn-danger btn-md">
                                <span class="glyphicon glyphicon-remove"></span>
                        </a></center></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            
                <?php
                    $sql2 = "select * from cs_activity ";
                    $query2 = pg_query($db, $sql2);
                    $total_record = pg_num_rows($query2);
                    $total_page = ceil($total_record / $perpage);
                ?>

                <nav>
                    <ul class="pagination">
                        <li class="active">
                            <a href="ac_manage.php?page=1" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                            <li><a href="ac_manage.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php } ?>
                            <li class="active">
                            <a href="ac_manage.php?page=<?php echo $total_page; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
        </div>
    </body>
</html>