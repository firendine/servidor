<?php
<<<<<<< HEAD
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
=======


$user = trim($_POST["user"]);
$password = $_POST["password"];

$sql = "SELECT id, password, avatar, COUNT(1) FROM usuarios  
WHERE nombreUsuario = :user LIMIT 1";
$prepared_statement = $mysql->prepare($sql);
$prepared_statement->bindParam(':user', $user, PDO::PARAM_STR); 
if (!$prepared_statement->execute()) {
$this->setError ("Error al comprobar usuario registrado");
}

$res = $prepared_statement->fetch(PDO::FETCH_NUM);
if ($res[3] === "0") {
echo "nombre de usuario no válido";
}

$passwordBBDD = $res[1];

if (password_verify($password, $passwordBBDD)) {
setcookie("DWS", $res[0] . ";" . $res[2], time() + (86400 * 7));
header("location:" . ROOT2);
} else {
echo "password no válido";
}

    //session_start();
/*
    include_once "config.php";

    $user = trim($_POST["user"]);
    $password = crypt($_POST["password"]);
    $avatar;
    $error="ERROR";

    //$usuarios = [];

    $usuarios = (file(DATOS)); //Recorremos el array y guardamos sus datos en $usuarios


    foreach($usuarios as $usuario){
        $usuarioActual= explode(";",$usuario,3);
     
        if($user == $usuarioActual[0]){
            echo"usuario bien";

            if(hash_equals($password, crypt($usuarioActual[1],$password))){

                echo "contraseña bien";
                $avatar = $usuarioActual[2];
                setcookie("sesionIniciada",$user,time()+604800,FICHEROS);
                include_once 'index.php';
                $_SESSION['avatar']=$avatar;
                $_SESSION['user']=$user;
                $_SESSION['password']=$password;
                header('Location:' . ROOT . DT);

                break;


            }else{
                $_SESSION['password']=$error;
                header('Location:' . ROOT . DT .'login');
                break;
            }

        }else{
            $_SESSION['user']=$error;
            header('Location:' . ROOT . DT .'login');
                            
        } 

    }

*/



>>>>>>> 1er commit

    
