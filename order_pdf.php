<?php
session_start();
include("vendor/autoload.php");
$sn = 1;
$total = 0;
if (isset($_SESSION['cart'])) {

}
$html =
  '<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8" />
        <title>Tax Invoice</title>
        <link rel="shortcut icon" type="image/png" href="./favicon.png" />
        <style>
          * {
            box-sizing: border-box;
          }
    
          .table-bordered td,
          .table-bordered th {
            border: 1px solid #ddd;
            padding: 10px;
            word-break: break-all;
          }
    
          body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 16px;
          }
          .h4-14 h4 {
            font-size: 12px;
            margin-top: 0;
            margin-bottom: 5px;
          }
          .img {
            margin-left: "auto";
            margin-top: "auto";
            height: 30px;
          }
          pre,
          p {
            /* width: 99%; */
            /* overflow: auto; */
            /* bpicklist: 1px solid #aaa; */
            padding: 0;
            margin: 0;
          }
          table {
            font-family: arial, sans-serif;
            width: 100%;
            border-collapse: collapse;
            padding: 1px;
          }
          .hm-p p {
            text-align: left;
            padding: 1px;
            padding: 5px 4px;
          }
          td,
          th {
            text-align: left;
            padding: 8px 6px;
          }
          .table-b td,
          .table-b th {
            border: 1px solid #ddd;
          }
          th {
            /* background-color: #ddd; */
          }
          .hm-p td,
          .hm-p th {
            padding: 3px 0px;
          }
          .cropped {
            float: right;
            margin-bottom: 20px;
            height: 100px; /* height of container */
            overflow: hidden;
          }
          .cropped img {
            width: 400px;
            margin: 8px 0px 0px 80px;
          }
          .main-pd-wrapper {
            box-shadow: 0 0 10px #ddd;
            background-color: #fff;
            border-radius: 10px;
            padding: 15px;
          }
          .table-bordered td,
          .table-bordered th {
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 14px;
          }
          .invoice-items {
            font-size: 14px;
            border-top: 1px dashed #ddd;
          }
          .invoice-items td{
            padding: 14px 0;
           
          }
        </style>
      </head>
      <body>
        <section class="main-pd-wrapper" style="width: 450px; margin: auto">
          <div style="
                      text-align: center;
                      margin: auto;
                      line-height: 1.5;
                      font-size: 14px;
                      color: #4a4a4a;
                    ">
                    <img src="images\logo1.png" height="40px" alt="">
       
                    <p style="font-weight: bold; color: #000; margin-top: 15px; font-size: 18px;">
                      Bill Of Supply FEW Retailers<br> Private Limited
                    </p>
                    <p style="margin: 15px auto;">
                      3,Raju Complex<br>
                      Ahmedabad 380021, Gujarat
                    </p>
                    <p>
                      <b>GSTIN:</b> 0987653456789
                    </p>
                    <p>
                      <b>CIN:</b> 0987653456789
                    </p>
                    <p>
                      <b>FSSAI No. :</b> 0987653456789
                    </p>
                    <hr style="border: 1px dashed rgb(131, 131, 131); margin: 25px auto">
                  </div>
                  <table style="width: 100%; table-layout: fixed">
                    <thead>
                      <tr>
                        <th style="width: 50px; padding-left: 0;">Sn.</th>
                        <th style="width: 220px;">Item Name</th>
                        <th>QTY</th>
                        <th style="text-align: right; padding-right: 0;">Price</th>
                      </tr>
                    </thead>
                    <tbody>';
foreach ($_SESSION['cart'] as $key => $value) {
  $html .= '<tr class="invoice-items">
                        <td>' . $sn . '</td>
                        <td >' . $value['name'] . '</td>
                        <td>' . $value['quantity'] . '</td>
                        <td style="text-align: right;">' . $value['price'] * $value['quantity'] . '</td>
                      </tr>';
  $total += ($value['price'] * $value['quantity']);
  $sn += 1;
}
$html .= '</tbody>
                 </table> <table style="width: 100%;
                  background: #fcbd024f;
                  border-radius: 4px;">
                    
                 
                  </table>
    
                  <table style="width: 100%;
                  margin-top: 15px;
                  border: 1px dashed #00cd00;
                  border-radius: 3px;">
                    <thead>
                      <tr>
                        <td>Total Saving In Rs: </td>
                        <td style="text-align: right;">₹ ' . $total . 's</td>
                      </tr>
                      
                    </thead>
                 
                  </table>
    
        </section>
      </body>
    </html>
    ';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
// $mpdf->WriteHTML($js, 3);

$mpdf->Output('invoice.pdf', 'D');
?>