<?php 
namespace App\Utils;
use Illuminate\Support\Facades\Http;
class Util {
    public function checkProductStock($id, $size="")
    {
        $response = Http::get('https://advertbangladesh.com/testpos/api/get_stock_qty/'.$id.'/'.$size);
        $stock = $response->json();
        return $stock['qty'];
    }
}

?>