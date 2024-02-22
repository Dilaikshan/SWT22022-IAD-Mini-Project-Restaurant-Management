@extends('layout')
@section('title','MadRuk Contact')
@section('navbar')
<div class="navbar-nav ms-auto py-0 pe-4">
    <a href="/" class="nav-item nav-link">Home</a>
    <a href="about" class="nav-item nav-link">About</a>
    <a href="service" class="nav-item nav-link active">Service</a>
    <a href="menu" class="nav-item nav-link">Menu</a>
    <a href="feed" class="nav-item nav-link">Reviews</a>
    <a href="contact" class="nav-item nav-link">Contact</a>
</div>

@endsection
@section('underNavbar')
<div class="container-fluid py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                        </ol>
                    </nav>
                </div>
</div>
@endsection

@section('content')

        <!-- Service Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
                    <h1 class="mb-5">Explore Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>A chief chef is a culinary expert who leads and manages the kitchen staff and operations of a restaurant or other dining facility. A chief chef is responsible for creating and maintaining the menu, ensuring the quality and consistency of the dishes, controlling the food costs and budget, and complying with the health and safety regulations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Quality food can be achieved by using quality management systems, which are formalized systems that document and control how food products are produced, processed, and distributed. food that meets the expectations and needs of the customer in terms of taste, texture, appearance, nutritional value, safety, and sustainability.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>You can choose from a variety of cuisines, dishes, and options on the restaurant’s website or app, and place your order with a few clicks. You can also customize your order, add special instructions, and pay online or in cash. The restaurant will prepare your food and deliver it to you in a timely manner, or you can pick it up yourself if you prefer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>247 delivery is a service that allows customers to order and receive products at any time of the day or night, seven days a week. 247 delivery is convenient, fast, and reliable, as it can meet the needs and preferences of different customers, such as late-night workers, early risers, or emergency situations.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Service End -->
        
@endsection