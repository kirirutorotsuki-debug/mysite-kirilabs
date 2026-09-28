<?php $body_class = 'mine'; include 'inc/header.php'; ?>

<h1>Modpacks for minecraft page KIRILABS</h1>
<main class="shield">             
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
document.addEventListener('DOMContentLoaded', async () => {
  // 1. Узнаем текущий язык сайта из тега <html> (например: "ru" или "en")
  // Если атрибут lang не задан или там что-то другое, включится запасной вариант 'ru'
  const currentLang = document.documentElement.lang || 'ru';

  const response = await fetch('json/modpacks.json');
  const modpacks = await response.json(); 

  const container = document.getElementById('modpacks-container');
  const modal = document.getElementById('modal1');
  const closeModalBtn = document.getElementById('closeBtn');

  const mImg = document.getElementById('modal-img');
  const mTitle = document.getElementById('modal-title');
  const mLoader = document.getElementById('modal-loader');
  const mText = document.getElementById('modal-text');
  const mGoogle = document.getElementById('link-google');
  const mYandex = document.getElementById('link-yandex');
  const mCreator = document.getElementById('modal-creator');

  // --- Генерация карточек на странице ---
  container.innerHTML = ''; // Очищаем контейнер перед сборкой
  
  modpacks.forEach((pack, index) => {
    const emoji = pack.emo || '🧊';
    
    // МУЛЬТИЯЗЫЧНОСТЬ: Вытаскиваем имя под текущий язык.
    // Если pack.name — это строка (старый формат), берем её. 
    // Если это объект, берем pack.name['ru'] или pack.name['en'].
    const packName = (typeof pack.name === 'object') 
      ? (pack.name[currentLang] || pack.name['ru']) 
      : pack.name;

    const cardHtml = `
      <div class="blockpack">
        <div class="blockpack-header">
          <p class="emo">${emoji}</p>
          <div class="title-group">
            <h3>${packName}</h3>
            <h4>Version ${pack.version}</h4>
          </div>
        </div>
        <button class="open-modal" data-index="${index}">Подробнее</button>
      </div>
    `;
    
    container.innerHTML += cardHtml;
  });

  // --- Логика открытия модального окна ---
  container.addEventListener('click', (event) => {
    if (event.target.classList.contains('open-modal')) {
      const index = event.target.getAttribute('data-index');
      const pack = modpacks[index];

      // МУЛЬТИЯЗЫЧНОСТЬ: Повторяем логику для имени и описания в модалке
      const packName = (typeof pack.name === 'object') ? (pack.name[currentLang] || pack.name['ru']) : pack.name;
      const packDesc = (typeof pack.description === 'object') ? (pack.description[currentLang] || pack.description['ru']) : pack.description;

      mImg.src = pack.img;
      mTitle.textContent = packName + " {" + pack.version + "}";
      mLoader.textContent = pack.loader;
      
      // Выводим правильное описание на нужном языке
      mText.textContent = packDesc;
      
      // Для автора и загрузчика можно локализовать статичное слово прямо тут, если хочется:
      const phraseCreated = currentLang === 'en' ? "Created by: " : "Сделал: ";
      mCreator.textContent = phraseCreated + pack.creator;

      // Управляем ссылками (оставляем как было)
      if (pack.googleLink) {
        mGoogle.href = pack.googleLink;
        mGoogle.style.display = "inline-block";
      } else {
        mGoogle.style.display = "none";
      }

      if (pack.yandexLink) {
        mYandex.href = pack.yandexLink;
        mYandex.style.display = "inline-block";
      } else {
        mYandex.style.display = "none";
      }

      modal.showModal();
    }
  });

  // Логика закрытия модалки
  closeModalBtn.addEventListener('click', () => {
    modal.close();
  });
});

</script>
<?php include 'inc/footer.php';?>