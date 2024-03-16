const tabsBtn = document.querySelectorAll(".tabs__nav-btn");
const tabsItems = document.querySelectorAll(".tabs__item");

// Получаем все кнопки вкладок и назначаем обработчик клика на каждую из них
tabsBtn.forEach(onTabClick);

function onTabClick(item) {
  item.addEventListener("click", function () {
    let currentBtn = item;
    let tabId = currentBtn.getAttribute("data-tab");
    let currentTab = document.querySelector(tabId);

    if (!currentBtn.classList.contains("active") && currentTab) {
      // Удаляем класс 'active' у всех кнопок вкладок
      tabsBtn.forEach(function (item) {
        item.classList.remove("active");
      });

      // Удаляем класс 'active' у всех вкладок
      tabsItems.forEach(function (item) {
        item.classList.remove("active");
      });

      // Добавляем класс 'active' текущей кнопке вкладки и соответствующей вкладке
      currentBtn.classList.add("active");
      currentTab.classList.add("active");
    }
  });
}

// Вызываем клик на первой кнопке вкладки после загрузки DOM
document.addEventListener("DOMContentLoaded", function () {
  const firstTabBtn = document.querySelector(".tabs__nav-btn");
  if (firstTabBtn) {
    firstTabBtn.click();
  }
});
