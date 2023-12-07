# QUIZ

## Principe du quiz

C'est un ensemble de questions (10 par exemple) sur un thème donné.
A chaque question il est proposé 2 (vrai/faux) ou plus (souvent 4) propositions.
Le joueur doit choisir l'une de ces propositions dont 1 seule est correcte, les autres étant fausses.
S'il valide la bonne réponse, le joueur gagne 1 point; sinon le score est inchangé.

## Structuration du quiz

Le quiz contient un tableau de questions et un score (initialement à 0); on peut lui donner un intitulé.
Une question contient son libellé et un tableau de propositions.
Une proposition est constituée de son libellé et d'un booléen (bonne réponse ou non).

## Mécanique à mettre en place:

1. lancement du quiz: afficher la première question et les propositions de réponse
2. le joueur clique sur une proposition
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
