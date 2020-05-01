<!doctype html>
<html lang="en">
<head>
    @include('_head')
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <h1>
                    <img src="../images/logo.svg" alt="Tweety">
                </h1>
            </header>
        </section>
         {{$slot}}
    </div>
</body>

</html>
