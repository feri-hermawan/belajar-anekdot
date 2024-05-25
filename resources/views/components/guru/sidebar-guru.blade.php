<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">Dashboard</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="{{route("profile_guru")}}" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route("daftar_tugas")}}" class="sidebar-link">
                <i class="lni lni-agenda"></i>
                <span>Tugas</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route("daftar_kelas")}}" class="sidebar-link ">
                <i class="lni lni-network"></i>
                <span>Kelas</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
