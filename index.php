<?php
require_once 'admin/dbStream.php';
$stmtPortfolio = $db->query('SELECT title, link, github, image, description FROM portfolio;');
$dataPortfolio = $stmtPortfolio->fetchAll();
require_once 'functions/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type ="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script rel="script" src="scripts.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James | Home</title>
</head>
<body>
    <header>
        <span class="homeNav">James</span>
        <nav class="topNav">
            <span class="aboutNav">About</span>
            <span class="portfolioNav">Portfolio</span>
            <span class="contactNav">Contact</span>
        </nav>
        <nav class="socialLinks">
            <a href="https://github.com/James-Benson" target="_blank"><i class="fab fa-github"></i></a>
            <a href="mailto:J.Benson13@hotmail.co.uk"><i class="fab fa-facebook-square"></i></a>
        </nav>
    </header>
    <div class="background"></div>
    <main class="homeMain homeNav">
        <h1>Hi, I'm James. I make websites.</h1>
    </main>
    <main class="aboutMain aboutNav">
        <div class="mainContent">
            <h1>I'm learning full stack web development at Mayden Academy.</h1>
            <section class="aboutWrapper">
                <article class="experience">
                    <h2>Experience</h2>
                    <ul class="aboutTopList">
                        <li>Mayden Academy, 08/18-12/18</li>
                    </ul>
                </article>
                <article class="skills">
                    <h2>Skills</h2>
                    <ul class="aboutTopList">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                        <li>Bootstrap</li>
                        <li>Sass</li>
                        <li>PHP</li>
                    </ul>
                </article>
                <article class="qualifications">
                    <h2>Qualifications</h2>
                    <ul class="aboutTopList">
                        <li>CSM</li>
                        <li>A-Levels<ul>
                                <li>A: Biology</li>
                                <li>A: Chemistry</li>
                                <li>A: Physics</li>
                                <li>A: Maths</li>
                                <li>B: Further Maths</li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </section>
        </div>
    </main>
    <main class="portfolioMain portfolioNav">
        <div class="mainContent">
            <?php echo showProjects($dataPortfolio); ?>
        </div>
    </main>
    <main class="contactMain contactNav">
        <div class="mainContent">
            <h1 class="contactInfo">
                <a href="mailto:J.Benson13@hotmail.co.uk">J.Benson13@hotmail.co.uk</a><br>
                <a href="https://github.com/James-Benson" target="_blank">James-Benson@Github</a>
            </h1>
        </div>
    </main>
</body>
</html>