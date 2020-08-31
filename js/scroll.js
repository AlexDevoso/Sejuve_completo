
(function () {
    var nv = document.getElementById('nv'); // colocar em cache
    window.addEventListener('scroll', function () {
        if (window.scrollY > 70) nv.classList.add('nv'); // > 0 ou outro valor desejado
        else nv.classList.remove('nv');
    });
})();

