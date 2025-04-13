<li>
    @php($icon = $external ? 'icon-external-link' : '')

    <a {{ $attributes->merge(['class' => $icon]) }}
        href="{{$href}}"
        target="{{$target}}"
    >
        {{$slot}}
    </a>
</li>
