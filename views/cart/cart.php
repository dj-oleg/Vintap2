<?php
/** @var yii\web\View $this */
$this->title = 'Vintapes - Cart';
use yii\helpers\Url;

$session = Yii::$app->session; $session->open();
//echo2($session['cart']);
$session->close();
$url=Yii::$app->request->baseUrl;
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
<h1 class="px-1 text-center text-[33px] font-medium tracking-[-1.2px] sm:px-6 sm:text-6xl">Cart Review</h1>


<?php
//echo3($samples);
?>
<div class="f-row">
  <div class="f-column left">
    <table class="sample-list relative w-full table-auto table-cact">
      <tr>
        <th class="w-20 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3"></th>
        <th style="text-align:left;">ITEM</th>
        <th style="text-align:center;">PRICE</th>
        <th></th>
      </tr>
      <?php if(isset($samples)):?>
        <?php foreach($samples as $sample):?>
          <tr>
          <td class="w-20 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3"><img loading="lazy" class="h-11 w-11 rounded-[3px] object-cover md:h-10 md:w-10" src="<?=Yii::$app->request->baseUrl?>/modx/<?=$sample['album_img']?>"></td>
          <td style="text-align:left;"><?=$sample['title']?></td>
          <td style="text-align:center;font-size: 18px; font-weight: 600;">$ <?=(isset($sample['price']))?$sample['price']:0?></td>
          <td style="text-align:right;"><button num_audio="<?=$sample['id']?>" class="btn-remove-cart" type="button" style="color: #707070;"><i class="fa-solid fa-xmark"></i></button></td>
          </tr>
        <?php endforeach;?>
      <?php endif;?>
      <?php if(isset($packs)):?>
        <?php foreach($packs as $pack):?>
          <tr>
          <td class="w-20 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3"><img loading="lazy" class="h-11 w-11 rounded-[3px] object-cover md:h-10 md:w-10" src="<?=Yii::$app->request->baseUrl?>/modx/<?=$pack['album_img']?>"></td>
          <td style="text-align:left;"><?=$pack['title']?></td>
          <td style="text-align:center;font-size: 18px; font-weight: 600;">$ <?=(isset($pack['price']))?$pack['price']:0?></td>
          <td style="text-align:right;"><button num_audio="<?=$pack['id']?>" class="btn-remove-cart" type="button" style="color: #707070;"><i class="fa-solid fa-xmark"></i></button></td>
          </tr>
        <?php endforeach;?>
      <?php endif;?>
    </table>
  </div>
  <div class="f-column right">
      <h2 class="text-xl font-medium leading-[16px] tracking-[-0.25px] sm:text-[26px] sm:leading-8">Cart Summary</h2>
      <hr>
      <div>
          <mat-card-content class="mat-card-content">
            <div class="finalize">
              <div class="mt-5 row gross">
                <span class="name">Total Gross</span>
                <span class="value modal_price" id="sum">$<?=$total_sum['sum']?></span>
              </div>
              <div class=" row discount">
                <span class="name"> Discount</span>
                <span class="value" id="discount"><?=$total_sum['discount']?>% (-$<?=$total_sum['sum']*$total_sum['discount']?>)</span>
              </div>
              <div class="mt-5 row discount">
                <input type="text" class="form-field w-80" placeholder="Promo code" id="promo_code">
              </div>
              <div class="mt-5 row total">
                <span class="name">Total</span>
                <span class="value modal_price" id="total_sum">$<?=$total_sum['total_sum']?></span>
              </div>
            </div>
           </mat-card-content>
     </div>
     <div class="mt-10 text-center">
       <!--<form action="<?=Url::to(['cart/order'])?>"></form>-->
            <!--<button class="btn" id="btn-pay2" type="submit" >
               <i class="fa-brands fa-paypal"></i>
        </button>-->

                   <!-- Replace "test" with your own sandbox Business account app client ID -->
                    <script src="https://www.paypal.com/sdk/js?client-id=AY2jUF9-R1gfbVdEg-IdXgwyH07ax-obyA2t6LTElXU-AsP1pb6SFMd_atVrM3LpRgt8D6yfIjL4Dcxj&currency=USD"></script>
                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>
                    <script>
                    let paypal_sum = '<?=$total_sum['total_sum']?>';
                      paypal.Buttons({
                        style: {
                        shape: 'pill',
                        color: 'blue',
                        layout: 'vertical',
                        label: 'paypal',
                        tagline: 'false'
                      },
                                      // Sets up the transaction when a payment button is clicked
                        createOrder: (data, actions) => {
                          return actions.order.create({
                            purchase_units: [{
                              amount: {
                                value: paypal_sum // Can also reference a variable or function
                              }
                            }]
                          });
                        },
                        // Finalize the transaction after payer approval
                        onApprove: (data, actions) => {
                          return actions.order.capture().then(function(orderData) {
                            // Successful capture! For dev/demo purposes:
                            //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                            const transaction = orderData.purchase_units[0].payments.captures[0];
                            //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                            console.log(transaction.status);
                            console.log(transaction.id);
                            console.log(orderData.purchase_units[0].payee.email_address);
                            console.log(orderData.purchase_units[0].payee.merchant_id);
                            console.log(transaction.create_time);
                            console.log(orderData.purchase_units[0].shipping.name.full_name);
                            console.log(paypal_sum);
                            console.log($('#promo_code').val());

                            $.ajax({
                                  method: "POST",
                                  //dataType: 'json',
                                  url: '<?=$url?>/ajax/paypal',
                                  data: { status: transaction.status,
                                          transaction_id: transaction.id,
                                          payer_email: orderData.purchase_units[0].payee.email_address,
                                          payer_id: orderData.purchase_units[0].payee.merchant_id,
                                          create_time: transaction.create_time,
                                          full_name: orderData.purchase_units[0].shipping.name.full_name,
                                          paypal_sum: paypal_sum,
                                          promocode: $('#promo_code').val()
                                        }
                                  //data: JSON.stringify(orderData, null, 2),
                                })
                                  .done(function( data ) {
                                    window.location.href ='cart/order';
                                  });
                            // When ready to go live, remove the alert and show a success message within this page. For example:
                            // const element = document.getElementById('paypal-button-container');
                            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                            // Or go to another URL:  actions.redirect('thank_you.html');
                          });
                        }
                      }).render('#paypal-button-container');
                    </script>


     </div>
  </div>
</div>
<!--
<div class="mt-15 grid md:grid-cols-2" style="background-color:red" data-v-15abc323="">
  <div data-v-15abc323="" class="" style="background-color:yellow">
    <table class="mt-10 sample-list relative w-full table-auto table-cact">
      <tr>
        <th class="w-20 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3"></th>
        <th style="text-align:left;">ITEM</th>
        <th style="text-align:center;">PRICE</th>
        <th></th>
      </tr>
      <?php if(isset($samples)):?>
        <?php foreach($samples as $sample):?>
          <tr>
          <td class="w-20 rounded-tl-xl rounded-bl-xl py-4 lg:pl-3"><img loading="lazy" class="h-11 w-11 rounded-[3px] object-cover md:h-10 md:w-10" src="<?=Yii::$app->request->baseUrl?>/modx/<?=$sample['album_img']?>"></td>
          <td style="text-align:left;"><?=$sample['title']?></td>
          <td style="text-align:center;font-size: 18px; font-weight: 600;">$ <?=(isset($sample['price']))?$sample['price']:0?></td>
          <td style="text-align:right;"><button num_audio="<?=$sample['id']?>" class="btn-remove-cart" type="button" style="color: #707070;"><i class="fa-solid fa-xmark"></i></button></td>
          </tr>
        <?php endforeach;?>
      <?php endif;?>
    </table>

  </div>
  <div class="max-w-xs cart-summary mt-15" style="background-color:green">
    <h2 class="text-xl font-medium leading-[16px] tracking-[-0.25px] sm:text-[26px] sm:leading-8">Cart Summary</h2>
    <hr>

    <div>
        <mat-card-content class="mat-card-content">
          <div class="finalize">
            <div class="row gross">
              <span class="name">Total Gross</span>
              <span class="value modal_price">$30.00</span>
            </div>
            <div class="row discount">
              <span class="name"> Discount</span>
              <span class="value">-$0.00</span>
            </div>
            <div class="row total">
              <span class="name">Total</span>
              <span class="value modal_price">$30.00</span>
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
-->

</div></div>
<?php

$script = <<< JS



//видалення товара з корзини
$('.btn-remove-cart').click(function(){
  var num_audio = $(this).attr('num_audio');
  var row = $(this).parent().parent();
  var promo_code = $('#promo_code').val();
  //alert(num_audio);
  $.ajax({
        method: "POST",
        url: '$url/ajax/cart_remove',
        data: { num_audio: num_audio, promo_code: promo_code}
      })
        .done(function( data ) {
          //alert( "rez: " + rez );
          var rez = JSON.parse(data);
          row.hide();
          $('#sum').html('$'+rez.sum);
          $('#discount').html(rez.discount+'% (-$'+rez.sum*rez.discount+')');
          $('#total_sum').html('$'+rez.total_sum);
          paypal_sum = rez.total_sum;
        });

});
//promo code
$("#promo_code").keyup(function () {
  var promo_code = $('#promo_code').val();
  //alert(num_audio);
  $.ajax({
        method: "POST",
        url: '$url/ajax/promo',
        data: { promo_code: promo_code}
      })
        .done(function( data ) {
          //alert( "rez: " + rez );
          var rez = JSON.parse(data);
          $('#sum').html('$'+rez.sum);
          $('#discount').html(rez.discount+'% (-$'+(rez.sum*rez.discount/100).toFixed(2)+')');
          $('#total_sum').html('$'+rez.total_sum);
          paypal_sum = rez.total_sum;
        });
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
