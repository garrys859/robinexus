document.addEventListener("DOMContentLoaded", function() {
    const moon = document.getElementById('moon');
    const sun = document.getElementById('sun');
    const containers = document.querySelector('.containers');

    let isDragging = false;
    let startX, startY;

    moon.style.width = '33vw';
    moon.style.height = '33vw';

    moon.addEventListener('mousedown', (e) => {
        isDragging = true;
        moon.style.cursor = 'grabbing';
        startX = e.clientX - moon.offsetLeft;
        startY = e.clientY - moon.offsetTop;
    });

    document.addEventListener('mouseup', () => {
        isDragging = false;
        moon.style.cursor = 'grab';
    });

    document.addEventListener('mousemove', (e) => {
        if (isDragging) {
            const x = e.clientX - startX;
            const y = e.clientY - startY;
    
            // Cálculo de límites de movimiento
            const maxX = containers.offsetWidth;  // Permitimos que se desplace más allá de los límites hacia la derecha
            const maxY = containers.offsetHeight;  // Mantiene el límite ajustado para el desplazamiento hacia abajo
    
            // Permitir que la luna se salga parcialmente del contenedor en ambas direcciones
            moon.style.left = `${Math.min(Math.max(x, -moon.offsetWidth / 2), maxX)}px`;  // Permitimos que la luna salga por la derecha
            moon.style.top = `${Math.min(Math.max(y, -moon.offsetHeight / 2), maxY)}px`;  // Permitimos que la luna salga por abajo

            updateEclipse();
        }
    });

    function updateEclipse() {
        const moonRect = moon.getBoundingClientRect();
        const sunRect = sun.getBoundingClientRect();

        const moonCenterX = moonRect.left + moonRect.width / 2;
        const moonCenterY = moonRect.top + moonRect.height / 2;

        const sunCenterX = sunRect.left + sunRect.width / 2;
        const sunCenterY = sunRect.top + sunRect.height / 2;

        const distance = Math.sqrt(Math.pow(moonCenterX - sunCenterX, 2) + Math.pow(moonCenterY - sunCenterY, 2));
        const maxDistance = sunRect.width / 2 + moonRect.width / 2;

        if (distance < maxDistance) {
            const overlap = 1 - (distance / maxDistance);
            const moonDarkness = Math.min(overlap * 2, 1);
            moon.style.backgroundColor = `rgb(${51 - moonDarkness * 51}, ${51 - moonDarkness * 51}, ${51 - moonDarkness * 51})`;

            sun.style.filter = `brightness(${1 + overlap * 0.2})`;
            sun.style.boxShadow = `0 0 ${100 + overlap * 50}px ${50 + overlap * 25}px rgba(255, 255, 255, ${0.8 + overlap * 0.2})`;
        } else {
            moon.style.backgroundColor = '#333';
            sun.style.filter = 'brightness(1)';
            sun.style.boxShadow = '0 0 100px 50px rgba(255, 255, 255, 0.8)';
        }
    }

    function animateSunFlare() {
        const flareIntensity = Math.random() * 0.3 + 0.7;
        sun.style.boxShadow = sun.style.boxShadow.replace(/0\.\d+\)$/, `${flareIntensity})`);
        requestAnimationFrame(animateSunFlare);
    }

    animateSunFlare();
    updateEclipse();
});