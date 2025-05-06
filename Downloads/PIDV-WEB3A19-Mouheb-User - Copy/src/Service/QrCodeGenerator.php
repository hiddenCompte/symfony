<?php
// src/Service/QrCodeGenerator.php
namespace App\Service;

use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class QrCodeGenerator
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function generateForMission(int $missionId): string
    {
        // Génère directement l'URL vers la page de détail de la mission
        $url = $this->urlGenerator->generate(
            'app_mission_show', // Nom de la route de détail de mission
            ['id' => $missionId],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        $renderer = new ImageRenderer(
            new RendererStyle(300),
            new SvgImageBackEnd()
        );

        $writer = new Writer($renderer);
        $svgContent = $writer->writeString($url);

        return 'data:image/svg+xml;base64,' . base64_encode($svgContent);
    }
}