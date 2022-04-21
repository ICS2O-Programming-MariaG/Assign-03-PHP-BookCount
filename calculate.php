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
      $pageCount = intval($wordCount / 400);
      echo "The approximate number of pages is $pageCount.";
    }
    //Second if/then statement: if fontSize is 12
    else if ($fontSize > 11) {
      $pageCount = intval($wordCount / 300);
      echo "The approximate number of pages is $pageCount.";
    }
    //Third if/then statement: if fontSize is 11 (both other situations are false)
    else {
      $pageCount = intval($wordCount / 350);
      echo "The approximate number of pages is $pageCount.";
    }
  }

  //Second deciding option: if page size is 6 x 9 (option value is 2)
  else if ($pageSize > 1) {
    //Font size 10
    if ($fontSize < 11) {
      $pageCount = intval($wordCount / 600);
      echo "The approximate number of pages is $pageCount.";
    }
    //fontSize is 12
    else if ($fontSize > 11) {
      $pageCount = intval($wordCount / 425);
      echo "The approximate number of pages is $pageCount.";
    }
    //fontSize is 11 (both other situations are false)
    else {
      $pageCount = intval($wordCount / 500);
      echo "The approximate number of pages is $pageCount.";
    }
  }
?>
</html>
