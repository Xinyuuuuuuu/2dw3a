
<?php 
$text = "This is a test"; 
echo strlen($text); 
echo $text[strlen($text)-1]; 
echo substr_count($text, 'is'); 
echo substr_count($text, 'is', 3); 
echo substr_count($text, 'is', 3, 3); 
echo substr_count($text, 'is', 5, 10); 
echo substr_count("Hello World. The world is nice","world"); 
?>