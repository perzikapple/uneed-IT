<html>
<head>
    <title>UneedIT - Zakelijk</title>

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #5e76d9;
        color: white;
        text-align: center;
        padding: 1em;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 10px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
    }

    main {
        padding: 1em;
    }

    footer {
        background-color: #5e76d9;
        color: white;
        text-align: center;
        padding: 1em;
        position: absolute;
        bottom: 0;
        width: 97.8%;
    }
    #logo{
        position: absolute;
        left: 0px;
        top: -10px;
    }
    .info{
        width: 50%;
        float: left;
    }
    .formulier{
        width: 50%;
        float: right;
    }
    form{
        margin: 0 auto;
        width: 50%;
    }
    label{
        display: block;
        margin-top: 10px;
    }
    input, textarea{
        width: 100%;
        padding: 10px;
        margin-top: 5px;
    }
    input[type="submit"]{
        background-color: #5e76d9;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover{
        background-color: #4a5ec2;
    }

</style>
<body>

<header>
    <nav>
        <img id="logo" src="img/logo.png" alt width="300px" height="100px">
        <ul class="nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="particulier.php">Particulier</a></li>
            <li><a href="overons.php">over ons</a></li>
        </ul>
    </nav>
</header>
<main>

    <div class="info">
        <h1>Zakelijk</h1>
        <p>UneedIT biedt alle diensten op locatie aan.</p>
        <p>Wij bieden de volgende diensten aan:</p>
        <ul>
            <li>Reparatie van computers en laptops: </li>
            <a>wij doen zowel apple als windows en androit appareten</a>
            <li>Installatie van software:</li>
            <a>wij maken uw windows en apple laptop gebruiks klaar</a>
        </ul>
        <p>Wilt u meer informatie over onze diensten? Neem dan contact met ons op.</p>
        <a> U kunt ook altijd bij ons langskomen: Zuidbaan 514
            2841 MD Moordrecht (Gouwe Park):</a>
        <p>U kunt ons ook bellen tussen 09:00 - 18:00: +3118 28 202 18</p>
    </div>
    <div class="formulier">
        <form action="zakelijk.php" method="post">
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="telefoonnummer">Telefoonnummer:</label>
            <input type="tel" id="telefoonnummer" name="telefoonnummer" required>
            <label for="bericht">Bericht:</label>
            <textarea id="bericht" name="bericht" required></textarea>
            <input type="submit" value="Verstuur">

            <?php

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $query = $bd = new PDO('mysql:host=localhost;dbname=uneet-it',
                'root', '');

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $naam = $_POST['naam'];
                $email = $_POST['email'];
                $telefoonnummer = $_POST['telefoonnummer'];
                $bericht = $_POST['bericht'];

                // Insert data into database
                $query = $bd->prepare('INSERT INTO `formulier` (`naam`, `email`, `telefoonnummer`, `bericht`) VALUES (:naam, :email, :telefoonnummer, :bericht)');
                $query->execute([
                    'naam' => $naam,
                    'email' => $email,
                    'telefoonnummer' => $telefoonnummer,
                    'bericht' => $bericht
                ]);

                Header('Location: zakelijk.php');
            }

            ?>
        </form>

    </div>
</main>
<footer>
    <p>&copy; UneedIT</p>
</footer>
</html>