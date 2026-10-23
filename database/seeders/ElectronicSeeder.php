<?php

namespace Database\Seeders;

use App\Models\Electronic;
use Illuminate\Database\Seeder;

class ElectronicSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'AeroBook Pro 14',
                'brand' => 'AeroTech',
                'specs' => 'Intel Core i5, RAM 16 GB, SSD 512 GB, layar 14 inci Full HD',
                'price' => 12499000,
                'image' => 'laptop.svg',
                'category' => 'Laptop',
            ],
            [
                'name' => 'NovaPhone X5',
                'brand' => 'Nova',
                'specs' => 'Layar AMOLED 6.5 inci, RAM 8 GB, penyimpanan 256 GB, kamera 50 MP',
                'price' => 5799000,
                'image' => 'smartphone.svg',
                'category' => 'Smartphone',
            ],
            [
                'name' => 'Sonic Wireless Pro',
                'brand' => 'Sonic',
                'specs' => 'Headphone wireless, noise cancelling, baterai hingga 30 jam',
                'price' => 1299000,
                'image' => 'headphones.svg',
                'category' => 'Audio',
            ],
            [
                'name' => 'Pulse Watch S',
                'brand' => 'Pulse',
                'specs' => 'Smartwatch layar sentuh dengan fitur pemantau aktivitas',
                'price' => 899000,
                'image' => 'smartwatch.svg',
                'category' => 'Wearable',
            ],
            [
                'name' => 'ViewMax Monitor 27',
                'brand' => 'ViewMax',
                'specs' => 'Monitor IPS 27 inci, resolusi 2K, refresh rate 100 Hz',
                'price' => 3299000,
                'image' => 'monitor.svg',
                'category' => 'Aksesori',
            ],
            [
                'name' => 'KeyPro Mechanical',
                'brand' => 'KeyPro',
                'specs' => 'Keyboard mekanis USB dengan pencahayaan RGB',
                'price' => 649000,
                'image' => 'keyboard.svg',
                'category' => 'Aksesori',
            ],
            [
                'name' => 'OptiMouse Wireless',
                'brand' => 'Opti',
                'specs' => 'Mouse wireless ergonomis dengan sensor 2400 DPI',
                'price' => 249000,
                'image' => 'mouse.svg',
                'category' => 'Aksesori',
            ],
            [
                'name' => 'SoundPod Mini',
                'brand' => 'Sonic',
                'specs' => 'Speaker Bluetooth portabel dengan baterai hingga 10 jam',
                'price' => 399000,
                'image' => 'speaker.svg',
                'category' => 'Audio',
            ],
        ];

        foreach ($products as $product) {
            Electronic::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
