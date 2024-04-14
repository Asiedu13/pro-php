<?php
echo "strings.php";

echo 'I am working but I don\'t check for interpolations and I only check for apostrophe escapes';

echo "I am the double string and I check for interpolations and a whole lot";

$name = "Prince";
echo "The guy typing is called $name";

// Heredocs
echo <<< GREETING
    Greeting with a heredoc \n
    Hello, $name

    GREETING;

// Nowdocs
echo <<< '__TEST__'
    This is the nowdoc here oh...works in a weird way but yebefa ne saa

    __TEST__;

echo "\n <br> </br>";

// Accessing substrings
$email = 'princekofasiedu@gmail.com';
echo strpos($email, '@');

echo "\n <br> </br>";

// Getting a substring
$sentence = "I am the sentence you have been waiting for";
echo $sentence;
echo "\n <br> </br>";
echo substr($sentence, -11, -5);
echo "\n <br> </br>";

// Replacing a string
echo substr_replace($sentence, 'but not really the one', 5);

echo "\n <br> </br>";
echo ucfirst('i am prince');
echo ucwords('i am prince');


echo strtoupper('i am prince');
echo strtolower('I am Prince');