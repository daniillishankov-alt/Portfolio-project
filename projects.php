<?php
$pageTitle = "Projecten | Daniil Lishankov";
include 'includes/header.php';
?>

    <main class="container">
        <h1>Mijn Projecten</h1>
        <p>Een overzicht van mijn projecten waarin ik webontwikkeling, databases, game development en object-oriented programming toepas.</p>

        <!-- Акцентная ссылка на GitHub профиль -->
        <div style="margin: 25px 0;">
            <a class="hrefbut" href="https://github.com/daniillishankov-alt" target="_blank" style="background-color: #24292e; color: white; padding: 10px 18px; font-size: 1.05rem;">
                Bekijk al mijn repositories op GitHub ↗
            </a>
        </div>

        <!-- Кнопки фильтрации проектов -->
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">Alles</button>
            <button class="filter-btn" data-filter="php">PHP / Web & DB</button>
            <button class="filter-btn" data-filter="js">JavaScript</button>
            <button class="filter-btn" data-filter="gamedev">GameDev (C# / Unity)</button>
            <button class="filter-btn" data-filter="java">Java</button>
            <button class="filter-btn" data-filter="minecraft">Minecraft</button>
        </div>

        <!-- Сетка проектов -->
        <div class="projects-grid">
            <!-- Проект 1: Database App -->
            <div class="project-card" data-category="php">
                <h3>Database Management Web App</h3>
                <p>Een webapplicatie ontwikkeld voor het efficiënt beheren en manipuleren van databases met CRUD-functionaliteiten via PHP.</p>
                <span class="tech-tag">PHP</span> <span class="tech-tag">SQL</span> <span class="tech-tag">Database</span>
            </div>

            <!-- Проект 2: Unity Slasher -->
            <div class="project-card" data-category="gamedev">
                <h3>2D Slasher-Platformer Prototype</h3>
                <p>Een zelfstandig ontwikkeld game-prototype in Unity, waarbij ik C# gebruik voor combat mechanics, movement en platforming.</p>
                <span class="tech-tag">C#</span> <span class="tech-tag">Unity</span> <span class="tech-tag">GameDev</span>
            </div>

            <!-- Проект 3: Group OOP Clicker -->
            <div class="project-card" data-category="js">
                <h3>Coöperatieve OOP Clicker Game</h3>
                <p>Samen met een klasgenoot ontwikkeld als praktijkproject voor Object-Oriented Programming in JavaScript met geavanceerde state management.</p>
                <span class="tech-tag">JavaScript</span> <span class="tech-tag">OOP</span> <span class="tech-tag">Teamwork</span>
            </div>

            <!-- Проект 4: AI & Nepnieuws -->
            <div class="project-card" data-category="php">
                <h3>AI & Nepnieuws Website</h3>
                <p>Een educatieve website over AI en nepnieuws met interactieve quizzen en modulaire pagina's in het Nederlands.</p>
                <span class="tech-tag">PHP</span> <span class="tech-tag">HTML</span> <span class="tech-tag">CSS</span>
            </div>

            <!-- Проект 5: Clicker Game (Solo) -->
            <div class="project-card" data-category="js">
                <h3>Interactive Clicker Game</h3>
                <p>Game gebaseerd op JavaScript OOP met aankoopmechanieken, geometrische progressieformules en delta-time loops.</p>
                <span class="tech-tag">JavaScript</span> <span class="tech-tag">OOP</span>
            </div>

            <!-- Проект 6: Chess Java -->
            <div class="project-card" data-category="java">
                <h3>Chess Movement Validation</h3>
                <p>Java-methoden voor object-georiënteerde logica en validatie van schaakstukkenbewegingen (`isValidMove`).</p>
                <span class="tech-tag">Java</span> <span class="tech-tag">OOP</span>
            </div>

            <!-- Проект 7: Minecraft Server -->
            <div class="project-card" data-category="minecraft">
                <h3>Minecraft 1.21.1 NeoForge Server</h3>
                <p>Volledig geconfigureerde multiplayer server met NeoForge, geoptimaliseerd met mods zoals Create, Chipped en Vista (20 GB RAM).</p>
                <span class="tech-tag">Java</span> <span class="tech-tag">NeoForge</span> <span class="tech-tag">Server Mgmt</span>
            </div>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>