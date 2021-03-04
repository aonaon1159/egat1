<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ปราชญ์ชาวบ้านหมู่บ้าน ม.1</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
        <style>
            .button {
                border: none;
                color: white;
                padding: 5px 40px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
            .button1 {border-radius: 12px;}

            .button1 {
             background-color: white; 
             color: black; 
             border: 2px solid #F07B41;
            }

            .button1:hover {
            background-color: #F07B41;
            color: white;
            }
            .button2 {border-radius: 12px;}

            .button2 {
             background-color: white; 
             color: black; 
             border: 2px solid #F07B41;
            }

            .button2:hover {
            background-color: #F07B41;
            color: white;
            }
            .button3 {border-radius: 12px;}

            .button3 {
             background-color: white; 
             color: black; 
             border: 2px solid #F07B41;
            }

            .button3:hover {
            background-color: white;
            color: black;
            }
            .button4 {border-radius: 12px;}

            .button4 {
             background-color: #F07B41; 
             color: white; 
             border: 2px solid #F07B41;
            }

            .button4:hover {
            background-color: #F07B41;
            color: white;
            }
            .button5 {border-radius: 12px;}

            .button5 {
             background-color: white; 
             color: black; 
             border: 2px solid #F07B41;
            }

            .button5:hover {
            background-color: #F07B41;
            color: white;
            }
            .button6 {border-radius: 12px;}

            .button6 {
             background-color: white; 
             color: black; 
             border: 2px solid #F07B41;
            }

            .button6:hover {
            background-color: #F07B41;
            color: white;
            }
            .button7 {border-radius: 12px;}

            .button7 {
             background-color: #F07B41; 
             color: white; 
             border: 2px solid #F07B41;
            }

            .button7:hover {
            background-color: #F07B41;
            color: white;
            }
    </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark  bg-warning">
            <a class="navbar-brand" href="index.html"><img src="img/logo2.png" alt=""></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-secondary" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                             <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                หน้าหลัก
                            </a>
                            <a class="nav-link" href="mapmaemoh.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                                ตำบลแม่เมาะ
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                               ตำบลบ้านดง
                            </a>    
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                               ตำบลสบป้าด
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                               ตำบลจางเหนือ
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                               ตำบลนาสัก
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                               ตำบลพระบาท
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">ตำบลแม่เมาะ ม.1</h1>
                        <ol class="breadcrumb mb-4">
                            <a href="history1.php" class="button button1" >ข้อมูลหมู่บ้าน</a>
                            <a href="board1.php" class="button button2" >คณะกรรมการ</a>
                            <a href="board1.1.php" class="button button3" >โครงสร้างคณะกรรมการ</a>
                            <a href="Landmark1.php" class="button button3" >สถานที่สำคัญ</a>
                            <a href="#" class="button button5" >ปฏิทินชุมชน</a>
                            <a href="#" class="button button6" >ปฏิทินประเพณี</a>
                            <button href="villager1.php" class="button button7" >ปราชญ์ชาวบ้าน</button>
                        </ol>
                        <div class="card mb-4">
                            <p>
                            <h3 align="center">ปราชญ์ชาวบ้านหมู่บ้านห้วยเป็ด ม.1</h3>
                            <div class="card-body">
                                <div align="right">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus">+เพิ่มข้อมูล</span></button>
                                </div>
                                <br>
                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="w3-light-grey">
                                    <th style="width:18%;"><center>รูป</center></th>
                                    <th style="width:20%;"><center>ชื่อ - นามสกุล</center></th>
                                    <th style="width:8%;"><center>อายุ</center></th>
                                    <th style="width:25%;"><center>รายละเอียด</center></th>
                                    <th ></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php
                                require 'conn.php';
                                $i = 1;
                                $query = mysqli_query($conn, "SELECT * FROM `villager1`") or die(mysqli_error());
                                while ($fetch = mysqli_fetch_array($query)) {
                                    ?>
                            <tr class="w3-hover-green">
                                <td><img src="uploads/<?= $fetch['v_image'] ?>" width="369px"  height="269px" class="rounded mx-auto d-block"></td>
                                <td><center><?php echo $fetch['v_prefix']?><?php echo $fetch['v_name']?>   <?php echo $fetch['v_lname']?></center></td>
                                <td><center><?php echo $fetch['v_age']?> ปี</center></td>
                                <td><?php echo $fetch['v_detail']?><br></td>
                                <td style="width:8%;"><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['v_id']?>"><span class="glyphicon glyphicon-edit"></span>แก้ไข</button></td>
                                <td style="width:8%;"><button class="btn btn-danger" data-toggle="modal" type="button" data-target="#delete_modal<?php echo $fetch['v_id']?>"><span class="glyphicon glyphicon-edit"></span>ลบ</button></td>
                            </tr>


                            <!-- modal update -->
                            <div class="modal fade" id="update_modal<?php echo $fetch['v_id']?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="update_query(v1).php" enctype="multipart/form-data">
                                        <input type="hidden" name="v_id" value="<?php echo $fetch['v_id']?>">
                                            <div class="modal-header">
                                                <h3 class="modal-title">แก้ไขข้อมูล</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-12">
                                                    <label><b>รูป</b></label>
                                                    <br>
                                                        <input type="file" name="v_image" id="v_image"  value="Send File"/>
                                                        <br></br>
                                                    <label><b>คำนำหน้า</b></label>  
                                                    <select type="gender" id="v_prefix" name="v_prefix" value="<?php echo $fetch['v_prefix']?>"class="form-control">  
                                                        <option value="">---กรุณาเลือก---</option>
                                                        <option value="นาย">นาย</option>  
                                                        <option value="นาง">นาง</option>
                                                        <option value="นางสาว">นางสาว</option>  
                                                    </select>
                                                    <br>
                                                    <div class="form-group">    
                                                        <label><b>ชื่อ</b></label>
                                                        <input type="text" name="v_name" value="<?php echo $fetch['v_name']?>" class="form-control" required="required"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>นามสกุล</b></label>
                                                        <input type="text" name="v_lname" value="<?php echo $fetch['v_lname']?>" class="form-control" required="required" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>อายุ</b></label>
                                                        <input type="text" name="v_age" value="<?php echo $fetch['v_age']?>" class="form-control" required="required"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><b>รายละเอียด</b></label>
                                                        <textarea name="v_detail" id="v_detail<?=$i?>"><?php echo $fetch['v_detail']?></textarea>
                                                        <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#v_detail<?=$i?>' ) )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="clear:both;"></div>
                                            <div class="modal-footer">
                                                <button name="update" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>บันทึก</button>
                                                <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>ยกเลิก</button>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                                <div  class="modal fade" id="delete_modal<?php echo $fetch['b_id']?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form method="POST" action="delete_query.php" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h3 class="modal-title">ลบข้อมูล</h3>
                                                </div>
                                                <div style="clear:both;"></div>
                                                <div class="modal-footer">
                                                    <button name="delete" class="btn btn-primary" data-emp-id="<?php echo $rows["b_id"]; ?>" href="javascript:void(0)"><span class="glyphicon glyphicon-save"></span>ยืนยันการลบ</button>
                                                    <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>ยกเลิก</button>
                                                </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>    
                                </div>
                                <!-- end Modal update -->

                            <?php
                            $i++;
                                }
                            ?>     
                    </table>
     <!-- show add -->            
    <div class="modal fade" id="form_modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="save_villager1.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h3 class="modal-title">เพิ่มข้อมูล</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-12">
                                <label><b>รูป</b></label>
                                <br>
                                <input type="file" name="v_image" id="v_image" value="Send File" />
                                <br></br>
                                <label><b>คำนำหน้า</b></label>  
                          <select type="gender" id="v_prefix" name="v_prefix" class="form-control">  
                               <option value="">---กรุณาเลือก---</option>
                               <option value="นาย">นาย</option> 
                               <option value="นาง">นาง</option> 
                               <option value="นางสาว">นางสาว</option>  
                          </select>
                          <br>  
                          <div class="form-group">
                                <label><b>ชื่อ</b></label>
                                <input type="text" id="v_name" name="v_name" class="form-control" required="required" />
                          </div> 
                          <div class="form-group">
                                <label><b>นามสกุล</b></label>
                                <input type="text" id="v_lname" name="v_lname" class="form-control" required="required" />
                          </div> 
                          <div class="form-group">
                                <label><b>อายุ</b></label>
                                <input type="text" id="v_age" name="v_age" class="form-control" required="required" />
                          </div>
                          <div class="form-group">
                                <label><b>รายละเอียด</b></label>
                                  <textarea name="v_detail" id="editor">
                                  </textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
                          </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>บันทึก</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>ยกเลิก</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    <!-- end show add --> 
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
