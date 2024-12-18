<!-- ========================= Flash Sales Start ================================ -->
<section class="flash-sales pt-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Flash Sales Today</h5>
                <div class="flex items-center gap-16 wow bounceInRight">
                    <a href="{{ url('shop') }}" class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View All Deals</a>
                    <div class="flex items-center gap-8">
                        <button type="button" id="flash-prev" class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="flash-next" class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flash-sales__slider arrow-style-two">
            <div class="" data-aos="fade-up" data-aos-duration="600">
                <div class="flash-sales-item rounded-16 overflow-hidden z-[1] relative flex items-center flex-0 justify-between gap-8">
                    <img src="{{ asset('frontend/assets/images/bg/flash-sale-bg1.png') }}" alt="Flash Sale Background 1" class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                    <div class="flash-sales-item__thumb md:block hidden">
                        <a href="{{ url('shop') }}" class="w-full h-full flex items-center justify-center">
                            <img src="{{ asset('frontend/assets/images/thumbs/flash-sale-img1.png') }}" alt="Fresh Vegetables">
                        </a>
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Fresh Vegetables</h6>
                        <div class="countdown" id="countdown1">
                            <ul class="countdown-list flex items-center flex-wrap">
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
                        <a href="{{ url('shop') }}" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="" data-aos="fade-up" data-aos-duration="1000">
                <div class="flash-sales-item rounded-16 overflow-hidden z-[1] relative flex items-center flex-0 justify-between gap-8">
                    <img src="{{ asset('frontend/assets/images/bg/flash-sale-bg2.png') }}" alt="Flash Sale Background 2" class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                    <div class="flash-sales-item__thumb md:block hidden">
                        <a href="{{ url('shop') }}" class="w-full h-full flex items-center justify-center">
                            <img src="{{ asset('frontend/assets/images/thumbs/flash-sale-img2.png') }}" alt="Daily Snacks">
                        </a>
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Daily Snacks</h6>
                        <div class="countdown" id="countdown2">
                            <ul class="countdown-list flex items-center flex-wrap">
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
                        <a href="{{ url('shop') }}" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="" data-aos="fade-up" data-aos-duration="1400">
                <div class="flash-sales-item rounded-16 overflow-hidden z-[1] relative flex items-center flex-0 justify-between gap-8">
                    <img src="{{ asset('frontend/assets/images/bg/flash-sale-bg2.png') }}" alt="Flash Sale Background 3" class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                    <div class="flash-sales-item__thumb md:block hidden">
                        <a href="{{ url('shop') }}" class="w-full h-full flex items-center justify-center">
                            <img src="{{ asset('frontend/assets/images/thumbs/flash-sale-img2.png') }}" alt="Daily Snacks">
                        </a>
                    </div>
                    <div class="flash-sales-item__content ms-sm-auto">
                        <h6 class="text-32 mb-20">Daily Snacks</h6>
                        <div class="countdown" id="countdown3">
                            <ul class="countdown-list flex items-center flex-wrap">
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
                        <a href="{{ url('shop') }}" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                            Shop Now
                            <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Flash Sales End ================================ -->
