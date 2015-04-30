<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Contact;

class ContactsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('contacts')->delete();

        Contact::create(array(
            'name' => 'Bob Smith',
            'phone' => '0123456789'
        ));

        Contact::create(array(
            'name' => 'Peter Plucinski',
            'phone' => '0405791622'
        ));

        Contact::create(array(
            'name' => 'Jane Smith',
            'phone' => '0987654321'
        ));
    }
}