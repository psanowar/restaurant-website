<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Reservation
                        </span>
                        <h2>
                            Book Now
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="{{ url('reservation') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="date" class="form-control" name="date">
                            </div>

                            <div class="col-md-6 form-group">
                                <input type="time" class="form-control" name="time">
                            </div>

                            <div class="col-md-12 form-group">
                                
                                <input type="number" name="person" class="form-control" placeholder="Number of person">
                            </div>
                 
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>