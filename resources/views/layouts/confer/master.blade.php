<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.confer.partials.head')
</head>

<body>


        @include('layouts.confer.partials.header')



         @yield('firstslider')
         @yield('fastshopping')


            <div class="container-fluid">

                <div class="row">
                    <div class="col-9">
                        @yield('featuremovies')
                        @yield('theatre')
                        @yield('concertsection')
                        @yield('bestsellers')
                    </div>


                    <div class="col-3 ">
                        @yield('sidebarcolumn')
                    </div>
                </div>
            </div>





           @yield('commentslider')



        @yield('blognews')

        @yield('contactus')

  @include('layouts.confer.partials.footer')

  @include('layouts.confer.partials.footer-scripts')
</body>

</html>
