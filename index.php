<!doctype html>
<html>
	<head>
		<title>Calendar Feed</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>The Feed for acm* </h1>
				<h2>Month of July 2013</h2>
			</header>
			
			<section>
				<?php for($i = 0; $i < 3; $i++): ?>
					<div class="event-list">
						<h3>Event List</h3>
						<?php for($k = 0; $k < 4; $k++): ?>
							<div class="event">
								<h4>Event Name</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, suscipit, nobis est.</p>
							</div>
						<?php endfor; ?>
					</div>		
				<?php endfor; ?>
			</section>
		</div>

		<script>
			window.onresize = function () {
				var eventLists = document.getElementsByClassName('event-list');
				var eventListLength = Math.floor(100/eventLists.length);

				var width = window.innerWidth;
				var newWidth;

				if(width >= 800) {
					newWidth = eventListLength + '%';
				} else {
					newWidth = '100%';
				}
				
				for (var i = eventLists.length - 1; i >= 0; i--) {
					eventLists[i].style.width = newWidth;
				};
			}

			window.onload = window.onresize;
		</script>
	</body>
</html>