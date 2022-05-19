<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="modal fade" id="loadMe" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-body text-center">
            <div class="loader"></div>
            <div clas="loader-txt">
            <p id="processor_text">Loading message</p>
            </div>
        </div>
        </div>
    </div>
</div>

<script>
    function showProcessing(msg) {
        $("#processor_text").text(msg);
        $("#loadMe").modal({
                backdrop: "static", //remove ability to close modal with click
                keyboard: false, //remove option to close with keyboard
                show: true //Display loader!
        });
        $("#loadMe").modal("show");
    }
    function hideProcessing(){
        $("#loadMe").modal("hide");
    }
</script>