<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=report_Excle.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">

<head></head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ระบบติดตามเอกสาร</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    require '../connection/connection.php';
    if (isset($_GET['standard_idtb']) && !empty($_GET['standard_idtb'])) {
        $standard_idtb = $_GET['standard_idtb'];
        $sql = "SELECT *  , a.standard_status,b.id_statuss,b.statuss_name AS name_status ,
    c.agency_id,d.agency_id,d.agency_name AS name_agency ,
    e.department_id,f.department_id,f.department_name AS name_depart FROM main_std a 
    INNER JOIN select_status b ON a.standard_status = b.id_statuss 
    INNER JOIN dimension_agency c ON a.standard_idtb = c.standard_idtb 
    INNER JOIN agency_tb d ON c.agency_id = d.agency_id
    INNER JOIN dimension_department e ON a.standard_idtb = e.standard_idtb
    INNER JOIN department_tb f ON e.department_id = f.department_id WHERE a.standard_idtb = '$standard_idtb'";
        $query = sqlsrv_query($conn, $sql);
        $data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    }
    ?>
    <center>
        <form action="" method="post" enctype=multipart/form-data>
            <div class=" mb-3">
                <table border="1" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-1">ลำดับที่</th>
                            <th class="col-2">วาระจากในที่ประชุมสมอ.</th>
                            <th class="col-1">เลขที่มอก.</th>
                            <th class="col-1">ชื่อมาตรฐาน</th>
                            <th class="col-1">หน่วยงานที่สามารถทดสอบได้</th>
                            <th class="col-2">มาตรฐานบังคับ</th>
                            <th class="col-1">หน่วยงานที่ขอ</th>
                            <th class="col-2">วันที่แต่งตั้งสถานะ</th>
                            <th class="col-2">สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <tr class="text-center">
                            <td class="align-middle"><?= $i++ ?></td>
                            <td class="align-middle"><?= $data['standard_meet'] ?></td>
                            <td class="align-middle"><?= $data['standard_number'] ?></td>
                            <td class="align-middle"><?= $data['standard_detail'] ?></td>
                            <td>
                                <?php
                                $ii = 1 ; 
                                $standarsidtb = $_REQUEST['standard_idtb'];
                                $sql2 = "SELECT * ,a.agency_id,b.agency_id,b.agency_name AS name_agency FROM dimension_agency a INNER JOIN agency_tb b ON a.agency_id= b.agency_id 
                                WHERE standard_idtb  = '$standarsidtb' ";
                                $query2 = sqlsrv_query($conn, $sql2);
                                while ($result2 = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC)) { ?>
                                    <?= $ii++ ?>.<?=$result2['name_agency']; ?><br>
                                <?php } ?>
                            </td>
                            <td class="align-middle"><?= $data['standard_mandatory'] ?></td>
                            <td>
                                <?php
                                $standarsidtb = $_REQUEST['standard_idtb'];
                                $sql3 = "SELECT * ,b.department_id,c.department_id,c.department_name AS name_department FROM dimension_department b INNER JOIN department_tb c ON b.department_id = c.department_id 
                                WHERE standard_idtb  = '$standarsidtb' ";
                                $query3 = sqlsrv_query($conn, $sql3);
                                while ($result3 = sqlsrv_fetch_array($query3, SQLSRV_FETCH_ASSOC)) { ?>
                                    <?= $result3['name_department']; ?><br>
                                <?php } ?>
                            </td>
                            <td class="align-middle"><?= $data['standard_day'] ?></td>
                            <td class="align-middle"><?= $data['name_status'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </center>
</body>

</html>