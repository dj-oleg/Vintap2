<?php
/** @var yii\web\View $this */
$this->title = 'Vintapes - Cart';
use yii\helpers\Url;

$session = Yii::$app->session; $session->open();
//echo2($session['cart']);
$session->close();
$url=Yii::$app->request->baseUrl;
?>
<h1>test ajax paypal</h1>
<script src="https://www.paypal.com/sdk/js?client-id=AY2jUF9-R1gfbVdEg-IdXgwyH07ax-obyA2t6LTElXU-AsP1pb6SFMd_atVrM3LpRgt8D6yfIjL4Dcxj&currency=USD"></script>
<script src="/assets/733563ae/jquery.js"></script>
<!--<script>
$.ajax({
                                  method: "POST",
                                  //dataType: 'json',
                                  url: '<?=$url?>/ajax/paypal',
                                  data: { status: 'COMPLETED',
                                          transaction_id: '7NY1690359015121S',
                                          payer_email: 'kytekovy@gmail.com',
                                          payer_id: 'AWBW5ENG9K88Y',
                                          create_time: '2024-01-22T20:10:23Z',
                                          full_name: 'V V',
                                          paypal_sum: 0.01,
                                          promocode: ''
                                        }
                                  //data: JSON.stringify(orderData, null, 2),
                                })
                                  .done(function( data ) {
                                    window.location.href ='cart/order';
                                  });

</script>-->