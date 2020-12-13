<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">    
        <link rel="stylesheet" href="css/task5style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	    <link rel="stylesheet" href="elegant_font/style.css" />
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/slider-pro.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="elegant_font/style.css"> 
        <link rel="stylesheet" href="css/style.css">
        <title>Event Registeration Form</title>
        <style>
            body{
            
        background-image: linear-gradient(to right bottom, #05b252, #3fc24a, #63d13e, #86e02d, #a9ee0d);
        text-align: center;
        
        font-size:large;
}
            
            </style>
        
    </head>
    <body>
    <?php include('templates/header.php');?>
    
        <br /><br />
        <form>
            <h1>Event Registeration Form</h1>
            <p><label>Enter your full name:</label></p>
            <input type="text" id="FullName" placeholder="Enter your full name">
            <br /><br/>
            <p><label>Enter your email id</label></p>
            <input type="email" id="emailid" placeholder="abc@gmail.com">
            <br/><br />
            <p><label>Enter your College/University Name</label></p>
            <input type="text" id="collegename" placeholder="University Name">
            <br/><br />
            <p><label>Enter your Contact Number</label></p>
            <input type="number" id="phoneno" placeholder="1234567890" size="10">
            <br/><br />
            <p><label>Enter your Coupon Code</label></p>
            <label>The amount will be refunded after 7 days to your bank account</label>
            <br /><br/>
            <input type="text" id="couponcode" placeholder="enter your coupon code">
            
        </form>
        <div class="razorpay-embed-btn" data-url="https://rzp.io/l/CrntP37wXO"
                        data-text="Register Now!" data-color="#528FF0" data-size="large">
                        <script>
                            (function () {
                                var d = document; var x = !d.getElementById('razorpay-embed-btn-js')
                                if (x) {
                                    var s = d.createElement('script'); s.defer = !0; s.id = 'razorpay-embed-btn-js';
                                    s.src = 'https://cdn.razorpay.com/static/embed_btn/bundle.js'; d.body.appendChild(s);
                                } else {
                                    var rzp = window['__rzp__'];
                                    rzp && rzp.init && rzp.init()
                                }
                            })();
                        </script>
                    </div>
                    <?php include('templates/footer.php');?>
                    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
    <script src="js/custom.js"></script>
                    
    </body>
</html>