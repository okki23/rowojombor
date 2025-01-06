                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="javascript::">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Konsumen</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->

                        <!-- BEGIN PAGE TITLE  -->
                        <div class="page-title">
                            <h1>Konsumen</h1>
                        </div>
                        <!-- END PAGE TITLE -->

                        <br>

                        <!-- BEGIN PAGE CONTENT INNER --> 
                        <div class="col-lg-12"> 
                            <div class="row">
                                <a class="btn blue btn-outline sbold" id="addbtn"> <i class="fa fa-plus-square"></i> Tambahkan Data </a> 
                            </div> 
                            <!-- BEGIN TABLE DATA -->
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Ship To</th>
                                        <th>Kode</th>
                                        <th>Nama Customer</th>
                                        <th>Alamat</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PWP-K6</td>
                                        <td>GSM</td>
                                        <td>PT.Abdi Nusantara</td>
                                        <td>Kutoarjo</td>
                                        <td>
                                        <div class="btn-group btn-group-xs btn-group-solid">
                                            <button type="button" class="btn yellow"> <i class="fa fa-edit"></i> Edit</button>
                                            <button type="button" class="btn red"> <i class="fa fa-trash"></i> Delete</button> 
                                            <button type="button" id="btndetail" class="btn blue"> <i class="fa fa-file-o"></i> Detail</button>
                                        </div>
                                        </td> 
                                    </tr> 
                                </tbody> 
                            </table> 
                        <!-- END TABLE DATA -->
                    </div>
                    <!-- END PAGE CONTENT INNER --> 

 
                    <!-- BEGIN MODAL TAMBAH DATA  -->
                    <div class="modal fade" id="form-tambah" tabindex="-1" role="dialog" aria-hidden="true">  
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content"> 
                            <div class="modal-body"> 
                                <div class="portlet light">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-file-text-o"></i>
                                        <span class="caption-subject bold uppercase">Form Tambah Data</span> 
                                    </div> 
                                </div> 
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="#" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Ship To</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Kode</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Customer</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">NPWP</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat Serah</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tujuan</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Jarak</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">PIC</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Kontak</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control"> 
                                                    </div>
                                            </div> 
                                        </div>   
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <button type="submit" class="btn btn-block btn-primary"> <i class="fa fa-save"></i> Simpan</button> 
                                                </div>
                                                <div class="col-lg-6"> 
                                                    <button type="button" class="btn  btn-block btn-danger" data-dismiss="modal" aria-hidden="true"> <i class="fa fa-remove"></i> Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div> 
                        </div>               
                    </div> 
                </div>   
                <!-- END MODAL TAMBAH DATA  -->

                <!-- BEGIN MODAL DETAIL DATA  -->
                <div class="modal fade" id="detail-form" tabindex="-1" role="dialog" aria-hidden="true">  
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content"> 
                            <div class="modal-body"> 
                                <div class="portlet light">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-file-text-o"></i>
                                        <span class="caption-subject bold uppercase">Form Tambah Data</span> 
                                    </div> 
                                </div> 
                                <div class="portlet-body form">
                                    daefsw
                                </div>
                            </div> 
                        </div>               
                    </div> 
                </div>   
                <!-- END MODAL DETAIL DATA  -->
 

                </div>
                <!-- END PAGE CONTENT BODY --> 

             
 
                <script type="text/javascript"> 
                $(document).ready(function(){
                    $('#example').DataTable();
                }); 
                 
                $("#addbtn").on("click",function(){
                    $('#form-tambah').modal('show');
                });

                $("#btndetail").on("click",function(){
                    $('#detail-form').modal('show');
                });
                
                </script>

             
               