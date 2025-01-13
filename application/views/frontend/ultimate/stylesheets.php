
<!-- Google Fonts -->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/vendor/font-awesome/css/fontawesome-all.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/vendor/animate.css/animate.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/vendor/hs-megamenu/src/hs.megamenu.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/vendor/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/vendor/cubeportfolio/css/cubeportfolio.min.css">

<!-- CSS Front Template -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/css/theme.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/toastr/toastr.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/css/custom.css">

<script src="<?php echo base_url();?>assets/frontend/<?php echo $theme;?>/vendor/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('#newsTicker1').breakingNews();
		//$('#newsTicker2').data('breakingNews').next();
		$('#newsTicker2').breakingNews({
			direction: 'rtl'
		});
		$('#newsTicker3').breakingNews({
			themeColor: '#f9a828',
			effect: 'slide-left'
		});
		$('#newsTicker4').breakingNews({
			themeColor: '#11cbd7',
			source: {
				type: 'rss',
				usingApi: 'rss2json',
				rss2jsonApiKey: '5ivfzdrkuqwmoe0dgxeqvhfz0knlo7yq4fw20bt0',
				url: 'http://rss.cnn.com/rss/edition.rss',
				limit: 7,
				showingField: 'title',
				linkEnabled: true,
				target: '_blank',
				seperator: '<span class="bn-seperator" style="background-image:url(img/cnn-logo.png);"></span>',
				errorMsg: 'RSS Feed not loaded. Please try again.'
			}
		});
		$('#newsTicker5').breakingNews({
			effect: 'typography'
		});
		$('#newsTicker6').breakingNews({
			source: {
				type: 'json',
				url: 'https://jsonplaceholder.typicode.com/posts',
				limit: 20,
				showingField: 'title',
				linkEnabled: false,
				target: '_blank',
				seperator: '<span class="bn-seperator" style="background-image:url(img/cnn-logo.png);"></span>',
				errorMsg: 'Json file not loaded. Please check the settings.'
			}
		});
		$('#newsTicker7').breakingNews({
			themeColor: '#11cbd7',
			background: 'transparent',
			borderWidth: 0,
			source: {
				type: 'rss',
				usingApi: 'YQL',
				url: 'http://feeds.bbci.co.uk/news/rss.xml',
				limit: 20,
				showingField: 'title',
				linkEnabled: true,
				target: '_blank',
				seperator: '<span class="bn-seperator bn-news-dot"></span>',
				errorMsg: 'Json file not loaded. Please check the settings.'
			}
		});
		$('#newsTicker8').breakingNews({
			height: 56,
			borderWidth: 0,
			background: 'url(img/background-pattern-example.png)'
		});
		$('#newsTicker9').breakingNews({
			effect: 'fade',
			themeColor: '#ef7b7b'
		});
		$('#newsTicker10').breakingNews({
			effect: 'slide-down',
			themeColor: '#2eb872',
			height: 50,
			fontSize: '18px'
		});
		$('#newsTicker11').breakingNews({
			effect: 'slide-up'
		});
		$('#newsTicker12').breakingNews({
			effect: 'typography',
			direction: 'rtl',
			themeColor: '#08c299'
		});
		$('#newsTicker13').breakingNews({
			effect: 'slide-right'
		});
		$('#newsTicker14').breakingNews();
		$('#newsTicker15').breakingNews({
			position: 'fixed-bottom',
			borderWidth: 3,
			height: 50,
			themeColor: '#ce2525'
		});
	});
</script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://use.fontawesome.com/826a7e3dce.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script src="https://use.fontawesome.com/webfontloader/1.6.24/webfontloader.js"></script>
<script src="<?php echo base_url();?>assets/rabbyx/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/rabbyx/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/rabbyx/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/rabbyx/js/owl.js"></script>
<script src="<?php echo base_url();?>assets/rabbyx/js/breaking-news-ticker.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/826a7e3dce.css" media="all">
