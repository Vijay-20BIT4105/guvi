<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUVI</title>
    <link rel="stylesheet" href="h1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--sweetalert-->
    <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
<body style="background-image: url('bg.png');background-color: #000000; background-repeat:no-repeat;background-size: cover;height: 100%;font-family: sans-serif;background-position: center;overflow: hidden;">
<div class="loginBox">
<div id="Login_form"> <img class="user" src="logo1.png" height="100px" width="100px">
    <!-- <h3>Sign in here</h3> -->
    <div action="login.php" method="post">
        <h3>Sign in here</h3>
        <div class="inputBox"> <input  type="text" name="Login_Email" placeholder="Username" required> <input  type="password" name="Login_Password" placeholder="Password" required> </div> 
        <input type="submit"  value="Login" onclick="Login()">
    </div> 
    <!-- <a href="#">Forget Password<br> </a> -->
    <div class="text-center">
        <a style="color: #59238F;" href="#" id="showFormLink">Sign-Up</a>
    </div>
</div>

    <div id="hiddenForm" hidden> 
        <div action="login.php" method="post">
            <h3>Sign up here</h3>
            <div class="inputBox"> <input  type="text" name="Fullname" placeholder="Fullname"><input  type="text" name="Email" placeholder="Email"> <input  type="Password" name="Password" placeholder="Password"><input  type="password" name="pass1" placeholder="Repeat Password"> </div>
             <input type="submit"  value="Create Account" onclick="Registration()">
        </div> 
        
        <div class="text-center">
            <a style="color: #59238F;" href="#" id="showLogLink">Sign-in</a>
        </div>
</div>
</div>


<!-- Login_form -->

<script>


function Registration(){
    var Fullname=$("input[name=Fullname]").val();
    var Email = $("input[name=Email]").val();
    var Password = $("input[name=Password]").val();
    var Confirm=$("input[name=pass1]").val();

    if(Email == '' || Password == '')
    {
        Swal.fire('Fill all the fields..');
    }
    else if(Password!=Confirm){
            Swal.fire('Confirm Password Should not be correct..');
    }
    else
    {

        var user_info = {
            Fullname:Fullname,
            Email:Email,
            Password:Password,
        }

        $.ajax({
                type: "POST",
                url: 'register.php',
                data: user_info,
                success: function(response)
                {
                    var response = JSON.parse(response);
                    if(response)
                    {
                        // console.log(response.status);

                        if(response.status == 'success')
                        {
                            // alert("Registered Successfully",'success');
                    Swal.fire({
                    icon: 'success',
                    title: 'Registered Successfully',
                    showConfirmButton: false,
                    timer: 1500
                        }).then(function () {
                     location.reload();
                });
                 }
                     else if(response.status == 'failed' && response.error == 'Email_already_taken')
                    {
                            Swal.fire('Email Id is already taken. Try another one...','success');
                        }
                        else
                        {
                            alert(response.error,'error');
                        }  
                    }
                    else
                    {
                        console.log('Error');
                    }
            }
        });

    }

}

function Login(){

var Email = $("input[name=Login_Email]").val();
var Password = $("input[name=Login_Password]").val();
if(Email == '' || Password == '')
    {
        Swal.fire('Fill all the fields..');
    }else{
var user_login_info = {

    Email:Email,
    Password:Password
}

$.ajax({
        type: "POST",
        url: 'validation.php',
        data: user_login_info,
        success: function(response)
        {
            var response = JSON.parse(response);
            if(response)
            {
                // console.log(response.status);

              //  if(response.status == 'success')
               // {
                    // redirect to profiles
                    // Swal.fire({icon:"success",title:"Login Successfull",showConfirmButton:false,timer:1500});
                   // Swal.fire({title:"successful",timer:4000});
                //  window.location.href = 'profile.php';
                    
              //  }
                if (response.status == 'success') {
                 Swal.fire({
                 icon: 'success',
                 title: 'Login Successfully',
                showConfirmButton: false,
                 timer: 1500
            }).then(function () {
                     window.location.href = 'profile.php';
                });
                }
                else if(response.status == 'Invalid')
                {
                    Swal.fire({
                 icon: 'error',
                 title: 'Invalid Email or Password',
                showConfirmButton: false,
                 timer: 1500
            });
                }
                else if(response.status == 'Error')
                {
                    Swal.fire(response.Error);
                }
            }
            else
            {
                console.log('Error');
            }
       }
   });

}
}

document.addEventListener("DOMContentLoaded", function () {
    const formContainer = document.getElementById("container");
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
