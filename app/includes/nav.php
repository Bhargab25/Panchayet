<header>
    <div class="header-top px-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-3 d-flex col-sm-6 col-7 align-items-left">
                    <span class="goi"><img src="https://doc.ux4g.gov.in/assets/img/icon/in-flag.png" class="img-fluid"
                            alt="indian flag" loading="lazy" /></span>
                </div>
                <div class="col-xl-6 col-lg-9 col-sm-6 col-5 text-end">
                    <span class="d-none d-md-inline">
                        <button role="button" id="btn-decrease" class="font01" onclick="decrease()">
                            -A
                        </button>
                        <button role="button" id="btn-orig" class="font01 active01" onclick="reset()">
                            A
                        </button>

                        <button role="button" id="btn-increase" class="font01" onclick="increase()">
                            A+</button><span class="partition">|</span>
                    </span>

                    <!-- <span class="light_dark_icon">                       
                            <input type="checkbox" class="light_mode" id="checkbox">
                            <label for="checkbox" class="checkbox-label">
                                <i class="fas fa-moon"></i>
                                <i class="fas fa-sun"></i>
                                <span class="ball"></span>
                            </label>
                        </span> -->
                    <span class="language01">
                        <form id="langForm" method="POST" class="d-flex align-items-center">
                            <i class="glog-lang">
                                <img src="/assets/images/glob.svg" alt="glob" />
                            </i>
                            <select name="language" id="changeLang" onchange="OnSelectedIndexChange()">
                                <option value="" selected="" disable="">Language</option>
                                <option value="en">English</option>
                            </select>
                        </form>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Top links -->
    <div class="">
        <ul class="top-links d-flex flex-wrap align-items-center justify-content-start">
            <a href="<?= BASE_URL ?>/panchayat"><li>Gram panchayat at a glance</li></a>
            <a href="<?= BASE_URL ?>/water"><li>Drinking water</li></a>
            <a href="<?= BASE_URL ?>/Publichealth"><li>Public health</li></a>
            <a href="<?= BASE_URL ?>/social"><li>Social scheme ( Pensioner )</li></a>
            <a href="<?= BASE_URL ?>/education"><li>Education</li></a>
            <a href="<?= BASE_URL ?>/polling-station"><li>Name of polling station</li></a>
            <a href="<?= BASE_URL ?>/activity"><li>Activity</li></a>
            <a href="<?= BASE_URL ?>/swachh-bharat"><li>Swachh bharat mission</li></a>
        </ul>
    </div>
    <!-- Main manu -->
    <div id="header-sticky" class="header-area shadow-sm header-white px-2 pt-2 pb-2 mt-sm-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid pr-0 pl-0">
                    <!-- <a class="navbar-brand" href="#">
                            <img src="images/logo.svg" alt="logo" loading="lazy">                            
                        </a> -->
                    <a class="navbar-brand" href="<?= BASE_URL ?>/">
                        <!-- <img src="images/logo1.png" alt="logo"> -->
                        <h4 class="fw-bold">Freserganj Gram Panchayat</h4>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link<?= getCurrentRoute() === '' ? ' active' : '' ?>" aria-current="page"
                                    href="<?= BASE_URL ?>/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?= getCurrentRoute() === 'orders' ? ' active' : '' ?>"
                                    href="<?= BASE_URL ?>/orders">Orders / Circulars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?= getCurrentRoute() === 'etender' ? ' active' : '' ?>"
                                    href="<?= BASE_URL ?>/etender">E Tender</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?= getCurrentRoute() === 'contact' ? ' active' : '' ?>"
                                    href="<?= BASE_URL ?>/contact">Contact Us</a>
                            </li>
                        </ul>
                        <!-- <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                        <!-- <button type="button" class="btn btn-primary">CTA</button>
                            <div class="search pl-30"> <img src="images/search.svg" alt="icon"></div> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>