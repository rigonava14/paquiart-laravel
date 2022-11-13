<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NftController extends Controller
{
    function nft(Request $request){
        
        $jsonString = file_get_contents(public_path('nft-final/config.json'));
        $data = json_decode($jsonString, true);
        $price = intval($request->precio);
        $data['price'] = $price;
        $data['creators'][0]['address']= $request->address;
        $data['nftStorageAuthToken'] = $request->storage;
        $newJsonString = json_encode($data);
        file_put_contents(public_path('nft-final/config.json'), $newJsonString);

        $jsonImage = file_get_contents(public_path('nft-final/assets/0.json'));
        $data = json_decode($jsonImage, true);
        $data['name'] = $request->titulo;
        $data['value']= $request->tecnica;
        $newJsonImage = json_encode($data);
        file_put_contents(public_path('nft-final/assets/0.json'), $newJsonImage);
        $img = $request->file('img');
            //123123213.png
            $name = '0'.'.'.$img->getClientOriginalExtension();
            $destino = public_path('nft-final/assets');
            $request->img->move($destino, $name);

            $output = shell_exec(public_path('nft-final/upload.sh')); 
            dd($output);
    }
}
