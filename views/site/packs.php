<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = $meta->longtitle;
$this->registerMetaTag(['name' => 'description', 'content' => $meta->description], 'description');
$this->registerMetaTag(['name' => 'keywords', 'content' => $meta->introtext]);
?>

<style>

   .myprice{
      color:green;
      font-size:15px;
   }
   @media(min-width: 450px) {
       .dopPrice{
           
       }
   }
</style>
 

<div class="w-full">
                     <div data-fetch-key="0" class="mt-12 md:mt-16">
                        <div class="overflow-hidden">
                           <div class="flex items-center">
                              <div class="flex w-full items-center space-x-3 sm:w-auto">
                                 <h2 class="text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8">Trending</h2>
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
                           <!---->
                           <div class="swiper mt-5">
                             <div class="swiper-wrapper flex -mx-3">
                             <?php if(isset($packs_trending)): ?>
                               <?php foreach($packs_trending as $pack):
                                 
                                 // var_dump($pack);
                                 ?>
                                <div class="group swiper-slide w-1/6 shrink-0 focus:outline-none px-3">
                                   <div class="relative overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
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
                                      <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex">
                                         <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                         </svg>
                                         <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                                      </div>
                                   </div>
                                   <div class="mt-4">
                                      <div class="truncate"><a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-[15px] font-medium leading-[18px] hover:underline"><?=$pack['title']?></a></div>
                                      <div class="mt-2 flex mytrend" >
                                         <div class="truncate pr-4 text-sm leading-[18px] text-5c5c5c dark:text-[#b7b7b7]">
<!--                                            <a href="--><?php //=Url::to(['site/creator'])?><!--/--><?php //=$pack['creator_id']?><!--" class="hover:underline">--><?php //=$pack['creator']?><!--</a>-->
                                             <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="hover:underline" style="text-align: center"><?=$pack['price']?> $</a>
                                            <?php if(isset($pack['coloborant'])):?>
                                                , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
                                            <?php endif;?>

                                         </div>
                                      </div>
                                   </div>
                                </div>
                              <?php endforeach; ?>
                              <?php endif; ?>
                             </div>
                           </div>
                        </div>
                        <div class="py-10 md:hidden">
                           <div class="-mx-4 h-px bg-black/[0.08] dark:bg-white/[0.08]"></div>
                        </div>
                        <div class="grid md:mt-24 md:grid-cols-2 md:overflow-hidden">
                           <!---->
                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">New Releases</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','s'=>'new'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_all">
<!-- Hello -->
                                   <?php foreach ($packs_new as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
<!--                                                <a href="--><?php //=Url::to(['site/creator'])?><!--/--><?php //=$pack['creator_id']?><!--" class="leading-4 hover:underline">--><?php //=$pack['creator']?><!--</a>-->
                                                 <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                  
                                                </div>
                                              
                                                <?php   $packPrice = $myThis->pack_info($pack['id']); if( isset($packPrice['price'])){echo "<span class=myprice>". $packPrice['price']." $</span>";}?>
                                                <?php if(isset($pack['genre'])):?>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>
                                                <?php endif;?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>

                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="all">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['all']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>
                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Most Popular</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','s'=>'popular'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="popular_all">

                                   <?php foreach ($packs_popular as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                         <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                             <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                   <g data-v-e4982a0e="">
                                                      <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                      <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                      <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                   </g>
                                                </svg>
                                             </button>
                                         </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">

                                          <div class="mr-2 truncate md:mr-0 myPopular">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">


<?php
//                                                 $packPrice2 = $myThis->pack_info($pack['id']); if( isset($packPrice['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice2['price']." $</span>";}?>

<!--                                                 <a href="--><?php //=Url::to(['site/creator'])?><!--/--><?php //=$pack['creator_id']?><!--" class="leading-4 hover:underline">--><?php //=$pack['creator']?><!--</a>-->
                                                 <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>

                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>

                                                </div>
                                                <?php if(isset($pack['genre'])): ?>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>
                                                <?php endif; ?>
                                             </div>
                                              <?php   $packPrice2 = $myThis->pack_info($pack['id']); if( isset($packPrice['price'])){echo "&nbsp;&nbsp;&nbsp;<span class='myprice dopPrice'> ". $packPrice2['price']." $</span>";}?>

                                          </div>

                                       </div>
                                    </div>
                                  <?php endforeach; ?>

                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="popular" genre="all">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['all']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>

                           <?php 
                           
                           // var_dump($hip_hop);
                           ?>
                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Hip Hop</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Hip_Hop'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Hip-Hop">
                                   <?php foreach ($hip_hop as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
<!--                                                 --><?php //  $packPrice3 = $myThis->pack_info($pack['id']); if( isset($packPrice3['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice3['price']." $</span>";}?>

                                                 <!--                                                <a href="--><?php //=Url::to(['site/creator'])?><!--/--><?php //=$pack['creator_id']?><!--" class="leading-4 hover:underline">--><?php //=$pack['creator']?><!--</a> -->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                   <?php   $packPrice = $myThis->pack_info($pack['id']); if( isset($packPrice['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice['price']." $</span>";}?>

                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>
                                                 <?php   $packPrice3 = $myThis->pack_info($pack['id']); if( isset($packPrice3['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice3['price']." $</span>";}?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Hip-Hop">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['hip_hop']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>
                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Trap</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Trap'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Trap">
                                   <?php foreach ($trap as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
<!--                                                 --><?php //  $packPrice4 = $myThis->pack_info($pack['id']); if( isset($packPrice4['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice4['price']." $</span>";}?>

                                                 <!--                                                <a href="--><?php //=Url::to(['site/creator'])?><!--/--><?php //=$pack['creator_id']?><!--" class="leading-4 hover:underline">--><?php //=$pack['creator']?><!--</a>-->
                                                 <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                   <?php   $packPrice = $myThis->pack_info($pack['id']); if( isset($packPrice['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice['price']." $</span>";}?>

                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>
                                                 <?php   $packPrice3 = $myThis->pack_info($pack['id']); if( isset($packPrice3['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice3['price']." $</span>";}?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Trap">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['trap']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>
                              <?php /* check pop*/ if (!empty($pop)): ?>

                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Pop</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Pop'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Pop">
                                   <?php foreach ($pop as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->

                                                <?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Pop">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['pop']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>
                                    <?php /* check pop*/  endif; ?>

                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Soul &amp; R&amp;B</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Soul_-_R-B'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Soul">
                                   <?php foreach ($soul as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
<!--                                                 --><?php //  $packPrice5 = $myThis->pack_info($pack['id']); if( isset($packPrice5['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice5['price']." $</span>";}?>

                                                 <!--                                                <a href="--><?php //=Url::to(['site/creator'])?><!--/--><?php //=$pack['creator_id']?><!--" class="leading-4 hover:underline">--><?php //=$pack['creator']?><!--</a> -->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                   <?php   $packPrice = $myThis->pack_info($pack['id']); if( isset($packPrice['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice['price']." $</span>";}?>

                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>
                                                 <?php   $packPrice3 = $myThis->pack_info($pack['id']); if( isset($packPrice3['price'])){echo "&nbsp;&nbsp;&nbsp;<span class=myprice> ". $packPrice3['price']." $</span>";}?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Soul">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['soul']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>


                           <?php /* check Rock*/ if (!empty($rock)): ?>
                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Rock</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Rock'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Rock">
                                   <?php foreach ($rock as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>

                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Rock">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['rock']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>

                                                <?php endif; ?>

                              
                           <?php /* check Rock*/ if (!empty($drill)): ?>


                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Drill</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Drill'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Drill">
                                   <?php foreach ($drill as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Drill">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['drill']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>

                           <?php endif; ?>


                           
                           <?php /* check Rock*/ if (!empty($electronic)): ?>


                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Electronic</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Electronic'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Electronic">
                                   <?php foreach ($electronic as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Electronic">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['electronic']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>

                                 <?php  endif; ?>

                                 
                           <?php /* check Rock*/ if (!empty($afrobeat)): ?>
                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Afrobeat</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Afrobeat'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Afrobeat">
                                   <?php foreach ($afrobeat as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Afrobeat">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['afrobeat']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>

                                 <?php  endif; ?>

                                 <?php /* check Rock*/ if (!empty($latin)): ?>
                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Latin</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Latin'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Latin">
                                   <?php foreach ($latin as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Latin">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['latin']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>

                           <?php endif;  ?>


                           <?php /* check Rock*/ if (!empty($lofi)): ?>

                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Lofi</h2>
                                   <!-- <a href="<?=Url::to(['site/allpacks','g'=>'Lofi'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Lofi">
                                   <?php foreach ($lofi as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Lofi">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['lofi']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>

                           <?php endif; ?>

                           
                           <?php /* check Rock*/ if (!empty($hyperpop)): ?>

                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Hyperpop</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Hyperpop'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Hyperpop">
                                   <?php foreach ($hyperpop as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->
<?php if(isset($pack['coloborant'])):?>
    , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
<?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Hyperpop">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['hyperpop']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16 last-prev md:hidden">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>

                           <?php  endif; ?>
                            
                           <?php /* check Rock*/ if (!empty($indie)): ?>
                           <div class="odd:border-black odd:!border-opacity-[0.08] dark:odd:border-white md:last:!border-r-0 md:odd:border-r md:odd:pr-16 md:even:pl-16">
                              <div>
                                 <div class="mb-4 flex items-end md:mb-6">
                                    <h2 class="text-2xl font-medium leading-8 -tracking-px md:text-[28px]">Indie</h2>
                                    <!--<a href="<?=Url::to(['site/allpacks','g'=>'Indie'])?>" class="btn-view-all ml-4">View all</a>-->
                                 </div>
                                 <div class="grid grid-cols-1 md:gap-y-1" id="new_Indie">
                                   <?php foreach ($indie as $key => $pack):?>
                                    <div class="group relative flex items-center py-3 last:pb-0">
                                       <div class="relative shrink-0 overflow-hidden rounded bg-black myBgBlack bg-opacity-10">
                                          <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">
                                              <button audio_id="<?=$pack['audio_id']?>" class="pointer-events-auto absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100">
                                                 <svg data-v-e4982a0e="" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rounded-full text-purple backdrop-blur-lg hover:text-lightpurple">
                                                    <g data-v-e4982a0e="">
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" class="fill-current"></path>
                                                       <path data-v-e4982a0e="" d="M0 32C0 14.3269 14.3269 0 32 0C49.6731 0 64 14.3269 64 32C64 49.6731 49.6731 64 32 64C14.3269 64 0 49.6731 0 32Z" fill="white" fill-opacity="0.16"></path>
                                                       <path data-v-e4982a0e="" d="M46.1095 33.3202L24.4379 47.2891C23.2179 48.0754 21.6113 47.1996 21.6113 45.7481V17.8105C21.6113 16.359 23.2179 15.4831 24.4379 16.2695L46.1095 30.2383C47.2296 30.9603 47.2296 32.5983 46.1095 33.3202Z" fill="white" class="playicon"></path>
                                                    </g>
                                                 </svg>
                                              </button>
                                          </div>
                                          <span class="hidden"></span> <img loading="lazy" data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>" src="<?=Yii::$app->request->baseUrl?>/modx/<?=(isset($pack['img']))?$pack['img']:'images/packs/noimage.jpg'?>" class="h-11 w-11 rounded object-cover myObjectCover md:h-16 md:w-16">
                                       </div>
                                       <div class="ml-5 flex flex-1 items-center truncate font-medium md:block">
                                          <div class="mr-2 truncate md:mr-0 ">
                                             <a href="<?=Url::to(['site/pack'])?>/<?=$pack['id']?>" class="text-xs leading-4 hover:underline md:text-[15px]"><?=$pack['title']?></a>
                                             <div class="mt-0.5 truncate text-[11px] text-5c5c5c dark:text-[#B7B7B7] md:text-xs">
                                                <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="leading-4 hover:underline"><?=$pack['creator']?></a> <!---->
                                    <?php if(isset($pack['coloborant'])):?>
                                       , <a href="<?=Url::to(['site/creator'])?>/<?=$pack['id_user_coloborant']?>" class="hover:underline"><?=$pack['coloborant']?></a>
                                    <?php endif;?>
                                             </div>
                                          </div>
                                          <div class="ml-auto flex items-center md:ml-0 xs_hidden">
                                             <div class="flex shrink-0 items-center space-x-1.5 text-[9px] uppercase text-5c5c5c dark:text-[#B7B7B7] md:mt-2 md:ml-0">
                                                <div class="inline-flex items-center rounded bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]">
                                                   <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-0.5 h-2 w-2.5">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                                                   </svg>
                                                   <span><?=$pack['count_songs']?></span>
                                                </div>
                                                <?php $genres_arr=array_unique(explode("||", $pack['genre']));
                                                  foreach ($genres_arr as $key => $genre):  ?>
                                                  <span class="rounded-full bg-[#E7E7E7] px-1.5 py-0.5 leading-3 dark:bg-white dark:bg-opacity-[0.12]"><?=$genre?></span>
                                                <?php endforeach;?>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                  <?php endforeach; ?>
                                 </div>
                                 <div class="mt-7 flex items-center space-x-2.5 md:mt-9" sort="new" genre="Indie">
                                    <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                    <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span>1</span> of <span><?=ceil($count_packs['indie']/5)?></span></div>
                                    <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                       <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                          <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                          <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="bg-[#fbfbfb] py-10 dark:bg-[#111111] md:-mx-[65px] md:py-16 last md:hidden">
                                 <div class="-mx-4 h-px bg-black !bg-opacity-[0.08] dark:bg-white md:col-span-2 md:mx-0"></div>
                              </div>
                           </div>


                           <?php endif; ?>

                        </div>
                        <div class="mt-6 pb-14 text-center md:mt-20 md:pb-[72px]">
                          <a class="btn-white-outline inline-flex items-baseline space-x-2.5 pr-[14px]" data-v-8d6f3130 href="#top">
                             <span data-v-8d6f3130>Back to top</span>
                             <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="-rotate-90 transform" data-v-8d6f3130>
                                <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                             </svg>
                          </a>
                        </div>


                     </div>
                  </div>
               </div>
               <!--<section class="call-to-action-block mt-10 bg-white py-20 px-5 dark:bg-black -mb-20" style="filter:drop-shadow(0px 0px 48px rgba(0, 0, 0, 0.04));" data-v-fdfdfa80>
                  <div class="mx-auto max-w-3xl text-center" data-v-fdfdfa80>
                     <h3 class="mx-auto max-w-[668px] text-2xl font-medium leading-8 tracking-[-0.4px] sm:text-[32px] sm:leading-[44px]" data-v-fdfdfa80>
                        Get paid for your samples and have the chance to land major record placements
                     </h3>
                     <div class="my-9 flex items-center justify-center -space-x-8 sm:-space-x-10" data-v-fdfdfa80><span class="h-[72px] w-[72px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[88px] sm:w-[88px]" style="background-image: url(assets/img/join-wavs-alt/1.png)" data-v-fdfdfa80></span> <span class="h-[88px] w-[88px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[111px] sm:w-[111px]" style="background-image: url(assets/img/join-wavs-alt/2.png)" data-v-fdfdfa80></span> <span class="z-[3] h-[104px] w-[104px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[132px] sm:w-[132px]" style="background-image: url(assets/img/join-wavs-alt/3.png)" data-v-fdfdfa80></span> <span class="z-[2] h-[88px] w-[88px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[111px] sm:w-[111px]" style="background-image: url(assets/img/join-wavs-alt/4.png)" data-v-fdfdfa80></span> <span class="z-[1] h-[72px] w-[72px] shrink-0 rounded-full border-2 border-white bg-cover bg-center dark:border-black sm:h-[88px] sm:w-[88px]" style="background-image: url(assets/img/join-wavs-alt/5.png)" data-v-fdfdfa80></span></div>
                     <button type="button" class="btn-purple btn-lg inline-flex items-center space-x-3" data-v-fdfdfa80>
                        <span data-v-fdfdfa80>Apply now</span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" data-v-fdfdfa80>
                           <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                           <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                        </svg>
                     </button>
                  </div>
               </section>-->
<div class="load_wait" style="position:fixed;top:0;left:0;height:100%;width:100%;z-index:99;display:none;">
   <div class="fa-5x" style="position:fixed;left:50%;top:50%;margin-top:-50px;margin-left:-50px;z-index:100;">
     <i class="fa-solid fa-sync fa-spin"></i>
   </div>
 </div>



<style>
 .mytrend{justify-content: center}

@media (min-width: 320px) and (max-width:460px) {
  .xs_hidden {
    display: block !important;
  }
  .rounded, .rounded-full{
   display: none;
  }
  .myObjectCover, .myBgBlack{
   display: inline;
   height:auto !important;
  }
  .next_page, .prew_page{
   display: block;
  }

}
@media (max-width: 320px) {
  .xs_hidden {
    display: none !important;
  }
}
@media(min-width: 391px) and (max-width: 460px){
    .myPopular{display: flex;
    align-items: center;
    }
    .myPopular > .truncate{
        margin-top: -2px;
    }
}



</style>



<link rel="stylesheet" href="https://vintapes.com/css/packs.css">
<?php
$url=Url::to(['ajax/pages_packs']);

$script = <<< JS

$('.prew_page').click(function(){

  var sort = $(this).parents().attr('sort');
  var genre = $(this).parents().attr('genre');
  //alert(genre);
  $(this).parents().children('.next_page').removeAttr('disabled');
  $(this).parents().children('.next_page').children('svg').removeClass('opacity-25');
  var carrent_page=$(this).parents().children('div').children('span').eq(0).html();
  var max_page=$(this).parents().children('div').children('span').eq(1).html();
  if (max_page!=1) $('.load_wait').show();
  if (carrent_page>1) {
    $(this).parents().children('div').children('span').eq(0).html(carrent_page*1-1);
    //alert(carrent_page-1);
    $.ajax({
          method: "POST",
          url: '$url',
          data: { sort: sort,
                  genre: genre,
                  page: carrent_page*1-1
                }
        })
          .done(function( rez ) {
            //alert( rez );
            $("#"+sort+"_"+genre).html(rez);
            $('.load_wait').hide();
          });
  }
  if (carrent_page*1-1==1){
    $(this).attr('disabled','disabled');
    $(this).children('svg').addClass('opacity-25');
    $('.load_wait').hide();
  }
});
$('.next_page').click(function(){
// alert('$url')
  var sort = $(this).parents().attr('sort');
  var genre = $(this).parents().attr('genre');
  $(this).parents().children('.prew_page').removeAttr('disabled');
  $(this).parents().children('.prew_page').children('svg').removeClass('opacity-25');
  var carrent_page=$(this).parents().children('div').children('span').eq(0).html();
  var max_page=$(this).parents().children('div').children('span').eq(1).html();
  //alert( carrent_page );alert( max_page );
  if (max_page!=1) $('.load_wait').show();
  if (carrent_page*1<max_page*1) {
    $(this).parents().children('div').children('span').eq(0).html(carrent_page*1+1);
    
    $.ajax({
          method: "POST",
          url: '$url',
          data: { sort: sort,
                  genre: genre,
                  page: carrent_page*1+1
                }
        })
          .done(function( rez ) {
            //alert( rez );
            $("#"+sort+"_"+genre).html(rez);
            $('.load_wait').hide();
          });
  }
  if (carrent_page*1+1==max_page){
    $(this).attr('disabled','disabled');
    $(this).children('svg').addClass('opacity-25');
    $('.load_wait').hide();
  }
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
