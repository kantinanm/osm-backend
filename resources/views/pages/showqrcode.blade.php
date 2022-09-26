
<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->color(0,51,170)->generate($item_code)) !!} ">
<a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->color(0,51,170)->generate($item_code)) !!} " class="btn btn-primary" download>Download</a>