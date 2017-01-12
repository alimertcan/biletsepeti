<?php

namespace App;


class Cart 
{
   public $items=null;
   public $totalqty=0;
   public $totalprice=0;
   
   public function __construct($oldCart){
   if($oldCart){
   $this->items=$oldCart->items;
   $this->totalqty=$oldCart->totalqty;
   $this->totalprice=$oldCart->totalprice;
	}
   }
   public function add($item,$id){
   $product=\App\Product::find($id);
   if($product->stok>0){
	$product->stok--;
	$product->save();
	}
	else{
	return redirect()->route('product.index')->with('success','No Stock Try Another Ticket');
	}
   
   if($product->stok>0){
	$storedItem=['qty'=>0,'price'=> $item->price,'item' => $item];
	if($this->items){
		if(array_key_exists($id,$this->items)){
			$storedItem=$this->items[$id];
		}
   }
    $storedItem['qty']++;
    $storedItem['price']=$item->price * $storedItem['qty'];
	$this->items[$id]=$storedItem;
	$this->totalqty++;
	$this->totalprice +=$item->price;
	
	}
	}
	public function removeone($id){
	$this->items[$id]['qty']--;
	$this->items[$id]['price']-=$this->items[$id]['item']['price'];
	$this->totalqty--;
	$this->totalprice-=$this->items[$id]['item']['price'];
	if($this->items[$id]['qty']<=0){
	unset($this->items[$id]);
	}
	$product=\App\Product::find($id);
	$product->stok++;
	$product->save();
	}
	public function removeitem($id){
	$product=\App\Product::find($id);
	$product->stok=$product->stok+$this->totalqty;
	$product->save();
	$this->totalqty-=$this->items[$id]['qty'];
	$this->totalprice-=$this->items[$id]['price'];
	unset($this->items[$id]);
	
	}
}
