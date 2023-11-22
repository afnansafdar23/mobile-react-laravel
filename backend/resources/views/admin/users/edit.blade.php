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
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-5">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="card mb-xl-8 mb-5" style="user-select: auto;">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5" style="user-select: auto;">
                            <h3 class="card-title align-items-start flex-column" style="user-select: auto;">
                                <span class="card-label fw-bold fs-3 mb-1" style="user-select: auto;">Edit User</span>
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
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">User Name</label>
                                        <input type="text" value="{{ $user['name'] }}" name="name"
                                            placeholder="{{ $user['name'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('name')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                        <label class="col-lg-8 col-form-label required fw-bold fs-6">Mobile
                                            Number</label>
                                        <input type="text" value="{{ $user['mobile_number'] }}" name="mobile_number"
                                            placeholder="{{ $user['mobile_number'] }}"
                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                        @error('mobile_number')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="mb-10">
                                        <label for="" class="form-label">Roles</label>
                                        <select class="form-select form-select-solid is-valid" name="roles[]"
                                            data-control="select2" data-placeholder="Select an option"
                                            data-allow-clear="true" multiple="multiple">
                                            @foreach ($roles as $role)
                                                <option></option>
                                                <option @if ($user->roles->contains($role['id'])) <?php echo 'selected'; ?> @endif
                                                    value="{{ $role['id'] }}">{{ $role['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('roles')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                    <!--end::Col-->
                                </div>
                            </div>
                            <div class="modal-footer gap-2">
                                <button type="submit" class="btn btn-success">
                                    Edit User
                                </button>
                                <a class="btn btn-light-danger" href={{ route('user.index') }}> Cancel </a>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
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
