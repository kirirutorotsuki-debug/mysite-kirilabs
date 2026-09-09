<?php include 'inc/header.php';?>
<h1>Modpacks for minecraft page KIRILABS</h1>
<main class="shield">             
    <div class="getmore">
    <a href="https://drive.google.com/drive/folders/1TkyrL8lssNahJT2zwkBxbZZ-9WvcCLN2?usp=drive_link">Папка с Модпаками</a>
  <a href="https://drive.google.com/drive/folders/153NDn6S1reOFAPXldWpfqBunF654gtNn?usp=drive_link">Папка с Мирами</a>
  </div>  
  <!-- Модпаки | Modpacks -->
  <div class="modpack" id="modpacks-container">
  </div>
  <!-- Модальные окна -->
  <dialog id="modal1">
    <div class="talkDownloader">
      <button id="closeBtn" class="close-modal">&times;</button>
      <img id="modal-img">
      <h3 id="modal-title"></h3>
      <h4>Описание:</h4>
      <p>Загрузчик: <b class="downloader" id="modal-loader"></b></p>
      <p id="modal-creator" class="creator"></p>
      <p id="modal-text"></p>
      <a id="link-google" href="#">Скачать Google Drive</a>
      <a id="link-yandex" href="#">Скачать Yandex Disk</a>
    </div>
  </dialog>
</main>
<!-- /Основное | /Main  -->
<script>
// document.addEventListener — вешаем слушатель событий на всю страницу.
// 'DOMContentLoaded' — событие сработает, когда браузер полностью загрузит структуру HTML.
// async () => { ... } — объявляем асинхронную функцию. Слово async нужно, чтобы внутри можно было использовать await для ожидания ответов от сервера без зависания сайта.
document.addEventListener('DOMContentLoaded', async () => {
  // 1. Узнаем текущий язык сайта прямо из тега <html> (например: "ru", "en" или "fi")
  // Если атрибут не задан, на всякий случай сработает запасной вариант 'ru'
  // const currentLang = document.documentElement.lang || 'ru';
  // fetch() — делает сетевой запрос к серверу по указанному пути, чтобы скачать файл.
  // await — останавливает выполнение кода на этой строке, пока файл 'json/modpacks.json' полностью не загрузится.
  const response = await fetch('json/modpacks.json');
  
  // .json() — встроенный метод, который превращает скачанный сырой текстовый файл JSON в полноценный массив объектов JavaScript.
  // await — ждет, пока процесс этого превращения (парсинга) полностью завершится.
  const modpacks = await response.json(); 

  // document.getElementById() — ищет на HTML-странице элемент по его уникальному ID.
  // Записываем в переменную container блок, куда мы будем программно вставлять карточки модпаков.
  const container = document.getElementById('modpacks-container');
  
  // Ищем и записываем в переменную modal тег модального окна (обычно это тег <dialog>).
  const modal = document.getElementById('modal1');
  
  // Ищем и записываем кнопку закрытия внутри этого модального окна (крестик или кнопку «Закрыть»).
  const closeModalBtn = document.getElementById('closeBtn');

  // --- Элементы внутри модального окна для динамической подмены текста ---
  // Находим картинку внутри модалки, чтобы менять обложку в зависимости от выбранного модпака.
  const mImg = document.getElementById('modal-img');
  
  // Находим тег заголовка для подстановки имени сборки.
  const mTitle = document.getElementById('modal-title');
  
  // Находим элемент для отображения игровой версии Майнкрафта (например, 1.20.1).
  const mVersion = document.getElementById('modal-version');
  
  // Находим элемент для вывода ядра/загрузчика модов (Forge, Fabric, NeoForge).
  const mLoader = document.getElementById('modal-loader');
  
  // Находим текстовый блок для вывода подробного описания сборки.
  const mText = document.getElementById('modal-text');
  
  // Находим тег ссылки <a> для скачивания сборки с Google Диска.
  const mGoogle = document.getElementById('link-google');
  
  // Находим тег ссылки <a> для скачивания сборки с Яндекс Диска.
  const mYandex = document.getElementById('link-yandex');
  
  // Находим текстовый элемент для вывода автора/создателя данного модпака.
  const mCreator = document.getElementById('modal-creator');

  // --- Генерация карточек на странице ---
  // .forEach() — запускает цикл, который перебирает каждый модпак из полученного массива по очереди.
  // pack — это объект текущего модпака (со всеми его свойствами из JSON), а index — его порядковый номер в списке (0, 1, 2...).
  modpacks.forEach((pack, index) => {
    
    // Создаем строку с HTML-версткой карточки. 
    // Конструкция ${pack.img} — это шаблонизация. JS автоматически подставит туда реальные данные из JSON (путь к картинке, имя, версию).
    // data-index="${index}" — специальный дата-атрибут. Мы «намертво» привязываем к кнопке номер этой карточки, чтобы знать, какую именно открыли.
    const cardHtml = `
      <div class="blockpack">
        <img src="${pack.img}" alt="">
        <h3>${pack.name}</h3>
        <h4>Version ${pack.version}</h4>
        <button class="open-modal" data-index="${index}">Подробнее</button>
      </div>
    `;
    
    // container.innerHTML += ... — берёт текущее содержимое блока-контейнера и прибавляет (дописывает) к нему созданную HTML-карточку.
    container.innerHTML += cardHtml;
  });

  // --- Логика открытия модального окна (Делегирование событий) ---
  // Вешаем один общий слушатель клика на весь большой контейнер с карточками, вместо того чтобы вешать его на каждую кнопку отдельно.
  container.addEventListener('click', (event) => {
    
    // event.target — указывает на точный элемент, по которому физически кликнул пользователь.
    // .classList.contains('open-modal') — проверяем: «Действительно ли пользователь нажал на кнопку с классом open-modal?».
    if (event.target.classList.contains('open-modal')) {
      
      // .getAttribute('data-index') — считываем с нажатой кнопки номер карточки, который мы сохранили туда в цикле выше.
      const index = event.target.getAttribute('data-index');
      
      // Достаем из нашего общего массива modpacks один конкретный объект модпака по полученному номеру (индексу).
      const pack = modpacks[index];

      // --- Заполняем модальное окно данными из вытащенного объекта pack ---
      // Меняем путь к картинке в модалке на картинку этого конкретного модпака.
      mImg.src = pack.img;
      
      // Заменяем текст заголовка, красиво склеивая имя и версию в фигурных скобках.
      mTitle.textContent = pack.name + " {" + pack.version + "}";
      
      // Заменяем текст загрузчика (Forge/Fabric).
      mLoader.textContent = pack.loader;
      
      // Подставляем уникальное описание.
      mText.textContent = pack.description;
        // 2. ИЗМЕНЕНИЕ: Берем описание именно для текущего языка сайта.
      // Если для этого языка описания в JSON вдруг нет (забыли написать), 
      // оператор || подставит русское описание в качестве запасного.
      // mText.textContent = pack.description[currentLang] || pack.description['ru'];
      
      // Выводим имя создателя сборки.
      mCreator.textContent = "Сделал: " + pack.creator;

      // --- Управляем ссылкой на Google Диск ---
      // if (pack.googleLink) — проверяем условие: «А заполнено ли вообще поле с ссылкой на Google в JSON?».
      if (pack.googleLink) {
        // Если ссылка есть, записываем её в атрибут href тега <a>, чтобы кнопка стала рабочей.
        mGoogle.href = pack.googleLink;
      } else {
        // Если ссылки нет (поле пустое), полностью скрываем кнопку Google с экрана с помощью CSS-инлайна display: none.
        mGoogle.style.display = "none";
      }

      // --- Управляем ссылкой на Yandex Диск ---
      // Точно такое же условие: проверяем наличие ссылки на Яндекс Диск в файле JSON.
      if (pack.yandexLink) {
        mYandex.href = pack.yandexLink;
      } else {
        // Если ссылки нет, скрываем кнопку Яндекс Диска, чтобы пользователь не кликал в пустоту.
        mYandex.style.display = "none";
      }

      // .showModal() — встроенный стандартный метод браузера для тега <dialog>.
      // Он открывает модальное окно поверх всего сайта и автоматически блокирует остальную страницу (делает задний фон темным).
      modal.showModal();
    }
  });

  // --- Логика закрытия по кнопке ---
  // Добавляем кнопке закрытия (крестику) слушатель на клик мыши.
  closeModalBtn.addEventListener('click', () => {
    // .close() — встроенный метод для тега <dialog>, который мгновенно закрывает модальное окно и возвращает сайт в исходное состояние.
    modal.close();
  });

  // --- Закрытие по клику на подложку (backdrop) ---
  // Вешаем клик на само модальное окно. Тег <dialog> устроен так, что его подложка (серый фон вокруг окна) считается частью самого тега.
  modal.addEventListener('click', (e) => {
    
    // e.target === modal — проверяем: «Кликнул ли пользователь именно по фону (самому диалогу), а не по контенту внутри него?».
    if (e.target === modal) {
      // Если клик пришелся на пустую область вокруг окна, закрываем модалку.
      modal.close();
    }
  });
});
</script>
<?php include 'inc/footer.php';?>