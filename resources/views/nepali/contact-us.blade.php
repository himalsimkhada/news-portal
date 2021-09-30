@extends('nepali.layouts.app')

@section('content')
    <div class="whiteBg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact">
                        <h5 class="footerPageName">न्यूज़ पोर्टल</h5>
                        <ul class="contactUs">
                            <li>
                                <i class="fa fa-map-marker mr-3" aria-hidden="true"></i>
                                शान्तीनगर काठमाडौं नेपाल
                            </li>
                            <li>
                                <i class="fa fa-phone mr-3" aria-hidden="true"></i>
                                <a href="tel:9851064725">
                                    9851064725
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-envelope mr-3" aria-hidden="true"></i>
                                <a href="mailto:info@newsportal.com">
                                    info@newsportal.com
                                </a>
                            </li>
                            <li>
                                <span class="font-weight-bold">कार्यालय सम्पादक :</span> नाम हाल्नुहोस
                            </li>
                            <li>
                                <span class="font-weight-bold">प्रबन्ध निर्देशक :</span> नाम हाल्नुहोस
                            </li>
                            <li>
                                <span class="font-weight-bold">विज्ञापनका लागि :</span> नम्बर हाल्नुहोस
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 grey">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="list-style: none;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('nepali.submit.contactus') }}" method="post">
                        @csrf
                        <h5>Name</h5>
                        <input type="text" placeholder="Name" name="name">
                        <h5>Phone</h5>
                        <input type="number" placeholder="Phone" name="phone">
                        <h5>Email</h5>
                        <input type="email" placeholder="abc@xyz.com" name="email">
                        <h5>Message</h5>
                        <textarea rows="4" cols="50" placeholder="Please Enter Your Message Here" name="message"></textarea>

                        <button type="submit" class="btn submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
