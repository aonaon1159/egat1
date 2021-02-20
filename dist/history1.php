<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ข้อมูลหมู่บ้าน ม.1</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

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
             background-color: #F07B41; 
             color: white; 
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
            background-color: #F07B41;
            color: white;
            }
            .button4 {border-radius: 12px;}

            .button4 {
             background-color: white; 
             color: black; 
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
             background-color: white; 
             color: black; 
             border: 2px solid #F07B41;
            }

            .button7:hover {
            background-color: #F07B41;
            color: white;
            }

            #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            }

            #myImg:hover {opacity: 0.7;}

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }

            /* Modal Content (image) */
            .modal-content {
            margin: auto;
            display: block;
            width: 90%;
            max-width: 700px;
            }

            /* Caption of Modal Image */
            #caption {
            margin: auto;
            display: block;
            width: 90%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
            }

            /* Add Animation */
            .modal-content, #caption {    
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
            }

            @-webkit-keyframes zoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
            }

            @keyframes zoom {
            from {transform: scale(0.1)} 
            to {transform: scale(1)}
            }

            /* The Close Button */
            .close {
            position: absolute;
            top: 75px;
            right: 20px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            }

            .close:hover,
            .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
            }

            /* 100% Image Width on Smaller Screens */
            @media only screen and (max-width: 700px){
            .modal-content {
        width: 100%;
            }
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
                        <h2 class="mt-4">ตำบลแม่เมาะ ม.1</h2>
                        <ol class="breadcrumb mb-4">
                            <div class="container">
                                <p>
                                <button class="button button1" >ข้อมูลหมู่บ้าน</button>
                                <a href="board1.php" class="button button2" >คณะกรรมการ</a>
                                <a href="#" class="button button3" >โครงสร้างคณะกรรมการ</a>
                                <a href="#" class="button button4" >สถานที่สำคัญ</a>
                                <a href="#" class="button button5" >ปฏิทินชุมชน</a>
                            <br>
                                <a href="#" class="button button6" >ปฏิทินประเพณี</a>
                                <a href="#" class="button button7" >ปราชญ์ชาวบ้าน</a>  
                            </div>
                        </ol>
                <div class="container">
                        <h3 align="center">ข้อมูลหมู่บ้าน บ้านห้วยเป็ด</h3>
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="img/0.jpg"  width="400"  height="300" align=right hspace=10><p style="text-indent: 1.9em;"><b>ชุมชนบ้านห้วยเป็ด</b> เกิดจากการอพยพโยกย้ายมาจาก หลายจังหวัด ในภาคกลาง  ภาคเหนือตอนบน และตอนล่าง  มารวมตัวกัน เพื่อมาค้าขาย ที่โรงไฟฟ้าแม่เมาะเหมืองแม่เมาะและที่โรงปุ๋ย 
                                (ภายหลังเลิกกิจการไป )</p> 

                                <p style="text-indent: 1.9em;"><b>สภาพเดิม</b> มีสภาพพื้นที่เป็นป่าต้นสัก โดยรัฐบาลได้จัดสรรให้การลิกไนต์ (กลน.) ใช้เป็นสถานที่ก่อสร้างโรงจักรไอน้ำ รวมถึงให้เป็นที่อยู่อาศัยของราษฎร และพนักงาน กลน.</p>
        
                                <b>การก่อเกิดชุมชน</b>
                                <li>ปี พ.ศ. 2500รัฐบาลมีโครงการก่อสร้างโรงจักรไฟฟ้า ขนาด 1.5 เมกะวัตต์ จำนวน 2 เครื่องเพื่อส่งไฟฟ้าไปสร้างเขื่อนภูมิพล อ.สามเงา จ.ตาก ทำให้เกิดการรวมตัวของคนจากหลายจังหวัด เพื่อทำงานก่อสร้างโรงจักรพลังไอน้ำแม่เมาะดังกล่าว</li>
                                <li>ปี พ.ศ. 2501 เริ่มวางศิลาฤกษ์ก่อสร้างโรงจักรไอน้ำ</li>
                                <li>ปีพ.ศ. 2502  เริ่มก่อสร้างทางรถไฟเพื่อขนส่งลิกไนต์จากบ่อเหมืองมายังโรงจักรไอน้ำ</li>
                                <li>ปี พ.ศ. 2503เริ่มเดินเครื่องโรงจักรไอน้ำแม่เมาะ  ซึ่งถือเป็นเครื่องแรกของจังหวัดลำปาง</li>
                                ปี พ.ศ. 2506  ได้มีการวางศิลาฤกษ์ก่อสร้างโรงงานผลิตปุ๋ยเคมี จำกัด อยู่บริเวณเดียวกับโรงจักร
                                ไอน้ำ และมีการรวมกันก่อสร้างชุมชนขึ้น  โดยมาจากการขยายสถานที่พักของพนักงานการลิกไนต์ (กลน.)ในขณะนั้นมีประชากร 70หลังคาเรือน หรือประมาณ 100 คน</p>

                            <p style="text-indent: 1.9em;"><b>ตลาดชุมชน</b> เกิดจากหมู่บ้านใกล้เคียง เช่น บ้านสถานี บ้านปงชัย บ้านห้วยคิง บ้านแม่ทะ นำสินค้ามาจำหน่ายให้กับพนักงาน กลน.บริเวรณหน้าโรงจักรไอน้ำ ต่อมาได้มีพ่อหลวงคำผัด พ่อศักดิ์ ก้านสุวรรณ 
                            พ่อนิยม ปัทมเสรี ทำการขยายการค้า และย้ายมาจำหน่ายยังบริเวณบ้านพักตลาดชุมชนที่จัดให้ จึงใช้ชื่อตลาดห้วยเป็ดมาจนถึงปัจจุบัน</p>

                            <p style="text-indent: 1.9em;"><b>เศรษฐกิจและสังคม </b>บ้านห้วยเป็ดเป็นศูนย์กลางการค้าขายสินค้าอุปโภค บริโภค เครื่องนุ่งห่ม ยารักษาโรคสินค้าหลากหลายเหมือนในตัวจังหวัดลำปาง และยังเป็นศูนย์กลางคมนาคมทางรถไฟ รถโดยสาร  มีโรงมหรสพ โรงหนัง ค่ายมวย เงินทองแพร่สะพัดเป็นผลให้ผู้ทำการค้าร่ำรวย ทุกหมู่บ้านในตำบลใกล้เคียงมาจับจ่ายซื้อขายแลกเปลี่ยนสินค้าซึ่งกันและกัน ชาวไร่-ชาวสวน บริเวณรอบ ๆ โรงจักรไอน้ำนำพืชผักสวนครัวมาจำหน่าย เนื่องจากเป็นชุมชนที่มีคนอาศัยอยู่จำนวนมากในขณะนั้น

                            <p style="text-indent: 1.9em;"><b>การเปลี่ยนแปลงสภาพหมู่บ้าน</b>พนักงาน กฟผ. ที่เคยอาศัยอยู่บริเวณบ้านห้วยเป็ด ได้ย้ายไปอยู่อาศัยบ้านพัก  โครงการก่อสร้าง (กอ.) และบ้านพักแฟลตห้วยคิง ซึ่งเป็นบ้านพักที่ กฟผ. จัดเป็นสวัสดิการให้กับพนักงานและลูกจ้างฯ ปี พ.ศ. 2519 เริ่มก่อสร้างถนนสายแม่เมาะ-ลำปาง โดยผ่านหมู่บ้านผาลาดเป็นการอำนวยความสะดวกให้กับพนักงานและราษฎร ใช้ในการเดินทางเข้าตัวจังหวัดลำปาง เพื่อความสะดวกในการขนส่งอุปกรณ์ก่อสร้างโรงไฟฟ้าแม่เมาะยูนิต 1-3ซึ่งเริ่มโครงการก่อสร้างปี พ.ศ. 2518 ปี พ.ศ. 2512ได้มีการขยายตัวชุมชนจากตลาดห้วยเป็ด ไปสู่สวนเกษตร และสวนขมิ้น เพิ่มขึ้นอีก</p>

                            <b>วัด</b>
                                <li>ปี พ.ศ. 2507 หลวงพ่อวิเชียรตั้งสำนักสงฆ์บริเวณป่าช้าบ้านหางฮุงเพื่อใช้เป็นสถานที่ประกอบพิธีทางศาสนาร่วมกันต่อมาได้สร้างสำนักสงฆ์อัมพวันขึ้น อยู่บริเวณข้างโรงเรียนบ้านหางฮุง ใช้เป็นศูนย์กลางของชุมชนบ้านหางฮุงและบ้านห้วยเป็ดในสมัยนั้นปัจจุบันคือวัดอัมพวัน</li>
                                <li>ปี พ.ศ.  2514  ได้ก่อสร้างสำนักสงฆ์มิ่งมงคล ตั้งอยู่บริเวณด้านหลังโรงจักรไอน้ำ ก่อนถึงสถานีรถไฟแม่เมาะขึ้นกับตำบลสบป้าด  และปัจจุบันยังคงใช้ทำบุญร่วมกันของประชาชนบริเวณใกล้เคียง</li>
                                <li>ปี พ.ศ.  2527  ได้วางฐานปรับปรุงเป็นสำนักสงฆ์ให้ดีกว่าเดิมและเริ่มก่อสร้างวัดมงคลเกษตร     โดยหลวงพ่อชุบให้หลวงพ่อวิเชียรเป็นเจ้าอาวาสรูปแรก</li>
                                <li>ปี พ.ศ. 2519 หลวงพ่อชุบได้ก่อสร้างวัดมงคลเกษตรมีหลวงพ่อวิเชียรเป็นเจ้าอาวาส</li>
                                <li>ปี พ.ศ. 2564 พระครูกำจรเป็นเจ้าอาวาสวัดมงคลเกษตร</li></p>

                            <b>สภาพภูมิศาสตร์</b>  บ้านห้วยเป็ดตั้งอยู่ริมน้ำแม่เมาะประกอบด้วย ลำห้วย 10 สาขา 
                            <li>ทิศเหนือ    ติดกับบ้านหางฮุง</li>
                            <li>ทิศใต้      ติดกับแม่เมาะสถานี</li>
                            <li>ทิศตะวันออก     ติดกับบ้านสบป้าด</li>
                            <li>ทิศตะวันตก  ติดกับบ้านปงชัย</li></p>

                            <p style="text-indent: 1.9em;"><b>ลำน้ำห้วยเป็ด </b>มีต้นน้ำมาจากเขาช้างกาบหรือ ทุ่งบัวตองในปัจจุบัน น้ำไหลมาจากทิศใต้ของหมู่บ้านจากนั้นไหลลงอ่างแม่เมาะสถานีและไหลลงไปบรรจบกันที่บ้านสบเมาะคือลำน้ำแม่จางในปัจจุบัน</p>

                            <b>เครือญาติชุมชนนามสกุลใหญ่</b>
                            <li>สกุลทองสุข มีพ่อเที้ยม ทองสุข ได้นำครอบครัวย้ายมาจากจังหวัดอุตรดิตถ์ มาทำงานก่อสร้างโรงจักรไอน้ำแม่เมาะ ปี พ.ศ. 2501</li>
                            <li>สกุลอบแก้ว มีพ่อหน่ำ อบแก้ว ได้พาครอบครัวมาค้าขาย</li>
                            <li>สกุลไชยชนะ มีพ่อสายไชยชนะ อพยพมาจากจังหวัดน่านพาครอบครัวมาทำงานก่อสร้างทางรถไฟเพื่อขนถ่านหินลิกไนต์จากบ่อเหมืองมาที่โรงจักร</li> 
                            </div>
                        </div>
                        
                        <h3 align="center">ที่ตั้งหมู่บ้านห้วยเป็ด</h3>
                        <div class="card mb-4">
                            <div class="card-body" >
                                <img id="myImg" src="img/map.jpg"  width="500"  height="400" align="left">
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="close">×</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>

                                <center>
                                <br>
                                <br>
                                <table width=65% style="border:3px dotted orange;" cellpadding="10" cellspacing="10"><tr><td style="border:3px dotted orange;" ><font size="3" >
                                <center>                         
                                <b>อำเภอแม่เมาะ</b>
                                <li>ประกอบด้วย 5 ตำบล 44 หมู่บ้าน 2 ชุมชน</li>
                                <li>มีเนื้อที่ทั้งหมด 537,775 ไร่</li>
                                <li>ประชากรทั้งหมดประมาณ 39,554 คน</li>
                                <li>จำนวน ครัวเรือนประมาณ 17,606 ครัวเรือน</li>
                                ที่มา : อำเภอแม่เมาะ, พ.ศ. 2564</center></td></tr></table></center>
                                <br>
                                <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7576.470902460093!2d99.72572222257295!3d18.290837636970192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30d91a0e97b51e87%3A0x55a59af2c3ea1331!2sHuai%20Ped!5e0!3m2!1sen!2sth!4v1613375783068!5m2!1sen!2sth" width="950" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>                          
                            </div>
                        </div>
                    </div>
                </div>
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
<script>

var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

</script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>

    </body>
</html>
