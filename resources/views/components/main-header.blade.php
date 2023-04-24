<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Biznes va texnalogiya yangiliklari</title>
        {{-- font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        {{-- my css --}}
        <link rel="stylesheet" href="/css/index.css">
    </head>

    <body>
        {{-- start header --}}
        <header>
            <nav class="logo-section">
                <div class="icons">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="theme">
                        <i class="fa-solid fa-sun"></i>
                        <i class="fa-solid fa-moon"></i>
                    </div>
                </div>
                <div class="logo">
                    <a href="/"><img src="./images/logo.png" alt="Logo"></a>
                </div>
            </nav>
            <nav style="margin-bottom:0px;">
                <ul class="nav-items">
                    <li><a href="#">Asosiy bo'lim</a></li>
                    <li><a href="#">Biznes</a></li>
                    <li><a href="#">Texnalogiyalar</a></li>
                    <li><a href="#">Insayder</a></li>
                </ul>
            </nav>
            <span class="line_bottom_nav"></span>
        </header>
        <div class="container-lg">
            {{ $slot }}
        </div>
        <footer>
            <div class="container-lg">
                <div class="top">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Sayt Haqida</a>
                            </li>
                            <li>
                                <a href="#">Reklama</a>
                            </li>
                            <li>
                                <a href="#">Aloqa</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="body">
                    <div class="item-1">
                        <p class="about">
                            <span class="fs-3">Orena.uz</span> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur consequatur
                            repellendus natus commodi consectetur nam atque quia pariatur amet, 
                        </p>
                    </div>
                    <div class="social-media">
                        <span><i class="fa-brands fa-telegram"></i> <a href="#">Telegram</a></span>
                        <span><i class="fa-brands fa-instagram"></i> <a href="#">Instagram</a></span>
                        <span><i class="fa-brands fa-facebook"></i> <a href="#">Facebook</a></span>
                        <span><i class="fa-brands fa-twitter"></i> <a href="#">Twitter</a></span>
                    </div>
                </div>
            </div>
        </footer>













        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
            integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
        </script>
    </body>

</html>
