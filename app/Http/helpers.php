<?php
 function calculateDiscount($product){
  if($product['regular_price'] != 0 && $product['regular_price'] != $product['variation']['default_sell_price'])
  {
       return (int)((($product['variation']['default_sell_price'] - $product['regular_price'])/$product['variation']['default_sell_price'])*100);
  }
  else {
    return 0;
  }

 }

 function getTotalCart()
 {
    $total_item = count(session()->get('cart', []));

    return $total_item;
 }

 function getCartItems()
 {
    return session()->get('cart', []);
 }
 
?>