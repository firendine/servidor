<?php

if($pdo = new PDO('mysql:host=localhost;dbname=nba', 'root', 'root')!=NULL){
echo "funca";
}else{
    echo "no funca";
}