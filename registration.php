<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
  <style>
    .col-md-3.b{
        padding: 5px;
        margin-right: 59px;
    }
    .col-md-5{
        padding: 0px;
    }
    .head{
      height: 100px;
      width: 100%;
    }
    img{
      height: 300px;
      width: 350px;
    }
  </style>
<body>

  <?php
    session_start();
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
      $_SESSION['password'] = $_POST['password'];

      /*COMPLETE NAME*/
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
      VALUES ('".$infos['info_id']."', '".$_SESSION['email_add']."','".$_SESSION['password']."', 'User')";
      
      if ($conn->query($insertuser) === TRUE) {
          echo $_SESSION['province']. ": New address inserted successfully";
      }else {
          echo "Error: <br>" . $conn->error;
      }

    //  header('Location: home.php');
   }


  ?>

  <div class="head"><img src="img/logoblood.png"></div>
    <div class="container">
      <h1>REGISTRATION FORM</h1>
      <form method="POST" action="registration.php">
        <div class="form-row" action="">
            <div class="form-group col-md-4">
              <label >First Name</label>
              <input type="text" class="form-control" name="fName" placeholder="First Name" required>
            </div>
            <div class="form-group col-md-4">
              <label>Middle Name</label>
              <input type="text" class="form-control" name="mName" placeholder="Middle Name" required>
            </div>
            <div class="form-group col-md-4">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lName" placeholder="Last Name" required>
              </div>
          </div>

          <div class="form-group col-md-5">
            <label>Birthdate</label>
            <input type="date" class="form-control" name="bday" value="2020-11-18" min="1950-01-01" max="2020-11-18" required>
          </div>

          <div class="form-row">
            <div class="form-group col-md-3 b">
                <label>Gender</label><br>
                <select name="gender" class="form-control" required>
                <option selected>Choose..</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label>Blood Type</label>
                <select name="blood" class="form-control" required>
                <option selected>Choose..</option>
                <option value="A-">A-</option>
                <option value="A+">A+</option>
                <option value="B-">B-</option>
                <option value="B+">B+</option>
                <option value="O-">O-</option>
                <option value="O-">O+</option>
                <option value="AB-">AB-</option>
                <option value="AB+">AB+</option>
                </select>
            </div>
          </div>

          <div class="form-group col-md-5">
            <label>Phone Number</label>
            <input type="tel" class="form-control" name="contact" placeholder="09XXXXXXXXX" pattern="^(09)\d{9}$" required>
          </div>
          <div class="form-group col-md-5">
            <label >Email</label>
            <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
          </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label>Province</label>
            <input type="text" class="form-control" name="province" required>
          </div>
          <div class="form-group col-md-3">
            <label>City</label>
            <input type="text" class="form-control" name="city" required>
          </div>
          <div class="form-group col-md-2">
            <label>Barangay</label>
            <input type="text" class="form-control" name="barangay" required>
          </div>

          <div class="form-group col-md-2">
            <label>Street</label>
            <input type="text" class="form-control" name="street">
          </div>
          <div class="form-group col-md-2">
            <label>House No</label>
            <input type="text" class="form-control" name="houseNo">
          </div>
        </div>
         <div class="form-group col-md-5">
            <label>Password</label>
            <input type="password" class="form-control" name="password"required>
          </div>
        <input type="submit" name="submit" class="btn btn-primary">
      </form>
    </div> 

</body>
</html>
