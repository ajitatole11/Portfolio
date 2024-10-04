<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Ajit Atole</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ajit Atole</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Contact Me</h2>
            <form action="submit.php" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" required></textarea><br>
                
                <button type="submit" >Send Message</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Ajit Atole. All rights reserved.</p>
    </footer>
</body>
</html>
