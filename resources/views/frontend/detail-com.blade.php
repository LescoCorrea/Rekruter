@extends('layouts.layout')
@section('content')

<div class="section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cover-photo">
                    <div class="cover-photo-img cover-photo-img1"></div>
                </div>
                <div class="company-overview">
                    <div class="company-info">
                        <div class="company-logo"><img src="images/1.png" alt=""></div>
                        <h3 class="mb-0">Car Toys</h3>
                        <p class="mb-10 text-muted">Our Mission to make working life simple</p><span class="location"><i class="bi bi-geo-alt"></i> gulshan, dhaka</span>
                    </div>
                </div>
                <div class="tab-menu">
                    <ul>
                        <li class="active"><i class="bi bi-speedometer"></i> About</li>
                        <li class=""><i class="bi bi-at"></i> Jobs</li>
                        <li class=""><i class="bi bi-people"></i> People</li>
                    </ul>
                </div>
                <div class="mb-50"></div>
            </div>
        </div>
        <div class="row justify-content-between flex-sm-row-reverse">
            <div class="col-lg-12 col-xl-3">
                <div class="card company-short-view">
                    <div class="card-body">
                        <div class="posted-job">
                            <h4>Car Toys</h4><span>Bangladesh</span>
                        </div>
                        <ul class="company-short-list">
                            <li>
                                <div class="list-icon"><i class="bi bi-person-workspace"></i></div>
                                <div class="list-content">
                                    <h6>30</h6><span>Job Posted</span>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"><i class="bi bi-bank"></i></div>
                                <div class="list-content">
                                    <h6>2010</h6><span>Establish</span>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"><i class="bi bi-people"></i></div>
                                <div class="list-content">
                                    <h6>5 - 10</h6><span>Size</span>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"><i class="bi bi-envelope"></i></div>
                                <div class="list-content">
                                    <h6 class="text-lowercase">example@email.com</h6><span>Email</span>
                                </div>
                            </li>
                            <li>
                                <div class="list-icon"><i class="bi bi-globe"></i></div>
                                <div class="list-content">
                                    <h6><a class="text-lowercase" href="https://apple.com/">apple.com</a>
                                    </h6><span>Website</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-9">
                <div class="company-details-content">
                    <div class="active">
                        <div class="job-about">
                            <h3 class="mb-30">About the job</h3>
                            <p>The Tech Studio Design team has a vision to establish a trusted platform that
                                enables productive and healthy enterprises in a world of digital and remote
                                everything, constantly changing work patterns and norms, and the need for
                                organizational resiliency.</p>
                            <p>The ideal candidate will have strong creative skills and a portfolio of work
                                which demonstrates their passion for illustrative design and typography.
                                This candidate will have experiences in working with numerous different
                                design platforms such as digital and print forms.</p>
                        </div>
                        <div class="company-job-list my-50">
                            <h3 class="mb-30">Latest Job</h3>
                            <ul>
                                <li class="job-list">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex align-items-start"><img class="company-logo" src="images/1.png" alt="Card image cap" width="50">
                                            <div class="job-title">
                                                <h4>Software Engineer </h4>
                                                <p class="company-title">Apple inc </p>
                                            </div>
                                        </div>
                                        <div class="salary">$15k <small>/Yearly</small></div>
                                    </div>
                                    <div class="short-tag">
                                        <span>onsite</span><span>fulltime</span><span>internship</span>
                                    </div>
                                </li>
                                <li class="job-list">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex align-items-start"><img class="company-logo" src="images/2.png" alt="Card image cap" width="50">
                                            <div class="job-title">
                                                <h4>Software Engineer </h4>
                                                <p class="company-title">Apple inc </p>
                                            </div>
                                        </div>
                                        <div class="salary">$15k <small>/Yearly</small></div>
                                    </div>
                                    <div class="short-tag">
                                        <span>onsite</span><span>fulltime</span><span>internship</span>
                                    </div>
                                </li>
                                <li class="job-list">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex align-items-start"><img class="company-logo" src="images/3.png" alt="Card image cap" width="50">
                                            <div class="job-title">
                                                <h4>Software Engineer </h4>
                                                <p class="company-title">Apple inc </p>
                                            </div>
                                        </div>
                                        <div class="salary">$15k <small>/Yearly</small></div>
                                    </div>
                                    <div class="short-tag">
                                        <span>onsite</span><span>fulltime</span><span>internship</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="team-member-list my-50">
                            <h3 class="mb-30">Team member</h3>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/1.jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/2(1).jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/3(1).jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none">
                        <div class="company-job-list">
                            <ul>
                                <li class="job-list">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex align-items-start"><img class="company-logo" src="./1.png" alt="Card image cap" width="50">
                                            <div class="job-title">
                                                <h4>Software Engineer </h4>
                                                <p class="company-title">Apple inc </p>
                                            </div>
                                        </div>
                                        <div class="salary">$15k <small>/Yearly</small></div>
                                    </div>
                                    <div class="short-tag">
                                        <span>onsite</span><span>fulltime</span><span>internship</span>
                                    </div>
                                </li>
                                <li class="job-list">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex align-items-start"><img class="company-logo" src="./2.png" alt="Card image cap" width="50">
                                            <div class="job-title">
                                                <h4>Software Engineer </h4>
                                                <p class="company-title">Apple inc </p>
                                            </div>
                                        </div>
                                        <div class="salary">$15k <small>/Yearly</small></div>
                                    </div>
                                    <div class="short-tag">
                                        <span>onsite</span><span>fulltime</span><span>internship</span>
                                    </div>
                                </li>
                                <li class="job-list">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex align-items-start"><img class="company-logo" src="./3.png" alt="Card image cap" width="50">
                                            <div class="job-title">
                                                <h4>Software Engineer </h4>
                                                <p class="company-title">Apple inc </p>
                                            </div>
                                        </div>
                                        <div class="salary">$15k <small>/Yearly</small></div>
                                    </div>
                                    <div class="short-tag">
                                        <span>onsite</span><span>fulltime</span><span>internship</span>
                                    </div>
                                </li>
                                <li class="job-list">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex align-items-start"><img class="company-logo" src="./4.png" alt="Card image cap" width="50">
                                            <div class="job-title">
                                                <h4>Software Engineer </h4>
                                                <p class="company-title">Apple inc </p>
                                            </div>
                                        </div>
                                        <div class="salary">$15k <small>/Yearly</small></div>
                                    </div>
                                    <div class="short-tag">
                                        <span>onsite</span><span>fulltime</span><span>internship</span>
                                    </div>
                                </li>
                                <li class="job-list">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex align-items-start"><img class="company-logo" src="images/5.png" alt="Card image cap" width="50">
                                            <div class="job-title">
                                                <h4>Software Engineer </h4>
                                                <p class="company-title">Apple inc </p>
                                            </div>
                                        </div>
                                        <div class="salary">$15k <small>/Yearly</small></div>
                                    </div>
                                    <div class="short-tag">
                                        <span>onsite</span><span>fulltime</span><span>internship</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none">
                        <div class="team-member-list">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/1.jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/2(1).jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/3(1).jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/4.jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/5.jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="team-grid card">
                                        <div class="card-body"><img class="default-img" src="images/6.jpg" alt="">
                                            <h4>Carols Daughter</h4>
                                            <p>Front end Developer</p>
                                            <div class="rate-reviews"><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span><i class="bi bi-star-fill"></i></span><span class="postedTime-count">(5.0)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection