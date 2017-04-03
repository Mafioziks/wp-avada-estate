<?php
    /* Template Name: Custom Search */        
    get_header(); 
    
    ?>             
    <div class="contentarea">
        <div id="content" class="content_right">  
         <!--   <h3>Search Result for : <?php echo "$s"; ?> </h3>       -->  
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
	        <div id="post-<?php echo the_ID(); ?>" class="posts">        
	            <a href="<?php the_permalink(); ?>"><article>
	                <div style="display: inline-block;  flat: left;" align="left">
	                	<h4><?php the_title(); ?></h4>
	                	<p><?php the_excerpt(); ?></p>  
	                </div>
	                <div style="display: inline-block; float: right;" align="right">
						<p>Price: <?php echo get_post_custom($post->ID)['price'][0] . "€"; ?></p>
						<p class="post-meta"> Date : <?php echo date('j F Y'); ?></p>           
	                </div> 
	                <div style="clear: both;"></div>
	            </article><!-- #post -->    
	            </a>
	        </div>
	        <?php endwhile; ?>
	    <?php endif; ?>

	    </div><!-- content -->    
	</div><!-- contentarea -->   
<?php get_sidebar(); ?>
<?php get_footer(); ?>