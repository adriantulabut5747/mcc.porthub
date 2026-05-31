<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login — MCC Port Hub</title>
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;600;700&family=Lato:wght@300;400&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --white:      #ffffff;
      --off-white:  #f5f5f5;
      --gray-light: #ebebeb;
      --gray-mid:   #d0d0d0;
      --gray-text:  #888;
      --dark:       #222222;
      --red:        #b50000;
      --red-deep:   #7a0000;
      --red-light:  #e8c0c0;
      --border:     #e2e2e2;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: var(--off-white);
      font-family: 'Lato', sans-serif;
      color: var(--dark);
    }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: radial-gradient(circle, #ccc 1px, transparent 1px);
      background-size: 28px 28px;
      opacity: 0.35;
      pointer-events: none;
    }

    .page-brand {
      font-family: 'Oxanium', sans-serif;
      font-size: 15px;
      font-weight: 700;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--dark);
      text-decoration: none;
      margin-bottom: 28px;
      animation: fadeUp 0.4s ease both;
    }

    .page-brand span { color: var(--red); }

    .card {
      background: var(--white);
      border-radius: 8px;
      padding: 44px 40px 36px;
      width: 380px;
      position: relative;
      border: 1px solid var(--border);
      box-shadow: 0 4px 6px rgba(0,0,0,0.04), 0 16px 48px rgba(0,0,0,0.09);
      animation: fadeUp 0.45s 0.05s ease both;
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(18px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .card::before {
      content: '';
      position: absolute;
      top: 0; left: 12%; right: 12%;
      height: 2.5px;
      background: linear-gradient(90deg, transparent, var(--red-deep), var(--red), var(--red-deep), transparent);
      border-radius: 0 0 3px 3px;
    }

    .card-title {
      font-family: 'Oxanium', sans-serif;
      font-size: 21px;
      font-weight: 700;
      color: var(--dark);
      text-align: center;
      letter-spacing: 0.1em;
      margin-bottom: 6px;
    }

    .card-subtitle {
      font-size: 12px;
      color: var(--gray-text);
      text-align: center;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      margin-bottom: 32px;
    }

    .divider {
      width: 32px;
      height: 1.5px;
      background: var(--red);
      opacity: 0.4;
      margin: 0 auto 28px;
    }

    .field { margin-bottom: 18px; }

    .field label {
      display: block;
      font-size: 11px;
      font-weight: 400;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--gray-text);
      margin-bottom: 7px;
    }

    .field input {
      width: 100%;
      padding: 11px 14px;
      background: var(--off-white);
      border: 1px solid var(--border);
      border-radius: 4px;
      color: var(--dark);
      font-family: 'Lato', sans-serif;
      font-size: 14px;
      outline: none;
      transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    }

    .field input:focus {
      background: var(--white);
      border-color: var(--red);
      box-shadow: 0 0 0 3px rgba(181,0,0,0.1);
    }

    .error {
      color: var(--red);
      font-size: 11px;
      margin-top: 5px;
    }

    .buttons {
      display: flex;
      gap: 10px;
      margin-top: 26px;
    }

    .btn {
      flex: 1;
      padding: 12px 0;
      border: none;
      border-radius: 4px;
      font-family: 'Oxanium', sans-serif;
      font-size: 12.5px;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      cursor: pointer;
      transition: all 0.18s;
    }

    .btn-login {
      background: linear-gradient(160deg, var(--red), var(--red-deep));
      color: var(--white);
      box-shadow: 0 2px 12px rgba(181,0,0,0.25);
    }

    .btn-login:hover {
      background: linear-gradient(160deg, #cc0000, #8b0000);
      box-shadow: 0 4px 18px rgba(181,0,0,0.38);
      transform: translateY(-1px);
    }

    .btn-register {
      background: var(--white);
      color: var(--gray-text);
      border: 1px solid var(--border);
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .btn-register:hover {
      border-color: var(--red);
      color: var(--red);
    }
  </style>
</head>
<body>

  <a class="page-brand" href="/">MCC<span>.</span>PORT HUB</a>

  <div class="card">
    <h1 class="card-title">Welcome Back</h1>
    <p class="card-subtitle">Sign in to continue</p>
    <div class="divider"></div>

    @if ($errors->any())
      <div class="error" style="margin-bottom:16px; text-align:center;">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required/>
      </div>

      <div class="field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required/>
      </div>

      <div class="buttons">
        <button type="submit" class="btn btn-login">Login</button>
        <a href="{{ route('register') }}" class="btn btn-register">Register</a>
      </div>
    </form>
  </div>

</body>
</html>