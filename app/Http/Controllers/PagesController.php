<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use GeneaLabs\LaravelMaps\Facades\Map;
use farhanwazir\laravelgooglemaps\FarhanWazir\GoogleMaps\Facades\GMapsFacade;
use App\Location;
use App\User;
use DB;
use App\Girls;


class PagesController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth')->except(['index','laramap', 'dashboard','users','action','doctocar']);
    }

 public function laramap()
    {
        $districts = Location::pluck('district', 'district');
        $unique = Girls::pluck('speciality');
        $girlname = $unique->unique()->values()->all();
        
       
        return view('pages.front', compact(['districts', 'girlname']));
    }
   
   public function doctocar()
   {
    return view('doctocar.index');
   }
    public function index()
    {
      $districts = Location::pluck('district', 'district');
       $unique = Girls::pluck('speciality');
        $girlname = $unique->unique()->values()->all();
        
        return view('master',compact(['districts', 'girlname']));
    }


    public function profile()
    {
        return view('register.profile2');
    }

    public function profile2()
    {
        return view('register.profile2');
    }
    public function dashboard()
    {
        return view('pages.search');
        }    
    public function users()
    {
        $users = User::all();
        return view('pages.dashboard', compact('users'));
    }

    function action(Request $request)
    {

 if($request->ajax())
        {

            $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('users')
         ->where('fname', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('id', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('users')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->fname.'</td>
         <td>'.$row->address.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->id.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );
      
      echo json_encode($data);

        }
    }

    public function uploadimg(Request $request)
    {
       if($request->hasFile('avatar')) 
       {

        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();

        Image::make($avatar)->resize(300, 300)->save(public_path("/uploads/avatars/" . $filename ) );
        $user = auth()->user();
        $user->avatar = $filename;
        
        $user->save();
        
          }
       return view('register.profile2', compact('user'));
    }
}
