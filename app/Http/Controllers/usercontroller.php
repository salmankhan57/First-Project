<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\client;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class usercontroller extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function regdata(Request $data){
    $submit= new client;
    $submit->name       =$data["name"];
    $submit->email      =$data["email"];
    $submit->password   =hash::make($data["password"]);
    $submit->save();
    return redirect('login');
    }

    public function validation(Request $req){
        $test = client::where('email', '=', $req->email)->first();
    if(!$test){
        return back()->with("fail","Email is not registered");
    }else{

        if(Hash::check( $req->password , $test->password)){
            $req->session()->put("loginId", $test->id);
            return redirect("/dashboard");
        }else{
            return back()->with("fail","Password is incorrect");
    
        }
    
    }
        }


    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data= [
            'one'=> client::where('id', '=', Session::get('loginId'))->first(),
            'two'=>Product::get()
            ];
        }
        return view('dashboard' , compact('data'));
    
    }
    
    public function logout(){
    if(session()->has('loginId')){
        session()->pull('loginId');
    }
    return redirect('login');
}
public function adlogin(){
    return view('adlogin');
}
public function adregister(){
    return view('adregister');
}
public function adregdata(Request $data){
    $submit= new admin;
    $submit->name       =$data["name"];
    $submit->email      =$data["email"];
    $submit->password   =hash::make($data["password"]);
    $submit->save();
    return redirect('adlogin');
    }

    public function advalidation(Request $req){
        $test = admin::where('email', '=', $req->email)->first();
    if(!$test){
        return back()->with("fail","Email is not registered");
    }else{

        if(Hash::check( $req->password , $test->password)){
            $req->session()->put("loginadmin", $test->id);
            return redirect("/admin");
        }else{
            return back()->with("fail","Password is incorrect");
    
        }
    
    }
        }
        public function admin(){
            $data = array();
            if(Session::has('loginadmin')){
                $data= [
                'one'=> admin::where('id', '=', Session::get('loginadmin'))->first(),
                ];
            }
            return view('admin' , compact('data'));
        
        }
        public function adlogout(){
            if(session()->has('loginadmin')){
                session()->pull('loginadmin');
            }
            return redirect('adlogin');
        }

        public function fetchAll() {
            $pd = Product::all();
            $output = '';
            if ($pd->count() > 0) {
                $output .= '<table class="table table-striped table-sm text-center align-middle">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>';
                foreach ($pd as $p) {
                    $output .= '<tr>
                    <td>' . $p->id . '</td>
                    <td><img src="public/images/' . $p->p_image . '" width="50" class="img-thumbnail rounded-circle"></td>
                    <td>' . $p->p_name .'</td>
                    <td>'.'$' . $p->p_price . '</td>
                    <td>' . $p->p_des . '</td>
                    <td>
                      <a href="#" id="' . $p->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editproductModal"><i class="bi-pencil-square h4"></i></a>
        
                      <a href="#" id="' . $p->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                    </td>
                  </tr>';
                }
                $output .= '</tbody></table>';
                echo $output;
            } else {
                echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
            }
        }
        public function store(Request $request) {
            $file = $request->file('p_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
        
            $pData = ['p_name' => $request->p_name, 'p_price' => $request->p_price, 'p_des' => $request->p_des, 'p_image' => $fileName];
            Product::create($pData);
            return response()->json([
                'status' => 200,
            ]);
        }
        
        public function edit(Request $request) {
            $id = $request->id;
            $pd = Product::find($id);
            return response()->json($pd);
        }
        
        // handle update an product ajax request
        public function update(Request $request) {
            $fileName = '';
            $pd = Product::find($request->p_id);
            if ($request->hasFile('p_image')) {
                $file = $request->file('p_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/images', $fileName);
                if ($pd->p_image) {
                    Storage::delete('public/images/' . $pd->p_image);
                }
            } else {
                $fileName = $request->p_image;
            }
        
            $pData = ['p_name' => $request->p_name, 'p_price' => $request->p_price, 'p_des' => $request->p_des, 'p_image' => $fileName];
           
        
            $pd->update($pData);
            return response()->json([
                'status' => 200,
            ]);
        }
        
        public function delete(Request $request) {
            $id = $request->id;
            $pd = Product::find($id);
            if (Storage::delete('public/images/' . $pd->p_image)) {
                Product::destroy($id);
            }
        }

        public function shopcart()
        {
            return view('cart');
        }

        public function addproducttoCart($id)
        {
            $pod = Product::findOrFail($id);
            $cart = session()->get('cart', []);
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "name" => $pod->p_name,
                    "quantity" => 1,
                    "price" => $pod->p_price,
                    "image" => $pod->p_image
                ];
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'product has been added to cart!');
        }
        
        public function updateCart(Request $request)
        {
            if($request->id && $request->quantity){
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                session()->flash('success', 'product added to cart.');
            }
        }
        
        public function deleteProduct(Request $request)
        {
            if($request->id) {
                $cart = session()->get('cart');
                if(isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product successfully deleted.');
            }
        }
        public function detail($id) {
            $pd = Product::find($id);
            return view('details' , compact('pd'));
        }
        
        public function checkout(){
            return view('checkout');
        }       

        public function confirm(){
            if(session()->has('cart')){
                session()->pull('cart');
            }
            return redirect('shopping-cart')->with('done','Order has been placed');
        }
}
