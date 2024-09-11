<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProject Original - Thème Néon Interactif</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Général */
body {
    font-family: 'Arial', sans-serif;
    background-color: #111;
    color: #fff;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Section Néon Interactif */
.neon-section {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 30px;
    width: 80%;
    padding: 20px;
}

/* Boîtes néon */
.neon-box {
    background-color: #222;
    padding: 30px;
    border: 2px solid transparent;
    position: relative;
    border-radius: 10px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
}

/* Effet néon au survol */
.neon-box:hover {
    border-color: cyan;
    box-shadow: 0 0 20px cyan, 0 0 30px cyan;
    transform: translateY(-10px);
}

/* Titre néon */
.neon-title {
    font-size: 1.8em;
    text-transform: uppercase;
    text-align: center;
    color: #fff;
    margin-bottom: 15px;
    text-shadow: 0 0 5px cyan, 0 0 10px cyan, 0 0 15px cyan;
}

/* Texte néon */
.neon-text {
    color: #ddd;
    font-size: 1.1em;
    text-shadow: 0 0 5px rgba(0, 255, 255, 0.5);
    transition: color 0.3s ease-in-out;
}

/* Changement de couleur du texte au survol */
.neon-box:hover .neon-text {
    color: cyan;
}

/* Placeholder pour images */
.neon-placeholder {
    height: 150px;
    width: 100%;
    background-color: #444;
    margin-bottom: 20px;
    border: 2px solid cyan;
    box-shadow: 0 0 15px cyan;
    transition: background-color 0.3s ease-in-out;
}

/* Changement de couleur du placeholder au survol */
.neon-box:hover .neon-placeholder {
    background-color: #222;
}

    </style>
</head>
<body>
    <div class="neon-section">
        <div class="neon-box">
            <h2 class="neon-title">Lorem Ipsum</h2>
            <p class="neon-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur.</p>
        </div>

        <div class="neon-box">
            <h2 class="neon-title">Dolor Sit Amet</h2>
            <p class="neon-text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <div class="neon-box">
            <div class="neon-placeholder"></div>
            <p class="neon-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
