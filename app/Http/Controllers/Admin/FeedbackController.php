<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $feedbacks = Feedback::paginate(7);
        return view('layouts.feedbacks.index', ['feedbacks' => $feedbacks]);
    }

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
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        return view('layouts.feedbacks.show', ['feedback' => $feedback]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {

        try {
            $feedback->delete();
            return redirect()->route('feedbacks.index')->with('success', 'Xoá phản hồi thành công');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            return back()->with('error', 'Xoá phản hồi thất bại');
        }
    }
}
