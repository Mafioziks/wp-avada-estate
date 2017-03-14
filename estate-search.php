<?php
    /* Template Name: Custom Search */        
    get_header(); 
    global $wpdb;
    
    // Get all values from search link
    // Combine sql query form params in search url
    
    $wpdb->get_results(
    		"SELECT * 
    		 FROM $wpdb->posts post
    		 LEFT JOIN $wpdb->term_relationships termrel
    			ON (post.ID = termrel.object_id )
    		 LEFT JOIN $wpdb->term_taxonomy taxonomy
    			ON (termrel.term_taxonomy_id = taxonomy.term_taxonomy_id)
    		 LEFT JOIN $wpdb->terms terms
    			ON (taxonomy.term_id = term.term_id)
    		 LEFT JOIN $wpdb->termmeta meta
    			ON (post.ID = meta.post_id)
    		 WHERE
    			(
    				post.post_title like '%search phrase%' OR
    				post.post_content like '%search phrase%'
    			)AND
    			taxonomy.taxonomy = &&_taxonomy_tips AND
    			term.name = &&_term_vertiba AND
    			meta.meta_key = &&_meta_nosaukums AND
    			meta.meta_value = &&_meta_vertiba");
    ?>             
    <div class="contentarea">
        <div id="content" class="content_right">  
            <h3>Search Result for : <?php echo "$s"; ?> </h3>       
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
	        <div id="post-<?php the_ID(); ?>" class="posts">        
	            <article>        
	                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><h4>        
	                <p><?php the_excerpt(); ?></p>        
	                <p align="right"><a href="<?php the_permalink(); ?>">Read     More</a></p>    
	                <span class="post-meta"> Post By <?php the_author(); ?>    
	                 | Date : <?php echo date('j F Y'); ?></span>    
	            </article><!-- #post -->    
	        </div>
	        <?php endwhile; ?>
	    <?php endif; ?>




	    </div><!-- content -->    
	</div><!-- contentarea -->   
<?php get_sidebar(); ?>
<?php get_footer(); ?>