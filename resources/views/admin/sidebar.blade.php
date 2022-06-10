<nav class="sidebar sidebar-offcanvas" style="" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          
          
          <a href="{{url('/')}}" class="sidebar-brand brand-logo" style="color:white;"><span style="color:#00d9a5">E</span>commerce</a>
          <a href="{{url('/')}}" class="sidebar-brand brand-logo-mini" style="color:white;"><span style="color:#00d9a5">E</span>c</a>
        </div>
        <ul class="nav">
       
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          

          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('view_product')}}">Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('show_product')}}">Show Product</a></li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_catagories')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Catagories</span>
            </a>
          </li>

          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('order')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Order</span>
            </a>
          </li>


        </ul>
      </nav>