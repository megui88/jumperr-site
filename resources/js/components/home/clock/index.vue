<template>
    <div class="position-relative">
        <div class="container">
            <div class="clock">
                <div class="tick h12"></div>
                <div class="tick h1"></div>
                <div class="tick h2"></div>
                <div class="tick h3"></div>
                <div class="tick h4"></div>
                <div class="tick h5"></div>
                <div class="tick h6"></div>
                <div class="tick h7"></div>
                <div class="tick h8"></div>
                <div class="tick h9"></div>
                <div class="tick h10"></div>
                <div class="tick h11"></div>
                <div class="min m1"></div>
                <div class="min m2"></div>
                <div class="min m3"></div>
                <div class="min m4"></div>
                
                <div class="min m6"></div>
                <div class="min m7"></div>
                <div class="min m8"></div>
                <div class="min m9"></div>
                
                <div class="min m11"></div>
                <div class="min m12"></div>
                <div class="min m13"></div>
                <div class="min m14"></div>
                
                <div class="min m16"></div>
                <div class="min m17"></div>
                <div class="min m18"></div>
                <div class="min m19"></div>
                
                <div class="min m21"></div>
                <div class="min m22"></div>
                <div class="min m23"></div>
                <div class="min m24"></div>
                
                <div class="min m26"></div>
                <div class="min m27"></div>
                <div class="min m28"></div>
                <div class="min m29"></div>
                
                <div class="min m31"></div>
                <div class="min m32"></div>
                <div class="min m33"></div>
                <div class="min m34"></div>
                
                <div class="min m36"></div>
                <div class="min m37"></div>
                <div class="min m38"></div>
                <div class="min m39"></div>
                
                <div class="min m41"></div>
                <div class="min m42"></div>
                <div class="min m43"></div>
                <div class="min m44"></div>
                
                <div class="min m46"></div>
                <div class="min m47"></div>
                <div class="min m48"></div>
                <div class="min m49"></div>
                
                <div class="min m51"></div>
                <div class="min m52"></div>
                <div class="min m53"></div>
                <div class="min m54"></div>
                
                <div class="min m56"></div>
                <div class="min m57"></div>
                <div class="min m58"></div>
                <div class="min m59"></div>
                
                <div class="arrow-hour"></div>
                <div class="arrow-minute"></div>
                <div class="arrow-second"></div>
                <div class="arrow-dot"></div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted(){
        
            var updateTime = function () {
                var now = new Date();
                
                var hours = Math.round((now.getHours() % 12) * 30) + Math.floor(now.getMinutes() / 2);
                var minutes = Math.round(now.getMinutes() * 6);
                var seconds = Math.round(now.getSeconds() * 6);
                if (seconds === 0) {
                seconds = 360;
                }
                
                var duration = 200;
                    
                $('.arrow-hour').transit({ rotate: hours }, duration, 'easeInOutQuart');
                $('.arrow-minute').transit({ rotate: minutes }, duration, 'easeInOutQuart');
                if (seconds === 6) {
                $('.arrow-second').transit({ rotate: 6 }, 0, 'easeInOutQuart');
                // Doesn't seem to work on CodePen?
                //.transit({ rotate: seconds }, duration, 'easeInOutQuart');      
                } else {
                $('.arrow-second').transit({ rotate: seconds }, duration, 'easeInOutQuart');
                }
            };  
            
            setInterval(updateTime, 1000);
    }
}
</script>

<style scoped>
.container {
  background: #000;
  position: absolute;  
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}

.clock {
  background-image: linear-gradient( rgb(56, 56, 56), rgb(7, 7, 7));

  transform:scale(2, 2);
  
  width: 200px;
  height: 200px;
  
  border: 10px solid #ebebeb;
  
  border-radius: 200px;
  
  box-shadow: 0px 0px 40px #000 inset;
  
  overflow: auto;
  margin: auto;
  
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

.tick {
  width: 0px;
  height: 0px;
  
  position: absolute;
  
  margin-top: 0px;
  margin-left: 0px;
  
  left: 50%;
  top: 50%;  
}

.tick:after {
  content: '';
  
  background: rgba(255, 255, 255, 0.8);
  -webkit-backface-visibility: hidden;
  
  position: absolute;
  
  width: 4px;
  height: 8px;
  
  left: -2px;
  top: -90px;
}
 
.tick.h1 {
  transform: rotate(30deg);
}

.tick.h2 {
  transform: rotate(60deg);
}

.tick.h3 {
  transform: rotate(90deg);
}

.tick.h4 {
  transform: rotate(120deg);
}

.tick.h5 {
  transform: rotate(150deg);
}

.tick.h6 {
  transform: rotate(180deg);
}

.tick.h7 {
  transform: rotate(210deg);
}

.tick.h8 {
  transform: rotate(240deg);
}

.tick.h9 {
  transform: rotate(270deg);
}

.tick.h10 {
  transform: rotate(300deg);
}

.tick.h11 {
  transform: rotate(330deg);
}

.tick.h12 {
  transform: rotate(0deg);
}

.min {
  width: 0px;
  height: 0px;
  
  position: absolute;
  
  left: 50%;
  top: 50%;
}

.min:after {
  content: '';
  
  border-radius: 2px;
  background: rgba(255, 255, 255, 0.2);
  -webkit-backface-visibility: hidden;
  
  position: absolute;
  
  width: 2px;
  height: 2px;
  
  left: -1px;  
  top: -90px;
}

.min.m1 {
  transform: rotate(6deg);
}
.min.m2 {
  transform: rotate(12deg);
}
.min.m3 {
  transform: rotate(18deg);
}
.min.m4 {
  transform: rotate(24deg);
}
.min.m6 {
  transform: rotate(36deg);
}
.min.m7 {
  transform: rotate(42deg);
}
.min.m8 {
  transform: rotate(48deg);
}
.min.m9 {
  transform: rotate(54deg);
}

.min.m11 {
  transform: rotate(66deg);
}
.min.m12 {
  transform: rotate(72deg);
}
.min.m13 {
  transform: rotate(78deg);
}
.min.m14 {
  transform: rotate(84deg);
}
.min.m16 {
  transform: rotate(96deg);
}
.min.m17 {
  transform: rotate(102deg);
}
.min.m18 {
  transform: rotate(108deg);
}
.min.m19 {
  transform: rotate(114deg);
}

.min.m21 {
  transform: rotate(126deg);
}
.min.m22 {
  transform: rotate(132deg);
}
.min.m23 {
  transform: rotate(138deg);
}
.min.m24 {
  transform: rotate(144deg);
}
.min.m26 {
  transform: rotate(156deg);
}
.min.m27 {
  transform: rotate(162deg);
}
.min.m28 {
  transform: rotate(168deg);
}
.min.m29 {
  transform: rotate(174deg);
}

.min.m31 {
  transform: rotate(186deg);
}
.min.m32 {
  transform: rotate(192deg);
}
.min.m33 {
  transform: rotate(198deg);
}
.min.m34 {
  transform: rotate(204deg);
}
.min.m36 {
  transform: rotate(216deg);
}
.min.m37 {
  transform: rotate(222deg);
}
.min.m38 {
  transform: rotate(228deg);
}
.min.m39 {
  transform: rotate(234deg);
}

.min.m41 {
  transform: rotate(246deg);
}
.min.m42 {
  transform: rotate(252deg);
}
.min.m43 {
  transform: rotate(258deg);
}
.min.m44 {
  transform: rotate(264deg);
}
.min.m46 {
  transform: rotate(276deg);
}
.min.m47 {
  transform: rotate(282deg);
}
.min.m48 {
  transform: rotate(288deg);
}
.min.m49 {
  transform: rotate(294deg);
}

.min.m51 {
  transform: rotate(306deg);
}
.min.m52 {
  transform: rotate(312deg);
}
.min.m53 {
  transform: rotate(318deg);
}
.min.m54 {
  transform: rotate(324deg);
}
.min.m56 {
  transform: rotate(336deg);
}
.min.m57 {
  transform: rotate(342deg);
}
.min.m58 {
  transform: rotate(348deg);
}
.min.m59 {
  transform: rotate(354deg);
}

.arrow-hour {
  width: 0px;
  height: 0px;
  
  position: absolute;
  
  left: 50%;
  top: 50%;
}

.arrow-hour:after {
  content: '';
  
  background-image: linear-gradient(rgb(255,255,255), rgb(192, 192, 192) );
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  -webkit-backface-visibility: hidden;
  
  position: absolute;
  
  width: 6px;
  height: 90px;
  
  left: -3px;
  top: -70px;
}

.arrow-minute {
  width: 0px;
  height: 0px;
  
  position: absolute;
  
  left: 50%;
  top: 50%;
}

.arrow-minute:after {
  content: '';
  
  background-image: linear-gradient(rgb(255,255,255), rgb(192, 192, 192) );
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  -webkit-backface-visibility: hidden;
  
  position: absolute;
  
  width: 6px;
  height: 110px;
  
  left: -3px;
  top: -90px;
}

.arrow-second {
  width: 0px;
  height: 0px;
  
  position: absolute;
  
  left: 50%;
  top: 50%;
}

.arrow-second:after {
  content: '';
  
  background-image: linear-gradient(rgb(255,255,255), rgb(192, 192, 192) );
  
  -webkit-backface-visibility: hidden;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      
  position: absolute;
  
  width: 2px;
  height: 110px;
  
  left: -1px;
  top: -90px;
}

.arrow-dot {
  width: 0px;
  height: 0px;
  
  position: absolute;
  
  left: 50%;
  top: 50%;
}

.arrow-dot:before {
  content: '';
  
  background: #c6c6c6;
  
  position: absolute;
  
  width: 10px;
  height: 10px;
  
  border-radius: 10px;
  
  left: -5px;
  top: -5px;
}
  
.arrow-dot:after {
  content: ''; 
  
  background: #161617;
  
  position: absolute;
  
  width: 4px;
  height: 4px;
  
  border-radius: 4px;
  
  left: -2px;
  top: -2px;  
}

</style>
