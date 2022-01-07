<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Template;
use Illuminate\Support\Facades\Storage;
use ClassicO\NovaMediaLibrary\API;
use ClassicO\NovaMediaLibrary\Core\{Model};

class ContractController extends Controller
{
    public function contract($contract)
    {
        $contract = Contract::where('slug', $contract)->first();
        $file = API::getFiles($contract->preview_image, null, true);
        $imagePath = Storage::url(
            config('nova-media-library.folder') . '/' . $file->name
        );
        $tcontract = $contract->template;
        $allcontracts = Contract::latest()->get();

        $data = [
            'contracts' => $contract,
            'tcontracts' => $tcontract,
            'contractss' => $allcontracts,
            'imagePath' => $imagePath,
        ];

        return view('slug')->with($data);
    }

    public function template($slug)
    {
        $templates = Template::where('slug', $slug)->first();
        //$lists = $templates->contract;
        $contractss = Contract::latest()->get();

        $data = [
            'templates' => $templates,
            'contractss' => $contractss,
            //'list' => $lists,
        ];

        return view('template', $data);
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('is_published', '1')
            ->first();
        if ($category) {
            $posts = $category
                ->posts()
                ->orderBy('posts.id', 'DESC')
                ->where('is_published', '1')
                ->paginate(5);
            return view('website.category', compact('category', 'posts'));
        } else {
            return \Response::view('website.errors.404', [], 404);
        }
    }
}
