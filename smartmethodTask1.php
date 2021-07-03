
<html>
  
  <head>
  <title>In The Mood?</title>
  
  </head>
  
  <body>
   
  <style>
  body{
    background-image: url(https://www.webhosting.uk.com/blog/wp-content/uploads/2017/09/The-Internet-of-Things-Benefits-and-Challenges-of-IoT-for-Business-SOCIA....png);
  
  }
  .m{
    color: aquamarine;
    margin-top: 20px;
    margin-left: 20px;
  }
  #range1,#range2,#range3,#range4,#range5,#range6{
    width: 300px;
      height: 15px;
  }
  #m1{
    font-size: x-large;
  }
  .submit{
    
    background-color: aquamarine;
    border:#E5EEC1;

  }



  #b1{
  tab-size: 30px;
  }
  
  
  
  </style>
 <div class="m" >
<form action="" method="POST"  >
  <br>
    <div id="m1"><label for="m1">1 engine</label><div id="sliders1">
    <label class="range1" for="r1"></label>
    <input id="range1" type="range" value="0" min="0" max="180"  id="t1" name=t1 />
    <output for="fader" id="t1" >0</output>
  
  <br>
    <div id="m2">
      <label for="m2">2 engine</label>
      <div id="sliders2">
      <label class="range2" for="range2"></label><input id="range2" type="range"value="0" min="0" max="180"   id="t2" name=t2  />
      <output for="fader" id="t2" name=t2>0</output>
   <br>
    
     <div id="m3">
        <label for="m3">3 engine</label>
        <div id="sliders3">
        <label class="range3" for="range3"></label><input id="range3" value="0" type="range" min="0" max="180" id="t3" name=t3 />
       <output for="fader" id="t3" name=t3>0</output>
    
  <br>
    <div id="m4">
      <label for="m4">4 engine</label>    
      <div id="sliders4">
      <label class="range4" for="range4"></label><input id="range4" value="0" type="range" min="0" max="180" id="t4" name=t4 />
      <output for="fader" id="t4" name=t4>0</output>
  
  
    <br>
     <div id="m5">
       <label for="m5">5 engine</label>    
       <div id="sliders5">
       <label class="range5" for="range5"></label><input id="range5" value="0" type="range" min="0" max="180"  id="t5" name=t5 />
       <output for="fader" id="t5" name=t5>0</output>
    
  <br>
    
    <div id="m6">
      <label for="m6">6 engine</label>    
      <div id="sliders6">
      <label class="range6" for="range6"></label><input id="range6" value="0" type="range" min="0" max="180"  id="t6" name=t6 />
      <output for="fader" id="t6" name=t6>0</output>

      
      
      <div >
        
  <br>
      <button type="Submit" name="Submit" class="submit" >Submit</button>
      <button type="Submit" name="save" class="submit" >save</button>


    </div>
  
  
  </from>
  
  
  
  <script>
    document.querySelector("#sliders1","#sliders2","#sliders3","#sliders4" ,"#sliders5","#sliders6").addEventListener("change", function(e) {
    var cur = event.target;
  
   var m1=  document.querySelector("#t1").textContent = document.querySelector("#range1").value * 1
   var m1= document.querySelector("#t2").textContent = document.querySelector("#range2").value * 1
   var m1= document.querySelector("#t3").textContent = document.querySelector("#range3").value * 1
   var m1= document.querySelector("#t4").textContent = document.querySelector("#range4").value * 1
   var m1= document.querySelector("#t5").textContent = document.querySelector("#range5").value * 1
   var m1= document.querySelector("#t6").textContent = document.querySelector("#range6").value * 1
  
  })
  
  
  </script>
  
</div>
  
    <hr><hr>
  </body>
  </html>

  <?php
  

  $username = "root";
   $password = "";
   $database = new 
   PDO("mysql:host=localhost; dbname=smartmethod;",$username,$password);
   $username = "root";
   $password = "";
   $database = new 
   PDO("mysql:host=localhost; dbname=smartmrthod2;",$username,$password);



   if(isset($_POST['save'])){
    $m1=$_POST['t1'];
    $m2=$_POST['t2'];
   $m3=$_POST['t3'];
   $m4=$_POST['t4'];
   $m5=$_POST['t5'];
   $m6=$_POST['t6'];
    
    $addData = $database->prepare("INSERT INTO smartmethod(m1,m2,m3,m4,m5,m6,mt)
    VALUES(:m1,:m2,:m3,:m4,:m5,:m6,'f')");
    
     $addData->bindParam("m1",$m1);
     $addData->bindParam("m2",$m2);
     $addData->bindParam("m3",$m3);
     $addData->bindParam("m4",$m4);
     $addData->bindParam("m5",$m5);
     $addData->bindParam("m6",$m6);

     
    if($addData->execute()){
      echo 'تم الحفظ بقاعدة بيانات';
     
    }else{
      echo'فشل الحفظ  بقاعدة بيانات';
      echo '  ';
    }
    }

   if(isset($_POST['Submit'])){
     $run="t";
    $addData = $database->prepare("INSERT INTO run(run) VALUES(:run)");
        $addData->bindParam("run",$run);

     
    if($addData->execute()){
      echo 'تم الحفظ والتشغيل بقاعدة بيانات';
     
    }else{
      echo'فشل الحفظ والتشغيل بقاعدة بيانات';
      echo '  ';
    }
    }
        




    ?>
 
 