<form method="POST" action="/profiles/{{ $user->user_name }}/follow">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs"
    > 
        {{auth()->user()->following($user)?'Unfollow Me':'Follow Me'}}  
    </button>
</form>