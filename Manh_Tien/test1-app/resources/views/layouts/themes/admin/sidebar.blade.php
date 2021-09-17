<nav class="navbar bg-light sidebar" >
    <ul class="accordion-container navbar-nav sidebar-list">
        <li class="nav-item">
            <a class="nav-link content-link" href="{{ route('dashboard') }}"><i class='fas fa-home'></i> Dashboard</a>
        </li>
    <!--==== accordion list  =====-->
        <li class="nav-item accordion-content hide">
            <h3 class="title"><i class='fa fa-pager'></i> Products</h3>
            <ul class="description navbar-nav">
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Pages</a>
                </li>
            </ul>
        </li>
    <!--==== accordion list  =====-->
        <li class="nav-item accordion-content hide">
            <h3 class="title"><i class='fa fa-images'></i> Category</h3>
            <ul class="description navbar-nav">
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-category') }}">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-category') }}">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-category') }}">Category</a>
                </li>
            </ul>
        </li>
    <!--==== accordion list =====-->
        <li class="nav-item accordion-content hide">
            <h3 class="title"><i class='fa fa-file-alt'></i> Manage</h3>
            <ul class="description navbar-nav">
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Home Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Home Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Home Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Home Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Home Content</a>
                </li>
            </ul>
        </li>
    <!--==== accordion list  =====-->
        <li class="nav-item accordion-content hide">
            <h3 class="title"><i class="fas fa-users-cog"></i> Admin</h3>
            <ul class="description navbar-nav">
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Admin Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link content-link" href="{{ route('admin-product') }}">Change Password</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>