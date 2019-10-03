<?php

namespace App\Http\Controllers\Admin;
use App\Comment;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q        = $request->q;
        $rating   = $request->rating ?? 5;
        $order_by = $request->order_by ?? 'desc';

        if ($q) {
            $comments = Comment::with('product')->whereHas('product', function ($query) use ($q) {
                $query->where('name', 'like', '%' . $q . '%')
                    ->orWhere('id', $q);
            })->where(function ($query) use ($rating) {
                $query->where('rating_quality', $rating);
            });
        } else {
            $comments = Comment::where('rating_quality', $rating);
        }

        switch ($order_by) {
            case 'desc':
                $comments = $comments->orderBy('id', 'desc');
                break;
            case 'asc':
                $comments = $comments->orderBy('id', 'asc');
                break;
            default:
                # code...
                break;
        }

        $comments = $comments->paginate(10);

        return view('admin.comments.index', [
            'comments' => $comments,
            'q'        => $q,
            'rating'   => $rating,
            'order_by' => $order_by,
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::with('user', 'product')->find($id);

        return view('admin.comments.show', ['comment' => $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $comment->update($request->all());

        return redirect()->back()->with([
            'type'    => 'success',
            'message' => 'Cập nhật thành công',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('admin.comments.index')->with([
            'type'    => 'success',
            'message' => 'Đã xóa',
        ]);
    }
}
