<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Color\Rgb;
use BaconQrCode\Writer;
// use \BaconQrCode\Renderer\Image\Png;
// use \BaconQrCode\Renderer\Color;


use BaconQrCode\Renderer\RendererStyle\Fill;

use Carbon\Carbon;
//use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
class ItemsController extends Controller
{
    
    //QrCode::generate('Make me into a QrCode!');
    protected function generateQrCode($item_code){
       // QrCode::generate('Make me into a QrCode!');
       //$qrcode = new BaconQrCodeGenerator;
    
    //https://php.com.br/52?codigos-qrcode-com-bacon
    $size=300;
    $margin=2;

    $vermelho      = new Rgb(255,0,0);
    $amarelo       = new Rgb(255,255,0);
    $preenchimento = Fill::uniformColor($vermelho, $amarelo);

    $style = new RendererStyle($size, $margin, null, null, $preenchimento);

    $renderer = new ImageRenderer(
        $style,
        new ImagickImageBackEnd()
    );

    // $renderer = new \BaconQrCode\Renderer\Image\Png();
    // $renderer->setHeight(256);
    // $renderer->setWidth(256);
    // $renderer->setBackgroundColor(new Color(0,51,170));
    //$renderer->setForegroundColor(new \BaconQrCode\Renderer\Color\Rgb(170, 45, 76));

    $writer = new Writer($renderer);
  
    $qr_image = base64_encode($writer->writeString($item_code));
    $fileName="qr-".$item_code."-".Carbon::now('Asia/Bangkok')->format('Y-m-d').".png";
    $writer->writeFile($item_code, 'images/qrcode/'.$fileName);

    return view('pages.showqrcode')
    ->with('item_code',$item_code)
    ->with('qr_image',$qr_image);


    //  $qrcode = new BaconQrCodeGenerator;
    

    //  $upload_dir = public_path('images/qrcode/');
    //  //$img = str_replace('data:image/png;base64,', '', base64_encode($qrcode->format('png')->size(300)->color(0,51,170)->generate($token)));
    //  //$img = str_replace(' ', '+', $img);
    //  $data = base64_decode(base64_encode($qrcode->format('png')->size(300)->color(0,51,170)->generate($item_code)));
    //  $fileName="qr-".$item_code."-".Carbon::now('Asia/Bangkok')->format('Y-m-d').".png";
    //  $file = $upload_dir . $fileName;
    //  file_put_contents($file, $data);

    // return view('pages.showqrcode')
    // ->with('item_code',$item_code)
    // ->with('fileName',$fileName);
        
    }
}
