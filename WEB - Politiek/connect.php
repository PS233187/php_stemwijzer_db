<?php

$con=new mysqli('localhost', 'root','', 'verkiezingenprj3new'); //hier maak ik de connectie met de database 

if(!$con){
   die(mysqli_error($con)); //miscchien geen mysqli gebruiken. wat denk jij?
}

?>