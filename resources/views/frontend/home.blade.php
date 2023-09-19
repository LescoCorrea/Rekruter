@extends('layouts.layout')
@section('content')


<!--- **** Fin Header **** --->

<!--- **** Début Banner **** -->
<div class="intro-search section-padding">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-xl-8 col-12">
                <div class="intro-content">
                    <h1>The Easiest Way to Get Your <span class="text-home">New Job</span></h1>
                    <p>Each month, more than 3 million job seekers turn to website in their search for work,
                        making over 140,000 applications every single day</p>
                    <div class="intro-form">
                        <div class="row">
                            <div class="col"><label>Industry</label><select class="form-select" name="industry">
                                    <option value="">All</option>
                                    <option value="/#">software</option>
                                    <option value="/#">fish</option>
                                </select></div>
                            <div class="col rows-bane"><label>Location</label><select class="form-select" name="country">
                                    <option value="">All</option>
                                    <option value="/#">bangladesh</option>
                                    <option value="/#">india</option>
                                </select></div>
                            <div class=" rows-ban"><label>Keyword</label>
                                <div class="d-flex row-content">
                                    <input class="form-control me-30" type="text" placeholder="Search" value="">
                                    <button class="btn btn-sign">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="populat-tag"><span>Popular Searches : </span><a href="/#"> Designer,</a><a href="/#"> Developer,</a><a href="/#"> Web,</a><a href="/#"> IOS,</a><a href="/#"> PHP,</a><a href="/#"> Senior,</a><a href="/#"> Engineer</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- **** Fin Banner **** -->

<!-- Section Catégories -->
<section>
    <div class="by-category section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title">
                        <span>Populaires</span>
                        <h2>Catégories</h2>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-kanban"></i>
                                <h5 class="title-cat">Software <span> 55</span></h5>

                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-pip"></i>
                                <h5 class="title-cat">Finance <span> 35</span></h5>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-code-square"></i>
                                <h5 class="title-cat">Software
                                    <span>55</span>
                                </h5>

                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-cash-stack"></i>
                                <h5 class="title-cat">Recruting <span> 20</span></h5>

                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-briefcase"></i>
                                <h5 class="title-cat">Management <span> 15</span></h5>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-kanban"></i>
                                <h5 class="title-cat">Advertising <span> 10</span></h5>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-pip"></i>
                                <h5 class="title-cat">Finance
                                    <span>30</span>
                                </h5>

                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-pip"></i>
                                <h5 class="title-cat">Software <span> 55</span></h5>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="" class="by-category-content cats">
                                <i class="bi bi-pip"></i>
                                <h5 class="title-cat">Finance <span> 35</span></h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin Section -->

<!-- ======= Section Jobs ======= -->
<div class="recent-job section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="section-title"><span>Top</span>
                    <h2>Jobs of the day</h2>
                </div>
            </div>
        </div>
        <div class="row data-sec">
            <div class="col-xl-12">

                <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container nav-btn">
                        <ul class="nav tab-btn-group nav-pills d-inline-flex justify-content-left bg-primary-gradient rounded-full mb-5">
                            <li class="nav-item">
                                <button class="tab-btn active" data-bs-toggle="pill" href="#tab-1">Featured</button>
                            </li>
                            <li class="nav-item">
                                <button class=" tab-btn" data-bs-toggle="pill" href="#tab-2">Trending</button>
                            </li>
                            <li class="nav-item">
                                <button class=" browse-all" data-bs-toggle="pill" href="#tab-2">Browse All <i class="bi bi-arrow-right bis"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content text-start">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/software-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/1.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>airbnb</strong>
                                                    <h4>Software Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>onsite</span><span>fulltime</span><span>internship</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                        ago</div>
                                                    <div class="salary">$15k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/full-stack-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/2.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>apple</strong>
                                                    <h4>Full Stack Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>remote</span><span>parttime</span><span>entry</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 30 days
                                                        ago</div>
                                                    <div class="salary">$20k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/java-software-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/3.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>discord</strong>
                                                    <h4>Java Software Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>hybrid</span><span>fulltime</span><span>director</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                        ago</div>
                                                    <div class="salary">$15k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/frontend-developer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/4.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>dribbble</strong>
                                                    <h4>Frontend Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>remote</span><span>parttime</span><span>mid</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 7 days
                                                        ago</div>
                                                    <div class="salary">$25k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/react-native-web-developer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/12.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>react</strong>
                                                    <h4>React Native Web Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan,
                                                        dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>onsite</span><span>fulltime</span><span>associate</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 30 days
                                                        ago</div>
                                                    <div class="salary">$60k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/senior-system-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/14.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>shopify</strong>
                                                    <h4>Senior System Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
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
                                                    <div class="salary">$70k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade p-0">
                            <div class="row g-4">
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/software-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/2.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>Apple</strong>
                                                    <h4>Software Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>onsite</span><span>fulltime</span><span>internship</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                        ago</div>
                                                    <div class="salary">$15k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/full-stack-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/4.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>Dribble</strong>
                                                    <h4>Full Stack Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>remote</span><span>parttime</span><span>entry</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 30 days
                                                        ago</div>
                                                    <div class="salary">$20k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/java-software-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/3.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>discord</strong>
                                                    <h4>Java Software Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>hybrid</span><span>fulltime</span><span>director</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                        ago</div>
                                                    <div class="salary">$15k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/frontend-developer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/4.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>dribbble</strong>
                                                    <h4>Frontend Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>remote</span><span>parttime</span><span>mid</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 7 days
                                                        ago</div>
                                                    <div class="salary">$25k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/react-native-web-developer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/12.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>react</strong>
                                                    <h4>React Native Web Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan,
                                                        dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>onsite</span><span>fulltime</span><span>associate</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 30 days
                                                        ago</div>
                                                    <div class="salary">$60k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/senior-system-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/14.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>shopify</strong>
                                                    <h4>Senior System Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
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
                                                    <div class="salary">$70k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="recent-job-content">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="tab-btn-group">
                                <a class="tab-btn active" data-toggle="jobs-folio" data-target="featured">Featured</a>
                                <a class="tab-btn tabs" data-toggle="portfilter" data-target="trending">Trending</a>
                                <a class="browse-all" href="/jobs">Browse All<i class="bi bi-arrow-right bis"></i></a>
                            </div>
                        </div>
                        <div class="active mt-5">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/software-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/1.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>airbnb</strong>
                                                    <h4>Software Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>onsite</span><span>fulltime</span><span>internship</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                        ago</div>
                                                    <div class="salary">$15k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/full-stack-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/2.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>apple</strong>
                                                    <h4>Full Stack Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>remote</span><span>parttime</span><span>entry</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 30 days
                                                        ago</div>
                                                    <div class="salary">$20k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="featured">
                                    <a href="/jobs/java-software-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/3.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>discord</strong>
                                                    <h4>Java Software Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>hybrid</span><span>fulltime</span><span>director</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 1 days
                                                        ago</div>
                                                    <div class="salary">$15k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/frontend-developer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/4.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>dribbble</strong>
                                                    <h4>Frontend Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>remote</span><span>parttime</span><span>mid</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 7 days
                                                        ago</div>
                                                    <div class="salary">$25k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/react-native-web-developer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/12.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>react</strong>
                                                    <h4>React Native Web Developer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan,
                                                        dhaka</span>
                                                </div>
                                                <div class="job-desc">Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit. Recusandae architecto eveniet, dolor quo
                                                    repellendus pariatur.</div>
                                                <div class="short-tag">
                                                    <span>onsite</span><span>fulltime</span><span>associate</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="post-time"><i class="bi bi-clock"></i> 30 days
                                                        ago</div>
                                                    <div class="salary">$60k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6" data-tag="trending">
                                    <a href="/jobs/senior-system-engineer">
                                        <div class="card job-grid c-pointer">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <img class="company-logo" src="images/14.png" alt="Card image cap" width="50">
                                                </div>
                                                <div class="job-title"><strong>shopify</strong>
                                                    <h4>Senior System Engineer </h4><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
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
                                                    <div class="salary">$70k <small>/ Yearly</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-none">
                            <div class="row"></div>
                        </div>
                    </div>-->
            </div>
        </div>
    </div>
</div>
<!-- Fin Jobs-->

<!--- Section Companies  ---->

<section>
    <div class="by-category section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title"><span>Top</span>
                        <h2> Companies</h2>
                    </div>
                </div>
            </div>
            <div class="position-relative">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/6.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/5.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/4.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/3.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/6.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/5.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/4.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/6.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="company-slider" href="/#">
                                <div class="company-slider-content">
                                    <img src="images/4.png" alt="">
                                    <div>
                                        <h4>Car Toys</h4>
                                        <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                    </div>
                                </div>
                                <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <!--<div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item rounded p-4">
                            <div>
                                <a class="company-slider" href="/#">
                                    <div class="company-slider-content">
                                        <img src="images/6.png" alt="">
                                        <div>
                                            <h4>Car Toys</h4>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                    <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="testimonial-item rounded p-4">
                            <div>
                                <a class="company-slider" href="/#">
                                    <div class="company-slider-content">
                                        <img src="images/5.png" alt="">
                                        <div>
                                            <h4>Car Toys</h4>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                    <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="testimonial-item rounded p-4">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3">
                                <a class="company-slider" href="/#">
                                    <div class="company-slider-content">
                                        <img src="images/4.png" alt="">
                                        <div>
                                            <h4>Car Toys</h4>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                    <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="testimonial-item rounded p-4">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2">
                                <a class="company-slider" href="/#">
                                    <div class="company-slider-content">
                                        <img src="images/3.png" alt="">
                                        <div>
                                            <h4>Car Toys</h4>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                    <div class="location text-muted"><i class="bi bi-geo-alt"></i> gulshan, dhaka
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>-->

            </div>
        </div>
    </div>
</section>
<!--- Fin Section --->

<!-- Section Cities -->
<div class="top-cities section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="section-title mb-30"><span>Top</span>
                    <h2>Jobs by City</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="grid-content">
                            <div class="grid-bg grid-bg-1"></div>
                            <div class="place-name">Dubai</div>
                            <div class="place-listing">9 <small>Vacancy</small></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="grid-content">
                            <div class="grid-bg grid-bg-2"></div>
                            <div class="place-name">New York</div>
                            <div class="place-listing">7 <small>Vacancy</small></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="grid-content">
                            <div class="grid-bg grid-bg-3"></div>
                            <div class="place-name">Singapore</div>
                            <div class="place-listing">5 <small>Vacancy</small></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="grid-content">
                            <div class="grid-bg grid-bg-4"></div>
                            <div class="place-name">Copenhagen</div>
                            <div class="place-listing">7 <small>Vacancy</small></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="grid-content">
                            <div class="grid-bg grid-bg-5"></div>
                            <div class="place-name">London</div>
                            <div class="place-listing">5 <small>Vacancy</small></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="grid-content">
                            <div class="grid-bg grid-bg-6"></div>
                            <div class="place-name">Amsterdam</div>
                            <div class="place-listing">9 <small>Vacancy</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Cities -->

<!-- Début Section Online --->
<div class="blog section-padding">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="section-title mb-40"><span>Featured</span>
                    <h2>Online journal </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6"><a class="blog-post"><img class="img-fluid" src="images/1(1).jpg" alt="">
                    <div class="blog-content">
                        <div class="blog-cat">News</div>
                        <h4 class="blog-title"> People Will Wait For You</h4>
                        <div class="blog-meta"><img src="images/1.jpg" alt="">
                            <div class="blog-meta-content">
                                <h5>John Abraham</h5><span class="blog-date"><i class="bi bi-calendar-date"></i>October 22, 2022</span>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="col-xl-3 col-md-6"><a class="blog-post"><img class="img-fluid" src="images/2.jpg" alt="">
                    <div class="blog-content">
                        <div class="blog-cat">News</div>
                        <h4 class="blog-title"> People Will Wait For You</h4>
                        <div class="blog-meta"><img src="images/2(1).jpg" alt="">
                            <div class="blog-meta-content">
                                <h5>John Abraham</h5><span class="blog-date"><i class="bi bi-calendar-date"></i>October 22, 2022</span>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="col-xl-3 col-md-6"><a class="blog-post"><img class="img-fluid" src="images/3.jpg" alt="">
                    <div class="blog-content">
                        <div class="blog-cat">News</div>
                        <h4 class="blog-title"> People Will Wait For You</h4>
                        <div class="blog-meta"><img src="images/3(1).jpg" alt="">
                            <div class="blog-meta-content">
                                <h5>John Abraham</h5><span class="blog-date"><i class="bi bi-calendar-date"></i>October 22, 2022</span>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="col-xl-3 col-md-6"><a class="blog-post"><img class="img-fluid" src="images/3.jpg" alt="">
                    <div class="blog-content">
                        <div class="blog-cat">News</div>
                        <h4 class="blog-title"> People Will Wait For You</h4>
                        <div class="blog-meta"><img src="images/3(1).jpg" alt="">
                            <div class="blog-meta-content">
                                <h5>John Abraham</h5><span class="blog-date"><i class="bi bi-calendar-date"></i>October 22, 2022</span>
                            </div>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>
</div>
<!-- Fin Section Online -->

<!-- Début section Apply -->
<div class="cta section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-content">
                    <h4>Are you ready for apply</h4><a class="apply-btn" href="/#">Apply</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin section Apply -->

<!-- Section Bottom -->
<div class="bottom section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-7 col-sm-8">
                <div class="bottom-logo"><img class="pb-15" src="images/logow.png" alt="">
                    <p>Rekruter is a unique and beautiful collection of UI elements that are all flexible
                        and modular. A complete and customizable solution to building the website of your
                        dreams.</p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-5 col-sm-4 col-6">
                <div class="bottom-widget">
                    <h4 class="widget-title">About us</h4>
                    <ul>
                        <li><a href="/#">Home</a></li>
                        <li><a href="/#">About</a></li>
                        <li><a href="/#">Jobs</a></li>
                        <li><a href="#/">Job Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                <div class="bottom-widget">
                    <h4 class="widget-title">Company</h4>
                    <ul>
                        <li><a href="/pricing">Pricing</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/company">Company</a></li>
                        <li><a href="/">Company Details</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8">
                <div class="bottom-widget">
                    <h4 class="widget-title">Employee</h4>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <ul>
                                <li><a href="/employee">Employee</a></li>
                                <li><a href="/employee/1">Employee details</a>
                                </li>
                                <li><a href="/404">Error</a></li>
                                <li><a href="/">Activity</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <ul>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/blog/1">Blog details</a></li>
                                <li><a href="/signin">Signin</a></li>
                                <li><a href="/signup">Signup</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Bottom --->

@endsection