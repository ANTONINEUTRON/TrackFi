<div class="col-5 d-flex justify-content-end">
    <!--algo and usd buttons-->

    <iframe name="fluke" style="display:none;"></iframe>
    <form method="post" action="{{route('set_currency_choice')}}" id="subjectName" name="abi" 
        class="select" target="fluke" tabindex="1" onchange="selectedSubjectName()">
        @csrf
        <input type="hidden" id="multiplier" name="multiplier" value="1" />
        <input class="option-select selectopt" id="algo_radio" name="test" type="radio" id="opt2"
            value="Algo">
        <label for="algo_radio" class="option"><img alt="algorand-icon" width="30"
                src="{{asset('images/algorand_logo_mark_white.svg')}}">ALGO</label>
        <input class=" option-select selectopt" id="usd_radio" name="test" type="radio" id="opt1"
            value="USD">
        <label for="usd_radio" class="option d-flex justify-content-around"><img
                alt="united-states-flag-icon" style="width: 20px;"
                src="{{asset('images/united-states.svg')}}">USD</label>

    </form>


    <!--end of algo and usd buttons-->
    <script>
        //initialized variables
        var selectedCurr = "{{session('selectedCurrency','Algo')}}";
        var MULTIPLIER = {{session('multiplier',1)}};

        if (selectedCurr == "Algo") {
            document.getElementById("algo_radio").checked = true;
            document.getElementById("usd_radio").checked = false;
        }else{
            document.getElementById("algo_radio").checked = false;
            document.getElementById("usd_radio").checked = true;
        }

    </script>
</div>