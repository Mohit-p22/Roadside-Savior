<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="resource/style.css">
</head>
<style>
    #left_inner p{
        font-size: 16px;
        line-height: 30px;
    }
    .up h1{
        width: 65%;
        padding: 20px 0;
        font-size: 80px;
    }
    .up .ph{
    font-weight: 700;
    font-size: 22px;
    }
</style>
<body>

    <header>
        <nav class="flex" style="justify-content: space-around;">
            <div id="logo" class="flex  ">
                <img src="img/logo2.png" alt="">
            </div>
            <div id="menu">
                <ul class="flex" style="justify-content: space-around;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>
            <div id="log">
                <ul class="flex" style="justify-content: space-around;">
                    <li><a href="login.php">Login</a></li>
                   
                </ul>

            </div>
        </nav>
    </header>

    
    <main id="c_main" class="flex">
        <div id="main_inner" class="flex c_inner" style=" width: 98%; height: 95%;">

            <div id="left_inner" class="side flex">
                <div class="side_v flex up">
                    <h1>Happy to<br>
                        Help!
                    </h1>
                    <p class="ph">Corporate Office</p>
                    <p>Sundaravijayam Automobile Services Private Limited, 839/2, 24th Main, HSR Layout, Sector1, Bengaluru - 560102</p>
                    <p class="ph"><br>Reach us</p>
                    <p> 8197-852-852<br></p>
                    <p class="ph">Email</p><br>
                       <p> hello@readyassist.in</p>
                </div>
            </div>

            <div id="right_inner" class="side flex c_rightinner"  style="padding: 0;">
                    <form action="connection/contact_msg.php" method="post" class="flex">
                        <div id="field" class="flex">
                            <input type="text" placeholder="Name" name="name" required>
                            <input type="text" placeholder="Phone" name="phone" required>
                            <input type="text" placeholder="Email" name="email" required>
                            <textarea name="message" id="in" placeholder="Message" required></textarea>
                            
                        </div>
                        <div id="sub">
                            <button type="submit">Submit</button>
                        </div>
                   
                    </form>
            </div>
        </div>
    </main>

    <script>
        function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    var phone = document.forms["contactForm"]["phone"].value;
    var email = document.forms["contactForm"]["email"].value;
    var message = document.forms["contactForm"]["message"].value;

    // Regular expression for phone number validation
    var phoneRegex = /^\d{10}$/;

    // Regular expression for email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (name.trim() == "") {
        alert("Please enter your name");
        return false;
    }

    if (phone.trim() == "") {
        alert("Please enter your phone number");
        return false;
    } else if (!phone.match(phoneRegex)) {
        alert("Please enter a valid phone number (10 digits)");
        return false;
    }

    if (email.trim() == "") {
        alert("Please enter your email");
        return false;
    } else if (!email.match(emailRegex)) {
        alert("Please enter a valid email address");
        return false;
    }

    if (message.trim() == "") {
        alert("Please enter your message");
        return false;
    }

    return true;
}

    </script>
</body>
</html>