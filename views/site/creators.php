<?php
/** @var yii\web\View $this */
$this->title = $meta->longtitle;
$this->registerMetaTag(['name' => 'description', 'content' => $meta->description], 'description');
$this->registerMetaTag(['name' => 'keywords', 'content' => $meta->introtext]);
use yii\helpers\Url;
//if ((!isset($order))||($order=='')) echo3($order);
?>


<div class="w-full">
                    <div data-fetch-key="data-v-d580b1ea:0" class="pt-10" data-v-d580b1ea>
                       <div class="mx-auto mb-16 max-w-[550px] px-1 sm:mb-32 sm:px-14" data-v-d580b1ea>
                          <h1 class="text-center text-[33px] font-medium tracking-[-1.2px] sm:text-6xl" data-v-d580b1ea>Browse creators</h1>
                          <div class="sort-menu my-7 p-[3px] sm:my-10" data-v-d580b1ea>
                            <button type="button" class="<?=((!isset($order))||($order==''))?'active':''?> sort" data-v-1e870b96>Trending</button>
                            <button type="button" class="<?=($order=='Popular')?'active':''?> sort" data-v-1e870b96>Popular</button>
                            <button type="button" class="<?=($order=='Recent')?'active':''?> sort" data-v-1e870b96>Recent</button>
                            <button type="button" class="<?=($order=='A-Z')?'active':''?> sort" data-v-1e870b96>A-Z</button>
                          </div>
                          <div data-v-d580b1ea>
                             <form class="relative" action="<?=Url::to(['site/creators'])?>" data-v-d580b1ea>
                               <input type="hidden" name="order" value="<?=$order?>">
                                <label for="search-creators" class="absolute left-0 top-[3px] text-5c5c5c dark:text-[#B7B7B7] sm:left-auto sm:right-0" data-v-d580b1ea>
                                   <svg viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 rotate-90" data-v-d580b1ea>
                                      <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M11.3367 11.8136L15.9087 16.4786C16.0262 16.5988 16.0226 16.7899 15.9001 16.9055C15.8404 16.9617 15.7638 16.9897 15.6869 16.9897C15.6059 16.9897 15.5253 16.9589 15.465 16.8971L10.8819 12.2205C9.76317 13.1307 8.32778 13.6792 6.76378 13.6792C3.20071 13.6792 0.302246 10.8355 0.302246 7.33962C0.302246 3.84377 3.20071 1 6.76378 1C10.3269 1 13.2253 3.84377 13.2253 7.33962C13.2253 9.08423 12.5029 10.6661 11.3367 11.8136ZM0.917631 7.33962C0.917631 10.5025 3.54009 13.0755 6.76378 13.0755C9.98717 13.0755 12.6099 10.5025 12.6099 7.33962C12.6099 4.17675 9.98748 1.60377 6.76378 1.60377C3.54009 1.60377 0.917631 4.17675 0.917631 7.33962Z"></path>
                                      <path fill="currentColor" d="M15.9087 16.4786L16.0874 16.3038L16.0873 16.3037L15.9087 16.4786ZM11.3367 11.8136L11.1614 11.6354L10.9835 11.8104L11.1582 11.9886L11.3367 11.8136ZM15.9001 16.9055L16.0714 17.0876L16.0717 17.0873L15.9001 16.9055ZM15.465 16.8971L15.6441 16.7226L15.6436 16.7221L15.465 16.8971ZM10.8819 12.2205L11.0605 12.0455L10.901 11.8828L10.7242 12.0266L10.8819 12.2205ZM16.0873 16.3037L11.5153 11.6386L11.1582 11.9886L15.7302 16.6536L16.0873 16.3037ZM16.0717 17.0873C16.2958 16.8757 16.3027 16.5239 16.0874 16.3038L15.73 16.6535C15.7498 16.6737 15.7493 16.7041 15.7285 16.7237L16.0717 17.0873ZM15.6869 17.2397C15.8246 17.2397 15.9633 17.1893 16.0714 17.0876L15.7288 16.7234C15.7175 16.7341 15.7029 16.7397 15.6869 16.7397V17.2397ZM15.286 17.0715C15.3962 17.1847 15.5428 17.2397 15.6869 17.2397V16.7397C15.6691 16.7397 15.6544 16.7332 15.6441 16.7226L15.286 17.0715ZM10.7034 12.3955L15.2865 17.072L15.6436 16.7221L11.0605 12.0455L10.7034 12.3955ZM6.76378 13.9292C8.38713 13.9292 9.87784 13.3597 11.0397 12.4145L10.7242 12.0266C9.6485 12.9017 8.26843 13.4292 6.76378 13.4292V13.9292ZM0.0522461 7.33962C0.0522461 10.978 3.06715 13.9292 6.76378 13.9292V13.4292C3.33427 13.4292 0.552246 10.6929 0.552246 7.33962H0.0522461ZM6.76378 0.75C3.06715 0.75 0.0522461 3.70123 0.0522461 7.33962H0.552246C0.552246 3.98631 3.33427 1.25 6.76378 1.25V0.75ZM13.4753 7.33962C13.4753 3.70123 10.4604 0.75 6.76378 0.75V1.25C10.1933 1.25 12.9753 3.98631 12.9753 7.33962H13.4753ZM11.5121 11.9918C12.7233 10.8 13.4753 9.15492 13.4753 7.33962H12.9753C12.9753 9.01353 12.2825 10.5323 11.1614 11.6354L11.5121 11.9918ZM6.76378 12.8255C3.67365 12.8255 1.16763 10.36 1.16763 7.33962H0.667631C0.667631 10.645 3.40653 13.3255 6.76378 13.3255V12.8255ZM12.3599 7.33962C12.3599 10.3599 9.85362 12.8255 6.76378 12.8255V13.3255C10.1207 13.3255 12.8599 10.645 12.8599 7.33962H12.3599ZM6.76378 1.85377C9.85392 1.85377 12.3599 4.31929 12.3599 7.33962H12.8599C12.8599 4.03422 10.121 1.35377 6.76378 1.35377V1.85377ZM1.16763 7.33962C1.16763 4.31929 3.67365 1.85377 6.76378 1.85377V1.35377C3.40653 1.35377 0.667631 4.03422 0.667631 7.33962H1.16763Z"></path>
                                   </svg>
                                </label>
                                <input id="search-creators" clear="<?=(isset($search))?'no':'yes'?>" name="search" type="text" placeholder="Search creators..." value="<?=$search?>" class="form-field w-full rounded-none border-0 border-b-2 border-black !border-opacity-[0.12] bg-[#fbfbfb] px-0 pt-0 pl-7 pr-14 placeholder:font-medium placeholder:text-5c5c5c dark:border-white dark:bg-[#111111] dark:placeholder:text-[#B7B7B7] sm:pl-0" <?=(isset($search))?'style="border-bottom:1px solid rgb(85, 43, 252);"':''?> data-v-d580b1ea>
                                <button type="submit" class="absolute right-8 top-0.5 z-10 w-[18px] text-5c5c5c dark:text-[#b7b7b7]" style="display:none;" data-v-d580b1ea>
                                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5" data-v-d580b1ea>
                                      <path d="M14.8482 7.19779C15.1737 7.52323 15.1737 8.05087 14.8482 8.3763L13.2153 10.0093L14.8482 11.6422C15.1737 11.9677 15.1737 12.4953 14.8482 12.8207C14.5228 13.1462 13.9952 13.1462 13.6697 12.8207L12.0368 11.1878L10.4038 12.8207C10.0784 13.1462 9.55072 13.1462 9.22528 12.8207C8.89984 12.4953 8.89984 11.9677 9.22528 11.6422L10.8582 10.0093L9.22528 8.3763C8.89984 8.05087 8.89984 7.52323 9.22528 7.19779C9.55072 6.87236 10.0784 6.87236 10.4038 7.19779L12.0368 8.83076L13.6697 7.19779C13.9952 6.87236 14.5228 6.87236 14.8482 7.19779Z" class="fill-current"></path>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22438 3.53458C6.38262 3.35373 6.61122 3.25 6.85153 3.25H16.4812C17.0951 3.25 17.6839 3.49388 18.118 3.92799C18.5521 4.36211 18.796 4.95089 18.796 5.56481V14.4537C18.796 15.0676 18.5521 15.6564 18.118 16.0905C17.6839 16.5246 17.0951 16.7685 16.4812 16.7685H6.85153C6.61122 16.7685 6.38262 16.6648 6.22438 16.4839L1.03919 10.558C0.764279 10.2438 0.764279 9.77469 1.03919 9.46051L6.22438 3.53458ZM7.22967 4.91667L2.77365 10.0093L7.22967 15.1019H16.4812C16.6531 15.1019 16.8179 15.0336 16.9395 14.912C17.061 14.7905 17.1293 14.6256 17.1293 14.4537V5.56481C17.1293 5.39292 17.061 5.22806 16.9395 5.1065C16.8179 4.98495 16.6531 4.91667 16.4812 4.91667H7.22967Z" class="fill-current"></path>
                                   </svg>
                                </button>
                             </form>
                          </div>
                       </div>
                       <div id="creators_table" class="grid grid-cols-2 gap-x-4 gap-y-10 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-8" data-v-d580b1ea>
                       <?php if(isset($creators)):?>
                         <?php foreach ($creators as $creator): ?>
                          <a href="<?=Url::to(['site/creator','id'=>$creator['id']])?>" class="group relative" data-v-d580b1ea>
                             <div class="relative">
                                <div class="relative mx-auto block h-28 w-28 rounded-full border border-black/[0.08] dark:border-white/[0.08] sm:h-[132px] sm:w-[132px]">
                                   <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$creator['image']?>" alt="" src="<?=Yii::$app->request->baseUrl?>/modx/<?=($creator['image']!="")?$creator['image']:'images/user_photo/user_icon.png'?>" class="absolute inset-0 w-full rounded-full"> <!---->
                                </div>
                             </div>
                             <div class="mt-4 flex w-full items-center justify-center">
                                <div class="truncate text-[15px] font-medium leading-[18px] group-hover:underline"><?=$creator['name']?></div>
                             </div>
                             <div class="mt-2 flex items-center justify-center text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5">
                                   <g clip-path="url(#clip0_3125_7118)">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.903991 1.40399C1.16266 1.14532 1.51349 1 1.87931 1H6.03379C6.27909 1 6.51175 1.10882 6.66899 1.29709L8.26399 3.2069H13.9069C15.339 3.2069 16.5 4.36787 16.5 5.8V11.8453C16.5 13.2774 15.339 14.4384 13.9069 14.4384H3.0931C1.66097 14.4384 0.5 13.2775 0.5 11.8453V2.37931C0.5 2.01349 0.64532 1.66266 0.903991 1.40399ZM2.15517 2.65517V11.8453C2.15517 12.3633 2.5751 12.7833 3.0931 12.7833H13.9069C14.4249 12.7833 14.8448 12.3633 14.8448 11.8453V5.8C14.8448 5.28199 14.4249 4.86207 13.9069 4.86207H8.12339C7.92309 4.86038 7.72555 4.81506 7.54452 4.72931C7.36383 4.64372 7.20391 4.51988 7.07584 4.36636M7.07511 4.36549L5.64672 2.65517H2.15517" class="fill-current"></path>
                                   </g>
                                   <defs>
                                      <clipPath id="clip0_3125_7118">
                                         <rect width="16" height="16" transform="translate(0.5)" class="fill-current"></rect>
                                      </clipPath>
                                   </defs>
                                </svg>
                                <span class="ml-1"><?=$creator['count_packs']?></span>
                             </div>
                             <button class="absolute bottom-10 right-5 hidden rounded-full bg-white p-4 group-hover:opacity-100 dark:bg-121212 lg:opacity-0">
                                <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                                   <!---->
                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M9.801 17.3781C7.99216 16.2649 6.30942 14.9547 4.7829 13.471C3.70969 12.4025 2.89267 11.0998 2.39441 9.66282C1.49778 6.87525 2.5451 3.68402 5.4761 2.7396C7.01651 2.2437 8.69887 2.52713 9.99691 3.50123C11.2954 2.52831 12.9772 2.24498 14.5177 2.7396C17.4487 3.68402 18.5036 6.87525 17.6069 9.66282C17.1087 11.0998 16.2917 12.4025 15.2184 13.471C13.6919 14.9547 12.0092 16.2649 10.2003 17.3781L10.0044 17.5L9.801 17.3781Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                   <path d="M13.1162 5.87793C14.004 6.16151 14.6347 6.95851 14.7136 7.89625" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                             </button>
                          </a>
                        <?php endforeach; ?>
                        <?php endif; ?>

                       </div>
                       <!--<div class="mt-14 pb-16 text-center sm:pb-28" data-v-d580b1ea><button type="button" class="btn-purple btn-lg" data-v-d580b1ea>View more creators</button></div>-->
                    </div>
                 </div>
              </div>
              <section class="call-to-action-block mt-10 bg-white py-20 px-5 dark:bg-black -mb-20" style="filter:drop-shadow(0px 0px 48px rgba(0, 0, 0, 0.04));" data-v-fdfdfa80>
                 <div class="mx-auto max-w-3xl text-center" data-v-fdfdfa80>
                    <h3 class="mx-auto max-w-[668px] text-2xl font-medium leading-8 tracking-[-0.4px] sm:text-[32px] sm:leading-[44px]" data-v-fdfdfa80>
                       Get paid for your samples and have the chance to land major record placements
                    </h3>
                    <div class="my-9 flex items-center justify-center -space-x-8 sm:-space-x-10" data-v-fdfdfa80><span class="h-[72px] w-[72px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[88px] sm:w-[88px]" style="background-image: url(assets/img/join-wavs-alt/1.png)" data-v-fdfdfa80></span> <span class="h-[88px] w-[88px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[111px] sm:w-[111px]" style="background-image: url(assets/img/join-wavs-alt/2.png)" data-v-fdfdfa80></span> <span class="z-[3] h-[104px] w-[104px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[132px] sm:w-[132px]" style="background-image: url(assets/img/join-wavs-alt/3.png)" data-v-fdfdfa80></span> <span class="z-[2] h-[88px] w-[88px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[111px] sm:w-[111px]" style="background-image: url(assets/img/join-wavs-alt/4.png)" data-v-fdfdfa80></span> <span class="z-[1] h-[72px] w-[72px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[88px] sm:w-[88px]" style="background-image: url(assets/img/join-wavs-alt/5.png)" data-v-fdfdfa80></span></div>
                   
                 </div>
              </section>

              <style>

              @media (min-width: 640px)
              .sort-menu a {
                  padding-left: 18.5px;
                  padding-right: 18.5px;
              }
              .sort-menu a{
              display: inline-block;
                  text-align: center;
                }
              .dark .sort-menu a.active[data-v-d580b1ea] {
                  --tw-bg-opacity: 1;
                  background-color: rgb(112 77 252/var(--tw-bg-opacity));
              }
              .sort-menu a.active[data-v-d580b1ea] {
                  border-radius: 0.5rem;
                  --tw-bg-opacity: 1;
                  background-color: rgb(85 43 252/var(--tw-bg-opacity));
                  --tw-text-opacity: 1;
                  color: rgb(255 255 255/var(--tw-text-opacity));
                  --tw-shadow: 0px 4px 4px rgba(0,0,0,0.08);
                  --tw-shadow-colored: 0px 4px 4px var(--tw-shadow-color);
                  box-shadow: var(--tw-ring-offset-shadow,0 0 transparent),var(--tw-ring-shadow,0 0 transparent),var(--tw-shadow);
                  transition-property: color,background-color,border-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-text-decoration-color,-webkit-backdrop-filter;
                  transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
                  transition-property: color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-text-decoration-color,-webkit-backdrop-filter;
                  transition-timing-function: cubic-bezier(.4,0,.2,1);
                  transition-duration: .3s;
              }
              @media (min-width: 640px)
              .sort-menu a[data-v-d580b1ea] {
                  padding-left: 18.5px;
                  padding-right: 18.5px;
              }
              .sort-menu a[data-v-d580b1ea] {
                  position: relative;
                  white-space: nowrap;
                  padding: 0.375rem 0.5rem;
                  font-size: .875rem;
                  line-height: 1.25rem;
              }
              [type=button], [type=reset], [type=submit], button {
                  -webkit-appearance: button;
                  background-color: transparent;
                  background-image: none;
              }
              </style>
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
