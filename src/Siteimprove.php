<?php

namespace VCU\SiteImprove;

use VCU\SiteImprove\Client;

class Siteimprove
{
	public function __construct() {
		$this->client = new Client();
	}

    public function all()
    {
        return collect($this->client->makeRequest('/sites')->items);
    }

    public function find($id)
    {
        return $this->client->makeRequest('/sites/'. $id);
    }

    public function accessibilitySummary($id)
    {
        return collect($this->client->makeRequest('/sites/'. $id . '/accessibility/overview/summary')->items);
    }

}