@php
    $color = "";
    $logo = "";

    if ($media == "whatsapp") {
        $color = "green-700";
        $logo = "whatsapp";
    } else if ($media == "instagram") {
        $color = "instagram";
        $logo = "instagram";
    } else if ($media == "youtube") {
        $color = "red-800";
        $logo = "youtube";
    } else if ($media == "tik tok") {
        $color = "black";
        $logo = "tik-tok";
    } else if ($media == "linkedin") {
        $color = "blue-800";
        $logo = "linkedin";
    }
@endphp

<div class="flex gap-2 items-center rounded-full bg-{{$color}} px-4 py-2">
    <i class="fi fi-brands-{{$logo}}"></i>
    <p>
        {{$content}}
    </p>
</div>