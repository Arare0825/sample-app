<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\today_todos;
use App\Models\weeksTables;
use App\Models\somedayTables;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateUserRequest;

class todoController extends Controller
{

    public function home(){
        $todayCount = today_todos::count();
        $weekCount = weeksTables::count();
        $somedayCount = somedayTables::count();

        return view('welcome', compact('todayCount','weekCount','somedayCount'));
    }


    // public function index()
    // {
    //     //
    //     return view('todo.index');
    // }



    // public function choose(){

    //     return view('todo.choose');
    // }



    public function create()
    {
        //
        return view('todo.create');

    }



    public function store(CreateUserRequest $request)
    {
        //
        $todos = new today_todos;

        $todos->title = $request->input('title');
        $todos->save();

        return redirect('todo/today');

    }



    public function show($id)
    {
        //
        $todays = today_todos::find($id);
        

        return view('todo.show',compact('todays'));
    }



    public function edit($id)
    {
        //
        $todays = today_todos::find($id);

        return view('todo.edit',compact('todays'));
    }



    public function update(CreateUserRequest $request,$id){

        $todays = today_todos::find($id);

        $todays->title = $request->input('title');
        $todays->save();

        return redirect('todo/today');

    }



    public function check($id){

        $todays = today_todos::find($id);

        return view('todo.check',compact('todays'));
    }



        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $todays = today_todos::find($id);
       $todays->delete();

       return redirect('todo/today');
    }



    public function today(Request $request){


            $search = $request->input('search');
            $query = DB::table('today_todos');
         
            if($search !== null){
                $search_split = mb_convert_kana($search,'s');
                $search_split2 = preg_split('/[\s]+/',$search_split,-1,PREG_SPLIT_NO_EMPTY);
           
                foreach($search_split2 as $value){
                    $query->where('title','like','%'.$value.'%');
                }
        }

        $query->select('id','title','created_at');
        $query->orderBy('created_at','desc');
        $todays = $query->paginate(20);
        return view('todo.today',compact('todays'));
    }





    public function weekCreate(){

        return view('todo.weekCreate');
    }
    
    public function weekStore(CreateUserRequest $request){
        
        $weekTodos = new weeksTables;
    
        $weekTodos->title = $request->input('title');
        $weekTodos->save();
    
            
    
        return redirect('week');

    }


    
    public function week(Request $request){

        $search = $request->input('search');
        $query = DB::table('weeks_tables');

        
        if($search !== null){
            $search_split = mb_convert_kana($search,'s');
            $search_split2 = preg_split('/[\s]+/',$search_split,-1,PREG_SPLIT_NO_EMPTY);

           
            foreach($search_split2 as $value){
                $query->where('title','like','%'.$value.'%');
            }

    
        }
    $query->select('id','title','created_at');
    $query->orderBy('created_at','desc');
    $weekTodos = $query->paginate(20);
    return view('todo.week',compact('weekTodos'));
        
    }




    public function weekShow($id){

        $weekTodos = weeksTables::find($id);

        return view('todo.weekShow', compact('weekTodos'));

    }




    public function weekEdit($id){

        $weekTodos = weeksTables::find($id);

        return view('todo.weekEdit', compact('weekTodos'));
    }



    public function weekUpdate(CreateUserRequest $request,$id){

        $weekTodos = weeksTables::find($id);

        $weekTodos->title = $request->input('title');
        $weekTodos->save();

        return redirect('week');
    }



    public function weekCheck($id){

        $weekTodos = weeksTables::find($id);


        return view('todo.weekCheck', compact('weekTodos'));
    }



    public function weekDestroy($id){

        $weekTodos = weeksTables::find($id);
        $weekTodos->delete();
 
        return redirect('week');
 

    }





    public function someday(Request $request){

        $search = $request->input('search');
        
        $query = DB::table('someday_tables');
     
        if($search !== null){
           
            $search_split = mb_convert_kana($search,'s');
            $search_split2 = preg_split('/[\s]+/',$search_split,-1,PREG_SPLIT_NO_EMPTY);

            foreach($search_split2 as $value){
                $query->where('title','like','%'.$value.'%');
            }    
        }
            $query->select('id','title','created_at');
            $query->orderBy('created_at','desc');
            $somedayTodos = $query->paginate(20);

        return view('todo.someday',compact('somedayTodos'));
    }



    public function somedayCreate(){

        return view('todo.somedayCreate');
    }




    public function somedayStore(CreateUserRequest $request){

        $somedayTodos = new somedayTables;

        $somedayTodos->title = $request->input('title');
        $somedayTodos->save();

        return redirect('someday');
    }




    public function somedayShow($id){

        $somedayTodos = somedayTables::find($id);

        return view('todo.somedayShow', compact('somedayTodos'));
    }




    public function somedayEdit($id){

        $somedayTodos = somedayTables::find($id);

        return view('todo.somedayEdit', compact('somedayTodos'));
    }




    public function somedayUpdate(CreateUserRequest $request,$id){

        $somedayTodos = somedayTables::find($id);

        $somedayTodos->title = $request->input('title');
        $somedayTodos->save();

        return redirect('someday');
    }




    public function somedayCheck($id){

        $somedayTodos = somedayTables::find($id);

        return view('todo.somedayCheck', compact('somedayTodos'));
    }




    public function somedayDestroy($id){

        $somedayTodos = somedayTables::find($id);
        $somedayTodos->delete();

        return redirect('someday');

    }

}
