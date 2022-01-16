<?php
$query = "SELECT * from department_tb ";
$statement = sqlsrv_query($conn,$query);
?>
<div class="container">
        <form action="" method="post">   
            <div class="col-md-4">
         
             <select name="search_depart" id="search_depart" multiple class="form-control selectpicker">
                <?php while ($row = sqlsrv_fetch_array($statement, SQLSRV_FETCH_ASSOC)) : ?>
                <option value="<?php echo $row["department_id"] ; ?>"><?php  echo $row["department_name"] ; ?></option>
                <?php endwhile ; ?>
            </select>
            </div>
            <div class="col-md-4">
            <input type="checkbox" onclick="hiddenn('1')" id="" name="">
            <label for="">มาตรฐานเลขที่</label><br>
            <input onclick="hiddenn('2')" type="checkbox" id="" name="" >
            <label for=""> ประเภทผลิตภัณฑ์</label><br>
            <input type="checkbox" id="" name="" >
            <label for=""> กลุ่มผลิตภัณฑ์</label><br>

        </div>
        <div class="col-md-4">
            <input type="checkbox" id="" name="" >
            <label for="">ศูนย์ที่เกี่ยวข้อง</label><br>
            <input type="checkbox" id="" name="" >
            <label for=""> แสดงวันที่ของสถานะทั้งหมด</label><br>
            <input type="checkbox" id="" name="" >
            <label for=""> แสดงเอกสารแนบทั้งหมด</label><br><br>
        </div>
        <button onclick="window.print()" class="btn btn-primary">พิมพ์รายงาน</button>
        <a class="btn btn-dark"  onclick="window.history.go(-1); return false;">ย้อนกลับ</a>
            <input type="hidden" name="department" id="department" />
            <div style="clear:both"></div>
            <br />
               <h1 align="center">รายงานศูนย์</h1>
            <div class="table table-bordered">
                <table class="table" style="background-color: white;" id="tableall">
                    <thead>
                        <tr>
                            <th class="col-1">ลำดับที่</th>
                            <th class="col-2">ชื่อหน่วยงานศูนย์</th>
                            <th class="col-1">เลขที่มอก.</th>
                            <th class="col-1">ชื่อมาตรฐาน</th>
                        </tr>
                    </thead>
                    <tbody>
            
                    </tbody>
                </table>
               
            </div>
            
        </form>
    
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            load_data();

            function load_data(query = '') {
                $.ajax({
                    url: "./standard/report_fetch_list1.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('tbody').html(data);
                    }
                })
            }
            $('#search_depart').change(function() {
                $('#department').val($('#search_depart').val());
                var query = $('#search_depart').val();
                load_data(query);
                // console.log(query);
            });
        });
        </script>
