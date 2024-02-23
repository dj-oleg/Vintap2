<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - gfx';
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
        <p>
          <i class="fa-solid fa-image" style="padding-right:10px"></i>
          <span class="mr-5" data-v-8d6f3130><?=(isset($all_images))?count($all_images):0?> Images</span>
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
		<h3>Images preview</h3>
		<div class="items">
      <?php if (isset($all_images)):?>
      <?php foreach($all_images as $key => $image):
        if (isset($image->image_preview)):?>
				<div class="item">
						<div audio_id="<?=$pack['id']?>" class="container2 box">
							<img src="<?=str_replace(" ", '%20', Yii::$app->request->baseUrl.'/modx/'.$image->image_preview)?>" class="image">
							<div class="middle">
                <i class="icon-zoom-in icon-2x"></i>

							</div>
						</div>
				</div>
      <?php endif; endforeach; ?>
      <?php endif; ?>
		</div>
</section>
<!----------------------------------------->
 <?php
 $this->registerJsFile(Yii::$app->request->baseUrl . '/js/filters_sound.js', ['depends' => [yii\web\JqueryAsset::className()]]);
 ?>
 <?php

 $script = <<< JS
 //add new samples
 $(".btn_add_sample").click(function(){
   var img = $(this).attr('img');
   $('#image-4').attr('src',img);
   $("#div_add_sample").removeClass("hidden");
   $(".modal-popup-container2").children(".inline-block").removeClass("w-full");
 });
 $(document).click(function (e) {
   if(!$(e.target).closest('#modal_add_sample').length && !$(e.target).is('#modal_add_sample')&& !$(e.target).is('.btn_add_sample')) {
     $("#div_add_sample").addClass("hidden");
     $(".modal-popup-container2").children(".inline-block").addClass("w-full");
  }
 });
 $(".hide_modal_add_sample") .click(function () {
     $("#div_add_sample").addClass("hidden");
     $(".modal-popup-container2").children(".inline-block").addClass("w-full");
 });

 JS;
 $this->registerJs($script, yii\web\View::POS_READY);
 ?>
