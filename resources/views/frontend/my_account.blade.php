   @extends('app_template')
   @section('title','My Account')
   @section('content')

   <main class="main">
       <!-- Start of Page Header -->
       <div class="page-header">
           <div class="container">
               <h1 class="page-title mb-0">My Account</h1>
           </div>
       </div>
       <!-- End of Page Header -->

       <!-- Start of Breadcrumb -->
       <nav class="breadcrumb-nav">
           <div class="container">
               <ul class="breadcrumb">
                   <li><a href="demo1.html">Home</a></li>
                   <li>My account</li>
               </ul>
           </div>
       </nav>
       <!-- End of Breadcrumb -->

       <!-- Start of PageContent -->
       <div class="page-content pt-2">
           <div class="container">
               <div class="tab tab-vertical row gutter-lg">
                   <ul class="nav nav-tabs mb-6" role="tablist">
                       <li class="nav-item">
                           <a href="#account-dashboard" class="nav-link active">Dashboard</a>
                       </li>
                       <li class="nav-item">
                           <a href="#account-orders" class="nav-link">Orders</a>
                       </li>
                       <li class="nav-item">
                           <a href="#account-downloads" class="nav-link">Wallet</a>
                       </li>
                       <li class="nav-item">
                           <a href="#account-addresses" class="nav-link">Addresses</a>
                       </li>
                       <li class="nav-item">
                           <a href="#profile-details" class="nav-link">profile details</a>
                       </li>
                       <li class="nav-item">
                           <a href="#account-details" class="nav-link">Account details</a>
                       </li>
                       <li class="link-item">
                           <a href="wishlist.html" class="nav-link">Wishlist</a>
                       </li>
                       <li class="link-item">
                           <a href="{{ route('customer-logout') }}" class="nav-link">Logout</a>
                       </li>
                   </ul>

                   <div class="tab-content mb-6">
                       <div class="tab-pane active in" id="account-dashboard">
                           <p class="greeting">
                               Hello
                               <span class="text-dark font-weight-bold"><?=  $customer['customer_firstname'] ?></span>
                               (not
                               <span class="text-dark font-weight-bold"><?=  $customer['customer_firstname'] ?></span> ?
                               <a href="{{ route('customer-logout') }}" class="text-primary">Log out</a>)
                           </p>

                           <p class="mb-4">
                               From your account dashboard you can view your <a href="#account-orders"
                                   class="text-primary link-to-tab">recent orders</a>,
                               manage your <a href="#account-addresses" class="text-primary link-to-tab">shipping
                                   and billing
                                   addresses</a>, and
                               <a href="#account-details" class="text-primary link-to-tab">edit your password and
                                   account details.</a>
                           </p>

                           <div class="row">
                               <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                   <a href="#account-orders" class="link-to-tab">
                                       <div class="icon-box text-center">
                                           <span class="icon-box-icon icon-orders">
                                               <i class="w-icon-orders"></i>
                                           </span>
                                           <div class="icon-box-content">
                                               <p class="text-uppercase mb-0">Orders</p>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                               <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                   <a href="#account-downloads" class="link-to-tab">
                                       <div class="icon-box text-center">
                                           <span class="icon-box-icon icon-download">
                                               <i class="w-icon-wallet"></i>
                                           </span>
                                           <div class="icon-box-content">
                                               <p class="text-uppercase mb-0">Wallet</p>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                               <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                   <a href="#account-addresses" class="link-to-tab">
                                       <div class="icon-box text-center">
                                           <span class="icon-box-icon icon-address">
                                               <i class="w-icon-map-marker"></i>
                                           </span>
                                           <div class="icon-box-content">
                                               <p class="text-uppercase mb-0">Addresses</p>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                               <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                   <a href="#profile-details" class="link-to-tab">
                                       <div class="icon-box text-center">
                                           <span class="icon-box-icon icon-account">
                                               <i class="w-icon-user"></i>
                                           </span>
                                           <div class="icon-box-content">
                                               <p class="text-uppercase mb-0">Account Details</p>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                               <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                   <a href="#account-details" class="link-to-tab">
                                       <div class="icon-box text-center">
                                           <span class="icon-box-icon icon-account">
                                               <i class="w-icon-user"></i>
                                           </span>
                                           <div class="icon-box-content">
                                               <p class="text-uppercase mb-0">Account Details</p>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                               <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                   <a href="wishlist.html" class="link-to-tab">
                                       <div class="icon-box text-center">
                                           <span class="icon-box-icon icon-wishlist">
                                               <i class="w-icon-heart"></i>
                                           </span>
                                           <div class="icon-box-content">
                                               <p class="text-uppercase mb-0">Wishlist</p>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                               <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                   <a href="{{ route('customer-logout') }}">
                                       <div class="icon-box text-center">
                                           <span class="icon-box-icon icon-logout">
                                               <i class="w-icon-logout"></i>
                                           </span>
                                           <div class="icon-box-content">
                                               <p class="text-uppercase mb-0">Logout</p>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                           </div>
                       </div>

                       <div class="tab-pane mb-4" id="account-orders">
                           <div class="icon-box icon-box-side icon-box-light">
                               <span class="icon-box-icon icon-orders">
                                   <i class="w-icon-orders"></i>
                               </span>
                               <div class="icon-box-content">
                                   <h4 class="icon-box-title text-capitalize ls-normal mb-0">Orders</h4>
                               </div>
                           </div>

                           <table class="shop-table account-orders-table mb-6">
                               <thead>
                                   <tr>
                                       <th class="order-id">Order</th>
                                       <th class="order-date">Date</th>
                                       <th class="order-status">Status</th>
                                       <th class="order-total">Total</th>
                                       <th class="order-actions">Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td class="order-id">#2321</td>
                                       <td class="order-date">August 20, 2021</td>
                                       <td class="order-status">Processing</td>
                                       <td class="order-total">
                                           <span class="order-price">$121.00</span> for
                                           <span class="order-quantity"> 1</span> item
                                       </td>
                                       <td class="order-action">
                                           <a href="#"
                                               class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="order-id">#2321</td>
                                       <td class="order-date">August 20, 2021</td>
                                       <td class="order-status">Processing</td>
                                       <td class="order-total">
                                           <span class="order-price">$150.00</span> for
                                           <span class="order-quantity"> 1</span> item
                                       </td>
                                       <td class="order-action">
                                           <a href="#"
                                               class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="order-id">#2319</td>
                                       <td class="order-date">August 20, 2021</td>
                                       <td class="order-status">Processing</td>
                                       <td class="order-total">
                                           <span class="order-price">$201.00</span> for
                                           <span class="order-quantity"> 1</span> item
                                       </td>
                                       <td class="order-action">
                                           <a href="#"
                                               class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td class="order-id">#2318</td>
                                       <td class="order-date">August 20, 2021</td>
                                       <td class="order-status">Processing</td>
                                       <td class="order-total">
                                           <span class="order-price">$321.00</span> for
                                           <span class="order-quantity"> 1</span> item
                                       </td>
                                       <td class="order-action">
                                           <a href="#"
                                               class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                                       </td>
                                   </tr>
                               </tbody>
                           </table>

                           <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Go
                               Shop<i class="w-icon-long-arrow-right"></i></a>
                       </div>

                       <div class="tab-pane" id="account-downloads">
                           <div class="icon-box icon-box-side icon-box-light">
                               <span class="icon-box-icon icon-downloads mr-2">
                                   <i class="w-icon-download"></i>
                               </span>
                               <div class="icon-box-content">
                                   <h4 class="icon-box-title ls-normal">Downloads</h4>
                               </div>
                           </div>
                           <p class="mb-4">No downloads available yet.</p>
                           <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Go
                               Shop<i class="w-icon-long-arrow-right"></i></a>
                       </div>

                       <div class="tab-pane" id="account-addresses">
                           <div class="icon-box icon-box-side icon-box-light">
                               <span class="icon-box-icon icon-map-marker">
                                   <i class="w-icon-map-marker"></i>
                               </span>
                               <div class="icon-box-content">
                                   <h4 class="icon-box-title mb-0 ls-normal">Addresses</h4>
                               </div>
                           </div>
                           <p>The following addresses will be used on the checkout page
                               by default.</p>
                           <div class="row">
                               <div class="col-sm-6 mb-6">
                                   <div class="ecommerce-address billing-address pr-lg-8">
                                       <h4 class="title title-underline ls-25 font-weight-bold">Billing Address</h4>
                                       <address class="mb-4">
                                           <table class="address-table">
                                               <tbody>
                                                   <tr>
                                                       <th>Name:</th>
                                                       <td>John Doe</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Company:</th>
                                                       <td>Conia</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Address:</th>
                                                       <td>Wall Street</td>
                                                   </tr>
                                                   <tr>
                                                       <th>City:</th>
                                                       <td>California</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Country:</th>
                                                       <td>United States (US)</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Postcode:</th>
                                                       <td>92020</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Phone:</th>
                                                       <td>1112223334</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </address>
                                       <a href="#"
                                           class="btn btn-link btn-underline btn-icon-right text-primary">Edit
                                           your billing address<i class="w-icon-long-arrow-right"></i></a>
                                   </div>
                               </div>
                               <div class="col-sm-6 mb-6">
                                   <div class="ecommerce-address shipping-address pr-lg-8">
                                       <h4 class="title title-underline ls-25 font-weight-bold">Shipping Address</h4>
                                       <address class="mb-4">
                                           <table class="address-table">
                                               <tbody>
                                                   <tr>
                                                       <th>Name:</th>
                                                       <td>John Doe</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Company:</th>
                                                       <td>Conia</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Address:</th>
                                                       <td>Wall Street</td>
                                                   </tr>
                                                   <tr>
                                                       <th>City:</th>
                                                       <td>California</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Country:</th>
                                                       <td>United States (US)</td>
                                                   </tr>
                                                   <tr>
                                                       <th>Postcode:</th>
                                                       <td>92020</td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </address>
                                       <a href="#"
                                           class="btn btn-link btn-underline btn-icon-right text-primary">Edit your
                                           shipping address<i class="w-icon-long-arrow-right"></i></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="tab-pane" id="profile-details">
                           <div class="icon-box icon-box-side icon-box-light">
                               <span class="icon-box-icon icon-account mr-2">
                                   <i class="w-icon-user"></i>
                               </span>
                               <div class="icon-box-content">
                                   <h4 class="icon-box-title mb-0 ls-normal">Account Details</h4>
                               </div>
                           </div>

                           <form action="{{url('/updateaddress')}}" name="frm-login" method="post" autocomplete="Off" class="checkout-form" onsubmit="return confirm('Do you  want to Change Billing Address?');">
                               {{ csrf_field() }}
                               <div class="row">
                                   <div class="col-xs-6">
                                       <label>First Name *</label>
                                       <input type="text" class="form-control" name="customer_firstname" onkeyup="this.value = this.value.toUpperCase(); " required="" value="{{@$customer->customer_firstname}}" />
                                   </div>
                                   <div class="col-xs-6">
                                       <label>Last Name *</label>
                                       <input type="text" class="form-control" name="customer_lastname" onkeyup="this.value = this.value.toUpperCase(); " required="" value="{{@$customer->customer_lastname}}" />
                                   </div>
                               </div>
                               <label>Company Name (Optional)</label>
                               <input type="text" class="form-control" name="customer_company_name" onkeyup="this.value = this.value.toUpperCase(); " value="{{@$customer->customer_company_name}}" />

                               <label>Street Address *</label>
                               <input type="text" class="form-control" name="customer_address" required="" placeholder="House number and street name" value="{{@$customer->customer_address}}" />
                               <input type="text" class="form-control" name="customer_address1" required="" placeholder="Area" value="{{@$customer->customer_address1}}" />

                               <div class="row">
                                   <div class="col-xs-6">
                                       <label>ZIP / POSTAL CODE*</label>
                                       <input type="text" class="form-control" id="pincode" name="customer_pincode" required="" value="{{@$customer->customer_pincode}}" />
                                   </div>
                                   <div class="col-xs-6">
                                       <label>Phone *</label>
                                       <input type="text" class="form-control" name="customer_mobileno" id="order_mobile" required="" onblur="verify_mobile(this.value)" value="{{@$customer->customer_mobileno}}" />
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-xs-6">
                                       <label>Town / City *</label>
                                       <input type="text" class="form-control" id="city" name="customer_city" required="" value="{{@$customer->customer_city}}" />
                                   </div>
                                   <div class="col-xs-6">
                                       <label>State *</label>
                                       <input type="text" class="form-control" id="state" name="customer_state" required="" value="{{@$customer->customer_state}}" />
                                   </div>
                               </div>
                               <label>Email Address *</label>
                               <input type="email" class="form-control" name="customer_email" required="" value="{{@$customer->customer_email}}" />

                               <br>
                               <div class="login-on-checkout">
                                   <p class="form-row">
                                       <button type="submit" name="btn-sbmt" class="btn">SAVE CHANGES</button>
                                   </p>
                           </form>
                       </div>

                      
                   </div>

                       <div class="tab-pane" id="account-details">                           
                           <p>The following addresses will be used on the checkout page
                               by default.</p>
                           <div class="row">
                               <form action="{{url('/changepassword')}}" method="post" name="frm-login" autocomplete="Off" class="checkout-form" onsubmit="return confirm('Do you  want to Change Password?');">
                               {{ csrf_field() }}
                               <fieldset style="padding:20px;">
                                   <legend>Password Change</legend>
                                   <label>Current password </label>
                                   <input type="password" class="form-control" id="customer_opassword" onblur="opass_verify(this.value)" name="current_password" required value="">

                                   <label>New password (leave blank to leave unchanged)</label>
                                   <input type="password" class="form-control" onblur="pass_verify(this.value)" id="customer_password" name="new_password" required>

                                   <label>Confirm new password</label>
                                   <input type="password" onblur="cpass_verify(this.value)" class="form-control" id="customer_cpassword" name="confirm_password" required>
                               </fieldset>
                               <br>
                               <div class="login-on-checkout">
                                   <p class="form-row">
                                       <button type="submit" name="btn btn-dark btn-rounded " class="btn">SAVE CHANGES</button>
                                   </p>
                               </div>
                           </form>
                           </div>
                       </div>
                       
                   </div>
               </div>
           </div>
       </div>
       <!-- End of PageContent -->
   </main>
   <!-- End of Main -->
   @endsection