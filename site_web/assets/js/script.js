require('../css/main.scss');


$('[has-ripple="true"]').click(function () {
    $(this).toggleClass('clicked');
    $('.menu').toggleClass('open');
  });

