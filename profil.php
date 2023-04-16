<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Mind Profil</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/sidebar.js" defer></script>
    <script src="js/deleteButton.js" defer></script>
</head>
<body>
    <header>
        <section class="MenuBurger">
            <div class="Bars">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </section>
        <h1>Manga Mind</h1>
        <img class="ProfilPicture" src="./images/PPLeo.png" alt="Photo de profil Clubs">
    </header>
    <section class="Sidebar Slide">
        <a href="home.html"><h3 class="ElementSidebar">Accueil</h3></a>
        <h3 class="ElementSidebar">Recherche</h3>
        <h3 class="ElementSidebar">Messages</h3>
        <a href="profil.html"><h3 class="ElementSidebar">Profil</h3></a>
        <a href="settings.html"><h3 class="ElementSidebar">Paramètres</h3></a>
        <h3 class="ElementSidebar" class="LogoutSidebar">Se déconnecter</h3>
    </section>
    <section class="UserProfilArea">
        <img class="ProfilPicture" src="./images/PPLeo.png" alt="Photo de profil Clubs">
        <div class="UserProfil">
            <div class="ProfilPseudo">
                <h2>Clubs</h2>
                <p>@saikochi</p>
            </div>
            <h4>
                Salut je suis un jeune fan de manga cherchant à partager sa passion !
            </h4>
        </div>
    </section>
    <div class="HorizontalBar"></div>
    <section class="ProfilNav">
        <div class="NavCategory">
            <h3>Posts</h3>
        </div>
        <div class="BarCategory"></div>
        <div class="NavCategory">
            <h3>Likes</h3>
        </div>
        <div class="BarCategory"></div>
        <div class="NavCategory">
            <h3>Réponses</h3>
        </div>
        <div class="HorizontalBar"></div>
    </section>
    <section class="PostArea">
        <section class="ProfilPosts">
            <div class="UserPost">
                <img class="ProfilPicturePost" src="./images/PPLeo.png" alt="Photo de profil Clubs">
                <h3>Clubs</h3>
                <p>@saikochi - 1j</p>
            </div>
            <div class="Post">            
                <h4>
                    Que pensez-vous de la nouvelle saison de My Hero Academia ? Perso 
                    j’adore l’intrigue avance tellement !
                </h4>
                <img class="ImagePost" src="./images/MhaSeason6.png" alt="Image post Clubs">            
                <div class="UnderPost">
                    <p>#shonen</p>
                    <div class="Stats">
                        <p>3,2K</p>
                        <img src="./images/message-circle.svg" alt="Icône commentaire">
                        <p>27,3K</p>
                        <img src="./images/heart.svg" alt="Icône like">
                    </div>
                </div>
                <div class="deleteButton">
                    <p>Supprimer</p>
                </div>
                <div class="delete">
                    <div class="confirm">
                        <h4 class="confirmDelete">Supprimer ce post</h4>
                    </div>
                    <div class="confirm">
                        <h4 class="cancelDelete">Annuler</h4>
                    </div>
                </div>
            </div>       
        </section>
        <section class="ProfilPosts">
            <div class="UserPost">
                <img class="ProfilPicturePost" src="./images/PPLeo.png" alt="Photo de profil Clubs">
                <h3>Clubs</h3>
                <p>@saikochi - 2j</p>
            </div>
            <div class="Post">            
                <h4>
                    Quel est le meilleur antagoniste de One Piece selon vous ?
                </h4>
                <img class="ImagePost" src="./images/AntagonistesOnePiece.png" alt="Image post Clubs">            
                <div class="UnderPost">
                    <p>#shonen</p>
                    <div class="Stats">
                        <p>4,6K</p>                        
                        <img src="./images/message-circle.svg" alt="Icône commentaire">
                        <p>61,2K</p>
                        <img src="./images/heart.svg" alt="Icône like">
                    </div>
                </div>
                <div class="deleteButton">
                    <p>Supprimer</p>
                </div>
                <div class="delete">
                    <h4 class="confirmDelete">Supprimer ce post</h4>
                    <h4 class="cancelDelete">Annuler</h4>
                </div>
            </div>
        </section>
    </section>
</body>
</html>