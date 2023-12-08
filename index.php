<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Quiz</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  </head>
  <body>
      <?php 
        require 'classes/Quiz.php';

        $data = file_get_contents(__DIR__.'/data.json'); // récupération des données du fichier JSON
        $data = json_decode($data, true); // conversion de ces données en tableaux associatifs
        $data = $data['quiz']; // sélection des données qui vont servir à initialiser le quiz

        $title = "Quiz sans titre";
        if (isset($data['title'])) {
            $title = $data['title'];
        }
        $quiz = new Quiz($title, $data['questions']);
        
        // à faire: - afficher la première question: $quiz->displayNextQuestion();
        //          - attendre que le joueur ait sélectionné une réponse, puis l'ait validé
        //            (NB: le bouton de validation n'est activé qu'après sélection d'une réponse)
        //          - une fois la réponse validée, mise en couleur de la réponse (vert = bien répondu)
        //            et actualisation du score                                  (rouge = mal répondu)
        //          - passage à la question suivante (boucle jusqu'à la dernière question)
        //          - le quiz est terminé; bilan / récapitulatif + explications complémentaires
        
        //          - choix de recommencer ou de passer à un autre quiz (à récupérer depuis un fichier ou via une API)

      ?>
  </body>
</html>
