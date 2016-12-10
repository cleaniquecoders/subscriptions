<?php

use CleaniqueCoders\Subscriptions\Subscriptions\Subscription;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'name' => 'Free Trial Package',
                'label' => 'Free',
                'status' => 1,
                'type' => 0,
                'duration' => 1,
                'price' => 0.00,
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempus aliquam bibendum. Ut venenatis quam at neque consectetur condimentum. Etiam ut dapibus elit, ac iaculis lacus. Curabitur nulla nisl, aliquam sed feugiat sit amet, tincidunt sit amet mauris. Curabitur ac finibus ipsum. Nunc nisi nulla, commodo in rutrum ac, rhoncus a massa. Nam finibus placerat orci et elementum.',
                'meta' => [],
            ],
            [
                'name' => 'Basic Package',
                'label' => 'Basic',
                'status' => 1,
                'type' => 0,
                'duration' => 6,
                'price' => 25.00,
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempus aliquam bibendum. Ut venenatis quam at neque consectetur condimentum. Etiam ut dapibus elit, ac iaculis lacus. Curabitur nulla nisl, aliquam sed feugiat sit amet, tincidunt sit amet mauris. Curabitur ac finibus ipsum. Nunc nisi nulla, commodo in rutrum ac, rhoncus a massa. Nam finibus placerat orci et elementum.',
                'meta' => [],
            ],
            [
                'name' => 'Enterprise Package',
                'label' => 'Enterprise',
                'status' => 1,
                'type' => 0,
                'duration' => 12,
                'price' => 125.00,
                'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempus aliquam bibendum. Ut venenatis quam at neque consectetur condimentum. Etiam ut dapibus elit, ac iaculis lacus. Curabitur nulla nisl, aliquam sed feugiat sit amet, tincidunt sit amet mauris. Curabitur ac finibus ipsum. Nunc nisi nulla, commodo in rutrum ac, rhoncus a massa. Nam finibus placerat orci et elementum.',
                'meta' => [],
            ],
        ];
        Subscription::truncate();
        foreach ($list as $key => $value) {
            Subscription::create($value);
        }
        $this->command->info('Subscriptions successfully seeded.');
    }
}
