<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $bd = new PDO('mysql:host=localhost;dbname=uneed-it', 'root', '');
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $bd->prepare('SELECT * FROM `reparatie`');
    $statement->execute();

    $comments = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

    <div class="reparatie">
        <h1>Reparaties</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>naam</th>
                <th>email</th>
                <th>telefoonnummer</th>
                <th>merk</th>
                <th>datum</th>
                <th>bericht</th>
            </tr>
            <?php foreach ($comments as $comment) : ?>
                <tr>
                    <td><?= $comment['id'] ?></td>
                    <td><?= $comment['naam'] ?></td>
                    <td><?= $comment['email'] ?></td>
                    <td><?= $comment['telefoonnummer'] ?></td>
                    <td><?= $comment['merk'] ?></td>
                    <td><?= $comment['datum'] ?></td>
                    <td><?= $comment['beschrijving'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    /* CSS for the whole page */
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .reparatie {
        margin-top: 20px;
    }
</style>
