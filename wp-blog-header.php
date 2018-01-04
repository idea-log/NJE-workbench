<?php	
$args = array( 'numberposts' => 6, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
$postslist = get_posts( $args );
echo '<ul id="latest_posts">';
 foreach ($postslist as $post) :  setup_postdata($post); ?> 
	<li><strong><?php the_date(); ?></strong><br />
	<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title(); ?></a>
</li>
<?php endforeach; ?>
 </ul>

<?php 