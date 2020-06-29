<div class="content  d-flex flex-column flex-column-fluid" id="content">
    <!--begin::Subheader-->

    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <div class="dropdown">
                    <button id="options" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">New</a>
                        <a class="dropdown-item" href="#">Publish</a>
                    </div>
                </div>
                <!--end::Title-->
                <!--begin::Search Form-->

            </div>
        </div>
        <div class="m-portlet__head-tools">
            <div class="" id="subheader_search" style="max-width: 90%">
                <form class="">
                    <div class="input-group input-group-sm input-group-solid" style="max-width: 90%">
                        <input type="text" class="form-control" id="subheader_search_form" placeholder="Search...">
                        <div class="input-group-append" onclick="getAllByNama()">
                            <span class="input-group-text">
                                <span class="svg-icon">
                                    <i class="fa fa-search" ></i>
                                    <!--end::Svg Icon--></span>
                                <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                            </span>
                        </div>
                    </div>
                </form>
                <!--end::Search Form-->
            </div>
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Card-->
            <?php if (count($data->data) != 0) { ?>
                <?php foreach ($data->data as $val) { ?>
                    <div class="card card-custom gutter-b" style="margin-bottom: 31px;">
                        <div class="card-body">
                            <!--begin::Top-->
                            <div class="d-flex">
                                <!--begin: Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                        <!--begin::User-->
                                        <div class="mr-3">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                                <?= $val->produknama ?><i class="flaticon2-correct text-success icon-md ml-2"></i>
                                            </a>
                                            <!--end::Name-->

                                            <!--begin::Contacts-->
                                            <div class="d-flex flex-wrap my-2">
                                                <a href="#" class="text-muted text-hover-primary font-weight-normal mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                        <i class="fa fa-user-alt"></i>
                                                        <!--end::Svg Icon--></span> <?= $val->usernamalengkap ?>
                                                </a>
                                                <a href="#" class="text-muted text-hover-primary font-weight-normal mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                        <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Lock.svg-->
                                                        <i class="fas fa-calendar-alt"></i>
                                                        <!--end::Svg Icon-->
                                                    </span> <?= $val->produkwaktupengerjaan ?>
                                                </a>
                                                <a href="#" class="text-muted text-hover-primary font-weight-normal">
                                                    <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                        <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg--><i class="fas fa-location-arrow"></i>
                                                        <!--end::Svg Icon--></span> <?= $val->produkalamat . ', ' . $val->nama_kecamatan . ', ' . $val->nama_kabkota . ', ' . $val->nama_propinsi ?>
                                                </a>
                                            </div>
                                            <!--end::Contacts-->
                                        </div>
                                        <!--begin::User-->

                                        <!--begin::Actions-->
                                        <div class="my-lg-0 my-1">
                                            <span class="m-switch m-switch--icon m-switch--success">
                                                <label>
                                                    <?php if ($val->produkaktif == 0) { ?>
                                                        <input type="checkbox" name="status" id="status_<?= $val->produkid ?>" onclick="updateStatus(<?= $val->produkid ?>)" value="<?= $val->produkaktif ?>">
                                                    <?php } else { ?>
                                                        <input type="checkbox" name="status" id="status_<?= $val->produkid ?>" onclick="updateStatus(<?= $val->produkid ?>)" checked value="<?= $val->produkaktif ?>">
                                                    <?php } ?>
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <!--begin::Description-->
                                        <div class="font-weight-normal text-dark-50 py-2 py-lg-2 mr-5">
                                            <?= $val->produkdeskripsi ?>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Top-->

                            <!--begin::Separator-->
                            <div class="separator separator-solid my-7" style="margin-bottom: 20px; margin-top: 20px;"></div>
                            <!--end::Separator-->

                            <!--begin::Bottom-->
                            <div class="d-flex align-items-center flex-wrap">
                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    <span class="mr-4">
                                        <i class="fas fa-home icon-2x text-muted font-weight-bold"></i>
                                    </span>
                                    <div class="d-flex flex-column text-dark-75">
                                        <span class="m-topbar__userpic">
                                            <img src="<?= $val->produkthumbnail ?>" class="m--img-roundedm--marginless" style="width: 80px; height: 80px;">
                                        </span>
                                    </div>
                                </div>
                                <!--end: Item-->

                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    <span class="mr-4">
                                        <i class="fas fa-home icon-2x text-muted font-weight-bold"></i>
                                    </span>
                                    <div class="d-flex flex-column text-dark-75">
                                        <span class="m-topbar__userpic">
                                            <img src="<?= $val->produkfoto1 ?>" class="m--img-roundedm--marginless" style="width: 80px; height: 80px;">
                                        </span>
                                    </div>
                                </div>
                                <!--end: Item-->
                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    <span class="mr-4">
                                        <i class="fas fa-home icon-2x text-muted font-weight-bold"></i>
                                    </span>
                                    <div class="d-flex flex-column text-dark-75">
                                        <span class="m-topbar__userpic">
                                            <img src="<?= $val->produkfoto2 ?>" class="m--img-roundedm--marginless" style="width: 80px; height: 80px;">
                                        </span>
                                    </div>
                                </div>
                                <!--end: Item-->
                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    <span class="mr-4">
                                        <i class="fas fa-home icon-2x text-muted font-weight-bold"></i>
                                    </span>
                                    <div class="d-flex flex-column text-dark-75">
                                        <span class="m-topbar__userpic">
                                            <img src="<?= $val->produkfoto3 ?>" class="m--img-roundedm--marginless" style="width: 80px; height: 80px;">
                                        </span>
                                    </div>
                                </div>
                                <!--end: Item-->
                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    <span class="mr-4">
                                        <i class="fas fa-home icon-2x text-muted font-weight-bold"></i>
                                    </span>
                                    <div class="d-flex flex-column text-dark-75">
                                        <span class="m-topbar__userpic">
                                            <img src="<?= $val->produkfoto4 ?>" class="m--img-roundedm--marginless" style="width: 80px; height: 80px;">
                                        </span>
                                    </div>
                                </div>
                                <!--end: Item-->
                            </div>
                            <!--end::Bottom-->

                        </div>
                    </div>
                    <!--end::Card-->

                <?php } ?>
            <?php } else { ?>
                <center>
                    <Label>
                        Tidak ada data
                    </Label>
                </center>
            <?php } ?>
            <!--begin::Pagination-->
            <div class="card card-custom">
                <div class="card-body py-7">
                    <!--begin::Pagination-->
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="d-flex flex-wrap mr-3">
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-back icon-xs"></i></a>
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-back icon-xs"></i></a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">1</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">2</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">4</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">5</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">6</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">7</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">8</a>
                            <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">9</a>
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-arrow-next icon-xs"></i></a>
                            <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1"><i class="ki ki-bold-double-arrow-next icon-xs"></i></a>
                        </div>
                        <div class="d-flex align-items-center">
                            <select class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="text-muted">Displaying <?= $data->pageSize ?> of <?= $data->countRow ?> records</span>
                        </div>
                    </div>
                    <!--end:: Pagination-->
                </div>
            </div>
            <!--end::Pagination-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>