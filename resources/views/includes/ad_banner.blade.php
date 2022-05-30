<!-- AD BAR on side-->
<div id="right-sidebar" class="col-md-3 sticky-top d-none d-md-block" style="height: 90vh;position: fixed;right: 0;">
    @if (!empty($smallBanner1))
        <div class="crossed" style="height: 15%;">
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

    @if (!empty($bigBanner))
        <div class="mt-1 crossed" style="height: 68%; background-color: white">
            <a target="_blank" href="{{$bigBanner[0]->url}}">
                <img style="width: 100%; height:100%;" src="{{url('public/images/ads/'.$bigBanner[0]->banner)}}" />
            </a>
        </div>
    @else
        <div class="mt-1 crossed" style="height: 70%; background-color: white">
            <svg>
                <line x1="0" y1="100%" x2="100%" y2="0" />
                <line x1="0" y1="0" x2="100%" y2="100%" />
            </svg>
        </div>
    @endif

    @if (!empty($smallBanner2))
        <div class="mt-1 crossed" style="height: 15%; background: #00ffbb">
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
