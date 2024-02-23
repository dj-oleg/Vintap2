<?php
use yii\helpers\Url;

/** @var yii\web\View $this */
$this->title = 'TEST';
?>

<link rel="stylesheet" href="jquery.Jcrop.min.css" type="text/css" />
<style>

input#crop {
    padding: 5px 25px 5px 25px;
    background: lightseagreen;
    border: #485c61 1px solid;
    color: #FFF;
    visibility: hidden;
}

#cropped_img {
    margin-top: 40px;
}
</style>

<h1>Test</h1>
<!--------------------------------->
<img src="#" id="cropped_img" style="display: none; height:100px;">
<hr>
<br><br>
<button type="button" class="show_modal_change_avatar btn-purple btn-sm relative bg-black/[0.48] hover:bg-black/[0.52] dark:bg-white/[0.16] dark:hover:bg-white/[0.2]">
   Change avatar
   <div class="absolute top-0 left-0 flex h-full w-full items-center justify-center bg-black bg-opacity-60 text-white opacity-0 transition-opacity group-hover:opacity-100">
      <div class="text-center">
         <svg viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-5">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1399 2.6078C14.1226 1.3558 15.7106 1.42113 16.9639 2.4038L18.8173 3.85713C20.0706 4.8398 20.5146 6.3638 19.5319 7.61847L8.47995 21.7185C8.11061 22.1905 7.54661 22.4691 6.94661 22.4758L2.68395 22.5305L1.71861 18.3771C1.58261 17.7945 1.71861 17.1811 2.08795 16.7078L13.1399 2.6078Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M11.0703 5.24805L17.4623 10.2587" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
         </svg>
         <p class="mt-3 w-full text-xs font-bold">EDIT IMAGE</p>
      </div>
      <input type="file" class="avtarload absolute top-0 left-0 z-10 h-full w-full cursor-pointer opacity-0">
   </div>
</button>


<div id="div_change_avatar" class="hidden fixed inset-0 z-60 h-full w-full overflow-x-hidden bg-black bg-opacity-80 dark:bg-[#2c2c2c] dark:bg-opacity-70 overflow-y-auto">
   <div class="animated modal-popup-container absolute inset-0 h-full w-full text-center px-3">
      <div class="inline-block w-full text-left align-middle">
         <div id="modal_change_avatar" class="relative mx-auto max-w-full rounded-2xl bg-white px-7 pt-7 pb-9 text-black shadow-lg dark:bg-121212 dark:text-white my-8" style="width: 788px;">
            <button class="hide_modal_change_avatar text-primary absolute top-2.5 right-2.5 z-10 flex h-10 w-10 items-center justify-center opacity-100 hover:opacity-70">
               <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-5">
                  <g>
                     <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="7" x2="25" y1="7" y2="25" class="cls-1"></line>
                     <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="7" x2="25" y1="25" y2="7" class="cls-1"></line>
                  </g>
               </svg>
            </button>
            <div>
               <h3 class="mb-10 text-center text-2xl font-medium">Set Profile Image</h3>
               <div>
                 <div>
                  <img id="cropbox"  src="#" alt="profile picture" style="width: 732px;">
                </div>
                  <!--<span class="cropper-dashed dashed-h"></span>
                  <span class="cropper-dashed dashed-v"></span>
                  <span class="cropper-center"></span>
                  <span class="cropper-face cropper-move" data-cropper-action="all"></span>
                  <span class="cropper-line line-e" data-cropper-action="e"></span>
                  <span class="cropper-line line-n" data-cropper-action="n"></span>
                  <span class="cropper-line line-w" data-cropper-action="w"></span>
                  <span class="cropper-line line-s" data-cropper-action="s"></span>
                  <span class="cropper-point point-e" data-cropper-action="e"></span>
                  <span class="cropper-point point-n" data-cropper-action="n"></span>
                  <span class="cropper-point point-w" data-cropper-action="w"></span>
                  <span class="cropper-point point-s" data-cropper-action="s"></span>
                  <span class="cropper-point point-ne" data-cropper-action="ne"></span>
                  <span class="cropper-point point-nw" data-cropper-action="nw"></span>
                  <span class="cropper-point point-sw" data-cropper-action="sw"></span>
                  <span class="cropper-point point-se" data-cropper-action="se"></span>-->
                </div>
              </div>

               <div class="mt-10 text-center">
                  <button class="btn" type="button" id="crop" >
                     <span class="spin w-4">
                        <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="animate-spin">
                           <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25"></circle>
                           <path fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" class="opacity-75"></path>
                        </svg>
                     </span>
                     <span class="">Crop and Save</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!--
<hr>
<link rel="stylesheet" href="../design/111/jquery.Jcrop.min.css" type="text/css" />
<script src="../design/111/jquery.min.js"></script>
<script src="../design/111/jquery.Jcrop.min.js"></script>

<style>
body {
    width: 550px;
    font-family: Arial;
}

input#crop {
    padding: 5px 25px 5px 25px;
    background: lightseagreen;
    border: #485c61 1px solid;
    color: #FFF;
    visibility: hidden;
}

#cropped_img {
    margin-top: 40px;
}
</style>
<h1>How to Crop Image using jQuery</h1>

  <div>
      <img src="../design/111/original-image.jpeg" id="cropbox" class="img" /><br />
  </div>
  <div id="btn">
      <input type='button' id="crop" value='CROP'>
  </div>
  <div>
      <img src="#" id="cropped_img" style="display: none;">
  </div>
  <script type="text/javascript">

      var size;
      $('#cropbox').Jcrop({
        aspectRatio: 1,
        onSelect: function(c){
         size = {x:c.x,y:c.y,w:c.w,h:c.h};
         $("#crop").css("visibility", "visible");
        }
      });

      $("#crop").click(function(){
          var img = $("#cropbox").attr('src');
          $("#cropped_img").show();
          $("#cropped_img").attr('src','../design/111/image-crop.php?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
      });

</script>
</hr>
-->

</div>
<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/crop/jquery.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Yii::$app->request->baseUrl . '/crop/jquery.Jcrop.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<?php
$url=Url::to(['ajax/crop_image']);
$script = <<< JS
//
//modal change avatar
//
$(".avtarload").change(function(e){
  //var img = $(".avtarload").val();
  //alert(img);
  var files = e.target.files;
  if( typeof files == 'undefined' ) return;

  for (var i = 0, file; file = files[i]; i++) {
    //var typefile = file.type;
    //alert(typefile.match('image*'));
    if (file.type.match('image*')){
      var reader = new FileReader();
      reader.onload = (function(event) {
        //alert(event.target.result);
        return function(e) {
          $("#cropbox").attr("src", e.target.result);
          //$(".cropper-bg").css("background-image","url("+e.target.result+");");
          var size;
          $('#cropbox').Jcrop({
            aspectRatio: 1,
            onSelect: function(c){
             size = {x:c.x,y:c.y,w:c.w,h:c.h};
             $("#crop").css("visibility", "visible");
            }
          });


        };
      })(file);
      reader.readAsDataURL(file);




    }
  }
  $("#div_change_avatar").removeClass("hidden");
  $(".modal-popup-container").children(".inline-block").removeClass("w-full");
});
$(document).click(function (e) {
  if(!$(e.target).closest('#modal_change_avatar').length && !$(e.target).is('#modal_change_avatar')&& !$(e.target).is('.show_modal_change_avatar')) {
    $("#div_change_avatar").addClass("hidden");
    $(".modal-popup-container").children(".inline-block").addClass("w-full");
 }
});
$(".hide_modal_change_avatar") .click(function () {
    $("#div_change_avatar").addClass("hidden");
    $(".modal-popup-container").children(".inline-block").addClass("w-full");
});
//$(document).ready(function(){
$("#crop").click(function(){
    var img = $("#cropbox").attr('src');
    $("#cropped_img").show();
    //alert(size);
    $("#cropped_img").attr('src','../design/111/image-crop.php?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
    //$("#cropped_img").attr('src','$url?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
    //$("#cropped_img").attr('src',img);
    $("#div_change_avatar").addClass("hidden");
    $(".modal-popup-container").children(".inline-block").addClass("w-full");
});
  //});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
