<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter QRCode Class
 *
 */

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

class QRcode_e
{
    public function __construct()
    {
        log_message('Debug', 'QRCode class is loaded.');
    }

    public function load()
    {
        // Include QRCode library files
        #       require_once APPPATH.'../vendor/endroid/qr-code/src/QrCode.php';
        #       require_once APPPATH.'../vendor/endroid/qr-code/src/QrCodeInterface.php';
        #       require_once APPPATH.'../vendor/endroid/qr-code/src/ErrorCorrectionLevel.php';
        #       require_once APPPATH.'../vendor/endroid/qr-code/src/LabelAlignment.php';
        #       require_once APPPATH.'../vendor/endroid/qr-code/src/WriteRegistry.php';
        #       require_once APPPATH.'../vendor/endroid/qr-code/src/WriteRegistryInterface.php';

    }

    public function create_QRcode($data, $filename)
    {
        // Create a basic QR code
        $qrCode = new QrCode($data);
        $qrCode->setSize(300);
        $qrCode->setMargin(10);

        // Set advanced options
        $qrCode->setWriterByName('png');
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
        $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
        $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
        //$qrCode->setLabel('Scan the code', 16, __DIR__.'/../assets/fonts/noto_sans.otf', LabelAlignment::CENTER());
        //$qrCode->setLogoPath(__DIR__.'/../assets/images/symfony.png');
        //$qrCode->setLogoSize(150, 200);
        $qrCode->setValidateResult(false);

        // Round block sizes to improve readability and make the blocks sharper in pixel based outputs (like png).
        // There are three approaches:
        $qrCode->setRoundBlockSize(true, QrCode::ROUND_BLOCK_SIZE_MODE_MARGIN); // The size of the qr code is shrinked, if necessary, but the size of the final image remains unchanged due to additional margin being added (default)
        $qrCode->setRoundBlockSize(true, QrCode::ROUND_BLOCK_SIZE_MODE_ENLARGE); // The size of the qr code and the final image is enlarged, if necessary
        $qrCode->setRoundBlockSize(true, QrCode::ROUND_BLOCK_SIZE_MODE_SHRINK); // The size of the qr code and the final image is shrinked, if necessary

        // Set additional writer options (SvgWriter example)
        $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

        // Directly output the QR code
        //header('Content-Type: '.$qrCode->getContentType());
        //echo $qrCode->writeString();

        // Save it to a file
        $qrCode->writeFile($filename);

        // Generate a data URI to include image data inline (i.e. inside an <img> tag)
        $dataUri = $qrCode->writeDataUri();
    }
}