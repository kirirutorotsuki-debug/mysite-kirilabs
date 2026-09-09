<?php include 'inc/header.php';?>

<main class="homepage">
    <!-- Секция 1: Главный баннер (Hero Section) -->
    <section class="hero">
        <h1 class="heroh2"><?php echo $txt['welcome']; ?></h1>
        <h2 class="heroh3"><?php echo $txt['sub_welcome']; ?></h2>
        
        <div class="hero-banner-container">
            <img class="heroimg" src="img/sc71.png" alt="banner">
        </div>

        <!-- Крупная неоновая кнопка перехода к сборкам -->
        <a href="modpacks.php" class="btn-cta">⚡ Смотреть сборки</a>
    </section>

    <!-- Секция 2: Преимущества (Features Section) -->
    <section class="features">
        <div class="feature-card">
            <div class="feature-icon">🚀</div>
            <h3>Высокий FPS</h3>
            <p>Тщательная оптимизация модов и конфигураций для стабильной игры без лагов даже на слабых ПК.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🛠️</div>
            <h3>Стабильность</h3>
            <p>Сборки проходят жесткие тесты на совместимость, исключая вылеты, баги и конфликты модов.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">📜</div>
            <h3>Уникальный опыт</h3>
            <p>Продуманный баланс, настроенные квесты и измененные рецепты крафтов для интересного прохождения.</p>
        </div>
    </section>

    <!-- Секция 3: Быстрый старт (How to Start) -->
    <section class="quick-start">
        <h2 class="section-title">Как начать играть?</h2>
        <div class="steps-container">
            <div class="step">
                <span class="step-num">01</span>
                <p>Скачайте один из рекомендуемых лаунчеров в подвале сайта.</p>
            </div>
            <div class="step">
                <span class="step-num">02</span>
                <p>Перейдите во вкладку «Сборки» и выберите понравившийся модпак.</p>
            </div>
            <div class="step">
                <span class="step-num">03</span>
                <p>Скачайте архив по кнопке, установите в лаунчер и наслаждайтесь игрой!</p>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php';?>
