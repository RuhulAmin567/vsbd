@extends('layouts.custom')

@section('contents')
    <div class="container-fluid header-img">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <div class="header">
                    <h1 class="text-center">VolunteerBD</h1>
                    <p class="text-center">Do Good, Feel Good.</p>
                </div>


                <h1 class="text-center">Search For Help</h1>
                <hr class="white-bar text-center">

                <form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                    <div class="form-group text-center justify-content-center">

                        <select style="width: 250px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                            <option value="">-- Select --</option>
                            <optgroup title="Dhaka" label="&raquo; Dhaka"></optgroup>
                            <option value="Ghorashal">Ghorashal</option>
                            <option value="Monohardi">Monohardi</option>
                            <option value="Shibpur">Shibpur</option>
                            <option value="Raipura">Raipura</option>
                            <option value="Madhabdi">Madhabdi</option>
                            <option value="Mirzapur">Mirzapur</option>
                            <option value="Dhanbari">Dhanbari</option>
                            <option value="Madhupur">Madhupur</option>
                            <option value="Gopalpur">Gopalpur</option>
                            <option value="Ghatail">Ghatail</option>
                            <option value="Kalihati">Kalihati</option>
                            <option value="Sakhipur">Sakhipur</option>
                            <option value="Bhuapur">Bhuapur</option>
                            <option value="Elenga">Elenga</option>
                            <option value="Karatia">Karatia</option>
                            <option value="Aricha">Aricha</option>
                            <option value="Basail">Basail</option>
                            <option value="Bhairab">Bhairab</option>
                            <option value="Kishoreganj">Kishoreganj</option>
                            <option value="Manikganj">Manikganj</option>
                            <option value="Munshiganj">Munshiganj</option>
                            <option value="Gopalganj">Gopalganj</option>
                            <option value="Shariatpur">Shariatpur</option>
                            <option value="Madaripur">Madaripur</option>
                            <option value="Rajbari">Rajbari</option>

                            <optgroup title="Chittagong" label="&raquo; Chittagong"></optgroup>
                            <option value="Chhagalnaiya">Chhagalnaiya</option>
                            <option value="Daganbhuiyan">Daganbhuiyan</option>
                            <option value="Sonagazi">Sonagazi</option>
                            <option value="Bandarban">Bandarban</option>
                            <option value="Khagrachhari ">Khagrachhari</option>
                            <option value="Rangamati">Rangamati</option>
                            <option value="Rangunia">Rangunia</option>
                            <option value="Sandwip">Sandwip</option>
                            <option value="Fatikchhari">Fatikchhari</option>
                            <option value="Nazir Hat">Nazir Hat</option>
                            <option value="Baroiyarhat">Baroiyarhat</option>
                            <option value="Mirsharai">Mirsharai</option>
                            <option value="Sitakunda">Sitakunda</option>
                            <option value="Hathazari ">Hathazari</option>
                            <option value="Raozan">Raozan</option>
                            <option value="Patiya">Patiya</option>
                            <option value="Chandanaish">Chandanaish</option>
                            <option value="Satkania">Satkania</option>
                            <option value="Boalkhali">Boalkhali</option>
                            <option value="Akhaura">Akhaura</option>
                            <option value="Sarail">Sarail</option>
                            <option value="Chowmuhani">Chowmuhani</option>
                            <option value="Laksam">Laksam</option>
                            <option value="Hatiya">Hatiya</option>
                            <option value="Maijdee">Maijdee</option>
                            <option value="Lakshmipur">Lakshmipur</option>
                            <option value="Burichong">Burichong</option>
                            <option value="Comilla">Comilla</option>

                            <optgroup title="Rajshahi" label="&raquo; Rajshahi"></optgroup>
                            <option value="Joypurhaty">Joypurhat</option>
                            <option value="Rahanpur">Rahanpur</option>
                            <option value="Kalai">Kalai</option>
                            <option value="Khetlal">Khetlal</option>
                            <option value="Akkelpur">Akkelpur</option>
                            <option value="Mundumala">Mundumala</option>
                            <option value="Naogaon">Naogaon</option>
                            <option value="Natore">Natore</option>
                            <option value="Shahjadpur">Shahjadpur</option>
                            <option value="Ullapara">Ullapara</option>
                            <option value="Iswardi">Iswardi</option>
                            <option value="Santhia">Santhia</option>
                            <option value="Dhunat">Dhunat</option>
                            <option value="Tanore">Tanore</option>

                            <optgroup title="Mymensingh" label="&raquo; Mymensingh"></optgroup>
                            <option value="Shambhuganj">Shambhuganj</option>
                            <option value="Muktagachha">Muktagachha</option>
                            <option value="Bhaluka">Bhaluka</option>
                            <option value="Gouripur">Gouripur</option>
                            <option value="Phulpur">Phulpur</option>
                            <option value="Trishal">Trishal</option>
                            <option value="Nandail">Nandail</option>
                            <option value="Gaffargaon">Gaffargaon</option>
                            <option value="Ishwarganj">Ishwarganj</option>
                            <option value="Haluaghat">Haluaghat</option>
                            <option value="Fulbaria">Fulbaria</option>
                            <option value="Netrokona">Netrokona</option>
                            <option value="Sherpur">Sherpur</option>

                            <optgroup title="Narayanganj" label="&raquo; Narayanganj"></optgroup>
                            <option value="Badin">Badin</option>
                            <option value="Dadu">Dadu</option>
                            <option value="Ghotki">Ghotki</option>

                            <optgroup title="Barisal" label="&raquo; Barisal"></optgroup>
                            <option value="Bhola">Bhola</option>
                            <option value="Patuakhali">Patuakhali</option>
                            <option value="Pirojpur">Pirojpur</option>
                            <option value="Jhalokati">Jhalokati</option>
                            <option value="Barguna">Barguna</option>
                            <option value="Amtali">Amtali</option>
                            <option value="Bakerganj">Bakerganj</option>
                            <option value="Char Fasson">Char Fasson</option>
                            <option value="Gournadi">Gournadi</option>
                            <option value="Swarupkati">Swarupkati</option>
                            <option value="Kuakata">Kuakata</option>
                            <option value="Muladi">Muladi</option>
                            <option value="Bhandaria">Bhandaria</option>
                            <option value="Mathbaria">Mathbaria</option>
                            <option value="Lalmohan">Lalmohan</option>
                            <option value="Borhanuddin">Borhanuddin</option>
                            <option value="Daulatkhan">Daulatkhan</option>
                            <option value="Banaripara">Banaripara</option>
                            <option value="Mehendiganj">Mehendiganj</option>
                            <option value="Nalchity">Nalchity</option>
                            <option value="Patharghata">Patharghata</option>
                            <option value="Kalapara">Kalapara</option>

                            <optgroup title="Rangpur" label="&raquo; Rangpur"></optgroup>
                            <option value="Gaibandha">Gaibandha</option>
                            <option value="Kurigram">Kurigram</option>
                            <option value="Lalmonirhat">Lalmonirhat</option>
                            <option value="Nilphamari">Nilphamari</option>
                            <option value="Panchagarh">Panchagarh</option>
                            <option value="Thakurgaon">Thakurgaon</option>
                            <option value="Saidpur">Saidpur</option>
                            <option value="Bogra">Bogra</option>
                        </select>
                    </div>
                    <!--
                    <div class="form-group center-aligned">
                        <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>

                        </select>
                    </div> -->
                    <div class="form-group center-aligned">
                        <button type="submit" class="btn btn-outline-info btn-lg">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- header ends -->
    <!-- donate section -->
    <div class="container-fluid red-background">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">VolunteerBD</h1>
                <hr class="white-bar">
                <p class="text-center pera-text">
                <b> Volunteering isn't a Choice, it's a Responsibility! </b> <br>

                  Volunteering with VolunteerBD for Bangladesh <br> allows an individual to grow in to be a responsible citizen; <br> their contribution is appreciate with certificates, appreciation letters and <br> recommendation letters after successful completion of campaigns and programs.
                </p>
                <a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
            </div>
        </div>
    </div>
    <!-- end doante section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h3 class="text-center red">Our Vission</h3>
                    <img src="{{url('')}}/custom/img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                      <p>“Peaceful, Prosperous and Equitable society throughout Bangladesh.”</p>
                      <p>VolunteerBD is the essential professional resource and advocate for those who engage, motivate, and celebrate volunteers and their vital contributions to our society & achieve the nation’s highest potential.</p>
                     </p>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <h3 class="text-center red">Our Goal</h3>
                    <img src="{{url('')}}/custom/img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                        <p>To improve basic Public health condition of community people.</p>
                        <p> Conserving, promoting and protecting environment and culture for future generation. Minimize the risk of natural disaster and provide relief and safety to vulnerable communities. </p>
                     </p>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <h3 class="text-center red">Our Mission</h3>
                    <img src="{{url('')}}/custom/img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                    <p>
                    Empowering marginalized communities through equitable, inclusive and holistic development programmes. </p>
                    <p>
                    We provide training, advice, advocacy, resources and recognition for individuals and community organisations involved in volunteering. </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
