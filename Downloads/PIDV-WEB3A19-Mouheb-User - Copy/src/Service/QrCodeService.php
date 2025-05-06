<?php

namespace App\Service;

use App\Entity\Mission;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\HttpFoundation\File\File;

final class QrCodeService
{
    public function generateForMission(Mission $mission): File
    {
        $content = sprintf(
            'Mission: %s\nID: %d\nDescription: %s',
            $mission->getTitre(),
            $mission->getId(),
            $mission->getDescription()
        );

        $path = sprintf(
            'public/qrcodes/mission_%d.png',
            $mission->getId()
        );

        return $this->generateQrCodeFile($content, $path);
    }

    public function generateQrCode(array $data): string
    {
        // Format the content in a more professional way
        $content = sprintf(
            "Candidature Details\n------------------\n" .
            "Candidat: %s\n" .
            "Mission: %s\n" .
            "Date: %s\n" .
            "ID: %s\n" .
            "------------------\n" .
            " PIDEV",
            $data['user'],
            $data['mission'],
            $data['date'],
            $data['id'],
            date('Y')
        );

        $qrCode = QrCode::create($content)
            ->setEncoding(new Encoding('UTF-8'))
            ->setSize(300)
            ->setMargin(10)
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Add logo if logo file exists
        $logoPath = 'public/images/logo.png';
        if (file_exists($logoPath)) {
            $logo = Logo::create($logoPath)
                ->setResizeToWidth(50);
            $qrCode->setLogo($logo);
        }

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        return base64_encode($result->getString());
    }

    private function generateQrCodeFile(string $content, string $path): File
    {
        // Ensure the directory exists
        $directory = dirname($path);
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        $qrCode = QrCode::create($content)
            ->setEncoding(new Encoding('UTF-8'))
            ->setSize(300)
            ->setMargin(10)
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Add logo if logo file exists
        $logoPath = 'public/images/logo.png';
        if (file_exists($logoPath)) {
            $logo = Logo::create($logoPath)
                ->setResizeToWidth(50);
            $qrCode->setLogo($logo);
        }

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        // Save the QR code
        $result->saveToFile($path);

        return new File($path);
    }
}
