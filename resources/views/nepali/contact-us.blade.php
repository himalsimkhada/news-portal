@extends('nepali.layouts.app')

@section('title', 'सम्पर्क')

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
                    <form action="{{ route('nepali.submit.contactus') }}" method="post">
                        @csrf
                        <h5>नाम</h5>
                        <input type="text" placeholder="यहाँ तपाइँको नाम प्रविष्ट गर्नुहोस्।" name="name" value="{{ old('name') }}">
                        <h5>सम्पर्क</h5>
                        <input type="number" placeholder="यहाँ तपाइँको फोन नम्बर प्रविष्ट गर्नुहोस्।" name="phone" value="{{ old('phone') }}">
                        <h5>ईमेल</h5>
                        <input type="email" placeholder="यहाँ तपाइँको ईमेल प्रविष्ट गर्नुहोस्।" name="email" value="{{ old('email') }}">
                        <h5>सन्देश</h5>
                        <textarea rows="4" cols="50" placeholder="तपाइँको सन्देशहरु यहाँ प्रविष्ट गर्नुहोस्।" name="message">{{ old('message') }}</textarea>

                        <button type="submit" class="btn submit">पेश गर्नुहोस्</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
