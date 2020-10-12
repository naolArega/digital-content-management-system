<div class="col-lg-9">
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<div class="dropdown pull-right">
					<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
						<span class="glyphicon glyphicon-sort"></span>
						Sort by
						<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">alphabet</a></li>
						<li><a href="#">user rate</a></li>
						<li><a href="#">view</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row digital-contents">
			<?php
				$videos = array(
					'1' => 'image 1',
					'2' => 'image 2',
					'3' => 'image 3',
					'4' => 'image 4',
					'5' => 'image 5',
					'6' => 'image 6'
				);
				foreach($videos as $vid){
					echo "<div class='col-lg-4'>";
					echo "<div class='well'>"."<span class='image-list-title'>".$vid."</span>";
					echo "<div class='image-list-container'>";
					echo "<img src='/cdn/images/default_image_thumbnail.jpg' width='200' height='200' />";
					echo "<div ><button class='btn btn-default'>creator</button>";
					echo "<span class='glyphicon glyphicon-star'></span>";
					echo "<span class='glyphicon glyphicon-star'></span>";
					echo "<span class='glyphicon glyphicon-star'></span>";
					echo "<span class='glyphicon glyphicon-star'></span>";
					echo "<span class='glyphicon glyphicon-star'></span></div>";
					echo "</div></div></div>";
				}
			?>
		</div>
	</div>
</div>
</div>