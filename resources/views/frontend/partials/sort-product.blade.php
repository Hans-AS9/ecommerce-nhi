<!-- ========================== Short Product Section Start ============================== -->
<div class="short-product">
    <div class="container container-lg">
        <div class="row g-4">

            @foreach ($featuredProducts as $product) <!-- Dynamic: Featured Products -->
            <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                data-aos="fade-up" data-aos-duration="600">
                <div class="p-16 border border-gray-100 hover:border-main-600 rounded-16 relative transition-2">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line relative mb-0 pb-16 inline-block">Featured Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            @foreach ($product->items as $item) <!-- Assuming products have items -->
                            <div class="flex items-center gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="{{ route('product.details', $item->id) }}" class="link">
                                        <img src="{{ asset('frontend/assets/images/thumbs/' . $item->image) }}" alt="{{ $item->name }}">
                                    </a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-500">{{ $item->rating }}</span>
                                        <span class="text-15 font-[700] text-warning-600 flex">
                                            <i class="ph-fill ph-star"></i>
                                        </span>
                                        <span class="text-xs font-[700] text-gray-500">({{ $item->reviews_count }})</span>
                                    </div>
                                    <h6 class="title text-lg font-[600] mt-8 mb-8">
                                        <a href="{{ route('product.details', $item->id) }}" class="link text-line-1">{{ $item->name }}</a>
                                    </h6>
                                    <div class="product-card__price flex items-center gap-8">
                                        <span class="text-heading text-md font-[600] block">{{ $item->price }}</span>
                                        @if ($item->discount_price)
                                        <span class="text-gray-400 text-md font-[600] block">{{ $item->discount_price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($topSellingProducts as $product) <!-- Dynamic: Top Selling Products -->
            <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                data-aos="fade-up" data-aos-duration="800">
                <div class="p-16 border border-gray-100 hover:border-main-600 rounded-16 relative transition-2">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line relative mb-0 pb-16 inline-block">Top Selling Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            @foreach ($product->items as $item) <!-- Assuming products have items -->
                            <div class="flex items-center gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="{{ route('product.details', $item->id) }}" class="link">
 <img src="{{ asset('frontend/assets/images/thumbs/' . $item->image) }}" alt="{{ $item }}">
                                    </a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-500">{{ $item->rating }}</span>
                                        <span class="text-15 font-[700] text-warning-600 flex">
                                            <i class="ph-fill ph-star"></i>
                                        </span>
                                        <span class="text-xs font-[700] text-gray-500">({{ $item->reviews_count }})</span>
                                    </div>
                                    <h6 class="title text-lg font-[600] mt-8 mb-8">
                                        <a href="{{ route('product.details', $item->id) }}" class="link text-line-1">{{ $item->name }}</a>
                                    </h6>
                                    <div class="product-card__price flex items-center gap-8">
                                        <span class="text-heading text-md font-[600] block">{{ $item->price }}</span>
                                        @if ($item->discount_price)
                                        <span class="text-gray-400 text-md font-[600] block">{{ $item->discount_price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($onSaleProducts as $product) <!-- Dynamic: On-sale Products -->
            <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                data-aos="fade-up" data-aos-duration="1000">
                <div class="p-16 border border-gray-100 hover:border-main-600 rounded-16 relative transition-2">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line relative mb-0 pb-16 inline-block">On-sale Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            @foreach ($product->items as $item) <!-- Assuming products have items -->
                            <div class="flex items-center gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="{{ route('product.details', $item->id) }}" class="link">
                                        <img src="{{ asset('frontend/assets/images/thumbs/' . $item->image) }}" alt="{{ $item->name }}">
                                    </a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-500">{{ $item->rating }}</span>
                                        <span class="text-15 font-[700] text-warning-600 flex">
                                            <i class="ph-fill ph-star"></i>
                                        </span>
                                        <span class="text-xs font-[700] text-gray-500">({{ $item->reviews_count }})</span>
                                    </div>
                                    <h6 class="title text-lg font-[600] mt-8 mb-8">
                                        <a href="{{ route('product.details', $item->id) }}" class="link text-line-1">{{ $item->name }}</a>
                                    </h6>
                                    <div class="product-card__price flex items-center gap-8">
                                        <span class="text-heading text-md font-[600] block">{{ $item->price }}</span>
                                        @if ($item->discount_price)
                                        <span class="text-gray-400 text-md font-[600] block">{{ $item->discount_price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($topRatedProducts as $product) <!-- Dynamic: Top Rated Products -->
            <div class="custom-2xl:w-3/12 flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12 flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 flex-grow-0 flex-shrink-0 basis-auto"
                data-aos="fade-up" data-aos-duration="1200">
                <div class="p-16 border border-gray-100 hover:border-main-600 rounded-16 relative transition-2">
                    <div class="p-16 bg-main-50 rounded-16 mb-32">
                        <h6 class="underlined-line relative mb-0 pb-16 inline-block">Top Rated Products</h6>
                    </div>
                    <div class="short-product-list arrow-style-two">
                        <div>
                            @foreach ($product->items as $item) <!-- Assuming products have items -->
                            <div class="flex items-center gap-16 mb-40">
                                <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                    <a href="{{ route('product.details', $item->id) }}" class="link">
                                        <img src="{{ asset('frontend/assets/images/thumbs/' . $item->image) }}" alt="{{ $item->name }}">
                                    </a>
                                </div>
                                <div class="product-card__content mt-12">
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-500">{{ $item->rating }}</span>
                                        <span class="text-15 font-[700] text-warning-600 flex">
                                            <i class="ph-fill ph-star"></i>
                                        </span>
                                        <span class="text-xs font-[700] text-gray-500">({{ $item->reviews_count }})</span>
                                    </div>
                                    <h6 class="title text-lg font-[600] mt-8 mb-8">
                                        <a href="{{ route('product.details', $item->id) }}" class="link text-line-1">{{ $item->name }}</a>
                                    </h6>
                                    <div class="product-card__price flex items-center gap-8">
                                        <span class="text-heading text-md font-[600] block">{{ $item->price }}</span>
                                        @if ($item->discount_price)
                                        <span class="text-gray-400 text-md font-[600] block">{{ $item->discount_price }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- ========================== Short Product Section End ============================== -->
