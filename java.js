$(document).ready(function() {
    let i = 0;
    const btn = $('.btn');
    const sidebar = $('.sidebar');
    const articles = $('.article');

    while (i < btn.length) {
        btn[i].addEventListener('click', function() {
            sidebar.toggleClass('show');
            articles[i].classList.toggle('click');
        });
        i++;
    }
});
