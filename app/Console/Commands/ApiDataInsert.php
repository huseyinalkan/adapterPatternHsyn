<?php

namespace App\Console\Commands;

use App\Currency\CurrencyGateway;
use App\Http\GetDataAdapter;
use App\Http\Models\CashData;
use Illuminate\Console\Command;

class ApiDataInsert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ApiDataInsert:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bu komut ile apilerden gelen verileri database kaydetme işlemini başlatırsınız.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $api_aryy = array(
            \App\Currency\Providers\Provider1::class,
            \App\Currency\Providers\Provider2::class,
        );

        foreach ($api_aryy as $provider) {
            $provider_object = new $provider;
            $result = (new CurrencyGateway($provider_object))->provider->saveData();

            if ($result) {
                $this->info('Apilerden veriler sisteme aktarıldı.');
            } else {
                $this->error('Veriler sisteme aktarılamadı.');
            }
        }

    }
}
