@extends('layout.auth.master')
@section('contents')

    @include('paritials.auth.header')?>

<!-- page-wrapper Start-->
@include('paritials.auth.topmenu');
<!-- Page Header Ends -->

<!-- Page Body Start-->
<div class="page-body-wrapper">
	
	<!-- Page Sidebar Start-->
	@include('paritials.staffauth.sidemenu');
	<!-- Page Sidebar Ends-->
	
	<!-- Right sidebar Start-->
	
	<!-- Right sidebar Ends-->

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Active Order's

                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Order List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card tab2-card">

                        <div class="card-body">


                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="new-tabs" data-bs-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false" data-original-title="" title=""><span class="fw-bold">New</span> </a></li>
                                <li class="nav-item"><a class="nav-link" id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title=""><span class="text-warning fw-bold">Accepted (10)</span> </a></li>

                                <li class="nav-item"><a class="nav-link" id="dispatch-tab" data-bs-toggle="tab" href="#dispatch" role="tab" aria-controls="dispatch" aria-selected="true" data-original-title="" title=""><span class="text-primary fw-bold">Dispatch (5)</span> </a></li>
                                <li class="nav-item"><a class="nav-link" id="delivery-tab" data-bs-toggle="tab" href="#delivery" role="tab" aria-controls="delivery" aria-selected="true" data-original-title="" title=""><span class="text-success fw-bold">Delivered (4)</span></a></li>
                                <li class="nav-item"><a class="nav-link" id="usage-tab" data-bs-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false" data-original-title="" title=""><span class="text-secondary fw-bold">Return (2)</span> </a></li>
								
								<li class="nav-item"><a class="nav-link" id="cancel-tab" data-bs-toggle="tab" href="#cancel" role="tab" aria-controls="cancel" aria-selected="false" data-original-title="" title=""><span class="text-danger fw-bold">Cancel (0)</span></a></li>
								
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade active show" id="new" role="tabpanel" aria-labelledby="new-tabs">
								<div class="mt-3"> <button class="btn border border-success text-success accept" onclick="edit()">Accept</button> 
			</div>
                                    <form class="needs-validation" novalidate="">
			
                                        <div class="row">

                                            <div class="datatable-dashv1-list custom-datatable-overright" >


                                                <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" >
                                                    <thead>
                                                        <tr>
														<th data-field="dd" data-checkbox="true">
              </th>
														<th data-field="orderid" data-sortable="true">ORDER ID</th>
														<th data-field="date" data-sortable="true">ORDER DATE</th>
														<th data-field="orderqty" data-sortable="true">ORDER QTY</th>
														
														<th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                        <th data-field="image" data-sortable="true">IMAGE</th>
                                                        <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                            <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>
                                                            
															<th data-field="stock" data-sortable="true">IN STOCK</th>
                                                            
                                                            <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
															<th data-field="status" data-sortable="true">STATUS</th>
                                                            <th data-field="action" data-sortable="true">ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr>
														<td></td>
                                                            <td class="" ><span >#093877</span></td>
                                                           
															<td>jun-13-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
															<td><p class="text-center" style="border:1px solid #ffc000;color:#ffc000;border-radius:5px;">Accept</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#New" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
															
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
											<tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>jun-13-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="text-primary">COD</span></td>
															
															<td><p class="text-center" style="border:1px solid #f90000;color:#f90000;border-radius:5px;">Cancel</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
                                                    

                                                    </tbody>
                                                </table>
												
												<!-- The Modal -->
<div class="modal" id="New">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Status</h4>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class="container-fluid">
	  <div class="row">
	  <form action="#">
	  <div class="col-md-3">Change Status	</div>
	  <div class="col-md-6">
        <select class="form-select form-select-lg" name="status" required="">
						<option selected disabled>--Select--</option>
						<option value="Accept">Accept</option>
						<option value="Accept">Dispatch</option>
						<option value="Delivered">Delivered</option>
						<option value="Return">Return</option>
						<option value="Cancel">Cancel</option>
														
						</select>
						</div>
		</form>				
	</div>
	</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >SUBMIT</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
                                            </div>

                                        </div>
                                    </form>
                                </div>


                                <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
											<div class="mt-3"> <button class="btn border border-primary text-primary dispatch" >Dispatch</button> 
			</div>
                                    <form class="needs-validation" novalidate="">

                   
                                        <div class="row">

                                            <div class="datatable-dashv1-list custom-datatable-overright">


                                            <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                     <thead>
                                                        <tr>
														<th data-field="dd" data-checkbox="true">
              </th>
														<th data-field="orderid" data-sortable="true">ORDER ID</th>
														<th data-field="date" data-sortable="true">ACCEPT DATE</th>
														<th data-field="orderqty" data-sortable="true">ORDER QTY</th>
														
														<th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                        <th data-field="image" data-sortable="true">IMAGE</th>
                                                        <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                            <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>
                                                            
															<th data-field="stock" data-sortable="true">IN STOCK</th>
                                                            
                                                            <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
															<th>STATUS</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
															<td><p class="text-center" style="border:1px solid #ffc000;color:#ffc000;border-radius:5px;">Accept</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#accept" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
											<tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
															<td><p class="text-center" style="border:1px solid #ffc000;color:#ffc000;border-radius:5px;">Accept</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
                                                    

                                                    </tbody>
                                                </table>
												<!-- The Modal -->
<div class="modal" id="accept">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Status</h4>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class="container-fluid">
	  <div class="row">
	  <form action="#">
	  <div class="col-md-3">Change Status	</div>
	  <div class="col-md-6">
        <select class="form-select form-select-lg" name="status" required="">
						<option selected disabled>--Select--</option>
						<option value="Accept">Accept</option>
						<option value="Accept">Dispatch</option>
						<option value="Delivered">Delivered</option>
						<option value="Return">Return</option>
						<option value="Cancel">Cancel</option>
														
						</select>
						</div>
				</form>
	</div>
	</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >SUBMIT</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
					
                                <div class="tab-pane fade" id="dispatch" role="tabpanel" aria-labelledby="dispatch-tabs">
						<div class="mt-3"> <button class="btn border border-success text-success accept" >Delivered</button> 		</div>
                                    <form class="needs-validation" novalidate="">
                   

                                        <div class="row">
                                            <div class="row">
                                                <div class="datatable-dashv1-list custom-datatable-overright">


                                                <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                   <thead>
                                                        <tr>
														<th data-field="dd" data-checkbox="true">
              </th>
														<th data-field="orderid" data-sortable="true">ORDER ID</th>
														<th data-field="date" data-sortable="true">DISPATCH DATE</th>
														<th data-field="orderqty" data-sortable="true">ORDER QTY</th>
														
														<th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                        <th data-field="image" data-sortable="true">IMAGE</th>
                                                        <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                            <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>
                                                            
															<th data-field="stock" data-sortable="true">IN STOCK</th>
                                                            
                                                            <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
															<th>STATUS</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
															<td><p class="text-primary" style="border:1px solid blue;color:#ffc000;border-radius:5px;">Dispatch</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#Dispatch" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
											<tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
														<td><p class="text-primary" style="border:1px solid blue;color:#ffc000;border-radius:5px;">Dispatch</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
                                                    

                                                    </tbody>
                                                </table>
																<!-- The Modal -->
<div class="modal" id="Dispatch">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Status</h4>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class="container-fluid">
	  <div class="row">
	  <form action="#">
	  <div class="col-md-3">Change Status	</div>
	  <div class="col-md-6">
        <select class="form-select form-select-lg" name="status" required="">
						<option selected disabled>--Select--</option>
						<option value="Accept">Accept</option>
						<option value="Accept">Dispatch</option>
						<option value="Delivered">Delivered</option>
						<option value="Return">Return</option>
						<option value="Cancel">Cancel</option>
														
						</select>
						</div>
	</form>
	</div>
	</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >SUBMIT</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tabs">
                                    <form class="needs-validation" novalidate="">

                   
                                        <div class="row">

                                            <div class="datatable-dashv1-list custom-datatable-overright">


                                            <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                  <thead>
                                                        <tr>
														<th data-field="dd" data-checkbox="true">
              </th>
														<th data-field="orderid" data-sortable="true">ORDER ID</th>
														<th data-field="date" data-sortable="true">dELIVERY DATE</th>
														<th data-field="orderqty" data-sortable="true">ORDER QTY</th>
														
														<th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                        <th data-field="image" data-sortable="true">IMAGE</th>
                                                        <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                            <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>
                                                            
															<th data-field="stock" data-sortable="true">IN STOCK</th>
                                                            
                                                            <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
															<th>STATUS</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
														<td><p class="text-success" style="border:1px solid green;border-radius:5px;">Delivered</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#delivere" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
											<tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
															<td><p class="text-success" style="border:1px solid green;border-radius:5px;">Delivered</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
                                                    

                                                    </tbody>
                                                </table>
												<!-- The Modal -->
<div class="modal" id="delivere">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Status</h4>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class="container-fluid">
	  <div class="row">
	  <form action="#">
	  <div class="col-md-3">Change Status	</div>
	  <div class="col-md-6">
        <select class="form-select form-select-lg" name="status" required="">
						<option selected disabled>--Select--</option>
						<option value="Accept">Accept</option>
						<option value="Accept">Dispatch</option>
						<option value="Delivered">Delivered</option>
						<option value="Return">Return</option>
						<option value="Cancel">Cancel</option>
														
						</select>
						</div>
		</form>
	</div>
	</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >SUBMIT</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
                                            </div>

                                        </div>
                                    </form>
                                </div>




                                <div class="tab-pane fade" id="usage" role="tabpanel" aria-labelledby="usage-tab">
                                    <form class="needs-validation" novalidate="">
				
                   
                                        <div class="row">

                                            <div class="datatable-dashv1-list custom-datatable-overright">


                                            <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                 <thead>
                                                        <tr>
														<th data-field="dd" data-checkbox="true">
              </th>
														<th data-field="orderid" data-sortable="true">ORDER ID</th>
														<th data-field="date" data-sortable="true">RETURN DATE</th>
														<th data-field="orderqty" data-sortable="true">ORDER QTY</th>
														
														<th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                        <th data-field="image" data-sortable="true">IMAGE</th>
                                                        <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                            <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>
                                                            
															<th data-field="stock" data-sortable="true">IN STOCK</th>
                                                            
                                                            <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
															<th>STATUS</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
															<td><p class="text-center" style="border:1px solid #f90000;color:#f90000;border-radius:5px;">Return</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#return" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
											<tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">COD</span></td>
															
															<td><p class="text-center" style="border:1px solid #f90000;color:#f90000;border-radius:5px;">Return</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
                                                    

                                                    </tbody>
                                                </table>
												<!-- The Modal -->
<div class="modal" id="return">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Status</h4>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class="container-fluid">
	  <div class="row">
	  <form action="#">
	  <div class="col-md-3">Change Status	</div>
	  <div class="col-md-6">
        <select class="form-select form-select-lg" name="status" required="">
						<option selected disabled>--Select--</option>
						<option value="Accept">Accept</option>
						<option value="Accept">Dispatch</option>
						<option value="Delivered">Delivered</option>
						<option value="Return">Return</option>
						<option value="Cancel">Cancel</option>
														
						</select>
						</div>
		</form>
	</div>
	</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >SUBMIT</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
                                            </div>
                                        </div>


                                </div>
								
							<div class="tab-pane fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tabs">	
								       <form class="needs-validation" novalidate="">
				
                                        <div class="row">

                                            <div class="datatable-dashv1-list custom-datatable-overright">


                                            <table class="table fcolor" id="table" data-click-to-select="true" data-sort-name="id" data-sort-order="asc" data-mobile-responsive="true" data-toggle="table" data-show-columns="true" data-sort="true" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="true" data-resizable="true" data-cookie="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                 <thead>
                                                        <tr>
														<th data-field="dd" data-checkbox="true">
              </th>
														<th data-field="orderid" data-sortable="true">ORDER ID</th>
														<th data-field="date" data-sortable="true">CANCEL DATE</th>
														<th data-field="orderqty" data-sortable="true">ORDER QTY</th>
														
														<th data-field="Productid" data-sortable="true">PRODUCT ID</th>
                                                        <th data-field="image" data-sortable="true">IMAGE</th>
                                                        <th data-field="productname" data-sortable="true"> PRODUCT NAME</th>
                                                            <th data-field="attributes" data-sortable="true">ATTRIBUTES</th>
                                                            
															<th data-field="stock" data-sortable="true">IN STOCK</th>
                                                            
                                                            <th data-field="paymentmode" data-sortable="true">PAYMENT MODE</th>
															<th>STATUS</th>
                                                            <th>ACTION</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>13-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">UPI</span></td>
															
														<td><p class="text-center" style="border:1px solid #f90000;color:#f90000;border-radius:5px;">Cancel</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#can" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
											<tr>
														<td></td>
                                                            <td>#093877</td>
                                                           
															<td>25-Jun-2022 10.30 AM</td>
															<td>10</td>
                                                            <td>00125</td>
                                                            
                                                            
												<td>	<div class="d-flex">
                                                                    <img src="../assets/images/products/blouse.jpg" alt="" class="img-fluid img-30 me-2 blur-up lazyloaded">

                                                                </div></td>
															 <td style="width:100%;">
                                                                Readymade Blouse Velvet Material
                                                            </td>
															<td>RED-L</td>
															<td>6</td>
                                                            <td><span class="font-primary">COD</span></td>
															
															<td><p class="text-center" style="border:1px solid #f90000;color:#f90000;border-radius:5px;">Cancel</p></td>
															
                                                            <td><span> <a href="#" class="badge badge-secondary px-2" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                                                                    <a href="#" onclick="return confirm('Are you sure, you want to delete it?')" class="badge badge-warning px-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a></span></td>


                                                        </tr>
                                                    

                                                    </tbody>
                                                </table>
												<!-- The Modal -->
<div class="modal" id="can">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Status</h4>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class="container-fluid">
	  <div class="row">
	  <form action="#">
	  <div class="col-md-3">Change Status	</div>
	  <div class="col-md-6">
        <select class="form-select form-select-lg" name="status" required="">
						<option selected disabled>--Select--</option>
						<option value="Accept">Accept</option>
						<option value="Accept">Dispatch</option>
						<option value="Delivered">Delivered</option>
						<option value="Return">Return</option>
						<option value="Cancel">Cancel</option>
														
						</select>
						</div>
			</form>
	</div>
	</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >SUBMIT</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
                                            </div>
                                        </div>
								
							</div>
							
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
       
@endsection