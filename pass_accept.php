<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HackerU</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
</head>

<body style="background-image: url('img/background.jfif'); background-size:100% 100%">
  <!-- Page Header -->
  <div class="container py-5">
      <div class="col-12 col-md-8 col-lg-6 mx-auto">
          <div style="background-color: rgb(255,255,255,0.4)" class="p-3 shadow">
            <?php
                $pws = isset($_POST["pws"]) ? $_POST["pws"] : "";
                $srt = isset($_POST["srt"]) ? $_POST["srt"] : "";
                $fName = isset($_POST["fName"]) ? $_POST["fName"] : "";
                
                if ($pws === base64_decode("VGgxNV8xNV81VFIwbjY") && $srt === "1352" && !empty($fName)) {
                  ?>
                  <script>
                    var div_1 = document.querySelector("#d1");
                    var div_2 = document.querySelector("#d2");
                    var header = document.querySelector("#h");
                    
                    var div_style = window.getComputedStyle(div_1);
                    var header_style = window.getComputedStyle(header);
                
                    function A1() {
                        if (div_1.children[0].nodeName === "DIV") {
                            console.log("You nailed it !");
                            if (div_2.children[0].nodeName === "H1") {
                                div_2.children[0].innerHTML = "This is correct too!";
                                A3();
                            }
                        }
                    }
                    
                    function A2(params) {
                        if ((params / (10 % 4)) === 132.993) {
                            var m = document.querySelector("Math");
                            m.innerHTML = "Set Text In Here :";
                            var arr = [m];
                            arr.push("Element");
                            arr.push("Second Element");
                            m.addEventListener("click", A2(arr));
                        }
                    }
                    
                    function A3() {
                        if (div_style["textAlign"] === "center" && div_style["fontFamily"] === "fantasy") {
                            console.log("Just one more step");
                            if (header_style.color === "rgb(255, 99, 71)" && header_style.transform === "matrix(-1, 0, 0, -1, 0, 0)") {
                                alert("AMAZING YOU DID IT !!!");
                            }
                        }
                    }
                    
                    A1();
                  </script>
                  <?php
                }
                ?>
          </div>
      </div>      
  </div>

</body>

</html>