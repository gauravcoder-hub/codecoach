@extends('layouts.app')

@section('title', 'Home - Code Coach')

@section('content')
    <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="detail-box">
                                    <h1>HTML Tutorials for Beginners</h1>
                                    <p>
                                        Start your web development journey with Code Coach's free HTML tutorials.
                                        Learn everything from basic tags and elements to building your first web page.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{ url('/html-tutorials') }}" class="btn1">View HTML Tutorials</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{ asset('images/slider-img.png') }}" alt="Person coding HTML on a laptop">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            </ol>
        </div>
    </section>
    </div>
    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Tutorials</span>
                    </h2>
                    <p>
                        Explore our range of coding tutorials covering various programming languages and web development
                        technologies.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/web-developer.png" alt="Python Tutorial">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    HTML for Beginners
                                </h5>
                                <p>
                                    Learn the fundamentals of <span>HTML</span> with our beginner-friendly tutorials.
                                </p>
                                <a href="service.html">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/software-developer.png" alt="Web Development Tutorial">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Web Development Essentials
                                </h5>
                                <p>
                                    Master the essentials of web development with our comprehensive tutorials on HTML,
                                    CSS, and JavaScript.
                                </p>
                                <a href="service.html">
                                    Coming Soon
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/java-script.png" alt="JavaScript Tutorial">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    JavaScript Mastery
                                </h5>
                                <p>
                                    Become a JavaScript expert with our in-depth tutorials covering everything from
                                    basic syntax to advanced concepts.
                                </p>
                                <a href="service.html">
                                    Coming Soon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="Tutorials.htmlf">
                        View All Tutorials
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    <h2>Our <span>Ebooks</span></h2>
                </h2>
                <p>Take your skills to the next level with our in-depth ebooks on web development.</p>

            </div>
            <div class="why_container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/web-link.png" alt="Expert Instructors">
                            </div>
                            <div class="detail-box">
                                <h5>Complete Web Development Guide</h5>
                                <p>A step-by-step guide to mastering HTML, CSS, JavaScript, and more.</p>
                                <div class="btn-box">
                                    <a href="" class="btn1">Buy Now</a>
                                    <a href="" class="btn2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/java-script.png" alt="Practical Approach">
                        </div>
                        <div class="detail-box">
                            <h5>JavaScript for Beginners</h5>
                            <p>Learn JavaScript from scratch and build interactive web applications.</p>
                            <div class="btn-box">
                                <a href="" class="btn1">Buy Now</a>
                                <a href="" class="btn2">Learn More</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/css.png" alt="Affordable Learning">
                        </div>
                        <div class="detail-box">
                            <h5>Advanced CSS Techniques</h5>
                            <p>Master advanced CSS concepts like Flexbox, Grid, and animations.</p>
                            <div class="btn-box">
                                <a href="" class="btn1">Buy Now</a>
                                <a href="" class="btn2">Learn More</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="why.html">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <section class="service_section layout_padding">
    </section>

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h2>
                    About <span>Us</span>
                </h2>
                <p>
                    Code Coach is dedicated to providing high-quality coding education to aspiring developers of all
                    levels.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="Code Coach team">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <h3>
                            We Are Code Coach
                        </h3>
                        <p>
                            At Code Coach, we believe that everyone should have access to quality coding education.
                            Whether you're a complete beginner taking your first steps into the world of programming, or
                            an experienced developer looking to expand your skillset, we're here to guide you. Our
                            mission is to make learning to code engaging, accessible, and effective. We achieve this
                            through:
                        </p>
                        <ul>
                            <li><strong>Expert-Curated Tutorials:</strong> Our tutorials are designed and written by
                                experienced developers who are passionate about sharing their knowledge.</li>
                            <li><strong>Practical, Hands-on Learning:</strong> We emphasize learning by doing. Our
                                tutorials include plenty of examples, exercises, and projects to help you solidify your
                                understanding.</li>
                            <li><strong>Supportive Community:</strong> Join our community of learners and get help from
                                fellow coders and our team. We encourage collaboration and peer-to-peer learning.</li>
                            <li><strong>Up-to-Date Content:</strong> The world of technology is constantly evolving. We
                                keep our content fresh and relevant, ensuring you learn the latest tools and techniques.
                            </li>
                        </ul>
                        <p>
                            We're more than just a collection of tutorials; we're a community of learners and educators
                            dedicated to empowering individuals through code. Explore our resources, join our community,
                            and start your coding journey with Code Coach today!
                        </p>
                        <a href="about.html">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Why Choose <span>Code Coach</span>
                </h2>
            </div>
            <div class="why_container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/w1.png" alt="Expert Instructors">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Expert Instructors
                            </h5>
                            <p>
                                Learn from experienced developers who are experts in their fields.
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/programming.png" alt="Practical Approach">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Practical Approach
                            </h5>
                            <p>
                                Our tutorials focus on hands-on learning and real-world applications.
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/w3.png" alt="Supportive Community">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Supportive Community
                            </h5>
                            <p>
                                Get help and connect with other learners in our friendly community.
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/save-money.png" alt="Affordable Learning">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Affordable Learning
                            </h5>
                            <p>
                                Start learning to code without breaking the bank.
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="why.html">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- Services Offer Section -->
    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Need a <span>Website?</span></h2>
                <p>Let’s turn your ideas into reality! I offer custom web development services tailored to your needs.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/software-developer.png" alt="Custom Website Development">
                        </div>
                        <div class="detail-box">
                            <h5>Custom Website Development</h5>
                            <p>From simple landing pages to complex web applications, I create websites that are fast,
                                responsive, and user-friendly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/developer-REDESIGN.png" alt="Website Redesign">
                        </div>
                        <div class="detail-box">
                            <h5>Website Redesign</h5>
                            <p>Revamp your existing website with modern design and improved functionality to attract
                                more visitors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/technical-support.png" alt="Maintenance & Support">
                        </div>
                        <div class="detail-box">
                            <h5>Maintenance & Support</h5>
                            <p>Keep your website running smoothly with regular updates, bug fixes, and technical
                                support.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="contact.html" class="btn1">Get a Free Quote</a>
            </div>
        </div>
    </section>
    <!-- End Services Offer Section -->


    <!-- <section class="team_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container heading_center">
                <h2 class="">
                    Our <span>Team</span>
                </h2>
            </div>

            <div class="team_container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/team-1.jpg" class="img1" alt="Team Member 1">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Joseph Brown
                                </h5>
                                <p>
                                    CEO & Founder
                                </p>
                            </div>
                            <div class="social_box">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- 
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    What says our <span>Students</span>
                </h2>
            </div>
            <div class="carousel-wrap ">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/client1.jpg" alt="Student 1" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            John Doe
                                        </h6>
                                        <p>
                                            Aspiring Developer
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    "Code Coach has been instrumental in my coding journey. The tutorials are clear,
                                    concise, and easy to follow."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection
