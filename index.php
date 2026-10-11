<?php
$pageTitle = "Home | Daniil Lishankov Portfolio";
include 'includes/header.php';
?>

    <main class="container home-container">
        <h1 id="time_greetings">Welkom!</h1>
        <p>Ik ben Daniil Lishankov, Software Developer in opleiding aan het Techniek College Rotterdam[cite: 1].</p>

        <!-- Интерактивная мини-игра вместо дублирующих кнопок -->
        <section class="mini-game-section">
            <h2>JavaScript Mini-Game</h2>
            <p>Test mijn JS-vaardigheden! Klik op de knop om punten te scoren.</p>
            <div class="game-box">
                <button id="click-game-btn" class="hrefbut">Klik mij!</button>
                <p class="score-display">Score: <span id="game-score">0</span></p>
            </div>
        </section>

        <div id="birthday_timer"></div>
    </main>

<?php include 'includes/footer.php'; ?>