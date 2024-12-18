<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm xl:hidden block">
    <button type="button" class="close-button">
        <i class="ph ph-x"></i>
    </button>
    <div class="mobile-menu__inner">
        <a href="{{ url('index') }}" class="mobile-menu__logo">
            <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->
            <ul class="nav-menu flex items-center nav-menu--mobile">
                <li class="on-hover-item nav-menu__item has-submenu activePage">
                    <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item activePage">
                            <a href="{{ url('index') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Home Grocery</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('index-two') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Home Electronics</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('index-three') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Home Fashion</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('shop') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('product-details') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop Details</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('product-details-two') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Shop Details Two</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                    <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('cart') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Cart</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('wishlist') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Wishlist</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('checkout') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Checkout</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('become-seller') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Become Seller</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('account') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Account</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                    <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('vendor') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendors</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('vendor-details') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendor Details</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('vendor-two') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendors Two</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('vendor-two-details') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Vendors Two Details</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('blog') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Blog</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="{{ url('blog-details') }}" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">Blog Details</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ url('contact') }}" class="nav-menu__link">Contact Us</a>
                </li>
            </ul>
            <!-- Nav Menu End -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->
