<!--

                        Made By:
 __  __          __           ___           __         
/\ \/\ \        /\ \__       /\_ \         /\ \        
\ \ `\\ \    ___\ \ ,_\    __\//\ \      __\ \ \/'\    
 \ \ , ` \  / __`\ \ \/  /'__`\\ \ \   /'__`\ \ , <    
  \ \ \`\ \/\ \L\ \ \ \_/\  __/ \_\ \_/\  __/\ \ \\`\  
   \ \_\ \_\ \____/\ \__\ \____\/\____\ \____\\ \_\ \_\
    \/_/\/_/\/___/  \/__/\/____/\/____/\/____/ \/_/\/_/
                        With love.

!-->

<!DOCTYPE html>
<html>
	<head>
		<title>404 - Page Not Found</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="shortcut icon" href="http://notelek.com/wp-content/uploads/2014/08/favicon.png" type="image/x-icon"/>
		<style>

		@font-face{
			  font-family: 'OpenSans';
			  font-style: normal;
			  font-weight: 300;
			  src: local('Open Sans Light'), local('OpenSans-Light'), url(http://fonts.gstatic.com/s/opensans/v9/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff) format('woff');
			}

			body{
				font-family: 'OpenSans', sans-serif;
				color:#888;
			}

			.subtext{
				font-family: 'OpenSans', sans-serif;
				color:#888;
			}

			.err-btn{
				color:#3498db;
				border:1px solid #3498db;
				border-radius:5px;
				width:300px;
				font-size:14pt;
				margin-top:25px;
				vertical-align: middle;
				padding-top:10px;
				padding-bottom:10px;
				cursor:pointer;
			}

			.err-btn:hover{
				color:white;
				background-color: #3498db;
			}

			.back-btn{
				color:#3498db;
				border:1px solid #3498db;
				border-radius:5px;
				width:300px;
				font-size:14pt;
				margin-top:25px;
				vertical-align: middle;
				padding-top:10px;
				padding-bottom:10px;
				cursor:pointer;
			}

			.back-btn:hover{
				color:white;
				background-color: #3498db;
			}

			.err-rprt-cvr{
				position:fixed;
				top:0;
				left:0;
				right:0;
				bottom:0;
				background:#fff;
			}

			.spinner {
			  -webkit-animation: rotator 1.4s linear infinite;
			  animation: rotator 1.4s linear infinite;
			}

			@-webkit-keyframes rotator {
			  0% {
			    -webkit-transform: rotate(0deg);
			    transform: rotate(0deg);
			  }

			  100% {
			    -webkit-transform: rotate(270deg);
			    transform: rotate(270deg);
			  }
			}

			@keyframes rotator {
			  0% {
			    -webkit-transform: rotate(0deg);
			    transform: rotate(0deg);
			  }

			  100% {
			    -webkit-transform: rotate(270deg);
			    transform: rotate(270deg);
			  }
			}
			.path {
			  stroke-dasharray: 187;
			  stroke-dashoffset: 0;
			  -webkit-transform-origin: center;
			  -ms-transform-origin: center;
			  transform-origin: center;
			  -webkit-animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
			  animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
			}

			@-webkit-keyframes colors {
			  0% {
			    stroke: #4285F4;
			  }

			  25% {
			    stroke: #DE3E35;
			  }

			  50% {
			    stroke: #F7C223;
			  }

			  75% {
			    stroke: #1B9A59;
			  }

			  100% {
			    stroke: #4285F4;
			  }
			}

			@keyframes colors {
			  0% {
			    stroke: #4285F4;
			  }

			  25% {
			    stroke: #DE3E35;
			  }

			  50% {
			    stroke: #F7C223;
			  }

			  75% {
			    stroke: #1B9A59;
			  }

			  100% {
			    stroke: #4285F4;
			  }
			}
			@-webkit-keyframes dash {
			  0% {
			    stroke-dashoffset: 187;
			  }

			  50% {
			    stroke-dashoffset: 46.75;
			    -webkit-transform: rotate(135deg);
			    transform: rotate(135deg);
			  }

			  100% {
			    stroke-dashoffset: 187;
			    -webkit-transform: rotate(450deg);
			    transform: rotate(450deg);
			  }
			}
			@keyframes dash {
			  0% {
			    stroke-dashoffset: 187;
			  }

			  50% {
			    stroke-dashoffset: 46.75;
			    -webkit-transform: rotate(135deg);
			    transform: rotate(135deg);
			  }

			  100% {
			    stroke-dashoffset: 187;
			    -webkit-transform: rotate(450deg);
			    transform: rotate(450deg);
			  }
			}

			.prog{
				height:300px;
				width:400px;
				margin-top:-150px;
				margin-left:-200px;
				position:fixed;
				top:50%;
				left:50%;
			}

		</style>
		<script>

			function genRandom(start, end){
				return Math.floor(Math.random() * end) + start;				
			}

			function glitch(ctx){
				//Clear the screen
				ctx.fillStyle = "rgba(255,255,255,1)";
  				ctx.fillRect(1,1,700,700);

  				//overly complicated random gen to see if we should draw an rgb split, or a logo
  				if(genRandom(1,40) !== 1){
	  				if(genRandom(1,10) == 10){
	  					ctx.font      = '152px OpenSans';
				    	ctx.fillStyle = "rgba(50,50,136,0."+genRandom(2,4)+")";
				    	if(genRandom(1,2) == 1){
				    		if(genRandom(1,10) == 1){
				    			ctx.fillText  ('#f7', 215+genRandom(10,50), 270+genRandom(10,50));
				    		}else{
				    			ctx.fillText  ('404', 215+genRandom(10,50), 270+genRandom(10,50));
				    		}
				    	}else{
				    		if(genRandom(1,10) == 1){
				    			ctx.fillText  ('hj5', 215-genRandom(10,50), 270-genRandom(10,50));
				    		}else{
				    			ctx.fillText  ('404', 215-genRandom(10,50), 270-genRandom(10,50));
				    		}
				    	}
				    	ctx.font      = '152px OpenSans';
				    	ctx.fillStyle = "rgba(136,50,50,0."+genRandom(2,4)+")";
				    	if(genRandom(1,2) == 1){
				    		if(genRandom(1,10) == 1){
				    			ctx.fillText  ('a&#', 215+genRandom(10,50), 270+genRandom(10,50));
				    		}else{
				    			ctx.fillText  ('404', 215+genRandom(10,50), 270+genRandom(10,50));
				    		}
				    	}else{
				    		if(genRandom(1,10) == 1){
				    			ctx.fillText  ('x%j', 215-genRandom(10,50), 270-genRandom(10,50));
				    		}else{
				    			ctx.fillText  ('404', 215-genRandom(10,50), 270-genRandom(10,50));
				    		}
				    	}
	  				}else{
	  					ctx.font      = '152px OpenSans';
				    	ctx.fillStyle = '#888';
				    	if(genRandom(1,15) == 1){
				    			ctx.fillText  ('4%4', 215, 270);
				    		}else{
				    			ctx.fillText  ('404', 215, 270);
				    		}
					}
				}else{
					var imageObj = new Image();

				    imageObj.onload = function() {
				    	ctx.drawImage(imageObj, 50, 100);
				    };
				    imageObj.src = 'http://dev.notelek.com/glitch-logo.png';
				}

				//See how much, and where we should block out text
			    for(var i = 0;i < genRandom(1,3);i++){
					ctx.fillStyle = "rgba(255,255,255,0."+genRandom(1,7)+")";
	  				ctx.fillRect(genRandom(1,700), genRandom(1,700), genRandom(1,700), genRandom(1,700));
	  			}
			}

			function startGlitch(ctx){
				var rand = Math.round(Math.random() * 100) + 1;
			    setTimeout(function() {
			            glitch(ctx);
			            startGlitch(ctx);
			    }, rand);
			}

			$(document).ready(function(){
				console.log("Someone is a developer... or wants to be.");
				$('.err-rprt-cvr').hide();
				$('.back-btn').hide();
				$('.prog').hide();
				var quips = ["These are not the files your looking for.","Woops, our bad.","I coulda sworn I saw that file a week ago...","Must be my A.D.D.","It WAS here...","I'm sorry Dave, I'm afraid I can't do that.","Well then..."];
				$('.quip').html(quips[genRandom(0,quips.length-1)]);
				var ctx = document.getElementById('canvas').getContext('2d');
			    ctx.font         = '152px OpenSans';
			    ctx.fillStyle = '#888';
			    ctx.fillText  ('404', 200, 270);
			    startGlitch(ctx);
			    $('.err-btn').click(function(){
			    	$('.err-rprt-cvr').fadeIn();
			    	setTimeout(function(){
			    		$('.err-btn').hide();
			    		$('.back-btn').show();
			    		$('.prog').fadeIn();
			    		setTimeout(function(){
			    			$('.loadtext').fadeOut(500);
			    			setTimeout(function(){
			    				$('.loadtext').html("Sending Data...");
			    				setTimeout(function(){
			    					$('.loadtext').fadeIn();
			    					setTimeout(function(){
						    			$('.loadtext').fadeOut(500);
						    			setTimeout(function(){
						    				$('.loadtext').html("All Done!");
						    				setTimeout(function(){
						    					$('.loadtext').fadeIn();
						    					setTimeout(function(){
							    					$('.err-rprt-cvr').fadeOut();
							    				},2000);
						    				},500);
						    			},500);
						    		},2000);
			    				},500);
			    			},500);
			    		},2000);
			    	},250);
			    });
			    $('.back-btn').click(function(){
			    	window.history.back();
			    });
			});
		</script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-52803605-1', 'auto');
			  ga('send', 'pageview');
		</script>
	</head>
	<body>
		<div class="center" align="center">
			<canvas height="300" width="700" id="canvas"></canvas>
			<div class="subtext"><span class="quip"></span><div class="err-btn">Generate An Error Report?</div><div class="back-btn">Go Back?</div></div>
		</div>
		<div class="err-rprt-cvr">
			<div class="prog" align="center">
				<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
				   <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
				</svg><br /><br />
				<span class="loadtext">Gathering Data...</span>
			</div>
		</div>
	</body>
</html>