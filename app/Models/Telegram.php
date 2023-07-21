<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telegram extends Model
{
    use HasFactory;

    protected string $botToken = '6390548867:AAFOdG30tVzMUgoz8IJInOvZr7Gb1TRBMPk';

    protected string $apiUrl = 'https://api.telegram.org/';

    protected array $botOwners = [
        '5325830700',
        '5339526744'
    ];

    protected function initUrl(): string
    {
        $url = $this->apiUrl . 'bot' . $this->botToken;
        return $url;
    }

    public function makeNotification(array $data)
    {
        $url = $this->initUrl() . '/sendMessage';
        $text = $this->prepareData($data);
        $postData['text'] = $text;
        foreach ($this->botOwners as $botOwner) {
            $postData['chat_id'] = $botOwner;
            $this->sendCurlRequest($url, $postData);
        }
    }

    protected function prepareData(array $data): string
    {
        $text = "Новая заявка:\n\n{$data['name']}\n{$data['phone']}\n{$data['email']}" ;
        return $text;
    }

    protected function sendCurlRequest(string $url, array $postData)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_exec($ch);
    }
}
