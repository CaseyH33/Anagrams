<?php
    class AnagramGenerator
    {
        function anagramCheck($input_word, $input_wordsToCheck)
        {
            $array_of_words = explode(" ", $input_wordsToCheck);
            $letter_array = str_split($input_word);
            sort($letter_array);
            $matched_words = array();

            foreach($array_of_words as $word) {
                $sorted_word = str_split($word);
                sort($sorted_word);
                if($sorted_word == $letter_array)
                {
                    array_push($matched_words, $word);
                }
            }

            if(empty($matched_words)) {
                return "No matches found.";
            } else {
                return implode(" ", $matched_words);
            }
        }
    }
?>
