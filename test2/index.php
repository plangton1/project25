    <!-- radio -->
    <div class="card mt-4">
                        <div class="card-body">
                            <div class="col-md-4">
                                <input type="radio" onclick="hiddenn('1')" name="standard_source" value="1"> จากการประชุม<br /><br>
                                <lable id="a11">ที่มาของการประชุม</lable>
                                <input value="" type="text" name="standard_origin" id="a1" class="form-control"> <br>
                                <lable id="a22">ส่งแบบสำรวจล่วงหน้าแล้ว</lable>
                                <input type="text" name="standard_survey" id="a2" class="form-control"> <br>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="standard_source" onclick="hiddenn('2')" value="2"> จากจดหมายสมอ.<br /><br>
                                <lable id="a33">วันที่รับหนังสือจากสมอ.</lable>
                                <input type="text" name="standard_pick" id="a3" class="form-control"> <br>
                                <lable id="a44">วันที่ส่งเอกสารออกไป สมอ.</lable>
                                <input type="text" name="standard_pickup" id="a4" class="form-control"> <br>
                            </div>


                            <div class="col-md-4">
                                <input type="radio" name="standard_source" onclick="hiddenn('3')" value="3"> จากประกาศราชกิจจานุเบกษา<br /><br>
                                    <lable id="a55">หน่วยงานคู่แข่ง</lable>
                                    <a href="javascript:void(0)" onclick="add_element('a5','sub_main1');" id="a555" class=" float-end btn btn-success">เพิ่ม</a>
                                    <div class="main-form1 mt-3 " id="a5">
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

<br>
                                <lable id="a66">วันที่ประกาศราชกิจจานุเบกษา</lable>
                                <input type="text" name="standard_gazet" id="a6" class="form-control"> <br>
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

                    <!-- <div class="col-md-4">
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
                    </div> -->

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
<script>
    function hiddenn(show) {
        if (show == 0) {
            document.getElementById("a1").style.display = 'none';
            document.getElementById("a2").style.display = 'none';
            document.getElementById("a11").style.display = 'none';
            document.getElementById("a22").style.display = 'none';
            document.getElementById("a3").style.display = 'none';
            document.getElementById("a4").style.display = 'none';
            document.getElementById("a33").style.display = 'none';
            document.getElementById("a44").style.display = 'none';
            document.getElementById("a5").style.display = 'none';
            document.getElementById("a55").style.display = 'none';
            document.getElementById("a555").style.display = 'none';
            document.getElementById("a6").style.display = 'none';
            document.getElementById("a66").style.display = 'none';
        } else if (show == 1) {
            document.getElementById("a1").style.display = '';
            document.getElementById("a2").style.display = '';
            document.getElementById("a11").style.display = '';
            document.getElementById("a22").style.display = '';
            document.getElementById("a3").style.display = 'none';
            document.getElementById("a4").style.display = 'none';
            document.getElementById("a33").style.display = 'none';
            document.getElementById("a44").style.display = 'none';
            document.getElementById("a5").style.display = 'none';
            document.getElementById("a55").style.display = 'none';
            document.getElementById("a555").style.display = 'none';
            document.getElementById("a6").style.display = 'none';
            document.getElementById("a66").style.display = 'none';
        } else if (show == 2) {
            document.getElementById("a1").style.display = 'none';
            document.getElementById("a2").style.display = 'none';
            document.getElementById("a11").style.display = 'none';
            document.getElementById("a22").style.display = 'none';
            document.getElementById("a3").style.display = '';
            document.getElementById("a4").style.display = '';
            document.getElementById("a33").style.display = '';
            document.getElementById("a44").style.display = '';
            document.getElementById("a5").style.display = 'none';
            document.getElementById("a55").style.display = 'none';
            document.getElementById("a555").style.display = 'none';
            document.getElementById("a6").style.display = 'none';
            document.getElementById("a66").style.display = 'none';
        } else if (show == 3) {
            document.getElementById("a1").style.display = 'none';
            document.getElementById("a2").style.display = 'none';
            document.getElementById("a11").style.display = 'none';
            document.getElementById("a22").style.display = 'none';
            document.getElementById("a3").style.display = 'none';
            document.getElementById("a4").style.display = 'none';
            document.getElementById("a33").style.display = 'none';
            document.getElementById("a44").style.display = 'none';
            document.getElementById("a5").style.display = '';
            document.getElementById("a55").style.display = '';
            document.getElementById("a555").style.display = '';
            document.getElementById("a6").style.display = '';
            document.getElementById("a66").style.display = '';
        }
    }
</script>