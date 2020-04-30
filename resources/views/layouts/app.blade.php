<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <h1>
                    <img src="images/logo.svg" alt="Tweety">
                </h1>
            </header>
        </section>
        <section class="px-8">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">
                    <div class="lg:w-32">
                        @include ('_sidebar-links')
                    </div>
                    <div class="lg:flex-1 lg:mx-10 lg:mb-10" style="max-width: 700px">
                        @yield('content')
                    </div>
                    <div class="lg:w-1/6">
                        @include ('_friends-list')
                    </div>
                </div>
            </main>
        </section>
    </div>
</body>

</html>
