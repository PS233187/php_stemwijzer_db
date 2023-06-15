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
<header class="contentHeader">
</header>
<h2 class="logo">politiek:&nbsp;<span>Stemwijzer</span></h2>
<nav>
    <ul>
        <li><a href="HomeLogedin.php">Home</a></li>
        <li><a href="stemwijzer.php">Stemwijzer</a></li>
        <li><a href="politiekePartijen.php">Politieke partijen</a></li>
        <li><a href="thema.php">thema</a></li>
    </ul>
    </br>
    </br>
    <button onclick="window.location.href='stemwijzer.php'" class="loguit" type="button">Stemwijzer opnieuw</button>
    <button onclick="window.location.href='Home.html'" class="loguit" type="button">Uitloggen</button>
</nav>
</br>
<body>
    <video src="./img/istockphoto-1197174256-640_adpp_is.mp4" autoplay loop playsinline muted></video>
    <main>
        <form action="stemwijzer.php" method="post">
            <table class="table">

                <thead class="thead-dark">
                    <tr>
                        <th id="textA" scope="col">#</th>
                        <th id="textB" scope="col">Standpunt</th>
                        <th id="textC" scope="col">Eens/Oneens</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        //echo 'hier spannende dingen doen met eens en oneens';


                        //alle standpunten ophalen en toevoegen in een string
                        $id = "";
                        foreach ($_POST as $key => $value) {
                            $id = $key . ',' . $id;
                        }

                        //laatste comma verwijderen van de string
                        $id = rtrim($id, ',');


                        //query om de score op te halen
                        $s = "SELECT partij.naam as name, COUNT(partij_standpunt.partij_id) as score FROM `partij_standpunt` JOIN `partij` ON partij_standpunt.partij_id =partij.partij_id WHERE `standpunt_id` IN($id) GROUP BY partij_standpunt.partij_id ORDER BY COUNT(partij_standpunt.partij_id) DESC;";
                        $x = mysqli_query($con, $s);           //hoevaak id voorkomt           label (anders komt er count)                                                                                             groeperen op basis van een indenti      volgorde van groot naar klein 
                        if ($x) {
                            echo "";
                            while ($row = mysqli_fetch_assoc($x)) {
                                $name = $row['name'];
                                $score = $row['score'];
                                echo '<tr class="text-light">                
                                <th scope="row">' . $name . '</th>                
                                <td>' . $score . '</td>
                                </tr>  
                                                                    ';
                            }
                        }
                    } else {

                        $sql = "select * from `standpunt`";
                        $result = mysqli_query($con, $sql);

                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['standpunt_id'];
                                $standpunt = $row['standpunt'];

                                echo '<tr class="text-light">                
                                <th scope="row">' . $id . '</th>                
                                <td>' . $standpunt . '</td>
                                 <td>
                                 <input type="radio" name="' . $id . '" required  value="eens"> 
                                <input type="radio" name="'  . $id . '" required  value="oneens">
                                </td>
                                </tr>';
                            }
                        }
                    }
                    ?>
                    <input onclick="buttonText()" class="indienen" type="submit" value="indienen">

                </tbody>
            </table>
        </form>
        </div>
</main>
</body>
</br>
</br>
</br>
</br>
</br>
<footer class="contentFooter">
    <p>Informatie</p>
    <p>Social media</p>
</footer>
</html>