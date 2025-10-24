 @extends('app_template')
 @section('title','Vendor Store Grid')
 @section('content')
 <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb mb-6">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="#">Vendor</a></li>
                        {{-- <li><a href="#">Dokan</a></li>
                        <li>Store Grid</li> --}}
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Pgae Contetn -->
            <div class="page-content mb-8">
                <div class="container">
                    <!-- Start of Vendor Toolbox -->
                    <div class="toolbox vendor-toolbox pb-0">
                    
                        <div class="toolbox-left mb-4 mb-md-0">
                            {{-- <a href="#" class="btn btn-primary btn-outline btn-rounded btn-icon-left "><i class="w-icon-category"></i>VENDORS</a> --}}
                            {{-- <label class="d-block">Total Store Showing 6</label> --}}
                            <label class="d-block">VENDORS</label>
                        </div>
                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-sort select-box mb-0">
                                <label class="font-weight-normal">Sort by:</label>
                                <select name="orderby" class="form-control">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="recent">Most Recent</option>
                                    <option value="popular">Most Popular</option>
                                </select>
                            </div>
                            <div class="toolbox-item toolbox-layout mb-0 d-flex">
                                <a href="vendor-dokan-store-grid.html" class="icon-mode-grid btn-layout active">
                                    <i class="w-icon-grid"></i>
                                </a>
                                <a href="vendor-dokan-store-list.html" class="icon-mode-list btn-layout">
                                    <i class="w-icon-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Vendor Toolbox -->
                    <div class="vendor-search-wrapper">
                        <form class="vendor-search-form">
                            <input type="email" class="form-control mr-4 bg-white" name="vendor" id="vendor"
                                placeholder="Search Vendors" />
                            <button class="btn btn-primary btn-rounded" type="submit">Apply</button>
                        </form>
                        <!-- End of Vendor Search Form -->
                    </div>
                    <div class="row cols-lg-3 cols-md-2 cols-sm-2 cols-1 mt-4">

                @foreach($vendorcreate as $vendorcreate )

                        <div class="store-wrap mb-4">
                            <div class="store store-grid">
                                <div class="store-header">
                                    <figure class="store-banner">
                                        <img 
                                            src="{{ asset('assets/images/vendor/profile/' . $vendorcreate->profile_image) }}"
                                            alt="Vendor"
                                            style="background-color: #40475E;" />
                                    </figure>

                                </div>
                                <!-- End of Store Header -->
                                <div class="store-content">
                                    <h4 class="store-title">
                                        <a href=" {{ url('/vendorDetails/'.$vendorcreate->id) }}">{{ $vendorcreate->shop_name }}</a>
                                        {{-- <label class="featured-label">Featured</label> --}}
                                    </h4>
                                    {{-- <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                    </div> --}}
                                    <div class="store-address">
                                        {{ $vendorcreate->address }} , <br>
                                        {{ $vendorcreate->address }} , <br>
                                        {{ $vendorcreate->city }}  - {{ $vendorcreate->pincode }} ,  <br>
                                        {{ $vendorcreate->state }} . <br>

                                    </div>
                                    <ul class="seller-info-list list-style-none">
                                        <li class="store-phone">
                                            <a href="tel:{{ $vendorcreate->mobile_number1 }} "><i class="w-icon-phone"></i>{{ $vendorcreate->mobile_number1 }} </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Store Content -->
                                <div class="store-footer">
                                    <figure class="seller-brand">
                                        <img src="{{ asset('assets/images/vendor/profile/' . $vendorcreate->profile_image) }}" alt="Brand" width="80" height="80" />
                                    </figure>
                                    <a href=" {{ url('/vendorDetails/'.$vendorcreate->id) }}" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                        Visit Store<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <!-- End of Store Footer -->
                            </div>
                            <!-- End of Store -->
                        </div>
                @endforeach
                    
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
@endsection