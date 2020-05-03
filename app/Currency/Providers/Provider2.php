<?php

namespace App\Currency\Providers;

use App\Http\Models\CashData;

class Provider2 implements ProviderInterface
{
    const api_url='http://www.mocky.io/v2/5a74524e2d0000430bfe0fa3';
    private $price_types=[
        'DOLAR'=>'usd',
        'AVRO'=>'euro',
        'İNGİLİZ STERLİNİ'=>'gbp',
    ];

    public function getData()
    {
        $client =new \GuzzleHttp\Client();
        $apiresponse = $client->request('GET', self::api_url);
        $apiresponse = json_decode($apiresponse->getBody()->getContents());

        $data_arry=[];

        for($i=0;$i<count($apiresponse);$i++){
            if (isset($this->price_types[$apiresponse[$i]->kod])){
                $data_arry[]=[
                    'price_type'=>$this->price_types[$apiresponse[$i]->kod],
                    'price_amount'=>$apiresponse[$i]->oran,
                    'api_name'=>'api2',
                ];
            }
        }

        return $data_arry;

    }

    public function saveData()
    {
        // TODO: Implement saveData() method.
        $data=$this->getData();
        $result = CashData::insert($data);

        return $result;
    }
}
