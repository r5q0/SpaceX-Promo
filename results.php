<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
    <title>SpaceX | CSFTP </title>
</head>

<body>
    <header>
        <div class="nav__item">
            <a href="/"><img src="/assets/imgs/logo.png" alt="SpaceX Logo" height="50" /></a>
        </div>
        <div class="nav__item container--right">
            <ol>
                <li>
                    <a href="contact.php"><button id="contact">CONTACT US</button></a>
                </li>
            </ol>
        </div>
    </header>

    <?php
    ini_set("mail.log", "./logs");
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'SpaceX';
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    $pdo = new PDO($dsn, $user, $password);

    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM `csfp` WHERE `id` = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $email = $row['email'];
    $age = $row['age'];
    $weight = $row['weight'];
    $motion = $row['motion-sick'];
    $training = $row['training'];
    $criminal = $row['criminal'];
    $first = $row['firstname'];
    $last = $row['lastname'];


    if ($criminal = false && $training = true &&  $motion = false && $weight <= 100) {
        $result =  $first . $last . ' You have Passed! this is just a test and regulations might change';
    } else {
        $result = $first . " " . $last . ' You have failed Luckily this is just a test and regulations might change';
    }
    ?>
    <main>
        <center>
            <iframe src="https://giphy.com/embed/PqjTdvXImZQfcmTYEO" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
            <p><a href="https://giphy.com/gifs/rocket-space-ship-cadet-PqjTdvXImZQfcmTYEO"></a></p>
            <h2> You will receive the results at <?php echo $email ?> </h2>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </main>
    </center>
    <footer>
        <ol>
            <li><button>SPACEX © 2023</button></li>

            <li><a href="/privacy.php"><button>Privacy Disclaimer</button></a></li>
        </ol>
        <ol>
            <li>Youtube<a href="https://www.youtube.com/spacex"><button class="media"><i class="fa-brands fa-youtube"></i></button></a></li>
            <li>Twitter<a href="https://twitter.com/SpaceX"><button class="media"><i class="fa-brands fa-twitter"></i></button></a></li>
            <li>Instagram<a href="https://www.instagram.com/spacex/"><button class="media"><i class="fa-brands fa-instagram"></i></button></a></li>
        </ol>
    </footer>
</body>

<?php
$to = $email;
$subject = "CSFP Result";
$message = $result;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From <spacexbitacademy@gmail.com>' . "\r\n";
mail($to, $subject, $message, $headers);
?>