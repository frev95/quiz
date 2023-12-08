<?php

// Classe Quiz

require 'classes/Question.php';

class Quiz
{
    public string $title = "";
    public array $questions = [];
    public int $currentQuestionIndex = -1;  // quiz pas encore commencé
    public int $score = 0;

    // Constructeur
    public function __construct(string $title, array $questions) {
        $this->$title = $title;
        
        foreach ($questions as $item) {
            $explanation = "";  // une explication n'est pas systématiquement proposée
            if (isset($item['explanation'])) {
                $explanation = $item['explanation'];
            }
            array_push($this->questions, new Question($item['content'], $item['answers'], $explanation));
        }
    }
    
    // Getters et Setters
    public function getScore()
    {
        return $this->score;
    }
    
    // Méthodes
    public function increaseScore()
    {
        $this->score += 1;
    }

    public function displayNextQuestion() : bool
    {
        $next = false;

        if ($this->currentQuestionIndex < count($this->questions) - 1) {    // sinon c'est déjà la dernière question
            if ($this->questions[$this->currentQuestionIndex]->wasAnswered()) { // il faut d'abord vérifier que la question en cours a reçu une réponse
                $this->currentQuestionIndex += 1;
                // actualiser l'affichage de la nouvelle question courante
                $next = true;
            }
        }
        return $next;
    }
}
