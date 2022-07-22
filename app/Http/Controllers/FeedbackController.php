<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Session;

class FeedbackController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.feedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[

            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'content'=>$request->content,

         ];
         DB::beginTransaction();
         try {

           $feedback = Feedback::create($data);
             DB::commit();
             return back()->with('success', 'Gửi phản hồi thành công');
         } catch (\Exception $e) {
             Log::error($e->getMessage());
             DB::rollBack();
             return back()->with('error', 'Gửi phản hồi thất bại');
         }
    }

}
