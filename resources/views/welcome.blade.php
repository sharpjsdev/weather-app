<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Overlock');
body {
	background: #643a7a;
}

.frame {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 400px;
  margin-top: -200px;
  margin-left: -200px;
  border-radius: 2px;
  box-shadow: .5rem .5rem 1rem rgba(0, 0, 0, 0.6);
	background-image: linear-gradient(to top, #40334f, #2f273c, #272232, #201c29);
  color: #4b384c;
  font-family: 'overlock', Helvetica, sans-serif;
  font-weight: 300;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  overflow: hidden;
}

.moon {
  position: absolute;
	width: 6rem;
	height: 6rem;
  top: 45px;
  left: 55px;
  border-radius: 50px;
	background-image: linear-gradient(to left top, #b1b1c5, #928fa3, #746f82, #575162, #3c3444);
	box-shadow: 0 0 3rem fade-out(#B1B1C5, .8);
	animation: rise 1s ease-out;
	&:hover {
		transform: scale(1.2);
		transition: 3s;
	}
}

.moon-crater1 {
	position: absolute;
	width: 1.7rem;
	height: 1.7rem;
	border-radius: 50%;
	border: 4px solid fade-out(#3C3444, .9);
	top: 1rem;
	left: .8rem;
}
.moon-crater2 {
	position: absolute;
	width: 1.4rem;
	height: 1.4rem;
	border-radius: 50%;
	background: fade-out(#3C3444, .85);
	top: 3.4rem;
	left: 2.8rem;
}

.hill-bg-1, .hill-bg-2, .hill-fg-1, .hill-fg-2, .hill-fg-3 {
  position: absolute;
  z-index: 2;
  width: 337px;
  height: 281px;
  top: 201px;
  left: -57px;
  background: #503760;
  border-radius: 50%;
	box-shadow: -.5rem 0 .8rem rgba(0, 0, 0, .3);
}

.hill-bg-2 {
  top: 177px;
  left: 177px;
}

.hill-fg-1, .hill-fg-2, .hill-fg-3 {
  background: #695b93;
  top: 228px;
  left: -137px;
}

.hill-fg-2 {
  top: 251px;
  left: 63px;
}

.hill-fg-3 {
  top: 218px;
  left: 292px;
}

.front {
  position: absolute;
  z-index: 10;
  width: 400px;
  height: 140px;
  left: 0;
  bottom: -53px;
  background: #fff;
	box-shadow: -1rem 0 1rem rgba(0, 0, 0, .5);
	animation: slide 1s;
	transition: 1s ease-in-out;
	z-index: 1000;
	&:hover {
		bottom: 0;
	}
}

@keyframes slide {
	0%, 45% {
		transform: translateY(90px);
	}
	to {
		transform: translateY(0px);
	}
}

.front .temperature {
  float: left;
  margin-left: 20px;
  font-size: 45px;
  line-height: 90px;
}
.front .info {
  float: left;
  margin: 2rem 0 0 3rem;
  font-size: 1.2rem;
  line-height: 20px;
}
.icons {
	position: absolute;
	top: 2rem;
	left: 7rem;
	line-height: 20px;
}
.front .preview {
  float: right;
  font-weight: 400;
  text-align: right;
  font-size: 1.2rem;
  line-height: 20px;
  margin: 25px 20px 0 0;
}
.front .preview td {
  padding: 0 3px;
  text-transform: uppercase;
}

.drop-big-1, .drop-medium-1, .drop-small-1, .drop-medium-2, .drop-small-2, .drop-medium-3, .drop-small-3, .drop-medium-4, .drop-small-4, .drop-medium-5, .drop-small-5, .drop-medium-6, .drop-small-6, .drop-medium-7, .drop-small-7, .drop-medium-8, .drop-small-8, .drop-medium-9, .drop-small-9, .drop-medium-10, .drop-small-10 {
  position: absolute;
  z-index: 20;
  left: 18px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.9s linear 1.04s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-1:before, .drop-medium-1:before, .drop-small-1:before, .drop-medium-2:before, .drop-small-2:before, .drop-medium-3:before, .drop-small-3:before, .drop-medium-4:before, .drop-small-4:before, .drop-medium-5:before, .drop-small-5:before, .drop-medium-6:before, .drop-small-6:before, .drop-medium-7:before, .drop-small-7:before, .drop-medium-8:before, .drop-small-8:before, .drop-medium-9:before, .drop-small-9:before, .drop-medium-10:before, .drop-small-10:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-1:after, .drop-medium-1:after, .drop-small-1:after, .drop-medium-2:after, .drop-small-2:after, .drop-medium-3:after, .drop-small-3:after, .drop-medium-4:after, .drop-small-4:after, .drop-medium-5:after, .drop-small-5:after, .drop-medium-6:after, .drop-small-6:after, .drop-medium-7:after, .drop-small-7:after, .drop-medium-8:after, .drop-small-8:after, .drop-medium-9:after, .drop-small-9:after, .drop-medium-10:after, .drop-small-10:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-1 {
  left: 18px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.5s linear 0.96s infinite;
          animation-fill-mode: both;
}
.drop-medium-1:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-1:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-1 {
  left: 18px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2s linear 0.6s infinite;
          animation-fill-mode: both;
}
.drop-small-1:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-1:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-2 {
  position: absolute;
  z-index: 20;
  left: 56px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.8s linear 0.72s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-2:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-2:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-2 {
  left: 56px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.4s linear 0.12s infinite;
          animation-fill-mode: both;
}
.drop-medium-2:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-2:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-2 {
  left: 56px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2.1s linear 0.32s infinite;
          animation-fill-mode: both;
}
.drop-small-2:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-2:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-3 {
  position: absolute;
  z-index: 20;
  left: 94px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.8s linear 0.36s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-3:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-3:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-3 {
  left: 94px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.4s linear 1.68s infinite;
          animation-fill-mode: both;
}
.drop-medium-3:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-3:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-3 {
  left: 94px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2.1s linear 1.44s infinite;
          animation-fill-mode: both;
}
.drop-small-3:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-3:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-4 {
  position: absolute;
  z-index: 20;
  left: 132px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.9s linear 0.76s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-4:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-4:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-4 {
  left: 132px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.5s linear 1.36s infinite;
          animation-fill-mode: both;
}
.drop-medium-4:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-4:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-4 {
  left: 132px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2s linear 0.6s infinite;
          animation-fill-mode: both;
}
.drop-small-4:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-4:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-5 {
  position: absolute;
  z-index: 20;
  left: 170px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.8s linear 1.32s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-5:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-5:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-5 {
  left: 170px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.5s linear 1.12s infinite;
          animation-fill-mode: both;
}
.drop-medium-5:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-5:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-5 {
  left: 170px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2s linear 0.44s infinite;
          animation-fill-mode: both;
}
.drop-small-5:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-5:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-6 {
  position: absolute;
  z-index: 20;
  left: 208px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.8s linear 0.68s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-6:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-6:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-6 {
  left: 208px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.5s linear 0.2s infinite;
          animation-fill-mode: both;
}
.drop-medium-6:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-6:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-6 {
  left: 208px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2.1s linear 1.08s infinite;
          animation-fill-mode: both;
}
.drop-small-6:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-6:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-7 {
  position: absolute;
  z-index: 20;
  left: 246px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.9s linear 1.8s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-7:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-7:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-7 {
  left: 246px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.4s linear 0.72s infinite;
          animation-fill-mode: both;
}
.drop-medium-7:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-7:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-7 {
  left: 246px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2s linear 1.64s infinite;
          animation-fill-mode: both;
}
.drop-small-7:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-7:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-8 {
  position: absolute;
  z-index: 20;
  left: 284px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.8s linear 0.72s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-8:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-8:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-8 {
  left: 284px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.4s linear 0.32s infinite;
          animation-fill-mode: both;
}
.drop-medium-8:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-8:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-8 {
  left: 284px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2.1s linear 1.36s infinite;
          animation-fill-mode: both;
}
.drop-small-8:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-8:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-9 {
  position: absolute;
  z-index: 20;
  left: 322px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.9s linear 0.44s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-9:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-9:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-9 {
  left: 322px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.4s linear 1.6s infinite;
          animation-fill-mode: both;
}
.drop-medium-9:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-9:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-9 {
  left: 322px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2.1s linear 0.96s infinite;
          animation-fill-mode: both;
}
.drop-small-9:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-9:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

.drop-big-10 {
  position: absolute;
  z-index: 20;
  left: 360px;
  bottom: 90px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #7FC1F9;
          animation: drop 0.9s linear 0.76s infinite;
          animation-fill-mode: both;
          transform-origin: 50% 100%;
}
.drop-big-10:before {
  position: absolute;
  content: '';
  display: block;
  top: -2px;
  left: 1px;
  width: 6px;
  height: 6px;
  background: #7FC1F9;
  border-radius: 3px;
}
.drop-big-10:after {
  position: absolute;
  content: '';
  display: block;
  top: -5px;
  left: 2px;
  width: 4px;
  height: 10px;
  background: #7FC1F9;
  border-radius: 50%;
}

.drop-medium-10 {
  left: 360px;
  opacity: 0.6;
  width: 6px;
  height: 6px;
          animation: drop 1.4s linear 0.68s infinite;
          animation-fill-mode: both;
}
.drop-medium-10:before {
  top: -2px;
  left: 1px;
  width: 4px;
  height: 4px;
}
.drop-medium-10:after {
  top: -4px;
  left: 2px;
  width: 2px;
  height: 6px;
}

.drop-small-10 {
  left: 360px;
  opacity: 0.3;
  width: 4px;
  height: 4px;
          animation: drop 2s linear 1.28s infinite;
          animation-fill-mode: both;
}
.drop-small-10:before {
  top: -2px;
  left: 1px;
  width: 2px;
  height: 2px;
}
.drop-small-10:after {
  top: -3px;
  left: 1px;
  width: 2px;
  height: 4px;
}

@keyframes drop {
  0% {
            transform: translate3d(40px, -320px, 0) scaleX(1) scaleY(1) rotate(17deg);
  }
  85% {
            transform: translate3d(0, 0, 0) scaleX(1) scaleY(1) rotate(17deg);
  }
  100% {
            transform: translate3d(0, 0, 0) scaleX(3) scaleY(0) rotate(0deg);
  }
}
@keyframes rise {
  from {
            transform: translate(-40px, 20px);
  }
  to {
            transform: translate(0, 0px);
  }
}

.proverb {
	font-size: 1.3rem;
	position: absolute;
	top: 60%;
	left: 0%;
	text-align: center;
	width: 100%;
	padding: .5rem 0;
	background: #d1baca;
	height: 100%;
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="input-frm">
                    <input type="text" style="width:28% !important; margin-left: 36% !important; margin-top: 20px !important;" placeholder="Enter City Name" class="form-control input_city">
                    <button id="submit_btn" class="btn btn-success" style="width:28% !important; margin-left: 36% !important; margin-top: 5px !important;">Submit</button>
                </div>
                <div class="frame">
                <div class="moon">
                    <div class="moon-crater1"></div>
                    <div class="moon-crater2"></div>
                </div>
                <div class="hill-bg-1"></div>
                <div class="hill-bg-2"></div>
                <div class="hill-fg-1"></div>
                <div class="hill-fg-2"></div>
                <div class="hill-fg-3"></div>
                    
                <div class="front">
                        <div>
                            <div class="temperature">
                                {{round($info->main->temp)}}°
                            </div>
                            <div class="icons">
                                <i class="fas fa-wind"></i><br/><i class="fas fa-tint"></i>
                            </div>
                            <div>
                                <div class="info">
                                    E {{$info->wind->speed}} km/h <br> {{$info->wind->deg}}%
                                </div>
                                <table class="preview">
                                    <tbody>
                                        <tr>
                                            <td>{{$info->name}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size:15px !important;">Tommorrow</td>
                                            <!-- <td>21° | 9°</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td>Wed</td> -->
                                            <td>{{$info->main->temp + 2}}°</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="proverb">“Frogs croaking in the lagoon,<br/>Means rain will come real soon.”</div>
                    </div>
                <div class="drop-big-1"></div>
                <div class="drop-big-2"></div>
                <div class="drop-big-3"></div>
                <div class="drop-big-4"></div>
                <div class="drop-big-5"></div>
                <div class="drop-big-6"></div>
                <div class="drop-big-7"></div>
                <div class="drop-big-8"></div>
                <div class="drop-big-9"></div>
                <div class="drop-big-10"></div>
                <div class="drop-medium-1"></div>
                <div class="drop-medium-2"></div>
                <div class="drop-medium-3"></div>
                <div class="drop-medium-4"></div>
                <div class="drop-medium-5"></div>
                <div class="drop-medium-6"></div>
                <div class="drop-medium-7"></div>
                <div class="drop-medium-8"></div>
                <div class="drop-medium-9"></div>
                <div class="drop-medium-10"></div>
                <div class="drop-small-1"></div>
                <div class="drop-small-2"></div>
                <div class="drop-small-3"></div>
                <div class="drop-small-4"></div>
                <div class="drop-small-5"></div>
                <div class="drop-small-6"></div>
                <div class="drop-small-7"></div>
                <div class="drop-small-8"></div>
                <div class="drop-small-9"></div>
                <div class="drop-small-10"></div>
                </div>
            </div>
        </div>
        <script>
            var base_url = {!! json_encode(url('/')) !!};
            $("#submit_btn").click(function(){
                var city = $(".input_city").val();
                if(city == ""){
                    alert("Please Enter City Name");
                }
                window.location.href=base_url+"/"+city
                // alert(base_url+"/"+city);
            });
        </script>
    </body>
</html>