@extends('layout.auth.master')
@section('contents')
    @include('paritials.css.product.add-product-css')
    @include('paritials.js.product.add-product-js')

    @include('paritials.auth.header')

    <!-- page-wrapper Start-->
    @include('paritials.auth.topmenu');
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        @include('paritials.vendorauth.sidemenu');
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->

        <!-- Right sidebar Ends-->

        <style>
                input[type="file"] {
                    display: block;
                }
                .imageThumb {
                    max-height: 75px;
                    border: 2px solid;
                    padding: 1px;
                    cursor: pointer;
                }
                .pip {
                    display: inline-block;
                    margin: 10px 10px 0 0;
                }
                .remove {
                    display: block;
                    background: #444;   
                    border: 1px solid black;
                    color: white;
                    text-align: center;
                    cursor: pointer;
                }
                .remove:hover {
                    background: white;
                    color: black;
                }
        </style>
        <div class="page-body text-secondary fcolor">
            <form action="{{ route('vendorproductsstore', $vendorid) }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Container-fluid starts-->
                <div class="container-fluid">   
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Add Product

                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i
                                                data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid fcolor">
                    <div class="row product-adding">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h5 class="fw-bold"> Primary / Main Category</h5>
                                                            <div class="form-group">
                                                                <select class="js-select2 form-control" id="main_category"
                                                                    name="category_main" required>
                                                                    <option selected hidden value="">-- Select --
                                                                    </option>
                                                                    @foreach ($category_main_data as $category_main)
                                                                        <option id="{{ $category_main->id }}"
                                                                            value="{{ $category_main->id}}">
                                                                            {{ $category_main->category_main_name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h5 class="fw-bold">Category</h5>
                                                            <div id="clothing">
                                                                <select class="js-select2 form-control" name="category"
                                                                    id="category" disabled required>
                                                                    <option value="">Select Main
                                                                        Category</option>

                                                                        
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h5 class="fw-bold">Sub Category</h5>
                                                            <div id="clothing">
                                                                <select class="js-select2 form-control" name="category_sub"
                                                                    id="sub_category" disabled required>
                                                                    <option selected hidden value="">Select
                                                                        Category
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 digital-add needs-validation">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group mt-2">
                                                            <label for=""
                                                                class="col-form-label pt-0 fw-bold"><span>*</span> Product
                                                                Name</label>
                                                            <input class="form-control" id="validationCustom01"
                                                                type="text" name="product_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="col-form-label col-md-3 fw-bold"><span
                                                                class="text-danger">*</span>Tax</label>
                                                        <select class="custom-select form-control text-secondary"
                                                            id="gs" onchange="r()" name="tax_id" required>
                                                            <option value="1">Included</option>
                                                            <option value="0">Excluded</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <label class="col-form-label col-md-3 fw-bold "><span
                                                                class="text-danger">*</span>GST</label>
                                                        <select class="custom-select form-control dropdown text-secondary"
                                                            id="gst1" onchange="r()" required name="gst_id">
                                                            <option value="" selected hidden value="">--Select
                                                                Gst %--</option>
                                                            @foreach ($gst as $gs)
                                                                <option value="{{ $gs->value }}">{{ $gs->gst_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @include('layout.vendor.products.productDetails')
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product Images</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <h6>Upload Main Image</h6>
                                                                <input class="form-control" type="file" id="mainImg"
                                                                    name="mainImage" />

                                                            </div>
                                                            <div class="row" id="ming_preview">
                                                            </div>
                                                            {{-- <div class="col-md-10">
                                                                <h6>Upload Gallery Images</h6>
                                                                <input class="form-control" type="file" id="galleryImg"
                                                                    name="galleryImages[]" multiple />
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Product Description</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="digital-add needs-validation">
                                                            <div class="form-group mb-0">
                                                                <div class="description-sm">
                                                                    <textarea id="description" cols="10" required rows="4" name="description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card p-3">
                                            <div class="card-body ">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <h4 class="text-start fw-bold ">Shipping</h4>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="next-input--stylized">
                                                                        <input type="number" class="form-control"
                                                                            name="weight" placeholder="Weight (g)">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group mb-3">
                                                                        <div class="next-input--stylized">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Length (cm)" name="length"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group mb-3">
                                                                        <div class="next-input--stylized">
                                                                            <input type="number" class="form-control"
                                                                                name="width" placeholder="Width (cm)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 ">
                                                                    <div class="form-group mb-3">
                                                                        <div class="next-input--stylized">

                                                                            <input type="number" class="form-control"
                                                                                name="height" placeholder="Height (cm)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card p-3">
                                                <div class="card-body">
                                                    <div class="conatiner">
                                                        <div class="row mt-3">
                                                            <div class="col-md-12 ">
                                                                <h4 class="fw-bold">Specification</h4>
                                                            </div>
                                                            <div class="col-md-2 text-start">
                                                                <span class="text-dark fw-bold"
                                                                    id="specify_length"></span>
                                                            </div>

                                                        </div>
                                                        <table class="table table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <td>Specification</td>
                                                                    <td> Value</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="spectable">

                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="card p-3">
                                                <div class="card-body">
                                                    <div class="conatiner">
                                                        <div class="row mt-3">
                                                            <div class="col-md-12 ">
                                                                <h4 class="fw-bold">Offers & Collection</h4>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-1">
                                                                <label class="text-center  fw-bold mt-2">Offers</label>
                                                            </div>
                                                            <div class="col-md-3">

                                                                <select class="form-select form-select-lg text-secondary"
                                                                    id="offtype" name="offers">
                                                                    <option selected hidden value="">Select Here
                                                                    </option>

                                                                    @foreach ($offers as $offer)
                                                                    <option value="{{ $offer->id }}">
                                                                        {{ $offer->type }}
                                                                    </option>
                                                                     @endforeach
                                                                    {{-- <option value="Buy 3 Get 1 Free">Buy 3 Get 1 Free
                                                                    </option>
                                                                    <option value="Buy 1 Get 1 Free">Buy 1 Get 1 Free
                                                                    </option>
                                                                    <option value="Buy 3 @ 999">Buy 3 @ 999</option>
                                                                    <option value="None">None</option> --}}
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <label class="text-center  fw-bold mt-2">Collection</label>
                                                            </div>
                                                            <div class="col-md-4 ">
                                                                <select class="form-select form-select-lg text-secondary"
                                                                    id="collection" name="collection">
                                                                    <option selected hidden value="">Select
                                                                        Collection
                                                                    </option>
                                                                    @foreach ($productcollection as $productcollection)
                                                                        <option id="{{ $productcollection->id }}"
                                                                            value="{{ $productcollection->name }}">
                                                                            {{ $productcollection->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 d-flex  justify-content-end">
                                            <div class="form-group mt-5 d-inline">
                                                &nbsp;
                                            </div>
                                            <div class="d-inline  text-white">
                                                <button class="btn btn-primary w-100"
                                                    onclick="return confirm('Are you sure, you want to Save it?')"
                                                    type="submit">
                                                    Save
                                                </button>
                                            </div>
                                            <div class="d-inline px-2 text-white">
                                                <a href="#" class="btn btn-secondary w-100 " type="button">
                                                    Close
                                                </a>
                                            </div>
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


    <script type="text/javascript">
        // AJAX REQUEST
        function getAjaxValue(url, method, callback) {
            $.ajax({
                url: url,
                type: method,
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: "json",
                success: callback
            });
        }


        // Get Category
        $('#main_category').on('change', function() {

            let main_category_id = $(this).find(":selected").attr("id");
            let url = '{{ route('getCategory') }}?main_category_id=' + main_category_id;
            let method = 'GET';
            getAjaxValue(url, method, function(data) {
                $('#category').empty();
                $('#category').append(
                    `<option value=""selected hidden>Select Category</option>`
                );
                $.each(data, function(key, category) {
                    $('#category').append(
                        `<option id="${category.id}" value="${category.id}">${category.category_name}</option>`
                    );
                });

                $('#category').removeAttr('disabled');
            })
        });

        //  Get Sub Categoy
        $('#category').on('change', function() {
            let category_id = $(this).find(":selected").attr("id");
            let url = '{{ route('getSubCategory') }}?category_id=' + category_id;
            let method = 'GET';
            getAjaxValue(url, method, function(data) {
                $('#sub_category').empty();
                $('#sub_category').append(
                    `<option value=""selected hidden>Select Sub Category</option>`
                );
                $.each(data, function(key, subCategory) {
                    $('#sub_category').append(
                        `<option id="${subCategory.id}"  value="${subCategory.id}">${subCategory.category_sub_name}</option>`
                    );
                });

                $('#sub_category').removeAttr('disabled');
            })
        });

        // Get Specification
        // $('.specification').on('change', function() {
        //     let specification_id = $(this).find(":selected").attr("id");
        //     let url = '{{ route('getSpecValue') }}?specification_id=' + specification_id;
        //     let method = 'GET';
        //     getAjaxValue(url, method, function(data) {
        //         let specData = JSON.parse(data[0]);
        //         $('#specify_value').empty();

        //         $('#specify_value').append(
        //             `<option value=""selected hidden>Select Value</option>`
        //         );
        //         $.each(specData, function(key, spec) {
        //             $('#specify_value').append(
        //                 `<option value="${spec}">${spec}</option>`
        //             );
        //         });

        //         $('#specify_value').removeAttr('disabled');
        //     })
        // })


        // Get Attr
    //     $('#sub_category').on('change', function() {
    //         let sub_category_id = $(this).find(":selected").attr("id");
    //         let url = '{{ route('getAttributes') }}?sub_category_id=' + sub_category_id;
    //         let method = 'GET';
    //         getAjaxValue(url, method, function(data) {
    //             //alert(JSON.stringify(data))
    //             let attribute;
    //             $.each(data, function(key, attr) {

    //                 // alert(key);
    //                 // alert(attr.attribute_name);
    //                 if(attr.attribute_name == 'color'){
    //                 const myarr = JSON.parse(attr.value);
                    
    //                 alert(myarr.length);
    //             //     var elm = document.getElementsByClassName('attrcolor');
    //             //    // alert(elm);
    //             //          df = document.createDocumentFragment();
    //                 for(var i=0; i<myarr.length;i++)
    //                 {
    //                     //  alert(myarr[i]);
    //                     // var option = document.createElement('option');
    //                     //     option.value = myarr[i];
    //                     //     option.appendChild(document.createTextNode('color'+myarr[i]));
    //                     //     df.appendChild(option);



    //                     // var elm =   document.write();
                            
    //                     $(".attrcolor").append("<select><option value= "+myarr[i]+">"+myarr[i]+"</option></select>");
    //                 }
    //                 //elm.appendChild(df);
    //                // $(".attrcolor").append(elm);
    //             }
                
    //                 else if(attr.attribute_name == 'size'){
    //                 const myarr = JSON.parse(attr.value);
                    
    //                 alert(myarr.length);
    //                 for(var i=0; i<myarr.length;i++)
    //                 {
    //                    // alert(myarr[i]);
    //                     // document.write("<option>"+myarr[i]+"</option>");
    //                     $(".attrsize").append("<select><option value= "+myarr[i]+">"+myarr[i]+"</option></select>");
    //                 }
    //               }
                
    //             });

    //             $(".attrcolor").append(elm);
    //     });
    // });
           
        
        $('#sub_category').on('change', function() {
            let sub_category_id = $(this).find(":selected").attr("id");
            //  alert(sub_category_id);
            let url1 = '{{ route('getvendorSpecifications') }}?sub_category_id=' + sub_category_id;
            //  alert(url1);
            let method1 = 'GET';
            getAjaxValue(url1, method1, function(data) {
                $('.spectable').empty();

                let specifications;
                


                $.each(data, function(key, spec) {
                
                
                    // alert(JSON.stringify(spec));

                    let options;
                    specifications +=
                        `<tr><td>${spec.name}</td><td>
                            <select class='form-select form-select-lg text-secondary' name='specify_value[]'>
                            <option selected value='' hidden> --Select ${spec.name}--</option>
                            ${(function fun(array) {
                                for (let index = 0; index < array.length; index++) {
                                    options += `<option value='${array[index]}'> ${array[index]}</option>`;
                                }
                                return options;
                            })(JSON.parse(spec.value))}
                        </select>
                        <input type="hidden" name="specify_attribute[]" value="${spec.name}">
                        </td></tr>`;
                });
                
                //alert(specifications);
                // console.log(specifications);
                $(".spectable").append(specifications);
            });
        });

        $("#galleryImg").on("change", function(e) {
            console.log(e);
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<span class=\"pip\">" +
                        "<img class=\"imageThumb\" src=\"" + e.target.result +
                        "\" title=\"" + file.name + "\"/>" +
                        "<br/><span class=\"remove\">Remove image</span>" +
                        "</span>").insertAfter("#galleryImg");
                    $(".remove").click(function() {
                        $(this).parent(".pip").remove();
                    });

                });
                fileReader.readAsDataURL(f);
            }
        });

        //main image

        $("#mainImg").on("change", function(e) {
            //console.log(e);
            
            var files = e.target.files,
                filesLength = files.length;
            
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    var file = e.target;
                  
                    $("<div class='col-md-2'><span class=\"pip\">" +
                        "<img class=\"imageThumb\" src=\"" + e.target.result +
                        "\" title=\"" + file.name + "\"/>" +
                        "<br/><span class=\"remove\">Remove image</span>" +
                        "</span></div>").insertAfter("#ming_preview");
                    $(".remove").click(function() {
                        $(this).parent(".pip").remove();
                    });

                });
                fileReader.readAsDataURL(f);
            }
        });


        //add more product
    
    $(document).ready(function() {
        
        var max_fields = 100000; //maximum input boxes allowed
    
        var wrapper = $(".input_fields_wrap"); //Fields wrapper 
       
        var add_button1 = $("#add_m"); //Add button ID
    
        var x = 1; //initlal text box count
       
    
        $(add_button1).click(function(e) { //on add input button click
           // alert(x);
            e.preventDefault();
          
           
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
               
            $(wrapper).append('<div class="w "><div class="row mt-2"><div class="col-md-3"> <div class="form-group"><label class="text-secondary fw-bold">Upload main image</label><input class="form-control " type="file" id="im'+x+'" onchange="previewImg(this)"  name="nproducts[]" accept="image/*"> </div></div><div class="col-md-9"> <div class="row"><div class="col-md-2"><select class="form-select form-select-lg text-secondary attrsize" name ="attrsize[]" id ="attrsize'+x+'"></select></div><div class="col-md-2"><select class="form-select form-select-lg text-secondary attrcolor" name="attrcolor[]" id ="attrcolor'+x+'"></select></div><div class="col-md-2"> <input type="text" name="retail_price[]" placeholder="Retail Price" class="form-control" required></div><div class="col-md-2"><input type="text" name="selling_price[]" placeholder="Selling Price" class="form-control" required></div><div class="col-md-2"><input type="number" class="form-control" placeholder="Qty" name="quantity[]" required></div> </div><div class="row mt-3"><div class="col-md-2"><input type="text" name="sku[]" placeholder="SKU"  class="form-control" required  ></div><div class="col-md-2"><select class="form-select form-select-lg text-secondary"  name="return_replace[]" required><option selected value="" hidden>Return /Replacement</option><option value="1">Return</option><option value="2">Replacement</option></select></div><div class="col-md-2"><input type="text" name="r_days[]" placeholder="Days"  class="form-control" required></div>  <div class="col-md-2"><input type="number" name="low_stock_limit[]"  placeholder="Low Stock Limit" class="form-control" required></div>  <div class="col-md-1 "> <a href="#" class="remove_field h6 btn btn-sm bg-warning m-0" style="text-decoration: none;background-color:red;">remove</a></div>  <div class="col-md-3"><span class="text-danger fw-bold" id="bill_month'+x+'_err"></span></div></div><br></div><div class="row "" ><div class="col-md-12 " id="r'+x+'"></div> </div>'
                     ); //add input box
               
            }

            $('#attrsize').find('option').each(function() {
                      //   alert($(this).val());
                        $("#attrsize"+x).append("<option value= "+$(this).val()+">"+$(this).val()+"</option>");
                        
                       
            });

            $('#attrcolor').find('option').each(function() {
                         //alert($(this).val());
                         $("#attrcolor"+x).append("<option value= "+$(this).val()+">"+$(this).val()+"</option>");
                         
            });


        });
       
            // $( ".w" ).load(window.location.href + ".w" );
       
    
      $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).closest('.w').remove();;
            x--;
         
    
        })
      
    
    });
        
 // add more image preview 
function previewImg(a)
    {
       let id=a.id;
      // alert(id);
       const myArray = id.split("im");
    let myid=   myArray[1];
//alert(myid);
       var files = document.getElementById(id).files;
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<div class='col-md-2'><div class=\"img-thumb-wrapper card shadow\">" +
                        "<img class=\"img-thumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                        "<br/><span class=\"remove\">Remove</span>" +
                        "</div></div>").insertAfter("#r"+myid);
                    $(".remove").click(function(){
                        $(this).parent(".img-thumb-wrapper").remove();
                    });
                    
                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
            
           

    }

    //image preciew
    // $("#im1").on("change", function(e) {
    //         //console.log(e);
            
    //         var files = e.target.files,
    //             filesLength = files.length;
            
    //         for (var i = 0; i < filesLength; i++) {
    //             var f = files[i]
    //             var fileReader = new FileReader();
    //             fileReader.onload = (function(e) {
    //                 var file = e.target;
                  
    //                 $("<span class=\"pip\">" +
    //                     "<img class=\"imageThumb\" src=\"" + e.target.result +
    //                     "\" title=\"" + file.name + "\"/>" +
    //                     "<span class=\"remove\">Remove image</span>" +
    //                     "</span>").insertAfter("#im1");
    //                 $(".remove").click(function() {
    //                     $(this).parent(".pip").remove();
    //                 });

    //             });
    //             fileReader.readAsDataURL(f);
    //         }
    //     });

        // function preview_image() 
        // {
        // var total_file=document.getElementById("upload_file").files.length;
        // for(var i=0;i<total_file;i++)
        // {
        // $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
        // }
        // }





        // Get Attr
    //        $('#sub_category').on('change', function() {
    //         let sub_category_id = $(this).find(":selected").attr("id");
    //         let url = '{{ route('getAttributes') }}?sub_category_id=' + sub_category_id;
    //         let method = 'GET';
    //         getAjaxValue(url, method, function(data) {


    //             console.log(data);
                

    //             $('.attrcolor').empty();

    //             let attribute;

    //             $.each(data, function(key, attr) {
    //                 // alert(JSON.stringify(spec));
    //                 // alert(attr.attribute_name)

    //                 let options;
    //                 attribute += ` <div class="col-md-2">${attr.attribute_name}</div>
    //                             <div class="col-md-2">
    //                         <select class='form-select form-select-lg text-secondary' name='atttibute_value[]'>
    //                         <option selected value='' hidden> --Select ${attr.attribute_name}--</option>
    //                         ${(function fun(array) {
    //                             for (let index = 0; index < array.length; index++) {
    //                                 options += `<option value='${array[index]}'> ${array[index]}</option>`;
    //                             }
    //                             return options;
    //                         })(JSON.parse(attr.value))}
    //                     </select>
    //                     <input type="hidden" name="specify_attri[]" value="${attr.attribute_name}">
    //                     </div>`;


    //         });
    //         //  alert(attribute);
    //         $(".attrcolor").append(attribute);
    //     });
    // });



     $('#sub_category').on('change', function() {
            let sub_category_id = $(this).find(":selected").attr("id");
            let url = '{{ route('getvendorAttributes') }}?sub_category_id=' + sub_category_id;
            let method = 'GET';
            getAjaxValue(url, method, function(data) {
                //alert(JSON.stringify(data))
                let attribute;
                $.each(data, function(key, attr) {
                    // $('#attrcolor').empty();
                    // $('#attrsize').empty();
                   
                    if(attr.attribute_name == 'color'){
                    const myarr = JSON.parse(attr.value);
                    for(var i=0; i<myarr.length;i++)
                    {
                       $(".attrcolor").append("<option value= "+myarr[i]+">"+myarr[i]+"</option>");
                    }
                   }
                   else if(attr.attribute_name == 'size'){
                    const myarr = JSON.parse(attr.value);
                    for(var i=0; i<myarr.length; i++)
                    {
                       $(".attrsize").append("<option value= "+myarr[i]+">"+myarr[i]+"</option>");
                    }
                  }
                
                });

              //  $(".attrcolor").append(elm);
        });
    });

        // Add more attributes

       
   




    //end
          
    //          $('#add_m').on('click', function() {
    //         let sub_category_id = $(this).find(":selected").attr("id");
    //         let url = '{{ route('getAttributes') }}?sub_category_id=' + sub_category_id;
    //         let method = 'GET';
    //         getAjaxValue(url, method, function(data) {


    //             console.log(data);
                
              
    //            // $('.attrcolor').empty();

    //             let attribute;

    //             $.each(data, function(key, attr) {
    //                 // alert(JSON.stringify(spec));
    //                 // alert(attr.attribute_name)

    //                 let options;
    //                 attribute += ` <div class="col-md-2">${attr.attribute_name}</div>
    //                             <div class="col-md-2">
    //                         <select class='form-select form-select-lg text-secondary' name='atttibute_value[]'>
    //                         <option selected value='' hidden> --Select ${attr.attribute_name}--</option>
    //                         ${(function fun(array) {
    //                             for (let index = 0; index < array.length; index++) {
    //                                 options += `<option value='${array[index]}'> ${array[index]}</option>`;
    //                             }
    //                             return options;
    //                         })(JSON.parse(attr.value))}
    //                     </select>
    //                     <input type="hidden" name="specify_attri[]" value="${attr.attribute_name}">
    //                     </div>`;


    //         });
    //         alert(attribute);
    //        $("#low_stock_limit").append(attribute);
    //     });
    // });

    // $('#add_m').on('click', function() {
    // // $('#sub_category').on('change', function() {
    //         let sub_category_id = $(this).find(":selected").attr("id");
    //         let url = '{{ route('getAttributes') }}?sub_category_id=' + sub_category_id;
    //         let method = 'GET';
    //         getAjaxValue(url, method, function(data) {
    //             //alert(JSON.stringify(data))
    //             let attribute;
    //             $.each(data, function(key, attr) {
    //                 // $('#attrcolor').empty();
    //                 // $('#attrsize').empty();
                   
    //                 if(attr.attribute_name == 'color'){
    //                 const myarr = JSON.parse(attr.value);
    //                 for(var i=0; i<myarr.length;i++)
    //                 {
    //                    $("#attrcolor").append("<option value= "+myarr[i]+">"+myarr[i]+"</option>");
    //                 }
    //                }
    //                else if(attr.attribute_name == 'size'){
    //                 const myarr = JSON.parse(attr.value);
    //                 for(var i=0; i<myarr.length; i++)
    //                 {
    //                    $("#attrsize").append("<option value= "+myarr[i]+">"+myarr[i]+"</option>");
    //                 }
    //               }
                
    //             });

    //           //  $(".attrcolor").append(elm);
    //     });
    // });
    </script>

    
@endsection
