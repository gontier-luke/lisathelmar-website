    <script type="text/javascript">
        const siteRoot = '<?= $siteRoot;?>';
        const $templatesRoot = '<?= $templatesRoot;?>';
    </script>
    <?php foreach ($scripts as $script) { ?>
        <script src="<?= $script ?>"></script>
    <?php } ?>
    <div class="header-menu container-fluid">
        <div class="pages">
            <?php foreach ($menuLinks as $name => $link) { ?>
                <a class="pages-btn" href="<?= $link ?>">
                    <div>
                        <?= $name ?>
                    </div>
                 </a>
            <?php } ?>
        </div>
        <div class="pages pages-extra">
            <?php foreach ($menuLinksSeparates as $name => $link) { ?>
                <a class="pages-btn" href="<?= $link ?>">
                    <div>
                        <?= $name ?>
                    </div>
                 </a>
            <?php } ?>
        </div>
    </div>