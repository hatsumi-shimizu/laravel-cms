<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <title>PAS-POL -旅のモノづくりブランド- | TABIPPO</title>
</head>
<body>
    <header>
        <div id="header-contents">
            <div id="img-wrap">
                <img src="img/header-image.png">
                <img src="img/header-image-2.png">
                <img src="img/header-image-3.png">
            </div>
            <div id="nav">
                <div id="header-icon-div">
                    <img src="img/header-icon.png" id="header-icon">
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
                <div id="chevron-down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div id="poem">
            <div id="poem-container">
                <h1>旅に出よう。</h1>
                <div class="txt">
                  <p>僕たちが作りたいのは</p>
                  <p>持っているだけで旅に出たくなるモノ。</p>
                  <p>持っているだけでワクワクするモノ。</p>
                </div>
                <div class="txt">
                  <p>それは新しい時代の“パスポート”</p>
                  <p>僕たちが作るものは、</p>
                  <p>そんな、存在でありたい。</p>
                </div>
                <div class="txt">
                    <img src="{{ asset('img/txt-icon.png') }}">
                </div>
                <div class="txt">
                  <p>そして、人と人が繋がる</p>
                  <p>こんな時代だからこそ</p>
                  <p>僕たちは、みんなでひとつのモノを</p>
                  <p>作ることを追求したい。</p>
                </div>
            </div>
        </div>
        <div id="product">
            <div id="product-container">
                <div class="heading">
                    <h1>PRODUCT</h1>
                    <div class="more-btn">
                        <a href="{{ route('posts.product') }}">
                            <button class="move-to-category-page">MORE<span class="right-arrow">></span></button>
                        </a>
                    </div>
                </div>
                <div class="heading-border">
                    <img src="img/border-wave.png">
                </div>
                <div id="posts">
                    @foreach ($posts as $post)
                        <a href="{{ route('posts.show', $post) }}">
                            <div class="post">
                                <img src="{{ asset('img/post.png') }}">
                                {{-- DB保存した画像を表示させる方法が不明 --}}
                                <p>{{ $post->title }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="news">
            <div id="news-container">
                <div class="heading">
                    <h1>NEWS</h1>
                    <div class="more-btn">
                        <a href="{{ route('posts.news') }}">
                            <button class="move-to-category-page">MORE<span class="right-arrow">></span></button>
                        </a>
                    </div>
                </div>
                <div class="heading-border">
                    <img src="{{ asset('img/border-wave.png') }}">
                </div>
                <a href="{{ route('posts.article') }}" class="article-link">
                    <article>
                        <div class="left-content">
                            <img src="img/article.png">
                        </div>
                        <div class="right-content">
                            <h2>2023年度夏の絶景ポストカード制作スタート！夏景色の写真を大募集！</h2>
                            <p class="date">2024.01.31</p>
                            <p class="content">こんにちは、TABIPPOの小井詰です。東急ハンズやLOFTにて販売されている、旅好きな方とつくってきたPAS-POLの夏の絶景ポストカード2023夏制作をスタートしました。</p>
                        </div>
                    </article>
                </a>
                <a href="{{ route('posts.article') }}" class="article-link">
                    <article>
                        <div class="left-content">
                            <img src="img/article.png">
                        </div>
                        <div class="right-content">
                            <h2>2023年度夏の絶景ポストカード制作スタート！夏景色の写真を大募集！</h2>
                            <p class="date">2024.01.31</p>
                            <p class="content">こんにちは、TABIPPOの小井詰です。東急ハンズやLOFTにて販売されている、旅好きな方とつくってきたPAS-POLの夏の絶景ポストカード2023夏制作をスタートしました。</p>
                        </div>
                    </article>
                </a>
                <a href="{{ route('posts.article') }}" class="article-link">
                    <article>
                        <div class="left-content">
                            <img src="img/article.png">
                        </div>
                        <div class="right-content">
                            <h2>2023年度夏の絶景ポストカード制作スタート！夏景色の写真を大募集！</h2>
                            <p class="date">2024.01.31</p>
                            <p class="content">こんにちは、TABIPPOの小井詰です。東急ハンズやLOFTにて販売されている、旅好きな方とつくってきたPAS-POLの夏の絶景ポストカード2023夏制作をスタートしました。</p>
                        </div>
                    </article>
                </a>
                <a href="{{ route('posts.article') }}" class="article-link">
                    <article>
                        <div class="left-content">
                            <img src="img/article.png">
                        </div>
                        <div class="right-content">
                            <h2>2023年度夏の絶景ポストカード制作スタート！夏景色の写真を大募集！</h2>
                            <p class="date">2024.01.31</p>
                            <p class="content">こんにちは、TABIPPOの小井詰です。東急ハンズやLOFTにて販売されている、旅好きな方とつくってきたPAS-POLの夏の絶景ポストカード2023夏制作をスタートしました。</p>
                        </div>
                    </article>
                </a>
                <a href="{{ route('posts.article') }}" class="article-link">
                    <article>
                        <div class="left-content">
                            <img src="img/article.png">
                        </div>
                        <div class="right-content">
                            <h2>2023年度夏の絶景ポストカード制作スタート！夏景色の写真を大募集！</h2>
                            <p class="date">2024.01.31</p>
                            <p class="content">こんにちは、TABIPPOの小井詰です。東急ハンズやLOFTにて販売されている、旅好きな方とつくってきたPAS-POLの夏の絶景ポストカード2023夏制作をスタートしました。</p>
                        </div>
                    </article>
                </a>
            </div>
        </div>
        <div id="up-arrow">
            <img src="img/arrow.png">
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
            <img src="img/paspol_logo_footer.png">
          </div>
          <div id="copyright">
            <p>Copyright <span>&copy;</span> 2023 PAS-POL -旅のものづくりブランド- | TABIPPO All rights reserved.</p>
          </div>
        </div>
        </footer>
    </body>
</html>
