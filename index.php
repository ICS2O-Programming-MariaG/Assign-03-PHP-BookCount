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
    <!-- Code for the MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-indigo.min.css">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Book Count - Calculating Page Count for Books - Maria G</title>
  </head>
  <body>
    <!-- More MDL code -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!--Table for style -->
    <table>
      <tr>
        <td id="green" class="data-one"><?php echo "<h3>Book Count</h3><p id='small-margin'>Page Two</p>"; ?></td>
        <td class="data-two">
          <!-- Div for style -->
          <div id="blue">
            <?php
              echo "<p>Welcome to the second page of Book Count. This web page will calculate the approximate number of pages in a book given a known word count.</p>";
              echo "<p>Whether you're writing an article with a page limit or are hoping to craft a novel, you've come to the right place!</p>";
              echo "<p>See below for the averages we use for our calculations, and click the image to learn more.</p>";
            ?>
          </div>
        </td>
      </tr>
      <tr>
        <td class="data-one">
          <!-- Adding a link to the image -->
          <a href="https://www.bookdesignmadesimple.com/calculate-book-page-count-using-word-count/"><img src="./images/second-averages.png" alt="calculations for averages"></a>
        </td>
        <td class="data-two">
          <!-- Div for style -->
          <div id="pink">
            <?php echo "<h5>Your Text's Information:</h5>"; ?>
            <!-- Form for user input -->
            <form action="./calculate.php" method="post" target="results">
              <!-- MDL numeric text field -->
              <div class="mdl-textfield mdl-js-textfield">
                <input name="num-words" class="mdl-textfield__input" type="number" step="1" min="0" id="sample2" placeholder="Number of Words...">
                <span class="mdl-textfield__error">Input type is not accepted!</span>
              </div><br>
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
              <input id="pink-button" type="submit" value="Calculate">
            </form>
          </div>
        </td>
      </tr>
      <tr>
        <td class="data-one">
          <!-- Iframe for results -->
          <iframe id="results" name="results">
          </iframe>
        </td>
        <td class="data-two">
          <!-- Div for style -->
          <div id="orange">
            <?php
              echo "<h5>Calculate Word Count Instead</h5>";
              echo "<p>Would you rather calculate a book's word count, instead? Click the button below!</p>";
            ?>
            <!-- Accent-colored raised button with ripple -->
            <button id="margin" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location.href='https://assign-03-html-bookcount.mariagoemans1.repl.co/'">
               Click here!
            </button>
          </div>
        </td>
      </tr>
    </table>
  </body>
</html>