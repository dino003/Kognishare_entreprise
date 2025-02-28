<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Error</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
<style type="text/css">
    *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

*::before,
*::after {
    content: '';
  position: absolute;
}

body{
    background: #1B0034;
    background-image: linear-gradient( 135deg, #1B0034 10%, #33265C 100%);
    background-attachment: fixed;
    background-size: cover;

}

.error {
    width: 100%;
    height: auto;
    margin: 50px auto;
    text-align: center;
    margin-bottom: 0;
}

.dracula{
    width: 230px;
    height: 300px;
    display: inline-block;
    margin: auto;
    overflowX: hidden;
}

.error .p {
/*  width: 10%; */
    height: 100%;
    color: #C0D7DD; 
/*  background: red; */
    font-size: 280px;
    margin: 50px;
    display: inline-block;
    font-family: 'Anton', sans-serif;
    font-family: 'Comfortaa', cursive;
    font-family: 'Combo', cursive;
/* font-family: 'Coming Soon', cursive; */
/* font-family: 'Jim Nightshade', cursive; */
}






.con {
  width: 500px;
  height: 500px;
  position: relative;
  margin: 9% auto 0;
animation: ani9 0.7s ease-in-out infinite  alternate ;}

@keyframes ani9 {
    0%{
    transform: translateY(10px);    
  }
  
  100%{
    transform: translateY(30px);    
  }

}


.con > * {
  position: absolute;
  top: 0; left: 0;
}

.hair{
  top: -20px;
  width: 210px;
  height: 200px;
  background: #C0D7DD;
  border-radius: 0 50% 0 50%;
  transform: rotate(45deg);
  background: #33265C;
}
.hair-r{
  left: 20px;
  width: 210px;
  height: 200px;
  background: #C0D7DD;
  border-radius: 0 50% 0 50%;
  transform: rotate(45deg);
  background: #33265C;

}
.head {
  width: 200px;
  height: 200px;
  background: #C0D7DD;
  border-radius: 0 50% 0 50%;
  transform: rotate(45deg);
}
.eye {
 width: 20px; height:20px;
  background: #111113;
  border-radius: 50%;
  top: 15%; left: 11.5%;
  transition: .3s linear;
}
.eye-r{left: 24%;}

.mouth {
  width: 60px; 
  height: 20px;
  background: #840021;
  top: 20%;
  left: 14%;
  border-radius: 50% / 0 0 100% 100%;
}
.mouth::after{

  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 13px solid #FFFFFF;
  left: 10px;
  
}
.mouth::before{
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 13px solid #FFFFFF;
  left: 40px;
}

.blod {
  width: 8px;
  height: 20px;
  background: #840021;
  top: 23%; left: 17%; 
  border-radius: 20px;
}
.blod::after{
   width: 2px;
  height: 10px;
  background: #FFF;
  top: 20%; left: 10%; 
  border-radius: 20px;
  
}
.blod2 {
  top: 23%; left: 20%;
  width: 13px;
  height: 13px;
  border-radius: 50% 50% 50% 0;
  transform: rotate(130deg);
  animation: blod 2s linear infinite;
  opacity: 0;
}
@keyframes blod {
  0%   {opacity: 1;}  
  100%   {background:red; opacity: 0; top:50%;}
  
  
}



/* page-ms */
.page-ms {transform: translateY(-50px);}

.error p.page-msg {
    text-align: center;
    color: #C0D7DD; 
    font-size: 30px;
    font-family: 'Combo', cursive;
    margin-bottom: 20px;
}
button.go-back {
        font-size: 30px;
    font-family: 'Combo', cursive;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: 0.3s linear;
    z-index: 9;
    border-radius: 10px;
    background: #C0D7DD;
    color: #33265C;
    box-shadow: 0 0 10px 0 #C0D7DD;
    margin-top: 20px;
}
button:hover {box-shadow: 0 0 20px 0 #C0D7DD;}

audio {
/*  display: none; */
}
</style>
</head>
<body>
    
<audio controls autoplay loop hidden="hidden">

<source src="http://s0.vocaroo.com/media/download_temp/Vocaroo_s0Jz5C4gpgE0.mp3" type="audio/ogg">
</audio>

<div class="container">
    {{--dd(app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName())--}}

    <div  class="error">
        <div class="page-ms">
            <p class="page-msg"> Cette page n'est pas disponible </p>
            <p>Le lien que vous avez suivi est peut-être rompu, ou la page a été supprimée.</p>

            <button class="go-back"><a href="{{URL::previous()}}">Retour</a></button>



        </div>
        <p class="p">4</p>
        <span class="dracula">          
            <div class="con">
                <div class="hair"></div>
                <div class="hair-r"></div>
                <div class="head"></div>
            <div class="eye"></div>
            <div class="eye eye-r"></div>
            <div class="mouth"></div>
            <div class="blod"></div>
            <div class="blod blod2"></div>
            </div>
        </span>
        <p class="p">4</p>
        


</div>
    

<!--    <p>Auto back to home page</p> -->
    </div>
</body>
</html>
