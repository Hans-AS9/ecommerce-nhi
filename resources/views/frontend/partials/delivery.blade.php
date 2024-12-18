<!-- ========================= Delivery Section Start ================================ -->
<section class="delivery-section">
    <div class="container container-lg">
        <div class="delivery relative rounded-16 bg-main-600 p-16 flex items-center gap-16 flex-wrap z-[1]">
            <img src="{{ asset('frontend/assets/images/delivery-bg.png') }}" alt="Delivery background" class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full">
            <div class="row items-center">
                <div class="lg:w-3/12 flex-grow-0 flex-shrink-0 basis-auto lg:block hidden">
                    <div class="delivery__man text-center" data-aos="fade-down-right">
                        <img src="{{ asset('frontend/assets/images/delivery-man.png') }}" alt="Delivery man">
                    </div>
                </div>
                <div class="lg:w-5/12 flex-grow-0 flex-shrink-0 basis-auto md:w-7/12 flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="text-center">
                        <h4 class="text-white mb-8" data-aos="fade-down">We Deliver Next Day from 10:00 AM to 08:00 PM</h4>
                        <p class="text-white" data-aos="zoom-in">For Orders starting from $100</p>
                        <a href="{{ route('shop') }}" class="mt-16 btn btn-main-two font-[500] inline-flex items-center rounded-[50rem] gap-8" data-aos="fade-up" tabindex="0">
                            Shop Now
                            <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="lg:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-5/12 flex-grow-0 flex-shrink-0 basis-auto md:block hidden" data-aos="zoom-out" data-aos-duration="800">
                    <img src="{{ asset('frontend/assets/images/special-snacks-img.png') }}" alt="Special snacks">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= Delivery Section End ================================ -->
