<?php
ob_start();
if(isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['tel'];
    $addr = $_REQUEST['location'];
    $message = $_REQUEST['msg'];
    
    $eol = "\r\n";
    $dblln = "<br style='margin-bottom: 10px'>";


    $descr = "<b>Name:</b> ".$name.$dblln."<b>Email ID:</b> ".$email.$dblln."<b>Message:</b> ".$message;
     
    $faddr = $email;
  
    $headers1 .= "From: <".$faddr.">".$eol;
    $headers1 .= "Reply-To: <".$faddr.">".$eol;
    $headers1 .= "Return-Path: <".$faddr.">".$eol;    // these two to set reply address
    $headers1 .= "Message-ID: <".time()."-".$faddr.">".$eol;
    $headers1 .= "X-Mailer: PHP v".phpversion().$eol;
    $headers1 .= "Content-Type: text/html; charset=UTF-8\r\n";

    //$too=$subj;
    $too = "vinaymenon313@gmail.com";
	
    $sub = "Website Enquiry"." ".$name;
    $msg = $descr;

    $mail_sent = @mail($too,$sub,$msg,$headers1);
	
	
	header("location:confirm.html");
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- ICON -->    
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <link rel="stylesheet" href="css/rehnas.css">
    
    
    <title>Rehnas Designer - Bridal Studio | Boutique | Beauty Salon</title>
</head>

<body class="secondary-page_about">
   
<section class="main-header">
       
        <div class="add-contact">
            <div class="address">Snehalayam Road, Choondy, Aluva</div>
            <div class="phone">+91 9447536333, +91 9447032466</div>
        </div>

        <a href="index.html" class="logo">
            <img src="images/logo_big.png" alt="rehnas designer logo">
        </a>

        <nav class="main-nav">
            <div class="nav-toggle">menu</div>
            <a href="index.html">home</a>
            <div class="drop-dwn">
                <a href="services.html">services</a>    
                <div class="intro-service-links">
                    <a href="services.html#bridal" class="service-link">
                        <span>Rehnas Bridal Studio</span>
                    </a>

                    <a href="services.html#boutique" class="service-link">
                        <span>Rehnas Boutique</span>
                    </a>

                    <a href="services.html#beauty" class="service-link">
                        <span>Rehnas Beauty Salon</span>
                    </a>
                </div>
            </div>
            <a href="about.html">about</a>
            <a href="gallery.html">gallery</a>
            <a href="contact.php">contact</a>
        </nav>
</section>
   
<section class="content-container">
    <header>
        <h1>Contact Us</h1>
    </header>
    
    <div class="content">
        <section class="content-section">
           <div class="content-section_text">
               <form action="">
                   <label for="name">
                       <span>
                           name: *
                       </span>
                       <input type="text" name=name id=name>
                   </label>
                   <label for="email">
                       <span>
                           email: *
                       </span>
                       <input type="email" name=email id=email>
                   </label>
                   <label for="tel">
                       <span>
                           phone: *
                       </span>
                       <input type="tel" name=tel id=tel>
                   </label>
                   <label for="location">
                       <span>
                           location:
                       </span>
                       <input type="text" name=location id=location>
                   </label>
                   <label for="msg">
                       <span>
                           message: *
                       </span>
                       <textarea name="msg" id="msg"></textarea>
                   </label>
                   
                   <div class="button">                       
                       <button name="submit">
                           Send
                       </button>
                   </div>
               </form>
            </div>
        </section>
    </div>
</section>
<script src="js/jq.js"></script>

<script>
    function debugLayout(t,e) {
        t == "on" ? $(e).css("outline", "1px solid red") : $(e).css("outline", "0");
    }
    
    $("body").on("keydown", function(e){
        if(e.keyCode == 65) {
            debugLayout("on","*");
            }
        if(e.keyCode == 83) {
            debugLayout("off","*");
            }
    });
    
    $(".nav-toggle").on("click",function(){
        $(".main-nav").toggleClass("open-nav"); 
        if ($(this).html() == "close") {
            $(this).html("menu");
            } else {
                $(this).html("close");
            }
    });
    
    $(function () {
	
		var header = $('.main-header');
        
		var mark = $('.main-nav');
	
        var top = mark.offset().top - parseFloat(mark.css('margin-top').replace(/auto/, 0));

        $(window).on('scroll', function(event) {
            // what the y position of the scroll is
            var y = $(this).scrollTop();

            // whether that's below the form
            if (y >= top) {
                // if so, ad the fixed class
                if ( header.is('.fixed-header') ) {
                    return;
                    $(".main-header .logo img").attr("src", "images/logo_small.png")
                }
                header.addClass('fixed-header');
                $(".main-header .logo img").attr("src", "images/logo_small.png")
            } else {
                // otherwise remove it
                header.removeClass('fixed-header');
                $(".main-header .logo img").attr("src", "images/logo_big.png")
            }
        });

    });
</script>

</body>
</html>