<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Agents\UpdateAgent;

class UpdateCourse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'course:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It command used to update the exchange rate with the help of CRON';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(UpdateAgent $upd)
    {
        parent::__construct();
        $this->updateAgent = $upd;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = "https://www.bcc.kz/about/kursy-valyut/";

        $html = file_get_contents( $url );
        $doc = \phpQuery::newDocumentHTML( $html, 'windows-1251' );
        $price = $doc->find('.bcc_full .s_table_over:nth-child(4) tbody tr:nth-child(3) td:nth-child(3)')->text();

        $this->updateAgent->update('prices', 0, ['dollar' => $price]);
        echo('Course success update. USD to KZT course value = ' . $price."\n");
    }

}
