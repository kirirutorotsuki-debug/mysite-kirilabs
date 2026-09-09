<?php include 'inc/header.php';?>

<main class="mainpage">
    <!-- название страницы -->
    <h1>Main page laboratory advenchiements kirilabs</h1>
    <!-- щит встречи -->
    <section class="hero">
        <h2><?php echo $txt['welcome']; ?></h2>
        <div class="purpleblock">
            <p class="textpurpleblock"><?php echo $txt['sub_welcome']; ?></p>
            <img src="img/Thelema_Sonque_NoGlow.png" alt="" class="imgpurpleblock">
        </div>
    </section>
    <!-- секция с мини вкладками и описанием -->
    <section class="pagessi">
        <p class="infopagessi"><?php echo $txt['ipsi']; ?></p>
        <div class="si modpacks">
            <img src="img/sc71.png" alt="" class="pagessiimg">
            <div class="pagessitext">
                <p class="name"><?php echo $txt['mname']; ?></p>
                <p class="description"><?php echo $txt['mdes']; ?></p>
            </div>
            <!-- кнопка свгшка -->
            <a href="modpacks.php" class="pagessibutton"><svg width="100" height="250" viewBox="0 0 100 250" fill="none" xmlns="http://w3.org" class="card-arrow-svg">
            <path d="M4 90 H14 L49 125 L14 160 H4 L39 125 Z" fill="#000000" class="arrow-segment"/>
            <path d="M26 90 H36 L71 125 L36 160 H26 L61 125 Z" fill="#000000" class="arrow-segment"/>
            <path d="M48 90 H58 L93 125 L58 160 H48 L83 125 Z" fill="#000000" class="arrow-segment"/>
            </svg>
            </a>
        </div>
        <div class="si thelema">
            <img src="img/3_12_ThumbsUp.png" alt="" class="pagessiimg">
            <div class="pagessitext">
                <p class="name"><?php echo $txt['tname']; ?></p>
                <p class="description"><?php echo $txt['tdes']; ?></p>
            </div>
            <!-- кнопка свгшка -->
            <a href="thelema.php" class="pagessibutton"><svg width="100" height="250" viewBox="0 0 100 250" fill="none" xmlns="http://w3.org" class="card-arrow-svg">
            <path d="M4 90 H14 L49 125 L14 160 H4 L39 125 Z" fill="#000000" class="arrow-segment"/>
            <path d="M26 90 H36 L71 125 L36 160 H26 L61 125 Z" fill="#000000" class="arrow-segment"/>
            <path d="M48 90 H58 L93 125 L58 160 H48 L83 125 Z" fill="#000000" class="arrow-segment"/>
            </svg>
            </a>
        </div>
        <div class="si game">
            <img src="" alt="" class="pagessiimg">
            <div class="pagessitext">
                <p class="name"><?php echo $txt['gname']; ?></p>
                <p class="description"><?php echo $txt['gdes']; ?></p>
            </div>
            <!-- кнопка свгшка -->
            <a href="" class="pagessibutton"><svg width="100" height="250" viewBox="0 0 100 250" fill="none" xmlns="http://w3.org" class="card-arrow-svg">
            <path d="M4 90 H14 L49 125 L14 160 H4 L39 125 Z" fill="#000000" class="arrow-segment"/>
            <path d="M26 90 H36 L71 125 L36 160 H26 L61 125 Z" fill="#000000" class="arrow-segment"/>
            <path d="M48 90 H58 L93 125 L58 160 H48 L83 125 Z" fill="#000000" class="arrow-segment"/>
            </svg>
            </a>
        </div>
    </section>
</main>

<?php include 'inc/footer.php';?>
