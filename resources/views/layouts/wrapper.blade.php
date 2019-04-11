<!DOCTYPE html>
<html>

    @include('layouts.head')

    <body>
      @include('layouts.header')

      @include('layouts.categories')

	  <div class="site-output">
      	@yield('leftbar')
        
        @yield('content')
        
      </div>

    @include('layouts.jsFooter')

	</body>
</html>
