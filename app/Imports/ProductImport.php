<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key != 0) {
                Product::create([
                    'weapons' => $row[0],
                    'hash_name' => $row[1],
                    'rarity' => $row[2],
                    'float_rate' => $row[3],
                    'price' => $row[4],
                    'currency' => $row[5],
                    'statrak' => $row[6],
                    'is_active' => $row[7],
                    'image_link' => $row[8],
                ]);
            }
        }
    }
}
