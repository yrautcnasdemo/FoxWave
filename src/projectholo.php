<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProject Original - Holographique</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Général */
body {
    font-family: 'Arial', sans-serif;
    background-color: #000;
    color: #fff;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Section holographique */
.holograph-section {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 20px;
    width: 80%;
}

/* Effet holographique */
.holo-frame {
    background: rgba(0, 0, 0, 0.2);
    border: 2px solid rgba(0, 255, 255, 0.5);
    padding: 20px;
    position: relative;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.5);
    animation: flicker 3s infinite;
}

.holo-frame::after {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border: 1px solid rgba(0, 255, 255, 0.8);
    filter: blur(10px);
    z-index: -1;
}

/* Effet texte */
.holo-title {
    font-size: 2em;
    text-transform: uppercase;
    color: cyan;
    text-align: center;
    text-shadow: 0 0 5px cyan, 0 0 10px cyan;
}

.holo-text {
    color: rgba(255, 255, 255, 0.8);
    text-shadow: 0 0 5px rgba(0, 255, 255, 0.5);
    margin-top: 10px;
}

/* Placeholder pour l'image */
.image-placeholder {
    height: 200px;
    width: 100%;
    background-color: #333;
    margin-bottom: 15px;
    border: 2px solid cyan;
    box-shadow: 0 0 10px cyan;
}

/* Animation de scintillement */
@keyframes flicker {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.85; }
}

    </style>
</head>
<body>
    <div class="holograph-section">
        <div class="holo-frame">
            <div class="holo-title">Lorem Ipsum Dolor Sit</div>
            <p class="holo-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
            </p>
        </div>

        <div class="holo-frame">
            <div class="image-placeholder"></div>
            <p class="holo-text">
                Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
            </p>
        </div>

        <div class="holo-frame">
            <div class="image-placeholder"></div>
            <p class="holo-text">
                Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.
            </p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
