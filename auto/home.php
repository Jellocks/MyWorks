<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
 <section class="services">
    <div class="container">
        <h2 class="title">НАШИ УСЛУГИ</h2>
        <div class="services_inner">
            <div class="services_content">
            <?php the_field('service_item'); ?>
   
            <a href="#" class="header_button button_decor">Консультация эксперта</a>
                </div>
            <?php the_field('service_text'); ?>
        </div>
    </div>
</section>
<section class="benefits"> 
    <div class="container">
        <div class="benefits_inner">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/car2.png" alt="" class="benefit_image">
            <div class="benefits_content">
                <h2 class="title benefits_title">ПОЧЕМУ МЫ?</h2>
                <ul class="benefits_list">
                    <li class="benefits_item">
                        <p class="benefits_item_num">650</p>
                        <p class="benefits_item_title">успешно доставленных авто</p>
                        <p class="benefits_item_text">большой опыт пригона автомобилей из США под ключ, все клиенты остались довольны на 100%</p>
                    </li>
                    <li class="benefits_item">
                        <p class="benefits_item_num">5</p>
                        <p class="benefits_item_title">лет на рынке Украины</p>
                        <p class="benefits_item_text">Работаем по всей территории Украины, работаем по договору с клиентами</p>
                    </li>
                    <li class="benefits_item">
                        <p class="benefits_item_num">100 %</p>
                        <p class="benefits_item_title">доверия клиентов</p>
                        <p class="benefits_item_text">Онлайн отчетность. Вы всегда в курсе статуса подбора вашего авто. Фото и видео отчет</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
  <section class="carousel">
      <div class="container">
          <h2 class="title">ПРИГНАННЫЕ НАМИ АВТО</h2>
          <div class="carousel_inner">

          <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<div class="carosel_item">
            <div class="carousel_item_box">
                <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/car3.png" alt="" class="carousel_item_img"> -->
                <?php the_post_thumbnail(
                    array(380,350),
                    array(
                        'class' => 'carousel_item_img'),
                ); ?>
                <h4 class="carousel_item_title"><?php the_title(); ?></h4>
                <p class="carousel_item_text"><?php the_content(); ?></p>
            </div>
        </div>
<?php } } 
wp_reset_postdata(); // Сбрасываем $post
?> 
             
           
             
          </div>
      </div>
  </section> 
<section class="contacts">
      <div class="container">
          <div class="contact_inner">
              <div class="contact_info">
                <h2 class="title">КОНТАКТЫ</h2>
                <ul class="contact_list">
                    <li class="contact_item">
                        <p class="contact_item_title">Адрес</p>
                        <p class="contact_item_text"><?php the_field('addres') ; ?>
                            </p>
                    </li>
                    <li class="contact_item">
                        <p class="contact_item_title">Время работы</p>
                        <p class="contact_item_text"><?php the_field('working_hours'); ?></p>
                    </li>
                    <li class="contact_item">
                        <p class="contact_item_title">Телефон</p>
                        <a href="<?php the_field('phone_number'); ?>"><?php the_field('phone'); ?></a>

                    </li>
                </ul>
              </div>
              <form action="" class="contact_form">
                  <h2 class="title contact_title">Оставить заявку </h2>
                <?php echo do_shortcode('[contact-form-7 id="27" title="Контактная форма"]') ?>
              </form>

          </div>
      </div>
  </section>
<?php get_footer(); ?>