// Barra de navegación

document.addEventListener("scroll", function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Configuración del preloader

document.addEventListener("DOMContentLoaded", function() {
    const preloader = document.getElementById('preloader');
    
    window.onload = function() {
        // Esperamos 2 segundos antes de ocultar el preloader
        setTimeout(function() {
            preloader.classList.add('hidden');
        }, 2000);  // 2000 ms = 2 segundos
    };
});

document.addEventListener("DOMContentLoaded", function() {
    const preloader = document.getElementById('preloader');
    const mainContent = document.getElementById('main-content');

    // Animaciones del SVG con GSAP

    gsap.to(".svgBox1", {
        delay: 0.2,
        duration: 1.5,
        x: 0,
        y: 0,
        attr: {
            width: 40,
            height: 40,
            fill: "#8d3dae"
        }
    });
    gsap.to(".svgBox2", {
        delay: 0.2,
        duration: 1.5,
        x: 60,
        y: 0,
        attr: {
            width: 40,
            height: 40,
            fill: "#8d3dae",
            rx: 50
        }
    });
    gsap.to(".svgBox3", {
        delay: 0.2,
        duration: 1.5,
        x: 60,
        y: 60,
        attr: {
            width: 40,
            height: 40,
            fill: "#8d3dae"
        }
    });
    gsap.to(".svgBox4", {
        delay: 0.2,
        duration: 1.5,
        x: 0,
        y: 60,
        attr: {
            width: 40,
            height: 40,
            fill: "#8d3dae",
            rx: 50
        }
    });

    // Después de 2 segundos, ocultamos el preloader y mostramos el contenido
    window.onload = function() {
        setTimeout(function() {
            preloader.classList.add('hidden'); // Desaparece el preloader
            mainContent.classList.add('visible'); // Aparece el contenido
        }, 2500); // Tiempo en milisegundos que dura la animación
    };
});

// Configuración del aro de luz

document.addEventListener("scroll", function() {
    const loader = document.querySelector('.loader');
    const scrollPosition = window.scrollY;
    const maxScroll = 300; // Máximo scroll para la transformación completa

    // Mapear el scroll para las transformaciones en 3D
    let rotateXValue = Math.min(scrollPosition / 2, 90); // Rotación 3D (hasta 90 grados)
    let scaleXValue = 1 - (scrollPosition / maxScroll); // Escalado horizontal

    // Limitar el valor de escala entre 1 y 0.1
    if (scaleXValue < 0.1) scaleXValue = 0.1;

    // Aplicar la transformación
    loader.style.transform = `translate(-50%, -50%) perspective(800px) rotateX(${rotateXValue}deg) scaleX(${scaleXValue})`;
});
