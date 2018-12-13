<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html><html lang='en' class=''>
<head>
  <span class="py-4">
      @yield('head')
  </span>
  <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/mrspok407/pen/GjWZzz?limit=all&page=6&q=slide" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>

<style class="cp-pen-styles">.cont {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  will-change: transform;
  overflow: hidden;
  cursor: pointer;
}
.slide__bg {
  position: absolute;
  top: 0;
  left: 0;
  -webkit-transform-origin: center left;
          transform-origin: center left;
  width: 100%;
  height: 100%;
  background-color: #161616;
  z-index: 1;
  -webkit-transition: 950ms;
  transition: 950ms;
  will-change: transform;
}
.slide__img {
  position: relative;
  height: 100%;
}
.slide__img-wrapper {
  position: absolute;
  top: -10%;
  left: -10%;
  width: 125%;
  height: 120%;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  -webkit-transition: 950ms;
  transition: 950ms;
  will-change: transform;
}
.slide__close {
  position: absolute;
  top: 5%;
  left: 5%;
  width: 100px;
  height: 100px;
  z-index: 0;
  opacity: 0;
  cursor: pointer;
  -webkit-transition: opacity 200ms, z-index 0ms 200ms;
  transition: opacity 200ms, z-index 0ms 200ms;
}
.slide__close:after, .slide__close:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 115px;
  height: 20px;
  border-radius: 20px;
  background-color: #fff;
  -webkit-transition: 500ms 500ms;
  transition: 500ms 500ms;
}
@media screen and (max-width: 960px) {
  .slide__close:after, .slide__close:before {
    width: 75px;
    height: 15px;
  }
}
.slide__close:after {
  -webkit-transform-origin: center left;
          transform-origin: center left;
  -webkit-transform: rotate(45deg) scale(0, 0);
          transform: rotate(45deg) scale(0, 0);
}
.slide__close:before {
  left: -33px;
  -webkit-transform-origin: center right;
          transform-origin: center right;
  -webkit-transform: rotate(-45deg) scale(0, 0);
          transform: rotate(-45deg) scale(0, 0);
  -webkit-transition: 500ms 650ms;
  transition: 500ms 650ms;
}
@media screen and (max-width: 960px) {
  .slide__close:before {
    left: -21px;
  }
}
.slide__bg-dark {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  -webkit-transition: 350ms;
  transition: 350ms;
  z-index: 2;
}
.slide__text {
  position: absolute;
  top: 50%;
  left: 5%;
  width: 23%;
  text-transform: uppercase;
  word-wrap: break-word;
  color: #fff;
  font-size: 45px;
  font-weight: 800;
  -webkit-transform: translate3d(0, -50%, 0) rotate(0.01deg);
          transform: translate3d(0, -50%, 0) rotate(0.01deg);
  will-change: transform, opacity;
  -webkit-transition: 750ms;
  transition: 750ms;
  opacity: 0;
  z-index: 1;
}
@media screen and (max-width: 960px) {
  .slide__text {
    font-size: 30px;
  }
}
.slide__text--1 {
  left: 8%;
}

.slide {
  left: 100%;
}

.slide--1 {
  z-index: 0;
}
.slide--1 .slide__img-wrapper {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/snow-forest.jpg") center center no-repeat;
  background-size: cover;
}

.slide--2 {
  z-index: 1;
}
.slide--2 .slide__img-wrapper {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/desert.jpg") center center no-repeat;
  background-size: cover;
}

.slide--3 {
  z-index: 2;
}
.slide--3 .slide__img-wrapper {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/lonely-tree.jpg") center center no-repeat;
  background-size: cover;
}

.slide--4 {
  z-index: 3;
}
.slide--4 .slide__img-wrapper {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/road.jpeg") center center no-repeat;
  background-size: cover;
}

.icon-link--twitter {
  position: absolute;
  bottom: 10px;
  right: 10px;
  width: 50px;
  opacity: 0;
  z-index: -1;
}
.icon-link--twitter img {
  width: 100%;
}

.icon-show {
  opacity: 1;
  z-index: 5;
}

.active .slide--1 .slide__bg {
  -webkit-transform: scale(0, 1);
          transform: scale(0, 1);
  -webkit-transition: 950ms;
  transition: 950ms;
}
.active .slide--1 .slide__img-wrapper {
  -webkit-transform: translate3d(-150px, 0, 0);
          transform: translate3d(-150px, 0, 0);
  -webkit-transition: 2000ms;
  transition: 2000ms;
}
.active .slide--1 {
  -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
  -webkit-transition: -webkit-transform 950ms 0ms;
  transition: -webkit-transform 950ms 0ms;
  transition: transform 950ms 0ms;
  transition: transform 950ms 0ms, -webkit-transform 950ms 0ms;
}
.active .slide--1 .slide__bg {
  -webkit-transform: scale(0, 1);
          transform: scale(0, 1);
  -webkit-transition: 1900ms 0ms;
  transition: 1900ms 0ms;
}
.active .slide--1 .slide__img-wrapper {
  -webkit-transform: translate3d(-150px, 0, 0);
          transform: translate3d(-150px, 0, 0);
  -webkit-transition: 2000ms 0ms;
  transition: 2000ms 0ms;
}
.active .slide--2 {
  -webkit-transform: translate3d(-75%, 0, 0);
          transform: translate3d(-75%, 0, 0);
  -webkit-transition: -webkit-transform 950ms 1235ms;
  transition: -webkit-transform 950ms 1235ms;
  transition: transform 950ms 1235ms;
  transition: transform 950ms 1235ms, -webkit-transform 950ms 1235ms;
}
.active .slide--2 .slide__bg {
  -webkit-transform: scale(0, 1);
          transform: scale(0, 1);
  -webkit-transition: 1900ms 1235ms;
  transition: 1900ms 1235ms;
}
.active .slide--2 .slide__img-wrapper {
  -webkit-transform: translate3d(-150px, 0, 0);
          transform: translate3d(-150px, 0, 0);
  -webkit-transition: 2000ms 1235ms;
  transition: 2000ms 1235ms;
}
.active .slide--3 {
  -webkit-transform: translate3d(-50%, 0, 0);
          transform: translate3d(-50%, 0, 0);
  -webkit-transition: -webkit-transform 950ms 2470ms;
  transition: -webkit-transform 950ms 2470ms;
  transition: transform 950ms 2470ms;
  transition: transform 950ms 2470ms, -webkit-transform 950ms 2470ms;
}
.active .slide--3 .slide__bg {
  -webkit-transform: scale(0, 1);
          transform: scale(0, 1);
  -webkit-transition: 1900ms 2470ms;
  transition: 1900ms 2470ms;
}
.active .slide--3 .slide__img-wrapper {
  -webkit-transform: translate3d(-150px, 0, 0);
          transform: translate3d(-150px, 0, 0);
  -webkit-transition: 2000ms 2470ms;
  transition: 2000ms 2470ms;
}
.active .slide--4 {
  -webkit-transform: translate3d(-25%, 0, 0);
          transform: translate3d(-25%, 0, 0);
  -webkit-transition: -webkit-transform 950ms 3705ms;
  transition: -webkit-transform 950ms 3705ms;
  transition: transform 950ms 3705ms;
  transition: transform 950ms 3705ms, -webkit-transform 950ms 3705ms;
}
.active .slide--4 .slide__bg {
  -webkit-transform: scale(0, 1);
          transform: scale(0, 1);
  -webkit-transition: 1900ms 3705ms;
  transition: 1900ms 3705ms;
}
.active .slide--4 .slide__img-wrapper {
  -webkit-transform: translate3d(-150px, 0, 0);
          transform: translate3d(-150px, 0, 0);
  -webkit-transition: 2000ms 3705ms;
  transition: 2000ms 3705ms;
}

.show-close {
  z-index: 4;
  opacity: 1;
}
.show-close:after {
  -webkit-transform: rotate(45deg) scale(1, 1);
          transform: rotate(45deg) scale(1, 1);
}
.show-close:before {
  -webkit-transform: rotate(-45deg) scale(1, 1);
          transform: rotate(-45deg) scale(1, 1);
}

html {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: 'Open-Sans', sans-serif;
}

*,
*:before,
*:after {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
  margin: 0;
  padding: 0;
}
</style></head><body>
<div class="cont ">
	<div data-target='1' class="slide slide--1">
		<div class="slide__text slide__text--1">quis risus</div>
		<div class="slide__bg"></div>
		<div class="slide__img">
			<div class="slide__close"></div>
			<div class="slide__img-wrapper">

			</div>
		</div>
		<div class="slide__bg-dark"></div>
		<a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
  </a>
	</div>

	<div data-target='2' class="slide slide--2">
		<div class="slide__text">Lorem ipsum</div>
		<div class="slide__bg"></div>
		<div class="slide__img">
			<div class="slide__close"></div>
			<div class="slide__img-wrapper">

			</div>
		</div>
		<div class="slide__bg-dark"></div>
		<a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
  </a>
	</div>

	<div data-target='3' class="slide slide--3">
		<div class="slide__text">Sed tincidunt</div>
		<div class="slide__bg"></div>
		<div class="slide__img">
			<div class="slide__close"></div>
			<div class="slide__img-wrapper">

			</div>
		</div>
		<div class="slide__bg-dark"></div>
		<a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
  </a>
	</div>

	<div data-target='4' class="slide slide--4">
		<div class="slide__text">Vivamus dui</div>
		<div class="slide__bg"></div>
		<div class="slide__img">
			<div class="slide__close"></div>
			<div class="slide__img-wrapper">

			</div>
		</div>
		<div class="slide__bg-dark"></div>
		<a href="https://twitter.com/mrspok407" target="_blank" class="icon-link icon-link--twitter">
    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
  </a>
	</div>

</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script >$(document).ready(function () {
	var $cont = $('.cont');
	var $slide = $('.slide');
	var $closeBtn = $('.slide__close');
	var $text = $('.slide__text');
	var $iconTwitter = $('.icon-link--twitter');
	var numSlides = 4;
	var initialAnimDur = 5705;
	var animDelay = 1000;
	var initialAnim = true;
	var clickAnim = false;

	$(document).on('click', '.slide__bg-dark', function () {
		if (initialAnim || clickAnim) return;
		var _this = $(this).parent();
		var target = +_this.attr('data-target');
		clickAnim = true;

		_this.css({
			'transform': 'translate3d(-100%, 0, 0)',
			'transition': '750ms',
			'cursor': 'default'
		});

		_this.find('.slide__img-wrapper').css({
			'transform': 'translate3d(0, 0, 0) scale(.95, .95)',
			'transition': '2000ms'
		});

		for (var i = target, length = $slide.length; i < length; i++) {if (window.CP.shouldStopExecution(1)){break;}if (window.CP.shouldStopExecution(1)){break;}
			$('.slide--' + (i + 1)).css({
				'transform': 'translate3d(0, 0, 0)',
				'transition': '750ms'
			});
		}
window.CP.exitedLoop(1);

window.CP.exitedLoop(1);


		for (var _i = target, _length = $slide.length; _i > 1; _i--) {if (window.CP.shouldStopExecution(2)){break;}if (window.CP.shouldStopExecution(2)){break;}
			$('.slide--' + (_i - 1)).css({
				'transform': 'translate3d(-125%, 0, 0)',
				'transition': '750ms'
			});
		}
window.CP.exitedLoop(2);

window.CP.exitedLoop(2);


		setTimeout(function () {
			$slide.not(_this).find('.slide__bg-dark').css({
				'opacity': '0'
			});
		}, 750);

		$closeBtn.addClass('show-close');
		$iconTwitter.addClass('icon-show');

		_this.find('.slide__text').css({
			'transform': 'translate3d(150px, -40%, 0)',
			'opacity': '1',
			'transition': '2000ms',
			'-webkit-transition': '2000ms'
		});
	});

	$(document).on('mousemove', '.slide', function () {
		if (initialAnim || clickAnim) return;
		var _this = $(this);
		var target = +_this.attr('data-target');

		_this.css({
			'transform': 'translate3d(-' + (100 / numSlides * (numSlides - (target - 1)) + 5) + '%, 0, 0)',
			'transition': '750ms'
		});

		_this.find('.slide__text').css({
			'transform': 'translate3d(0, -40%, 0) rotate(0.01deg)',
			'-moz-transform': 'translate3d(0, -40%, 0) rotate(0.01deg)',
			'opacity': '1',
			'transition': '750ms',
			'-webkit-transition': '750ms'
		});

		for (var i = target, length = $slide.length; i < length; i++) {if (window.CP.shouldStopExecution(3)){break;}if (window.CP.shouldStopExecution(3)){break;}
			$('.slide--' + (i + 1)).css({
				'transform': 'translate3d(-' + (100 / numSlides * (numSlides - (i + 1 - 1)) - 5) + '%, 0, 0)',
				'transition': '750ms'
			});
		}
window.CP.exitedLoop(3);

window.CP.exitedLoop(3);


		for (var _i2 = target; _i2 > 1; _i2--) {if (window.CP.shouldStopExecution(4)){break;}if (window.CP.shouldStopExecution(4)){break;}
			$('.slide--' + (_i2 - 1)).css({
				'transform': 'translate3d(-' + (100 / numSlides * (numSlides - (_i2 - 1 - 1)) + 5) + '%, 0, 0)',
				'transition': '750ms'
			});
		}
window.CP.exitedLoop(4);

window.CP.exitedLoop(4);


		_this.find('.slide__img-wrapper').css({
			'transform': 'translate3d(-200px, 0, 0) scale(.85, .85)',
			'transition': '750ms'
		});

		$slide.not(_this).find('.slide__img-wrapper').css({
			'transform': 'translate3d(-200px, 0, 0) scale(.90, .90)',
			'transition': '1000ms'
		});

		$slide.not(_this).find('.slide__bg-dark').css({
			'opacity': '.75'
		});
	});

	$(document).on('mouseleave', '.slide', function () {
		if (initialAnim || clickAnim) return;
		var _this = $(this);
		var target = +_this.attr('data-target');

		for (var i = 1, length = $slide.length; i <= length; i++) {if (window.CP.shouldStopExecution(5)){break;}if (window.CP.shouldStopExecution(5)){break;}
			$('.slide--' + i).css({
				'transform': 'translate3d(-' + 100 / numSlides * (numSlides - (i - 1)) + '%, 0, 0)',
				'transition': '1000ms'
			});
		}
window.CP.exitedLoop(5);

window.CP.exitedLoop(5);


		$slide.find('.slide__img-wrapper').css({
			'transform': 'translate3d(-200px, 0, 0) scale(1, 1)',
			'transition': '750ms'
		});

		$slide.find('.slide__bg-dark').css({
			'opacity': '0'
		});

		$text.css({
			'transform': 'translate3d(0, -50%, 0) rotate(0.01deg)',
			'opacity': '0',
			'transition': '200ms',
			'-webkit-transition': '200ms'
		});
	});

	$(document).on('click', '.slide__close', function () {

		setTimeout(function () {
			clickAnim = false;
		}, 1000);

		$closeBtn.removeClass('show-close');
		$iconTwitter.removeClass('icon-show');

		for (var i = 1, length = $slide.length; i <= length; i++) {if (window.CP.shouldStopExecution(6)){break;}if (window.CP.shouldStopExecution(6)){break;}
			$('.slide--' + i).css({
				'transform': 'translate3d(-' + 100 / numSlides * (numSlides - (i - 1)) + '%, 0, 0)',
				'transition': '1000ms',
				'cursor': 'pointer'
			});
		}
window.CP.exitedLoop(6);

window.CP.exitedLoop(6);


		$text.css({
			'transform': 'translate3d(150px, -40%, 0)',
			'opacity': '0',
			'transition': '200ms',
			'-webkit-transition': '200ms'
		});

		setTimeout(function () {
			$text.css({
				'transform': 'translate3d(0, -50%, 0)'
			});
		}, 200);
	});

	setTimeout(function () {
		$cont.addClass('active');
	}, animDelay);

	setTimeout(function () {
		initialAnim = false;
	}, initialAnimDur + animDelay);
});
//# sourceURL=pen.js
</script>

<main class="py-4">
    @yield('content')
</main>
</body></html>
