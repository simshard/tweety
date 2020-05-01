<x-app>
<header class="mb-6 relative">
    <div class="relative">
        <img src="/images/gean-blossom.jpg" alt="" class="mb-4 rounded-lg shadow-xl">
        <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left:50% "
            width="150"
        >
</div>
    
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="font-bold text-2l mb-0">{{$user->name}}</h2>
            <p class="text-sm">joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class="flex">
            <a href="" class="rounded-lg shadow py-2 px-4 text-black text-xs" >Edit Profile</a>
            <x-follow-button :user=$user></x-follow-button>
        </div>
    </div>
        <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Minus, fuga eveniet?</p>
        
    
    
</header>
     
    <hr>
    @include('_timeline',['tweets'=>$user->tweets])
</x-app>