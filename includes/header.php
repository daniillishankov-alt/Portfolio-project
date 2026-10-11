<?php
// Получаем имя текущего файла для подсветки активной ссылки
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Portfolio | Daniil Lishankov"; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="header-bar">
    <button id="theme-toggle" class="theme-btn">Thema</button>
    <nav class="top-nav">
        <a class="hrefbut <?php echo ($currentPage == 'index.php') ? 'active-nav' : ''; ?>" href="index.php">Home</a>
        <a class="hrefbut <?php echo ($currentPage == 'projects.php') ? 'active-nav' : ''; ?>" href="projects.php">Projecten</a>
        <a class="hrefbut <?php echo ($currentPage == 'opleiding.php') ? 'active-nav' : ''; ?>" href="opleiding.php">Opleiding</a>
        <a class="hrefbut <?php echo ($currentPage == 'talen.php') ? 'active-nav' : ''; ?>" href="talen.php">Talen</a>
        <a class="hrefbut <?php echo ($currentPage == 'voorstel.php') ? 'active-nav' : ''; ?>" href="voorstel.php">Over mij</a>
        <a class="hrefbut <?php echo ($currentPage == 'contact.php') ? 'active-nav' : ''; ?>" href="contact.php">Contact</a>
        
        <a class="hrefbut" href="https://github.com/daniillishankov-alt" target="_blank" style="background-color: #24292e; color: white;">GitHub ↗</a>
    </nav>
</header>
