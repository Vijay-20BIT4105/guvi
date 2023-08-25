<?php 

session_start();

$USERID = $_SESSION["USERID"];

if($USERID == '')
{
    session_destroy();

    header('location:index.php');
}

// Fetch User All data using USERID


include('config.php');

$query = "SELECT USERNAME,EMAIL,PASSWORD,AGE,GENDER,DOB,CONTACT FROM users WHERE USER_ID = '$USERID'";
 
$result = mysqli_query($conn,$query);

if($result)
{

   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   $USERNAME = $row["USERNAME"];
   $EMAIL = $row["EMAIL"];
   $PASSWORD = $row["PASSWORD"];
   $AGE = $row["AGE"];
   $GENDER = $row["GENDER"];
   $DOB = $row["DOB"];
   $CONTACT = $row["CONTACT"];
}
else
{
    echo "<script> alert('Unexpected Error'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="h2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!-- sweetalert -->
    <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
  
  <script>
    function myFunction() {

if (confirm("Are u sure to logout?!") == true) {
  location.href="logout.php";
} 
    }
</script>
  
  </head>
  <body>
  <div id="sidebar"><center>
    <img src="logo.png" width="70" alt="admin" class="rounded-circle"><h3>GUVI</h3>
    </center>
    <br><br>
    <ul>
      <li><a href="#" onclick="location.reload()" style="color:white;"> PROFILE</a></li>
      <!-- <li>Logout</li> -->
    </ul>
  </div>
  
  <div id="content">
    <div id="navbar">
      <h1>profile</h1><button class="btn btn-danger" onclick="myFunction()" style="margin-left:93%;margin-top: -6%;">Logout</button>
    </div>
    <div class="profile-card">

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <br><br>
                <img src="logo.png" alt="Admin" class="rounded-circle" width="150">
                <h2><b>GUVI</b></h2>
                <div class="mt-3">
                  <br><br><h4>Welcome's you</h4>
                   <h4><?php echo $USERNAME ?></h4>
                   <br><br><br><br>
                   <div class="col-sm-12" >
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      <div class="col-md-8" id="Login_form">
        <div class="card mb-3">
        <div class="card-body">
              <div class="row">
                <center><h4><b>Kindly verify your details</b></h4></center>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $USERNAME ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $EMAIL ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $PASSWORD ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Age</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $AGE ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Date of Birth</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $DOB ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Gender</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                 <?php echo $GENDER ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Contact</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <?php echo $CONTACT ?>
                </div>
              </div>
              <hr>

              <!-- edit button -->
                <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info " href="#" id="showFormLink">Edit</a>
                </div>
                </div>
          </div>
        </div>
        </div>

        <!-- edit form -->



      <div class="col-md-8" id="hiddenForm" hidden>
        <div class="card mb-3">
        <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="<?php echo $USERNAME ?>" id="exampleFormControlInput1" name="FullName" placeholder="Ex: Vijay" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="email" class="form-control" value="<?php echo $EMAIL ?>" id="exampleFormControlInput1" name="Email" placeholder="name@example.com" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Password</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="<?php echo $PASSWORD ?>" id="exampleFormControlInput1" name="Password" placeholder="password" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Age</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="number" class="form-control" value="<?php echo $AGE ?>" id="exampleFormControlInput1" name="Age" placeholder="Age" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Date of Birth</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="date" class="form-control" value="<?php echo $DOB ?>" id="exampleFormControlInput1" name="Dob" required >
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Gender</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control"  value="<?php echo $GENDER ?>" id="exampleFormControlInput1" name="Gender" placeholder="Gender" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Contact</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="number" class="form-control" value="<?php echo $CONTACT ?>" id="exampleFormControlInput1" name="Contact" placeholder="Mobile Number" required>
                </div>
              </div>
              <hr>
              <!-- edit button -->
                <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info " href="#" onclick="Update()">Update</a>
                  <a class="btn btn-info " id="showLogLink" href="#" >Back</a>
                </div>
                </div>
          </div>
        </div>
        </div>



    </div>
  </div>
<script>
    function Update(){

        var FullName = $("input[name=FullName]").val();
        var Email = $("input[name=Email]").val();
        var Password = $("input[name=Password]").val();
        var Age = $("input[name=Age]").val();
        var Dob = $("input[name=Dob]").val();
        var Gender = $("input[name=Gender]").val();
        var Contact = $("input[name=Contact]").val(); 

        var user_info = {
            FullName : FullName,
            Email:Email,
            Password:Password,
            Age:Age,
            Dob:Dob,
            Gender:Gender,
            Contact:Contact,
            UserId:<?php echo  $USERID; ?>
        }

        $.ajax({
                type: "POST",
                url: 'update.php',
                data: user_info,
                success: function(response)
                {
                    var response = JSON.parse(response);
                    if(response)
                    {
                        console.log(response.status);

                        if(response.status == 'success')
                        {
                          Swal.fire({
                 icon: 'success',
                 title: 'Record has been updated',
                showConfirmButton: false,
                 timer: 1500
            }).then(function () {
                     location.reload();
                });
                            
                        }
                        else if(response.status == 'failed')
                        {
                                swal.fire(response.error);
                        }
                    }
                    else
                    {
                        console.log('Error');
                    }
                }
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
    const formContainer = document.getElementById("container1");
    const showFormLink = document.getElementById("showFormLink");
    const hiddenForm = document.getElementById("hiddenForm");
    const Login_form=document.getElementById("Login_form");
    const showLogLink =document.getElementById("showLogLink");
    showFormLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default link behavior
        hiddenForm.toggleAttribute("hidden");
        Login_form.style.display="none";
    });
    showLogLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default link behavior
        Login_form.style.display="block";
        hiddenForm.toggleAttribute("hidden");
        
    });

});
</script>
    
</body>
</html>