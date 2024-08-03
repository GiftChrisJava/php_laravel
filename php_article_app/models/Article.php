<?php

class Article
{
    private $apiUrl = 'http://127.0.0.1:8000/api/articles';

    public function getAll()
    {
        return json_decode(file_get_contents($this->apiUrl), true);
    }

    public function get($id)
    {
        return json_decode(file_get_contents($this->apiUrl . '/' . $id), true);
    }

    public function create($data)
    {
        return $this->sendRequest('POST', $this->apiUrl, $data);
    }

    public function update($id, $data)
    {
        return $this->sendRequest('PUT', $this->apiUrl . '/' . $id, $data);
    }

    public function delete($id)
    {
        return $this->sendRequest('DELETE', $this->apiUrl . '/' . $id);
    }

    private function sendRequest($method, $url, $data = [])
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if (!empty($data)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        }
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}
?>
