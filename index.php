<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My UI Kit – Bootstrap + Light/Dark</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Custom styles -->
  <!-- <style>
    :root {
      --sidebar-width: 280px;
    }
    body { min-height: 100vh; }
    .app {
      display: grid;
      grid-template-columns: var(--sidebar-width) 1fr;
    }
    .sidebar {
      position: sticky;
      top: 0;
      height: 100dvh;
      border-right: 1px solid var(--bs-border-color);
      overflow-y: auto;
    }
    .brand {
      letter-spacing: .5px;
    }
    .content {
      min-height: 100dvh;
    }
    .card-stat .display-6 { line-height: 1; }
    .code-card pre { margin: 0; }

    /* Mobile: collapse sidebar */
    @media (max-width: 991.98px) {
      .app { grid-template-columns: 1fr; }
      .sidebar { display: none; }
      .sidebar-offcanvas .list-group-item { border: 0; }
    }
  </style> -->
  <link rel="stylesheet" href="assets/css/styles.css">

<body>
  <!-- Top Navbar -->
  <nav class="navbar navbar-expand-lg border-bottom sticky-top bg-body">
    <div class="container-fluid">
      <button class="btn d-lg-none me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-label="Open menu">
        <i class="bi bi-list fs-4"></i>
      </button>
      <a class="navbar-brand fw-semibold brand" href="#"><i class="bi bi-boxes me-2"></i>My UI Kit</a>

      <form class="d-none d-md-flex ms-auto me-3" role="search">
        <div class="input-group">
          <span class="input-group-text"><i class="bi bi-search"></i></span>
          <input class="form-control" type="search" placeholder="Search components…" aria-label="Search" />
        </div>
      </form>

      <div class="d-flex align-items-center gap-2">
        <div class="form-check form-switch m-0">
          <input class="form-check-input" type="checkbox" role="switch" id="themeSwitch" />
          <label class="form-check-label" for="themeSwitch"><i class="bi bi-sun-fill" id="themeIcon"></i></label>
        </div>
        <a class="btn btn-outline-primary d-none d-sm-inline" href="#" onclick="window.print()"><i class="bi bi-download me-2"></i>Export</a>
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
        <a href="#overview" class="list-group-item list-group-item-action"><i class="bi bi-speedometer2 me-2"></i>Overview</a>
        <a href="#cards" class="list-group-item list-group-item-action"><i class="bi bi-grid-1x2 me-2"></i>Cards</a>
        <a href="#tables" class="list-group-item list-group-item-action"><i class="bi bi-table me-2"></i>Tables</a>
        <a href="#charts" class="list-group-item list-group-item-action"><i class="bi bi-graph-up-arrow me-2"></i>Graphs</a>
        <a href="#forms" class="list-group-item list-group-item-action"><i class="bi bi-ui-checks-grid me-2"></i>Forms</a>
        <a href="#components" class="list-group-item list-group-item-action"><i class="bi bi-layers me-2"></i>Components</a>
        <a href="#utilities" class="list-group-item list-group-item-action"><i class="bi bi-sliders me-2"></i>Utilities</a>
        <a href="login.php" class="list-group-item list-group-item-action"><i class="bi bi-box-arrow-in-right me-2"></i>Login</a>
        <a href="404.php" class="list-group-item list-group-item-action"><i class="bi bi-exclamation-triangle me-2"></i>404 Page</a>
        <a href="blank.php" class="list-group-item list-group-item-action"><i class="bi bi-file-earmark me-2"></i>Blank Page</a>
      </div>
    </aside>

    <!-- Offcanvas Sidebar (mobile) -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSidebarLabel"><i class="bi bi-boxes me-2"></i>My UI Kit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body sidebar-offcanvas">
        <div class="list-group" id="sidebarMenuMobile">
          <a href="#overview" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-speedometer2 me-2"></i>Overview</a>
          <a href="#cards" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-grid-1x2 me-2"></i>Cards</a>
          <a href="#tables" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-table me-2"></i>Tables</a>
          <a href="#charts" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-graph-up-arrow me-2"></i>Graphs</a>
          <a href="#forms" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-ui-checks-grid me-2"></i>Forms</a>
          <a href="#components" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-layers me-2"></i>Components</a>
          <a href="#utilities" class="list-group-item list-group-item-action" data-bs-dismiss="offcanvas"><i class="bi bi-sliders me-2"></i>Utilities</a>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <main class="content p-3 p-lg-4">
      <!-- Overview -->
      <section id="overview" class="mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2 class="h4 m-0">Overview</h2>
          <div class="btn-group" role="group">
            <button class="btn btn-outline-secondary btn-sm" id="btnLight"><i class="bi bi-sun"></i> Light</button>
            <button class="btn btn-outline-secondary btn-sm" id="btnDark"><i class="bi bi-moon"></i> Dark</button>
            <button class="btn btn-outline-secondary btn-sm" id="btnAuto"><i class="bi bi-circle-half"></i> Auto</button>
          </div>
        </div>
        <div class="row g-3">
          <div class="col-12 col-md-6 col-xxl-3">
            <div class="card card-stat shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                  <div class="text-secondary small">Visitors</div>
                  <div class="display-6 fw-semibold">12,480</div>
                </div>
                <i class="bi bi-people fs-1"></i>
              </div>
              <div class="card-footer text-success small"><i class="bi bi-arrow-up-right"></i> +8.2% vs last week</div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xxl-3">
            <div class="card card-stat shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                  <div class="text-secondary small">Signups</div>
                  <div class="display-6 fw-semibold">2,031</div>
                </div>
                <i class="bi bi-person-check fs-1"></i>
              </div>
              <div class="card-footer text-danger small"><i class="bi bi-arrow-down-right"></i> -1.3% vs last week</div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xxl-3">
            <div class="card card-stat shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                  <div class="text-secondary small">Revenue</div>
                  <div class="display-6 fw-semibold">₱384k</div>
                </div>
                <i class="bi bi-cash-coin fs-1"></i>
              </div>
              <div class="card-footer text-success small"><i class="bi bi-arrow-up-right"></i> +3.9% MoM</div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xxl-3">
            <div class="card card-stat shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                  <div class="text-secondary small">Uptime</div>
                  <div class="display-6 fw-semibold">99.97%</div>
                </div>
                <i class="bi bi-cloud-check fs-1"></i>
              </div>
              <div class="card-footer text-success small"><i class="bi bi-activity"></i> All systems nominal</div>
            </div>
          </div>
        </div>
      </section>

      <!-- Cards -->
      <section id="cards" class="mb-4">
        <h2 class="h4 mb-3">Cards</h2>
        <div class="row g-3">
          <div class="col-12 col-lg-6">
            <div class="card shadow-sm h-100">
              <div class="card-header d-flex justify-content-between align-items-center">
                <span><i class="bi bi-card-heading me-2"></i>Example Card</span>
                <div class="btn-group btn-group-sm">
                  <button class="btn btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#card1Body">Toggle</button>
                  <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Open Modal</button>
                </div>
              </div>
              <div id="card1Body" class="card-body collapse show">
                <p class="mb-2">This is a flexible card supporting text, actions, and any content.</p>
                <div class="d-flex gap-2">
                  <button class="btn btn-primary">Primary</button>
                  <button class="btn btn-outline-secondary">Secondary</button>
                  <button class="btn btn-light">Light</button>
                </div>
              </div>
              <div class="card-footer small text-secondary">Updated 5 mins ago</div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="card shadow-sm h-100">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <i class="bi bi-patch-check fs-1 me-3"></i>
                  <div>
                    <h5 class="card-title">Feature Highlight</h5>
                    <p class="card-text">Use cards to group related information with clean spacing and shadows.</p>
                    <a href="#" class="card-link">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Tables -->
      <section id="tables" class="mb-4">
        <h2 class="h4 mb-3">Tables</h2>
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <div class="input-group w-auto">
                <span class="input-group-text"><i class="bi bi-funnel"></i></span>
                <input type="text" id="tableFilter" class="form-control" placeholder="Filter rows…" />
              </div>
              <div class="btn-group">
                <button class="btn btn-outline-secondary btn-sm" id="exportCSV"><i class="bi bi-filetype-csv me-1"></i>CSV</button>
                <button class="btn btn-outline-secondary btn-sm" id="exportPrint"><i class="bi bi-printer me-1"></i>Print</button>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover align-middle" id="demoTable">
                <thead>
                  <tr>
                    <th scope="col" data-sort="string">Name</th>
                    <th scope="col" data-sort="string">Role</th>
                    <th scope="col" data-sort="number">Progress</th>
                    <th scope="col" data-sort="string">Status</th>
                    <th scope="col" class="text-end">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ana Santos</td>
                    <td>Designer</td>
                    <td>73</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td class="text-end"><button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button></td>
                  </tr>
                  <tr>
                    <td>Ben Cruz</td>
                    <td>Developer</td>
                    <td>45</td>
                    <td><span class="badge text-bg-warning">Pending</span></td>
                    <td class="text-end"><button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button></td>
                  </tr>
                  <tr>
                    <td>Cathy Uy</td>
                    <td>PM</td>
                    <td>92</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td class="text-end"><button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button></td>
                  </tr>
                  <tr>
                    <td>Diego Lim</td>
                    <td>Analyst</td>
                    <td>21</td>
                    <td><span class="badge text-bg-secondary">Archived</span></td>
                    <td class="text-end"><button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

      <!-- Charts -->
      <section id="charts" class="mb-4">
        <h2 class="h4 mb-3">Graphs (Chart.js)</h2>
        <div class="row g-3">
          <div class="col-12 col-xl-6">
            <div class="card shadow-sm h-100">
              <div class="card-header"><i class="bi bi-activity me-2"></i>Line Chart</div>
              <div class="card-body">
                <canvas id="lineChart" height="120"></canvas>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6">
            <div class="card shadow-sm h-100">
              <div class="card-header"><i class="bi bi-bar-chart me-2"></i>Bar Chart</div>
              <div class="card-body">
                <canvas id="barChart" height="120"></canvas>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6">
            <div class="card shadow-sm h-100">
              <div class="card-header"><i class="bi bi-pie-chart me-2"></i>Pie Chart</div>
              <div class="card-body">
                <canvas id="pieChart" height="120"></canvas>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Forms -->
      <section id="forms" class="mb-4">
        <h2 class="h4 mb-3">Forms</h2>
        <div class="row g-3">
          <div class="col-12 col-lg-6">
            <div class="card shadow-sm">
              <div class="card-body">
                <form class="row g-3">
                  <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="name@domain.com" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Street" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" />
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose…</option>
                      <option>CA</option>
                      <option>SK</option>
                      <option>ON</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip" />
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck" />
                      <label class="form-check-label" for="gridCheck">Subscribe to newsletter</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6">
            <div class="card shadow-sm">
              <div class="card-body">
                <h6 class="text-secondary">Inputs</h6>
                <div class="row g-2 mb-3">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Text" aria-label="Text">
                  </div>
                  <div class="col">
                    <input type="number" class="form-control" placeholder="Number" aria-label="Number">
                  </div>
                  <div class="col">
                    <input type="date" class="form-control" aria-label="Date">
                  </div>
                </div>
                <h6 class="text-secondary">Buttons</h6>
                <div class="d-flex flex-wrap gap-2 mb-3">
                  <button class="btn btn-primary">Primary</button>
                  <button class="btn btn-secondary">Secondary</button>
                  <button class="btn btn-success">Success</button>
                  <button class="btn btn-danger">Danger</button>
                  <button class="btn btn-warning">Warning</button>
                  <button class="btn btn-info">Info</button>
                  <button class="btn btn-light">Light</button>
                  <button class="btn btn-dark">Dark</button>
                  <button class="btn btn-outline-primary">Outline</button>
                </div>
                <h6 class="text-secondary">Alerts</h6>
                <div class="vstack gap-2">
                  <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                  <div class="alert alert-success" role="alert">Success! Everything looks good.</div>
                  <div class="alert alert-warning" role="alert">Warning! Please double-check your input.</div>
                  <div class="alert alert-danger" role="alert">Error! Something went wrong.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Components -->
      <section id="components" class="mb-4">
        <h2 class="h4 mb-3">Components</h2>
        <div class="row g-3">
          <div class="col-12 col-xl-6">
            <div class="card shadow-sm h-100">
              <div class="card-header">Accordion</div>
              <div class="card-body">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is this UI kit?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">A ready-to-use Bootstrap starter with light/dark mode, sidebar, cards, tables, and charts.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Can I customize it?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">Yes, tweak colors, spacing, and components as you like. It's all HTML/CSS/JS.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6">
            <div class="card shadow-sm h-100">
              <div class="card-header d-flex justify-content-between align-items-center">
                <span>Modal</span>
                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Open</button>
              </div>
              <div class="card-body">
                <p>Use modals for confirmations or additional forms.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Utilities -->
      <section id="utilities" class="mb-5">
        <h2 class="h4 mb-3">Utilities</h2>
        <div class="row g-3">
          <div class="col">
            <div class="p-3 border rounded-3 bg-body-secondary">Spacing &amp; Colors demo block</div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 bg-body-tertiary">Another block</div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3">Plain block</div>
          </div>
        </div>
      </section>

      <footer class="text-center text-secondary small py-4 border-top">
        <div class="text-center">
            <a href="https://github.com/ChampRedRalph" target="_blank" rel="noopener noreferrer" class="text-black text-decoration-none">
            Made by <strong>ChampRedRalph</strong>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-github ms-2" viewBox="0 0 16 16" style="vertical-align:middle;">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.65 7.65 0 0 1 2-.27c.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.19 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
            </a>
        </div>
      </footer>
    </main>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Example Modal</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          This is a reusable modal. Put any content here.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>

  <!-- App JS -->
  <script>
    // Theme handling (Bootstrap 5.3 data-bs-theme)
    const docEl = document.documentElement;
    const themeSwitch = document.getElementById('themeSwitch');
    const themeIcon = document.getElementById('themeIcon');
    const btnLight = document.getElementById('btnLight');
    const btnDark = document.getElementById('btnDark');
    const btnAuto = document.getElementById('btnAuto');

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

    // Init theme
    setTheme(localStorage.getItem('theme') || 'light');

    // Toggle switch
    themeSwitch?.addEventListener('change', () => {
      const next = themeSwitch.checked ? 'dark' : 'light';
      setTheme(next);
    });

    // Quick buttons
    btnLight?.addEventListener('click', () => setTheme('light'));
    btnDark?.addEventListener('click', () => setTheme('dark'));
    btnAuto?.addEventListener('click', () => setTheme('auto'));

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

    // Table filtering & export
    const tableFilter = document.getElementById('tableFilter');
    const demoTable = document.getElementById('demoTable');
    tableFilter?.addEventListener('input', () => {
      const q = tableFilter.value.toLowerCase();
      demoTable.querySelectorAll('tbody tr').forEach(tr => {
        const text = tr.textContent.toLowerCase();
        tr.classList.toggle('d-none', !text.includes(q));
      });
    });

    // Sort on header click
    demoTable?.querySelectorAll('th[data-sort]')?.forEach((th, idx) => {
      th.style.cursor = 'pointer';
      th.addEventListener('click', () => {
        const type = th.dataset.sort;
        const rows = Array.from(demoTable.tBodies[0].rows);
        const asc = th.dataset.order !== 'asc';
        rows.sort((a, b) => {
          const A = a.cells[idx].textContent.trim();
          const B = b.cells[idx].textContent.trim();
          if (type === 'number') return (parseFloat(A) || 0) - (parseFloat(B) || 0);
          return A.localeCompare(B);
        });
        if (!asc) rows.reverse();
        th.dataset.order = asc ? 'asc' : 'desc';
        rows.forEach(r => demoTable.tBodies[0].appendChild(r));
      });
    });

    // Export CSV
    document.getElementById('exportCSV')?.addEventListener('click', () => {
      const rows = [['Name','Role','Progress','Status']];
      demoTable.querySelectorAll('tbody tr:not(.d-none)')?.forEach(tr => {
        const cols = Array.from(tr.cells).slice(0,4).map(td => td.textContent.trim());
        rows.push(cols);
      });
      const csv = rows.map(r => r.map(v => '"' + v.replaceAll('"','""') + '"').join(',')).join('\n');
      const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url; a.download = 'table.csv'; a.click();
      URL.revokeObjectURL(url);
    });

    // Print
    document.getElementById('exportPrint')?.addEventListener('click', () => window.print());

    // Charts setup
    const chartOptions = {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { position: 'top' },
        tooltip: { mode: 'index', intersect: false }
      },
      interaction: { mode: 'nearest', axis: 'x', intersect: false },
      scales: { x: { grid: { display: false } }, y: { beginAtZero: true } }
    };

    const ctxLine = document.getElementById('lineChart');
    if (ctxLine) {
      new Chart(ctxLine, {
        type: 'line',
        data: {
          labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
          datasets: [{
            label: 'Visits',
            data: [120, 190, 150, 220, 300, 280, 320],
            fill: false,
            tension: .3
          }]
        },
        options: chartOptions
      });
    }

    const ctxBar = document.getElementById('barChart');
    if (ctxBar) {
      new Chart(ctxBar, {
        type: 'bar',
        data: {
          labels: ['Q1', 'Q2', 'Q3', 'Q4'],
          datasets: [{ label: 'Revenue', data: [120, 150, 180, 210] }]
        },
        options: chartOptions
      });
    }

    const ctxPie = document.getElementById('pieChart');
    if (ctxPie) {
      new Chart(ctxPie, {
        type: 'pie',
        data: {
          labels: ['Desktop', 'Mobile', 'Tablet'],
          datasets: [{ label: 'Devices', data: [55, 35, 10] }]
        },
        options: { responsive: true, maintainAspectRatio: false }
      });
    }
  </script>
</body>
</html>
