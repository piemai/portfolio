<?php

require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MyPortFolio - Errol Soriano</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Errol Soriano</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Gamer, Student, Things Explorer.</h2>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">About Me!</h2>
                        <p class="text-white-50">
                        I am a passionate and dedicated individual with a strong interest in web development and programming. I enjoy exploring new challenges, learning continuously, and applying my skills to create innovative solutions. My goal is to contribute meaningfully to improve user experiences, building sustainable systems, while growing personally and professionally along the way.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="me.png" alt="..." />
            </div>
        </section>
        <!-- Skills-->
        <section class="skills-section bg-light" id="skills">
            <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="html-css-1000x570.webp" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>HTML/CSS</h4>
                            <p class="text-black-50 mb-0">
                            I have solid skills in HTML and CSS, capable of building structured, responsive webpages using semantic HTML. I am proficient in styling elements with CSS, creating layouts with Flexbox and Grid, and ensuring cross-browser compatibility. Additionally, I focus on creating visually appealing designs while maintaining clean, readable code.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="js.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 skills">
                            <div class="d-flex h-100">
                                <div class="skills-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">JAVASCRIPT</h4>
                                    <p class="mb-0 text-white-50">
                                    I have basic JavaScript skills, including the ability to work with variables, functions, loops, and conditionals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="PHP.png" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 skills">
                            <div class="d-flex h-100">
                                <div class="skills-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">PHP</h4>
                                    <p class="mb-0 text-white-50">I have basic PHP skills, including working with variables, functions, arrays, loops, conditionals, and form handling. I can create simple scripts for user authentication, input validation, and connecting to a MySQL database. I also know how to manage sessions and cookies for tracking user activity and maintain security features in web applications.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact--> 
        <section class="contact-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Additional Info!</h2>
                        
                        <!-- to get an API token!-->
                        <form class="form-contact" id="contactForm" data-sb-form-api-token="API_TOKEN">
            
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>

                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://github.com/">https://github.com/</a>
                                </div>
                            </div>

                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">18 Narra St. Taytay Rizal</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">johnerrolsoriano04@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+639 519940591</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.instagram.com/errolsxriano/"><i class="fab fa-instagram"></i></a>
                    <a class="mx-2" href="https://www.facebook.com/profile.php?id=100009025117428"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://github.com/piemai"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy;2024</div></footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
