<?php
/** @var yii\web\View $this */
$this->title = 'Vintapes - Order';
use yii\helpers\Url;

$session = Yii::$app->session;$session->open();
//echo2($session['cart']);
$session->close();
?>
<Style>
  .table-cact tr td{
    /*padding: 15px;*/
  }
  .table-cact tr {
    border-bottom: 1px  solid #707070;
  }
  .cart-summary{
    background-color: #1b1b1b;
    border-radius: 3px!important;
    padding: 10px;
    margin: 50px 25px;
  }
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
 .f-row {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.f-column {
  float: left;
}

.left {
  width: 65%;
  padding: 25px;
  /*background-color:red;*/
}

.right {
  width: 35%;
  padding: 25px;
  background-color:#1b1b1b;
  border-radius: 5px;

}
@media screen and (max-width: 600px) {
  .f-column, .left, .right  {
    width: 100%;
  }
}
</style>
<h1 class="px-1 text-center text-[33px] font-medium tracking-[-1.2px] sm:px-6 sm:text-6xl">Thank you for your order!</h1>


<?php
//echo2($session['cart']);
?>
<p class="mt-6 text-center text-[17px] leading-6 text-b7b7b7 sm:mt-8">All songs are available to you on the website in your <a style="color: #f05025;" href="<?=Url::to(['user/downloads'])?>">Personal account</a>.</p>


</div></div>
<?php
$url=Yii::$app->request->baseUrl;
$script = <<< JS


JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
