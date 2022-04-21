<!DOCTYPE html>
<html>
<!-- Added html tags to fix Super Linter error -->
<!-- PHP tag not indented because Super Linter counted indentation as an error -->
<?php
  //intval converts the string user input to an integer
  $wordCount = intval($_POST["num-words"]);
  $fontSize = intval($_POST["font-size"]);
  $pageSize = intval($_POST["page-size"]);
  //if, then, else statements learned at https://www.w3schools.com/php/php_if_else.asp

  //First if/then statement: if page size is 5 x 8 (option value is 1)
  if ($pageSize < 2) {
    //Font size if/then statement: if fontSize is 10
    if ($fontSize < 11) {
      $pageCount = number_format($wordCount / 400, 2);
      echo "The book has approximately $pageCount pages filled with text.";
    }
    //Second if/then statement: if fontSize is 12
    else if ($fontSize > 11) {
      $pageCount = number_format($wordCount / 300, 2);
      echo "The book has approximately $pageCount pages filled with text.";
    }
    //Third if/then statement: if fontSize is 11 (both other situations are false)
    else {
      $pageCount = number_format($wordCount / 350, 2);
      echo "The book has approximately $pageCount pages filled with text.";
    }
  }

  //Second deciding option: if page size is 6 x 9 (option value is 2)
  else if ($pageSize > 1) {
    //Font size 10
    if ($fontSize < 11) {
      $pageCount = number_format($wordCount / 600, 2);
      echo "The book has approximately $pageCount pages filled with text.";
    }
    //fontSize is 12
    else if ($fontSize > 11) {
      $pageCount = number_format($wordCount / 425, 2);
      echo "The book has approximately $pageCount pages filled with text.";
    }
    //fontSize is 11 (both other situations are false)
    else {
      $pageCount = number_format($wordCount / 500, 2);
      echo "The book has approximately $pageCount pages filled with text.";
    }
  }
?>
</html>
