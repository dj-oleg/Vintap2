<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - packs';
?>



<section class="white need-animate">
		<h3>New Releases</h3>
		<p></p>
		<div class="items">
			<?php foreach($packs_new as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Most Popular</h3>
		<p></p>
		<div class="items">
			<?php foreach($packs_popular as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Hip Hop</h3>
		<p></p>
		<div class="items">
			<?php foreach($hip_hop as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Trap</h3>
		<p></p>
		<div class="items">
			<?php foreach($trap as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Pop</h3>
		<p></p>
		<div class="items">
			<?php foreach($pop as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Soul &amp; R&amp;B</h3>
		<p></p>
		<div class="items">
			<?php foreach($soul as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Rock</h3>
		<p></p>
		<div class="items">
			<?php foreach($rock as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Drill</h3>
		<p></p>
		<div class="items">
			<?php foreach($drill as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">container2
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Electronic</h3>
		<p></p>
		<div class="items">
			<?php foreach($electronic as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Afrobeat</h3>
		<p></p>
		<div class="items">
			<?php foreach($afrobeat as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Latin</h3>
		<p></p>
		<div class="items">
			<?php foreach($latin as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Lofi</h3>
		<p></p>
		<div class="items">
			<?php foreach($lofi as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>Hyperpop</h3>
		<p></p>
		<div class="items">
			<?php foreach($hyperpop as $key=>$pack): ?>
			<?php if($key<4):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
							<div class="middle">
							<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-play">
								 <g data-v-e4982a0e>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" ></path>
										<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
										<path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
								 </g>
							</svg>
							</div>
						</div>
						<a href="<?=Url::to(['test/pack'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
						</a>
						<a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" >
							<div class="artist"><?=$pack['creator']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<div class="load_wait" style="position:fixed;top:0;left:0;height:100%;width:100%;z-index:99;display:none;">
   <div class="fa-5x" style="position:fixed;left:50%;top:50%;margin-top:-50px;margin-left:-50px;z-index:100;">
     <i class="fa-solid fa-sync fa-spin"></i>
   </div>
 </div>

<?php
$url=Url::to(['ajax/pages_packs']);

$script = <<< JS

$('.prew_page').click(function(){

  var sort = $(this).parents().attr('sort');
  var genre = $(this).parents().attr('genre');
  //alert(genre);
  $(this).parents().children('.next_page').removeAttr('disabled');
  $(this).parents().children('.next_page').children('svg').removeClass('opacity-25');
  var carrent_page=$(this).parents().children('div').children('span').eq(0).html();
  var max_page=$(this).parents().children('div').children('span').eq(1).html();
  if (max_page!=1) $('.load_wait').show();
  if (carrent_page>1) {
    $(this).parents().children('div').children('span').eq(0).html(carrent_page*1-1);
    //alert(carrent_page-1);
    $.ajax({
          method: "POST",
          url: '$url',
          data: { sort: sort,
                  genre: genre,
                  page: carrent_page*1-1
                }
        })
          .done(function( rez ) {
            //alert( rez );
            $("#"+sort+"_"+genre).html(rez);
            $('.load_wait').hide();
          });
  }
  if (carrent_page*1-1==1){
    $(this).attr('disabled','disabled');
    $(this).children('svg').addClass('opacity-25');
    $('.load_wait').hide();
  }
});
$('.next_page').click(function(){

  var sort = $(this).parents().attr('sort');
  var genre = $(this).parents().attr('genre');
  $(this).parents().children('.prew_page').removeAttr('disabled');
  $(this).parents().children('.prew_page').children('svg').removeClass('opacity-25');
  var carrent_page=$(this).parents().children('div').children('span').eq(0).html();
  var max_page=$(this).parents().children('div').children('span').eq(1).html();
  if (max_page!=1) $('.load_wait').show();
  if (carrent_page<max_page) {
    $(this).parents().children('div').children('span').eq(0).html(carrent_page*1+1);
    $.ajax({
          method: "POST",
          url: '$url',
          data: { sort: sort,
                  genre: genre,
                  page: carrent_page*1+1
                }
        })
          .done(function( rez ) {
            //alert( rez );
            $("#"+sort+"_"+genre).html(rez);
            $('.load_wait').hide();
          });
  }
  if (carrent_page*1+1==max_page){
    $(this).attr('disabled','disabled');
    $(this).children('svg').addClass('opacity-25');
    $('.load_wait').hide();
  }
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
