<!DOCTYPE html>
<html>

    @include('layouts.head')

    <body>
      @include('layouts.header')

      {{-- @include('layouts.categories') --}}

	  <div class="site-output">
    {{-- @if(auth::check()) --}}
      	@include('layouts.leftbar')
    {{-- @endif         --}}
        @yield('content')
        
      </div>

    @include('layouts.jsFooter')

	</body>
</html>
