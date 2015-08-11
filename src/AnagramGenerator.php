<?php
    class AnagramGenerator
    {
        function anagramCheck($input_word, $input_wordsToCheck)
        {
            if($input_word == $input_wordsToCheck)
            {
                return $input_wordsToCheck;
            } else {
                return "No matches found.";
            }
        }
    }
?>
