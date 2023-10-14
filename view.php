<?php
    require_once('database.php');
    $res = $database->read();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 1 | View</title>
    <meta name="description" content="Assignment 1 View Database webpage">
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Grade</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($r = mysqli_fetch_assoc($res)): ?>
                        <tr>
                            <td><?php echo $r['studentID']; ?></td>
                            <td><?php echo $r['studentName']; ?></td>
                            <td><?php echo $r['grade']; ?></td>
                            <td><?php echo $r['email']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Student Database. All rights reserved.</p>
            <p>Barkirat Brar</p>
        </div>
    </footer>
</body>

</html>