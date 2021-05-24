const hamburger = document.querySelector('.hamburger'),
    menu = document.querySelector('.menu'),
    closeBtn = document.querySelector('.menu__close');

hamburger.addEventListener('click', () => {
    menu.classList.add('active');
});

closeBtn.addEventListener('click', () => {
    menu.classList.remove('active');
});

$('form').submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "mailer/smart.php",
        data: $(this).serialize()
    }).done(function () {
        $(this).find("input").val("");
        $('form').trigger('reset');
        $('button').html("Thank you! I'll be in touch soon");
    });
    return false;
});