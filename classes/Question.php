<?php

// Classe Question

require 'classes/Answer.php';

class Question
{
    public string $content;
    public array $answers = [];
    public string $explanation = "";

    // Constructeur
    public function __construct(string $content, array $answers, string $explanation) {
        $this->content = $content;
        
        foreach ($answers as $item) {
            array_push($this->answers, new Answer($item['content'], $item['good']));
        }

        $this->explanation = $explanation;
    }
    
    // Méthodes

    public function getSelectedAnswer(): Answer
    {
        foreach ($this->answers as $answer) {
            if ($answer->wasSelected) {
                return $answer;  // retourne la réponse choisie
            }
        }
        return null;   // aucune réponse n'a encore été choisie
    }
    public function wasAnswered() : bool
    {
        return ($this->getSelectedAnswer() != null);
    }
    public function wasGoodAnswered() : bool
    {
        $selectedAnswer = $this->getSelectedAnswer();
        if ($selectedAnswer) {
            return $selectedAnswer->isGood();  
        } else {
            return false;
        }
    }
}
