<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - samples';
?>
<div class="w-full">
<div data-fetch-key="0">
<!--Trending-->
<div class="overflow-hidden">
            <div class="flex items-center">
               <div class="flex w-full items-center space-x-3 sm:w-auto">
                  <h2 class="text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8">Trending</h2>
                  <!--<a href="<?=Url::to(['site/pack'])?>" class="btn-view-all">
                  View all
                  </a>-->
               </div>
               <div class="ml-auto hidden space-x-2.5 text-[0px] sm:block">
                  <button class="slider-prev h-8 w-8 rounded-full border-2 border-solid border-black/[0.12] text-black transition-colors hover:opacity-70 focus:outline-none dark:border-white/[0.24] dark:bg-black/[0.48] dark:text-white slider-btn-disabled">
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
               <div class="swiper-wrapper flex -mx-3">
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
                        <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex">
                           <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.56164 1.53856C7.56164 1.02026 7.9818 0.600098 8.5001 0.600098C9.0184 0.600098 9.43856 1.02026 9.43856 1.53856V13.5386C9.43856 14.0569 9.0184 14.477 8.5001 14.477C7.9818 14.477 7.56164 14.0569 7.56164 13.5386V1.53856ZM14.0232 5.23087C14.0232 4.71257 14.4433 4.29241 14.9616 4.29241C15.4799 4.29241 15.9001 4.71257 15.9001 5.23087V9.84625C15.9001 10.3645 15.4799 10.7847 14.9616 10.7847C14.4433 10.7847 14.0232 10.3646 14.0232 9.84625V5.23087ZM4.33087 6.23087C4.33087 5.71257 4.75103 5.29241 5.26933 5.29241C5.78763 5.29241 6.20779 5.71257 6.20779 6.23087V8.84625C6.20779 9.36455 5.78763 9.78471 5.26933 9.78471C4.75103 9.78471 4.33087 9.36455 4.33087 8.84625V6.23087ZM10.7924 3.38471C10.7924 2.86642 11.2126 2.44625 11.7309 2.44625C12.2492 2.44625 12.6693 2.86642 12.6693 3.38471V11.6924C12.6693 12.2107 12.2492 12.6309 11.7309 12.6309C11.2126 12.6309 10.7924 12.2107 10.7924 11.6924V3.38471ZM1.1001 4.38471C1.1001 3.86642 1.52026 3.44625 2.03856 3.44625C2.55686 3.44625 2.97702 3.86642 2.97702 4.38471V10.6924C2.97702 11.2107 2.55686 11.6309 2.03856 11.6309C1.52026 11.6309 1.1001 11.2107 1.1001 10.6924V4.38471Z" class="fill-current"></path>
                           </svg>
                           <span class="ml-0.5 text-xs"><?=$pack['count_songs']?></span>
                        </div>
                     </div>
                     <div class="mt-4">
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
<!--End Trending-->

<?php
//    echo "<pre>";
//    var_dump($sounds);
//    echo "<pre>";
    ?>
                        <div class="mt-8 mb-7 h-px bg-[#f0f0f0] dark:bg-[#2e2e2e]"></div>
                        <div style="position: relative;">
                           <div class="sticky mb-1.5 flex items-center py-1 lg:mb-6 top-[147px] lg:top-[130px] z-[31] bg-white dark:!bg-121212">
                              <h2 class="text-2xl font-medium tracking-[-0.25px] lg:mr-5 lg:text-[28px] lg:leading-8" style="display:;">Packs</h2>
                              <div aria-label="To enable filters, subscribe today!" data-microtip-position="top" show_wavs="true" class="filters-row w-full overflow-x-auto" data-v-66887fe6>
                                 <div class="pt-0.5" data-v-66887fe6>
                                    <div class="hidden items-center justify-between lg:flex" data-v-66887fe6>
                                       <div class="flex items-center justify-between space-x-2" data-v-66887fe6>
                                          
                                          <span data-v-66887fe6>
                                            <span class="hidden">
                                                <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 160px; position: absolute; will-change: transform; top: 0px; margin-left: -60px; transform: translate3d(0px, 51px, 0px);">
                                                <?php if(isset($instruments)): ?>
                                                   <ul data-v-66887fe6="" class="max-h-80 overflow-y-auto">
                                                      <li data-v-66887fe6=""><input data-v-66887fe6="" type="text" placeholder="Search genre" id="search_genres" class="text-number form-field mb-2 rounded-md border-black/[0.16] px-3 py-2 text-[15px] leading-[18px] shadow-[0px_1px_1px_rgba(0,0,0,0.025)] placeholder:text-[#8E8E8E] focus:border-purple dark:border-white/[0.16] dark:bg-white/[0.16] dark:focus:border-purple"></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("1", explode(",", $instruments)))?'checked':''?> value="1"> <span class="sp_genre" data-v-66887fe6="">Hip Hop</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("2", explode(",", $instruments)))?'checked':''?> value="2"> <span class="sp_genre" data-v-66887fe6="">Trap</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("3", explode(",", $instruments)))?'checked':''?> value="3"> <span class="sp_genre" data-v-66887fe6="">Pop</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("4", explode(",", $instruments)))?'checked':''?> value="4"> <span class="sp_genre" data-v-66887fe6="">Soul &amp; R&amp;B</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("5", explode(",", $instruments)))?'checked':''?> value="5"> <span class="sp_genre" data-v-66887fe6="">Rock</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("6", explode(",", $instruments)))?'checked':''?> value="6"> <span class="sp_genre" data-v-66887fe6="">Drill</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("7", explode(",", $instruments)))?'checked':''?> value="7"> <span class="sp_genre" data-v-66887fe6="">Electronic</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("8", explode(",", $instruments)))?'checked':''?> value="8"> <span class="sp_genre" data-v-66887fe6="">Afrobeat</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("9", explode(",", $instruments)))?'checked':''?> value="9"> <span class="sp_genre" data-v-66887fe6="">Latin</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("10", explode(",", $instruments)))?'checked':''?> value="10"> <span class="sp_genre" data-v-66887fe6="">Funk</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("11", explode(",", $instruments)))?'checked':''?> value="11"> <span class="sp_genre" data-v-66887fe6="">Cinematic</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("12", explode(",", $instruments)))?'checked':''?> value="12"> <span class="sp_genre" data-v-66887fe6="">Lofi</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("13", explode(",", $instruments)))?'checked':''?> value="13"> <span class="sp_genre" data-v-66887fe6="">Hyperpop</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("14", explode(",", $instruments)))?'checked':''?> value="14"> <span class="sp_genre" data-v-66887fe6="">Country</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("15", explode(",", $instruments)))?'checked':''?> value="15"> <span class="sp_genre" data-v-66887fe6="">World</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("16", explode(",", $instruments)))?'checked':''?> value="16"> <span class="sp_genre" data-v-66887fe6="">Indie</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("17", explode(",", $instruments)))?'checked':''?> value="17"> <span class="sp_genre" data-v-66887fe6="">Folk</span></label></li>
                                                      <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="genres" <?=(in_array("18", explode(",", $instruments)))?'checked':''?> value="18"> <span class="sp_genre" data-v-66887fe6="">Reggae</span></label></li>
                                                   </ul>
                                                   <?php endif; ?>
                                                </div>
                                             </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6 style="<?=(isset($genres))?'border-color: rgb(85 43 252)':''?>">
                                                   <span data-v-66887fe6>
                                                      Genre<?=(isset($genres))?':':''?><!---->
                                                   </span>
                                                   <span class="ml-1.5 drdw" data-v-66887fe6>
                                                     <?php if(isset($genres)): ?>
                                                      <?php
                                                      if (count($filter['genres'])>1){
                                                         echo '+'.count($filter['genres']);
                                                       }else{
                                                         echo $filter['genres'][0];
                                                       }
                                                      ?>
                                                     <?php else: ?>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                    <?php endif; ?>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                          <span data-v-66887fe6>
                                            <span style="" class="hidden">
                                               <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 160px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(367px, 51px, 0px);" x-placement="bottom-start">
                                               <?php if(isset($instruments)): ?>
                                                   <ul data-v-66887fe6="" class="max-h-80 overflow-y-auto">
                                                     <li data-v-66887fe6=""><input data-v-66887fe6="" type="text" placeholder="Search instrument" id="search_instrument" class="text-number form-field mb-2 rounded-md border-black/[0.16] px-3 py-2 text-[15px] leading-[18px] shadow-[0px_1px_1px_rgba(0,0,0,0.025)] placeholder:text-[#8E8E8E] focus:border-purple dark:border-white/[0.16] dark:bg-white/[0.16] dark:focus:border-purple"></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("1", explode(",", $instruments)))?'checked':''?> value="1"> <span data-v-66887fe6="" class="sp_inst">Drums</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("2", explode(",", $instruments)))?'checked':''?> value="2"> <span data-v-66887fe6="" class="sp_inst">Guitar</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("3", explode(",", $instruments)))?'checked':''?> value="3"> <span data-v-66887fe6="" class="sp_inst">Keys</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("4", explode(",", $instruments)))?'checked':''?> value="4"> <span data-v-66887fe6="" class="sp_inst">Vocals</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("5", explode(",", $instruments)))?'checked':''?> value="5"> <span data-v-66887fe6="" class="sp_inst">Synth</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("6", explode(",", $instruments)))?'checked':''?> value="6"> <span data-v-66887fe6="" class="sp_inst">Pads</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("7", explode(",", $instruments)))?'checked':''?> value="7"> <span data-v-66887fe6="" class="sp_inst">Pluck</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("8", explode(",", $instruments)))?'checked':''?> value="8"> <span data-v-66887fe6="" class="sp_inst">String</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("9", explode(",", $instruments)))?'checked':''?> value="9"> <span data-v-66887fe6="" class="sp_inst">Bass</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("10", explode(",", $instruments)))?'checked':''?> value="10"> <span data-v-66887fe6="" class="sp_inst">Percussion</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("11", explode(",", $instruments)))?'checked':''?> value="11"> <span data-v-66887fe6="" class="sp_inst">Horns & Flutes</span></label></li>
                                                     <li data-v-66887fe6=""><label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="checkbox" class="instruments" <?=(in_array("12", explode(",", $instruments)))?'checked':''?> value="12"> <span data-v-66887fe6="" class="sp_inst">FX</span></label></li>
                                                  </ul>
                                                  <?php endif; ?>
                                               </div>
                                            </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6 style="<?=(isset($instruments))?'border-color: rgb(85 43 252)':''?>">
                                                   <span data-v-66887fe6>
                                                      Instrument <?=(isset($instruments))?':':''?><!---->
                                                   </span>
                                                   <span class="ml-1.5 drdw" data-v-66887fe6>
                                                     <?php if(isset($instruments)): ?>
                                                      <?php
                                                      if (count($filter['instruments'])>1){
                                                         echo '+'.count($filter['instruments']);
                                                       }else{
                                                         echo $filter['instruments'][0];
                                                       }
                                                      ?>
                                                     <?php else: ?>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                    <?php endif; ?>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                           
                                          <span data-v-66887fe6>
                                            <span class="hidden">
                                                <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 100px; position: absolute; will-change: transform; top: 0px; margin-left: -30px; transform: translate3d(0px, 51px, 0px);">
                                                   <ul data-v-66887fe6="">
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($type=='All')?'checked':''?> data-v-66887fe6="" name="type" class="type" value="All" type="radio"> <span data-v-66887fe6="">
                                                         All file types
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]"></span></span></label>
                                                         <div data-v-66887fe6="" class="my-2 h-px bg-black/[0.12] dark:bg-white/[0.12]"></div>
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($type=='WAV')?'checked':''?> data-v-66887fe6="" name="type" class="type" value="WAV" type="radio"> <span data-v-66887fe6="">
                                                         Samples
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]">.WAV</span></span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($type=='MP3')?'checked':''?> data-v-66887fe6="" name="type" class="type" value="MP3" type="radio"> <span data-v-66887fe6="">
                                                         Samples
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]">.MP3</span></span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($type=='MID')?'checked':''?> data-v-66887fe6="" name="type" class="type" value="MID" type="radio"> <span data-v-66887fe6="">
                                                         MIDI
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]">.MID</span></span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($type=='ZIP')?'checked':''?> data-v-66887fe6="" name="type" class="type" value="ZIP" type="radio"> <span data-v-66887fe6="">
                                                         STEMS
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]">.ZIP</span></span></label> <!---->
                                                      </li>
                                                   </ul>
                                                </div>
                                             </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6 style="<?=(isset($type))?'border-color: rgb(85 43 252)':''?>">
                                                   <span data-v-66887fe6>
                                                      Format<?=(isset($type))?':':''?><!---->
                                                   </span>
                                                   <span class="ml-1.5 drdw" data-v-66887fe6>
                                                     <?php if(isset($type)): ?>
                                                      <?php
                                                      switch ($type) {
                                                          case 'All': echo 'All file types'; break;
                                                          case 'WAV': echo '.WAV'; break;
                                                          case 'MID': echo '.MID'; break;
                                                          case 'ZIP': echo '.ZIP'; break;
                                                          case 'MP3': echo '.MP3'; break;
                                                      }
                                                      ?>
                                                     <?php else: ?>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                    <?php endif; ?>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                          <!--<span data-v-66887fe6>
                                            <span class="hidden">
                                              <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 100px; position: absolute; will-change: transform; top: 0px; margin-left: -30px; transform: translate3d(0px, 51px, 0px);">
                                                 <ul data-v-66887fe6="" class="max-h-60 overflow-y-auto">
                                                    <li data-v-66887fe6="">
                                                       <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">All licenses</span></label>
                                                       <div data-v-66887fe6="" class="my-2 h-px bg-black/[0.12] dark:bg-white/[0.12]"></div>
                                                    </li>
                                                    <li data-v-66887fe6="">
                                                       <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Royalty-Free</span></label>
                                                    </li>
                                                    <li data-v-66887fe6="">
                                                       <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Royalty</span></label>
                                                    </li>
                                                 </ul>
                                              </div>
                                            </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      License
                                                   </span>
                                                   <span class="ml-1.5 drdw" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>-->
                                          <span data-v-66887fe6>
                                            <span class="hidden" >
                                                <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 100px; position: absolute; will-change: transform; top: 0px; margin-left: -30px; transform: translate3d(0px, 51px, 0px);">
                                                   <ul data-v-66887fe6="">
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($date=='20_d')?'checked':''?> data-v-66887fe6="" type="radio" class="date" name="date" value="20_d"> <span data-v-66887fe6="">Last 20 days</span>
                                                         </label>
                                                         <div data-v-66887fe6="" class="my-2 h-px bg-black/[0.12] dark:bg-white/[0.12]"></div>
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($date=='48_h')?'checked':''?> data-v-66887fe6="" type="radio" class="date" name="date" value="48_h"> <span data-v-66887fe6="">Last 48 hours</span>
                                                         </label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($date=='7_d')?'checked':''?> data-v-66887fe6="" type="radio" class="date" name="date" value="7_d"> <span data-v-66887fe6="">Last 7 days</span>
                                                         </label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($date=='30_d')?'checked':''?> data-v-66887fe6="" type="radio" class="date" name="date" value="30_d"> <span data-v-66887fe6="">Last 30 days</span>
                                                         </label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($date=='90_d')?'checked':''?> data-v-66887fe6="" type="radio" class="date" name="date" value="90_d"> <span data-v-66887fe6="">Last 90 days</span>
                                                         </label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($date=='6_m')?'checked':''?> data-v-66887fe6="" type="radio" class="date" name="date" value="6_m"> <span data-v-66887fe6="">Last 6 months</span>
                                                         </label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($date=='12_m')?'checked':''?> data-v-66887fe6="" type="radio" class="date" name="date" value="12_m"> <span data-v-66887fe6="">Last 12 months</span>
                                                         </label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]">
                                                           <input <?=($date=='all')?'checked':''?> data-v-66887fe6="" type="radio" class="date" name="date" value="all"> <span data-v-66887fe6="">All-Time</span>
                                                         </label> <!---->
                                                      </li>
                                                   </ul>
                                                </div>
                                             </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" style="<?=(isset($date))?'border-color: rgb(85 43 252)':''?>" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      Date<?=(isset($date))?':':''?><!---->
                                                   </span>
                                                   <span class="ml-1.5 drdw" data-v-66887fe6>
                                                     <?php if(isset($date)): ?>
                                                      <?php
                                                      switch ($date) {
                                                          case '20_d': echo 'Last 20 days'; break;
                                                          case '48_h': echo 'Last 48 hours'; break;
                                                          case '7_d': echo 'Last 7 days'; break;
                                                          case '30_d': echo 'Last 30 days'; break;
                                                          case '90_d': echo 'Last 90 days'; break;
                                                          case '6_m': echo 'Last 6 months'; break;
                                                          case '12_m': echo 'Last 12 months'; break;
                                                          case 'all': echo 'All-Time'; break;
                                                      }
                                                      ?>
                                                     <?php else: ?>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                    <?php endif; ?>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                       </div>
                                       <button class="clear_all mx-5 whitespace-nowrap font-medium tracking-[-0.05px] text-5c5c5c dark:text-[#dedede] <?=((isset($date))||(isset($type))||(isset($instruments))||(isset($genres))||(isset($search)))?'':'invisible'?> " data-v-66887fe6>
                                       Clear all
                                       </button>
                                       <div class="ml-auto flex shrink-0 items-center space-x-2" data-v-66887fe6>

                                             <label for="search-samples" data-v-66887fe6>
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg" class="relative w-[18px] text-5c5c5c dark:text-[#b7b7b7] opacity-30" data-v-66887fe6>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0625 11.5923C28.0625 17.4768 23.2921 22.2471 17.4077 22.2471C14.8591 22.2471 12.5194 21.3523 10.6859 19.8597L2.25568 28.2898C1.82891 28.7166 1.13699 28.7166 0.710226 28.2898V28.2898C0.283462 27.8631 0.283461 27.1711 0.710226 26.7444L9.1404 18.3142C7.64773 16.4806 6.75287 14.141 6.75287 11.5923C6.75287 5.70782 11.5232 0.9375 17.4077 0.9375C23.2921 0.9375 28.0625 5.70782 28.0625 11.5923ZM25.8769 11.5923C25.8769 16.2697 22.0851 20.0615 17.4077 20.0615C12.7303 20.0615 8.93847 16.2697 8.93847 11.5923C8.93847 6.91489 12.7303 3.1231 17.4077 3.1231C22.0851 3.1231 25.8769 6.91489 25.8769 11.5923Z" class="fill-current"></path>
                                                </svg>
                                             </label>
                                             <input id="search-samples" clear="<?=(isset($search))?'no':'yes'?>" type="text" placeholder="Search" value="<?=(isset($search))?$search:''?>" class="-ml-[18px] w-full border-0 bg-transparent py-2.5 pl-7 text-sm font-medium tracking-[-0.05px] text-5c5c5c !outline-0 !ring-0 placeholder:text-5c5c5c dark:text-[#b7b7b7] dark:placeholder:text-[#b7b7b7]" <?=(isset($search))?'style="border-bottom:1px solid rgb(85, 43, 252);"':''?> data-v-66887fe6>

                                          <span data-v-66887fe6>
                                             <span class="hidden">
                                                <div class="popper filter-dropdown p-2" style="min-width:100px; position: absolute; will-change: transform; top: 0px; right: 5px; transform: translate3d(0px, 51px, 0px);" data-v-66887fe6>
                                                   <ul data-v-66887fe6>
                                                      <li data-v-66887fe6>
                                                         <button class="sort flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>Popular</span> <!---->
                                                            <?php if(isset($order)): if($order=='Popular'): ?>
                                                              <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5" data-v-66887fe6>
                                                                 <path d="M10.3672 5.10023L6.98478 8.72563L5.63283 7.27504C5.25867 6.87448 4.65403 6.87448 4.27987 7.27504C3.90671 7.67561 3.90671 8.324 4.27987 8.72457L6.3093 10.8994C6.68246 11.2999 7.2881 11.2999 7.66226 10.8994L11.7201 6.54975C12.0933 6.14918 12.0933 5.49973 11.7201 5.10023C11.348 4.69966 10.7413 4.69966 10.3672 5.10023Z" fill="currentColor"></path>
                                                              </svg>
                                                            <?php endif; endif; ?>
                                                         </button>
                                                      </li>
                                                      <li data-v-66887fe6>
                                                         <button class="sort flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>Trending</span>
                                                            <?php if(isset($order)): if($order=='Trending'): ?>
                                                              <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5" data-v-66887fe6>
                                                                 <path d="M10.3672 5.10023L6.98478 8.72563L5.63283 7.27504C5.25867 6.87448 4.65403 6.87448 4.27987 7.27504C3.90671 7.67561 3.90671 8.324 4.27987 8.72457L6.3093 10.8994C6.68246 11.2999 7.2881 11.2999 7.66226 10.8994L11.7201 6.54975C12.0933 6.14918 12.0933 5.49973 11.7201 5.10023C11.348 4.69966 10.7413 4.69966 10.3672 5.10023Z" fill="currentColor"></path>
                                                              </svg>
                                                            <?php endif; endif; ?>
                                                         </button>
                                                      </li>
                                                      <li data-v-66887fe6>
                                                         <button class="sort flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>Recent</span> <!---->
                                                            <?php if(!isset($order)):?>
                                                              <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5" data-v-66887fe6>
                                                                 <path d="M10.3672 5.10023L6.98478 8.72563L5.63283 7.27504C5.25867 6.87448 4.65403 6.87448 4.27987 7.27504C3.90671 7.67561 3.90671 8.324 4.27987 8.72457L6.3093 10.8994C6.68246 11.2999 7.2881 11.2999 7.66226 10.8994L11.7201 6.54975C12.0933 6.14918 12.0933 5.49973 11.7201 5.10023C11.348 4.69966 10.7413 4.69966 10.3672 5.10023Z" fill="currentColor"></path>
                                                              </svg>
                                                            <?php endif; ?>
                                                         </button>
                                                      </li>
                                                      <li data-v-66887fe6>
                                                         <button class="sort flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>Random</span> <!---->
                                                            <?php if(isset($order)): if($order=='Random'): ?>
                                                              <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5" data-v-66887fe6>
                                                                 <path d="M10.3672 5.10023L6.98478 8.72563L5.63283 7.27504C5.25867 6.87448 4.65403 6.87448 4.27987 7.27504C3.90671 7.67561 3.90671 8.324 4.27987 8.72457L6.3093 10.8994C6.68246 11.2999 7.2881 11.2999 7.66226 10.8994L11.7201 6.54975C12.0933 6.14918 12.0933 5.49973 11.7201 5.10023C11.348 4.69966 10.7413 4.69966 10.3672 5.10023Z" fill="currentColor"></path>
                                                              </svg>
                                                            <?php endif; endif; ?>
                                                         </button>
                                                      </li>
                                                      <li data-v-66887fe6>
                                                         <button class="sort flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>A-Z</span> <!---->
                                                            <?php if(isset($order)): if($order=='A-Z'): ?>
                                                              <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5" data-v-66887fe6>
                                                                 <path d="M10.3672 5.10023L6.98478 8.72563L5.63283 7.27504C5.25867 6.87448 4.65403 6.87448 4.27987 7.27504C3.90671 7.67561 3.90671 8.324 4.27987 8.72457L6.3093 10.8994C6.68246 11.2999 7.2881 11.2999 7.66226 10.8994L11.7201 6.54975C12.0933 6.14918 12.0933 5.49973 11.7201 5.10023C11.348 4.69966 10.7413 4.69966 10.3672 5.10023Z" fill="currentColor"></path>
                                                              </svg>
                                                            <?php endif; endif; ?>
                                                         </button>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </span>
                                             <p class="whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-full border-2 py-1.5 px-3 font-medium tracking-[-0.05px] text-5c5c5c dark:bg-black/[0.48] dark:text-[#b7b7b7] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>Sort by: <span class="sort_by text-black dark:text-white" data-v-66887fe6><?=(isset($order))?$order:'Recent'?></span></span>
                                                   <span class="ml-2" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                       </div>
                                    </div>
                                    <button type="button" class="btn-purple btn-sm ml-auto flex items-center lg:hidden" data-v-66887fe6>
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-1.5 w-3.5" data-v-66887fe6>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.05084 4.31052C0.345348 3.48575 0.953181 2.25 2.00728 2.25H13.9933C15.0474 2.25 15.6552 3.48575 14.9497 4.31052L14.9486 4.31187L10.2503 9.77803V12C10.2503 12.2508 10.125 12.4849 9.9163 12.624L6.9163 14.624C6.68616 14.7775 6.39025 14.7918 6.14638 14.6613C5.90252 14.5307 5.75028 14.2766 5.75028 14V9.77803L1.05084 4.31052Z" class="fill-current"></path>
                                       </svg>
                                       <span data-v-66887fe6>Filter &amp; Sort</span>
                                    </button>
                                    <!---->
                                 </div>
                              </div>
                           </div>
<!--                               Helloooo-->
                           <div class="overflow-x-auto overflow-y-hidden" style="position: relative;">
                              <!--<table class="sample-list relative w-full table-auto" style="position: relative;">
                              
                                 <tbody id="songs_table_">-->
                                 <div id="songs_table" class="grid grid-cols-2 gap-x-4 gap-y-10 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-8" data-v-d580b1ea="">
                                   <?php if (isset($sounds)): ?>
                                   
                                   <?=$this->context->packs_html3($sounds)?>
                                   <?php endif; ?>
                                </div>
                                 <!--</tbody>
                              </table>-->

                              <!---pages-->
                              <div class="pages mt-7 flex items-center space-x-2.5 md:mt-9 <?=($max_page>1)?'':'hidden'?>">
                                 <button disabled="disabled" type="button" class="prew_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5 rotate-180 transform opacity-25">
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                                 <div class="text-xs leading-[18px] text-[#8E8E8E] dark:text-[#b7b7b7]"><span id="current_page">1</span> of <span id="max_page"><?=$max_page?></span></div>
                                 <button type="button" class="next_page h-8 w-8 rounded-full bg-black/[0.08] text-black backdrop-blur-lg dark:bg-white/[0.08] dark:text-white hover:opacity-80">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto w-3.5">
                                       <path d="M4.71229 9.95496L8.4246 6.24265L4.71229 2.53034L5.77295 1.46968L10.5459 6.24266L5.77295 11.0156L4.71229 9.95496Z" fill="currentColor"></path>
                                       <path d="M10 6.25C10 6.66421 9.66421 7 9.25 7L1 7L1 5.5L9.25 5.5C9.66421 5.5 10 5.83579 10 6.25Z" fill="currentColor"></path>
                                    </svg>
                                 </button>
                              </div>
                              <!---/pages-->
                           </div>
                           <!----> <!---->
                        </div>
                        <div class="mt-10 text-center">
                           <!---->
                        </div>
                     </div>





                  </div>
               </div>

<div class="load_wait" style="position:fixed;top:0;left:0;height:100%;width:100%;z-index:99;display:none;">
   <div class="fa-5x" style="position:fixed;left:50%;top:50%;margin-top:-50px;margin-left:-50px;z-index:100;">
     <i class="fa-solid fa-sync fa-spin"></i>
   </div>
 </div>

 <!--modal buy-->
<style>
   .title{
     padding-top: 16px;
  padding-left: 20px;
  font-size: 21px;
  font-weight: 700;
   }
   .finalize  {
      display: flex;
      flex-direction: column;
      margin-top: 10px;
      font-size: 14px;
      color: #fff;
       justify-content:space-around;
  }
  .row{
    display: flex;
    justify-content:space-around;
  }
   .total{
     font-weight: 600;
     font-size: 20px;
      color: #00eb88;
      display: flex;
      align-items: center;
      height: 55px;
   }
   .value
  {
    align-items: right;
  }
</style>
<div id="div_add_pack" class="hidden fixed inset-0 z-60 h-full w-full overflow-x-hidden bg-black bg-opacity-80 dark:bg-[#2c2c2c] dark:bg-opacity-70 overflow-y-auto">
 <div class="animated modal-popup-container2 absolute inset-0 h-full w-full text-center px-3">
    <div class="inline-block w-full text-left align-middle">
       <div id="modal_add_pack" class="relative mx-auto max-w-full rounded-2xl bg-white px-7 pt-7 pb-9 text-black shadow-lg dark:bg-121212 dark:text-white my-8" style="width: 380px;">
          <button class="hide_modal_add_pack text-primary absolute top-2.5 right-2.5 z-10 flex h-10 w-10 items-center justify-center opacity-100 hover:opacity-70">
             <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-5">
                <g>
                   <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="7" x2="25" y1="7" y2="25" class="cls-1"></line>
                   <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="7" x2="25" y1="25" y2="7" class="cls-1"></line>
                </g>
             </svg>
          </button>
          <div>
             <h3 class="mb-10 text-center text-2xl font-medium">Payment</h3>
             <h4 class="modal_title text-center"></h4>
              <div>
                  <mat-card-content _ngcontent-yqw-c651="" class="mat-card-content">
                    <div _ngcontent-yqw-c651="" class="finalize">
                      <div _ngcontent-yqw-c651="" class="row gross">
                        <span _ngcontent-yqw-c651="" class="name">Total Gross</span>
                        <span _ngcontent-yqw-c651="" class="value modal_price">$30.00</span>
                      </div>
                      <div _ngcontent-yqw-c651="" class="row discount">
                        <span _ngcontent-yqw-c651="" class="name"> Discount</span>
                        <span _ngcontent-yqw-c651="" class="value">-$0.00</span>
                      </div><!---->
                      <div _ngcontent-yqw-c651="" class="row total">
                        <span _ngcontent-yqw-c651="" class="name">Total</span>
                        <span _ngcontent-yqw-c651="" class="value modal_price">$30.00</span>
                      </div>
                    </div>
                   </mat-card-content>
             </div>

             <div class="mt-10 text-center">
                <button class="btn" id="btn-pay" >
                   <i class="fa-brands fa-paypal"></i>
                   <span class=""> Pay via PayPal</span>
                </button>
             </div>

          </div>
       </div>
    </div>
 </div>
 </div>
</div>
 <!--/modal buy-->

<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/js/filters_sound.js', ['depends' => [yii\web\JqueryAsset::className()]]);
?>
<?php



$url=Yii::$app->request->baseUrl;
$script = <<< JS

baseurl = "/site/samples";

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
