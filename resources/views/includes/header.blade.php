  <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Gp.</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="{{URL::to('about')}}">About Us</a></li>
                        <li><a href="{{URL::to('services')}}">Services</a></li>
                        <li><a href="{{URL::to('portfolio')}}">Portfolio</a></li>
                        <li><a href="{{URL::to('blog')}}">Blog</a></li> 
                        <li><a href="{{URL::to('contact')}}">Contact</a></li>     
                        <li><a href="{{URL::to('login')}}">Login</a></li>
                        <li><a href="{{URL::to('register')}}">Register</a></li>  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->