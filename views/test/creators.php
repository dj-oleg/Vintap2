<?php
/** @var yii\web\View $this */
$this->title = 'Vintapes - creators';
use yii\helpers\Url;
//if ((!isset($order))||($order=='')) echo3($order);
?>
<section class="circle white need-animate">
		<h3>CREATORS ON THE RICE</h3>
		<p></p>
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

<div class="load_wait" style="position:fixed;top:0;left:0;height:100%;width:100%;z-index:99;display:none;">
   <div class="fa-5x" style="position:fixed;left:50%;top:50%;margin-top:-50px;margin-left:-50px;z-index:100;">
     <i class="fa-solid fa-sync fa-spin"></i>
   </div>
 </div>
<?php
$url=Yii::$app->request->baseUrl;
$script = <<< JS

baseurl = "/site/creators";
//зміна адресної строки
function setLocation(curLoc){
  location.href = curLoc;
  location.hash = curLoc;
}
function allfilter(){
  $('.load_wait').show();
  var order = $( ".sort.active" ).html();
  var search = $("#search-creators").val();
  var search = (search.length > 2) ? search : '';
  var filt = '?';
  filt += (order != undefined ) ? 'order='+order+'&' : '';
  filt += (search.length > 2) ? 'search='+search+'&' : '';
  filt = filt.slice(0, -1);
  //alert(filt);
  //зміна юрл
  window.history.pushState("", "Vintapes - samples", baseurl + filt);
  //id user or album
  //аякс штмл
  $.ajax({
        method: "POST",
        url: '$url/ajax/creator_filt',
        data: { order: order,
                search: search
              }
      })
        .done(function( rez ) {
          //alert( "rez: " + rez );
          $('.load_wait').hide();
          $("#creators_table").html(rez);
          //console.log(wave);
        });
}
//сортування
$(".sort").click(function(){
  allfilter();
});
//пошук search-creators
$("#search-creators").keyup(function () {
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
