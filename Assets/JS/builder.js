// Au chargement de la page, afficher la première étape et masquer la deuxième
document.addEventListener('DOMContentLoaded', function () {
    showStep(1);  // Appelle la fonction showStep() pour afficher la première étape
});

// Fonction pour afficher la bonne étape
function showStep(step) {
    // Masquer toutes les étapes
    document.querySelectorAll('.step').forEach(function (stepElement) {
        stepElement.style.display = 'none';
    });

    // Afficher l'étape spécifiée
    document.querySelector(`.step-${step}`).style.display = 'block';
}

// Fonction pour passer à l'étape suivante
function nextStep(event) {
    // Empêcher le rechargement de la page
    event.preventDefault();

    // Recherche de l'étape actuellement visible
    let currentStepElement;
    document.querySelectorAll('.step').forEach(function (stepElement) {
        if (stepElement.style.display === 'block') {
            currentStepElement = stepElement;
        }
    });

    // Obtenir le numéro de l'étape actuelle
    const currentStepNumber = parseInt(currentStepElement.dataset.step);

    // Passer à l'étape suivante (si disponible)
    if (currentStepNumber < 2) {  // Vous pouvez ajuster le nombre total d'étapes ici
        const nextStepNumber = currentStepNumber + 1;
        showStep(nextStepNumber);  // Appelle la fonction showStep() pour afficher l'étape suivante
    }
}

// Appeler la fonction nextStep lorsque le bouton Suivant est cliqué
document.querySelector('.suivant').addEventListener('click', nextStep);
