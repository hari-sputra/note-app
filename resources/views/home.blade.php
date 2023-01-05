@extends('layouts.app')

@section('content')
    {{-- navbar --}}
    <nav class="navbar bg-base-100 px-[64px] pt-6">
        <div class="flex-1">
            <a href="" class="font-bold normal-case text-4xl">Note</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <a href="{{ route('login') }}" class="btn btn-outline mr-4 px-6">Log In</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="btn text-white px-6">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="content">
        <div class="pt-[80px]">
            <div class="flex justify-between">
                <div class="pl-[64px] w-[50%]">
                    <h1 class="text-[48px] font-bold ">Your daily journey is coming to digital paper now.</h1>
                    <h3 class="text-[36px]">Write whatever you lived and what you thought.</h3>
                    <a href="{{ route('login') }}" class="btn text-white mt-[24px] px-[80px]">Try Journey,
                        It's
                        free.</a>
                </div>
                <div class="">
                    <img src="{{ asset('src/images/content.png') }}" alt="content" width="576px">
                </div>
            </div>
        </div>
    </section>
@endsection
