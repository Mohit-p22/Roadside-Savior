<?php
$otp=rand(11111,99999);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        *{
            font-family: "Poppins";
            padding: 0;
            margin: 0;
        }
        .otp_contain{
            width: 100vw;
            height: 100vh;
        
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contain_form{
            height: 60%;
            width: 40%;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 2px 2px 11px 6px rgba(199, 199, 199, 0.2);
         
        }
        .flex{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            height: 80%;
            width: 80%;
            
            padding: 10px;
            flex-direction: column;
           
        }
        .head{
            height: 10%;
        }
        .fields{
            height: 70%;
            display: flex;
            flex-direction: column;
        }
       
        .fields input,button{
            margin: 20px 0;
            font-size: 16px;
        }
        .fields input{
            width: 90%;
            padding: 10px;
        }
      
        .fields button{
            padding: 15px 30px;
            background-color: #828bc4;
            border: none;
            border-radius: 5px;
            color: white;
            transition: 0.15s ease-in;
            cursor: pointer;
        }
        .fields button:hover{
           background-color: #6d76b2da;
           box-shadow: 2px 2px 6px 2px rgba(201, 197, 197, 0.455);
        }
    </style>
</head>
<body>
    
    <div class="otp_contain">

        <div class="contain_form flex">

            <form action="connection/otp.php" method="post" class="flex" style="justify-content: space-around;" >
                <div class="head flex" >
                    <h2>Email Verification</h2>
                </div>
                <div class="fields">
                   
                    <input type="text" name="email" placeholder="Enter Your Email" required> 
                    <input type="hidden" name='otp' value="<?php echo $otp ; ?>"> 
                    <button type="submit" onclick="validateForm()">Send OTP</button>
                
                </div>

            </form>

        </div>

    </div>
<script>
    function validateEmail(email) {
    // Regular expression for validating email addresses
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validateForm() {
    var email = document.getElementById("email").value;
    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
    }
    return true;
}
</script>

</body>
</html>