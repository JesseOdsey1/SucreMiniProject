@props(['highlight' => false])

<div id="detailButtonDiv"@class(['highlight' => $highlight, ], 'card')>
    <a id="detailButton" {{ $attributes->merge(['class' => 'href']) }} class="btn">Details</a>
    {{$slot}}
</div>