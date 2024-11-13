<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../support/css/NsmCorp.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="../support/js/nsm.js"></script>
    <title>Reflex Gym</title>
</head>

<body>
    <div id="preloader"></div>
    <section class="top" id="top">
        <div class="brand">
            <marquee behavior="slide" direction="">
                <div class="brand">
                    <p>Reflex <span>Gym</span></p>
                </div>
            </marquee>
        </div>
        <div class="nav">
            <ul>
                <a href="./index.php">
                    <li><i class="fa fa-home"></i>HOME</li>
                </a>
                <a href="./subscription-page.php">
                    <li><i class="fa fa-handshake-o"></i>SUBSCRIPTION</li>
                </a>
                <a href="./contactUs.php">
                    <li><i class="fa fa-phone"></i>CONTACT US</li>
                </a>
                <a href="./signUp.php">
                    <li><i class="fa fa-user-circle-o"></i>LOGIN</li>
                </a>
            </ul>
        </div>

    </section>
    <section>
        <section class="content">
            <section class="hidden">
                <div class="con1">
                    <h1>We here for you. Time to tame your body and keep fit</h1>
                    <p>Fitness helps keep your body in perfect shape. But remember the motto No <Span>Pain</Span> No
                        <span>Gain</span>
                    </p>
                    <a href="">Join <span>Us</span> Today</a>
                </div>
            </section>
            <div id="preCon">
                <div class="preConhd">
                    <h1>Our Slogan</h1>
                </div>
                <div class="preCon01">
                    <div class="hidden" id="res">
                        <h2>Why Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sint quae quibusdam beatae quo ducimus amet quas nihil, soluta ipsa?</p>
                    </div>
                    <div class="hidden" id="res">
                        <h2>Actions</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, aspernatur.</p>
                    </div>
                    <div class="hidden" id="res">
                        <h2>Nsm Corp</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa!</p>
                    </div>
                    <div class="hidden" id="res">
                        <h2>Nsm Corp</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa!</p>
                    </div>
                </div>
            </div>
            <section>
                <div class="con2">
                    <div class="con2hd">
                        <h1>Our Gym</h1>
                    </div>
                    <div class="con2con">
                        <div class="con2con1">
                            <div class="con2conimg hidden">
                                <img src="../support/image/img6.jpg" alt="">
                            </div>

                            <div class="con2conimg hidden">
                                <img src="../support/image/disp02.jpg" alt="">
                            </div>
                            <div class="con2conimg01 hidden">
                                <img src="../support/image/img4.jpg" alt="">
                            </div>
                            <div class="con2conimg hidden">
                                <img src="../support/image/img5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ft">
                <div class="con3">

                    <div class="ft01">
                        <h1>Meet Our Trainers</h1>
                    </div>
                    <div class="tr">
                        <div class="trimg hidden">
                            <img src="../support/image/tr.jpg">
                            <p>Mrs. KATULU</p><br>
                        </div>
                        <div class="trimg hidden">
                            <img src="../support/image/tr.jpg">
                            <p>Mr. IBRAHIM</p><br>
                        </div>
                        <div class="trimg hidden">
                            <img src="../support/image/tr.jpg">
                            <p>Mrs. ELODY</p><br>
                        </div>
                    </div>

                </div>
                <div>
                    <a href="#top" class="sTop">Back to Top</a>
                </div>
                <section class="footer">
                    <footer>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                        <div>
                            <p>© copyright <span>Reflex Gym</span></p>
                        </div>
                    </footer>
                </section>
            </section>
        </section>
    </section>
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>
</body>

</html>