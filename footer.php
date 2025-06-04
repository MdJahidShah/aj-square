
        <!--Footer Section-->
        <footer class="container-fluid footer-section pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php dynamic_sidebar( 'footer-1' )?>
                    </div>
                </div>
            </div>
            <hr style="border-color: #fff;">
            <!-- Credit Footer Section -->
            <section class="container-fluid pt-1" id="credit-footer">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 d-flex align-items-start align-items-center">
                                <p>
                                    <?php echo esc_html(
                                        get_theme_mod('ajs_copyright_footer_text', sprintf(__('© %s AJ Square. All rights reserved.', 'aj-square'), date('Y')))
                                    ); ?>
                                </p>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-end align-items-start">
                                <div class="footer-social-icons">
                                    <?php
                                        $social_links = [
                                            'facebook'  => get_theme_mod('facebook_url', '#'),
                                            'instagram' => get_theme_mod('instagram_url', '#'),
                                            'twitter'   => get_theme_mod('twitter_url', '#'),
                                        ];

                                        foreach ($social_links as $platform => $url) {
                                            if (!empty($url) && $url !== '#') {
                                                echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" class="social-icon ' . esc_attr($platform) . '"><i class="bi bi-' . esc_attr($platform) . '"></i></a>';
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
