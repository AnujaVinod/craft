<!DOCTYPE html>
<html lang="en">
  <head>
 @include('includes.head')
    
  </head>
  <body class="homepage">   
	<header>
       @include('includes.header')
		
    </header><!--/header-->

            @yield('content')
		    @include('includes.section')

	 
    <footer class="row">
        @include('includes.footer')
    </footer>

  </body>
</html>