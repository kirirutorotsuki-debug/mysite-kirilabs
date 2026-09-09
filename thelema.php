<?php include 'inc/header.php';?>
<h1>Thelema Nutriscu's page</h1>
<main class="thelema-page">
    <div class="thelema-container">
        
        <!-- Секция 1: Главный баннер и Профиль -->
        <section class="character-intro">
            <div class="char-image-box">
                <!-- Вставьте путь к вашей картинке Телемы -->
                <img src="img/thelema.png" alt="Thelema Nutriscu" class="char-img">
            </div>
            
            <div class="char-profile">
                <span class="battlesuit-title">S-Rank • MECH • Ice DPS</span>
                <h1 class="char-name">Thelema <span>Nutriscu</span></h1>
                <p class="char-title-alias">Mad Pleasure: Shadowbringer</p>
                
                <div class="profile-card">
                    <h3>Досье Персонажа</h3>
                    <p><strong>Организация:</strong> Семь Шу (Shu of Pleasure)</p>
                    <p><strong>Оружие:</strong> Цепные Клинки (Chained Blades)</p>
                    <p><strong>Происхождение:</strong> Марс, аристократичная семья Нутриску</p>
                    <p class="char-lore">
                        Глава семьи Нутриску и одна из Семи Шу. Несмотря на благородное происхождение, Телема безразлична к политическим играм. Она предпочитает доминировать, управлять страхом и подчинять тени своей воле, превращая поле боя в безумный банкет.
                    </p>
                </div>
            </div>
        </section>

        <!-- Секция 2: Боевые Навыки и Геймплей -->
        <section class="character-skills">
            <h2 class="section-title">Боевые Навыки</h2>
            
            <div class="skills-grid">
                <!-- Навык 1 -->
                <div class="skill-card">
                    <div class="skill-header">
                        <span class="skill-type">Базовая Атака</span>
                        <h4>Banquet Invite: Be Seated</h4>
                    </div>
                    <p>Серия изящных ударов цепными клинками. Наносит мощный ледяной урон (Ice DMG) и заполняет уникальную шкалу <strong>Banquet Enjoyment</strong> до 6 единиц.</p>
                </div>

                <!-- Навык 2 -->
                <div class="skill-card">
                    <div class="skill-header">
                        <span class="skill-type">Комбо-Атака</span>
                        <h4>Stay Seated: As the Host Commands</h4>
                    </div>
                    <p>Позволяет совершать как наземные, так и воздушные атаки. При максимальном заполнении шкалы активирует <em>Moment of Indulgence</em>, который принудительно стягивает врагов в центр.</p>
                </div>

                <!-- Навык 3 -->
                <div class="skill-card active-skill">
                    <div class="skill-header">
                        <span class="skill-type">Ультимейт (Взрыв)</span>
                        <h4>Liquor: A Toast to Everyone</h4>
                    </div>
                    <p>Телема устраивает смертоносный танец теней, нанося сокрушительный ледяной урон по области. Навык полностью обновляет кулдауны уклонения и усиливает атаки отряда.</p>
                </div>

                <!-- Навык 4 -->
                <div class="skill-card">
                    <div class="skill-header">
                        <span class="skill-type">Астральное Кольцо</span>
                        <h4>Wheel of Destiny</h4>
                    </div>
                    <p>Активирует специализацию Астрального кольца «Колесо Судьбы». Призывает на поле боя фантомов других валькирий для совершения синергетических поддерживающих атак.</p>
                </div>
            </div>
        </section>
        
    </div>
</main>
<?php include 'inc/footer.php';?>