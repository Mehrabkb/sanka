<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Middleware\PreventRequestsDuringMaintenance;
use App\Models\Management\ManagementProcess;
use App\Models\Management\ManagementTable;
use App\Models\Management\ManagementTableFields;
use App\Models\Management\ManagementTableFieldsTypes;
use Illuminate\Http\Request;

class BasesController extends Controller
{
    public function create(Request $request){
        if($request->method() == 'GET'){
            return view('admin/management/create');
        }
    }
    public function insert_table(Request $request){
        if($request->method() == 'POST'){
            $validate = $request->validate([
                'table_mean' => 'required',
                'table_name' => 'required'
            ]);
            if($validate){
                $table_mean = $request->get('table_mean');
                $table_name = $request->get('table_name');
                $management_table = new ManagementTable();
                $management_table->table_mean = $table_mean;
                $management_table->table_name = $table_name;
                if($management_table->save()){
                    return redirect()->route('management.bases.table.fields' , ['id' => $management_table->id]);
                }
            }
        }
    }
    public function fields(Request $request , $id){
        if($request->method() == 'GET'){
            $table_id = $id;
            $management_table_fields_types = ManagementTableFieldsTypes::all();
            return view('admin/management/fields' , compact('table_id' , 'management_table_fields_types'));
        }
    }
    public function insert_table_fields(Request $request , $id){
        if($request->method() == 'POST'){
            $validate = $request->validate([
                'field_mean' => 'required',
                'field_name' => 'required' ,
                'type_id' => 'required',
                'table_id' => 'required'
            ]);
            if($validate){
                $field_means = $request->get('field_mean');
                $field_names = $request->get('field_name');
                $type_ids = $request->get('type_id');
                $table_id = $request->get('table_id');
                foreach($field_means as $key => $field_mean){
                    $management_table_field = new ManagementTableFields();
                    $management_table_field->field_mean = $field_mean;
                    $management_table_field->field_name = $field_names[$key];
                    $management_table_field->type_id = $type_ids[$key];
                    $management_table_field->table_id = $table_id;
                    $management_table_field->connection_table_id = 0;
                    $management_table_field->save();

                }
                return redirect()->route('management.bases');
            }
        }
    }
    public function edit(Request $request , $id){
        if($request->method() == 'GET'){
            $management_table = ManagementTable::where('id' , $id)->first();
            $management_table_fields = ManagementTableFields::where('table_id' , $id)->get();
            $management_table_fields_types = ManagementTableFieldsTypes::all();
            return view('admin/management/edit' , compact('management_table' , 'management_table_fields' , 'management_table_fields_types'));
        }
    }
}
