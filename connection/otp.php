

<?php 
$email=$_POST['email'];
$otp=$_POST['otp'];

$to=$email;
$from="roadsidesavior22@gmail.com";
$fromName="Roadside Savior";
$subject="OTP Authentication";
$message="Your OTP is :".$otp;
$header='From:'.$message.'<'.$from.'>';

if(mail($to,$subject,$message,$header))
{

}
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
            width: 92%;
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

            <form action="submitotp.php" method="post" class="flex" style="justify-content: space-around;" >
                
                <div class="head flex" >
                    <h2>Email Verification</h2>
                </div>
                <div class="fields">
                   
                    <input type="text" name="checkotp" placeholder="Enter Verification Code" required> 
                    <input type="hidden" name="otp" value="<?php echo $otp;?>">
                    <button type="submit">Verify</button>
                
                </div>

            </form>

        </div>

    </div>


</body>
</html>


