<?php

class Database
{
    protected $curl;

    public function __construct($url)
    {
        $this->curl = curl_init($url);
    }

    public function query($sql)
    {
        curl_setopt(CURLOPT_POSTFIELDS, $sql);
        curl_exec($this->curl);
    }
}

$db = new Database('https://sheetbase.herokuapp.com');

$db->query("");
