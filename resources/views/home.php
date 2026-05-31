<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home — MCC Port Hub</title>
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;600;700&family=Lato:wght@300;400&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --white:      #ffffff;
      --off-white:  #f5f5f5;
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
      background: var(--off-white);
      font-family: 'Lato', sans-serif;
      color: var(--dark);
      overflow-x: hidden;
    }

    /* ── NAV ── */
    nav {
      position: sticky;
      top: 0;
      z-index: 100;
      background: var(--white);
      border-bottom: 1px solid var(--border);
      box-shadow: 0 1px 16px rgba(0,0,0,0.06);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 44px;
      height: 64px;
      animation: slideDown 0.4s ease both;
    }

    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to   { transform: translateY(0);     opacity: 1; }
    }

    .nav-brand {
      font-family: 'Oxanium', sans-serif;
      font-size: 16px;
      font-weight: 700;
      letter-spacing: 0.2em;
      color: var(--dark);
      text-transform: uppercase;
      text-decoration: none;
      flex-shrink: 0;
    }

    .nav-brand span { color: var(--red); }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 2px;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    .nav-links a {
      font-family: 'Oxanium', sans-serif;
      font-size: 11.5px;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-decoration: none;
      color: var(--gray-text);
      padding: 7px 13px;
      border-radius: 4px;
      border: 1px solid transparent;
      transition: color 0.2s, background 0.2s, border-color 0.2s;
    }

    .nav-links a:hover {
      color: var(--red);
      background: rgba(181,0,0,0.05);
      border-color: rgba(181,0,0,0.18);
    }

    .nav-links a.active {
      color: var(--white);
      background: linear-gradient(160deg, var(--red), var(--red-deep));
      border-color: var(--red-deep);
      box-shadow: 0 2px 10px rgba(181,0,0,0.22);
    }

    .nav-right {
      display: flex;
      align-items: center;
      margin-left: auto;
    }

    .nav-logout {
      font-family: 'Oxanium', sans-serif;
      font-size: 11.5px;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--red);
      padding: 7px 16px;
      border-radius: 4px;
      border: 1px solid var(--red-light);
      background: none;
      transition: all 0.2s;
      cursor: pointer;
    }

    .nav-logout:hover {
      color: var(--white);
      background: var(--red);
      border-color: var(--red);
    }

    /* ── PAGE ── */
    .page { padding: 64px 0 80px; }

    /* ── HERO ── */
    .hero {
      text-align: center;
      padding: 0 20px 52px;
      animation: fadeUp 0.5s 0.1s ease both;
    }

    .hero-eyebrow {
      font-family: 'Oxanium', sans-serif;
      font-size: 10.5px;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      color: var(--red);
      margin-bottom: 16px;
    }

    .hero-eyebrow::after {
      content: '';
      display: block;
      width: 32px;
      height: 1.5px;
      background: var(--red);
      margin: 8px auto 0;
      opacity: 0.5;
    }

    .hero h1 {
      font-family: 'Oxanium', sans-serif;
      font-size: clamp(28px, 4.5vw, 52px);
      font-weight: 700;
      line-height: 1.1;
      color: var(--dark);
      letter-spacing: 0.04em;
      margin-bottom: 18px;
    }

    .hero h1 em {
      font-style: normal;
      color: var(--red);
    }

    .hero p {
      font-size: 15px;
      color: var(--gray-text);
      max-width: 460px;
      margin: 0 auto;
      line-height: 1.75;
      font-weight: 300;
    }

    /* ── CONTENT BOX ── */
    .content-box {
      margin: 0 10%;
      background: var(--white);
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid var(--border);
      box-shadow: 0 4px 32px rgba(0,0,0,0.07);
      animation: fadeUp 0.5s 0.2s ease both;
      min-height: 1080px;
    }

    .content-box::before {
      content: '';
      display: block;
      height: 3px;
      background: linear-gradient(90deg, transparent 0%, var(--red-deep) 20%, var(--red) 50%, var(--red-deep) 80%, transparent 100%);
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(14px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 900px) {
      .content-box { margin: 0 4%; }
      nav { padding: 0 18px; }
      .nav-links a { padding: 6px 9px; font-size: 10px; }
    }

    @media (max-width: 640px) {
      .nav-links { display: none; }
    }
  </style>
</head>
<body>

  <nav>
    <a class="nav-brand" href="/dashboard">MCC<span>.</span>PORT HUB</a>

    <ul class="nav-links">
      <li><a href="/dashboard" class="active">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/gallery">Gallery</a></li>
      <li><a href="/dashboard">Dashboard</a></li>
    </ul>

    <div class="nav-right">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="nav-logout">Logout</button>
      </form>
    </div>
  </nav>

  <div class="page">
    <div class="hero">
      <p class="hero-eyebrow">Welcome back, {{ Auth::user()->name }}!</p>
      <h1>MCC <em>Portfolio</em> Hub</h1>
      <p>
        Discover the talents, skills, achievements, and professional portfolios of MCC students in one digital
        platform. Connect with emerging professionals, explore academic and extracurricular accomplishments.
      </p>
    </div>

    <div class="content-box"></div>
  </div>

</body>
</html>