<?php 	get_header();	$page_id = get_the_ID();	$my_wp_query = new WP_Query();	$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));	$page_parent = $post->post_parent; ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="container-fluid inner-page">
        <div class="container page_content">
        		<h2 class="page_title"><?php the_title(); ?></h2>
			<?php the_content(); ?>   			<?php		$child_pages = get_page_children($page_id,$all_wp_pages);		if (  is_page(array(227,252)) && is_array($child_pages) && count($child_pages) >  0 ){			$pagesP = $child_pages;			$pagesP = array_reverse($pagesP);		}				if ( $page_parent == 227 || $page_parent == 252 ){			$child_pages = get_page_children($page_parent,$all_wp_pages);					$pagesP = $child_pages;			$pagesP = array_reverse($pagesP);						$page_id = $page_parent;		}?><?php if ( is_array($pagesP) && count($pagesP) > 0 ){ $i=2; ?><ul class="pagination">	<li class="<?php echo get_the_ID() == $page_id ? 'active' : '' ?>"><a href="<?php echo get_permalink($page_id); ?>">1</a></li>  <?php foreach($pagesP as $p): ?>	<li class="<?php echo get_the_ID() == $p->ID ? 'active' : '' ?>"><a href="<?php echo get_permalink($p); ?>"><?php echo $i ?></a></li>  <?php $i++; endforeach; ?></ul>			<?php } ?>
        </div>
        </div>
		<?php endwhile; ?>
		<?php endif; ?>

<?php get_footer(); ?>