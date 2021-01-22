  <?php
    session_start();
    $errors = array();
    include ('connection.php');
    $conn->select_db('bloodplus');
    if(isset($_POST['submit'])){
      $_SESSION['last_name'] = $_POST['lName'];
      $_SESSION['mid_name'] = $_POST['mName'];
      $_SESSION['first_name'] = $_POST['fName'];
      $_SESSION['gender'] = $_POST['gender'];
      $_SESSION['bday'] = $_POST['bday'];
      $_SESSION['blood_type'] = $_POST['blood'];
      $_SESSION['contact_num'] = $_POST['contact'];
      $_SESSION['email_add'] = $_POST['email'];
      $_SESSION['province'] = $_POST['province'];
      $_SESSION['city'] = $_POST['city'];
      $_SESSION['barangay'] = $_POST['barangay'];
      $_SESSION['street'] = $_POST['street'];
      $_SESSION['houseNo'] = $_POST['houseNo'];
      $password = $_POST['password'];
      $passwordc = $_POST['passwordc'];

      /*CHECK PASSWORD AND UNIQUE EMAIL*/
      $user_check_query = "SELECT * FROM userstable WHERE email= '".$_SESSION['email_add']."'";
        $result = $conn->query($user_check_query);
        $user = $result->fetch_assoc();

        if ($user) { // if user exists
          if ($user['email'] === $_SESSION['email_add']) {
            array_push($errors, "Email already exists!");
          }
        }
      
      if ($password != $passwordc) {
      array_push($errors, "The two passwords do not match!");
      }


      /*COMPLETE NAME*/
      if (count($errors) == 0) {
      $insertName = "INSERT INTO completename(last_name, mid_name, first_name) VALUES ('".$_SESSION['last_name']."', '".$_SESSION['mid_name']."', '".$_SESSION['first_name']."')";

      if ($conn->query($insertName) === TRUE) {
              echo $_SESSION['first_name']. ": New patient inserted successfully";
      }else {
          echo "Error: <br>" . $conn->error;
      }

      /*COMPLETE ADDRESS*/
      $insertAdd = "INSERT INTO completeadd(province, municipality, barangay, street, house_num) 
      VALUES ('".$_SESSION['province']."', '".$_SESSION['city']."', '". $_SESSION['barangay']."', '".$_SESSION['street']."', '".$_SESSION['houseNo']."')";
      
      if ($conn->query($insertAdd) === TRUE) {
          echo $_SESSION['province']. ": New address inserted successfully";
      }else {
          echo "Error: <br>" . $conn->error;
      }

      /*CONTACT*/
       $insertContact = "INSERT INTO contacttable(contact_num, email_addr) 
      VALUES ('".$_SESSION['contact_num']."', '".$_SESSION['email_add']."')";
      
      if ($conn->query($insertContact) === TRUE) {
          echo $_SESSION['contact_num']. ": New number inserted successfully";
      }else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      /*INFORMATION TABLE*/

       $name = "SELECT * FROM completename WHERE last_name = '".$_SESSION['last_name']."'";
      $address = "SELECT * FROM completeadd WHERE house_num = '".$_SESSION['houseNo']."'";
      $contact = "SELECT * FROM contacttable WHERE contact_num = '".$_SESSION['contact_num']."'";

      $anames = $conn->query($name);
      $names = $anames->fetch_assoc();
      $aaddresss = $conn->query($address);
      $addresss = $aaddresss->fetch_assoc();
      $acontacts = $conn->query($contact);
      $contacts = $acontacts->fetch_assoc();

      $insertinfo = "INSERT INTO infotable(name_id, birthdate, add_id, gender_id, contact_id, blood_type) 
      VALUES ('".$names['name_id']."','".$_SESSION['bday']."', '".$addresss['add_id']."','".$_SESSION['gender']."', '".$contacts['contact_id']."', '".$_SESSION['blood_type']."')";
      
      if ($conn->query($insertinfo) === TRUE) {
          echo $_SESSION['province']. ": New address inserted successfully";
      }else {
          echo "Error: <br>" . $conn->error;
      }

      /*USER TABLE*/
      
       $info = "SELECT * FROM infotable WHERE name_id = '".$names['name_id']."'";

       $ainfos = $conn->query($info);
       $infos = $ainfos->fetch_assoc();
       $insertuser = "INSERT INTO userstable(info_id, email, password, user_type) 
      VALUES ('".$infos['info_id']."', '".$_SESSION['email_add']."','".$password."', 'User')";
      
      if ($conn->query($insertuser) === TRUE) {
          echo $_SESSION['province']. ": New address inserted successfully";
      }else {
          echo "Error: <br>" . $conn->error;
      }
        header('Location: userspage.php');
    }
   }
   ?>
