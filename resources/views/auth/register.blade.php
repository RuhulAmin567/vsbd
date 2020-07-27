@extends('layouts.custom')

@section('contents')
<style>
    .size {
        min-height: 0px;
        padding: 60px 0 40px 0;

    }

    .form-container {
        background-color: white;
        border: .5px solid #eee;
        border-radius: 5px;
        padding: 20px 10px 20px 30px;
        -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
        -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
        box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
    }

    .form-group {
        text-align: left;
    }

    h1 {
        color: white;
    }

    h3 {
        color: #e74c3c;
        text-align: center;
    }

    .red-bar {
        width: 25%;
    }
</style>
<div class="container size">
    <div class="row">
        <div class="col-md-6 offset-md-3 form-container">
            <h3>Register</h3>
            <hr class="red-bar">

            <!-- Error Messages -->

            <form class="form-group" action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
                </div>
                <!--full name-->
                <div class="form-group">
                    <label for="name">Blood Group</label><br>
                    <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                        <option value="">---Select Your Blood Group---</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O+</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <!--End form-group-->
                <div class="form-group">
                    <label for="gender">Gender</label><br>
                    Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
                    Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
                </div>
                <!--gender-->
                <div class="form-inline">
                    <label for="name">Date of Birth</label><br>
                    <select class="form-control demo-default" id="date" name="date" style="margin-bottom:10px;" required>
                        <option value="">---Date---</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                        <option value="">---Month---</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                        <option value="">---Year---</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <!--End form-group-->
                <div class="form-group">
                    <label for="fullname">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_no">Contact No</label>
                    <input type="text" name="contact_no" value="" placeholder="01********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
                </div>
                <!--End form-group-->
                <div class="form-group">
                    <label for="city">City</label>
                    <select name="city" id="city" class="form-control demo-default" required>
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
                <!--city end-->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="" minlength="8" placeholder="Password" class="form-control" required pattern="{6,}">
                </div>
                <!--End form-group-->
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password_confirmation" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
                </div>
                <!--End form-group-->
                <div class="form-inline">
                    <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
                    <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, E-Mail & Contact No. in Blood donors List</b></span>
                </div>
                <!--End form-group-->

                <div class="form-group">
                    <button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
