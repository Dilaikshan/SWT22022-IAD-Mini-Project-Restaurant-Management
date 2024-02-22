@extends('layout')
@section('title','MadRuk Menu')
@section('navbar')
<div class="navbar-nav ms-auto py-0 pe-4">
    <a href="/" class="nav-item nav-link">Home</a>
    <a href="about" class="nav-item nav-link">About</a>
    <a href="service" class="nav-item nav-link">Service</a>
    <a href="menu" class="nav-item nav-link active">Menu</a>
    <a href="feed" class="nav-item nav-link">Reviews</a>
    <a href="contact" class="nav-item nav-link">Contact</a>
</div>
@endsection

@section('underNavbar')
<div class="container-fluid py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
            </ol>
        </nav>
    </div>
</div>
@endsection
@section('content')
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
@endsection