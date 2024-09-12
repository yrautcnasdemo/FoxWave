<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProject Original - Mise en Scène Visuelle</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Style général */
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

/* Dashboard principal */
.dashboard {
    display: flex;
    flex-direction: row;
    width: 80%;
    border: 2px solid #444;
    padding: 20px;
    background-color: #222;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
}

/* Écran avec panneaux */
.screen {
    flex: 2;
    background-color: #111;
    padding: 20px;
    margin-right: 20px;
    border: 2px solid cyan;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
}

/* Panneau de contrôle */
.control-panel {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 20px;
    background-color: #333;
    border: 2px solid cyan;
    border-radius: 10px;
}

/* Boutons interactifs */
.button {
    padding: 15px;
    background-color: #444;
    border: 2px solid cyan;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    color: cyan;
}

.button:hover {
    background-color: #222;
    box-shadow: 0 0 15px cyan, 0 0 30px cyan;
}

/* Panneaux */
.panel {
    display: none;
    padding: 20px;
    background-color: #222;
    border: 2px solid cyan;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    text-align: center;
    transition: opacity 0.5s ease;
    opacity: 0;
    z-index: 1;
}

.panel.active {
    display: block;
    opacity: 1;
    z-index: 10;
}

    </style>
</head>
<body>
    <div class="dashboard">
        <div class="screen">
            <div class="panel panel-1">
                <h2>Panel 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at velit eu leo cursus sollicitudin.</p>
            </div>

            <div class="panel panel-2">
                <h2>Panel 2</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

            <div class="panel panel-3">
                <h2>Panel 3</h2>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="control-panel">
            <div class="button" data-target="panel-1">Activate Panel 1</div>
            <div class="button" data-target="panel-2">Activate Panel 2</div>
            <div class="button" data-target="panel-3">Activate Panel 3</div>
        </div>
    </div>

    <script>
document.querySelectorAll('.button').forEach(button => {
    button.addEventListener('click', function() {
        const target = this.getAttribute('data-target');
        document.querySelectorAll('.panel').forEach(panel => {
            panel.classList.remove('active');
        });
        document.querySelector(`.${target}`).classList.add('active');
    });
});

    </script>
</body>
</html>
