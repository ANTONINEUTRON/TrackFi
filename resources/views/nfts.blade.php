<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TrackFi NFTS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('includes.head')
</head>

<body class="pt-1">
    <!--main body section-->
    <div id="main" class="row g-0" style="height: 95%;">
        <div class="col-md-9 col-lg-9 align-content-around h-100">
            <nav class="navbar navbar-light " style="padding-right: 10%;padding-left: 3%;">
                <div class="container row g-0">
                    <div class="col-2 ">
                        <!--toggler for navbar modal-->
                        <i data-bs-toggle="modal" data-bs-target="#get_quote_modal" class="fas fa-bars"
                            style="font-size: xx-large;"></i>

                    </div>
                    <!--navbar modal-->
                    <!-- modal -->
                    <!-- //left modal -->
                    
                    @include('includes.navbar')

                    <h1 class="text-center">
                        <img alt="header-trackfi" src="{{asset('images/header-trackfi.svg')}}">
                    </h1>
                </div>
                
                @include('includes.ad1')
            </nav>

            <div class="d-flex flex-wrap flex-column justify-content-center" style="height: 90%;">

                <div class="card mx-5">
                    <div id="change_wallet_section" class="text-center py-2 d-none" style=" background-color: #05052e;">
                        {{-- <label class="ml-5 form-label">
                            <b>Toolx</b>
                        </label> --}}
                        <input type="text" id="walletAddress" placeholder="New Wallet Address" class="form-control">
                        <button class='btn btn-success m-3' onclick="showWalletDetails()" type="button">Fetch NFTs</button>
                    </div>
                    <div id="address_bar" class="card-body text-white text-center" style=" background-color: #05052e;">
                        
                    </div>
                </div>
                
                <div class="container pt-3 m-3 text-white"  id="nft_display_section" >
                    
                     
                </div>

                <!--mobile add placeholder visible only on small screens-->
                @include('includes.ad2')
                <!--end of mobile placeholder-->

                <br />
                <!--modal1 that contains wallet providers-->
                @include('includes.wallet')

            </div>
        </div>

        <!--end of main body section-->
        <!--right navbar visible only on medium and large screens-->
        @include('includes.ad_banner')
        
        <!--end of right navbar-->
    </div>
    <!--footer section-->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script 
        src="https://cdn.jsdelivr.net/npm/algosdk@v1.15.0/dist/browser/algosdk.min.js"
        integrity="sha384-wURu1H0s7z6Nj/AiP4O+0EorWZNvjiXwex7pNwtJH77x60mNs0Wm2zR37iUtHMwH"
        crossorigin="anonymous"
    ></script>
    @include('includes.processing')
    
    <script>
        var displaySection = document.getElementById("nft_display_section");
        var addressBarSection = document.getElementById("address_bar");
        var changeWalletSection = document.getElementById("change_wallet_section");
        
        let token = "";
        let port = ""
        let server = " https://algoindexer.algoexplorerapi.io";
        const client  = new algosdk.Indexer(token, server, port);//connection client

        var address = "";//"{{$address ?: ""}}";//"PLJUNVIN6WSWRRWVUQI72QFPGUEOHCBKJK4Y42ZFBYNF4CVEQYYFDVI2KU";//

        window.onload = async ()=>{
            await init();
        }

        async function init() {
            showProcessing("Loading NFTs Details");
            addressBarSection.innerHTML = truncate(address)+"<button class='btn btn-success mx-3' onclick='showChangeWallet()'>Enter Address</button>";

            let listOfNfts = await getNftsDetails();
            if (listOfNfts.length > 0) {
                for (const element of listOfNfts) {
                    await displayNfts(element);
                }
            } else {
                displaySection.innerHTML += "NO NFTs Found For This Address!";
            }
            hideProcessing();
        }

        async function getNftsDetails(){
            let listOfNfts = [];
            try {
                let assestDetails = await client.lookupAccountAssets(address).do();
                //loop through assests and filter for assets which unit == 1
                let listOfAssets = assestDetails.assets;

                for(var i=0; i < listOfAssets.length; i++){
                    let element = listOfAssets[i];
                    if (element.amount == 1) {
                        let v = await verifyIfNft(element["asset-id"]);//will return null if not nft else object containing details
                        if(v != null){
                            listOfNfts.push(v);
                        }
                    }
                }
            } catch (error) {
                console.error(error);
                alert("couldn't fetch your wallet details, refresh page");
            }

            return listOfNfts;
        }

        async function verifyIfNft(id){
            try {
                let assetInfo = await client.searchForAssets()
                    .index(id).do();

                let assetsParams = assetInfo.assets[0].params;

                if (assetsParams.total == 1) {
                    //it is an nft
                    return {
                        id: id,
                        name: assetsParams.name,
                        collection: assetsParams["unit-name"],
                        creator: assetsParams.creator,
                        url: assetsParams.url.replace("ipfs://", "ipfs/")
                    };
                }
            } catch (error) {
                console.error(error);
            }

            return null;
        }

        async function displayNfts(nftInstance) {
            displaySection.innerHTML += `<div class="card mt-1" style=" background-color: #05052e;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="https://ipfs.io/`+nftInstance.url+`" style="width: 100%; height:100%;" alt="`+nftInstance.name+`">
                                </div>
                                <div class="col-md-6">
                                    <div class="text-white">
                                        <h4>`+nftInstance.name+`</h4>
                                        <h6 class="text-secondary">`+nftInstance.collection+` | `+nftInstance.id+`</h6>
                                        <h6><b>Creator: </b>`+nftInstance.creator+`</h6>
                                        <h6><a  class="text-success" href="https://ab2.gallery/asset/`+nftInstance.id+`" target="_blank">View on AB2 Gallery</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
        }

        function showChangeWallet(){
            addressBarSection.classList.add('d-none');
            changeWalletSection.classList.remove('d-none');
        }

        async function showWalletDetails(){
            address = document.getElementById("walletAddress").value;
            displaySection.innerHTML = "";
            addressBarSection.classList.remove('d-none');
            changeWalletSection.classList.add('d-none');
            await init();
        }
    </script>
</body>

</html>