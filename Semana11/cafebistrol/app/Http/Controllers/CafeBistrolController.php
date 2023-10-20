<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CafeBistrolController extends Controller{

     /** Display a listing of the resource. */
     public function listarCafes(){
        $cafes = [
            'Café com leite',
            'Café Gelado',
            'Café Cremoso',
            'Cappuccino'
        ];
        $html = '<ul>';
        foreach ($cafes as $cafe) {
            $html .= "<li>$cafe</li>";
        }
        $html .= '</ul>';
        echo $html;
    
    }

     /** Display a listing of the resource. */
    public function index(Request $request){    
        //return $request->get('id');
        $cafes = [
            'Café com leite',
            'Café Gelado',
            'Café Cremoso',
            'Cappuccino'
        ];
        /*$html = '<ul>';
        foreach ($cafes as $cafe) {
            $html .= "<li>$cafe</li>";
        }
        $html .= '</ul>';
        return $html;
    */
        return view('cafes/index')->with('cafes', $cafes);
    }

     /* Show the form for creating a new resource. */     
    public function create(){
        
        return view('cafes.create');
    }    

     /** Store a newly created resource in storage.*/     
    public function store(Request $request){}
    
     /** Display the specified resource.*/     
    public function show(string $id){}

     /** Show the form for editing the specified resource.*/
    public function edit(string $id){}

     /** Update the specified resource in storage.*/

    public function update(Request $request, string $id){}

     /** Remove the specified resource from storage.*/
    public function destroy(string $id) {}
}
