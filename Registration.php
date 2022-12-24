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

        .form-container form input.inputSection {
            border: none;
            outline: none;
            color: blue;
        }

    </style>
</head>
<body>
    <?php include_once('layouts/nav.php'); ?>

    <div class="form-container w-50 bg-white mx-auto mt-3 p-5">
        <form action="" class="" autocomplete="off">
            <input class="validateForm inputSection w-75" type="text" placeholder="Name" required autofocus>
            <button class="btn btn-danger disabled">Failed</button>
           <hr>
            <input class="inputSection w-75" type="email" placeholder="Email"><hr>
            <input class="validateForm inputSection w-75" type="text" placeholder="Phone" required>
            <button class="btn btn-danger disabled">Failed</button>
            <hr>
            <input class="validateForm inputSection w-75" type="text" placeholder="Address" required><button class="btn btn-danger disabled">Failed</button>
            <hr>
            <input class="validateForm inputSection w-75" id="PreviousPass" type="password" placeholder="Password" required><button class="btn btn-danger disabled">Failed</button>
            <hr>
            <input class="validateForm inputSection w-75" type="password" placeholder="Re-type Password" required><button class="btn btn-danger disabled">Failed</button>
            <hr>
            <div class="form-check">
                    <input type="radio" class="form-check-input" name="select-gender">
                    <label for="" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="select-gender">
                    <label for="" class="form-check-label">Female</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="select-gender">
                    <label for="" class="form-check-label">Other</label>
                </div><hr>        
            <input type="submit" class="btn btn-primary" value="Sing Up">
        </form>
    </div>

    <?php include_once('layouts/footer.php'); ?>

    <script>
        // Registration Form validation
        function Passed(Element) {
            Element.innerText = 'Passed';
            Element.classList.remove('btn-danger');
            Element.classList.add('btn-success');
        }

        function Failed(Element) {
            Element.innerText = 'Failed';
            Element.classList.remove('btn-success');
            Element.classList.add('btn-danger');
        }

        (function() {
            var flag = false;
            const validationList = document.getElementsByClassName("validateForm");
            const List = Array.from(validationList);
            // console.log(List);
            const allButton = document.querySelectorAll("button.btn.btn-danger");
            const Button = Array.from(allButton);
            // console.log(Button);
            for(let i=0; i<List.length; i++) {
                
                // if i=0, it's the Name validation
                // if i=1, it's the Phone Number Validation
                // if i=2, it's the Address Validation
                // if i=3, it's the Password Validation
                // if i=4, it's the Password Checking Again

                List[i].addEventListener("input", function() {
                    if(i===0) {
                        var regExpForName = /^[A-Za-z]{1,20}(\s|[A-Za-z])[A-Za-z]{1,20}$/;
                        if(this.value.length > 2 && (regExpForName.test(this.value))) {
                            Passed(Button[i]);
                        }
                        else {
                            Failed(Button[i]);
                        }                   
                    } else if(i===1) {
                        var regExpForPhoneNumber = /^01([^024])\d{7,8}$/;
                        if(regExpForPhoneNumber.test(this.value)) {
                            Passed(Button[i]);
                        }else {
                            Failed(Button[i]);
                        }
                    } else if(i===2) {
                        var regExpForAddress = /^([A-Za-z0-9]{1,20}[A-Za-z 0-9,-:]{1,20}){1,10}$/;
                        if(regExpForAddress.test(this.value)) {
                            Passed(Button[i]);
                        }else {
                            Failed(Button[i]);
                        }
                    } else if(i===3) {
                        var regExpForPassword = /^\w{5,20}$/;
                        if(regExpForPassword.test(this.value)) {
                            flag = true;
                            Passed(Button[i]);
                        }else {
                            Failed(Button[i]);
                            flag = false;
                        }
                    } else if(i===4) {
                        var Password = document.getElementById("PreviousPass").value;
                        if(Password == this.value && flag) {
                            Passed(Button[i]);
                        } else {
                            Failed(Button[i]);
                        }
                    }
                });
            }
        })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>