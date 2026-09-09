<!-- Комментарий HTML: Этот блок кода отвечает за инициализацию выбранного языка сайта -->
<?php 
// include — команда PHP, которая берёт весь код из внешнего файла 'lang_init.php' и вставляет его прямо сюда.
// Это позволяет запустить сессии, куки и определить переменную $lang до начала вывода страницы.
include 'lang_init.php'; 
?>
<!DOCTYPE html> <!-- Декларация, которая сообщает браузеру, что страница написана на современном стандарте HTML5 -->

<!-- Тег html — самый главный контейнер для всего сайта. 
     Атрибут lang указывает поисковикам и браузерам язык страницы.
     <?php echo $lang; ?> — PHP выводит туда короткий код активного языка ('ru', 'en' или 'fi'), который определился в lang_init.php -->
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIRILABS</title>
    <link rel="stylesheet" href="css/style.css?v=2">       <!-- Общие базовые стили сайта -->
    <link rel="stylesheet" href="css/mobile.css?v=1">      <!-- Стили для отображения на телефонах -->
    <link rel="stylesheet" href="css/mainpage.css?v=2">    <!-- Оформление главной страницы -->
    <link rel="stylesheet" href="css/modpackpage.css?v=1"> <!-- Оформление страницы с модпаками -->
    <link rel="stylesheet" href="css/passwordpage.css?v=1"><!-- Оформление страницы авторизации/паролей -->
    <link rel="stylesheet" href="css/thelemapage.css?v=1"> <!-- Оформление специальной страницы Thelema -->
</head>
<body> <!-- Внутри этого тега находится всё визуальное содержимое сайта, которое видит пользователь -->

    <script>
    // document.addEventListener — вешаем «слушатель событий» на всю страницу.
    // "DOMContentLoaded" — событие, которое срабатывает, когда браузер полностью прочитал HTML-код и построил дерево элементов.
    // () => { ... } — стрелочная функция, которая выполнит код внутри фигурных скобок сразу после загрузки структуры.
    document.addEventListener("DOMContentLoaded", () => {
        
        // window.location.pathname — встроенное свойство JS, которое считывает путь в адресной строке (например, "/modpacks.php").
        // Записываем этот путь в переменную currentPath с помощью ключевого слова let.
        let currentPath = window.location.pathname;

        // Исправляем ситуацию, когда пользователь зашел на корень сайта (://site.com).
        // Если адресная строка содержит пустой путь или просто слэш "/", принудительно приравниваем переменную к "/index.php".
        if (currentPath === "/" || currentPath === "") {
            currentPath = "/index.php";
        }

        // document.querySelectorAll — ищет на странице ВСЕ элементы, подходящие под CSS-селектор "nav.pages a".
        // В нашем случае — это все ссылки, которые лежат внутри навигационного меню. Записываем их список в navLinks.
        const navLinks = document.querySelectorAll("nav.pages a");

        // .forEach(link => { ... }) — цикл, который по очереди берёт каждую найденную ссылку из списка и прогоняет через код внутри.
        navLinks.forEach(link => {
            
            // new URL(...) — объект JavaScript, который помогает правильно разобрать веб-адрес.
            // link.href — полный адрес ссылки, на которую ведет кнопка (например, "http://://site.comindex.php").
            // window.location.origin — базовый адрес текущего сайта (например, "http://site.com").
            // .pathname — вытаскивает из ссылки чистый путь без домена (превращает её в "/index.php"). Записываем в linkPath.
            const linkPath = new URL(link.href, window.location.origin).pathname;

            // Сравниваем: если путь страницы в браузере полностью совпал с путем, на который ведет текущая ссылка:
            if (currentPath === linkPath) {
                
                // link.classList.add("active") — добавляет этой конкретной ссылке CSS-класс "active".
                // Благодаря этому в CSS вы можете прописать стиль (например, подсветку цветом), и активная кнопка загорится.
                link.classList.add("active");
            }
        });
    });
    </script>
    
    <!-- header — структурный тег для шапки (верхней панели) сайта -->
    <header> 
        <!-- Ссылка-логотип, ведущая на главную страницу -->
        <!-- img — тег картинки. src указывает путь к файлу логотипа, alt — текст, если картинка не загрузится, width — ширина 50px -->
        <a href="index.php" class="logo"><img src="img/logo3.png" alt="" width="50px">KIRILABS</a>
        
        <!-- nav — тег для группы навигационных ссылок (меню) с классом 'pages' -->
        <nav class="pages">
            <!-- Каждая ссылка содержит декоративный значок  и PHP-вставку -->
            <!-- <?php echo $txt['...']; ?> — берет слово из языкового массива перевода и выводит его на экран вместо этого кода -->
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 178.882 183.417" width="22" height="22" style="fill: none; stroke: currentColor; stroke-linecap: round; stroke-linejoin: round; stroke-width: 12; vertical-align: center; margin-right: 6px;">
                <rect x="1" y="76.118" width="176.882" height="106.299"/>
                <rect x="64.496" y="122.039" width="49.889" height="60.378"/>
                <path d="M177.88 76.12 L89.44 1 L1 76.12 Z"/>
                </svg>
                <?php echo $txt['page_main']; ?>
            </a>
            <a href="modpacks.php">
                <svg xmlns="http://w3.org" viewBox="0 0 24 24" width="22" height="22" style="fill: none; stroke: currentColor; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5; vertical-align: center; margin-right: 6px;">
                <!-- 4 линии списка -->
                <line x1="9" y1="4" x2="21" y2="4"/>
                <line x1="9" y1="9.33" x2="21" y2="9.33"/>
                <line x1="9" y1="14.66" x2="21" y2="14.66"/>
                <line x1="9" y1="20" x2="21" y2="20"/>
                <!-- 4 точки списка -->
                <circle cx="4" cy="4" r="1" fill="currentColor"/>
                <circle cx="4" cy="9.33" r="1" fill="currentColor"/>
                <circle cx="4" cy="14.66" r="1" fill="currentColor"/>
                <circle cx="4" cy="20" r="1" fill="currentColor"/>
                </svg>
                <?php echo $txt['page_mod']; ?>
            </a>
            <!-- <a href="repassword.php">
                <svg xmlns="http://w3.org" viewBox="0 0 24 24" width="22" height="22" style="fill: none; stroke: currentColor; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5; vertical-align: center; margin-right: 6px;">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
                <?php echo $txt['page_pas']; ?>
            </a>     -->
            <a href="thelema.php">
                <svg xmlns="http://w3.org" viewBox="0 0 24 24" width="22" height="22" style="fill: none; stroke: currentColor; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5; vertical-align: center; margin-right: 6px;">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                </svg>
                <?php echo $txt['page_thelema']; ?>
            </a>
        </nav>
        
        <!-- div — универсальный блок-контейнер для кнопок управления в правой части шапки -->
        <div class="addbut">
            <!-- Ссылки для смены языка. При клике они добавляют параметр ?lang= в адресную строку, 
                 который улавливается и обрабатывается кодом в файле lang_init.php -->
            <a href="?lang=ru">RU</a> 
            <!-- <a href="?lang=en">EN</a>  -->
            <!-- <a href="?lang=fi">FI</a> -->
        </div>
    </header>