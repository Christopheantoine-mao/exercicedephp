<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
    <h1>Contactez-nous</h1>
    <form action="submit_contact.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>
        <input type="submit" value="Envoyer">
    </form>
    <?php include 'footer.php'; ?>
</body>
</html>
