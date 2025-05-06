<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;

class PdfGenerator
{
    private $pdfOptions;

    public function __construct(array $pdfOptions = [])
    {
        // Valeurs par défaut
        $defaults = [
            'defaultFont' => 'Arial',
            'isRemoteEnabled' => true,
            'tempDir' => sys_get_temp_dir().'/dompdf'
        ];

        $this->pdfOptions = array_merge($defaults, $pdfOptions);
    }

    public function generatePdf(string $html, string $filename = 'document.pdf'): Response
    {
        $options = new Options();
        $options->set('defaultFont', $this->pdfOptions['defaultFont']);
        $options->set('isRemoteEnabled', $this->pdfOptions['isRemoteEnabled']);
        $options->set('tempDir', $this->pdfOptions['tempDir']);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'inline; filename="'.$filename.'"');

        return $response;
    }
}