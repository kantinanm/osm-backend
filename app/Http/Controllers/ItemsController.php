<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
// use BaconQrCode\Renderer\ImageRenderer;
// use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
// use BaconQrCode\Renderer\RendererStyle\RendererStyle;
// use BaconQrCode\Writer;
use Carbon\Carbon;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
class ItemsController extends Controller
{
    
    //QrCode::generate('Make me into a QrCode!');
    protected function generateQrCode($item_code){
       // QrCode::generate('Make me into a QrCode!');
       //$qrcode = new BaconQrCodeGenerator;
       
    // $renderer = new ImageRenderer(
    //     new RendererStyle(200),
    //     new ImagickImageBackEnd()
    // );
    // $writer = new Writer($renderer);
    
    //$qr_image = base64_encode($writer->writeString($item_code));
    
    //$writer->writeFile($item_code);


     $qrcode = new BaconQrCodeGenerator;
    

     $upload_dir = public_path('images/qrcode/');
     //$img = str_replace('data:image/png;base64,', '', base64_encode($qrcode->format('png')->size(300)->color(0,51,170)->generate($token)));
     //$img = str_replace(' ', '+', $img);
     $data = base64_decode(base64_encode($qrcode->format('png')->size(300)->color(0,51,170)->generate($item_code)));
     $fileName="qr-".$item_code."-".Carbon::now('Asia/Bangkok')->format('Y-m-d').".png";
     $file = $upload_dir . $fileName;
     file_put_contents($file, $data);

    return view('pages.showqrcode')
    ->with('item_code',$item_code)
    ->with('fileName',$fileName);
        
    }
}
