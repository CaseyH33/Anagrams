<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_letter_check_true()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "a";
            $input_wordsToCheck = "a";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals($input_wordsToCheck, $result);
        }

        function test_letter_check_false()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "a";
            $input_wordsToCheck = "b";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals("No matches found.", $result);
        }
    }
?>
