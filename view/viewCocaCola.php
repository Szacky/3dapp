<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap-4.4.1.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom_home.css" crossorigin="anonymous">

      <!-- Lets have some fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../application/css/style.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../application/css/all.css">

    
    <title>WEB 3D ASSIGMENT Coca Cola Museum</title>

  </head>
  <body id="bodyColor">
      <div id="transition">
      <div id="logo_a">
        <div id="my-image" class="logo" >
          <div class="lf" style="color: black; font-size: 90px;">
          <h1 style="font-size: 90px;">1</h1>
          <h1 style="font-size: 90px;">oca</h1>
          <h2 style="font-size: 90px;">Cola</h2>
          <h3>Great Britain</h3>
          <p>Welcome to the home of Coca-Cola GB</p>
          
          </div>
        </div> 
         
      </div>
      <div class="bubbles">
        <div class="bubble" style="animation-delay: 0s;"></div>
        <div class="bubble" style="animation-delay: 0s;"></div>
        <div class="bubble" style="animation-delay: 0s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 2s;"></div>
        <div class="bubble" style="animation-delay: 4s;"></div>
        <div class="bubble" style="animation-delay: 4s;"></div>
        <div class="bubble" style="animation-delay: 4s;"></div>
        <div class="bubble" style="animation-delay: 6s;"></div>
        <div class="bubble" style="animation-delay: 8s;"></div>
        <div class="bubble" style="animation-delay: 8s;"></div>
        <div class="bubble" style="animation-delay: 8s;"></div>
        <div class="bubble" style="animation-delay: 10s;"></div>
        <div class="bubble" style="animation-delay: 10s;"></div>
      </div>
      </div>
      <div id="content_a" style="display:none;">
        <!-- The 3D App header -->
        <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
            <div class="logo">
              <a class="navbar-brand" href="index.php/">
                <h1>1oca</h1>
                <h2>Cola</h2>
                <h3>Great Britain</h3>
                <p>Welcome to the home of Coca-Cola GB</p>
              </a>

              <!-- link Menu Icon button to the links class navbar-collapse selector] -->
              <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                  </li>
              
                  <!-- Dropdown -->
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="apiColaCan" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Fanta">Models</a>
                  </li>

                  <!-- Dropdown -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-toggle="popover" data-trigger="hover" title="Web Maps" data-content="Here are some web page links">Web Map</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Home</a>
                        <a class="dropdown-item" href="apiColaCan">X3D for Coca Cola Can</a>
                        <a class="dropdown-item" href="apiColaBottle">X3D for Coca Cola Bottle</a>
                        <a class="dropdown-item" href="apiSpriteCan">X3D for Sprite Can</a>
                        <a class="dropdown-item" href="apiFantaCan">X3D for Fanta Can</a>
                      </div>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            
        </nav>
      
        <HR align=center width=100% color=#987cb9 SIZE=1>
        <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
        -->
        <div class="container main_contents">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">
            <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->
            <div class="row">
              <div class="col-sm-12">
                  <div id="main_3d_image">
                      <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                      </div> 
                    </div>
              </div>
            </div> 
            

            

            <div class="t1">
              <p >Our brands</p>
            </div>

            <div class="t2">
              <a id="btn1" class="button" onclick="topFunction()">ALL</a>
              <a id="btn2" class="button" onclick="showCola()">COLA</a>
              <a id="btn3" class="button" onclick="showFanta()">FANTA</a>
              <a id="btn4" class="button" onclick="showSprite()">SPRITE</a>
              <a href="https://www.coca-cola.co.uk/brandsclass=" class="button" >More</a>
              <div id="content">Coca-Cola is a classic carbonated drink with a formula that includes ingredients such as carbonated water, high fructose corn syrup, phosphoric acid and flavourings. The Coca-Cola Company has also introduced many other flavours of carbonated beverages such as orange-flavoured Fanta and lemon-flavoured Sprite to meet the needs of different consumers.</div>
            </div>

            <div class="container">
            <div class="cardc" >
              <div class="circle" style="--clr:#f40103;">
                <img src="../application/assets/images/cocacola_logo.png" class="logo1">
              </div>
              <div class="content">
                <h2>Cocacola</h2>
                <p>Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886. You can find Coca‑Cola Original Taste in a variety of sizes to suit every lifestyle and occasion.</p>
                <a href="#">Buy now</a>
              </div>
              <img src="../application/assets/images/cocacola.png" class="product_img">
            </div>
            </div>
        
        
            <div class="container">
            <div class="cardc" >
              <div class="circle" style="--clr:#f5a134;">
                <img src="../application/assets/images/fanta_logo.png" class="logo1">
              </div>
              <div class="content">
                <h2>Fanta</h2>
                <p>Bright, bubbly, instantly refreshing and great tasting. Fanta is made with 100% natural flavours and is caffeine free. Fanta is available in a variety of real fruit flavours.</p>
                <a href="#">Buy now</a>
              </div>
              <img src="../application/assets/images/fanta.png" class="product_img">
            </div>
            </div>
        
        
            <div class="container">
            <div class="cardc" >
              <div class="circle" style="--clr:#27fa31;">
                <img src="../application/assets/images/sprite_logo.png" class="logo1">
              </div>
              <div class="content">
                <h2>Sprite</h2>
                <p>Crisp, refreshing and clean-tasting, Sprite is a lemon and lime-flavoured soft drink. It first hit shop shelves back in 1961 and today it’s sold in more than 190 countries.</p>
                <a href="#">Buy now</a>
              </div>
              <img src="../application/assets/images/sprite_b.png" class="product_img">
            </div>
            </div>

            <div class="t1">
            <p >Expolre more</p>
            </div>


            <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
            <div class="row">
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/renderImages/coke.png" data-fancybox data-caption="My 3D Coke Can Render">
                            <img id="my-image" class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/coca_cola.png" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card">
                          <a href="../application/assets/images/renderImages/sprite.png" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                            <img id="my-image" class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/sprite.png" alt="Sprite">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/renderImages/pepper.png" data-fancybox data-caption="My 3D Fanta Render" class="thumbnail">
                            <img id="my-image" class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/dr_pepper.png" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  <!-- End home page contents-->

          <button onclick="topFunction()" id="myBtn" title="Go to top">↑ Back</button>

          <div id="about" style="display:none;">
          <p>About</p>
          This website is an assignment for my Web 3D Application, a website about designing and creating a museum of Coca-Cola products.
          I created a small animation at the beginning of the site, using CSS for the fonts and simple JS for the bubble animation, which 
          will take the user to our homepage when they click on the Coca-Cola logo. For the homepage, I referred to the sample website and 
          the official Coca-Cola GB website. My website has a minimalist style, with no overly dazzling page layout. I have designed three 
          small animations on the homepage, using JS and CSS, so that users can experience their effects for themselves. For the X3D model page,
          I have also taken the layout of the Coca-Cola GB website and created some animations.
          <p></p>

          <p>Website originality statement</p>
          These web pages are submitted as part requirement for the degree of Undergraduate at the University of Sussex.  
          They are the product of my own labour except where indicated in the web page content. These web pages or contents 
          may be freely copied and distributed provided the source is acknowledged. 
          The design, content and related materials on this website are my own creation and collection, and are protected by copyright. 
          They may not be copied, modified, reproduced or used for commercial purposes in any form by any person or organisation without 
          my express permission.The text, images and other material used on this page are partly from the Internet and are for study and 
          research purposes only. If there is any infringement, please contact me promptly and I will remove it or indicate the source immediately.
          <p></p>

          <p>Reference</p>
          <p>The following references are to web styles</p>
          <p>1. https://www.coca-cola.co.uk/</p>
          <p>2. https://www.coca-colacompany.com/cn/home</p>
          <p>3. https://benskitchen.com/x3dom.php</p>
          <p>4. https://users.sussex.ac.uk/~martinwh/3dapp/lab9/CocaCola_VM/index.php/#</p>
          <p>The following references are to CSS styles</p>
          <p>1. bootstrap-4.4.1.css</p>
          <p>2. X3DOM.css http://www.x3dom.org</p>
          <p>3. bootstrap-4.4.1.css https://getbootstrap.com</p>
          <p>4. https://fonts.googleapis.com/css?family=Open+Sans</p>
          <p>5. https://fonts.googleapis.com/css?family=Oswald</p>
          <p>6. jquery.fancybox.min.css https://fancyapps.com/fancybox/</p>
          <p>The following references are for JS</p>
          <p>1. all.js https://fontawesome.com</p>
          <p>2. popper.min.js https://unpkg.com/@popperjs/core@2</p>
          <p>3. bootstrap.min.js https://getbootstrap.com</p>
          <p>4. fontawesome-all.min.js http://fontawesome.com</p>
          <p>5. x3dom-1.7.2/x3dom.js http://www.x3dom.org</p>
          <p>6. jquery.fancybox.min.js http://fancyapps.com/fancybox/</p>
          </div>  

        

        </div> <!-- End 3D App SPA Contents -->
      
        <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2023 3D Apps Assignment | <a href="Reference.php">Reference</a> |<a herf="#" id="popup-trigger">Statement of Originality</a></span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="https://www.facebook.com/cocacolaGB/?brand_redir=40796308305"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="https://twitter.com/cocacola_gb"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
        </nav> 

        <div id="popup-overlay" class="overlay">
        <div class="popup">
            <span class="close-btn" id="popup-close">&times;</span>
            <h2>Statement of Originality</h2>
            <p>These web pages are submitted as part requirement for the degree of Undergraduate at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged. </p>
        </div>
        </div>

        <!-- My 3D App modals -->
        <!-- Contact modal -->
        <!-- The Modal -->
        <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">3D App Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Zack Zhang, 246682, Email: yz569@sussex.ac.uk</p>
                  <p>This website is an assignment for my Web 3D Application, a website about designing and creating a museum of Coca-Cola products.</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
        </div>
      </div>

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="../application/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="../application/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="../application/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="../application/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="../application/js/jquery.fancybox.min.js"></script>

      <script>
      window.onscroll = function() {scrollFunction()};
  
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }
  
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>

      <script>
      function scrollToBottom() {
        window.scrollTo(0,document.body.scrollHeight);
      }
      
      function showCola() {
        scrollToBottom();
      }
      
      function showFanta() {
        scrollToBottom();
      }
      
      function showSprite() {
        scrollToBottom();
      }
      </script>

      <script>
      // 点击可口可乐标志后显示正文内容
      var logo_a = document.getElementById("logo_a");
      var content_a = document.getElementById("content_a");
      logo_a.addEventListener("click", function() {
        document.getElementById("transition").style.display = "none";
        content_a.style.display = "block";
        document.body.classList.add("clicked"); // 添加“clicked”类
      });

      content_a.addEventListener("click", function() {
        document.body.classList.remove("clicked"); // 删除“clicked”类
        document.body.style.backgroundColor = "rgb(255, 255, 255)"; // 将背景颜色设为白色
      });

      // 动画效果开始
      window.onload = function() {
        var bubbles = document.getElementsByClassName("bubble");
        for (var i = 0; i < bubbles.length; i++) {
          var bubble = bubbles[i];
          var delay = Math.random() * 2000; // 延迟时间
          setTimeout(animateBubble.bind(null, bubble), delay);
        }
      }

      // 单个气泡的动画效果
      function animateBubble(bubble) {
        var size = Math.floor(Math.random() * 100) + 100; // 气泡大小
        var duration = Math.floor(Math.random() * 5000) + 1500; // 动画时间
        var startX = Math.floor(Math.random() * (window.innerWidth - size)); // 起始位置
        var startY = Math.floor(Math.random() * (window.innerHeight - size)); // 起始位置
        var endX = Math.floor(Math.random() * (window.innerWidth - size)); // 终止位置
        var endY = Math.floor(Math.random() * (window.innerHeight - size)); // 终止位置

        bubble.style.opacity = 1;
        bubble.style.width = size + "px";
        bubble.style.height = size + "px";
        bubble.style.left = startX + "px";
        bubble.style.top = startY + "px";

        bubble.animate(
          [
            {left: startX + "px", top: startY + "px"},
            {left: endX + "px", top: endY + "px"}
          ],
          {
            duration: duration,
            easing: "ease-out",
            fill: "forwards"
          }
        ).onfinish = function() {
          bubble.style.opacity = 0;
          bubble.style.width = "0px";
          bubble.style.height = "0px";
        }
      }
      </script>

      <script type="text/javascript">
      $(document).ready(function(){
        $("#btn1").click(function(){
          $("#content").text("Coca-Cola is a classic carbonated drink with a formula that includes ingredients such as carbonated water, high fructose corn syrup, phosphoric acid and flavourings. The Coca-Cola Company has also introduced many other flavours of carbonated beverages such as orange-flavoured Fanta and lemon-flavoured Sprite to meet the needs of different consumers.");
        });

        $("#btn2").click(function(){
          $("#content").text("Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886. You can find Coca‑Cola Original Taste in a variety of sizes to suit every lifestyle and occasion.");
        });

        $("#btn3").click(function(){
          $("#content").text("Bright, bubbly, instantly refreshing and great tasting. Fanta is made with 100% natural flavours and is caffeine free. Fanta is available in a variety of real fruit flavours.");
        });

        $("#btn4").click(function(){
          $("#content").text("Crisp, refreshing and clean-tasting, Sprite is a lemon and lime-flavoured soft drink. It first hit shop shelves back in 1961 and today it’s sold in more than 190 countries.");
        });
      });
      </script>

      <script>
        function scrollToBottom() {
          window.scrollTo(0,document.body.scrollHeight);
        }
      
        function showCola() {
          scrollToBottom();
        }
      
        function showFanta() {
          scrollToBottom();
        }
      
        function showSprite() {
          scrollToBottom();
        }
      </script>

    <script>
        // 获取弹窗相关元素
        var popupOverlay = document.getElementById('popup-overlay');
        var popupTrigger = document.getElementById('popup-trigger');
        var popupClose = document.getElementById('popup-close');

        // 点击触发弹窗
        popupTrigger.addEventListener('click', function() {
            popupOverlay.style.visibility = 'visible';
        });

        // 点击关闭按钮或遮罩层关闭弹窗
        popupClose.addEventListener('click', function() {
            popupOverlay.style.visibility = 'hidden';
        });
        popupOverlay.addEventListener('click', function(event) {
            if (event.target === popupOverlay) {
                popupOverlay.style.visibility = 'hidden';
            }
        });
    </script>

  </body>
  <style>
    #my-image:hover {
      transform: scale(1.15);
      transition: transform 0.2s ease-in-out;
    }

    #myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #555;
			color: white;
			cursor: pointer;
			padding: 15px;
			border-radius: 4px;
		}

		#myBtn:hover {
			background-color: #333;
		}

    .p1{
        width: 100%;
        height: 100%;
        position: relative;
    }

    .p2{
        width: 40%;
        height: 40%;
        position: relative;
        top: 0%;
        left: 50%;
        transform: translateX(-50%);
        
    }

    .container {
      position: relative;
    }

    .text-overlay {
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;
      color: white;
      font-size: 10px;
      font-weight: bold;
      text-align: center;
      opacity: 0;
      animation: fade 2s ease-in-out infinite;
    }

    @media (min-width: 720px) {
      .p1{
          width: 100%;
          height: 100%;
          position: relative;
      }

      .text-overlay {
          position: relative;
          top: 60%;
          left: 50%;
          transform: translate(-50%, -50%);
          z-index: 1;
          color: white;
          font-size: 24px;
          font-weight: bold;
          text-align: center;
        }
    }

    .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
    }

    .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    }

    .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            visibility: hidden;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .close-btn {
            cursor: pointer;
            font-weight: bold;
            color: #999;
            float: right;
        }

    @keyframes fade {
      0% {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
      100% {
        opacity: 0;
      }
    }
    
  </style>
</html>