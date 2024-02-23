<?php
/** @var yii\web\View $this */
use yii\helpers\Url;
$this->title = 'Vintapes - Moderate';
//echo2($user->primary_group);

?>
<?php if(isset($users[0])):?>  
<form  method="post" action="<?=Url::to(['user/moderate'])?>">
<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
<table class="seller-dashboard-table">
<thead>
<tr>
    <th>Users</th>
    <th>Allow media uploads</th>
</tr>
</thead>
<tbody class="tbody-dashboard">
 
<?php foreach($users as $user):?>
    <tr>
    <td><?=$user->username?></td>
    <td>
        <div class="flex items-center">
            <div value="" class="shrink-0 font-medium text-[#101010] dark:text-white">
                <div class="toggle-new flex w-full items-center">
                    <label class="flex cursor-pointer items-center">
                        <div class="relative">
                            <input type="checkbox" class="sr-only" name="<?=$user->id?>">
                                <div class="line block h-7 w-12 rounded-full border-2 border-[#0A0A0A] bg-white transition duration-500"></div>
                                <div class="dot absolute left-[5px] top-[5px] h-[18px] w-4.5 rounded-full bg-[#515258] transition duration-500"></div>
                        </div>
                    </label>
                    <div class="ml-3">Allow media uploads</div>
                </div>
            </div>
        </div>                                                     
    </td>
</tr>
</tbody>
<?php endforeach; ?>

</table>
<br>
<center>
<button data-v-15abc323="" class="btn" type="submit">
                       <span class="spin w-4"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="animate-spin"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25"></circle> <path fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" class="opacity-75"></path></svg></span>
                       <span class="">Save</span>
                     </button>
</center>
<form>
<?php else:?>
    <p>No requests for moderation</p>    
<?php endif ?>    
</div>   </div>   
<style>
  .flatpickr-input {
      display: none
  }

  .flatpickr-day {
      border-radius: .25rem
  }

  .flatpickr-day.endRange.startRange,.flatpickr-day.selected.startRange,.flatpickr-day.startRange.startRange {
      border-top-left-radius: .25rem;
      border-bottom-left-radius: .25rem
  }

  .flatpickr-day.endRange.endRange,.flatpickr-day.selected.endRange,.flatpickr-day.startRange.endRange {
      border-top-right-radius: .25rem;
      border-bottom-right-radius: .25rem
  }

  .flatpickr-day.endRange,.flatpickr-day.endRange.inRange,.flatpickr-day.endRange.nextMonthDay,.flatpickr-day.endRange.prevMonthDay,.flatpickr-day.endRange:focus,.flatpickr-day.endRange:hover,.flatpickr-day.selected,.flatpickr-day.selected.inRange,.flatpickr-day.selected.nextMonthDay,.flatpickr-day.selected.prevMonthDay,.flatpickr-day.selected:focus,.flatpickr-day.selected:hover,.flatpickr-day.startRange,.flatpickr-day.startRange.inRange,.flatpickr-day.startRange.nextMonthDay,.flatpickr-day.startRange.prevMonthDay,.flatpickr-day.startRange:focus,.flatpickr-day.startRange:hover {
      --tw-border-opacity: 1;
      border-color: rgb(0 0 0/var(--tw-border-opacity));
      --tw-bg-opacity: 1;
      background-color: rgb(0 0 0/var(--tw-bg-opacity))
  }

  .flatpickr-current-month .flatpickr-monthDropdown-months {
      font-size: 1rem;
      line-height: 1.5rem
  }

  .flatpickr-current-month input.cur-year {
      padding-right: 1.25rem;
      text-align: right;
      font-size: 1rem;
      line-height: 1.5rem
  }

  .flatpickr-months .flatpickr-next-month:hover svg,.flatpickr-months .flatpickr-prev-month:hover svg {
      fill: #000
  }

  .chart-legends [type=checkbox] {
      box-shadow: none!important;
      border-radius: .125rem
  }

  .dark .chart-legends [type=checkbox]:checked {
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3E%3C/svg%3E")
  }

  .seller-dashboard-table {
      min-width: 100%;
      border-collapse: collapse;
      text-align: left
  }

  .seller-dashboard-table thead tr th {
      padding: .75rem 1.25rem;
      font-size: 1rem;
      line-height: 1.5rem;
      font-weight: 400;
      /*border: 1px solid white;*/
  }

  .seller-dashboard-table tbody tr td {
      padding: .5rem 1.25rem
      /*border: 1px solid white;*/
  }

  .seller-dashboard-table tbody tr {
      --tw-text-opacity: 1;
      color: rgb(92 92 92/var(--tw-text-opacity))
  }

  .dark .seller-dashboard-table tbody tr {
      --tw-text-opacity: 1;
      color: rgb(183 183 183/var(--tw-text-opacity));
      border-top: 1px solid #1f1f1f;
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td {
      background-color: rgb(0 0 0/.04)
  }

  .dark .seller-dashboard-table tbody tr:nth-child(2n) td {
      background-color: rgb(255 255 255/.04)
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td:first-child {
      border-top-left-radius: .5rem;
      border-bottom-left-radius: .5rem
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td:last-child {
      border-top-right-radius: .5rem;
      border-bottom-right-radius: .5rem
  }

  .seller-dashboard-table thead tr th.highlight {
      padding: 0
  }

  .seller-dashboard-table thead tr th.highlight>div {
      padding: .75rem 1.25rem;
      line-height: 1.75rem
  }

  @media (min-width: 768px) {
      .seller-dashboard-table thead tr th.highlight>div {
          border-top-left-radius:.75rem;
          border-top-right-radius: .75rem;
          border-left-width: .5px;
          border-right-width: .5px;
          border-top-width: .5px;
          border-color: rgb(255 255 255/.08);
          background-color: rgb(0 0 0/.04)
      }

      .dark .seller-dashboard-table thead tr th.highlight>div {
          background-color: rgb(255 255 255/.04)
      }

      .seller-dashboard-table tr:last-child td.highlight>div {
          border-bottom-right-radius: .75rem;
          border-bottom-left-radius: .75rem;
          border-bottom-width: .5px
      }
  }

  .seller-dashboard-table tbody tr td:not(:first-child) {
      display: none
  }

  @media (min-width: 768px) {
      .seller-dashboard-table tbody tr td:not(:first-child) {
          display:table-cell
      }
  }

  .seller-dashboard-table tbody tr td.highlight {
      display: table-cell;
      padding: 0
  }

  .seller-dashboard-table tbody tr td.highlight>div {
      padding: .5rem 1.25rem;
      line-height: 2rem
  }

  @media (min-width: 768px) {
      .seller-dashboard-table tbody tr td.highlight>div {
          border-left-width:.5px;
          border-right-width: .5px;
          border-color: rgb(255 255 255/.08);
          background-color: rgb(0 0 0/.04)
      }

      .dark .seller-dashboard-table tbody tr td.highlight>div {
          background-color: rgb(255 255 255/.04)
      }
  }

  @media screen and (max-width: 400px) {
      .seller-dashboard-table .title {
          max-width:150px
      }
  }

  .seller-dashboard-table[data-v-65c8ee4d] {
      min-width: 100%;
      border-collapse: collapse;
      text-align: left
  }

  .seller-dashboard-table thead tr th[data-v-65c8ee4d] {
      padding: .75rem 1.25rem;
      font-size: 1rem;
      line-height: 1.5rem;
      font-weight: 400
  }

  .seller-dashboard-table tbody tr td[data-v-65c8ee4d] {
      padding: .5rem 1.25rem
  }

  .seller-dashboard-table tbody tr[data-v-65c8ee4d] {
      --tw-text-opacity: 1;
      color: rgb(92 92 92/var(--tw-text-opacity))
  }

  .dark .seller-dashboard-table tbody tr[data-v-65c8ee4d] {
      --tw-text-opacity: 1;
      color: rgb(183 183 183/var(--tw-text-opacity))
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-65c8ee4d] {
      background-color: rgb(0 0 0/.04)
  }

  .dark .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-65c8ee4d] {
      background-color: rgb(255 255 255/.04)
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-65c8ee4d]:first-child {
      border-top-left-radius: .5rem;
      border-bottom-left-radius: .5rem
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-65c8ee4d]:last-child {
      border-top-right-radius: .5rem;
      border-bottom-right-radius: .5rem
  }

  .seller-dashboard-table thead tr th.highlight[data-v-65c8ee4d] {
      padding: 0
  }

  .seller-dashboard-table thead tr th.highlight>div[data-v-65c8ee4d] {
      padding: .75rem 1.25rem;
      line-height: 1.75rem
  }

  @media (min-width: 768px) {
      .seller-dashboard-table thead tr th.highlight>div[data-v-65c8ee4d] {
          border-top-left-radius:.75rem;
          border-top-right-radius: .75rem;
          border-left-width: .5px;
          border-right-width: .5px;
          border-top-width: .5px;
          border-color: rgb(255 255 255/.08);
          background-color: rgb(0 0 0/.04)
      }

      .dark .seller-dashboard-table thead tr th.highlight>div[data-v-65c8ee4d] {
          background-color: rgb(255 255 255/.04)
      }

      .seller-dashboard-table tr:last-child td.highlight>div[data-v-65c8ee4d] {
          border-bottom-right-radius: .75rem;
          border-bottom-left-radius: .75rem;
          border-bottom-width: .5px
      }
  }

  .seller-dashboard-table tbody tr td[data-v-65c8ee4d]:not(:first-child) {
      display: none
  }

  @media (min-width: 768px) {
      .seller-dashboard-table tbody tr td[data-v-65c8ee4d]:not(:first-child) {
          display:table-cell
      }
  }

  .seller-dashboard-table tbody tr td.highlight[data-v-65c8ee4d] {
      display: table-cell;
      padding: 0
  }

  .seller-dashboard-table tbody tr td.highlight>div[data-v-65c8ee4d] {
      padding: .5rem 1.25rem;
      line-height: 2rem
  }

  @media (min-width: 768px) {
      .seller-dashboard-table tbody tr td.highlight>div[data-v-65c8ee4d] {
          border-left-width:.5px;
          border-right-width: .5px;
          border-color: rgb(255 255 255/.08);
          background-color: rgb(0 0 0/.04)
      }

      .dark .seller-dashboard-table tbody tr td.highlight>div[data-v-65c8ee4d] {
          background-color: rgb(255 255 255/.04)
      }
  }

  @media screen and (max-width: 400px) {
      .seller-dashboard-table .title[data-v-65c8ee4d] {
          max-width:150px
      }
  }

  .seller-dashboard-table[data-v-ef3d8098] {
      min-width: 100%;
      border-collapse: collapse;
      text-align: left
  }

  .seller-dashboard-table thead tr th[data-v-ef3d8098] {
      padding: .75rem 1.25rem;
      font-size: 1rem;
      line-height: 1.5rem;
      font-weight: 400
  }

  .seller-dashboard-table tbody tr td[data-v-ef3d8098] {
      padding: .5rem 1.25rem
  }

  .seller-dashboard-table tbody tr[data-v-ef3d8098] {
      --tw-text-opacity: 1;
      color: rgb(92 92 92/var(--tw-text-opacity))
  }

  .dark .seller-dashboard-table tbody tr[data-v-ef3d8098] {
      --tw-text-opacity: 1;
      color: rgb(183 183 183/var(--tw-text-opacity))
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-ef3d8098] {
      background-color: rgb(0 0 0/.04)
  }

  .dark .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-ef3d8098] {
      background-color: rgb(255 255 255/.04)
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-ef3d8098]:first-child {
      border-top-left-radius: .5rem;
      border-bottom-left-radius: .5rem
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-ef3d8098]:last-child {
      border-top-right-radius: .5rem;
      border-bottom-right-radius: .5rem
  }

  .seller-dashboard-table thead tr th.highlight[data-v-ef3d8098] {
      padding: 0
  }

  .seller-dashboard-table thead tr th.highlight>div[data-v-ef3d8098] {
      padding: .75rem 1.25rem;
      line-height: 1.75rem
  }

  @media (min-width: 768px) {
      .seller-dashboard-table thead tr th.highlight>div[data-v-ef3d8098] {
          border-top-left-radius:.75rem;
          border-top-right-radius: .75rem;
          border-left-width: .5px;
          border-right-width: .5px;
          border-top-width: .5px;
          border-color: rgb(255 255 255/.08);
          background-color: rgb(0 0 0/.04)
      }

      .dark .seller-dashboard-table thead tr th.highlight>div[data-v-ef3d8098] {
          background-color: rgb(255 255 255/.04)
      }

      .seller-dashboard-table tr:last-child td.highlight>div[data-v-ef3d8098] {
          border-bottom-right-radius: .75rem;
          border-bottom-left-radius: .75rem;
          border-bottom-width: .5px
      }
  }

  .seller-dashboard-table tbody tr td[data-v-ef3d8098]:not(:first-child) {
      display: none
  }

  @media (min-width: 768px) {
      .seller-dashboard-table tbody tr td[data-v-ef3d8098]:not(:first-child) {
          display:table-cell
      }
  }

  .seller-dashboard-table tbody tr td.highlight[data-v-ef3d8098] {
      display: table-cell;
      padding: 0
  }

  .seller-dashboard-table tbody tr td.highlight>div[data-v-ef3d8098] {
      padding: .5rem 1.25rem;
      line-height: 2rem
  }

  @media (min-width: 768px) {
      .seller-dashboard-table tbody tr td.highlight>div[data-v-ef3d8098] {
          border-left-width:.5px;
          border-right-width: .5px;
          border-color: rgb(255 255 255/.08);
          background-color: rgb(0 0 0/.04)
      }

      .dark .seller-dashboard-table tbody tr td.highlight>div[data-v-ef3d8098] {
          background-color: rgb(255 255 255/.04)
      }
  }

  @media screen and (max-width: 400px) {
      .seller-dashboard-table .title[data-v-ef3d8098] {
          max-width:150px
      }
  }

  .seller-dashboard-table[data-v-7b16c59a] {
      min-width: 100%;
      border-collapse: collapse;
      text-align: left
  }

  .seller-dashboard-table thead tr th[data-v-7b16c59a] {
      padding: .75rem 1.25rem;
      font-size: 1rem;
      line-height: 1.5rem;
      font-weight: 400
  }

  .seller-dashboard-table tbody tr td[data-v-7b16c59a] {
      padding: .5rem 1.25rem
  }

  .seller-dashboard-table tbody tr[data-v-7b16c59a] {
      --tw-text-opacity: 1;
      color: rgb(92 92 92/var(--tw-text-opacity))
  }

  .dark .seller-dashboard-table tbody tr[data-v-7b16c59a] {
      --tw-text-opacity: 1;
      color: rgb(183 183 183/var(--tw-text-opacity))
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-7b16c59a] {
      background-color: rgb(0 0 0/.04)
  }

  .dark .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-7b16c59a] {
      background-color: rgb(255 255 255/.04)
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-7b16c59a]:first-child {
      border-top-left-radius: .5rem;
      border-bottom-left-radius: .5rem
  }

  .seller-dashboard-table tbody tr:nth-child(2n) td[data-v-7b16c59a]:last-child {
      border-top-right-radius: .5rem;
      border-bottom-right-radius: .5rem
  }

  .seller-dashboard-table thead tr th.highlight[data-v-7b16c59a] {
      padding: 0
  }

  .seller-dashboard-table thead tr th.highlight>div[data-v-7b16c59a] {
      padding: .75rem 1.25rem;
      line-height: 1.75rem
  }

  @media (min-width: 768px) {
      .seller-dashboard-table thead tr th.highlight>div[data-v-7b16c59a] {
          border-top-left-radius:.75rem;
          border-top-right-radius: .75rem;
          border-left-width: .5px;
          border-right-width: .5px;
          border-top-width: .5px;
          border-color: rgb(255 255 255/.08);
          background-color: rgb(0 0 0/.04)
      }

      .dark .seller-dashboard-table thead tr th.highlight>div[data-v-7b16c59a] {
          background-color: rgb(255 255 255/.04)
      }

      .seller-dashboard-table tr:last-child td.highlight>div[data-v-7b16c59a] {
          border-bottom-right-radius: .75rem;
          border-bottom-left-radius: .75rem;
          border-bottom-width: .5px
      }
  }

  .seller-dashboard-table tbody tr td[data-v-7b16c59a]:not(:first-child) {
      display: none
  }

  @media (min-width: 768px) {
      .seller-dashboard-table tbody tr td[data-v-7b16c59a]:not(:first-child) {
          display:table-cell
      }
  }

  .seller-dashboard-table tbody tr td.highlight[data-v-7b16c59a] {
      display: table-cell;
      padding: 0
  }

  .seller-dashboard-table tbody tr td.highlight>div[data-v-7b16c59a] {
      padding: .5rem 1.25rem;
      line-height: 2rem
  }

  @media (min-width: 768px) {
      .seller-dashboard-table tbody tr td.highlight>div[data-v-7b16c59a] {
          border-left-width:.5px;
          border-right-width: .5px;
          border-color: rgb(255 255 255/.08);
          background-color: rgb(0 0 0/.04)
      }

      .dark .seller-dashboard-table tbody tr td.highlight>div[data-v-7b16c59a] {
          background-color: rgb(255 255 255/.04)
      }
  }

  @media screen and (max-width: 400px) {
      .seller-dashboard-table .title[data-v-7b16c59a] {
          max-width:150px
      }
  }

</style>
