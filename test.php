<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.scss"> -->
  <title>Document</title>
</head>
<style>
  body {
    margin: 0;
    overflow: hidden;
  }

  .background {
    width: 100vw;
    height: 100vh;
    background: #ffffff;
  }

  .background span {
    width: 20vmin;
    height: 20vmin;
    border-radius: 20vmin;
    backface-visibility: hidden;
    position: absolute;
    animation-name: move;
    animation-duration: 6s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
  }

  .background span:nth-child(1) {
    color: #FF9C00;
    top: 76%;
    left: 98%;
    animation-duration: 10.5s;
    animation-delay: -10.6s;
    transform-origin: -22vw 11vh;
    box-shadow: -40vmin 0 5.6001373415vmin currentColor;
  }

  .background span:nth-child(2) {
    color: #FFE0AF;
    top: 28%;
    left: 43%;
    animation-duration: 13.6s;
    animation-delay: -13.1s;
    transform-origin: 17vw -6vh;
    box-shadow: -40vmin 0 11.1302567523vmin currentColor;
  }

  .background span:nth-child(3) {
    color: #ffac27;
    top: 64%;
    left: 61%;
    animation-duration: 10.3s;
    animation-delay: -14.4s;
    transform-origin: -20vw 20vh;
    box-shadow: -40vmin 0 5.6353925383vmin currentColor;
  }

  .background span:nth-child(4) {
    color: #FF9C00;
    top: 40%;
    left: 56%;
    animation-duration: 11.4s;
    animation-delay: -13.9s;
    transform-origin: -9vw 10vh;
    box-shadow: -40vmin 0 8.2541629029vmin currentColor;
  }

  .background span:nth-child(5) {
    color: #FFE0AF;
    top: 60%;
    left: 96%;
    animation-duration: 12.2s;
    animation-delay: -10.8s;
    transform-origin: 14vw -23vh;
    box-shadow: -40vmin 0 11.0195712291vmin currentColor;
  }

  .background span:nth-child(6) {
    color: #FFE0AF;
    top: 5%;
    left: 15%;
    animation-duration: 15.5s;
    animation-delay: -14.1s;
    transform-origin: 3vw 17vh;
    box-shadow: 40vmin 0 5.0884489487vmin currentColor;
  }

  .background span:nth-child(7) {
    color: #FF9C00;
    top: 24%;
    left: 64%;
    animation-duration: 15.7s;
    animation-delay: -7.9s;
    transform-origin: 3vw -2vh;
    box-shadow: 40vmin 0 14.3339658595vmin currentColor;
  }

  .background span:nth-child(8) {
    color: #FF9C00;
    top: 100%;
    left: 71%;
    animation-duration: 14.2s;
    animation-delay: -10.3s;
    transform-origin: 9vw 20vh;
    box-shadow: 40vmin 0 13.0603701033vmin currentColor;
  }

  .background span:nth-child(9) {
    color: #ffac27;
    top: 73%;
    left: 16%;
    animation-duration: 11.2s;
    animation-delay: -14.8s;
    transform-origin: 15vw -10vh;
    box-shadow: -40vmin 0 10.3687763667vmin currentColor;
  }

  .background span:nth-child(10) {
    color: #FFE0AF;
    top: 70%;
    left: 84%;
    animation-duration: 15.6s;
    animation-delay: -7.4s;
    transform-origin: 13vw 22vh;
    box-shadow: -40vmin 0 7.0460646061vmin currentColor;
  }

  .background span:nth-child(11) {
    color: #FFE0AF;
    top: 73%;
    left: 13%;
    animation-duration: 11s;
    animation-delay: -3.6s;
    transform-origin: 19vw -6vh;
    box-shadow: 40vmin 0 11.4102198378vmin currentColor;
  }

  .background span:nth-child(12) {
    color: #FF9C00;
    top: 35%;
    left: 25%;
    animation-duration: 13.7s;
    animation-delay: -4.7s;
    transform-origin: -22vw 18vh;
    box-shadow: 40vmin 0 6.8087923277vmin currentColor;
  }

  .background span:nth-child(13) {
    color: #FFE0AF;
    top: 44%;
    left: 80%;
    animation-duration: 13.5s;
    animation-delay: -8.7s;
    transform-origin: -1vw -21vh;
    box-shadow: -40vmin 0 12.257779683vmin currentColor;
  }

  .background span:nth-child(14) {
    color: #ffac27;
    top: 60%;
    left: 17%;
    animation-duration: 11s;
    animation-delay: -0.5s;
    transform-origin: 1vw -19vh;
    box-shadow: -40vmin 0 9.7442148846vmin currentColor;
  }

  .background span:nth-child(15) {
    color: #FFE0AF;
    top: 47%;
    left: 50%;
    animation-duration: 12.4s;
    animation-delay: -13.2s;
    transform-origin: -13vw 19vh;
    box-shadow: -40vmin 0 10.3412382711vmin currentColor;
  }

  .background span:nth-child(16) {
    color: #FF9C00;
    top: 84%;
    left: 7%;
    animation-duration: 10.3s;
    animation-delay: -9.5s;
    transform-origin: 23vw 25vh;
    box-shadow: -40vmin 0 10.1517278513vmin currentColor;
  }

  .background span:nth-child(17) {
    color: #ffac27;
    top: 22%;
    left: 40%;
    animation-duration: 12.9s;
    animation-delay: -4s;
    transform-origin: -23vw -11vh;
    box-shadow: -40vmin 0 10.0748226213vmin currentColor;
  }

  .background span:nth-child(18) {
    color: #FFE0AF;
    top: 85%;
    left: 30%;
    animation-duration: 13.4s;
    animation-delay: -1.9s;
    transform-origin: -20vw -12vh;
    box-shadow: 40vmin 0 8.7112742236vmin currentColor;
  }

  .background span:nth-child(19) {
    color: #FFE0AF;
    top: 95%;
    left: 11%;
    animation-duration: 13.5s;
    animation-delay: -10.1s;
    transform-origin: -3vw -2vh;
    box-shadow: -40vmin 0 13.7135943919vmin currentColor;
  }

  .background span:nth-child(20) {
    color: #ffac27;
    top: 58%;
    left: 31%;
    animation-duration: 15.3s;
    animation-delay: -11.4s;
    transform-origin: -2vw 7vh;
    box-shadow: -40vmin 0 8.4292644476vmin currentColor;
  }

  @keyframes move {
    100% {
      transform: translate3d(0, 0, 1px) rotate(360deg);
    }
  }
</style>

<body class="background">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <h1 style="font-size: x-large; position:absolute; z-index: 1000;">done</h1>
</body>

</html>