<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
<body class="w3-light-grey">
<div class="w3-light-grey" style="max-width:1400px">
<style>
 h1 { color: #202020 ;
      font-family: "Raleway", sans-serif;}
</style>
 <div>
  <h1 style = "text-align: center;" ><b>Computer science</b></h1>
  </div>
  <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
   href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu">
   <i class="fa fa-bars"></i></a>
   
  <div class="w3-bar w3-black w3-card">
    
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="" class="w3-bar-item w3-button w3-padding-large" onClick="myfunction2()">HOME</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">หลักสูตร <i class="fa fa-caret-down"></i></button>  
        
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href=""  class="w3-bar-item w3-button" onClick="myfunction()" >ป.ตรี</a>
         <a href="" class="w3-bar-item w3-button" onClick="myfunction1()" >ป.โท</a>
         <a href=""  class="w3-bar-item w3-button" onClick="myfunction()" >ป.เอก</a>
         
      </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ข้อมูลนักศึกษา <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
         <a href=""  class="w3-bar-item w3-button"  onClick="myfunction()" >ชั้นปีที่ 1</a>
         <a href=""  class="w3-bar-item w3-button"  onClick="myfunction1()" >ชั้นปีที่ 2</a>
         <a href=""  class="w3-bar-item w3-button"  onClick="myfunction()" >ชั้นปีที่ 3</a>
         <a href=""  class="w3-bar-item w3-button"  onClick="myfunction1()" >ชั้นปีที่ 4</a>
      </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ข้อมูลอาจารย์ <i class="fa fa-caret-down"></i></button>
      </div>
    <a href="ac_manage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">กิจกรรม</a>
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style = "align:right;" >Log in</a>
  </div>
  
  
  </div>
  </div>
  <script>
        function myfunction() {
          window.open("Student.php")
        }
         
         function myfunction1() {

          window.open("Student_1.php")
        }
        function myfunction2() {

        window.open("index.php")
}
        </script>
</div>
</body>
</html>