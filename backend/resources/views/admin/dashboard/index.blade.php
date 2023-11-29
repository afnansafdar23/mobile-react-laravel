<x-layout.master>
    <x-slot name="header">
        <x-layout.header />
    </x-slot>
    <x-slot name="left_side_nav">
        <x-layout.left_side_nav />
    </x-slot>
    <x-slot name="content">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Toolbar-->
            <div class="toolbar" id="kt_toolbar">
                <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                        data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                        class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                        <!--begin::Title-->
                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">eCommerce Dashboard</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center py-1">
                        <!--begin::Wrapper-->
                        <div class="me-4">
                            <!--begin::Menu-->
                            <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                data-kt-menu-flip="top-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Filter
                            </a>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_61cf0e0632371">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid select2-hidden-accessible"
                                                data-kt-select2="true" data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_61cf0e0632371" data-allow-clear="true"
                                                data-select2-id="select2-data-7-0mvv" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-9-60gq"></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select><span
                                                class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-8-cx7u"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-x4g1-container"
                                                        aria-controls="select2-x4g1-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-x4g1-container" role="textbox"
                                                            aria-readonly="true" title="Select option"><span
                                                                class="select2-selection__placeholder">Select
                                                                option</span></span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1">
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    checked="checked">
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="notifications" checked="checked">
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Button-->
                        <a href="apps/ecommerce/catalog/add-product" class="btn btn-sm btn-primary"
                            id="kt_toolbar_primary_button">Add Product</a>
                        <!--end::Button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-xl-10">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 4-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->
                                            <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bolder text-dark me-2 lh-1">69,700</span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                                style="height: 22px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-bold fs-6">Expected Earnings</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                    <!--begin::Chart-->
                                    <div class="d-flex flex-center me-5 me-xxl-7 pt-2">
                                        <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px"
                                            data-kt-size="70" data-kt-line="11"><span></span><canvas height="70"
                                                width="70"></canvas></div>
                                    </div>
                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center">
                                        <!--begin::Label-->
                                        <div class="d-flex fs-6 fw-bold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 pe-1">Shoes</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="ms-auto fw-boldest text-gray-700 min-w-70px text-end">$7,660
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fs-6 fw-bold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 pe-1">Gaming</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="ms-auto fw-boldest text-gray-700 min-w-70px text-end">$2,820
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fs-6 fw-bold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-6px rounded-2 me-3"
                                                style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 pe-1">Others</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="ms-auto fw-boldest text-gray-700 min-w-70px text-end">$45,257
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 4-->
                            <!--begin::Card widget 5-->
                            <div class="card card-flush h-md-50 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bolder text-dark me-2 lh-1">1,836</span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                                style="height: 22px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-bold fs-6">Orders This Month</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end pt-0">
                                    <!--begin::Progress-->
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-boldest fs-6 text-dark">1,048 to Goal</span>
                                            <span class="fw-bolder fs-6 text-gray-400">62%</span>
                                        </div>
                                        <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                            <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 5-->
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 6-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->
                                            <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bolder text-dark me-2 lh-1">2,420</span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                                style="height: 22px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.6%
                                            </span>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-bold fs-6">Average Daily Sales</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end px-0 pb-0">
                                    <!--begin::Chart-->
                                    <div id="kt_card_widget_6_chart" class="w-100"
                                        style="height: 80px; min-height: 80px;">
                                        <div id="apexcharts8gtsiwox"
                                            class="apexcharts-canvas apexcharts8gtsiwox apexcharts-theme-light"
                                            style="width: 269px; height: 80px;"><svg id="SvgjsSvg1006" width="269"
                                                height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(34.21666666666667, 0)">
                                                    <defs id="SvgjsDefs1007">
                                                        <clipPath id="gridRectMask8gtsiwox">
                                                            <rect id="SvgjsRect1011" width="262" height="89"
                                                                x="-26.71666666666667" y="-4.5" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask8gtsiwox"></clipPath>
                                                        <clipPath id="nonForecastMask8gtsiwox"></clipPath>
                                                        <clipPath id="gridRectMarkerMask8gtsiwox">
                                                            <rect id="SvgjsRect1012" width="212.56666666666666"
                                                                height="84" x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1031" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1032" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1040" class="apexcharts-grid">
                                                        <g id="SvgjsG1041" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1043" x1="-20.21666666666667" y1="0"
                                                                x2="228.78333333333333" y2="0" stroke="#e4e6ef"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1044" x1="-20.21666666666667" y1="20"
                                                                x2="228.78333333333333" y2="20" stroke="#e4e6ef"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1045" x1="-20.21666666666667" y1="40"
                                                                x2="228.78333333333333" y2="40" stroke="#e4e6ef"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1046" x1="-20.21666666666667" y1="60"
                                                                x2="228.78333333333333" y2="60" stroke="#e4e6ef"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1047" x1="-20.21666666666667" y1="80"
                                                                x2="228.78333333333333" y2="80" stroke="#e4e6ef"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1042" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1049" x1="0" y1="80" x2="208.56666666666666"
                                                            y2="80" stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt">
                                                        </line>
                                                        <line id="SvgjsLine1048" x1="0" y1="1" x2="0" y2="80"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1013"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1014" class="apexcharts-series" rel="1"
                                                            seriesName="Sales" data:realIndex="0">
                                                            <path id="SvgjsPath1018"
                                                                d="M-9.559305555555557 80L-9.559305555555557 56C-9.559305555555557 52 -7.559305555555557 50 -3.5593055555555573 50L-5.440694444444443 50C-1.4406944444444427 50 0.5593055555555573 52 0.5593055555555573 56L0.5593055555555573 56L0.5593055555555573 80L0.5593055555555573 80C0.5593055555555573 80 -9.559305555555557 80 -9.559305555555557 80 "
                                                                fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="9"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask8gtsiwox)"
                                                                pathTo="M -9.559305555555557 80L -9.559305555555557 56Q -9.559305555555557 50 -3.5593055555555573 50L -5.440694444444443 50Q 0.5593055555555573 50 0.5593055555555573 56L 0.5593055555555573 56L 0.5593055555555573 80L 0.5593055555555573 80z"
                                                                pathFrom="M -9.559305555555557 80L -9.559305555555557 80L 0.5593055555555573 80L 0.5593055555555573 80L 0.5593055555555573 80L 0.5593055555555573 80L 0.5593055555555573 80L -9.559305555555557 80"
                                                                cy="50" cx="5.059305555555557" j="0" val="30"
                                                                barHeight="30" barWidth="19.118611111111115"></path>
                                                            <path id="SvgjsPath1020"
                                                                d="M25.201805555555556 80L25.201805555555556 26C25.201805555555552 22 27.201805555555552 20 31.201805555555556 20L29.320416666666674 20C33.320416666666674 20 35.320416666666674 22 35.320416666666674 26L35.320416666666674 26L35.320416666666674 80L35.320416666666674 80C35.320416666666674 80 25.201805555555556 80 25.201805555555556 80 "
                                                                fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="9"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask8gtsiwox)"
                                                                pathTo="M 25.201805555555556 80L 25.201805555555556 26Q 25.201805555555556 20 31.201805555555556 20L 29.320416666666674 20Q 35.320416666666674 20 35.320416666666674 26L 35.320416666666674 26L 35.320416666666674 80L 35.320416666666674 80z"
                                                                pathFrom="M 25.201805555555556 80L 25.201805555555556 80L 35.320416666666674 80L 35.320416666666674 80L 35.320416666666674 80L 35.320416666666674 80L 35.320416666666674 80L 25.201805555555556 80"
                                                                cy="20" cx="39.820416666666674" j="1" val="60"
                                                                barHeight="60" barWidth="19.118611111111115"></path>
                                                            <path id="SvgjsPath1022"
                                                                d="M59.96291666666667 80L59.96291666666667 33C59.96291666666667 29 61.96291666666667 27 65.96291666666667 27L64.08152777777778 27C68.08152777777778 27 70.08152777777778 29 70.08152777777778 33L70.08152777777778 33L70.08152777777778 80L70.08152777777778 80C70.08152777777778 80 59.96291666666667 80 59.96291666666667 80 "
                                                                fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="9"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask8gtsiwox)"
                                                                pathTo="M 59.96291666666667 80L 59.96291666666667 33Q 59.96291666666667 27 65.96291666666667 27L 64.08152777777778 27Q 70.08152777777778 27 70.08152777777778 33L 70.08152777777778 33L 70.08152777777778 80L 70.08152777777778 80z"
                                                                pathFrom="M 59.96291666666667 80L 59.96291666666667 80L 70.08152777777778 80L 70.08152777777778 80L 70.08152777777778 80L 70.08152777777778 80L 70.08152777777778 80L 59.96291666666667 80"
                                                                cy="27" cx="74.58152777777778" j="2" val="53"
                                                                barHeight="53" barWidth="19.118611111111115"></path>
                                                            <path id="SvgjsPath1024"
                                                                d="M94.72402777777778 80L94.72402777777778 41C94.72402777777778 37 96.72402777777778 35 100.72402777777778 35L98.8426388888889 35C102.8426388888889 35 104.8426388888889 37 104.8426388888889 41L104.8426388888889 41L104.8426388888889 80L104.8426388888889 80C104.8426388888889 80 94.72402777777778 80 94.72402777777778 80 "
                                                                fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="9"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask8gtsiwox)"
                                                                pathTo="M 94.72402777777778 80L 94.72402777777778 41Q 94.72402777777778 35 100.72402777777778 35L 98.8426388888889 35Q 104.8426388888889 35 104.8426388888889 41L 104.8426388888889 41L 104.8426388888889 80L 104.8426388888889 80z"
                                                                pathFrom="M 94.72402777777778 80L 94.72402777777778 80L 104.8426388888889 80L 104.8426388888889 80L 104.8426388888889 80L 104.8426388888889 80L 104.8426388888889 80L 94.72402777777778 80"
                                                                cy="35" cx="109.3426388888889" j="3" val="45"
                                                                barHeight="45" barWidth="19.118611111111115"></path>
                                                            <path id="SvgjsPath1026"
                                                                d="M129.48513888888888 80L129.48513888888888 26C129.48513888888888 22 131.48513888888888 20 135.48513888888888 20L133.60375 20C137.60375 20 139.60375 22 139.60375 26L139.60375 26L139.60375 80L139.60375 80C139.60375 80 129.48513888888888 80 129.48513888888888 80 "
                                                                fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="9"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask8gtsiwox)"
                                                                pathTo="M 129.48513888888888 80L 129.48513888888888 26Q 129.48513888888888 20 135.48513888888888 20L 133.60375 20Q 139.60375 20 139.60375 26L 139.60375 26L 139.60375 80L 139.60375 80z"
                                                                pathFrom="M 129.48513888888888 80L 129.48513888888888 80L 139.60375 80L 139.60375 80L 139.60375 80L 139.60375 80L 139.60375 80L 129.48513888888888 80"
                                                                cy="20" cx="144.10375" j="4" val="60" barHeight="60"
                                                                barWidth="19.118611111111115"></path>
                                                            <path id="SvgjsPath1028"
                                                                d="M164.24625 80L164.24625 11C164.24625 7 166.24625 5 170.24625 5L168.3648611111111 5C172.3648611111111 5 174.3648611111111 7 174.3648611111111 11L174.3648611111111 11L174.3648611111111 80L174.3648611111111 80C174.3648611111111 80 164.24625 80 164.24625 80 "
                                                                fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="9"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask8gtsiwox)"
                                                                pathTo="M 164.24625 80L 164.24625 11Q 164.24625 5 170.24625 5L 168.3648611111111 5Q 174.3648611111111 5 174.3648611111111 11L 174.3648611111111 11L 174.3648611111111 80L 174.3648611111111 80z"
                                                                pathFrom="M 164.24625 80L 164.24625 80L 174.3648611111111 80L 174.3648611111111 80L 174.3648611111111 80L 174.3648611111111 80L 174.3648611111111 80L 164.24625 80"
                                                                cy="5" cx="178.8648611111111" j="5" val="75"
                                                                barHeight="75" barWidth="19.118611111111115"></path>
                                                            <path id="SvgjsPath1030"
                                                                d="M199.0073611111111 80L199.0073611111111 33C199.0073611111111 29 201.0073611111111 27 205.0073611111111 27L203.1259722222222 27C207.1259722222222 27 209.1259722222222 29 209.1259722222222 33L209.1259722222222 33L209.1259722222222 80L209.1259722222222 80C209.1259722222222 80 199.0073611111111 80 199.0073611111111 80 "
                                                                fill="rgba(0,158,247,0.85)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="9"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask8gtsiwox)"
                                                                pathTo="M 199.0073611111111 80L 199.0073611111111 33Q 199.0073611111111 27 205.0073611111111 27L 203.1259722222222 27Q 209.1259722222222 27 209.1259722222222 33L 209.1259722222222 33L 209.1259722222222 80L 209.1259722222222 80z"
                                                                pathFrom="M 199.0073611111111 80L 199.0073611111111 80L 209.1259722222222 80L 209.1259722222222 80L 209.1259722222222 80L 209.1259722222222 80L 209.1259722222222 80L 199.0073611111111 80"
                                                                cy="27" cx="213.6259722222222" j="6" val="53"
                                                                barHeight="53" barWidth="19.118611111111115"></path>
                                                            <g id="SvgjsG1016" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG1017"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1019"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1021"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1023"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1025"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1027"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1029"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1015" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1050" x1="-20.21666666666667" y1="0"
                                                        x2="228.78333333333333" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs">
                                                    </line>
                                                    <line id="SvgjsLine1051" x1="-20.21666666666667" y1="0"
                                                        x2="228.78333333333333" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1052" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1053" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1054" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG1039" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1009" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(0, 158, 247);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 6-->
                            <!--begin::Card widget 7-->
                            <div class="card card-flush h-md-50 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">6.3k</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-bold fs-6">New Customers This Month</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-column justify-content-end">
                                    <!--begin::Title-->
                                    <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
                                    <!--end::Title-->
                                    <!--begin::Users group-->
                                    <div class="symbol-group symbol-hover">
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Alan Warden">
                                            <span
                                                class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Michael Eberon">
                                            <img alt="Pic" src="assets/media/avatars/300-11.jpg">
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Susan Redwood">
                                            <span
                                                class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Melody Macy">
                                            <img alt="Pic" src="assets/media/avatars/300-2.jpg">
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Perry Matthew">
                                            <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Barry Walter">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                                        </div>
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_view_users">
                                            <span
                                                class="symbol-label bg-gray-900 text-gray-300 fs-8 fw-bolder">+42</span>
                                        </a>
                                    </div>
                                    <!--end::Users group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 7-->
                        </div>
                        <!--begin::Col-->
                        <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                            <!--begin::Chart widget 3-->
                            <div class="card card-flush overflow-hidden h-md-100">
                                <!--begin::Header-->
                                <div class="card-header py-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">Sales This Months</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="../../demo13/dist/apps/ecommerce/catalog/products.html"
                                            class="btn btn-sm btn-light-primary fw-bolder">Launch eCommerce App</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                    <!--begin::Statistics-->
                                    <div class="px-9 mb-5">
                                        <!--begin::Statistics-->
                                        <div class="d-flex mb-2">
                                            <span class="fs-4 fw-bold text-gray-400 me-1">$</span>
                                            <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">14,094</span>
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-bold text-gray-400">Another $48,346 to Goal</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6"
                                        style="height: 300px; min-height: 315px;">
                                        <div id="apexchartscbh3rqlt"
                                            class="apexcharts-canvas apexchartscbh3rqlt apexcharts-theme-light"
                                            style="width: 538.5px; height: 300px;"><svg id="SvgjsSvg1055" width="538.5"
                                                height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1057" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(59.187095642089844, 30)">
                                                    <defs id="SvgjsDefs1056">
                                                        <clipPath id="gridRectMaskcbh3rqlt">
                                                            <rect id="SvgjsRect1062" width="476.31290435791016"
                                                                height="223.02222085062664" x="-3.5" y="-1.5" rx="0"
                                                                ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskcbh3rqlt"></clipPath>
                                                        <clipPath id="nonForecastMaskcbh3rqlt"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskcbh3rqlt">
                                                            <rect id="SvgjsRect1063" width="473.31290435791016"
                                                                height="224.02222085062664" x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1068" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1069" stop-opacity="0.3"
                                                                stop-color="rgba(80,205,137,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop1070" stop-opacity="0.7"
                                                                stop-color="rgba(255,255,255,0.7)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop1071" stop-opacity="0.7"
                                                                stop-color="rgba(255,255,255,0.7)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG1074" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1075" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -10)"><text id="SvgjsText1077"
                                                                font-family="inherit" x="0" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1078"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1080" font-family="inherit"
                                                                x="26.07293913099501" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1081"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1083" font-family="inherit"
                                                                x="52.14587826199001" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1084"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1086" font-family="inherit"
                                                                x="78.21881739298502" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 79.33065032958984 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1087">Apr 04</tspan>
                                                                <title>Apr 04</title>
                                                            </text><text id="SvgjsText1089" font-family="inherit"
                                                                x="104.29175652398004" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1090"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1092" font-family="inherit"
                                                                x="130.36469565497504" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1093"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1095" font-family="inherit"
                                                                x="156.43763478597003" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 157.49738883972168 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1096">Apr 07</tspan>
                                                                <title>Apr 07</title>
                                                            </text><text id="SvgjsText1098" font-family="inherit"
                                                                x="182.51057391696503" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1099"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1101" font-family="inherit"
                                                                x="208.58351304796003" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1102"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1104" font-family="inherit"
                                                                x="234.65645217895502" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 235.77963829040527 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1105">Apr 10</tspan>
                                                                <title>Apr 10</title>
                                                            </text><text id="SvgjsText1107" font-family="inherit"
                                                                x="260.72939130995" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1108"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1110" font-family="inherit"
                                                                x="286.802330440945" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1111"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1113" font-family="inherit"
                                                                x="312.87526957194" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 313.8752689361572 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1114">Apr 13</tspan>
                                                                <title>Apr 13</title>
                                                            </text><text id="SvgjsText1116" font-family="inherit"
                                                                x="338.948208702935" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1117"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1119" font-family="inherit"
                                                                x="365.02114783393" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1120"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1122" font-family="inherit"
                                                                x="391.094086964925" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 392.1739044189453 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1123">Apr 16</tspan>
                                                                <title>Apr 16</title>
                                                            </text><text id="SvgjsText1125" font-family="inherit"
                                                                x="417.16702609592" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1126"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1128" font-family="inherit"
                                                                x="443.239965226915" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1129"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1131" font-family="inherit"
                                                                x="469.31290435791" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1132"></tspan>
                                                                <title></title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1145" class="apexcharts-grid">
                                                        <g id="SvgjsG1146" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1148" x1="0" y1="0"
                                                                x2="469.31290435791016" y2="0" stroke="#e4e6ef"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1149" x1="0" y1="55.00555521265666"
                                                                x2="469.31290435791016" y2="55.00555521265666"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1150" x1="0" y1="110.01111042531332"
                                                                x2="469.31290435791016" y2="110.01111042531332"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1151" x1="0" y1="165.01666563797"
                                                                x2="469.31290435791016" y2="165.01666563797"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1152" x1="0" y1="220.02222085062664"
                                                                x2="469.31290435791016" y2="220.02222085062664"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1147" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1154" x1="0" y1="220.02222085062664"
                                                            x2="469.31290435791016" y2="220.02222085062664"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1153" x1="0" y1="1" x2="0"
                                                            y2="220.02222085062664" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1064"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1065" class="apexcharts-series" seriesName="Sales"
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1072"
                                                                d="M0 220.02222085062664L0 94.29523750741146C9.125528695848253 94.29523750741146 16.947410435146757 94.29523750741146 26.07293913099501 94.29523750741146C35.19846782684326 94.29523750741146 43.02034956614177 62.86349167160762 52.14587826199002 62.86349167160762C61.27140695783827 62.86349167160762 69.09328869713679 62.86349167160762 78.21881739298503 62.86349167160762C87.34434608883328 62.86349167160762 95.16622782813178 94.29523750741146 104.29175652398004 94.29523750741146C113.41728521982829 94.29523750741146 121.23916695912679 94.29523750741146 130.36469565497504 94.29523750741146C139.4902243508233 94.29523750741146 147.3121060901218 31.431745835803838 156.43763478597006 31.431745835803838C165.56316348181832 31.431745835803838 173.3850452211168 31.431745835803838 182.51057391696506 31.431745835803838C191.63610261281332 31.431745835803838 199.45798435211182 62.86349167160762 208.58351304796008 62.86349167160762C217.70904174380834 62.86349167160762 225.53092348310682 62.86349167160762 234.65645217895508 62.86349167160762C243.78198087480334 62.86349167160762 251.6038626141018 94.29523750741146 260.7293913099501 94.29523750741146C269.85492000579836 94.29523750741146 277.67680174509684 94.29523750741146 286.8023304409451 94.29523750741146C295.92785913679336 94.29523750741146 303.7497408760919 62.86349167160762 312.8752695719401 62.86349167160762C322.00079826778835 62.86349167160762 329.8226800070869 62.86349167160762 338.9482087029351 62.86349167160762C348.07373739878335 62.86349167160762 355.8956191380819 94.29523750741146 365.0211478339301 94.29523750741146C374.14667652977835 94.29523750741146 381.9685582690769 94.29523750741146 391.0940869649251 94.29523750741146C400.2196156607734 94.29523750741146 408.0414974000719 62.86349167160762 417.16702609592016 62.86349167160762C426.2925547917684 62.86349167160762 434.11443653106693 62.86349167160762 443.23996522691516 62.86349167160762C452.3654939227634 62.86349167160762 460.1873756620619 31.431745835803838 469.31290435791016 31.431745835803838C469.31290435791016 31.431745835803838 469.31290435791016 31.431745835803838 469.31290435791016 220.02222085062664M469.31290435791016 31.431745835803838C469.31290435791016 31.431745835803838 469.31290435791016 31.431745835803838 469.31290435791016 31.431745835803838 "
                                                                fill="url(#SvgjsLinearGradient1068)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskcbh3rqlt)"
                                                                pathTo="M 0 220.02222085062664L 0 94.29523750741146C 9.125528695848253 94.29523750741146 16.947410435146757 94.29523750741146 26.07293913099501 94.29523750741146C 35.19846782684326 94.29523750741146 43.02034956614177 62.86349167160762 52.14587826199002 62.86349167160762C 61.27140695783827 62.86349167160762 69.09328869713679 62.86349167160762 78.21881739298503 62.86349167160762C 87.34434608883328 62.86349167160762 95.16622782813178 94.29523750741146 104.29175652398004 94.29523750741146C 113.41728521982829 94.29523750741146 121.23916695912679 94.29523750741146 130.36469565497504 94.29523750741146C 139.4902243508233 94.29523750741146 147.3121060901218 31.431745835803838 156.43763478597006 31.431745835803838C 165.56316348181832 31.431745835803838 173.3850452211168 31.431745835803838 182.51057391696506 31.431745835803838C 191.63610261281332 31.431745835803838 199.45798435211182 62.86349167160762 208.58351304796008 62.86349167160762C 217.70904174380834 62.86349167160762 225.53092348310682 62.86349167160762 234.65645217895508 62.86349167160762C 243.78198087480334 62.86349167160762 251.6038626141018 94.29523750741146 260.7293913099501 94.29523750741146C 269.85492000579836 94.29523750741146 277.67680174509684 94.29523750741146 286.8023304409451 94.29523750741146C 295.92785913679336 94.29523750741146 303.7497408760919 62.86349167160762 312.8752695719401 62.86349167160762C 322.00079826778835 62.86349167160762 329.8226800070869 62.86349167160762 338.9482087029351 62.86349167160762C 348.07373739878335 62.86349167160762 355.8956191380819 94.29523750741146 365.0211478339301 94.29523750741146C 374.14667652977835 94.29523750741146 381.9685582690769 94.29523750741146 391.0940869649251 94.29523750741146C 400.2196156607734 94.29523750741146 408.0414974000719 62.86349167160762 417.16702609592016 62.86349167160762C 426.2925547917684 62.86349167160762 434.11443653106693 62.86349167160762 443.23996522691516 62.86349167160762C 452.3654939227634 62.86349167160762 460.1873756620619 31.431745835803838 469.31290435791016 31.431745835803838C 469.31290435791016 31.431745835803838 469.31290435791016 31.431745835803838 469.31290435791016 220.02222085062664M 469.31290435791016 31.431745835803838z"
                                                                pathFrom="M -1 377.1809500296457L -1 377.1809500296457L 26.07293913099501 377.1809500296457L 52.14587826199002 377.1809500296457L 78.21881739298503 377.1809500296457L 104.29175652398004 377.1809500296457L 130.36469565497504 377.1809500296457L 156.43763478597006 377.1809500296457L 182.51057391696506 377.1809500296457L 208.58351304796008 377.1809500296457L 234.65645217895508 377.1809500296457L 260.7293913099501 377.1809500296457L 286.8023304409451 377.1809500296457L 312.8752695719401 377.1809500296457L 338.9482087029351 377.1809500296457L 365.0211478339301 377.1809500296457L 391.0940869649251 377.1809500296457L 417.16702609592016 377.1809500296457L 443.23996522691516 377.1809500296457L 469.31290435791016 377.1809500296457">
                                                            </path>
                                                            <path id="SvgjsPath1073"
                                                                d="M0 94.29523750741146C9.125528695848253 94.29523750741146 16.947410435146757 94.29523750741146 26.07293913099501 94.29523750741146C35.19846782684326 94.29523750741146 43.02034956614177 62.86349167160762 52.14587826199002 62.86349167160762C61.27140695783827 62.86349167160762 69.09328869713679 62.86349167160762 78.21881739298503 62.86349167160762C87.34434608883328 62.86349167160762 95.16622782813178 94.29523750741146 104.29175652398004 94.29523750741146C113.41728521982829 94.29523750741146 121.23916695912679 94.29523750741146 130.36469565497504 94.29523750741146C139.4902243508233 94.29523750741146 147.3121060901218 31.431745835803838 156.43763478597006 31.431745835803838C165.56316348181832 31.431745835803838 173.3850452211168 31.431745835803838 182.51057391696506 31.431745835803838C191.63610261281332 31.431745835803838 199.45798435211182 62.86349167160762 208.58351304796008 62.86349167160762C217.70904174380834 62.86349167160762 225.53092348310682 62.86349167160762 234.65645217895508 62.86349167160762C243.78198087480334 62.86349167160762 251.6038626141018 94.29523750741146 260.7293913099501 94.29523750741146C269.85492000579836 94.29523750741146 277.67680174509684 94.29523750741146 286.8023304409451 94.29523750741146C295.92785913679336 94.29523750741146 303.7497408760919 62.86349167160762 312.8752695719401 62.86349167160762C322.00079826778835 62.86349167160762 329.8226800070869 62.86349167160762 338.9482087029351 62.86349167160762C348.07373739878335 62.86349167160762 355.8956191380819 94.29523750741146 365.0211478339301 94.29523750741146C374.14667652977835 94.29523750741146 381.9685582690769 94.29523750741146 391.0940869649251 94.29523750741146C400.2196156607734 94.29523750741146 408.0414974000719 62.86349167160762 417.16702609592016 62.86349167160762C426.2925547917684 62.86349167160762 434.11443653106693 62.86349167160762 443.23996522691516 62.86349167160762C452.3654939227634 62.86349167160762 460.1873756620619 31.431745835803838 469.31290435791016 31.431745835803838C469.31290435791016 31.431745835803838 469.31290435791016 31.431745835803838 469.31290435791016 31.431745835803838 "
                                                                fill="none" fill-opacity="1" stroke="#50cd89"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="3" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskcbh3rqlt)"
                                                                pathTo="M 0 94.29523750741146C 9.125528695848253 94.29523750741146 16.947410435146757 94.29523750741146 26.07293913099501 94.29523750741146C 35.19846782684326 94.29523750741146 43.02034956614177 62.86349167160762 52.14587826199002 62.86349167160762C 61.27140695783827 62.86349167160762 69.09328869713679 62.86349167160762 78.21881739298503 62.86349167160762C 87.34434608883328 62.86349167160762 95.16622782813178 94.29523750741146 104.29175652398004 94.29523750741146C 113.41728521982829 94.29523750741146 121.23916695912679 94.29523750741146 130.36469565497504 94.29523750741146C 139.4902243508233 94.29523750741146 147.3121060901218 31.431745835803838 156.43763478597006 31.431745835803838C 165.56316348181832 31.431745835803838 173.3850452211168 31.431745835803838 182.51057391696506 31.431745835803838C 191.63610261281332 31.431745835803838 199.45798435211182 62.86349167160762 208.58351304796008 62.86349167160762C 217.70904174380834 62.86349167160762 225.53092348310682 62.86349167160762 234.65645217895508 62.86349167160762C 243.78198087480334 62.86349167160762 251.6038626141018 94.29523750741146 260.7293913099501 94.29523750741146C 269.85492000579836 94.29523750741146 277.67680174509684 94.29523750741146 286.8023304409451 94.29523750741146C 295.92785913679336 94.29523750741146 303.7497408760919 62.86349167160762 312.8752695719401 62.86349167160762C 322.00079826778835 62.86349167160762 329.8226800070869 62.86349167160762 338.9482087029351 62.86349167160762C 348.07373739878335 62.86349167160762 355.8956191380819 94.29523750741146 365.0211478339301 94.29523750741146C 374.14667652977835 94.29523750741146 381.9685582690769 94.29523750741146 391.0940869649251 94.29523750741146C 400.2196156607734 94.29523750741146 408.0414974000719 62.86349167160762 417.16702609592016 62.86349167160762C 426.2925547917684 62.86349167160762 434.11443653106693 62.86349167160762 443.23996522691516 62.86349167160762C 452.3654939227634 62.86349167160762 460.1873756620619 31.431745835803838 469.31290435791016 31.431745835803838"
                                                                pathFrom="M -1 377.1809500296457L -1 377.1809500296457L 26.07293913099501 377.1809500296457L 52.14587826199002 377.1809500296457L 78.21881739298503 377.1809500296457L 104.29175652398004 377.1809500296457L 130.36469565497504 377.1809500296457L 156.43763478597006 377.1809500296457L 182.51057391696506 377.1809500296457L 208.58351304796008 377.1809500296457L 234.65645217895508 377.1809500296457L 260.7293913099501 377.1809500296457L 286.8023304409451 377.1809500296457L 312.8752695719401 377.1809500296457L 338.9482087029351 377.1809500296457L 365.0211478339301 377.1809500296457L 391.0940869649251 377.1809500296457L 417.16702609592016 377.1809500296457L 443.23996522691516 377.1809500296457L 469.31290435791016 377.1809500296457">
                                                            </path>
                                                            <g id="SvgjsG1066" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1162" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker w6rb5vckp no-pointer-events"
                                                                        stroke="#50cd89" fill="#50cd89" fill-opacity="1"
                                                                        stroke-width="3" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1067" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1156" x1="0" y1="0" x2="0"
                                                        y2="220.02222085062664" stroke="#50cd89" stroke-dasharray="3"
                                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                        width="1" height="220.02222085062664" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <line id="SvgjsLine1157" x1="0" y1="0" x2="469.31290435791016"
                                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1158" x1="0" y1="0" x2="469.31290435791016"
                                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                                    </line>
                                                    <g id="SvgjsG1159" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1160" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1161" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1163" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1164" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <g id="SvgjsG1133" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(29.187095642089844, 0)">
                                                    <g id="SvgjsG1134" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1135" font-family="inherit" x="20" y="31.4"
                                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1136">$2.4K</tspan>
                                                            <title>$2.4K</title>
                                                        </text><text id="SvgjsText1137" font-family="inherit" x="20"
                                                            y="86.40555521265667" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1138">$2.0K</tspan>
                                                            <title>$2.0K</title>
                                                        </text><text id="SvgjsText1139" font-family="inherit" x="20"
                                                            y="141.41111042531332" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1140">$1.7K</tspan>
                                                            <title>$1.7K</title>
                                                        </text><text id="SvgjsText1141" font-family="inherit" x="20"
                                                            y="196.41666563797" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1142">$1.4K</tspan>
                                                            <title>$1.4K</title>
                                                        </text><text id="SvgjsText1143" font-family="inherit" x="20"
                                                            y="251.42222085062664" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1144">$1.0K</tspan>
                                                            <title>$1.0K</title>
                                                        </text></g>
                                                </g>
                                                <rect id="SvgjsRect1155" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG1058" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(80, 205, 137);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Chart widget 3-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gy-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-xl-10">
                            <!--begin::Tables widget 2-->
                            <div class="card h-md-100">
                                <!--begin::Header-->
                                <div class="card-header align-items-center border-0">
                                    <!--begin::Title-->
                                    <h3 class="fw-bolder text-gray-900 m-0">Recent Orders</h3>
                                    <!--end::Title-->
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                    fill="black">
                                                </rect>
                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                </rect>
                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                </rect>
                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                </rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-2">
                                    <!--begin::Nav-->
                                    <ul class="nav nav-pills nav-pills-custom mb-3">
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4"
                                                data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
                                                <!--begin::Icon-->
                                                <div class="nav-icon">
                                                    <img alt="" src="assets/media/svg/products-categories/t-shirt.svg"
                                                        class="">
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Subtitle-->
                                                <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">T-shirt</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                                data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
                                                <!--begin::Icon-->
                                                <div class="nav-icon">
                                                    <img alt="" src="assets/media/svg/products-categories/gaming.svg"
                                                        class="">
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Subtitle-->
                                                <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">Gaming</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                                data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
                                                <!--begin::Icon-->
                                                <div class="nav-icon">
                                                    <img alt="" src="assets/media/svg/products-categories/watch.svg"
                                                        class="">
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Subtitle-->
                                                <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Watch</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                                data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
                                                <!--begin::Icon-->
                                                <div class="nav-icon">
                                                    <img alt="" src="assets/media/svg/products-categories/gloves.svg"
                                                        class="nav-icon">
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Subtitle-->
                                                <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Gloves</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3">
                                            <!--begin::Link-->
                                            <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                                data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
                                                <!--begin::Icon-->
                                                <div class="nav-icon">
                                                    <img alt="" src="assets/media/svg/products-categories/shoes.svg"
                                                        class="nav-icon">
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Subtitle-->
                                                <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Shoes</span>
                                                <!--end::Subtitle-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                            <th class="ps-0 w-50px">ITEM</th>
                                                            <th class="min-w-140px"></th>
                                                            <th class="text-end min-w-140px">QTY</th>
                                                            <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                            <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/210.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                    1802</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-2347</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$72.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$126.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/215.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                    Laga</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-1321</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$45.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/209.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-4312</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$84.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$168.00</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                            <th class="ps-0 w-50px">ITEM</th>
                                                            <th class="min-w-140px"></th>
                                                            <th class="text-end min-w-140px">QTY</th>
                                                            <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                            <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/197.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                    1802</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-4312</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$32.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$312.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/178.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                    Laga</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-3122</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$62.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/22.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-1142</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$74.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$139.00</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                            <th class="ps-0 w-50px">ITEM</th>
                                                            <th class="min-w-140px"></th>
                                                            <th class="text-end min-w-140px">QTY</th>
                                                            <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                            <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/1.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                    1324</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-1523</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$43.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$231.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/24.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                    Laga</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-5314</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$71.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/71.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-4222</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$23.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$213.00</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                            <th class="ps-0 w-50px">ITEM</th>
                                                            <th class="min-w-140px"></th>
                                                            <th class="text-end min-w-140px">QTY</th>
                                                            <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                            <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/41.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                    2635</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-1523</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$65.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$163.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/63.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                    Laga</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-2745</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$73.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/59.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-5173</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$54.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$173.00</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                            <th class="ps-0 w-50px">ITEM</th>
                                                            <th class="min-w-140px"></th>
                                                            <th class="text-end min-w-140px">QTY</th>
                                                            <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                            <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/10.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-2163</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$287.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/96.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-2162</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$51.00</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img src="assets/media/stock/ecommerce/13.gif"
                                                                    class="w-50px ms-n1" alt="">
                                                            </td>
                                                            <td class="ps-0">
                                                                <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                    class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
                                                                <span
                                                                    class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                    #XDG-1537</span>
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$27.00</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span
                                                                    class="text-gray-800 fw-bolder d-block fs-6">$167.00</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Tables widget 2-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-5 mb-xl-10">
                            <!--begin::Chart widget 4-->
                            <div class="card card-flush overflow-hidden h-md-100">
                                <!--begin::Header-->
                                <div class="card-header py-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">Discounted Product Sales</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4"
                                                        fill="black">
                                                    </rect>
                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                    </rect>
                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                    </rect>
                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black">
                                                    </rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                    <!--begin::Info-->
                                    <div class="px-9 mb-5">
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Currency-->
                                            <span class="fs-4 fw-bold text-gray-400 align-self-start me-1">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Value-->
                                            <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">3,706</span>
                                            <!--end::Value-->
                                            <!--begin::Label-->
                                            <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                                <span class="svg-icon svg-icon-7 svg-icon-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.5"
                                                            d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-bold text-gray-400">Total Discounted Sales This
                                            Month</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6"
                                        style="height: 300px; min-height: 315px;">
                                        <div id="apexchartsrkthv2xu"
                                            class="apexcharts-canvas apexchartsrkthv2xu apexcharts-theme-light"
                                            style="width: 538.5px; height: 300px;"><svg id="SvgjsSvg1165" width="538.5"
                                                height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1167" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(56.02777862548828, 30)">
                                                    <defs id="SvgjsDefs1166">
                                                        <clipPath id="gridRectMaskrkthv2xu">
                                                            <rect id="SvgjsRect1172" width="479.4722213745117"
                                                                height="223.02222085062664" x="-3.5" y="-1.5" rx="0"
                                                                ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskrkthv2xu"></clipPath>
                                                        <clipPath id="nonForecastMaskrkthv2xu"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskrkthv2xu">
                                                            <rect id="SvgjsRect1173" width="476.4722213745117"
                                                                height="224.02222085062664" x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1178" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1179" stop-opacity="0.3"
                                                                stop-color="rgba(0,158,247,0.3)" offset="0"></stop>
                                                            <stop id="SvgjsStop1180" stop-opacity="0.7"
                                                                stop-color="rgba(255,255,255,0.7)" offset="0.9"></stop>
                                                            <stop id="SvgjsStop1181" stop-opacity="0.7"
                                                                stop-color="rgba(255,255,255,0.7)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG1184" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1185" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -10)"><text id="SvgjsText1187"
                                                                font-family="inherit" x="0" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1188"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1190" font-family="inherit"
                                                                x="26.248456743028427" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1191"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1193" font-family="inherit"
                                                                x="52.49691348605686" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1194"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1196" font-family="inherit"
                                                                x="78.7453702290853" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 79.85719680786133 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1197">Apr 04</tspan>
                                                                <title>Apr 04</title>
                                                            </text><text id="SvgjsText1199" font-family="inherit"
                                                                x="104.99382697211371" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1200"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1202" font-family="inherit"
                                                                x="131.24228371514215" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1203"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1205" font-family="inherit"
                                                                x="157.4907404581706" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 158.55047416687012 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1206">Apr 07</tspan>
                                                                <title>Apr 07</title>
                                                            </text><text id="SvgjsText1208" font-family="inherit"
                                                                x="183.73919720119903" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1209"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1211" font-family="inherit"
                                                                x="209.98765394422747" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1212"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1214" font-family="inherit"
                                                                x="236.23611068725592" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 237.3593044281006 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1215">Apr 10</tspan>
                                                                <title>Apr 10</title>
                                                            </text><text id="SvgjsText1217" font-family="inherit"
                                                                x="262.48456743028436" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1218"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1220" font-family="inherit"
                                                                x="288.7330241733128" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1221"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1223" font-family="inherit"
                                                                x="314.98148091634124" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 315.9814701080322 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1224">Apr 13</tspan>
                                                                <title>Apr 13</title>
                                                            </text><text id="SvgjsText1226" font-family="inherit"
                                                                x="341.2299376593697" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1227"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1229" font-family="inherit"
                                                                x="367.4783944023981" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1230"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1232" font-family="inherit"
                                                                x="393.72685114542656" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 394.832670211792 238.13332176208496)">
                                                                <tspan id="SvgjsTspan1233">Apr 18</tspan>
                                                                <title>Apr 18</title>
                                                            </text><text id="SvgjsText1235" font-family="inherit"
                                                                x="419.975307888455" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1236"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1238" font-family="inherit"
                                                                x="446.22376463148345" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1239"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1241" font-family="inherit"
                                                                x="472.4722213745119" y="243.02222085062664"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1242"></tspan>
                                                                <title></title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1259" class="apexcharts-grid">
                                                        <g id="SvgjsG1260" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1262" x1="0" y1="0"
                                                                x2="472.4722213745117" y2="0" stroke="#e4e6ef"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1263" x1="0" y1="36.67037014177111"
                                                                x2="472.4722213745117" y2="36.67037014177111"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1264" x1="0" y1="73.34074028354222"
                                                                x2="472.4722213745117" y2="73.34074028354222"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1265" x1="0" y1="110.01111042531332"
                                                                x2="472.4722213745117" y2="110.01111042531332"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1266" x1="0" y1="146.68148056708444"
                                                                x2="472.4722213745117" y2="146.68148056708444"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1267" x1="0" y1="183.35185070885555"
                                                                x2="472.4722213745117" y2="183.35185070885555"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1268" x1="0" y1="220.02222085062667"
                                                                x2="472.4722213745117" y2="220.02222085062667"
                                                                stroke="#e4e6ef" stroke-dasharray="4"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                        </g>
                                                        <g id="SvgjsG1261" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1270" x1="0" y1="220.02222085062664"
                                                            x2="472.4722213745117" y2="220.02222085062664"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1269" x1="0" y1="1" x2="0"
                                                            y2="220.02222085062664" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt">
                                                        </line>
                                                    </g>
                                                    <g id="SvgjsG1174"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1175" class="apexcharts-series"
                                                            seriesName="Discounted" data:longestSeries="true" rel="1"
                                                            data:realIndex="0">
                                                            <path id="SvgjsPath1182"
                                                                d="M0 220.02222085062658L0 120.01212046397723C9.186959860059948 120.01212046397723 17.061496882968477 120.01212046397723 26.248456743028427 120.01212046397723C35.43541660308838 120.01212046397723 43.309953625996904 86.67542033509426 52.496913486056854 86.67542033509426C61.683873346116805 86.67542033509426 69.55841036902534 86.67542033509426 78.74537022908528 86.67542033509426C87.93233008914522 86.67542033509426 95.80686711205377 53.33872020621129 104.99382697211371 53.33872020621129C114.18078683217367 53.33872020621129 122.0553238550822 53.33872020621129 131.24228371514215 53.33872020621129C140.4292435752021 53.33872020621129 148.30378059811062 86.67542033509426 157.49074045817056 86.67542033509426C166.6777003182305 86.67542033509426 174.55223734113906 86.67542033509426 183.739197201199 86.67542033509426C192.92615706125895 86.67542033509426 200.80069408416747 120.01212046397723 209.98765394422742 120.01212046397723C219.17461380428736 120.01212046397723 227.04915082719592 120.01212046397723 236.23611068725586 120.01212046397723C245.4230705473158 120.01212046397723 253.29760757022436 120.01212046397723 262.4845674302843 120.01212046397723C271.6715272903442 120.01212046397723 279.54606431325277 120.01212046397723 288.7330241733127 120.01212046397723C297.91998403337266 120.01212046397723 305.79452105628116 86.67542033509426 314.9814809163411 86.67542033509426C324.1684407764011 86.67542033509426 332.0429777993096 86.67542033509426 341.22993765936957 86.67542033509426C350.41689751942954 86.67542033509426 358.29143454233804 120.01212046397723 367.478394402398 120.01212046397723C376.6653542624579 120.01212046397723 384.5398912853665 53.33872020621129 393.7268511454264 53.33872020621129C402.91381100548637 53.33872020621129 410.78834802839486 53.33872020621129 419.97530788845484 53.33872020621129C429.1622677485148 53.33872020621129 437.0368047714233 53.33872020621129 446.2237646314833 53.33872020621129C455.41072449154325 53.33872020621129 463.28526151445175 86.67542033509426 472.4722213745117 86.67542033509426C472.4722213745117 86.67542033509426 472.4722213745117 86.67542033509426 472.4722213745117 220.02222085062658M472.4722213745117 86.67542033509426C472.4722213745117 86.67542033509426 472.4722213745117 86.67542033509426 472.4722213745117 86.67542033509426 "
                                                                fill="url(#SvgjsLinearGradient1178)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskrkthv2xu)"
                                                                pathTo="M 0 220.02222085062664L 0 120.01212046397723C 9.186959860059948 120.01212046397723 17.061496882968477 120.01212046397723 26.248456743028427 120.01212046397723C 35.43541660308838 120.01212046397723 43.309953625996904 86.67542033509426 52.496913486056854 86.67542033509426C 61.683873346116805 86.67542033509426 69.55841036902534 86.67542033509426 78.74537022908528 86.67542033509426C 87.93233008914522 86.67542033509426 95.80686711205377 53.33872020621129 104.99382697211371 53.33872020621129C 114.18078683217367 53.33872020621129 122.0553238550822 53.33872020621129 131.24228371514215 53.33872020621129C 140.4292435752021 53.33872020621129 148.30378059811062 86.67542033509426 157.49074045817056 86.67542033509426C 166.6777003182305 86.67542033509426 174.55223734113906 86.67542033509426 183.739197201199 86.67542033509426C 192.92615706125895 86.67542033509426 200.80069408416747 120.01212046397723 209.98765394422742 120.01212046397723C 219.17461380428736 120.01212046397723 227.04915082719592 120.01212046397723 236.23611068725586 120.01212046397723C 245.4230705473158 120.01212046397723 253.29760757022436 120.01212046397723 262.4845674302843 120.01212046397723C 271.6715272903442 120.01212046397723 279.54606431325277 120.01212046397723 288.7330241733127 120.01212046397723C 297.91998403337266 120.01212046397723 305.79452105628116 86.67542033509426 314.9814809163411 86.67542033509426C 324.1684407764011 86.67542033509426 332.0429777993096 86.67542033509426 341.22993765936957 86.67542033509426C 350.41689751942954 86.67542033509426 358.29143454233804 120.01212046397723 367.478394402398 120.01212046397723C 376.6653542624579 120.01212046397723 384.5398912853665 53.33872020621129 393.7268511454264 53.33872020621129C 402.91381100548637 53.33872020621129 410.78834802839486 53.33872020621129 419.97530788845484 53.33872020621129C 429.1622677485148 53.33872020621129 437.0368047714233 53.33872020621129 446.2237646314833 53.33872020621129C 455.41072449154325 53.33872020621129 463.28526151445175 86.67542033509426 472.4722213745117 86.67542033509426C 472.4722213745117 86.67542033509426 472.4722213745117 86.67542033509426 472.4722213745117 220.02222085062664M 472.4722213745117 86.67542033509426z"
                                                                pathFrom="M -1 2420.244429356904L -1 2420.244429356904L 26.248456743028427 2420.244429356904L 52.496913486056854 2420.244429356904L 78.74537022908528 2420.244429356904L 104.99382697211371 2420.244429356904L 131.24228371514215 2420.244429356904L 157.49074045817056 2420.244429356904L 183.739197201199 2420.244429356904L 209.98765394422742 2420.244429356904L 236.23611068725586 2420.244429356904L 262.4845674302843 2420.244429356904L 288.7330241733127 2420.244429356904L 314.9814809163411 2420.244429356904L 341.22993765936957 2420.244429356904L 367.478394402398 2420.244429356904L 393.7268511454264 2420.244429356904L 419.97530788845484 2420.244429356904L 446.2237646314833 2420.244429356904L 472.4722213745117 2420.244429356904">
                                                            </path>
                                                            <path id="SvgjsPath1183"
                                                                d="M0 120.01212046397723C9.186959860059948 120.01212046397723 17.061496882968477 120.01212046397723 26.248456743028427 120.01212046397723C35.43541660308838 120.01212046397723 43.309953625996904 86.67542033509426 52.496913486056854 86.67542033509426C61.683873346116805 86.67542033509426 69.55841036902534 86.67542033509426 78.74537022908528 86.67542033509426C87.93233008914522 86.67542033509426 95.80686711205377 53.33872020621129 104.99382697211371 53.33872020621129C114.18078683217367 53.33872020621129 122.0553238550822 53.33872020621129 131.24228371514215 53.33872020621129C140.4292435752021 53.33872020621129 148.30378059811062 86.67542033509426 157.49074045817056 86.67542033509426C166.6777003182305 86.67542033509426 174.55223734113906 86.67542033509426 183.739197201199 86.67542033509426C192.92615706125895 86.67542033509426 200.80069408416747 120.01212046397723 209.98765394422742 120.01212046397723C219.17461380428736 120.01212046397723 227.04915082719592 120.01212046397723 236.23611068725586 120.01212046397723C245.4230705473158 120.01212046397723 253.29760757022436 120.01212046397723 262.4845674302843 120.01212046397723C271.6715272903442 120.01212046397723 279.54606431325277 120.01212046397723 288.7330241733127 120.01212046397723C297.91998403337266 120.01212046397723 305.79452105628116 86.67542033509426 314.9814809163411 86.67542033509426C324.1684407764011 86.67542033509426 332.0429777993096 86.67542033509426 341.22993765936957 86.67542033509426C350.41689751942954 86.67542033509426 358.29143454233804 120.01212046397723 367.478394402398 120.01212046397723C376.6653542624579 120.01212046397723 384.5398912853665 53.33872020621129 393.7268511454264 53.33872020621129C402.91381100548637 53.33872020621129 410.78834802839486 53.33872020621129 419.97530788845484 53.33872020621129C429.1622677485148 53.33872020621129 437.0368047714233 53.33872020621129 446.2237646314833 53.33872020621129C455.41072449154325 53.33872020621129 463.28526151445175 86.67542033509426 472.4722213745117 86.67542033509426C472.4722213745117 86.67542033509426 472.4722213745117 86.67542033509426 472.4722213745117 86.67542033509426 "
                                                                fill="none" fill-opacity="1" stroke="#009ef7"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="3" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskrkthv2xu)"
                                                                pathTo="M 0 120.01212046397723C 9.186959860059948 120.01212046397723 17.061496882968477 120.01212046397723 26.248456743028427 120.01212046397723C 35.43541660308838 120.01212046397723 43.309953625996904 86.67542033509426 52.496913486056854 86.67542033509426C 61.683873346116805 86.67542033509426 69.55841036902534 86.67542033509426 78.74537022908528 86.67542033509426C 87.93233008914522 86.67542033509426 95.80686711205377 53.33872020621129 104.99382697211371 53.33872020621129C 114.18078683217367 53.33872020621129 122.0553238550822 53.33872020621129 131.24228371514215 53.33872020621129C 140.4292435752021 53.33872020621129 148.30378059811062 86.67542033509426 157.49074045817056 86.67542033509426C 166.6777003182305 86.67542033509426 174.55223734113906 86.67542033509426 183.739197201199 86.67542033509426C 192.92615706125895 86.67542033509426 200.80069408416747 120.01212046397723 209.98765394422742 120.01212046397723C 219.17461380428736 120.01212046397723 227.04915082719592 120.01212046397723 236.23611068725586 120.01212046397723C 245.4230705473158 120.01212046397723 253.29760757022436 120.01212046397723 262.4845674302843 120.01212046397723C 271.6715272903442 120.01212046397723 279.54606431325277 120.01212046397723 288.7330241733127 120.01212046397723C 297.91998403337266 120.01212046397723 305.79452105628116 86.67542033509426 314.9814809163411 86.67542033509426C 324.1684407764011 86.67542033509426 332.0429777993096 86.67542033509426 341.22993765936957 86.67542033509426C 350.41689751942954 86.67542033509426 358.29143454233804 120.01212046397723 367.478394402398 120.01212046397723C 376.6653542624579 120.01212046397723 384.5398912853665 53.33872020621129 393.7268511454264 53.33872020621129C 402.91381100548637 53.33872020621129 410.78834802839486 53.33872020621129 419.97530788845484 53.33872020621129C 429.1622677485148 53.33872020621129 437.0368047714233 53.33872020621129 446.2237646314833 53.33872020621129C 455.41072449154325 53.33872020621129 463.28526151445175 86.67542033509426 472.4722213745117 86.67542033509426"
                                                                pathFrom="M -1 2420.244429356904L -1 2420.244429356904L 26.248456743028427 2420.244429356904L 52.496913486056854 2420.244429356904L 78.74537022908528 2420.244429356904L 104.99382697211371 2420.244429356904L 131.24228371514215 2420.244429356904L 157.49074045817056 2420.244429356904L 183.739197201199 2420.244429356904L 209.98765394422742 2420.244429356904L 236.23611068725586 2420.244429356904L 262.4845674302843 2420.244429356904L 288.7330241733127 2420.244429356904L 314.9814809163411 2420.244429356904L 341.22993765936957 2420.244429356904L 367.478394402398 2420.244429356904L 393.7268511454264 2420.244429356904L 419.97530788845484 2420.244429356904L 446.2237646314833 2420.244429356904L 472.4722213745117 2420.244429356904">
                                                            </path>
                                                            <g id="SvgjsG1176" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1278" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wk69sy3mt no-pointer-events"
                                                                        stroke="#009ef7" fill="#009ef7" fill-opacity="1"
                                                                        stroke-width="3" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1177" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1272" x1="0" y1="0" x2="0"
                                                        y2="220.02222085062664" stroke="#009ef7" stroke-dasharray="3"
                                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                        width="1" height="220.02222085062664" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <line id="SvgjsLine1273" x1="0" y1="0" x2="472.4722213745117" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1274" x1="0" y1="0" x2="472.4722213745117" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1275" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1276" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1277" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1279" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1280" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <g id="SvgjsG1243" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(26.02777862548828, 0)">
                                                    <g id="SvgjsG1244" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1245" font-family="inherit" x="20" y="31.6"
                                                            text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1246">$362</tspan>
                                                            <title>$362</title>
                                                        </text><text id="SvgjsText1247" font-family="inherit" x="20"
                                                            y="68.27037014177111" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1248">$357</tspan>
                                                            <title>$357</title>
                                                        </text><text id="SvgjsText1249" font-family="inherit" x="20"
                                                            y="104.94074028354223" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1250">$351</tspan>
                                                            <title>$351</title>
                                                        </text><text id="SvgjsText1251" font-family="inherit" x="20"
                                                            y="141.61111042531334" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1252">$346</tspan>
                                                            <title>$346</title>
                                                        </text><text id="SvgjsText1253" font-family="inherit" x="20"
                                                            y="178.28148056708446" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1254">$340</tspan>
                                                            <title>$340</title>
                                                        </text><text id="SvgjsText1255" font-family="inherit" x="20"
                                                            y="214.95185070885557" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1256">$335</tspan>
                                                            <title>$335</title>
                                                        </text><text id="SvgjsText1257" font-family="inherit" x="20"
                                                            y="251.6222208506267" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px" font-weight="400"
                                                            fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1258">$330</tspan>
                                                            <title>$330</title>
                                                        </text></g>
                                                </g>
                                                <rect id="SvgjsRect1271" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG1168" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(0, 158, 247);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Chart widget 4-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gy-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::Engage widget 1-->
                            <div class="card h-md-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column flex-center">
                                    <!--begin::Heading-->
                                    <div class="mb-2">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-gray-800 text-center lh-lg">Have you tried
                                            <br>new
                                            <span class="fw-boldest">eCommerce App ?</span>
                                        </h1>
                                        <!--end::Title-->
                                        <!--begin::Illustration-->
                                        <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12"
                                            style="background-image:url('assets/media/svg/illustrations/easy/2.svg')">
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Links-->
                                    <div class="text-center">
                                        <!--begin::Link-->
                                        <a class="btn btn-sm btn-primary me-2"
                                            href="../../demo13/dist/apps/ecommerce/sales/listing.html">View App</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a class="btn btn-sm btn-light"
                                            href="../../demo13/dist/apps/ecommerce/catalog/add-product.html">New
                                            Product</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 1-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!--begin::Table Widget 4-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Card header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">Product Orders</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">Avg. 57 orders per day</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Actions-->
                                    <div class="card-toolbar">
                                        <!--begin::Filters-->
                                        <div class="d-flex flex-stack flex-wrap gap-4">
                                            <!--begin::Destination-->
                                            <div class="d-flex align-items-center fw-bolder">
                                                <!--begin::Label-->
                                                <div class="text-muted fs-7 me-2">Cateogry</div>
                                                <!--end::Label-->
                                                <!--begin::Select-->
                                                <select
                                                    class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-dropdown-css-class="w-150px"
                                                    data-placeholder="Select an option"
                                                    data-select2-id="select2-data-10-b773" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option></option>
                                                    <option value="Show All" selected="selected"
                                                        data-select2-id="select2-data-12-l3am">Show All</option>
                                                    <option value="a">Category A</option>
                                                    <option value="b">Category A</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-11-3a2z"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-a41m-container"
                                                            aria-controls="select2-a41m-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-a41m-container" role="textbox"
                                                                aria-readonly="true" title="Show All">Show
                                                                All</span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Destination-->
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center fw-bolder">
                                                <!--begin::Label-->
                                                <div class="text-muted fs-7 me-2">Status</div>
                                                <!--end::Label-->
                                                <!--begin::Select-->
                                                <select
                                                    class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-dropdown-css-class="w-150px"
                                                    data-placeholder="Select an option"
                                                    data-kt-table-widget-4="filter_status"
                                                    data-select2-id="select2-data-13-ehri" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option></option>
                                                    <option value="Show All" selected="selected"
                                                        data-select2-id="select2-data-15-me9o">Show All</option>
                                                    <option value="Shipped">Shipped</option>
                                                    <option value="Confirmed">Confirmed</option>
                                                    <option value="Rejected">Rejected</option>
                                                    <option value="Pending">Pending</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-14-exg4"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-7lft-container"
                                                            aria-controls="select2-7lft-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-7lft-container" role="textbox"
                                                                aria-readonly="true" title="Show All">Show
                                                                All</span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Status-->
                                            <!--begin::Search-->
                                            <div class="position-relative my-1">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                <span
                                                    class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                            height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                            fill="black"></rect>
                                                        <path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <input type="text" data-kt-table-widget-4="search"
                                                    class="form-control w-150px fs-7 ps-12" placeholder="Search">
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Filters-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body">
                                    <!--begin::Table-->
                                    <div id="kt_table_widget_4_table_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="table-responsive">
                                            <table
                                                class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                                                id="kt_table_widget_4_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 100px;">Order ID</th>
                                                        <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                            colspan="1" style="width: 100px;">Created</th>
                                                        <th class="text-end min-w-125px sorting_disabled" rowspan="1"
                                                            colspan="1" style="width: 125px;">Customer</th>
                                                        <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                            colspan="1" style="width: 100px;">Total</th>
                                                        <th class="text-end min-w-100px sorting_disabled" rowspan="1"
                                                            colspan="1" style="width: 100px;">Profit</th>
                                                        <th class="text-end min-w-50px sorting_disabled" rowspan="1"
                                                            colspan="1" style="width: 93.0903px;">Status</th>
                                                        <th class="text-end sorting_disabled" rowspan="1" colspan="1"
                                                            style="width: 25px;"></th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-bolder text-gray-600">








                                                    <tr class="odd">
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">#XGT-346</a>
                                                        </td>
                                                        <td class="text-end" data-order="2021-12-31T14:04:00+05:00">2
                                                            years ago
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="" class="text-dark text-hover-primary">Emma
                                                                Smith</a>
                                                        </td>
                                                        <td class="text-end">$630.00</td>
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bolder">$86.70</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="11" y="18" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 11 18)" fill="black">
                                                                        </rect>
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">#YHD-047</a>
                                                        </td>
                                                        <td class="text-end" data-order="2021-12-31T13:12:00+05:00">2
                                                            years ago
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="" class="text-dark text-hover-primary">Melody
                                                                Macy</a>
                                                        </td>
                                                        <td class="text-end">$25.00</td>
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bolder">$4.20</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="11" y="18" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 11 18)" fill="black">
                                                                        </rect>
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">#SRR-678</a>
                                                        </td>
                                                        <td class="text-end" data-order="2021-12-31T10:04:00+05:00">2
                                                            years ago
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="" class="text-dark text-hover-primary">Max
                                                                Smith</a>
                                                        </td>
                                                        <td class="text-end">$1,630.00</td>
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bolder">$203.90</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="11" y="18" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 11 18)" fill="black">
                                                                        </rect>
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">#PXF-534</a>
                                                        </td>
                                                        <td class="text-end" data-order="2021-12-30T14:04:00+05:00">2
                                                            years ago
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="" class="text-dark text-hover-primary">Sean
                                                                Bean</a>
                                                        </td>
                                                        <td class="text-end">$119.00</td>
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bolder">$12.00</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="11" y="18" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 11 18)" fill="black">
                                                                        </rect>
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">#XGD-249</a>
                                                        </td>
                                                        <td class="text-end" data-order="2021-12-29T14:04:00+05:00">2
                                                            years ago
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="" class="text-dark text-hover-primary">Brian
                                                                Cox</a>
                                                        </td>
                                                        <td class="text-end">$660.00</td>
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bolder">$52.26</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="11" y="18" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 11 18)" fill="black">
                                                                        </rect>
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="even">
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">#SKP-035</a>
                                                        </td>
                                                        <td class="text-end" data-order="2021-12-28T14:04:00+05:00">2
                                                            years ago
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="" class="text-dark text-hover-primary">Brian
                                                                Cox</a>
                                                        </td>
                                                        <td class="text-end">$290.00</td>
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bolder">$29.00</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="11" y="18" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 11 18)" fill="black">
                                                                        </rect>
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd">
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">#SKP-567</a>
                                                        </td>
                                                        <td class="text-end" data-order="2021-12-25T14:04:00+05:00">2
                                                            years ago
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="" class="text-dark text-hover-primary">Mikaela
                                                                Collins</a>
                                                        </td>
                                                        <td class="text-end">$590.00</td>
                                                        <td class="text-end">
                                                            <span class="text-dark fw-bolder">$50.00</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                                data-kt-table-widget-4="expand_row">
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="11" y="18" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 11 18)" fill="black">
                                                                        </rect>
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                                <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                                        <rect x="6" y="11" width="12" height="2" rx="1"
                                                                            fill="black"></rect>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                            </div>
                                            <div
                                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Table Widget 4-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gy-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::List widget 5-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">Product Delivery</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">1M Products Shipped so far</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="../../demo13/dist/apps/ecommerce/sales/details.html"
                                            class="btn btn-sm btn-light">Order Details</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Scroll-->
                                    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                        <!--begin::Item-->
                                        <div
                                            class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="assets/media/stock/ecommerce/210.gif"
                                                        class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Elephant
                                                        1802</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                    rx="4" fill="black"></rect>
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                                Quick
                                                                Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Customer</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                    Reports</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo13/dist/apps/ecommerce/sales/details.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Jason
                                                        Bourne</a></span>
                                                <!--end::Name-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success">Delivered</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div
                                            class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="assets/media/stock/ecommerce/209.gif"
                                                        class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                    rx="4" fill="black"></rect>
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                                Quick
                                                                Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Customer</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                    Reports</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo13/dist/apps/ecommerce/sales/details.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Marie
                                                        Durant</a></span>
                                                <!--end::Name-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light-primary">Shipping</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div
                                            class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="assets/media/stock/ecommerce/214.gif"
                                                        class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Yellow
                                                        Stone</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                    rx="4" fill="black"></rect>
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                                Quick
                                                                Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Customer</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                    Reports</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo13/dist/apps/ecommerce/sales/details.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Dan
                                                        Wilson</a></span>
                                                <!--end::Name-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger">Confirmed</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div
                                            class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="assets/media/stock/ecommerce/211.gif"
                                                        class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Elephant
                                                        1802</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                    rx="4" fill="black"></rect>
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                                Quick
                                                                Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Customer</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                    Reports</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo13/dist/apps/ecommerce/sales/details.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Lebron
                                                        Wayde</a></span>
                                                <!--end::Name-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success">Delivered</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div
                                            class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="assets/media/stock/ecommerce/215.gif"
                                                        class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">RiseUP</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                    rx="4" fill="black"></rect>
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                                Quick
                                                                Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Customer</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                    Reports</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo13/dist/apps/ecommerce/sales/details.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Ana
                                                        Simmons</a></span>
                                                <!--end::Name-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light-primary">Shipping</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div
                                            class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Wrapper-->
                                                <div class="me-3">
                                                    <!--begin::Icon-->
                                                    <img src="assets/media/stock/ecommerce/192.gif"
                                                        class="w-50px ms-n1 me-1" alt="">
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Yellow
                                                        Stone</a>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                    rx="4" fill="black"></rect>
                                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                                    fill="black"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
                                                                Quick
                                                                Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Customer</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                    Reports</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Customer-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Name-->
                                                <span class="text-gray-400 fw-bolder">To:
                                                    <a href="../../demo13/dist/apps/ecommerce/sales/details.html"
                                                        class="text-gray-800 text-hover-primary fw-bolder">Kevin
                                                        Leonard</a></span>
                                                <!--end::Name-->
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger">Confirmed</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Customer-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List widget 5-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <!--begin::Table Widget 5-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Card header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder text-dark">Stock Report</span>
                                        <span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the
                                            Stock</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Actions-->
                                    <div class="card-toolbar">
                                        <!--begin::Filters-->
                                        <div class="d-flex flex-stack flex-wrap gap-4">
                                            <!--begin::Destination-->
                                            <div class="d-flex align-items-center fw-bolder">
                                                <!--begin::Label-->
                                                <div class="text-muted fs-7 me-2">Cateogry</div>
                                                <!--end::Label-->
                                                <!--begin::Select-->
                                                <select
                                                    class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-dropdown-css-class="w-150px"
                                                    data-placeholder="Select an option"
                                                    data-select2-id="select2-data-16-r1ck" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option></option>
                                                    <option value="Show All" selected="selected"
                                                        data-select2-id="select2-data-18-wdcu">Show All</option>
                                                    <option value="a">Category A</option>
                                                    <option value="b">Category B</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-17-argk"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-nxjc-container"
                                                            aria-controls="select2-nxjc-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-nxjc-container" role="textbox"
                                                                aria-readonly="true" title="Show All">Show
                                                                All</span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Destination-->
                                            <!--begin::Status-->
                                            <div class="d-flex align-items-center fw-bolder">
                                                <!--begin::Label-->
                                                <div class="text-muted fs-7 me-2">Status</div>
                                                <!--end::Label-->
                                                <!--begin::Select-->
                                                <select
                                                    class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto select2-hidden-accessible"
                                                    data-control="select2" data-hide-search="true"
                                                    data-dropdown-css-class="w-150px"
                                                    data-placeholder="Select an option"
                                                    data-kt-table-widget-5="filter_status"
                                                    data-select2-id="select2-data-19-e0fl" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option></option>
                                                    <option value="Show All" selected="selected"
                                                        data-select2-id="select2-data-21-k6t5">Show All</option>
                                                    <option value="In Stock">In Stock</option>
                                                    <option value="Out of Stock">Out of Stock</option>
                                                    <option value="Low Stock">Low Stock</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-20-vyng"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-disabled="false"
                                                            aria-labelledby="select2-b9rg-container"
                                                            aria-controls="select2-b9rg-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-b9rg-container" role="textbox"
                                                                aria-readonly="true" title="Show All">Show
                                                                All</span><span class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Status-->
                                            <!--begin::Search-->
                                            <a href="../../demo13/dist/apps/ecommerce/catalog/products.html"
                                                class="btn btn-light btn-sm">View Stock</a>
                                            <!--end::Search-->
                                        </div>
                                        <!--begin::Filters-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body">
                                    <!--begin::Table-->
                                    <div id="kt_table_widget_5_table_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="table-responsive">
                                            <table
                                                class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                                                id="kt_table_widget_5_table">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr
                                                        class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                        <th class="min-w-100px sorting" tabindex="0"
                                                            aria-controls="kt_table_widget_5_table" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Item: activate to sort column ascending"
                                                            style="width: 125.556px;">Item</th>
                                                        <th class="text-end pe-3 min-w-100px sorting_disabled"
                                                            rowspan="1" colspan="1" aria-label="Product ID"
                                                            style="width: 100px;">Product ID
                                                        </th>
                                                        <th class="text-end pe-3 min-w-150px sorting" tabindex="0"
                                                            aria-controls="kt_table_widget_5_table" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Date Added: activate to sort column ascending"
                                                            style="width: 150px;">Date Added</th>
                                                        <th class="text-end pe-3 min-w-100px sorting" tabindex="0"
                                                            aria-controls="kt_table_widget_5_table" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Price: activate to sort column ascending"
                                                            style="width: 100px;">Price</th>
                                                        <th class="text-end pe-3 min-w-50px sorting" tabindex="0"
                                                            aria-controls="kt_table_widget_5_table" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Status: activate to sort column ascending"
                                                            style="width: 101.458px;">Status</th>
                                                        <th class="text-end pe-0 min-w-25px sorting" tabindex="0"
                                                            aria-controls="kt_table_widget_5_table" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Qty: activate to sort column ascending"
                                                            style="width: 48.6111px;">Qty</th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-bolder text-gray-600">







                                                    <tr class="odd">
                                                        <!--begin::Item-->
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">Macbook Air M1</a>
                                                        </td>
                                                        <!--end::Item-->
                                                        <!--begin::Product ID-->
                                                        <td class="text-end">#XGY-356</td>
                                                        <!--end::Product ID-->
                                                        <!--begin::Date added-->
                                                        <td class="text-end" data-order="2021-03-10T00:00:00+05:00">Mar
                                                            10, 2021
                                                        </td>
                                                        <!--end::Date added-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">$1,230</td>
                                                        <!--end::Price-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                                Stock</span>
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Qty-->
                                                        <td class="text-end" data-order="58">
                                                            <span class="text-dark fw-bolder">58 PCS</span>
                                                        </td>
                                                        <!--end::Qty-->
                                                    </tr>
                                                    <tr class="even">
                                                        <!--begin::Item-->
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">Surface Laptop
                                                                4</a>
                                                        </td>
                                                        <!--end::Item-->
                                                        <!--begin::Product ID-->
                                                        <td class="text-end">#YHD-047</td>
                                                        <!--end::Product ID-->
                                                        <!--begin::Date added-->
                                                        <td class="text-end" data-order="2021-10-25T00:00:00+05:00">Oct
                                                            25, 2021
                                                        </td>
                                                        <!--end::Date added-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">$1,060</td>
                                                        <!--end::Price-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of
                                                                Stock</span>
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Qty-->
                                                        <td class="text-end" data-order="0">
                                                            <span class="text-dark fw-bolder">0 PCS</span>
                                                        </td>
                                                        <!--end::Qty-->
                                                    </tr>
                                                    <tr class="odd">
                                                        <!--begin::Item-->
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">Logitech MX 250</a>
                                                        </td>
                                                        <!--end::Item-->
                                                        <!--begin::Product ID-->
                                                        <td class="text-end">#SRR-678</td>
                                                        <!--end::Product ID-->
                                                        <!--begin::Date added-->
                                                        <td class="text-end" data-order="2021-10-25T00:00:00+05:00">Oct
                                                            25, 2021
                                                        </td>
                                                        <!--end::Date added-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">$64</td>
                                                        <!--end::Price-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                                Stock</span>
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Qty-->
                                                        <td class="text-end" data-order="290">
                                                            <span class="text-dark fw-bolder">290 PCS</span>
                                                        </td>
                                                        <!--end::Qty-->
                                                    </tr>
                                                    <tr class="even">
                                                        <!--begin::Item-->
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">AudioEngine HD3</a>
                                                        </td>
                                                        <!--end::Item-->
                                                        <!--begin::Product ID-->
                                                        <td class="text-end">#PXF-578</td>
                                                        <!--end::Product ID-->
                                                        <!--begin::Date added-->
                                                        <td class="text-end" data-order="2021-10-25T00:00:00+05:00">Oct
                                                            25, 2021
                                                        </td>
                                                        <!--end::Date added-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">$1,060</td>
                                                        <!--end::Price-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of
                                                                Stock</span>
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Qty-->
                                                        <td class="text-end" data-order="46">
                                                            <span class="text-dark fw-bolder">46 PCS</span>
                                                        </td>
                                                        <!--end::Qty-->
                                                    </tr>
                                                    <tr class="odd">
                                                        <!--begin::Item-->
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">HP Hyper LTR</a>
                                                        </td>
                                                        <!--end::Item-->
                                                        <!--begin::Product ID-->
                                                        <td class="text-end">#PXF-778</td>
                                                        <!--end::Product ID-->
                                                        <!--begin::Date added-->
                                                        <td class="text-end" data-order="2021-04-15T00:00:00+05:00">Apr
                                                            15, 2021
                                                        </td>
                                                        <!--end::Date added-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">$4500</td>
                                                        <!--end::Price-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                                Stock</span>
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Qty-->
                                                        <td class="text-end" data-order="78">
                                                            <span class="text-dark fw-bolder">78 PCS</span>
                                                        </td>
                                                        <!--end::Qty-->
                                                    </tr>
                                                    <tr class="even">
                                                        <!--begin::Item-->
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">Dell 32
                                                                UltraSharp</a>
                                                        </td>
                                                        <!--end::Item-->
                                                        <!--begin::Product ID-->
                                                        <td class="text-end">#XGY-356</td>
                                                        <!--end::Product ID-->
                                                        <!--begin::Date added-->
                                                        <td class="text-end" data-order="2021-04-15T00:00:00+05:00">Apr
                                                            15, 2021
                                                        </td>
                                                        <!--end::Date added-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">$1,060</td>
                                                        <!--end::Price-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span class="badge py-3 px-4 fs-7 badge-light-warning">Low
                                                                Stock</span>
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Qty-->
                                                        <td class="text-end" data-order="8">
                                                            <span class="text-dark fw-bolder">8 PCS</span>
                                                        </td>
                                                        <!--end::Qty-->
                                                    </tr>
                                                    <tr class="odd">
                                                        <!--begin::Item-->
                                                        <td>
                                                            <a href="../../demo13/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-dark text-hover-primary">Google Pixel 6
                                                                Pro</a>
                                                        </td>
                                                        <!--end::Item-->
                                                        <!--begin::Product ID-->
                                                        <td class="text-end">#XVR-425</td>
                                                        <!--end::Product ID-->
                                                        <!--begin::Date added-->
                                                        <td class="text-end" data-order="2021-07-25T00:00:00+05:00">Jul
                                                            25, 2021
                                                        </td>
                                                        <!--end::Date added-->
                                                        <!--begin::Price-->
                                                        <td class="text-end">$1,060</td>
                                                        <!--end::Price-->
                                                        <!--begin::Status-->
                                                        <td class="text-end">
                                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                                Stock</span>
                                                        </td>
                                                        <!--end::Status-->
                                                        <!--begin::Qty-->
                                                        <td class="text-end" data-order="124">
                                                            <span class="text-dark fw-bolder">124 PCS</span>
                                                        </td>
                                                        <!--end::Qty-->
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                            </div>
                                            <div
                                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Table Widget 5-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-layout.footer />
    </x-slot>
</x-layout.master>