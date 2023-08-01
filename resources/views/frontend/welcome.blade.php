@extends('frontend.layouts.app')
@section('content')

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="features-post">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-pencil"></i>Kerjasama</h4>
                        </div>
                        <div class="content-hide">
                            <p>Pengajuan Kerja Sama Registration for Partnership offer</p>
                            <div class="scroll-to-section"><a href="#section3">Go.</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post second-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-graduation-cap"></i>Kornologis</h4>
                        </div>
                        <div class="content-hide">
                            <p>Kronologis Kerja Sama Chronological of Partnership </p>
                            <div class=""><a href="/auth/login">Go</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post third-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-book"></i>Monitoring</h4>
                        </div>
                        <div class="content-hide">
                            <p>Monitoring & Evaluasi Kerja Sama Monitoring & Evaluation of Partnership</p>
                            <div class=""><a href="/auth/login">Go</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section why-us" data-section="section2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Jenis Digitasi</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div id='tabs'>
                    <ul>
                        <li><a href='#tabs-1'>Antar Daerah</a></li>
                        <li><a href='#tabs-2'>Luar Negri</a></li>
                        <li><a href='#tabs-3'>Pihak Ketiga</a></li>
                    </ul>
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('TemplateFront') }}/assets/images/1.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Antar Daerah</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam corporis
                                        ab, iure excepturi ipsam minima, nisi blanditiis nemo doloremque adipisci,
                                        odit enim. Recusandae ipsum neque nulla architecto exercitationem minima
                                        dicta?</p>
                                </div>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('TemplateFront') }}/assets/images/2.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Luar Negri</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, magnam
                                        modi nulla adipisci sunt temporibus itaque fugit reiciendis numquam nostrum
                                        possimus repudiandae officia nam provident. Vitae at tenetur nam non maiores
                                        quibusdam praesentium alias odit, doloribus ipsam rem iure ducimus animi
                                        repudiandae ipsum? Quas, eius.</p>
                                </div>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('TemplateFront') }}/assets/images/3.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>Pihak Ketiga</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic consequuntur
                                        quidem recusandae exercitationem. Saepe inventore, corporis reprehenderit
                                        quo aliquid expedita at, dolorem adipisci facere optio sequi libero
                                        distinctio mollitia maxime?</p>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section coming-soon" data-section="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <div class="text-light">
                    <h4>Member Pengajuan Kerjasama </h4>
                    <p>
                        Selamat datang di aplikasi Sistem Informasi Kerja Sama Pemerintah Kota Bogor<br> Jika
                        Anda berminat bekerjasama dengan Pemerintah Kota Bogor, berikut prosedur yang harus
                        dilalui:
                    </p>
                    <p>
                        1. Mengisi biodata pemohon<br>
                        2. Mengunggah Surat Permohonan Kerja Sama<br>
                        3. Mengunggah Kerangka Acuan Kerja (KAK) mengenai obyek yang akan dikerjasamakan.
                    </p>
                    <p>
                        Welcome to Bogor Municipality Partnership's Information System Application, kindly
                        follow the procedures bellow to propose partnership:
                    </p>
                    <p>
                        1. Fill in your biodata <br>
                        2. Upload proposal letter <br>
                        3. Upload the Terms of Reference of partnership.
                    </p>
                </div>

            </div>

            <div class="col-md-5">
                <div class="right-content">
                    {{-- <div class="top-content">
                        <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
                    </div> --}}
                    <form id="contact" action="/pengajuan/register" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="nama_lengkap" type="text" class="form-control" id="name"
                                        placeholder="Nama Lengkap">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="text" type="text" class="form-control" id="stakholder"
                                        placeholder="Stakholder">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="Email">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="ppassword" type="password" class="form-control" id="ppassword"
                                        placeholder="Password">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">Kirim</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section contact" data-section="section6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Contact</h2>
                </div>
            </div>
            {{-- <div class="col-md-6">
                
      <form id="contact" action="" method="post">
        <div class="row">
          <div class="col-md-6">
              <fieldset>
                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" >
              </fieldset>
            </div>
            <div class="col-md-6">
              <fieldset>
                <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" >
              </fieldset>
            </div>
          <div class="col-md-12">
            <fieldset>
              <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." ></textarea>
            </fieldset>
          </div>
          <div class="col-md-12">
            <fieldset>
              <button type="submit" id="form-submit" class="button">Send Message Now</button>
            </fieldset>
          </div>
        </div>
      </form>
    </div> --}}
            <div class="col-md-12">
                <div id="map">
                    <iframe
                        src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection