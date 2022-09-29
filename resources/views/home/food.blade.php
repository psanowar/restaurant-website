<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialties
                        </span>
                        <h2>
                            Our Menu
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">

                @foreach($data as $data)

                
                <form action="{{ url('addcart',$data->id) }}" method="post">
                    @csrf

                <div class="col-lg-6 menu-wrap">
                    
                    
                    <div class="menus d-flex align-items-center">

                        
                        <div class="menu-img">
                            <img width="200px" height="200px" class="img-fluid" src="foodimage/{{$data->image}}" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>{{$data->title}}</h4>
                                </div>
                                <div class="col-12">
                                    <h4 class="text-muted menu-price">${{$data->price}}</h4>
                                </div>
                            </div>
                            <p style="padding: 10px">{{$data->description}}</p>

                            
                                <input type="number" name="quantity" min="1" value="1" style="width: 70px; height: 30px;">
                                <input class="btn btn-outline-black" type="submit" value="add cart">
                            

                        </div>

                    </div>
                    
                    
                    
                </div>
                    

              </form>

                @endforeach

                

                
            </div>
        </div>
    </div>
</section>