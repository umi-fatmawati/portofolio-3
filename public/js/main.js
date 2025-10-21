// main.js — vanilla JS interactions & animations
document.addEventListener('DOMContentLoaded', () => {

  /* ---------- NAVBAR SCROLL ---------- */
  const nav = document.querySelector('.nav');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) nav.classList.add('scrolled');
    else nav.classList.remove('scrolled');

    // back-to-top show
    document.getElementById('btnTop').style.display = window.scrollY > 450 ? 'block' : 'none';
  });

  /* ---------- NAV TOGGLE MOBILE ---------- */
  const navToggle = document.getElementById('navToggle');
  navToggle && navToggle.addEventListener('click', () => {
    document.querySelector('.nav-links').classList.toggle('open');
  });

  // ===== Section Reveal on Scroll =====
const sections = document.querySelectorAll('.section');

const revealSection = () => {
    const triggerBottom = window.innerHeight / 1.1;
    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        if(sectionTop < triggerBottom) {
            section.classList.add('visible');
        }
    });
};

window.addEventListener('scroll', revealSection);
window.addEventListener('load', revealSection);

// ===== Typing Effect =====
const typedText = document.querySelector('.hero-typing');
const words = ["Developer", "Designer", "Creator"];
let wordIndex = 0;
let charIndex = 0;

const type = () => {
    if(wordIndex >= words.length) wordIndex = 0;
    if(charIndex < words[wordIndex].length) {
        typedText.textContent += words[wordIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, 150);
    } else {
        setTimeout(erase, 1000);
    }
};

const erase = () => {
    if(charIndex > 0) {
        typedText.textContent = words[wordIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, 100);
    } else {
        wordIndex++;
        setTimeout(type, 500);
    }
};

if(typedText) type();

// ===== Navbar Scroll Effect =====
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if(window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});


  /* ---------- TYPING EFFECT ---------- */
  (function typing(){
    const el = document.getElementById('typing');
    if (!el) return;
    const words = ['Web Developer', 'UI/UX Designer', 'Creative Student'];
    let i = 0, j = 0, forward = true;
    function step() {
      el.textContent = words[i].slice(0, j);
      if (forward) j++; else j--;
      if (j === words[i].length + 1) { forward = false; setTimeout(step, 900); }
      else if (j === 0) { forward = true; i = (i + 1) % words.length; }
      setTimeout(step, forward ? 70 : 35);
    }
    step();
  })();

  /* ---------- REVEAL ON SCROLL ---------- */
  const reveals = document.querySelectorAll('.reveal');
  function revealOnScroll(){
    const trigger = window.innerHeight * 0.85;
    reveals.forEach(el => {
      const top = el.getBoundingClientRect().top;
      if (top < trigger) el.classList.add('visible');
    });
  }
  window.addEventListener('scroll', revealOnScroll);
  revealOnScroll();

  /* ---------- SKILL BARS ANIMATION ---------- */
  const skillBars = document.querySelectorAll('.skill-bar');
  function animateSkills(){
    skillBars.forEach(bar => {
      const percent = bar.dataset.percent || 70;
      const span = bar.querySelector('span');
      const top = bar.getBoundingClientRect().top;
      if (top < window.innerHeight - 80) {
        span.style.width = percent + '%';
      }
    });
  }
  window.addEventListener('scroll', animateSkills);
  animateSkills();

  /* ---------- DONUT SVG ANIMATION ---------- */
  // For each .donut-arc, set stroke-dasharray and animate stroke-dashoffset based on data-percent
  (function animateDonut(){
    const arcs = document.querySelectorAll('.donut-arc');
    arcs.forEach(arc => {
      const r = arc.getAttribute('r');
      const c = 2 * Math.PI * r;
      const percent = parseFloat(arc.dataset.percent || 70);
      arc.style.strokeDasharray = `${c}`;
      arc.style.strokeDashoffset = `${c}`;
      // small timeout to stagger animation
      setTimeout(() => {
        const offset = c * (1 - percent/100);
        arc.style.transition = 'stroke-dashoffset 1.2s ease-out';
        arc.style.strokeDashoffset = offset;
      }, 300 + Math.random()*500);
    });
  })();

  /* ---------- PROJECT CARD FADE ---------- */
  const projectCards = document.querySelectorAll('.project-card');
  function revealProjects(){
    projectCards.forEach((c, i) => {
      const top = c.getBoundingClientRect().top;
      if (top < window.innerHeight - 80) c.style.opacity = 1, c.style.transform = 'translateY(0)', c.style.transitionDelay = `${i * 80}ms`;
    });
  }
  window.addEventListener('scroll', revealProjects);
  revealProjects();

  /* ---------- Testimonials carousel simple ---------- */
const testiItems = document.querySelectorAll('.testi');
const prevBtn = document.getElementById('prevTesti');
const nextBtn = document.getElementById('nextTesti');
let currentIndex = 0;

function showTesti(index) {
  testiItems.forEach(item => item.classList.remove('active'));
  testiItems[index].classList.add('active');
}

prevBtn.addEventListener('click', () => {
  currentIndex = (currentIndex - 1 + testiItems.length) % testiItems.length;
  showTesti(currentIndex);
});

nextBtn.addEventListener('click', () => {
  currentIndex = (currentIndex + 1) % testiItems.length;
  showTesti(currentIndex);
});


  /* ---------- Back to top ---------- */
  document.getElementById('btnTop').addEventListener('click', ()=> {
    window.scrollTo({top:0,behavior:'smooth'});
  });

});
