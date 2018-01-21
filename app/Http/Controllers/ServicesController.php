<?php

namespace Apaa\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Apaa\Models\Service\ServiceInterface;
use Apaa\Models\Category\CategoryInterface;
use Apaa\Http\Requests\ServiceRequest;

class ServicesController extends Controller
{
    private $service;
    private $category;

    public function __construct(ServiceInterface $service, CategoryInterface $category)
    {
        $this->service = $service;
        $this->category = $category;
    }

    /**
     * Display a the current service provider services.
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
