<?php include 'inc/header.php';?>
<h1>Password generater page</h1>
<main class="password-page">
    <div class="password-container">
        
        <!-- Заголовок страницы -->
        <div class="page-header">
            <h1 class="page-title">Генератор <span>Паролей</span></h1>
            <p class="page-subtitle">Создайте надежный и безопасный пароль для защиты вашего аккаунта</p>
        </div>

        <!-- Основной блок генератора -->
        <div class="generator-box">
            
            <!-- Поле вывода пароля -->
            <div class="password-display-wrapper">
                <input type="text" id="password-output" readonly placeholder="Нажмите «Сгенерировать»">
                <button id="btn-copy" title="Копировать в буфер обмена">Копировать</button>
            </div>

            <!-- Настройки генерации -->
            <div class="generator-settings">
                
                <!-- Ползунок длины -->
                <div class="setting-item length-setting">
                    <label for="password-length">Длина пароля: <span id="length-value">12</span></label>
                    <input type="range" id="password-length" min="6" max="32" value="12">
                </div>

                <!-- Чекбоксы параметров -->
                <div class="checkbox-group">
                    <label class="checkbox-container">
                        <input type="checkbox" id="include-uppercase" checked>
                        <span class="custom-checkbox"></span>
                        Прописные буквы (A-Z)
                    </label>

                    <label class="checkbox-container">
                        <input type="checkbox" id="include-lowercase" checked>
                        <span class="custom-checkbox"></span>
                        Строчные буквы (a-z)
                    </label>

                    <label class="checkbox-container">
                        <input type="checkbox" id="include-numbers" checked>
                        <span class="custom-checkbox"></span>
                        Цифры (0-9)
                    </label>

                    <label class="checkbox-container">
                        <input type="checkbox" id="include-symbols">
                        <span class="custom-checkbox"></span>
                        Спецсимволы (!@#$%^&*)
                    </label>
                </div>

            </div>

            <!-- Кнопка запуска -->
            <button id="btn-generate">Сгенерировать пароль</button>

        </div>

    </div>
</main>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const lengthInput = document.getElementById("password-length");
    const lengthValue = document.getElementById("length-value");
    const passwordOutput = document.getElementById("password-output");
    const generateBtn = document.getElementById("btn-generate");
    const copyBtn = document.getElementById("btn-copy");

    const uppercaseCb = document.getElementById("include-uppercase");
    const lowercaseCb = document.getElementById("include-lowercase");
    const numbersCb = document.getElementById("include-numbers");
    const symbolsCb = document.getElementById("include-symbols");

    // Обновление цифры длины при перетаскивании ползунка
    if(lengthInput) {
        lengthInput.addEventListener("input", (e) => {
            lengthValue.textContent = e.target.value;
        });
    }

    // Функция генерации
    if(generateBtn) {
        generateBtn.addEventListener("click", () => {
            const length = +lengthInput.value;
            let charPool = "";

            if (uppercaseCb.checked) charPool += "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            if (lowercaseCb.checked) charPool += "abcdefghijklmnopqrstuvwxyz";
            if (numbersCb.checked) charPool += "0123456789";
            if (symbolsCb.checked) charPool += "!@#$%^&*()_+~`|}{[]:;?><,./-=";

            if (charPool === "") {
                passwordOutput.value = "Выберите параметры!";
                return;
            }

            let generatedPassword = "";
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * charPool.length);
                generatedPassword += charPool[randomIndex];
            }

            passwordOutput.value = generatedPassword;
        });
    }

    // Функция копирования
    if(copyBtn) {
        copyBtn.addEventListener("click", () => {
            if (!passwordOutput.value || passwordOutput.value === "Выберите параметры!") return;
            
            navigator.clipboard.writeText(passwordOutput.value).then(() => {
                const originalText = copyBtn.textContent;
                copyBtn.textContent = "Скопировано!";
                copyBtn.style.borderColor = "#00ffcc";
                copyBtn.style.color = "#00ffcc";
                
                setTimeout(() => {
                    copyBtn.textContent = originalText;
                    copyBtn.style.borderColor = "rgb(170, 0, 255)";
                    copyBtn.style.color = "#ffffff";
                }, 1500);
            });
        });
    }
});

</script>
<?php include 'inc/footer.php';?>