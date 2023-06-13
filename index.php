<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="/assets/imgs/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
    <title>SpaceX | Home</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="nav__item">
            <a href="/"><img src="/assets/imgs/logo.png" alt="SpaceX Logo" height="50" /></a>
        </div>
        <div class="nav__item container--right">
            <ol>
                <li>
                    <a href="contact.php"><button id="contact">CONTACT US</button></a>
                </li>
            </ol>
        </div>
    </header>
    <main>
        <div class="container container--80"  data-aos="fade-right" data-aos-duration="1000">
            <div class="container__half__home">
                <strong>
                    <h1>About us</h1>
                </strong>
                <span>
                    Space Exploration Technologies Corporation, American
                    aerospace company founded in 2002 that helped usher in
                    the era of commercial spaceflight.<span class="text__responsive">SpaceX, as it is
                    commonly known, was founded by Elon Musk with the goal
                    of reducing space transportation costs and enabling the
                    colonization of Mars in the future.</span></span>
                <a href="/about_us.php"><button class="learn-more">Learn More</button></a>
            </div>
            <div class="container__half__home">
                <img src="/assets/imgs/rocket.png" alt="Rocket" width="400" class="responsive--image" />
            </div>
        </div>
        <div class="container container--80" data-aos="fade-left" data-aos-duration="1000">
            <div class="container__half__home">
                <img src="/assets/imgs/rocket_2.png" alt="Rocket" width="400" class="responsive--image" />
            </div>
            <div class="container__half__home justify--center">
                <strong id="aboutus">
                    <h1>Civilian Space Flight Permits (CSFP)</h1>
                </strong>
                <span>
                    A Civilian Space Flight Permit (CSFP) is a document
                    individuals need to participate in commercial space
                    flights. It involves meeting criteria such as medical
                    tests, specialized training, background checks, and
                    legal eligibility. <span class="text__responsive">Once issued, the permit ensures the
                    safety and security of participants during the
                    flight.</span></span>
                <a href="/csfp.php"><button class="learn-more">Learn More</button></a>
            </div>
        </div>
        <div class="container container--80" data-aos="fade-right" data-aos-duration="1000">
            <div class="container__half__home">
                <strong id="aboutus">
                    <h1>Road Map</h1>
                </strong>
                <span>
                    Our roadmap outlines the locations and stages where we
                    plan to open our facilities. We've taken into account
                    market demand, local regulations, and economic
                    conditions to ensure its feasibility. <span class="text__responsive">Our stakeholders
                    rely on this plan, including customers, investors, and
                    employees.</span></span>
                <a href="/roadmap.php"><button class="learn-more">Learn More</button></a>
            </div>
            <div class="container__half__home container--center">
                <img src="/assets/imgs/rocket_3.png" alt="Rocket" width="400" class="responsive--image" />
            </div>
        </div>
    </main>
    <footer>
        <ol>
            <li><button>SPACEX © 2023</button></li>

            <li><a href="/privacy.php"><button>Privacy Disclaimer</button></a></li>
        </ol>
        <ol>
            <li>Youtube<a href="https://www.youtube.com/spacex"><button class="media"><i class="fa-brands fa-youtube"></i></button></a></li>
            <li>Twitter<a href="https://twitter.com/SpaceX"><button class="media"><i class="fa-brands fa-twitter"></i></button></a></li>
            <li>Instagram<a href="https://www.instagram.com/spacex/"><button class="media"><i class="fa-brands fa-instagram"></i></button></a></li>
        </ol>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
