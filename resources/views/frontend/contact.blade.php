@extends('frontend.master')

@section('content')
<div class="dvcons-contact">
    <div class="dvcons-narrow-content">
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <span class="heading-meta">Liên hệ</span>
                <h2 class="dvcons-heading">Get in Touch</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="dvcons-feature dvcons-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="dvcons-icon">
                        <i class="icon-globe-outline"></i>
                    </div>
                    <div class="dvcons-text">
                        <p><a href="#">info@domain.com</a></p>
                    </div>
                </div>

                <div class="dvcons-feature dvcons-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="dvcons-icon">
                        <i class="icon-map"></i>
                    </div>
                    <div class="dvcons-text">
                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>

                <div class="dvcons-feature dvcons-feature-sm animate-box" data-animate-effect="fadeInLeft">
                    <div class="dvcons-icon">
                        <i class="icon-phone"></i>
                    </div>
                    <div class="dvcons-text">
                        <p><a href="tel://">+123 456 7890</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-md-push-1">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div id="map"></div>	

@endsection