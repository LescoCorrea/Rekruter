<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rekruter</title>

    <!-- Fonts -->
    <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">




</head>

<body class="antialiased">

    <div id="__next">
        <div id="main-wrapper" class="jobs">
            <div class="header landing px-15">
                <header class="header header-gauche">
                    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">
                        <div class="container">
                            <a class="navbar-brand brand-gauche" href="#">
                                <img src="images/logo.png" height="" />
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ms-auto ">
                                    <li class="nav-item">
                                        <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-2" href="/jobs">Jobs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-2" href="/company">Company</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-2" href="/employe">Employee</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pages
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Page1</a></li>
                                            <li><a class="dropdown-item" href="#">Pages2</a></li>
                                            <li><a class="dropdown-item" href="#">Page3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="signin-btn"><a class="btn btn-sign" href="/signip">Signin</a></div>
                        </div>
                    </nav>
                </header>
            </div>

            <div class="d-none"></div>

            <div class="content-body" style="min-height: 646px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="job-available-banner">
                                <h2>22 Jobs Available Now</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni,
                                    atque delectus molestias quis?</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <div class="quick-search">
                                <div class="intro-form">
                                    <div class="d-flex">
                                        <input class="form-control me-10" type="text" placeholder="Search" value=""><button class="btn btn-primary px-20">Search</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between sear">
                                    <div class="populat-tag">
                                        <strong class="fs-14">Kewword: </strong>
                                        <small>software,</small>
                                        <small> Developer,</small>
                                        <small> Web,</small>
                                    </div>
                                    <span class="advance-search-link">Advance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-20 mb-20"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="show-view">
                                <div class="show-select"><select class="form-select">
                                        <option value="8">8</option>
                                        <option value="5">5</option>
                                    </select></div>
                                <div class="sort-view"><select class="form-select">
                                        <option value="">Defaults</option>
                                        <option value="featured">Featured</option>
                                        <option value="lowToHigh">Low to High</option>
                                        <option value="highToLow">High to Low</option>
                                    </select>
                                    <div class="view-btn"><span class="active"><i class="bi bi-grid"></i></span><span class=""><i class="bi bi-view-list"></i></span></div>
                                </div>
                            </div>
                            <div class="list-grid-view">
                                <div class="active">
                                    <div class="row">
                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6"><a href="/#">
                                                <div class="card job-grid c-pointer">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start justify-content-between">
                                                            <img class="company-logo" src="images/17.png" alt="Card image cap" width="50">
                                                        </div>
                                                        <div class="job-title"><strong>tiktok</strong>
                                                            <h4>iOS Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                        </div>
                                                        <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                            repellendus pariatur.</div>
                                                        <div class="short-tag">
                                                            <span>hybrid</span><span>fulltime</span><span>entry</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="post-time"><i class="bi bi-clock"></i> 7 days
                                                                ago</div>
                                                            <div class="salary">$85k <small>/ Yearly</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6"><a href="https://rekruter.imsaifun.com/jobs/phyton-developer">
                                                <div class="card job-grid c-pointer">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start justify-content-between">
                                                            <img class="company-logo" src="images/18.png" alt="Card image cap" width="50">
                                                        </div>
                                                        <div class="job-title"><strong>twitter</strong>
                                                            <h4>Phyton Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                        </div>
                                                        <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                            repellendus pariatur.</div>
                                                        <div class="short-tag">
                                                            <span>onsite</span><span>contract</span><span>associate</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                                ago</div>
                                                            <div class="salary">$90k <small>/ Yearly</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6"><a href="/#">
                                                <div class="card job-grid c-pointer">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start justify-content-between">
                                                            <img class="company-logo" src="images/19.png" alt="Card image cap" width="50">
                                                        </div>
                                                        <div class="job-title"><strong>uber</strong>
                                                            <h4>Android Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                        </div>
                                                        <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                            repellendus pariatur.</div>
                                                        <div class="short-tag">
                                                            <span>remote</span><span>fulltime</span><span>mid</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                                ago</div>
                                                            <div class="salary">$95k <small>/ Yearly</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6"><a href="/#">
                                                <div class="card job-grid c-pointer">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start justify-content-between">
                                                            <img class="company-logo" src="images/20.png" alt="Card image cap" width="50">
                                                        </div>
                                                        <div class="job-title"><strong>vk</strong>
                                                            <h4>Associate Software Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan,
                                                                dhaka</span>
                                                        </div>
                                                        <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                            repellendus pariatur.</div>
                                                        <div class="short-tag">
                                                            <span>hybrid</span><span>contract</span><span>executive</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="post-time"><i class="bi bi-clock"></i> 7 days
                                                                ago</div>
                                                            <div class="salary">$100k <small>/ Yearly</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6"><a href="">
                                                <div class="card job-grid c-pointer">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start justify-content-between">
                                                            <img class="company-logo" src="images/21.png" alt="Card image cap" width="50">
                                                        </div>
                                                        <div class="job-title"><strong>whatsapp</strong>
                                                            <h4>Full Stack .NET Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                        </div>
                                                        <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                            repellendus pariatur.</div>
                                                        <div class="short-tag">
                                                            <span>onsite</span><span>fulltime</span><span>associate</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                                ago</div>
                                                            <div class="salary">$15k <small>/ Yearly</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6"><a href="">
                                                <div class="card job-grid c-pointer">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start justify-content-between">
                                                            <img class="company-logo" src="images/22.png" alt="Card image cap" width="50">
                                                        </div>
                                                        <div class="job-title"><strong>windows</strong>
                                                            <h4>Senior Web Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                        </div>
                                                        <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                            repellendus pariatur.</div>
                                                        <div class="short-tag">
                                                            <span>remote</span><span>contract</span><span>mid</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="post-time"><i class="bi bi-clock"></i> 7 days
                                                                ago</div>
                                                            <div class="salary">$15k <small>/ Yearly</small></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></div>
                                    </div>
                                </div>
                                <div class="d-none">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div><a href="/#">
                                                    <div class="card job-list c-pointer">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div class="d-flex align-items-start"><img class="company-logo" src="images/17.png" alt="Card image cap" width="60">
                                                                    <div class="job-title"><strong class="company-title">Tiktok inc </strong>
                                                                        <h4>iOS Developer </h4>
                                                                    </div>
                                                                </div><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                            </div>
                                                            <div class="job-desc mt-15">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Recusandae architecto
                                                                eveniet, dolor quo repellendus pariatur.</div>
                                                            <div class="short-tag">
                                                                <span>hybrid</span><span>fulltime</span><span>entry</span>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="post-time"><i class="bi bi-clock"></i> 7
                                                                    days ago</div>
                                                                <div class="salary">$85k <small>/ Yearly</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div><a href="">
                                                    <div class="card job-list c-pointer">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div class="d-flex align-items-start"><img class="company-logo" src="images/18.png" alt="Card image cap" width="60">
                                                                    <div class="job-title"><strong class="company-title">Twitter inc </strong>
                                                                        <h4>Phyton Developer </h4>
                                                                    </div>
                                                                </div><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                            </div>
                                                            <div class="job-desc mt-15">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Recusandae architecto
                                                                eveniet, dolor quo repellendus pariatur.</div>
                                                            <div class="short-tag">
                                                                <span>onsite</span><span>contract</span><span>associate</span>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="post-time"><i class="bi bi-clock"></i> 1
                                                                    days ago</div>
                                                                <div class="salary">$90k <small>/ Yearly</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div><a href="">
                                                    <div class="card job-list c-pointer">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div class="d-flex align-items-start"><img class="company-logo" src="images/19.png" alt="Card image cap" width="60">
                                                                    <div class="job-title"><strong class="company-title">Uber inc </strong>
                                                                        <h4>Android Developer </h4>
                                                                    </div>
                                                                </div><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                            </div>
                                                            <div class="job-desc mt-15">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Recusandae architecto
                                                                eveniet, dolor quo repellendus pariatur.</div>
                                                            <div class="short-tag">
                                                                <span>remote</span><span>fulltime</span><span>mid</span>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="post-time"><i class="bi bi-clock"></i> 1
                                                                    days ago</div>
                                                                <div class="salary">$95k <small>/ Yearly</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div><a href="">
                                                    <div class="card job-list c-pointer">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div class="d-flex align-items-start"><img class="company-logo" src="images/20.png" alt="Card image cap" width="60">
                                                                    <div class="job-title"><strong class="company-title">VK inc </strong>
                                                                        <h4>Associate Software Engineer </h4>
                                                                    </div>
                                                                </div><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                            </div>
                                                            <div class="job-desc mt-15">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Recusandae architecto
                                                                eveniet, dolor quo repellendus pariatur.</div>
                                                            <div class="short-tag">
                                                                <span>hybrid</span><span>contract</span><span>executive</span>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="post-time"><i class="bi bi-clock"></i> 7
                                                                    days ago</div>
                                                                <div class="salary">$100k <small>/ Yearly</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div><a href="">
                                                    <div class="card job-list c-pointer">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div class="d-flex align-items-start"><img class="company-logo" src="images/21.png" alt="Card image cap" width="60">
                                                                    <div class="job-title"><strong class="company-title">Whatsapp inc </strong>
                                                                        <h4>Full Stack .NET Developer </h4>
                                                                    </div>
                                                                </div><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                            </div>
                                                            <div class="job-desc mt-15">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Recusandae architecto
                                                                eveniet, dolor quo repellendus pariatur.</div>
                                                            <div class="short-tag">
                                                                <span>onsite</span><span>fulltime</span><span>associate</span>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="post-time"><i class="bi bi-clock"></i> 1
                                                                    days ago</div>
                                                                <div class="salary">$15k <small>/ Yearly</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div><a href="">
                                                    <div class="card job-list c-pointer">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-start justify-content-between">
                                                                <div class="d-flex align-items-start"><img class="company-logo" src="images/22.png" alt="Card image cap" width="60">
                                                                    <div class="job-title"><strong class="company-title">Windows inc </strong>
                                                                        <h4>Senior Web Developer </h4>
                                                                    </div>
                                                                </div><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                            </div>
                                                            <div class="job-desc mt-15">Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Recusandae architecto
                                                                eveniet, dolor quo repellendus pariatur.</div>
                                                            <div class="short-tag">
                                                                <span>remote</span><span>contract</span><span>mid</span>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="post-time"><i class="bi bi-clock"></i> 7
                                                                    days ago</div>
                                                                <div class="salary">$15k <small>/ Yearly</small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-show">
                                <div class="page-count text-muted"><span>3 of 3 pages</span></div>
                                <div class="pagination-content">
                                    <button class="prev-btn">
                                        <i class="bi bi-chevron-left"></i>
                                    </button>
                                    <li class="page-li">1</li>
                                    <li class="page-li">2</li>
                                    <li class="page-li active">3</li>
                                    <button class="next-btn" disabled="">
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-sidebar">
                        <div class="filter-header">
                            <h4 class="filter-title">Filter By</h4>
                            <div class="reset-btn">Reset</div>
                        </div>
                        <div class="scrollbar-container ps ps--active-y">
                            <div class="filter-widget">
                                <h5>Country</h5><select class="form-select">
                                    <option value="">All</option>
                                    <option value="australia">Australia</option>
                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="canada">Canada</option>
                                    <option value="england">England</option>
                                    <option value="germany">Germany</option>
                                    <option value="india">India</option>
                                    <option value="usa">United States</option>
                                </select>
                            </div>
                            <div class="filter-widget">
                                <h5>Industry</h5>
                                <ul class="industry-list">
                                    <li class="active">All<span class="job-count">09</span></li>
                                    <li class="">software<span class="job-count">09</span></li>
                                    <li class="">finance<span class="job-count">09</span></li>
                                    <li class="">recruting<span class="job-count">09</span></li>
                                    <li class="">management<span class="job-count">09</span></li>
                                    <li class="">advertising<span class="job-count">09</span></li>
                                </ul>
                            </div>
                            <div class="filter-widget">
                                <h5>Popular Keyword</h5>
                                <div class="popular-keyword">
                                    <li class="active">software<span class="job-count">09</span></li>
                                    <li class="">developer<span class="job-count">09</span></li>
                                    <li class="">web<span class="job-count">09</span></li>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h5>Position</h5>
                                <div class="form-check"><input type="checkbox" id="senior" class="form-check-input" value="senior"><label for="senior" class="form-check-label">Senior</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="junior" class="form-check-input" value="junior"><label for="junior" class="form-check-label">Junior</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="fresher" class="form-check-input" value="fresher"><label for="fresher" class="form-check-label">Fresher</label>
                                    <div class="job-count">09</div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h5>Experience Level</h5>
                                <div class="form-check"><input type="checkbox" id="internship" class="form-check-input" value="internship"><label for="internship" class="form-check-label">Internship</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="entry" class="form-check-input" value="entry"><label for="entry" class="form-check-label">Entry Level</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="associate" class="form-check-input" value="associate"><label for="associate" class="form-check-label">Associate</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="mid" class="form-check-input" value="mid"><label for="mid" class="form-check-label">Mid Level</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="director" class="form-check-input" value="director"><label for="director" class="form-check-label">Director</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="executive" class="form-check-input" value="executive"><label for="executive" class="form-check-label">Executive</label>
                                    <div class="job-count">09</div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h5>Onsite/Remote</h5>
                                <div class="form-check"><input type="checkbox" id="onsite" class="form-check-input" value="onsite"><label for="onsite" class="form-check-label">On-site</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="remote" class="form-check-input" value="remote"><label for="remote" class="form-check-label">Remote</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="hybrid" class="form-check-input" value="hybrid"><label for="hybrid" class="form-check-label">Hybrid</label>
                                    <div class="job-count">09</div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h5>Job Posted</h5>
                                <ul>
                                    <li>All<span class="job-count">09</span></li>
                                    <li>1 day<span class="job-count">09</span></li>
                                    <li>7 day<span class="job-count">09</span></li>
                                    <li>30 day<span class="job-count">09</span></li>
                                </ul>
                            </div>
                            <div class="filter-widget">
                                <h5>Job Type</h5>
                                <div class="form-check"><input type="checkbox" id="fulltime" class="form-check-input" value="fulltime"><label for="fulltime" class="form-check-label">Full
                                        Time</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="parttime" class="form-check-input" value="parttime"><label for="parttime" class="form-check-label">Part
                                        Time</label>
                                    <div class="job-count">09</div>
                                </div>
                                <div class="form-check"><input type="checkbox" id="contract" class="form-check-input" value="contract"><label for="contract" class="form-check-label">Contract</label>
                                    <div class="job-count">09</div>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h5>Salary Range</h5>
                                <ul class="categor-list">
                                    <li class="cat-item text-muted">All<span class="job-count">09</span></li>
                                    <li class="cat-item text-muted">$0k - $20k<span class="job-count">09</span></li>
                                    <li class="cat-item text-muted">$20k - $40k<span class="job-count">09</span></li>
                                    <li class="cat-item text-muted">$40k - $60k<span class="job-count">09</span></li>
                                    <li class="cat-item text-muted">$60k - $80k<span class="job-count">09</span></li>
                                    <li class="cat-item text-muted">$80k - $100k<span class="job-count">09</span></li>
                                    <li class="cat-item text-muted">$100k - $200k<span class="job-count">09</span></li>
                                </ul>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px; height: 501px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 126px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="Bootstrap/bootstrap.min.js"></script>
    <script src="wow/wow.min.js"></script>
    <!-- fin script -->
</body>

</html>