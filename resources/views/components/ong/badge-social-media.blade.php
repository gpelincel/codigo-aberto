@props(['rede_social'])
@php

    $color = "";
    $logo = "";

    if ($rede_social->rede == "whatsapp") {
        $color = "green-700";
        $logo = "whatsapp";
    } else if ($rede_social->rede == "instagram") {
        $color = "instagram";
        $logo = "instagram";
    } else if ($rede_social->rede == "youtube") {
        $color = "red-800";
        $logo = "youtube";
    } else if ($rede_social->rede == "tiktok") {
        $color = "black";
        $logo = "tik-tok";
    } else if ($rede_social->rede == "linkedin") {
        $color = "blue-800";
        $logo = "linkedin";
    }
@endphp

<a href="{{$rede_social->link}}" class="flex gap-2 items-center rounded-full bg-{{$color}} px-4 py-2">
    <i class="fi fi-brands-{{$logo}} mt-2"></i>
    <p>
        {{$rede_social->nome}}
    </p>
</a>