<?php
use yii\helpers\Url;
$this->title = 'Vintapes - pack';

?>

<section id="about" class="white need-animate" style="justify-content: left;margin-top:60px;">
		<div class="about-text">
				<div class="promo" style="width: 250px">
          <img src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" style="width: 250px">
				</div>
		</div>
		<div class="promo" style="padding-top:0px; border:0px">
				<h4><?=$pack['title']?></h4>
				<p><?=$pack['description']?></p>
        <p><i class="icon-reorder"></i>
        <span><?=$pack['count_songs']?> Samples</span></p>
        <p>
           <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-3.5 w-3.5" data-v-8d6f3130>
              <path d="M7.25 1V8.035C6.7025 7.405 5.9 7 5 7C3.3425 7 2 8.3425 2 10C2 11.6575 3.3425 13 5 13C6.6575 13 8 11.6575 8 10V4H12.5V1H7.25Z" fill="currentColor"></path>
           </svg>
           <?php $genres_arr=array_unique(explode("||", $pack['genre'])); $i=0;
           foreach ($genres_arr as $key => $genre):  $i++; ?>
           <a style="color:white" href="<?=Url::to(['site/samples'])?>" class="hover:underline"  style="margin-left:4px;" data-v-8d6f3130><?=$genre?></a>
           <?=($i<count($genres_arr))?', ':''?>
         <?php endforeach;?>
       </p>
      <h4>$ <?=(isset($pack['price']))?$pack['price']:0?></h4>
       <div class="mt-6 flex items-center" data-v-8d6f3130>
          <button num_audio="<?=$pack['id']?>" type="button" class="media">
             <i class="fa-solid fa-cart-plus" style="padding-right:10px"></i>
             Get Pack
          </button>
          <i class="icon-heart-empty icon-2x" style="padding-right:10px"></i>
       </div>
		</div>
</section>


<section class="white need-animate">
		<h3>Similar packs</h3>
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



<div class="load_wait" style="position:fixed;top:0;left:0;height:100%;width:100%;z-index:99;display:none;">
   <div class="fa-5x" style="position:fixed;left:50%;top:50%;margin-top:-50px;margin-left:-50px;z-index:100;">
     <i class="fa-solid fa-sync fa-spin"></i>
   </div>
 </div>


<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/js/filters_sound.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<script>
var wavesurfer = WaveSurfer.create({
     container: '#waveform',
     waveColor: '#bdc3c7',
     progressColor: '#6F7375',
     cursorWidth: 0,
     barHeight: 1.4,
     barWidth: 2,
     barGap: 2,
     fillParent: true,
     hideScrollbar: true,
     loopSelection: false,
     height:60
 });
 wavesurfer.load('http://poligon.s-hostp.net/modx/<?=$pack['audio_file']?>');
</script>
<?php
$url=Yii::$app->request->baseUrl;

$script = <<< JS

baseurl = "/test/pack/$id";

//кнопка плей
$('#songs_table').on("click", 'svg.h-8', function(){
//$('svg.h-8').click(function(){
  $('svg.h-8').html('<path data-v-d5f1e0b0="" d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current"></path><path data-v-d5f1e0b0="" d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white"></path>');
  var num_audio = $(this).attr("num_audio");
  var attr = $(this).attr('play');
  /*Object.keys(wave).forEach(key => {
    wave[key].pause();
  });*/
    if (attr=="yes"){
      $(this).attr("play", "no");
      wavesurfer.pause();
    }
    else{
      $('svg.h-8').attr("play", "no");
      $(this).attr("play", "yes");
      $(this).html('<path data-v-d5f1e0b0="" d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current"></path><rect data-v-d5f1e0b0="" width="12" height="12" cx="100" x="14" y="14" class="fill-black group-hover:fill-white dark:fill-white"></rect>');
      wavesurfer.playPause();
    }
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
