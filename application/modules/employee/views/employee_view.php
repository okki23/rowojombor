                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Employee </li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <div class="d-md-none d-flex align-items-center">
                            <a href="javascript::void(0);" class="page-header-right-open-toggle">
                                <i class="feather-align-right fs-20"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card stretch stretch-full">

                                <div class="col-lg-2">
                                    <br>
                                    <a href="javascript::void(0);;" id="addData" class="btn btn-primary"> <i class="bi bi-clipboard-plus"></i> &nbsp;  Add New</a>
                                    <br>
                                </div>

                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="projectList">
                                            <thead>
                                                <tr>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th>Telp</th> 
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="single-item">
                                                    <td>9234234</td>
                                                    <td>Mr. Andi</td>
                                                    <td>adni@mail.com</td>
                                                    <td>Semarang</td>
                                                    <td>90823432</td> 
                                                    <td style="text-align: center;">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <a href="javascript:void(0);" class="avatar-text avatar-md details_so">
                                                                <i class="feather feather-send"></i>
                                                            </a>
                                                            <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                                <i class="feather feather-edit"></i>
                                                            </a>
                                                            <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                                <i class="feather feather-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal A-->
                <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="project-details" novalidate="novalidate">
                                            <fieldset>
                                                <div class="mb-5">
                                                    <h2 class="fs-16 fw-bold">Form Employee</h2>
                                                    <p class="text-muted">Lengkapi isian pada Form Employee dibawah ini.</p>
                                                </div>
                                                <fieldset>   
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">NIP</label>
                                                        <input type="text" class="form-control" id="nip" name="nip">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Nama </label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Tempat Lahir </label>
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Tanggal Lahir</label>
                                                        <input type="text" class="form-control" id="shipment_date" name="shipment_date">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Email </label>
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Alamat </label>
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Telp </label>
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                                    </div>                                                     
                                                </fieldset>
                                            </fieldset>
                                        </form>
                                        
                                    </div> 
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
 

                <!-- Modal C-->
                <div class="modal fade" id="exampleModalRev" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                            
                            <div class="row"> 
                                <div class="mb-5">
                                    <h2 class="fs-16 fw-bold">Detail Employee</h2>
                                </div> 
                            </div> 
                            <div class="row">                               
                                <div class="col-lg-12">
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">NIP:</div>
                                    <div class="col-sm-6 fw-semibold">82734834234</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Nama:</div>
                                    <div class="col-sm-6 fw-semibold">Mr. Adi</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Tempat Lahir:</div>
                                    <div class="col-sm-6 fw-semibold">Jakarta</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Tanggal Lahir:</div>
                                    <div class="col-sm-6 fw-semibold">1990-09-10</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Email :</div>
                                    <div class="col-sm-6 fw-semibold">adi@mail.com </div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Alamat :</div>
                                    <div class="col-sm-6 fw-semibold">Semarang </div>
                                </div> 
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Telp :</div>
                                    <div class="col-sm-6 fw-semibold">087886273234 </div>
                                </div> 
 
                                </div>
                            </div>                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $("#addData").on("click", function() {
                        $('#exampleModal').appendTo("body").modal('show');
                    });

                    $("#addDetail").on("click", function() {
                        $('#exampleModalDetail').appendTo("body").modal('show');
                    });

                    $(".details_so").on("click", function() {
                        $('#exampleModalRev').appendTo("body").modal('show');
                    });


                    "use strict";
                    $(document).ready(function() {
                        $("#projectList").DataTable({
                            pageLength: 10,
                            lengthMenu: [10, 20, 50, 100, 200, 500]
                        });
                        $('#select-field').select2({
                            theme: 'bootstrap-5'
                        });
                    });
                    $('#sales_person').select2({
                        theme: "bootstrap-5",
                        dropdownParent: $('#exampleModal'),
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                    });
                    $('#terms').select2({
                        theme: "bootstrap-5",
                        dropdownParent: $('#exampleModal'),
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                    });
                    var shipment_date = document.getElementById("shipment_date");
                    new Datepicker(shipment_date, {
                        clearBtn: !0,
                        allowOneSidedRange: !0,
                        format: 'yyyy-mm-dd'
                    });
                </script>