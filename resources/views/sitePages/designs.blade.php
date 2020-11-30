@extends('layouts.master')

@section('content')
<style>
    .header {
        position: relative !important;

    }

    .homeMain {
        padding-top: 2%;
    }

</style>
<div class="homeMain designs_page ">

    <div class="padding text-center section1">
        <h1>Furnishing & Design</h1>
        <p>You only need to define the stile you like and we will do the rest for you!</p>
    </div>
    <div class="row section2 mx-0 padding">
        <div class="col-5 p-0">
            <h3>What does it mean?</h3>
            <p>Buying real estate in Montenegro with the help of the CMM team is a great choice. Now it is our job to
                furnish your apartment and to create interiors that are a true reflection of you. We focus on designing
                spaces that represent your personal style and functionality needs, paired with our unique and timeless
                design concepts. </p>
            <p> Our goal is to guide you through this process in an easy way, as the CMM team is
                skilled in handling all aspects of a design job, including project management, budget review, and
                collaborating with the best furniture salons. Together, we can create the home of your dreams.</p>
        </div>
        <div class="col-7 pb-4 pl-4 pr-0">
            <img src="/assets/images/designF.png" alt="">
        </div>

        <p>Being in the business for many years, we have the experience to know what standards will meet your
            expectations. We aim to reduce the expense and relieve the stress of furnishing a property. We work closely
            with local suppliers to be able to offer high quality furniture packages at unbeatable prices.</p>
    </div>

    <div class="section3 ">
    <div class="padding  "> 

        <h3> CMM Furniture and Interior design department can provide a
            variety of services for you:</h3>
        <ul class="list-unstyled">
            <li> - &nbsp; &nbsp; &nbsp; Interior projects </li>
            <li> - &nbsp; &nbsp; &nbsp; Kitchen design </li>
            <li> - &nbsp; &nbsp; &nbsp; Furniture suggestion </li>
            <li> - &nbsp; &nbsp; &nbsp; Wall painting </li>
            <li> - &nbsp; &nbsp; &nbsp; Furniture layout plan </li>
            <li> - &nbsp; &nbsp; &nbsp; Minor repairs </li>
            <li> - &nbsp; &nbsp; &nbsp; Complete renovation of the apartment</li>
        </ul>
    </div>   
         <img src="/assets/images/repairsImage.png" class="slikaRepairs" alt="">
    </div>
    <div class="section4 row mx-0 padding">
        <div class="col-6 pt-3 pl-0">
            <h3>Online interior design and home decorating</h3>
            <p>Let's make things easier. Furnishing online saves you time and speeds up the whole process. Equip your
                apartment online and enjoy the benefits that our designers are offering you. Get ideas and jazz up your
                home interiors with this range of elegant home furnishing products that are available at our site.
                Giving you a wide choice you will certainly be left spoilt for choice when you are looking for home
                furnishing products. Shop and avail amazing deals, discounts and offers on this range of home furnishing
                products at our site. It is up to you to send us some vision and idea and it is up to us to implement it
                and arrange your apartment to your liking. </p>
        </div>
        <div class="col-6 pt-3 pr-0">
            <h3>How does furnishing online work?</h3>
            <p>The furniture and interior design department of CMM will provide you with a personal manager who will
                present all the necessary information online where you will be able to see the furniture, kitchen
                appliances, the texture of the materials for the design of your kitchen, wall colors, etc. In agreement
                with our designers, you will be able to define your wishes and needs according to which your apartment
                is met so that your apartment will be fully furnished before your arrival in Montenegro.</p>
        </div>

    </div>
    <div class="section6 row mx-0 padding">
        <h1>Furnishing & Design packages:</h1>
        <div class="row my-5">
                <div class="col-4  ">
                <div class="packet p-4">
                    <p>Furnishing & Design</p>
                        <h3>Investment rental </h3>
                    
                        <div><ul>
                            <li> Lorem ipsum dolor sit </li>
                            <li> amet Ex veri liberavisse duo.</li>
                            <li>  Vivendo qualisque voluptatum </li>
                            <li>   duo His omittam accusata at. </li>
                            <li>   Veri primis eum an Eu eos tota </li>
                            <li>  aliquip molestie, duo vide minimum </li>
                            <li>  efficiantur an. Ad mucius pertinacia</li>
                            <li>    incorrupte duo, alienum repudiare eu sed.</li>
                            </ul></div>
                        <a href="/">View all the details</a>
                </div>
            </div>
            <div class="col-4 ">
                <div class="packet p-4">
                    <p>Furnishing & Design</p>
                        <h3>Family residential</h3>
                    
                        <div><ul>
                            <li> Lorem ipsum dolor sit </li>
                            <li> amet Ex veri liberavisse duo.</li>
                            <li>  Vivendo qualisque voluptatum </li>
                            <li>   duo His omittam accusata at. </li>
                            <li>   Veri primis eum an Eu eos tota </li>
                            <li>  aliquip molestie, duo vide minimum </li>
                            <li>  efficiantur an. Ad mucius pertinacia</li>
                            <li>    incorrupte duo, alienum repudiare eu sed.</li>
                            </ul></div>
                        <a href="/">View all the details</a>
                </div>
            </div>
            <div class="col-4 ">
                <div class="packet p-4">
                    <p>Furnishing & Design</p>
                        <h3>Feel like a king</h3>
                    
                        <div><ul>
                            <li> Lorem ipsum dolor sit </li>
                            <li> amet Ex veri liberavisse duo.</li>
                            <li>  Vivendo qualisque voluptatum </li>
                            <li>   duo His omittam accusata at. </li>
                            <li>   Veri primis eum an Eu eos tota </li>
                            <li>  aliquip molestie, duo vide minimum </li>
                            <li>  efficiantur an. Ad mucius pertinacia</li>
                            <li>    incorrupte duo, alienum repudiare eu sed.</li>
                            </ul></div>
                        <a href="/">View all the details</a>
                </div>
            </div>
            </div> 
            </div> 
    <div class="section5 padding">
    <form action="{{ route('contact.store.main') }}" method="POST" class="form-property needs-validation">
            {{ csrf_field() }}
            <input type="hidden" class="form-control" name="title" id="title" value="Furnishing & Design">

               <div class="form-group">
                    <h3> IF YOU ARE INTERESTED IN Furnishing & Design </h3>
                </div>
                <div class="form_inquiry">
                    <div class="form-row m-0">
                        <div class="form-group col-md-6 form_inquiry_left">
                            <label for="name">WHAT IS YOUR NAME</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Put the name and surname please " required>
                                <div class="valid-feedback">
                                            Looks good!
                                        </div>
                        </div>
                        <div class="form-group col-md-6 form_inquiry_right ">
                            <label for="email">WHAT IS YOUR E-MAIL ADRESS?</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Put your e-mail adress please" required>
                                <div class="valid-feedback">
                                            Looks good!
                                        </div>
                        </div>
                    </div>
                        <div class="form-group  form_inquiry_bot ">
                            <label for="message">MESSAGE</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="7" required>What may we help you with?</textarea>
                            <div class="valid-feedback">
                                            Looks good!
                                        </div>
                        
                    </div>
                </div>
                <div class="form-group btnI text-center">
                  <button type="submit" class="btn btn-inquiry">SEND INQURY</button>
                  <p>Our agent will get back to you with the answer as soon as possible</p>
              </div>

             

        </form>
    </div>

    {{-- 
    <div class="padding designs row my-5 mx-0">
@forelse($designs as $design)
            <div class="col-sm-5">
                <h3>{{ $design->title }}</h3>
    @can('admin')
        <div class="adminButtons">
            <a href="{{ route('designs.edit',$design) }}"><button type="button"
                    class="btn btn-primary">Edit</button></a>

            <form action="{{ route('designs.destroy',$design) }}" method="POST"
                class="float-left">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-warning">Delete</button>
            </form>
        </div>
    @endcan
    <div>
        <p>{!!$design->description!!}</p>
    </div>
</div>

<div class="col-sm-7">
    <div class="row">
        @foreach($design->images as $image)
            <img class="col-6 my-2" src="/images/design/{{ $image->image }}" alt="">
        @endforeach
    </div>

</div>
@empty
<div class="col-sm-12"> NO DESIGNS</div>

@endforelse

</div> --}}
</div>
@endsection
