@if ( Auth::check() )
    @include('partials.navbarAuth')
    
@else
    @include('partials.navbarGuest')
@endif
