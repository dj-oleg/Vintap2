<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - gfx';
?>
<style>
  .likepack{
    margin-left: 15px;
    height: 40px;
    width: 40px;
  }

</style>
<div class="w-full" name="top">
                     <div data-fetch-key="data-v-8d6f3130:0" class="relative" data-v-8d6f3130>
                        <div class="bg-glow" style="box-shadow:0 -125px 200px 225px transparent;" data-v-8d6f3130></div>
                        <div class="relative z-[1]" data-v-8d6f3130>
                           <div class="-mt-4 mb-10 sm:-mt-2" data-v-8d6f3130>
                              <div class="hidden items-center text-[13px] sm:flex" data-v-8d6f3130>
                                 <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="mr-2 hover:underline" data-v-8d6f3130><?=$pack['creator']?></a>
                                 <span class="inline-flex items-center text-5c5c5c dark:text-[#b7b7b7]" data-v-8d6f3130>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2 h-3 w-3 rotate-180" data-v-8d6f3130>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8443 18.3839C13.3562 18.872 12.5647 18.872 12.0766 18.3839L3.28946 9.59677L11.2701 1.61612C11.7583 1.12796 12.5497 1.12796 13.0379 1.61612C13.526 2.10427 13.526 2.89573 13.0379 3.38388L6.82499 9.59677L13.8443 16.6161C14.3325 17.1043 14.3325 17.8957 13.8443 18.3839Z" class="fill-current"></path>
                                    </svg>
                                    <?=$pack['title']?>
                                 </span>
                              </div>
                              <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="flex items-center text-[15px] hover:underline sm:hidden" data-v-8d6f3130>
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4" data-v-8d6f3130>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8443 18.3839C13.3562 18.872 12.5647 18.872 12.0766 18.3839L3.28946 9.59677L11.2701 1.61612C11.7583 1.12796 12.5497 1.12796 13.0379 1.61612C13.526 2.10427 13.526 2.89573 13.0379 3.38388L6.82499 9.59677L13.8443 16.6161C14.3325 17.1043 14.3325 17.8957 13.8443 18.3839Z" class="fill-current"></path>
                                 </svg>
                                 Creator profile
                              </a>
                           </div>
                           <div class="flex flex-wrap sm:flex-nowrap" data-v-8d6f3130>
                              <div class="w-[124px] max-w-full shrink-0 sm:w-[248px]" data-v-8d6f3130>
                                 <div class="h-0 w-full rounded-lg bg-cover bg-center bg-no-repeat" style="padding-bottom:100%;background-image:url(<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['img']?>);" data-v-8d6f3130></div>
                              </div>
                              <div class="mt-5 w-full sm:mt-0 sm:ml-12 sm:w-auto" data-v-8d6f3130>
                                 <div class="flex flex-col" data-v-8d6f3130>
                                    <div class="order-2 mt-2 flex items-center sm:order-1 sm:mt-0" data-v-8d6f3130>
                                       <div class="mr-2 flex items-center -space-x-3" data-v-8d6f3130>
                                          <img data-src="<?=Yii::$app->request->baseUrl?>/modx/<?=($pack['creator_photo']!="")?$pack['creator_photo']:'images/user_photo/user_icon.png'?>" alt="" src="<?=Yii::$app->request->baseUrl?>/modx/<?=($pack['creator_photo']!="")?$pack['creator_photo']:'images/user_photo/user_icon.png'?>" class="h-7 w-7 shrink-0 rounded-full border border-white/[0.08]" data-v-8d6f3130>
                                       </div>
                                       <a href="<?=Url::to(['site/creator'])?>/<?=$pack['creator_id']?>" class="hover:underline" data-v-8d6f3130>
                                       <?=$pack['creator']?>
                                       </a>
                                    </div>
                                    <div class="order-1 sm:order-2" data-v-8d6f3130>
                                       <div class="flex items-center sm:mt-2" data-v-8d6f3130>
                                          <h1 class="mr-2 text-[28px] font-medium leading-8 sm:text-[33px] sm:leading-10" data-v-8d6f3130><?=$pack['title']?></h1>
                                          <span data-v-8d6f3130>
                                             <span style="display:none;">
                                                <div class="popper share-dropdown p-2" data-v-8d6f3130>
                                                   <ul data-v-8d6f3130>
                                                      <li data-v-8d6f3130>
                                                         <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwavs.com%2Fpacks%2F38" class="flex items-center rounded-lg py-2.5 px-3 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-8d6f3130>
                                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-4 h-4 w-4" data-v-8d6f3130>
                                                               <path d="M7.99992 1.83331C11.6818 1.83331 14.6666 4.81809 14.6666 8.49998C14.6666 11.8275 12.2292 14.5859 9.04162 15.0857L9.04162 10.427H10.5949L10.8906 8.49999L9.04162 8.49998V7.2494C9.04162 6.72223 9.29983 6.20835 10.128 6.20835H10.9687V4.56743C10.9687 4.56743 10.2057 4.43719 9.47637 4.43719C8.30588 4.43719 7.44716 4.98246 7.11244 5.99331C7.01156 6.29775 6.95822 6.64445 6.95822 7.03126V8.49998H5.26552L5.26552 10.427H6.95822V15.0856C3.77115 14.5855 1.33325 11.8275 1.33325 8.49998C1.33325 4.81809 4.31803 1.83331 7.99992 1.83331Z" fill="currentColor"></path>
                                                            </svg>
                                                            Facebook
                                                         </a>
                                                      </li>
                                                      <li data-v-8d6f3130>
                                                         <a target="_blank" href="https://twitter.com/intent/tweet?text=https%3A%2F%2Fwavs.com%2Fpacks%2F38" class="flex items-center rounded-lg py-2.5 px-3 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-8d6f3130>
                                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-4 h-4 w-4" data-v-8d6f3130>
                                                               <path d="M14.6666 4.45808C14.1673 4.68076 13.6377 4.82693 13.0954 4.89173C13.6603 4.55089 14.094 4.01117 14.2982 3.36809C13.7612 3.68889 13.1738 3.91491 12.5612 4.03639C12.0622 3.50118 11.3513 3.16669 10.5645 3.16669C9.05372 3.16669 7.82888 4.39977 7.82888 5.92062C7.82888 6.1365 7.8531 6.34667 7.89971 6.54828C5.62627 6.43339 3.61065 5.33701 2.26143 3.67081C2.02601 4.07755 1.89112 4.55068 1.89112 5.05533C1.89112 6.01081 2.37409 6.85372 3.10804 7.34762C2.67364 7.33392 2.2488 7.2158 1.86898 7.00311C1.86882 7.01465 1.86882 7.02618 1.86882 7.03777C1.86882 8.37211 2.81174 9.48522 4.0631 9.73822C3.66028 9.84852 3.23775 9.86466 2.82778 9.78542C3.17586 10.8795 4.18612 11.6757 5.3831 11.698C4.4469 12.4366 3.26737 12.8769 1.9858 12.8769C1.76497 12.8769 1.54726 12.8639 1.33325 12.8384C2.54382 13.6198 3.98169 14.0758 5.52648 14.0758C10.5581 14.0758 13.3095 9.87928 13.3095 6.24001C13.3095 6.12056 13.3069 6.00179 13.3016 5.88371C13.8371 5.49394 14.2994 5.01118 14.6666 4.45808Z" fill="currentColor"></path>
                                                            </svg>
                                                            Twitter
                                                         </a>
                                                      </li>
                                                      <li class="mt-2 border-t border-black/[0.12] pt-2 dark:border-white/[0.12]" data-v-8d6f3130>
                                                         <button type="button" class="flex items-center rounded-lg py-2.5 px-3 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]" data-v-8d6f3130>
                                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-4 h-4 w-4" data-v-8d6f3130>
                                                               <path d="M7.27 3.95087L7.64441 3.57645C9.17952 2.07879 11.5758 2.00391 13.036 3.42669L13.0734 3.46413C14.4962 4.88691 14.4213 7.32061 12.9237 8.81828L12.1 9.642C10.9018 10.8401 9.14208 11.1397 7.75674 10.5031C7.38232 10.3159 7.41977 9.79176 7.79418 9.41735L8.31836 8.89317C8.54301 8.66852 8.84255 8.55618 9.0672 8.59363C9.59138 8.70595 10.153 8.55619 10.5649 8.14433L11.3886 7.32061C12.0251 6.68411 12.0251 5.67318 11.426 5.07412L11.3886 5.03667C10.7895 4.40017 9.77858 4.43761 9.14208 5.07412C8.91743 5.29877 8.6179 5.4111 8.35581 5.33621L7.30744 5.03667C6.89558 4.92435 6.85814 4.36273 7.27 3.95087Z" fill="currentColor"></path>
                                                               <path d="M4.649 11.7387C5.24806 12.3752 6.25899 12.3378 6.89549 11.7013C7.15759 11.4766 7.45712 11.3643 7.64433 11.4017L8.65525 11.7387C9.06711 11.851 9.10455 12.4127 8.69269 12.8245L8.31828 13.199C6.82061 14.7341 4.42435 14.8089 2.96413 13.3487L2.92669 13.3113C1.50391 11.8885 1.57879 9.45479 3.07645 7.95713L3.90017 7.13341C5.0983 5.93528 6.85806 5.63575 8.24339 6.27226C8.61781 6.45946 8.58037 6.98364 8.20595 7.35806L7.68177 7.88224C7.45712 8.10689 7.15759 8.21921 6.93294 8.18177C6.40876 8.06944 5.84713 8.21921 5.43527 8.63107L4.61156 9.45479C3.97505 10.0913 3.97505 11.1022 4.57412 11.7013L4.649 11.7387Z" fill="currentColor"></path>
                                                            </svg>
                                                            Copy link
                                                         </button>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </span>
                                            <!-- <button type="button" class="grid h-8 w-8 place-content-center rounded-full bg-black/[0.08] hover:bg-black/[0.10] dark:bg-white/[0.16] dark:hover:bg-white/[0.20]" data-v-8d6f3130>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-black dark:text-white" data-v-8d6f3130>
                                                   <path d="M8.56535 0.257388C8.4114 0.0931702 8.19634 0 7.97124 0C7.74614 0 7.53108 0.0931702 7.37713 0.257388L4.9275 2.87033C4.61989 3.19844 4.63651 3.7138 4.96463 4.02141C5.29275 4.32902 5.80811 4.3124 6.11572 3.98428L7.15687 2.87372V9.95965C7.15687 10.4094 7.52148 10.774 7.97124 10.774C8.421 10.774 8.78561 10.4094 8.78561 9.95965V2.87372L9.82676 3.98428C10.1344 4.3124 10.6497 4.32902 10.9778 4.02141C11.306 3.7138 11.3226 3.19844 11.015 2.87033L8.56535 0.257388Z" fill="currentColor"></path>
                                                   <path d="M3.88651 8.1307C3.88651 7.78676 4.16533 7.50795 4.50926 7.50795H5.03185C5.48161 7.50795 5.84622 7.14335 5.84622 6.69358C5.84622 6.24382 5.48161 5.87922 5.03185 5.87922H4.50926C3.26581 5.87922 2.25778 6.88724 2.25778 8.1307V13.7485C2.25778 14.992 3.26581 16 4.50926 16H11.4336C12.677 16 13.685 14.992 13.685 13.7485V8.1307C13.685 6.88724 12.677 5.87922 11.4336 5.87922H10.911C10.4612 5.87922 10.0966 6.24382 10.0966 6.69358C10.0966 7.14335 10.4612 7.50795 10.911 7.50795H11.4336C11.7775 7.50795 12.0563 7.78676 12.0563 8.1307V13.7485C12.0563 14.0925 11.7775 14.3713 11.4336 14.3713H4.50926C4.16533 14.3713 3.88651 14.0925 3.88651 13.7485V8.1307Z" fill="currentColor"></path>
                                                </svg>
                                             </button>-->
                                          </span>
                                       </div>
                                       <div class="mt-2 flex items-center" data-v-8d6f3130>
                                          <i class="fa-solid fa-image" style="padding-right:10px"></i>
                                          <span class="mr-5" data-v-8d6f3130><?=(isset($all_images))?count($all_images):0?> Images</span>
                                          <div class="flex items-center" data-v-8d6f3130>


                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mt-4 sm:max-w-[368px]" data-v-8d6f3130>
                                    <span class="inline text-[#5C5C5C] dark:text-[#B7B7B7]" data-v-8d6f3130><?=$pack['description']?></span>
                                     <!--- <button type="button" class="underline hover:no-underline dark:text-white inline-block" data-v-8d6f3130>
                                    View more
                                  </button>-->
                                  <p><span class="inline text-[#000] dark:text-[#fff] text-xl font-medium leading-[18px] tracking-[-0.25px] sm:text-[28px] sm:leading-8" data-v-8d6f3130>$ <?=(isset($pack['price']))?$pack['price']:0?></span></p>
                                 </div>
                                 <div class="mt-6 flex items-center" data-v-8d6f3130>
                                    <button num_audio="<?=$pack['id']?>" type="button" class="<?=(Yii::$app->user->isGuest)?'show_modal_sign_in btn_sign_in':'btn-buy'?> btn-purple mr-4 flex items-center" data-v-8d6f3130>
                                       <i class="fa-solid fa-cart-plus" style="padding-right:10px"></i>
                                       Get Pack
                                    </button>
                                    <!--<button type="button" class="group grid h-10 w-10 place-content-center rounded-full bg-black/[0.08] hover:bg-[#552BFC]/[0.84] hover:text-white dark:bg-white/[0.16]" data-v-8d6f3130>
                                       <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 lg:h-10 lg:w-10" data-v-583a415a data-v-8d6f3130>
                                          <circle stroke="#373737" opacity="1" stroke-width="1" fill="transparent" r="19.5" cx="20" cy="20" class="border-stroke" data-v-583a415a></circle>
                                          <circle stroke="#373737" stroke-width="1" fill="transparent" r="19.5" cx="20" cy="20" class="border-stroke origin-center -rotate-90 transform" style="display:none;" data-v-583a415a></circle>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6957 20.7203L15.8748 28.3397C15.2093 28.7686 14.333 28.2908 14.333 27.4991V12.2604C14.333 11.4687 15.2093 10.991 15.8748 11.4199L27.6957 19.0393C28.3066 19.4331 28.3066 20.3265 27.6957 20.7203Z" fill="currentColor" class="playicon" data-v-583a415a></path>
                                       </svg>
                                       <span class="hidden" data-v-8d6f3130></span>
                                    </button>-->
                                    <button num_audio="<?=$pack['id']?>" class="<?=(Yii::$app->user->isGuest)?'show_modal_sign_in':'btn-like'?> likepack hidden h-8 w-8 items-center justify-center rounded-full bg-black/[0.08] backdrop-blur-lg dark:bg-white/[0.16] lg:flex" data-v-12cfc155>
                                         <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-[18px] <?=(Yii::$app->user->isGuest)?'show_modal_sign_in':'btn-like'?>" data-v-12cfc155>
                                           <?php $user_likes_samles =(Yii::$app->user->isGuest) ? [null] : $this->context->get_user_likes_samples();
                                            if((isset($user_likes_samles))&&(in_array($pack['id'], $user_likes_samles))): ?>
                                                   <path d="M21.6612 1.449C20.569 0.467434 19.1675 -0.0397535 17.7518 0.002434C15.9945 0.002434 14.2208 0.724309 12.9237 2.064L12.0003 3.01415L11.0768 2.064C9.7784 0.724309 8.00653 0.002434 6.24871 0.002434C4.83309 0.002434 3.43293 0.467902 2.29902 1.449C-0.61379 3.9704 -0.759571 8.46618 1.86637 11.1802L10.9226 19.5412C11.2222 19.8477 11.6065 20.0024 11.9956 20.0024C12.3862 20.0024 12.7779 19.8493 13.0742 19.5429L22.1258 11.1819C24.7597 8.46337 24.6143 3.96806 21.6612 1.449Z" class="fill-current"></path>
                                           <?php else: ?>
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7518 0.002434C19.1675 -0.0397535 20.569 0.467434 21.6612 1.449C24.6143 3.96806 24.7597 8.46337 22.1258 11.1819L13.0742 19.5429C12.7779 19.8493 12.3862 20.0024 11.9956 20.0024C11.6065 20.0024 11.2222 19.8477 10.9226 19.5412L1.86637 11.1802C-0.759571 8.46618 -0.61379 3.9704 2.29902 1.449C3.43293 0.467902 4.83309 0.002434 6.24871 0.002434C8.00653 0.002434 9.7784 0.724309 11.0768 2.064L12.0003 3.01415L12.9237 2.064C14.2208 0.724309 15.9945 0.002434 17.7518 0.002434ZM12.0001 6.97862L14.9727 3.82391C15.5314 3.2312 16.4073 2.73126 17.3555 2.57758C18.2908 2.42598 19.2731 2.61278 20.1057 3.35279C22.0326 5.06964 21.7737 7.89396 20.3724 9.39492L11.9986 17.2849L3.62198 9.39485C2.24625 7.92158 1.95122 5.04376 3.88949 3.35679L3.89373 3.35302C4.72161 2.61638 5.70026 2.42538 6.63443 2.57376C7.58087 2.72408 8.45918 3.2215 9.02705 3.82393L12.0001 6.97862Z" class="fill-current"></path>
                                           <?php endif; ?>
                                         </svg>
                                      </button>
                                 </div>
                              </div>
                           </div>
                        </div>



                        <div class="mt-8 mb-7 h-px bg-[#f0f0f0] dark:bg-[#2e2e2e]"></div>
                        <div>
                          <div class="sticky mb-1.5 flex items-center py-1 lg:mb-6 top-[147px] lg:top-[130px] z-[31] bg-white dark:!bg-121212">
                             <h2 class="text-2xl font-medium tracking-[-0.25px] lg:mr-5 lg:text-[28px] lg:leading-8" style="display:;">Images preview</h2>

                          </div>
                          <div class="overflow-x-auto overflow-y-hidden">


                            <!--Slideshow-->
                            <div class="overflow-hidden">
                                        <div class="flex items-center">
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

                                        <div class="swiper mt-5">
                                           <div class="swiper-wrapper flex -mx-3">
                                             <?php if (isset($all_images)):?>
                                             <?php foreach($all_images as $key => $image):
                                               if (isset($image->image_preview)):?>
                                               <div class="group swiper-slide w-1/6 shrink-0 focus:outline-none px-3">
                                                  <div class="relative overflow-hidden rounded bg-black bg-opacity-10">
                                                     <div class="pointer-events-none absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-40 text-white transition-opacity focus:outline-none group-hover:opacity-100 opacity-0">

                                                     </div>
                                                     <span class="hidden"></span> <span class="btn_add_sample block h-0 w-full bg-cover bg-center" style="padding-bottom:100%;background-image:url(<?=str_replace(" ", '%20', Yii::$app->request->baseUrl.'/modx/'.$image->image_preview)?>);" img="<?=str_replace(" ", '%20', Yii::$app->request->baseUrl.'/modx/'.$image->image_preview)?>"></span>
                                                     <div class="absolute bottom-1 left-1 hidden items-center rounded-[5px] bg-black/[0.48] px-1 py-[5px] text-xs text-white backdrop-blur-lg sm:inline-flex" style="padding:2px 7px">
                                                        <?=$key+1?>

                                                     </div>
                                                  </div>

                                               </div>
                                            <?php endif; endforeach; ?>
                                            <?php endif; ?>

                                           </div>
                                        </div>
                                     </div>
                            <!--End Slideshow-->

                          </div>

                        </div>





                        <div class="mt-16 pb-14 text-center md:mt-20 md:pb-[72px]" data-v-8d6f3130>
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



<div class="load_wait" style="position:fixed;top:0;left:0;height:100%;width:100%;z-index:99;display:none;">
   <div class="fa-5x" style="position:fixed;left:50%;top:50%;margin-top:-50px;margin-left:-50px;z-index:100;">
     <i class="fa-solid fa-sync fa-spin"></i>
   </div>
 </div>


 <!-------------------NEW IMAGE ---------------------->
 <div id="div_add_sample" class="hidden fixed inset-0 z-60 h-full w-full overflow-x-hidden bg-black bg-opacity-80 dark:bg-[#2c2c2c] dark:bg-opacity-70 overflow-y-auto">
  <div class="animated modal-popup-container2 absolute inset-0 h-full w-full text-center px-3">
     <div class="inline-block w-full text-left align-middle">
        <div id="modal_add_sample" class="relative mx-auto max-w-full rounded-2xl bg-white px-7 pt-7 pb-9 text-black shadow-lg dark:bg-121212 dark:text-white my-8" style="width: 760px;">
           <button class="hide_modal_add_sample text-primary absolute top-2.5 right-2.5 z-10 flex h-10 w-10 items-center justify-center opacity-100 hover:opacity-70">
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-5">
                 <g>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="7" x2="25" y1="7" y2="25" class="cls-1"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="7" x2="25" y1="25" y2="7" class="cls-1"></line>
                 </g>
              </svg>
           </button>
             <div>
                <h3 class="mb-10 text-center text-2xl font-medium">Image preview</h3>
                <div>

                   <center><div class="image-wrapper" id="image-4-wrapper" >
                     <img id="image-4"  src="http://poligon.s-hostp.net/modx/images/pack/133/001girl.jpg" alt="profile picture" style="width: 732px;">
                   </div></center>

                 </div>
               </div>

                <div class="mt-10 text-center">

                </div>
             </div>
          </div>
       </div>
    </div>
<!----------------------------------------->
 <?php
 $this->registerJsFile(Yii::$app->request->baseUrl . '/js/filters_sound.js', ['depends' => [yii\web\JqueryAsset::className()]]);
 ?>
 <?php
$id=$pack['id'];
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

 //add views
 $.ajax({
     type: "POST",
     url: base_url+'/ajax/views_add',
     data: {audio_id: $id}
     });

 JS;
 $this->registerJs($script, yii\web\View::POS_READY);
 ?>
