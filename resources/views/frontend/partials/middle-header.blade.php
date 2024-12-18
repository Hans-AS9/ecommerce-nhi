<!-- ======================= Middle Header Start ========================= -->
<header class="header-middle bg-color-one border-b border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex-between">
            <!-- Logo Start -->
            <div class="logo">
                <a href="{{ url('index') }}" class="link">
                    <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->
            <!-- Form Location Start -->
            <form action="#" class="flex items-center flex-wrap form-location-wrapper">
                <div class="search-category flex h-48 select-border-r-0 radius-end-0 search-form md:flex hidden">
                    <select class="js-example-basic-single border border-gray-200 border-r-0" name="category">
                        <option value="" selected disabled>All Categories</option>
                        <option value="grocery">Grocery</option>
                        <option value="breakfast_dairy">Breakfast & Dairy</option>
                        <option value="vegetables">Vegetables</option>
                        <option value="milks_dairies">Milks and Dairies</option>
                        <option value="pet_foods_toys">Pet Foods & Toy</option>
                        <option value="breads_bakery">Breads & Bakery</option>
                        <option value="fresh_seafood">Fresh Seafood</option>
                        <option value="frozen_foods">Frozen Foods</option>
                        <option value="noodles_rice">Noodles & Rice</option>
                        <option value="ice_cream">Ice Cream</option>
                    </select>
                    <div class="search-form__wrapper relative">
                        <input type="text" class="search-form__input common-input py-13 ps-16 pe-18 !rounded-tr-[50rem] !rounded-br-[50rem] pe-44" placeholder="Search for a product or brand">
                        <button type="submit" class="w-32 h-32 bg-main-600 rounded-[50%] flex items-center justify-center text-xl text-white absolute top-[50%] translate-y-[-50%] right-0 me-8">
                            <i class="ph ph-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
                <div class="location-box bg-white flex items-center gap-8 py-6 px-16 rounded-[50rem] border border-gray-100">
                    <span class="text-gray-900 text-xl sm:flex hidden"><i class="ph ph-map-pin"></i></span>
                    <div class="line-height-1">
                        <span class="text-gray-600 text-xs">Your Location</span>
                        <div class="line-height-1">
                            <select class="js-example-basic-single border border-gray-200 border-r-0" name="location">
                                <option value="alabama">Alabama</option>
                                <option value="alaska">Alaska</option>
                                <option value="arizona">Arizona</option>
                                <option value="delaware">Delaware</option>
                                <option value="florida">Florida</option>
                                <option value="georgia">Georgia</option>
                                <option value="hawaii">Hawaii</option>
                                <option value="indiana">Indiana</option>
                                <option value="maryland">Maryland</option> <!-- corrected spelling from Marzland to Maryland -->
                                <option value="nevada">Nevada</option>
                                <option value="new_jersey">New Jersey</option>
                                <option value="new_mexico">New Mexico</option>
                                <option value="new_york">New York</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Form Location End -->
            <!-- Header Middle Right Start -->
            <div class="header-right items-center xl:block hidden">
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
            <!-- Header Middle Right End -->
        </nav>
    </div>
</header>
<!-- ======================= Middle Header End ========================= -->
