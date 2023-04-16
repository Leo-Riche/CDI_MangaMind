<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Mind Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/sidebar.js" defer></script>
    <script src="js/modal.js" defer></script>
    <script src="js/signup.js" defer></script>
</head>
<body>
    <header>
        <section class="MenuBurger">
            <div class="Bars">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div>
            </div>
        </section>
        <h1 class="TitleMangaMind">Manga Mind</h1>
        <img class="ProfilPicture" src="./images/PPLeo.png" alt="Photo de profil Clubs">
    </header>
    <section class="Sidebar Slide">
        <a href="home.html"><h3 class="ElementSidebar">Accueil</h3></a>
        <h3 class="ElementSidebar">Recherche</h3>
        <h3 class="ElementSidebar">Messages</h3>
        <a href="profil.html"><h3 class="ElementSidebar">Profil</h3></a>
        <a href="settings.html"><h3 class="ElementSidebar">Paramètres</h3></a>
        <a href="register.html"><h3 class="ElementSidebar" class="LogoutSidebar">Se déconnecter</h3></a>
    </section>
    <div class="tags">
        <h5 class="tag1">shonen</h5>
        <h5 class="tag2">shojo</h5>
        <h5 class="tag3">seinen</h5>
        <h5 class="tag4">josei</h5>
        <h5 class="tag5">newgen</h5>
        <h5 class="tag6">oldgen</h5>
        <h5 class="tag7">anime</h5>
        <h5 class="tag8">manga</h5>
        <h5 class="tag9">news</h5>
        <h5 class="tag10">else</h5>
    </div>
    <section class="HomeArea">
        <div class="heighter"></div>

        <div class="signUp" id="SignUp">
            <div class="signUpBack"></div>
            <div class="signUpContainer">
                <a class="login" href="login.html">Se connecter</a>
                <br>
                <a href="#" id="SignUpClose">Fermer</a>
            </div>
        </div>
        <section class="Post">
            <div class="News">
                <form action="" method="get">
                    <label class="text" for="recherche">Recherche :</label>
                    <input type="text" name="recherche" id="recherche">
                </form>
                <br>
                <?php
                foreach ($posts as $post) {
                    echo "<p>" . $post["post_content"] . "</p>";
                    echo "<p>Post publié le " . date("d/m/Y", strtotime($post['post_date'])) .
                    " à " . date("H:i", strtotime($post['post_date']));
                    ?>
                    <form action="./post/delete.php" method="POST">
                    <input type="hidden" name="form" value="formulaire_suppression_post">
                    <input type="hidden" name="post_id" value="<?= $post['post_id'] ?>">
                    <input type="submit" value="Supprimer">
                    </form>
                <?php
                }
                ?>
            </div>
        </section>
        <section class="ButtonNewPost">
            <img src="./images/plus.svg" alt="Bouton Nouveau Post">
        </section>
        <section class="NewPost">
            <?php require_once './post/index.template.php'?>
        </section>
    </section>
</body>
</html>