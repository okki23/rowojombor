                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Penjualan</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">                        
                        <div class="d-md-none d-flex align-items-center">
                            <a href="javascript:void(0)" class="page-header-right-open-toggle">
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
                            <a href="javascript:void(0);" id="addData" class="btn btn-primary"> Add New</a>
                            <br>
                        </div>
                        
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="projectList">
                                        <thead>
                                            <tr> 
                                                <th>PO Number</th>
                                                <th>PO Date</th>
                                                <th>TOP</th>
                                                <th>Ship To</th> 
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <tr class="single-item"> 
                                                <td>832384932</td> 
                                                <td>2024-09-03</td> 
                                                <td>Cash</td> 
                                                <td>PT .Adi Karya</td> 
                                                <td style="text-align: center;"> 
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                                                <i class="feather feather-send"></i>
                                                        </a> 
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                                                <i class="feather feather-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                                                <i class="feather feather-trash"></i>
                                                        </a> 
                                                    </div> 
                                                </td> 
                                            </tr>
                                            <tr class="single-item"> 
                                                <td>73423432</td> 
                                                <td>2024-09-03</td> 
                                                <td>Cash</td> 
                                                <td>PT. SUMO ADI</td> 
                                                <td style="text-align: center;"> 
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                                                <i class="feather feather-send"></i>
                                                        </a> 
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                                                <i class="feather feather-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                                                <i class="feather feather-trash"></i>
                                                        </a> 
                                                    </div> 
                                                </td> 
                                            </tr>
                                            <tr class="single-item"> 
                                                <td>923432434</td> 
                                                <td>2024-09-03</td> 
                                                <td>Cash</td> 
                                                <td>PT .BU Karya</td> 
                                                <td style="text-align: center;"> 
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                                                <i class="feather feather-send"></i>
                                                        </a> 
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
                                                                <i class="feather feather-edit"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="offcanvas" data-bs-target="#proposalSent">
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
                <div class="modal fade" id="exampleModal"  data-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">

                                <form id="project-details" novalidate="novalidate">
                                        <fieldset>
                                            <div class="mb-5">
                                                <h2 class="fs-16 fw-bold">Project details</h2>
                                                <p class="text-muted">You project details gose here.</p>
                                            </div>
                                            <fieldset>
                                                <div class="mb-4">
                                                    <label for="projectName" class="form-label">PO Number <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="projectName" name="projectName" value="Website design and development" required="" aria-required="true">
                                                </div>
                                             
                                                <div class="mb-4">
                                                    <label for="billingType" class="form-label">TOP <span class="text-danger">*</span></label>
                                                    <select id="billingType" class="form-select" name="billingType">
                                                        <option value="warning" data-bg="bg-warning" selected>--Pilih--</option>
                                                        <option value="warning" data-bg="bg-warning">Cash</option>
                                                        <option value="warning" data-bg="bg-warning">TOP 15 Hari</option>
                                                        <option value="warning" data-bg="bg-warning">TOP 30 Hari</option>
                                                    </select>
                                                </div>                                        
                                            </fieldset>
                                        </fieldset>
                                    </form>

                                    <div class="col-lg-4">
                                    Please choose selected data :
                                    <a href="javascript:void(0);" id="addDetail" class="btn btn-primary"> Add Detail Data</a>
                                    </div>
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
                 <div class="modal fade" id="exampleModalDetail"  data-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>

            <script>
                $("#addData").on("click",function(){
                    $('#exampleModal').appendTo("body").modal('show');
                });

                $("#addDetail").on("click",function(){
                    $('#exampleModalDetail').appendTo("body").modal('show');
                });
                 
                "use strict";
                    $(document).ready(function () {
                        $("#projectList").DataTable({ pageLength: 10, lengthMenu: [10, 20, 50, 100, 200, 500] });
                    }),
                        $(document).ready(function () {
                            $("#checkAllProject").change(function () {
                                this.checked
                                    ? $(".checkbox").each(function () {
                                        (this.checked = !0), $(this).parent().parent().parent().parent().addClass("selected");
                                    })
                                    : $(".checkbox").each(function () {
                                        (this.checked = !1), $(this).parent().parent().parent().parent().removeClass("selected");
                                    });
                            }),
                                $(".checkbox").click(function () {
                                    var e;
                                    $(this).is(":checked")
                                        ? ((e = 0),
                                        $(".checkbox").each(function () {
                                            this.checked || (e = 1);
                                        }),
                                        0 == e && $("#checkAllProject").prop("checked", !0))
                                        : $("#checkAllProject").prop("checked", !1);
                                }),
                                $(".items-wrapper").on("click", "input:checkbox", function () {
                                    $(this).closest(".single-items").toggleClass("selected", this.checked);
                                }),
                                $(".items-wrapper input:checkbox:checked").closest(".single-items").addClass("selected");
                        });


                 
            </script>