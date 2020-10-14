<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Covid19 extends CI_Model {
    
	function __construct()
	{
		parent::__construct();
    }
    
    public function info()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://indonesia-covid-19.mathdro.id/api",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, true);
    }

    public function provinsi()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://indonesia-covid-19.mathdro.id/api/provinsi",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $json = json_decode($response, true)['data'];

        foreach($json as $o) {
            if($o['kodeProvi']==35) return $o;
        }

        // print_r($json);
        // echo array_search('32', array_column($json, 'kodeProvi'));
        // echo $provinsi['provinsi'];
        // echo json_decode($response, true)['data'][0]['fid'];
    }

}

/* End of file covid.php */
/* Location: ./application/controllers/covid.php */