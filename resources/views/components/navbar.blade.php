<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-lg @@classList">
        <div class="container px-3">
            <a class="navbar-brand" href="@@webRoot/index.html"><img src="{{ asset('images/logo/logo.svg') }}" alt /></a>
            <button class="navbar-toggler offcanvas-nav-btn" type="button">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                <div class="offcanvas-header">
                    <a href="@@webRoot/index.html" class="text-inverse"><img src="{{ asset('images/logo/logo.svg') }}" alt /></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 align-items-center">
                    <ul class="navbar-nav mx-auto align-items-lg-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="@@webRoot/index.html">Landing Overview</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/landing-sass-v1.html">Saas v.1</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/landing-sass-v2.html">Sass v.2</a></li>
                                <li>
                                    <a class="dropdown-item" href="@@webRoot/landing-it-company.html">
                                        IT Company
                                        <span class="badge text-bg-success ms-2">New</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="@@webRoot/landing-accounting.html">Accounting</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/landing-finance.html">Finance</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/landing-jamstack-agancy.html">Jamstack Agency</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/landing-conference.html">Conference</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/landing-personal.html">Personal</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu dropdown-menu-xxl">
                                <div class="row row-cols-lg-4 row-cols-1 g-0">
                                    <div class="col">
                                        <div>
                                            <div>
                                                <div class="dropdown-header">Blog</div>
                                                <a class="dropdown-item" href="@@webRoot/blog-list-view.html">List View</a>
                                                <a class="dropdown-item" href="@@webRoot/blog.html">Grid View</a>
                                                <a class="dropdown-item" href="@@webRoot/blog-grid-thumbnail.html">Grid View v.2</a>
                                                <a class="dropdown-item" href="@@webRoot/blog-sidebar.html">Sidebar</a>
                                                <a class="dropdown-item" href="@@webRoot/blog-category.html">Category</a>
                                                <a class="dropdown-item" href="@@webRoot/blog-single.html">Single Post</a>
                                            </div>
                                            <div class="mt-3">
                                                <div class="dropdown-header">About</div>
                                                <a class="dropdown-item" href="@@webRoot/about.html">About v.1</a>
                                                <a class="dropdown-item" href="@@webRoot/about-v2.html">About v.2</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mt-3 mt-lg-0">
                                            <div>
                                                <div class="dropdown-header">Service</div>
                                                <a class="dropdown-item" href="@@webRoot/service-v1.html">Service v.1</a>
                                                <a class="dropdown-item" href="@@webRoot/service-v2.html">Service v.2</a>
                                                <a class="dropdown-item" href="@@webRoot/service-v3.html">Service v.3</a>
                                            </div>
                                            <div class="mt-3">
                                                <div class="dropdown-header">Events</div>

                                                <a class="dropdown-item" href="@@webRoot/events.html">List</a>
                                                <a class="dropdown-item" href="@@webRoot/event-single.html">Single</a>
                                            </div>
                                            <div class="mt-3">
                                                <div class="dropdown-header">Contact</div>

                                                <a class="dropdown-item" href="@@webRoot/contact-1.html">Contact Us</a>
                                                <a class="dropdown-item" href="@@webRoot/contact-2.html">Contact Sales</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mt-3 mt-lg-0">
                                            <div>
                                                <div class="dropdown-header">Portfolio</div>

                                                <a class="dropdown-item" href="@@webRoot/portfolio.html">Grid View</a>

                                                <a class="dropdown-item" href="@@webRoot/portfolio-single.html">Single View</a>
                                            </div>
                                            <div class="mt-3">
                                                <div class="dropdown-header">Pricing</div>
                                                <a class="dropdown-item" href="@@webRoot/pricing-v1.html">Pricing v.1</a>
                                                <a class="dropdown-item" href="@@webRoot/pricing-v2.html">Pricing v.2</a>
                                            </div>
                                            <div class="mt-3">
                                                <div class="dropdown-header">Career</div>
                                                <a class="dropdown-item" href="@@webRoot/career.html">Career</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mt-3 mt-lg-0">
                                            <div>
                                                <div class="dropdown-header">Integration</div>
                                                <a class="dropdown-item" href="@@webRoot/integration.html">Grid View</a>
                                                <a class="dropdown-item" href="@@webRoot/integration-single.html">Single</a>
                                            </div>
                                            <div class="mt-3">
                                                <div>
                                                    <div class="dropdown-header">Case Study</div>
                                                    <a class="dropdown-item" href="@@webRoot/case-study.html">Grid View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-fullwidth">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blocks</a>
                            <div class="dropdown-menu p-4">
                                <div class="row row-cols-xl-6 row-cols-lg-5 row-cols-1 gx-lg-4">
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/hero.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/hero-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Hero</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/navbar.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/header-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Navbar</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/about.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/about-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>About</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/blog.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/blog-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Blog</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/carousel.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/carousel-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Carousel</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/case-study.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/case-study-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Case Study</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/cta.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/call-to-action-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Call to Action</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/clients.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/clients-logo-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Client</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/contact.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/contact-section-example.svg') }}" alt="" />
                                            </div>
                                            <span>Contact</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/form.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="{{ asset('images/block/form-snippets-bootstrap.svg') }}" alt="" /></div>
                                            <span>Form</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/faq.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="{{ asset('images/block/faq-section-example.svg') }}" alt="" /></div>
                                            <span>FAQ</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/team.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2"><img class="w-100 rounded-2" src="{{ asset('images/block/team-snippets-bootstrap.svg') }}" alt="" /></div>
                                            <span>Team</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/footer.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/footer-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Footer</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/features.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/feature-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Features</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/integration.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/integration-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Integration</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/industry.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/industry-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Industry</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/location.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/location-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Location</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/portfolio.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/portfolio-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Portfolio</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/process.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/process-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Process</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/pricing.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2 bg-gray-200">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/pricing-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Pricing</span>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/facts.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/stats-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Stats</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-item d-block px-0 mb-lg-3" href="@@webRoot/blocks/testimonails.html">
                                            <div class="rounded d-none d-lg-block mb-lg-2">
                                                <img class="w-100 rounded-2" src="{{ asset('images/block/testimonial-snippets-bootstrap.svg') }}" alt="" />
                                            </div>
                                            <span>Testimonials</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Accounts</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="@@webRoot/account-profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/account-security.html">Security</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/account-billing.html">Billing</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/account-team.html">Team</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/account-notification.html">Notifications</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/account-app-integration.html">Integration</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/account-device-session.html">Session</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/account-social-links.html">Social</a></li>
                                <li><a class="dropdown-item" href="@@webRoot/account-appearance.html">Appearance</a></li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">Simple</li>

                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/signin.html">Sign In</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/signup.html">Sign Up</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/forget-password.html">Forget Password</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/reset-password.html">Reset Password</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/otp-varification.html">OTP Varification</a>
                                        </li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li class="dropdown-header">Side Cover</li>

                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/signin-v2.html">Sign In</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/signup-v2.html">Sign Up</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/forget-password-v2.html">Forget Password</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/reset-password-v2.html">Reset Password</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/otp-varification-v2.html">OTP Varification</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Utility</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/404-error.html">404 Error</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="@@webRoot/changelog.html">Changelog</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                            <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item mb-3 text-body" href="@@webRoot/docs/index.html">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-file-text fs-4 text-primary"></i>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">Documentations</h5>
                                            <p class="mb-0 fs-6">Browse the all documentation</p>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item text-body" href="@@webRoot/docs/changelog.html">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-clipboard fs-4 text-primary"></i>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">
                                                Changelog
                                                <span class="text-primary ms-1" id="changelog"></span>
                                            </h5>
                                            <p class="mb-0 fs-6">See what's new</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 mt-lg-0 d-flex align-items-center">
                        <a href="@@webRoot/signin.html" class="btn btn-light mx-2">Login</a>
                        <a href="@@webRoot/signup.html" class="btn btn-primary">Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
