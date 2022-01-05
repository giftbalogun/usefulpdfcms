<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Template;
use Illuminate\Support\Facades\Storage;
use ClassicO\NovaMediaLibrary\API;

class ContractController extends Controller
{
    public function contract($contract)
    {
        $contract = Contract::where('slug', $contract)->first();

        $file = API::getFiles($contract->preview_image, null, true);
        //$attachment = API::getPrivateFile($file->path, null);

        //$imagePath = Storage::url($file->path);
        //$tcontracts = Contract::where('slug', $contract)->first()->template;

        $contractss = Contract::latest()->get();

        $data = [
            'contracts' => $contract,
            'contractss' => $contractss,
            'file' => $file,
            //'attachment' => $attachment,
            //'imagePath' => $imagePath,
        ];

        return view('slug')->with($data);
    }

    public function tcontract($template)
    {
        $data['contracts'] = Template::where('slug', $template)->first();

        $data['contractss'] = Contract::latest()->get();

        return view('template', $data);
    }
}
