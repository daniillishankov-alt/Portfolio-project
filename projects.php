<?php
$pageTitle = "Projecten | Daniil Lishankov";
include 'includes/header.php';
?>

<main class="container">
    <h1>Mijn Projecten</h1>
    <p>Hier is een overzicht van projecten waar ik aan heb gewerkt.</p>

    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">Alles</button>
        <button class="filter-btn" data-filter="php">PHP / Web</button>
        <button class="filter-btn" data-filter="js">JavaScript</button>
        <button class="filter-btn" data-filter="minecraft">Minecraft / Java</button>
    </div>

    <div class="projects-grid">
        <div class="project-card" data-category="php">
            <h3>AI & Nepnieuws Website</h3>
            <p>Een educatieve website met interactieve quizzen en informatief pagina-overzicht in het Nederlands.</p>
            <span class="tech-tag">PHP</span> <span class="tech-tag">HTML/CSS</span>
        </div>

        <div class="project-card" data-category="js">
            <h3>Interactive Clicker Game</h3>
            <p>Een game op basis van JavaScript OOP met geometrische progressieformules en delta-time loops.</p>
            <span class="tech-tag">JavaScript</span> <span class="tech-tag">OOP</span>
        </div>

        <div class="project-card" data-category="minecraft">
            <h3>Minecraft 1.21.1 Server Setup</h3>
            <p>Geconfigureerde NeoForge server op hosting-minecraft met 20 GB RAM en mod-optimalisatie.</p>
            <span class="tech-tag">Java</span> <span class="tech-tag">NeoForge</span>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
