<?php
    $system = $_POST['sysno'];
    $maint = $_POST['maint'];
    $room = $_POST['room'];
    $des = $_POST['des'];
    $datee = date("Y-m-d");
    echo $system;
    //echo $maint;
    echo $room;
    echo $datee;
     $conn = new mysqli('localhost','root','','infradb');
     if($conn->connect_error){
        echo "connection error";
     }
     else{
        $ch = "";
    foreach($maint as $chk1)  
   {  
      $ch .= $chk1.",";  
   }  
         $sql = "INSERT INTO complaint(system,maint,room,status,date) VALUES ($system,'$ch','$room','Pending','$datee')";
         if(mysqli_query($conn, $sql)){
            echo "<script type = \"text/javascript\">
            window.location = (\"home_page.php\")
            </script>";
         }
     else{
         echo "ERROR ";
         
     }
   }
?>
