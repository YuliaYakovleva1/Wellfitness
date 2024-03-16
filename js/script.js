// Форма "Заказать звонок"
function showPopup() {
  document.getElementById("popup").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

// Обработка отправки формы
document
  .getElementById("callForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert("Спасибо за ваш заказ! Мы свяжемся с вами в ближайшее время.");
    closePopup();
  });

// Форма входа в личный кабинет
function showPopup2() {
  document.getElementById("loginPopup").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function closePopup2() {
  document.getElementById("loginPopup").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var loginMessage = document.getElementById("loginMessage");
    loginMessage.textContent = "Вход выполнен успешно!";
  });


// Форма регистрации
function openPopup() {
  document.getElementById("registrationPopup").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function closePopup3() {
  document.getElementById("registrationPopup").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}


// Бургер-меню
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

// Форма обратной связи
function openFeedbackForm() {
  document.getElementById("feedbackPopup").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function closeFeedbackForm() {
  document.getElementById("feedbackPopup").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}


// Изменение цвета иконки при добавлении в избранное

function toggleHeartColor(heartIcon) {
  if (heartIcon.classList.contains('red-heart')) {
      heartIcon.classList.remove('red-heart'); // Удаляем класс
  } else {
      heartIcon.classList.add('red-heart'); // Добавляем класс
  }
}




