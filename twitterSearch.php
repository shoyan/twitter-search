<?php
/**
 * twitter search api class
 */
class TwitterSearch {
    
    /**
     * Current request params
     *
     * @var array
     */
    private $requestParams = array();

    /**
     * Request url is twitter search api
     *
     * @var string
     */
    public $url = 'http://search.twitter.com/search.json?';

    /**
     * set method.
     *
     * @param array $requestParams
     * @return void
     */
    public function setRequestParam($requestParams)
    {
        $this->requestParams = array_merge($this->requestParams, $requestParams);
    }

    /**
     * get method.
     *
     * @return $requestParams
     */
    public function getRequestParam()
    {
        return $this->requestParams;
    }

    /**
     * count up page number
     *
     * @return void
     */
    public function upPage()
    {
        $this->requestParams['page']++;
    }

    /**
     * Search results . 
     *
     * @param string $url
     * @return 読み込んだデータを返す
     */
    public function httpRequest($url)
    {
        return file_get_contents($url);
    }

    /**
     * json decode
     *
     * @param $data json data
     * @return arary json decode data
     */
    public function jsonDecode($data)
    {
        return json_decode($data);
    }
    
    /**
     * generate search api request url
     * 
     * @param array $reuquestParam
     * @return search url
     */
    public function generateUrl()
    {
        return $this->url . http_build_query($this->requestParams);
    }
}
