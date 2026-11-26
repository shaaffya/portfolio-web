<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jasmine Aimy - Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- NAVIGATION BAR -->
    <header class="navbar">
      <div class="nav-container">
        <a href="#profil" class="logo">Portfolio.</a>
        <!-- Hamburger Menu Button -->
        <button id="hamburger-btn" class="hamburger-btn">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <nav id="nav-links" class="nav-links">
          <a href="#profil">PROFIL</a>
          <a href="#pendidikan">PENDIDIKAN</a>
          <a href="#pengalaman">PENGALAMAN</a>
          <a href="#keahlian">KEAHLIAN</a>
          <a href="#kontak">KONTAK</a>
          <button id="theme-toggle" class="theme-btn">🌙 Dark Mode</button>
        </nav>
      </div>
    </header>

    <main>
      <!-- HERO / PROFIL SECTION -->
      <section id="profil" class="hero-section">
        <div class="hero-container">
          <div class="hero-text">
            <h1>Jasmine Aimy Shaaffya</h1>
            <p class="subtitle">MAHASISWA D4 TEKNOLOGI REKAYASA MULTIMEDIA</p>
            <div class="about-box">
              <p>
                Hey there, I'm Jasmine, a creative 20-year-old graduate from Telkom Sidoarjo with a passion for graphic design and UI/UX, highly skilled in Figma and Canva. I gained leadership experience as the PDD Division Coordinator for Airlangga University's AEC X Pimnas 2024 event, where I led the design and production team for all visual materials. Eager to apply my creative project management skills professionally.
              </p>
            </div>
          </div>
          <div class="hero-image">
            <div class="img-wrapper">
              <img src="img/fotodiri.jpeg" alt="Jasmine Aimy Shaafya" />
              <div class="img-frame"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- PENDIDIKAN SECTION -->
      <section id="pendidikan" class="section">
        <div class="container">
          <h2 class="section-title">Pendidikan</h2>
          <div class="grid-layout">
            <div class="card accordion-card">
              <div class="accordion-header">
                <h3>Multimedia Engineering Technology</h3>
                <span class="icon">+</span>
              </div>
              <div class="accordion-body">
                <span class="date-badge">2025 - Present</span>
                <p>Politeknik Elektronika Negeri Surabaya</p>
              </div>
            </div>
            <div class="card accordion-card">
              <div class="accordion-header">
                <h3>Indonesian Language and Literature</h3>
                <span class="icon">+</span>
              </div>
              <div class="accordion-body">
                <span class="date-badge">2023 - 2025</span>
                <p>Universitas Airlangga</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PENGALAMAN SECTION -->
      <section id="pengalaman" class="section bg-light">
        <div class="container">
          <h2 class="section-title">Pengalaman</h2>
          <div class="grid-layout">
            <div class="card accordion-card">
              <div class="accordion-header">
                <h3>Coordinator of PDD Division</h3>
                <span class="icon">+</span>
              </div>
              <div class="accordion-body">
                <span class="date-badge">Jul 2024 - Nov 2024</span>
                <p class="org">AEC X PIMNAS UNAIR | PMCC 2024</p>
                <p class="desc">Led the creative team in developing the event's brand identity and overall visual concept.</p>
              </div>
            </div>
            <div class="card accordion-card">
              <div class="accordion-header">
                <h3>Staff of Media & Branding Ministry</h3>
                <span class="icon">+</span>
              </div>
              <div class="accordion-body">
                <span class="date-badge">Mar 2024 - Jan 2025</span>
                <p class="org">Student Executive Board of FIB UNAIR</p>
                <p class="desc">Managed the BEM digital presence by designing instagram content and strategic branding materials.</p>
              </div>
            </div>
            <div class="card accordion-card">
              <div class="accordion-header">
                <h3>Member of PDD Division</h3>
                <span class="icon">+</span>
              </div>
              <div class="accordion-body">
                <span class="date-badge">Jun 2024 - Oct 2024</span>
                <p class="org">SEMESTA SASINDO UNAIR 2024</p>
                <p class="desc">Designed and created the official event mascot which became the primary face of all promotions.</p>
              </div>
            </div>
            <div class="card accordion-card">
              <div class="accordion-header">
                <h3>Member of Humas & Branding</h3>
                <span class="icon">+</span>
              </div>
              <div class="accordion-body">
                <span class="date-badge">Apr 2024 - Jan 2025</span>
                <p class="org">E-Sport Student Club (UKM) UNAIR</p>
                <p class="desc">Contributed to designing promotional materials for various e-sports tournaments.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

<!-- PROJECTS SECTION (PORTFOLIO KARYA) -->
<section id="projects" class="section bg-light">
  <div class="container">
    <h2 class="section-title">Design Projects</h2>
    <!-- Ubah jadi 3 kolom agar pas untuk 3 gambar -->
    <div class="grid-layout" style="grid-template-columns: repeat(3, 1fr); gap: 20px;">
      
      <!-- Project 1: CAKSA TEAM -->
      <div class="card" style="padding: 15px; text-align: center;">
        <img src="img/caksa.jpeg" alt="CAKSA Team Design" style="width: 100%; border-radius: 10px; margin-bottom: 15px; border: 2px solid var(--green-light);">
        <h3 style="color: var(--green-dark); font-size: 1.1rem; margin-bottom: 5px;">CAKSA TEAM</h3>
        <span class="date-badge" style="font-size: 0.7rem;">Social Media Design</span>
      </div>

      <!-- Project 2: AEC x PIMNAS -->
      <div class="card" style="padding: 15px; text-align: center;">
        <img src="img/aec.jpeg" alt="AEC e-sport Design" style="width: 100%; border-radius: 10px; margin-bottom: 15px; border: 2px solid var(--green-light);">
        <h3 style="color: var(--green-dark); font-size: 1.1rem; margin-bottom: 5px;">AEC x PIMNAS 2024</h3>
        <span class="date-badge" style="font-size: 0.7rem;">Social Media Design</span>
      </div>

      <!-- Project 3: BEM FIB -->
      <div class="card" style="padding: 15px; text-align: center;">
        <img src="img/bem.jpeg" alt="BEM FIB Design" style="width: 100%; border-radius: 10px; margin-bottom: 15px; border: 2px solid var(--green-light);">
        <h3 style="color: var(--green-dark); font-size: 1.1rem; margin-bottom: 5px;">BEM FIB UNAIR</h3>
        <span class="date-badge" style="font-size: 0.7rem;">Social Media Design</span>
      </div>

    </div>
  </div>
</section>

      <!-- KEAHLIAN SECTION -->
      <section id="keahlian" class="section">
        <div class="container">
          <h2 class="section-title">Keahlian</h2>
          <div class="skills-wrapper card">
            <div class="skill-item">
              <div class="skill-label">
                <span>Figma</span>
                <span>95%</span>
              </div>
              <div class="progress-bar"><div class="progress-fill" style="width: 95%;"></div></div>
            </div>
            <div class="skill-item">
              <div class="skill-label">
                <span>Canva</span>
                <span>90%</span>
              </div>
              <div class="progress-bar"><div class="progress-fill" style="width: 90%;"></div></div>
            </div>
            <div class="skill-item">
              <div class="skill-label">
                <span>Adobe Illustrator / IbisPaint</span>
                <span>80%</span>
              </div>
              <div class="progress-bar"><div class="progress-fill" style="width: 80%;"></div></div>
            </div>
            <div class="skill-item">
              <div class="skill-label">
                <span>Project Management</span>
                <span>85%</span>
              </div>
              <div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
            </div>
          </div>
        </div>
      </section>

      <!-- KONTAK SECTION -->
      <section id="kontak" class="section bg-light">
        <div class="container">
          <h2 class="section-title">Contact Me!</h2>
          <div class="contact-layout">
            <div class="contact-info">
              <h3>Mari Berkolaborasi!</h3>
              <p>shaafya@gmail.com</p>
              <p>+62 812 3599 9891</p>
              <p>Surabaya, Jawa Timur</p>
              <div class="socials">
                <a href="https://linkedin.com/in/jasmine-shaaffya-614a26263/" target="_blank">LinkedIn</a>
              </div>
            </div>
            
            <div class="contact-form-box card">
              <form id="contactForm" method="POST" action="{{ route('contact.store', [], false) }}">
                @csrf
                <!-- Pesan Error Dinamis -->
                <div id="formMessage" class="form-message">
                @if (session('success'))
                <p class="success-msg">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                <p class="error-msg">{{ $errors->first() }}</p>
                @endif
                </div>
                
                <div class="form-group">
               <input type="text" id="nama" name="name" value="{{ old('name') }}" placeholder="Masukkan nama">
              <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="contoh@email.com">
              <textarea id="pesan" name="message" rows="5" placeholder="Tuliskan pesan Anda...">{{ old('message') }}</textarea>
              <button type="submit" class="btn-submit">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <p>&copy; 2026 Jasmine Aimy Shaafya. All rights reserved.</p>
    </footer>
    
    <script src="js/script.js"></script>
  </body>
</html>