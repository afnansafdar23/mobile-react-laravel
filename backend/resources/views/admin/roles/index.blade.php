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
                <div class="card mb-5 mb-xl-8" style="user-select: auto;">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5" style="user-select: auto;">
                        <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                            <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">All Roles</span>
                        </h3>
                        <div class="d-grid gap-2 align-items-center py-1">
                            @can('role.create')
                            <a href="{{ route('role.create') }}" class="btn btn-sm btn-primary">Add New Role</a>
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
                                                aria-label="Name: activate to sort column ascending"
                                                style="width: 188.802px;">Name
                                            </th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_categorys_table" rowspan="1" colspan="1"
                                                aria-label="Guard Name: activate to sort column ascending"
                                                style="width: 148.49px;">Guard Name</th>
                                            <th class="min-w-125px sorting" tabindex="0"
                                                aria-controls="kt_categorys_table" rowspan="1" colspan="1"
                                                aria-label="Permissions: activate to sort column ascending"
                                                style="width: 148.49px;">Permissions</th>
                                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="Actions" style="width: 103.976px;">Actions</th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                        @forelse ($roles as $role)
                                        <tr class="odd">
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{$role['id']}}">
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Name=-->
                                            <td>
                                                <span class="text-gray-800 mb-1">{{$role['name']}}</span>
                                            </td>
                                            <!--end::Name=-->
                                            <!--begin::desc=-->
                                            <td><span class="text-gray-800 mb-1">{{$role['guard_name']}}</span>
                                            </td>
                                            <!--end::desc=-->
                                            <!--begin::child category=-->
                                            <td><span class="text-gray-800 mb-1">
                                                    {{count($role->permissions)}}
                                                </span>
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
                                                        <a href="{{route('role.edit',$role['id'])}}"
                                                            class="menu-link px-3">Edit</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3"><a
                                                            href="{{route('role.edit',$role['id'])}}"
                                                            class="menu-link px-3">Delete</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->
                                        </tr>
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
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>