var $a = jQuery.noConflict()
$a(function(){	
	$a("#destaque ul").cycle({
		fx:     'fade',
		speed: 1000,
		timeout: 5000,
		pager:'#nav',
		pause: 1	
	})
})