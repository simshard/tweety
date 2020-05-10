<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="Speak your brains"
            autofocus
            required
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img
                src="{{auth()->user()->avatar}}"  
                alt="{{auth()->user()->name}}"
                class="rounded-full mr-2 shadow "
                width="60"
                height="60"
            >

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-4 text-sm text-white h-10"
            >
                Tweet it
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>