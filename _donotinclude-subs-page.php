<style>
div.subscription_area {
	float: none;
	height: 100%;
	width: 100%;
}
.rss_subscription > .subscription_area > .mktoForm {
	width: 100% !important;
	padding: 0;
	height: auto;
	display: inline-block;
}
.rss_subscription > .subscription_area > .mktoForm > .mktoFormRow {
	float: left;
	width: 100%;
	margin-bottom: 10px;

}
.mktoForm .mktoFieldWrap {
	float: left;
	width: 100%;
}
.mktoForm .mktoClear {
	clear: none;
}
.mktoForm .mktoFormRow .mktoFormCol {
	min-height: 100%;
	height: 100%;
	clear: none;
	padding-right: 10px;
}
.mktoForm .mktoRequiredField label.mktoLabel {
	display: none;
}
.rss_subscription > .subscription_area > .mktoForm > div.mktoFormRow > div.mktoFieldDescriptor.mktoFormCol > div.mktoFieldWrap.mktoRequiredField > input {
	width: 100% !important;
}
.subscription_area p {
	display: none;
}
.feeds {
	margin-bottom: 70px;
}
.subscription_area {
	text-align: left;
}
</style>

E-mail&nbsp;<span class="osicon-mail" style="color: #3498DB">&nbsp;</span>
<div class="rss_subscription">
	<div class="subscription_area">
		[insert_php]
		$success = $_GET['aliId'];
		if( $success != "" )
		echo '<div class="subscribed">Thank you for subscribing to our blog!</div>';
		else {
			echo '<script src="//app-sj03.marketo.com/js/forms2/js/forms2.js"></script>
			<form id="mktoForm_1119"></form>
			<script>MktoForms2.loadForm("//app-sj03.marketo.com", "338-PNW-019", 1119);</script>';
		}
		[/insert_php]
	</div>

	<div class="feeds"><a href="[insert_php] bloginfo( 'rss2_url' ); [/insert_php]">Subscribe RSS&nbsp;<i class="rss">&nbsp;</i></a></div>
</div>