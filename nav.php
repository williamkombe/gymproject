
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: -apple-system, sans-serif;
}

:root {
    --bg-color: #000000;
    --second-bg-color: #111111;
    --text-color: #fff;
    --main-color: #45FFCA;
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
}

body {
    background: var(--bg-color);
    color: var(--text-color);
}

section {
    min-height: 100vh;
    padding: 10rem 8% 2rem;
}

/* Header Section Code */

header {
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    transition: all 0.5s ease;
}

.logo {
    font-size: 3rem;
    color: var(--text-color);
    font-weight: 800;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.logo:hover {
    transform: scale(1.1);
}

span {
    color: var(--main-color);
}

.navbar {
    display: flex;
}

.navbar a {
    font-size: 1.8rem;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 4rem;
    transition: all 0.5s ease;
    border-bottom: 3px solid transparent;
}

.navbar a:hover,
.navbar a.active {
    color: var(--main-color);
    border-bottom: 3px solid var(--main-color);
}

#menu-icon {
    font-size: 3.6rem;
    color: var(--main-color);
    cursor: pointer;
    display: none;
}

.nav-btn {
    display: inline-block;
    padding: 1rem 2.8rem;
    background: transparent;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    border-radius: 1rem;
    font-size: 1.6rem;
    font-weight: 600;
    transition: all 0.5s ease;
}

.nav-btn:hover {
    background: var(--main-color);
    color: var(--text-color);
    box-shadow: 0 0 20px var(--main-color);
}

/* Home Section Code */

.home {
    display: flex;
    justify-content: center;
    align-items: center;
}

.home-content h3 {
    font-size: 5rem;
    font-weight: 700;
}

.home-content span {
    font-size: 4rem;
    font-weight: 550;
}

span {
    color: var(--main-color);
}

.home-content h1 {
    font-size: 5.6rem;
    font-weight: 700;
    line-height: 1.3;
}

.home-img img {
    width: 45vw;
}

.home-img::before {
    content: "FITNESS";
    position: absolute;
    top: 10%;
    left: 30%;
    transform: translateX(-50%);
    font-size: 20rem;
    font-weight: 400;
    line-height: 20rem;
    color: var(--secondary-color);
    opacity: 0.1;
    z-index: -1;
  }

.home-content p {
    font-size: 1.6rem;
    margin-bottom: 2rem;
    margin-top: 2rem;
}

.btn {
    display: inline-block;
    padding: 1rem 2.8rem;
    background: var(--main-color);
    border-radius: 1rem;
    box-shadow: none;
    font-size: 1.6rem;
    color: var(--bg-color);
    letter-spacing: .1rem;
    font-weight: 600;
    transition: .5s ease;
}

.btn:hover {
    color: var(--text-color);
    box-shadow: 0 0 1.6rem var(--main-color);
}

/* services Section Code */

.services {
    background: var(--second-bg-color);
}

.services-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, auto));
    align-items: center;
    gap: 2.3rem;
    margin-top: 4.2rem;
}

.row {
    background: var(--bg-color);
    border-radius: 28px;
    border: 1px solid transparent;
    box-shadow: 0 0 5px var(--main-color);
    padding: 20px;
    transition: all 0.5s ease;
}

.row img {
    height: auto;
    width: 100%;
    border-radius: 28px;
    margin-bottom: 1.4rem;
}

.row h4 {
    font-size: 25px;
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1.4;
}

.row:hover {
    border: 1px solid var(--main-color);
    transform: translateY(-5px) scale(1.03);
    cursor: pointer;
}

/* About Section */

.about {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}

.about-img img {
    width: 50vw;
    width: 50vw;
    border: 2px solid var(--text-color);
}

.heading {
    text-align: center;
    font-size: 4.5rem;
}

.about-content {
    padding: 0 3rem;
}

.about-content h2 {
    text-align: left;
    line-height: 1.2;
}

.about-content p {
    font-size: 1.6rem;
    margin: 2rem 0 2rem;
}

/* Pricing Section Code */

.heading {
    text-align: center;
    font-size: 6.5rem;
}

.plans {
    background: var(--second-bg-color);
}

.plans-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, auto));
    align-items: center;
    gap: 2.3rem;
    margin-top: 4.2rem;
}

.box {
    padding: 30px 30px 50px 30px;
    height: 40rem;
    background: var(--bg-color);
    border-radius: 28px;
    border: 1px solid transparent;
    box-shadow: 0 0 5px var(--main-color);
    transition: all 0.5s ease;
    cursor: pointer;
}

.box h3 {
    font-size: 35px;
    font-weight: 600;
    margin-bottom: 10px;
}

.box h2 {
    font-size: 43px;
    font-weight: 700;
    margin-bottom: 20px;
}

.box ul li {
    list-style: disc;
    font-size: 1.7rem;
    padding-bottom: 1.2rem;
}

.box a {
    display: inline-block;
    font-size: 22px;
    line-height: 1.2em;
    font-weight: 700;
    padding: 7px 0;
    color: var(--text-color);
    border-bottom: 2px solid #5d6c83;
    transition: all 0.5s ease;
}

.box i {
    vertical-align: middle;
    font-size: 25px;
    color: var(--main-color);
    margin-left: 5px;
}

.box a:hover {
    border-bottom: 2px solid var(--main-color);
}

.box:hover {
    border: 1px solid var(--main-color);
    transform: translateY(-5px) scale(1.03);
}

/* review */

.review{
    background: var(--bg-color);
}
.review-box{
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.review .heading{
    margin-bottom: 5rem;
}
.review-box img{
    width: 15rem;
    border-radius: 50%;
    border: 3px solid var(--main-color);
}
.wrapper{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 3rem;
}
.review-item{
    min-height: 450px;
    max-width: 450px;
    background: var(--second-bg-color);
    border: 3px solid rgba(238, 238, 238, 0.3);
    border-radius: 2rem;
    margin: 0 2rem;
    padding: 30px 60px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
    color: #fff;
    transition: 0.4s ease-in-out;
}
.review-item:hover{
    border: 3px solid var(--main-color);
    transform: translateY(-5px) scale(1.03);
}
.review-item h2{
    font-size: 2.8rem;
}
.review-item p{
    font-size: 1.5rem;
    line-height: 1.3;
}
#star{
    color: gold;
    font-size: 2rem;
}

/* ******************Footer Section********************* */

.footer{
    position: relative;
    bottom: 0;
    width: 100%;
    padding: 40px 0;
    background-color: var(--second-bg-color);
}
.footer .social{
    text-align: center;
    padding-bottom: 20px;
    color: var(--main-color);
}
.footer .social a{
    font-size: 25px;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    width: 42px;
    height: 42px;
    line-height: 42px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    margin: 0 10px;
    transition: 0.3s ease-in-out;
}
.footer .social a:hover{
    transform: scale(1.2)translateY(-10px);
    background-color: var(--main-color);
    color: #131313;
    box-shadow: 0 0 25px var(--main-color);
}
.footer .copyright{
    margin-top: 20px;
    text-align: center;
    font-size: 16px;
    color: #fff;
}

/* Scrollbar */

::-webkit-scrollbar{
    width: 15px;
}

::-webkit-scrollbar-thumb{
    background-color: var(--main-color);
    width: 50px;
}

/* BreakPoint */

@media (max-width:1200px) {
    html {
        font-size: 55%;
    }
}

@media (max-width:991px) {
    #menu-icon {
        display: block;
    }
    .navbar {
        position: absolute;
        top: 100%;
        right: -100%;
        width: 255px;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background: var(--bg-color);
        transition: all 0.5s ease;
    }
    .navbar a {
        display: block;
        padding: 17px;
        font-size: 22px;
    }
    .navbar.active {
        right: 0;
    }
    .header {
        padding: 2rem 3%;
    }
    section{
        padding: 10rem 3%;
    }
    .services{
        padding: 7rem
    }
    .about-content h2 {
        margin-top: 2rem;
        text-align: center;
        font-size: 5rem;
    }
    .review .wrapper{
        grid-template-columns: repeat(1,1fr);
    }
    .footer{
        padding: 40px 0;
    }
}
@media (max-width:786px) {
    .home{
        flex-direction: column;
    }
    .home-content h3{
        font-size: 4.5rem;
        margin-top: 1.5rem;
    }
    .home-content h1{
        font-size: 5rem;
        margin-top: 1.5rem;
    }
    .home-content{
        order: 2;
    }
    .home-img img{
        width: 70vw;
        margin-top: 4rem;
    }
    .about{
        flex-direction: column;
    }
    .about-img img{
        width: 70vw;
        margin-top: 4rem;
    }
    .about-content {
        text-align: center;
    }
    .about-content h2 {
        text-align: center;
    }
    .services h2{
        margin-bottom: 3rem;
    }
}

@media (max-width:617px) {
    .home-img img{
        width: 80vw;
        margin-top: 8rem;
    }
    .about-img img{
        width: 70vw;
        margin-top: 4rem;
    }
}
@media (max-width:450px) {
    html{
        font-size: 50%;
    }
}
    </style>
    <title>Trueboy Fitness</title>
</head>

<body>
    <!-- Header Section -->

    <header>
        <a href="#" class="logo">Trueboy <span>Fitness</span></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#plans">Pricing</a></li>
            <li><a href="#review">Review</a></li>
        </ul>

        <div class="top-btn">
            <a href="login.php" class="nav-btn">login</a>
        </div>
    </header>

    <!-- Home Section -->

    <section id="home" class="home">
        <div class="home-content" data-aos="zoom-in">
            <h3>Build Your</h3>
            <h1>Dream Physique</h1>
            <h3><span class="multiple-text"></span></h3>
            <p>Visit us @ Trueboy Gym fitness located along Bofa road.</p>

            <a href="homepage.php" class="btn">sign here!!</a>
        </div>

        <div class="home-img" data-aos="zoom-in">
            <img src="pik14.avif">
        </div>
    </section>

    <!-- services Section Code -->

    <section class="services" id="services">

        <h2 class="heading" data-aos="zoom-in-down">Our <span>Services</span></h2>

        <div class="services-content" data-aos="zoom-in-up">
            <div class="row">
                <img src="pik8.avif">

                <h4>Physical Fitness</h4>
            </div>

            <div class="row">
                <img src="pik10 - Copy.png">

                <h4>Weight Gain</h4>
            </div>

            <div class="row">
                <img src="pik11.avif">

                <h4>Strength Training</h4>
            </div>

            <div class="row">
                <img src="pik6.jpg">

                <h4>Fat Lose</h4>
            </div>

            <div class="row">
                <img src="pik3.jpg">

                <h4>Weightlifting</h4>
            </div>

            <div class="row">
                <img src="pik4.avif">

                <h4>Running</h4>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="about-img" data-aos="zoom-in-down">
            <img src="assets/about.jpg" alt="">
        </div>

        <div class="about-content" data-aos="zoom-in-up">
            <h2 class="heading">Why Choose Trueboy Fitness?</h2>
            <p>Choose Trueboy Fitness for a fitness journey that's truely personalized and transformative.With a focus or holistic health,we go beyond just a workout toiloring programs to your specific goals,whether its strength,endurance or flexibility.Our trainers are dedicated,highly trained and pessionate about helping you to push limits safety and affectively,Trueboy Fitness is commited to create suppotive community,where you're not just a member but part of our family that celebrate each achievement.Start with us today,and lets reach your fitness goals together!!</p>
            <p>Unlock your potential with our expert Personal Trainers.</p>
            <p>Elevate your fitness with practice sessions.</p>
            <p>We provide Supportive management, for your fitness success.</p>
            <a href="genaralform.php" class="btn">feedback,instructor,staff_sign here</a>
        </div>
    </section>



    <!-- Pricing Section Code -->

    <section class="plans" id="plans">
        <h2 class="heading" data-aos="zoom-in-down">Our <span>Plans</span></h2>


        <div class="plans-content" data-aos="zoom-in-up">
            <div class="box">
                <h3>Monthly Membership</h3>
                <h2><span>1,000/=Month</span></h2>
                <ul>
                    <li>Recurring payment every month; often more flexible but may cost more long-term.</li>
                </ul>
                <a href="#">
                    Join Now
                    <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
            <div class="box">
                <h3>Annual Membership</h3>
                <h2><span>50,000/=year</span></h2>
                <ul>
                    <li>One-time payment  for the entire year typically offers a discount compared to monthly payments.</li>
                </ul>
                <a href="#">
                    Join Now
                    <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
            <div class="box">
                <h3>Daily Pass: </h3>
                <h2><span>ksh50/=day</span></h2>
                <ul>
                    <li>Pay-per-day access; ideal for visitors or occasional users.</li>
                </ul>
                <a href="#">
                    Join Now
                    <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Review Section -->

    <section id="review" class="review">
        <div class="review-box">
            <h2 class="heading" data-aos="zoom-in-down">Client Reviews</h2>

            <div class="wrapper" data-aos="zoom-in-up">
                <div class="review-item">
                    <img src="image4.jpg">
                    <h2>Yeri</h2>
                    <div class="rating">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                    </div>
                    <p>I was nervous about joining a gym, but everyone here is so welcoming and friendly,The staff are helpful, and I’ve made some new friends along the way.</p>
                </div>

                <div class="review-item">
                    <img src="chimera.jpg">
                    <h2>Chimera</h2>
                    <div class="rating">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                    </div>
                    <p>I love that the gym is open early and stays open late. There are also a wide variety of classes, so there’s always something new to try.</p>
                </div>

                <div class="review-item">
                    <img src="image4.jpg">
                    <h2>willy</h2>
                    <div class="rating">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                    </div>
                    <p>Since joining this gym, I’ve seen amazing changes in my body and fitness level. They have programs tailored to different fitness goals, and the trainers make sure you stay accountable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->

    <footer class="footer">
        <div class="social">
            <a href="http://www.instagram.com/willy yeri"><i class='bx bxl-instagram-alt'></i></a>
            <a href="http://www.facebook.com/wiiy yeri"><i class='bx bxl-facebook-square'></i></a>
            <a href="#"><i class='bx bxl-linkedin-square'></i></a>
        </div>

        <p class="copyright">
            &copy; Trueboy Fitness 2024 - All Rights Reserved
        </p>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1400,
        });
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="script.js"></script>

</body>

</html>
