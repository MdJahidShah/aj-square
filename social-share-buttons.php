<div class="row social-share">
    <div class="col-sm-4 d-flex justify-content-center align-items-center" style="height: 100%;">
        <h4 class="text-right">Share this post:</h4>
    </div>
    <div class="col-sm-8 d-flex justify-content-left align-items-center" style="height: 18vh;">
        <!-- Facebook Share Button -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="btn-facebook">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" width="30" alt="Facebook">
        </a>

        <!-- Twitter Share Button -->
        <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank" class="btn-twitter">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/X_logo.jpg/600px-X_logo.jpg" width="30" alt="X">
        </a>

        <!-- LinkedIn Share Button -->
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" class="btn-linkedin">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" width="30" alt="LinkedIn">
        </a>

        <!-- WhatsApp Share Button -->
        <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?> <?php the_permalink(); ?>" target="_blank" class="btn-whatsapp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="30" alt="WhatsApp">
        </a>

        <!-- Email Share Button -->
        <a href="mailto:?subject=<?php the_title(); ?>&body=Check out this article: <?php the_permalink(); ?>" target="_blank" class="btn-email">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Mail_%28iOS%29.svg" width="30" alt="Email">
        </a>
    </div>
</div>

    <style>
        .social-share {
            background: #cfcfcf;
            border-radius: 5px;
        }

        .social-share h4 {
            font-size: 20px;
        }

        .social-share a {
            margin-right: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .social-share img {
            width: 30px;
            height: auto;
        }
        .social-share img:hover {
            box-shadow: 2px 2px 10px #646262;
            border-radius: 5px;
        }
    </style>