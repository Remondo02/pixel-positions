@props(['employer', 'width' => 90])

<div>
    <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl aspect-square object-cover"
        width="{{ $width }}px">
</div>
