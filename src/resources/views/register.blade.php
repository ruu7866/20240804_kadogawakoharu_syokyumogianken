<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>勤怠管理システム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
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
        <h2>会員登録</h2>
      </div>
      <form class="form" action="/register" method="post">
          @csrf

        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" value="{{ old('name') }}" placeholder="名前"/>
            </div>
            <div class="form__error">
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス"/>
            </div>
            <div class="form__error">
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password" placeholder="パスワード"/>
            </div>
            <div class="form__error">
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password_confirmation" placeholder="確認用パスワード" />
            </div>
            <div class="form__error">
            </div>
          </div>
        </div>

        <div class="form__button">
          <button class="form__button-submit" type="submit">会員登録</button>
        </div>
         <div class="form__group-title">
          <span class="form__label--item">アカウントをお持ちの方はこちらから</span>
        </div>
        <a class="form__label--required" href="/login">ログイン</a>
      </form>
    </div>
  </main>

  <footer>
    <small>Atte,inc.</small>
  </footer>
</body>

</html>