<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="resource/style.css">
</head>


<style>

    .service-contain{
        height: 110vh;
        width: 98vw;
        padding: 10px;
    }
   
    .inner-service {
        height: 100vh;
        width: 100%;
        margin-top: 20px;
        padding: 10px;
        background-color: #f5f5f577;
        border-radius: 20px;
    }

    #upper-panel {
        padding: 10px;
    }

    .right #head,
    .right #para {
        height: 50%;
        width: 60%;
    }

    .right {
        flex-direction: column;
        width: 50%;
    }

    .right div {
        margin: 10px;
        margin-bottom: 20px;
    }

    .right #head,
    .right #para {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #para p {
        text-align: center;
    }

    .left img {
        width: 80%;
        height: 80%;
        padding: 10px;
        border-radius: 20px;
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

                <div id="upper-pannel" class="flex">

                    <div class="right flex">
                        <div id="head" class="flex">
                            <h2>Engine Service</h2>
                        </div>
                        <div id="para" class="flex">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sequi sunt fuga illo
                                similique deleniti aperiam quas ipsa Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Dolor consectetur harum enim veniam quae maxime ratione iure distinctio ipsa quam.
                                voluptatum saepe.</p>
                        </div>
                    </div>

                    <div class="left flex">
                        <img src="img/key-unlock.jpg" alt="">
                    </div>

                </div>

                <div id="lower-pannel" class="flex">

                    <div class="left flex">
                        <img src="img/car-flatbed.jpg" alt="">
                    </div>

                    <div class="right flex">
                        <div id="head">
                            <h2>Towing</h2>
                        </div>

                        <div id="para">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sequi sunt fuga illo
                                similique deleniti aperiam quas ipsa Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Dolor consectetur harum enim veniam quae maxime ratione iure distinctio ipsa quam.
                                voluptatum saepe.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="service-contain flex">

            <div class="inner-service">

                <div id="upper-pannel" class="flex">

                    <div class="right flex">
                        <div id="head" class="flex">
                            <h2>Flat-Tyer</h2>
                        </div>
                        <div id="para" class="flex">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sequi sunt fuga illo
                                similique deleniti aperiam quas ipsa Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Dolor consectetur harum enim veniam quae maxime ratione iure distinctio ipsa quam.
                                voluptatum saepe.</p>
                        </div>
                    </div>

                    <div class="left flex">
                        <img src="img/car-tyre.jpg" alt="">
                    </div>

                </div>

                <div id="lower-pannel" class="flex">

                    <div class="left flex">
                        <img src="img/mechanic1.jpg" alt="">
                    </div>

                    <div class="right flex">
                        <div id="head">
                            <h2>Service</h2>
                        </div>

                        <div id="para">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sequi sunt fuga illo
                                similique deleniti aperiam quas ipsa Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Dolor consectetur harum enim veniam quae maxime ratione iure distinctio ipsa quam.
                                voluptatum saepe.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>



</body>

</html>