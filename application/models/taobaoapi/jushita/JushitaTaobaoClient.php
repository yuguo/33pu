<?php
/**
 * 聚石塔客户端
 */
if (!defined("___TOPPHPSDK_PHP__")) {
    define("___TOPPHPSDK_PHP__", "1");
    define("__TOPJUSHITASDKDIR__", dirname(__FILE__));
    define("__TOPJUSHITASDKDS__", DIRECTORY_SEPARATOR);
    require  __TOPJUSHITASDKDIR__ . __TOPJUSHITASDKDS__ . '..' . __TOPJUSHITASDKDS__ . 'TopSdk.php';

    class JushitaRequest{
        protected $apiName;
        protected $params;

        function __construct($apiName, $params)
        {
            $this->apiName = $apiName;
            $this->params = $params;
        }
        public function getApiMethodName(){
            return $this->apiName;
        }

        public function getApiParas(){
            return $this->params;
        }

        public function check(){
            return true;
        }
    }

    class JushitaTaobaoClient
    {
        protected $conTimeOut = 10;
        protected $readTimeOut = 10;
        protected $client; //top client
        protected $signMethod;//sign method

        public function __construct($serverUrl = NULL, $appKey, $appSecret, $connectTimeOut = 10, $readTimeOut = 10,
                                    $signMethod = "md5")
        {
            $this->client = new TopClient();
            if ($serverUrl) {
                $this->client->gatewayUrl = $serverUrl;
            }else{
                $this->client->gatewayUrl = "http://eai.tmall.com/api";
            }
            $this->client->appkey = $appKey;
            $this->client->secretKey = $appSecret;
            $this->conTimeOut = intval($connectTimeOut);
            $this->readTimeOut = intval($readTimeOut);
            if($signMethod == "md5"){
                $this->signMethod = $signMethod;
            }
        }

        /**
         * 执行API调用
         * 支持两种类型的调用
         * execute($object,$session);
         * execute($apiName,$params,$session);
         * @param $v1
         * @param $v2
         * @param $v3
         * @return string|object
         */
        public function execute($v1, $v2, $v3 = null)
        {
            if (!is_string($v1)) {
                return $this->client->execute($v1, $v2);
            } else {
                return $this->_exec($v1, $v2, $v3);
            }
        }

        protected function _exec($apiName, $params, $session)
        {
            if(isset($params['format'])){
                $formatStr = strtolower($params['fomart']);
                if("json" === $formatStr || "xml" === $formatStr){
                    $this->format = $formatStr;
                    unset($params['format']);
                }
            }
            $request = new JushitaRequest($apiName,$params);
            return $this->client->execute($request,$session);
        }
    }
}

