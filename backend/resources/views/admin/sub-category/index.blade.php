<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
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
                            <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">All Sub
                                Categories</span>
                        </h3>
                        <div class="d-grid align-items-center d-flex gap-2 py-1">
                            @can('sub.category.create')
                            <button type="button" data-bs-toggle="modal" data-bs-target="#add_category"
                                class="btn btn-sm btn-primary">Add New
                                Category</button>
                            @endcan
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3" style="user-select: auto;">
                        <!--begin::Table-->
                        <div id="kt_categorys_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    id="kt_categorys_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="" style="width: 29.2361px;">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="#kt_categorys_table .form-check-input"
                                                        value="1">
                                                </div>
                                            </th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_categorys_table" rowspan="1" colspan="1"
                                                aria-label="Image: activate to sort column ascending"
                                                style="width: 140.521px;">
                                                Image</th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_categorys_table" rowspan="1" colspan="1"
                                                aria-label="Name: activate to sort column ascending"
                                                style="width: 188.802px;">Name
                                            </th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_categorys_table" rowspan="1" colspan="1"
                                                aria-label="Description: activate to sort column ascending"
                                                style="width: 148.49px;">Description</th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_categorys_table" rowspan="1" colspan="1"
                                                aria-label="Child Category: activate to sort column ascending"
                                                style="width: 148.49px;">Child Category</th>
                                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="Actions" style="width: 103.976px;">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        @forelse ($subCategories as $subCategory)
                                        <tr class="odd">
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{$subCategory['id']}}">
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Image-->
                                            <td data-filter="image">
                                                <img src="{{ asset($subCategory->getFirstMediaUrl('subCategory.image')) }}"
                                                    class="w-35px me-3" alt="">
                                            </td>
                                            <!--end::Image-->
                                            <!--begin::Name=-->
                                            <td>
                                                <span class="text-gray-800 mb-1">{{$subCategory['name']}}</span>
                                            </td>
                                            <!--end::Name=-->
                                            <!--begin::desc=-->
                                            <td><span class="text-gray-800 mb-1">{{$subCategory['description']}}</span>
                                            </td>
                                            <!--end::desc=-->
                                            <!--begin::child category=-->
                                            <td><span
                                                    class="text-gray-800 mb-1">{{$subCategory->childCategory->name}}</span>
                                            </td>
                                            <!--end::child category=-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                                    data-kt-menu-trigger="click"
                                                    data-kt-menu-placement="bottom-end">Actions
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a type="button" data-bs-toggle="modal"
                                                            data-bs-target="#edit_category{{$subCategory['id']}}"
                                                            class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a type="button" class="menu-link px-3" data-bs-toggle="modal"
                                                            data-bs-target="#destroy_category{{$subCategory['id']}}">Delete</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        <div class="modal fade" id="edit_category{{$subCategory['id']}}" tabindex="-1"
                                            aria-modal="true" role="dialog">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Form-->
                                                    <form class="form"
                                                        action="{{route('sub.category.update',$subCategory['id'])}}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header" id="add_category_header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">Edit a Category</h2>
                                                            <!--end::Modal title-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body py-10 px-lg-17">
                                                            <!--begin::Scroll-->
                                                            <div class="scroll-y me-n7 pe-7" id="add_category_scroll"
                                                                data-kt-scroll="true"
                                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                                data-kt-scroll-max-height="auto"
                                                                data-kt-scroll-dependencies="#add_category_header"
                                                                data-kt-scroll-wrappers="#add_category_scroll"
                                                                data-kt-scroll-offset="300px" style="max-height: 89px;">
                                                                <!--begin::Input group-->
                                                                <div class="row">
                                                                    <div
                                                                        class="fv-row mb-7 col-12 fv-plugins-icon-container">
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="required fs-6 fw-bold mb-2">Image</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        @include('admin.media.dropdown',['file'
                                                                        => $subCategory,'collection_name' =>
                                                                        'subCategory.image','dropzone_name'=>'edit_image'])
                                                                        <!--end::Input-->
                                                                        <div
                                                                            class="fv-plugins-message-container invalid-feedback">
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                </div>
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fs-6 fw-bold mb-2">Name</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text"
                                                                        class="form-control form-control-solid"
                                                                        placeholder="" name="name"
                                                                        value="{{$subCategory['name']}}">
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold mb-2">Description</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Textarea-->
                                                                    <textarea type="text" row="3"
                                                                        class="form-control form-control-solid"
                                                                        placeholder=""
                                                                        name="description">{{$subCategory['description']}}</textarea>
                                                                    <!--end::Textarea-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <!--begin::Input--><label
                                                                        class="fs-6 fw-bold mb-2">Child
                                                                        Category</label>
                                                                    <select name="child_category_id"
                                                                        aria-label="Select a Category"
                                                                        data-control="select2"
                                                                        data-placeholder="Select a category..."
                                                                        class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                                                        data-select2-id="select2-data-10-sqsy"
                                                                        tabindex="-1" aria-hidden="true">
                                                                        <option value=""
                                                                            data-select2-id="select2-data-12-lz0o">
                                                                            Select a Category...
                                                                        </option>
                                                                        @forelse ($childCategories as $childCategory)
                                                                        <option data-kt-flag="flags/indonesia.svg"
                                                                            value="{{$childCategory['id']}}"
                                                                            {{$subCategory['child_category_id']==$childCategory['id']?'selected':''}}
                                                                            data-select2-id="select2-data-131-4pfx">
                                                                            {{$childCategory['name']}}</option>
                                                                        @empty
                                                                        <span>please add child category first</span>
                                                                        @endforelse
                                                                    </select>
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Scroll-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                        <!--begin::Modal footer-->
                                                        <div class="modal-footer flex-center">
                                                            <!--begin::Button-->
                                                            <button type="submit" id="add_category_submit"
                                                                class="btn btn-primary">
                                                                <span class="indicator-label">Submit</span>
                                                            </button>
                                                            <!--end::Button-->
                                                        </div>
                                                        <!--end::Modal footer-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="destroy_category{{$subCategory['id']}}"
                                            tabindex="-1" aria-modal="true" role="dialog">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Form-->
                                                    <form class="form"
                                                        action="{{route('sub.category.destroy',$subCategory['id'])}}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header" id="add_category_header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">Delete a Category</h2>
                                                            <!--end::Modal title-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body py-10 px-lg-17 text-center">
                                                            <!--begin::Scroll-->
                                                            <h2 class="justify-content-center">Are you sure want to
                                                                delete this
                                                                category?</h2>
                                                            <!--end::Scroll-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                        <!--begin::Modal footer-->
                                                        <div class="modal-footer flex-center">
                                                            <!--begin::Button-->
                                                            <button type="submit" id="add_category_submit"
                                                                class="btn btn-primary">
                                                                <span class="indicator-label">Delete</span>
                                                            </button>
                                                            <!--end::Button-->
                                                        </div>
                                                        <!--end::Modal footer-->
                                                    </form>
                                                    <!--end::Form-->
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <tr>
                                            <td class="text-gray-800 mb-1 text-center" colspan="6">No Data Found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
            <div class="modal fade" id="add_category" tabindex="-1" aria-modal="true" role="dialog">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="{{route('sub.category.store')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!--begin::Modal header-->
                            <div class="modal-header" id="add_category_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Add a Category</h2>
                                <!--end::Modal title-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="add_category_scroll" data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: false, lg: true}"
                                    data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#add_category_header"
                                    data-kt-scroll-wrappers="#add_category_scroll" data-kt-scroll-offset="300px"
                                    style="max-height: 89px;">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Image</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        @include('admin.media.dropdown')
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="name">
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Textarea-->
                                        <textarea type="text" row="3" class="form-control form-control-solid"
                                            placeholder="" name="description"></textarea>
                                        <!--end::Textarea-->
                                    </div>
                                    <!--end::Input group-->
                                    <div class="col-lg-12 fv-row">
                                        <!--begin::Input--><label class="fs-6 fw-bold mb-2">Child Category</label>
                                        <select name="child_category_id" aria-label="Select a Category"
                                            data-control="select2" data-placeholder="Select a category..."
                                            class="form-select form-select-solid form-select-lg select-hidden-accessible"
                                            data-select-id="select2-data-10-sqsy" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="select2-data-12-lz0o">Select a Category...
                                            </option>
                                            @forelse ($childCategories as $childCategory)
                                            <option value="{{$childCategory['id']}}"
                                                data-select-id="select2-data-131-4pfx">{{$childCategory['name']}}
                                            </option>
                                            @empty
                                            <span>please add child category first</span>
                                            @endforelse
                                        </select>
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="submit" id="add_category_submit" class="btn btn-primary">Submit
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>