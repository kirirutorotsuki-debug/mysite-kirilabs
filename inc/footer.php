<!-- footer — структурный тег для подвала (нижней панели) сайта. Класс "footer" используется для стилизации в CSS -->
<footer class="footer">
    
    <!-- Первая колонка: блок с классами "footerbox1" и общего для колонок "footertotal" -->
    <div class="footerbox1 footertotal">
        <!-- Название проекта. Класс "nameproject" делает цвет бирюзовым, а "namecolumn" задает размер 24px -->
        <p class="namecolumn nameproject">KIRILABS</p>
        
        <!-- Вывод знака копирайта, строки перевода (обычно "Все права защищены") и года -->
        <p class="copyright">&copy; <?php echo $txt['copyright']?> 2026</p>
        
        <!-- Блок дисклеймера об авторских правах Mojang / Microsoft. Слева у него CSS-линия -->
        <p class="disclaimer"><?php echo $txt['disclaimer']?></p>
        
        <!-- Блок с описанием целей создания сайта (учебный/тестовый режим) -->
        <p class="disclaimertotal"><?php echo $txt['disclaimertotal']?></p>
        <!-- Версия сайта на данный момент -->
        <p class="version"><?php echo $txt['version']?> 0.92</p>
    </div>
    
    <!-- Вторая колонка: контакты и социальные сети -->
    <div class="footerbox2 footertotal">
        <!-- Заголовок колонки — выводит переведенное слово «Связаться» -->
        <p class="namecolumn "><?php echo $txt['help_call']?></p>
        
        <!-- Контейнер-грид, который выстраивает кнопки соцсетей в две колонки -->
        <div class="footer_social">
            <!-- Прямая ссылка на QR-код или чат в корейском мессенджере KakaoTalk -->
            <a href="http://qr.kakao.com/talk/XDSKb_E.BVcQsRe0GAL7IldtLSQ-" class="help_a">KakaoChat</a>
            
            <!-- Ссылка с протоколом mailto:. При клике у пользователя автоматически откроется почтовая программа для отправки письма -->
            <a href="mailto:kirirutorotsuki@gmail.com" class="help_a">Gmail</a>
            <!-- Ссылка с телеграммом -->
            <a href="https://t.me/Kirikaze_f2" class="help_a">Telegram</a>
            
            <!-- Ссылка на ваш профиль в социальной сети ВКонтакте -->
            <a href="https://vk.com/kirikaze" class="help_a">VK</a>
            
            <!-- Вечная инвайт-ссылка на ваш сервер в Discord -->
            <a href="https://discord.gg/F5AFHgYThy" class="help_a">Discord</a>
            
            <!-- Ссылка на ваш профиль на платформе Max -->
            <a href="https://max.ru/u/f9LHodD0cOLnbsE-4Vr8GsofdQ7sguJylISjypj806fSyKhz1kSGUCSq398" class="help_a">Max</a>
        </div>
    </div>
    
    <!-- Третья колонка: полезные ссылки и лаунчеры -->
    <div class="footerbox3 footertotal">
        <!-- Заголовок «Частые вопросы» из языкового массива -->
        <p class="namecolumn"><?php echo $txt['questions']?></p>
        
        <!-- Ссылка на внутреннюю страницу сайта с инструкцией по установке модов -->
        <a href="howto.php" class="questions"><?php echo $txt['how_to_install']?></a>
        
        <!-- Текст фиолетового цвета «Рекомендуемые лаунчеры» -->
        <p class="rec_launch"><?php echo $txt['rec_launch']?></p>
        
        <!-- Контейнер с линией слева, объединяющий ссылки на лаунчеры -->
        <div class="column_que">
            <!-- Официальный сайт Prism Launcher -->
            <a href="https://prismlauncher.org/" class="questions"><?php echo $txt['launch1']?></a>
            <!-- Официальный сайт лаунчера TL Legacy -->
            <a href="https://legacylauncher.ru/en" class="questions"><?php echo $txt['launch2']?></a>
        </div>
        
        <!-- Текст фиолетового цвета «Рекомендуемые хосты» -->
        <p class="rec_vpn"><?php echo $txt['rec_vpn']?></p>
        
        <!-- Контейнер с линией слева, объединяющий ссылки на VPN-программы -->
        <div class="column_que">
            <!-- Официальный сайт программы LogMeIn Hamachi -->
            <a href="https://www.vpn.net/" class="questions"><?php echo $txt['hamachi']?></a>
            <!-- Официальный сайт программы Radmin VPN -->
            <a href="https://www.radmin-vpn.com/" class="questions"><?php echo $txt['radmin']?></a>
        </div>
    </div>
</footer>
</body>
</html>
