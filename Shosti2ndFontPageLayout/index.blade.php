<html>
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css"/>
<!--     <link rel="stylesheet" href="Ngsoftworks.css"/>-->
    <link rel="shortcut icon" href="images/logo.png" />
    <title>Shosti</title>
<style>
    body{
            margin-right:0;
            margin-left:0;
            margin-top:0;
            margin-bottom:0;
            padding-right:0;
            padding-left:0;
            width: 100%;
            cursor:url("images/finger_3.png"),auto;
            overflow-x: hidden;
            -webkit-user-select: none; /* Safari */        
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* IE10+/Edge */
            user-select: none; /* Standard */
            overflow-x: hidden;
            
        }
    .main{
        
            height:auto;
            width: 100%;
            display: grid;
            grid-template-columns: 100%;
            grid-gap: 10px;
            box-sizing: border-box;
        
        
           position: relative;
        
        }
     .cover{
        
            position:relative;
            width:100%;
            height:auto;
            display: flex;
            flex-direction: row;
        
        }
    
/*
    .banner{
    
        height:inherit;
        width: 100%;
        background: url(images/shosti2.PNG);
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        
    }
*/
    .nav-wrapper{
        
        position:fixed;
        width:100%;
        background:  rgba(255,255,255,.1);
        height: 70px;
        padding-top:10px;
        padding-bottom:10px;
        z-index: 4;
    
    }   
    .nav{
        width:100%;
        height: 50px;
        
        position:relative;
    }
    .nav-links{
        position: absolute;
        
        width:80%;
/*        background-color: grey;*/
        
        height: 50px;
        margin:0px;
        right:0;
        align-items: center;
        margin-left: auto;
        padding: 0;
        flex-direction: row;
        display: flex;
        justify-content: space-around;
    }
    .nav-links li a{
        color: white;
        text-decoration: none;
        font-size: 20px;
        font-weight: 600;
        line-height: 50px;
        
        
        
        
        
        
    }
    
    .nav-links li{
        
        list-style: none;
        width: inherit;
        height:inherit;
        margin-left: 15px;
        overflow: hidden;
          }
    
/* navbar button hover effect   */
    .btn-item{
        
        background:  rgba(255,255,255,0);
        
        color:white;
        border-left: 2px solid;
        border-right: 2px solid;
        
        transition: all 0.2s ease;
        
        display: block;
        width: inherit;
        height: 90%;
        
        text-align: center;
        

/*
        clip-path:circle(100% at 29% 71%); 
        -webkit-clip-path:circle(100% at 29% 71%);
        font-weight: 500;
*/
        
        
    }
    
    .btn-item:hover{
        
        
        
        
        
        background:  rgba(255,255,255,.2);
        transform:scaleX(.9);
        
        transform-style: preserve-3d;
/*
        transform: rotateX(15deg);
        box-shadow: 0 15px 15px lightblue;
*/
        box-shadow: 0 15px 15px rgba(255,255,255,.01);
        transition: all 1s ease-out;
        transform-origin: center;
    }
    html[data-useragent*='Android'] body {
    background-color: silver;
        border-top: 1em solid blue;
}
/* navbar button hover effect   */
    @media screen and (max-width: 768px){
        
/*        responsible for bubble effect*/
       /*        responsible for bubble effect*/
        .drawer{
            margin-right:10%; 
            margin-left:10%; 
            margin-bottom: auto;
            margin-top: auto;
            width:90%;
            height: inherit;
        }
        .nav-links{
            position:fixed;
            flex-direction:column;
            width:90%;
            height:75vh;
            color:white;
            top:12vh;
            align-content: center;
            clip-path:circle(0 at 90% -10%); 
            -webkit-clip-path:circle(0 at 90% 10%);
            align-content: center;
            transition: all 1s ease-out;
            text-align: center;
            opacity: 0.9;
            right:10%;
            left:10%;
            
            padding-top:50px;
            padding-bottom:50px;
            
        }
        .btn-item{
           margin-top:2px; 
           width: 90%;
           
        }
        .btn-item:hover{
        
/*        width:97%;*/
/*        border-color: dimgrey;*/
/*        transform: rotateY(15deg);*/
        transform: scale(.97);
        box-shadow: -15px 0 15px #187975;

        transition: all 1s ease-out;
        }
        .nav-links.open{
            clip-path:circle(1000px at 90% 10%); 
            -webkit-clip-path:circle(1000px at 90% 10%);
            transition: all 1s ease-out;
/*            background: rgba(255,255,255,.1);*/
            background: #165e5d;
            
        }
        /*        responsible for bubble effect*/
        .line{
            width:30px;
            height:3px;
            background:white;
            margin: 5px;
            
        }
        .hamburger{
            position: absolute;
            cursor: pointer;
            right: 5%;
            top:25%;
            transform:translate(-5%,50%);
            z-index: 2;
            display: block;
            
        }
        .hamburger div{
            transition: all 0.3s ease;
        }
        
        .nav-links li{
            
            opacity:0;
        }
       .nav-links li a{
            font-size: 25px;
        }
        .nav-links li:nth-child(1){
            transition: all 0.5 2s;
        }
        .nav-links li:nth-child(2){
            transition: all 0.5 4s;
        }
        .nav-links li:nth-child(3){
            transition: all 0.5 6s;
        }
        .nav-links li:nth-child(4){
            transition: all 0.5 8s;
        }
        .nav-links li:nth-child(5){
            transition: all 0.5 10s;
        }
        .nav-links li.fade{
            opacity:1;
        }
        .toggle .line1{
            transform: rotate(-45deg) translate(-5px,6px);
        }
        .toggle .line2{
            opacity: 0;
        }
        .toggle .line3{
            transform: rotate(45deg) translate(-5px,-6px);
        }
    } 
    
    
    .services{
    
        position: relative;
        width:100%;
        height:900px;
        padding:200px;
    
    }    
/*
    .row svg:hover{
    
        background-color:#00bfa6;
        background-color:greenyellow;
    }
*/
    
@keyframes slide {
from{background-position:0 0}
to{background-position:1920px 0}
}
@-webkit-keyframes slide {
from{background-position:0 0}
to{background-position:1920px 0}
}
.service-block-one a {text-decoration:none}

@keyframes slide {
from{background-position:0 0}
to{background-position:1920px 0}
}
@-webkit-keyframes slide {
from{background-position:0 0}
to{background-position:1920px 0}
}
.service-block-one .inner-box{
    position:relative;
    display:block;
    overflow:hidden;
    text-align:center;
/*    background:#353535;*/
    background:#187975;
    padding:50px 20px 36px;
    height:auto;}
.service-block-one .inner-box:before{
    position:absolute;
    content:'';width:100%;
    height:0;left:0;
    bottom:0;
    right:0;
    transition:all 500ms ease
    }




.service-block-one .inner-box h3{
    position:relative;
    display:block;
    font-size:22px;
    line-height:30px;
    color:#fff;
    font-weight:800;
    margin-bottom:40px;
    }
.service-block-one .inner-box h3 a{
    display:inline-block;
    color:#fff
    }
.service-block-one .inner-box p{
    position:relative;
    color:#fff;
    margin-bottom:33px
    }
.service-block-one .inner-box .theme-btn{
    padding:12px 25px
    }
.service-block-one .inner-box:hover .theme-btn{
    background-color:dimgrey;
    
    }
.service-section .sec-title{
    margin-bottom:70px
    }
.service-section .sec-title span{
    margin-bottom:21px
    }
.service-block-one .inner-box .icon-box{
    color:#da292a
    }

.theme-btn{
    position:relative;
    display:inline-block;
    font-size:15px;
    background:#da292a;
    line-height:26px;
    font-weight:700;
    font-family:'Rubik',sans-serif;
    color:#fff!important;
    text-align:center;
    cursor:pointer;
    border-radius:5px;
    z-index:1;
    transition:all 500ms ease;}
.theme-btn:before{position:absolute;content:'';
    background:#1c1d1f;
    width:100%;
    height:100%;
    border-radius:5px;
    z-index:-1;
    top:0;
    left:0;
    right:0;
    bottom:0;
    -webkit-transform:scaleX(0);
    transform:scaleX(0);
    -webkit-transform-origin:50% 100%;
    transform-origin:50% 100%;
    -webkit-transition-property:transform;
    transition-property:transform;
    -webkit-transition-duration:.5s;
    transition-duration:.5s;
    -webkit-transition-timing-function:ease-out;
    transition-timing-function:ease-out}

.theme-btn i{
    position:relative;
    top:2px;font-size:20px;
    margin-left:40px;
    }
@media(max-width:1024px) {
  .service-block-one .inner-box{padding:30px}
  .service-block-one{margin-bottom:15px}
  .theme-btn{padding:10px 20px}
}
    
    
    
    
/*
    .reviews-wrapper{
        position: relative;
        width:100%;
        height:auto;
        padding:0;
        margin:0;
}    
   
.reviews {
    
        position: relative;
        width:100%;
        height:600px;
        grid-template-columns: auto;
        grid-gap: 10px;
        box-sizing: border-box;
        margin-left:auto;
        margin-right:auto;
        display: grid;
        align-content: center;
        padding: 5px;
           
    
}
.reviews ul h1{
    
        position: absolute;
        height:30px;
        top:82%;
        z-index: 20;
        grid-template-columns: auto auto auto auto;
        grid-gap: 10px;
        box-sizing: border-box;
        display: grid;
        width:20%;
        text-align: center;
        
           
    
}
 .reviews-wrapper h1:nth-child(1){
            
        width: 100%; text-align: center; top:0px;z-index:2;position:absolute; margin:100px;
     
            
} 
    
        .reviews ul{
        top:300px;
    }

    .reviews ul:nth-child(2) li{
        position: absolute;
        left:0px;
        top:600px;
                bottom: 260px;
        background-image:url(images/next.png);
        background-size: contain;
        width:34px;
        height: 34px;
        z-index: 3;
        transform: scaleX(-1);
        }
    .reviews ul:nth-child(6) li{
        position: absolute;
        right:0px;
        top:600px;
        background-image: url(images/next.png);
        
        background-size: contain;
        width:34px;
        height: 34px;
        z-index: 3;
    }
    
    .reviews ul:nth-child(3){
    
        background-color:whitesmoke;
        background-color:#187975;
        background-blend-mode:lighten;
        grid-template-columns: auto auto auto auto;
        grid-gap: 10px;
        box-sizing: border-box;
        display: grid;
        width:80%;
        height:inherit;
        list-style: none;
        padding:0;
        position:absolute;
        
        margin-left: 10%;
        margin-right:10%;
        border-radius: 5px;

        padding-top:100px;
        
     }

    
    .reviews ul:nth-child(4){
    
        background-color: whitesmoke;
        grid-template-columns: auto auto auto auto;
        grid-gap: 10px;
        box-sizing: border-box;
        display: grid;
        width:80%;
        height:inherit;
        list-style: none;
        padding:0;
        position:absolute;
        
        margin-left: 10%;
        margin-right:10%;
        border-radius: 5px;
  
    }

    .reviews ul:nth-child(5){
    
        background-image: white;
        background-color: white;
        grid-template-columns: auto auto auto auto;
        grid-gap: 5px;
        box-sizing: border-box;
        display: grid;
        width:80%;
        height:inherit;
        list-style: none;
        padding:0;
        position: absolute;
        
        margin-left: 10%;
        margin-right:10%;
            
        border-radius: 5px; 
    
     }
    
    
       .reviews ul:nth-child(3) li:hover::before,.reviews ul:nth-child(4) li:hover::before,.reviews ul:nth-child(5) li:hover::before,.reviews ul:nth-child(6) li:hover::before{
    
        transform: scaleY(1);
        
        transition: all 1s;

    
    }
    
    
    .reviews ul:nth-child(3) li:hover::after,.reviews ul:nth-child(4) li:hover::after,.reviews ul:nth-child(5) li:hover::after,.reviews ul:nth-child(6) li:hover::after{
    
        transform: scaleY(1);
        
        transition: all 1s;

    
    }
    
    
    
    
    .active-review-slide{
    
        z-index: 2;
        animation-name: reviewsSlideChange;
        animation-duration: 1s;
        
        transform: translate(100);
        animation-iteration-count:1;
        
    }
    .under-review-slide{
        
        z-index: 1;
       
    }
    .reviews ul li{
    

        
        width:90%;
        height:100%;
        margin-left:5%;
        margin-right:5%;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        
        
     } 
*/
/*    first row starts*/    
    
/*    first slides starts*/

/* here .reviews:nth-child(1) defines this is row 1. ul:nth-child(3) means the first slide and li is the individual elements meaning pictures itself from left to right*/    
     

    
    
/*
    .reviews ul:nth-child(3) li:nth-child(1){
        background-image: url("images/1-removebg-preview.png");

     }
*/

    
    
/*
    .reviews ul:nth-child(3) li:nth-child(2){
        background-image: url("images/1_2.jpeg");
    
    }
    .reviews ul:nth-child(3) li:nth-child(3){
        
        background-image: url("images/352_8_1280.jpg");
     }
   
    .reviews ul:nth-child(3) li:nth-child(4){
        background-image: url("images/8_960.jpg");
    
    }
*/
    
    
    /*    first slides ends*/
    
    
    /*    second slides starts*/
    
    
/*
    .reviews ul:nth-child(4) li:nth-child(1){
        background-image: url("images/splash_6.png");
    
    }
    .reviews ul:nth-child(4) li:nth-child(2){
        background-image: url("images/shosti2.png");
    
    }
    .reviews ul:nth-child(4) li:nth-child(3){
        
        background-image: url("images/finger_2.png");
    
    }
   
    .reviews ul:nth-child(4) li:nth-child(4){
        background-image: url("images/slide-image-1.png");
    
    }
*/
    
    
    
    
 @media screen and (max-width: 768px){    
    .reviews ul:nth-child(3),.reviews ul:nth-child(4),.reviews ul:nth-child(5),.reviews ul:nth-child(6){
        
        display: grid;
        grid-template-columns: auto;
        grid-gap: 10px;
        box-sizing: border-box;
        width:80%;
        margin-left:10%;
        margin-right:10%;
        display: grid;
        overflow-y: hidden;
        
        }  
     


/*
.reviews{
        
    margin-top:900px;
    width:100%;
    height:auto;
    height:auto;
        
}  
            
            
.reviews ul:nth-child(3) li{
        
    
    width:90%;
    
    
}   
        
.reviews-rows{
        
    
    width:100%;
    height:auto;
    
        
}   
.reviews ul{
  
   right:0;
   left:0;

}        
.reviews ul:nth-child(3){
        
    
    width:90%;
    margin-left:5%;
    margin-right:5%;
    height:1100px;
    margin-top:-200px;
        
}
.reviews ul:nth-child(4){
        
    margin-top:-200px;
    width:90%;
    margin-left:5%;
    margin-right:5%;
    height:1100px;
    margin-top:-200px;
        
}
.reviews ul:nth-child(5){
        
    
    margin-top:-200px;
    width:90%;
    margin-left:5%;
    margin-right:5%;
    height:1100px;
    margin-top:-200px;
        
} 
*/
        

.contacts-wrapper{
    
        top:900px;
        
    
}  
   
    
}
    
    
/*     contact form starts   */   
.contacts-wrapper{
    
        margin-top:400px;
        position:relative; 
        height:600px;
        width:100%;
        background: linear-gradient(135deg,#ffffff, #165e5d);
    
}       
.contacts{
           display:flex; 
           flex-direction: row;
           width:100%; 
           margin-top:200px;
           height:60%;
}    
  @media screen and (max-width: 768px){   
      
.contacts-wrapper{
    
      height:auto;
    
}        
      
.contacts{
           display:flex; 
           flex-direction: column;
           width:100%; 
           margin-top:200px;
           height:auto;
           margin-bottom:200px;
           justify-content: center;
}

      
.email-us{
           flex:1;height:50%;width:70%;justify-content: center;margin-left:auto;margin-right:auto;margin-top: 15%;
    
}    
      
}
    
    
.contact-us{
           flex:1;height:100%;width:100%;text-align: center;
}
.inputGroup {
  position: relative;
  margin-bottom: 30px;
}

.inputGroup label {
  position: absolute;
  top: 0;
  left: 5px;
  pointer-events: none;
  transition: all 0.3s ease;
  font-size: 16px;
  font-family: Trebuchet MS;
  color: white;
  font-weight: 500;
  text-transform: uppercase;
}

.inputGroup input,
.inputGroup textarea {
  display: block;
  width: 280px;
  border: none;
  border-bottom: 1px solid #757575;
  left: 25px;
  padding: 5px;
  font-family: Trebuchet MS;
  background: none;
  color: #ccc;
}

.inputGroup input:focus ~ label,
.inputGroup input:valid ~ label,
.inputGroup textarea:focus ~ label,
.inputGroup textarea:valid ~ label {
  top: -20px;
  transition: all 0.3s ease;
  font-size: 13px;
}

.inputGroup input:focus ~ .inputBar:before,
.inputGroup input:focus ~ .inputBar:after,
.inputGroup textarea:focus ~ .inputBar:before,
.inputGroup textarea:focus ~ .inputBar:after {
  width: 50%;
}

.inputGroup textarea {
  height: 100px;
  width: 280px;
  overflow: auto;
  resize: none;
}

.inputGroup .inputBar {
  position: relative;
  display: block;
  width: 290px;
}

.inputGroup .inputBar:before,
.inputGroup .inputBar:after {
  content: "";
  display: block;
  position: absolute;
  bottom: 0;
  width: 0;
  background: white;
  height: 2px;
  transition: all 0.2s ease;
}

.inputGroup .inputBar:after {
  right: 50%;
}

.inputGroup .inputBar:before {
  left: 50%;
}

button {
  background-color: white;
  border: none;
  padding: 15px 0;
  margin: 0;
  width: 290px;
  color: #3c3c3c;
  text-transform: uppercase;
  font-family: Trebuchet MS;
  font-size: 15px;
  border-radius: 5px;
  box-shadow: 0 6px #a1a1a1;
  position: relative;
  cursor: pointer;
}

.contact-formn-button:hover {
  box-shadow: 0 4px #a1a1a1;
  top: 2px;
}

.contact-formn-button:active {
  top: 6px;
  box-shadow: 0 0;
}

 /*     contact form ends   */      
</style>   
    
</head>  
    
<body>
    
    <div class="main">
        <div class="cover">
        <div class="nav-wrapper">      
<div class="nav">
     <img class="logo" style="position: absolute;width:auto;height:inherit; z-index: 4;left: 30px;" src="images/logo.png">
     
     <div class="hamburger">
           <div class="line line1"></div>
           <div class="line line2"></div>
           <div class="line line3"></div>
       </div>
       <div class="drawer">
           
           <ul class="nav-links">
               <li><a class="btn-item homeBtn" href="#">Home</a></li>
               <li><a class="btn-item servicesBtn" href="#">Services</a></li>
               <li><a class="btn-item reviewsBtn" href="#">Reviews</a></li>
               <li><a class="btn-item contactsBtn" href="#">Contacts</a></li>
            </ul>
       </div>
</div>  
</div> 
        <img class="banner" src="images/shosti2.png" style="width:100%;" data-aos="fade-up;" aos-duration="5000" data-aos-mirror="true">
        </div> 
  
    <div class="service-wrapper" style="z-index: 1;" data-aos="fade-up;" aos-duration="5000" data-aos-mirror="true">    
   <h2 style="width:100%;text-align: center;
              margin-top:100px;nmargin-bottom:100px; color:#187975;">Services</h2>         
    <div class="row services" style="padding-left: 10%;padding-right: 10%;margin:0; padding-top:70px;">
    <!--  Single Starts  -->
    <div class="col-md-6 service-block">
      <div class="service-block-one">
        <div class="inner-box">
          <i class="fa fa-user-md" style="color:red;font-size:40px;"></i>
            


          <h3><a href="#">Nursing Assistant</a></h3>
          <p>We provide experienced Nursing Assistants for taking care of a sick or elderly person and help doing regular activities, including feeding, taking bath etc.</p>
            
          <svg id="ccdb08d7-40f3-45f2-8ef6-c6a673654779" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="400" viewBox="0 0 1167.61 862.87"><defs><linearGradient id="cb66075b-2ebe-455c-893b-1def13a8d59c" x1="481.48" y1="854.12" x2="481.48" y2="276.47" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="gray" stop-opacity="0.25"/><stop offset="0.54" stop-color="gray" stop-opacity="0.12"/><stop offset="1" stop-color="gray" stop-opacity="0.1"/></linearGradient><linearGradient id="b7415561-023b-44da-badb-9b3453976a8a" x1="878.34" y1="879.41" x2="878.34" y2="264.07" xlink:href="#cb66075b-2ebe-455c-893b-1def13a8d59c"/></defs><title>doctors</title><path d="M92.37,356.76H193.85V495.09H99.79c-.24,1.43-.48,2.85-.75,4.28h94.81V610.91c-.16,0-.32-.12-.47-.18q-4-1.59-8-3.37c-.57-.26-1.13-.53-1.71-.78q-4-1.89-8-4c-.93-.49-1.86-1-2.77-1.52A166.43,166.43,0,0,1,133,570c-.35-.33-.67-.69-1-1-1.62-1.76-3.21-3.54-4.75-5.36-.58-.67-1.14-1.35-1.71-2-1.82-2.22-3.58-4.52-5.28-6.83-.26-.35-.5-.69-.75-1a147.72,147.72,0,0,1-17.2-31.1c-.14-.33-.27-.69-.4-1-1.38-3.5-2.63-7.05-3.71-10.67-.46-1.51-.91-3-1.29-4.57-.14-.45-.25-.91-.37-1.36-5.62-22.15-6.27-45.17-6.27-68.08q0-4,0-8Q90.39,415,90.6,401q.08-3.6.15-7.23.21-9.19.6-18.42c.06-1.7.14-3.41.23-5.1q.06-1.47.15-2.94Q92,362,92.37,356.76Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M193.85,202.74H138.18A423.75,423.75,0,0,1,167.79,162c8.28-10.16,17-20.06,26.06-29.6Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M193.85,207V352.48H92.69c0-.42.06-.85.1-1.27.09-1.15.18-2.29.28-3.44.1-1.34.23-2.68.36-4s.26-2.92.42-4.37.29-2.92.45-4.37.32-2.9.5-4.34.34-2.9.54-4.34c.15-1.19.3-2.39.47-3.59.23-1.69.47-3.38.72-5.06,0-.26.08-.51.12-.76a348.93,348.93,0,0,1,7.44-36.52,270.41,270.41,0,0,1,12.55-37A277.87,277.87,0,0,1,135.52,207Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M218.09,356.76V495.09H434.85V356.76Zm0,142.61v118.8c1.24.25,2.46.5,3.69.71,1.65.32,3.31.61,5,.86l1,.14c.66.11,1.33.2,2,.28,1.67.24,3.34.42,5,.58.78.08,1.59.14,2.38.21l1.93.14h0c1.05.08,2.09.14,3.13.18.64,0,1.28.05,1.93.07s1,0,1.52,0l1.89,0c.86,0,1.72,0,2.57,0h1.1c.86,0,1.72,0,2.57-.08h.05c.6,0,1.19,0,1.79-.07a4.38,4.38,0,0,0,.51,0c.5,0,1,0,1.48-.06a2.09,2.09,0,0,1,.34,0c1.11-.07,2.23-.16,3.36-.26s2.2-.22,3.33-.34l2.27-.28a199.13,199.13,0,0,0,27.45-5.84c20.23-5.64,40-13.53,60.22-19.3,26.12-7.45,55-11.12,80.24-2.05V499.37ZM434.85,202.74V18.58a278.53,278.53,0,0,0-70.42,8.25c-54.89,13.79-104.18,43.7-146.34,81.9v94H229V207H218.09V352.48H434.85V207H273.63v-4.28Zm278.48-62.21c-13.58-.48-27.08-4.77-39.3-11.42-23.34-12.69-42-32.31-62.84-48.85-43.3-34.47-97-55.28-152.09-60.44V202.74H768.51l.77-.81Zm28.19-5,29.89,32.81V126.9C761.35,128.17,752.59,131.12,741.52,135.49Zm29.89,512.14V499.37H707.67c-.16-.63-.34-1.27-.54-1.91.19.64.36,1.28.53,1.91H459.1V606.61c2.36,1.75,4.69,3.6,7,5.46h0q3.74,3.06,7.43,6.19l2.48,2.05c1.19,1,2.4,2,3.6,2.95q3.61,2.91,7.27,5.76,1.83,1.44,3.68,2.83a502.09,502.09,0,0,0,61.64,40.31c4.82,2.69,9.69,5.28,14.59,7.81q4.89,2.52,9.85,4.94,7.44,3.63,15,7s0,0,0,0a550.6,550.6,0,0,0,146,42.52q16.78,2.47,33.71,3.9V647.65l1,0ZM459.1,207V352.48H771.41V207Zm0,149.74V495.09H771.41V356.76ZM795.65,126.7V173l38.14-41.87Q814.83,128,795.65,126.7Zm0,230.06V495.09H1099.4V356.76Zm302.68,301.88,1.07-159.27H795.65V739.94a547.32,547.32,0,0,0,58.7-.71h0l.34,0q14-.9,27.87-2.56l.21,0A512.49,512.49,0,0,0,1026,698.41m132-318.93q-1.73-4-3.55-8c-2.26-5-4.64-9.86-7.1-14.71h-23.7V495.09h59.91C1183.51,455.91,1173.59,415.91,1158,379.48Zm-34.35,119.89v137c16.87-16.17,31.14-34.68,41.4-55.84,12.35-25.49,18-53.07,18.47-81.17Zm0-182.92v36h21.48A391.16,391.16,0,0,0,1123.65,316.45Zm-206-162.6c-1.58-.61-3.17-1.22-4.76-1.8a432.15,432.15,0,0,0-51.3-15.42l-58.38,64.06h0l-1.14,1.23.75.81h207.78A443.9,443.9,0,0,0,917.65,153.85ZM1016.7,207H799.91l-4.26,3.89V352.48H833a.05.05,0,0,0,0,0l0,0H1099.4v-68.6A432.49,432.49,0,0,0,1016.7,207Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M193.85,280.39v72.09H92.69c0-.42.06-.85.1-1.27.09-1.15.18-2.29.28-3.44.1-1.34.23-2.68.36-4s.26-2.92.42-4.37.29-2.92.45-4.37.32-2.9.5-4.34.34-2.9.54-4.34c.15-1.19.3-2.39.47-3.59.23-1.69.47-3.38.72-5.06,0-.26.08-.51.12-.76a348.93,348.93,0,0,1,7.44-36.52Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M92.37,356.76H193.85V495.09H99.79c-.24,1.43-.48,2.85-.75,4.28h94.81V610.91c-.16,0-.32-.12-.47-.18q-4-1.59-8-3.37c-.57-.26-1.13-.53-1.71-.78q-4-1.89-8-4c-.93-.49-1.86-1-2.77-1.52A166.43,166.43,0,0,1,133,570c-.35-.33-.67-.69-1-1-1.62-1.76-3.21-3.54-4.75-5.36-.58-.67-1.14-1.35-1.71-2-1.82-2.22-3.58-4.52-5.28-6.83-.26-.35-.5-.69-.75-1a147.72,147.72,0,0,1-17.2-31.1c-.14-.33-.27-.69-.4-1-1.38-3.5-2.63-7.05-3.71-10.67-.46-1.51-.91-3-1.29-4.57-.14-.45-.25-.91-.37-1.36-5.62-22.15-6.27-45.17-6.27-68.08q0-4,0-8Q90.39,415,90.6,401q.08-3.6.15-7.23.21-9.19.6-18.42c.06-1.7.14-3.41.23-5.1q.06-1.47.15-2.94Q92,362,92.37,356.76Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><polygon points="278.44 209.28 278.44 333.92 202.13 333.92 202.13 209.28 213.01 209.28 213.01 167.08 257.67 167.08 257.67 209.28 278.44 209.28" fill="#00bfa6" opacity="0.1"/><rect x="202.13" y="338.19" width="76.3" height="138.33" fill="#00bfa6" opacity="0.1"/><path d="M218.09,499.37h76.3v115a197.64,197.64,0,0,1-27.45,5.83c-.76.11-1.51.2-2.27.28-1.12.13-2.23.25-3.34.35l-3.35.27-.34,0-1.48.08-.51,0c-.6,0-1.19.07-1.79.08h-.05c-.86,0-1.71.06-2.57.08h-1.1c-.85,0-1.7,0-2.57,0l-1.88,0-1.53,0c-.65,0-1.29,0-1.94-.08q-1.54-.06-3.12-.18h0l-1.93-.14c-.8-.06-1.6-.14-2.39-.22q-2.52-.22-5-.57l-2-.28-1-.14c-1.67-.25-3.33-.53-5-.85-1.24-.22-2.46-.47-3.69-.73Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><rect x="692.53" y="194.56" width="62.92" height="139.35" fill="#00bfa6" opacity="0.1"/><polygon points="755.46 338.19 755.46 476.53 443.15 476.53 443.15 416.86 609.5 416.86 609.5 452.06 692.53 452.06 692.53 338.19 755.46 338.19" fill="#00bfa6" opacity="0.1"/><path d="M772.4,647.7c-.33,0-.66,0-1-.06v90.75Q754.49,737,737.7,734.5A551.33,551.33,0,0,1,591.64,692q-20.13-9.08-39.44-19.79a503.91,503.91,0,0,1-61.63-40.31q-7.38-5.64-14.54-11.53c-3.31-2.74-6.59-5.54-9.93-8.25-2.3-1.87-4.63-3.72-7-5.48V499.37H707.66c-.18-.64-.34-1.27-.52-1.91.19.64.37,1.27.53,1.91h63.74V647.63C771.74,647.64,772.07,647.67,772.4,647.7Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M935.51,202.74h-41V190h18.37V152.05q2.39.88,4.76,1.8V190h17.86Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M1034.3,352.48H833a.13.13,0,0,0,.06,0l-.09,0H795.65V213.13h10.58v103h48.34v-61h39.95V207h41v48.16h39.93v61h58.86Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M795.65,356.76V495.09h238.66V356.76Zm303.41,301.15.34-109.5h-65.09v-49H795.65V739.94a547.32,547.32,0,0,0,58.7-.71h0l.34,0q14-.9,27.87-2.56l.21,0A512.49,512.49,0,0,0,1026,698.41" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M1127.85,499.37h55.67c-.48,28.09-6.12,55.68-18.47,81.16-10.26,21.17-24.53,39.68-41.4,55.85v-88h4.2Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M1183.56,495.09h-55.71V379.48H1158C1173.59,415.91,1183.51,455.91,1183.56,495.09Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><rect x="721.75" y="233.3" width="33.71" height="43.69" fill="#00bfa6" opacity="0.1"/><rect x="721.75" y="323.86" width="33.71" height="10.06" fill="#00bfa6" opacity="0.1"/><rect x="721.75" y="338.19" width="33.71" height="29.35" fill="#00bfa6" opacity="0.1"/><rect x="721.75" y="414.42" width="33.71" height="43.69" fill="#00bfa6" opacity="0.1"/><rect x="721.75" y="504.98" width="33.71" height="43.69" fill="#00bfa6" opacity="0.1"/><path d="M771.41,647.63c.33,0,.66,0,1,.07-.33,0-.66,0-1-.06v10.15H737.7V614.1h33.71Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M771.41,704.65v33.74Q754.49,737,737.7,734.5V704.65Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><rect x="443.15" y="473.32" width="144.47" height="3.21" fill="#00bfa6" opacity="0.1"/><rect x="443.15" y="480.8" width="144.47" height="12.3" fill="#00bfa6" opacity="0.1"/><rect x="443.15" y="533.42" width="144.47" height="19.78" fill="#00bfa6" opacity="0.1"/><path d="M603.57,612.08v19.78h-113q-7.38-5.62-14.54-11.54c-3.32-2.73-6.6-5.53-9.93-8.24Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M603.57,672.17V692H591.64q-20.13-9.08-39.44-19.79Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><rect x="838.4" y="351.6" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="222.62" y="219.09" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="222.62" y="285.15" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="222.62" y="351.21" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="222.62" y="417.26" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="222.62" y="483.32" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="222.62" y="549.38" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="946.97" y="351.6" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="838.4" y="421.75" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="946.97" y="421.75" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="838.4" y="491.89" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="946.97" y="491.89" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="838.4" y="562.04" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="946.97" y="562.04" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="838.4" y="632.19" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><rect x="946.97" y="632.19" width="28.44" height="28.44" fill="#00bfa6" opacity="0.1"/><polygon points="838.4 720.67 838.4 702.33 866.83 702.33 866.83 718.06 838.4 720.67" fill="#00bfa6" opacity="0.1"/><path d="M96.53,316.91v16.27h97.32V316.91Zm9.69,15.25h-8V317.94h8Zm9.69,0h-8V317.94h8Zm9.67,0h-8V317.94h8Zm9.69,0h-8V317.94h8Zm9.68,0h-8V317.94h8Zm9.69,0h-8V317.94h8Zm9.69,0h-8V317.94h8Zm9.68,0h-8V317.94h8Zm9.68,0h-8V317.94h8Zm9.69,0h-8V317.94h8Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M96.53,364.27v16.27h97.32V364.27Zm9.69,15.25h-8V365.3h8Zm9.69,0h-8V365.3h8Zm9.67,0h-8V365.3h8Zm9.69,0h-8V365.3h8Zm9.68,0h-8V365.3h8Zm9.69,0h-8V365.3h8Zm9.69,0h-8V365.3h8Zm9.68,0h-8V365.3h8Zm9.68,0h-8V365.3h8Zm9.69,0h-8V365.3h8Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M96.53,411.64V427.9h97.32V411.64Zm9.69,15.23h-8V412.65h8Zm9.69,0h-8V412.65h8Zm9.67,0h-8V412.65h8Zm9.69,0h-8V412.65h8Zm9.68,0h-8V412.65h8Zm9.69,0h-8V412.65h8Zm9.69,0h-8V412.65h8Zm9.68,0h-8V412.65h8Zm9.68,0h-8V412.65h8Zm9.69,0h-8V412.65h8Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M96.53,459v16.26h97.32V459Zm9.69,15.24h-8V460h8Zm9.69,0h-8V460h8Zm9.67,0h-8V460h8Zm9.69,0h-8V460h8Zm9.68,0h-8V460h8Zm9.69,0h-8V460h8Zm9.69,0h-8V460h8Zm9.68,0h-8V460h8Zm9.68,0h-8V460h8Zm9.69,0h-8V460h8Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M97,506.34c.38,1.54.83,3.06,1.29,4.57v-3.54h8v14.21H102c.12.34.25.69.39,1h91.5V506.34Zm19,15.24h-8V507.37h8Zm9.67,0h-8V507.37h8Zm9.69,0h-8V507.37h8Zm9.68,0h-8V507.37h8Zm9.69,0h-8V507.37h8Zm9.69,0h-8V507.37h8Zm9.68,0h-8V507.37h8Zm9.68,0h-8V507.37h8Zm9.69,0h-8V507.37h8Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M119.54,553.7c.26.32.5.68.75,1h5.29v6.83l1.71,2v-8.87h8V569H132c.32.33.63.68,1,1h60.83V553.7ZM145,569h-8V554.72h8Zm9.69,0h-8V554.72h8Zm9.69,0h-8V554.72h8Zm9.68,0h-8V554.72h8Zm9.68,0h-8V554.72h8Zm9.69,0h-8V554.72h8Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M172.93,601.06c.92.52,1.85,1,2.78,1.51v-.5h8v4.51c.58.25,1.13.52,1.7.78v-5.29h8v8.66a3.26,3.26,0,0,0,.47.17v-9.84Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><path d="M833,352.48h0a.05.05,0,0,0,0,0Zm-61.6,295.15v0l1,0ZM707.13,497.46c.19.64.36,1.28.53,1.91h0C707.51,498.74,707.33,498.1,707.13,497.46ZM833,352.48h0a.05.05,0,0,0,0,0ZM229,202.74V207h44.67v-4.28ZM771.41,647.63v0l1,0ZM707.13,497.46c.19.64.36,1.28.53,1.91h0C707.51,498.74,707.33,498.1,707.13,497.46ZM833,352.48h0a.05.05,0,0,0,0,0Zm-61.6,295.15v0l1,0ZM707.13,497.46c.19.64.36,1.28.53,1.91h0C707.51,498.74,707.33,498.1,707.13,497.46Z" transform="translate(-15.95 -18.56)" fill="#00bfa6" opacity="0.1"/><ellipse cx="879.43" cy="847.22" rx="97.44" ry="15.65" fill="#00bfa6" opacity="0.1"/><ellipse cx="439.97" cy="831.57" rx="97.44" ry="15.65" fill="#00bfa6" opacity="0.1"/><path d="M568.1,436.31a.53.53,0,0,0-.15-.26c-1.49-1.47-20.49-28.34-20.49-28.34s-1-3-2.62-6.9a6.86,6.86,0,0,0,1.15-2.25,7.72,7.72,0,0,0,.19-1.05c0-.11.08-.2.11-.31a7.59,7.59,0,0,0-.1-4.12,7.12,7.12,0,0,1-.41,1,16.72,16.72,0,0,0-1.5-3.34c-2.52-4.34-6.12-8-8.77-12.23A33.09,33.09,0,0,1,531,356.55c0,.39,0,.79,0,1.18a34.24,34.24,0,0,1,.6-4.5,31.22,31.22,0,0,1,1.67-4.94c2.38-5.45,6.23-10.2,8.57-15.67a29.7,29.7,0,0,0,1.78-5.73,32.1,32.1,0,0,0,.89-10.05c0,.8-.13,1.6-.25,2.39a32.55,32.55,0,0,0-9.19-21.67c-8.17-8.21-19.9-11.4-31.12-13.08a28.51,28.51,0,0,1-13.1-5c-4.31-2.79-9.88-3.46-14.92-2.85a24.61,24.61,0,0,0-15.19,7.51c-5.33,5.86-7.64,14.16-13.86,19.1-3.77,3-8.55,4.4-12.94,6.44s-8.54,5-9.95,9.38c0,0,0-.06,0-.09l0,.25-.06.16c-1.46,5.18,1.36,10.45,2.83,15.62,1.53,5.35,1.63,11,1.71,16.53.11,6.76.21,13.53.1,20.3-.05,2.66-.14,5.35-.34,8a41.92,41.92,0,0,0-6.87,2.76c-2.24,1.46-10.62,10.51-10.62,10.51l-16.39,62.62.22.25-.22.85.83-.19c2.32,2.5,9.25,9.62,16.73,14.06l.7,12.28s.84,12.32,12.17,17.41c.26,4.27,1.07,21.61-2.68,28.48a32,32,0,0,0-3.54,16.28s1.31,10.42-.18,15.9a26,26,0,0,0-.19,11.16h0s0,1.21,0,3.29c0,11.09.13,46.63,0,50.65-.19,4.75,0,75,0,75s-.93,35.11-3.91,44.62-2.23,41-2.23,41-1.87,37.51,4.74,44.91c0,.33-.06.67-.07,1,0,.15,0,.32,0,.47-.08,2.85.47,5.88,2.92,6.81,5,1.92,11.61,7.68,12.86,9.33s8.52,5.76,18,4.66a135.5,135.5,0,0,1,17.89-.82h0s3.74-.68,2.53-5.33h0s0,0,0,0c-.78-2.9-3.7-7.36-5.78-10.29.38.1.75.18,1.1.25l.36.07.28,0a3.8,3.8,0,0,0,.46,0l.2,0a3.43,3.43,0,0,0,.56,0h0c2.51-.24,11.87,4.12,13.54,7s7.56,5.07,12,5.62c2.64.32,9.3-.22,14.89-.94a54.83,54.83,0,0,0,8.34-1.52c1.32-.5,1.6-2.1,1.22-3.9h0a10.15,10.15,0,0,0-3.46-5.84c-1.62-1.15-3.76-4.18-5.34-6.66l-.42-.67c2.79-2.66,7.83-11.36,9.36-13.16,1.86-2.19-3-82.28-3-82.28V695.32l7.45-38,5.21-20.11,4.47-30.36s7.82-35.46,5.41-38.94h0c0-.07-2-36.58-4.1-45.35-.91-3.91-.68-12.71-.14-21.27a4.2,4.2,0,0,0,1-4.38,9.1,9.1,0,0,0-.58-1.49c0-.15,0-.31,0-.46a68.86,68.86,0,0,1,13.47-4.58c7.45-1.46,5.59-5.3,5.59-5.3s1.68-3.29,2.79-5.3.19-19.75,0-21.21c-.07-.59-.53-3.85-1.06-7.55,2.39-1.7,5.5-3.81,8.89-5.81C570.08,441.39,568.63,437.36,568.1,436.31ZM470.9,689.84s-5.59,14.26-3.35,17.91-.37,17.2-.37,17.2l-1.87,20.11s-5.21,37.3-3.35,46.07c1.46,6.88,2,27.43,2.17,36h0a2.53,2.53,0,0,0-.37.18l-.25.13c.86-3.37.5-10.19-3.77-23.91l-.36-56.67s-.66-65.46,4.51-72.78,7-19.75,7-19.75-1.12,17.93-1.85,22.68S470.9,689.84,470.9,689.84ZM460.49,830.7c-.05.12-.11.24-.15.35l-.28-.36A2.94,2.94,0,0,0,460.49,830.7Z" transform="translate(-15.95 -18.56)" fill="url(#cb66075b-2ebe-455c-893b-1def13a8d59c)"/><path d="M517.5,853.16c-2.89,1.11-18.56,3-22.94,2.47s-10.18-2.75-11.83-5.65-10.9-7.28-13.38-7a9,9,0,0,1-3-.42,36.93,36.93,0,0,1-5-1.92,9.28,9.28,0,0,1,.11-3.8,6.09,6.09,0,0,1,.22-.74,6.61,6.61,0,0,1,3.36-3.74l.36-.17a10.17,10.17,0,0,1,2.16-.66c7.86-1.51,40.29,1.52,40.29,1.52s.91,1.63,2.16,3.65c1.56,2.5,3.68,5.55,5.28,6.7a10.25,10.25,0,0,1,3.41,5.88C519.08,851.05,518.8,852.67,517.5,853.16Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M517.5,853.16c-2.89,1.11-18.55,3-22.93,2.47s-10.18-2.76-11.84-5.65-10.89-7.28-13.37-7-8-2.34-8-2.34-.86-4,1.64-6.73l5,3.55s13.38,4.15,15.86,8,7,6,13.53,6.39c4.88.32,16.09-1.58,21.34-2.53C519.08,851.05,518.81,852.67,517.5,853.16Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M469.63,858.26a133.13,133.13,0,0,0-17.66.83c-9.39,1.1-16.56-3-17.81-4.69S426.44,847,421.47,845c-2.43-.94-3-4-2.89-6.86,0-.15,0-.32,0-.47a28,28,0,0,1,.8-5.37l38.91-.83,3.37,4.57.52.7,2.05,2.79s.93,1.22,2.15,3c2.06,3,4.94,7.43,5.71,10.36v0C473.32,857.58,469.63,858.26,469.63,858.26Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M469.63,858.26a133.13,133.13,0,0,0-17.66.83c-9.38,1.1-16.56-3-17.8-4.69s-7.73-7.45-12.7-9.38c-2.43-.94-3-4-2.89-6.86,2.78.65,8.62,2.31,10.91,5.2,3,3.86,8.37,10.35,16,10.76,6.16.33,21.16-.77,26.66-1.21C473.33,857.58,469.63,858.26,469.63,858.26Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M465,832.32c-.45,3.34-1.84,4.24-2.84,4.44a1.93,1.93,0,0,1-.74,0,2.46,2.46,0,0,1-.39-.06s-34.94,7.72-42,1.47a4.89,4.89,0,0,1-.5-.52,28,28,0,0,1,.8-5.37l38.91-.83,3.37,4.57a6.61,6.61,0,0,1,3.36-3.74Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M510,836.66c-.78.86-1.43,1.35-1.84,1.18-1.84-.74-16.92-3.31-21.71-1.1s-21,.36-21,.36,0-1.92-.09-5a10.17,10.17,0,0,1,2.16-.66c7.86-1.51,40.29,1.52,40.29,1.52S508.76,834.64,510,836.66Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M532.82,610.46,528.4,641l-5.14,20.24L515.9,699.5V740s4.78,80.58,2.94,82.78-8.83,14.73-10.67,14-16.92-3.31-21.71-1.11-21,.37-21,.37-.37-31.27-2.21-40.1,3.31-46.36,3.31-46.36l1.84-20.23s2.58-13.62.37-17.3,3.31-18,3.31-18-2.57-8.11-1.83-12.89,1.83-22.81,1.83-22.81-1.83,12.52-6.94,19.87-4.46,73.22-4.46,73.22l.36,57c9.21,30.18,0,27.23,0,27.23s-34.94,7.73-42,1.47S414,791.48,414,791.48s-.73-31.64,2.21-41.2,3.87-44.89,3.87-44.89-.19-70.65,0-75.42c.14-4,0-39.81,0-51,0-2.08,0-3.31,0-3.31l4.22-10.48,50-6.26h23.92s36,8.46,39.72,12.11a.83.83,0,0,1,.2.22C540.55,574.78,532.82,610.46,532.82,610.46Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M472.11,770.88s11,26.49,16.19,28.33S472.11,770.88,472.11,770.88Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M476.18,809.88s37.14,1.84,36.77,5.89S476.18,809.88,476.18,809.88Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M426.49,799.29c1.47,1.39,28.33,4,26.12,6.54s-23.91,7.48-23.91,7.48Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M422.08,753.59c0,1.1,5.52,35.32,7,36.79s13.61,2.94,13.61,2.94Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M462.13,285.85c-5.27,5.89-7.55,14.24-13.69,19.22-3.73,3-8.45,4.43-12.79,6.47s-8.64,5.15-9.93,9.77c-1.44,5.2,1.34,10.51,2.8,15.71,1.51,5.38,1.6,11,1.69,16.63.1,6.81.21,13.62.09,20.43-.18,10.61-1.06,21.71-6.69,30.7,20.33,6.47,41.95,7.35,63.27,8.18a63.84,63.84,0,0,0,12.29-.31A105.49,105.49,0,0,0,509.64,410a80.28,80.28,0,0,1,20.86-2.67c3.07,0,6.2.19,9.16-.61s5.81-2.85,6.61-5.81c.71-2.66-.33-5.49-1.69-7.88-2.48-4.36-6-8-8.66-12.3a33.8,33.8,0,0,1-2.17-30.39c2.36-5.49,6.16-10.27,8.48-15.77a33.26,33.26,0,0,0-6.7-35.28c-8.07-8.26-19.65-11.46-30.73-13.16a27.91,27.91,0,0,1-12.94-5c-4.25-2.8-9.76-3.48-14.74-2.86A24.06,24.06,0,0,0,462.13,285.85Z" transform="translate(-15.95 -18.56)" fill="#3f3d56"/><g opacity="0.1"><path d="M534.06,344.57a33.27,33.27,0,0,0-2.55,15.27A32.7,32.7,0,0,1,534.06,349c2.35-5.49,6.15-10.27,8.47-15.77a31.91,31.91,0,0,0,2.33-14.52,31.1,31.1,0,0,1-2.33,10.1C540.21,334.31,536.41,339.08,534.06,344.57Z" transform="translate(-15.95 -18.56)"/><path d="M430.51,352.29c.06,3.92.12,7.85.13,11.77,0-5.4-.05-10.79-.13-16.18-.08-5.59-.18-11.25-1.69-16.64-1-3.42-2.48-6.89-3-10.34-.89,4.9,1.64,9.87,3,14.76C430.33,341,430.43,346.7,430.51,352.29Z" transform="translate(-15.95 -18.56)"/><path d="M540,401c-3,.81-6.08.63-9.15.61A80.22,80.22,0,0,0,510,404.23a106.2,106.2,0,0,1-10.47,2.64,63.17,63.17,0,0,1-12.3.32c-20.6-.81-41.49-1.68-61.22-7.57a33.94,33.94,0,0,1-2,3.8c20.33,6.46,41.95,7.35,63.26,8.18a63.17,63.17,0,0,0,12.3-.32A103.41,103.41,0,0,0,510,408.65,80.22,80.22,0,0,1,530.81,406c3.07,0,6.19.19,9.15-.62s5.81-2.84,6.61-5.8a7.94,7.94,0,0,0-.1-4.16C545.58,398.22,542.83,400.17,540,401Z" transform="translate(-15.95 -18.56)"/></g><path d="M510.38,389.15c-.74,1.66-3.86,16-4.6,17.47s-4.78,25-5.15,26.32S474,427.42,474,427.42l-15.81-13.25L441.94,398s-.48-14.59,11.49-19.27a18.27,18.27,0,0,1,2.5-.78c14.52-3.49,13.06-47.64,13.06-47.64l29.8,12.87s-5.52,25.76-5.33,30.73c.05,1.67,1.36,2.71,3.07,3.34a24.27,24.27,0,0,0,8.14.88S511.12,387.5,510.38,389.15Z" transform="translate(-15.95 -18.56)" fill="#fbbebe"/><path d="M563.73,437.53l4.23,1.11s3.13,4.76-4.23,9.19a127.48,127.48,0,0,0-13.43,9.39l-21.75,6.62-4.19-13.15,20.24-15.36Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M563.73,437.53l4.23,1.11s3.13,4.76-4.23,9.19a127.48,127.48,0,0,0-13.43,9.39l-21.75,6.62-4.19-13.15,20.24-15.36Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M405,450.23l-8.46,8.28s15.26,17.66,27,18.76,19.31-13.43,19.31-13.43l-10.16-16Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M405,450.23l-8.46,8.28s15.26,17.66,27,18.76,19.31-13.43,19.31-13.43l-10.16-16Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><circle cx="469.41" cy="311.17" r="29.43" opacity="0.1"/><circle cx="469.41" cy="308.96" r="29.43" fill="#fbbebe"/><path d="M538.16,574.59A95,95,0,0,0,518.47,579c-11,3.66-97.2.06-98.4,0,0-2.08,0-3.31,0-3.31l4.22-10.48,50-6.26h23.92s36,8.46,39.72,12.11C538.08,573.26,538.16,574.59,538.16,574.59Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M510.38,389.15c-.74,1.66-3.86,16-4.6,17.47s-4.78,25-5.15,26.32S474,427.42,474,427.42l-15.81-13.25L441.94,398s-.48-14.59,11.49-19.27l29.72,34.17,13.38-35.65a24.27,24.27,0,0,0,8.14.88S511.12,387.5,510.38,389.15Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M483.15,414l-30.42-35a12.75,12.75,0,0,0-12.07-.89c-6.81,2.95-15.27,5.34-17.48,6.81s-10.49,10.57-10.49,10.57L437.35,460l-10.86,42.49s1.66,21.71-2.57,29.62a32.51,32.51,0,0,0-3.5,16.37s1.29,10.49-.18,16a26.65,26.65,0,0,0-.19,11.22s87.39,3.68,98.42,0a94.18,94.18,0,0,1,19.69-4.41s-2-36.8-4-45.63,1.66-42.49,1.66-42.49l-2.39-36.06,14.34-37S540,386.39,531.9,384c0,0-14.71-3.5-17.84-5.15s-12.33-3.13-12.33-3.13l-4.83,1.62Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><rect x="454.92" y="443.61" width="70.04" height="107.18" rx="2.94" ry="2.94" transform="translate(18.92 -50.67) rotate(3.89)" opacity="0.1"/><rect x="457.13" y="441.41" width="70.04" height="107.18" rx="2.94" ry="2.94" transform="translate(18.77 -50.82) rotate(3.89)" fill="#3f3d56"/><rect x="461.6" y="449.46" width="61.02" height="92.22" transform="translate(18.81 -50.82) rotate(3.89)" fill="#fff"/><rect x="469.9" y="471.21" width="49.73" height="13.86" transform="matrix(1, 0.07, -0.07, 1, 17.63, -51.04)" opacity="0.1"/><rect x="510.27" y="529.92" width="7.91" height="7.24" transform="translate(21.44 -52.23) rotate(3.89)" opacity="0.1"/><rect x="469.94" y="511.38" width="40.49" height="7.24" transform="translate(20.13 -50.64) rotate(3.89)" opacity="0.1"/><rect x="475.65" y="446.75" width="42.16" height="11.13" transform="translate(15.89 -51.23) rotate(3.89)" fill="#3f3d56"/><rect x="475.65" y="446.75" width="42.16" height="11.13" transform="translate(15.89 -51.23) rotate(3.89)" opacity="0.1"/><path d="M486.83,572.56s-.37,54.46-14.72,85.73c0,0,17.3-41.21,17.3-42.86s9.56-18.95,7-24.1S486.83,572.56,486.83,572.56Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M487.61,320.16a20.47,20.47,0,0,1,3.33-13.71A16.89,16.89,0,0,0,504,324.25a2.21,2.21,0,0,1-.63-2.42c2.05,2.32,3.62,5.07,5.94,7.11s5.8,3.26,8.53,1.81c3.71-2,3.75-7.27,2.79-11.37a53.4,53.4,0,0,0-12.29-23.47,16.26,16.26,0,0,0-12.9-6.56c-5.68-.44-11.58.06-16.67,2.61a44.3,44.3,0,0,0-8,5.59l-14,11.42a13.29,13.29,0,0,0-3.4,3.58,9.8,9.8,0,0,0-1.06,3.75,20.21,20.21,0,0,0,9.42,19.07,14.91,14.91,0,0,1,8.93-14,3.88,3.88,0,0,1,1.39,2.89L475,319a5.79,5.79,0,0,1,2-2.37c1.82-1,4.09.18,5.64,1.59s3.06,3.17,5.14,3.39l.08-7.83" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M487.61,319.06a20.48,20.48,0,0,1,3.33-13.72c-.9,8,5.13,16.26,13.07,17.8a2.19,2.19,0,0,1-.63-2.41c2.05,2.32,3.62,5.06,5.94,7.11s5.8,3.26,8.53,1.8c3.71-2,3.75-7.27,2.79-11.36a53.4,53.4,0,0,0-12.29-23.47,19.67,19.67,0,0,0-6.87-5.34,20,20,0,0,0-6-1.22c-5.68-.44-11.58.05-16.67,2.6a44.86,44.86,0,0,0-8,5.6l-14,11.42a13.15,13.15,0,0,0-3.4,3.58,9.75,9.75,0,0,0-1.06,3.75,20.2,20.2,0,0,0,9.42,19.06,14.93,14.93,0,0,1,8.93-14,3.91,3.91,0,0,1,1.39,2.89l2.94-5.24a5.73,5.73,0,0,1,2-2.37c1.82-1,4.09.18,5.64,1.59s3.06,3.16,5.14,3.39l.08-7.84" transform="translate(-15.95 -18.56)" fill="#3f3d56"/><path d="M501.55,504.69c-2.57-1.3-45.07,5.33-45.07,5.33s-7-2-23.92-4.78-18-19.32-18-19.32l-1.85-33.11,5.71-5,24.46,16s.38,8.09,0,9.55c-.24,1-.88,2.19-.82,3a1,1,0,0,0,.82.9c1.66.42,24.28,4.08,24.28,4.08s52.43-3.59,65.5,14.07a13.28,13.28,0,0,1,2.31,4.36C538.21,511.84,503.88,505.84,501.55,504.69Z" transform="translate(-15.95 -18.56)" fill="#fbbebe"/><path d="M535,499.84c-2,.89-3.24,1.53-3.24,1.53S513,500.82,502.46,497s-23.35-3.14-23.35-3.14S435.19,486.3,442,476.43a1,1,0,0,0,.82.9c1.66.42,24.28,4.08,24.28,4.08s52.43-3.59,65.5,14.07A13.28,13.28,0,0,1,535,499.84Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M553.24,441.58s2.58,18.21,2.76,19.69,1.11,19.31,0,21.34-2.76,5.33-2.76,5.33,1.84,3.86-5.52,5.34-16,5.88-16,5.88-18.77-.55-29.25-4.41-23.36-3.13-23.36-3.13-55.75-9.57-31.83-21.25,40.84,4.14,40.84,4.14l26.67-1.65s9.94-6.08,12.7-5.52a10.21,10.21,0,0,0,5.7-.92l.19-19.32Z" transform="translate(-15.95 -18.56)" fill="#fbbebe"/><path d="M418,396.88l-5.34-.28-16.18,63s17.47-4.42,25,0,21.34,5.33,21.34,5.33l-5.15-50.22Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M418,395.77l-5.34-.28-16.18,63s17.47-4.42,25,0,21.34,5.33,21.34,5.33l-5.15-50.22Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M540.37,409.57l7.35,1.66s18.77,27,20.24,28.51-7,7-10.49,7-20.6,2-25.57,6.62S529,434.73,529,434.2,535.17,419,535.17,419Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M540.37,408.47l7.35,1.65s18.77,27.05,20.24,28.52-7,7-10.49,7-20.6,2-25.57,6.62S529,433.63,529,433.1s6.21-15.25,6.21-15.25Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><g opacity="0.1"><path d="M490.89,305.43a14.75,14.75,0,0,1,.05-2.3,20.47,20.47,0,0,0-3.08,7.55l0,2.32s0-.05,0-.08l0,.55c0,1.62,0,3.25-.05,4.87l-.14,0,0,.75c0-.26,0-.51-.05-.77-2-.32-3.43-2-4.92-3.34s-3.82-2.62-5.64-1.59a5.73,5.73,0,0,0-2,2.37L472.09,321a3.87,3.87,0,0,0-1.39-2.88,14.91,14.91,0,0,0-8.93,14,20.32,20.32,0,0,1-9.49-15.93,20.22,20.22,0,0,0,9.49,18.13,14.93,14.93,0,0,1,8.93-14,3.91,3.91,0,0,1,1.39,2.89l2.94-5.24a5.73,5.73,0,0,1,2-2.37c1.82-1,4.09.18,5.64,1.59s3.06,3.16,5.14,3.39q0-3.84.08-7.66A20.37,20.37,0,0,1,490.89,305.43Z" transform="translate(-15.95 -18.56)"/><path d="M487.51,315.5c.05-.68.13-1.36.23-2l.11-2.76A20.24,20.24,0,0,0,487.51,315.5Z" transform="translate(-15.95 -18.56)"/><path d="M517.85,327.43c-2.73,1.46-6.21.24-8.53-1.8s-3.89-4.79-5.94-7.11a2.21,2.21,0,0,0,.63,2.42c-.2,0-.39-.1-.58-.15,2,2.3,3.59,5,5.89,7s5.8,3.26,8.53,1.8,3.51-4.88,3.27-8.21C520.94,324,520,326.27,517.85,327.43Z" transform="translate(-15.95 -18.56)"/><path d="M503.37,320.77a17,17,0,0,1-12.46-14.86c-.57,7.85,5.35,15.72,13.1,17.23A2.2,2.2,0,0,1,503.37,320.77Z" transform="translate(-15.95 -18.56)"/></g><path d="M983.61,484.21s-3.94-.55-3.94-6.28-2.82-16.46-2.82-16.46h0s-2.44-18.67-5.81-21.63-7.7-20.34-7.7-20.34-.74-9.43-2.25-11.46-3.55-7-6.56-14.09S939,382,939,382s-22.69-13.16-29.12-17.45h0a9.94,9.94,0,0,1-1.64-1.24c-1.12-1.46-6-1.49-6-1.49-.51-3.23-1-6.93-1.16-10.28,0-.36,0-.72,0-1.08a34.6,34.6,0,0,0,15.21-18.82c.12-.38.22-.77.33-1.16a3.25,3.25,0,0,0,2-1.76c.57-1.29.59-2.79,1.31-4,.84-1.42,2.44-2.18,3.7-3.24,3.18-2.71,4-7.26,3.85-11.39-.1-3.36-.64-6.74-.43-10.07,0-.28,0-.56.06-.84.06-.49.13-1,.22-1.48.49-2.48,1.56-4.82,2.16-7.28s.66-5.23-.74-7.35c-2.05-3.11-6.32-3.73-10.07-4-4.25-.36-8,.1-10.77-3.43a37.7,37.7,0,0,0-4.28-5.16c-.56-.52-6-3.85-6-4.06a24.31,24.31,0,0,0-17-1.31c-2.83.82-5.48,2.16-8.35,2.83-6.16,1.46-13.26-.12-18.5,3.41-2.92,2-4.67,5.19-6.31,8.28q-2,3.82-4.06,7.65c-2.22,4.19-4.46,8.45-5.39,13.09a22.19,22.19,0,0,0-.37,3.07v0c0,.37,0,.74,0,1.11,0,.16,0,.32,0,.48,0,.34,0,.68.06,1s0,.41.07.62.09.68.15,1,.18.89.3,1.32c0,.19.12.37.18.56s.22.67.35,1,.14.35.22.52c.15.35.33.69.51,1,.08.13.14.26.22.39a11.34,11.34,0,0,0,.92,1.34c2.13,2.67,5.29,4.37,7.62,6.87,0,.1,0,.2,0,.3,0,.27,0,.54,0,.82a34.23,34.23,0,0,0,15.68,27.9c0,.38.05.77.07,1.16a57.09,57.09,0,0,1-.11,8.9,4.22,4.22,0,0,0-3.32-1.48,4.76,4.76,0,0,0-1.28.11l-.09-.07h0v.09c-2.2.54-4.91,2.83-7.5,9.34,0,0-7.88,8.88-13.88,8.51s-21.19,9.25-21.19,9.25-14.82,9.61-18,19.41a135.69,135.69,0,0,1-6.39,16.28l-18.37,37.72h0l-3.37,30s1.87,13.31,1.5,15.35,7.69,20.34,7.69,20.34,26.63,46.78,37.51,49.18l.78-.54a6.81,6.81,0,0,0,1.47.54l2.24-1.57a23.41,23.41,0,0,1-.18,5.27c-1.49,4.63.57,34.77,3.19,40.68s1.69,83.41,1.69,83.41l-.37,6.83s0,.22.09.6l-.09,1.62.27.14a19.33,19.33,0,0,1-.27,6.52c-.94,3-1.32,11.47-1.32,11.47s-7.5,47.88-3.94,57.5,6.57,20.16,6.57,20.16,3.75,12,.18,14-13.68,5.55-11.62,10.54c1.9,4.62,9.11,17,10.18,18.81l-.09,1-1.47,15.93a20,20,0,0,0,1.69,6.08c1.61,3.48,4.73,7.07,10.69,6.68,1-.07,2.15-.18,3.28-.33,10.89-1.47,24.29-6.33,24.29-6.33a9.58,9.58,0,0,1-1.89-1.57h0a5.49,5.49,0,0,1-1.67-4c.16-2.91-5.27-16.72-6.63-20.13l-.31-.76s12.38-12.95,10.32-24.41c0,0-13.7-8-9.19-12.4s12.57-17,12.57-17,.37-47.15,0-54.18a58.4,58.4,0,0,1,.69-14.64c.15-.72.33-1.43.52-2.14a127.74,127.74,0,0,0,18.86,1.43q3.46,0,7-.14,0,1,.09,2.16c.52,11.68,1.49,32.17,2.28,39.78,1.12,10.9,7.31,40.31,7.31,40.31s-11.81,7.57,2.06,26.26c0,0,0,6.76-.92,7.75h0a84.62,84.62,0,0,0-2.37,9.77c-.58,3.51-.82,7.08.12,8.92,2.25,4.42,15.75,4.06,15.75,4.06h0a2.13,2.13,0,0,1,.33-.05,19.27,19.27,0,0,1,14.29,4.3c5.13,4.12,24.59,2.32,35.14,1,4.13-.53,6.89-1,6.89-1a4.05,4.05,0,0,0,.14-1.44h0c-.11-2.59-2.14-8.27-15.9-13.34,0,0-12.94-8.7-12.76-16.28h-.29l-1.49,0C946.34,835,947,835,947,835s-5.07-18.49-3-20-4.13-22-4.13-22-3.55-34.4-3.75-36.8a21.14,21.14,0,0,1,.94-6.1l-.94-18.87s-.18-6.27,0-8.31a39.08,39.08,0,0,0-.42-5.29c-.09-.7-.18-1.43-.28-2.15,4.85-1.23,8-2.36,8-2.36l-.56-65.65c4.12-8,4.88-25.56,4.86-38,0-8-.36-13.92-.36-13.92l5.63-9.19s1.3-11-.76-13.41c-.91-1.09-.5-2.22.25-3.15a10.46,10.46,0,0,1,1.25-.88,1.57,1.57,0,0,1-.13-.22,9.94,9.94,0,0,1,1.25-.89s-2-3.1-.21-4.41c1.68,1.14,3.18,2.05,4.32,2.7-.08.73-.16,1.15-.16,1.15l.48-1c1.1.62,1.77,1,1.77,1s8.82-17.57,8.63-20.15,6-13.5,6-13.5.75-5.74,4.13-8.14,2.62-19.79,2.62-19.79.94-9.06,3.19-12.75S983.61,484.21,983.61,484.21ZM814.85,476.5l.17,4.19c-1-1.61-1.72-2.76-1.72-2.76Z" transform="translate(-15.95 -18.56)" fill="url(#b7415561-023b-44da-badb-9b3453976a8a)"/><path d="M961.57,559.65l-2.16,9.2S942.11,560,939,548.8s5.21-15.47,5.21-15.47l16.13,6.82Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M961.57,559.65l-2.16,9.2S942.11,560,939,548.8s5.21-15.47,5.21-15.47l16.13,6.82Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M864.48,872.76s-16,5.88-27,6.62c-5.84.39-8.91-3.19-10.49-6.64a20.3,20.3,0,0,1-1.66-6l1.45-15.85.76-8.43,23.37-6.08,3.31,10.13.31.76c1.32,3.39,6.66,17.13,6.5,20a5.49,5.49,0,0,0,1.63,4A9.29,9.29,0,0,0,864.48,872.76Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M973.72,864.7a4,4,0,0,1-.14,1.44s-34.22,5.7-41.22,0A18.53,18.53,0,0,0,918,861.91s-13.24.36-15.45-4c-.92-1.83-.68-5.38-.11-8.87a85.07,85.07,0,0,1,2.32-9.72l.53-.42,3.15-2.53,36.88-1.09h.28c-.18,7.54,12.51,16.19,12.51,16.19C971.62,856.47,973.61,862.12,973.72,864.7Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M973.73,864.7a4.12,4.12,0,0,1-.15,1.44s-34.22,5.7-41.21,0A18.53,18.53,0,0,0,918,861.91s-13.25.36-15.46-4c-.91-1.83-.68-5.38-.11-8.88,5.1.51,13.15,1.78,16.31,4.82,4.78,4.6,12.88,9.2,17.84,9.57C940.5,863.66,963.81,864.4,973.73,864.7Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M864.48,872.76s-16,5.88-27,6.62c-5.84.39-8.91-3.19-10.49-6.64,4.08,1.37,9.73,2.8,12.7,1.49,3.52-1.57,16-2.57,23-3A9.09,9.09,0,0,0,864.48,872.76Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M888.22,398.87c-13.2-5.13-30.18-22.08-25.94-30a17.93,17.93,0,0,0,1.65-6.36,58.05,58.05,0,0,0,.12-9,123.6,123.6,0,0,0-1.77-14.65s41.21.93,38.81,7c-.7,1.79-.82,4.88-.62,8.33s.69,7.38,1.21,10.69c.71,4.53,1.44,8,1.44,8s-2.53,3.53-4,3.72S907.16,406.22,888.22,398.87Z" transform="translate(-15.95 -18.56)" fill="#cf6f80"/><path d="M854.49,847.22l-.31.34c-12.32-14.9-27.22,3.68-27.22,3.68l-.22-.4.76-8.43,23.37-6.08,3.31,10.13Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M945.62,836.33s-9-.18-13.8,4.06-28,.91-27,0a3.46,3.46,0,0,0,.52-1.53l3.15-2.53,36.88-1.09C945.51,835.94,945.62,836.33,945.62,836.33Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M869.82,719.32a28.05,28.05,0,0,0-1.52,5.13,58.71,58.71,0,0,0-.69,14.56c.37,7,0,53.91,0,53.91s-7.91,12.51-12.33,16.92,9,12.33,9,12.33c2,11.41-10.12,24.29-10.12,24.29-12.32-14.9-27.22,3.67-27.22,3.67s-8.1-14-10.12-19,7.91-8.45,11.4-10.49-.18-14-.18-14-2.94-10.49-6.44-20.06,3.86-57.2,3.86-57.2.38-8.47,1.29-11.42a19.34,19.34,0,0,0,.27-6.48c-.06-.73-.13-1.33-.18-1.75s-.09-.6-.09-.6l.14-.24,5-9.32S872.22,713.45,869.82,719.32Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M945.62,835.23s-9-.19-13.8,4-28,.92-27,0,.91-7.72.91-7.72c-13.61-18.59-2-26.13-2-26.13s-6.07-29.25-7.17-40.1c-.77-7.57-1.72-28-2.23-39.57-.22-5-.35-8.45-.35-8.45L905,715.07l1.43-.28,26.82-5.39s.74,5,1.24,9.09a39.94,39.94,0,0,1,.41,5.27c-.17,2,0,8.27,0,8.27l.92,18.76a21.64,21.64,0,0,0-.92,6.07c.19,2.4,3.68,36.61,3.68,36.61s6.07,20.42,4,21.89S945.62,835.23,945.62,835.23Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M901.09,345.89c-.7,1.79-.82,4.88-.62,8.33a34.25,34.25,0,0,1-36.42-.68,123.6,123.6,0,0,0-1.77-14.65S903.49,339.82,901.09,345.89Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M917,323.81a34.21,34.21,0,0,1-68.42.82c0-.28,0-.54,0-.82a34.22,34.22,0,0,1,68.44,0Z" transform="translate(-15.95 -18.56)" fill="#cf6f80"/><path d="M888.22,398.87c-13.2-5.13-30.18-22.08-25.94-30a17.93,17.93,0,0,0,1.65-6.36L882,377.37l11.18,9.17,8.5-21.63c.71,4.53,1.44,8,1.44,8s-2.53,3.53-4,3.72S907.16,406.22,888.22,398.87Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><polygon points="919 445.98 903.91 699.48 884.23 700.77 833.26 553.78 841.62 379.27 843.39 342.4 866.05 361.01 877.23 370.18 885.98 347.91 902.25 362.09 919 445.98" fill="#00bfa6"/><path d="M869.82,719.32a28.05,28.05,0,0,0-1.52,5.13A145,145,0,0,1,827,711.56l-.27-.14.09-1.61,0-.84,5-9.32S872.22,713.45,869.82,719.32Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M905.33,724.49a101.29,101.29,0,0,1-11.06,1.27c-.22-5-.35-8.45-.35-8.45L905,715.07Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M934.53,718.49c-7.11,1.85-18.1,3.93-27.92,2.63l-.14-6.33,26.82-5.39S934,714.36,934.53,718.49Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M906.43,722.28c-41,7-78.55-13.07-78.55-13.07l.36-6.8s.93-77.09-1.65-83S822,583.57,823.46,579s-5.33-73.57-5.33-73.57l-1.1-28-40.29-16.37,18-37.53A135.61,135.61,0,0,0,801,407.33c3.13-9.75,17.66-19.32,17.66-19.32s14.9-9.56,20.79-9.2,13.61-8.46,13.61-8.46c5.7-14.53,10.86-8,10.86-8,0,.7,0,0-.28,2.15-2,15.95,32.34,66.35,32.83,67.25h0l3.31,79.66,3.31,100.81Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M905.33,722.28c-41,7-78.56-13.07-78.56-13.07l.37-6.8s.92-77.09-1.66-83-4.59-35.87-3.12-40.48S817,505.39,817,505.39l-1.11-28-40.28-16.37,18-37.53a137.73,137.73,0,0,0,6.26-16.19C803,397.58,817.58,388,817.58,388s14.9-9.56,20.78-9.2S852,370.35,852,370.35c5.71-14.53,12-8,12-8,0,.7-.6,1-.28,2.15,4.4,15.47,31.24,66.35,31.73,67.25h0l3.31,79.66L902,612.27Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M894.28,434c-4.41-1.84-27.77-28.51-27.77-28.51v-6.07c-.85-2-5.91-.78-10,.62l1.76-36.87,2,1.66C864.64,380.29,893.8,433.11,894.28,434Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M895.39,431.8c-4.42-1.85-27.78-28.51-27.78-28.51v-6.08c-.85-2-5.9-.78-10,.62L859.34,361l2,1.65C865.75,378.09,894.9,430.9,895.39,431.8Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M827.88,564.8c.55,0,28.51-2.94,28.51-2.94s16.93,33.3,15.82,41.39-3.12,15.27-9.93,14-36.65,1-36.65,1Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M826.77,562.59c.56,0,28.52-2.94,28.52-2.94S872.21,593,871.11,601s-3.13,15.27-9.93,14-36.66,1-36.66,1Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M847.84,547s25.66,13.8,26.21,18-13.06-1.84-16-2.58a38.14,38.14,0,0,0-5.89-.92l-19.61.53Z" transform="translate(-15.95 -18.56)" fill="#cf6f80"/><circle cx="871.16" cy="414.46" r="2.7" opacity="0.1"/><circle cx="871.16" cy="413.36" r="2.7" fill="#3f3d56"/><circle cx="876.13" cy="531.34" r="2.7" opacity="0.1"/><circle cx="876.13" cy="530.23" r="2.7" fill="#3f3d56"/><circle cx="873.86" cy="472.9" r="2.7" opacity="0.1"/><circle cx="873.86" cy="471.8" r="2.7" fill="#3f3d56"/><path d="M952.05,560.94s1.84,2.76,0,4,.18,4.42.18,4.42-4.59,2.68-2.57,5.11.74,13.34.74,13.34L944.88,597s.33,5.89.35,13.85c0,12.42-.73,29.88-4.77,37.84L941,714s-19.33,7.07-35.51,4.91l-2.4-104.8s3.5-59.43,4.79-70.83a118.65,118.65,0,0,0,.92-17.85s-.55-17.84-2.4-26.11c0,0-2-35.88-2.2-45.81-.09-4.75.16-18.61.44-31.79.31-14.41.66-28,.66-28l-3.65-28.89s3.65-.36,4.75,1.1a10.53,10.53,0,0,0,1.6,1.23h0c6.31,4.26,28.57,17.36,28.57,17.36s12.32,4.9,15.27,11.92,5,12,6.43,14,2.21,11.4,2.21,11.4,4.24,17.3,7.55,20.23,5.69,21.53,5.69,21.53l-29.25,23s-2.57,38.26-3.12,39.74S952.05,560.94,952.05,560.94Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M953.16,560.94s1.83,2.76,0,4,.17,4.42.17,4.42-4.59,2.68-2.57,5.11.74,13.34.74,13.34L946,597s.33,5.89.36,13.85c0,12.42-.73,29.88-4.77,37.84l.55,65.31s-19.33,7.07-35.51,4.91l-2.39-104.8s3.49-59.43,4.79-70.83a117.56,117.56,0,0,0,.91-17.85s-.55-17.84-2.39-26.11c0,0-2-35.88-2.21-45.81-.09-4.75.16-18.61.44-31.79.31-14.41.66-28,.66-28l-4.82-29.28s4.82,0,5.93,1.49a9.49,9.49,0,0,0,1.6,1.23h0c6.3,4.26,28.56,17.36,28.56,17.36S950,389.42,953,396.44s5,12,6.43,14,2.21,11.4,2.21,11.4,4.24,17.3,7.55,20.23,5.7,21.53,5.7,21.53l-29.25,23s-2.57,38.26-3.13,39.74S953.16,560.94,953.16,560.94Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M918.13,402.21l2.65,7.7-13.91,14c.31-14.41.66-28,.66-28l-4.82-29.27s4.82,0,5.93,1.49a9.49,9.49,0,0,0,1.6,1.23h0l11.82,34.09Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M917,400l2.65,7.69-13.9,14c.3-14.41.66-28,.66-28l-4.83-29.28s4.83,0,5.93,1.49a10,10,0,0,0,1.6,1.23h0L921,401.25Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M917,323.81a34.11,34.11,0,0,1-1.68,10.61,1.42,1.42,0,0,1-1.08-.26c-.27-9-4.69-17.46-10.14-24.65a26.11,26.11,0,0,0-5.5-5.7,10.77,10.77,0,0,0-7.46-2.11c-3,.41-5.65,2.45-8.68,2.71-4,.33-7.58-2.44-11.55-2.57a11.32,11.32,0,0,0-8.49,3.94,23.16,23.16,0,0,0-4.55,8.43,49.38,49.38,0,0,0-2.54,14.56c-.05,2.8-.32,6.31-2.92,7.33a14.9,14.9,0,0,0-3.77-11.4l-.06-.07c0-.28,0-.54,0-.82a34.22,34.22,0,0,1,68.44,0Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M897,269.48a23.56,23.56,0,0,0-16.62-1.3c-2.77.82-5.38,2.15-8.19,2.82-6,1.45-13-.12-18.15,3.39-2.86,2-4.58,5.16-6.18,8.24l-4,7.61c-2.18,4.17-4.38,8.41-5.29,13s-.36,9.73,2.55,13.43c2.11,2.68,5.25,4.37,7.55,6.9A15,15,0,0,1,852.43,335c2.6-1,2.86-4.53,2.92-7.33a49.44,49.44,0,0,1,2.54-14.56,23.16,23.16,0,0,1,4.55-8.43,11.33,11.33,0,0,1,8.49-3.95c4,.14,7.59,2.91,11.55,2.57,3-.25,5.66-2.29,8.68-2.7a10.72,10.72,0,0,1,7.46,2.11,25.62,25.62,0,0,1,5.49,5.7c5.46,7.2,9.89,15.62,10.15,24.65,1.13.82,2.76-.26,3.32-1.54s.58-2.78,1.29-4c.82-1.41,2.39-2.17,3.62-3.23,3.12-2.69,3.9-7.22,3.78-11.33s-.92-8.28-.14-12.32c.47-2.47,1.53-4.8,2.11-7.25s.65-5.2-.72-7.31c-2-3.09-6.21-3.71-9.88-4-4.17-.36-7.9.1-10.56-3.41a39.09,39.09,0,0,0-4.2-5.14C902.33,273,897,269.7,897,269.48Z" transform="translate(-15.95 -18.56)" fill="#512e4e"/><path d="M788.28,480.36l-10.44-19.31-3.31,29.8s1.84,13.24,1.47,15.27,7.54,20.23,7.54,20.23,26.13,46.55,36.8,48.94l36-25.76-9.56-12.14s-3.31-1.29-4.14,0c0,0-17.76-30.54-19.59-32.74s-1.48-6.63-1.48-6.63-2.76-2.94-1.84-5.7S814.45,480,814.45,480l5.7-5.33Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M778.39,458.84l-2.76,2.21-3.31,29.8s1.84,13.24,1.47,15.27,7.55,20.23,7.55,20.23,26.12,46.55,36.79,48.94l36.06-25.76-9.57-12.14s-3.31-1.29-4.14,0c0,0-17.75-30.54-19.59-32.74s-1.47-6.63-1.47-6.63-2.76-2.94-1.84-5.7S812.24,480,812.24,480l5.7-5.33Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M949.66,575.62c2,2.43.74,13.35.74,13.35l-5.52,9.13s.33,5.9.35,13.86l-9.28,2.9a5.52,5.52,0,0,1-7.16-5.44l1.61-51.6,21.65,8.27c-1.84,1.28.18,4.42.18,4.42S947.64,573.19,949.66,575.62Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M950.76,574.52c2,2.42.74,13.34.74,13.34L946,597s.33,5.89.36,13.85l-9.45,2.95a5.39,5.39,0,0,1-7-5.31l1.61-51.78L953.16,565c-1.85,1.28.17,4.42.17,4.42S948.74,572.09,950.76,574.52Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M957.94,549.9s-1.47,9.39-5.15,9.94-5.33,15.19-9,14.68-1.24-13.62-1.11-16.16-4-13.06-.92-15.45,12.88,0,12.88,0Z" transform="translate(-15.95 -18.56)" fill="#cf6f80"/><path d="M965.72,477.6l6.93-14s2.77,10.67,2.77,16.37,3.86,6.26,3.86,6.26,4.23,5,2,8.65-3.12,12.69-3.12,12.69.73,17.29-2.58,19.68-4.05,8.1-4.05,8.1-6.07,10.85-5.88,13.43-8.46,20.05-8.46,20.05,4.23-21.71-20.42-31.09c0,0-.19-7.36,1.65-9.38s4.71-3,2.91-13.16-.52-22.41-.52-24.86,5.52-17.72,5.52-17.72Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M968.8,461.6l6.06,2s2.77,10.67,2.77,16.37,3.86,6.26,3.86,6.26,4.23,5,2,8.65-3.13,12.69-3.13,12.69.74,17.29-2.57,19.68-4,8.1-4,8.1-6.07,10.85-5.88,13.43-8.47,20.05-8.47,20.05,4.23-21.71-20.42-31.09c0,0-.18-7.36,1.66-9.38s4.71-3,2.91-13.16-.52-22.41-.52-24.86,5.52-17.72,5.52-17.72Z" transform="translate(-15.95 -18.56)" fill="#fff"/><path d="M834.92,824.47s9.66-6.07,16-1.66S834.92,824.47,834.92,824.47Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><path d="M910,805.7s8.55-1.1,15.73,6.63S910,805.7,910,805.7Z" transform="translate(-15.95 -18.56)" opacity="0.1"/><g opacity="0.1"><path d="M922.49,322.09c-1.23,1.07-2.81,1.82-3.63,3.23-.7,1.21-.72,2.71-1.28,4s-2.19,2.36-3.33,1.54c-.26-9-4.69-17.45-10.14-24.65a25.57,25.57,0,0,0-5.49-5.69,10.75,10.75,0,0,0-7.47-2.12c-3,.41-5.64,2.45-8.67,2.71-4,.33-7.59-2.44-11.56-2.57a11.28,11.28,0,0,0-8.48,3.94,23.16,23.16,0,0,0-4.55,8.43,49.44,49.44,0,0,0-2.54,14.56c-.06,2.79-.32,6.27-2.9,7.31a13.84,13.84,0,0,1,0,2.23c2.61-1,2.87-4.53,2.93-7.33a49.44,49.44,0,0,1,2.54-14.56,23.16,23.16,0,0,1,4.55-8.43,11.32,11.32,0,0,1,8.48-3.95c4,.14,7.6,2.91,11.56,2.57,3-.25,5.66-2.29,8.67-2.7a10.75,10.75,0,0,1,7.47,2.11,25.62,25.62,0,0,1,5.49,5.7c5.45,7.2,9.88,15.62,10.14,24.65,1.14.82,2.77-.26,3.33-1.54s.58-2.78,1.28-4c.82-1.41,2.4-2.17,3.63-3.23,3.12-2.69,3.9-7.22,3.78-11.33,0-.13,0-.25,0-.38C926.1,316.17,925.15,319.8,922.49,322.09Z" transform="translate(-15.95 -18.56)"/><path d="M848.66,321.39c-2.29-2.53-5.43-4.23-7.54-6.91a14.51,14.51,0,0,1-2.91-8.18,15.41,15.41,0,0,0,2.91,10.39c2.11,2.68,5.25,4.37,7.54,6.9a15,15,0,0,1,3.78,8.92A15,15,0,0,0,848.66,321.39Z" transform="translate(-15.95 -18.56)"/><path d="M928.24,291.19c-.59,2.45-1.64,4.78-2.12,7.25a23.15,23.15,0,0,0-.31,5.06,19.41,19.41,0,0,1,.31-2.85c.48-2.47,1.53-4.8,2.12-7.25a12.56,12.56,0,0,0,.33-4.14A13.9,13.9,0,0,1,928.24,291.19Z" transform="translate(-15.95 -18.56)"/></g><ellipse cx="132.73" cy="823.23" rx="97.44" ry="15.65" fill="#00bfa6" opacity="0.1"/><rect x="129.6" y="523.42" width="6.27" height="141.17" fill="#535461"/><path d="M191.23,682.73l-.4,6.36-.55,9-.23,3.74-.56,9-.24,3.74-.55,9-6.33,102.07a17.28,17.28,0,0,1-17.25,16.22H132.25A17.27,17.27,0,0,1,115,825.57L108.67,723.5l-.55-9-.23-3.74-.57-9-.23-3.74-.55-9-.4-6.36a9,9,0,0,1,8.94-9.51H182.3A9,9,0,0,1,191.23,682.73Z" transform="translate(-15.95 -18.56)" fill="#3f3d56"/><polygon points="174.88 670.52 174.32 679.5 91.14 679.5 90.58 670.52 174.88 670.52" fill="#9d9cb5"/><polygon points="174.09 683.24 173.54 692.22 91.93 692.22 91.37 683.24 174.09 683.24" fill="#9d9cb5"/><polygon points="173.3 695.97 172.75 704.94 92.72 704.94 92.16 695.97 173.3 695.97" fill="#9d9cb5"/><path d="M97,594.9c36.52,26.42,51.73,67.74,51.73,67.74s-44-1.51-80.53-27.93S16.44,567,16.44,567,60.44,568.48,97,594.9Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M16.44,567s45.67,25.35,60.32,46.34,71.93,49.32,71.93,49.32" transform="translate(-15.95 -18.56)" fill="none" stroke="#535461" stroke-miterlimit="10" stroke-width="2"/><path d="M120.53,541.68c19.88,14.37,28.16,36.86,28.16,36.86s-24-.82-43.83-15.19S76.7,526.48,76.7,526.48,100.66,527.3,120.53,541.68Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M76.7,526.48s24.86,13.8,32.84,25.22,39.15,26.84,39.15,26.84" transform="translate(-15.95 -18.56)" fill="none" stroke="#535461" stroke-miterlimit="10" stroke-width="2"/><path d="M177.57,577.4c-22.83,25.09-27.66,57.88-27.66,57.88s32.19-7.9,55-33,27.66-57.88,27.66-57.88S200.4,552.31,177.57,577.4Z" transform="translate(-15.95 -18.56)" fill="#00bfa6"/><path d="M232.59,544.41s-29.74,25.72-37.3,43.44-45.38,47.43-45.38,47.43" transform="translate(-15.95 -18.56)" fill="none" stroke="#535461" stroke-miterlimit="10" stroke-width="2"/></svg>
            
          <div class="btn-box"> <a href="#" class="theme-btn">View Details</a></div>
        </div>
      </div>
    </div>
    <!--  Single Ends  -->
    <div class="col-md-6 service-block">
      <div class="service-block-one">
        <div class="inner-box">
          
          <i class="fas fa-user-md" style="color:red;font-size:40px;"></i>


          <h3 ><a href="#">Nurse</a></h3>
          <p>We provide registered and experienced Nurses for taking care of a patient and serve basic medical aid, including Injection, Dressing, Catheterization, NG Tube, Cannula etc.</p>
          <svg id="ba65d029-7b6e-4d16-9739-50ea7099b679" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="100%" height="400" viewBox="0 0 888 618.10603"><path d="M897.95656,235.99009l-68.50224.66737c-3.21977-15.85137-14.03811-57.44279-4.29525-68.78728A16.67423,16.67423,0,0,1,842.723,152.94961h0c10.61742-16.61983,28.30223-14.12446,40.255-3.74465,12.02932,4.15075,16.56454,11.52481,14.9786,21.53174,8.90863,7.798,10.55217,17.28535,6.55313,28.08487Z" transform="translate(-156 -140.94698)" fill="#2f2e41"/><path d="M891.36207,278.18922l-49.42241-6.8431-9.88449-14.44655c13.61613-9.03186,18.43428-21.64693,12.16552-38.77759l34.21552-.76034c-1.60321,15.25509,3.4416,27.06668,17.48793,34.21552Z" transform="translate(-156 -140.94698)" fill="#ffb9b9"/><path d="M830.255,723.96651l-1.88979,25.835a8.22428,8.22428,0,0,0,8.69988,8.80928L850.335,757.807a4.19488,4.19488,0,0,0,3.81529-5.2044l-7.36591-29.46277Z" transform="translate(-156 -140.94698)" fill="#e6e6e6"/><path d="M873.21559,723.13984l-7.36591,29.46277a4.19488,4.19488,0,0,0,3.81529,5.2044l13.26994.80373a8.22428,8.22428,0,0,0,8.69988-8.80928l-1.88979-25.835Z" transform="translate(-156 -140.94698)" fill="#e6e6e6"/><polygon points="734.602 586.606 716.694 584.809 698.866 394.239 692.128 584.195 674.534 583.565 644.881 320.485 758.172 320.485 734.602 586.606" fill="#00bfa6"/><circle cx="707.22931" cy="55.125" r="34.21552" fill="#ffb9b9"/><path d="M930.9,467.51509l-138.38276,1.52069c20.53674-78.18094,32.82143-150.80436,11.40517-200.731l34.21552-16.72758c16.49787,17.20783,34.87135,15.43378,54.74483-1.52069l32.69483,8.36379C919.97784,323.89141,922.48766,394.0114,930.9,467.51509Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M754.5,386.91853l85.919,34.21552,19.20933,5.6498a6.645,6.645,0,0,0,8.32164-4.76336h0a6.645,6.645,0,0,0-3.78319-7.69957l-19.94607-6.11272-60.06724-34.97586,12.54569-33.075L770.46724,326.091Z" transform="translate(-156 -140.94698)" fill="#ffb9b9"/><path d="M755.26034,324.57026c16.34695,6.37738,29.34874,17.26137,39.53794,31.93448l31.93448-46.381-22.81035-41.819Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M901.792,190.52671c-13.88705-3.57812-27.54045-4.06939-40.81285.46912-8.45455,4.09479-18.60778,3.7175-29.89922.34366V157.20263l60.95868,1.62557Z" transform="translate(-156 -140.94698)" fill="#2f2e41"/><path d="M840.13379,347.053A10.14514,10.14514,0,0,0,830,357.18681l4,83.73242A10.14514,10.14514,0,0,0,844.13379,451.053h45.73242A10.14514,10.14514,0,0,0,900,440.91923l4-83.73242A10.14514,10.14514,0,0,0,893.86621,347.053Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M969.89,380.593,895,410.413l-5.65,2.25c-.18.07-.36.13-.55.19l-18.93,5.57c-2.42.71-5.77-2.55-7.73-4.8a6.08507,6.08507,0,0,1-.16-7.93,6.74613,6.74613,0,0,1,.86005-.83,5.58864,5.58864,0,0,1,2.5-1.1l18.91-3.72a6.336,6.336,0,0,0,1.93-.72l8.82-5.14,45.79-26.66a6.21845,6.21845,0,0,0,2.69-7.58l-8.74-23.05a6.21114,6.21114,0,0,1,2.87-7.68l14.48-7.76a6.20589,6.20589,0,0,1,8.94,3.9L973.6,373.233A6.21936,6.21936,0,0,1,969.89,380.593Z" transform="translate(-156 -140.94698)" fill="#ffb9b9"/><path d="M974.23966,316.20647c-16.34695,6.37737-29.34874,17.26136-39.53794,31.93448l-31.93448-46.381,22.81035-43.33965Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M886,226.52555c-14.96826,6.22617-30.66333,5.97335-47,0,4.75366-8.114-2.352-14.46886-6-22.65975l61-1.81278C889.33521,209.16865,882.452,217.57561,886,226.52555Z" transform="translate(-156 -140.94698)" fill="#fff"/><polygon points="737.354 62.46 736.646 61.753 737.646 60.753 743.62 53.781 744.38 54.431 738.38 61.431 737.354 62.46" fill="#fff"/><rect x="830.99973" y="198.1481" width="1.00054" height="7.81025" transform="translate(-12.03491 570.53091) rotate(-50.19443)" fill="#fff"/><rect x="880.4712" y="217.30312" width="19.55761" height="1.0002" transform="matrix(0.537, -0.84358, 0.84358, 0.537, 72.44944, 710.89356)" fill="#fff"/><rect x="834.2499" y="208.02442" width="1.0002" height="19.55761" transform="translate(-142.42964 341.26087) rotate(-32.47119)" fill="#fff"/><path d="M897,392.76847V410.885l-6.30677,2.51154c-.20091.07814-.40183.14511-.61391.21209L868.949,419.826c-2.70128.79249-6.44071-2.84639-8.62849-5.35792a6.79238,6.79238,0,0,1-.17864-8.85175,7.53018,7.53018,0,0,1,.96-.9265,6.23835,6.23835,0,0,1,2.79059-1.2279l21.108-4.15237a7.072,7.072,0,0,0,2.15433-.80372Z" transform="translate(-156 -140.94698)" fill="#fff"/><path d="M906.13975,328.1489h-3.6137c0-51.11056-10.52349-86.7288-20.77877-86.7288l-.90343-3.6137c9.197,0,15.06047,14.824,18.35965,27.26023C903.67651,281.926,906.13975,304.329,906.13975,328.1489Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M823.02465,315.501H819.411c0-46.80915,10.59628-75.8877,26.19933-75.8877l-.90343,3.6137C833.91428,243.227,823.02465,265.57481,823.02465,315.501Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><circle cx="748.3329" cy="188.10534" r="9.03425" fill="#3f3d56"/><path d="M808.56985,337.18315h-3.6137c0-12.95188,7.2949-23.48905,16.26165-23.48905v3.6137C814.24361,317.3078,808.56985,326.22383,808.56985,337.18315Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M837.47945,337.18315h-3.6137c0-10.95932-5.67375-19.87535-12.648-19.87535v-3.6137C830.18456,313.6941,837.47945,324.23127,837.47945,337.18315Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><circle cx="679.6726" cy="197.13959" r="3.6137" fill="#3f3d56"/><circle cx="650.763" cy="197.13959" r="3.6137" fill="#3f3d56"/><path d="M371.27061,216.64442,307.80454,227.392a6.42418,6.42418,0,0,1-7.27008-4.61266c-4.58533-16.54945-14.172-38.13882-4.86434-48.97662a17.80544,17.80544,0,0,1,18.75545-15.93281h0c11.33772-17.74734,30.22229-15.08269,42.98594-3.99869,12.84541,4.43234,17.6883,12.30667,15.99477,22.99248,5.54925,4.85742,8.45864,10.32871,9.07208,16.33389a23.58911,23.58911,0,0,1-6.45376,18.35077Z" transform="translate(-156 -140.94698)" fill="#2f2e41"/><path d="M361.40329,266.60948l-49.20045-2.89414c4.82175-11.06687,6.74782-21.72377,4.82358-31.83558h36.65915C353.60249,239.64361,357.46606,253.07369,361.40329,266.60948Z" transform="translate(-156 -140.94698)" fill="#9f616a"/><path d="M302.17961,721.236l-2.018,27.58763a8.78223,8.78223,0,0,0,9.29009,9.40691l14.17019-.85826a4.47947,4.47947,0,0,0,4.07413-5.55747l-7.86563-31.46157Z" transform="translate(-156 -140.94698)" fill="#e6e6e6"/><path d="M348.05471,720.35321l-7.86563,31.46157a4.47947,4.47947,0,0,0,4.07413,5.55747l14.17019.85826a8.78223,8.78223,0,0,0,9.29009-9.40691l-2.018-27.58763Z" transform="translate(-156 -140.94698)" fill="#e6e6e6"/><polygon points="210.62 584.119 191.498 582.2 172.46 378.701 165.265 581.544 146.478 580.871 114.813 299.944 235.79 299.944 210.62 584.119" fill="#00bfa6"/><circle cx="180.3231" cy="66.10711" r="36.53674" fill="#9f616a"/><path d="M377.50189,189.6c-14.82916-2.58256-29.40882-2.93714-43.58164.3386-9.02812,2.95548-19.87016,2.68316-31.92763.248V165.54779l65.0942,1.17328Z" transform="translate(-156 -140.94698)" fill="#2f2e41"/><path d="M360.63859,236.37015c-15.98373,6.64857-32.74357,6.37859-50.18855,0,5.07616-8.66447-2.51161-15.45044-6.407-24.197l65.13832-1.93576C364.20006,217.83574,356.84992,226.813,360.63859,236.37015Z" transform="translate(-156 -140.94698)" fill="#fff"/><rect x="301.94089" y="206.06748" width="1.00054" height="8.33965" transform="translate(-208.68499 167.04408) rotate(-50.19486)" fill="#fff"/><rect x="354.73467" y="226.55581" width="20.88467" height="1.0002" transform="matrix(0.537, -0.84358, 0.84358, 0.537, -178.46379, 272.23589)" fill="#fff"/><rect x="305.41177" y="216.61358" width="1.0002" height="20.88467" transform="matrix(0.84366, -0.53687, 0.53687, 0.84366, -230.07485, 58.78582)" fill="#fff"/><path d="M266.86126,373.69281l-27.97673-17.36487,23.85922-69.8789a32.96549,32.96549,0,0,1,14.40973-17.11578l8.03736-4.6532.69885,70.49475Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M387.78912,407.6312,383.65,372.17881c-.221-18.71283,2.96247-36.80463,10.55359-53.47473l3.85883-52.09461L355.615,249.24461c-.13019.865-.24084,1.72943-.365,2.5943l-19.894,9.947-19.40174-4.40943.10743-6.20239-38.58857,17.36487c12.76124,59.328,5.801,120.93756-16.14379,193.709l50.83691,13.9007.42267-24.41046,45.3067-3.23615c.46667,7.91968.84167,15.69873,1.05933,23.30536,25.56524,9.412,26.44336,9.256,49.73651-4.22021C399.41528,448.08421,392.0705,427.78953,387.78912,407.6312Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><polygon points="297.051 224.063 271.004 215.381 229.34 166.878 242.062 125.663 299.945 206.699 297.051 224.063" fill="#00bfa6"/><path d="M371.41927,402.56029a7.24568,7.24568,0,0,0,8.65511,5.459l22.11071-5.00728-3.19562-14.11319-22.11118,5.00634a7.23668,7.23668,0,0,0-5.459,8.65511Z" transform="translate(-156 -140.94698)" fill="#e6e6e6"/><path d="M391.30944,386.23409l12.54129,23.15316c21.09424-5.88333,39.37571-24.43091,56.91816-46.30631l-4.82357-15.43543-29.90615,7.71772Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><polygon points="71.79 172.661 95.866 176.96 150.897 255.207 121.662 248.328 71.79 172.661" fill="#e6e6e6"/><path d="M223.51976,312.65011a2.04777,2.04777,0,0,0-1.68024,3.17254l51.43935,78.04626a2.04112,2.04112,0,0,0,1.23887.86532l23.93321,5.631a2.04428,2.04428,0,0,0,2.14046-3.166L244.11415,316.8957a2.03243,2.03243,0,0,0-1.31282-.83611L223.90555,312.685A2.21656,2.21656,0,0,0,223.51976,312.65011Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M255.60782,368.45235l1.42965,14.40006,22.55962-2.23938a7.2354,7.2354,0,0,0-1.42917-14.40006Z" transform="translate(-156 -140.94698)" fill="#e6e6e6"/><path d="M235.99086,366.78436a18.6092,18.6092,0,0,0,18.58724,18.485h3.70954l2.70054-22.50545-22.36037-8.04981Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><polygon points="211.399 71.78 210.692 71.073 211.76 70.005 218.141 62.558 218.9 63.208 212.493 70.683 211.399 71.78" fill="#fff"/><rect y="616.10603" width="888" height="2" fill="#3f3d56"/><path d="M495,756.053H705V501.33662c0-13.4877-13.28516-24.4604-29.61426-24.4604H524.61426c-16.32959,0-29.61426,10.9727-29.61426,24.4604Z" transform="translate(-156 -140.94698)" fill="#e6e6e6"/><path d="M511,745.52H689V529.6175c0-11.43243-11.26075-20.7331-25.10161-20.7331H536.10161C522.26034,508.8844,511,518.18507,511,529.6175Z" transform="translate(-156 -140.94698)" fill="#fff"/><path d="M493.41357,457.053c-5.19043,0-9.41357,3.48817-9.41357,7.7753v22.44387c0,4.28712,4.22314,7.7753,9.41357,7.7753H706.58691c5.19043,0,9.41309-3.48818,9.41309-7.7753V464.82832c0-4.28713-4.22266-7.7753-9.41309-7.7753Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M537.18078,717.83565a9.22367,9.22367,0,0,0-9.19666,9.19663v0a9.22369,9.22369,0,0,0,9.19666,9.19666H554.395V717.83565Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M570.19444,717.83565H553.4518V736.229h16.74264a9.22369,9.22369,0,0,0,9.19666-9.19666v0A9.22367,9.22367,0,0,0,570.19444,717.83565Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M576.19558,720.08792a9.1437,9.1437,0,0,1,2.25227,6.00111v0a9.22369,9.22369,0,0,1-9.19666,9.19666H553.4518v.94325h16.74264a9.22369,9.22369,0,0,0,9.19666-9.19666v0A9.1765,9.1765,0,0,0,576.19558,720.08792Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M614.86141,579.30953a9.22367,9.22367,0,0,0-13.00036-.38384l0,0a9.22369,9.22369,0,0,0-.38382,13.00038l11.8078,12.52624,13.3842-12.61656Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M637.50651,603.33246l-11.4843-12.18306L612.638,603.766l11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.22366,9.22366,0,0,0,637.50651,603.33246Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M639.984,609.24419a9.14368,9.14368,0,0,1-2.8219,5.75525l0,0a9.22369,9.22369,0,0,1-13.00038-.38382L613.32438,603.119l-.68637.647,11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.17654,9.17654,0,0,0,639.984,609.24419Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M565.86141,608.30953a9.22367,9.22367,0,0,0-13.00036-.38384l0,0a9.22369,9.22369,0,0,0-.38382,13.00038l11.8078,12.52624,13.3842-12.61656Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M588.50651,632.33246l-11.4843-12.18306L563.638,632.766l11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.22366,9.22366,0,0,0,588.50651,632.33246Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M590.984,638.24419a9.14368,9.14368,0,0,1-2.8219,5.75525l0,0a9.22369,9.22369,0,0,1-13.00038-.38382L564.32438,632.119l-.68637.647,11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.17654,9.17654,0,0,0,590.984,638.24419Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M614.86141,635.30953a9.22367,9.22367,0,0,0-13.00036-.38384l0,0a9.22369,9.22369,0,0,0-.38382,13.00038l11.8078,12.52624,13.3842-12.61656Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M637.50651,659.33246l-11.4843-12.18306L612.638,659.766l11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.22366,9.22366,0,0,0,637.50651,659.33246Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M639.984,665.24419a9.14368,9.14368,0,0,1-2.8219,5.75525l0,0a9.22369,9.22369,0,0,1-13.00038-.38382L613.32438,659.119l-.68637.647,11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.17654,9.17654,0,0,0,639.984,665.24419Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M644.754,692.77653a9.22367,9.22367,0,0,0,.22582-13.00406l0,0a9.22369,9.22369,0,0,0-13.00408-.22581L619.59388,691.5058l12.77828,13.22989Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M621.008,715.7119l12.04259-11.63151L620.27234,690.8505,608.22974,702.482a9.2237,9.2237,0,0,0-.2258,13.00409l0,0A9.22367,9.22367,0,0,0,621.008,715.7119Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M615.12683,718.261a9.14377,9.14377,0,0,1-5.78912-2.75175l0,0a9.22369,9.22369,0,0,1,.2258-13.00408L620.92763,691.529l-.65529-.67846L608.22974,702.482a9.2237,9.2237,0,0,0-.2258,13.00409l0,0A9.17651,9.17651,0,0,0,615.12683,718.261Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M578.754,663.77653a9.22367,9.22367,0,0,0,.22582-13.00406l0,0a9.22369,9.22369,0,0,0-13.00408-.22581L553.59388,662.5058l12.77828,13.22989Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M555.008,686.7119l12.04259-11.63151L554.27234,661.8505,542.22974,673.482a9.2237,9.2237,0,0,0-.2258,13.00409l0,0A9.22367,9.22367,0,0,0,555.008,686.7119Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M549.12683,689.261a9.14377,9.14377,0,0,1-5.78912-2.75175l0,0a9.22369,9.22369,0,0,1,.2258-13.00408L554.92763,662.529l-.65529-.67846L542.22974,673.482a9.2237,9.2237,0,0,0-.2258,13.00409l0,0A9.17651,9.17651,0,0,0,549.12683,689.261Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M672.754,628.77653a9.22367,9.22367,0,0,0,.22582-13.00406l0,0a9.22369,9.22369,0,0,0-13.00408-.22581L647.59388,627.5058l12.77828,13.22989Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M649.008,651.7119l12.04259-11.63151L648.27234,626.8505,636.22974,638.482a9.2237,9.2237,0,0,0-.2258,13.00409l0,0A9.22367,9.22367,0,0,0,649.008,651.7119Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M643.12683,654.261a9.14377,9.14377,0,0,1-5.78912-2.75175l0,0a9.22369,9.22369,0,0,1,.2258-13.00408L648.92763,627.529l-.65529-.67846L636.22974,638.482a9.2237,9.2237,0,0,0-.2258,13.00409l0,0A9.17651,9.17651,0,0,0,643.12683,654.261Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M651.86141,701.30953a9.22367,9.22367,0,0,0-13.00036-.38384l0,0a9.22369,9.22369,0,0,0-.38382,13.00038l11.8078,12.52624,13.3842-12.61656Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M674.50651,725.33246l-11.4843-12.18306L649.638,725.766l11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.22366,9.22366,0,0,0,674.50651,725.33246Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M676.984,731.24419a9.14368,9.14368,0,0,1-2.8219,5.75525l0,0a9.22369,9.22369,0,0,1-13.00038-.38382L650.32438,725.119l-.68637.647,11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.17654,9.17654,0,0,0,676.984,731.24419Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M586.86141,700.30953a9.22367,9.22367,0,0,0-13.00036-.38384l0,0a9.22369,9.22369,0,0,0-.38382,13.00038l11.8078,12.52624,13.3842-12.61656Z" transform="translate(-156 -140.94698)" fill="#3f3d56"/><path d="M609.50651,724.33246l-11.4843-12.18306L584.638,724.766l11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.22366,9.22366,0,0,0,609.50651,724.33246Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M611.984,730.24419a9.14368,9.14368,0,0,1-2.8219,5.75525l0,0a9.22369,9.22369,0,0,1-13.00038-.38382L585.32438,724.119l-.68637.647,11.4843,12.18305a9.2237,9.2237,0,0,0,13.00038.38383l0,0A9.17654,9.17654,0,0,0,611.984,730.24419Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M605.15789,667.31618A13.26311,13.26311,0,0,1,594.54737,680.314a13.39494,13.39494,0,0,1-5.30526,0,13.26647,13.26647,0,0,1,0-25.99579,13.39692,13.39692,0,0,1,5.30526,0A13.26319,13.26319,0,0,1,605.15789,667.31618Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M594.54737,654.31826V680.314a13.39494,13.39494,0,0,1-5.30526,0V654.31826a13.39692,13.39692,0,0,1,5.30526,0Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M611.15789,614.31618A13.26311,13.26311,0,0,1,600.54737,627.314a13.39494,13.39494,0,0,1-5.30526,0,13.26647,13.26647,0,0,1,0-25.99579,13.39692,13.39692,0,0,1,5.30526,0A13.26319,13.26319,0,0,1,611.15789,614.31618Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M600.54737,601.31826V627.314a13.39494,13.39494,0,0,1-5.30526,0V601.31826a13.39692,13.39692,0,0,1,5.30526,0Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M611.15789,690.31618A13.26311,13.26311,0,0,1,600.54737,703.314a13.39494,13.39494,0,0,1-5.30526,0,13.26647,13.26647,0,0,1,0-25.99579,13.39692,13.39692,0,0,1,5.30526,0A13.26319,13.26319,0,0,1,611.15789,690.31618Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M600.54737,677.31826V703.314a13.39494,13.39494,0,0,1-5.30526,0V677.31826a13.39692,13.39692,0,0,1,5.30526,0Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M644.15789,727.31618A13.26311,13.26311,0,0,1,633.54737,740.314a13.39494,13.39494,0,0,1-5.30526,0,13.26647,13.26647,0,0,1,0-25.99579,13.39692,13.39692,0,0,1,5.30526,0A13.26319,13.26319,0,0,1,644.15789,727.31618Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M633.54737,714.31826V740.314a13.39494,13.39494,0,0,1-5.30526,0V714.31826a13.39692,13.39692,0,0,1,5.30526,0Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M673.30955,659.24039a13.26311,13.26311,0,0,1,1.995,16.65977,13.3949,13.3949,0,0,1-3.68171,3.81979,13.26649,13.26649,0,0,1-18.717-18.04042,13.397,13.397,0,0,1,3.68172-3.81978A13.26318,13.26318,0,0,1,673.30955,659.24039Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M656.58762,657.85975l18.717,18.04041a13.3949,13.3949,0,0,1-3.68171,3.81979l-18.717-18.04042a13.397,13.397,0,0,1,3.68172-3.81978Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M677.30955,688.24039a13.26311,13.26311,0,0,1,1.995,16.65977,13.3949,13.3949,0,0,1-3.68171,3.81979,13.26649,13.26649,0,0,1-18.717-18.04042,13.397,13.397,0,0,1,3.68172-3.81978A13.26318,13.26318,0,0,1,677.30955,688.24039Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M660.58762,686.85975l18.717,18.04041a13.3949,13.3949,0,0,1-3.68171,3.81979l-18.717-18.04042a13.397,13.397,0,0,1,3.68172-3.81978Z" transform="translate(-156 -140.94698)" opacity="0.2"/><path d="M558.30955,695.24039a13.26311,13.26311,0,0,1,1.995,16.65977,13.3949,13.3949,0,0,1-3.68171,3.81979,13.26649,13.26649,0,0,1-18.717-18.04042,13.397,13.397,0,0,1,3.68172-3.81978A13.26318,13.26318,0,0,1,558.30955,695.24039Z" transform="translate(-156 -140.94698)" fill="#00bfa6"/><path d="M541.58762,693.85975l18.717,18.04041a13.3949,13.3949,0,0,1-3.68171,3.81979l-18.717-18.04042a13.397,13.397,0,0,1,3.68172-3.81978Z" transform="translate(-156 -140.94698)" opacity="0.2"/><rect x="354.5" y="316.10603" width="5" height="37" opacity="0.2"/><rect x="383.5" y="316.10603" width="5" height="37" opacity="0.2"/><rect x="412.5" y="316.10603" width="5" height="37" opacity="0.2"/><rect x="441.5" y="316.10603" width="5" height="37" opacity="0.2"/><rect x="470.5" y="316.10603" width="5" height="37" opacity="0.2"/><rect x="499.5" y="316.10603" width="5" height="37" opacity="0.2"/><rect x="528.5" y="316.10603" width="5" height="37" opacity="0.2"/></svg>    
          <div class="btn-box"> <a href="#" class="theme-btn">View Details</a></div>
        </div>
    </div>
    </div>
      </div>        
        
    </div>
        
    
        
    
<!--
    <div class="reviews-wrapper" style="z-index: 1;" data-aos="fade-up;" aos-duration="5000" data-aos-mirror="true">
            
                   
                <div class="reviews reviews-row-1" >

                            <ul style="list-style: none;">
                                    <li><h2 style="width:100%;text-align: center;margin-bottom:100px;color:#187975;">Reviews</h2>    </li>
                            </ul>
                              <ul style="list-style: none;">
                                    <li class="reviews-slider-prev"></li>
                              </ul>

                              <ul class="active-review-slide">

                                    <li class="card">
                                    </li>
                                    <li class="card">
                                    </li>
                                    <li class="card">
                                    </li>             
                                    <li class="card">
                                    </li>

                                </ul>


                              <ul class="under-review-slide">

                                    <li class="card">
                                    </li>
                                  <li class="card">
                                    </li>
                                    <li class="card">
                                    </li>
                                    <li class="card">
                                    </li>

                                </ul>

                              <ul class="under-review-slide"></ul>

                              <ul style="list-style: none;">
                                    <li class="reviews-slider-next">
                                    </li>
                             </ul>

                    </div>       

                    
                

               
    </div>    
-->
     <div class="contacts-wrapper" id="contacts" data-aos="fade-down;" aos-duration="5000" data-aos-mirror="true">
            
             <div class="contacts">
                 <div class="contact-us" >
                     <h1 class="section-h1" style="color:#165e5d;">Contact Us</h1>
                     <p style=" color:#187975;text-align: center; margin:30px;">We want to be a part of your journey.</p>
                     <ul style="list-style-type: none;width: 50%;display:inline-flex; ">
                        <li style="width:100%;" > <i class="fab fa-facebook-square" style="font-size: 40px;color:#187975; "></i></li>
                          <li style="width:100%;"><i class="fab fa-instagram-square" style="font-size: 40px;color:#187975"></i></li>
                         <li style="width:100%;"><i class="fab fa-linkedin" style="font-size: 40px;color:#187975"></i></li>
                     </ul>
                 </div>
                 <div class="email-us" style="flex:1;height:100%;">
                          <div class="inputGroup">      
                            <input type="text" required />
                            <span class="inputBar"></span>
                            <label>Name</label>
                          </div>

                          <div class="inputGroup">      
                            <input type="text" required />
                            <span class="inputBar"></span>
                            <label>Email</label>
                          </div>

                          <div class="inputGroup">      
                            <textarea type="textarea" required></textarea>
                            <span class="inputBar"></span>
                            <label>Message</label>
                          </div>

                          <button class="contact-formn-button">Send</button>
                </div>
            </div>
                
        </div>    
        
        
        
</div>        
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>   
    <script>
    
                const hamburger= document.querySelector(".hamburger");
        const navLinks= document.querySelector(".nav-links");
        const links= document.querySelectorAll(".nav-links li");
            hamburger.addEventListener("click",()=>{
            navLinks.classList.toggle("open");
            
            links.forEach(function(element){
            
                element.classList.toggle("fade");
            });
            
            hamburger.classList.toggle("toggle");
        });
        

        
//const reviews= document.querySelectorAll(".reviews"); 
//const reviews= document.querySelectorAll(".reviews");  
//
//    
//    
//     
//
//    
//const reviewsUL= reviews[0].querySelectorAll(".reviews ul");  
//
//    
//const reviewsSliderPrev= reviews[0].querySelector(".reviews-slider-prev");
//   
//    
//    
//const reviewsSliderNext= reviews[0].querySelector(".reviews-slider-next");       
//    
    
    

 
    
    
          
        
        
        
//reviews row 1 starts//    
//reviewsSliderNext.addEventListener('click',reviewsNext1OnClick);     
//    
//reviewsSliderPrev.addEventListener('click',reviewsPrev1OnClick);   
//     
//    
//function reviewsNext1OnClick(){
//    
//     
//    console.log("reviewsNextOnClick");
//     for (i = reviewsUL.length-4; i > 0; i--) {
//        if(reviewsUL[i].className==="active-review-slide" && (reviewsUL.length-4))
//        {
//            
//            reviewsUL[i].classList.remove("active-review-slide");
//            reviewsUL[i].classList.add("under-review-slide");
//            reviewsUL[i+1].classList.remove("under-review-slide");
//            reviewsUL[i+1].classList.add("active-review-slide");
//            
//            console.log("from item no.: "+i+" to item no.: "+(i+1));
//            
//        }
//    } 
//}
//    
//  
//    
//    
//    
//function reviewsPrev1OnClick(){
//    
//     console.log("reviewsPrevOnClick");
//     for (i = 3; i < reviewsUL.length; i++) {
//        if(reviewsUL[i].className==="active-review-slide")
//        {
//            
//            reviewsUL[i].classList.remove("active-review-slide");
//            reviewsUL[i].classList.add("under-review-slide");
//            reviewsUL[i-1].classList.remove("under-review-slide");
//            reviewsUL[i-1].classList.add("active-review-slide");
//            
//            console.log("from item no.: "+i+" to item no.: "+(i-1));
//            
//        }
//    } 
//}    
//reviews row 1 ends//  
        
        
jQuery(document).ready(function() {
         
            // nav button to sections starts//
    
       $(".homeBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".home").offset().top},
        'slow');
});  
    
   
     $(".servicesBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".service-wrapper").offset().top},
        'slow');
});
      $(".reviewsBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".reviews-wrapper").offset().top},
        'slow');
});
    $(".contactsBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".contacts-wrapper").offset().top},
        'slow');
});
   

    
});
 // nav button to sections starts//   
     
window.onscroll = function() {scrollFunction()};    
function scrollFunction() {
    
   
        if ((document.body.scrollTop > 900 || document.documentElement.scrollTop > 900)) {
            document.querySelector(".nav-wrapper").style.background = "#165e5d";
       
        }
        else{
        
            document.querySelector(".nav-wrapper").style.background = "rgba(255,255,255,.1)";
        }
    
        
} 
AOS.init();          
</script>
</body>
</html>    