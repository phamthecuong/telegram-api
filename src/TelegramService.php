<?php

namespace  Pcplus\TeleApi;

use GuzzleHttp\Client;


class TelegramService {

    private $clientRequest;

    private $botId;

    private $chatId;

    private $teleUrl = 'https://api.telegram.org';

    public function __construct($botId, $chatId)
    {
        $this->botId = $botId;
        $this->chatId = $chatId;
        $this->clientRequest = new Client();
    }

    public function pushNotification($message)
    {
        $url = $this->teleUrl.'/bot' . $this->botId . '/sendMessage';

        $response = $this->clientRequest->request('GET', $url, [
            'query' => [
                'text' => $message,
                'chat_id' => $this->chatId,
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true
            ]
        ]);

        $data = json_decode($response->getBody());

        return [
            'data' => $data
        ];
    }

}
