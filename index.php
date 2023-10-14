<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | ASSIGNMENT 1</title>
    <meta name="description" content="Webpage for Assignment 1 of PHP">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <section>
            <h2><a href="#" class="logo">Student Database</a></h2>
            <div class="navigation">
                <a href="index.php">Home</a>
                <a href="view.php">View</a>
            </div>
        </section>
    </header>
    <main>
        <!--FORM-->
        <section class="content">
            <h2>Add Student Credentials:</h2>
            <form method="post" class="formsta">
                <div class="form-group">
                    <label for="studentName">Student ID:</label>
                    <input type="text" class="form-control" id="studentID" name="studentID" required>
                </div>

                <div class="form-group">
                    <label for="studentName">Student Name:</label>
                    <input type="text" class="form-control" id="studentName" name="studentName" required>
                </div>

                <div class="form-group">
                    <label for="grade">Grade:</label>
                    <input type="number" class="form-control" id="grade" name="grade" min="1" max="100" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>

                <button type="submit" class="btnprimary">Add</button>
            </form>
        </section>
        <div class="form-group submit-message">
            <?php
            require_once('database.php');
            
            if (!empty($_POST)) {
                $studentID = $_POST['studentID'];
                $studentName = $_POST['studentName'];
                $grade = $_POST['grade'];
                $email = $_POST['email'];
                $res = $database->create($studentID, $studentName, $grade, $email);
                if ($res) {
                    echo "<p>Successfully inserted data</p>";
                } else {
                    echo "<p>Failed to insert data</p>";
                }
            }
            ?>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Student Database. All rights reserved.</p>
            <p>Barkirat Brar</p>
        </div>
    </footer>
</body>

</html>