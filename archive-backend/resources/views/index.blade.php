@include('Layouts.header')
<div class="md:h-screen flex flex-col md:flex-row ">
    <div class="bg-slate-50 h-screen justify-center mx-auto md:w-1/2">
        <div class="size-72 mx-auto">
            <img src="{{ asset('storage/Dashboard.svg') }}" height="500px">
        </div>
        @if (session('status'))
            @include('Components.Register')
        @else
            @include('Components.Login')
        @endif
    </div>
    <div class="bg-gray-200 h-screen md:w-1/2">
        <img class="size-2/3 mx-auto" src="{{ asset('storage/logo.svg') }}" alt="image">
    </div>
</div>
@include('Layouts.footer')
