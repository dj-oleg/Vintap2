<?php
use yii\helpers\Url;

/** @var yii\web\View $this */
$this->title = 'TEST';
?>

<style>
body{margin: 0; padding: 0px}
   main{
       min-height:500px;
       display: block
   }
   pre{
       overflow: auto;
   }
   .demo{
       padding: 20px;
   }
   .image-wrapper{
       max-width: 600px;
       min-width: 200px;
   }
   img{
       max-width: 100%;
   }

   #image-4-wrapper .rcrop-outer-wrapper{
       opacity: .75;
   }
   #image-4-wrapper .rcrop-outer{
       background: #000
   }
   #image-4-wrapper .rcrop-croparea-inner{
       border: 1px dashed #fff;
   }

   #image-4-wrapper .rcrop-handler-corner{
       width:12px;
       height: 12px;
       background: none;
       border : 0 solid #51aeff;
   }
   #image-4-wrapper .rcrop-handler-top-left{
       border-top-width: 4px;
       border-left-width: 4px;
       top:-2px;
       left:-2px
   }
   #image-4-wrapper .rcrop-handler-top-right{
       border-top-width: 4px;
       border-right-width: 4px;
       top:-2px;
       right:-2px
   }
   #image-4-wrapper .rcrop-handler-bottom-right{
       border-bottom-width: 4px;
       border-right-width: 4px;
       bottom:-2px;
       right:-2px
   }
   #image-4-wrapper .rcrop-handler-bottom-left{
       border-bottom-width: 4px;
       border-left-width: 4px;
       bottom:-2px;
       left:-2px
   }
   #image-4-wrapper .rcrop-handler-border{
       display: none;
   }

   #image-4-wrapper .clayfy-touch-device.clayfy-handler{
       background: none;
       border : 0 solid #51aeff;
       border-bottom-width: 6px;
       border-right-width: 6px;
   }

   label{
       display: inline-block;
       width: 60px;
       margin-top: 10px;
   }
   #update{
       margin: 10px 0 0 60px ;
       padding: 10px 20px;
   }

   #cropped-original, #cropped-resized{
       padding: 20px;
       border: 4px solid #ddd;
       min-height: 60px;
       margin-top: 20px;
   }
   #cropped-original img, #cropped-resized img{
       margin: 5px;
   }

   #image-4-wrapper .rcrop-outer-wrapper{
    opacity: .75;
}
#image-4-wrapper .rcrop-outer{
    background: #000
}
#image-4-wrapper .rcrop-croparea-inner{
    border: 1px dashed #fff;
}

#image-4-wrapper .rcrop-handler-corner{
    width:12px;
    height: 12px;
    background: none;
    border : 0 solid #51aeff;
}
#image-4-wrapper .rcrop-handler-top-left{
    border-top-width: 4px;
    border-left-width: 4px;
    top:-2px;
    left:-2px
}
#image-4-wrapper .rcrop-handler-top-right{
    border-top-width: 4px;
    border-right-width: 4px;
    top:-2px;
    right:-2px
}
#image-4-wrapper .rcrop-handler-bottom-right{
    border-bottom-width: 4px;
    border-right-width: 4px;
    bottom:-2px;
    right:-2px
}
#image-4-wrapper .rcrop-handler-bottom-left{
    border-bottom-width: 4px;
    border-left-width: 4px;
    bottom:-2px;
    left:-2px
}
#image-4-wrapper .rcrop-handler-border{
    display: none;
}

// For touch devices we must use clayfy handler
#image-4-wrapper .clayfy-touch-device.clayfy-handler{
    background: none;
    border : 0 solid #51aeff;
    border-bottom-width: 6px;
    border-right-width: 6px;
}


        </style>

<link href="../dist/rcrop.min.css" media="screen" rel="stylesheet" type="text/css">

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

                  <div class="image-wrapper" id="image-4-wrapper">
                    <img id="image-4"  src="#" alt="profile picture" style="width: 732px;">
                  </div>

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



</div>
<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/dist/rcrop.min.js', ['depends' => [yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Yii::$app->request->baseUrl . '/dist/rcrop.min.css', ['depends' => [yii\web\JqueryAsset::className()]]);
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
          $("#image-4").attr("src", e.target.result);
          //$(".cropper-bg").css("background-image","url("+e.target.result+");");
          $('#image-4').rcrop({
              minSize : [200,200],
              preserveAspectRatio : true,
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

////////////////////////////////////////////////////////////////////////////////////////////
//
///////////////////////////////////////////////////////////////////////////////////////////////
$("#crop").click(function(){
    var img = $("#image-4").attr('src');
    $("#cropped_img").show();

    var srcOriginal = $("#image-4").rcrop('getDataURL',100,100);
    $("#cropped_img").attr('src',srcOriginal);
    $.ajax({
        type: "POST",
        url: 'https://vintapes.com/ajax/crop_image',
        data: {img_url: srcOriginal}
        });

    $("#div_change_avatar").addClass("hidden");
    $(".modal-popup-container").children(".inline-block").addClass("w-full");
    $("#image-4").attr('src',"#");

});


    $('#tttt').rcrop();




JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
