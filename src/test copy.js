// ============================================================================
// Variables
// ============================================================================

const numberInput = document.getElementById('number-input');
const submitButton = document.getElementById('submit-button');

const checkboxesContainer = document.getElementById('checkboxes-container');


// ============================================================================
// Functions
// ============================================================================

function generateCheckboxes() {
    const numborOfVolumes = numberInput.value;

    let html = '';

    for (let i = 1; i <= numborOfVolumes; i++) {
        html += `
            <div class="checkbox-container">
                <input type="checkbox" id="volume-${i}" name="${i}">
                <label for="volume-${i}">Volume ${i}</label>
            </div>
        `;
    }

    checkboxesContainer.innerHTML = html;
}


// ============================================================================
// Code to execute on load
// ============================================================================


// ============================================================================
// Event listeners
// ============================================================================

submitButton.addEventListener('click', generateCheckboxes);