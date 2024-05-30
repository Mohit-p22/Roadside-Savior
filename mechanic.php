<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Page Navigation</title>
    <link rel="stylesheet" href="resource/style.css">
    <link rel="stylesheet" href="resource/user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      #section2 .btn ,#section3 .btn{
    background-color: #828bc4;
    color: white;
  }
  #section2 .btn :hover ,#section3 .btn :hover{
    border: 2px solid #828bc4;
    color: #828bc4;
  }
  #popup .address #line1{
    width: 100%;
}

  #popup{
    position: fixed;
  top: 40%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 40%;
  padding: 50px;
  box-shadow: 0 5px 30px rgba(0, 0, 0, 0.07);
  background: #fff;
  visibility: hidden;
  opacity: 0;
  transition: 0.5s;
  height: 80%;
}
#popup.active{
    top: 50%;
    visibility: visible;
    opacity: 1;
    transform: 0.5s;
}
#btn a:hover{
    background-color: #f99e0d;
    color: black;
}
    </style>
</head>

<body>
    <header>
        <nav class="flex" style="justify-content: space-around;">
            <div id="logo" class="flex" style="width: 12vw; padding-top: 10px;">
                <img src="img/logo2.png" alt="">
            </div>
            <div id="menu">
            <ul class="flex" style="width: 100%;">
                <li><a class="move" onclick="toggleSection('section1')">Home</a></li>
                <li><a class="move" onclick="toggleSection('section3')">Request List</a></li>
                <li><a class="move" onclick="toggleSection('section6')">Approved List</a></li>
                <li><a class="move" onclick="toggleSection('section4')">My Profile</a></li>
                <li><a class="move" onclick="toggleSection('section5')">Feedback</a></li>
                <li><a class="move" onclick="toggleSection('section2')">History</a></li>
            </ul>
            </div>
          
            <div id="log">
                <ul class="flex" style="justify-content: space-around;">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <!-- Display username and show "Logout" on hover when user is logged in -->
                        <li><a href="connection/logout.php" title="Logout"><?php echo $_SESSION['username']; ?></a></li>
                    <?php else : ?>
                        <!-- Otherwise, show regular logout button -->
                        <li><a href="connection/logout.php">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>

        </nav>
    </header>

    <main>
        <section id="section1" class="sec">
            <!-- Content of section 1 -->
            <div id="main_inner" class="flex">
                <div id="left_inner" class="side flex">
                    <div class="side_v flex up">
                        <h1>Welcome to<br>
                            Roadside Savior
                        </h1>
                        <p style="font-size: 20px;">24/7 On-Spot</p>
                        <div id="btn" style="padding: 0;">
                            <a href="#section2">Request Now</a>
                        </div>
                        <p> Anytime & Anywhere in India<br>
                            Experts in EV Repair.</p>
                    </div>


                </div>
                <div id="right_inner" class="side flex">
                    <img src="img/banner3.jpg" alt="" style="width:60%">
                </div>

            </div>

        </section>

        <section id="section3" class="sec " style="display: none;">
          
        <div class="container">
                <table class="table">
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>CITY</th>
                    <th>VEHICLE-TYPE</th>
                    <th>SERVICE-TYPE</th>
                    <th>PAYMENT</th>
                   <th>APPROVE</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $servername = "localhost";
                    $username = "admin";
                    $password = "1234";
                    $dbname = "vbs";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM request";
                    $result = $conn->query($sql);
                    if (!$result) {
                        die("Invalid query!");
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                                <td>$row[name]</td>
                                <td>$row[phone]</td>
                                <td>$row[address]</td>
                                <td>$row[city]</td>
                                <td>$row[vehicleType]</td>
                                <td>$row[serviceType]</td>
                                <td>$row[payment]</td>
                                <td>
                                    <a class='btn' href='connection/move.php?id=$row[req_id]'>Accept</a>
                                    </td>
                                </tr>";
                        }
                        ?>

                </tbody>
              </table>
                  </div>
            
                  
        </section>

        <section id="section2" class="sec" style="display: none;">
            <div class="container">
                <table class="table">
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>CITY</th>
                    <th>VEHICLE-TYPE</th>
                    <th>SERVICE-TYPE</th>
                    <th>PAYMENT</th>
               
                  </tr>
                </thead>
                <tbody>
                <?php
                    $servername = "localhost";
                    $username = "admin";
                    $password = "1234";
                    $dbname = "vbs";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM request";
                    $result = $conn->query($sql);
                    if (!$result) {
                        die("Invalid query!");
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                                <td>$row[name]</td>
                                <td>$row[phone]</td>
                                <td>$row[address]</td>
                                <td>$row[city]</td>
                                <td>$row[vehicleType]</td>
                                <td>$row[serviceType]</td>
                                <td>$row[payment]</td>
                                
                                </tr>";
                        }
                        ?>

                </tbody>
              </table>
                  </div>
            

        </section>

        <section id="section4" class="sec">
    <div class="container">
        <div class="form-contain flex">
            <div class="panel-left flex">
                <div class="profile-pic flex">
                    <img src="img/profile.png" alt="">
                </div>
                <div class="profile-name">
                    <h2>Welcome, <?php echo $fetch['username']; ?></h2>
                </div>
                <div class="profile-desc flex" style="flex-direction: column;">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur tenetur.</p>
                </div>
            </div>
            <div class="panel-right">
                <div class="container flex">
                    <div class="title">My Profile</div>
                    <div class="content">

                        <form id="profileForm" action="connection/update_profile.php" method="POST">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Username</span>
                                    <input type="text" name="username"  value="<?php echo $fetch['username']; ?>">
                                </div>
                                <div class="input-box">
                                    <span class="details">email</span>
                                    <input type="text" name="email" value="<?php echo $fetch['email']; ?>" >
                                </div>
                                <div class="input-box">
                                    <span class="details">phone</span>
                                    <input type="text" name="phone"  value="<?php echo $fetch['phone']; ?>" >
                                </div>
                                <div class="input-box">
                                    <span class="details"> service type</span>
                                    <input type="text" name="serviceType" value="<?php echo $fetch['serviceType']; ?>" >
                                </div>
                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="password" name="password"  value="<?php echo $fetch['password']; ?>" >
                                </div>
                                <div class="input-box">
                                    <span class="details">Confirm Password</span>
                                    <input type="password" name="confirm_password" required>
                                </div>
                            </div>

                            <div class="button">
                                <input type="submit" name="update" value="Update">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

        <section id="section5" class="sec" style="display: none;">
            <div id="panel" class="panel-container">
                <strong>How satisfied are you with our <br /> customer support performance?</strong>
                <div class="ratings-container">
                    <div class="rating">
                        <img src="img/emoji1.png" alt="">
                        <small>Unhappy</small>
                    </div>

                    <div class="rating">
                        <img src="img/emoji2.png" alt="" />
                        <small>Neutral</small>
                    </div>

                    <div class="rating active">
                        <img src="img/emoji3.png" alt="" />
                        <small>Satisfied</small>
                    </div>
                </div>
                <div class="message">
                    <input type="text" name="message" id="message" placeholder="Send Message">

                </div>
                <button class="btn" id="send">Send Review</button>
            </div>

        </section>

        
        <section id="section6" class="sec" style="display: none;">
            <div class="container">
                <table class="table">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>NAME</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>CITY</th>
                    <th>VEHICLE-TYPE</th>
                    <th>SERVICE-TYPE</th>
                    <th>PAYMENT</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php
                    $servername = "localhost";
                    $username = "admin";
                    $password = "1234";
                    $dbname = "vbs";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM approved";
                    $result = $conn->query($sql);
                    if (!$result) {
                        die("Invalid query!");
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                                <td>$row[app_id]</td>
                                <td>$row[name]</td>
                                <td>$row[phone]</td>
                                <td>$row[address]</td>
                                <td>$row[city]</td>
                                <td>$row[vehicleType]</td>
                                <td>$row[serviceType]</td>
                                <td>$row[payment]</td>
                                
                                </tr>";
                        }
                        ?>

                </tbody>
              </table>
                  </div>
            
        </section>





    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>



        function toggle() {
                        var blur=document.getElementById('blur');
                        blur.classList.toggle('active');
                        var popup = document.getElementById('popup');
                        popup.classList.toggle('active');
                        formContainer.scrollTop = 0;
                    }

            function toggleSection(sectionId) {
            console.log('Toggle section:', sectionId);
            document.querySelectorAll('.sec').forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(sectionId).style.display = 'block';
            }

        // Get all section elements
        const sections = document.querySelectorAll('main > section');

        // Function to show the selected section and hide others
        function showSection(sectionId) {
            sections.forEach(section => {
                if (section.id === sectionId) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });
        }

        // Initially show the first section
        showSection('section1');

        // Add click event listeners to navigation links
        document.getElementsByClassName('move').forEach(link => {
            link.addEventListener('click', function (event) {
                // Prevent default link behavior
                event.preventDefault();

                // Get the target section ID from the href attribute
                const targetId = this.getAttribute('href').substring(1);

                // Show the target section
                showSection(targetId);
            });
        });


        const ratings = document.querySelectorAll('.rating')
        const ratingsContainer = document.querySelector('.ratings-container')
        const sendBtn = document.querySelector('#send')
        const panel = document.querySelector('#panel')
        let selectedRating = 'Satisfied'

        ratingsContainer.addEventListener('click', (e) => {
            if (e.target.parentNode.classList.contains('rating')) {
                removeActive()
                e.target.parentNode.classList.add('active')
                selectedRating = e.target.nextElementSibling.innerHTML
            }
            if (e.target.classList.contains('rating')) {
                removeActive()
                e.target.classList.add('active')
                selectedRating = e.target.nextElementSibling.innerHTML
            }

        })

        sendBtn.addEventListener('click', (e) => {
            panel.innerHTML = `
    
        Thank You!
        
        Feedback :
        We'll use your feedback to improve our customer support
    `
        })

        function removeActive() {
            for (let i = 0; i < ratings.length; i++) {
                ratings[i].classList.remove('active')
            }
        }


    </script>
</body>

</html>