<!-- ==================== Header Start Here ==================== -->
<header class="header bg-white border-b border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex justify-between gap-8">
            <div class="flex items-center menu-category-wrapper">
                <!-- Category Dropdown Start -->
                <div class="category on-hover-item">
                    <button type="button" class="category__button flex items-center gap-8 font-[500] p-16 border-r border-l border-gray-100 text-heading">
                        <span class="icon text-2xl sm:flex hidden"><i class="ph ph-dots-nine"></i></span>
                        <span class="md:flex hidden">All</span> Categories
                        <span class="arrow-icon text-xl flex"><i class="ph ph-caret-down"></i></span>
                    </button>
                    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                        <button type="button" class="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex">
                            <i class="ph ph-x"></i>
                        </button>

                        <!-- Logo Start -->
                        <div class="logo px-16 xl:hidden block">
                            <a href="{{ url('index') }}" class="link">
                                <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        <!-- Logo End -->

                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-carrot"></i></span>
                                    <span>Vegetables &amp; Fruit</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li><a href="{{ url('shop') }}">Potato &amp; Tomato</a></li>
                                        <li><a href="{{ url('shop') }}">Cucumber &amp; Capsicum</a></li>
                                        <li><a href="{{ url('shop') }}">Leafy Vegetables</a></li>
                                        <li><a href="{{ url('shop') }}">Root Vegetables</a></li>
                                        <li><a href="{{ url('shop') }}">Beans &amp; Okra</a></li>
                                        <li><a href="{{ url('shop') }}">Cabbage &amp; Cauliflower</a></li>
                                        <li><a href="{{ url('shop') }}">Gourd &amp; Drumstick</a></li>
                                        <li><a href="{{ url('shop') }}">Specialty</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Beverages</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li><a href="{{ url('shop') }}">Soda & Cocktail Mix</a></li>
                                        <li><a href="{{ url('shop') }}">Sports & Energy Drinks</a></li>
                                        <li><a href="{{ url('shop') }}">Non Alcoholic Drinks</a></li>
                                        <li><a href="{{ url('shop') }}">Packaged Water</a></li>
                                        <li><a href="{{ url('shop') }}">Spring Water</a></li>
                                        <li><a href="{{ url('shop') }}">Flavoured Water</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Meats & Seafood</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Meats & Seafood</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li><a href="{{ url('shop') }}">Fresh Meat</a></li>
                                        <li><a href="{{ url('shop') }}">Frozen Meat</a></li>
                                        <li><a href="{{ url('shop') }}">Marinated Meat</a></li>
                                        <li><a href="{{ url('shop') }}">Fresh & Frozen Meat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Breakfast & Dairy</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Breakfast & Dairy</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li><a href="{{ url('shop') }}">Oats & Porridge</a></li>
                                        <li><a href="{{ url('shop') }}">Kids Cereal</a></li>
                                        <li><a href="{{ url('shop') }}">Muesli</a></li>
                                        <li><a href="{{ url('shop') }}">Flakes</a></li>
                                        <li><a href="{{ url('shop') }}">Granola & Cereal Bars</a></li>
                                        <li><a href="{{ url('shop') }}">Instant Noodles</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Frozen Foods</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li><a href="{{ url('shop') }}">Instant Noodles</a></li>
                                        <li><a href="{{ url('shop') }}">Hakka Noodles</a></li>
                                        <li><a href="{{ url('shop') }}">Cup Noodles</a></li>
                                        <li><a href="{{ url('shop') }}">Vermicelli</a></li>
                                        <li><a href="{{ url('shop') }}">Instant Pasta</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Biscuits & Snacks</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Biscuits & Snacks</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li><a href="{{ url('shop') }}">Salted Biscuits</a></li>
                                        <li><a href="{{ url('shop') }}">Marie, Health, Digestive</a></li>
                                        <li><a href="{{ url('shop') }}">Cream Biscuits & Wafers</a></li>
                                        <li><a href="{{ url('shop') }}">Glucose & Milk Biscuits</a></li>
                                        <li><a href="{{ url('shop') }}">Cookies</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Grocery & Staples</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Grocery & Staples</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li><a href="{{ url('shop') }}">Lemon, Ginger & Garlic</a></li>
                                        <li><a href="{{ url('shop') }}">Indian & Exotic Herbs</a></li>
                                        <li><a href="{{ url('shop') }}">Organic Vegetables</a></li>
                                        <li><a href="{{ url('shop') }}">Organic Fruits</a></li>
                                        <li><a href="{{ url('shop') }}">Organic Dry Fruits</a></li>
                                        <li><a href="{{ url('shop') }}">Organic Dals & Pulses</a></li>
                                        <li><a href="{{ url('shop') }}">Organic Millet & Flours</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Category Dropdown End  -->

                <!-- Menu Start  -->
                <div class="header-menu xl:block hidden">
                    <!-- Nav Menu Start -->
                    <ul class="nav-menu flex items-center">
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
                <!-- Menu End -->
            </div>

            <!-- Header Right Start -->
            <div class="header-right flex items-center">
                <a href="tel:01234567890" class="bg-main-600 text-white p-12 h-full hover-bg-main-800 flex items-center gap-8 text-lg xl:flex hidden">
                    <div class="flex text-32"><i class="ph ph-phone-call"></i></div>
                    01- 234 567 890
                </a>
                <div class="me-16 xl:hidden block">
                    <div class="flex items-center flex-wrap gap-12">
                        <button type="button" class="search-icon flex items-center xl:hidden flex gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative item-hover__text">
                                <i class="ph ph-magnifying-glass"></i>
                            </span>
                        </button>
                        <a href="{{ url('wishlist') }}" class="flex items-center gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-heart"></i>
                                <span class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span>
                            <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Wishlist</span>
                        </a>
                        <a href="{{ url('cart') }}" class="flex items-center gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-shopping-cart-simple"></i>
                                <span class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span>
                            <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Cart</span>
                        </a>
                    </div>
                </div>
                <button type="button" class="toggle-mobileMenu xl:hidden ms-3n text-gray-800 text-4xl flex"><i class="ph ph-list"></i></button>
            </div>
            <!-- Header Right End -->
        </nav>
    </div>
</header>
<!-- ==================== Header End Here ==================== -->
