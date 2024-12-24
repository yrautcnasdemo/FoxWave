<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générer des checkbox</title>
</head>
<body>
    <label for="numberInput">Nombre de checkbox :</label>
    <input type="number" id="numberInput" min="1" max="350">
    <div id="checkboxContainer"></div>

    <script>
        // Sélectionne l'input et le conteneur des checkbox
const numberInput = document.getElementById('numberInput');
const checkboxContainer = document.getElementById('checkboxContainer');

// Ajoute un écouteur d'événements pour détecter les changements dans l'input
numberInput.addEventListener('input', () => {
    // Efface les anciennes checkbox
    checkboxContainer.innerHTML = '';

    // Récupère la valeur de l'input
    const numberOfCheckboxes = parseInt(numberInput.value, 10);

    // Vérifie que la valeur est valide
    if (!isNaN(numberOfCheckboxes) && numberOfCheckboxes > 0) {
        // Génère les checkbox dynamiquement
        for (let i = 1; i <= numberOfCheckboxes; i++) {
            const checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.id = `checkbox-${i}`;
            checkbox.name = `checkbox-${i}`;

            const label = document.createElement('label');
            label.htmlFor = `checkbox-${i}`;
            label.textContent = ` Checkbox ${i}`;

            const lineBreak = document.createElement('br');

            // Ajoute la checkbox et son label au conteneur
            checkboxContainer.appendChild(checkbox);
            checkboxContainer.appendChild(label);
            checkboxContainer.appendChild(lineBreak);
        }
    }
});

    </script>
</body>
</html>
