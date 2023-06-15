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
                    <th scope="col">thema</th>
                    <th scope="col">Standpunt</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `standpunt` INNER JOIN thema ON standpunt.thema_id = thema.thema_id; ";
                $result = mysqli_query($con, $sql);


                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<tr class='text-light' >
                <td>" . $row['thema'] . "</td>
                <td>" . $row['standpunt'] . "</td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
        </div>
</body>
</main>
</body>
</html>