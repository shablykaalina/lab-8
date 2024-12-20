<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Магазин мягких вязаных игрушек из плюшевой пряжи ">
    <meta name="keywords" content="Вязаные игрушки, мягкие игрушки, игрушки крючком, handmade игрушки,осьминог перевертыш, игрушка осьминог, игрушка пчела, игрушка авокадо, игрушка пингвин">
    <meta name="author" content="Alina Shablyko">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/Фавикон.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <title> Shablyko.toys </title>
</head>

<body>

    <header>
      <?php get_header();?>  
    </header>

    <main>
       <?php get_sidebar();?>
    </main>

    <footer>
     <?php get_footer();?>
    </footer>

    <script>
        let currentSlide1 = 0;
        const slides1 = document.querySelectorAll('.slider1 img');

        function showSlide1(index) {
            slides1[currentSlide1].classList.remove('active');
            currentSlide1 = (index + slides1.length) % slides1.length;
            slides1[currentSlide1].classList.add('active');
        }

        function next1Slide() {
            showSlide1(currentSlide1 + 1);
        }
        function prev1Slide() {
            showSlide1(currentSlide1 - 1);
        }
    </script>
    <script>
        let currentSlide2 = 0;
        const slides2 = document.querySelectorAll('.slider2 img');

        function showSlide2(index) {
            slides2[currentSlide2].classList.remove('active');
            currentSlide2 = (index + slides2.length) % slides2.length;
            slides2[currentSlide2].classList.add('active');
        }

        function next2Slide() {
            showSlide2(currentSlide2 + 1);
        }
        function prev2Slide() {
            showSlide2(currentSlide2 - 1);
        }
    </script>
    <script>
        let currentSlide3 = 0;
        const slides3 = document.querySelectorAll('.slider3 img');

        function showSlide3(index) {
            slides3[currentSlide3].classList.remove('active');
            currentSlide3 = (index + slides3.length) % slides3.length;
            slides3[currentSlide3].classList.add('active');
        }

        function next3Slide() {
            showSlide3(currentSlide3 + 1);
        }
        function prev3Slide() {
            showSlide3(currentSlide3 - 1);
        }
    </script>

</body>

</html>