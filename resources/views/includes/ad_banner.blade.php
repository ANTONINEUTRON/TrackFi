<!-- AD BAR on side-->
<div id="right-sidebar" class="col-md-3 sticky-top d-none d-md-block" style="height: 90vh;position: fixed;right: 0;">
        @if (!empty($listOfAds))
            <div class="crossed" style="height: 15%;">
                <a target="_blank" href="{{$listOfAds['urls'][1]}}">
                    <img style="width: 100%; height:100%;" src="{{url('public/images/ads/'.$listOfAds["small_banner_url1"])}}" />
                </a>
            </div>
            <div class="mt-1 crossed" style="height: 68%; background-color: white">
                <a target="_blank" href="{{$listOfAds['urls'][0]}}">
                    <img style="width: 100%; height:100%;" src="{{url('public/images/ads/'.$listOfAds["large_banner_url"])}}" />
                </a>
            </div>
            <div class="mt-1 crossed" style="height: 15%; background: #00ffbb">
                <a target="_blank" href="{{$listOfAds['urls'][2]}}">
                    <img style="width: 100%; height:100%;" src="{{url('public/images/ads/'.$listOfAds["small_banner_url2"])}}" />
                </a>
            </div>
        @else
            <div class="crossed" style="height: 15%;">
                <svg style="background-color: #00ffbb;">
                    <line x1="0" y1="100%" x2="100%" y2="0" />
                    <line x1="0" y1="0" x2="100%" y2="100%" />
                </svg>
            </div>
            <div class="mt-1 crossed" style="height: 70%; background-color: white">
                <svg>
                    <line x1="0" y1="100%" x2="100%" y2="0" />
                    <line x1="0" y1="0" x2="100%" y2="100%" />
                </svg>
            </div>
            <div class="mt-1 crossed" style="height: 15%; background: #00ffbb">
                <svg>
                    <line x1="0" y1="100%" x2="100%" y2="0" />
                    <line x1="0" y1="0" x2="100%" y2="100%" />
                </svg>
            </div>
        @endif
</div>
