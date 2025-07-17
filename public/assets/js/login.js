document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM
    const loginForm = document.getElementById('form');
    const emailInput = document.getElementById('inputUsername');
    const passwordInput = document.getElementById('inputPassword');
    const togglePasswordBtn = document.getElementById('togglePassword');
    const toggleIcon = document.getElementById('toggleIcon');
    const loginBtn = document.querySelector('.login-btn');
    const btnText = loginBtn.querySelector('.btn-text');
    const btnSpinner = loginBtn.querySelector('.btn-spinner');

    // Gestion de l'affichage/masquage du mot de passe
    togglePasswordBtn.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Changer l'icône
        if (type === 'text') {
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    });

    // Validation en temps réel
    emailInput.addEventListener('input', function() {
        validateEmail(this);
    });

    passwordInput.addEventListener('input', function() {
        validatePassword(this);
    });

    // Validation de l'email
    function validateEmail(input) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const isValid = emailRegex.test(input.value);
        
        if (input.value.length > 0) {
            if (isValid) {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            } else {
                input.classList.remove('is-valid');
                input.classList.add('is-invalid');
            }
        } else {
            input.classList.remove('is-valid', 'is-invalid');
        }
        
        return isValid;
    }

    // Validation du mot de passe
    function validatePassword(input) {
        const isValid = input.value.length >= 6;
        
        if (input.value.length > 0) {
            if (isValid) {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            } else {
                input.classList.remove('is-valid');
                input.classList.add('is-invalid');
            }
        } else {
            input.classList.remove('is-valid', 'is-invalid');
        }
        
        return isValid;
    }

    // Soumission du formulaire
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const isEmailValid = validateEmail(emailInput);
        const isPasswordValid = validatePassword(passwordInput);
        
        if (isEmailValid && isPasswordValid) {
            // Afficher le spinner
            showLoadingState();
            
            // Simuler une requête de connexion
            setTimeout(() => {
                // Ici, vous feriez normalement un appel API
                console.log('Connexion réussie !');
                
                // Afficher un message de succès
                showSuccessMessage();
                
                // Rediriger après 2 secondes
                setTimeout(() => {
                    // window.location.href = '/dashboard';
                    console.log('Redirection vers le dashboard...');
                }, 2000);
                
            }, 2000);
        } else {
            // Afficher les erreurs
            if (!isEmailValid) {
                emailInput.classList.add('is-invalid');
            }
            if (!isPasswordValid) {
                passwordInput.classList.add('is-invalid');
            }
            
            // Effet de secousse sur le bouton
            loginBtn.classList.add('shake');
            setTimeout(() => {
                loginBtn.classList.remove('shake');
            }, 500);
        }
    });

    // Afficher l'état de chargement
    function showLoadingState() {
        loginBtn.disabled = true;
        btnText.classList.add('d-none');
        btnSpinner.classList.remove('d-none');
        loginBtn.style.opacity = '0.8';
    }

    // Cacher l'état de chargement
    function hideLoadingState() {
        loginBtn.disabled = false;
        btnText.classList.remove('d-none');
        btnSpinner.classList.add('d-none');
        loginBtn.style.opacity = '1';
    }

    // Afficher un message de succès
    function showSuccessMessage() {
        hideLoadingState();
        
        // Changer le texte du bouton temporairement
        const originalText = btnText.textContent;
        btnText.innerHTML = '<i class="fas fa-check me-2"></i>Connexion réussie !';
        loginBtn.style.background = 'linear-gradient(135deg, #10b981, #059669)';
        
        // Créer une notification toast
        showToast('Connexion réussie !', 'Redirection en cours...', 'success');
    }

    // Fonction pour afficher des notifications toast
    function showToast(title, message, type = 'info') {
        // Créer l'élément toast
        const toastContainer = document.getElementById('toast-container') || createToastContainer();
        
        const toast = document.createElement('div');
        toast.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : type === 'error' ? 'danger' : 'primary'} border-0`;
        toast.setAttribute('role', 'alert');
        toast.setAttribute('aria-live', 'assertive');
        toast.setAttribute('aria-atomic', 'true');
        
        toast.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    <strong>${title}</strong><br>
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        `;
        
        toastContainer.appendChild(toast);
        
        // Initialiser et afficher le toast
        const bsToast = new bootstrap.Toast(toast);
        bsToast.show();
        
        // Nettoyer après fermeture
        toast.addEventListener('hidden.bs.toast', () => {
            toast.remove();
        });
    }

    // Créer le conteneur pour les toasts
    function createToastContainer() {
        const container = document.createElement('div');
        container.id = 'toast-container';
        container.className = 'toast-container position-fixed top-0 end-0 p-3';
        container.style.zIndex = '1100';
        document.body.appendChild(container);
        return container;
    }

    // Animations d'entrée pour les éléments
    function animateElements() {
        const elements = document.querySelectorAll('.login-card > *');
        elements.forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                element.style.transition = 'all 0.5s ease';
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }

    // Effet de particules au survol du logo
    const logoIcon = document.querySelector('.logo-icon');
    logoIcon.addEventListener('mouseenter', function() {
        createParticles(this);
    });

    function createParticles(element) {
        for (let i = 0; i < 6; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.cssText = `
                position: absolute;
                width: 4px;
                height: 4px;
                background: linear-gradient(45deg, #2563eb, #059669);
                border-radius: 50%;
                pointer-events: none;
                z-index: 10;
            `;
            
            element.appendChild(particle);
            
            // Animation des particules
            const angle = (i * 60) * Math.PI / 180;
            const distance = 50;
            const x = Math.cos(angle) * distance;
            const y = Math.sin(angle) * distance;
            
            particle.animate([
                { transform: 'translate(0, 0) scale(1)', opacity: 1 },
                { transform: `translate(${x}px, ${y}px) scale(0)`, opacity: 0 }
            ], {
                duration: 1000,
                easing: 'ease-out'
            }).onfinish = () => {
                particle.remove();
            };
        }
    }

    // Gestion des erreurs de connexion
    window.addEventListener('online', function() {
        showToast('Connexion rétablie', 'Vous êtes de nouveau en ligne', 'success');
    });

    window.addEventListener('offline', function() {
        showToast('Connexion perdue', 'Vérifiez votre connexion internet', 'error');
    });

    // Initialisation
    animateElements();
    
    // Ajout d'un effet de focus automatique
    setTimeout(() => {
        emailInput.focus();
    }, 500);
});

// Fonction utilitaire pour déboguer
function debug(message) {
    console.log(`[PharmaCare Debug]: ${message}`);
}

// Gestion des raccourcis clavier
document.addEventListener('keydown', function(e) {
    // Ctrl + Enter pour soumettre le formulaire
    if (e.ctrlKey && e.key === 'Enter') {
        document.getElementById('form').dispatchEvent(new Event('submit'));
    }
    
    // Échap pour vider les champs
    if (e.key === 'Escape') {
        document.getElementById('inputUsername').value = '';
        document.getElementById('inputPassword').value = '';
        document.getElementById('inputUsername').focus();
    }
});