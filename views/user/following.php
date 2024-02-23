<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - account';
$session = Yii::$app->session;
$session->open();
$carrent_theme=$session['theme'];
?>
<div class="main-content-area mt-12 box-small" style="min-height: 500px">
   <div class="block lg:hidden" data-v-6915f321="">
      <div class="fixed inset-0 z-[32] bg-[rgba(44,44,44,0.72)] lg:hidden hidden" data-v-6915f321=""></div>
      <div class="vue-sticky-placeholder" style="padding-top: 0px;"></div>
      <div sticky-offset="{ top: 105 }" sticky-z-index="38" class="sticky-nav z-20 h-screen w-full pb-8 font-circular-std lg:block lg:h-auto lg:w-56 hidden bg-white dark:bg-black pt-9 vue-sticky-el top-sticky" data-v-6915f321="" style="position: fixed; top: 0px; bottom: auto; left: 0px; width: 0px; z-index: 38;">
         <div class="fixed flex h-16 w-full max-w-[232px] items-center border-b px-8 py-[18px] dark:bg-black lg:h-24 border-black/[0.16] bg-white dark:border-white/[0.16] dark:bg-black top-9" data-v-6915f321="">
            <a href="/" class="w-full nuxt-link-active dark:text-white" data-v-6915f321="">
            <img id="headimg" src="<?=Yii::$app->request->baseUrl?>/img/logo_name<?=$carrent_theme=="Light"?"":"_white"?>.png" class="w-20 lg:w-24">
            </a>
            <button type="button" class="close-mobile-menu absolute -right-14 rounded-full bg-white" data-v-6915f321="">
               <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-black hover:text-[#7E8084]" data-v-6915f321="">
                  <path d="M0 14C0 6.26801 6.26801 0 14 0V0C21.732 0 28 6.26801 28 14V14C28 21.732 21.732 28 14 28V28C6.26801 28 0 21.732 0 14V14Z" class="bg-remove"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9697 8.03021C20.3211 8.38168 20.3211 8.95153 19.9697 9.303L9.303 19.9697C8.95153 20.3211 8.38168 20.3211 8.03021 19.9697C7.67873 19.6182 7.67873 19.0483 8.03021 18.6969L18.6969 8.03021C19.0483 7.67873 19.6182 7.67873 19.9697 8.03021Z" fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9698 19.9697C19.6183 20.3211 19.0485 20.3211 18.697 19.9697L8.03033 9.303C7.67886 8.95153 7.67886 8.38168 8.03033 8.0302C8.3818 7.67873 8.95165 7.67873 9.30313 8.0302L19.9698 18.6969C20.3213 19.0483 20.3213 19.6182 19.9698 19.9697Z" fill="currentColor"></path>
               </svg>
            </button>
         </div>
         <section data-v-6915f321="" class="mt-[60px] h-full overflow-y-auto overscroll-none px-4 pt-5 pb-24 text-[17px] leading-[22px]">
            <div data-v-6915f321="">
               <h3 data-v-6915f321="" class="px-4 text-5c5c5c dark:text-[#B7B7B7]">
                  Music
               </h3>
               <ul data-v-6915f321="" class="mt-4 dark:text-white">
                  <li data-v-6915f321="">
                     <a data-v-6915f321="" href="<?=Url::to(['site/explore'])?>" class="flex items-center space-x-2.5 whitespace-nowrap rounded-full px-4 py-2.5 hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                        <svg data-v-6915f321="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                           <path d="M11.2239 3.93097L6.56774 6.05903C6.34255 6.16196 6.16196 6.34255 6.05903 6.56774L3.93097 11.2239C3.68548 11.761 4.23871 12.3145 4.77613 12.069L9.43226 9.94097C9.65745 9.83804 9.83804 9.65745 9.94097 9.43226L12.069 4.77613C12.3145 4.23871 11.7613 3.68548 11.2239 3.93097ZM8.72839 8.72839C8.32613 9.13064 7.67387 9.13064 7.27161 8.72839C6.86935 8.32613 6.86935 7.67387 7.27161 7.27161C7.67387 6.86935 8.32613 6.86935 8.72839 7.27161C9.13064 7.67387 9.13064 8.32613 8.72839 8.72839ZM8 0C3.58161 0 0 3.58161 0 8C0 12.4184 3.58161 16 8 16C12.4184 16 16 12.4184 16 8C16 3.58161 12.4184 0 8 0ZM8 14.4516C4.44258 14.4516 1.54839 11.5574 1.54839 8C1.54839 4.44258 4.44258 1.54839 8 1.54839C11.5574 1.54839 14.4516 4.44258 14.4516 8C14.4516 11.5574 11.5574 14.4516 8 14.4516Z" class="fill-current"></path>
                        </svg>
                        <span data-v-6915f321="" class="flex-grow">Explore</span>
                     </a>
                  </li>
                  
                  <li data-v-6915f321="">
                     <a data-v-6915f321="" href="<?=Url::to(['site/packs'])?>" class="flex items-center space-x-2.5 whitespace-nowrap rounded-full px-4 py-2.5 hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                        <svg data-v-6915f321="" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                           <g clip-path="url(#clip0_3125_7118)">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.903991 1.40399C1.16266 1.14532 1.51349 1 1.87931 1H6.03379C6.27909 1 6.51175 1.10882 6.66899 1.29709L8.26399 3.2069H13.9069C15.339 3.2069 16.5 4.36787 16.5 5.8V11.8453C16.5 13.2774 15.339 14.4384 13.9069 14.4384H3.0931C1.66097 14.4384 0.5 13.2775 0.5 11.8453V2.37931C0.5 2.01349 0.64532 1.66266 0.903991 1.40399ZM2.15517 2.65517V11.8453C2.15517 12.3633 2.5751 12.7833 3.0931 12.7833H13.9069C14.4249 12.7833 14.8448 12.3633 14.8448 11.8453V5.8C14.8448 5.28199 14.4249 4.86207 13.9069 4.86207H8.12339C7.92309 4.86038 7.72555 4.81506 7.54452 4.72931C7.36383 4.64372 7.20391 4.51988 7.07584 4.36636M7.07511 4.36549L5.64672 2.65517H2.15517" class="fill-current"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_3125_7118">
                                 <rect width="16" height="16" transform="translate(0.5)" class="fill-current"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                        <span data-v-6915f321="" class="flex-grow">Packs</span>
                     </a>
                  </li>
                  <li data-v-6915f321="">
                     <a data-v-6915f321="" href="<?=Url::to(['site/selections'])?>" class="flex items-center space-x-2.5 whitespace-nowrap rounded-full px-4 py-2.5 hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                        <svg data-v-6915f321="" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                           <g clip-path="url(#clip0_3146_7790)">
                              <path d="M15.1667 2H13.8333V1.33333C13.8329 0.979836 13.6923 0.640933 13.4424 0.390972C13.1924 0.141012 12.8535 0.000405822 12.5 0H4.5C4.1465 0.000405822 3.8076 0.141012 3.55764 0.390972C3.30768 0.640933 3.16707 0.979836 3.16667 1.33333V2H1.83333C1.47984 2.00041 1.14093 2.14101 0.890972 2.39097C0.641012 2.64093 0.500406 2.97984 0.5 3.33333V5.33333C0.500794 6.04033 0.782001 6.71815 1.28193 7.21807C1.78185 7.718 2.45967 7.99921 3.16667 8H3.38133C3.65912 9.02049 4.22804 9.93801 5.01863 10.6405C5.80922 11.3431 6.78726 11.8002 7.83333 11.9561V14.6667H5.66667C5.29848 14.6667 5 14.9651 5 15.3333C5 15.7015 5.29848 16 5.66667 16H11.3333C11.7015 16 12 15.7015 12 15.3333C12 14.9651 11.7015 14.6667 11.3333 14.6667H9.16667V11.9541C10.2263 11.8231 11.2219 11.3757 12.0234 10.6703C12.825 9.96498 13.3953 9.03439 13.66 8H13.8333C14.5403 7.99921 15.2182 7.718 15.7181 7.21807C16.218 6.71815 16.4992 6.04033 16.5 5.33333V3.33333C16.4996 2.97984 16.359 2.64093 16.109 2.39097C15.8591 2.14101 15.5202 2.00041 15.1667 2ZM3.16667 6.66667C2.81317 6.66626 2.47427 6.52565 2.22431 6.27569C1.97435 6.02573 1.83374 5.68683 1.83333 5.33333V3.33333H3.16667V6.66667ZM12.5 6.66667C12.5 7.20236 12.3924 7.7326 12.1836 8.22592C11.9747 8.71923 11.669 9.16558 11.2844 9.53847C10.8997 9.91136 10.4442 10.2032 9.94462 10.3967C9.44508 10.5901 8.91177 10.6813 8.37633 10.6647C7.31468 10.5989 6.31929 10.1262 5.59729 9.34511C4.87528 8.56398 4.48226 7.53455 4.5 6.471V1.33333H12.5V6.66667ZM15.1667 5.33333C15.1663 5.68683 15.0257 6.02573 14.7757 6.27569C14.5257 6.52565 14.1868 6.66626 13.8333 6.66667V3.33333H15.1667V5.33333Z" class="fill-current"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_3146_7790">
                                 <rect width="16" height="16" fill="white" transform="translate(0.5)"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                        <span data-v-6915f321="" class="flex-grow">Selections</span>
                     </a>
                  </li>
                  <li data-v-6915f321="">
                     <a data-v-6915f321="" href="<?=Url::to(['site/creators'])?>" class="flex items-center space-x-2.5 whitespace-nowrap rounded-full px-4 py-2.5 hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                        <svg data-v-6915f321="" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                           <ellipse cx="7.64992" cy="4.18435" rx="3.9817" ry="3.54568" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></ellipse>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M1.334 12.6619C1.33293 12.4127 1.39553 12.1665 1.51706 11.9419C1.89845 11.2627 2.97397 10.9027 3.86642 10.7397C4.51005 10.6174 5.16257 10.5356 5.81912 10.4951C7.03468 10.4001 8.25726 10.4001 9.47282 10.4951C10.1293 10.5361 10.7818 10.6178 11.4255 10.7397C12.318 10.9027 13.3935 11.2287 13.7749 11.9419C14.0193 12.3997 14.0193 12.931 13.7749 13.3887C13.3935 14.102 12.318 14.428 11.4255 14.5842C10.7826 14.7116 10.1299 14.7956 9.47282 14.8355C8.48346 14.9102 7.48947 14.9239 6.49799 14.8763C6.26916 14.8763 6.04796 14.8763 5.81912 14.8355C5.16451 14.7961 4.51425 14.7121 3.87404 14.5842C2.97397 14.428 1.90608 14.102 1.51706 13.3887C1.39615 13.1616 1.33361 12.9133 1.334 12.6619Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span data-v-6915f321="" class="flex-grow">Creators</span>
                     </a>
                  </li>
                  <li data-v-6915f321="">
                     <a data-v-6915f321="" href="<?=Url::to(['site/gfx'])?>" class="flex items-center space-x-2.5 whitespace-nowrap rounded-full px-4 py-2.5 hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                        <svg data-v-6915f321="" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4">
                           <g clip-path="url(#clip0_3146_8038)">
                              <path d="M1.5 1C0.947715 1 0.5 1.44772 0.5 2V13.8039C0.5 14.3562 0.947715 14.8039 1.5 14.8039H15.5C16.0523 14.8039 16.5 14.3562 16.5 13.8039V2C16.5 1.44772 16.0523 1 15.5 1H1.5ZM5.50588 9.15686C5.3402 9.15686 5.20588 9.02255 5.20588 8.85686V2.2549H6.46078V8.85686C6.46078 9.02255 6.32647 9.15686 6.16078 9.15686H5.50588ZM6.71569 10.4118C7.26797 10.4118 7.71569 9.96405 7.71569 9.41176V2.2549H9.28431V9.41176C9.28431 9.96405 9.73203 10.4118 10.2843 10.4118H10.5392V13.549H6.46078V10.4118H6.71569ZM10.8392 9.15686C10.6735 9.15686 10.5392 9.02255 10.5392 8.85686V2.2549H11.7941V8.85686C11.7941 9.02255 11.6598 9.15686 11.4941 9.15686H10.8392ZM1.7549 2.7549C1.7549 2.47876 1.97876 2.2549 2.2549 2.2549H3.95098V9.41176C3.95098 9.96405 4.3987 10.4118 4.95098 10.4118H5.20588V13.549H2.2549C1.97876 13.549 1.7549 13.3252 1.7549 13.049V2.7549ZM15.2451 13.049C15.2451 13.3252 15.0212 13.549 14.7451 13.549H11.7941V10.4118H12.049C12.6013 10.4118 13.049 9.96405 13.049 9.41176V2.2549H14.7451C15.0212 2.2549 15.2451 2.47876 15.2451 2.7549V13.049Z" class="fill-current"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_3146_8038">
                                 <rect width="16" height="16" fill="white" transform="translate(0.5)"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                        <span data-v-6915f321="" class="flex-grow">GFX</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div data-v-6915f321="" class="mt-3 mb-2.5 border-t border-black/[0.16] dark:border-white/[0.16]"></div>
            <div data-v-6915f321="">
               <ul data-v-6915f321="" class="dark:text-white">
                  <li data-v-6915f321="">
                     <a data-v-6915f321="" href="<?=Url::to(['user/account'])?>" class="flex items-center space-x-3 rounded-[10px] py-2.5 nuxt-link-exact-active nuxt-link-active hover:bg-black/[0.08] dark:hover:bg-white/[0.16]" aria-current="page">
                        <div data-v-6915f321=""><img data-v-6915f321="" alt="" class="h-10 w-10 rounded-full" src="<?=Yii::$app->request->baseUrl?>/modx/<?=($user->attribut->photo!='')?$user->attribut->photo:'images/user_photo/user_icon.png'?>"></div>
                        <div data-v-6915f321="" class="flex flex-1 items-start">
                           <div data-v-6915f321="" class="w-full max-w-[128px]">
                              <h6 data-v-6915f321="" class="truncate"><?=$user->attribut->fullname?></h6>

                           </div>
                        </div>
                     </a>
                  </li>
                  <li data-v-6915f321=""><a data-v-6915f321="" href="<?=Url::to(['user/media'])?>" class="flex items-center space-x-2.5 whitespace-nowrap rounded-full px-4 py-2.5 hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                     My media
                     </a>
                  </li>

                  <li data-v-6915f321=""><a data-v-6915f321="" href="<?=Url::to(['user/account'])?>" class="flex items-center space-x-2.5 whitespace-nowrap rounded-full px-4 py-2.5 nuxt-link-exact-active nuxt-link-active hover:bg-black/[0.08] dark:hover:bg-white/[0.16]" aria-current="page">
                     Account
                     </a>
                  </li>
               </ul>
               <div data-v-6915f321="" class="my-3 border-t border-black/[0.16] dark:border-white/[0.16]"></div>
               <ul data-v-6915f321="" class="dark:text-white">
                  <li data-v-6915f321="">
                    <a href="<?=Url::to(['user/downloads'])?>" class="block w-full whitespace-nowrap rounded-full px-4 py-2.5 text-left hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                     Downloads
                   </a>
                  </li>
                  <li data-v-6915f321="">
                    <a href="<?=Url::to(['user/transactions'])?>" class="block w-full whitespace-nowrap rounded-full px-4 py-2.5 text-left hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                     Transactions
                   </a>
                  </li>
                  <li data-v-6915f321="">
                    <a href="<?=Url::to(['user/likes'])?>" class="block w-full whitespace-nowrap rounded-full px-4 py-2.5 text-left hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                     Likes
                   </a>
                  </li>
                  <li data-v-6915f321="">
                    <a href="<?=Url::to(['user/following'])?>" class="block w-full whitespace-nowrap rounded-full px-4 py-2.5 text-left hover:bg-black/[0.08] dark:hover:bg-white/[0.16]">
                     Following
                   </a>
                  </li>
               </ul>
            </div>
         </section>
      </div>
   </div>
   <div class="w-full">
      <div data-v-15fa41d2="" class="-mt-7 md:mt-0">
         <div data-v-15fa41d2="" class="md:float-left md:w-[228px]">
            <div data-v-15fa41d2="" class="sm:rounded-2xl sm:bg-white sm:p-5 sm:shadow-[0_0_20px_rgba(0,0,0,0.12)] sm:dark:bg-black dark:sm:shadow-[0_0_20px_rgba(0,0,0,0.48)]">
               <div data-v-15fa41d2="" class="hidden sm:block">
                  <div data-v-15fa41d2="" class="relative flex justify-center">
                     <div data-v-15fa41d2="" class="group relative h-[102px] w-[102px] shrink-0 overflow-hidden rounded-full border border-black/[0.08] dark:border-white/[0.08]"><img data-v-15fa41d2="" class="h-full w-full object-cover" src="<?=Yii::$app->request->baseUrl?>/modx/<?=($user->attribut->photo!='')?$user->attribut->photo:'images/user_photo/user_icon.png'?>"></div>
                     <!---->
                  </div>
                  <div data-v-15fa41d2="" class="mt-3 w-full text-center">
                     <h1 data-v-15fa41d2="" class="truncate text-[17px] font-medium"><?=$user->attribut->fullname?></h1>
                  </div>
               </div>
               <h2 data-v-15fa41d2="" class="block text-2xl font-medium sm:hidden">My account</h2>
               <!---->
            </div>
            <div data-v-15fa41d2="" class="account-sidebar mt-8 hidden md:block">
               <ul data-v-15fa41d2="">
                  <!----> <!---->
                  <li data-v-15fa41d2="">
                     <a data-v-15fa41d2="" href="<?=Url::to(['user/account'])?>" class="nuxt-link-active">
                        <svg data-v-15fa41d2="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M7.04413 2.60614C7.88098 1.76928 9.03916 1.25 10.3175 1.25C11.5958 1.25 12.754 1.76928 13.5909 2.60614C14.427 3.4423 14.9462 4.6005 14.9462 5.87873C14.9462 7.15696 14.427 8.31516 13.5909 9.15132C12.754 9.98818 11.5958 10.5075 10.3175 10.5075C9.03916 10.5075 7.88098 9.98818 7.04413 9.15132C6.20797 8.31516 5.68877 7.15696 5.68877 5.87873C5.68877 4.6005 6.20797 3.4423 7.04413 2.60614Z" fill="currentColor"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 16.0606C3.75 13.5038 6.50544 11.4319 10.3181 11.4319C12.2194 11.4319 13.8326 11.9532 14.9905 12.7848C16.1405 13.6108 16.8862 14.7852 16.8862 16.0606C16.8862 16.6294 16.5373 17.0636 16.1806 17.3542C15.811 17.6553 15.3164 17.903 14.7565 18.101C13.6294 18.4997 12.0867 18.75 10.3181 18.75C8.4424 18.75 6.8953 18.501 5.78912 18.0988C5.23886 17.8987 4.76047 17.6473 4.40559 17.3387C4.05504 17.0339 3.75 16.6026 3.75 16.0606ZM15.3913 16.0207L15.3908 16.022L15.3913 16.0207Z" fill="currentColor"></path>
                        </svg>
                        <div data-v-15fa41d2="">
                           <div data-v-15fa41d2="">Account settings</div>
                           <p data-v-15fa41d2="" class="sub-title">Change your avatar, user name, credentials, etc.</p>
                        </div>
                     </a>
                  </li>
                  <!---->
                  <li data-v-15fa41d2="">
                     <a data-v-15fa41d2="" href="<?=Url::to(['user/dashboard'])?>" class="">
                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0" data-v-f9b21242="">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M3.18117 1.66602C2.34437 1.66602 1.66602 2.34437 1.66602 3.18117V5.77586C1.66602 6.61266 2.34437 7.29102 3.18117 7.29102H7.44253C8.27933 7.29102 8.95768 6.61266 8.95768 5.77586V3.18117C8.95768 2.34437 8.27933 1.66602 7.44253 1.66602H3.18117Z" fill="currentColor"></path>
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M3.18117 9.37435C2.34437 9.37435 1.66602 10.0527 1.66602 10.8895V16.8175C1.66602 17.6543 2.34437 18.3327 3.18117 18.3327H7.44253C8.27933 18.3327 8.95768 17.6543 8.95768 16.8175V10.8895C8.95768 10.0527 8.27933 9.37435 7.44253 9.37435H3.18117Z" fill="currentColor"></path>
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5562 1.66602C11.7194 1.66602 11.041 2.34437 11.041 3.18117V9.1092C11.041 9.94599 11.7194 10.6243 12.5562 10.6243H16.8175C17.6543 10.6243 18.3327 9.94599 18.3327 9.1092V3.18117C18.3327 2.34437 17.6543 1.66602 16.8175 1.66602H12.5562Z" fill="currentColor"></path>
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5562 12.7077C11.7194 12.7077 11.041 13.386 11.041 14.2228V16.8175C11.041 17.6543 11.7194 18.3327 12.5562 18.3327H16.8175C17.6543 18.3327 18.3327 17.6543 18.3327 16.8175V14.2228C18.3327 13.386 17.6543 12.7077 16.8175 12.7077H12.5562Z" fill="currentColor"></path>
                       </svg>
                        <div data-v-15fa41d2="">
                           <div data-v-15fa41d2="">Dashboard</div>
                          <p data-v-15fa41d2="" class="sub-title">Creator overview</p>
                        </div>
                     </a>
                  </li>
                  <li data-v-15fa41d2="">
                     <a data-v-15fa41d2="" href="<?=Url::to(['user/downloads'])?>" class="">
                        <svg data-v-15fa41d2="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0">
                           <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                           <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                        </svg>
                        <div data-v-15fa41d2="">
                           <div data-v-15fa41d2="">Downloads</div>
                        </div>
                     </a>
                  </li>
                  <li data-v-15fa41d2="">
                     <a data-v-15fa41d2="" href="<?=Url::to(['user/transactions'])?>" class="">
                        <svg data-v-15fa41d2="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0">
                           <g clip-path="url(#clip0_4068_92475)">
                              <path d="M8.83478 6.71285V8.57273C7.39388 8.55006 7.36587 6.9709 8.83478 6.71285Z" fill="currentColor"></path>
                              <path d="M10.8916 11.1111C12.6746 11.1564 12.8721 12.9358 10.8887 13.2203L10.8916 11.1111Z" fill="currentColor"></path>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.0001C0 4.47714 4.47717 0 9.99993 0C15.5229 0 20 4.47713 20 10.0001C20 15.5228 15.5229 20 9.99993 20C4.47718 20 0 15.5228 0 10.0001ZM8.82345 4.61783V3.14465H10.8462V4.61783C12.2097 4.69715 14.1892 5.84169 14.1892 8.01745H12.0602C12.0061 7.37152 11.5071 6.73693 10.8675 6.6916V8.93535C12.4929 9.10271 14.4017 9.72527 14.4017 11.9185C14.4017 13.8335 12.4855 15.2307 10.8675 15.3167V16.7927H8.82345V15.2941C7.65253 15.122 5.51299 13.9891 5.37991 11.5531H7.53017C7.66616 12.1759 7.84413 12.9294 8.82345 13.209L8.82203 10.7612C7.48081 10.5677 5.54564 9.97808 5.54564 7.81206C5.54564 5.37725 8.22733 4.61783 8.82345 4.61783ZM8.83478 6.71285V8.57273C7.39388 8.55006 7.36587 6.9709 8.83478 6.71285ZM10.8916 11.1111C12.6746 11.1564 12.8721 12.9358 10.8887 13.2203L10.8916 11.1111Z" fill="currentColor"></path>
                           </g>
                           <defs>
                              <clipPath id="clip0_4068_92475">
                                 <rect width="20" height="20" fill="currentColor"></rect>
                              </clipPath>
                           </defs>
                        </svg>
                        <div data-v-15fa41d2="">
                           <div data-v-15fa41d2="">Transactions</div>
                        </div>
                     </a>
                  </li>
                  <li data-v-15fa41d2="">
                     <a data-v-15fa41d2="" href="<?=Url::to(['user/likes'])?>" class="">
                        <svg data-v-15fa41d2="" width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0 fill-black">
                           <path d="M21.6612 1.449C20.569 0.467434 19.1675 -0.0397535 17.7518 0.002434C15.9945 0.002434 14.2208 0.724309 12.9237 2.064L12.0003 3.01415L11.0768 2.064C9.7784 0.724309 8.00653 0.002434 6.24871 0.002434C4.83309 0.002434 3.43293 0.467902 2.29902 1.449C-0.61379 3.9704 -0.759571 8.46618 1.86637 11.1802L10.9226 19.5412C11.2222 19.8477 11.6065 20.0024 11.9956 20.0024C12.3862 20.0024 12.7779 19.8493 13.0742 19.5429L22.1258 11.1819C24.7597 8.46337 24.6143 3.96806 21.6612 1.449Z" class="fill-current"></path>
                        </svg>
                        <div data-v-15fa41d2="">
                           <div data-v-15fa41d2="">Likes</div>
                        </div>
                     </a>
                  </li>
                  <li data-v-15fa41d2="">
                     <a data-v-15fa41d2="" href="<?=Url::to(['user/following'])?>" class="nuxt-link-exact-active nuxt-link-active" aria-current="page">
                        <svg data-v-15fa41d2="" width="20" height="18" viewBox="0 0 20 18" fill="true" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0 fill-black">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7059 1.35614C15.869 0.519282 14.7108 0 13.4325 0C12.1542 0 10.996 0.519282 10.1591 1.35614C9.32297 2.1923 8.80377 3.3505 8.80377 4.62873C8.80377 5.90696 9.32297 7.06516 10.1591 7.90132C10.996 8.73818 12.1542 9.25746 13.4325 9.25746C14.7108 9.25746 15.869 8.73818 16.7059 7.90132C17.542 7.06516 18.0612 5.90696 18.0612 4.62873C18.0612 3.3505 17.542 2.1923 16.7059 1.35614Z" fill="currentColor"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M20 14.8106C20 12.2538 17.2446 10.1819 13.4319 10.1819C11.5306 10.1819 9.91741 10.7032 8.75953 11.5348C7.60951 12.3608 6.8638 13.5352 6.8638 14.8106C6.8638 15.3794 7.21275 15.8136 7.56941 16.1042C7.93904 16.4053 8.43356 16.653 8.9935 16.851C10.1206 17.2497 11.6633 17.5 13.4319 17.5C15.3076 17.5 16.8547 17.251 17.9609 16.8488C18.5111 16.6487 18.9895 16.3973 19.3444 16.0887C19.695 15.7839 20 15.3526 20 14.8106ZM8.35875 14.7707L8.35922 14.772L8.35875 14.7707Z" fill="currentColor"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99386 0.85243C5.48421 0.326406 4.77888 0 4.00037 0C3.22186 0 2.51652 0.326406 2.00687 0.85243C1.49765 1.37802 1.18145 2.10603 1.18145 2.90949C1.18145 3.71295 1.49765 4.44096 2.00687 4.96655C2.51652 5.49257 3.22186 5.81898 4.00037 5.81898C4.77888 5.81898 5.48421 5.49257 5.99386 4.96655C6.50309 4.44096 6.81928 3.71295 6.81928 2.90949C6.81928 2.10603 6.50309 1.37802 5.99386 0.85243Z" fill="currentColor"></path>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.30954C8 7.70239 6.32193 6.40006 4 6.40006C2.84209 6.40006 1.85966 6.72775 1.15451 7.25048C0.454144 7.76965 0 8.50784 0 9.30954C0 9.66706 0.212513 9.93997 0.429722 10.1226C0.65483 10.3119 0.955995 10.4676 1.297 10.5921C1.98338 10.8426 2.92294 11 4 11C5.14231 11 6.0845 10.8435 6.75817 10.5907C7.09328 10.4649 7.38462 10.3069 7.60075 10.1129C7.81423 9.92129 8 9.65019 8 9.30954ZM0.91043 9.28445L0.91072 9.28526L0.91043 9.28445Z" fill="currentColor"></path>
                        </svg>
                        <div data-v-15fa41d2="">
                           <div data-v-15fa41d2="">Following</div>
                        </div>
                     </a>
                  </li>
                  <!---->
                  <?php if(($user->primary_group==2)||($user->primary_group==3)):?>
                  <div style="height:20px;" class="bg-[#fbfbfb] dark:bg-[#111111]"></div>
                  <li data-v-15fa41d2="">
                     <a href="<?=Url::to(['user/media'])?>" class="" aria-current="page" data-v-15fa41d2="">

                        <i class="fa-sharp fa-solid fa-music" style="margin-right:30px"></i>

                        <div data-v-15fa41d2="">
                           <div data-v-15fa41d2="">My media</div>
                           <p class="sub-title" data-v-15fa41d2="">Upload your files for sale</p>
                        </div>
                     </a>
                  </li>
                <?php endif; ?>
               </ul>
            </div>
            <div data-v-15fa41d2="" class="relative z-[34] mt-4 mb-10 block border-t border-black/[0.16] pt-8 dark:border-white/[0.16] md:hidden">
               <!---->
               <div data-v-15fa41d2="" class="account-sidebar-mobile relative">
                  <div data-v-15fa41d2="" class="account-sidebar !top-full !mt-3 hidden !w-full !transform-none">
                     <ul data-v-15fa41d2="">
                        <!----> <!---->
                        <li data-v-15fa41d2="">
                           <a data-v-15fa41d2="" href="<?=Url::to(['user/account'])?>" class="nuxt-link-active">
                              <svg data-v-15fa41d2="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.04413 2.60614C7.88098 1.76928 9.03916 1.25 10.3175 1.25C11.5958 1.25 12.754 1.76928 13.5909 2.60614C14.427 3.4423 14.9462 4.6005 14.9462 5.87873C14.9462 7.15696 14.427 8.31516 13.5909 9.15132C12.754 9.98818 11.5958 10.5075 10.3175 10.5075C9.03916 10.5075 7.88098 9.98818 7.04413 9.15132C6.20797 8.31516 5.68877 7.15696 5.68877 5.87873C5.68877 4.6005 6.20797 3.4423 7.04413 2.60614Z" fill="currentColor"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 16.0606C3.75 13.5038 6.50544 11.4319 10.3181 11.4319C12.2194 11.4319 13.8326 11.9532 14.9905 12.7848C16.1405 13.6108 16.8862 14.7852 16.8862 16.0606C16.8862 16.6294 16.5373 17.0636 16.1806 17.3542C15.811 17.6553 15.3164 17.903 14.7565 18.101C13.6294 18.4997 12.0867 18.75 10.3181 18.75C8.4424 18.75 6.8953 18.501 5.78912 18.0988C5.23886 17.8987 4.76047 17.6473 4.40559 17.3387C4.05504 17.0339 3.75 16.6026 3.75 16.0606ZM15.3913 16.0207L15.3908 16.022L15.3913 16.0207Z" fill="currentColor"></path>
                              </svg>
                              <div data-v-15fa41d2="">
                                 <div data-v-15fa41d2="">Account settings</div>
                                 <p data-v-15fa41d2="" class="sub-title">Change your avatar, user name, credentials, etc.</p>
                              </div>
                           </a>
                        </li>
                        <!---->
                        <li data-v-15fa41d2="">
                           <a data-v-15fa41d2="" href="<?=Url::to(['user/downloads'])?>" class="">
                              <svg data-v-15fa41d2="" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0">
                                 <path d="M11.8857 6.83557L8.45723 10.4355C8.22866 10.7212 7.77153 10.7212 7.54297 10.4355L4.11449 6.89271C3.82878 6.54986 4.11449 6.09273 4.57162 6.09273H6.85727C6.85727 6.09273 6.74299 3.40709 6.85727 2.09284C6.91441 1.46428 7.37154 0.950012 8.0001 0.950012C8.62865 0.950012 9.08578 1.46428 9.14292 2.09284C9.25721 3.46423 9.14292 6.09273 9.14292 6.09273H11.4286C11.8857 6.09273 12.1714 6.54986 11.8857 6.83557Z" class="fill-current"></path>
                                 <path d="M2.9 13.25C2.40294 13.25 2 13.653 2 14.15C2 14.6471 2.40294 15.05 2.9 15.05H13.1C13.5971 15.05 14 14.6471 14 14.15C14 13.653 13.5971 13.25 13.1 13.25H2.9Z" class="fill-current"></path>
                              </svg>
                              <div data-v-15fa41d2="">
                                 <div data-v-15fa41d2="">Downloads</div>
                              </div>
                           </a>
                        </li>
                        <li data-v-15fa41d2="">
                           <a data-v-15fa41d2="" href="<?=Url::to(['user/transactions'])?>" class="">
                              <svg data-v-15fa41d2="" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0">
                                 <g clip-path="url(#clip0_4068_92475)">
                                    <path d="M8.83478 6.71285V8.57273C7.39388 8.55006 7.36587 6.9709 8.83478 6.71285Z" fill="currentColor"></path>
                                    <path d="M10.8916 11.1111C12.6746 11.1564 12.8721 12.9358 10.8887 13.2203L10.8916 11.1111Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.0001C0 4.47714 4.47717 0 9.99993 0C15.5229 0 20 4.47713 20 10.0001C20 15.5228 15.5229 20 9.99993 20C4.47718 20 0 15.5228 0 10.0001ZM8.82345 4.61783V3.14465H10.8462V4.61783C12.2097 4.69715 14.1892 5.84169 14.1892 8.01745H12.0602C12.0061 7.37152 11.5071 6.73693 10.8675 6.6916V8.93535C12.4929 9.10271 14.4017 9.72527 14.4017 11.9185C14.4017 13.8335 12.4855 15.2307 10.8675 15.3167V16.7927H8.82345V15.2941C7.65253 15.122 5.51299 13.9891 5.37991 11.5531H7.53017C7.66616 12.1759 7.84413 12.9294 8.82345 13.209L8.82203 10.7612C7.48081 10.5677 5.54564 9.97808 5.54564 7.81206C5.54564 5.37725 8.22733 4.61783 8.82345 4.61783ZM8.83478 6.71285V8.57273C7.39388 8.55006 7.36587 6.9709 8.83478 6.71285ZM10.8916 11.1111C12.6746 11.1564 12.8721 12.9358 10.8887 13.2203L10.8916 11.1111Z" fill="currentColor"></path>
                                 </g>
                                 <defs>
                                    <clipPath id="clip0_4068_92475">
                                       <rect width="20" height="20" fill="currentColor"></rect>
                                    </clipPath>
                                 </defs>
                              </svg>
                              <div data-v-15fa41d2="">
                                 <div data-v-15fa41d2="">Transactions</div>
                              </div>
                           </a>
                        </li>
                        <li data-v-15fa41d2="">
                           <a data-v-15fa41d2="" href="<?=Url::to(['user/likes'])?>" class="">
                              <svg data-v-15fa41d2="" width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0 fill-black">
                                 <path d="M21.6612 1.449C20.569 0.467434 19.1675 -0.0397535 17.7518 0.002434C15.9945 0.002434 14.2208 0.724309 12.9237 2.064L12.0003 3.01415L11.0768 2.064C9.7784 0.724309 8.00653 0.002434 6.24871 0.002434C4.83309 0.002434 3.43293 0.467902 2.29902 1.449C-0.61379 3.9704 -0.759571 8.46618 1.86637 11.1802L10.9226 19.5412C11.2222 19.8477 11.6065 20.0024 11.9956 20.0024C12.3862 20.0024 12.7779 19.8493 13.0742 19.5429L22.1258 11.1819C24.7597 8.46337 24.6143 3.96806 21.6612 1.449Z" class="fill-current"></path>
                              </svg>
                              <div data-v-15fa41d2="">
                                 <div data-v-15fa41d2="">Likes</div>
                              </div>
                           </a>
                        </li>
                        <li data-v-15fa41d2="">
                           <a data-v-15fa41d2="" href="<?=Url::to(['user/following'])?>" class="nuxt-link-exact-active nuxt-link-active" aria-current="page">
                              <svg data-v-15fa41d2="" width="20" height="18" viewBox="0 0 20 18" fill="true" xmlns="http://www.w3.org/2000/svg" class="mr-6 h-5 w-5 shrink-0 fill-black">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7059 1.35614C15.869 0.519282 14.7108 0 13.4325 0C12.1542 0 10.996 0.519282 10.1591 1.35614C9.32297 2.1923 8.80377 3.3505 8.80377 4.62873C8.80377 5.90696 9.32297 7.06516 10.1591 7.90132C10.996 8.73818 12.1542 9.25746 13.4325 9.25746C14.7108 9.25746 15.869 8.73818 16.7059 7.90132C17.542 7.06516 18.0612 5.90696 18.0612 4.62873C18.0612 3.3505 17.542 2.1923 16.7059 1.35614Z" fill="currentColor"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M20 14.8106C20 12.2538 17.2446 10.1819 13.4319 10.1819C11.5306 10.1819 9.91741 10.7032 8.75953 11.5348C7.60951 12.3608 6.8638 13.5352 6.8638 14.8106C6.8638 15.3794 7.21275 15.8136 7.56941 16.1042C7.93904 16.4053 8.43356 16.653 8.9935 16.851C10.1206 17.2497 11.6633 17.5 13.4319 17.5C15.3076 17.5 16.8547 17.251 17.9609 16.8488C18.5111 16.6487 18.9895 16.3973 19.3444 16.0887C19.695 15.7839 20 15.3526 20 14.8106ZM8.35875 14.7707L8.35922 14.772L8.35875 14.7707Z" fill="currentColor"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99386 0.85243C5.48421 0.326406 4.77888 0 4.00037 0C3.22186 0 2.51652 0.326406 2.00687 0.85243C1.49765 1.37802 1.18145 2.10603 1.18145 2.90949C1.18145 3.71295 1.49765 4.44096 2.00687 4.96655C2.51652 5.49257 3.22186 5.81898 4.00037 5.81898C4.77888 5.81898 5.48421 5.49257 5.99386 4.96655C6.50309 4.44096 6.81928 3.71295 6.81928 2.90949C6.81928 2.10603 6.50309 1.37802 5.99386 0.85243Z" fill="currentColor"></path>
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.30954C8 7.70239 6.32193 6.40006 4 6.40006C2.84209 6.40006 1.85966 6.72775 1.15451 7.25048C0.454144 7.76965 0 8.50784 0 9.30954C0 9.66706 0.212513 9.93997 0.429722 10.1226C0.65483 10.3119 0.955995 10.4676 1.297 10.5921C1.98338 10.8426 2.92294 11 4 11C5.14231 11 6.0845 10.8435 6.75817 10.5907C7.09328 10.4649 7.38462 10.3069 7.60075 10.1129C7.81423 9.92129 8 9.65019 8 9.30954ZM0.91043 9.28445L0.91072 9.28526L0.91043 9.28445Z" fill="currentColor"></path>
                              </svg>
                              <div data-v-15fa41d2="">
                                 <div data-v-15fa41d2="">Following</div>
                              </div>
                           </a>
                        </li>
                        <!---->
                        <?php if(($user->primary_group==2)||($user->primary_group==3)):?>
                        <div style="height:20px;" class="bg-[#fbfbfb] dark:bg-[#111111]"></div>
                        <li data-v-15fa41d2="">
                           <a href="<?=Url::to(['user/media'])?>" class="" aria-current="page" data-v-15fa41d2="">

                              <i class="fa-sharp fa-solid fa-music" style="margin-right:30px"></i>

                              <div data-v-15fa41d2="">
                                 <div data-v-15fa41d2="">My media</div>
                                 <p class="sub-title" data-v-15fa41d2="">Upload your files for sale</p>
                              </div>
                           </a>
                        </li>
                      <?php endif; ?>
                     </ul>
                  </div>
                  <button data-v-15fa41d2="" type="button" class="flex w-full items-center rounded-lg border-2 border-[#704DFD] bg-white px-4 py-2 text-left text-sm dark:bg-black">
                     <svg data-v-15fa41d2="" width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" class="mr-5 h-5 w-5 shrink-0">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7059 1.35614C15.869 0.519282 14.7108 0 13.4325 0C12.1542 0 10.996 0.519282 10.1591 1.35614C9.32297 2.1923 8.80377 3.3505 8.80377 4.62873C8.80377 5.90696 9.32297 7.06516 10.1591 7.90132C10.996 8.73818 12.1542 9.25746 13.4325 9.25746C14.7108 9.25746 15.869 8.73818 16.7059 7.90132C17.542 7.06516 18.0612 5.90696 18.0612 4.62873C18.0612 3.3505 17.542 2.1923 16.7059 1.35614Z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 14.8106C20 12.2538 17.2446 10.1819 13.4319 10.1819C11.5306 10.1819 9.91741 10.7032 8.75953 11.5348C7.60951 12.3608 6.8638 13.5352 6.8638 14.8106C6.8638 15.3794 7.21275 15.8136 7.56941 16.1042C7.93904 16.4053 8.43356 16.653 8.9935 16.851C10.1206 17.2497 11.6633 17.5 13.4319 17.5C15.3076 17.5 16.8547 17.251 17.9609 16.8488C18.5111 16.6487 18.9895 16.3973 19.3444 16.0887C19.695 15.7839 20 15.3526 20 14.8106ZM8.35875 14.7707L8.35922 14.772L8.35875 14.7707Z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99386 0.85243C5.48421 0.326406 4.77888 0 4.00037 0C3.22186 0 2.51652 0.326406 2.00687 0.85243C1.49765 1.37802 1.18145 2.10603 1.18145 2.90949C1.18145 3.71295 1.49765 4.44096 2.00687 4.96655C2.51652 5.49257 3.22186 5.81898 4.00037 5.81898C4.77888 5.81898 5.48421 5.49257 5.99386 4.96655C6.50309 4.44096 6.81928 3.71295 6.81928 2.90949C6.81928 2.10603 6.50309 1.37802 5.99386 0.85243Z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 9.30954C8 7.70239 6.32193 6.40006 4 6.40006C2.84209 6.40006 1.85966 6.72775 1.15451 7.25048C0.454144 7.76965 0 8.50784 0 9.30954C0 9.66706 0.212513 9.93997 0.429722 10.1226C0.65483 10.3119 0.955995 10.4676 1.297 10.5921C1.98338 10.8426 2.92294 11 4 11C5.14231 11 6.0845 10.8435 6.75817 10.5907C7.09328 10.4649 7.38462 10.3069 7.60075 10.1129C7.81423 9.92129 8 9.65019 8 9.30954ZM0.91043 9.28445L0.91072 9.28526L0.91043 9.28445Z" fill="currentColor"></path>
                     </svg>
                     <div data-v-15fa41d2="" class="truncate">
                        <div data-v-15fa41d2="">Following</div>
                        <!---->
                     </div>
                     <span data-v-15fa41d2="" class="ml-auto">
                        <svg data-v-15fa41d2="" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform duration-300">
                           <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </span>
                  </button>
               </div>
            </div>
         </div>
         <div data-v-15fa41d2="" class="w-full md:pl-64 lg:pl-80">
            <div data-v-15fa41d2="">
               <div class="flex items-center text-[13px]">
                  <a href="<?=Url::to(['user/account'])?>" class="mr-2 hover:underline nuxt-link-active">
                  My account
                  </a>
                  <span class="inline-flex items-center text-5c5c5c dark:text-[#b7b7b7]">
                     <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2 h-3 w-3 rotate-180">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8443 18.3839C13.3562 18.872 12.5647 18.872 12.0766 18.3839L3.28946 9.59677L11.2701 1.61612C11.7583 1.12796 12.5497 1.12796 13.0379 1.61612C13.526 2.10427 13.526 2.89573 13.0379 3.38388L6.82499 9.59677L13.8443 16.6161C14.3325 17.1043 14.3325 17.8957 13.8443 18.3839Z" class="fill-current"></path>
                     </svg>
                     Following
                  </span>
               </div>
               <div class="mt-8 text-right">
                  <span>
                     <span class="" style="display: none;">
                        <div class="popper filter-dropdown p-2 text-sm">
                           <ul>
                              <li><a href="<?=Url::to(['user/following'])?>" aria-current="page" class="flex rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f] nuxt-link-exact-active nuxt-link-active"> Creators </a></li>
                              <li><a href="<?=Url::to(['user/following'])?>" class="flex rounded-lg py-2.5 px-3.5 hover:bg-black/[0.06] dark:hover:bg-[#4f4f4f]"> Selections </a></li>
                           </ul>
                        </div>
                     </span>
                     <!--<button type="button" class="inline-flex w-auto items-center rounded-full border-2 border-black/[0.16] bg-white px-3 py-1 text-left text-sm dark:border-white/[0.16] dark:bg-black">
                        <div class="mr-2">Creators</div>
                        <span class="ml-auto">
                           <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300">
                              <path d="M9.5 4.25L6 7.75L2.5 4.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                        </span>
                     </button>-->
                  </span>
               </div>
               <div class="mt-14 grid grid-cols-2 gap-x-5 gap-y-10 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 lg:gap-y-14 lg:gap-x-[30px] 2xl:grid-cols-6">
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
               <!---->
            </div>
         </div>
         <div data-v-15fa41d2="" class="clear-both"></div>
         <div data-v-15fa41d2="" class="fixed inset-0 z-60 h-full w-full overflow-x-hidden bg-black bg-opacity-80 dark:bg-[#2c2c2c] dark:bg-opacity-70 hidden overflow-y-auto">
            <div class="animated modal-popup-container absolute inset-0 h-full w-full text-center px-3">
               <div class="inline-block w-full text-left align-middle">
                  <div class="relative mx-auto max-w-full rounded-2xl bg-white px-7 pt-7 pb-9 text-black shadow-lg dark:bg-121212 dark:text-white my-8" style="width: 376px;">
                     <button class="text-primary absolute top-2.5 right-2.5 z-10 flex h-10 w-10 items-center justify-center opacity-100 hover:opacity-70">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-5">
                           <g>
                              <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="7" x2="25" y1="7" y2="25" class="cls-1"></line>
                              <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2px" x1="7" x2="25" y1="25" y2="7" class="cls-1"></line>
                           </g>
                        </svg>
                     </button>
                     <form data-v-15fa41d2="" class="grid grid-cols-1 gap-4 sm:px-5">
                        <h3 data-v-15fa41d2="" class="mb-5 text-center text-2xl font-medium">Insufficient balance</h3>
                        <p data-v-15fa41d2="" class="text-center text-base text-5c5c5c dark:text-b7b7b7">Once your balance is greater than $10, you can request a payout via Paypal.</p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

</div>
