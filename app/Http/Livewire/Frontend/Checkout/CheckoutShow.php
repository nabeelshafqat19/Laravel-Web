<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use Livewire\Component;
use App\Mail\PlaceOrderMailable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class CheckoutShow extends Component
{

    public $carts, $totalProductAmount = 0;

    public $fullname, $email, $phone, $pincode, $address, $payment_mode = NULL, $payment_id = NULL;

    public function rules()
    {
        return [
            'fullname' => 'required|string|max:121',
            'email' => 'required|email|max:121',
            'phone' => '',
            'pincode' => '',
            'address' => '',
        ];
    }

    public function placeOrder()
    {
        $this->validate();
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'tracking_no' => 'best-'.Str::random(10),
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'pincode' => $this->pincode,
            'address' => $this->address,
            'status_message' => 'in progress',
            'payment_mode' => $this->payment_mode,
            'payment_id' => $this->payment_id
        ]);

        foreach ($this->carts as $cartItem) {
            
            $orderItems = Orderitem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'product_color_id' => $cartItem->product_color_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->selling_price
            ]);

            if ($cartItem->product_color_id != NULL) {
                
                $cartItem->productColor()->where('id',$cartItem->product_color_id)->decrement('quantity',$cartItem->quantity);
            }else {
                
                $cartItem->product()->where('id',$cartItem->product_id)->decrement('quantity',$cartItem->quantity);

            }
        }
        
        return $order;
    }

    public function codOrder()
    {
        $this->payment_mode = 'Cash on Delivery';
        $codOrder = $this->placeOrder();
        if($codOrder){

            Cart::where('user_id', auth()->user()->id)->delete();

            try {
                $order = Order::findOrFail($codOrder->id);
                Mail::to("$order->email")->send(new PlaceOrderMailable($order));
                // Mail Sent Successfully
            }catch(\Exception $e) {
                // Something went wrong
            }

            session()->flash('message','Order Placed Successfully');
            $this->dispatchBrowserEvent('message',[
                'text' => 'Order Placed Successfully',
                'type' => 'success',
                'status' => 200
            ]);
            return redirect()->to('thank-you');
        }else{

            $this->dispatchBrowserEvent('message',[
                'text' => 'Something went wrong',
                'type' => 'error',
                'status' => 500
            ]);
        }
    }

    public function totalProductAmount()
    {
        $this->totalProductAmount = 0;
        $this->carts = Cart::where('user_id', auth()->user()->id)->get();
        foreach ($this->carts as $cartItem) {
            $this->totalProductAmount += $cartItem->product->selling_price * $cartItem->quantity;
        }
        return $this->totalProductAmount;
    }


public function render()
{
    if (auth()->check()) {
        $user = auth()->user();
        if ($user->userDetail) {
            $this->phone = $user->userDetail->phone ?? '';
            $this->pincode = $user->userDetail->pin_code ?? '';
            $this->address = $user->userDetail->address ?? '';
        }
        $this->fullname = $user->name;
        $this->email = $user->email;
    }
    $this->totalProductAmount = $this->totalProductAmount();
    return view('livewire.frontend.checkout.checkout-show', [
        'totalProductAmount' => $this->totalProductAmount
    ]);
}
}
