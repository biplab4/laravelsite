@extends('layouts.app')
@section('content')
    <div>

        <div>
            @if (session()->has('success'))
                <p class="alert alert-success text-center">{{ session()->get('success') }}</p>
            @endif
        </div>

        <div class="container" style="background-image: url('../images/texture.jpg')">
            <h2 class="text-center font-weight-bolder text-uppercase text-monospace text-danger">Contact Us</h2>
        </div>
        <br><br><br>
        <div class="container">
            <div class="row mb-2 pb-2">
                <div class="col-sm  pb-3">
                    <h3 class="text-primary font-weight-bold"> Our Location</h3>
                  
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg> जीतपुर सिमरा उपमहानगरपालिका -२,वारा,२,</span><br>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>  Jeetpur Simara-2,Bara,२,</span>
                </div>
                <div class="col-sm ">
                    <h3 class="text-primary font-weight-bold">Call Us</h3>
                  
                    <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z"/>
                      </svg> 984-5285081</span><br>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z"/>
                      </svg>984-5285081</span>
                </div>
                <div class="col-sm ">
                    <h3 class="text-primary font-weight-bold"> Get in Touch</h3>
                  
                     <a href="mailto:hotelshrestharesidency@gmail.com" style="text-decoration: none !important"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                      </svg> hotelshrestharesidency@gmail.com</span>
                    </a> 
                </div>
            </div>
        </div>
<br><br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="font-weight-bold text-primary">Visit us</h3>
                    <span class="text-muted">
                        Hotel shrestha residency is centrally located at the heart of Simara city.<br>
                        With easy access to all
                        historical monument and commercial business hub.
                    </span>
                    <br>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1635.1194538885811!2d84.97528728980188!3d27.161910479555978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb55d4ce8da2fd%3A0x574817831eaebd4b!2sHotel%20Shrestha%20Residency!5e0!3m2!1sen!2snp!4v1649745728245!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col">
                    <form method="POST" action="{{ route('messages.store') }}">
                        @csrf
                        <h3 class="m-2 p-3 text-warning font-weight-bold">Send us a message!</h3>
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                                id="inputName" placeholder="Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror"
                                id="inputEmail4" placeholder="Your Email">
                        </div>
                        <div class="form-group pl-4">
                            <label for="inputPhone">Phone number</label>
                            <input type="phone" name="phone" class="form-control  @error('phone') is-invalid @enderror"
                                id="inputPhone" placeholder="Your phone number">
                        </div>

                        <div class="form-group pl-4">
                            <label for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="exampleFormControlTextarea1"
                                rows="4" placeholder="Your valuable message"></textarea>
                        </div>
                        <br>
                        <div class="g-recaptcha pl-4" data-sitekey="6LcPnmkfAAAAAK2sMJQzrQ-B9d0sT3HZgj236ePA"></div>
                        <br />

                        <button type="submit" class="btn btn-success ml-4">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
