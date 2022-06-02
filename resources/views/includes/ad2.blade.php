<!-- AD2 Mobile-->
<div class="d-block d-md-none d-xs-block crossed mt-1"
style="height: 120px; margin-left: 1em;margin-right: 1em;">
    

    @if (!empty($smallBanner2))
        <div class="mt-1 crossed">
            <a target="_blank" href="{{$smallBanner2[0]->url}}">
                <img style="width: 100%; height:100%;" src="{{url('public/images/ads/'.$smallBanner2[0]->banner)}}" />
            </a>
        </div>
    @else
        <div class="mt-1 crossed" style="height: 15%; background: #00ffbb">
            <svg>
                <line x1="0" y1="100%" x2="100%" y2="0" />
                <line x1="0" y1="0" x2="100%" y2="100%" />
            </svg>
        </div>
    @endif
</div>