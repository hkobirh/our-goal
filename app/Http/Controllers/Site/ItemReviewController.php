<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ItemsReview;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Exception;

class ItemReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "rating"  => "required|in:1,2,3,4,5",
            "message" => "required|string"
        ]);
        if ($validator->fails())
            return response()->json(['error' => $validator->errors()]);
        else {
            try {
                ItemsReview::create([
                    "customer_id" => session::get('customer_id'),
                    "product_id"  => $request->product,
                    "rating"      => $request->rating,
                    "message"     => $request->message
                ]);
                return response()->json(['success' => 'Yea, A product review has been successfully created.']);

            } catch (Exception $e) {
                return response()->json(['error' => 'Unable to review for the product']);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
