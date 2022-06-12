(function () {
  'use strict'

  // Получите все формы, к которым мы хотим применить пользовательские стили проверки Bootstrap
  var forms = document.querySelectorAll('#reg_form', '#auth_form', '#teacher_reg')

  // Зацикливайтесь на них и предотвращайте отправку
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

$('body').on('click', '.regShowPass', function(){
  if ($(this).is(':checked')){
  $('#regPassword').attr('type', 'text');
  } else {
  $('#regPassword').attr('type', 'password');
  }
});

$('body').on('click', '.authShowPassword', function(){
  if ($(this).is(':checked')){
  $('#authPassword').attr('type', 'text');
  } else {
  $('#authPassword').attr('type', 'password');
  }
});


$('body').on('click', '.authShowPasswordWorker', function(){
  if ($(this).is(':checked')){
  $('#authPasswordWorker').attr('type', 'text');
  } else {
  $('#authPasswordWorker').attr('type', 'password');
  }
});