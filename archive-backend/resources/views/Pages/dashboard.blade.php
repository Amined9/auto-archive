@include('Layouts.header')
    <div class="h-screen">
        @include("Components.Navbar")
        <div class="flex flex-row">
            @include("Components.Sidebar")

            @include("Components.Car")
        </div>


    </div>



@include('Layouts.footer')
