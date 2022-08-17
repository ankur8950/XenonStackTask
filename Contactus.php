<html>
    <head>
        <title> Xenon  </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm my-2">
            <a class="navbar-brand ml-5" href="#">Ankur Bhatnagar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fas fa-bars" style="color: #fff;font-size: 150%;"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>

        <div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
            <div class="container-contact100">
                <div class="wrap-contact100">
                    <div class="contact100-pic js-tilt" data-tilt>
                        <img src="https://img.icons8.com/clouds/200/000000/gmail.png" alt="IMG">
                    </div>
    
                    <form class="contact100-form validate-form" data-netlify="true">
                        <span class="contact100-form-title">
                            Contact Us
                        </span>
    
                        <div class="wrap-input100 validate-input" data-validate = "Name is required">
                            <input class="input100" type="text" name="name" placeholder="Name">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate = "Message is required">
                            <textarea class="input100" name="message" placeholder="Message"></textarea>
                            <span class="focus-input100"></span>
                        </div>
    
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</html>
