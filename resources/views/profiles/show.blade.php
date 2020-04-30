@extends('layouts.app')

@section('content')
<header class="mb-6 relative">
    <img src="/images/gean-blossom.jpg" alt="" class="mb-4 rounded-lg shadow-xl">
    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2l mb-0">{{$user->name}}</h2>
            <p class="text-sm">joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class=" ">
            <a href="" class="rounded-lg shadow py-2 px-4 text-black text-xs" >Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs" >Follow Me</a>
        </div>
    </div>
        <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Minus, fuga eveniet?</p>
        <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 75px); top: 138px"
        >

    
    
</header>
     
    <hr>
    @include('_timeline',['tweets'=>$user->tweets])
@endsection