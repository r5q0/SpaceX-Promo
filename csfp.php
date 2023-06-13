<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'SpaceX';
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $password);

if (isset($_POST['input'])) {
    $email = $_POST['Email'];
    $firstname = $_POST['Firstname'];
    $lastname = $_POST['Lastname'];
    $sex = $_POST['Sex'];
    $age = $_POST['Age'];
    $weight = $_POST['Weight'];
    $motion = $_POST['motion'] == 'Yes' ? true : false;
    $training = $_POST['training'] == 'Yes' ? true : false;
    $criminal = $_POST['criminal'] == 'Yes' ? true : false;

    $stmt = $pdo->prepare('INSERT INTO `csfp`(`firstname`, `lastname`, `sex`, `age`, `weight`, `motion-sick`, `training`, `criminal`, `email`) VALUES (:firstname, :lastname, :sex, :age, :weight, :motion, :training, :criminal, :email)');
    $stmt->execute([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'sex' => $sex,
        'age' => $age,
        'weight' => $weight,
        'motion' => $motion,
        'training' => $training,
        'criminal' => $criminal,
        'email' => $email
    ]);

    $stmt = $pdo->query('SELECT LAST_INSERT_ID() AS \'id\';');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    header('Location: /results.php?id=' . $row['id']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="/assets/imgs/favicon.ico" type="image/x-icon">
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
    <main>

        <div class="container">
            <div class="container__half_csfp column">
                <img src="assets/imgs/CSFP.png" alt="Image from CSFP" style="min-width: 100%;">


                <form method="post">
                    <h2>Do the test!</h2>
                    <h5>*These are not real results*</h5>
                    <label for="Firstname">Firstname:</label>
                    <input type="text" id="Firstname" name="Firstname" required> <br>
                    <label for="Lastname">Lastname:</label>
                    <input type="text" id="Lastname" name="Lastname" required> <br>
                    <label for="Email">Email:</label>
                    <input type="email" id="Email" name="Email" required> <br>
                    <label for="Sex">Sex:</label>
                    <label for="Male">Male</label>
                    <input type="radio" id="Male" name="Sex" value="Male" required>
                    <label for="Female">Female</label>
                    <input type="radio" id="Female" name="Sex" value="Female" required>
                    <br>
                    <label for="Age">Age:</label>
                    <input type="number" id="Age" name="Age" min="18" max="50" required>
                    <br>
                    <label for="Weight">Weight (KG):</label>
                    <input type="number" id="Weight" name="Weight" max="90" required>
                    <br>
                    <label for="motion">Are you motion-sick?</label>
                    <br>
                    <label for="Yes">Yes</label>
                    <input type="radio" id="Yes" value="Yes" name="motion" required>
                    <label for="No">No</label>
                    <input type="radio" id="No" value="No" name="motion" required> <br>
                    <label for="training">Did you ever have training about Space Safety?</label>
                    <br>
                    <label for="training-yes">Yes</label>
                    <input type="radio" id="training-yes" value="Yes" name="training" required>
                    <label for="training-no">No</label>
                    <input type="radio" id="training-no" value="No" name="training" required> <br>
                    <label for="criminal">Do you have a criminal record?</label>
                    <br>
                    <label for="criminal-yes">Yes</label>
                    <input type="radio" id="criminal-yes" value="Yes" name="criminal" required>
                    <label for="criminal-no">No</label>
                    <input type="radio" id="criminal-no" value="No" name="criminal" required>
                    <br>
                    <input type="submit" value="Send Application" name="input" class="submit">
                </form>

            </div>
            <div class="container__half_csfp text__responsive column">

                <h1>What is Civilian Space Flight Permits (CSFP)</h1>
                <span>Civilian space flight permits are regulatory approvals issued by the Federal Aviation Administration (FAA) to
                    commercial spaceflight companies that want to launch spacecraft carrying paying passengers. The permits serve
                    as a way for the FAA to oversee and regulate commercial space transportation activities in the United States.

                    To obtain a civilian space flight permit, companies must demonstrate that they have the necessary
                    resources, expertise, and safety measures in place to ensure that their spacecraft can operate safely
                    and reliably. The permit also requires that the company have liability insurance to</span>



            </div>
        </div>
    </main>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
