<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>
             @yield('tittle')
        </title>
       
    </head>
   
    <body>

        @include("navigacija")
           
        @yield('sadrzajStranice')

        @include("footer")
        
    </body>
</html>
