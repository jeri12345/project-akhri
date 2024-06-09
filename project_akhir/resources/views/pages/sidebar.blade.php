<ul class="menu">
    <li class="sidebar-title">Menu</li>
    
    <li
        class="sidebar-item active ">
        <a href="/" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
        

    </li>
    
    <li
        class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-stack"></i>
            <span>Data</span>
        </a>
        
        <ul class="submenu ">
            
            <li class="submenu-item  ">
                <a href="/databuku" class="submenu-link">Data Buku</a>
                
            </li>
            
            <li class="submenu-item  ">
                <a href="/dataanggota" class="submenu-link">Data Anggota</a>
                
            </li>
            
            <li class="submenu-item  ">
                <a href="/datapeminjaman" class="submenu-link">Data Peminjaman</a>
                
            </li>
            
                 
        </ul>
        

    </li>
    
    
    
    <li
        class="sidebar-item  has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-person-badge-fill"></i>
            <span>Authentication</span>
        </a>
        
        <ul class="submenu ">
            @guest
                
            <li class="submenu-item  ">
                <a href="/login" class="submenu-link">Login</a>
                
            </li>
            
            <li class="submenu-item  ">
                <a href="/register" class="submenu-link">Register</a>
                
            </li>
            @endguest

            @auth
                
            
            <li class="submenu-item  ">
                <a href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endauth
        </ul>
        

    </li>
    
    
</ul>