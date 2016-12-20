<?php get_header();  ?>


<div class="hero">  
  
    <?php $heroImage = get_field('hero_image'); ?>
    <header class="hero" style="background-image:url(<?php echo $heroImage['url'] ?>)">
  
    <h1 class="my_name"><?php the_field('my_name') ?></h1>

    <div class="socialMenu">
        
        <?php while ( have_rows('page_menu') ) : the_row(); ?>

        <?php endwhile; ?>

        <?php 

          wp_nav_menu( array(
              'menu' => 'primary',
              'theme_location' => 'social',
              'before'=> '<h3>',
              'after' => '</h3>',
          ) );
         ?>

    </div>
  
    <h2 class="my_title"><?php the_field('my_title') ?></h2>
 
</div>

<div id="portfolio" class="portfolioSection">

    <div class="portfolioTop">
   
        <h2><?php the_field('portfolio_title') ?></h2>

        <h4><?php the_field('portfolio_text') ?></h4>
   
    </div>
    
    <div class="portfolioBottom">

          <?php if( have_rows('portfolio_item') ): ?>

              <?php while ( have_rows('portfolio_item') ) : the_row(); ?>
                  
                  <div class="portfolioPiece">

                        <div class="image"> 

                            <?php $portfolioImage = get_sub_field('portfolio_image'); ?> 

                            <img src="<?php echo $portfolioImage['url']; ?>" alt="<?php echo $portfolioImage['alt']; ?>">

                            <div class="overlay"></div>

                        </div>
                        
                        <h4><?php the_sub_field('portfolio_item_title') ?></h4>

                        <p><?php the_sub_field('portfolio_item_comment') ?></p>

                        <h6><?php the_sub_field('portfolio_item_skills') ?></h6>

                        <a href="<?php the_sub_field('portfolio_button') ?>" target="_blank">View Live</a>

                  </div>

              <?php endwhile; ?>

          <?php endif; ?>

    </div>

</div>





<div id="about" class="aboutSection">
  
    <div class="aboutTop">
    
        <h2><?php the_field('about_title') ?></h2>

        <h4><?php the_field('about_text') ?></h4>
    
    </div>

    <div class="aboutContainer">

        <div class="imageContainer">
          
            <?php $aboutImage = get_field('about_image'); ?>
            <img src="<?php echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['alt']; ?>">   

        </div>
      
        <div class="skillsContainer">

          <h5><?php the_field('about_content') ?></h5>
          <p><?php the_field('about_content_1') ?></p>
          <p><?php the_field('about_content_2') ?></p>

        </div>        

    </div>

</div>





<div id="contact" class="contactSection">

    <div class="contactTop">
    
        <h2><?php the_field('contact_title') ?></h2>

        <h4><?php the_field('contact_text') ?></h4>
    
    </div>
  
    <div class="contactForm">

      <?php echo do_shortcode('[contact-form-7 id="179" title="Contact form 1"]') ?>

    </div>  

</div>

<?php get_footer();  ?>




