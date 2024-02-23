<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - midi';
?>
<div class="w-full">
                     <div data-fetch-key="0">
<!--Trending-->
<div class="overflow-hidden">
            <div class="flex items-center">
               <div class="flex w-full items-center space-x-3 sm:w-auto">
                  <h2 class="text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8">Trending</h2>
                  <!--<a href="<?=Url::to(['site/pack'])?>/c/trending" class="btn-view-all">
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

              </div>
            </div>
         </div>
<!--End Trending-->

                        <div class="mt-8 mb-7 h-px bg-[#f0f0f0] dark:bg-[#2e2e2e]"></div>
                        <div>
                           <div class="sticky mb-1.5 flex items-center py-1 lg:mb-6 top-[147px] lg:top-[130px] z-[31] bg-white dark:!bg-121212">
                              <h2 class="text-2xl font-medium tracking-[-0.25px] lg:mr-5 lg:text-[28px] lg:leading-8" style="display:;">Samples</h2>
                              <div aria-label="To enable filters, subscribe today!" data-microtip-position="top" show_wavs="true" class="filters-row w-full overflow-x-auto" data-v-66887fe6>
                                 <div class="pt-0.5" data-v-66887fe6>
                                    <div class="hidden items-center justify-between lg:flex" data-v-66887fe6>
                                       <div class="flex items-center justify-between space-x-2" data-v-66887fe6>
                                          <span data-v-66887fe6>
                                            <span class="hidden">
                                              <div data-v-66887fe6="" class="popper filter-dropdown p-5" style="min-width: 270px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 51px, 0px);" x-placement="bottom-start">
                                                 <div data-v-66887fe6="" class="px-2 pt-2 pb-2" value="40,300">
                                                    <!--
                                                    <div class="vue-slider vue-slider-ltr" style="padding: 7px 0px; width: auto; height: 4px;">
                                                       <div class="vue-slider-rail">
                                                          <div class="vue-slider-process" style="height: 100%; top: 0px; left: 0%; width: 100%; transition-property: width, left; transition-duration: 0.5s;"></div>
                                                          <div aria-valuetext="40" class="vue-slider-dot" role="slider" aria-valuenow="40" aria-valuemin="40" aria-valuemax="300" aria-orientation="horizontal" tabindex="0" style="width: 14px; height: 14px; transform: translate(-50%, -50%); top: 50%; left: 0%; transition: left 0.5s ease 0s;">
                                                             <div class="vue-slider-dot-handle">
                                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                   <rect width="2" height="9" rx="1" fill="#8E8E8E"></rect>
                                                                   <rect x="4" width="2" height="9" rx="1" fill="#8E8E8E"></rect>
                                                                </svg>
                                                             </div>
                                                          </div>
                                                          <div aria-valuetext="300" class="vue-slider-dot" role="slider" aria-valuenow="300" aria-valuemin="40" aria-valuemax="300" aria-orientation="horizontal" tabindex="0" style="width: 14px; height: 14px; transform: translate(-50%, -50%); top: 50%; left: 100%; transition: left 0.5s ease 0s;">
                                                             <div class="vue-slider-dot-handle">
                                                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                   <rect width="2" height="9" rx="1" fill="#8E8E8E"></rect>
                                                                   <rect x="4" width="2" height="9" rx="1" fill="#8E8E8E"></rect>
                                                                </svg>
                                                             </div>
                                                          </div>
                                                       </div>
                                                    </div>-->
                                                    <div id="slider-range"></div>
                                                    <div class="mt-5 flex items-center space-x-5 lg:justify-between">
                                                       <div><label class="mb-1 block text-xs font-medium leading-4 text-5c5c5c dark:text-[#b7b7b7]">From</label> <input type="number" min="40" max="300" placeholder="Min." class="text-number form-field w-[100px] appearance-none rounded-md border-black/[0.16] px-3 py-2 text-[15px] leading-[18px] shadow-[0px_1px_1px_rgba(0,0,0,0.025)] focus:border-purple dark:border-white/[0.16] dark:bg-white/[0.16] dark:focus:border-purple"></div>
                                                       <div class="relative top-2.5 h-px w-8 bg-black/[0.24] dark:bg-white/[0.32]"></div>
                                                       <div><label class="mb-1 block text-xs font-medium leading-4 text-5c5c5c dark:text-[#b7b7b7]">To</label> <input type="number" min="40" max="300" placeholder="Max." class="text-number form-field w-[100px] appearance-none rounded-md border-black/[0.16] px-3 py-2 text-[15px] leading-[18px] shadow-[0px_1px_1px_rgba(0,0,0,0.025)] focus:border-purple dark:border-white/[0.16] dark:bg-white/[0.16] dark:focus:border-purple"></div>
                                                    </div>
                                                    <div class="mt-5"><label class="flex items-center"><input type="checkbox" true-value="1" false-value=""> <span class="ml-3">Include half time</span></label></div>
                                                    <div class="my-5 hidden h-px bg-black/[0.12] dark:bg-white/[0.12] lg:block"></div>
                                                    <div class="mt-5 hidden space-x-3 text-right lg:block"><button class="btn-white-outline">
                                                       Clear
                                                       </button> <button class="btn-purple">
                                                       Apply filter
                                                       </button>
                                                    </div>
                                                 </div>
                                              </div>
                                           </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      Tempo<!---->
                                                   </span>
                                                   <span class="ml-1.5" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                          <span data-v-66887fe6>
                                            <span class="hidden">
                                                <div data-v-66887fe6="" class="popper filter-dropdown p-5" style="min-width: 348px; position: absolute; will-change: transform; top: 0px; margin-left: -150px; transform: translate3d(0px, 51px, 0px);">
                                                   <div data-v-66887fe6="">
                                                      <div class="space-y-4 text-5c5c5c dark:text-[#B7B7B7]">
                                                         <label class="flex cursor-pointer items-center">
                                                            <div class="relative flex w-full items-center rounded-[10px] bg-black/[0.08] p-[3px] leading-[18px] dark:bg-white/[0.08]">
                                                               <input type="checkbox" class="sr-only">
                                                               <div class="flex-1 rounded-lg py-1.5 px-4 text-center transition-colors duration-300 bg-lightpurple font-medium text-white shadow-[0px_4px_4px_rgba(0,0,0,0.08)] dark:bg-purple">
                                                                  Flat
                                                               </div>
                                                               <div class="flex-1 rounded-lg py-1.5 px-4 text-center transition-colors duration-300">
                                                                  Sharp
                                                               </div>
                                                            </div>
                                                         </label>
                                                         <label class="flex cursor-pointer items-center">
                                                            <div class="relative flex w-full items-center rounded-[10px] bg-black/[0.08] p-[3px] leading-[18px] dark:bg-white/[0.08]">
                                                               <input type="checkbox" class="sr-only">
                                                               <div class="flex-1 rounded-lg py-1.5 px-4 text-center transition-colors duration-300">
                                                                  Major
                                                               </div>
                                                               <div class="flex-1 rounded-lg py-1.5 px-4 text-center transition-colors duration-300 bg-lightpurple font-medium text-white shadow-[0px_4px_4px_rgba(0,0,0,0.08)] dark:bg-purple">
                                                                  Minor
                                                               </div>
                                                            </div>
                                                         </label>
                                                      </div>
                                                      <div class="mt-9 text-5c5c5c dark:text-[#B7B7B7]">
                                                         <div class="flex justify-around"><label class="w-3"></label> <label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            Db
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Dbm"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            Eb
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Ebm"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 invisible bg-black/[0.08] dark:bg-white/[0.12]">
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="m"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            Gb
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Gbm"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            Ab
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Abm"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            Bb
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Bbm"></label> <label class="w-3"></label>
                                                         </div>
                                                         <div class="mt-3 flex justify-between"><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            C
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Cm"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            D
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Dm"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            E
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Em"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            F
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Fm"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            G
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Gm"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            A
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Am"></label><label class="relative h-9 w-9 cursor-pointer rounded text-center leading-9 bg-black/[0.08] dark:bg-white/[0.12]">
                                                            B
                                                            <input type="radio" class="absolute left-0 cursor-pointer opacity-0" value="Bm"></label>
                                                         </div>
                                                      </div>
                                                      <div class="mt-9"><label class="flex items-center"><input type="checkbox" true-value="1" false-value=""> <span class="ml-3">Include relative scale</span></label></div>
                                                      <div class="my-5 hidden h-px bg-black/[0.12] dark:bg-white/[0.12] lg:block"></div>
                                                      <div class="mt-5 hidden space-x-3 text-right lg:block"><button class="btn-white-outline">
                                                         Clear
                                                         </button> <button class="btn-purple">
                                                         Apply filter
                                                         </button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      Key<!---->
                                                   </span>
                                                   <span class="ml-1.5" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                          <span data-v-66887fe6>
                                            <span class="hidden">
                                                <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 160px; position: absolute; will-change: transform; top: 0px; margin-left: -60px; transform: translate3d(0px, 51px, 0px);">
                                                   <ul data-v-66887fe6="" class="max-h-80 overflow-y-auto">
                                                      <li data-v-66887fe6=""><input data-v-66887fe6="" type="text" placeholder="Search genre" class="text-number form-field mb-2 rounded-md border-black/[0.16] px-3 py-2 text-[15px] leading-[18px] shadow-[0px_1px_1px_rgba(0,0,0,0.025)] placeholder:text-[#8E8E8E] focus:border-purple dark:border-white/[0.16] dark:bg-white/[0.16] dark:focus:border-purple"></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Hip Hop</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Trap</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Pop</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Soul &amp; R&amp;B</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Rock</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Drill</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Electronic</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Afrobeat</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Latin</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Funk</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Cinematic</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Lofi</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Hyperpop</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Country</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">World</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Indie</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Folk</span></button></li>
                                                      <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Reggae</span></button></li>
                                                   </ul>
                                                </div>
                                             </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      Genre<!---->
                                                   </span>
                                                   <span class="ml-1.5" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                          <span data-v-66887fe6>
                                            <span style="" class="hidden">
                                               <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 160px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(367px, 51px, 0px);" x-placement="bottom-start">
                                                  <ul data-v-66887fe6="" class="max-h-80 overflow-y-auto">
                                                     <li data-v-66887fe6=""><input data-v-66887fe6="" type="text" placeholder="Search instrument" class="text-number form-field mb-2 rounded-md border-black/[0.16] px-3 py-2 text-[15px] leading-[18px] shadow-[0px_1px_1px_rgba(0,0,0,0.025)] placeholder:text-[#8E8E8E] focus:border-purple dark:border-white/[0.16] dark:bg-white/[0.16] dark:focus:border-purple"></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Full Composition</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Drums</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Guitar</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Keys</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Vocals</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Synth</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Pads</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Pluck</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">String</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Bass</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Percussion</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">Horns &amp; Flutes</span></button></li>
                                                     <li data-v-66887fe6=""><button data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><a data-v-66887fe6="" type="checkbox" class=""></a> <span data-v-66887fe6="">FX</span></button></li>
                                                  </ul>
                                               </div>
                                            </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      Instrument<!---->
                                                   </span>
                                                   <span class="ml-1.5" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                          <span data-v-66887fe6>
                                            <span class="hidden">
                                                <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 100px; position: absolute; will-change: transform; top: 0px; margin-left: -30px; transform: translate3d(0px, 51px, 0px);">
                                                   <ul data-v-66887fe6="">
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">
                                                         All file types
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]"></span></span></label>
                                                         <div data-v-66887fe6="" class="my-2 h-px bg-black/[0.12] dark:bg-white/[0.12]"></div>
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">
                                                         Samples
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]">.WAV</span></span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">
                                                         MIDI
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]">.MID</span></span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">
                                                         STEMS
                                                         <span data-v-66887fe6="" class="text-[#8e8e8e]">.ZIP</span></span></label> <!---->
                                                      </li>
                                                   </ul>
                                                </div>
                                             </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      Format<!---->
                                                   </span>
                                                   <span class="ml-1.5" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                          <span data-v-66887fe6>
                                            <span class="hidden">
                                              <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 100px; position: absolute; will-change: transform; top: 0px; margin-left: -30px; transform: translate3d(0px, 51px, 0px);">
                                                 <ul data-v-66887fe6="" class="max-h-60 overflow-y-auto">
                                                    <li data-v-66887fe6="">
                                                       <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">All licenses</span></label>
                                                       <div data-v-66887fe6="" class="my-2 h-px bg-black/[0.12] dark:bg-white/[0.12]"></div>
                                                    </li>
                                                    <li data-v-66887fe6="">
                                                       <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Royalty-Free</span></label> <!---->
                                                    </li>
                                                    <li data-v-66887fe6="">
                                                       <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Royalty</span></label> <!---->
                                                    </li>
                                                 </ul>
                                              </div>
                                            </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      License<!---->
                                                   </span>
                                                   <span class="ml-1.5" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                          <span data-v-66887fe6>
                                            <span class="hidden" >
                                                <div data-v-66887fe6="" class="popper filter-dropdown p-2" style="min-width: 100px; position: absolute; will-change: transform; top: 0px; margin-left: -30px; transform: translate3d(0px, 51px, 0px);">
                                                   <ul data-v-66887fe6="">
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Last 20 days</span></label>
                                                         <div data-v-66887fe6="" class="my-2 h-px bg-black/[0.12] dark:bg-white/[0.12]"></div>
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Last 48 hours</span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Last 7 days</span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Last 30 days</span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Last 90 days</span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Last 6 months</span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">Last 12 months</span></label> <!---->
                                                      </li>
                                                      <li data-v-66887fe6="">
                                                         <label data-v-66887fe6="" class="flex w-full cursor-pointer items-center space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"><input data-v-66887fe6="" type="radio"> <span data-v-66887fe6="">All-Time</span></label> <!---->
                                                      </li>
                                                   </ul>
                                                </div>
                                             </span>
                                             <p class="flex items-center whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-lg border-2 py-1 px-2.5 leading-[18px] text-5c5c5c dark:bg-[#2d2d2d] dark:text-[#dedede] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>
                                                      Date<!---->
                                                   </span>
                                                   <span class="ml-1.5" data-v-66887fe6>
                                                      <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300" data-v-66887fe6>
                                                         <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </p>
                                          </span>
                                       </div>
                                       <button class="mx-5 whitespace-nowrap font-medium tracking-[-0.05px] text-5c5c5c dark:text-[#dedede] invisible" data-v-66887fe6>
                                       Clear all
                                       </button>
                                       <div class="ml-auto flex shrink-0 items-center space-x-2" data-v-66887fe6>
                                          <form class="hidden max-w-[196px] items-center xl:flex" data-v-66887fe6>
                                             <label for="search-samples" data-v-66887fe6>
                                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg" class="relative w-[18px] text-5c5c5c dark:text-[#b7b7b7] opacity-30" data-v-66887fe6>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0625 11.5923C28.0625 17.4768 23.2921 22.2471 17.4077 22.2471C14.8591 22.2471 12.5194 21.3523 10.6859 19.8597L2.25568 28.2898C1.82891 28.7166 1.13699 28.7166 0.710226 28.2898V28.2898C0.283462 27.8631 0.283461 27.1711 0.710226 26.7444L9.1404 18.3142C7.64773 16.4806 6.75287 14.141 6.75287 11.5923C6.75287 5.70782 11.5232 0.9375 17.4077 0.9375C23.2921 0.9375 28.0625 5.70782 28.0625 11.5923ZM25.8769 11.5923C25.8769 16.2697 22.0851 20.0615 17.4077 20.0615C12.7303 20.0615 8.93847 16.2697 8.93847 11.5923C8.93847 6.91489 12.7303 3.1231 17.4077 3.1231C22.0851 3.1231 25.8769 6.91489 25.8769 11.5923Z" class="fill-current"></path>
                                                </svg>
                                             </label>
                                             <input id="search-samples" type="text" placeholder="Search" value="" class="-ml-[18px] w-full border-0 bg-transparent py-2.5 pl-7 text-sm font-medium tracking-[-0.05px] text-5c5c5c !outline-0 !ring-0 placeholder:text-5c5c5c dark:text-[#b7b7b7] dark:placeholder:text-[#b7b7b7]" data-v-66887fe6>
                                          </form>
                                          <span data-v-66887fe6>
                                             <span class="hidden">
                                                <div class="popper filter-dropdown p-2" style="min-width:100px; position: absolute; will-change: transform; top: 0px; right: 5px; transform: translate3d(0px, 51px, 0px);" data-v-66887fe6>
                                                   <ul data-v-66887fe6>
                                                      <li data-v-66887fe6>
                                                         <button class="flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>Popular</span> <!---->
                                                         </button>
                                                      </li>
                                                      <li data-v-66887fe6>
                                                         <button class="flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>Trending</span>
                                                            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5" data-v-66887fe6>
                                                               <path d="M10.3672 5.10023L6.98478 8.72563L5.63283 7.27504C5.25867 6.87448 4.65403 6.87448 4.27987 7.27504C3.90671 7.67561 3.90671 8.324 4.27987 8.72457L6.3093 10.8994C6.68246 11.2999 7.2881 11.2999 7.66226 10.8994L11.7201 6.54975C12.0933 6.14918 12.0933 5.49973 11.7201 5.10023C11.348 4.69966 10.7413 4.69966 10.3672 5.10023Z" fill="currentColor"></path>
                                                            </svg>
                                                         </button>
                                                      </li>
                                                      <li data-v-66887fe6>
                                                         <button class="flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>Recent</span> <!---->
                                                         </button>
                                                      </li>
                                                      <li data-v-66887fe6>
                                                         <button class="flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>Random</span> <!---->
                                                         </button>
                                                      </li>
                                                      <li data-v-66887fe6>
                                                         <button class="flex w-full cursor-pointer items-center justify-between space-x-3 rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-66887fe6>
                                                            <span data-v-66887fe6>A-Z</span> <!---->
                                                         </button>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </span>
                                             <p class="whitespace-nowrap" data-v-66887fe6>
                                                <button type="button" class="dropdown-btn flex items-center rounded-full border-2 py-1.5 px-3 font-medium tracking-[-0.05px] text-5c5c5c dark:bg-black/[0.48] dark:text-[#b7b7b7] border-black/[0.12] hover:border-[#bfbfbf] dark:border-white/[0.12] dark:hover:border-[#5e5e5e]" data-v-66887fe6>
                                                   <span data-v-66887fe6>Sort by: <span class="text-black dark:text-white" data-v-66887fe6>Trending</span></span>
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
                           <div class="overflow-x-auto overflow-y-hidden">
                              <table class="sample-list relative w-full table-auto">
                                 <!---->
                                 <tbody>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4603" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/n33s4CPQWviEQ0tW899ry3F3KVyxOBJiadYUOuLi4603iJ8qd.png" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="1" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0 ></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0 num_audio="1"></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class=" w-full py-4 pl-5 lg:table-cell" data-v-12cfc155>
                                          <div data-key="audio-kgyf8yjwo-8pjnxx3yb"  data-v-12cfc155>
                                            <div id="waveform_1"></div>
                                        </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>0:43</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>Your Side (88 bpm_Gm) @beatsbycarpp.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="beatsbycarpp" class="hover:underline" data-v-12cfc155>beatsbycarpp</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY A</a> <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>88 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>G MINOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4603" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="beatsbycarpp" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 23 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4618" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/xIlzTEvqFYQaMGrCmpn4QaFSqF4EhiMHAyaeIGpk4618XEGcM.jpg" src="/modx/images/album2.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="2" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0 num_audio="2"></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0 num_audio="2"></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-z33cd57p6-9sxpzy3sx" data-v-12cfc155>

                                            <div id="waveform_2"></div>

                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>0:45</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>Truce_D_85.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="vinheath" class="hover:underline" data-v-12cfc155>Vin Heath</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155><a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY-FREE</a> <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" style="font-size:10px;" data-v-12cfc155>MIDI</span></p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>85 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>D MAJOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155><span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" style="font-size:10px;" data-v-12cfc155>MIDI</span></div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4618" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="vinheath" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 25 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4581" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/0QDnF5e8r6AVZW3Zlx4hbtl0W2D0WDgMumREz6rO4581eMCfU.png" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="3" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0 ></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0 ></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell x-hidden" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-2o4o92bro-qb09uowq2" data-v-12cfc155>

                                            <div id="waveform_3"></div>

                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>1:20</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>!piso + davidsoul - bridle path 95.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="piso" class="hover:underline" data-v-12cfc155>piso</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY A</a> <!----> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>95 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>A MAJOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <!----> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4581" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="piso" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 21 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4602" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/jSYCjgSET42SxiLvw339ouaTZfA8lNBg1DW848NF4602Jtdsk.jpg" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="4" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-qj556c7xn-2vnycgiok" data-v-12cfc155>
                                              <div id="waveform_4"></div>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>3:39</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>@prod. hezii x beatsbylmc - let go of the past g min 150 bpm.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="prodhezii" class="hover:underline" data-v-12cfc155>Hezii</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY B</a> <!----> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>150 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>G MINOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <!----> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4602" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="prodhezii" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 23 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4564" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/COLOniA3AnZSjxmQZqI0jPky8GGXfIq2kWPBQ0L54564wtJX2.jpg" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="5" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-xi5nxgqlt-dg3q5nrww" data-v-12cfc155>
                                            <div id="waveform_5"></div>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>5:19</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>on edge 97 - @prodbydvosk @naluprod.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="DVOSK" class="hover:underline" data-v-12cfc155>DVOSK</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY A</a> <!----> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>97 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>A MINOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <!----> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4564" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="DVOSK" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 20 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4603" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/n33s4CPQWviEQ0tW899ry3F3KVyxOBJiadYUOuLi4603iJ8qd.png" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="6" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-l6xf83ek0-yltsb6fne" data-v-12cfc155>
                                            <div id="waveform_6"></div>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>2:02</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>Special One (90 bpm) @beatsbycarpp x aurora.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="beatsbycarpp" class="hover:underline" data-v-12cfc155>beatsbycarpp</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY A</a> <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>90 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>Eb MINOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4603" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="beatsbycarpp" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 23 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4564" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/COLOniA3AnZSjxmQZqI0jPky8GGXfIq2kWPBQ0L54564wtJX2.jpg" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="7" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-wlqpzxreo-mrlmdcxmp" data-v-12cfc155>
                                            <div id="waveform_7"></div>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>2:02</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>global 102 - @prodbydvosk @prodhoops.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="DVOSK" class="hover:underline" data-v-12cfc155>DVOSK</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY A</a> <!----> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>102 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>Ab MINOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <!----> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4564" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="DVOSK" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 20 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4704" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/D8YeYwWQeapD4OfeD5TvH3WyCTzixbnkaokgeujb47041D4m2.jpg" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="8" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-ivr5d6q21-cdc691jqq" data-v-12cfc155>
                                            <div id="waveform_8"></div>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>1:18</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>@imregii - Harmonies on sunrise 89 bpm.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="imregii" class="hover:underline" data-v-12cfc155>imregii</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY A</a> <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>89 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>F# MINOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4704" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="imregii" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 3 Nov, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4564" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/COLOniA3AnZSjxmQZqI0jPky8GGXfIq2kWPBQ0L54564wtJX2.jpg" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="9" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-1b0twk7i2-l7b0i3cuy" data-v-12cfc155>
                                            <div id="waveform_9"></div>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>3:38</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>coastal 130 - @prodbydvosk @prodlanders.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="DVOSK" class="hover:underline" data-v-12cfc155>DVOSK</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY A</a> <!----> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>130 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>A MINOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <!----> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4564" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="DVOSK" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                                                            </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 20 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr class="group lg:hover:bg-black/[0.06] dark:lg:hover:bg-[#2d2d2d]" data-v-12cfc155>
                                       <td class="w-1 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3" data-v-12cfc155>
                                          <div class="w-10 overflow-hidden rounded bg-black bg-opacity-10 hover:opacity-70 lg:w-[60px]" data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4647" data-v-12cfc155><img loading="lazy" data-src="https://wavs.mo.cloudinary.net/images/hh02q7Ab9amr0owXtu1pjcbqJ381mqmFYO1pwzJL4647Ov8KU.png" src="/modx/images/album.avif" class="h-10 rounded object-cover lg:h-[60px]" data-v-12cfc155></a></div>
                                       </td>
                                       <td class="w-1 py-4" data-v-12cfc155>
                                          <button class="pl-2.5 align-middle focus:outline-none lg:pl-5" data-v-12cfc155>
                                             <svg num_audio="10" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black/[0.08] group-hover:text-[#552BFC]/[0.84] dark:text-white/[0.16] lg:h-10 lg:w-10" data-v-d5f1e0b0 data-v-12cfc155>
                                                <path d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current" data-v-d5f1e0b0></path>
                                                <path d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white" data-v-d5f1e0b0></path>
                                             </svg>
                                          </button>
                                       </td>
                                       <td class="hidden w-full py-4 pl-5 lg:table-cell" style="display:;" data-v-12cfc155>
                                          <div data-key="audio-n2n9845bu-wlkk7igml" data-v-12cfc155>
                                            <div id="waveform_10"></div>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 py-4 pl-3 lg:table-cell" style="display:;" data-v-12cfc155><span class="text-[11px] font-medium leading-[14px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>0:30</span></td>
                                       <td class="w-full max-w-0 py-4 pl-3 md:w-auto md:max-w-none lg:pl-11" data-v-12cfc155>
                                          <div class="md:w-[308px]" data-v-12cfc155>
                                             <p class="truncate text-sm font-medium leading-[18px] tracking-[-0.05px]" data-v-12cfc155>ALADIN_F#M_95.wav</p>
                                             <p class="mt-1 truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>
                                                <a href="SPT" class="hover:underline" data-v-12cfc155>SEANP</a><!---->
                                             </p>
                                             <p class="mt-2 hidden items-center space-x-1.5 md:flex" data-v-12cfc155>
                                                <a href="license" class="h-4 rounded border border-[#BEBDBD] bg-transparent px-1 pt-0.5 text-[9px] font-medium leading-[11px] tracking-[0.1px] text-[#696A6E] group-hover:bg-[#dedede] dark:border-[#4A4A4A] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>ROYALTY-FREE</a> <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <!---->
                                             </p>
                                          </div>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 md:table-cell md:pl-11 lg:hidden xl:table-cell" data-v-12cfc155>
                                          <p class="truncate text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7]" data-v-12cfc155>95 BPM</p>
                                       </td>
                                       <td class="hidden w-1 whitespace-nowrap py-4 pl-5 text-xs leading-4 tracking-[0.1px] text-5c5c5c dark:text-[#b7b7b7] md:table-cell md:pl-6 lg:hidden xl:table-cell" data-v-12cfc155><span data-v-12cfc155>F# MINOR</span></td>
                                       <td class="w-1 whitespace-nowrap rounded-tr-xl rounded-br-xl py-4 pl-3 pr-3 text-right sm:pl-12" data-v-12cfc155>
                                          <div class="flex items-center justify-end space-x-2 sm:space-x-4 md:space-x-2 lg:mr-2 lg:opacity-0 lg:group-hover:opacity-100" data-v-12cfc155>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3" data-v-12cfc155>
                                                   <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                                   <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[13px]" data-v-12cfc155>
                                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <div class="flex items-center space-x-1.5 md:hidden" data-v-12cfc155>
                                                <span class="h-4 rounded bg-[#f0f0f0] px-1 pt-0.5 text-[9px] font-medium leading-[13px] tracking-[0.1px] text-5c5c5c group-hover:bg-[#dedede] dark:bg-white/[0.12] dark:text-[#b7b7b7] dark:group-hover:bg-white/[0.12]" data-v-12cfc155>STEMS</span> <!---->
                                             </div>
                                             <!---->
                                             <button class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:hidden" data-v-12cfc155>
                                                <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                   <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                   <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                   <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                </svg>
                                             </button>
                                             <span class="hidden md:block" data-v-12cfc155>
                                                <span style="display:none;">
                                                   <div class="popper filter-dropdown min-w-[180px] p-2 font-circular-std text-sm font-normal text-black antialiased dark:text-white" data-v-12cfc155>
                                                      <ul class="text-left" data-v-12cfc155>
                                                         <li data-v-12cfc155><a href="<?=Url::to(['site/pack'])?>/4647" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155> View Pack </a></li>
                                                         <li data-v-12cfc155><a href="SPT" class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            View Creator
                              audio                              </a>
                                                         </li>
                                                         <li data-v-12cfc155><button class="flex w-full rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-12cfc155>
                                                            Report Sound
                                                            </button>
                                                         </li>
                                                         <!----> <!---->
                                                         <li data-v-12cfc155><span class="flex w-full rounded-lg py-2.5 px-3.5 opacity-50" data-v-12cfc155>Uploaded 28 Oct, 2022</span></li>
                                                      </ul>
                                                   </div>
                                                </span>
                                                <button class="hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                                   <svg width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-90" data-v-12cfc155>
                                                      <path d="M3.19048 2.00053C3.19048 2.65802 2.65748 3.19101 2 3.19101C1.34252 3.19101 0.809524 2.65802 0.809524 2.00053C0.809524 1.34305 1.34252 0.810059 2 0.810059C2.65748 0.810059 3.19048 1.34305 3.19048 2.00053Z" class="fill-current"></path>
                                                      <path d="M7.19052 2.00053C7.19052 2.65802 6.65753 3.19101 6.00005 3.19101C5.34256 3.19101 4.80957 2.65802 4.80957 2.00053C4.80957 1.34305 5.34256 0.810059 6.00005 0.810059C6.65753 0.810059 7.19052 1.34305 7.19052 2.00053Z" class="fill-current"></path>
                                                      <path d="M11.1905 2.00053C11.1905 2.65802 10.6575 3.19101 10 3.19101C9.34256 3.19101 8.80957 2.65802 8.80957 2.00053C8.80957 1.34305 9.34256 0.810059 10 0.810059C10.6575 0.810059 11.1905 1.34305 11.1905 2.00053Z" class="fill-current"></path>
                                                   </svg>
                                                </button>
                                             </span>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!----> <!---->
                        </div>
                        <div class="mt-10 text-center">
                           <!---->
                        </div>
                     </div>
                  </div>
               </div>



<?php
$url=Yii::$app->request->baseUrl;
$script = <<< JS


var wavesurfer_1 = WaveSurfer.create({
    container: '#waveform_1',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_1.load('$url/modx/media/okean-elzi-vse-bude-dobre.mp3');

var wavesurfer_2 = WaveSurfer.create({
    container: '#waveform_2',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_2.load('$url/modx/media/Computer_Love__Paul_Schilling.mp3');

var wavesurfer_3 = WaveSurfer.create({
    container: '#waveform_3',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_3.load('$url/modx/media/Eminem_Mockingbird.mp3');

var wavesurfer_4 = WaveSurfer.create({
    container: '#waveform_4',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_4.load('$url/modx/media/okean-elzi-vse-bude-dobre.mp3');

var wavesurfer_5 = WaveSurfer.create({
    container: '#waveform_5',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_5.load('$url/modx/media/Computer_Love__Paul_Schilling.mp3');

var wavesurfer_6 = WaveSurfer.create({
    container: '#waveform_6',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_6.load('$url/modx/media/Eminem_Mockingbird.mp3');

var wavesurfer_7 = WaveSurfer.create({
    container: '#waveform_7',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_7.load('$url/modx/media/okean-elzi-vse-bude-dobre.mp3');

var wavesurfer_8 = WaveSurfer.create({
    container: '#waveform_8',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_8.load('$url/modx/media/Computer_Love__Paul_Schilling.mp3');

var wavesurfer_9 = WaveSurfer.create({
    container: '#waveform_9',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_9.load('$url/modx/media/Eminem_Mockingbird.mp3');

var wavesurfer_10 = WaveSurfer.create({
    container: '#waveform_10',
    waveColor: '#bdc3c7',
    progressColor: '#6F7375',
    cursorWidth: 0,
    barHeight: 0.4,
    barWidth: 2,
    barGap: 2,
    fillParent: true,
    hideScrollbar: true,
    loopSelection: false
});
wavesurfer_10.load('$url/modx/media/okean-elzi-vse-bude-dobre.mp3');



//
// play music / change button
//
$('svg.h-8').attr("play", "no");
$('svg.h-8').click(function(){
  $('svg.h-8').html('<path data-v-d5f1e0b0="" d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current"></path><path data-v-d5f1e0b0="" d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" class="fill-black group-hover:fill-white dark:fill-white"></path>');
  var num_audio = $(this).attr("num_audio");
  //alert(num_audio);
  var attr = $(this).attr('play');
  //alert(attr);
    if (attr=="yes"){
      $(this).attr("play", "no");
    }
    else{
      $('svg.h-8').attr("play", "no");
      $(this).attr("play", "yes");
      $(this).html('<path data-v-d5f1e0b0="" d="M0 20C0 8.95431 8.95431 0 20 0V0C31.0457 0 40 8.95431 40 20V20C40 31.0457 31.0457 40 20 40V40C8.95431 40 0 31.0457 0 20V20Z" class="fill-current"></path><rect data-v-d5f1e0b0="" width="12" height="12" cx="100" x="14" y="14" class="fill-black group-hover:fill-white dark:fill-white"></rect>');
    }

  switch (num_audio) {
    case '1':
      wavesurfer_1.playPause();
      wavesurfer_2.pause();
      wavesurfer_3.pause();
      wavesurfer_4.pause();
      wavesurfer_5.pause();
      wavesurfer_6.pause();
      wavesurfer_7.pause();
      wavesurfer_8.pause();
      wavesurfer_9.pause();
      wavesurfer_10.pause();
      break;
    case '2':
      wavesurfer_2.playPause();
      wavesurfer_1.pause();
      wavesurfer_3.pause();
      wavesurfer_4.pause();
      wavesurfer_5.pause();
      wavesurfer_6.pause();
      wavesurfer_7.pause();
      wavesurfer_8.pause();
      wavesurfer_9.pause();
      wavesurfer_10.pause();
      break;
    case '3':
      wavesurfer_3.playPause();
      wavesurfer_1.pause();
      wavesurfer_2.pause();
      wavesurfer_4.pause();
      wavesurfer_5.pause();
      wavesurfer_6.pause();
      wavesurfer_7.pause();
      wavesurfer_8.pause();
      wavesurfer_9.pause();
      wavesurfer_10.pause();
      break;
    case '4':
      wavesurfer_4.playPause();
      wavesurfer_1.pause();
      wavesurfer_2.pause();
      wavesurfer_3.pause();
      wavesurfer_5.pause();
      wavesurfer_6.pause();
      wavesurfer_7.pause();
      wavesurfer_8.pause();
      wavesurfer_9.pause();
      wavesurfer_10.pause();
      break;
    case '5':
      wavesurfer_5.playPause();
      wavesurfer_1.pause();
      wavesurfer_2.pause();
      wavesurfer_3.pause();
      wavesurfer_4.pause();
      wavesurfer_6.pause();
      wavesurfer_7.pause();
      wavesurfer_8.pause();
      wavesurfer_9.pause();
      wavesurfer_10.pause();
      break;
    case '6':
        wavesurfer_6.playPause();
        wavesurfer_1.pause();
        wavesurfer_2.pause();
        wavesurfer_3.pause();
        wavesurfer_4.pause();
        wavesurfer_5.pause();
        wavesurfer_7.pause();
        wavesurfer_8.pause();
        wavesurfer_9.pause();
        wavesurfer_10.pause();
        break;
    case '7':
        wavesurfer_7.playPause();
        wavesurfer_1.pause();
        wavesurfer_2.pause();
        wavesurfer_3.pause();
        wavesurfer_4.pause();
        wavesurfer_5.pause();
        wavesurfer_6.pause();
        wavesurfer_8.pause();
        wavesurfer_9.pause();
        wavesurfer_10.pause();
        break;
    case '8':
        wavesurfer_8.playPause();
        wavesurfer_1.pause();
        wavesurfer_2.pause();
        wavesurfer_3.pause();
        wavesurfer_4.pause();
        wavesurfer_5.pause();
        wavesurfer_6.pause();
        wavesurfer_7.pause();
        wavesurfer_9.pause();
        wavesurfer_10.pause();
        break;
    case '9':
        wavesurfer_9.playPause();
        wavesurfer_1.pause();
        wavesurfer_2.pause();
        wavesurfer_3.pause();
        wavesurfer_4.pause();
        wavesurfer_5.pause();
        wavesurfer_6.pause();
        wavesurfer_7.pause();
        wavesurfer_8.pause();
        wavesurfer_10.pause();
        break;
    case '10':
        wavesurfer_10.playPause();
        wavesurfer_1.pause();
        wavesurfer_2.pause();
        wavesurfer_3.pause();
        wavesurfer_4.pause();
        wavesurfer_5.pause();
        wavesurfer_6.pause();
        wavesurfer_7.pause();
        wavesurfer_8.pause();
        wavesurfer_9.pause();
        break;
    default:
      console.log('error');
  }


});

//
//slider price
//
$( function() {
  $( "#slider-range" ).slider({
    range: true,
    min: 40,
    max: 300,
    values: [ 40, 300 ],
    slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
  });
  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
} );

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
