<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Specialties
                </span>
                <h2>
                    Our Team
                </h2>
            </div>

            
            <div class="row">
                @foreach($data1 as $data1)
               
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img height="300px" width="300px" class="img-fluid" src="chefimage/{{$data1->image}}" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">{{$data1->name}}</h4>
                            <p class="mb-1">{{$data1->speciality}}</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>

                </div>
                

                @endforeach
            


        </div>

    </div>

</div>
</section>