// functions.js - Основни jQuery функции за приложението

$(document).ready(function() {
    // Инициализация на приложението
    console.log('Flight PHP приложение е заредено с jQuery!');

    // Пример: Показване на скрито съдържание при клик
    $('.toggle-content').on('click', function() {
        $(this).next('.hidden-content').slideToggle();
    });

    // Пример: Потвърждение при изтриване
    $('.delete-btn').on('click', function(e) {
        if (!confirm('Сигурни ли сте, че искате да изтриете този елемент?')) {
            e.preventDefault();
        }
    });

    // Пример: Автоматично скриване на съобщения след 5 секунди
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 5000);

    // Добави още функции тук...
});