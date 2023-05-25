@props(['categories'])
<header>
    <nav class="logo-section">
        <div class="icons">
            <div class="search">
                <i class="fa-solid fa-bars" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="theme">
                <i class="fa-solid fa-sun" id="ligth"></i>
                <i class="fa-solid fa-moon" id="dark"></i>
            </div>
        </div>
        <div class="logo">
            <a href="/"><img src="/images/logo.png" alt="Logo"></a>
        </div>
    </nav>
    <nav style="margin-bottom:0px;">
        <ul class="nav-items">
            <li><a href="/">Asosiy bo'lim</a></li>

            @foreach ($categories as $category)
              <li><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </nav>
    <span class="line_bottom_nav"></span>

    {{-- offcanvas for navbar --}}
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">OrenaUz</h5>
          <button type="button" class="btn-close text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="offcanvas-nav-items">
            <li><a class="offcanvas-nav-item" href="/">Asosiy bo'lim</a></li>
            @foreach ($categories as $category)
              <li><a class="offcanvas-nav-item" href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
          </ul>
          <div class="social-media">
            <span><i class="fa-brands fa-telegram"></i></span>
            <span><i class="fa-brands fa-instagram"></i></span>
            <span><i class="fa-brands fa-facebook"></i></span>
            <span><i class="fa-brands fa-twitter"></i></span>
        </div>
        </div>
      </div>
</header>
