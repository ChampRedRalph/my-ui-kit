<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My UI Kit – Blank</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg border-bottom sticky-top bg-body">
    <div class="container-fluid">
      <button class="btn d-lg-none me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
        <i class="bi bi-list fs-4"></i>
      </button>
      <a class="navbar-brand fw-semibold brand" href="#"><i class="bi bi-boxes me-2"></i>My UI Kit</a>

      <form class="d-none d-md-flex ms-auto me-3" role="search">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-search"></i></span>
          <input class="form-control" type="search" placeholder="Search…" aria-label="Search" />
        </div>
      </form>

      <div class="d-flex align-items-center gap-2">
        <div class="form-check form-switch m-0">
          <input class="form-check-input" type="checkbox" role="switch" id="themeSwitch" />
          <label class="form-check-label" for="themeSwitch"><i class="bi bi-sun-fill" id="themeIcon"></i></label>
        </div>
      </div>
    </div>
  </nav>

  <div class="app">
    <!-- Sidebar (desktop) -->
    <aside class="sidebar p-3 d-none d-lg-block bg-body-tertiary">
      <div class="mb-3">
        <input type="text" class="form-control" id="filterInput" placeholder="Filter menu…">
      </div>
      <div class="list-group" id="sidebarMenu">
        <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-box-arrow-in-right me-2"></i>Login</a>
        <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-exclamation-triangle me-2"></i>404 Page</a>
      </div>
    </aside>

    <!-- Offcanvas Sidebar (mobile) -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title"><i class="bi bi-boxes me-2"></i>My UI Kit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body sidebar-offcanvas">
        <div class="list-group" id="sidebarMenuMobile">
          <a href="#" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
          <a href="#" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-box-arrow-in-right me-2"></i>Login</a>
          <a href="#" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-exclamation-triangle me-2"></i>404 Page</a>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <main class="content p-3 p-lg-4">
      <section class="mb-4">
        <h2 class="h4">Welcome</h2>
        <p>This is a blank template. Start adding your content here.</p>
      </section>

      <footer class="text-center text-secondary small py-4 border-top">
        <div class="text-center">
          <a href="https://github.com/ChampRedRalph" target="_blank" class="text-black text-decoration-none">
            Made by <strong>ChampRedRalph</strong>
            <i class="bi bi-github ms-2"></i>
          </a>
        </div>
      </footer>
    </main>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- App JS -->
  <script>
    // Theme handling
    const docEl = document.documentElement;
    const themeSwitch = document.getElementById('themeSwitch');
    const themeIcon = document.getElementById('themeIcon');

    function setTheme(theme) {
      if (theme === 'auto') {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        docEl.setAttribute('data-bs-theme', prefersDark ? 'dark' : 'light');
      } else {
        docEl.setAttribute('data-bs-theme', theme);
      }
      localStorage.setItem('theme', theme);
      const current = docEl.getAttribute('data-bs-theme');
      themeSwitch.checked = current === 'dark';
      themeIcon.className = current === 'dark' ? 'bi bi-moon-stars-fill' : 'bi bi-sun-fill';
    }

    // Init
    setTheme(localStorage.getItem('theme') || 'light');

    // Toggle switch
    themeSwitch?.addEventListener('change', () => {
      setTheme(themeSwitch.checked ? 'dark' : 'light');
    });

    // Sidebar filter
    function filterList(inputId, listId) {
      const input = document.getElementById(inputId);
      const list = document.getElementById(listId);
      input?.addEventListener('input', () => {
        const q = input.value.toLowerCase();
        list.querySelectorAll('a').forEach(a => {
          const show = a.textContent.toLowerCase().includes(q);
          a.classList.toggle('d-none', !show);
        });
      });
    }
    filterList('filterInput', 'sidebarMenu');
  </script>
</body>
</html>
