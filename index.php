<?php
   $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

   $userWord = $_GET["word"];

   $paragraph_polite = str_replace($userWord, '***', $paragraph);
?>

<p> <?php echo $paragraph ?> </p>
<span>Lunghezza paragrafo: <?php echo strlen($paragraph) ?> caratteri</span>


<p> <?php echo $paragraph_polite ?> </p>
<span>Lunghezza paragrafo: <?php echo strlen($paragraph_polite) ?> caratteri</span>
