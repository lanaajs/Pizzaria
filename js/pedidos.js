function selectCircle(element) {
    // Remova a classe 'selected' de todas as divs
    var allCircles = document.querySelectorAll('.circle');
    allCircles.forEach(function (circle) {
        circle.classList.remove('selected');
    });

    // Adicione a classe 'selected' apenas ao círculo clicado
    var clickedCircle = element.querySelector('.circle');
    clickedCircle.classList.add('selected');
}