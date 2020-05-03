<?php

namespace App\Currency\Providers;

use App\Http\Models\CashData;

class Provider1 implements ProviderInterface
{
    const api_url='http://www.mocky.io/v2/5a74519d2d0000430bfe0fa0';
    private $price_types=[
        'USDTRY'=>'usd',
        'EURTRY'=>'euro',
        'GBPTRY'=>'gbp',

    ];
    public function getData()
    {
        $client =new \GuzzleHttp\Client();
        $apiresponse = $client->request('GET', self::api_url);
        $apiresponse = json_decode($apiresponse->getBody()->getContents());

        $data_arry=[];
        foreach ($apiresponse->result as $key=>$value) {
            if (isset($this->price_types[$value->symbol])){
                $data_arry[] = [
                    'price_type' => $this->price_types[$value->symbol],
                    'price_amount' => $value->amount,
                    'api_name' => 'api1',
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
