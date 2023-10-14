<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASSIGNMENT 1 | ADD.PHP</title>
    <meta name="description" content="PHP (ADD.PHP)">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <main>
        <?php
        include_once ('validate.php');
        include_once ('database.php');

        $valid = new validate();

        if (!empty($_POST['Submit'])) {

            $studentID = $_POST['studentID'];
            $studentName = $_POST['studentName'];
            $grade = $_POST['grade'];
            $email = $_POST['email'];

            $msg = $valid->checkEmpty($_POST, array('studentID', 'studentName', 'grade', 'email'));
            $checkEmail = $valid->validEmail($_POST['email']);

            if ($msg != null) {
                echo $msg;
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
            } elseif (!$checkEmail) {
                echo '<p>Please provide a valid email.</p>';
                echo "<a href='javascript:self.history.back();'>Go Back</a>";
            } else {
                // if all the fields are valid
                $result = $database->execute("INSERT INTO phpusers(studentID,studentName,grade,email) VALUES('$studentID','$studentName','$grade','$email')");
                
                // let the user know that the record has been added
                if ($result) {
                    echo "<p>Data added successfully.</p>";
                    echo "<a href='view.php'>View Result</a>";
                }       
            }
        }
        ?>
    </main>
</body>
</html>