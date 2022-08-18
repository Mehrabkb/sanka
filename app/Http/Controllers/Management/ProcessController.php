<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Management\ManagementProcess;
use App\Models\Management\ManagementProcessStep;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function management_process(Request $request){
        if($request->method() == 'GET'){
            $management_process = ManagementProcess::all();
            return view('admin/management/process' , compact('management_process'));
        }
    }
    public function process_create(Request $request){
        if($request->method() == 'GET'){
            return view('admin/management/process/create');
        }else if($request->method() == 'POST'){
            $validate = $request->validate([
                'process_title' => 'required',
                'process_order_id' => 'required'
            ]);
            if($validate){
                $process_title = $request->get('process_title');
                $process_order_id = $request->get('process_order_id');
                $management_process = new ManagementProcess();
                $management_process->process_title = $process_title;
                $management_process->process_order_id = $process_order_id;
                if($management_process->save()){
                    return redirect()->route('management.process.steps.create' , ['id' => $management_process->id]);
                }
            }
        }
    }
    public function process_steps_create(Request $request , $id){
        if($request->method() == 'GET') {
            $process_id = $id;
            return view('admin/Management/process/steps', compact('process_id'));
        }
    }
    public function process_steps_create_insert(Request $request){
        $validate = $request->validate([
            'process_id' => 'required',
            'step_title' => 'required',
            'step_order_id' => 'required'
        ]);
        if($validate){
            $process_id = $request->get('process_id');
            $step_title = $request->get('step_title');
            $step_order_id = $request->get('step_order_id');
            $management_process_step = new ManagementProcessStep();
            $management_process_step->process_id = $process_id;
            $management_process_step->step_title = $step_title;
            $management_process_step->step_order_id = $step_order_id;
            if($management_process_step->save()){
                return redirect()->route('management.process');
            }
        }
    }
}
