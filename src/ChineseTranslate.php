<?php

namespace Jiemoon\ChineseSlug;

class ChineseTranslate
{

    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }


    public function translate($string, $server_name = 'baidu')
    {
        // TODO
        // server_name baidu \ youdao \ google
        $baidu = $this->config[$server_name];
        $salt = rand();
        $sign = md5($baidu['api_id'] . $string . $salt . $baidu['api_secret']);
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://api.fanyi.baidu.com/api/trans/vip/translate', [
            'query' => [
                'q' => $string,
                'from' => 'zh',
                'to' => 'en',
                'appid' => $baidu['api_id'],
                'salt' => $salt,
                'sign' => $sign
            ]
        ]);

        $body = json_decode($res->getBody(), true);
        $trans_result = $body['trans_result'][0]['dst'];
        $slug = strtolower($trans_result);

        return $slug;
    }
}
