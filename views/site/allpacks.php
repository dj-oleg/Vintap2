<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - packs';
//echo2($packs);
if ($s=='new') $s='New Releases';
if ($s=='popular') $s='Most Popular';
?>
<div class="w-full">
   <div>
      <h1 class="text-5xl font-medium"><?=($s!=null)?$s:$g?></h1>
      <!--<p class="mt-2 opacity-50">Discover sample packs filled with soulful r&amp;b loops, keys and drums uploaded by our community.</p>-->
      <div class="mt-10 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6">
        <?php if(isset($packs)):?>
        <?php foreach($packs as $pack):?>
         <div class="group">
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
        <?php endforeach;?>
        <?php endif;?>
      </div>

   </div>
</div>
</div></div>
