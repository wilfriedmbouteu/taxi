/* if($request->ajax())
        {*/
           /* $query = $request->get('query');
            if($query != '')
            {
              $data = User::all();
              /*where('fname', 'like', '%'.$query.'%')
              /*->orWhere('email', 'like', '%'.$query.'%')
              ->orWhere('id', 'like', '%'.$query.'%')
              ->irderBy('id', 'desc')*/
              //->get();
             // $data = DB::table('users')->where('fname', 'like', '%'.$query.'%')->get();
              console.log('data');
            /*}

            else {
                $data = User::all()
                ->orderBy('id','desc')
                ->get();
            }
             console.log(data);
            $total_row = $data_count();
            if($total_row > 0)
            {
             foreach ($data as $row) {
                 $output .= ' 
                 <tr>
                 <td>'.$row->id.' </td>
                 <td>'.$row->name.'</td>
                 <td>'.$row->email.'</td>
                 </tr>
                 ';
             }
            }
            else
            {
                $output = '
                <tr>
                <td align="center" colspan="5">No Data</td></tr>  ';
            }
            $data = array(
             'table_data' => $output,
             'total_data' => $total_data
            );*/

            //echo json_encode($data);
       