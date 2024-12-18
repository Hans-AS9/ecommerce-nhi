<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketPro - E-commerce HTML5 Tailwind CSS Template</title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favicon.png') }}">
    @vite(['resources/views/frontend/sass/app.scss', 'resources/views/frontend/js/app.js']) <!-- Memanggil SCSS dan JS dengan Vite -->
</head>
<body>
    <!-- Preloader Start -->
    <div class="preloader fixed inset-0 z-[9999] flex justify-center items-center bg-white">
        <img src="{{ asset('frontend/assets/images/icon/preloader.gif') }}" alt="Loading...">
    </div>
    <!-- Preloader End -->

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Sidebar Overlay -->
    <div class="side-overlay"></div>

    <!-- Scroll to Top -->
    <div class="progress-wrap fixed right-[36px] bottom-[36px]">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Scroll to Top End -->

    <!-- Search Box -->
    <form action="#" class="search-box">
        <button type="button" class="search-box__close">
            <i class="ph ph-x"></i>
        </button>
        <div class="container">
            <div class="relative">
                <input type="text" class="form-control rounded-full" placeholder="Search for a product or brand">
                <button type="submit" class="w-48 h-48 bg-main-600">
                    <i class="ph ph-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- Search Box End -->

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <button type="button" class="close-button"><i class="ph ph-x"></i></button>
        <div class="mobile-menu__inner">
            <a href="{{ url('/') }}" class="mobile-menu__logo">
                <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo">
            </a>
            <div class="mobile-menu__menu">
                <!-- Nav Menu Start -->
                <ul class="nav-menu">
                    <li class="on-hover-item">
                        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                        <ul class="on-hover-dropdown">
                            <li class="common-dropdown__item">
                                <a href="{{ url('index.html') }}" class="common-dropdown__link">Home Grocery</a>
                            </li>
                            <li class="common-dropdown__item">
                                <a href="{{ url('index-two.html') }}" class="common-dropdown__link">Home Electronics</a>
                            </li>
                            <li class="common-dropdown__item">
                                <a href="{{ url('index-three.html') }}" class="common-dropdown__link">Home Fashion</a>
                            </li>
                        </ul>
                    </li>
                    <li class="on-hover-item">
                        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
                        <ul class="on-hover-dropdown">
                            <li class="common-dropdown__item">
                                <a href="{{ url('shop.html') }}" class="common-dropdown__link">Shop</a>
                            </li>
                            <li class="common-dropdown__item">
                                <a href="{{ url('product-details.html') }}" class="common-dropdown__link">Shop Details</a>
                            </li>
                            <li class="common-dropdown__item">
                                <a href="{{ url('product-details-two.html') }}" class="common-dropdown__link">Shop Details Two</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="{{ url('contact.html') }}" class="nav-menu__link">Contact Us</a>
                    </li>
                </ul>
                <!-- Nav Menu End -->
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->

    <!-- Middle Top Start -->
    <div class="header-top bg-main-600 flex-between">
        <div class="container mx-auto">
            <div class="flex-between flex-wrap gap-8">
                <ul class="flex items-center flex-wrap hidden lg:flex">
                    <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover:text-decoration-underline">Become A Seller</a></li>
                    <li class="border-right-item"><a href="#aboutus" class="text-white text-sm hover:text-decoration-underline">About us</a></li>
                    <li class="border-right-item"><a href="#delivery" class="text-white text-sm hover:text-decoration-underline">Free Delivery</a></li>
                    <li class="border-right-item"><a href="#returns-policy" class="text-white text-sm hover:text-decoration-underline">Returns Policy</a></li>
                </ul>
                <ul class="header-top__right flex items-center flex-wrap">
                    <li class="border-right-item"><a href="javascript:void(0)" class="text-white text-sm">Help Center</a></li>
                    <li class="border-right-item"><a href="javascript:void(0)" class="text-white text-sm">Eng</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Middle Top End -->

    <!-- Middle Header Start -->
    <header class="header-middle bg-color-one border-b border-gray-100">
        <div class="container mx-auto">
            <nav class="header-inner flex justify-between items-center">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="{{ url('/') }}" class="link">
                        <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <!-- Logo End -->

                <!-- Form Location Start -->
                <form action="#" class="flex items-center flex-wrap form-location-wrapper">
                    <div class="search-category flex h-48 select-border-r-0 radius-end-0 search-form md:flex hidden">
                        <select class="js-example-basic-single border border-gray-200 border-r-0" name="state">
                            <option value="1" selected disabled>All Categories</option>
                            <option value="1">Grocery</option>
                            <option value="2">Breakfast & Dairy</option>
                            <option value="3">Vegetables</option>
                            <option value="4">Milks and Dairies</option>
                            <option value="5">Pet Foods & Toy</option>
                            <option value="6">Breads & Bakery</option>
                            <option value="7">Fresh Seafood</option>
                            <option value="8">Frozen Foods</option>
                            <option value="9">Noodles & Rice</option>
                            <option value="10">Ice Cream</option>
                        </select>
                        <div class="search-form__wrapper relative">
                            <input type="text" class="search-form__input common-input py-3 px-6 rounded-[50rem]" placeholder="Search for a product or brand">
                            <button type="submit" class="btn btn-main bg-main-600 text-white py-2 px-4 rounded-full absolute right-0 top-1/2 transform -translate-y-1/2">
                                <i class="ph ph-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- Form Location End -->

                <!-- Header Right Start -->
                <div class="header-right items-center hidden xl:flex">
                    <a href="tel:01234567890" class="bg-main-600 text-white p-2 rounded flex items-center gap-2">
                        <i class="ph ph-phone-call"></i>
                        01-234-567-890
                    </a>
                    <a href="cart.html" class="flex items-center gap-4 relative">
                        <i class="ph ph-shopping-cart-simple text-2xl"></i>
                        <span class="w-6 h-6 flex items-center justify-center rounded-full bg-main-600 text-white text-xs absolute -top-2 -right-2">2</span>
                    </a>
                </div>
                <!-- Header Right End -->
            </nav>
        </div>
    </header>
    <!-- Middle Header End -->

    <!-- Main Content -->
    <main class="container mx-auto my-10">
        <h2 class="text-2xl font-bold text-center mb-4">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Product Card Example -->
            <div class="bg-white p-5 rounded-lg shadow">
                <div class="relative">
                    <img src="{{ asset ('frontend/assets/images/thumbs/product-img1.png') }}" alt="Product" class="w-full h-40 object-cover rounded">
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded">Sale 50%</span>
                </div>
                <h3 class="text-lg font-medium mt-3">RICOL</h3>
                <p class="text-gray-400 line-through">$28.99 <span class="font-bold text-main-600">$14.99</span></p>
                <a href="javascript:void(0)" class="btn btn-main bg-main-600 text-white px-6 py-2 rounded mt-4">Add to Cart</a>
            </div>
            <!-- Ulangi Card Produk untuk lebih banyak produk -->
            <div class="bg-white p-5 rounded-lg shadow">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/thumbs/product-img2.png') }}" alt="Product" class="w-full h-40 object-cover rounded">
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded">Sale 30%</span>
                </div>
                <h3 class="text-lg font-medium mt-3">Organic Fruits</h3>
                <p class="text-gray-400 line-through">$20.99 <span class="font-bold text-main-600">$14.99</span></p>
                <a href="javascript:void(0)" class="btn btn-main bg-main-600 text-white px-6 py-2 rounded mt-4">Add to Cart</a>
            </div>
            <div class="bg-white p-5 rounded-lg shadow">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/thumbs/product-img3.png') }}" alt="Product" class="w-full h-40 object-cover rounded">
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded">Sale 25%</span>
                </div>
                <h3 class="text-lg font-medium mt-3">Dairy Products</h3>
                <p class="text-gray-400 line-through">$10.99 <span class="font-bold text-main-600">$8.99</span></p>
                <a href="javascript:void(0)" class="btn btn-main bg-main-600 text-white px-6 py-2 rounded mt-4">Add to Cart</a>
            </div>
            <div class="bg-white p-5 rounded-lg shadow">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/thumbs/product-img5.png') }}" alt="Product" class="w-full h-40 object-cover rounded">
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded">Sale 15%</span>
                </div>
                <h3 class="text-lg font-medium mt-3">Bakery Items</h3>
                <p class="text-gray-400 line-through">$5.99 <span class="font-bold text-main-600">$4.99</span></p>
                <a href="javascript:void(0)" class="btn btn-main bg-main-600 text-white px-6 py-2 rounded mt-4">Add to Cart</a>
            </div>
            <!-- ... (tambahkan lebih banyak produk sesuai kebutuhan) -->
        </div>
    </main>

    <!-- Footer Start -->
    <footer class="footer bg-gray-800 text-white py-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 MarketPro. All Rights Reserved.</p>
            <div class="mt-4">
                <a href="#" class="text-white mx-2">Facebook</a>
                <a href="#" class="text-white mx-2">Twitter</a>
                <a href="#" class="text-white mx-2">Instagram</a>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Script JS -->
    @vite('resources/views/frontend/js/app.js') <!-- Memanggil JS dengan Vite -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Pastikan jQuery dimuat -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> <!-- Pastikan jQuery UI dimuat setelah jQuery -->
</body>
</html>
