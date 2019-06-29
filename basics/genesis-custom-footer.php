<?php
//* Genesis custom footer - REMOVE THE <?php ABOVE BEFORE PASTING INTO functions.php
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
	?>
	<p>Copyright &copy; 2019 - 2019 &middot; <a href="https://www.wprumors.com/">YOUR-WEBSITE.com</a> &middot; All Rights Reserved.</p>
	<?php
}
