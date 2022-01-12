<!doctype html>
<html lang="en">
<?php
$date_today = (date('d/m/Y H:i:s'));
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<style>
    form{
        font-size: 14px;
    }
</style>
<body>

    <form action="standard/insert_sql2.php" method="POST"  enctype="multipart/form-data">

        <section class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-sm " style="background-color:#FFD700;" onclick="window.history.go(-1); return false;">ย้อนกลับ</a>
                        <div class="section-title">

                            <h2 class="font-mirt">เพิ่มเอกสารยื่น มอก.</h2>
                            <h3 class="font-mirt">เพิ่มเอกสารยื่น มอก.</h3>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <!-- radio -->
                    <div class="card mt-4">
                    <div class="card-body">
                        <div class="col-md-4">
                        <input id="rati0" value="จากการประชุม" type="radio" onclick="fnc_free(1)" name="standard_source" readonly>
                        <b>จากการประชุม</b>
                        <br>
                        <br>
                        <label>ที่มาของการประชุม</label>
                        <input type="text" id="a1" name="standard_origin" autocomplete="off" class="form-control" multiple readonly>
                        <br>
                        <label>ส่งแบบสำรวจล่วงหน้าแล้ว</label>
                        <input type="text" id="a2" name="standard_survey" autocomplete="off" class="form-control" multiple readonly>
                        </div>
                        <div class="col-md-4">
                        <input id="rati0" value="จากจดหมาย สมอ." type="radio" onclick="fnc_free(2)" name="standard_source" readonly>
                        <b>จากจดหมาย สมอ.</b>
                        <br>
                        <br>
                        <label>วันที่รับหนังสือจากสมอ.</label>
                        <input id="a3" type="date" name="standard_pick" autocomplete="off" class="form-control" multiple readonly>
                        <br>
                        <label>วันที่ส่งเอกสารออกไป สมอ.</label>
                        <input id="a4" type="date" name="standard_pickup" autocomplete="off" class="form-control" multiple readonly>
                        </div>
                        <div class="col-md-4">
                        <input id="rati0" value="จากราชกิจานุเบกษา" type="radio" onclick="fnc_free(3)" name="standard_source" readonly>
                        <b>จากราชกิจานุเบกษา</b>
                        <br>
                        <br>
                        <!-- <label>หน่วยงานคู่แข่ง</label> -->
                        <input type="text" id="a5" name="#" autocomplete="off" class="form-control" multiple readonly style="display: none;">
                        <br>
                        <label>วันที่ประกาศราชกิจจานุเบกษา</label>
                        <input type="date" id="a6" name="standard_gazet" autocomplete="off" class="form-control" multiple readonly>
                        </div>
                    </div>
                    </div>
                </div>

                    <input type="hidden" name="mode" value="insert_data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <div class="form-group mb-2">
                                            <label for="">วาระจากที่ประชุม สมอ. </label>
                                            <input type="text" name="standard_meet" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <div class="form-group mb-2 f-red">
                                            <label for="">เลขที่ มอก.*</label>
                                            <input type="text" name="standard_number" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <div class="form-group mb-2">
                                            <label for="">ชื่อมาตรฐาน</label>
                                            <input type="text" name="standard_detail" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <div class="form-group mb-2">
                                            <div class="form-group mb-2">
                                                <label for="">มาตรฐานบังคับ</label>
                                                <input type="text" name="standard_mandatory" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <div class="form-group mb-2">
                                            <label for="">หมายเลข tracking</label>
                                            <input type="text" name="standard_tacking" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <div class="form-group mb-2">
                                            <label for="">หมายเหตุ</label>
                                            <input type="text" name="standard_note" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- หลายฟอร์ม -->
                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <label for="">ไฟล์แนบ</label>
                                        <a href="javascript:void(0)" onclick="add_element('main5','sub_main5');" class=" float-end btn btn-success">เพิ่ม</a>
                                        <div class="main-form1 mt-3 " id="main5">
                                            <input type="file" class="form-control" name="fileupload[]" id="fileupload" style="height: unset !important;">
                                            <div style="display:none;">
                                                <div class="row" id="sub_main5">

                                                    <div class="">
                                                        <div class="form-group mb-2 input-group mt-3">

                                                            <input type="file" class="form-control" name="fileupload[]" id="fileupload" style="height: unset !important;">
                                                            <button type="button" onclick="$(this).parent().remove();" class="remove-btn btn btn-danger ">ลบ</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <label for="">กลุ่มผลิตภัณฑ์</label>
                                        <a href="javascript:void(0)" onclick="add_element('main4','sub_main4');" class=" float-end btn btn-success">เพิ่ม</a>
                                        <div class="main-form1 mt-3 " id="main4">
                                            <select class="form-control" name="group_id[]" id="group_id" style="height: unset !important;">
                                                <option selected disabled>กรุณาเลือกกลุ่มผลิตภัณฑ์</option>
                                                <?php
                                                $sql = "SELECT * FROM group_tb";
                                                $query = sqlsrv_query($conn, $sql);
                                                while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { ?>
                                                    <option value="<?php echo $result['group_id'];  ?>">
                                                        <?php echo $result['group_name'];  ?></option>
                                                <?php } ?>
                                            </select>
                                            <div style="display: none;">
                                                <div class="row" id="sub_main4">

                                                    <div class="">
                                                        <div class="form-group mb-2 input-group mt-2">

                                                            <select class="form-control" name="group_id[]" id="group_id" style="height: unset !important;">
                                                                <option selected disabled>กรุณาเลือกกลุ่มผลิตภัณฑ์
                                                                </option>
                                                                <?php
                                                                $sql = "SELECT * FROM group_tb";
                                                                $query = sqlsrv_query($conn, $sql);
                                                                while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { ?>
                                                                    <option value="<?php echo $result['group_id'];  ?>">
                                                                        <?php echo $result['group_name'];  ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <button type="button" onclick="$(this).parent().remove();" class="remove-btn btn btn-danger ">ลบ</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->

                        <!-- หลายฟอร์ม -->
                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <label for="">หน่วยงานคู่แข่ง</label>
                                        <a href="javascript:void(0)" onclick="add_element('main1','sub_main1');" class=" float-end btn btn-success">เพิ่ม</a>
                                        <div class="main-form1 mt-3 " id="main1">
                                            <select class="form-control" name="agency_id[]" id="agency_id" style="height: unset !important;">
                                                <option selected disabled>
                                                    กรุณาเลือกหน่วยงานคู่แข่ง</option>
                                                <?php
                                                $sql2 = "SELECT * FROM agency_tb";
                                                $query2 = sqlsrv_query($conn, $sql2);
                                                while ($result = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC)) { ?>
                                                    <option value="<?php echo $result['agency_id'];  ?>">
                                                        <?php echo $result['agency_name'];  ?></option>
                                                <?php } ?>
                                            </select>
                                            <div style="display: none;">
                                                <div class="row" id="sub_main1">
                                                    <div class="">
                                                        <div class="form-group mb-2 input-group mt-2">

                                                            <select class="form-control" name="agency_id[]" id="agency_id" style="height: unset !important;">
                                                                <option selected disabled>
                                                                    กรุณาเลือกหน่วยงานคู่แข่ง</option>
                                                                <?php
                                                                $sql2 = "SELECT * FROM agency_tb";
                                                                $query2 = sqlsrv_query($conn, $sql2);
                                                                while ($result = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC)) { ?>
                                                                    <option value="<?php echo $result['agency_id'];  ?>">
                                                                        <?php echo $result['agency_name'];  ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <button type="button" onclick="$(this).parent().remove();" class="remove-btn btn btn-danger ">ลบ</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- <div class="paste-new-forms1"></div> -->
                        <!--  -->

                        <!-- หลายฟอร์ม -->
                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <label for="">ประเภทผลิตภัณฑ์</label>
                                        <a href="javascript:void(0)" onclick="add_element('main2','sub_main2');" class="float-end btn btn-success">เพิ่ม</a>
                                        <div class="main-form2 mt-3" id="main2">
                                            <select class="form-control" name="type_id[]" id="type_id" style="height: unset !important;">
                                                <option selected disabled>กรุณาเลือกประเภทผลิตภัณฑ์</option>
                                                <?php
                                                $sql3 = "SELECT * FROM type_tb";
                                                $query3 = sqlsrv_query($conn, $sql3);
                                                while ($result = sqlsrv_fetch_array($query3, SQLSRV_FETCH_ASSOC)) { ?>
                                                    <option value="<?php echo $result['type_id'];  ?>">
                                                        <?php echo $result['type_name'];  ?></option>
                                                <?php } ?>
                                            </select>
                                            <div style="display: none;">
                                                <div class="row" id="sub_main2">
                                                    <div class="">
                                                        <div class="form-group mb-2 input-group mt-2">

                                                            <select class="form-control" name="type_id[]" id="type_id" style="height: unset !important;">
                                                                <option selected disabled>กรุณาเลือกประเภทผลิตภัณฑ์
                                                                </option>
                                                                <?php
                                                                $sql3 = "SELECT * FROM type_tb";
                                                                $query3 = sqlsrv_query($conn, $sql3);
                                                                while ($result = sqlsrv_fetch_array($query3, SQLSRV_FETCH_ASSOC)) { ?>
                                                                    <option value="<?php echo $result['type_id'];  ?>">
                                                                        <?php echo $result['type_name'];  ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <button type="button" onclick="$(this).parent().remove();" class="remove-btn btn btn-danger ">ลบ</button>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="">
                                        <label for="">หน่วยงานที่ขอ</label>
                                        <a href="javascript:void(0)" onclick="add_element('main3','sub_main3');" class="float-end btn btn-success">เพิ่ม</a>
                                        <div class="main-form2 mt-3 border-bottom" id="main3">
                                            <select class="form-control" name="department_id[]" id="department_id" style="height: unset !important;">
                                                <option selected disabled>กรุณาเลือกหน่วยงานที่ขอ</option>
                                                <?php
                                                $sql3 = "SELECT * FROM department_tb";
                                                $query3 = sqlsrv_query($conn, $sql3);
                                                while ($result = sqlsrv_fetch_array($query3, SQLSRV_FETCH_ASSOC)) { ?>
                                                    <option value="<?php echo $result['department_id'];  ?>">
                                                        <?php echo $result['department_name'];  ?></option>
                                                <?php } ?>
                                            </select>
                                            <div style="display: none;">
                                                <div class="row" id="sub_main3">
                                                    <div class="">
                                                        <div class="form-group mb-2 input-group mt-2">

                                                            <select class="form-control" name="department_id[]" id="department_id" style="height: unset !important;">
                                                                <option selected disabled>กรุณาเลือกหน่วยงานที่ขอ
                                                                </option>
                                                                <?php
                                                                $sql3 = "SELECT * FROM department_tb";
                                                                $query3 = sqlsrv_query($conn, $sql3);
                                                                while ($result = sqlsrv_fetch_array($query3, SQLSRV_FETCH_ASSOC)) { ?>
                                                                    <option value="<?php echo $result['department_id'];  ?>">
                                                                        <?php echo $result['department_name'];  ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <button type="button" onclick="$(this).parent().remove();" class="remove-btn btn btn-danger">ลบ</button>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- <div class="paste-new-forms2"></div> -->
                        <center>
                            <!--  -->
                            <button type="submit" class="btn btn-primary mt-3">
                                <h5 class="font-mirt">บันทึกข้อมูล</h5>
                            </button>
                        </center>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

</body>
</html>
<script>
    function fnc_free($data) {
        if ($data == "1") {
            document.getElementById("a1").readOnly = false;
            document.getElementById("a2").readOnly = false;
            document.getElementById("a3").readOnly = true;
            document.getElementById("a4").readOnly = true;
            document.getElementById("a5").readOnly = true;
            document.getElementById("a6").readOnly = true;
        } else if ($data == "2") {
            document.getElementById("a1").readOnly = true;
            document.getElementById("a2").readOnly = true;
            document.getElementById("a3").readOnly = false;
            document.getElementById("a4").readOnly = false;
            document.getElementById("a5").readOnly = true;
            document.getElementById("a6").readOnly = true;
        } else if ($data == "3") {
            document.getElementById("a1").readOnly = true;
            document.getElementById("a2").readOnly = true;
            document.getElementById("a3").readOnly = true;
            document.getElementById("a4").readOnly = true;
            document.getElementById("a5").readOnly = false;
            document.getElementById("a6").readOnly = false;
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://รับเขียนโปรแกรม.net/picker_date/picker_date.js"></script>
<script>
    picker_date(document.getElementById("mydate"), {
        year_range: "-12:+10"
    });
</script>