<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Edit
                                    Product</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3" style="user-select: auto;">
                            <!--begin::Table container-->
                            <div class="modal-body">
                                <!--begin::Label-->
                                <!--end::Label-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Image</label>
                                        @include('admin.media.dropdown',['file' => $product,
                                        'collection_name' => 'product.image',])
                                    </div>
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Name</label>
                                        <input type="text" value="{{ $product['name'] }}" name="name"
                                            placeholder="{{ $product['name'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('name')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Part
                                            Number</label>
                                        <input type="text" value="{{ $product['part_number'] }}" name="part_number"
                                            placeholder="{{ $product['part_number'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('part_number')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Price</label>
                                        <input type="number" value="{{ $product['price'] }}" name="price"
                                            placeholder="{{ $product['price'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('price')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Discounted
                                            Price</label>
                                        <input type="number" value="{{ $product['discounted_price'] }}"
                                            name="discounted_price" placeholder="{{ $product['discounted_price'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('discounted_price')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label
                                            class="col-lg-8 col-form-label required fw-bold fs-6">Manufacturer</label>
                                        <input type="text" value="{{ $product['manufacturer'] }}" name="manufacturer"
                                            placeholder="{{ $product['manufacturer'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('manufacturer')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Category</label>
                                        <select class="form-select form-select-solid is-valid" name="sub_categories"
                                            data-control="select2" data-placeholder="Select an option"
                                            data-allow-clear="true">
                                            @foreach ($subCategories as $subCategory)
                                            <option></option>
                                            <option @if ($product['sub_category_id']==$subCategory['id']) <?php
                                                echo 'selected' ; ?> @endif
                                                value="{{ $subCategory['id'] }}">{{ $subCategory['name'] }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('subCategory')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Description</label>
                                        <textarea type="text" name="description"
                                            placeholder="{{ $product['description'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">{{ $product['description'] }}</textarea>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('description')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Features</label>
                                        <textarea type="text" name="features" placeholder="{{ $product['features'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">{{ $product['features'] }}</textarea>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('features')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Product
                                            Color</label>
                                        <select class="form-select form-select-solid is-valid" name="color"
                                            data-control="select2" data-placeholder="Select an option"
                                            data-allow-clear="true">
                                            <option></option>
                                            <option {{ $product['color']=='black' ? 'selected' : '' }} value="black">
                                                Black</option>
                                            <option {{ $product['color']=='white' ? 'selected' : '' }} value="white">
                                                White</option>
                                            <option {{ $product['color']=='red' ? 'selected' : '' }} value="red">
                                                Red</option>
                                            <option {{ $product['color']=='blue' ? 'selected' : '' }} value="blue">Blue
                                            </option>
                                            <option {{ $product['color']=='clear' ? 'selected' : '' }} value="clear">
                                                Clear</option>
                                            <option {{ $product['color']=='purple' ? 'selected' : '' }} value="purple">
                                                Purple</option>
                                            <option {{ $product['color']=='yellow' ? 'selected' : '' }} value="yellow">
                                                Yellow</option>
                                            <option {{ $product['color']=='orange' ? 'selected' : '' }} value="orange">
                                                Orange</option>
                                        </select>
                                        @error('color')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Col-->
                                    <div class="col-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" {{ $product['availability']=='on'
                                                ? 'checked' : '' }} type="checkbox" name="availability" />
                                            <span class="form-check-label fw-semibold text-muted">Availability</span>
                                        </label>
                                    </div>
                                    @error('availability')
                                    <div class="error text-danger col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer gap-2">
                                <x-cento-dash-input type="submit" label="Edit Product" />
                                <a class="btn btn-light-danger" href={{ route('product.index') }}> Cancel </a>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
            </form>
        </div>
        <!--end:::Main-->
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>