<!-- ========================= Organic Food Start ================================ -->
<section class="organic-food py-80 overflow-hidden">
    <div class="container container-lg">
        <div class="section-heading">
            <div class="flex-between flex-wrap gap-8">
                <h5 class="mb-0 wow bounceInLeft">Organic Food</h5>
                <div class="flex items-center gap-16 wow bounceInRight">
                    <a href="{{ route('shop') }}" class="text-sm font-[500] text-gray-700 hover:text-main-600 hover:text-decoration-underline">
                        All Categories
                    </a>
                    <div class="flex items-center gap-8">
                        <button type="button" id="organic-prev" class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover:border-main-600 text-xl hover:bg-main-600 hover:text-white transition-1">
                            <i class="ph ph-caret-left"></i>
                        </button>
                        <button type="button" id="organic-next" class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover:border-main-600 text-xl hover:bg-main-600 hover:text-white transition-1">
                            <i class="ph ph-caret-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="organic-food__slider arrow-style-two">
            @foreach ($products as $product) <!-- Assuming you have a collection of products -->
            <div data-aos="fade-up" data-aos-duration="{{ 200 + ($loop->index * 200) }}">
                <div class="product-card px-8 py-16 border border-gray-100 hover:border-main-600 rounded-16 relative transition-2">
                    <a href="{{ route('product.details', $product->id) }}" class="product-card__thumb flex items-center justify-center">
                        <img src="{{ asset('frontend/assets/images/thumbs/' . $product->image) }}" alt="{{ $product->name }}">
                    </a>
                    <div class="product-card__content mt-12">
                        <div class="flex items-center gap-6">
                            <span class="text-xs font-[700] text-gray-500">{{ $product->rating }}</span>
                            <span class="text-15 font-[700] text-warning-600 flex">
                                <i class="ph-fill ph-star"></i>
                            </span>
                            <span class="text-xs font-[700] text-gray-500">({{ $product->reviews_count }})</span>
                        </div>
                        <h6 class="title text-lg font-[600] mt-12 mb-8">
                            <a href="{{ route('product.details', $product->id) }}" class="link text-line-2">{{ $product->name }}</a>
                        </h6>
                        <div class="flex items-center gap-4">
                            <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                            <span class="text-gray-500 text-xs">By {{ $product->store }}</span>
                        </div>
                        <div class="flex-between gap-8 mt-24 flex-wrap">
                            <div class="product-card__price">
                                <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">${{ number_format($product->original_price, 2) }}</span>
                                <span class="text-heading text-md font-[600] ">${{ number_format($product->sale_price, 2) }} <span class="text-gray-500 font-normal">/Qty</span></span>
                            </div>
                            <a href="{{ route('cart.add', $product->id) }}" class="product-card__cart btn bg-main-50 text-main-600 hover:bg-main-600 hover:text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                Add <i class="ph ph-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</section>
<!-- ========================= Organic Food End ================================ -->

