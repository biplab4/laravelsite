@extends('layouts.app')
@section('content')
    <div>
       
        <div>
            @if (session()->has('success'))

            <p class="alert alert-success text-center">{{ session()->get('success') }}</p>

        @endif
        </div>
       
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1635.1194538885811!2d84.97528728980188!3d27.161910479555978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb55d4ce8da2fd%3A0x574817831eaebd4b!2sHotel%20Shrestha%20Residency!5e0!3m2!1sen!2snp!4v1649745728245!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col">
                    <form method="POST" action="{{ route('messages.store') }}">
                        @csrf
                        <h3 class="m-2 p-3 text-warning font-weight-bold">Send us a message!</h3>
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="inputName" placeholder="Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Your Email">
                        </div>
                        <div class="form-group pl-4">
                            <label for="inputPhone">Phone number</label>
                            <input type="phone" name="phone" class="form-control  @error('phone') is-invalid @enderror" id="inputPhone" placeholder="Your phone number">
                        </div>

                        <div class="form-group pl-4">
                            <label for="exampleFormControlTextarea1">Your Message</label>
                            <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="exampleFormControlTextarea1" rows="4" placeholder="Your valuable message"></textarea>
                        </div>
                        <br>
                        <div class="g-recaptcha pl-4" data-sitekey="6LcPnmkfAAAAAK2sMJQzrQ-B9d0sT3HZgj236ePA"></div>
                        <br/>
                        
                        <button type="submit" class="btn btn-success ml-4">SEND</button>
                    </form>
                </div>
            </div>
        </div>
        
    @endsection
