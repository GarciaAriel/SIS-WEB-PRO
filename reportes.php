<?
require('fpdf.php');

class PDF extends FPDF
{
//Cabecera de página
   function Header()
   {
    //Logo
    #$this->Image("leon.jpg" , 10 ,8, 35 , 38 , "JPG" ,"http://www.mipagina.com");
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Movernos a la derecha
    $this->Cell(80);
    //Título
    $this->Cell(60,10,'Reporte de Automoviles',1,0,'C');
    //Salto de línea
    $this->Ln(20);
      
   }
   
   //Pie de página
   function Footer()
   {
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
   }
   //Tabla simple
   function TablaSimple($header)
   {
    //Cabecera
    foreach($header as $col)
    $this->Cell(40,7,$col,1);
    $this->Ln();
    $db = mysql_connect("localhost", "root", "root");
    mysql_select_db("autito",$db);
    $res=mysql_query("SELECT * FROM vehiculos", $db);
    while($row=mysql_fetch_row($res)){
      $this->Cell(40,5,$row[0],1);
      $this->Cell(40,5,$row[2],1);
      $this->Cell(40,5,$row[8],1);
      $this->Cell(40,5,$row[9],1);
      $this->Cell(40,5,$row[1],1);
      $this->Ln();               
    }
   }
     
}

$pdf=new PDF();
//Títulos de las columnas
$header=array('#Placa','Modelo','Categoria','Costo','Estado');
$pdf->AliasNbPages();
//Primera página
$pdf->AddPage();
$pdf->SetY(65);
//$pdf->AddPage();
$pdf->TablaSimple($header);
$pdf->Output();
?>