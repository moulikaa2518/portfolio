<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f7fa;
        }

        header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .container {
            width: 90%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
            font-size: 16px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #ffd369;
        }

        .btn {
            background: #ffd369;
            color: #000 !important;
            padding: 6px 12px;
            border-radius: 5px;
            font-weight: 500;
        }

        .btn:hover {
            background: #ffb703;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            nav {
                margin-top: 10px;
            }

            nav a {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <h1 class="logo">MyPortfolio</h1>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="skills.php">Skills</a>
            <a href="certifications.php">certifications</a>
            <a href="education.php">Education</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php" class="btn">Contact</a>
        </nav>
    </div>
</header>