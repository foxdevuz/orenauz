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
        <link rel="stylesheet" href="/css/more.css">
        {{-- dark theme css --}}
        <link rel="stylesheet" href="/css/dark.css">
        <link rel="stylesheet" href="/css/extra.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    </head>

    <body>
        {{-- start header --}}
        <x-main.header/>
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
                        <span><i class="fa-brands fa-telegram"></i></span>
                        <span><i class="fa-brands fa-instagram"></i></span>
                        <span><i class="fa-brands fa-facebook"></i></span>
                        <span><i class="fa-brands fa-twitter"></i></span>
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
        {{-- my js --}}
        <script src="/js/main.js"></script>

        <script type="module">
            import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js';
        </script>
    </body>

</html>
