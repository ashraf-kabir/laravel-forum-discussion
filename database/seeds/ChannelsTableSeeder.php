<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel 7',
            'slug' => str_slug('Laravel 7')
        ]);

        Channel::create([
            'name' => 'Vue js',
            'slug' => str_slug('Vue js')
        ]);

        Channel::create([
            'name' => 'Node js',
            'slug' => str_slug('Node js')
        ]);

        Channel::create([
            'name' => 'Angular js',
            'slug' => str_slug('Angular js')
        ]);
    }
}
