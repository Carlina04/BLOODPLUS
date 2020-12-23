
<!DOCTYPE html>
<html>
  <head>
    <title>REGISTRATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
<body>

  <div class="d-flex shadow-sm position-sticky p-3 bg-white rounded justify-content-between align-items-center container-fluid registration-nav ">
    <div class="container">
      <button class="btn"><i class="fas fa-chevron-left"></i></button>
    </div>
    <div class="container text-center">
      
    </div>
    <div class="container d-flex justify-content-end">
      <button class="btn-sm btn btn-outline-primary">Login Instead</button>
    </div>
  </div>
  <form class="" action="" method="post">
  
    <div class="container-fluid px-5 registration-form">
      <div class="form-group my-5">
        <p class="h5">Registration Form<hr></p>
        <div class="form-group h6">
          <label>First Name</label>
          <input type="text" class="form-control" name="fName" placeholder="e.g. John" required>
        </div>
        <div class="form-group h6">
          <label>Middle Name</label>
          <input type="text" class="form-control" name="mName" placeholder="e.g. Brown" required>
        </div>
        <div class="form-group h6">
          <label>Last Name</label>
          <input type="text" class="form-control" name="lName" placeholder="e.g. Smith" required>
        </div>
        <div class="form-group h6 mt-4 mb-0 row">
          <div class="col-7">
            <div class="form-group">
              <label>Birthdate</label>
              <input type="date" class="form-control" name="bday" value="2020-11-18" min="1950-01-01" max="2020-11-18" required>
            </div>
          </div>
          <div class="col-5">
            <div class="form-group">
                <label>Gender</label><br>
                <select name="gender" class="form-control" required>
                <option selected hidden>Choose...</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
                </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Blood Type</label>
          <select name="blood" class="form-control" required>
          <option selected hidden>Choose...</option>
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
        <div class="form-group h6 mt-4 mb-0 row">
          <div class="col-5">
            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" class="form-control" name="contact" placeholder="09XXXXXXXXX" pattern="^(09)\d{9}$" required>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label >Email Address</label>
              <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
            </div>
          </div>
        </div>
        <div class="form-group h6 mt-2 mb-0">
          <label>Complete Address</label>
          <div class="container font-weight-normal">
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>House No</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="houseNo" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Street</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="street" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Barangay</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="barangay" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>City</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="city" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-3 py-2">
                <label>Province</label>
              </div>
              <div class="form-group col-9 p-0">
                <input type="text" class="form-control" name="province" required>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid registration-password bg-dark text-light mt-0 px-5 py-3 form-group">
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password"required>
      </div>
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="passwordc" required>
      </div>
      <div class="form-group text-center my-4">
        <button class="btn btn-primary w-50">Register</button>
      </div>
    </div>
    
  </form>

</body>
<?php include ('scripts.php'); ?>
</html>
