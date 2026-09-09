<?php include 'inc/header.php';?>
<link rel="stylesheet" href="css/howto.css?v=1">

<main class="howto-page">
    <section class="howto-hero">
        <h1><?php echo $txt['howto_title']; ?></h1>
        <p><?php echo $txt['howto_subtitle']; ?></p>
    </section>

    <div class="guides-container">
        <!-- БЛОК 1: PRISM LAUNCHER -->
        <section class="guide-section">
            <h2 class="launcher-title prism-color">❖ <?php echo $txt['prism_title']; ?></h2>
            
            <div class="steps-list">
                <div class="step-card">
                    <span class="step-number">01</span>
                    <p><?php echo $txt['prism_step1']; ?></p>
                </div>
                
                <div class="step-card">
                    <span class="step-number">02</span>
                    <p><?php echo $txt['prism_step2']; ?></p>
                </div>
                
                <div class="step-card">
                    <span class="step-number">03</span>
                    <p><?php echo $txt['prism_step3']; ?></p>
                </div>

                <div class="step-card">
                    <span class="step-number">04</span>
                    <p><?php echo $txt['prism_step4']; ?></p>
                </div>
            </div>
        </section>

        <!-- БЛОК 2: TL LEGACY -->
        <section class="guide-section">
            <h2 class="launcher-title tl-color">▤ <?php echo $txt['tl_title']; ?></h2>
            
            <div class="steps-list">
                <div class="step-card">
                    <span class="step-number">01</span>
                    <p><?php echo $txt['tl_step1']; ?></p>
                </div>
                
                <div class="step-card">
                    <span class="step-number">02</span>
                    <p><?php echo $txt['tl_step2']; ?></p>
                </div>
                
                <div class="step-card">
                    <span class="step-number">03</span>
                    <p><?php echo $txt['tl_step3']; ?></p>
                </div>

                <div class="step-card">
                    <span class="step-number">04</span>
                    <p><?php echo $txt['tl_step4']; ?></p>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include 'inc/footer.php';?>
