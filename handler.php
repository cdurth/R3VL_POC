<?php
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
	/*$_POST['username'] = 'test';
	$_POST['password'] = 'test';*/
	$next = $_POST['next'];
	if( $next === "yes" ) {
/*		<script>
			var tag = document.createElement('script');

			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			var player;
			function onYouTubeIframeAPIReady() {
			    player = new YT.Player('player', {
			        height: '390',
			        width: '640',
			        videoId: 'M7lc1UVf-VE',
			        playerVars: { 'autoplay': 1 },
			        events: {
			            'onReady': onReady
			        }
			    });
			}
		</script>*/

		$returnScript = "<script>var player;function onYouTubeIframeAPIReady(){player=new YT.Player('player',{height:'390',width:'640',videoId:'HgzGwKwLmgM',playerVars:{'autoplay':1},events:{'onReady':onReady}})}</script>";
	//$returnScript = "<script>alert('test')</script>";
	echo $returnScript;
	} else {
	echo "<h1>HANDLER ERROR</h1>"; 
	}
}
?>