<div class="subscription_area">
			<?php
			$success = $_GET['aliId'];
			if( $success != "" )
                echo '<div class="subscribed">'.__("Thank you for subscribing to our blog!","outsystems_blog").'</div>';
            else {
				echo stripslashes(get_option('subscription_form'));
            }
			?>
</div>

