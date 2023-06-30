@extends('layouts.base_panel')
@section('content')
    <!-- start page content wrapper-->
      <!-- start page title -->
	  <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Customers</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Customers</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Product Name <span class="text-danger">*</span></label>
                                            <input type="text" id="product-name" class="form-control" placeholder="e.g : Apple iMac">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-reference" class="form-label">Reference <span class="text-danger">*</span></label>
                                            <input type="text" id="product-reference" class="form-control" placeholder="e.g : Apple iMac">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-description" class="form-label">Product Description <span class="text-danger">*</span></label>
                                            <div id="snow-editor" style="height: 150px;"></div> <!-- end Snow-editor-->
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-summary" class="form-label">Product Summary</label>
                                            <textarea class="form-control" id="product-summary" rows="3" placeholder="Please enter summary"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-category" class="form-label">Categories <span class="text-danger">*</span></label>
                                            <select class="form-control select2" id="product-category">
                                                <option>Select</option>
                                                <optgroup label="Shopping">
                                                    <option value="SH1">Shopping 1</option>
                                                    <option value="SH2">Shopping 2</option>
                                                    <option value="SH3">Shopping 3</option>
                                                    <option value="SH4">Shopping 4</option>
                                                </optgroup>
                                                <optgroup label="CRM">
                                                    <option value="CRM1">Crm 1</option>
                                                    <option value="CRM2">Crm 2</option>
                                                    <option value="CRM3">Crm 3</option>
                                                    <option value="CRM4">Crm 4</option>
                                                </optgroup>
                                                <optgroup label="eCommerce">
                                                    <option value="E1">eCommerce 1</option>
                                                    <option value="E2">eCommerce 2</option>
                                                    <option value="E3">eCommerce 3</option>
                                                    <option value="E4">eCommerce 4</option>
                                                </optgroup>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-price">Price <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="product-price" placeholder="Enter amount">
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-2">Status <span class="text-danger">*</span></label>
                                            <br/>
                                            <div class="d-flex flex-wrap">
                                                <div class="form-check me-2">
                                                    <input class="form-check-input" type="radio" name="radioInline" value="option1" id="inlineRadio1" checked>
                                                    <label class="form-check-label" for="inlineRadio1">Online</label>
                                                </div>
                                                <div class="form-check me-2">
                                                    <input class="form-check-input" type="radio" name="radioInline" value="option2" id="inlineRadio2">
                                                    <label class="form-check-label" for="inlineRadio2">Offline</label>
                                                </div>
                                                <div class="form-check me-2">
                                                    <input class="form-check-input" type="radio" name="radioInline" value="option3" id="inlineRadio3">
                                                    <label class="form-check-label" for="inlineRadio3">Draft</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="form-label">Comment</label>
                                            <textarea class="form-control" rows="3" placeholder="Please enter comment"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>

                                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Meta Data</h5>

                                        <div class="mb-3">
                                            <label for="product-meta-title" class="form-label">Meta title</label>
                                            <input type="text" class="form-control" id="product-meta-title" placeholder="Enter title">
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-meta-keywords" class="form-label">Meta Keywords</label>
                                            <input type="text" class="form-control" id="product-meta-keywords" placeholder="Enter keywords">
                                        </div>

                                        <div>
                                            <label for="product-meta-description" class="form-label">Meta Description </label>
                                            <textarea class="form-control" rows="5" id="product-meta-description" placeholder="Please enter description"></textarea>
                                        </div>
                                    </div>
                                </div> <!-- end card -->

                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
  <!--end wrapper-->

  @stop
  @push('script-header')
        @once
        <link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
        @endonce
    @endpush



  @push('script-footer')
        @once
        <script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
        <!-- Dropzone file uploads-->
        <script src="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>

        <!-- Quill js -->
        <script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>

        <!-- Init js -->
        <script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
        @endonce
    @endpush
