<!DOCTYPE html>
<html lang="en">
  <head>
    <title>A PHP Form!</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="dcterms.rightsHolder" content="Edward M." />
    <meta name="dcterms.dateCopyrighted" content="2019" />
    <meta name="description" content="Super Amazing Form" />
    <meta
      name="keywords"
      content="super amazing awesome incredible fantastic cool"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
  </head>
  <body>
    <div class="container form-container z-depth-3">
      <?php
        $error = "";
        if($_POST['submit'] == "submit"){
          if($_POST['fname'] == ""){
            $error = "Please enter your name<br/>";
          }
          if($_POST['age'] = ""){
            $error = $error."Please enter your age";
          }
          if($error != ""){
            echo "<div class='card'>$error</div>";
          }
        }
      ?>
      <h1 class="center-align title-header">
        <?php
        $title=($_POST['submit'] != "submit" && !$error)?"POST Request":"Thank You!";
        echo $title;
        ?>
      </h1>
      <?php
        if ($_POST['submit'] == "submit" && !$error){
          include("thank-you.php");
        } else {
          include("form.php");
        }
      ?>
    </div>
    <footer>
      <div id="validator"></div>
      <script>
        document.getElementById(
          "validator"
        ).innerHTML = `<a href="http://validator.w3.org/nu/?doc=${window.location.href}" target="_blank">HTML 5 Validation</a>`;
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </footer>
  </body>
</html>
