<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">


{{-- Dashboard --}}
<li class="nav-item">

<a class="nav-link" href="{{ route('admin.dashboard') }}">

<i class="bi bi-grid"></i>

<span>Dashboard</span>

</a>

</li>



{{-- Tables --}}
<li class="nav-item">

<a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">

<i class="bi bi-layout-text-window-reverse"></i>

<span>Tables</span>

<i class="bi bi-chevron-down ms-auto"></i>

</a>

<ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

<li>

<a href="{{ route('admin.tables') }}">

<i class="bi bi-circle"></i>

<span>Data Tables</span>

</a>

</li>

</ul>

</li>

<li class="nav-item">

<a class="nav-link"

href="/admin/penaksir">

<i class="bi bi-table"></i>

<span>Penaksir</span>

</a>

</li>

{{-- Profile --}}
<li class="nav-item">

<a class="nav-link collapsed" href="{{ route('admin.profile') }}">

<i class="bi bi-person"></i>

<span>Profile</span>

</a>

</li>


</ul>

</aside>
