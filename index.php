<!DOCTYPE html>
<html lang="en">
<head>
    
<title>voice assistant</title>
<style>
    *{
    margin: 0;
    padding: 0;
    }
       .main{
        margin-left: 40px;
      
    width: 95%;
    background:linear-gradient(to top, rgba(0,0,0,0.4)50%,rgba(0,0,0,0.4)50%), url(1.jpg.jpg); 
    background-position: center;
    background-size:cover;
    height: 82vh;
    box-shadow: 10px 5px 5px 5px  #1c2b30;
    }
    .navbar{
      
    width: 1200px;
    height: 70px;
    margin-left: 180px;
    }
    .icon{
    width: 200px;
    float: left;
    height: 70px;
    color:#00ff1e
    }
    .logo{
    color: #00ff1e;
    font-size: 35px;
    font-family: Arial;
    padding-left: 0;
    float: left;
    padding-top: 5px;
    margin-top: 5px
    }
    .menu{
    width: 500px;
    float: left;
    height: 60px;
    margin-left: 120px;
    }
    ul{
    float: left;
    display: flex;
    justify-content: left;
    align-items:left;
    }
    ul li{
    list-style: none;
    margin-left: 140px;
    margin-top: 27px;
    font-size: 14px;
    }
    ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
    }
    ul li a:hover{
    color: #ff7200;
    }
    .search{
    width: 300px;
    float: left;
    margin-left: 130px;
    }
    .srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid #00ff2f;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    }
    .btn{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
    }
    .btn:hover{
    color: #000;
    }
    .btn:focus{
    outline: none;
    }
    .srch:focus{
    outline: none;
    }
    .content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
    }
    .content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
    }
    .content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
    }
    .content .cn{
    width: 160px;
    height: 40px;
    background: #1eff00;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    }
    .content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
    }
    .cn:hover{
    background-color: #fff;
    }
    .content span{
    color: #00ff6e;
    font-size: 65px
    }
    .form{
    width: 220px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: 90px;
    left: 900px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    }
    .form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #2b00ff;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
    }
    .form input{
    width: 220px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
    }
    .form input:focus{
    outline: none;
    }
    ::placeholder{
    color: #fff;
    font-family: Arial;
    }
    .btnn{
    width: 220px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
    }
    .btnn:hover{
    background: #fff;
    color: #ff7200;
    }
    .btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
    }
    .form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
    }
    .form .link a{
    text-decoration: none;
    color: #ff7200;
    }
    .liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
    }
    .icons a{
    text-decoration: none;
    color: #fff;
    }
    .icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
    }
    .icons ion-icon:hover{
    color: #ff7200;
    }
    .loginji
    {
        
        padding:10px;
        height:40px;
        cursor: pointer;
        background-color: #26d620;
        margin-left:30px;
        border-radius: 7px;
        border: none;
        margin-top: 2px;
        transition :.3s ease;
       text-decoration: none;
       
        

    }
    .loginji:hover
    {
        background-color: #fff;
    }
    .p
    {
        margin-left: 40px;
        margin-bottom: 20px;
    }
  
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
/* ############## html element styling ########## */
.learnji:hover
    {
        background-color: orange;
    }
html{
    font-size: 62.5%;
}

body{
    font-family: Arial, Helvetica, sans-serif;
    line-height: 1.7;
}

ul li{
    list-style: none;
}

a{
    font-size: 1.6rem;
    text-decoration: none;
}

p, li{
    font-size: 1.6rem;
    margin-bottom: 0.5em;
    letter-spacing: 0.15em;
}

h1, h2, h3{
    margin-bottom: 0.5em;
    letter-spacing: 0.15em;
    font-weight: 500;
}

/* ######### utility class ###### */

.container{
    max-width: 1200px;
    width: 90%;
    margin: 0 auto;
}


.lg-heading{
    font-size: 3.5rem;
}

.md-heading{
    font-size: 2.2rem;
}


.text-red{
    color: #e63946;
}

.text-light{
    color: #f4f4f4;
}

.text-black{
    color: #333333;
}

.text-gray{
    color: #555555;
}


.btn{
    display: inline-block;
    padding: 0.5em 1.5em;
    font-weight: 500;
    text-transform: uppercase;
    margin: 0.5em 0;
}

.btn-primary{
    background-color: #fff;
    border-radius: 10em;
}
.btn-primary:hover{
    background-color: #fff;
}
.btn-secondary{
    border: 2px solid #e63946;
    border-radius: 1.5em;
    color: #e63946;
    background: #fff;
}
.btn-secondary:hover{
    background-color: #f4f4f4;
}



/* ############### header styling ###################### */
.header{
    position: relative;
    height: 99vh;
    background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("circle-ani.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.navbar{
    padding: 1rem;
}



.navbar .logo{
    float: left;
}

.navbar .nav-items{
    float: right;
    margin-top: 1rem;
}

.navbar .nav-item{
    display: inline-block;
    padding: 1rem;
    text-transform: uppercase;
}

.navbar a:link,
.navbar a:visited{
    color: #f4f4f4;
}

.navbar a{
    padding-bottom: 0.3rem;
}

.navbar a:hover{
    border-bottom: 1px solid #fff;
}

.navbar::after{
    content: "";
    display: block;
    clear: both;
}

/* ########### header content styling ############ */

.header-content{
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    
}

.header-content h1{
    text-transform: uppercase;
    font-weight: 700;
}
.header-content p{
    text-transform: uppercase;
}

/* ########## showcase section styling ########## */
.showcase{
    background: #ddd;
    padding: 10rem 0;
}
 .row{
    height: 350px;
    background: fff;
    box-shadow: 5px 5px 20px 0px #aaa;
}

.row1{
    margin-bottom: 10rem;
}
.row1 .img-box, .row2 .text-box{
    float:left;
    width: 50%;
}
.row2 .img-box, .row1 .text-box{
    float:right; 
    width: 50%;
}

.row .img-box{
    
    height: 100%;
}
.row .text-box{
    padding: 3rem;
}
.row .img-box img{
    display: inline-block;
    width: 100%;
    height: 100%;
    object-fit: cover;
} 
.row::after{
    content: " ";
    display: block;
    clear: both;
}
/* ########## features section styling ############ */
.features{
    padding: 10rem 0;
}
.box-wrapper{
    box-shadow: 5px 5px 20px 0px #000;
}
.box{
    width: 33.33333333333%;
    /* height: 30rem; */
    float: left;
    padding: 2rem;
    text-align: center;
}
.box-1, .box-3{
    background-color: #263238;
    color: #fff;
    
}
.box-2{
    background: linear-gradient(25deg, #d64c7f, #ee4758 50%);
    color: #fff;
}
.box-wrapper::after{
    content: " ";
    display: block;
    clear: both;
}

/* ########### footer styling ########## */
.footer{
    background: #263238;
    color: #f4f4f4;
    padding: 2rem;
    text-align: center;
}
.social-media-links{
    margin: 2rem;
}
/* ########## About page styling ########## */
.bg-dark{
    background-color: #263238;
}

.about{
    padding: 5rem 0;
}
/* .about-heading::after{
    content: "";
    display: block;
    border: 4px solid #e63946;
    width: 100%;
} */
.about-heading{
    border-bottom: 4px solid #e63946;
}

/* ########### about wrapper styling ####### */

.about-wrapper{
    text-align: center;
    margin-top: 2rem;
}
.about-wrapper .left{
    float: left;
    width: 50%;
}
.about-wrapper .right{
    float: right;
    width: 50%;
}
.about-wrapper::after{
    content: " ";
    display: block;
    clear: both;
}
.about-wrapper li::before{
    content: "\2713";
    color: #e63946;
    font-weight: bold;
    padding-right: 1rem;
}
/* ############## count styling ########## */
.counts {
    margin-top: 3rem;
}
.count-item {
    width: 25%;
    float: left;
    text-align: center;
}
.counts::after {
    content: "";
    display: block;
    clear: both;
}
.count-item span {
    font-size: 3rem;
    font-weight: 700;
    color: #e63946;
}
.count-item p{
    font-weight: 700;
    color: #555;
    font-size: 1.5rem;
}

/* ######### banner styling ########## */
.cta-banner{
    background: linear-gradient(25deg, #d64c7f, #ee4758 50%);
    color: #f4f4f4;
    padding: 1rem;
    box-shadow: 5px 5px 10px #000057;
    margin-top: 3rem;
}
.cta-banner-left{
    float: left;
    width: 60%;
}
.cta-banner-right{
    float: right;
    width: 40%;
    text-align: right;
}
.cta-line{
    font-weight: 700;
    font-size: 2rem;
    margin-top: 1.5rem;
}
.btn-cta{
    text-align: center;
    display: inline-block;
    font-weight: 700;
    font-size: 3rem;
    text-transform: uppercase;
    border: 4px solid white;
    padding: 0.3rem 2.5em;
    letter-spacing: 0.5rem;
    color: #f4f4f4;

}
.cta-banner::after{
    content: " ";
    display: block;
    clear: both;
}
/* ######### contact page styling ######### */
.contact-form{
    padding: 5rem 0;
    background: #f7f7f7;
}


.form-wrapper::after{
    content: " ";
    display: block;
    clear: both;
}
.form-wrapper .company-address{
    height: 760px;
    background: #fff ;
    box-shadow: 0px 0px 20px lightgray;
    width: 49%;
    float: left;
    padding: 1rem;
}

.form-wrapper .company-address i{
    display: inline-block;
    margin-right: 1rem;
}
.form-wrapper .company-address h2{
    display: inline-block;
    text-transform: uppercase;
}
.form-wrapper .address-group{
    margin-bottom: 3rem;
}
.form-wrapper .company-address img{
    max-width: 90%;
    min-height: 40rem;
    object-fit: cover;
}

/* ########## form styling ########## */
.form{
    padding: 1rem;
}
.form-wrapper .form{
    height: 760px;
    font-size: 1.6rem;
    background: #fff;
    box-shadow: 0px 0px 20px lightgray;
    width: 49%;
    float: right;
}
/* .form h1::after{
    content: " ";
    display: block;
    border: 3px solid #e63946;
    width: 100%;
} */
.form h1{
    border-bottom: 5px solid #e63946;
}
.form-wrapper .form label{
    display: block;
}
.form-wrapper .form input{
    padding: 0.5rem;
    width: 100%;
}
.form-wrapper .form .form-group{
    margin-bottom: 1.2rem;
}
.form-wrapper .form label::after{
    content: "*";
    color: #e63946;
}
.form-wrapper .form textarea{
    width: 100%;
    height: 300px;
    padding: 1rem;
}
.form-btn{
    display: block;
    margin: 0 auto;
    padding: 0.5em 3em;
    font-size: 1.8rem;
    text-transform: uppercase;
    background: #e63946;
    color: #fff;
    outline: none;
    border: none;
    cursor: pointer;
}

/* ############ media queries ############# */

@media (max-width: 500px){
    html{
        font-size: 50%;
    }
    .navbar .nav-items,
    .navbar .logo{
        float: none;
        display: block;
        width: 100%;
        text-align: center;
    }
    .row{
        height: auto;
        width: 100%;
    }
    .row .img-box, 
    .row .text-box{
        float: none;
        width: 100%;
        text-align: center;
    }
    .features .box{
        float: none;
        width: 100%;
        text-align: center;
        box-shadow: 5px 5px 10px rgba(102, 102, 102, 0.521);
    }
    .features .box-2,
    .features .box-3{
        margin-top: 7rem;
    }
    .box-wrapper{
        box-shadow: none;
    }
    .cta-banner-left,
    .cta-banner-right{
        float: none;
        width: 100%;
        text-align: center;
    }
    .form-wrapper .company-address{
        float: none;
        width: 100%;
        height: auto;
        margin-bottom: 5rem;
    }
    .form-wrapper .form{
        float: none;
        width: 100%;
        height: auto;
    }
  
}
@media (min-width: 501px) and (max-width: 800px){
    html{
        font-size: 50%;
    }
    .navbar .nav-items,
    .navbar .logo{
        float: none;
        display: block;
        width: 100%;
        text-align: center;
    }
    .row{
        height: auto;
        width: 100%;
    }
    .row .img-box, 
    .row .text-box{
        float: none;
        width: 100%;
        text-align: center;
    }
    .features .box{
        float: none;
        width: 100%;
        text-align: center;
        box-shadow: 5px 5px 10px rgba(102, 102, 102, 0.521);
    }
    .features .box-2,
    .features .box-3{
        margin-top: 7rem;
    }
    .box-wrapper{
        box-shadow: none;
    }
    .cta-banner-left,
    .cta-banner-right{
        float: none;
        width: 100%;
        text-align: center;
    }
    .form-wrapper .company-address{
        float: none;
        width: 100%;
        height: auto;
        margin-bottom: 5rem;
    }
    .form-wrapper .form{
        float: none;
        width: 100%;
        height: auto;
    }
}


@media(min-width: 801px) and (max-width: 1200px){
    html{
        font-size: 56.25%;
    }
    .row .text-box h2{
        font-size: 2.2rem;
        font-weight: 500;
    }
}

@media(orientation: landscape) and (max-height: 500px){
    .header{
        height: 90vmax;
    }
}
</style>

</head>

<body style="background: #ffc670;">
<nav style="padding: 15px;height:135px;">
<img src="optimaLOGO.png" alt="" width="110" height="110">
</nav>
    
<div class="main" >
<div class="navbar" >
<div class="icon" >
</div>
<div class="menu">
<ul>
<li><a href="#" style="color:#00ff1e">HOME</a></li>
<li><a href="about.php" style="color:#00ff1e">ABOUT</a></li>
<li><a href="#" style="color:#00ff1e">SERVICE</a></li>
<li><a href="contact.php" style="color:#00ff1e">CONTACT US</a></li>
</ul>
</div>

</div>
<div class="content">
<h1> <br><span>your</span> <br>voice assistant</h1>
<p class="par">hello boss i am optima how can i help you please ask me your question<br> i am glad to solve your query </p>
<button class="cn"><a href="form.php">JOIN US</a></button>

<p class="p";>Already have account ?   please login here</p> 
<button class="loginji"><a href="login.php">LOG IN </a></button>


<div style="margin-bottom: 30px; padding: 35px;"  >
<section class="showcase" id="more details" style="background-color: #02042e;">
        <div class="container">
            <div class="row row1">
                <div class="img-box">
                    <img src="ai9.gif" alt="">
                </div>
                <div class="text-box">
                    <h2 class="lg-heading text-black" style="color: white;"> About AI </h2>
                    <p class="text-gray" style="color: white;"> all about artificial intelligence </p>
                    <a href="" class="btn btn-secondary"> more </a>
                </div>
            </div>
            <div class="row row2">
                <div class="img-box">
                    <img src="ai11.jpg" alt="">
                </div>
                <div class="text-box">
                    <h2 class="lg-heading text-black" style="color: white;"> optima library </h2>
                    <p class="text-gray" style="color: white;">Explore our library  </p>
                    <a href="" class="btn btn-secondary"> more </a>
                </div>
            </div>
        </div>
    </section>
    <section class="features" >
        <div class="container" >
            <div class="box-wrapper">
                <div class="box box-1" >
                    <i class="fa-solid fa-microchip fa-3x text-red"></i>
                    <h2 class="md-heading"> WHAT IS  Voice Assistant</h2>
                    <p >It's software that carries out everyday tasks via voice command. It's brings AI and machine learning together to recognize our voice and do what we ask it. Voice assistant software can be found on smart speakers, smartwatches, mobile phones, tablets and other devices.</p>
                </div>
                <div class="box box-2">
                    <i class="fa-solid fa-check fa-3x"></i>
                    <h2 class="md-heading"> ADVANTAGES </h2>
                    <p>Voice assistants are a chance for marketers to begin conversations in a much more personalized way than ever before. Users generally share exactly what they want and what they are thinking with voice assistants. Thus, the channel allows marketers to answer back with what they need and then continue reaching out for a personalized customer experience. <button class="learnji" style=" border-radius:9px; cursor: pointer; height: 40px; padding: 6px; background-color:#34a2eb; color: black; outline: none; "><a href="about.php">LEARN MORE.</button><a/></p>
                </div>
                <div class="box box-3">
                    <i class="fa-solid fa-xmark text-red fa-3x"></i>
                    <h2 class="md-heading"> DISADVANTAGES </h2>
                    <p>Although consumers are using voice assistants more often, there is still great concern over the data these devices collect and the companies behind the apps on those devices. Consumers are wary of how the data is stored, who looks at it, and what happens to that information. Marketers will have to address those data and privacy concerns, or they will not get access to these prospects and their information.</p>
                </div>
            </div>
        </div>
    </section>
</div>
    <footer class="footer">
        <div class="social-media-links">
        <div class="icons">
<a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
<a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
<a href="https://www.twitter.com/"><ion-icon name="logo-twitter"></ion-icon></a>
<a href="https://www.google.com/"><ion-icon name="logo-google"></ion-icon></a>
        </div>
        <p>Voice Assistant &copy; 2023 (OpTima)</p>
    </footer>
</body>
</html>



</div>
</div>
</div>
</div>
</div>
</div>



<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>