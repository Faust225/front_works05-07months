<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            @font-face {  
                src: url(css/fonts/gof.ttf) format("truetype");
            }
        </style>
        <title>Oscar Sherelis</title>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </head>
    <body>
        <header><!-- After scroll Jquery will add .black class in header -->
            <nav>
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#skills">SKILLS</a></li>
                </ul>
            </nav>
        </header>
        <section class="first-section" id="home">
            <div class="home-text">
                <h1>GAME OF PROGRAMMERS</h1>
                <h1>DEADLINE IS COMING</h1>
            </div>
        </section>
        <section class="second-section" id="about">
            <div class="about-me">
                <h2>Oscar Sherelis</h2>
                <p>I have finished the University of Bialystok in Vilnius Faculty of Informatics
                 in 2018.</p>
                <p>Do not have any problems to learn something new.</p>
                <p>Salary is not important, I am looking for knowledge.</p>
                <p>For now, I am studying for 6 months fullstack course in Codeacademy https://www.codeacademy.lt/en/programavimo-kursai/certified-full-stack-course/ 15 September
                    I am free to start practice or work. </p>
                <p>Contacts:</p>
                <p>oskaras34@gmail.com</p>
                <p>+37060782139</p>
            </div>
        </section>
        <section class="third-section" id="skills">
            <div class="skill-set">
                <div class="back-end">
                    <span><h2>Back-end</h2></span>
                    <ul>
                        <li><img src="css/images/php.svg"></li>
                        <li><img src="css/images/json.svg"></li>
                         <li><img src="css/images/mysql.svg"></li>
                    </ul>
                </div>
                <div class="front-end">
                    <span><h2>Front-end</h2></span>
                    <ul>
                        <li><img src="css/images/css.svg"></li>
                        <li><img src="css/images/js.svg"></li>
                        <li><img src="css/images/html.svg"></li>
                        <li><img src="css/images/sass.svg"></li>
                        <li><img src="css/images/bootstrap.svg"></li>
                    </ul>
                </div>
            </div>
        </section>
        <script src="js/black.js"></script>
    </body>
</html>