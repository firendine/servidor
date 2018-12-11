<head>
    <link rel="stylesheet" type= "text/css" href="<?=ROOT . DT . CSS . "menu.css"?>">
</head>
<header>
<nav id="nav">	
	<ul>	
        <li>
    <img src="<?=ROOT . DT . IMG?>logo-3.png" width="85" height="55">
		</li>
		<li>
			<a href="<?=ROOT . DT?>inicio"><span>Inicio</span></a>
		</li>
		<li>
			<a href="<?=ROOT . DT?>jugadores"><span>Jugadores</span></a>
		</li>
		<li>
			<a href="<?=ROOT . DT?>historia"><span>Historia</span></a>
		</li>
		<li>
			<a href="<?=ROOT . DT?>partidos"><span>Partidos</span></a>
		</li>
		<li>
			<a href="<?=ROOT . DT?>noticias"><span>Noticias</span></a>
		</li>
		<li>
		<?php
			if( $_SESSION['logged']==false){
				echo '<li><a href="/login"><span>Login</span></a></li>';
				echo '<li><a href="/signup"><span>Sign Up</span></a></li>';
			}else{
				$avatar = $_SESSION['avatar'];

				echo '<li><a href="/preferencias" ><img src="avatares/'.$avatar.'" width="50" class="avatar"></a></li>';
			}
			?>
		</li>
	</ul>
</nav> 

</header>
