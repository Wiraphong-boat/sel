 <?php 
 require 'connectdb.php'; 
 

 $ac_name    = $_POST['ac_name'];   
 $ac_date    = $_POST['ac_date'];
 $ac_place   = $_POST['ac_place'];
 $ac_detail  = $_POST['ac_detail'];
 $ac_contact = $_POST['ac_contact'];
 $ac_founder = $_POST['ac_founder']; 
 //คำสั่ง sql
        $sql = "INSERT INTO cs_activity (ac_name ,ac_date ,ac_place ,ac_detail ,ac_contact ,ac_founder ,ac_photo) 
                VALUES ('$ac_name','$ac_date','$ac_place','$ac_detail','$ac_contact','$ac_founder','$ac_photo')";
        $result = pg_query($db, $sql);
        
        //check 
        if($result){
            //echo "Complete";
            header("Location:ac_manage.php");
        } else {
            echo pg_last_error($db);
        }
        
        pg_close($db);

