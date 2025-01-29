                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Sales Order (SO) </li>
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
                                            <thead st>
                                                <tr>
                                                    <th>SO Number</th>
                                                    <th>PO Date</th>
                                                    <th>DO / LO</th>
                                                    <th>Qty</th>
                                                    <th>Depot</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="single-item">
                                                    <td>223452352432</td>
                                                    <td>23 Januari 2025</td>
                                                    <td>7234234234</td>
                                                    <td>5000</td>
                                                    <td>Sampit</td> 
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
                                                    <h2 class="fs-16 fw-bold">Form SO</h2>
                                                    <p class="text-muted">Lengkapi isian pada form SO dibawah ini.</p>
                                                </div>
                                                <fieldset> 
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">SO Number <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="po_number" name="po_number">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">SO Date</label>
                                                        <input type="text" class="form-control" id="shipment_date" name="shipment_date">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">DO / LO <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="po_number" name="po_number">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Qty <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="po_number" name="po_number">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="projectName" class="form-label">Depot </label>
                                                        <select class="form-select" id="sales_person">
                                                            <option>--Pilih--</option>
                                                            <option>Sampit</option>
                                                            <option>Kalteng</option>
                                                            <option>Kaltim</option>
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

                <!-- Modal B -->
                <div class="modal fade" id="exampleModalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body"> 
                                <form id="project-details" novalidate="novalidate">
                                    <fieldset>
                                        <div class="mb-5">
                                            <h2 class="fs-16 fw-bold">Form Detail</h2>
                                            <p class="text-muted">Lengkapi isian pada form SO Detail dibawah ini.</p>
                                        </div>
                                        <fieldset>
                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">Description<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="description" name="description">
                                            </div>

                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">UOM <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="uom" name="uom">
                                            </div>

                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">QTY <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="qty" name="qty">
                                            </div>

                                            <div class="mb-4">
                                                <label for="projectName" class="form-label">Unit Price <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="unit_price" name="unit_price">
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
                            
                            <div class="row"> 
                                <div class="mb-5">
                                    <h2 class="fs-16 fw-bold">Detail Sales Order (SO)</h2>
                                </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div class="card stretch stretch-full">
                                                    <div class="card-body"> 
                                                    <p class="fs-11 fw-semibold text-uppercase text-muted">Bill To : </p>
                                                        <h4>PT. ROWO JOMBOR</h4>
                                                            <address>
                                                                JL. HM ARSYA NO.5 RT.051/008
                                                                MENTAWA BARU HILIR
                                                                MENTAWA BARU, KETAPANG
                                                                KOTAWARINGIN TIMUR , 74323
                                                            </address>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div class="card stretch stretch-full">
                                                <div class="card-body"> 
                                                    <p class="fs-11 fw-semibold text-uppercase text-muted">Ship To : </p>
                                                        <h4>PT. SAWIT MAS PARENGGEAN</h4>
                                                            <address>
                                                            JLN. LESA RT.01/01 PARENGGEAN
                                                            KOTAWARINGIN TIMUR, 00000
                                                            </address>
                                                    </div>
                                                </div>
                                            </div>                                         
                                         
                            </div>
                            <div class="row">                               
                                <div class="col-lg-12">
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">SO Number:</div>
                                    <div class="col-sm-6 fw-semibold">82734834234</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">SO Date:</div>
                                    <div class="col-sm-6 fw-semibold">2024-03-03</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Customer:</div>
                                    <div class="col-sm-6 fw-semibold">9234324</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Document:</div>
                                    <div class="col-sm-6 fw-semibold">785243324</div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">DO Number :</div>
                                    <div class="col-sm-6 fw-semibold">8732743 </div>
                                </div>
                                <div class="row g-0 mb-4">
                                    <div class="col-sm-6 text-muted">Shipment :</div>
                                    <div class="col-sm-6 fw-semibold">824242 </div>
                                </div>
                                
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Sales Person</th>
                                        <th>PO</th>
                                        <th>Shipment Date</th>
                                        <th>Ship Via</th>
                                        <th>F.O.B</th>
                                        <th>Terms</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mr.Adi</td>
                                            <td>298348324</td>
                                            <td>2024-02-03</td>
                                            <td>Depo Sampit</td>
                                            <td>Free On Board</td>
                                            <td>001</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br><hr>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>UOM</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
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
                    $('#konsumen').select2({
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