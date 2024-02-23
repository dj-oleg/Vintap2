<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
$this->title = 'Вход на сайт';

$client_id="42585020892-h0dka680rn0psjcmpf2k8sancr39g8q3.apps.googleusercontent.com";
$clientSecret="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";
$redirect_uri = 'http://vintapes.com/user/google';
$url = 'https://accounts.google.com/o/oauth2/auth';

$params_g = array(
'redirect_uri'  => $redirect_uri,
'response_type' => 'code',
'client_id'     => $client_id,
'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile'
);
?>


 <a class="btn btn-info btn-large" style="width:49%;" href="<?=$url.'?'.urldecode(http_build_query($params_g))?>"><i class="fa fa-google"></i> Вход Google</a>
