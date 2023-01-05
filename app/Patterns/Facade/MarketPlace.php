<?php

namespace App\Patterns\Facade;

use App\Patterns\Facade\Classes\Subsystem\Database;
use App\Patterns\Facade\Classes\Subsystem\ProviderCommunication;
use App\Patterns\Facade\Classes\Subsystem\Site;

class MarketPlace
{
    private ProviderCommunication $providerCommunication;
    private Site $site;
    private Database $database;

    /**
     * @param ProviderCommunication $providerCommunication
     * @param Site $site
     * @param Database $database
     */
    public function __construct()
    {
        $this->providerCommunication = new ProviderCommunication();
        $this->site = new Site();
        $this->database = new Database();
    }

    public function productReceipt(): void
    {
        $this->providerCommunication->receive();
        $this->site->placement();
        $this->database->insert();
    }

    public function productRelease(): void
    {
        $this->providerCommunication->payment();
        $this->site->del();
        $this->database->del();
    }


}
