
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
    <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
        <div class="profile-image">
            <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
            <div class="dot-indicator bg-success"></div>
        </div>
        </a>
    </li>
    <li class="nav-item nav-category">Menu</li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.brands.index') }}">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">{{ trans('admin.brand.title') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">{{ trans('admin.category.title') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.customers.index') }}">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">{{ trans('admin.customer.title') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.products.index') }}">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">{{ trans('admin.product.title') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.orders.index') }}">
        <i class="menu-icon typcn typcn-bell"></i>
        <span class="menu-title">{{ trans('admin.order.title') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.medias.index') }}">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">Medias</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">Users</span>
        </a>
    </li>
    </ul>
</nav>
