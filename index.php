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

        $data = file_get_contents(__DIR__.'/data.json'); // recherche des données dans le JSON
        $data = json_decode($data, true); // conversion des données en tableau associatif
        $quiz = $data['quiz']; // initialisation du quiz avec les données
        var_dump($quiz);

        $title = "Quiz sans titre";
        if (isset($item['explanation'])) {
            $explanation = $item['explanation'];
        }
        


        for ($i=0; $i < count($quiz); $i++) { 
          echo $quiz->question;
        }

      ?>
  </body>
</html>
