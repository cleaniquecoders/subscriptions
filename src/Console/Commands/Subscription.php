<?php

namespace CleaniqueCoders\Subscriptions\Console\Commands;

use Illuminate\Console\Command;

class Subscription extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Subscription Package';

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
        // set route
        file_put_contents(
            base_path('routes/web.php'),
            PHP_EOL . '\CleaniqueCoders\Subscription\Routes\Subscription::routes()' . PHP_EOL,
            FILE_APPEND
        );

        // publish assets
        $this->call('vendor:publish', [
            '--tag' => 'subscriptions',
        ]);

        // migrate & seed
        $this->call('migrate', [
            'seed' => true,
        ]);

        $this->info('Subscription package installed.');
    }
}
