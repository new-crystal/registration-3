<?php

defined('BASEPATH') or exit('No direct script access allowed');

class JsonController extends CI_Controller
{
    public function updateJson()
    {
        // JSON 파일 경로 설정
        $filePath = FCPATH . 'writable/json/access.json';

        // 요청 데이터 가져오기 (CI3 방식)
        $inputData = file_get_contents('php://input'); // 원시 JSON 데이터 읽기
        $requestData = json_decode($inputData, true); // JSON 문자열 -> 배열

        if ($requestData === null) {
            // 잘못된 JSON 데이터
            $this->output
                ->set_status_header(400)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Invalid JSON data']));
            return;
        }

        // 기존 JSON 파일 읽기
        if (file_exists($filePath)) {
            $jsonData = json_decode(file_get_contents($filePath), true);
            if ($jsonData === null) {
                // 기존 파일이 JSON 형식이 아님
                $this->output
                    ->set_status_header(500)
                    ->set_content_type('application/json')
                    ->set_output(json_encode(['error' => 'Error parsing existing JSON file']));
                return;
            }
        } else {
            $jsonData = [];
        }

        // 새 데이터 추가
        $jsonData[] = $requestData;

        // JSON 파일에 쓰기
        if (file_put_contents($filePath, json_encode($jsonData, JSON_PRETTY_PRINT))) {
            $this->output
                ->set_status_header(200)
                ->set_content_type('application/json')
                ->set_output(json_encode(['message' => 'JSON updated successfully']));
        } else {
            // 파일 쓰기 실패
            $this->output
                ->set_status_header(500)
                ->set_content_type('application/json')
                ->set_output(json_encode(['error' => 'Failed to write to file']));
        }
    }
}
