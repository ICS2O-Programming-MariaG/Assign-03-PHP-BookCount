<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's Fahrenheit to Celsius Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Book Count - Calculating Page Count for Books - Maria G</title>
  </head>
  <body>
    <?php echo "<h1>Book Count</h1>"; ?>
    <?php
      echo "<p>Welcome to the second page of Book Count. This web page will calculate the approximate number of pages in a book given a known word count.</p>";
      echo "<p>Whether you're writing an article with a page limit or are hoping to craft a novel, you've come to the right place!</p>";
      echo "<p>Please enter your text's information below:</p>";
      echo "<h3>Your Text's Information:</h3>";
    ?>
    <!-- Form for user input -->
    <form action="./calculate.php" method="post" target="results">
      <label for="words">Number of Words</label>
      <input type="number" step="1" name="num-words" placeholder="Number of Words..."><br><br>
      <!-- Adding a multiple choice field - https://www.w3schools.com/html/html_form_elements.asp -->
      <label for="font-size">Font Size</label>
      <select id="font-size" name="font-size">
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select><br><br>
      <label for="page-size">Page Size</label>
      <select id="page-size" name="page-size">
        <option value="1">5" x 8"</option>
        <option value="2">6" x 9"</option>
      </select><br><br>
      <input type="submit" value="Calculate">
    </form>
    <!-- Iframe for results -->
    <iframe id="results" name="results">
    </iframe>
  </body>
</html>