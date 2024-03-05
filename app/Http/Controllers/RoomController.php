<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Mail\Invetation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('dashboard', compact('rooms'));
    }
    public function rooms()
    {
        $rooms = Room::all();
        return response()->json([
            'rooms' => $rooms
        ]);
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'password' => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $data['image'] = $imagePath;
        }
        Room::create($data);

        return redirect()->back()->with('success', 'Room created successfully.');
    }

    // public function show(Room $room)
    // {
    //     return view('rooms.show', compact('room'));
    // }
    public function mailInvitation(Request $request, Room $room)
    {
        $emailArray = explode(';', $request->emails);
        $emailArray = array_map('trim', $emailArray);
        $emailArray = array_filter($emailArray);
        $data = [
            "name" => $room->name,
            "password" => $room->password,
            "link" => env("APP_URL") . "/room/$room->name/$room->id/$room->password"
        ];

        foreach ($emailArray as $email) {
            Mail::to($email)->queue(new Invetation($data));
        }
        return redirect()->back()->with('success', 'Room updated successfully.');
    }

    public function invite(Room $room)
    {
        return view('rooms.invetation', compact('room'));
    }

    public function verify(Request $request)
    {
        $roomName = $request->name;
        $password = $request->password;
        $room = Room::where('name', $roomName)->first();
        if (!is_null($room) && $room->password == $password) {
            return response()->json(["answer" => true]);
        }
        return response()->json(["answer" => false]);

    }
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
            'password' => 'nullable|string|max:255',
        ]);
        if ($request->hasFile('image')) {
            if ($room->image && file_exists(public_path("storage/{$room->image}"))) {
                unlink(public_path("storage/{$room->image}"));
            }
            $imagePath = $request->file('image')->store('uploads', 'public');
            $data['image'] = $imagePath;
        }

        $room->update($data);

        return redirect()->back()->with('success', 'Room updated successfully.');
    }

    public function destroy(Room $room)
    {
        if ($room->image && file_exists(public_path("storage/{$room->image}"))) {
            unlink(public_path("storage/{$room->image}"));
        }
        $room->delete();

        return redirect()->back()->with('success', 'Room deleted successfully.');
    }


    public function updateStatus($id, Request $request)
    {
        $request->validate([
            'status' => 'required|string',
        ]);
        $room = Room::findOrFail($id);
        $room->update(['status' => $request->input('status')]);

        if ($request->input('status')) {
            Room::where('id', '<>', $id)->update(['status' => "inactive"]);
        }
        return redirect()->back()->with('success', 'status Updated successfully.');
    }

    public function updateCounts(Request $request, $roomId)
    {
        // return $request->connected;
        $room = Room::findOrFail($roomId);
        $room->connected=$request->connected;
        $room->save();
        return response()->json(['message' => 'Counts updated successfully.']);
    }
}