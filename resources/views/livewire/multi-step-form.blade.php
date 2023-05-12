<div>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/new-animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new-owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/new-bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


    {{-- /////////////////////// --}}
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/style-wizard-new.css') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>



    <body background="{{ asset('img/back.png') }}">
        <div class="container-fluid p-0">
            <!-- Spinner Start -->
            {{-- <div id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div> --}}
            <!-- Spinner End -->

            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                    {{-- <img src="{{ asset('img/big-logo.png') }}" alt="" style="width: 60px;margin-right: 15px;"> --}}
                    <h1 class="m-0 text-muted">HomeHelp</h1>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        {{-- <a href="index.html" class="nav-item nav-link active">Home</a> --}}
                        <a href="#" class="nav-item nav-link">Help</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="job-list.html" class="dropdown-item">1</a>
                                <a href="job-detail.html" class="dropdown-item">2</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="category.html" class="dropdown-item">1</a>
                                <a href="testimonial.html" class="dropdown-item">2</a>
                                <a href="404.html" class="dropdown-item">3</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Messages</a>
                    </div>
                    {{-- <a href="{{ route('signup') }}" class="btn btn-primary rounded-0 py-4 px-lg-3 d-none d-lg-block"><i
                        class="fa fa-user me-3"></i>Sign Up</a> --}}
                    {{-- <a href="{{ route('signin') }}" class="btn btn-primary rounded-0 py-4 px-lg-3 d-none d-lg-block ">Sign
                    In<i class="fa fa-arrow-right ms-3"></i></a> --}}
                    <style>
                        li {
                            list-style-type: none;
                        }
                    </style>
                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ asset('img/profile.png') }}" alt="" style="width: 30px">
                                <span class="status online"></span>
                            </span>
                            {{-- <span>{{ Auth::user()->username}}</span> --}}
                            {{-- <span>username</span> --}}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item disabled" href="#">{{ Auth::user()->username }}</a>
                            <a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i>
                                Profile</a>
                            <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i>
                                Settings</a>


                            {{-- <a class="dropdown-item" href="login.html" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                data-feather="log-out" class="mr-1"></i> Logout</a> --}}

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit"> Logout</button>
                            </form>
                            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> --}}
                        </div>
                    </li>
                    <style>
                        .btn-upgrade {
                            width: 10%;
                            height: 50px;
                            /* min-width: 230px; */
                            /* padding: 10px 20px; */
                            background: transparent;
                            cursor: pointer;
                            background-color: #f49758;
                            color: #fff;
                            border: 2px solid #f49758;
                            padding: 5px;
                            border-radius: 6px;
                            box-sizing: border-box;
                            font-size: 11px;
                            font-weight: 600;
                            text-align: center;
                            text-decoration: none;
                            transition: background-color .3s, border-color .3s;
                            margin: 15px;
                            box-shadow: 0 2px 10px rgba(54, 54, 54, .2);
                        }
                    </style>
                    <button type="button" class="btn-upgrade">
                        Upgrade to Premium
                    </button>
                </div>
            </nav>
            <div class="container content-in-center">

                <style>
                    /* * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                    } */

                    /* body {
                        font-family: "Poppins", sans-serif;
                    } */

                    .step-wizard {
                        /* background-color: #21d4fd; */
                        /* background-image: linear-gradient(19deg, #21d4fd 0%, #b721ff 100%); */
                        /* height: 100vh; */
                        width: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .step-wizard-list {
                        background: #fff;
                        /* box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1); */
                        color: #333;
                        list-style-type: none;
                        border-radius: 10px;
                        display: flex;
                        padding: 20px 10px;
                        position: relative;
                        z-index: 10;
                    }

                    .step-wizard-item {
                        padding: 0 20px;
                        flex-basis: 0;
                        -webkit-box-flex: 1;
                        -ms-flex-positive: 1;
                        flex-grow: 1;
                        max-width: 100%;
                        display: flex;
                        flex-direction: column;
                        text-align: center;
                        min-width: 170px;
                        position: relative;
                    }

                    .step-wizard-item+.step-wizard-item:after {
                        content: "";
                        position: absolute;
                        left: 0;
                        top: 19px;
                        /* background: #21d4fd; */
                        background: #4070f4;
                        width: 100%;
                        height: 2px;
                        transform: translateX(-50%);
                        z-index: -10;
                    }

                    .progress-count {
                        height: 40px;
                        width: 40px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border-radius: 50%;
                        font-weight: 600;
                        margin: 0 auto;
                        position: relative;
                        z-index: 10;
                        color: transparent;
                    }

                    .progress-count:after {
                        content: "";
                        height: 40px;
                        width: 40px;
                        background: #4070f4;
                        /* background: #21d4fd; */
                        position: absolute;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        border-radius: 50%;
                        z-index: -10;
                    }

                    .progress-count:before {
                        content: "";
                        height: 10px;
                        width: 20px;
                        border-left: 3px solid #fff;
                        border-bottom: 3px solid #fff;
                        position: absolute;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -60%) rotate(-45deg);
                        transform-origin: center center;
                    }

                    .progress-label {
                        font-size: 14px;
                        font-weight: 600;
                        margin-top: 10px;
                    }

                    .current-item .progress-count:before,
                    .current-item~.step-wizard-item .progress-count:before {
                        display: none;
                    }

                    .current-item~.step-wizard-item .progress-count:after {
                        height: 10px;
                        width: 10px;
                    }

                    .current-item~.step-wizard-item .progress-label {
                        opacity: 0.5;
                    }

                    .current-item .progress-count:after {
                        background: #fff;
                        border: 2px solid #4070f4;
                    }

                    .current-item .progress-count {
                        color: #4070f4;
                    }
                </style>








                {{-- <header>Registration</header> --}}

                <form wire:submit.prevent="register">
                    <section class="step-wizard">
                        <ul class="step-wizard-list">
                            <li class="step-wizard-item">
                                <span class="progress-count">1</span>
                                <span class="progress-label">Billing Info</span>
                            </li>
                            <li class="step-wizard-item current-item">
                                <span class="progress-count">2</span>
                                <span class="progress-label">Payment Method</span>
                            </li>
                            <li class="step-wizard-item">
                                <span class="progress-count">3</span>
                                <span class="progress-label">Checkout</span>
                            </li>
                            <li class="step-wizard-item">
                                <span class="progress-count">4</span>
                                <span class="progress-label">Success</span>
                            </li>
                        </ul>
                    </section>
                    {{-- page 1 --}}
                    @if ($currentStep == 1)
                        <div class="step-one form first">
                            <div class="details personal">
                                <span class="title">My Family</span>

                                <div class="fields" style="width: 99%;">
                                    {{-- <div class="input-field">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Enter your name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Date of Birth</label>
                                        <input type="date" placeholder="Enter birth date" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Email</label>
                                        <input type="text" placeholder="Enter your email" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mobile Number</label>
                                        <input type="number" placeholder="Enter mobile number" required>
                                    </div> --}}

                                    <div class="input-field">
                                        <label>Under 3 years old</label>
                                        <select required>
                                            <option disabled selected>Select </option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3+</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <label>Between 3 and 6 years old</label>
                                        <select required>
                                            <option disabled selected>Select </option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3+</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <label>7 years old and up</label>
                                        <select required>
                                            <option disabled selected>Select </option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3+</option>
                                        </select>
                                    </div>

                                    {{-- <div class="input-field">
                                        <label>Occupation</label>
                                        <input type="text" placeholder="Enter your ccupation" required>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="details ID">
                                <span class="title">Type of Employment</span>
                                <style>
                                    .card-hover:hover {
                                        border: #4070f4;
                                        border-color: #4070f4;
                                        border-style: groove;
                                        border-width: 1px;
                                        transition: all 0.5s ease;
                                        /* text-decoration: none; */
                                    }

                                    .red-border :focus {
                                        border: #4070f4;
                                        border-color: #4070f4;
                                        border-style: groove;
                                        /* padding: 5px; */
                                        border-width: 2px;
                                        transition: all 0.2s ease;
                                    }

                                    .red-border :focus h5 {
                                        transition: all 0.3s ease;
                                        font-weight: 900;
                                        /* transform: rotate(1.0turn); */
                                        /* color: white; */
                                    }

                                    .red-border :focus p {
                                        transition: all 0.3s ease;
                                        font-weight: 500;
                                    }

                                    h1 {
                                        text-transform: uppercase;
                                        font-size: 40px;
                                        font-weight: 900;
                                        text-align: center;
                                        color: #4a4a4a;
                                        margin-bottom: 70px;
                                        margin: .67em 0;
                                    }

                                    .flexed {
                                        /* background-color: red; */
                                        width: 100%;
                                    }
                                </style>
                                <div class="flexed" style="display: flex; justify-content: center;">
                                    <a class="row d-flex justify-content-center ok" href="#">
                                        <div class="col-xl-0 col-sm-12 col-12 p-5">
                                            <div class="red-border">
                                                <div class="card card-hover"
                                                    style="width: 22rem;cursor: pointer;box-shadow: 0 2px 4px 0 rgba(0,0,0,.1);padding: 10px;"
                                                    tabindex="1">
                                                    <center>
                                                        <img class="card-img-top"
                                                            src="{{ asset('img/full-time-ic.png') }}"
                                                            alt="Card image cap" style="width: 80px;margin:5px">
                                                    </center>

                                                    <div class="card-body">
                                                        <center>
                                                            <h5 class="card-title text"
                                                                style="font-family: 'Poppins', sans-serif;">
                                                                Full time</h5>
                                                            {{-- <p style="color: #3b3b3b;">At my home
                                                                Foreign domestic helpers are required to live and work
                                                                at the employer's place</p> --}}
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>

                                    <a class="row d-flex justify-content-center" href="#">
                                        <div class="col-xl-0 col-sm-12 col-12 p-5">
                                            <div class="red-border">
                                                <div class="card card-hover"
                                                    style="width: 22rem;cursor: pointer;box-shadow: 0 2px 4px 0 rgba(0,0,0,.1);padding: 10px;"
                                                    tabindex="1">
                                                    <center>
                                                        <img class="card-img-top"
                                                            src="{{ asset('img/part-time-ic.png') }}"
                                                            alt="Card image cap" style="width: 80px;margin:5px">
                                                    </center>

                                                    <div class="card-body">
                                                        <center>
                                                            <h5 class="card-title "
                                                                style="font-family: 'Poppins', sans-serif;">Part time
                                                            </h5>
                                                            {{-- <p style="color: #3b3b3b;">Only for local workers. Foreign
                                                                domestic helpers are not allowed to engage in part-time
                                                                work</p> --}}
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>

                                </div>

                                {{-- <div class="fields">
                                    <div class="input-field">
                                        <label>ID Type</label>
                                        <input type="text" placeholder="Enter ID type" required>
                                    </div>

                                    <div class="input-field">
                                        <label>ID Number</label>
                                        <input type="number" placeholder="Enter ID number" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued Authority</label>
                                        <input type="text" placeholder="Enter issued authority" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued State</label>
                                        <input type="text" placeholder="Enter issued state" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Issued Date</label>
                                        <input type="date" placeholder="Enter your issued date" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Expiry Date</label>
                                        <input type="date" placeholder="Enter expiry date" required>
                                    </div>
                                </div> --}}
                                {{-- <div class="container forms"
                                    style="display: flex; align-items: center; justify-content: center;column-gap: 30px;">
                                    <a class="row d-flex justify-content-center"
                                        href="{{ route('useratacher', $user['users'] = 'famille') }}">
                                        <div class="col-xl-0 col-sm-12 col-12 p-5">
                                            <div class="red-border">
                                                <div class="card card-hover"
                                                    style="width: 25rem;cursor: pointer;box-shadow: 0 2px 4px 0 rgba(0,0,0,.1);padding: 10px;"
                                                    tabindex="1">
                                                    <center>
                                                        <img class="card-img-top"
                                                            src="{{ asset('img/employer.png') }}" alt="Card image cap"
                                                            style="width: 150px;margin:5px">
                                                    </center>

                                                    <div class="card-body">
                                                        <center>
                                                            <h5 class="card-title text text-primary">Help</h5>
                                                            <p style="color: #3b3b3b;">Find a Babysitter, Childminder,
                                                                Nanny, or Au Pair</p>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>

                                    <a class="row d-flex justify-content-center"
                                        href="{{ route('useratacher', $user['users'] = 'candidat') }}">
                                        <div class="col-xl-0 col-sm-12 col-12 p-5">
                                            <div class="red-border">
                                                <div class="card card-hover"
                                                    style="width: 25rem;cursor: pointer;box-shadow: 0 2px 4px 0 rgba(0,0,0,.1);padding: 10px;"
                                                    tabindex="1">
                                                    <center>
                                                        <img class="card-img-top"
                                                            src="{{ asset('img/applicant.png') }}"
                                                            alt="Card image cap" style="width: 150px;margin:5px">
                                                    </center>

                                                    <div class="card-body">
                                                        <center>
                                                            <h5 class="card-title text text-primary">A Job</h5>
                                                            <p style="color: #3b3b3b;">As a Babysitter, Childminder,
                                                                Nanny, or Au Pair </p>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>


                                </div> --}}

                            </div>
                        </div>
                    @endif

                    {{-- STEP 2 --}}
                    @if ($currentStep == 2)
                        <div class="step-two form second">
                            <div class="details address">
                                <span class="title">Address Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Address Type</label>
                                        <input type="text" placeholder="Permanent or Temporary" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Nationality</label>
                                        <input type="text" placeholder="Enter nationality" required>
                                    </div>

                                    <div class="input-field">
                                        <label>State</label>
                                        <input type="text" placeholder="Enter your state" required>
                                    </div>

                                    <div class="input-field">
                                        <label>District</label>
                                        <input type="text" placeholder="Enter your district" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Block Number</label>
                                        <input type="number" placeholder="Enter block number" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Ward Number</label>
                                        <input type="number" placeholder="Enter ward number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="details family">
                                <span class="title">Family Details</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Father Name</label>
                                        <input type="text" placeholder="Enter father name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mother Name</label>
                                        <input type="text" placeholder="Enter mother name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Grandfather</label>
                                        <input type="text" placeholder="Enter grandfther name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Spouse Name</label>
                                        <input type="text" placeholder="Enter spouse name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Father in Law</label>
                                        <input type="text" placeholder="Father in law name" required>
                                    </div>

                                    <div class="input-field">
                                        <label>Mother in Law</label>
                                        <input type="text" placeholder="Mother in law name" required>
                                    </div>
                                </div>

                                <div class="buttons action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

                                    {{-- @if ($currentStep == 1)
                                        <div></div>
                                    @endif --}}

                                    @if ($currentStep == 2)
                                        <button type="button" class="btn btn-md btn-secondary"
                                            wire:click="decreaseStep()">Back</button>
                                    @endif

                                    @if ($currentStep == 1)
                                        <button type="button" class="btn btn-md btn-success"
                                            wire:click="increaseStep()">Next</button>
                                    @endif

                                    @if ($currentStep == 2)
                                    {{-- <button class="nextBtn">
                                        <span class="btnText">Next</span>
                                        <i class="uil uil-navigator"></i>
                                    </button> --}}
                                        <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                    @endif





                                    {{-- <div class="backBtn">
                                <i class="uil uil-navigator"></i>
                                <span class="btnText">Back</span>
                            </div> --}}

                                    {{-- <button class="sumbit ">
                                <span class="btnText">Submit</span>
                                <i class="uil uil-navigator"></i>
                            </button> --}}
                                </div>
                            </div>
                        </div>
                    @endif



                </form>
            </div>

        </div>





        <script src="{{ asset('js/script-wizard-new.js') }}"></script>

        {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/new-wow.min.js') }}"></script>
    <script src="{{ asset('js/new-easing.min.js') }}"></script>
    <script src="{{ asset('js/new-waypoints.min.js') }}"></script>
    <script src="{{ asset('js/new-owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/new-main.js') }}"></script>
    <script src="{{ asset('js/states.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
--}}
    </body>

</html>

</div>