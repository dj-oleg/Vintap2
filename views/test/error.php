<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<style>
.alert-danger{
  padding: 25px;
  font-weight: bold;
  font-size: biger;
}
</style>
<div class="site-error">

    <h1 style="font-size:30px;"><?= Html::encode($this->title) ?></h1>
    <br>
    <hr>
    <br>
    <div class="alert alert-danger">

        <?= nl2br(Html::encode($message)) ?>

    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div></div>
