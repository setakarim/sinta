<?php

ob_start();
 include "konsep2.php";
 $content = ob_get_clean();
$date=date('d-m-Y');
// conversion HTML => PDF
 require_once "pdf/html2pdf.class.php";
 try
 {
 $html2pdf = new HTML2PDF('P','F4', 'en', false, 'ISO-8859-15');
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
   ob_end_clean();

 $html2pdf->Output('""'.$date.'"-datamahasiswa.pdf');
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>