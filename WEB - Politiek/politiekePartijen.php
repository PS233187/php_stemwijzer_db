<?php
include 'connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./css/Home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script src="./javascript/login.js"></script>
    <title>Stemwijzer</title>
</head>
<header class="contentHeader"></header>
<h2 class="logo">politiek:&nbsp;<span>politieke Partijen</span></h2>
<nav>
    <ul>
        <li><a href="HomeLogedin.php">Home</a></li>
        <li><a href="stemwijzer.php">Stemwijzer</a></li>
        <li><a href="politiekePartijen.php">Politieke partijen</a></li>
        <li><a href="thema.php">thema</a></li>
    </ul>
    <button onclick="window.location.href='Home.html'" class="loguit" type="button">Uitloggen</button>
</nav>
</br>

<body>
    <video src="./img/istockphoto-1197174256-640_adpp_is.mp4" autoplay loop playsinline muted></video>
    <main>
        <table class="table">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">partij</th>
                    <th scope="col">adres</th>
                    <th scope="col">gemeente</th>
                    <th scope="col">Email</th>
                    <th scope="col">telefoonnummer</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "Select * from `partij`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $partij_id = $row['partij_id'];
                        $naam = $row['naam'];
                        $adres = $row['adres'];
                        $gemeente = $row['gemeente'];
                        $emailadres = $row['emailadres'];
                        $telefoonnummer = $row['telefoonnummer'];

                        echo '<tr class="text-light">                
                <th scope="row">' . $partij_id . '</th>                
                <td>' . $naam . '</td>
                <td>' . $adres . '</td>
                <td>' . $gemeente . '</td>
                <td>' . $emailadres . '</td>
                <td>' . $telefoonnummer . '</td>
            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        </div>
</body>
</main>
</body>
</html>