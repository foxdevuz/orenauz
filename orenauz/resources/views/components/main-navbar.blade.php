<header class="flex items-center justify-start w-full bg-dark-400 text-white main-header p-2 px-3">
    <div class="logo w-90 mr-6">
        <a href="/"><img src="/images/orena-logo.png" alt="" class="w-32 ml-3 transition ease-in-out hover:opacity-80"></a>
    </div>
    <nav>
        <ul class="flex w-100 text-lg">
            <li class="flex-auto w-max mr-6 transition ease-in-out hover:text-blue-400">
                <a href="#">Asosiy bo'lim</a>
            </li>
            <li class="flex-auto w-max mr-6 transition ease-in-out hover:text-blue-400">
                <a href="#">Biznes</a>
            </li>
            <li class="flex-auto w-max mr-6 transition ease-in-out hover:text-blue-400">
                <a href="#">Texnalogiyalar</a>
            </li>
            <li class="flex-auto w-max mr-6 transition ease-in-out hover:text-blue-400">
                <a href="#">Insayder</a>
            </li>
        </ul>
    </nav>
    <nav class="flex justify-end w-100">
        <form action="#" method="GET">
            @csrf
            <div class="inp-container">
                <input class="focus:bg-none" type="text" name="search" placeholder="Saytdan izlash" required>
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
    </nav>
</header>
