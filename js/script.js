// ==================== CUSTOM CURSOR ====================
const cursor = document.getElementById('custom-cursor');
let cursorSize = 40;

if (window.innerWidth >= 1024) {
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = `${e.clientX - cursorSize / 2}px`;
        cursor.style.top = `${e.clientY - cursorSize / 2}px`;
    });

    // Cursor hover effects - only for specific elements, NOT menu items or icons
    const aboutContent = document.querySelector('.about-content');
    const scrollButton = document.getElementById('scroll-to-top');

    // Large cursor for about content
    if (aboutContent) {
        aboutContent.addEventListener('mouseenter', () => {
            cursorSize = 150;
            cursor.style.width = `${cursorSize}px`;
            cursor.style.height = `${cursorSize}px`;
        });
        aboutContent.addEventListener('mouseleave', () => {
            cursorSize = 40;
            cursor.style.width = '40px';
            cursor.style.height = '40px';
        });
    }

    // Medium cursor for scroll button
    if (scrollButton) {
        scrollButton.addEventListener('mouseenter', () => {
            cursorSize = 120;
            cursor.style.width = `${cursorSize}px`;
            cursor.style.height = `${cursorSize}px`;
        });
        scrollButton.addEventListener('mouseleave', () => {
            cursorSize = 40;
            cursor.style.width = '40px';
            cursor.style.height = '40px';
        });
    }
}

// ==================== MOBILE MENU ====================
const burgerMenu = document.getElementById('burger-menu');
const closeMenu = document.getElementById('close-menu');
const header = document.getElementById('header');
const navMenu = document.getElementById('nav-menu');
const resumeLink = document.getElementById('resume-link');
const navLinks = document.querySelectorAll('.nav-link');

burgerMenu.addEventListener('click', () => {
    header.classList.add('menu-open');
    navMenu.classList.add('mobile-open');
    resumeLink.classList.remove('hidden');
    resumeLink.classList.add('flex');
    burgerMenu.classList.add('hidden');
    closeMenu.classList.remove('hidden');
    closeMenu.classList.add('flex');
});

closeMenu.addEventListener('click', () => {
    header.classList.remove('menu-open');
    navMenu.classList.remove('mobile-open');
    resumeLink.classList.add('hidden');
    resumeLink.classList.remove('flex');
    burgerMenu.classList.remove('hidden');
    closeMenu.classList.add('hidden');
});

// Close menu on link click
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (window.innerWidth < 768) {
            header.classList.remove('menu-open');
            navMenu.classList.remove('mobile-open');
            resumeLink.classList.add('hidden');
            resumeLink.classList.remove('flex');
            burgerMenu.classList.remove('hidden');
            closeMenu.classList.add('hidden');
        }
    });
});

// Close menu on window resize
window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        header.classList.remove('menu-open');
        navMenu.classList.remove('mobile-open');
        burgerMenu.classList.remove('hidden');
        closeMenu.classList.add('hidden');
    }
});

// ==================== TYPING ANIMATION ====================
const typingText = document.getElementById('typing-text');
const words = ['Senior', '', 'Rohit Suthar'];
const delays = [3000, 1000, 1000];
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;
let currentDelay = 50;

function type() {
    const currentWord = words[wordIndex];
    
    if (!isDeleting && charIndex <= currentWord.length) {
        typingText.textContent = currentWord.substring(0, charIndex);
        charIndex++;
        currentDelay = 50;
    } else if (isDeleting && charIndex >= 0) {
        typingText.textContent = currentWord.substring(0, charIndex);
        charIndex--;
        currentDelay = 30;
    }
    
    if (!isDeleting && charIndex > currentWord.length) {
        if (wordIndex === words.length - 1) {
            // Stop at the last word
            typingText.style.animation = 'none';
            return;
        }
        currentDelay = delays[wordIndex];
        isDeleting = true;
    } else if (isDeleting && charIndex < 0) {
        isDeleting = false;
        wordIndex++;
        currentDelay = 500;
    }
    
    setTimeout(type, currentDelay);
}

// Start typing animation after a short delay
setTimeout(type, 500);

// ==================== LOGO SCROLL TO TOP ====================
const logo = document.getElementById('logo');
const footerLogo = document.getElementById('footer-logo');

logo.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

footerLogo.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// ==================== SCROLL TO TOP BUTTON ====================
const scrollToTopBtn = document.getElementById('scroll-to-top');
const scrollText = scrollToTopBtn.querySelector('.scroll-text');
const scrollArrow = scrollToTopBtn.querySelector('.scroll-arrow');

// Ensure button is hidden on page load
scrollToTopBtn.classList.add('hidden');
scrollToTopBtn.classList.remove('flex');

window.addEventListener('scroll', () => {
    if (window.scrollY > 200 && window.innerWidth >= 1024) {
        scrollToTopBtn.classList.remove('hidden');
        scrollToTopBtn.classList.add('flex');
    } else {
        scrollToTopBtn.classList.add('hidden');
        scrollToTopBtn.classList.remove('flex');
    }
});

scrollToTopBtn.addEventListener('mouseenter', () => {
    scrollText.classList.add('hidden');
    scrollArrow.classList.remove('hidden');
});

scrollToTopBtn.addEventListener('mouseleave', () => {
    scrollText.classList.remove('hidden');
    scrollArrow.classList.add('hidden');
});

scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Close modal on Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
        closeModal();
    }
});

// ==================== FOOTER YEAR ====================
document.getElementById('current-year').textContent = new Date().getFullYear();

// ==================== INTERSECTION OBSERVER FOR ANIMATIONS ====================
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0) translateX(0)';
        }
    });
}, observerOptions);

// Observe elements for scroll animations
const animatedElements = document.querySelectorAll('.skill-card, .about-paragraph, .experience-card, .project-card, .contact-heading');
animatedElements.forEach(el => observer.observe(el));

// ==================== SMOOTH SCROLL FOR NAVIGATION ====================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

console.log('Portfolio loaded successfully! 🚀');

