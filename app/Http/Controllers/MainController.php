<?php

namespace App\Http\Controllers;
use App\Models\Device;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class MainController extends Controller
{
    public function homepage()
    {
        $products = Product::where("is_active", 1)->get();
        return view("homepage", [
            "products" => $products,
        ]);
    }

    public function exportExcel()
    {
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('A1', 'Hello World !');
        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world.xlsx');
        return view ("export-excel");

    }

    public function uploadExcel()
    {
        $reader = IOFactory::createReader("Xlsx");
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load("products.xlsx");
        $workSheet = $spreadsheet->getActiveSheet();
        $lastColumn = $workSheet->getHighestColumn();
        foreach ($workSheet->getRowIterator() as $rowIndex => $row) {
            if ($rowIndex != 1) {
                $array = $workSheet->rangeToArray("A" . $rowIndex . ":" . $lastColumn . $rowIndex);
                $array = $array[0];
                Device::query()->create([
                    "Weapons" => $array[1],
                    "Hash_name" => $array[2],
                    "Rarity" => $array[3],
                    "Float_rate" => $array[4],
                    "Price" => $array[5],
                    "Currency" => $array[6],
                    "StatTrak" => 1,
                ]);
            }
        }
    }

    public function changeLang(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }

}

