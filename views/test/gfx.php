<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - gfx';
?>

<section class="white need-animate">
		<h3>Browse GFX</h3>
		<p></p>
		<div class="items">
      <?php if (isset($packs_gfx)):?>
      <?php foreach ($packs_gfx as $pack):?>
				<div class="item">
            <a href="<?=Url::to(['test/packgfx'])?>/<?=$pack['id']?>">
						<div class="container2 box">
							<img src="<?=(isset($pack['img']))?Yii::$app->request->baseUrl.'/modx/'.$pack['img']:Yii::$app->request->baseUrl.'/img/new/no-image.png'?>" class="image">
              <div class="middle">
                <i class="icon-camera-retro icon-3x"></i>
							</div>
						</div>
            </a>
						<a href="<?=Url::to(['test/packgfx'])?>/<?=$pack['id']?>">
							<div class="title-s"><?=$pack['title']?></div>
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

baseurl = "/site/gfx";
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
        url: '$url/ajax/gfx_filt',
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
