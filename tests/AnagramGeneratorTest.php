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

        function test_anagram_true()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "beard";
            $input_wordsToCheck = "bread";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals($input_wordsToCheck, $result);
        }

        function test_anagram_false()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "bread";
            $input_wordsToCheck = "cat";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals("No matches found.", $result);
        }

        function test_anagram_true_twoResults()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "bread";
            $input_wordsToCheck = "cat beard";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals("beard", $result);
        }

        function test_anagram_true_multipleResults()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "act";
            $input_wordsToCheck = "cat beard tac";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals("cat tac", $result);
        }

        function test_anagram_true_caps()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "act";
            $input_wordsToCheck = "CAT beard tAc";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals("CAT tAc", $result);
        }

        function test_anagram_true_partial()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "Cat";
            $input_wordsToCheck = "Tact enact bread act";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals("Tact enact act", $result);
        }

        function test_anagram_true_duplicateLetters()
        {
            //Arrange
            $test_anagram = new AnagramGenerator;
            $input_word = "tact";
            $input_wordsToCheck = "act cat bread bard intact interact protract bob";

            //Act
            $result = $test_anagram->anagramCheck($input_word, $input_wordsToCheck);

            //Assert
            $this->assertEquals("intact interact protract", $result);
        }

    }
?>
