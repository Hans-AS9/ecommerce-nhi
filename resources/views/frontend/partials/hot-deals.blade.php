<!-- ========================= Hot Deals Start ================================ -->
<section class="hot-deals pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Hot Deals Today</h5>
                <div class="flex items-center gap-16 wow bounceInRight">
                    <a href="{{ url('shop') }}" class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex items-center gap-8">
                        <button type="button" id="deals-prev" class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="deals-next" class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-12">
            <div class="lg:w-4/12 flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in">
                <div class="hot-deals relative rounded-16 bg-main-600 overflow-hidden p-28 z-[1] text-center">
                    <img src="{{ asset('frontend/assets/images/shape/offer-shape.png') }}" alt="Offer Background" class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                    <div class="hot-deals__thumb">
                        <img src="{{ asset('frontend/assets/images/thumbs/hot-deals-img.png') }}" alt="Hot Deal Image">
                    </div>
                    <div class="2xl:py-[1.5rem]">
                        <h4 class="text-white mb-8">Fresh Vegetables</h4>
                        <div class="countdown my-32" id="countdown4">
                            <ul class="countdown-list flex items-center justify-center flex-wrap">
                                <li class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                    <span class="days"></span> Days
                                </li>
                                <li class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                    <span class="hours"></span> Hours
                                </li>
                                <li class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                    <span class="minutes"></span> Min
                                </li>
                                <li class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                    <span class="seconds"></span> Sec
                                </li>
                            </ul>
                        </div>
                        <a href="{{ url('shop') }}" class="mt-16 btn btn-main-two font-[500] inline-flex items-center rounded-[50rem] gap-8" tabindex="0">
                            Shop Now
                            <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:w-8/12 flex-grow-0 flex-shrink-0 basis-auto">
                <div class="hot-deals-slider arrow-style-two">
                    <div data-aos="fade-up" data-aos-duration="200">
                        <div class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%</span>
                            <a href="{{ url('product-details') }}" class="product-card__thumb flex items-center justify-center">
                                <img src="{{ asset('frontend/assets/images/thumbs/product-img8.png') }}" alt="Marcel's Modern Pantry Almond Unsweetened">
                            </a>
                            <div class="product-card__content p-sm-2 w-full">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a href="{{ url('product-details') }}" class="link text-line-2">Marcel's Modern Pantry Almond Unsweetened</a>
                                </h6>
                                <div class="flex items-center gap-4">
                                    <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md font-[600] ">$14.99 <span class="text-gray-500 font-normal">/Qty</span></span>
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <a href="{{ url('cart') }}" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="400">
                        <div class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%</span>
                            <a href="{{ url('product-details') }}" class="product-card__thumb flex items-center justify-center">
                                <img src="{{ asset('frontend/assets/images/thumbs/product-img9.png') }}" alt="O Organics Milk, Whole, Vitamin D">
                            </a>
                            <div class="product-card__content p-sm-2 w-full">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a href="{{ url('product-details') }}" class="link text-line-2">O Organics Milk, Whole, Vitamin D</a>
                                </h6>
                                <div class="flex items-center gap-4">
                                    <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md font-[600] ">$14.99 <span class="text-gray-500 font-normal">/Qty</span></span>
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <a href="{{ url('cart') }}" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600">
                        <div class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <a href="{{ url('product-details') }}" class="product-card__thumb flex items-center justify-center">
                                <img src="{{ asset('frontend/assets/images/thumbs/product-img10.png') }}" alt="Whole Grains and Seeds Organic Bread">
                            </a>
                            <div class="product-card__content p-sm-2 w-full">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a href="{{ url('product-details') }}" class="link text-line-2">Whole Grains and Seeds Organic Bread</a>
                                </h6>
                                <div class="flex items-center gap-4">
                                    <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md font-[600] ">$14.99 <span class="text-gray-500 font-normal">/Qty</span></span>
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <a href="{{ url('cart') }}" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="800">
                        <div class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%</span>
                            <a href="{{ url('product-details') }}" class="product-card__thumb flex items-center justify-center">
                                <img src="{{ asset('frontend/assets/images/thumbs/product-img11.png') }}" alt="Lucerne Yogurt, Lowfat, Strawberry">
                            </a>
                            <div class="product-card__content p-sm-2 w-full">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a href="{{ url('product-details') }}" class="link text-line-2">Lucerne Yogurt, Lowfat, Strawberry</a>
                                </h6>
                                <div class="flex items-center gap-4">
                                    <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md font-[600] ">$14.99 <span class="text-gray-500 font-normal">/Qty</span></span>
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <a href="{{ url('cart') }}" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%</span>
                            <a href="{{ url('product-details') }}" class="product-card__thumb flex items-center justify-center">
                                <img src="{{ asset('frontend/assets/images/thumbs/product-img12.png') }}" alt="Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp">
                            </a>
                            <div class="product-card__content p-sm-2 w-full">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a href="{{ url('product-details') }}" class="link text-line-2">Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp</a>
                                </h6>
                                <div class="flex items-center gap-4">
                                    <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md font-[600] ">$14.99 <span class="text-gray-500 font-normal">/Qty</span></span>
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <a href="{{ url('cart') }}" class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1200">
                        <div class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                            <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%</span>
                            <a href="{{ url('product-details') }}" class="product-card__thumb flex items-center justify-center">
                                <img src="{{ asset('frontend/assets/images/thumbs/product-img13.png') }}" alt="Fish & Meats">
                            </a>
                            <div class="product-card__content p-sm-2 w-full">
                                <h6 class="title text-lg font-[600] mt-12 mb-8">
                                    <a href="{{ url('product-details') }}" class="link text-line-2">Fish & Meats</a>
                                </h6>
                                <div class="flex items-center gap-4">
                                    <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                    <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="product-card__price mb-8">
                                        <span class="text-heading text-md font-[600] ">$14.99 <span class="text-gray-500 font-normal">/Qty</span></span>
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">$28.99</span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Hot Deals End ================================ -->
