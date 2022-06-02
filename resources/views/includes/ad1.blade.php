<!-- AD1 Mobile-->
<div class="d-block d-md-none mt-1 crossed mr-2 ml-2 m-auto"
style="height: 100px;">

    @if (!empty($smallBanner1))
        <div class="crossed">
            <a target="_blank" href="{{$smallBanner1[0]->url}}">
                <img style="width: 100%; height:100%;" src="{{url('public/images/ads/'.$smallBanner1[0]->banner)}}" />
            </a>
        </div>
    @else
        <div class="crossed" style="height: 15%;">
            <svg style="background-color: #00ffbb;">
                <line x1="0" y1="100%" x2="100%" y2="0" />
                <line x1="0" y1="0" x2="100%" y2="100%" />
            </svg>
        </div>
    @endif

</div>