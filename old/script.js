document.getElementById('girar').addEventListener('click', function() {
    const roleta = document.querySelector('.roleta');
    let randomRotation = Math.floor(Math.random() * 360) + 360 * 5; // Rotação aleatória + 5 voltas completas
    roleta.style.transform = `rotate(${randomRotation}deg)`;
});
