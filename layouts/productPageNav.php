<!-- Navbar Design -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
        <!-- navbar-expand-sm
            navbar-expand-md
            navbar-expand-lg
            navbar-expand-xl
            navbar-expand-xxl -->
        <!-- It describes when navbar nav will be displayed and toggler disappears -->
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Brand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropDown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropDown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./products.php" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="nproducts.php" class="nav-link">New Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">Forms</button>
                        <ul class="dropdown-menu dropdown-menu-light">
                            <li class="dropdown-item"><a href="Registration.php">Sing Up</a></li>
                            <li class="dropdown-item"><a href="Login.php">Sing In</a></li>
                            <li class="dropdown-item">Dummy</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <select class="form-select" name="Filter" id="filteringBox">
                            <option value="all">ALL</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </nav>