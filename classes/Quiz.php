<?php

// Classe Quiz

require 'classes/Question.php';
class Quiz
{
    public string $title = "";
    public array $questions = [];
    public int $currentQuestionIndex = 0;
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
    public function displayNextQuestion()
    {
        // passage à la question suivante si une réponse a été donnée à la question en cours
        if ($this->questions[$this->currentQuestionIndex]->wasAnswered()) {
            $this->currentQuestionIndex += 1;
        }
        // à compléter
    }
}
