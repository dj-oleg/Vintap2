<!DOCTYPE html>

<?php

/** @var yii\web\View $this */
/** @var string $content */

//use Yii;
use app\assets\NewAsset;
use app\widgets\Alert;
use yii\helpers\Url;
//use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use app\models\User;
//use yii\bootstrap5\Nav;
//use yii\bootstrap5\NavBar;
$session = Yii::$app->session;
$session->open();
$carrent_theme=$session['theme'];
echo '<div style="color:white">';
//echo2($_SESSION);
$session->close();
echo '</div>';
//echo3(Yii::$app->user->identity->id);
if(!Yii::$app->user->isGuest) $user=User::findOne(['id' => Yii::$app->user->id]);
$request = Yii::$app->request;
$type=$request->get('type');
NewAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
//$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
$promo=$this->context->get_promo();
//echo3($promo);

//google authorization
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

$baseUrl=Yii::$app->request->baseUrl;
?>
<?php $this->beginPage() ?>


<!--<html lang="<?= Yii::$app->language ?>" data-n-head="%7B%22lang%22:%7B%22ssr%22:%22en-US%22%7D%7D" class="dark">-->
<html lang="en">

<head>
  <title><?= Html::encode($this->title) ?></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
  <link rel="shortcut icon" href="https://fontawesome.veliovgroup.com/assets/ico/favicon.ico">
  <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="http://poligon.s-hostp.net/css/new/style.css" rel="stylesheet">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json">
  <script src="chrome-extension://lpilbniiabackdjcionkobglmddfbcjo/inpage.js"></script>
  <link rel="stylesheet" href="<?=$baseUrl?>/css/new/style.css">
  <link rel="stylesheet" href="https://fontawesome.veliovgroup.com/assets/css/font-awesome.css">
  <link rel="shortcut icon" href="https://fontawesome.veliovgroup.com/assets/ico/favicon.ico">
  <?php $this->head() ?>
  <style>

  </style>






</head>
<body>
  <?php $this->beginBody() ?>
    <!--<div id="wrop">-->
      <?php if(Yii::$app->controller->action->id == 'explore'): ?>
        <div class="first" >DISCOUNT FOR NEW MEMBER</div>

        <header class="main-header">
				<div class="layers">

					<div class="layer__header">
            <div class="container">
						<div class="layers__caption">Vintapes</div>
						<div class="layers__title">Feel the music</div>
            <div class="wrop-2">
                <ul>
                    <li><a href="#">trap</a></li>
                    <li><a href="#">soul</a></li>
                    <li><a href="#">piano</a></li>
                    <li><a href="#">vocal</a></li>
                    <li><a href="#">drums</a></li>
                    <li><a href="#">rock</a></li>
                </ul>
            </div>
            </div>
					</div>

					<div class="layer layers__base" style="background-image: url(<?=$baseUrl?>/img/new/layer-base.png);"></div>
					<div class="layer layers__middle" style="background-image: url(<?=$baseUrl?>/img/new/layer-middle.png);"></div>
					<div class="layer layers__front" style="background-image: url(<?=$baseUrl?>/img/new/layer-front.png);"></div>
				</div>
			</header>

        <!--<section>
            <div class="first" >DISCOUNT FOR NEW MEMBER</div>
            <div id="img" style="">
              <div class="container" style="padding:50px 0;">

                <div class="logo"><a href="#"><img src="<?=$baseUrl?>/img/new/logo.svg" alt="Logo" width="245px" height="35px"></a></div>
                <div class="wrop-2">
                    <h1>Feel the <br><span>music</span></h1>

                    <ul>
                        <li><a href="#">trap</a></li>
                        <li><a href="#">soul</a></li>
                        <li><a href="#">piano</a></li>
                        <li><a href="#">vocal</a></li>
                        <li><a href="#">drums</a></li>
                        <li><a href="#">rock</a></li>
                    </ul>
                </div>
                <div class="single">Тут я пропоную зробити клікабельний блок з піснею новинкою.</div>
                <div class="player">
                    <div class="icons">
                        <a href="#"><img src="<?=$baseUrl?>/img/new/play.png" alt=""></a>
                        <a href="#"><img src="<?=$baseUrl?>/img/new/front.png" alt=""></a>
                        <a href="#"><img src="<?=$baseUrl?>/img/new/back.png" alt=""></a>
                    </div>
                    <div class="song">
                        <div class="autor">ВИКОНАВЕЦЬ</div>
                        <div class="title">НАЗВА ПІСНІ</div>
                    </div>
                </div>
            </div>
            </div>
        </section>-->
      <?php endif; ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top nav1">
        <div class="container">
          <div class="logo-w">
              <a href="<?=Url::to(['test/explore'])?>"><img src="<?=$baseUrl?>/img/new/logo-white.svg" alt="Logo"></a>
              <form role="search" class="d-flex hide-mobile" >
                <input class="form-control" type="search" placeholder="found your best..." aria-label="Search">
              </form>
          </div>

          <div class="link-4 hide-mobile" >
              <a class="btn btn-orange" href="<?=Url::to(['user/media'])?>">MY MEDIA</a>
              <div class="dropdown text-end">
                <a href="#" class="user d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" style="">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top nav2">
          <div class="container">
          <button class="navbar-toggler" style="margin-top:15px;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="link-4 d-lg-none" style="text-align:right">
              <div class="dropdown text-end">
                <a href="#" class="user d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" style="">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </div>
          </div>
            <div class="collapse navbar-collapse " id="navbarsExample02">
              <div class="mobile_menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 link-3" style="margin-left: 5px">
                      <li><a href="<?=Url::to(['test/explore'])?>" class="<?=(Yii::$app->controller->action->id == 'explore')?"active":""?>">EXPLORE</a></li>
                      <li><a href="<?=Url::to(['test/packs'])?>" class="<?=(Yii::$app->controller->action->id == 'packs')?"active":""?>">PACKS</a></li>
                      <li><a href="<?=Url::to(['test/selections'])?>" class="<?=(Yii::$app->controller->action->id == 'selections')?"active":""?>">SELECTIONS</a></li>
                      <li><a href="<?=Url::to(['test/creators'])?>" class="<?=(Yii::$app->controller->action->id == 'creators')?"active":""?>">CREATORS</a></li>
                      <li><a href="<?=Url::to(['test/gfx'])?>" class="<?=(Yii::$app->controller->action->id == 'gfx')?"active":""?>">GFX</a></li>
                  </ul>
                  <div class="navbar-text">
                    <ul class="navbar-nav user-menu">
                        <li><a href="<?=Url::to(['user/account'])?>">MY ACCOUNT</a></li>
                        <li><a href="<?=Url::to(['user/downloads'])?>">DOWNLOADS</a></li>
                        <li><a href="<?=Url::to(['user/likes'])?>">LIKES</a></li>
                    </ul>
                  </div>
              </div>

            </div>

          </div>
          </div>
        </nav>





<div class="container">
<?= $content ?>
</div>
        <center><a href="#" class="btn btn-orange" style="padding:9px; width:230px">Back to top</a></center>
        <footer>
          <div class="container">
            <nav>
                <div class="nav-item">
                    <h5>MUSIC</h5>
                    <ul>
                        <li><a href="#">pack</a></li>
                        <li><a href="#">creators</a></li>
                        <li><a href="#">selections</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <h5>ACCOUNT</h5>
                    <ul>
                        <li><a href="#">sing in</a></li>
                        <li><a href="#">my media</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <h5>SUPPORT</h5>
                    <ul>
                        <li><a href="#">feedback</a></li>
                        <li><a href="#">contact support</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <h5>LEGAL</h5>
                    <ul>
                        <li><a href="#">terms of use</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <h5>SOCIAL MEDIA</h5>
                    <ul>
                        <li><a href="https://youtube.com/@vintapes3653">Youtube</a></li>
                        <li><a href="#">facebook</a></li>
                        <li><a href="https://www.instagram.com/yourtype.samples">instagram</a></li>
                    </ul>
                </div>
            </nav>
            <div class="white copy">
                <a href="#"><img src="<?=$baseUrl?>/img/new/logo-white.svg" alt="Logo"></a>
                <div>2023 Vintapes. Inc. All rights reserved.</div>
            </div>
          </div>
        </footer>
    <!--</div>-->
<?php $this->endBody();?>
<!--
<script src="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/offcanvas-navbar.js"></script>
-->

<!--<script src="/libs/gsap/gsap.min.js" ></script>
<script src="/libs/gsap/ScrollTrigger.min.js" ></script>
<script src="/libs/gsap/ScrollSmoother.min.js" ></script>-->
<script>
/*paralax header*/
  window.addEventListener('scroll', e => {
  document.documentElement.style.setProperty('--scrollTop', `${this.scrollY}px`) // Update method
  })
/*  gsap.registerPlugin(ScrollTrigger, ScrollSmoother)
  ScrollSmoother.create({
  wrapper: '.wrapper',
  content: '.content2'
})*/

</script>
<script>
/*animate section*/
(function($) {
	function animatedBlocks () {
		$('.need-animate').each(function () {
			var scrollPosTop = $(window).scrollTop(), // позиция скролла, верх страницы
				blockPosTop = $(this).offset().top, // позиция блока (верх), который нужно анимировать
				blockPosBottom = blockPosTop+$(this).height(), // позиция блока (низ), который нужно анимировать
				windowHeight = $(window).height(), // высота окна браузера
				windowLineTop = scrollPosTop+(windowHeight*(1/8)), // верхняя граница окна браузера при пересечении которой анимируется блок
				windowsLineBottom = scrollPosTop+(windowHeight*(7/8)); // нижяя граница окна браузера при пересечении которой анимируется блок

			if (
				(windowLineTop <= blockPosBottom && windowLineTop > blockPosTop) // если верхняя часть экрана выше нижней границы блока, но не прошла блок полностью
				|| (windowsLineBottom >= blockPosTop && windowsLineBottom < blockPosBottom) // если нижняя часть экрана дошла до верхней границы блока, но не прошла блок полностью
				|| ((blockPosTop > windowLineTop && blockPosTop < windowsLineBottom) || (blockPosBottom > windowLineTop && blockPosBottom < windowsLineBottom)) // или блок по центру экрана
			) {
				//$(this).removeClass('need-animate').addClass('animated');
        $(this).addClass('animated');
			} else{
        $(this).removeClass('animated');
      }
		});
	}
	$(document).ready(function () {
		setTimeout(function () {
			animatedBlocks();
		}, 500);
	});
	$(window).scroll(function () {
		animatedBlocks();
	});
})(jQuery);
</script>
</body>
</html>
<?php $this->endPage() ?>
