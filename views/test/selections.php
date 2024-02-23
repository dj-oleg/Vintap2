<?php
/** @var yii\web\View $this */
$this->title = 'Vintapes - selections';
use yii\helpers\Url;
?>

<section class="white need-animate">
		<h3>SELECTION</h3>
		<p>Discover curated samples sorted by moods. subgenres and artist. Updates dailly.</p>
		<div class="items">
      <?php if (isset($selections_g)):?>
			<?php foreach($selections_g as $key=>$pack): ?>
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
			<?php endforeach; ?>
      <?php endif; ?>
      <?php if (isset($selections_i)):?>
      <?php foreach ($selections_i as $key=>$pack):?>
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
			<?php endforeach; ?>
      <?php endif; ?>
		</div>
</section>

<div class="load_wait" style="position:fixed;top:0;left:0;height:100%;width:100%;z-index:99;display:none;">
   <div class="fa-5x" style="position:fixed;left:50%;top:50%;margin-top:-50px;margin-left:-50px;z-index:100;">
     <i class="fa-solid fa-sync fa-spin"></i>
   </div>
 </div>
<?php
$url=Yii::$app->request->baseUrl;
$script = <<< JS

baseurl = "/site/selections";
//зміна адресної строки
function setLocation(curLoc){
  location.href = curLoc;
  location.hash = curLoc;
}

function allfilter(){
  $('.load_wait').show();
  var sel = $( ".sort.active" ).html();
  var search = $("#search-selections").val();
  var search = (search.length > 2) ? search : '';
  var filt = '?';
  filt += (sel != undefined ) ? 'sel='+sel+'&' : '';
  filt += (search.length > 2) ? 'search='+search+'&' : '';
  filt = filt.slice(0, -1);
  //alert(filt);
  //зміна юрл
  window.history.pushState("", "Vintapes - samples", baseurl + filt);
  //id user or album
  //аякс штмл
  $.ajax({
        method: "POST",
        url: '$url/ajax/selections_filt',
        data: { sel: sel,
                search: search
              }
      })
        .done(function( rez ) {
          //alert( "rez: " + rez );
          $('.load_wait').hide();
          $("#selections_table").html(rez);
          //console.log(wave);
        });
}
//сортування
$(".sort").click(function(){
  allfilter();
});
//пошук search-creators
$("#search-selections").keyup(function () {
  var search = $(this).val();
  if (search.length > 2){
    $(this).css('border-bottom','1px solid rgb(85, 43, 252)');
    allfilter();
    $(this).attr('clear','no');
  }else{
    $(this).css('border-bottom','0px solid rgb(85, 43, 252)');
    var clear = $(this).attr('clear');
    if(clear!='yes') allfilter();
    $(this).attr('clear','yes');
  }
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
