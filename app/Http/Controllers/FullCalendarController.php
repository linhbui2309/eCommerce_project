<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class FullCalendarController extends Controller
{
   public function index(){
    if(request()->ajax()) 
        {
 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return RedirectResponse::json($data);
        }
    return view('backend.calendar.index');
   }

   public function store(Request $request)
    {  
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];
        $event = Event::insert($insertArr);   
        return RedirectResponse::json($event);
    }
     
 
    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
 
        return RedirectResponse::json($event);
    } 
 
 
    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();
   
        return RedirectResponse::json($event);
    }    
}
