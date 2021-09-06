<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
    <footer>
        <div class="copy" id="copyright"></div>
    </footer>
    <script src="<?php $this->options->themeUrl('DARLING.js')?>"></script>
    <?php $this -> options -> custom_script(); ?>
    <?php $this -> footer(); ?>
</body>
</html>