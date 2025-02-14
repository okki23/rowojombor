                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Purchase Order (PO) </li>
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
                                    <a href="javascript::void(0);;" id="addData" class="btn btn-primary"> <i class="bi bi-clipboard-plus"></i> &nbsp; Add New</a>
                                    <br>
                                </div>  
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="projectList">
                                            <thead>
                                                <tr>
                                                    <th>PO Number</th>
                                                    <th>SO Number</th>
                                                    <th>PO Date</th>
                                                    <th>Konsumen</th>
                                                    <th>PPN 11 %</th>
                                                    <th>PBBKB</th>
                                                    <th>PPH</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="single-item">
                                                    <td>832384932</td>
                                                    <td>728242433</td>
                                                    <td>2024-09-03</td>
                                                    <td>PT.SIMPANG MAJU</td>
                                                    <td>Yes</td>
                                                    <td>Yes</td>
                                                    <td>Yes</td> 
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
                                                    <h2 class="fs-16 fw-bold">Form PO</h2>
                                                    <p class="text-muted">Lengkapi isian pada form PO dibawah ini.</p>
                                                </div>
                                                <fieldset>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">PO Number <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="po_number" name="po_number">
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">PO Date <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="po_date" name="po_date">
                                                    </div>

                                                    <div class="mb-4">
                                                        <label class="form-label">SO Number </label>
                                                        <select class="form-select" id="id_konsumen" data-placeholder="Choose one thing">
                                                            <option>--Pilih--</option>
                                                            <option>2743244</option>
                                                            <option>7435843</option>
                                                            <option>8345435</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label class="form-label">Konsumen </label>
                                                        <select class="form-select" id="id_konsumen" data-placeholder="Choose one thing">
                                                            <option>--Pilih--</option>
                                                            <option>PT.SIMPANG MAJU</option>
                                                            <option>PT.KHARISMA</option>
                                                            <option>PT.INDOMOBIL</option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </fieldset>
                                        </form>
                                        <div class="col-lg-4">
                                            <a href="javascript::void(0);;" id="addDetail" class="btn btn-primary"> &nbsp; Add Detail Data</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Keterangan</th>
                                                    <th>Qty</th>
                                                    <th>UOM</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Total</th> 
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Solar HSD</td>
                                                    <td>10.000</td>
                                                    <td>Liter</td>
                                                    <td>10.000</td> 
                                                    <td>100.000.000</td>
                                                    <td>  
                                                        <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                            <i class="feather feather-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

                <!-- Modal B -->
                <div class="modal fade" id="exampleModalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form id="project-details" novalidate="novalidate">
                                    <fieldset>
                                        <div class="mb-5">
                                            <h2 class="fs-16 fw-bold">Form Detail</h2>
                                            <p class="text-muted">Lengkapi isian pada form PO Detail dibawah ini.</p>
                                        </div>
                                        <fieldset>
                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">Keterangan<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="description" name="description">
                                            </div>

                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">QTY <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="qty" name="qty">
                                            </div>

                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">UOM <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="uom" name="uom">
                                            </div>
                                           
                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">Harga Satuan <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="unit_price" name="unit_price">
                                            </div>

                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">Total <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="qty" name="qty">
                                            </div>
                                        </fieldset>
                                    </fieldset>
                                </form>
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
                                <div class="mb-5">
                                            <h2 class="fs-16 fw-bold">Detail Purchase Order (PO)</h2>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">PO Number:</div>
                                    <div class="col-sm-6 fw-semibold">82734834234</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">PO Date:</div>
                                    <div class="col-sm-6 fw-semibold">2024-03-03</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Term Of Payment:</div>
                                    <div class="col-sm-6 fw-semibold">Cash</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Ship To:</div>
                                    <div class="col-sm-6 fw-semibold">PT.SUMO ADI</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">TO :</div>
                                    <div class="col-sm-6 fw-semibold">PT.PERTAMINA PATRA NIAGA </div>
                                </div>
 
                                <hr>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>UOM</th>
                                            <th>Unit Price</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SOLAR HSD</td>
                                            <td>10.000</td>
                                            <td>Liter</td>
                                            <td>15.000</td>
                                            <td>15.000.000</td> 
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered" style="text-align: right;"> 
                                    <tr>
                                        <td colspan="4">DPP</td>
                                        <td> Rp 122,150,000 </td> 
                                    </tr>
                                    <tr>
                                        <td colspan="4">PPN 12%</td>
                                        <td> Rp 13,436,500 </td> 
                                    </tr>
                                    <tr>
                                        <td colspan="4">PBBKB 7.5%</td>
                                        <td> Rp 9,176,250  </td> 
                                    </tr>
                                    <tr>
                                        <td colspan="4">PPH 20 0.3%</td>
                                        <td> Rp 367,050 </td> 
                                    </tr>
                                    <tr>
                                        <td colspan="4">Rounding</td>
                                        <td> Rp 200 </td> 
                                    </tr>
                                    <tr style="font-weight: 900;">
                                        <td colspan="4">TOTAL</td>
                                        <td> Rp. 15.000.000 </td> 
                                    </tr>
                                </table>

                                <br>
                                <hr>
                                <b> Prepared By : </b> <br>
                                <b> Approved By : </b>
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
                    $('#id_konsumen').select2({
                        theme: "bootstrap-5",
                        dropdownParent: $('#exampleModal'),
                        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                    });
                    var po_date = document.getElementById("po_date");
                    new Datepicker(po_date, {
                        clearBtn: !0,
                        allowOneSidedRange: !0,
                        format: 'yyyy-mm-dd'
                    });
                </script>