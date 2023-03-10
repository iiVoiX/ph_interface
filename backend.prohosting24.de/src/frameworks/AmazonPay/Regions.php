<?php
namespace AmazonPay;



class Regions
{
    public $mwsServiceUrls = array('eu' => 'mws-eu.amazonservices.com',
				   'na' => 'mws.amazonservices.com',
				   'jp' => 'mws.amazonservices.jp');
    
    public $profileEndpointUrls = array('uk' => 'amazon.co.uk',
					'us' => 'amazon.com',
					'de' => 'amazon.de',
					'jp' => 'amazon.co.jp');
    
    public $regionMappings = array('de' => 'eu',
				   'uk' => 'eu',
				   'us' => 'na',
				   'jp' => 'jp');
}
