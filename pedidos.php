<?php

include 'fpdf.php';
include '../conexion.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
        // EL PRIMERO ES PARA MOVER A LA IZQUIERDA DERECHA
    // EL SEGUNDO PARA MOVER ARRIBA Y ABAJO
    // EL TERCERO ES EL TAMAÑO DE LA IMAGEN
    $this->SetFont('Courier','',15);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(50,10,'TICKET DE VENTA',0,0,'C');
    $this->Image('../img/logo.png',85,20,40,40);

    $this->SetFont('Courier','',10);

    date_default_timezone_set('America/Mexico_City');
    $hora = date('d-m-Y H:i:s'); // Cambia el formato según tus necesidades
    $this->Cell(-40,110,'Fecha y Hora generada: '. $hora,0,0,'C');
    $this->SetFont('Courier','U',10);

    $this->Cell(40,120,'No de Pedido: 123456789',0,0,'C');
    $this->SetFont('Courier','',10);

    $this->Cell(-40,130,'Direccion: Av. Universidad Tecnologica Lote Grande',0,0,'C');
    $this->Cell(40,140,'1, 96360 Nanchital de Lazaro Cardenas del Rio, Ver.',0,0,'C');
    $this->Cell(-50,150,'----------------------------------------------------------------------------------------',0,0,'C');
    // Salto de línea
    $this->Ln(80);
    $this->SetFont('Courier','B',10);
    $this->Cell(30,10, 'Id del Producto',0,0,'C',0);
    $this->Cell(80,10, 'Numero de Venta',0,0,'C',0);
    $this->Cell(40,10, 'Nombre',0,0,'C',0);
    $this->Cell(40,10, 'Fecha',0,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$consulta = "SELECT * FROM pedidos";
    $resultado = $conn->query($consulta);
    $pdf = new PDF();
    $pdf -> AliasNbPages();
    $pdf->AddPage('');

    while ($row = $resultado->fetch_assoc()){
    
        $pdf->SetFont('Courier','B',10);
        $pdf->Cell(30,10, $row['id_pedido'],0,0,'C',0);
        $pdf->Cell(80,10, $row['numero_venta'],0,0,'C',0);
        $pdf->Cell(40,10, $row['nombre'],0,0,'C',0);
        $pdf->Cell(40,10, $row['fecha'],0,1,'C',0);
        
    }

    $pdf->Cell(190,10, '----------------------------------------------------------------------------------------',0,1,'C',0);

$pdf->Output();
?>