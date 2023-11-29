<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="#">
            <h3 class="text-white m-0">Gadget Glamour</h3>
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                        fill="black"></path>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0" style="height: 284px;">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item menu-accordion">
                    <a href="{{route('admin.dashboard')}}"
                        class="menu-link {{ Request::route()->getName() == 'admin.dashboard' ? 'active' : '' }}">
                        <span class="menu-icon">
                            <i class="bi bi-grid fs-3"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Authentication</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{Request::route()->getName()=='user.index'?'hover show':''}} {{Request::route()->getName()=='user.create'?'hover show':''}} {{Request::route()->getName()=='user.edit'?'hover show':''}}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-person-fill fs-3"></i>
                        </span>
                        <span class="menu-title">Users</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item menu-accordion">
                            <a href="{{route('user.index')}}"
                                class="menu-link {{Request::route()->getName()=='user.index'?'active':''}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All Users</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item menu-accordion">
                            <a href="{{route('user.create')}}"
                                class="menu-link {{Request::route()->getName()=='user.create'?'active':''}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Add New User</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{Request::route()->getName()=='role.index'?'hover show':''}} {{Request::route()->getName()=='role.create'?'hover show':''}} {{Request::route()->getName()=='role.edit'?'hover show':''}} {{Request::route()->getName()=='permission.index'?'hover show':''}} {{Request::route()->getName()=='permission.create'?'hover show':''}} {{Request::route()->getName()=='permission.edit'?'hover show':''}}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-toggles fs-3"></i>
                        </span>
                        <span class="menu-title">User Authentication</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item menu-accordion">
                            <a href="{{route('role.index')}}"
                                class="menu-link {{Request::route()->getName()=='role.index'?'active':''}}{{Request::route()->getName()=='role.create'?'active':''}}{{Request::route()->getName()=='role.edit'?'active':''}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">User Roles</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item menu-accordion">
                            <a href="{{route('permission.index')}}"
                                class="menu-link {{Request::route()->getName()=='permission.index'?'active':''}}{{Request::route()->getName()=='permission.create'?'active':''}}{{Request::route()->getName()=='permission.edit'?'active':''}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">User Permissions</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Pages</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{Request::route()->getName()=='parent.category.index'?'hover show':''}} {{Request::route()->getName()=='child.category.index'?'hover show':''}} {{Request::route()->getName()=='sub.category.index'?'hover show':''}}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-archive fs-3"></i>
                        </span>
                        <span class="menu-title">Categories</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item menu-accordion">
                            <a href="{{route('parent.category.index')}}"
                                class="menu-link {{Request::route()->getName()=='parent.category.index'?'active':''}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Parent Categories</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item menu-accordion">
                            <a href="{{route('child.category.index')}}"
                                class="menu-link {{Request::route()->getName()=='child.category.index'?'active':''}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Child Categories</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item menu-accordion">
                            <a href="{{route('sub.category.index')}}"
                                class="menu-link {{Request::route()->getName()=='sub.category.index'?'active':''}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Sub Categories</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item menu-accordion">
                    <a href="{{route('product.index')}}"
                        class="menu-link {{ Request::route()->getName() == 'product.index' ? 'active' : '' }}">
                        <span class="menu-icon">
                            <i class="bi bi-basket3 fs-3"></i>
                        </span>
                        <span class="menu-title">Products</span>
                    </a>
                </div>
                <div class="menu-item">
                    <div class="menu-content pt-8 pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Setting</span>
                    </div>
                </div>
                <div class="menu-item menu-accordion">
                    <a href="{{route('color.index')}}"
                        class="menu-link {{ Request::route()->getName() == 'color.index' ? 'active' : '' }}">
                        <span class="menu-icon">
                            <i class="bi bi-palette fs-3"></i>
                        </span>
                        <span class="menu-title">Product Colors</span>
                    </a>
                </div>
                {{-- <div class="menu-item">
                    <div class="menu-content">
                        <div class="separator mx-1 my-4"></div>
                    </div>
                </div> --}}
            </div>
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Aside menu-->
</div>