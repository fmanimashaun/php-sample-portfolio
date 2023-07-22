<aside class="navigation">
  <header class="header">
    <h1 class='logo'>My Site</h1>
    <nav class="nav">
      <ul class="nav-links">
        <li class="nav-item <?= $currentPage === 'home' ? 'active' : '' ?>">
          <img src="../img/home.svg" alt="home icon">
          <a href="/">Home</a>
        </li>
        <li class="nav-item <?= $currentPage === 'about' ? 'active' : '' ?>">
          <img src="../img/about.svg" alt="about icon">
          <a href="/about">About</a>
        </li>
        <li class="nav-item <?= $currentPage === 'service' ? 'active' : '' ?>">
          <img src="../img/service.svg" alt="service icon">
          <a href="/service">Service</a>
        </li>
        <li class="nav-item <?= $currentPage === 'portfolio' ? 'active' : '' ?>">
          <img src="../img/portfolio.svg" alt="portfolio icon">
          <a href="/portfolio">Portfolio</a>
        </li>
        <li class="nav-item <?= $currentPage === 'news' ? 'active' : '' ?>">
          <img src="../img/news.svg" alt="news icon">
          <a href="/news">News</a>
        </li>
        <li class="nav-item <?= $currentPage === 'contact' ? 'active' : '' ?>">
          <img src="../img/contact.svg" alt="contact icon">
          <a href="/contact">Contact</a>
        </li>
      </ul>
    </nav>
  </header>
  <footer>
    <p>&copy; 2023 My sites</p>
    <p>Created by <a href='https:fmanimashaun.com'>fmanimashaun</a></p>
  </footer>
</aside>