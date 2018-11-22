<?php

class PDF extends FPDF
{
    function BuildTable($header,$data)
    {
        //print_r($header);
        //print_r($data);
        //Colors, line width and bold font
        $this->SetFillColor(230,230,230);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        //Header
        // make an array for the column widths
        $w=array(12,40,12,40,15,40,40);
        //$w=array(12,40,12,40);
        // send the headers to the PDF document
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',1);
        $this->Ln();
        //Color and font restoration
        $this->SetFillColor(175);
        $this->SetTextColor(0);
        $this->SetFont('');
        //now spool out the data from the $data array
        $fill=0;  // used to alternate row color backgrounds
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row['id'],'LR',0,'C',$fill);   
            $this->Cell($w[1],6,$row['name'],'LR',0,'C',$fill);
            $this->Cell($w[2],6,$row['price'],'LR',0,'C',$fill);
            $this->Cell($w[3],6,$row['authors'],'LR',0,'C',$fill);
            $this->Cell($w[4],6,$row['isbn'],'LR',0,'C',$fill);
            $this->Cell($w[5],6,$row['publisher'],'LR',0,'C',$fill);
            $this->Cell($w[6],6,$row['published_date'],'LR',0,'C',$fill);

            $this->Ln();
            $fill =! $fill;
        }
        $this->Cell(array_sum($w),0,'','T');
    }
}


?>