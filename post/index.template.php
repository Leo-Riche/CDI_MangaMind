<div>
  <br>
  <form action="" method="POST">
    <input type="hidden" name="form" value="formulaire_ajout_post">
    <textarea class="AddNewPost" name="post_content" id="post_content" cols="30" rows="10" required placeholder="Partagez vos histoires"></textarea>
    <br>
    <h3>Choisissez votre tag :</h3>
      <div class="Tags">
        <div class="TagColumn">
          <h5 class="ShonenTag">Shonen</h5>
          <h5 class="ShojoTag">Shojo</h5>
          <h5 class="NewgenTag">Newgen</h5>
          <h5 class="MangaTag">Manga</h5>
          <h5 class="NewsTag">News</h5>
        </div>
        <div class="TagColumn">
          <h5 class="SeinenTag">Seinen</h5>
          <h5 class="JoseiTag">Josei</h5>
          <h5 class="OldgenTag">Oldgen</h5>
          <h5 class="AnimeTag">Anime</h5>
          <h5 class="ElseTag">Else</h5>
        </div>
      </div>
    <input class="AddPost" type="submit" value="Partager">
  </form>
  <br>
  <?php if (!empty($post_content)) : ?>
    <h2>Ajouter un post :</h2>
    <?= "post_content : $post_content" ?>
  <?php endif; ?>

  <?php if (isset($post_inserted) && $post_inserted) : ?>
    <h2 style="color: green">Post ajouté avec succès</h2>
  <?php elseif (isset($post_inserted) && !$post_inserted) : ?>
    <h2 style="color: red">Erreur lors de l'ajout du post</h2>
  <?php endif; ?>
</div>