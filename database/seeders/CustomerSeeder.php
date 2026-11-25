<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customer = Customer::create(['name' => 'Fatin Tsani',            'phone' => '081234567890',            'address' => 'Bandung',]);
        $customer->transactions()->create(['invoice' => 'LDY-001',            'weight' => 3.5,            'total_price' => 17500,            'status' => 'processing',]);
        $customer->transactions()->create(['invoice' => 'LDY-002',            'weight' => 2.0,            'total_price' => 10000,            'status' => 'completed',]);
    }
}
