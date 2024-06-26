        <!--modal1 that contains wallet providers-->
        <div id="modal1" class="modal fade" style='z-index: 99999;'>
            <div class="modal-dialog modal-dialog-centered" style="width: 30em;">
              <div class="modal-content" style="background:#03031b">
                <div class="d-grid justify-content-center ov-hidden pt-3 pb-1" style="max-height: 50vh;">
                  <span id="modal_title" class="body-text2 text-center">Choose A Wallet Provider</span>
                    <button id="connectMyA" class="btn provider mt-3 align-items-center font-weight-bold" onclick="connectMyAlgoWallet()" style="color: #00ffbb;">
                      <img alt="myalgo-icon" width="50"
                                              src="{{asset('images/algorand_logo_mark_white.svg')}}">My Algo
                    </button>
                    <button id="disconnectWallet" class="btn provider mt-3 align-items-center font-weight-bold" onclick="deleteCookie()" style="color: #00ffbb;">
                      <img alt="myalgo-icon" width="50"
                                              src="{{asset('images/algorand_logo_mark_white.svg')}}">Disconnect Wallet
                    </button>
  
                </div>
              </div>
            </div>
          </div>

          
  <script src="{{asset('js/myalgo.min.js')}}"></script>
  <script src="{{asset('js/walletHandler.js')}}"></script>