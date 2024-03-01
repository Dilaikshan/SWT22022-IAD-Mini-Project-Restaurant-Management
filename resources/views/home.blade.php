@extends('layout')
@section('title','Home')


@section('navbar')
<div class="navbar-nav ms-auto py-0 pe-4">
    <a href="/" class="nav-item nav-link active">Home</a>
    <a href="about" class="nav-item nav-link">About</a>
    <a href="service" class="nav-item nav-link">Service</a>
    <a href="menu" class="nav-item nav-link">Menu</a>
    <a href="feed" class="nav-item nav-link">Reviews</a>
    <a href="contact" class="nav-item nav-link">Contact</a>
</div>
@endsection

@section('underNavbar')
<div class="container-fluid py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2"><b style="font-size: 25px;">M</b>outhwatering <b style="font-size: 25px;">|</b><b style="font-size: 25px;"> A</b>ppetizing <b style="font-size: 25px;">|</b> <b style="font-size: 25px;">D</b>elicious <br>       <b style="font-size: 25px;">R</b>ustic <b style="font-size: 25px;">|</b> <b style="font-size: 25px;">U</b>nforgettable <b style="font-size: 25px;">|</b> <b style="font-size: 25px;">K</b>östlich</p>
                            <a href="book" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')



       


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-3.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/food.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>MadRuk</h1>
                        <p class="mb-4">"Welcome to <b>MadRuk</b>, where culinary excellence meets a warm and inviting atmosphere. At our restaurant, we take pride in serving delectable dishes crafted with passion and the finest ingredients. Our menu is a celebration of flavors, bringing together both classic and innovative recipes to satisfy every palate. </p>
                        <p class="mb-4">Beyond the food, <b>MadRuk</b> is a place where community and great food come together. We invite you to indulge in the essence of hospitality and savor memorable moments with each visit. Thank you for choosing <b>MadRuk</b> — where every meal tells a story.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">3</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">6</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="about">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Fast Food</h6>
                                </div>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa-solid fa-martini-glass-citrus fa-2x" style="color: #fea116;"></i>
                                <div class="ps-3">
                                    <small class="text-body">Juicily</small>
                                    <h6 class="mt-n1 mb-0">Beverages</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="breakfast/cap.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cappuccino</span>
                                                <span class="text-primary">Rs 500</span>
                                            </h5>
                                            <small class="fst-italic">Indulge in the rich and velvety experience of our classic Cappuccino, a perfect blend of espresso, steamed milk, and a delicate frothy topping</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="breakfast/bo.jpg" alt="" style="width: 80px;height: 80px;" >
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bread omlet</span>
                                                <span class="text-primary">Rs 250</span>
                                            </h5>
                                            <small class="fst-italic">Savor the perfect harmony of fluffy eggs enveloping a medley of flavorful spices, fresh herbs, and toasted bread in our delightful signature Bread Omelet.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="breakfast/id.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Idly</span>
                                                <span class="text-primary">Rs 150</span>
                                            </h5>
                                            <small class="fst-italic">Experience the light and airy perfection of our traditional Idly, a Sri Lankan delight made from fermented rice and urad dal batter, served steamed to perfection.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="breakfast/oat.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Oats</span>
                                                <span class="text-primary">Rs 200</span>
                                            </h5>
                                            <small class="fst-italic">Savor the wholesome goodness of our Oats, a nutritious and hearty option that combines fiber-rich grains with your choice of toppings for a delicious and fulfilling mea</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="breakfast/pittu.jpeg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pittu</span>
                                                <span class="text-primary">Rs 150</span>
                                            </h5>
                                            <small class="fst-italic">Delight in the unique texture and flavor of our Pittu, a traditional Sri Lankan dish made from steamed rice flour and coconut, offering a delicious blend of simplicity and taste</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="breakfast/pr.avif" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Parota</span>
                                                <span class="text-primary">Rs 200</span>
                                            </h5>
                                            <small class="fst-italic">Indulge in the flaky and layered perfection of our Parota, a Sri Lankan flatbread made from unleavened dough, pan-cooked to golden crispiness</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="breakfast/st.jpeg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>String Hoppers</span>
                                                <span class="text-primary">Rs 150</span>
                                            </h5>
                                            <small class="fst-italic">Savor the delicate simplicity of our String Hopper, a traditional Sri Lankan dish featuring finely steamed rice flour noodles, offering a delightful texture with every bite.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="breakfast/tc.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tea with Cookies</span>
                                                <span class="text-primary">Rs 150</span>
                                            </h5>
                                            <small class="fst-italic">Enjoy the comforting warmth of our tea paired with delightful cookies, a perfect harmony of soothing brew and sweet indulgence.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="fastf/frenchjpg.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>French Fries</span>
                                                <span class="text-primary">Rs 200</span>
                                            </h5>
                                            <small class="fst-italic">Crispy and golden French fries, perfectly seasoned and fried to a deliciously satisfying crunch.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="fastf/pizza.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pizza</span>
                                                <span class="text-primary">Rs 1500</span>
                                            </h5>
                                            <small class="fst-italic">A symphony of flavors on a golden crust, our pizza boasts a perfect blend of tangy tomato sauce, gooey melted cheese, and an array of mouthwatering toppings.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="fastf/fc.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Fried Chicken</span>
                                                <span class="text-primary">Rs 600</span>
                                            </h5>
                                            <small class="fst-italic">A delectable round of joy, our pizza boasts a thin, oven-baked crust topped with flavorful tomato sauce, gooey melted cheese, and a medley of mouthwatering toppings.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="fastf/hot dog.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Hot Dogs</span>
                                                <span class="text-primary">Rs 500</span>
                                            </h5>
                                            <small class="fst-italic">Savor the classic appeal of our hot dogs – succulent sausages nestled in soft buns, adorned with your choice of toppings for a delightful burst of flavor.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="fastf/shawarmajpg.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Shawarma</span>
                                                <span class="text-primary">Rs 800</span>
                                            </h5>
                                            <small class="fst-italic">Indulge in the savory delight of our shawarma – perfectly seasoned and slow-roasted meat, thinly sliced and nestled in a warm, fluffy wrap with a symphony of complementary flavors.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="fastf/SushiRolls.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>SushiRolls</span>
                                                <span class="text-primary">Rs 350</span>
                                            </h5>
                                            <small class="fst-italic">Experience the artful harmony of our Sushi Rolls, featuring a delicate balance of vinegared rice, fresh fish, and vibrant vegetables, expertly rolled into bite-sized delights.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="fastf/tacos.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tacos</span>
                                                <span class="text-primary">Rs 350</span>
                                            </h5>
                                            <small class="fst-italic">Savor the explosive flavors of our Tacos, where warm tortillas embrace a symphony of seasoned meats, crisp veggies, and zesty toppings for a taste of Mexican delight.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="fastf/noodles.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Noodles</span>
                                                <span class="text-primary">Rs 250</span>
                                            </h5>
                                            <small class="fst-italic">Delight in the slurp-worthy goodness of our noodles – perfectly cooked strands entwined in a flavorful dance of sauces, vegetables, and your choice of protein.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="juice/apple.jpg" alt="" style="width: 80px;height: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Apple juice</span>
                                                <span class="text-primary">Rs 400</span>
                                            </h5>
                                            <small class="fst-italic">Sip on pure refreshment with our apple juice — a crisp and naturally sweet elixir, cold-pressed from the juiciest orchard-fresh apples.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="juice/av.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kiwi Juice</span>
                                                <span class="text-primary">Rs 450</span>
                                            </h5>
                                            <small class="fst-italic">Experience the vibrant essence of our Kiwi juice, a zesty and invigorating blend bursting with the goodness of sun-kissed kiwi fruits.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="juice/ma.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mango Juice</span>
                                                <span class="text-primary">Rs 400</span>
                                            </h5>
                                            <small class="fst-italic">Savor the tropical bliss in every sip of our mango juice, a luscious and sun-soaked elixir crafted from the finest, ripe mangoes.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="juice/st.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Strawberry Juice</span>
                                                <span class="text-primary">Rs 450</span>
                                            </h5>
                                            <small class="fst-italic">Indulge in the sweetness of summer with our strawberry juice — a refreshing blend that captures the essence of ripe, succulent strawberries in every delightful sip.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Menu End -->


        <!-- Reservation Start -->
         
            
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form action="/bookTable" method="post">
                        @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" name="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="people" placeholder="No.of People" name="people">
                                        <label for="people">No.of People</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px" name="message"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit" >Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/1.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Antony Dilaikshan</h5>
                            <small>Chief Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Anoshan Yoganathan</h5>
                            <small>Executive Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Rashad Ahamad</h5>
                            <small>Sous Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/5.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Mangala</h5>
                            <small>Private Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

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


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>This place is tucked away on a side street, but it's worth seeking out! The food is absolutely incredible - fresh, flavorful, and bursting with authenticity.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Ahana</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>My partner and I had the most wonderful date night at MadRuk. The food was exquisite, from the melt-in-your-mouth appetizers to the perfectly cooked main course.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Adhidhya</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>As a self-proclaimed foodie, I can honestly say that MadRuk exceeded my expectations.The menu is innovative and creative, with unique flavor combinations that tantalize the taste buds.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Tony stark</h5>
                                
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>I was pleasantly surprised by how affordable MadRuk was, given the quality of the food.The portions were generous, and the ingredients were fresh and delicious.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Arshana</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

@endsection