@php
header("content-type:application/xml");
ob_start();
$userId = addslashes($_GET["userId"]);
if ($userId == 0) {
    $hat1 = 300;
    $hat2 = 0;
    $hat3 = 0;
    $shirt = 400;
    $pants = 0;
    $shirtgraphic = 0;
    $face = 0;
} else {
    $hat1 = 300;
    $hat2 = 0;
    $hat3 = 0;
    $shirt = 0;
    $pants = 0;
    $shirtgraphic = 303;
    $face = 0;
}
//TODO: add catalog + avatar system
@endphp
http://morblox.us/Asset/BodyColors.ashx?userId=@php echo $userId @endphp;http://morblox.us/asset/?id=@php echo $hat1 @endphp;http://morblox.us/asset/?id=@php echo $hat2 @endphp;http://morblox.us/asset/?id=@php echo $hat3 @endphp;http://morblox.us/asset/?id=@php echo $shirt @endphp;http://morblox.us/asset/?id=@php echo $pants @endphp;http://morblox.us/asset/?id=@php echo $shirtgraphic @endphp;http://morblox.us/asset/?id=@php echo $face @endphp