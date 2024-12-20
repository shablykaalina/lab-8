<div class="toys1">
        <div class="slider1">
            <h2>Осьминог перевертыш</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img4.JPG" alt="Осьминог перевертыш" class="active">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img3.JPG" alt="Осьминог перевертыш">
            <div class="slider1-buttons">
                <button onclick="prev1Slide()"> Прошлая </button>
                <button onclick="next1Slide()"> Следующая </button>
            </div>
        </div>
        <div class="container">
            <div class="block1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img1.JPG "alt="Осьминог перевертыш">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img2.JPG" alt="Осьминог перевертыш">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img5.JPG" alt="Осьминог перевертыш">
            </div>
            <div class="block2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img4.JPG" alt="Осьминог перевертыш">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img3.JPG" alt="Осьминог перевертыш">
            </div>
        </div>
    </div>

    <?php if (have_posts()): while (have_posts()): the_post();?>
    <div class="content">
    <?php if (has_post_thumbnail()): ?>
    <a href="#"><img src="<?php the_post_thumbnail_url();?>" alt="img"></a>
    <?php endif;?>
    <div class="text">
        <a href="#" class="name"><?php the_title(); ?></a>
        <a href=""> <?php the_content(); ?></a>
    </div>
    </div>
    <?php endwhile; endif; ?>
    </div>
        
        
        <div class="other-toys">
        <div class="slider2">
            <h2>Осьминог</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img7.JPG" alt="Осьминог" class="active">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img6.JPG" alt="Осьминог">
            <div class="slider2-buttons">
                <button onclick="prev2Slide()"> Прошлая </button>
                <button onclick="next2Slide()"> Следующая </button>
            </div>
        </div>
        <div class="slider3">
            <h2>Пчела</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img8.JPG" alt="Пчела" class="active">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img9.JPG"alt="Пчела">
            <div class="slider2-buttons">
                <button onclick="prev3Slide()"> Прошлая </button>
                <button onclick="next3Slide()"> Следующая </button>
            </div>
        </div>
        <div class="block3">
            <h2> Авокадо</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img10.JPG" alt="Авокадо">
            <h2> Пингвин</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/img11.JPG" alt="Пингвин">
        </div>
    </div>