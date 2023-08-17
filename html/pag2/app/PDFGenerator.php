<?php

require '../vendor/autoload.php'; // Carga el autoloader de Composer

use Dompdf\Dompdf; //llama a la biblioteca 

class PDFGenerator {
  private $dompdf;

  //llama automáticamente cuando se crea un nuevo objeto de esta clase
  public function __construct() {
    $this->dompdf = new Dompdf();
  }

  //recibe el html
  public function generatePDF($html) {
    $this->dompdf->loadHtml($html);

    //configuraciones adicionales de dompdf
    $this->dompdf->setPaper('A4', 'portrait');

    // Renderizar el PDF
    $this->dompdf->render();

    $this->dompdf->stream("Documentos.pdf", array("Attachment" => false));
  }
}
