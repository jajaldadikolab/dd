      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="{{ url('admin/dashboard') }}" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

        



          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navForms" aria-expanded="false" aria-controls="navForms">
              <span class="sidebar-nav-icon">
                <i data-feather="edit"></i>
              </span>
              <span class="sidebar-nav-name">
                Forms
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navForms">
              <li class="sidebar-nav-item">
                <a href="{{ url('admin/categories') }}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    KA
                  </span>
                  <span class="sidebar-nav-name">
                    Kategori Alat Musik
                  </span>
                </a>

                <a href="{{ url('admin/products') }}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    PA
                  </span>
                  <span class="sidebar-nav-name">
                    Produk Alat Musik
                  </span>
                </a>
              </li>


            </ul>
          </li>


        </ul>
      </div><!-- Sidebar End -->
