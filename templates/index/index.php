<div class="container index-hero">
    <div class="row">
        <div class="col-12">
            <img src="<?= INDEX_PATH ?>image/accueil/lisathelmar.jpeg" class="w-full h-auto" alt="Logo" class="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center text-xl font-bold mt-4">
            <p class="my-0">Bienvenue dans mon portfolio !</p>
            <br/>
            <p class="my-0">Je suis Lisa Thelmar, artiste en freelance.</p> 
            <p class="my-0">Ici, tu pourras découvrir mes illustrations, mes créations dans le domaine du graphisme et mes projets personnels.</p> 
            <br/>
            <p class="my-0">N’hésite pas à cliquer sur les différents projets pour découvrir mon processus créatif !</p>
            <br/>
            <p class="my-0">Bonne visite !</p> 
        </div>
    </div>
    <div class="row slider-row">
        <div class="col-12 h-full">
            <?php if (isset($slider)): ?>
                <?= $slider ?>
            <?php endif; ?>
        </div>
    </div>
</div>