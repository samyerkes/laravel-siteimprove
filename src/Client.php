<?php

namespace SamYerkes\SiteImprove;

class Client
{

    public function __construct()
    {
        $this->user = config('siteimprove.user');
        $this->key = config('siteimprove.key');
        $this->baseurl = config('siteimprove.base_api');
    }

    /**
     * @param string $resource
     * @param array  $query
     *
     * @return array
     */
    public function makeRequest($endpoint)
    {
    	$resource = $this->baseurl . $endpoint;
        $process = curl_init($resource);
		curl_setopt($process, CURLOPT_HTTPHEADER, array('Accept: application/json'));
		curl_setopt($process, CURLOPT_USERPWD, $this->user . ":" . $this->key);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, true);
		 
		$response = curl_exec($process);   
        return json_decode($response);
    }
}