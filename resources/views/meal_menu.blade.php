<section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                            @foreach($breakfast1 as $breakfast1)
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/breakfastImg/{{$breakfast1->image}}" alt="">
                                                            <h4>{{$breakfast1->title}}</h4>
                                                            <p>{{$breakfast1->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$breakfast1->price}}</h6>
                                                            </div>
                                                        </div>
                                                      </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                            @foreach($breakfast2 as $breakfast2)
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/breakfastImg/{{$breakfast2->image}}" alt="">
                                                            <h4>{{$breakfast2->title}}</h4>
                                                            <p>{{$breakfast2->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$breakfast2->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                            @foreach($lunch1 as $lunch1)
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/lunchImg/{{$lunch1->image}}" alt="">
                                                            <h4>{{$lunch1->title}}</h4>
                                                            <p>{{$lunch1->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$lunch1->price}}</h6>
                                                            </div>
                                                        </div>
                                                      </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                            @foreach($lunch2 as $lunch2)
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/lunchImg/{{$lunch2->image}}" alt="">
                                                            <h4>{{$lunch2->title}}</h4>
                                                            <p>{{$lunch2->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$lunch2->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                            @foreach($dinner1 as $dinner1)
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/dinnerImg/{{$dinner1->image}}" alt="">
                                                            <h4>{{$dinner1->title}}</h4>
                                                            <p>{{$dinner1->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$dinner1->price}}</h6>
                                                            </div>
                                                        </div>
                                                      </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                            @foreach($dinner2 as $dinner2)
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="/dinnerImg/{{$dinner2->image}}" alt="">
                                                            <h4>{{$dinner2->title}}</h4>
                                                            <p>{{$dinner2->description}}</p>
                                                            <div class="price">
                                                                <h6>${{$dinner2->price}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                
                               
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 