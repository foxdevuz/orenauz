<aside class="page-sidebar">
    <div class="h-100 flex-column d-flex" data-simplebar>

      <!--Aside-logo-->
      <div class="aside-logo p-3 position-relative">
        <a href="/admin/dashboard" class="d-block pe-2">
          <div class="d-flex align-items-center flex-no-wrap text-truncate">
            <!--Sidebar-icon-->
            <span class="sidebar-icon fs-5 lh-1 text-white rounded-circle bg-primary">
              <svg width="16" height="18" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.399994" width="4" height="12" fill="white" />
                <path
                  d="M5.89998 9.6C7.1465 9.6 8.34196 9.09429 9.22338 8.19411C10.1048 7.29394 10.6 6.07304 10.6 4.8C10.6 3.52696 10.1048 2.30606 9.22338 1.40589C8.34196 0.505713 7.1465 2.4787e-07 5.89998 0L5.89998 4.8L5.89998 9.6Z"
                  fill="white" />
              </svg>
            </span>
            <span class="sidebar-text">
              <!--Sidebar-text-->
              <span class="sidebar-text text-truncate fs-4 text-uppercase fw-bolder">
                Panel
              </span>
            </span>
          </div>
        </a>
      </div>
      <!--Aside-Menu-->
      <div class="aside-menu pe-2 my-auto flex-column-fluid">
        <nav class="flex-grow-1 h-100" id="page-navbar">
          <!--:Sidebar nav-->
          <ul class="nav flex-column collapse-group collapse d-flex pt-4">
            <li class="nav-item sidebar-title text-truncate opacity-50 small">
              <i class="fas fa-ellipsis-h align-middle"></i>
              <span>Asosiy</span>
            </li>
            <li class="nav-item">
              <a href="#dashboards" data-bs-toggle="collapse"
                class="nav-link d-flex align-items-center text-truncate active"
                aria-expanded="false">
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path
                      d="M12.97 2.59a1.5 1.5 0 00-1.94 0l-7.5 6.363A1.5 1.5 0 003 10.097V19.5A1.5 1.5 0 004.5 21h4.75a.75.75 0 00.75-.75V14h4v6.25c0 .414.336.75.75.75h4.75a1.5 1.5 0 001.5-1.5v-9.403a1.5 1.5 0 00-.53-1.144l-7.5-6.363z">
                    </path>
                  </svg>
                </span>
                <!--Sidebar nav text-->
                <span class="sidebar-text">Boshqaruv paneli</span>
              </a>
              <ul data-bs-target="#dashboards" id="dashboards" class="sidebar-dropdown list-unstyled collapse">
                <li class="sidebar-item"><a class="sidebar-link" href="/admin/dashboard">Asosiy</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </aside>
