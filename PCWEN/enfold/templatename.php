<?php
/*
Template Name: Name of Template
*/
?>

<?php
global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();


 	 if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title();
 	 
 	 do_action( 'ava_after_main_title' );
	 ?>

		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='container'>

				<main class='template-page content  <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content','post_type'=>'page'));?>>


<?php
/*
Template Name: Name of Template
*/
?>

<?php  


$con = mysql_connect("localhost","root","password") or die("Could not connect");
mysql_selectdb("hblictnh_new2", $con);
$query = 'SELECT * FROM authors';
$res = mysql_query($query, $con) or die(mysql_error());
?>
<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    </tr>

  


<?php
while($row = mysql_fetch_array($res)){
?>
<tr>
     <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
</tr>

<?php

}
?>


</table>




                    <?php
                    /* Run the loop to output the posts.
                    * If you want to overload this in a child theme then include a file
                    * called loop-page.php and that will be used instead.
                    */

                    $avia_config['size'] = avia_layout_class( 'main' , false) == 'entry_without_sidebar' ? '' : 'entry_with_sidebar';
                    get_template_part( 'includes/loop', 'page' );
                    ?>

				<!--end content-->
				</main>

				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'page';
				get_sidebar();

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->



<?php get_footer(); ?>