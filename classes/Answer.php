<?php

// Classe Answer

class Answer
{
    public string $content;
    public bool $good = false;
    public bool $selected = false;

    // Constructeur
    public function __construct(string $content, bool $good) {
        $this->content = $content;
        $this->good = $good;
    }
    
    // Méthodes
    public function isGood()
    {
        return $this->good;
    }

    public function wasSelected()
    {
        return $this->selected;
    }

    public function select()
    {
        $this->selected = true;
    }

    public function unselect()
    {
        $this->selected = false;
    }
}
