<h1>Se connecter</h1>

<div class="center-form">
    <h1>Manga</h1>
    <div class="col-lg-4">    
        <div class="card card--login">
            <h2>Se connecter</h2>
         <img src="images/image1.jpg" alt="Avatar" style="width:100%">
            <?php $this->includePartial("form", $user->getLoginForm());?>

            <a href="recuperer_mdp">Mot de passe oublié ?</a>
            <?php if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<br>". $error. "<br>";
                }
            }?>
        </div>
    </div>
    <p>Pas encore inscrit ?<a href="/register"> S'inscrire</a></p>

</div>
