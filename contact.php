<?php
$pageTitle = "Contact | Daniil Lishankov";
$statusMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
        $statusMessage = "<p class='success-msg'>Bedankt! Je bericht is succesvol verzonden.</p>";
    } else {
        $statusMessage = "<p class='error-msg'>Vul alle velden correct in alstublieft.</p>";
    }
}

include 'includes/header.php';
?>

    <main class="container">
        <h1>Contact opnemen</h1>
        <p>Adres: Rotterdam, Prins Constantijnweg 48, 3066 TA</p>
        <p>E-mail: daniillishankov@gmail.com | Tel: +31 6 84666257</p>

        <?= $statusMessage; ?>

        <form action="contact.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">E-mailadres:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Bericht:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="hrefbut" style="border:none; cursor:pointer;">Verstuur bericht</button>
        </form>
    </main>

<?php include 'includes/footer.php'; ?>