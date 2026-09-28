<?php $body_class = 'nutr'; include 'inc/header.php'; ?>

<h1>Thelema Nutriscu's page</h1>

<main class="thelema-page">
    <div class="thelema-container">
        
        <!-- СЕКЦИЯ 1: Главный баннер и Профиль -->
        <section class="character-intro">
            <div class="char-image-box">
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
                    <p><strong>Происхождение:</strong> Ланко, Марс (Аристократичный дом Нутриску)</p>
                    <p class="char-lore">
                        Глава великого дома Нутриску и одна из легендарных Семи Шу, спасших Марс в древности. Несмотря на свое благородное происхождение, Телема абсолютно безразлична к светским интригам и политическим играм. Её кредо — беспрекословное подчинение окружающих. Она предпочитает доминировать, искусно управлять чужим страхом и подчинять тени своей воле, превращая любое сражение в безумный, но изящный банкет.
                    </p>
                </div>
            </div>
        </section>

        <!-- СЕКЦИЯ 2: Биография и роль в сюжете -->
        <section class="character-story">
            <h2 class="section-title">История и роль в сюжете</h2>
            <div class="story-layout">
                <div class="story-block">
                    <h4>Прошлое: Эпоха Ста Морей</h4>
                    <p>
                        Более тысячи лет назад, когда Марс столкнулся с катастрофой под названием «Бедствие Теней» (Shadow Calamity), Телема стала одной из Семи Шу — защитников планеты, запечатавших скверну. Получив титул <strong>Шу Наслаждения (Shu of Pleasure)</strong>, она использовала свои цепные клинки и абсолютную власть над теневыми слугами, чтобы удерживать порядок в Ланко. Её замок всегда славился пышными балами, где за маской вечного праздника скрывался жесткий контроль.
                    </p>
                </div>
                <div class="story-block">
                    <h4>События Part 2: Пробуждение в Оксии</h4>
                    <p>
                        После многовекового сна в гробу Манасвин Телема пробуждается в современном мире Марса благодаря действиям Искателя (Dreamseeker) и Сендины. Она обнаруживает, что мир изменился, а былые Тени снова рвутся на свободу. Не теряя времени, Телема быстро адаптируется к новым технологиям и берет под свое «покровительство» молодую команду, капризно, но верно ведя их сквозь интриги фальшивого мегаполиса к разгадке тайн Первородного Бедствия.
                    </p>
                </div>
            </div>
        </section>

        <!-- СЕКЦИЯ 3: Боевые Навыки и Атаки -->
        <section class="character-skills">
            <h2 class="section-title">Боевые Навыки</h2>
            
            <div class="skills-grid">
                <!-- Навык 1 -->
                <div class="skill-card">
                    <div class="skill-header">
                        <span class="skill-type">Базовая Атака</span>
                        <h4>Banquet Invite: Be Seated</h4>
                    </div>
                    <p>Серия изящных, стремительных ударов цепными клинками на средней дистанции. Наносит мощный ледяной урон (Ice DMG). Каждый успешный удар третьей и зацикленной четвертой атаки генерирует заряды особой шкалы <strong>Banquet Enjoyment</strong> (максимум 6 единиц).</p>
                </div>

                <!-- Навык 2 -->
                <div class="skill-card">
                    <div class="skill-header">
                        <span class="skill-type">Комбо-Атака</span>
                        <h4>Stay Seated: As the Host Commands</h4>
                    </div>
                    <p>Телема мгновенно взмывает в воздух или пикирует на землю, совершая круговые удары. При накоплении 6 зарядов шкалы удержание кнопки атаки активирует мощнейший прием <em>Moment of Indulgence</em>, который стягивает врагов в эпицентр и замораживает их.</p>
                </div>

                <!-- Навык 3 -->
                <div class="skill-card active-skill">
                    <div class="skill-header">
                        <span class="skill-type">Ультимейт (Взрыв)</span>
                        <h4>Liquor: A Toast to Everyone</h4>
                    </div>
                    <p>Телема садится на свой призрачный трон, пока её тени устраивают смертоносный танец на поле боя, нанося колоссальный Ice DMG по огромной области. Активация навыка мгновенно восстанавливает все заряды Banquet Enjoyment, сбрасывает кулдаун уклонения и накладывает бафф на команду.</p>
                </div>

                <!-- Навык 4 -->
                <div class="skill-card">
                    <div class="skill-header">
                        <span class="skill-type">Астральное Кольцо</span>
                        <h4>Wheel of Destiny</h4>
                    </div>
                    <p>Активирует специализацию Астрального кольца «Колесо Судьбы». При входе в режим Stellar Outburst Телема тратит накопленную энергию, чтобы призвать на поле боя фантомов союзных валькирий, которые проводят синхронные атаки и дают Телеме постоянный статус гиперброни.</p>
                </div>
            </div>
        </section>

        <!-- СЕКЦИЯ 4: Рекомендуемая Экипировка (Стигмы и Оружие) -->
        <section class="character-gear">
            <h2 class="section-title">Экипировка и Сигнатурный сет</h2>
            <div class="gear-wrapper">
                <div class="weapon-display">
                    <div class="gear-badge">Спецоружие</div>
                    <h4>Banquet Rose: Faux Crown</h4>
                    <p>Уникальные Chained Blades, созданные специально под тайминги Телемы. Оружие увеличивает общий Ice DMG персонажа на 25%. При использовании навыка оружия активирует режим быстрого сближения с целью и дает пассивный прирост к восстановлению очков Астрального Кольца.</p>
                </div>
                
                <div class="stigmata-display">
                    <div class="gear-badge">Набор Стигм: Splendors of Amber</div>
                    <div class="stigmata-grid">
                        <div class="stigma-slot">
                            <h5>Thelema: Nutriscu (T)</h5>
                            <p>Увеличивает общий урон от ледяных стихийных атак на 20% и повышает скорость атаки при уровне здоровья выше 80%.</p>
                        </div>
                        <div class="stigma-slot">
                            <h5>Thelema: Nutriscu (M)</h5>
                            <p>Усиливает урон от комбо-атак и снижает получаемый Телемой урон от врагов, находящихся под действием контроля (заморозка, стяжка).</p>
                        </div>
                        <div class="stigma-slot">
                            <h5>Thelema: Nutriscu (B)</h5>
                            <p>Накладывает на всю арену эффект «Пиршество Теней». Враги получают на 15% больше урона от всех атак Астрального Кольца.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- СЕКЦИЯ 5: Тактика боя и Ротация -->
        <section class="character-tactics">
            <h2 class="section-title">Тактика боя и ротация</h2>
            <div class="tactics-container">
                <div class="tactic-card">
                    <h5>Цикл накопления зарядов</h5>
                    <p>Основной геймплей Телемы строится на быстром чередовании воздушных и наземных атак. Используйте навык оружия, чтобы мгновенно подлететь к врагу, проведите базовую серию до 6 очков Banquet Enjoyment, а затем высвободите комбо-атаку. Повторяйте до накопления шкалы ульты.</p>
                </div>
                <div class="tactic-card">
                    <h5>Использование Астрального Кольца</h5>
                    <p>Не активируйте Stellar Outburst сразу. Сначала переключитесь на саппортов (например, Сендину или Корали), наложите дебаффы на врагов, наберите энергию кольца и только потом переключайтесь на Телему, нажимая кнопку Астрального взрыва для сокрушительного прокаста фантомов.</p>
                </div>
            </div>
        </section>

                <!-- СЕКЦИЯ 6: Гардероб / Костюмы (Полный набор из 4 обликов) -->
        <section class="character-costumes">
            <h2 class="section-title">Доступные Костюмы</h2>
            <div class="costumes-grid">
                <div class="costume-card">
                    <h4>Mad Pleasure: Shadowbringer</h4>
                    <span class="costume-type font-green">Базовый облик</span>
                    <p>Традиционное готическое платье багрово-черных тонов, подчеркивающее её статус властной госпожи дома Нутриску.</p>
                </div>
                <div class="costume-card">
                    <h4>Gentle is the Night</h4>
                    <span class="costume-type font-purple">Вечерний наряд</span>
                    <p>Элегантное темное платье для светских приемов в Ланко, дополненное изысканными кружевами и полупрозрачной накидкой.</p>
                </div>
                <div class="costume-card">
                    <h4>Pact Absolute</h4>
                    <span class="costume-type font-purple">Особый контракт</span>
                    <p>Более строгий, геометричный и футуристичный костюм, отражающий её готовность брать под контроль любые внешние угрозы.</p>
                </div>
                <div class="costume-card">
                    <h4>Roseate Summer</h4>
                    <span class="costume-type font-purple">Летний облик</span>
                    <p>Пляжный купальный наряд, выпущенный для жаркого сезона, сохраняющий при этом фирменную утонченность и царственную осанку Телемы.</p>
                </div>
            </div>
        </section>

        
    </div>
</main>

<?php include 'inc/footer.php'; ?>