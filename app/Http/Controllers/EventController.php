<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Support\Facades\Validator;
class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(3);
        session()->put('menu', 'Event');
        return view('auth.admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //REDIRECT TO CREATE PAGE OF Event
        return view('auth.admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //VALIDATION
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'date' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin/events/create')
                ->withErrors($validator)
                ->withInput();
        }

        $event = Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'date' => $request->date,
        ]);

        $this->uploadImage($request, $event->id);

        return redirect('/admin/events')->with([
            'type' => 'success',
            'message' => 'Event créée avec succès',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //RETURN VIEW Event DETAILS WITH IMAGES
        $list_images = $event->images;

        return view('auth.admin.events.show', compact('event', 'list_images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('auth.admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //VALIDATION
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'date' => $request->date,
        ]);

        return redirect('/admin/events')->with([
            'type' => 'success',
            'message' => 'Event modifié avec succès',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect('/admin/events')->with([
            'type' => 'error',
            'message' => 'Event supprimé avec succès',
        ]);
    }

    private function uploadImage(Request $request, $event_id)
    {
        $validator = $request->validate([
            'images .*' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('/images', $name, 'public');

                Image::create([
                    'event_id' => $event_id,
                    'name' => $name,
                    'path' => 'storage/' . $path,
                ]);
            }
        }
    }
}
