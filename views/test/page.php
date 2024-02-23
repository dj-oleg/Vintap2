<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;
//echo3($page);
$this->title = $page->pagetitle;
?>
<style>
h1{
    font-size: 1.875rem;
    line-height: 2.25rem;
    font-weight: 500;
    line-height: 1;
}
p{
  --tw-space-y-reverse: 0;
    margin-top: calc(1.25rem*(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.25rem*var(--tw-space-y-reverse));
}
menu,ol,ul{
  margin-left: 2rem;
    list-style-type: decimal;
    list-style: none;
    margin: 0;
    padding: 0;
}
li{
  display: list-item;
  text-align: -webkit-match-parent;
}
b, strong {
    font-weight: bolder;
}
</style>
<div>

    <?=str_replace('src="', 'src="/modx/', $page->content)?>

</div>
</div>
