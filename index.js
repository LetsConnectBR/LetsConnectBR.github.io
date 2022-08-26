let title = document.getElementById('title');

window.addEventListener('scroll', function() {
    let valor = window.scrollY;

    title.style.top = valor * 0.7 + 'px'; 
});