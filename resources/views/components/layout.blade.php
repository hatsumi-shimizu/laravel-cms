<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <title>PAS-POL -旅のモノづくりブランド- | TABIPPO</title>
</head>
<body>
    <header id="show-header">
        <div id="nav">
            <div id="header-icon-div">
                <img src="{{ asset('img/header-icon.png') }}" id="header-icon">
            </div>
            <div id="header-list-div">
                <ul>
                    <a href="{{ route('posts.index') }}">
                        <li>TOP</li>
                    </a>
                    <a href="{{ route('posts.product') }}">
                        <li>PRODUCT</li>
                    </a>
                    <a href="{{ route('posts.news') }}">
                        <li>NEWS</li>
                    </a>
                    <a href="{{ route('posts.create') }}">
                        <li>CREATE A POST</li>
                    </a>
                    <li>CONTACT</li>
                </ul>
            </div>
        </div>
    </header>
    {{ $slot }}
    <div id="up-arrow">
        <img src="{{ asset('img/arrow.png') }}">
    </div>
    <div id="share">
        <div id="share-container">
          <div class="btn">
            <button id="facebook">Share on Facebook</button>
          </div>

          <div class="btn">
            <button id="twitter">Share on Twitter</button>
          </div>

          <div class="btn">
            <button id="hatena">Hatena Bookmark</button>
          </div>
        </div>
    </div>
    <div id="footer-nav">
        <ul class="list-items">
            <a href="{{ route('posts.index') }}">
                <li class="list-item">TOP</li>
            </a>
            <a href="{{ route('posts.product') }}">
                <li class="list-item">PRODUCT</li>
            </a>
            <a href="{{ route('posts.news') }}">
                <li class="list-item">NEWS</li>
            </a>
            <a href="{{ route('posts.create') }}">
                <li class="list-item">CREATE A POST</li>
            </a>
            <li class="list-item">CONTACT</li>
        </ul>
    </div>
    </main>

    <footer>
    <div id="footer-container">
      <div id="footer-icon">
        <img src="{{ asset('img/paspol_logo_footer.png') }}">
      </div>
      <div id="copyright">
        <p>Copyright <span>&copy;</span> 2023 PAS-POL -旅のものづくりブランド- | TABIPPO All rights reserved.</p>
      </div>
    </div>
    </footer>
</body>
</html>
