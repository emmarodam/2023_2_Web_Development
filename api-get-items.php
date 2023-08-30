<?php

try{

  // Connect to the database
  $items = [
    ['item_id'=>1, 'item_name'=>'A', 'color'=>'blue', 'price'=>10],
    ['item_id'=>2, 'item_name'=>'B', 'color'=>'red', 'price'=>20],
    ['item_id'=>3, 'item_name'=>'C', 'color'=>'blue', 'price'=>30],
  ];

  $data = [];

  
  foreach($items as $item){
    if( $item['color'] == $_GET['item-color'] && 
        $item['price'] >= $_GET['item-min-price'] ){
      $data[] = $item;
    }
  }


  echo json_encode($data);

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info'=>'ups...']);
}



// search for color. Expand it
// now you can also search for min price

// items who are blue and the min price is 20 will show item 3
// items who are blue and the min price is 5 will show items 1 and 3
// items who are red and the min price is 50 will show nothing
// items who are red and the min price is 10 will show item 2



?>