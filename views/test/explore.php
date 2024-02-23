<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - explore';
?>


<section class="white need-animate">
		<h3>WHATS NEW</h3>
		<p>Check out the last packs oploaded by the top creators.</p>
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
		<h3>TRENDING</h3>
		<p>The best performing packs uploaded with the last 3 week.</p>
		<div class="items">
			<?php foreach($packs_trending as $key=>$pack): ?>
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
		<h3>SELECTION</h3>
		<p>Discover curated samples sorted by moods. subgenres and artist. Updates dailly.</p>
		<div class="items">
			<?php foreach($selections_g as $key=>$pack): ?>
			<?php if($key<8):?>
				<div class="item">
						<div audio_id="<?=$pack['audio_id']?>" class="container2 box">
							<img src="<?=(isset($pack['image']))?Yii::$app->request->baseUrl.'/modx/'.$pack['image']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
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
						<a href="<?=Url::to(['test/samples'])?>?genres=<?=$this->context->num_genre($pack['genre'])?>">
							<div class="title-s"><?=$pack['genre']?></div>
						</a>
				</div>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>
</section>
<section class="circle white need-animate">
		<h3>CREATORS ON THE RICE</h3>
		<p>The top performing Creators the last 60 days.</p>
		<div class="items">
			<?php foreach ($creators as $creator): ?>
				<a href="<?=Url::to(['site/creator','id'=>$creator['id']])?>">
				<div class="item">
						<div class="box">
							<img class="img-creator" src="<?=Yii::$app->request->baseUrl?>/modx/<?=($creator['image']!="")?$creator['image']:'images/user_photo/user_icon.png'?>">
						</div>
						<div class="title-s"><?=$creator['name']?></div>
				</div>
			</a>
			<?php endforeach; ?>
		</div>
</section>
<section class="white need-animate">
		<h3>HIDDEN GEMS</h3>
		<p></p>
		<div class="items">
			<?php foreach($packs_hidden_gems as $key=>$pack): ?>
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
<h3>CONTACT</h3>
</section>
<section id="contact" class="white need-animate">
		<div class="cont">
				<form action="#" method="POST">
						<input type="text" name="name" class="form-control" required placeholder="Your name">
						<input type="email"  name="email" class="form-control" required placeholder="Your email">
						<textarea  name="message" class="form-control" required placeholder="Message"></textarea>
						<button type="submit" class="btn btn-orange">SUBMIT</button>
					</form>
		</div>
		<div class="manager">
				<h4>MANAGMENT</h4>
				<div>Ім'я. Призвище. Та інше.</div>
				<div class="promo-2">
						<p>Тут надо інформацію. Чи може бути группа.</p>
				</div>
		</div>
</section>

<?php

$csrfToken = Yii::$app->request->getCsrfToken();

$script = <<< JS

//плей маин слайдер
$(".play-btn").click(function(){
  var audio_id = $(this).attr('audio_id');
  var chek_pause= $(this).attr('pause');
  var btn = $(this);


  $.ajax({
      method: "POST",
      url: base_url+"/ajax/audio_pack",
      data: { audio_id: audio_id, "_csrf": "$csrfToken"}
    })
    .done(function( rez ) {
         url = rez;
         audio.src = url;
         $(".play-btn").children('svg').html('<path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path><path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>');
         $(".pointer-events-auto").children().children().html('<path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current" data-v-e4982a0e=""></path><path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16" data-v-e4982a0e=""></path><path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon" data-v-e4982a0e=""></path>');
         $(".pointer-events-auto").parent().addClass("opacity-0");
         if(chek_pause=='yes'){
           //play
           clearInterval(refresh_slider);
           audio.play();
           btn.attr('pause','no');
           btn.children('svg').html('<path data-v-d5f1e0b0="" d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current"></path><rect data-v-d5f1e0b0="" width="12" height="12" cx="100" x="14" y="14" class="fill-white"></rect>');
         }else{
           audio.pause();
           refresh_slider = setInterval(slider, 6000);
           $(".play-btn").children('svg').html('<path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path><path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>');
         }
    });
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
