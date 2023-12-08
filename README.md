# QUIZ

## Principe du quiz

C'est un ensemble de questions (10 par exemple) sur un thème donné.
A chaque question il est proposé 2 (vrai/faux) ou plus (souvent 4) propositions.
Le joueur doit choisir l'une de ces propositions dont 1 seule est correcte(*), les autres étant fausses.
S'il valide la bonne réponse, le joueur gagne 1 point (**); sinon le score reste inchangé.

(*) c'est le cas le plus courant; mais on peut imaginer des questions à plusieurs réponses (qu'il faut toutes cocher pour gagner la question)
(**) on pourrait affiner en attribuant à chaque question un nombre de points différent, en fonction de sa difficulté

## Structuration du quiz

Le quiz contient un tableau de questions et un score (initialement à 0); on peut lui donner un intitulé.
Une question contient son intitulé et un tableau de propositions.
Une proposition est constituée de son intitulé et d'un booléen (bonne réponse ou non).

## Mécanique à mettre en place:

1. lancement du quiz: afficher la première question et les propositions de réponse
2. le joueur clique sur une proposition et valide (il peut toujours modifier son choix tant qu'il n'a pas validé sa réponse)
3. si cette propositon est associée au booléen vrai,
   afficher la réponse en vert et incrémenter le score;
   sinon afficher la réponse en rouge
4. tant qu'il reste des questions, passer à la question suivante:
   afficher la question et les propositions de réponse -> retour à l'étape 2
5. le quiz est fini et donne le score final
6. amélioration: à la fin du quiz, afficher un récapitulatif des questions avec les réponses données par le joueur,
   les réponses qu'il fallait donner et une éventuelle explication pour chacune des questions
7. proposer de refaire le quiz (imaginer un système de mélange pour que les réponses proposées ne soient pas dans le même ordre)
   ou de passer à un autre quiz -> retour à l'étape 1 (après mise à jour des données alimentant le quiz)

NB: selon cette mécanique, on peut imaginer un statut d'avancement qui définit à quelle étape le quiz se trouve
    (par exemple: 0=début du quiz   1=question affichée, en attente de réponse   2=réponse validée
     3=affichage de la bonne réponse (pendant quelques secondes)   4=passage automatique à la question suivante le cas échéant, sinon 5=fin du quiz)
     
