<?php
include '../WatchFlix/header.php'
?>
 <h1 class= "title1">Bienvenue sur WatchFlix</h1>
<?php
 if(isset($_SESSION['username'])){
    echo '<div class="username-login">'.$_SESSION['username'].'</div>';
    echo"<img src='./copyimage/$data->photo";
}
?>
<h1></h1>
<button class="bouton1" type="submit" ><a class="titre" href="../Inazuma/deconnexion.php">Deconnection</a></button>
<button  class="bouton2"  type="submit"><a class="titre" href="../Inazuma/commentaire.php">Espace <br> Commentaire </a></button>
<button  class="bouton3"  type="submit"><a class="titre" href="../Inazuma/get_membre.php">Gerer les membres <br></a></button>
</div>
</div>





<?php
include '../WatchFlix/footer.php'
?>