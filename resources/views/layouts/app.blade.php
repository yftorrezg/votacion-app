<x-layouts.base>
    {{-- Nav --}}
    @include('layouts.nav')
    {{-- SideNav --}}
   
    <main class="content">
        @include('layouts.sidenav')
        {{-- Content --}}
        @yield('content')
       
    </main>
     {{-- Footer --}}
     @include('layouts.footer')

</x-layouts.base>