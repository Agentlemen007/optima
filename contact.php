<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ef84678b14.js" crossorigin="anonymous"></script>
    <title>project</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
/* ############## html element styling ########## */
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
<body>
<nav style="padding: 15px;height:135px;">
<img src="optimaLOGO.png" alt="" width="110" height="110">
</nav>
            <div class="container" style="background: transparent;">
           
            <ul class="nav-items">
             <button style="border-radius:7px; background-color: orange; padding: 20px "> <a href="./index.php">HOME</a>
                              
            </ul>
        </div>
    
    <section class="contact-form">
        <div class="container">
            <div class="form-wrapper">
                <div class="company-address">
                   <div class="address-group">
                       <i class="fas fa-map-marker-alt fa-2x text-red"></i>
                       <h2 class="text-gray md-heading">Location</h2>
                       <p>234, meerut college meerut </p>
                   </div>
                   <div class="address-group">
                       <i class="far fa-envelope fa-3x text-red"></i>
                       <h2 class="text-gray md-heading">Email</h2>
                       <p>okoptima3.0@gmail.com</p>
                   </div>
                   <div class="address-group">
                       <i class="fas fa-phone-square-alt fa-3x text-red"></i>
                       <h2 class="text-gray md-heading">Call</h2>
                       <p>+918765609874</p>
                   </div>
                   <img src="ai12.jpg" alt="company image">
                </div>
                <form action="" class="form">
                    <h1 class="lg-heading text-black">Contact Us</h1>
                    <p class="text-gray">Let us know your questions, suggestions and concerns by filling out the</p>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" id="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" name="Email" id="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="text" name="Phone" id="Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="Massage">Message</label>
                        <textarea name="Message" id="Massage" required></textarea>
                    </div>
                    <button type="submit" class="form-btn">Submit</button>
                </form>
            </div>
        </div>

    </section>
    <footer class="footer">
        <div class="social-media-links">
            <i class="fab fa-facebook fa-4x"></i>
            <i class="fab fa-twitter fa-4x"></i>
            <i class="fab fa-instagram fa-4x"></i>
        </div>
        <p>Artificial Intelligence &copy; 2023 (OpTima)</p>
    </footer>
</body>
</html>