<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = $meta->longtitle;
$this->registerMetaTag(['name' => 'description', 'content' => $meta->description], 'description');
$this->registerMetaTag(['name' => 'keywords', 'content' => $meta->introtext]);
?>
<style>
.gradient:after {
	content: "";
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: transparent;
	background-image: linear-gradient(to right, rgba(0,0,0,1), 85%, rgba(255,255,255,0));
	/*opacity: 0.5;*/
}
.imgsize{
  position: absolute;
   top:-30%;
   right: 0%;
   transform:translate(0%,0%);
   height:160%;
   object-fit:cover;
}


@media(min-width:320px) and (max-width:450px){
.myFirstTop{
   display: grid;
  /* grid-template-rows: 15% 15%; */
  grid-template-columns: 50% 50%;
  margin:0 auto;

}
.myFirstTop > .swiper-slide{
   width:100%;
}
.myFirstTop > .swiper-slide > .relative, .myFirstTop>.group {
   display: flex;
  flex-direction: column;
}

.myFirstTop > .swiper-slide > .relative > .pointer-events-none, .myFirstTop>.group> .absolute{
   position: absolute;
}

.myFirstTop > .swiper-slide >.mt-4>.mt-2{
   display:none;
}
.myFirstTop > .swiper-slide >.mt-4>.truncate{
   display: flex;
   justify-content:center;
}

}

.myFirstGenres button{
   display: none;
}

.myFirstTop>.swiper-slide>.mt-4>.mt-2{
   display: none;
}


.price{
   width:38px;
}
@media (min-width: 320px) and (max-width: 460px) {
  .rounded, .rounded-full {
    display: block !important;
  }

  .myfontmedium{
   margin-top: 0px !important;
  }
  .mymt4{
   margin-top: 0px !important;
  }
  .myFirstTop > .swiper-slide > .relative, .myFirstTop > .group{
   margin-top: 20%;
  }


.price{
   margin-left: 49%;
}
  
}
/*xiaomi*/
@media(min-width: 391px) and (max-width: 410px){
    .myFontWhite{
        color:black;
    }
}

@media(min-width:451px) and (max-width:772px){
   .swiper-slide>.relative>.absolute{
      display: flex;
   }

   .price {
    margin-left: 49%;
}

   .myFirstTop{
   display: grid;
  /* grid-template-rows: 30% 30% 30%; */
  grid-template-columns: 32% 32% 32%;
  margin:0 auto;

}

.myFirstTop > .swiper-slide{
   width:100%;
}
.myFirstTop > .swiper-slide > .relative, .myFirstTop>.group {
   display: flex;
  flex-direction: column;
}

.myFirstTop > .swiper-slide > .relative > .pointer-events-none, .myFirstTop>.group> .absolute{
   position: absolute;
}

.myFirstTop > .swiper-slide >.mt-4>.mt-2{
   display:none;
}
.myFirstTop > .swiper-slide >.mt-4>.truncate{
   display: flex;
   justify-content:center;
}



}

.truncate a{
   white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  padding-left: 3%;
}

.price{
   color:green;
   font-size:16px;
   padding-left: 5%;
}
@media(min-width:320px) and (max-width:749px){
   .myBlockFlexDop{
      display: none !important;
   }
}

@media(min-width:750px){
   .myBlockFlex{
      width:100%;
      display: none;
      justify-content: space-between;
   }

   .myBlockFlexDop{
      width: 99%;
    display: flex;
    justify-content: space-between;
    background: black;
    position: relative;

   }
   .mymt4{
      margin-top: 0px;
   }
}

/* 770-772 */
@media(min-width:749px) and (max-width:770px){
   .myBlockFlex{
      /* display: none !important; */
   }
   .myBlockFlexDop{
      display: none;
   }
}

@media(min-width:770px) and (max-width:771px){
   .myBlockFlex{
      display: flex;
   }
   .myBlockFlexDop{
      display: none;
   }
}
@media(min-width:771px) and (max-width:772px){
   .myBlockFlex{
      display: none !important;
   }
   .myBlockFlexDop{
      display: flex !important;
   }
}

/* 461-771
mt-4 */

@media(min-width:461px) and (max-width:772px){
   .mymt4{
   margin-top: 0px;
   margin-bottom: 20px;
}
}

/* 550 - 746 */

@media(min-width:550px) and (max-width:746px){
   .swiper-slide>.relative>.absolute{
      justify-content:space-between;
   }
}
</style>

   <div class="w-full">
      <div data-fetch-key="0" class="-mt-12 md:mt-16">
         <div>
            <div class="hero-slider -mx-4 -mt-10 overflow-hidden border-white/[0.12] dark:border-white/[0.04] md:mx-0 md:mt-0 md:rounded-3xl md:border">
               <!--<div class="swiper">
                  <div class="swiper-wrapper flex" id="slider_1" current_slide="1">
                    <?php foreach ($main_slider as $key => $pack): $key=$key+1; ?>
                      <div id="slider_1_slade_<?=$key?>" class="swiper-slide relative flex min-h-[480px] w-full shrink-0 flex-wrap overflow-hidden md:min-h-[420px] md:items-center md:rounded lg:flex-nowrap" style="-webkit-transform:translateZ(0);-webkit-backface-visibility:hidden;background-color:#000000;" data-v-6d5fe847>
                         <div class="overlay absolute inset-0 z-[1]" data-v-6d5fe847></div>
                         <div class="order-first w-full md:w-auto lg:order-last gradient" data-v-6d5fe847>
                           <img alt="Slider" data-not-lazy="" src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" class="w-full md:hidden " data-v-6d5fe847 >
                           <img alt="Slider" data-not-lazy="" src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" class="absolute -right-40 top-0 hidden h-full md:block xl:right-0 imgsize" data-v-6d5fe847 >
                         </div>
                         <div class="sn:pb-9 absolute bottom-0 left-0 z-[2] order-last w-full px-5 pt-0 pb-5 text-white sm:text-center md:relative md:w-1/2 md:text-left lg:order-first lg:max-w-xl lg:p-12 lg:pr-0" data-v-6d5fe847>
                            <h2 class="text-[33px] font-medium leading-10 -tracking-[0.4px] sm:text-[40px] sm:leading-[48px]" data-v-6d5fe847><?=$pack['title']?></h2>
                            <div data-v-6d5fe847>
                               <div class="mt-3.5 flex items-center justify-start space-x-2 sm:justify-center md:justify-start" data-v-6d5fe847>
                                  <img alt="" src="<?=Yii::$app->request->baseUrl?>/modx/<?=($pack['creator_photo']!="")?$pack['creator_photo']:'images/user_photo/user_icon.png'?>" class="h-7 w-7 rounded-full border-2 border-transparent transition-colors duration-300 group-hover:border-purple" data-v-6d5fe847>
                                  <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-6d5fe847><?=$pack['creator']?></a>
                               </div>
                               <p class="my-5 text-[15px] leading-[22px] text-[#b7b7b7]" data-v-6d5fe847>
                                  <?=$pack['description']?>

                               </p>
                               <div class="mt-6 flex items-center space-x-6 sm:justify-center md:justify-start" data-v-6d5fe847>
                                  <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="btn-purple" data-v-6d5fe847>Browse Pack</a>

                                  <button pause="yes" audio_id="<?=$pack['id']?>" class="play-btn flex items-center space-x-3 focus:outline-none lg:pl-5" data-v-6d5fe847>
                                     <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white/[0.16] dark:backdrop-blur-lg lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-6d5fe847>
                                        <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                        <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>
                                     </svg>
                                     <span class="text-[15px] font-medium leading-[18px]" data-v-6d5fe847>Play Demo</span> <span class="hidden" data-v-6d5fe847></span>
                                  </button>
                               </div>
                               <div class="mt-10 flex items-center space-x-3 text-[0px] sm:justify-center md:justify-start" data-v-6d5fe847>
                                  <button class="swiper-prev text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 rotate-180 transform sm:h-3 sm:w-3" data-v-6d5fe847>
                                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                     </svg>
                                  </button>
                                  <div class="text-sm leading-[18px] text-[#b7b7b7] dark:text-[#b7b7b7] md:text-white" data-v-6d5fe847>
                                    <span data-v-6d5fe847><?=$key?></span> of <span data-v-6d5fe847><?=count($main_slider)?></span></div>
                                  <button class="swiper-next text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-3 sm:w-3" data-v-6d5fe847>
                                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                     </svg>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                    <?php endforeach; ?>
                    <!--
                     <div id="slider_1_slade_1" class="swiper-slide relative flex min-h-[480px] w-full shrink-0 flex-wrap overflow-hidden md:min-h-[420px] md:items-center md:rounded lg:flex-nowrap" style="-webkit-transform:translateZ(0);-webkit-backface-visibility:hidden;background-color:#000000;" data-v-6d5fe847>
                        <div class="overlay absolute inset-0 z-[1]" data-v-6d5fe847></div>
                        <div class="order-first w-full md:w-auto lg:order-last" data-v-6d5fe847><img data-src="https://wavs.mo.cloudinary.net/images/slide-4MoLvPAFSZvecVoPao2IDojPJbWhkuIJEbprUIG137qOzmd.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-4MoLvPAFSZvecVoPao2IDojPJbWhkuIJEbprUIG137qOzmd.png" class="w-full md:hidden" data-v-6d5fe847> <img data-src="https://wavs.mo.cloudinary.net/images/slide-T9vcrdG8kDP8Oth5goiosfppCd9iPlrAJxPLLkYf37yD2Dp.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-T9vcrdG8kDP8Oth5goiosfppCd9iPlrAJxPLLkYf37yD2Dp.png" class="absolute -right-40 top-0 hidden h-full md:block xl:right-0" data-v-6d5fe847></div>
                        <div class="sn:pb-9 absolute bottom-0 left-0 z-[2] order-last w-full px-5 pt-0 pb-5 text-white sm:text-center md:relative md:w-1/2 md:text-left lg:order-first lg:max-w-xl lg:p-12 lg:pr-0" data-v-6d5fe847>
                           <h2 class="text-[33px] font-medium leading-10 -tracking-[0.4px] sm:text-[40px] sm:leading-[48px]" data-v-6d5fe847>Swedish Fish Pt. 1</h2>
                           <div data-v-6d5fe847>
                              <div class="mt-3.5 flex items-center justify-start space-x-2 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <img data-src="https://wavs.mo.cloudinary.net/images/JCRiyJEuHuvKTWWPHc7UH4Gbi4lBQXKeHm7IHZa94836Dg7Ue.png" alt="" src="/modx/images/creator1.avif" class="h-7 w-7 rounded-full border-2 border-transparent transition-colors duration-300 group-hover:border-purple" data-v-6d5fe847> <a href="PSV" class="text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-6d5fe847>SWEDISH FISH</a>
                              </div>
                              <p class="my-5 text-[15px] leading-[22px] text-[#b7b7b7]" data-v-6d5fe847>
                                 A collection of 11 original samples by Swedish Fish, including guitars, drums, and vocals in the style of pop, indie, and rock.

                              </p>
                              <div class="mt-6 flex items-center space-x-6 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <a href="<?=Url::to(['site/pack'])?>/4711" class="btn-purple" data-v-6d5fe847>Browse Pack</a>
                                 <button class="flex items-center space-x-3 focus:outline-none lg:pl-5" data-v-6d5fe847>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white/[0.16] dark:backdrop-blur-lg lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-6d5fe847>
                                       <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                       <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>
                                    </svg>
                                    <span class="text-[15px] font-medium leading-[18px]" data-v-6d5fe847>Play Demo</span> <span class="hidden" data-v-6d5fe847></span>
                                 </button>
                              </div>
                              <div class="mt-10 flex items-center space-x-3 text-[0px] sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <button class="swiper-prev text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 rotate-180 transform sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                                 <div class="text-sm leading-[18px] text-[#b7b7b7] dark:text-[#b7b7b7] md:text-white" data-v-6d5fe847><span data-v-6d5fe847>1</span> of <span data-v-6d5fe847>5</span></div>
                                 <button class="swiper-next text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="slider_1_slade_2" class="swiper-slide relative flex min-h-[480px] w-full shrink-0 flex-wrap overflow-hidden md:min-h-[420px] md:items-center md:rounded lg:flex-nowrap" style="-webkit-transform:translateZ(0);-webkit-backface-visibility:hidden;background-color:#000000;" data-v-6d5fe847>
                        <div class="overlay absolute inset-0 z-[1]" data-v-6d5fe847></div>
                        <div class="order-first w-full md:w-auto lg:order-last" data-v-6d5fe847><img data-src="https://wavs.mo.cloudinary.net/images/slide-KXDEXZgVGjCgtLQLmjOZkdOsIykGCuhLReZQK6jX37HHruR.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-KXDEXZgVGjCgtLQLmjOZkdOsIykGCuhLReZQK6jX37HHruR.png" class="w-full md:hidden" data-v-6d5fe847> <img data-src="https://wavs.mo.cloudinary.net/images/slide-lVRw2svsC5Ra3J9v1yogmaLP7WYilKHqEYsvipl037st3P8.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-lVRw2svsC5Ra3J9v1yogmaLP7WYilKHqEYsvipl037st3P8.png" class="absolute -right-40 top-0 hidden h-full md:block xl:right-0" data-v-6d5fe847></div>
                        <div class="sn:pb-9 absolute bottom-0 left-0 z-[2] order-last w-full px-5 pt-0 pb-5 text-white sm:text-center md:relative md:w-1/2 md:text-left lg:order-first lg:max-w-xl lg:p-12 lg:pr-0" data-v-6d5fe847>
                           <h2 class="text-[33px] font-medium leading-10 -tracking-[0.4px] sm:text-[40px] sm:leading-[48px]" data-v-6d5fe847>Sample Archive Vol. 2</h2>
                           <div data-v-6d5fe847>
                              <div class="mt-3.5 flex items-center justify-start space-x-2 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <img data-src="https://wavs.mo.cloudinary.net/images/PZgiHqqzdOtn48BH4OkU2mE0EIp9sVFD0NQFmxLM18757qJGhf.png" alt="" src="/modx/images/creator2.avif" class="h-7 w-7 rounded-full border-2 border-transparent transition-colors duration-300 group-hover:border-purple" data-v-6d5fe847> <a href="Royal808" class="text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-6d5fe847>royal808</a>
                              </div>
                              <p class="my-5 text-[15px] leading-[22px] text-[#b7b7b7]" data-v-6d5fe847>
                                 This is the 2nd collection of samples uploaded by Royal808. The library includes collaborations with multiple sample makers and was made using real instruments and analog equipment.

                              </p>
                              <div class="mt-6 flex items-center space-x-6 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <a href="<?=Url::to(['site/pack'])?>/4691" class="btn-purple" data-v-6d5fe847>Browse Pack</a>
                                 <button class="flex items-center space-x-3 focus:outline-none lg:pl-5" data-v-6d5fe847>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white/[0.16] dark:backdrop-blur-lg lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-6d5fe847>
                                       <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                       <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>
                                    </svg>
                                    <span class="text-[15px] font-medium leading-[18px]" data-v-6d5fe847>Play Demo</span> <span class="hidden" data-v-6d5fe847></span>
                                 </button>
                              </div>
                              <div class="mt-10 flex items-center space-x-3 text-[0px] sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <button class="swiper-prev text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 rotate-180 transform sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                                 <div class="text-sm leading-[18px] text-[#b7b7b7] dark:text-[#b7b7b7] md:text-white" data-v-6d5fe847><span data-v-6d5fe847>2</span> of <span data-v-6d5fe847>5</span></div>
                                 <button class="swiper-next text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="slider_1_slade_3" class="swiper-slide relative flex min-h-[480px] w-full shrink-0 flex-wrap overflow-hidden md:min-h-[420px] md:items-center md:rounded lg:flex-nowrap" style="-webkit-transform:translateZ(0);-webkit-backface-visibility:hidden;background-color:#000000;" data-v-6d5fe847>
                        <div class="overlay absolute inset-0 z-[1]" data-v-6d5fe847></div>
                        <div class="order-first w-full md:w-auto lg:order-last" data-v-6d5fe847><img data-src="https://wavs.mo.cloudinary.net/images/slide-PTbAP7HFoHzPi36TMeEPJ25S4nzzVYgXHvbOpuZo3793XqR.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-PTbAP7HFoHzPi36TMeEPJ25S4nzzVYgXHvbOpuZo3793XqR.png" class="w-full md:hidden" data-v-6d5fe847> <img data-src="https://wavs.mo.cloudinary.net/images/slide-HPknQBqz5XEY1f8T571JDP3T0JDu0qhMeDqqe2Dm37jwQ3O.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-HPknQBqz5XEY1f8T571JDP3T0JDu0qhMeDqqe2Dm37jwQ3O.png" class="absolute -right-40 top-0 hidden h-full md:block xl:right-0" data-v-6d5fe847></div>
                        <div class="sn:pb-9 absolute bottom-0 left-0 z-[2] order-last w-full px-5 pt-0 pb-5 text-white sm:text-center md:relative md:w-1/2 md:text-left lg:order-first lg:max-w-xl lg:p-12 lg:pr-0" data-v-6d5fe847>
                           <h2 class="text-[33px] font-medium leading-10 -tracking-[0.4px] sm:text-[40px] sm:leading-[48px]" data-v-6d5fe847>Moonstone</h2>
                           <div data-v-6d5fe847>
                              <div class="mt-3.5 flex items-center justify-start space-x-2 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <img data-src="https://wavs.mo.cloudinary.net/images/abFnjBLhF6SDVmV7lrLF24Prt6tR1Tj5bKYDCrs414445HGl5Z.png" alt="" src="/modx/images/creator3.avif" class="h-7 w-7 rounded-full border-2 border-transparent transition-colors duration-300 group-hover:border-purple" data-v-6d5fe847> <a href="unkwnsounds" class="text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-6d5fe847>UNKWN</a>
                                 <span class="mt-px inline-flex items-center space-x-0.5 rounded-full bg-[#E09709] py-0.5 px-[5px] text-[8px] font-bold leading-normal text-black" data-v-6d5fe847>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5" data-v-6d5fe847>
                                       <g clip-path="url(#clip0_3125_7243)">
                                          <path d="M8.25443 0.903869C8.35387 0.698712 8.64613 0.698708 8.74556 0.903871L10.4005 4.31835C10.6588 4.85144 11.1664 5.22025 11.7532 5.30132L15.5133 5.82074C15.7391 5.85194 15.8294 6.12985 15.6651 6.28782L12.9286 8.91779C12.5015 9.32825 12.3076 9.92491 12.4119 10.508L13.0797 14.2436C13.1198 14.468 12.8833 14.6398 12.6823 14.5323L9.3362 12.7423C8.81377 12.4629 8.18626 12.4629 7.66382 12.7423L4.31716 14.5323C4.11612 14.6398 3.87968 14.468 3.91983 14.2436L4.58804 10.5082C4.69236 9.925 4.4985 9.32825 4.07136 8.91773L1.33494 6.28782C1.17058 6.12985 1.26088 5.85194 1.4867 5.82074L5.24676 5.30132C5.83359 5.22025 6.34116 4.85144 6.59953 4.31834L8.25443 0.903869Z" stroke-width="1.5" class="fill-current stroke-current"></path>
                                       </g>
                                       <defs>
                                          <clipPath id="clip0_3125_7243">
                                             <rect width="16" height="16" transform="translate(0.5)" class="fill-current"></rect>
                                          </clipPath>
                                       </defs>
                                    </svg>
                                    <span data-v-6d5fe847>TOP 25</span>
                                 </span>
                              </div>
                              <p class="my-5 text-[15px] leading-[22px] text-[#b7b7b7]" data-v-6d5fe847>
                                 This pack contains 10 original compositions by UNKWN and vocalist &amp; artist BlestJones ranging from r&amp;b, lofi, and a variety of other hybrid genres.

                              </p>
                              <div class="mt-6 flex items-center space-x-6 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <a href="<?=Url::to(['site/pack'])?>/4664" class="btn-purple" data-v-6d5fe847>Browse Pack</a>
                                 <button class="flex items-center space-x-3 focus:outline-none lg:pl-5" data-v-6d5fe847>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white/[0.16] dark:backdrop-blur-lg lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-6d5fe847>
                                       <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                       <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>
                                    </svg>
                                    <span class="text-[15px] font-medium leading-[18px]" data-v-6d5fe847>Play Demo</span> <span class="hidden" data-v-6d5fe847></span>
                                 </button>
                              </div>
                              <div class="mt-10 flex items-center space-x-3 text-[0px] sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <button class="swiper-prev text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 rotate-180 transform sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                                 <div class="text-sm leading-[18px] text-[#b7b7b7] dark:text-[#b7b7b7] md:text-white" data-v-6d5fe847><span data-v-6d5fe847>3</span> of <span data-v-6d5fe847>5</span></div>
                                 <button class="swiper-next text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="slider_1_slade_4" class="swiper-slide relative flex min-h-[480px] w-full shrink-0 flex-wrap overflow-hidden md:min-h-[420px] md:items-center md:rounded lg:flex-nowrap" style="-webkit-transform:translateZ(0);-webkit-backface-visibility:hidden;background-color:#000000;" data-v-6d5fe847>
                        <div class="overlay absolute inset-0 z-[1]" data-v-6d5fe847></div>
                        <div class="order-first w-full md:w-auto lg:order-last" data-v-6d5fe847><img data-src="https://wavs.mo.cloudinary.net/images/slide-0As1AcWkuYv2yhdWAnN3uvBDwZxOYGPxZYLjJvYt37MXV0G.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-0As1AcWkuYv2yhdWAnN3uvBDwZxOYGPxZYLjJvYt37MXV0G.png" class="w-full md:hidden" data-v-6d5fe847> <img data-src="https://wavs.mo.cloudinary.net/images/slide-1w3rqFxTpE2Ppn3U7EYpjE6jrmzKM2mL1VcDwp2Y37ZFf6y.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-1w3rqFxTpE2Ppn3U7EYpjE6jrmzKM2mL1VcDwp2Y37ZFf6y.png" class="absolute -right-40 top-0 hidden h-full md:block xl:right-0" data-v-6d5fe847></div>
                        <div class="sn:pb-9 absolute bottom-0 left-0 z-[2] order-last w-full px-5 pt-0 pb-5 text-white sm:text-center md:relative md:w-1/2 md:text-left lg:order-first lg:max-w-xl lg:p-12 lg:pr-0" data-v-6d5fe847>
                           <h2 class="text-[33px] font-medium leading-10 -tracking-[0.4px] sm:text-[40px] sm:leading-[48px]" data-v-6d5fe847>Insomnia Vol. 1</h2>
                           <div data-v-6d5fe847>
                              <div class="mt-3.5 flex items-center justify-start space-x-2 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <img data-src="https://wavs.mo.cloudinary.net/images/rUvtPMOXCagV5QJwIrKCnFkXDIlwstUFTJ513Yuu19982D9pQJ.jpg" alt="" src="/modx/images/creator1.avif" class="h-7 w-7 rounded-full border-2 border-transparent transition-colors duration-300 group-hover:border-purple" data-v-6d5fe847> <a href="nami" class="text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-6d5fe847>nami</a>
                              </div>
                              <p class="my-5 text-[15px] leading-[22px] text-[#b7b7b7]" data-v-6d5fe847>
                                 To ensure quality samples for your production, all sounds were meticulously recorded, arranged, and mixed. The goal was to deliver an original touch to each composition, offering producers a vast array of possibilities.

                              </p>
                              <div class="mt-6 flex items-center space-x-6 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <a href="<?=Url::to(['site/pack'])?>/4635" class="btn-purple" data-v-6d5fe847>Browse Pack</a>
                                 <button class="flex items-center space-x-3 focus:outline-none lg:pl-5" data-v-6d5fe847>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white/[0.16] dark:backdrop-blur-lg lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-6d5fe847>
                                       <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                       <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>
                                    </svg>
                                    <span class="text-[15px] font-medium leading-[18px]" data-v-6d5fe847>Play Demo</span> <span class="hidden" data-v-6d5fe847></span>
                                 </button>
                              </div>
                              <div class="mt-10 flex items-center space-x-3 text-[0px] sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <button class="swiper-prev text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 rotate-180 transform sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                                 <div class="text-sm leading-[18px] text-[#b7b7b7] dark:text-[#b7b7b7] md:text-white" data-v-6d5fe847><span data-v-6d5fe847>4</span> of <span data-v-6d5fe847>5</span></div>
                                 <button class="swiper-next text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="slider_1_slade_5" class="swiper-slide relative flex min-h-[480px] w-full shrink-0 flex-wrap overflow-hidden md:min-h-[420px] md:items-center md:rounded lg:flex-nowrap" style="-webkit-transform:translateZ(0);-webkit-backface-visibility:hidden;background-color:#000000;" data-v-6d5fe847>
                        <div class="overlay absolute inset-0 z-[1]" data-v-6d5fe847></div>
                        <div class="order-first w-full md:w-auto lg:order-last" data-v-6d5fe847><img data-src="https://wavs.mo.cloudinary.net/images/slide-iE4ngX4JEB1it25RLjtCJ3lFORFb8sxM4VS1QsSy374tr9h.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-iE4ngX4JEB1it25RLjtCJ3lFORFb8sxM4VS1QsSy374tr9h.png" class="w-full md:hidden" data-v-6d5fe847> <img data-src="https://wavs.mo.cloudinary.net/images/slide-mzSs22AHbIzM8P94Sq9aZgC3V2PNQbGrxGu3nEn837AGcMC.png" alt="Slider" data-not-lazy="" src="https://wavs.mo.cloudinary.net/images/slide-mzSs22AHbIzM8P94Sq9aZgC3V2PNQbGrxGu3nEn837AGcMC.png" class="absolute -right-40 top-0 hidden h-full md:block xl:right-0" data-v-6d5fe847></div>
                        <div class="sn:pb-9 absolute bottom-0 left-0 z-[2] order-last w-full px-5 pt-0 pb-5 text-white sm:text-center md:relative md:w-1/2 md:text-left lg:order-first lg:max-w-xl lg:p-12 lg:pr-0" data-v-6d5fe847>
                           <h2 class="text-[33px] font-medium leading-10 -tracking-[0.4px] sm:text-[40px] sm:leading-[48px]" data-v-6d5fe847>From Above</h2>
                           <div data-v-6d5fe847>
                              <div class="mt-3.5 flex items-center justify-start space-x-2 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <img data-src="https://wavs.mo.cloudinary.net/images/BaGLfbVzazPm41OPy8oaamuGSYQEUDqS7NQVPHbm1094dSDLo.jpg" alt="" src="/modx/images/creator2.avif" class="h-7 w-7 rounded-full border-2 border-transparent transition-colors duration-300 group-hover:border-purple" data-v-6d5fe847> <a href="beatsbycarpp" class="text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-6d5fe847>beatsbycarpp</a>
                              </div>
                              <p class="my-5 text-[15px] leading-[22px] text-[#b7b7b7]" data-v-6d5fe847>
                                 There are 17 original samples in this pack created by Carpp, in the styles of soul, trap, and r&amp;b.

                              </p>
                              <div class="mt-6 flex items-center space-x-6 sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <a href="<?=Url::to(['site/pack'])?>/4603" class="btn-purple" data-v-6d5fe847>Browse Pack</a>
                                 <button class="flex items-center space-x-3 focus:outline-none lg:pl-5" data-v-6d5fe847>
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white/[0.16] dark:backdrop-blur-lg lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-6d5fe847>
                                       <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                       <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>
                                    </svg>
                                    <span class="text-[15px] font-medium leading-[18px]" data-v-6d5fe847>Play Demo</span> <span class="hidden" data-v-6d5fe847></span>
                                 </button>
                              </div>
                              <div class="mt-10 flex items-center space-x-3 text-[0px] sm:justify-center md:justify-start" data-v-6d5fe847>
                                 <button class="swiper-prev text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 rotate-180 transform sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                                 <div class="text-sm leading-[18px] text-[#b7b7b7] dark:text-[#b7b7b7] md:text-white" data-v-6d5fe847><span data-v-6d5fe847>5</span> of <span data-v-6d5fe847>5</span></div>
                                 <button class="swiper-next text-white transition-colors hover:opacity-70 focus:outline-none" data-v-6d5fe847>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 sm:h-3 sm:w-3" data-v-6d5fe847>
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                   -->
                  <!--</div>
               </div>
						 -->
            </div>
         </div>
         <div class="overflow-hidden mt-12 pb-10 md:mt-16 md:pb-0">
            <div class="flex items-center">
               <div class="flex w-full items-center space-x-3 sm:w-auto">
                  <h2 class="text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8">What's the latest</h2>
                  <!--<a href="<?=Url::to(['site/packs'])?>" class="btn-view-all">
                  View all
                  </a>-->

                  
               </div>
               <div class="ml-auto hidden space-x-2.5 text-[0px] sm:block">
                  <button class="slider-prev h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform">
                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                     </svg>
                  </button>
                  <button class="slider-next h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                     </svg>
                  </button>
               </div>
            </div>
            <p class="mt-4 text-[15px] leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">Check out the latest packs uploaded by the top creators.</p>
            <div class="swiper mt-5">
               <div class="swiper-wrapper flex -mx-3 myFirstTop">

                 <?php foreach($packs_new as $pack): ?>
             
                  <div class="group swiper-slide w-1/6 shrink-0 focus:outline-none px-3">
                     <div class="relative overflow-hidden rounded bg-black bg-opacity-10">
                        <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                           <button audio_id="<?=$pack['id']?>" class="pointer-events-auto rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                              <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-16" data-v-e4982a0e>
                                 <g data-v-e4982a0e>
                                    <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current" data-v-e4982a0e></path>
                                    <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16" data-v-e4982a0e></path>
                                    <path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon" data-v-e4982a0e></path>
                                 </g>
                              </svg>
                           </button>
                        </div>
                        <span class="hidden"></span> <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="block h-0 w-full bg-cover bg-center" style="padding-bottom:100%;background-image:url(<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>);"></a>
                        <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex myBlockFlex">
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                           </svg>
                           <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                           <span class="price"><?php    $pricePack = $this->context->pack_info($pack['id'])['price']; echo  " ". $pricePack ."&nbsp;$"; ?></span>
                        </div>
                        
                     </div>
                
                     <div class="mt-4 mymt4">
                        <!-- new insert -->
                        <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex myBlockFlex myBlockFlexDop">
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                           </svg>
                           <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                           <span class="price"><?php    $pricePack = $this->context->pack_info($pack['id'])['price']; echo  " ". $pricePack ."&nbsp;$"; ?></span>
                        </div>
                        <!-- end new insert -->
                        <div class="truncate"><a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-[15px] font-medium myfontmedium leading-[18px] hover:underline"><?=$pack['title']?></a></div>
                        <div class="mt-2 flex">
                           <div class="truncate pr-4 text-sm leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">
                              <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="hover:underline"><?=$pack['creator']?></a>
                           </div>
                        </div>
                     </div>
                  </div>
                <?php endforeach; ?>

               </div>
            </div>
         </div>

         <div class="-mx-4 h-px bg-black/[0.12] dark:bg-white/[0.12] md:hidden"></div>
         <div class="overflow-hidden mt-10 pb-10 md:mt-24 md:pb-0">
            <div class="flex items-center">
               <div class="flex w-full items-center space-x-3 sm:w-auto">
                  <h2 class="text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8">Top Chart</h2>
                  
                  <!--<a href="<?=Url::to(['site/pack'])?>" class="btn-view-all">
                  View all
                  </a>-->
               </div>
               <div class="ml-auto hidden space-x-2.5 text-[0px] sm:block">
                  <button class="slider-prev h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform">
                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                     </svg>
                  </button>
                  <button class="slider-next h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                     </svg>
                  </button>
               </div>
            </div>
            <p class="mt-4 text-[15px] leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">The best performing packs uploaded within the last 3 weeks.</p>
            <div class="swiper mt-5">
            
               <div class="swiper-wrapper flex -mx-3 myFirstTop">
                  
               <?php if(isset($packs_trending)): ?>
                 <?php foreach($packs_trending as $pack): ?>
                  <div class="group swiper-slide w-1/6 shrink-0 focus:outline-none px-3">
                     <div class="relative overflow-hidden rounded bg-black bg-opacity-10">
                        <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                           <button audio_id="<?=$pack['id']?>" class="pointer-events-auto rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                              <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-16" data-v-e4982a0e>
                                 <g data-v-e4982a0e>
                                    <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current" data-v-e4982a0e></path>
                                    <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16" data-v-e4982a0e></path>
                                    <path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon" data-v-e4982a0e></path>
                                 </g>
                              </svg>
                           </button>
                        </div>
                        <span class="hidden"></span> <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="block h-0 w-full bg-cover bg-center" style="padding-bottom:100%;background-image:url(<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>);"></a>
                        <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex myBlockFlex">
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                           </svg>
                           <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                            <span class="price"> <?=$pack['price']?>&nbsp;$</span>
                        </div>
                     </div>
                     
                     <div class="mt-4 mymt4">

                        <!-- new inser2 -->
                        <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex myBlockFlex ">
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                           </svg>
                           <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                        </div>
                        <!--  end new insert -->


                        <div class="truncate"><a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-[15px] font-medium leading-[18px] hover:underline"><?=$pack['title']?></a></div>
                        <div class="mt-2 flex">
                           <div class="truncate pr-4 text-sm leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">
                              <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="hover:underline"><?=$pack['creator']?></a>
                           </div>
<!--                            <div>--><?php //=$pack['price']?><!--</div>-->

                        </div>
                     </div>
                  </div>
                <?php endforeach; ?>
                <?php endif; ?>

               </div>
            </div>
         </div>
         <div class="-mx-4 h-px bg-black/[0.12] dark:bg-white/[0.12] md:hidden"></div>
         <div class="overflow-hidden mt-10 pb-10 md:mt-24 md:pb-0">
            <div class="flex items-center">
               
               <div class="flex w-full items-center space-x-3 sm:w-auto">
                  <h2 class="text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8">Genres</h2>
                  <!--<a href="<?=Url::to(['site/selections'])?>" class="btn-view-all">
                  View all
                  </a>-->
               </div>
               <div class="ml-auto hidden space-x-2.5 text-[0px] sm:block">
                  <button class="slider-prev h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform">
                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                     </svg>
                  </button>
                  <button class="slider-next h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                     </svg>
                  </button>
               </div>
            </div>
            <p class="mt-4 text-[15px] leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">Discover curated samples sorted by moods, subgenres and artists. Updated daily.</p>
            <div class="swiper mt-5">
               <div class="swiper-wrapper flex -mx-3 myFirstTop myGenre">
								 <?php if (isset($selections_g)):?>
                 <?php foreach ($selections_g as $selection):?>
                  <?php  
                  $checkPack = $myThis->getDatsPacks($this->context->num_genre($selection['genre'])); $flag='';
                                if (!$checkPack): $flag = 'none'; endif;
                                 ?>

                  <div style="display: <?php echo $flag; ?>" class="group relative overflow-hidden rounded-md border border-black/[0.12] dark:border-white/[0.12] swiper-slide w-1/6 shrink-0 focus:outline-none px-3">
                     <div class="absolute bottom-0 left-0 z-[1] flex w-full items-center p-3 sm:p-4" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.94) 71.35%)">
                        <div class="flex-1 truncate">
                           <a href="<?=Url::to(['site/samples'])?>?genres=<?=$this->context->num_genre($selection['genre'])?>" class="block truncate text-center text-sm font-bold tracking-[-0.2px] text-white sm:text-lg sm:!leading-6 "><?=$selection['genre']?></a>
                           <p class="mt-0.5 truncate text-center text-[11px] leading-[14px] tracking-[0.1px] text-white/[0.72] dark:text-white/50 sm:mt-1"><?=$selection['creators']?></p>
                        </div>
                     </div>
                     <a href="<?=Url::to(['site/samples'])?>?genres=<?=$this->context->num_genre($selection['genre'])?>" class="relative block h-0 w-full bg-cover bg-center pb-[84%] md:pb-[76%]" style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.12), rgba(0, 0, 0, 0.12)), url(<?=Yii::$app->request->baseUrl?>/modx/<?=($selection['image']!="")?$selection['image']:'images/user_photo/user_icon.png'?>);"></a>
                     <div class="myFirstGenres pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                        <button audio_id="<?=$selection['audio_id']?>" class="pointer-events-auto -mt-4 rounded-full text-purple hover:text-lightpurple sm:-mt-8">
                           <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12" data-v-e4982a0e>
                              <g data-v-e4982a0e>
                                 <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current" data-v-e4982a0e></path>
                                 <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16" data-v-e4982a0e></path>
                                 <path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon" data-v-e4982a0e></path>
                              </g>
                           </svg>
                           <span class="hidden"></span>
                        </button>
                     </div>
                  </div>
                 <?php endforeach; ?>
							 <?php endif; ?>
               </div>
            </div>
         </div>
         <div class="-mx-4 h-px bg-black/[0.12] dark:bg-white/[0.12] md:hidden"></div>
         <div class="mt-10 md:mt-24">
            <div class="overflow-hidden pb-10 md:pb-0">
               <div class="flex items-center">
                  <div class="flex w-full items-center space-x-3 sm:w-auto">
                     <h2 class="text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8">Most Popular</h2>
                     <!--<a href="<?=Url::to(['site/pack'])?>" class="btn-view-all">
                     View all
                     </a>-->
                  </div>
                  <div class="ml-auto hidden space-x-2.5 text-[0px] sm:block">
                     <button class="slider-prev h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform">
                           <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                           <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                        </svg>
                     </button>
                     <button class="slider-next h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                           <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                           <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                        </svg>
                     </button>
                  </div>
               </div>
               <p class="mt-4 text-[15px] leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">The top performing packs over the last 90 days.</p>
               <div class="swiper mt-5">
                  <div class="swiper-wrapper flex -mx-3 myFirstTop">
                  <?php if(isset($packs_popular)): ?>
                    <?php foreach($packs_popular as $pack): ?>
                     <div class="group swiper-slide w-1/6 shrink-0 focus:outline-none px-3">
                        <div class="relative overflow-hidden rounded bg-black bg-opacity-10">
                           <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                              <button audio_id="<?=$pack['id']?>" class="pointer-events-auto rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                 <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-16" data-v-e4982a0e>
                                    <g data-v-e4982a0e>
                                       <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current" data-v-e4982a0e></path>
                                       <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16" data-v-e4982a0e></path>
                                       <path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon" data-v-e4982a0e></path>
                                    </g>
                                 </svg>
                              </button>
                           </div>
                           <span class="hidden"></span> <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="block h-0 w-full bg-cover bg-center" style="padding-bottom:100%;background-image:url(<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>);"></a>
                           <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex myBlockFlex">
                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                              </svg>
                              <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                              <span class="price"><?php    $pricePack = $this->context->pack_info($pack['id'])['price']; echo  " ". $pricePack ." $"; ?></span>
                           </div>
                        </div>
                        <div class="mt-4 mymt4">
                           <!-- My Ins4 -->
                        <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex myBlockFlex myBlockFlexDop">
                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                              </svg>
                              <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                              <span class="price"><?php    $pricePack = $this->context->pack_info($pack['id'])['price']; echo  " ". $pricePack ." $"; ?></span>
                           </div>
                           <!-- end -->

                           <div class="truncate"><a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-[15px] font-medium leading-[18px] hover:underline"><?=$pack['title']?></a></div>
                           <div class="mt-2 flex">
                              <div class="truncate pr-4 text-sm leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">
                                 <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="hover:underline"><?=$pack['creator']?></a>
                              </div>
                           </div>
                        </div>
                     </div>
                   <?php endforeach; ?>
                   <?php endif; ?>

                  </div>
               </div>
            </div>
         </div>
         <div class="-mx-4 h-px bg-black/[0.12] dark:bg-white/[0.12] md:hidden"></div>


         <div class="-mx-4 h-px bg-black/[0.12] dark:bg-white/[0.12] md:hidden"></div>
        
         <div class="-mx-4 h-px bg-black/[0.12] dark:bg-white/[0.12] md:hidden"></div>
         <div ḍ="" class="overflow-hidden mt-10 pb-10 md:mt-24 md:pb-0">
            <div class="flex items-center">
               <div class="flex w-full items-center space-x-3 sm:w-auto">
                  <h2 class="text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8">Recommended for you</h2>

               </div>
               <div class="ml-auto hidden space-x-2.5 text-[0px] sm:block">
                  <button class="slider-prev h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform">
                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                     </svg>
                  </button>
                  <button class="slider-next h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                        <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                        <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                     </svg>
                  </button>
               </div>
            </div>

            <div class="swiper mt-5">
               <div class="swiper-wrapper flex -mx-3 myFirstTop">

                 <?php foreach($packs_hidden_gems as $pack): ?>
                  <div class="group swiper-slide w-1/6 shrink-0 focus:outline-none px-3">
                     <div class="relative overflow-hidden rounded bg-black bg-opacity-10">
                        <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                           <button audio_id="<?=$pack['id']?>" class="pointer-events-auto rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                              <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-16" data-v-e4982a0e>
                                 <g data-v-e4982a0e>
                                    <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current" data-v-e4982a0e></path>
                                    <path d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16" data-v-e4982a0e></path>
                                    <path d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon" data-v-e4982a0e></path>
                                 </g>
                              </svg>
                           </button>
                        </div>
                        <span class="hidden"></span> <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="block h-0 w-full bg-cover bg-center" style="padding-bottom:100%;background-image:url(<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>);"></a>
                        <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex myBlockFlex">
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                           </svg>
                           <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                           <span class="price"><?php    $pricePack = $this->context->pack_info($pack['id'])['price']; echo  " ". $pricePack ." $"; ?></span>
                        </div>
                     </div>
                     <div class="mt-4 mymt4">
                        <!-- Mynew inst 3 -->
                     <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex myBlockFlex myBlockFlexDop">
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                           </svg>
                           <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                           <span class="price"><?php    $pricePack = $this->context->pack_info($pack['id'])['price']; echo  " ". $pricePack ." $"; ?></span>
                        </div>
<!-- end -->

                        <div class="truncate"><a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-[15px] font-medium leading-[18px] hover:underline myFontWhite"><?=$pack['title']?></a></div>
                        <div class="mt-2 flex">
                           <div class="truncate pr-4 text-sm leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">
                              <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="hover:underline"><?=$pack['creator']?></a>
                           </div>
                        </div>
                     </div>
                  </div>
                <?php endforeach; ?>

               </div>
            </div>
         </div>
         <div class="mt-10 text-center md:mt-14">
           <button id="toTop" data-v-b2a31b8e="" class="btn-white-outline inline-flex items-baseline space-x-2.5 pr-[14px]">
              <span data-v-b2a31b8e="">Back to top</span>
              <svg data-v-b2a31b8e="" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="-rotate-90 transform">
                 <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                 <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
              </svg>
           </button>
         </div>
      </div>
   </div>
 </div>
 <!--<section class="call-to-action-block mt-10 bg-white py-20 px-5 dark:bg-black -mb-20" style="filter:drop-shadow(0px 0px 48px rgba(0, 0, 0, 0.04));" data-v-fdfdfa80>
    <div class="mx-auto max-w-3xl text-center" data-v-fdfdfa80>
       <h3 class="mx-auto max-w-[668px] text-2xl font-medium leading-8 tracking-[-0.4px] sm:text-[32px] sm:leading-[44px]" data-v-fdfdfa80>
          Get paid for your samples and have the chance to land major record placements
       </h3>
       <div class="my-9 flex items-center justify-center -space-x-8 sm:-space-x-10" data-v-fdfdfa80><span class="h-[72px] w-[72px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[88px] sm:w-[88px]" style="background-image: url(img/join-wavs-alt/1.png)" data-v-fdfdfa80></span> <span class="h-[88px] w-[88px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[111px] sm:w-[111px]" style="background-image: url(img/join-wavs-alt/2.png)" data-v-fdfdfa80></span> <span class="z-[3] h-[104px] w-[104px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[132px] sm:w-[132px]" style="background-image: url(img/join-wavs-alt/3.png)" data-v-fdfdfa80></span> <span class="z-[2] h-[88px] w-[88px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[111px] sm:w-[111px]" style="background-image: url(img/join-wavs-alt/4.png)" data-v-fdfdfa80></span> <span class="z-[1] h-[72px] w-[72px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[88px] sm:w-[88px]" style="background-image: url(img/join-wavs-alt/5.png)" data-v-fdfdfa80></span></div>
       <button type="button" class="btn-purple btn-lg inline-flex items-center space-x-3" data-v-fdfdfa80>
          <span data-v-fdfdfa80>Apply now</span>
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" data-v-fdfdfa80>
             <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
             <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
          </svg>
       </button>
    </div>
 </section>-->


<?php

$csrfToken = Yii::$app->request->getCsrfToken();

$script = <<< JS

let base_url = "https://vintapes.com";
let wave2 = {};//аудиодоріжкі

//url2 = '';

$( ".waveform2" ).each(function() {
   var audio_id = $( this ).attr("audio_id");
    var id = $( this ).attr("id");

    $.ajax({
        method: "POST",
        url: base_url+"/ajax/audio_pack",
        data: { audio_id: audio_id}
      })
      .done(function( rez ) {
           var url2 = encodeURI(base_url + rez);
           wave2[audio_id] = WaveSurfer.create({
                container: '#'+id,
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
            wave2[audio_id].load(url2);
      });    
});

/*
$('.main-slader').on("click", '.play-btn', function(){
//$(".play-btn").click(function(){    
  var audio_id = $(this).attr("audio_id");
  var pause = $(this).attr('pause');
  console.log(audio_id);
  console.log(pause);
  Object.keys(wave2).forEach(key => {
    wave2[key].pause();
  });
    if (pause=="yes"){
      $(this).attr("pause", "no");
      wave2[audio_id].pause();
    }
    else{
      $('.play-btn').attr("pause", "no");
      $(this).attr("pause", "yes");
      wave2[audio_id].playPause();
    }

});*/

//підгрузка пісень і малювання аудіодоріжок
/*function load_wave(){
  $( ".waveform2" ).each(function() { 
    var audio_id = $( this ).attr("audio_id");
    var id = $( this ).attr("id");
    alert(id);
    wave[audio_id] = WaveSurfer.create({
        container: '#'+id,
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
    console.log(audio_id);
    $.ajax({
        method: "POST",
        url: base_url+"/ajax/audio_pack",
        data: { audio_id: audio_id}
      })
      .done(function( rez ) {
          alert(rez);
           url = rez;
           wave[audio_id].load(url);
           console.log(url);
      });

  });
  //$('svg.h-8').attr("play", "no");
};
*/

  //load_wave();
  //allfilter();


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
           //clearInterval(refresh_slider);
           timer = 7;
           audio.play();
           btn.attr('pause','no');
           btn.children('svg').html('<path data-v-d5f1e0b0="" d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current"></path><rect data-v-d5f1e0b0="" width="12" height="12" cx="100" x="14" y="14" class="fill-white"></rect>');
         }else{
           audio.pause();
           //refresh_slider = setInterval(slider, 6000);
           //timer = 7;
           $(".play-btn").children('svg').html('<path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path><path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-white playicon" data-v-d5f1e0b0></path>');
         }
    });
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
<link rel="stylesheet" href="css/explore.css">
