<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets\css\Home.css">  
</head>
<body>
    <?php
    include('navbar.php');
    ?>
	<section>
        <div class="main">
		<div class="container">
			<a href="box_cricket.php">
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="assets\image\cricket.avif">
					</div>
					<div class="contentBx">
						<h3>BOX-CRICKET</h3>
					</div>
				</div>
				<ul class="sci">
					<li>
                        Tiny box cricket: indoors, soft ball, swift pace. Teams bat, bowl, aim for runs sans wickets.
                    </li>
				</ul>
			</div>
			</a>
			<a href="box-football.php">
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="assets\image\39301604bf9d80ba5e6cacb604ec78a4c305e58a.jpg">
					</div>
					<div class="contentBx">
						<h3>BOX-FOOTBALL</h3>
					</div>
				</div>
				<ul class="sci">
					<li>Futsal: fast-paced indoor soccer, six players, small court, sharp skills.</li>
				</ul>
			</div>
			</a>
			<a href="pool-snooker.php">
			<div class="card">
				<div class="content">
					<div class="imgBx">
						<img src="assets\image\billiards.jpg">
					</div>
					<div class="contentBx">
						<h3>POOL-SNOOKER</h3>
					</div>
				</div>
				<ul class="sci">
					<li>
                    Pool, snooker: cue sports, balls, sticks, rules; strategic play, high scores.
					</li>
				</ul>
			</div>
			</a>
		</div>
        </div>
	</section>
</body>
</html>