<?php
	require('fpdf/fpdf.php');

	$date="8 มีนาคม 2561";
	$title="ขออนุมัติจัดสอบนอกตารางสอบ";
	$to="เรียน	คณบดีคณะวิศวกรรมศาสตร์ ";
	$subject="303327 Power System Analysis กลุ่มที่ 2 ภาคเรียนที่ 1";
	$after_effect="นั้น ดังนั้น จึงขออนุมัติจัดสอบรายวิชาดังกล่าวนอกตารางสอบในวันที่";
	$in_date="10 มีนาคม 2561 ";
	$room="EN509";
	$time="16:00-18:00";
	$fullname="ผู้ช่วยศาสตราจารย์ ดร.ปิยดนัย  ภาชนะพรรณ์";


	
	$pdf=new FPDF('P' , 'mm' , 'A4' );
	$pdf->AddFont('THSarabun','','THSarabun.php');
	$pdf->AddFont('THSarabun','B','THSarabun Bold.php');
	$pdf->AddFont('THSarabun','I','THSarabun Italic.php');
	$pdf->AddFont('THSarabun','BI','THSarabun Bold Italic.php');

	$pdf->AddPage();

	$pdf->SetFont('THSarabun','B',29);
	$pdf->SetXY(18,15);
	$pdf->SetFillColor(255,255,255);
	$pdf->Cell(180,10,iconv( 'UTF-8','cp874' , 'บันทึกข้อความ' ),0,0,'C',true);
 	$pdf-> Image('images/garuda.jpg',30,15,14,15,'jpg');

	$pdf->SetFont('THSarabun','B',20);
	$pdf->Text(30 , 40 ,  iconv( 'UTF-8','cp874' , 'ส่วนราชการ'));
	$pdf->SetFont('THSarabun','',16);
	$pdf->Text(60 , 40 ,  iconv( 'UTF-8','cp874' , 'คณะวิศวกรรมศาสตร์  ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์'));
	$pdf->Line(54,41,160,41); 
	$pdf->SetFont('THSarabun','B',16);
	$pdf->Text(160 , 40 ,  iconv( 'UTF-8','cp874' , 'โทร'));
	$pdf->Line(166,41,185,41); 
	$pdf->SetFont('THSarabun','',16);
	$pdf->Text(170 , 40 ,  iconv( 'UTF-8','cp874' , '4371'));

	$pdf->SetFont('THSarabun','B',20);
	$pdf->Text(30 , 48 ,  iconv( 'UTF-8','cp874' , 'ที่'));
	$pdf->SetFont('THSarabun','',16);
	$pdf->Text(40 , 48 ,  iconv( 'UTF-8','cp874' , 'ศธ 0527.09.03/'));

	$pdf->SetFont('THSarabun','B',20);
	$pdf->Text(120 , 48 ,  iconv( 'UTF-8','cp874' , 'วันที่'));
	$pdf->Line(33,49,120,49); 
	$pdf->SetFont('THSarabun','',16);
	$pdf->Text(140 , 48 ,  iconv( 'UTF-8','cp874' , $date));
	$pdf->Line(130,49,185,49); 


	$pdf->SetFont('THSarabun','B',20);
	$pdf->Text(30 , 56 ,  iconv( 'UTF-8','cp874' , 'เรื่อง'));
	$pdf->SetFont('THSarabun','',16);
	$pdf->Text(42 , 56 ,  iconv( 'UTF-8','cp874' , $title));
	$pdf->Line(38,57,185,57); 


	$pdf->SetFont('THSarabun','',16);
	$pdf->Text(30 , 64 ,  iconv( 'UTF-8','cp874' , $to));

	$pdf->SetFont('THSarabun','',16);
	$pdf->Text(50 , 72 ,  iconv( 'UTF-8','cp874' , "ตามที่ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ เปิดการเรียนการสอน"));
	//$pdf->Text(30 , 80 ,  iconv( 'UTF-8','cp874' , "ในรายวิชา  ".$subject));
	

	$pdf->SetFont('THSarabun','',16);
	$pdf->SetXY(30,74);
	$pdf->SetFillColor(255,255,255);
	$pdf->MultiCell(160,8,iconv( 'UTF-8','cp874' , "ในรายวิชา  ".$subject." ".$after_effect." เวลา ".$time." น. ห้อง ".$room ),0);
	//$pdf->Cell(160,8,iconv( 'UTF-8','cp874' , "ในรายวิชา  ".$subject.$subject ),1,1,'L',false);

	
	$start_y = $pdf->GetY();
	$start_y +=8;

	$pdf->SetFont('THSarabun','',16);
	$pdf->Text(50 , $start_y ,  iconv( 'UTF-8','cp874' , 'จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ'));
	

	$start_y +=27;
	$pdf->SetFont('THSarabun','',16);
	$pdf->SetXY(60,$start_y);
	$pdf->SetFillColor(255,255,255);
	//$pdf->MultiCell(115,8,iconv( 'UTF-8','cp874' , $fullname ),1);
	$pdf->Cell(115,8,iconv( 'UTF-8','cp874' , "( ".$fullname." )"  ),0,0,'C',false);

	$start_y +=8;
	$pdf->SetFont('THSarabun','',16);
	$pdf->SetXY(60,$start_y);
	$pdf->SetFillColor(255,255,255);
	//$pdf->MultiCell(115,8,iconv( 'UTF-8','cp874' , "อาจารย์ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์ " ),1);
	$pdf->Cell(115,8,iconv( 'UTF-8','cp874' , "อาจารย์ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์"  ),0,0,'C',false);

	$start_y +=8;
	$pdf->SetFont('THSarabun','',16);
	$pdf->SetXY(60,$start_y);
	$pdf->SetFillColor(255,255,255);
	//$pdf->MultiCell(115,8,iconv( 'UTF-8','cp874' , "อาจารย์ภาควิชาวิศวกรรมไฟฟ้าและคอมพิวเตอร์ " ),1);
	$pdf->Cell(115,8,iconv( 'UTF-8','cp874' , "คณะวิศวกรรมศาสตร์"  ),0,0,'C',false);

	$pdf->Output();

?>