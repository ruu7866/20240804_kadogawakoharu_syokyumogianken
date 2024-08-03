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
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>ログイン</h2>
      </div>
      <form class="form" action="/login" method="post">
          @csrf
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="メールアドレス" />
            </div>
            <div class="form__error">

            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="passward" name="passward" placeholder="パスワード" />
            </div>
            <div class="form__error">

            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">ログイン</button>
        </div>
         <div class="form__group-title">
          <span class="form__label--item">アカウントをお持ちでない方はこちらから</span>
        </div>
        <a class="form__label--required" href="/register">会員登録</a>
      </form>
    </div>
  </main>

  <footer>
    <small>Atte,inc.</small>
  </footer>
</body>

</html>