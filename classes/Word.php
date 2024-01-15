<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)
    private $word;
    private $translation;

    public function __construct($word, $translation)
    {
        $this->word = $word;
        $this->translation = $translation;
    }

    function getWord()
    {
        return $this->word;
    }
    function getTranslation()
    {
        return $this->translation;
    }

    public function verify(string $answer): bool
    {
        if ($this->translation === $answer) {
            return true;
        } else {
            return false;
        }
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }

}