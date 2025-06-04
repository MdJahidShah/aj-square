<?php
$theme = wp_get_theme();
?>
<div class="container pt-3">
    <?php echo '<h2 class="mb-3 text-center bg-light py-3">Theme Documentation</h2>';?>
    <div class="row">
        <div class="col-sm-8 documentation-text bg-light p-3">
            <?php 
                echo "<h3>Theme Name: " . $theme->get('Name') . "</h3>";
            ?>
            <p>AJ Square is a lightweight, fast, and fully customizable WordPress theme perfect for blogs, personal portfolios, and modern websites. It’s built with responsiveness and clean design in mind and works seamlessly with Gutenberg and popular page builders like Elementor. AJ Square is beginner-friendly and optimized for performance and SEO, making it ideal for both new users and experienced developers.</p>
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