<?php
$theme = wp_get_theme();
?>
<div class="container pt-3">
    <div class="row">
        <div class="col-sm-8 bg-light p-3">
            <div class="theme_body_head">
                <?php 
                    echo '<h2 class="mb-3">General Settings</h2>';
                    echo '<h4 class="py-3 pb-5">Add your <strong>Header Area</strong> information:</h4>';
                ?>
            </div>

            <div id="theme_option_body">
                <div class="main_head_area">
                    <form action="options.php" method="post">
                        <?php wp_nonce_field('update-options')?>
                        <div class="row">
                            <div class="col-12 pb-3">
                                <label for="address-info" name="address-info"><strong>Address Info:</strong></label><br>
                                <input class="info-width" type="text" name="address-info" value="<?php echo get_option('address-info')?>"></input>
                            </div>
                            <div class="col-12 pb-3">
                                <label for="email-info" name="email-info"><strong>Email Info:</strong></label><br>
                                <input class="info-width" type="text" name="email-info" value="<?php echo get_option('email-info')?>"></input>
                            </div>
                            <div class="col-12 pb-3">
                                <label for="phone-info" name="phone-info"><strong>Phone Number:</strong></label><br>
                                <input class="info-width" type="text" name="phone-info" value="<?php echo get_option('phone-info')?>"></input>
                            </div>
                        </div>
                        
                        <!--To secure Database-->
                        <input type="hidden" name="action" value="update"></input>
                        <input type="hidden" name="page_options" value="address-info, email-info, phone-info" placeholder="Enter Your Address"></input>
                        <input class="btn btn-primary text-white" type="submit" name="submit" value="<?php _e('Save Info','aj-square')?>"></input>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-sm-4 p-3">
            <h2 class="text-center pb-3">About Author</h2>
            <div class="ajs-author-box">
                <div class="ajs-author-img"></div>
                <p>
                    I'm <strong><a href="https://jahidshah.com/" target="_blank" rel="noopener noreferrer">Jahid Shah</a></strong>,
                    a front-end developer with specialized skills in WordPress theme development and WordPress Security.
                    I’m passionate about creating error-free, secure websites and achieving 100% client satisfaction.
                    Solving real-world problems is my passion.
                </p>
                <br>
                <div>
                    <p>
                        If you found this plugin helpful, you can support the developer via <a href="https://www.buymeacoffee.com/jahidshah" target="_blank" rel="noopener noreferrer">Buy Me a Coffee</a>.
                    </p>
                </div>
        </div>
    </div>
</div>
<?php