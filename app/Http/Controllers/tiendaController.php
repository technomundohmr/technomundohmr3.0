<?php

namespace App\Http\Controllers;

use App\categorias_tiendas;
use App\Pedido;
use App\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiendaController extends Controller
{
    public function tienda(){
        $categorias['categorias'] = categorias_tiendas::all();
        $productos['productos'] = producto::paginate(6);
        return view("main.tienda.tienda", $categorias, $productos);
    }
    public function categoria($categoria){
        $productos['productos'] = producto::where('categoria',$categoria)->get();
        $categorias['categorias'] = categorias_tiendas::where('categoria',$categoria)->get();
        return view("main.tienda.categoria", $productos, $categorias);
    }
    public function categorias(){
        $categorias['categorias'] = categorias_tiendas::all();
        return view("main.tienda.showCategorias", $categorias);
    }

    public function producto($id){
        $producto = producto::findOrFail($id);
        $categoria = $producto['categoria'];
        $productos['productos'] = producto::where('categoria',$categoria)->paginate(5);
        return view('main.tienda.producto', compact('producto'), $productos);
    }
    public function productos(){
        $productos['productos'] = producto::all();
        return view("main.tienda.showProductos", $productos);
    }
    public function carrito(){
        return view('main.tienda.carrito');
    }
    public function vaciarCarrito(){
        setcookie('carrito', "", time()-999, '/');
        return redirect('tienda/carrito');
    }

    public function addCarrito(Request $request){
        $dato = request()->except('token');
        $id = $dato['idProduct'];
        $producto = producto::findOrFail($id);
        if (isset($_COOKIE['carrito'])) {
            $carrito = json_decode($_COOKIE['carrito'], true);
            $newProduct = array(
                'id'=> $id,
                'Producto' => $producto['titulo'],
                'Vr' => $producto['precio'],
                'cantidad' => $dato['cantidad'],
                'VrTotal' => $producto['precio'] * $dato['cantidad'],
            );
            array_push($carrito, $newProduct);
            setcookie('carrito', json_encode($carrito), time()+999999, '/');
        } else {
            $newProduct[] = array(
                'id'=> $id,
                'Producto' => $producto['titulo'],
                'Vr' => $producto['precio'],
                'cantidad' => $dato['cantidad'],
                'VrTotal' => $producto['precio'] * $dato['cantidad'],
            );
            setcookie('carrito', json_encode($newProduct), time()+999999, '/');

        }
      return redirect('tienda/carrito');
    }
    public function nuevoPedido (Request $request){
        $datos = request()->except('_token');
        $datos['estado']='Verificando';
        Pedido::insert($datos);
        setcookie('carrito', "", time()-999, '/');
        if($datos['FormaPago']=='Pago contra entrega'){
            return redirect('/felicidades');
        }
        if($datos['FormaPago']=='Pay U'){
            return view('main.tienda.checkoutPayU');
        }
        else{
            return view('main.tienda.checkout', compact('datos'));
        }
    }
    public function busqueda(Request $request){
        $dato = request()->except('_token');
        $busqueda = $dato['busqueda'];
        $productos['productos'] = DB::table('productos')->where('titulo', 'like', '%'.$busqueda.'%')->get();
        return view("main.tienda.showProductos", $productos);
    }

}
