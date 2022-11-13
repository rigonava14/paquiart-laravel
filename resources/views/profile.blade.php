<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaquiArt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" href="css/profile.css">
    
</head>

<body>
    
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
        <div class="card p-4"> <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="img/profile.jpg" height="100" width="100" /></button> <span class="name mt-3">Julian Rodriguez</span> <span class="idd">@JulianR</span> <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1">Oxc4c16a645_b21a</span> <span><i class="fa fa-copy"></i></span> </div> <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">1069 <span class="follow">Followers</span></span> </div> <div class=" d-flex mt-2"> 
            <button class="btn1 btn-dark"><a href="/nft">Create NFT</a> </button> 
            
        </div><div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div> <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div> </div> </div>
</div>
    

</body>
<script>
    async function phantomLogin() {
        const isPhantomInstalled = window.solana && window.solana.isPhantom;
        if (!isPhantomInstalled) {
            alert("Phantom browser extension is not detected!");
        } else {
            try {
                const resp = await window.solana.connect();
                console.log('Account: ' + resp.publicKey.toString());
                connectAccountAnimation(resp.publicKey.toString());
            } catch (err) {
                console.log("User rejected request");
                console.log(err);
            }
        }
    }
    async function connectAccountAnimation(publicKey) {
        $('#login-button').hide();
        let publicKeyDiv = $('.public-key');
        publicKeyDiv.html('<b>Account:</b> '+publicKey);
        publicKeyDiv.show();
        showBalance();
    }
    async function showBalance(){
        let provider = window.solana;
        let connection = new solanaWeb3.Connection(solanaWeb3.clusterApiUrl('mainnet-beta'), 'confirmed');
        connection.getBalance(provider.publicKey).then(function (value) {
            let solBalanceDiv = $('.sol-balance');
            solBalanceDiv.html('<b>Balance:</b> ' + (value/1000000000) + ' SOL');
            solBalanceDiv.show();
        });
    }
    try {
        window.onload = () => {
            const isPhantomInstalled = window.solana && window.solana.isPhantom;
            if (isPhantomInstalled) {
                window.solana.connect({onlyIfTrusted: true})
                    .then(({publicKey}) => {
                        connectAccountAnimation(publicKey.toString());
                    })
                    .catch(() => {
                        console.log("Not connected");
                    })
            }
        }
    } catch (err) {
        console.log(err);
    }
</script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</html>