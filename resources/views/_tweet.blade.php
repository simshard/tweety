<div class="flex p-4 {{$loop->last?'':'border-b border-b-gray-400 rounded-lg'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img src="{{$tweet->user->avatar}}"
             alt="{{auth()->user()->name}}" 
             class="rounded-full mr-2"
             width="40"
             height="40"
             >
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-2">
            <a href="{{$tweet->user->path()}}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <p class="text-sm">{{$tweet->body }}</p>
    </div>
</div>
 