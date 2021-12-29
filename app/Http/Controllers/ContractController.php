<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use Illuminate\Support\Facades\Storage;

class ContractController extends Controller
{
    public function show($slug)
    {
        $post = Contract::where('slug', $slug)->first();
        if ($post) {
            $imagePath = Storage::url($post->preview_image);
            return view('post', [
                'post' => $post,
                'imagePath' => $imagePath,
            ]);
        }

        // No match was found
        abort(404);
    }

    public function contract($slug)
    {
        $post = Contract::where('slug', $slug)->first();
        if ($post) {
            $imagePath = Storage::url($post->preview_image);
            return view('slug', [
                'post' => $post,
                'imagePath' => $imagePath,
            ]);
        }

        // No match was found
        abort(404);
    }
}
