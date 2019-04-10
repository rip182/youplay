<!DOCTYPE html>
<html>

    @include('layout.head')

    <body>
      @include('layout.header')

      @include('layout.categories')

	  <div class="site-output">
      	@yield('leftbar')
        
        @yield('content')
        
      </div>

    @include('layout.jsFooter')

	</body>
</html>
