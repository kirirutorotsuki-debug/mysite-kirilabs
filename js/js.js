function setTheme(themeName) {
    document.documentElement.setAttribute('data-theme', themeName);
    localStorage.setItem('theme', themeName);
}

// Переключение темы
function toggleTheme() {
    const currentTheme = localStorage.getItem('theme') || 'light';
    if (currentTheme === 'dark') {
        setTheme('light');
    } else {
        setTheme('dark');
    }
}

// Инициализация при загрузке страницы
(function () {
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);
})();
