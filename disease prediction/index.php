<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title> Disease Prediction Website </title>
        <link rel="stylesheet" href="homestyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=AR+One+Sans:wght@600&family=Roboto:wght@500;900&display=swap" rel="stylesheet">
        <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body style="background-image: url('image/bg.png');">
        <section class="header">
            <nav>
                 <div class="name" >Disease Prediction </div>  

                <div class="nav-links">
                    <ul>
                        <li>
                            <a href="index.php"> Home </a>
                        </li>
                        <li>
                            <a href="login.php"> Login </a>
                        </li>
                        <li>
                            <a href="blog.html"> Blogs </a>
                        </li>
                        <li>
                            <a href="contact.html"> Contact Us </a>
                        </li>
                    </ul>
                </div>         
            </nav>
        </section>
        
        <section class="container">

            <div class="swiper">

            <div class="swiper-wrapper">

            <div class="swiper-slide"> <img src="image/diabetes.jpg"> </div>
            <div class="swiper-slide"> <img src="image/heart.jpg"> </div>
            <div class="swiper-slide"> <img src="image/parkinsons.png"> </div>
            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </section>
        
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            loop: true,


            pagination: {
                el: '.swiper-pagination',
                clickable: true, 
            },


            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

    });
        </script>

        <div class="intro">
            <h1> Diseases </h1>
            <p> Maintaining good health and preventing diseases are paramount for a fulfilling life. In our modern world, where lifestyle choices and environmental factors can significantly impact our well-being, understanding disease prevention strategies is crucial. From simple habits to complex medical interventions, there's a myriad of approaches to staying healthy and warding off illnesses.</p>
            <p>Whether it's bolstering the immune system, adopting a nutritious diet, staying physically active, or managing stress effectively, the journey towards wellness is multifaceted and requires a holistic approach. Let's embark on this exploration together, unraveling the mysteries of disease prevention and unlocking the secrets to a vibrant and resilient life. </p>
        </div>
        <footer class="footer">
            <div class="container1">
                <div class="row">
    
    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-about">
                            <div class="footer-logo">
    
                            </div>
                            <p>Self-care is not selfish</p>
     
                        </div>
                    </div>
    
                    <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                        <div class="footer-widget">
                        </div>
                    </div>
    
                    <div class="col-lg-2  col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h6>Links</h6>
                            <ul>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="blog.html">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h6>NewsLetter</h6>
                            <div class="footer-newsletter">
                                <p>Know about disease prevention and healthcare.</p>
                                <form action="#">
                                    <input type="text" placeholder="Your Email">
                                    <button type="submit"><span><i class="fa fa-envelope"
                                                arial-hidden="true"></i></span></button>
                                </form>
                            </div>
    
                        </div>
                    </div>
    
    
                </div>
    
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="footer-copyright-text">
                            <p>Copyright &copy; 2024 All rights reserved </p>
                        </div>
                    </div>
                </div>
    
    
            </div>
    
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    </body>
</html>