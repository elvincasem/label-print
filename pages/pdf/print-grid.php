<?php

//$projectname = $_GET['projname'];
//$projectnumber = $_GET['projnumber'];
$start = $_GET['start'];
$end = $_GET['end'];

$GLOBALS['name'] = $_GET['projname'];
$GLOBALS['namecontinued'] = $_GET['projnamecontinued'];
$GLOBALS['number'] = $_GET['projnumber'];
$GLOBALS['start'] = $_GET['start'];
$GLOBALS['end'] = $_GET['end'];
$GLOBALS['pages'] = 0;
$GLOBALS['structurecopies'] = $_GET['structurelabels'];


require('fpdf.php');

class PDF_Grid extends FPDF {
    var $grid = false;
	
    function DrawGrid()
    {
		
        if($this->grid===true){
            $spacing = 5;
        } else {
            $spacing = $this->grid;
        }
        //$this->SetDrawColor(204,255,255);
        //$this->SetLineWidth(0.35);
        for($i=0;$i<$this->w;$i+=$spacing){
          //  $this->Line($i,0,$i,$this->h);
        }
        for($i=0;$i<$this->h;$i+=$spacing){
            //$this->Line(0,$i,$this->w,$i);
        }
        $this->SetDrawColor(0,0,0);

        $x = $this->GetX();
        $y = $this->GetY();
        $this->SetFont('Times','',12);
        //$this->SetTextColor(204,204,204);
        for($i=20;$i<$this->h;$i+=20){
            
			//FIRST PROJECT NAME
			$this->SetXY(10,$i-8);
            //$this->Write(4,"             Some text Here");
			$this->Cell(0,-1,$GLOBALS['name'],0,0,'C');
			
			//SECOND PROJECT NAME
			if($GLOBALS['namecontinued']!=""){
				$this->SetXY(10,$i-4);
				$this->Cell(0,-1,$GLOBALS['namecontinued'],0,0,'C');
			}
			
			
			
			
			//$this->SetXY(1,$i);
			//$this->Cell(0,5,'Center text 2:',0,2,'C');
			$label_letter = $GLOBALS['label_letter'];
			$line2 = $GLOBALS['number'] . "-" . $label_letter  . $GLOBALS['pages'];
			$this->SetX($this->lMargin);
			$this->Cell(0,7,$line2,0,0,'C');
			
			//footer
			$this->SetX($this->lMargin);
			 $this->SetFont('Times','B',10);
			$this->Cell(0,19,'Evans Consoles Corporation',0,0,'C');
			$this->SetX($this->lMargin);
			$this->SetFont('Times','I',8);
			$this->Cell(0,25,'Made In Canada',0,0,'C');
			//$this->Write(4,"Some text Here2");
			
			
        }
        for($i=20;$i<(($this->w)-($this->rMargin)-10);$i+=20){
            $this->SetXY($i-1,1);
            //$this->Write(4,$i);
        }
        $this->SetXY($x,$y);
    }

    function Header()
    {
        //if($this->grid)
			
			//$this->Image('../images/preview-logo-p-s3.png',0,0,0,0);
			$this->Image('../images/evans-logo-big.png',2,2,70);
            $this->DrawGrid();
    }
}

$pdf = new PDF_Grid('L','mm',array(31.75,76.2));
//$pdf = new PDF_Grid('L','in',array(1.25,3));

// Add page with a grid and default spacing (5mm)

if($GLOBALS['structurecopies']!=""){
	$GLOBALS['pages']=$start;
	$numberofcopies = $GLOBALS['structurecopies'];
	for($copies=1;$copies<=$numberofcopies;$copies++){
		
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
		
	}
		
}else{
	
	if($_GET['labela']=="1"){
		$GLOBALS['label_letter']="A-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	if($_GET['labelb']=="1"){
		$GLOBALS['label_letter']="B-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	if($_GET['labelb1']=="1"){
		$GLOBALS['label_letter']="B1-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	if($_GET['labelb2']=="1"){
		$GLOBALS['label_letter']="B2-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	if($_GET['labelc']=="1"){
		$GLOBALS['label_letter']="C-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	if($_GET['labeld']=="1"){
		$GLOBALS['label_letter']="D-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	if($_GET['labele']=="1"){
		$GLOBALS['label_letter']="E-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	if($_GET['labelf']=="1"){
		$GLOBALS['label_letter']="F-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	if($_GET['labelg']=="1"){
		$GLOBALS['label_letter']="G-";
		$GLOBALS['pages']=$start;
		for($pages=$start;$pages<=$end;$pages++){
		$pdf->grid = true;
		$pdf->AddPage();
		$GLOBALS['pages']=$pages;
		}
	}
	
	
	
	
	/*
	
	$GLOBALS['pages']=$start;
	for($pages=$start;$pages<=$end;$pages++){
	$pdf->grid = true;
	$pdf->AddPage();
	$GLOBALS['pages']=$pages;
	}
	*/

	
}

/*
$GLOBALS['pages']=$start;
for($pages=$start;$pages<=$end;$pages++){
$pdf->grid = true;
$pdf->AddPage();
$GLOBALS['pages']=$pages;
}*/


// Add page with a grid (10mm spacing)
//$pdf->grid = 10;
//$pdf->AddPage();

// Disable grid
//$pdf->grid = true;
//$pdf->AddPage();

$pdf->Output();
?>