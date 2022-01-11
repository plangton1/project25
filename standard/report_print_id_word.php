<?php
header("Content-Type: application/msword");
header('Content-Disposition: attachment; filename="Report_Word.doc"');
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
    $sql = "SELECT *  , a.standard_status,b.id_statuss,b.statuss_name AS name_status FROM main_std a INNER JOIN select_status b ON a.standard_status = b.id_statuss WHERE standard_idtb = '$standard_idtb'";
    $query = sqlsrv_query($conn, $sql);
}
?>
<center>
<form action="" method="post" enctype=multipart/form-data>  
<?php while ($data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) : ?>
<h5>สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย 35 เทคโนธานี
    ถนนเลียบคลองห้า ตำบลคลองห้า อำเภอคลองหลวง จังหวัดปทุมธานี 12120</h5>
    <h3 style="text-align:center;">รายงานเอกสาร หมายเลขเอกสาร : <?= $data['standard_idtb']; ?></h3>
    <div class=" mb-3">
    <table border="1" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-1">ลำดับที่</th>
                            <th class="col-1">วันที่เพิ่มเอกสาร</th>
                            <th class="col-2">วาระจากในที่ประชุมสมอ.</th>
                            <th class="col-1">เลขที่มอก.</th>
                            <th class="col-1">ชื่อมาตรฐาน</th>
                            <th class="col-2">วันที่แต่งตั้งสถานะ</th>
                            <th class="col-2">สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                      
                        <tr class="text-center">
                            <td class="align-middle"><?= $i++ ?></td>
                            <td class="align-middle"><?= $data['standard_create']  ?></td>
                            <td class="align-middle"><?= $data['standard_meet'] ?></td>
                            <td class="align-middle"><?= $data['standard_number'] ?></td>
                            <td class="align-middle"><?= $data['standard_mandatory'] ?></td>
                            <td class="align-middle"><?= $data['standard_day'] ?></td>
                            <td class="align-middle"><?= $data['name_status'] ?></td>
                        </tr>

                        <?php  endwhile; ?>

                    </tbody>
                </table>
    </div>
</form>
</center>
</body>
</html>
