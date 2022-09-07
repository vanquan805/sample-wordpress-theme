<footer class="blog-footer pt-5 pb-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 mb-5">
                <?php if (is_active_sidebar('first-footer-sidebar')) { ?>
                    <?php dynamic_sidebar('first-footer-sidebar'); ?>
                <?php } ?>

                <p class="font-size-13 text-muted m-0">© 2022 Designed by <a target="_blank" href="https://lienlau.com">lienlau.com</a></p>
            </div>
            <div class="col-2 d-none d-lg-block"></div>
            <div class="col-12 col-lg-7">
                <div class="row">
                    <?php if (is_active_sidebar('footer-sidebar')) { ?>
                        <?php dynamic_sidebar('footer-sidebar'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>