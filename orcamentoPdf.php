<?php
// referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// incluindo autoloader
include_once 'dompdf/autoload.inc.php';
    
    //Criando a instancia 
    $dompdf = new Dompdf();

    // Arquivo que irar se transformar em pdf
    $dompdf->load_html('Teste');

    // Renderizar o html 
    $dompdf->render();

    // Exibir a Página
    $dompdf->stream("Orçamento_Oliveira_Construção.pdf", 
        array(
            "Attachment"=> false //Para realizar o download somente alterar para true
        ));

?>
