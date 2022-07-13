<nav class="navbar-static-top  navbar navbar-expand-lg bg-warning">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active text-light fw-bold" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fw-bold" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fw-bold" href="#">CONTACT US</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item submenu" id="cat1" href="#">Electronics</a>
                            <ul class="submenu2 bg-primary position-absolute start-100 top-2.5" display:none;" id="subcat1">
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu1</a></li>
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu2</a></li>
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu3</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item " id="cat2" href="#">Grocessary</a>
                            <ul class="submenu2 bg-primary position-absolute start-100 top-5 " style="display:none;" id="subcat2">
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu1</a></li>
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu2</a></li>
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu3</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item " id="cat3" href="#">Clothes</a>
                            <ul class=" bg-primary position-absolute start-100 top-10  " style="display:none;" id="subcat3">
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu1</a></li>
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu2</a></li>
                                <li class="nav-item" style="list-style:none;"><a href="#" class="nav-link">submenu3</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<script>
    const cat1 = document.getElementById("cat1");
    const cat2 = document.getElementById("cat2");
    const cat3 = document.getElementById("cat3");
    const subCat3 = document.getElementById('subcat3');
    const subCat2 = document.getElementById('subcat2');
    const subCat1 = document.getElementById('subcat1');
    // cat1.addEventListener('mouseover', function() {
    //     if (subCat1.style.display === "none")
    //         subCat1.style.display = "block";
    //     else
    //         subCat1.style.display = "none";
    // });

    // cat2.addEventListener('mouseover', function() {
    //     if (subCat2.style.display === "none")
    //         subCat2.style.display = "block";
    //     else
    //         subCat2.style.display = "none";
    // });

    // cat3.addEventListener('mouseover', function() {
    //     if (subCat3.style.display === "none")
    //         subCat3.style.display = "block";
    //     else
    //         subCat3.style.display = "none";
    // })
    cat1.onmouseover = function(event) {
        subCat1.style.display = 'block';

    }
    cat1.onmouseout = function(event) {
        subCat1.style.display = 'none';

    }
    cat2.onmouseover = function(event) {
        subCat2.style.display = 'block';

    }
    cat2.onmouseout = function(event) {
        subCat2.style.display = 'none';
    }
    cat3.onmouseover = function(event) {
        subCat3.style.display = 'block';

    }
    cat3.onmouseout = function(event) {
        subCat3.style.display = 'none';

    }
</script>