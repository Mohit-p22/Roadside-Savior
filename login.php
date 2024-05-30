<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="resource/login.css" />
    <title>Sign in & Sign up Form</title>

    <style>
        .container:before {
  background-image: linear-gradient(-45deg, #828bc4 0%, #828bc4 100%);
}
.btn{
    background-color: #828bc4;
}
#sign-up-btn:hover,#sign-in-btn:hover
{
background-color: #fff;
color: #6b74b2;
}
.btn:hover,.sign-up-form button:hover {
  background-color: #6971ac;
}
.sign-up-form button{
    background-color: #828bc4;
    transition: 0.15s ease-in;
}
.sign-up-form button:hover{
    background-color: #6b74b2;
}
    </style>
</head>

<body onload="setDefaultSelect()">
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="connection/login_check.php" method="POST" class="sign-in-form" onsubmit="return validateLoginForm()" style="display: flex; align-items: center; justify-content: center;">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" id="login-username" name="login-username" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" id="login-password" name="login-password" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-list"></i>
                    <select id="user-type" name="user-type" required>
                        <option value="select" disabled selected>Select User</option>
                        <option value="customer">Customer</option>
                        <option value="admin">Admin</option>
                        <option value="mechanic">Mechanic</option>
                    </select>
                </div>
                <input type="submit" value="Login" class="btn solid"/>

              
            </form>



                <form action="connection/register.php" method="POST" class="sign-up-form" id="customer-fields" onsubmit="return validateCustomerForm()">
                    <h2 class="title">Customer Sign up</h2>
                    <!-- Customer form fields -->
                    <div>
                        <button onclick="showCustomerFields()">Customer</button>
                        <button onclick="showMechanicFields()">Mechanic</button>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" id="register-username" name="register-username"
                            required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" id="register-email" name="register-email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="tel" id="register-phone" placeholder="Phone" name="register-phone" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="register-password" name="register-password"
                            required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" id="register-confirm-password"
                            name="register-confirm-password" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                </form>

                <form action="connection/register.php" method="POST" class="sign-up-form" id="mechanic-fields" style="display: none;"
                    onsubmit="return validateMechanicForm()">
                    <h2 class="title">Mechanic Sign up</h2>
                    <div>
                        <button onclick="showCustomerFields()">Customer</button>
                        <button onclick="showMechanicFields()">Mechanic</button>
                    </div>
                    <!-- Mechanic form fields -->
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" id="register-username-mechanic"
                            name="register-username-mechanic" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" id="register-email-mechanic"
                            name="register-email-mechanic" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="tel" id="register-phone-mechanic" placeholder="Phone"
                            name="register-phone-mechanic" required>
                    </div>
                    <div class="input-field">
                       
                        <i class="fas fa-list"></i>
                            <select id="service-type" name="service-type" required>
                                <option value="select" disabled selected>Select Service Type</option>
                                <option value="customer">Two Wheeler</option>
                                <option value="admin">Four Wheeler</option>
                                <option value="mechanic">All Type</option>
                            </select>
                      
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="register-password-mechanic"
                            name="register-password-mechanic" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" id="register-confirm-password-mechanic"
                            name="register-confirm-password-mechanic" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                </form>

            </div>
        </div>

   

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>
                        Welcome to Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, quae!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already Register?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>
 

    <script src="resource/js/log.js"></script>
    
</body>

</html>