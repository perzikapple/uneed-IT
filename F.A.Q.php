<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>uneed-it</title>
    <link rel="stylesheet" href="F.A.Q.css"/>
</head>
<body>
<nav>
    <div class="nav">
        <div class="navlogo">
            <img src="logo.png" alt="uneed-it logo">
        </div>
        <div class="nav-links">
            <a href="home.php">Home</a>
            <a href="itnieuws.php">It nieuws</a>
            <a href="overons.php">Over ons</a>
            <a href="reparatie.php">Reparatie</a>
            <a href="service.php">Service</a>
            <a href="zakelijk.php">Zakelijk</a>
            <a href="F.A.Q.php">F.A.Q.</a>
            <a href="#">webschop</a>
        </div>
    </div>
</nav>
<div class="middel">
    <h1>F.A.Q page</h1>
    <p>op deze pagina heb je de F.A.Q. (Frequently Asked Questions).</p>

</div>

<div class="contact-info">
    <div class="contact-section">
        <p>locatie:</p>
        <p> zuidbaan 514, 2841MD moordrecht</p>
    </div>
    <div class="contact-section">
        <p>Neem contact met ons op:</p>
        <p>+316 30 985 409 servicenummer,
            +3118 28 202 18 kantoor of email
            bereikbaar van 09:00 - 18:00</p>
    </div>
    <div class="contact-section">
        <p>bezorg diensten:</p>
        <p>UPS, DHL en HOMERR</p>
    </div>
</div>
<div class="F.A.Q">
    <div class="kopje-faq">F.A.Q.</div>

    <div class="vraag" onclick="toggleAnswer('answer1')">Vraag 1: , quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons</div>
    <div id="answer1" class="answer">
        antwoord
    </div>

    <div class="vraag" onclick="toggleAnswer('answer2')">Vraag 2: cat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id</div>
    <div id="answer2" class="answer">
        antwoord
    </div>

    <div class="vraag" onclick="toggleAnswer('answer3')">Vraag 3: ing elit duis tristique sollicitudin nibh. Mauris pharetra et ultrices neque ornare aenean. </div>
    <div id="answer3" class="answer">
        antwoord
    </div>

    <div class="vraag" onclick="toggleAnswer('answer4')">Vraag 4: unt dui ut. Amet massa vitae tortor condimentum lacinia quis vel eros. Ac feugiat s</div>
    <div id="answer4" class="answer">
        antwoord
    </div>

    <div class="vraag" onclick="toggleAnswer('answer5')">Vraag 5: et consectetur adipiscing elit duis tristique sollicitudin nibh. Mauris pharetra et ult</div>
    <div id="answer5" class="answer">
        antwoord
    </div>
    <div class="leeg-stuk"></div>
</div>
<script>
    function toggleAnswer(id) {
        var answer = document.getElementById(id);
        if (answer.style.display === "none") {
            answer.style.display = "block";
        } else {
            answer.style.display = "none";
        }
    }
</script>

<footer>
    <div class="contact-info">
        <div class="contact-section2">
            <p>locatie:</p>
            <p> zuidbaan 514, 2841MD moordrecht</p>
        </div>
        <div class="contact-section2">
            <p>Neem contact met ons op:</p>
            <p>+316 30 985 409 servicenummer,
                +3118 28 202 18 kantoor of email
                bereikbaar van 09:00 - 18:00</p>
        </div>
        <div class="contact-section2">
            <p>bezorg diensten:</p>
            <p>UPS, DHL en HOMERR</p>
        </div>
    </div>
</footer>

