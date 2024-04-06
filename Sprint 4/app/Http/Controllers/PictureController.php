<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PictureController extends Controller
{
    public function showAddPictureForm()
    {
        return view('addpicture');
    }

    public function uploadPicture(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'pictures.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $picture) {
                // Read the file content as binary
                $imageData = file_get_contents($picture->getRealPath());

                // Store the image binary data in the database
                try {
                    DB::table('images')->insert([
                        'image_data' => $imageData,
                    ]);
                } catch (\Exception $e) {
                    // Handle the exception
                    return back()->with('error', 'Error storing image: ' . $e->getMessage());
                }
            }

            // Redirect back with success message
            return back()->with('success', 'Images uploaded successfully!');
        } else {
            // If there are no files uploaded, redirect back with an error message
            return back()->with('error', 'No images selected for upload!');
        }
    }

    public function seePictures()
    {
        // Fetch pictures from the database
        $pictures = DB::table('images')->get();

        // Pass pictures to the view
        return view('seepictures', ['pictures' => $pictures]);
    }

    public function showImage($id)
    {
        // Fetch the image data from the database based on the provided ID
        $image = DB::table('images')->find($id);

        // Check if the image exists
        if (!$image) {
            abort(404); // Or handle the case where the image is not found
        }

        // Return the image data with appropriate headers
        return response()->make($image->image_data, 200, [
            'Content-Type' => 'image/jpeg', // Adjust content type as per your image format
            'Content-Disposition' => 'inline; filename="image.jpg"', // Adjust filename as per your image
        ]);
    }
}