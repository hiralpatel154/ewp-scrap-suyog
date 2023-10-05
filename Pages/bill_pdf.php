<?php
session_start();
// Include the PDF class

require_once "../package/TCPDF-main/tcpdf.php";
date_default_timezone_set('Asia/Kolkata');

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF
{
    //Page header
    public function Header()
    {
        /*$this->SetFont('times', 'B', 16);
        $this->SetY(13);
        $this->SetX(2);
        $this->Cell(0,10,'Travelling Voucher',0,0,'C');*/
    }

    // Page footer
    public function Footer()
    {
        $this->SetY(-10);
        // Set font
        $this->SetFont('helvetica', 'b', 9);
        $this->SetTextColor(153, 0, 0);
        /*$this->Cell(0, 10, '**This Is Computer Generated Report Signature Is Required**', 0, false, 'C', 0, '', 0, false, 'M', 'M');*/
        // Page number
        $this->Cell(0, 8, 'Page ' . $this->getAliasNumPage() . '/' . $this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}
// create new PDF document
$pdf = new MYPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Bill Copy');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(1, 5, 4);
$pdf->SetHeaderMargin(3);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(true, 9);
$pdf->AddPage();


$pdf->SetFont('helvetica', 'A');
$output = '
<table style="border:1px solid black; border-collapse:collapse;">
<thead>
    <tr>
        <td colspan="5">
        </td>
    </tr>
    <tr>
        <td colspan="5">
        </td>
    </tr>
    <tr>
        <th colspan="5" style="text-align:center;background-color:#d3d3d3;font-size:25px;">
            SHUBHAM RECRUITMENT AGENCY BUSINESS
        </th>
    </tr>
    <tr>
        <td colspan="5">
        </td>
    </tr>
    <tr>
        <td colspan="5">
        </td>
    </tr>
    <tr>
        <th colspan="5" style="font-size:12px;text-align:center;">
            A/33, Vijaya Nagar Society, Nr- Meghdoot Society. Halol - 389350 . Panchmahal - Gujarat . <br> Godhra Road. Halol - 389350 .Panchmahal - Gujarat .
        </th>
    </tr>
    <tr>
        <td colspan="2" style="font-size:12px; text-align:center;">
            E-mail: subhamrabusiness@gmail.com       
        </td>
        <td colspan="3" style="font-size:12px; text-align:center;">
            Mob.No. :8160900144
        </td>
    </tr>
    <tr>
        <td colspan="5">
        </td>
    </tr>
    <tr>
        <td colspan="2" style="font-size:12px;border:1px solid black;">
            <sup>M / S .</sup>
            Suyog Electricals Ltd
        </td>
        <td colspan="3" style="font-size:12px;text-align:center;border:1px solid black;background-color:#d3d3d3;">
            GST TAX INVOICE
        </td>
    </tr>
    <tr>
        <td colspan="2" style="border-right:1px solid black;">
        </td>
    </tr>
    <tr style="font-size:10px;">
        <td colspan="2" style="border-right:1px solid black;">
            2204/2205,GIDC ESTATE - Halol,PMS-GJ-389350 </td>
        <td colspan="3" style="display:flex;text-align:center;border-bottom:1px solid black">
                Bill No :-- SRAB/33
        </td>
    </tr>
    <tr>
        <td colspan="2" style="border-right:1px solid black;">
        </td>
    </tr>
    <tr style="font-size:12px;border:1px solid black;">
        <td colspan="2" style="text-align:center;border:1px solid black;">
            24AACCS9412R1ZV </td>
        <td colspan="3" style="text-align:center;">
          Date :--31-08-2023
        </td>
    </tr>
    <tr style="font-size:12px;text-align:center;">
        <th style="border:1px solid black;">Sr.no</th>
        <th style="border:1px solid black;">Particulars</th>
        <th style="border:1px solid black;">Quantity</th>
        <th style="border:1px solid black;">Rate</th>
        <th style="border:1px solid black;">Amount</th>
    </tr>

</thead>
<tbody>
    <tr style="font-size:12px;">
        <td style="text-align:center;">1</td>
        <td style="border-left: 1px solid black;font-size:12px;">Labour supply work in
            the <br> factory for the month of Aug-
        </td>
        <td style="text-align:center;border-right:1px solid black;border-left: 1px solid black;">
            824.5</td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="text-align:center;">369779</td>

    </tr>
    <tr>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
    </tr>
    <tr style="font-size:12px;">
        <td></td>
        <td style="border-right:1px solid black;border-left: 1px solid black;">Att. Bonus</td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="text-align:center;">36030</td>
    </tr>
    <tr style="font-size:12px;">
        <td></td>
        <td style="border-right:1px solid black;border-left: 1px solid black;">HRA</td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="text-align:center;">62976</td>
    </tr>
    <tr style="font-size:12px;">
        <td></td>
        <td style="border-right:1px solid black;border-left: 1px solid black;">Washing Allowance
        </td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="text-align:center;">28832</td>
    </tr>
    <tr style="font-size:12px;">
        <td></td>
        <td style="border-right:1px solid black;border-left: 1px solid black;">Over Time</td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="border-right:1px solid black;border-left: 1px solid black;"></td>
        <td style="text-align:center;">44147</td>
    </tr>
    <tr rowspan="3">
        <td style="border-right:1px solid black;"></td>
        <td style="border-right:1px solid black;"></td>
        <td style="border-right:1px solid black;"></td>
        <td style="border-right:1px solid black;"></td>
        <td style="text-align:center;"></td>
    </tr>

    <tr style="font-size:12px;">
        <td style="border-right: 1px solid black;"></td>
        <td style="border-left: 1px solid black;"></td>
        <td style="border:1px solid black;text-align:center;">Total</td>
        <td></td>
        <td style="text-align:center;border:1px solid black;">5,41,776</td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td></td>
    </tr>
    <tr style="font-size:12px;">
        <td style="border-right: 1px solid black;"></td>
        <td style="text-align:right;border-right: 1px solid black;">ESIC Charges</td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;text-align:center;">3.25%</td>
        <td style="text-align:center;">16670</td>
    </tr>
    <tr style="font-size:12px;">
        <td style="border-right: 1px solid black;"></td>
        <td style="text-align:right;border-right: 1px solid black;">PF Charges</td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;text-align:center;">13%</td>
        <td style="text-align:center;">48071</td>
    </tr>
    
    <tr style="font-size:12px;">
        <td style="border-right: 1px solid black;"></td>
        <td style="text-align:right;border-right: 1px solid black;">Service Charges</td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;text-align:center;">4%</td>
        <td style="text-align:center;">14791</td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td></td>
    </tr>
    <tr style="font-size:12px;">
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border:1px solid black;text-align:center;">Sub Total</td>
        <td style="border-right: 1px solid black;"></td>
        <td style="text-align:center;border:1px solid black;">6,21,297</td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td></td>
    </tr>
    <tr style="font-size:12px;">
        <td style="border-right: 1px solid black;"></td>
        <td style="text-align:right;border-right: 1px solid black;">SGST</td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;text-align:center;">9%</td>
        <td style="text-align:center;">55917</td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td></td>
    </tr>
    <tr style="font-size:12px;">
        <td style="border-right: 1px solid black;"></td>
        <td style="text-align:right;border-right: 1px solid black;">CGST</td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;text-align:center;">9%</td>
        <td style="text-align:center;">55917</td>
    </tr>
    <tr>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td style="border-right: 1px solid black;"></td>
        <td></td>
    </tr>
    <tr style="font-size:12px;">
        <td style="border: 1px solid black;"></td>
        <td style="text-align:right;border: 1px solid black;padding:5px;">Invoice Total</td>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;"></td>
        <td
            style="border-right: 1px solid black;border-top: 1px solid black;border-bottom: 1px solid black;">
        </td>
        <td style="text-align:center;border: 1px solid black;">7,33,130</td>
    </tr>
    <tr>
        <td colspan="5">
        </td>
    </tr>
    <tr style="font-size:12px;">
        <td colspan="5" style="text-align:left;"><b>Amount In Word:</b> Seven Lakh thirty-three thousand one hundred thirty only.
        </td>
    </tr>
    <tr >
        <td colspan="5" style="border-bottom:1px solid black;">
        </td>
    </tr>
    <tr>
    <td></td>
    <td style="border-right: 1px solid black;"></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
    <tr style="font-size:12px;text-align:left;">
        <td>GST No:</td>
        <td style="border-right:1px solid black;">24ATAPG6048D1Z6</td>
    </tr>
    <tr style="font-size:12px;text-align:left;">
        <td>PAN NO :</td>
        <td style="border-right:1px solid black;">ATAPG6048D</td>
    </tr>
    <tr style="font-size:12px;text-align:left;">
        <td>ESIC NO :</td>
        <td style="border-right:1px solid black;">38000484020001019</td>
        <td colspan="3" style="text-align:center;">
        For , Shubham Recruitment Agency Business
        </td>
    </tr>
    <tr style="font-size:12px;text-align:left;">
        <td>P F No :</td>
        <td style="border-right:1px solid black;">VDBRD2076807000</td>
    </tr>
    <tr style="font-size:12px;text-align:left;">
        <td>Bank Detail :</td>
        <td style="border-right:1px solid black;">HDFC BANK -Halol.</td>
    </tr>
    <tr style="font-size:12px;text-align:left;">
        <td>A/C NO :</td>
        <td style="border-right:1px solid black;">50200049051242</td>
    </tr>
    <tr style="font-size:12px;text-align:left;">
        <td>E. & O. E.</td>
        <td style="border-right:1px solid black;">Subject to Halol Jurisdiction</td>
        <td colspan="3" style="text-align:center;">Authorised Signatory</td>
    </tr>
</tbody>
</table>
    ';

$pdf->SetFont("times", "A", 9);
$pdf->SetY(10);
$pdf->SetX(4);
$pdf->writeHTML($output, true, false, false, false, 'C');



// Clean any content of the output buffer
ob_end_clean();

//Close and output PDF document
$pdf->Output('bill-pdf.pdf', 'I');