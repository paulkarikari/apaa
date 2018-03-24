<?php

namespace Apaa\Http\Controllers;

use AYLIEN\TextAPI;
use Illuminate\Http\Request;
use Apaa\Models\Comment\Comment;
use Illuminate\Support\Facades\Auth;
use Apaa\Http\Requests\ServiceRequest;
use Apaa\Models\Service\ServiceInterface;
use Apaa\Models\Category\CategoryInterface;

class ServicesController extends Controller
{
    private $service;
    private $category;
    private $textapi;

    public function __construct(ServiceInterface $service, CategoryInterface $category)
    {
        $this->service = $service;
        $this->category = $category;
        $this->textapi = new TextAPI(env('AYLIEN_APP_ID'), env('AYLIEN_SECRET_KEY'));
    }

    /**
     * Display a the current service provider services.
     *service.comments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_services', [
                'services' => $this->service->getUserService(auth()->user())->paginate(10),
                'categories' => $this->category->getAll(),
            ]);
    }

    public function like($serviceId)
    {
        $this->service->like($serviceId);

        return response()->json(['message' => 'service liked successfully']);
    }

    public function unlike($serviceId)
    {
        $this->service->unlike($serviceId);

        return response()->json(['message' => 'service unliked successfully']);
    }

    public function addComment(Request $request)
    {
        $sentiment = $this->textapi->Sentiment(array('text' => $request->get('comment')));

        $comment = $request->all();
        $comment['user_id'] = auth()->user()->id;

        if ($sentiment->polarity == 'positive') {
            $comment['sentiment_level'] = 1;
            $this->service->like($request->get('service_id'));
        }
        $createdComment = Comment::create($comment);

        return response()->json(['message' => 'Comment Added Successfully',
        'comment' => $createdComment,  ]);
    }

    /**
     * Add a new service to current user's services.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $this->service->save($request->all(), auth()->user());

        return back()->with('success', 'Service Add succefully');
    }

    /**
     * Updates current user's specified service.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $this->service->update($request->all(), $id);

        return back()->with('success', 'Service Update Successfully');
    }

    /**
     * Remove the specified service from current user list of services.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->delete($id);

        return back()->with('success', 'Service Deleted Successfully');
    }
}
