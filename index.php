<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package creato
 */
get_header(); 
global $creato_data;
$position = $creato_data['creato_blogsidebarposition'];
echo '<div class="blog_category">
<div class="container">
	 <div class="row">
       <div class="col-lg-12">
         <div class="">
          <div class="creato_section_heading">
            <p>'.__('latest from the','creato').'</p>
           <h1>'.__('blog','creato').'</h1></div> 
        </div>
      </div>
      </div>
	  <div class="row">';
	  if($position == 'left') creato_sidebar();
	  if($position != 'full')
	  echo '<div class="col-lg-8 col-md-8"><div class="blog_post">';
	  else echo '<div class="col-md-12 col-sm-12"><div class="blog_post">';
		 if ( have_posts() ) : 
		/* Start the Loop */ 
		 while ( have_posts() ) : the_post(); 
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
			 endwhile; 
			creato_paging_nav(); 
		 else : 
		 get_template_part( 'template-parts/content', 'none' ); 
		 endif; 
	 if($position != 'full') echo '</div></div>';
     else echo '</div></div>';
     if($position == 'right') 
		 creato_sidebar();
     echo '</div>
</div>
</div>';
get_footer();
?>