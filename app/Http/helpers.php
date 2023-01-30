<?php
 function calculateDiscount($product){
   return (int)((($product['variation']['default_sell_price'] - $product['regular_price'])/$product['variation']['default_sell_price'])*100);
 }

 function getTotalCart()
 {
    $total_item = count(session()->get('cart', []));

    return $total_item;
 }
 
?>