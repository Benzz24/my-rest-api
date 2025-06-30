@extends('layouts.app-public')

@section('title', 'Shop')

@section('content')
<div class="site-wrapper-reveal">
    <!-- Product Area Start -->
    <div class="product-wrapper section-space--ptb_90 border-bottom pb-5 mb-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filter -->
                <div class="col-lg-3 col-md-3 order-md-1 order-2 smalll-mt__40">
                    <!-- Filter: Publishers -->
                    <div class="shop-widget widget-shop-publishers mt-3">
                        <div class="product-filter">
                            <h6 class="mb-2">King Innovations</h6>
                            <select class="filter form-select form-select-sm" name="_publisher" onchange="getData()">
                                <option value="">selected:All</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                                <option value="Kings Team">Kings Team</option>
                            </select>
                        </div>
                    </div>

                    <!-- Filter: Color -->
                    <div class="shop-widget widget-color">
                        <div class="product-filter">
                            <h6 class="mb-2">Color</h6>
                            <ul class="widget-nav-list">
                                <li><a href="#"><span class="swatch-color black"></span></a></li>
                                <li><a href="#"><span class="swatch-color green"></span></a></li>
                                <li><a href="#"><span class="swatch-color blue"></span></a></li>
                                <li><a href="#"><span class="swatch-color red"></span></a></li>
                                <li><a href="#"><span class="swatch-color white"></span></a></li>
                                <li><a href="#"><span class="swatch-color yellow"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Filter: Price -->
                    <div class="shop-widget">
                        <div class="product-filter widget-price">
                            <h6 class="mb-20">Price</h6>
                            <ul class="widget-nav-list">
                                <li><a href="#">Under IDR 100K</a></li>
                                <li><a href="#">IDR 100-500K</a></li>
                                <li><a href="#">IDR 501-1000K</a></li>
                                <li><a href="#">Above IDR 1000K</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Filter: Tags -->
                    <div class="shop-widget">
                        <div class="product-filter">
                            <h6 class="mb-20">Tags</h6>
                            <div class="blog-tagcloud">
                                <a href="#" class="selected">Bags artist</a>
                                <a href="#">Bag</a>
                                <a href="#">Best Seller</a>
                                <a href="#">Style</a>
                                <a href="#">branded bags</a>
                                <a href="#">women bags</a>
                                <a href="#">fashion</a>
                                <a href="#">premium</a>
                                <a href="#">trendy</a>
                                <a href="#">luxury</a>
                                <a href="#">elegant</a>
                                <a href="#">original</a>
                                <a href="#">limited</a>
                                <a href="#">celebrity</a>
                                <a href="#">best selling</a>
                                <a href="#">college</a>
                                <a href="#">crossbody bags</a>
                                <a href="#">In Indonesian</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-9 col-md-9 order-md-2 order-1">
                    <!-- Toolbar -->
                    <div class="row mb-5">
                        <div class="col-lg-6 col-md-8">
                            <div class="shop-toolbar__items shop-toolbar__item-left">
                                <div class="shop-toolbar__item shop-toolbar__item--result">
                                    <p class="result-count">
                                        Showing <span id="products_count_start"></span>–<span id="products_count_end"></span>
                                        of <span id="products_count_total"></span>
                                    </p>
                                </div>
                                <div class="shop-toolbar__item">
                                    <select class="filter form-select form-select-sm" name="_sort_by" onchange="getData()">
                                        <option value="title_asc">Sort by A-Z</option>
                                        <option value="title_desc">Sort by Z-A</option>
                                        <option value="latest_publication">Sort by latest</option>
                                        <option value="latest_added">Sort by time added</option>
                                        <option value="price_asc">Sort by price: low to high</option>
                                        <option value="price_desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="header-right-search">
                                <div class="header-search-box">
                                    <input class="filter search-field" name="_search" type="text"
                                           onkeypress="getDataOnEnter(event)"
                                           placeholder="Search by title or author...">
                                    <button class="search-icon"><i class="icon-magnifier"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product List -->
                    <div class="row" id="product-list"></div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-12">
                            <ul class="page-pagination text-center mt-40" id="product-list-pagination"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
</div>
@endsection

@section('addition_css')
@endsection

@section('addition_script')
    <script src="{{ asset('pages/js/plp.js') }}"></script>
@endsection
