<?php
 function connectDatabase(){
    return new PDO('mysql:host=localhost;port=3306; dbname=nce-project','root','');
 }
 ?>