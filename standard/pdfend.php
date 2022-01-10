<?php
$html = ob_get_contents();
$mpdf->WriteHTML($html);
$mpdf->Output("MyReport.pdf");
ob_end_flush();
?>