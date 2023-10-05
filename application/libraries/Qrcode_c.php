<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter QRCode Class
 *
 */

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class QRcode_c
{
    public function __construct() {
        log_message('Debug', 'QRCode class is loaded.');
    }

    public function load() {
        // Include QRCode library files
        require_once APPPATH.'../vendor/chillerlan/php-qrcode/src/QRCode.php';
        require_once APPPATH.'../vendor/chillerlan/php-qrcode/src/QRCodeException.php';
        require_once APPPATH.'../vendor/chillerlan/php-qrcode/src/QROptions.php';

    }

    public function qrimage($data) {
        return (new QRCode)->render($data);
    }
}
