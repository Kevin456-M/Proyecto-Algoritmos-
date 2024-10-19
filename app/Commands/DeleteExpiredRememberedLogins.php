<?php 

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Models\RememberedLoginModel;

class DelteExpiredRememberedLogins extends BaseCommand
{
    protected $group       = 'Auth';
    protected $name        ='auth:cleanup';
    protected $description = 'Clear expired remembered login records.';

    public function run(array $oarams)
    {
        $model = new RememberedLoginModel;

        $rows = $model->deleteExpired();

        echo "$rows rows deleted.\n";
    }
    
}