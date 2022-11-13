<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaquiArt</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles2.css">
    
</head>

<body>
    
    <div class="topnav" id="myTopnav">
        <a href="index.html">
            <img src="img\logo1.1.png" alt="" class="imgLogo">
        </a>
        <a href="#home" class="active">Home</a>
        <a href="#news">Explore</a>
        <a href="#contact">Musem</a>
        <a href="porfile.html">Porfile</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    
    <div class="container">
        <div class="frame">
            <div class="image">
                <img src="img\1.jpg" alt=""  class="item">
            </div>
        </div>
        <div class="item-details">
            <form class="" action="">

            </form>

        </div>
        <label class="work">MADRE PAQUIME</label>
        <label class="owned">Owned by</label>
          <label class="autor">Julián Rodríguez</label>
          
          <label class="tech">Technique:</label>
          <label class="technique">Temple</label>
          <label class="price">100</label>
          <label class="priced">$1,391.00</label>
          <div class="image2">
            <img class="sol" src="img\solana-sol-logo-12828AD23D-seeklogo.com.png" >
            
        </div>
          
        <button class="button-27" role="button"><a href="https://www.solaneyes.com/address/BHyxEFGxgyptrZDaU64qX7ToVjYCL3R1ia1f83Wr8ejA?cluster=devnet">Buy Me</a></button>
       
            <div class="details-box">
            <details open>
            <summary>Description</summary>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, est lacinia class posuere ullamcorper nulla, 
                ultrices ultricies eu vitae imperdiet lacus. Ullamcorper cras proin faucibus enim a per vel nascetur 
                in nibh tempus, lacus lectus ornare erat habitasse ultricies ac senectus vivamus nunc tristique, mattis
                 aliquam fusce sapien praesent dis congue neque leo auctor. Aliquam interdum sollicitudin orci
                 penatibus ligula posuere nullam potenti vulputate netus, at euismod urna per et habitant scelerisque congue nulla.</p>
          </details>
        </div>
    </div>
</body>
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