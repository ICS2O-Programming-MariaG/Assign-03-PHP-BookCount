<!DOCTYPE html>
<html>
  <!-- Added html tags to fix Super Linter error -->
  <?php
    //intval converts the string user input to an integer
    $wordCount = intval($_POST["num-words"]);
    $fontSize = intval($_POST["font-size"]);
    //if, then, else statements learned at https://www.w3schools.com/php/php_if_else.asp
    //First if/then statement: if fontSize < 11 (= 10)
    if ($fontSize < 11) {
      $pageCount = intval($wordCount / 400);
      echo "The approximate number of pages is $pageCount";
    }
    //Second if/then statement: if fontSize > 11 (= 12)
    else if ($fontSize > 11) {
      $pageCount = intval($wordCount / 300);
      echo "The approximate number of pages is $pageCount";
    }
    //Third if/then statement: if fontSize is 11 (both other situations are false)
    else {
      $pageCount = intval($wordCount / 350);
      echo "The approximate number of pages is $pageCount";
    }
  ?>
</html>
