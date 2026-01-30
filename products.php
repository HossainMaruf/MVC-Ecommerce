<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fd3016b08b.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            background: rgb(7,7,27);
        }
    </style>
</head>
<body>
        <!-- Top Nav -->
        <?php include_once('layouts/productPageNav.php'); ?>
        
        <div class="row">
                <?php
                    function FindName($finalName)
                    {
                        $i; $Name = array();
                        for ($i=0; $i <strlen($finalName); $i++) { 
                            if(!ctype_digit($finalName[$i])) {
                                $Name[$i] = $finalName[$i];
                            } 
                        }
                        return implode($Name);
                    }
                    function FindPrice($finalName) {
                        $i; $Name = array();
                        for ($i=0; $i <strlen($finalName); $i++) { 
                            if(ctype_digit($finalName[$i])) {
                                $Name[$i] = $finalName[$i];
                            } 
                        }
                        return implode($Name);
                    }
                    // $fullName; $revFullName; $justName;
                    $ExtractedFinalName; $Name; $Price; $index=0; $itemList = array(); $pos=0; $searchingCreiteria = array();
                    $imageList = glob("images/products/*");
                    foreach($imageList as $image):
                        // Manually
                        // $fullName = substr($image,strrpos($image,"/")+1);
                        // $revFullName = strrev($fullName);
                        // $ExtractedFinalName = substr($revFullName,strrpos($revFullName,".")+1);
                        // print(FindName(strrev($ExtractedFinalName)));
    
                        // Directly
                        $ExtractedFinalName = strrev(substr(strrev(substr($image,strrpos($image,"/")+1)),strrpos(strrev(substr($image,strrpos($image,"/")+1)),".")+1));
                        $Name = FindName($ExtractedFinalName);
                        if(!array_search($Name,$searchingCreiteria)) {
                            $searchingCreiteria[$pos++] = $Name;
                        }
                        $itemList[$index++] = $Name;
                        $Price = FindPrice($ExtractedFinalName);
                ?>
                <div class="col-sm-3 my-2 <?php echo $Name; ?>">
                    <div class="card text-center">
                        <img src='<?php echo "$image" ?>' alt="" class="card-img-top">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo strtoupper($Name); ?></h2>
                            <h3 class="card-subtitle text-muted"><?php echo $Price; ?><b> TK</b></h3>
                            <p class="card-text">Product Description</p>
                            <button class="btn btn-info mt-1">DETAILS</button>
                            <button class="btn btn-outline-primary mt-1">PURCHASE</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php include_once('layouts/footer.php'); ?>
  
    <script>
        (function() {  // Dynamic Price Setting
            var input = document.getElementsByClassName("inputSection");
            var price = document.getElementsByClassName("price");
            //var cost = document.getElementsByClassName("cost");
            for(let i=0; i<input.length; i++) {
                input[i].addEventListener("change", function() {
                if(this.value<0) {
                    alert("Please Purchase!!!");
                    this.value = 0;
                } else {
                    document.getElementsByClassName("cost")[i].innerHTML = (price[i].innerHTML*(this.value));
                }
            });
        }
    })();

        (function() {    // Item Searching Function
            document.getElementById("filteringBox").addEventListener("change", function() {
            var searchingItem = document.getElementById("filteringBox").value;
            <?php
                for($i=0; $i<$index; $i++):
             ?>
            var Element = document.getElementsByClassName('<?php echo $itemList[$i]; ?>');
                 for(let i=0; i<Element.length; i++) {
                    document.getElementsByClassName('<?php echo $itemList[$i]; ?>')[i].style.display = "block";
                 }  
            <?php
                endfor;
                for($i=0; $i<$index; $i++):
             ?>
             if(searchingItem != '<?php echo $itemList[$i]; ?>') {
                 var Element = document.getElementsByClassName('<?php echo $itemList[$i]; ?>');
                 for(let i=0; i<Element.length; i++) {
                    document.getElementsByClassName('<?php echo $itemList[$i]; ?>')[i].style.display = "none";
                 }       
             }
             if(searchingItem == "all") {
                var Element = document.getElementsByClassName('<?php echo $itemList[$i]; ?>');
                 for(let i=0; i<Element.length; i++) {
                    document.getElementsByClassName('<?php echo $itemList[$i]; ?>')[i].style.display = "block";
                 }  
             }
            <?php endfor; ?>
        });
        })();

        (function() { // Dynamic Option Creation For Searching
            <?php
                foreach($searchingCreiteria as $value):
             ?>
             var OptionElement = document.createElement("option");
             OptionElement.setAttribute("value","<?php echo $value; ?>");
             OptionElement.innerHTML = "<?php echo strtoupper($value); ?>";
             document.getElementById("filteringBox").appendChild(OptionElement);
             <?php endforeach; ?>
        })();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
