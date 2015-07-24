<?php
// Get the last 3 posts.
require('blog/wp-load.php');
?>


<?php
global $post;
$args = array( 'posts_per_page' => 3 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a><br />
<?php
the_date(); 
the_excerpt(); 
echo "<br />";
?>
<?php endforeach; ?>

<?php
 $pages = get_pages(); 
  foreach ( $pages as $page ) {
    $option = '<option value="' . get_page_link( $page->ID ) . '">';
  $option .= $page->post_title;
  $option .= '</option>';
  echo $option;
  }
 ?>