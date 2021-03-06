<div class="conteneur_bis">
        <section class="utilisateur">
          <div class="alignright">
            <div class="image_prenom">
               <?php if($request['user_photo']): ?>
              <img src="<?=$this->assetUrl('img/avatar/'.$request['user_photo'])?>">
               <?php else:?>
              <img src="<?=$this->assetUrl('img/avatar/avatar.png')?>">
            <?php endif?>
                <h4><?= $this->e($request['user_name']) ?></h4>
            </div>
            <p class="commentaire wide">
              <?= $this->e($request['message']) ?>
            </p>
            <span class="liste">
              <ul>
                <li><a href="<?=$this->url('confirmEventRequest', ['id'=>$request['event_id'],'iduser'=>$request['id']])?>">Confirmer l'inscription</a></li>
                <li><a href="<?=$this->url('rejectEventRequest', ['id'=>$request['event_id'],'iduser'=>$request['id']])?>">Refuser l'inscription</a></li>
              </ul>
            </span>
          </div>

          <div class="display_bottom_comment">
            <strong>Afficher son message</strong>
          </div>
          <p class="commentaire">
            <?= $this->e($request['message']) ?>
            <br>
          <div class="display_bottom_profile">
          <strong>Apercu du profil</strong>
          </div>
          <article class="profile_preview">
            <p><strong>Introduction:</strong> <?= $this->e($request['user_desc']) ?></p>
            <span><strong>Repas participes:  <?= $this->e($request['countPart']) ?></strong></span>
            <br>
            <span><strong>Repas organises:  <?= $this->e($request['countOrg']) ?></strong></span>
            <br>
            <a href="<?=$this->url('userProfile', ['id'=>$request['id']])?>" target="_blank">Consulter son profil</a>
          </article>
      </section>
    </div>
