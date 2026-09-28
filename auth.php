<?php 
$body_class = 'main'; 
include 'inc/header.php'; 
?>

<main class="thelema-page auth-main">
    <div class="thelema-container auth-container">
        
        <!-- Карточка авторизации / регистрации -->
        <div class="profile-card auth-card">
            
            <!-- Вкладки переключения формы -->
            <div class="auth-tabs">
                <button class="auth-tab-btn active" onclick="switchAuthMode('login')">Вход</button>
                <button class="auth-tab-btn" onclick="switchAuthMode('register')">Регистрация</button>
            </div>

            <!-- ФОРМА ВХОДА -->
            <form id="login-form" class="auth-form" action="" method="POST">
                <h3 id="form-title">Войти в аккаунт</h3>
                
                <div class="form-group">
                    <label for="login-username">Имя пользователя / Email</label>
                    <input type="text" id="login-username" name="username" placeholder="Введите ваш логин" required>
                </div>
                
                <div class="form-group">
                    <label for="login-password">Пароль</label>
                    <input type="password" id="login-password" name="password" placeholder="••••••••" required>
                </div>

                <button type="submit" class="open-modal auth-submit-btn">Войти на банкет</button>
            </form>

            <!-- ФОРМА РЕГИСТРАЦИИ (скрыта по умолчанию) -->
            <form id="register-form" class="auth-form hidden" action="" method="POST">
                <h3>Создать профиль</h3>
                
                <div class="form-group">
                    <label for="reg-username">Имя пользователя</label>
                    <input type="text" id="reg-username" name="username" placeholder="Придумайте логин" required>
                </div>

                <div class="form-group">
                    <label for="reg-email">Электронная почта</label>
                    <input type="email" id="reg-email" name="email" placeholder="example@mars.com" required>
                </div>
                
                <div class="form-group">
                    <label for="reg-password">Пароль</label>
                    <input type="password" id="reg-password" name="password" placeholder="Минимум 6 символов" required>
                </div>

                <div class="form-group">
                    <label for="reg-confirm">Подтвердите пароль</label>
                    <input type="password" id="reg-confirm" name="password_confirm" placeholder="••••••••" required>
                </div>

                <button type="submit" class="open-modal auth-submit-btn register-color">Присягнуть тени</button>
            </form>

        </div>

    </div>
</main>

<!-- Скрипт для интерактивного переключения без перезагрузки -->
<script>
function switchAuthMode(mode) {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const tabs = document.querySelectorAll('.auth-tab-btn');

    if (mode === 'login') {
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
        tabs[0].classList.add('active');
        tabs[1].classList.remove('active');
    } else {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
        tabs[0].classList.remove('active');
        tabs[1].classList.add('active');
    }
}
</script>

<?php include 'inc/footer.php'; ?>
