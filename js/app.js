// Responsive menu
var menuTrigger = document.querySelector('.menu-trigger');
var primaryMenu = document.querySelector('.primary-menu');
menuTrigger.addEventListener('click', function () {
  primaryMenu.classList.toggle('slide');
});

// Tax Number
if (document.querySelector('#tax_number_check_Yes')) {
  var taxNumber = document.querySelector('#tax_number_check_Yes');
  var taxRield = document.querySelector('#tax_number_field');
  taxNumber.addEventListener('change', function (event) {
    event.target.checked
      ? (taxRield.style.display = 'block')
      : (taxRield.style.display = 'none');
  });
}
// Home Slider
var swiper = new Swiper('.home-slider', {
  effect: 'fade',
  navigation: {
    nextEl: '.home-slider-next',
    prevEl: '.home-slider-prev',
  },
});

// Some Translations adjustments
if (document.querySelector('.lang-ar .mc4wp-form-fields input[name="EMAIL"]')) {
  var MCInput = document.querySelector(
    '.lang-ar .mc4wp-form-fields input[name="EMAIL"]'
  );
  var MCSubmit = document.querySelector(
    '.lang-ar .mc4wp-form-fields input[type="submit"]'
  );
  document.addEventListener(
    'load',
    (function () {
      MCInput.setAttribute('placeholder', 'عنوان البريد الالكترونى');
      MCSubmit.setAttribute('value', 'الإشتراك');
    })()
  );
}
