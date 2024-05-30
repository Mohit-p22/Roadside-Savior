
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="resource/style.css">
</head>


<style>
    body {
        position: relative;
    }

    .service-contain {
        height: 100vh;
        width: 100vw;
    }

    .inner-service {
        padding-top: 20px;
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
    }
    #left-pannel img{
        width: 450px;
        height: 300px;
    }
    #right-pannel img{
        width:600px;
    }
    #left-pannel{   
        width: 50%;
        flex-direction: column;
        justify-content: space-around   ;
        background-color: #f1f1f1;
        margin-left: 30px;
        border-radius: 20px;
    }
    #left-pannel .right{
        height: 20%;
    }
    #right-pannel{
        width: 50%;

    }
    .inner-service img {
        width: 90%;
        height: 80%;
        border-radius: 30px;
    }

    .inner-service h2 {
        position: absolute;
        color: white;
        top: 200px;
        left: 150px;
        font-size: 70px;
    }
    .inner-service p{
        position: absolute;
        color: white;
        top: 430px;
        left: 150px;
    }



</style>

<body>

    <header>
        <nav class="flex" style="justify-content: space-around;">
            <div id="logo" class="flex ">
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

    <main>

        <div class="service-contain flex">

            <div class="inner-service">
                <h2>Glimpse of<br>
                    Our Story</h2>
                <p>In 2015, ReadyAssist was ideated as an accidental emergency assistance<br> company by our founder, Vimal
                    Singh SV, after losing a close friend to an <br>accident. ReadyAssist is a family of 500+ members
                    headquartered in a state-<br>of-the-art facility in Bangalore, efficiently monitoring our pan-India
                    service<br> network through cutting-edge Autotech solutions. Today, we proudly rank<br> among India's
                    top-rated automotive service solution companies specializing<br> in 24/7 emergency assistance and EV
                    repairs. </p>
                <img src="img\about-banner.jpg" alt="">

            </div>

        </div>


        <div class="service-contain">

            <div class="inner-service" style="height: 60vh;">

                <div id="left-pannel" class="flex" >

                    <div class="right flex">
                        <h3 style="font-size: 30px; text-align:center;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                        </h3>
                    </div>

                    <div class="left flex">
                        <img src="img/reapir-low.jpg" alt="">
                    </div>

                </div>
                <div id="right-pannel" class="flex">

                    <div class="right flex">
                   
                        <img src="img/bwink_tsp_01_single_09.jpg" alt="">
                    </div>

                </div>

               
            </div>

        </div>

    </main>



</body>

</html>