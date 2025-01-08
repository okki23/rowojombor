                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Ship Penjualan (Konsumen) </li>
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
                                                    <th>Ship To</th>
                                                    <th>Kode</th>
                                                    <th>Customer</th> 
                                                    <th>Tujuan</th> 
                                                    <th>PIC</th> 
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="single-item">
                                                    <td>Semarang</td>
                                                    <td>2348243</td>
                                                    <td>PT. ADI SUMO</td> 
                                                    <td>Bali</td> 
                                                    <td>Mr. Adi</td> 
                                                    <td style="text-align: center;">
                                                        <div class="hstack gap-2 justify-content-end">                                                          
                                                            <a href="javascript:void(0);" class="avatar-text avatar-md details_ship">
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
                                                    <h2 class="fs-16 fw-bold">Form Ship Jual (Konsumen)</h2>
                                                    <p class="text-muted">Lengkapi isian pada Form Ship Jual dibawah ini.</p>
                                                </div>
                                                <fieldset>    
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Ship To </label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Kode </label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Nama Customer </label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">NPWP</label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>                                                                                     
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Alamat Serah</label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Tujuan </label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Jarak</label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">PIC </label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Kontak </label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
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
                                    <h2 class="fs-16 fw-bold">Detail Ship Jual (Konsumen)</h2>
                                </div> 
                            </div> 
                            <div class="row">                               
                                <div class="col-lg-12">
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">Ship To:</div>
                                        <div class="col-sm-6 fw-semibold">82734834234</div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">Kode:</div>
                                        <div class="col-sm-6 fw-semibold">2024-03-03</div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">Nama Customer:</div>
                                        <div class="col-sm-6 fw-semibold">9234324</div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">Alamat:</div>
                                        <div class="col-sm-6 fw-semibold">785243324</div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">NPWP :</div>
                                        <div class="col-sm-6 fw-semibold">8732743 </div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">Alamat Serah :</div>
                                        <div class="col-sm-6 fw-semibold">Bekasi </div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">Tujuan :</div>
                                        <div class="col-sm-6 fw-semibold">Bekasi </div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">Jarak :</div>
                                        <div class="col-sm-6 fw-semibold">Bekasi </div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">PIC :</div>
                                        <div class="col-sm-6 fw-semibold">Bekasi </div>
                                    </div>
                                    <div class="row g-0 mb-4">
                                        <div class="col-sm-6 text-muted">Alamat Serah :</div>
                                        <div class="col-sm-6 fw-semibold">Bekasi </div>
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

                    $(".details_ship").on("click", function() {
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
                    $('#ship_to').select2({
                        theme: "bootstrap-5",
                        dropdownParent: $('#exampleModal'),
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                    });
                    $('#status').select2({
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