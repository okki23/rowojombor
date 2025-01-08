                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item">User </li>
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
                                                    <th>Username</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>Status</th> 
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="single-item">
                                                    <td>adi29</td>
                                                    <td>Mr.Adi</td>
                                                    <td>Active</td> 
                                                    <td style="text-align: center;">
                                                        <div class="hstack gap-2 justify-content-end">                                                          
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
                                                    <h2 class="fs-16 fw-bold">Form User</h2>
                                                    <p class="text-muted">Lengkapi isian pada Form User dibawah ini.</p>
                                                </div>
                                                <fieldset>    
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Username</label>
                                                        <input type="text" class="form-control" id="nip" name="nip">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Password </label>
                                                        <input type="password" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Nama Pegawai </label>
                                                        <select class="form-select" id="id_user" data-placeholder="Choose one thing">
                                                            <option>--Pilih--</option>
                                                            <option>Mr. Adi</option>
                                                            <option>Mr. Novan</option>
                                                            <option>Mrs. Anya</option>
                                                        </select>
                                                    </div>       
                                                    <div class="mb-4">
                                                        <label class="form-label">Status </label>
                                                        <select class="form-select" id="status" data-placeholder="Choose one thing">
                                                            <option>--Pilih--</option>
                                                            <option>Active</option>
                                                            <option>Non Active</option> 
                                                        </select>
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
                    $('#id_user').select2({
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