<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use App\Models\Menu;
use App\Models\MenuForm;
use App\Models\Table;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $route_now;
    public function __construct(Request $request)
    {
        $rn = $request->url();
        $rn = explode('/',$rn);
        $this->route_now = $rn[3];
    }
    public function index()
    {
        $table = Table::where('table','=',Str::lower(Str::plural($this->route_now)))->first();
        $model = '\App\Models\\'.$table->model;
        $datas = $model::latest()->get()->toArray();
        $route = $this->route_now;
        return view("dashboard.crud.$this->route_now.index",compact(['datas','route']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.crud.$this->route_now.create",['route'=>$this->route_now]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tname = Str::lower(Str::plural($this->route_now));
        $table = Table::where('table','=',$tname)->first();
        $model = '\App\Models\\'.$table->model;
        $data = $request->except('_token');
        $crud = Crud::where('table_name',$tname)->get();
        $requestKeys = collect($request->all())->keys();
        $valid = [];
        $check = [];
        $final = [];
        for ($i=0; $i < count($requestKeys)-1; $i++) { 
            if ($crud[$i]->input_type == 'image') {
                $check[] = [
                    'index' => $i,
                    'type' => 'image',
                ];
            }elseif ($crud[$i]->input_type == 'file') {
                $check[] = [
                    'index' => $i,
                    'type' => 'file',
                ];
            };
        }

        $index = count($data) - count($check);

        try {
            if ($check !== null) {
                while ($index < count($data)) {
                    $path = public_path($tname."/");
                    $name = $requestKeys[(int)$index+1];
                    
                    $file = $data[$name]->getClientOriginalName();
                    $upload[] = [$file];
                    $data[$name]->move($path,$file);
        
                    unset($data[$name]);
                    $data = Arr::add($data,$name,$path.$file);
                    $index++;
                }
            }else{
                $data = $data;
            }
            
            $model::create($data);

            return redirect()
                    ->route("aldev$this->route_now.index")
                    ->with([
                        'success' => 'Hore, Data berhasil ditambah!'
                    ]);
        } catch (Exception $e) {
            return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Error, Data gagal ditambah \r\n'. $e->getMessage(),
                    ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = Table::where('table','=',Str::lower(Str::plural($this->route_now)))->first();
        $model = '\App\Models\\'.$table->model;
        $data = $model::findOrFail($id)->toArray();
        return view("dashboard.crud.$this->route_now.show",['route'=>$this->route_now,'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table = Table::where('table','=',Str::lower(Str::plural($this->route_now)))->first();
        $model = '\App\Models\\'.$table->model;
        $data = $model::findOrFail($id)->toArray();
        return view("dashboard.crud.$this->route_now.edit",['route'=>$this->route_now,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $table = Table::where('table','=',Str::lower(Str::plural($this->route_now)))->first();
        $model = '\App\Models\\'.$table->model;
        $data = $request->all();
        try {
            if (isset($data['_token'])) {
                unset($data['_token']);
            }
            if (isset($data['_method'])) {
                unset($data['_method']);
            }
            $model::where('id',$id)->update($data);
            
            return redirect()
                    ->route("aldev$this->route_now.index")
                    ->with([
                        'success' => 'Hore, Data berhasil diperbarui!'
                    ]);
        } catch (\Throwable $th) {
            return redirect()
                    ->back()
                    ->withInput()
                    ->with([
                        'error' => 'Error, Data gagal diperbarui \n'. $th,
                    ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Table::where('table','=',Str::lower(Str::plural($this->route_now)))->first();
        $model = '\App\Models\\'.$table->model;
        try {
            $model::where('id',$id)->delete();
            
            return redirect()
                    ->route("aldev$this->route_now.index")
                    ->with([
                        'success' => 'Hore, Data berhasil dihapus!'
                    ]);
        } catch (\Throwable $th) {
            return redirect()
                    ->back()
                    ->with([
                        'error' => 'Error, Data gagal dihapus \n'. $th,
                    ]);
        }
    }
}
