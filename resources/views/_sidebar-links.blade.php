<ul>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="/tweets"
        >Home</a></li>
    <li><a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >Explore</a></li>
     
    <li><a
            class="font-bold text-lg mb-4 block"
            href= "{{ route('profile',auth()->user())}}" 
        >Profile</a></li>
    <li><a
            class="font-bold text-lg block"
            href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
        >Logout</a></li>
</ul>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   @csrf
 </form>