<!php
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Hubungi PT Kavari Kreasi Nusantara untuk konsultasi keamanan siber, ISO 27001, SOC, dan layanan cybersecurity profesional.">
  <meta name="keywords" content="Cybersecurity, SOC, ISO 27001, Red Team, Incident Response, Kavari, Keamanan Siber Indonesia, Threat Intelligence">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Kami | PT Kavari Kreasi Nusantara</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    /* === GLOBAL === */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Inter", sans-serif;
    }

    body {
      background: #0a0f1c;
      color: #fff;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(10, 15, 28, 0.95);
      backdrop-filter: blur(10px);
      padding: 20px 8%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 999;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .logo {
      font-weight: 700;
      font-size: 1.6rem;
      color: #00bcd4;
      letter-spacing: 1px;
    }

    nav a {
      color: #fff;
      margin-left: 20px;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    nav a:hover, nav a.active {
      color: #00bcd4;
    }

    /* === HERO === */
    .hero {
      min-height: 80vh;
      background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(10, 15, 28, 0.95)), url('assets/contact-bg.jpg') center/cover no-repeat;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 10%;
      animation: fadeIn 1.5s ease;
    }

    .hero h1 {
      font-size: 3rem;
      color: #00bcd4;
      margin-bottom: 15px;
      animation: slideDown 1s ease;
    }

    .hero p {
      max-width: 700px;
      margin: 0 auto;
      opacity: 0.9;
    }

    /* === FITUR UNGGULAN === */
    .features {
      padding: 100px 8%;
      background: #0d1324;
      text-align: center;
      animation: fadeUp 1.5s ease;
    }

    .features h2 {
      color: #00bcd4;
      font-size: 2rem;
      margin-bottom: 40px;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .feature-card {
      background: rgba(255,255,255,0.05);
      padding: 30px;
      border-radius: 16px;
      transition: transform 0.3s ease, background 0.3s ease;
    }

    .feature-card:hover {
      transform: translateY(-8px);
      background: rgba(0,188,212,0.08);
    }

    .feature-card h3 {
      color: #fff;
      margin-bottom: 10px;
      font-size: 1.2rem;
    }

    .feature-card p {
      font-size: 0.95rem;
      opacity: 0.9;
    }

    /* === CONTACT === */
    .contact-section {
      padding: 100px 8%;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
      background: #0a0f1c;
      animation: fadeUp 1.5s ease;
    }

    .contact-info, .contact-form {
      background: rgba(255,255,255,0.05);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 4px 25px rgba(0,0,0,0.4);
      transition: transform 0.3s ease;
    }

    .contact-info:hover, .contact-form:hover {
      transform: translateY(-5px);
    }

    .contact-info h2, .contact-form h2 {
      color: #00bcd4;
      margin-bottom: 20px;
    }

    .contact-info p {
      margin-bottom: 10px;
      opacity: 0.9;
    }

    .email-btn {
      display: inline-block;
      margin-top: 20px;
      background: linear-gradient(45deg, #007bff, #00bcd4);
      color: #fff;
      padding: 12px 25px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .email-btn:hover {
      transform: scale(1.05);
      background: linear-gradient(45deg, #00bcd4, #007bff);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group input, .form-group textarea {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background: rgba(255,255,255,0.1);
      color: #fff;
    }

    button {
      background: linear-gradient(45deg, #007bff, #00bcd4);
      border: none;
      padding: 12px 25px;
      border-radius: 30px;
      color: #fff;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
    }

    /* === MAPS === */
    .map-section {
      height: 400px;
      overflow: hidden;
    }

    iframe {
      border: none;
      width: 100%;
      height: 100%;
    }

    /* === FOOTER === */
    footer {
      text-align: center;
      padding: 25px 0;
      background: #0d1324;
      color: rgba(255,255,255,0.8);
      font-size: 0.9rem;
    }

    /* === ANIMATION === */
    @keyframes fadeIn { from {opacity: 0;} to {opacity: 1;} }
    @keyframes slideDown { from {opacity: 0; transform: translateY(-30px);} to {opacity: 1; transform: translateY(0);} }
    @keyframes fadeUp { from {opacity: 0; transform: translateY(40px);} to {opacity: 1; transform: translateY(0);} }

    @media (max-width: 768px) {
      .hero h1 { font-size: 2rem; }
      .hero p { font-size: 1rem; }
    }
  </style>
</head>

<body>
     <!-- HEADER -->
  <header>
    <div class="logo">KAVARI</div>
    <nav>
      <a href="index.html">Home</a>
      <a href="about.html">About</a>
      <a href="services.html">Services</a>
      <a href="contact.html" class="active">Contact</a>
    </nav>
  </header>
</body>
</html>
 