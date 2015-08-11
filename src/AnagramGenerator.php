<?php
    class AnagramGenerator
    {
        function anagramCheck($input_word, $input_wordsToCheck)
        {
            //$array_of_words = explode(" ", $input_wordsToCheck);
            $letter_array = str_split($input_word);
            sort($letter_array);
            $wordToCheck_letter_array = str_split($input_wordsToCheck);
            sort($wordToCheck_letter_array);
            //$matched_words = array();


            if($letter_array == $wordToCheck_letter_array)
            {
                return $input_wordsToCheck;
            } else {
                return "No matches found.";
            }
        }
    }
?>
