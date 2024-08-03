<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>勤怠管理システム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Atte
      </a>
      <ul class="header-nav">
      @if (Auth::check())
        <li class="header-nav__item">
          <a class="header-nav__link" href="/">ホーム</a>
        </li>
        <li class="header-nav__item">
          <a class="header-nav__link" href="/mypage">日付一覧</a>
        </li>
        <li class="header-nav__item">
          <form action="/logout" method="post">
              @csrf
          <a class="header-nav__link" href="/">ログアウト</a>
          </form>
        </li>
      @endif
      </ul>
    </div>
  </header>

  <main>
    <div class="contact-form__heading">
      <h2></h2>
      <form class="form" action="/logout" method="post">
          @csrf
        <ul>
          <li><input id="syukkin" type="button" value="出勤"></li>
          <li><span id="taikin">退勤</span></li>
          <li><span id="kyuukei">休憩</span></li>
          <li><span id="fukki">復帰</span></li>
        </ul>
      </form>

    </div>
  </main>

  <footer>
    <small>Atte,inc.</small>
  </footer>
</body>

</html>