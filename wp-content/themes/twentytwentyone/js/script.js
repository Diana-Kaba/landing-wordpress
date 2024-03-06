(function ($, undefined) {
  $(window).scroll(function () {
    /* Скроллировать фоновые слои с разной скоростью */
    let winTop = $(window).scrollTop();
    let pos = "center " + (-90 - winTop * 0.5) + "px";
    $(".mars").css("background-position", pos);

    // если происходит скроллинг
    $(".slideanim").each(function () {
      // для каждого блока с классом slideanim
      let pos = $(this).offset().top; // считываем его координату по оси Y в окне браузера
      if (pos < $(window).scrollTop() + 400) {
        //если до верха страницы остается 400px,
        $(this).addClass("slide"); //добавляем к блоку класс slide с анимацией
      }
    });

    $(".animate__animated").each(function () {
      // для каждого блока с классом mov_slideInRight
      pos = $(this).offset().top; // считываем его координату по оси Y в окне браузера
      if (pos < $(window).scrollTop() + 600) {
        // если до верха страницы остается 600px,
        $(this).addClass("animate__slideInRight"); // добавляем к блоку класс с анимацией slideInRight
      }
    });
  });
})(jQuery);
