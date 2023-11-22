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
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
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
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Add Product</span>
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
                                    <div class="col-12">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Image</label>
                                        @include('admin.media.dropdown')
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="text" name="name" label="Name" placeholder="Name"
                                            :message="$errors->first('name')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="text" name="part_number" label="Part Number"
                                            placeholder="Part Number" :message="$errors->first('part_number')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="price" label="Price" placeholder="Price"
                                            :message="$errors->first('price')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="number" name="discounted_price"
                                            label="Discounted_price" placeholder="Discounted_price"
                                            :message="$errors->first('discounted_price')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="text" name="manufacturer" label="Manufacturer"
                                            placeholder="Manufacturer" :message="$errors->first('manufacturer')" />
                                    </div>
                                    <div class="col-6">
                                        <x-cento-dash-input type="select" name="sub_category_id" label="Sub Category"
                                            :options="$subCategories" :message="$errors->first('sub_category_id')" />
                                    </div>
                                    <x-textarea type="text" name="description" class="col-12" label="Description"
                                        :options="$subCategories" :message="$errors->first('description')" />
                                    <x-textarea type="text" name="features" class="col-12" label="Features"
                                        :options="$subCategories" :message="$errors->first('features')" />
                                    <!--begin::Col-->
                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Product
                                            Color</label>
                                        <select class="form-select form-select-solid is-valid" name="color"
                                            data-control="select2" data-placeholder="Select an option"
                                            data-allow-clear="true">
                                            <option></option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="red">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="clear">Clear</option>
                                            <option value="purple">Purple</option>
                                            <option value="yellow">Yellow</option>
                                            <option value="orange">Orange</option>
                                        </select>
                                        @error('color')
                                        <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Col-->
                                    <div class="col-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="availability" />
                                            <span class="form-check-label fw-semibold text-muted">Availability</span>
                                        </label>
                                    </div>
                                    @error('availability')
                                    <div class="error text-danger col-sm-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer gap-2">
                                <x-cento-dash-input type="submit" label="Add Product" />
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