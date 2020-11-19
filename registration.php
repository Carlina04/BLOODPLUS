<?php include ('register.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>REGISTRATION</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
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
    .error {
        width: 92%; 
        margin: 0px auto; 
        padding: 10px; 
        border: 1px solid #a94442; 
        color: #a94442; 
        background: #f2dede; 
        border-radius: 5px; 
        text-align: left;
      }
    </style>
</head>
<body>

  <div class="head text-center"><img class="imga" src="img/logo1.png"></div>
    <div class="container">
      <h1>REGISTRATION FORM</h1>
      <form method="POST" action="registration.php">
        <?php include('error.php'); ?>
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
          <div class="form-group col-md-5">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="passwordc" required>
          </div>
        <input type="submit" name="submit" class="btn btn-primary">
      </form>
    </div> 

</body>
</html>
