<?php
require('pdf.php');
?>
<?php
if (isset($_GET['standard_idtb']) && !empty($_GET['standard_idtb'])) {
    $standard_idtb = $_GET['standard_idtb'];
    $sql = "SELECT * , a.standard_idtb,a.standard_status,b.statuss_name AS name_status 
     FROM main_std a INNER JOIN select_status b ON a.standard_status = b.id_statuss WHERE standard_idtb = '$standard_idtb' ";
    $query = sqlsrv_query($conn, $sql);
    $result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
}


$sql2 = "SELECT * FROM select_status";
$query2 = sqlsrv_query($conn, $sql2);
$sql3 = "SELECT * FROM type_tb";
$query3 = sqlsrv_query($conn, $sql3);

?>
<style>
    body {
        font-family: 'Sarabun', sans-serif;
    }
</style>
<?php ob_start(); ?>
<?php
if (isset($_GET['standard_idtb']) && !empty($_GET['standard_idtb'])) {
    $standard_idtb = $_GET['standard_idtb'];
    $sql2 = "SELECT * FROM main_std WHERE standard_idtb=$standard_idtb";
    $query2 = sqlsrv_query($conn, $sql2);
    $row = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC);
}
?>

<body>
    
    <img src="./img/logo-removebg-preview.png" height="100">
    <h1 style="text-align:center;">รายงานเอกสาร หมายเลขเอกสาร : <?= $row['standard_idtb']; ?></h1>
    <div class="container">

        <h5>สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย 35 เทคโนธานี </h5>
        <h5>ถนนเลียบคลองห้า ตำบลคลองห้า อำเภอคลองหลวง จังหวัดปทุมธานี 12120</h5>
        <hr>
        <!-- <p class="justify-content-right" style="font-size: 18px;">
           <?php
            date_default_timezone_set('asia/bangkok');
            $date = date('m/d/Y');
            $date3 = DateThai($date);
            $date2 = date('เวลา h:i:s');
            echo '<p align=end>';
            echo $date;
            echo '</p>';
            echo '<p align=end>';
            echo $date2;
            echo '</p>';
            ?>  -->

        <table>
            <tr>
                <td>หมายเลขเอกสาร </td>
                <td><?= $row['standard_idtb']; ?></td>
            </tr>
            <tr>
                <td>ชื่อเอกสาร </td>
                <td><?= $row['standard_detail']; ?></td>
            </tr>
            <tr>
                <td>วันที่เพิ่ม </td>
                <td><?= $row['standard_create']; ?></td>
            </tr>
        </table>
        <hr>
        <table class="table" border="1" style="background-color: white;">
            <thead>
                <tr>
                    <th>วันที่เพิ่มเอกสาร</th>
                    <th>วาระจากในที่ประชุมสมอ.</th>
                    <th>เลขที่มอก.</th>
                    <th>ชื่อมาตรฐาน</th>
                    <th>วันที่แต่งตั้งสถานะ</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= DateThai($result['standard_create']) ?></td>
                    <td><?= $result['standard_number'] ?></td>
                    <td><?= $result['standard_mandatory'] ?></td>
                    <td><?= $result['standard_detail'] ?></td>
                    <?php if ($result['standard_day'] == '') : ?>
                        <td>ยังไม่ได้ระบุสถานะ</td>
                    <?php endif; ?>
                    <?php if ($result['standard_day']) : ?>
                        <td><?= dateThai($result['standard_day']); ?></td>
                    <?php endif; ?>
                    <?php if ($result['id_statuss'] == 1) : ?>
                        <td><?= $result['name_status'] ?></td>
                    <?php endif; ?>
                    <?php if ($result['id_statuss'] == 2) : ?>
                        <td>
                            <?= $result['name_status'] ?></td>
                    <?php endif; ?>
                    <?php if ($result['id_statuss'] == 3) : ?>
                        <td><?= $result['name_status'] ?></td>
                    <?php endif; ?>
                    <?php if ($result['id_statuss'] == 4) : ?>
                        <td>
                            <?= $result['name_status'] ?></td>
                    <?php endif; ?>
                    <?php if ($result['id_statuss'] == '') : ?>
                        <td>
                            <?= $result['name_status'] ?></td>
                    <?php endif; ?>

                </tr>
            </tbody>
        </table>
</body>
<?php require('pdfend.php'); ?>
<a href="MyReport.pdf" class="btn btn-primary">รายงาน</a>