@extends('frontend.master')

@section('title')
Giới thiệu về DVCons
@endsection


@section('content')
<div class="dvcons-about">
    <div class="dvcons-narrow-content">
        <div class="row row-bottom-padded-md">
            <div class="col-md-6">
                <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(/frontend/images/img_bg_2.jpg);">
                </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                <div class="about-desc">
                    <span class="heading-meta">Về chúng tôi</span>
                    <h2 class="dvcons-heading">DVCONS</h2>
                    <p>Công ty chúng tôi là một đơn vị tư vấn thiết kế xây dựng chuyên nghiệp, có kinh nghiệm lâu năm trong lĩnh vực này. Chúng tôi cam kết mang đến cho khách hàng những dịch vụ tốt nhất, từ khâu thiết kế, tư vấn giải pháp, đến giám sát thi công để đảm bảo chất lượng và tiến độ công trình.</p>
                    <p>Chúng tôi có đội ngũ kiến trúc sư, kỹ sư, nhân viên kỹ thuật tay nghề cao, được đào tạo chuyên sâu về thiết kế và xây dựng nhà ở, biệt thự, căn hộ, nhà máy và các công trình công nghiệp. Với phương châm "Khách hàng là trên hết", chúng tôi luôn nỗ lực để đáp ứng mọi yêu cầu của khách hàng với giá cả hợp lý nhất.</p>
                </div>
                <div class="row padding">
                    <p><a class="btn btn-primary btn-learn">Xem hồ sơ năng lực <i
                        class="icon-arrow-right3"></i></a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                <h2 class="dvcons-heading">Kinh nghiệm</h2>
                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
            </div>
            <div class="col-md-8 animate-box" data-animate-effect="fadeInRight">
                <div class="fancy-collapse-panel">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Những lý do để DVCons đồng hành cùng bạn
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                 <div class="panel-body">
                                    <div class="row">
                                          <div class="col-md-6">
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                          </div>
                                          <div class="col-md-6">
                                              <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                          </div>
                                      </div>
                                 </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What I do?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <ul>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">My Specialties
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="dvcons-counter" class="dvcons-counters" style="background-image: url(/frontend/images/cover_bg_1.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="dvcons-narrow-content">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="flaticon-skyline"></i></span>
                <span class="dvcons-counter js-counter" data-from="0" data-to="1539" data-speed="5000"
                    data-refresh-interval="50"></span>
                <span class="dvcons-counter-label">Dự án</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="flaticon-engineer"></i></span>
                <span class="dvcons-counter js-counter" data-from="0" data-to="3653" data-speed="5000"
                    data-refresh-interval="50"></span>
                <span class="dvcons-counter-label">Nhân sự</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                <span class="dvcons-counter js-counter" data-from="0" data-to="5987" data-speed="5000"
                    data-refresh-interval="50"></span>
                <span class="dvcons-counter-label">Kinh nghiệm</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="flaticon-worker"></i></span>
                <span class="dvcons-counter js-counter" data-from="0" data-to="3999" data-speed="5000"
                    data-refresh-interval="50"></span>
                <span class="dvcons-counter-label">Đối tác</span>
            </div>
        </div>
    </div>
</div>
@endsection