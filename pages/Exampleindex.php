<?php include 'lang_init.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<link rel="stylesheet" href="style.css">
<head>
    <title><?php echo $txt['title_main']; ?></title>
    <!-- Скрипт для темной темы из прошлого ответа вставляем сюда -->
</head>
<body>

    <!-- Навигация и переключатель языков -->
    <header>
        <a href="?lang=ru">RU</a> | <a href="?lang=en">EN</a>
    </header>

    <main>
        <h1><?php echo $txt['welcome']; ?></h1>
        <button><?php echo $txt['contact_btn']; ?></button>
    </main>

</body>
</html>
