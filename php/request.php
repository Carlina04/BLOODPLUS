<?php
    session_start();
    $errors = array();
    include ('connection.php');
    $conn->select_db('bloodplus');
    if(isset($_POST['submit'])){
      $_SESSION['req_blood'] = $_POST['req_blood'];
      $_SESSION['patient'] = $_POST['patient'];
      $_SESSION['hos_name'] = $_POST['hos_name'];
      $_SESSION['city'] = $_POST['city'];
      $_SESSION['desc'] = $_POST['desc'];

      /*INFORMATION TABLE*/

      $hos = "SELECT * FROM hosInfo WHERE hos_name = '".$_SESSION['hos_name']."'";
      $address = "SELECT * FROM completeadd WHERE city = '".$_SESSION['city']."'";

      $hoss = $conn->query($hos);
      $hosss = $hoss->fetch_assoc();
      $aaddresss = $conn->query($address);
      $addresss = $aaddresss->fetch_assoc();

      $insertinfo = "INSERT INTO infotable(req_blood,patient,hos_id,add_id,desc) 
      VALUES ('".$_SESSION['req_blood']."','".$_SESSION['patient']."', '".$addresss['hos_id']."','".$addresss['add_id']."','".$_SESSION['desc']."')";
      
      if ($conn->query($insertinfo) === TRUE) {
          echo "Form submitted!";
      }else {
          echo "Error: <br>" . $conn->error;
      }
    }
   }
   ?>
