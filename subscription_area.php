
<div class="subscription_area">
			<?php
			$success = $_GET['aliId'];
			if( $success != "" )
                echo '<div class="subscribed">'.__("Thank you for subscribing to our blog!","outsystems_blog").'</div>';
            else {
                echo '<script src="//app-sj03.marketo.com/js/forms2/js/forms2.js"></script>
				<form id="mktoForm_1119"></form>
				<script>MktoForms2.loadForm("//app-sj03.marketo.com", "338-PNW-019", 1119);</script>';
            }
			?>
</div>