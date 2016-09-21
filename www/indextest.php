<?php 

$myFile = "referrers.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "\n" . $_SERVER['HTTP_REFERER'];
fwrite($fh, $stringData);
fclose($fh);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Dallas FPV Wing Club :: North Texas' first FPV racing club dedicated to flying wings.</title>
<style type='text/css'>
	body {
		font-family:Verdana, Arial;
		color:#777777;
		font-size:13px;
	}
	li {
		margin:3px;
	}
	.top {
		font-size:12px;
		text-decoration:none;
	}
	.top a{
		text-decoration:none;
	}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href="http://dfwc.club/css/lightbox.css" rel="stylesheet">
<script src="http://dfwc.club/js/lightbox-plus-jquery.js"></script>
	

<script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>
	
  <!-- US -->
</head>
<body>
	<center>
	<table width='800px' style='text-align:left' id='home'>
		<tr>
			<td colspan='2'>
				<!-- Header -->
				<img src='images/dallas_fpv_wing_club.png' alt='Dallas FPV Wing Club'/>
				<div style='float:right'>
					<p>Proudly sponsored by:</p>
					<p><a href='http://team-legit.com/' target='blank'><img src='images/Team_Legit_logo.png' width='200px' style='border:0px'></a></p>
					<p><small><small>If you'd like to help to support our club,<br> <a href='mailto:dallasfpvwingclub@gmail.com'>email dallasfpvwingclub@gmail.com</a></small></small></p>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<a href='#home'>Home</a> | 
				<a href='#about'>About</a> | 
				<a href='#news'>News</a> | 
				<a href='#PilotProfiles'>Pilots</a>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
			</td>
		</tr>
		<tr>
			<td>
				<!-- left side -->
				<table cellpadding='3' cellspacing='3'>
					<tr>
						<td colspan='2'><h1 id='about'>About Dallas FPV Wing Club</h1>
							<a href='#home' alt='Back to the top!' class='top'>[Top]</a><br/><br/>
							<img src='images/dallasfpvwingclub.jpg' width='750px' alt='The founding fathers... and mother' />
							<p>Dallas FPV Wing Club is a group that is dedicated to FPV and mostly flying wings. We are ambassadors to the hobby and have the most amount of fun in the safest way possible. Our group welcomes experienced and new pilots in the North Texas area. Our <a href='https://www.facebook.com/groups/dallasfpvwingclub' target='blank'>Facebook Group</a> is where you can meet up with us and find out where we're flying and when. Again, the group is open for North Texas FPV pilots only.</p>
							<p><a href='https://www.facebook.com/groups/dallasfpvwingclub' target='blank'>Join us on Facebook!</a></p>
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<h1 id='news'>DFWC News!</h1>
							<a href='#home' alt='Back to the top!' class='top'>[Top]</a>
						</td>
					</tr>
					<tr>
						<td>
							<img style='float:left' src='images/GOVSISLAND-map-1.png' width='375'>
						</td>
						<td>
							<p>Shane and Heather will be flying the new <a href='http://team-legit.com/Legit-Wing-V2R-Racer-Kit-100-Hand-Made-in-the-USA_p_191.html' target='blank'>Team Legit V2R Race Wing</a> at the Drone Nationals in NY. Please wish them luck as they compete against the best FPV wing pilots in the world!</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>Heather (@msflashgangster) shows you how to laminate a race wing on Flitetest!</p>
							<iframe width="375" height='275' src="https://www.youtube.com/embed/nPKtiD80ZbQ" frameborder="0" allowfullscreen></iframe>
						</td>
						<td>
							<p>Shane (@flashgangster) shows you a couple of his favorite DIY hacks on Flitetest!</p>
							<iframe width="375" height='275' src="https://www.youtube.com/embed/zYk32GciaqM" frameborder="0" allowfullscreen></iframe>
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td colspan='2'>
							<h1 id='PilotProfiles'>Pilot Profiles</h1>
							<a href='#home' alt='Back to the top!' class='top'>[Top]</a>
						</td>
					</tr>
					<?php include('pilots.php'); ?>
				</table>
			</td>
			<td>
				<!-- right side -->
				
			</td>
		</tr>
	</table>
	<a href='#home' alt='Back to the top!' class='top'>[Top]</a>
	</center>
</body>
</html>
