<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Template;
use Illuminate\Support\Facades\Storage;
use ClassicO\NovaMediaLibrary\Core\{Model};
class ContractController extends Controller
{
    public function contract($contract)
    {
        $contract = Contract::where('slug', $contract)->first();
        $contract->attachment = self::getFiles($contract->preview_image);

        //$tcontracts = Contract::where('slug', $contract)->first()->template;

        $contractss = Contract::latest()->get();

        $data = [
            'contracts' => $contract,
            'contractss' => $contractss,
            //'tcontracts' => $tcontracts,
        ];

        return view('slug')->with($data);
    }

    public static function getFiles($id)
    {
        return Model::where('id', $id)->first()->name;
    }

    public function tcontract($template)
    {
        $data['contracts'] = Template::where('slug', $template)->first();

        $data['contractss'] = Contract::latest()->get();

        return view('template', $data);
    }
}
