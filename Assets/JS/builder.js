const key1 = document.getElementById('key1');
const key2 = document.getElementById('key2');
const key3 = document.getElementById('key3');
const key4 = document.getElementById('key4');
const key5 = document.getElementById('key5');
const key6 = document.getElementById('key6');
const key7 = document.getElementById('key7');
const key8 = document.getElementById('key8');
const key9 = document.getElementById('key9');
const key10 = document.getElementById('key10');
const key11 = document.getElementById('key11');
const key12 = document.getElementById('key12');
const key13 = document.getElementById('key13');
const key14 = document.getElementById('key14');
const key15 = document.getElementById('key15');
const key16 = document.getElementById('key16');
const key17 = document.getElementById('key17');
const key18 = document.getElementById('key18');
const key19 = document.getElementById('key19');
const key20 = document.getElementById('key20');
const key21 = document.getElementById('key21');
const key22 = document.getElementById('key22');
const key23 = document.getElementById('key23');
const key24 = document.getElementById('key24');
const key25 = document.getElementById('key25');
const key26 = document.getElementById('key26');
const key27 = document.getElementById('key27');
const key28 = document.getElementById('key28');
const key29 = document.getElementById('key29');
const key30 = document.getElementById('key30');
const key31 = document.getElementById('key31');
const key32 = document.getElementById('key32');
const key33 = document.getElementById('key33');
const key34 = document.getElementById('key34');
const key35 = document.getElementById('key35');
const key36 = document.getElementById('key36');
const key37 = document.getElementById('key37');
const key38 = document.getElementById('key38');
const key39 = document.getElementById('key39');
const key40 = document.getElementById('key40');
const key41 = document.getElementById('key41');
const key42 = document.getElementById('key42');
const key43 = document.getElementById('key43');
const key44 = document.getElementById('key44');
const key45 = document.getElementById('key45');
const key46 = document.getElementById('key46');
const key47 = document.getElementById('key47');
const key48 = document.getElementById('key48');
const key49 = document.getElementById('key49');
const key50 = document.getElementById('key50');
const key51 = document.getElementById('key51');
const key52 = document.getElementById('key52');
const key53 = document.getElementById('key53');
const key54 = document.getElementById('key54');
const key55 = document.getElementById('key55');
const key56 = document.getElementById('key56');
const key57 = document.getElementById('key57');
const key58 = document.getElementById('key58');
const key59 = document.getElementById('key59');
const key60 = document.getElementById('key60');
const key61 = document.getElementById('key61');
const key62 = document.getElementById('key62');
const key63 = document.getElementById('key63');
const key64 = document.getElementById('key64');


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

