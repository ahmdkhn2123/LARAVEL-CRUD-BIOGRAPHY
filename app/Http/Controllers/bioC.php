<?php /** @noinspection ALL */

namespace App\Http\Controllers;
use App\bioM;
use Illuminate\Http\Request;

class bioC extends Controller
{
    public function add(Request $request)
    {
        $data=new bioM;
        $data->name=$request->get('name');
        $data->age=$request->get('age');
        $data->cnic=$request->get('cnic');
        $data->city=$request->get('city');
        $data->save();
        return "<h1>Data Send Successfully</h1>";
    }


    public function show()
    {
        $data=bioM::all();
        return view('show',['bio'=>$data]);

    }

    public function del($id)
    {
        $data=bioM::find($id);
        if ($data){
            $data->delete();
        }
        return redirect('show');
    }

    public function edit($id)
    {
        $data=bioM::find($id);
        return view('edit',['bio'=>$data]);

    }

    public function update(Request $request,$id)
    {
        $data=bioM::find($id);
        $data->name=$request->get('name');
        $data->age=$request->get('age');
        $data->cnic=$request->get('cnic');
        $data->city=$request->get('city');
        $data->save();
        return redirect('show');
    }


}
