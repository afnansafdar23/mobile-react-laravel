<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
                @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::title-->
                            <h2>All Colors</h2>
                            <!--end::title-->
                        </div>
                        <!--begin::Card title-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add_Color">Add
                            Color</button>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_Colors_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    id="kt_Colors_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="" style="width: 29.2361px;">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="#kt_Colors_table .form-check-input"
                                                        value="1">
                                                </div>
                                            </th>
                                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_Colors_table"
                                                rowspan="1" colspan="1"
                                                aria-label="Name: activate to sort column ascending"
                                                style="width: 188.802px;">Name</th>
                                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="Actions" style="width: 103.976px;">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        @forelse ($colors as $Color)
                                        <tr class="odd">
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{$Color['id']}}">
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Name=-->
                                            <td>
                                                <span class="text-gray-800 mb-1">{{$Color['name']}}</span>
                                            </td>
                                            <!--end::Name=-->
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
                                                            data-bs-target="#edit_Color{{$Color['id']}}"
                                                            class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a type="button" class="menu-link px-3" data-bs-toggle="modal"
                                                            data-bs-target="#destroy_Color{{$Color['id']}}">Delete</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
                                        <div class="modal fade" id="edit_Color{{$Color['id']}}" tabindex="-1"
                                            aria-modal="true" role="dialog">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Form-->
                                                    <form class="form" action="{{route('color.update',$Color['id'])}}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header" id="add_Color_header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">Edit a Color</h2>
                                                            <!--end::Modal title-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body py-10 px-lg-17">
                                                            <!--begin::Scroll-->
                                                            <div class="scroll-y me-n7 pe-7" id="add_Color_scroll"
                                                                data-kt-scroll="true"
                                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                                data-kt-scroll-max-height="auto"
                                                                data-kt-scroll-dependencies="#add_Color_header"
                                                                data-kt-scroll-wrappers="#add_Color_scroll"
                                                                data-kt-scroll-offset="300px" style="max-height: 89px;">
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
                                                                        value="{{$Color['name']}}">
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Scroll-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                        <!--begin::Modal footer-->
                                                        <div class="modal-footer flex-center">
                                                            <!--begin::Button-->
                                                            <button type="submit" id="add_Color_submit"
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
                                        <div class="modal fade" id="destroy_Color{{$Color['id']}}" tabindex="-1"
                                            aria-modal="true" role="dialog">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Form-->
                                                    <form class="form" action="{{route('color.destroy',$Color['id'])}}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <!--begin::Modal header-->
                                                        <div class="modal-header" id="add_Color_header">
                                                            <!--begin::Modal title-->
                                                            <h2 class="fw-bolder">Delete a Color</h2>
                                                            <!--end::Modal title-->
                                                        </div>
                                                        <!--end::Modal header-->
                                                        <!--begin::Modal body-->
                                                        <div class="modal-body py-10 px-lg-17 text-center">
                                                            <!--begin::Scroll-->
                                                            <h2 class="justify-content-center">Are you sure want to
                                                                delete this
                                                                Color?</h2>
                                                            <!--end::Scroll-->
                                                        </div>
                                                        <!--end::Modal body-->
                                                        <!--begin::Modal footer-->
                                                        <div class="modal-footer flex-center">
                                                            <!--begin::Button-->
                                                            <button type="submit" id="add_Color_submit"
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
                                            <td class="text-gray-800 mb-1 text-center" colspan="5">No Data Found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
            <div class="modal fade" id="add_Color" tabindex="-1" aria-modal="true" role="dialog">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="{{route('color.store')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!--begin::Modal header-->
                            <div class="modal-header" id="add_Color_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Add a Color</h2>
                                <!--end::Modal title-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="add_Color_scroll" data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: false, lg: true}"
                                    data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#add_Color_header"
                                    data-kt-scroll-wrappers="#add_Color_scroll" data-kt-scroll-offset="300px"
                                    style="max-height: 89px;">
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
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="submit" id="add_Color_submit" class="btn btn-primary">
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
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>
