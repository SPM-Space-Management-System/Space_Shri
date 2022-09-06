@extends('layouts.app')
@section('content')

dd
<div class="night">
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
</div>
@endsection

<style>


/* body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: radial-gradient(ellipse at bottom, #0D1E31, #111);
  overflow: hidden;
} */

.night{
  position: absolute;/* position: relative; */
  width: 100%;
  height: 100%;
  transform: rotateZ(40deg);
}

.star{
  position: absolute;
  left: 50%;
  top: 50%;
  height: 4px;
  background: linear-gradient(-45deg, #5F91FF, rgba(0, 0, 255, 0));
  border-radius: 999px;
  filter: drop-shadow(0 0 6px #699BFF);
  animation: tail 3s ease-in-out infinite,
             falling 3s ease-in-out infinite;
}

@keyframes tail{
  0%{
    width: 0;
  }
  30%{
    width: 100px;
  }
  100%{
    width: 0;
  }
}

@keyframes falling{
  0%{
    transform: translateX(0);
  }
  100%{
    transform: translateX(300px);
  }
}

.star::before, .star::after{
  content: '';
  position: absolute;
  top: calc(50% - 2px);
  right: 0;
  height: 4px;
  background: linear-gradient(-45deg, rgba(0, 0, 255, 0), #5F91FF, rgba(0, 0, 255, 0));
  border-radius: 100%;
  transform: translateX(50%) rotateZ(45deg);
  animation: shining 3s ease-in-out infinite;
}

@keyframes shining{
  0%{
    width: 0;
  }
  50%{
    width: 30px;
  }
  100%{
    width: 0;
  }
}

.star::after{
  transform: translateX(50%) rotateZ(-45deg);
}

.star:nth-child(1){
  top: calc(50% - 100px);
  left: calc(50% - 450px);
  animation-delay: 1s;
}

.star:nth-child(1)::before, .star:nth-child(1)::after{
  animation-delay: 1s;
}

.star:nth-child(2){
  top: calc(50% - 50px);
  left: calc(50% - 200px);
  animation-delay: 1.2s;
}

.star:nth-child(2)::before, .star:nth-child(2)::after{
  animation-delay: 1.2s;
}

.star:nth-child(3){
  top: calc(50% - 0px);
  left: calc(50% - 150px);
  animation-delay: 1.4s;
}

.star:nth-child(3)::before, .star:nth-child(3)::after{
  animation-delay: 1.4s;
}

.star:nth-child(4){
  top: calc(50% - -50px);
  left: calc(50% - 200px);
  animation-delay: 1.6s;
}

.star:nth-child(4)::before, .star:nth-child(4)::after{
  animation-delay: 1.6s;
}

.star:nth-child(5){
  top: calc(50% - -100px);
  left: calc(50% - 250px);
  animation-delay: 1.8s;
}

.star:nth-child(5)::before, .star:nth-child(5)::after{
  animation-delay: 1.8s;
}



.star:nth-child(6){
  top: calc(50% - -150px);
  left: calc(50% - 250px);
  animation-delay: 2.0s;
}

.star:nth-child(6)::before, .star:nth-child(5)::after{
  animation-delay: 2.0s;
}
.star:nth-child(7){
  top: calc(50% - -200px);
  left: calc(50% - 250px);
  animation-delay: 2.2s;
}

.star:nth-child(7)::before, .star:nth-child(5)::after{
  animation-delay: 2.2s;
}
.star:nth-child(8){
  top: calc(50% - -250px);
  left: calc(50% - 250px);
  animation-delay: 2.4s;
}

.star:nth-child(8)::before, .star:nth-child(5)::after{
  animation-delay: 2.4s;
}
.star:nth-child(9){
  top: calc(50% - -300px);
  left: calc(50% - 250px);
  animation-delay: 2.6s;
}

.star:nth-child(9)::before, .star:nth-child(5)::after{
  animation-delay: 2.6s;
}
.star:nth-child(10){
  top: calc(50% - -350px);
  left: calc(50% - 250px);
  animation-delay: 2.8s;
}

.star:nth-child(10)::before, .star:nth-child(5)::after{
  animation-delay: 2.8s;
}

    </style>