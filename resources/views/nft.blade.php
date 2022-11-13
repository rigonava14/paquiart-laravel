<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaquiArt</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color:transparent; ">
        <div class="container-fluid">
          <a href="/" class="navbar-brand" style="color:#C25025;">PaquiArt</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" style="color:#C25025;" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:#C25025;" href="#">Link</a>
              </li>
              
              <li class="nav-item">
                <a style="color:#C25025;" class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary  " type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="row">
        <div class="col-6">
            <form action="/create" method="POST" enctype="multipart/form-data" >

                @csrf
                <div class="mx-5">
                    <label class="form-label">Imagen</label>
                    <input name="img" type="file" class="form-control" aria-describedby="emailHelp">
                  </div>
                  <div class="mx-5">
                    <label for="exampleInputPassword1" class="form-label disable">Titulo</label>
                    <input name="titulo" type="text" class="form-control">
                  </div>
                <div class="mx-5">
                    <label class="form-label">Precio</label>
                    <input name="precio" type="text" class="form-control"  aria-describedby="emailHelp">
                  </div>
                  <div class="mx-5">
                    <label for="exampleInputPassword1" class="form-label disable">Direccion</label>
                    <input name="address" type="text" class="form-control" id="address">
                  </div>
                  <div class="mx-5">
                    <label for="exampleInputPassword1" class="form-label disable">Tecnica</label>
                    <input name="tecnica" type="text" class="form-control">
                  </div>
                  
                  <div class="mx-5">
                    <label for="exampleInputPassword1" class="form-label">Wallet Nft Storage</label>
                    <input type="text" placeholder="Nft Storage Key" class="form-control" name="storage">
                    <a target="__blank" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwie6t3o-Kr7AhV6DkQIHYOwBwEQFnoECAkQAQ&url=https%3A%2F%2Fnft.storage%2F&usg=AOvVaw1ZYjGZpNbv9bKiapmQef79">Nft Storage</a>
                    <p>Ve a Nft Storage, Crea una cuenta, despues en la seccion de API Keys crea una nueva key y copialo</p>
                  </div>
                  
                  <div class="mx-5">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
                  
            </form>
        </div>
        <div class="col-6" >
            <button type="submit" class="btn btn-primary" onclick="phantomLogin()">Login with Phatom Wallet</button>

        </div>
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
                document.getElementById('address').value = resp.publicKey.toString()
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