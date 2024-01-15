<?php

class LanguageGame
{
    private array $words;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $this->words[] = new Word($frenchTranslation, $englishTranslation);
        }
    }

    public function run(): void
    {
        session_start();
        // TODO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
        if (empty($_POST))
        {
            $randomWord = $this->words[rand(0,count($this->words)-1)];
            echo $randomWord->getWord();
            $_SESSION["Random Word"] = $randomWord;
        } else {
            $sessionWord = $_SESSION["Random Word"];
            $inputWord = $_POST["inputTranslation"];
            if ($sessionWord->verify($inputWord)) {
                echo "oke";
            } else {
                echo "jonasi heeft spijtig genoeg gelijk";
            }

        }
        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown
    }
}