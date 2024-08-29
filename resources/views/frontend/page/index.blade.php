@extends('frontend.layout')


@Section('content')


     <!-- slider Section -->
     <div class=" carousel w-full">

        <!-- Slide 1 -->
        <div id="slide1" class="carousel-item relative w-full bg-bike-bag">
    
            <div class="lg:flex p-24">
                 <!-- Text -->
                  <div class="space-y-7 flex-1">
                    <h1 class="text-6xl ">Ride-on R15 V4 <br> with Smile</h1>
                    <p>Amet minim mollit non deserunt ullamco 
                       <br> est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                       <button class="btn bg-bike-btn  text-white ">
                        Purchase
                       </button>
                  </div>
                  <!-- Image -->
                   <div class="flex-1">
                    <img src="{{ asset('images/slider/bike1.png') }}"class="w-full" />
                   </div>
            </div>
    
          <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
            <a href="#slide3" class="btn btn-circle">❮</a>
            <a href="#slide2" class="btn btn-circle">❯</a>
          </div>
        </div>
        <!-- Slide 2 -->
        <div id="slide2" class="carousel-item relative w-full bg-bike-bag">
            <div class="lg:flex p-24">
                <!-- Text -->
                 <div class="space-y-7 flex-1">
                   <h1 class="text-6xl">Ride-on R15 V4 <br> with Smile</h1>
                   <p>Amet minim mollit non deserunt ullamco 
                      <br> est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                      <button class="btn bg-bike-btn  text-white ">
                       Purchase
                      </button>
                 </div>
                 <!-- Image -->
                  <div class="flex-1">
                   <img src="/images/slider/bike2.png"class="w-full" />
                  </div>
           </div>
          <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
            <a href="#slide1" class="btn btn-circle">❮</a>
            <a href="#slide3" class="btn btn-circle">❯</a>
          </div>
        </div>
        <!-- Slide 3 -->
        <div id="slide3" class="carousel-item relative w-full bg-bike-bag">
            <div class="lg:flex p-24">
                <!-- Text -->
                 <div class="space-y-7 flex-1">
                   <h1 class="text-6xl">Ride-on R15 V4 <br> with Smile</h1>
                   <p>Amet minim mollit non deserunt ullamco 
                      <br> est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                      <button class="btn bg-bike-btn  text-white ">
                       Purchase
                      </button>
                 </div>
                 <!-- Image -->
                  <div class="flex-1">
                   <img src="/images/slider/bike3.png"class="w-full" />
                  </div>
           </div>
          <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
            <a href="#slide2" class="btn btn-circle">❮</a>
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
        </div>
    
      </div>
    
    
        <section class="my-24 ">
            <h3 class="text-5xl font-bold mb-12 text-center " >Latest News</h3>
            <div class="grid lg:grid-cols-3 gap-12 md:grid-cols-2 grid-cols-1">
                <!--card1-->
                <div class="card bg-base-100 w-96 shadow-xl">
                    <figure>
                      <img
                        src="./images/others/latest1.png"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body space-y-5">
                      <h2 class="card-title font-bold text-xl">Ducati XDIAVEL S-73</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Lacus, fermentum amet <br>faucibus sed id nisi lectus at.</p>
                      <div class="card-actions ">
                        <button class="btn bg-bike-btn text-white">Read more</button>
                      </div>
                    </div>
                  </div>
                  <!--card2-->
                  <div class="card bg-base-100 w-96 shadow-xl">
                    <figure>
                      <img
                        src="./images/others/latest1.png"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body space-y-5">
                      <h2 class="card-title font-bold text-xl">Ducati XDIAVEL S-73</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Lacus, fermentum amet <br>faucibus sed id nisi lectus at.</p>
                      <div class="card-actions ">
                        <button class="btn bg-bike-btn text-white">Read more</button>
                      </div>
                    </div>
                  </div>
    
                  <!--card3-->
                  <div class="card bg-base-100 w-96  shadow-xl">
                    <figure>
                      <img
                        src="./images/others/latest1.png"
                        alt="Shoes" />
                    </figure>
                    <div class="card-body space-y-5">
                      <h2 class="card-title font-bold text-xl">Ducati XDIAVEL S-73</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Lacus, fermentum amet <br>faucibus sed id nisi lectus at.</p>
                      <div class="card-actions ">
                        <button class="btn bg-bike-btn text-white">Read more</button>
                      </div>
                    </div>
                  </div>
            </div>
          
        </section>
    
          <!-- FAQ Section -->
          <section class="my-24 md:container mx-auto">
            <h3 class="text-5xl font-bold text-center mb-12">
              Frequently Asked <span class="text-bike-primary">Questions</span>
            </h3>
            <div class="hero">
              <div class="hero-content flex-col lg:flex-row">
                <img
                  src="./images/others/faq.png"
                  class="w-full rounded-lg shadow-2xl"
                />
                <div class="space-y-5">
                  <div class="collapse collapse-arrow border border-blue-100">
                    <input type="radio" name="my-accordion-2" checked="checked" />
                    <div class="collapse-title text-xl font-medium">
                      What are the most important things I should know about riding
                      a bike?
                    </div>
                    <div class="collapse-content">
                      <p>
                        Safety First! Always obey the rules of the road. Obey all
                        traffic signals, signs, and laws. Get in the mindset of
                        “driving” your bike—not just “riding” your bike. This will
                        help you be a more focused and legally compliant bike rider.
                      </p>
                    </div>
                  </div>
                  <div class="collapse collapse-arrow border border-blue-100">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title text-xl font-medium">
                      What are the most important things I should know about.
                    </div>
                    <div class="collapse-content">
                      <p>
                        “driving” your bike—not just “riding” your bike. This will
                        help you be a more focused and legally compliant bike rider.
                      </p>
                    </div>
                  </div>
                  <div class="collapse collapse-arrow border border-blue-100">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title text-xl font-medium">
                      help you be a more focused and legally compliant bike rider.
                    </div>
                    <div class="collapse-content">
                      <p>
                        This will help you be a more focused and legally compliant
                        bike rider.
                      </p>
                    </div>
                  </div>
                  <div class="collapse collapse-arrow border border-blue-100">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title text-xl font-medium">
                      help you be a more focused and legally compliant bike rider.
                    </div>
                    <div class="collapse-content">
                      <p>
                        This will help you be a more focused and legally compliant
                        bike rider.
                      </p>
                    </div>
                  </div>
                  <div class="collapse collapse-arrow border border-blue-100">
                    <input type="radio" name="my-accordion-2" />
                    <div class="collapse-title text-xl font-medium">
                      help you be a more focused and legally compliant bike rider.
                    </div>
                    <div class="collapse-content">
                      <p>
                        This will help you be a more focused and legally compliant
                        bike rider.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


@endSection