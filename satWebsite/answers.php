<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Stay Indoors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<?php
session_start();

$ini = parse_ini_file('app.ini');
$servername = $ini["servername"];
$username = $ini["username"];
$password = $ini["password"];
$dbname = $ini["dbname"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

date_default_timezone_set('America/New_York');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = sprintf('SELECT answer,id,catagory FROM question');
$result = $conn->query($sql);
#echo $sql;
#echo $result->num_rows;
?>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="homepage.php">questions</a>
            <a class="navbar-brand" href="answers.php">answers</a>
        </nav>
        <div class="container">
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><?php echo $row["id"] ?></p>
                        <p class="card-text"><?php echo $row["catagory"] ?></p>
                        <p class="card-text"><?php echo $row["answer"] ?></p>


                    </div>
                </div>
            <?php
            }
            $conn->close();
            ?>

        </div>
        <br />
        <br />
        <br />


    </div>
</body>
<script>
    $('#replyb').click(function() {
        $(this).next('#replyText').toggle();
    });
    var count = 1;
</Script>

</html>