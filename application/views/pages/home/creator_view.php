<div class="col-lg-9">
	<div class="well">
		<?php
		$content_list = array(
			'video' => array(),
			'music' => array(),
			'image' => array(),
			'app' => array(),
			'book' => array()
		);
		foreach($creator_content->result() as $content){
			if($content->type == 'video'){
				array_push($content_list['video'], $content); 
			}
			else if($content->type == 'music'){
				array_push($content_list['music'], $content);
			}
			else if($content->type == 'image'){
				array_push($content_list['image'], $content);
			}
			else if($content->type == 'app'){
				array_push($content_list['app'], $content);
			}
			else if($content->type == 'book'){
				array_push($content_list['book'], $content);
			}
		}
		?>
		<div class="row">
			<h4><span class="dcms-label label label-info">Video</span></h4>
			<?php
			foreach($content_list['video'] as $video){
				echo '<div class="col-lg-3">';
				echo '<div class="video-list well">';
				echo '<img width="180" height="180" src="http://dcms.io/cdn/images/content-thumbnail/'.$video->thumbnail.'" /><br />';
				echo '<a class="content-link" href="/video/view/'.$video->content_id.'">'.$video->content_name.'</a><br/>';
				for($i=0; $i<5; $i++){
					if($video->rating > $i){
						echo '<span class="glyphicon glyphicon-star"></span>';
					}
					else{
						echo '<span class="glyphicon glyphicon-star-empty"></span>';
					}
				}
				echo '</div></div>';
			}
			if(count($content_list['video']) == 0){
				echo '
					<div class="col-lg-offset-5 col-lg-2">
						<span class="text-center ">no video available</span>
					</div>';
			}
			?>
		</div>
		<div class="row">
			<h4><span class="dcms-label label label-info">music</span></h4>
			<?php
			foreach($content_list['music'] as $music){
				echo '<div class=" col-lg-8">';
				echo '<div class="music-list well">'.$music->content_name;
				echo '<br /><a class="content-link" href="/music/view/'.$music->content_id.'"><span class="play-music glyphicon glyphicon-play-circle"></span></a><br/>';
				for($i=0; $i<5; $i++){
					if($music->rating > $i){
						echo '<span class="glyphicon glyphicon-star"></span>';
					}
					else{
						echo '<span class="glyphicon glyphicon-star-empty"></span>';
					}
				}
				echo '</div></div>';				
			}
			if(count($content_list['music']) == 0){
				echo '
					<div class="col-lg-offset-5 col-lg-2">
						<span class="text-center ">no music available</span>
					</div>';
			}
			?>
		</div>
		<div class="row">
			<h4><span class="dcms-label label label-info">image</span></h4>
			<?php
			foreach($content_list['image'] as $image){
				echo '<div class="col-lg-4">';
				echo '<div class="image-list well"><span>'.$image->content_name.'</span>';
				echo '<div class="image-list-container">';
				echo '<a href="/image/view/'.$image->content_id.'"><img src="/cdn/images/content-thumbnail/'.$image->thumbnail.'" width="250" height="250" /></a><br/>';
				for($i=0; $i<5; $i++){
					if($image->rating > $i){
						echo '<span class="glyphicon glyphicon-star"></span>';
					}
					else{
						echo '<span class="glyphicon glyphicon-star-empty"></span>';
					}
				}
				echo '</div></div></div>';				
			}
			if(count($content_list['image']) == 0){
				echo '
					<div class="col-lg-offset-5 col-lg-2">
						<span class="text-center ">no image available</span>
					</div>';
			}
			?>
		</div>
		<div class="row">
			<h4><span class="dcms-label label label-info">app</span></h4>
			<?php
			foreach($content_list['app'] as $app){				
				echo '<div class="col-lg-2">';
				echo '<div class="app-list well">';
				echo '<img width="100" height="100" src="/cdn/images/content-thumbnail/'.$app->thumbnail.'" />';
				echo '<a class="content-link" href="/app/view/'.$app->content_id.'">'.$app->content_name.'</a><br/>';
				for($i=0; $i<5; $i++){
					if($app->rating > $i){
						echo '<span class="glyphicon glyphicon-star"></span>';
					}
					else{
						echo '<span class="glyphicon glyphicon-star-empty"></span>';
					}
				}
				echo '</div></div>';
			}
			if(count($content_list['app']) == 0){
				echo '
					<div class="col-lg-offset-5 col-lg-2">
						<span class="text-center ">no app available</span>
					</div>';
			}
			?>
		</div>
		<div class="row">
			<h4><span class="dcms-label label label-info">book</span></h4>
			<?php
			foreach($content_list['book'] as $book){
				echo '<div class="col-lg-4"><div class="book-list well">';
				echo '<div><img width="250" width="250" src="/cdn/images/content-thumbnail/'.$book->thumbnail.'" /></div>';
				echo '<div><a class="content-link" href="/book/view/'.$book->content_id.'">'.$book->content_name.'</a></div>';
				for($i=0; $i<5; $i++){
					if($book->rating > $i){
						echo '<span class="glyphicon glyphicon-star"></span>';
					}
					else{
						echo '<span class="glyphicon glyphicon-star-empty"></span>';
					}
				}
				echo '</div></div>';
			}
			if(count($content_list['book']) == 0){
				echo '
					<div class="col-lg-offset-5 col-lg-2">
						<span class="text-center ">no book available</span>
					</div>';
			}
			?>
		</div>
	</div>
</div>
</div>