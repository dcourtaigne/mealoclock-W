
    $(".toggle-button").click(function() {
    $(".top, #mid, #registerform" ).slideToggle(300, function(){});
  });
    function overlay(){
    var overlaystate = $("#overlay").css("display");
      if (overlaystate = "none") {
        $("#overlay").css({"display":"initial"})
        }
    };
    $("#login").click(function(){
      $("#overlay").animate({top:'125px'});
      overlay();
    });
    $("#close button").click(function(){
      $("#overlay").css({"display":"none"})
    })

/*****************GESTION FORMULAIRE INSCRIPTION****************************/
   $('#registerform').submit(function ( e ) { // affectation d'un listener sur l'evenement "submit" du formulaire d'inscription

    e.preventDefault(); // empeche la soumission du formulaire
    var fromData = $(this).serialize();// récupère toutes les données du formulaire et les encode au format URL ( chaine de caracteres )
    // récupère toutes les données du formulaire et les encode au format URL ( chaine de caracteres )
    $.post( // fonction jQuery pour la requete ajax en utilisant la methode HTTP POST
      $(this).attr('action'), // recupere l'url de soumission du formulaire
      fromData, // les données encodées du formulaire
      function (data) {//fonction callback un fois la requête PHP terminée
        console.log(data);//un ptit console.log pour checker les données renvoyées par PHP dans la fonction de callback
      if(data.status == 1){ // si PHP dit tout est ok (statut = 1) on ferme la modale
          $("#overlay").css({"display":"none"});
      }else{// sinon on affiche les messages d'erreurs dans la modales
          $("#errorName").html(data.name);
          $("#errorEmail").html(data.email);
          $("#errorPass").html(data.password);
          $("#errorPassRepeat").html(data.passwordrepeat);
          $("#errorPassRepeat").html(data.passwords);
        }
      }
    );
  });

   /*****************GESTION FORMULAIRE Login****************************/

$('#loginform').submit(function ( e ) { // affectation d'un listener sur l'evenement "submit" du formulaire de login
    e.preventDefault();// empeche la soumission du formulaire

    var fromData = $(this).serialize();
    //console.log(fromData); // récupère toutes les données du formulaire et les encode au format URL ( chaine de caracteres )
    $.post( // fonction jQuery pour la requete ajax en utilisant la methode HTTP POST
      $(this).attr('action'), // recupere l'url de soumission du formulaire
      fromData, // les données encodées du formulaire
      function (data) {//fonction callback un fois la requête PHP terminée
      console.log(data);//un ptit console.log pour checker les données renvoyées par PHP dans la fonction de callback
      if(data.status == 1){
        javascript:window.location.reload()//si PHP dit tout est ok (statut = 1) on reload la page courante afin d'afficher logout, le nom de l'utilisateur et autres
      }else{// sinon on affiche les messages d'erreurs dans la modales
          $("#errorMessage").html(data.message);
        }
      }
    );
  });