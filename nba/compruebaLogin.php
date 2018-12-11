<?php
    //session_start();

    include_once "config.php";

    $user = trim($_POST["user"]);
    $password = md5($_POST["password"]);
    $avatar;
    $error="ERROR";



   // try{
       //$conn = new PDO('mysql:host=localhost;dbname=nba', 'silvia', 'silvia');


        $sql_count="SELECT COUNT(nombre) FROM usuarios WHERE nombre = '$user'";
        $sql_check="SELECT * FROM usuarios WHERE nombre = '$user'";
        $stmt = $conn->query($sql_count);
        
        $res = $stmt->fetchColumn();  
        if ($res) {
            
            foreach($conn->query($sql_check) as $row){
                if($row['password']==$password){
                    setcookie("sesionIniciada",$user,time()+604800);
                    $_SESSION['user']=$user;
                    $_SESSION['logged']=true;
    
                    header('Location:' . ROOT . DT);

                }else{
                    $_SESSION['password']='ERROR';
                    header('Location:' . ROOT . DT . 'login');
                }
                

            }
            
           
        } else {
            $_SESSION['user']='ERROR';
            header('Location:' . ROOT . DT . 'login');

        }


echo "cucucu";
   // }catch(PDOException $ex){
        echo"error al conectar";
   // }

    
