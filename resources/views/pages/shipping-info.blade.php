@extends('layouts.main')

@section('title')
<title> Shipping Info - 2Wheels</title>
@endsection
<script src="https://wsa3.pakwheels.com/assets/top_javascript-3a5464eb855ccf252d2e545aeeb70e6d.js"
    type="text/javascript"></script>
<script src="https://wsa4.pakwheels.com/assets/application-3c77711aad629fa4ed1e29d5a321c1f0.js" type="text/javascript">
</script>

@section('contents')


<div class="header-space"></div>
<!-- #TODO : Multiple checks for ad to not show -->

<div class="" id="main-container" style="margin: 60px 0px;">

    <section class="nopad">

        <div class="container">

            <div class="alert alert-danger" style="display:none" id="error_div">
                <button type="button" class="close" data-dismiss="alert">×</button>

            </div>

            <div class="alert alert-success" style="display:none" id="success_div">
                <button type="button" class="close" data-dismiss="alert">×</button>

            </div>

            <div class="alert alert-info" style="display:none">
                <button type="button" class="close" data-dismiss="alert">×</button>

            </div>

        </div>
    </section>

    <div class="remove-section">
        <script src="https://wsa4.pakwheels.com/assets/shared/discount_coupon-a14cdc22637111b7daedffdf5f36a31d.js"
            type="text/javascript"></script>

        <div class="container">
            <table class="table order-steps table-fixed text-center mb0" width="100%">
                <tr>
                    <td class="active" id="shipping-info-tab">
                        <span class="number">2</span>
                        Shipping Info
                    </td>
                </tr>

            </table>
        </div>


        <!-- <form accept-charset="UTF-8" action="/buy" class="form-horizontal nomargin buying-request-form"
            data-parsley-validate="" enctype="multipart/form-data" id="new_order" method="post"> -->
            <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input
                    name="authenticity_token" type="hidden" value="YhQpmPL/zP+33++M7wVDKUYrNXzsIX0cA0nzjrhqYhg=" />
            </div>


            <section id="shipping-info">
                <div class="container">

                    <div class="well mb20 clearfix">
                    <form action="{{url('add_order')}}" method="POST">
                                @csrf
                        <div class="row">

                            <div class="col-sm-6">

                                <fieldset class="nomargin pos-rel car-loan-divider shipping-divider">
                                    <h3 class="mt0 mb30 fwm generic-dark-grey">Contact Info</h3>

                                    <div class="form-group">
                                        <label class="col-md-4">Name<span class="text-error">*</span></label>
                                        <div class="col-md-7">
                                            <input data-parsley-pattern-message="Please enter at least 3 alphabets."
                                                data-parsley-pattern="^[A-Za-z ]{3,25}$" data-parsley-required="true"
                                                data-parsley-trigger="change" id="order_name" maxlength="25"
                                                name="name" placeholder="Full Name" size="25" type="text"
                                                value="{{Auth::user()->name ?? ''}}" />
                                        </div>
                                    </div>


                                    <input id="user_email" name="email" type="hidden"
                                        value="ahmadijaz385@gmail.com" />

                                    <div class="form-group">
                                        <label class="col-md-4"> Mobile Number<span class="text-error">*</span></label>
                                        <div class="col-md-7">
                                            <input class="ad-mobile-number"
                                                data-parsley-pattern-message="Enter a valid mobile number."
                                                data-parsley-pattern="^03[0-9]{9}$" data-parsley-required="true"
                                                data-parsley-trigger="change" id="order_phone" maxlength="11"
                                                name="phone" value="{{Auth::user()->phone ?? ''}}" placeholder="Mobile Number" size="11" type="tel" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4"> Comments</label>
                                        <div class="col-md-7">
                                            <textarea cols="2" id="order_comments" name="comments"
                                                placeholder="Enter Comments" rows="3" style="width:100%"></textarea>
                                        </div>
                                    </div>

                                </fieldset>


                            </div>
                            <div class="col-sm-6">

                                <fieldset class="nomargin pos-rel">
                                    <h3 class="mt0 mb30 fwm generic-dark-grey">Shipping Info</h3>


                                    <div class="form-group" id="order-city" style=>
                                        <label class="col-md-4"> City<span class="text-error">*</span></label>
                                        <div class="col-md-7  shipping-info-right">
                                            <select class="chzn-select" data-parsley-required="true" required
                                                data-parsley-trigger="change" id="order_city_id" name="city_id">
                                                <option value="">Select City</option>
                                                <option value="409">Karachi</option>
                                                <option value="410">Lahore</option>
                                                <option value="408">Islamabad</option>
                                                <option value="313">Rawalpindi</option>
                                                <option value="288">Peshawar</option>
                                                <option value="1">Abbottabad</option>
                                                <option value="2">Abdul Hakeem</option>
                                                <option value="3">Adda jahan khan</option>
                                                <option value="4">Adda shaiwala</option>
                                                <option value="183503">Ahmed Pur East</option>
                                                <option value="183504">Ahmedpur Lamma</option>
                                                <option value="5">Akora khattak</option>
                                                <option value="6">Ali chak</option>
                                                <option value="183505">Alipur Chatta</option>
                                                <option value="7">Allahabad</option>
                                                <option value="8">Amangarh</option>
                                                <option value="10">Arifwala</option>
                                                <option value="11">Attock</option>
                                                <option value="18">Babarloi</option>
                                                <option value="12">Babri banda</option>
                                                <option value="13">Badin</option>
                                                <option value="14">Bahawalnagar</option>
                                                <option value="15">Bahawalpur</option>
                                                <option value="16">Balakot</option>
                                                <option value="17">Bannu</option>
                                                <option value="19">Baroute</option>
                                                <option value="183506">Basirpur</option>
                                                <option value="183507">Basti Shorekot</option>
                                                <option value="20">Bat khela</option>
                                                <option value="29">Batang</option>
                                                <option value="21">Bhai pheru</option>
                                                <option value="22">Bhakkar</option>
                                                <option value="23">Bhalwal</option>
                                                <option value="24">Bhan saeedabad</option>
                                                <option value="25">Bhera</option>
                                                <option value="183508">Bhikky</option>
                                                <option value="26">Bhimber</option>
                                                <option value="27">Bhirya road</option>
                                                <option value="28">Bhuawana</option>
                                                <option value="30">Buchay key</option>
                                                <option value="31">Burewala</option>
                                                <option value="33">Chaininda</option>
                                                <option value="34">Chak 4 b c</option>
                                                <option value="35">Chak 46</option>
                                                <option value="36">Chak jamal</option>
                                                <option value="37">Chak jhumra</option>
                                                <option value="39">Chak Shahzad</option>
                                                <option value="32">Chaklala</option>
                                                <option value="38">Chaksawari</option>
                                                <option value="40">Chakwal</option>
                                                <option value="41">Charsadda</option>
                                                <option value="42">Chashma</option>
                                                <option value="43">Chawinda</option>
                                                <option value="303">Chenab Nagar</option>
                                                <option value="44">Chichawatni</option>
                                                <option value="45">Chiniot</option>
                                                <option value="46">Chishtian</option>
                                                <option value="405">Chitral</option>
                                                <option value="47">Chohar jamali</option>
                                                <option value="48">Choppar hatta</option>
                                                <option value="49">Chowha saidan shah</option>
                                                <option value="50">Chowk azam</option>
                                                <option value="51">Chowk mailta</option>
                                                <option value="52">Chowk munda</option>
                                                <option value="53">Chunian</option>
                                                <option value="66">D.G.Khan</option>
                                                <option value="54">Dadakhel</option>
                                                <option value="55">Dadu</option>
                                                <option value="183490">Dadyal Ak</option>
                                                <option value="56">Daharki</option>
                                                <option value="57">Dandot</option>
                                                <option value="58">Dargai</option>
                                                <option value="59">Darya khan</option>
                                                <option value="60">Daska</option>
                                                <option value="61">Daud khel</option>
                                                <option value="62">Daulatpur</option>
                                                <option value="64">Deh pathan</option>
                                                <option value="65">Depal pur</option>
                                                <option value="183509">Dera Allah Yar</option>
                                                <option value="67">Dera ismail khan</option>
                                                <option value="68">Dera murad jamali</option>
                                                <option value="69">Dera nawab sahib</option>
                                                <option value="70">Dhatmal</option>
                                                <option value="71">Dhoun kal</option>
                                                <option value="72">Digri</option>
                                                <option value="73">Dijkot</option>
                                                <option value="74">Dina</option>
                                                <option value="75">Dinga</option>
                                                <option value="63">Dir</option>
                                                <option value="76">Doaba</option>
                                                <option value="77">Doltala</option>
                                                <option value="78">Domeli</option>
                                                <option value="183510">Donga Bonga</option>
                                                <option value="79">Dudial</option>
                                                <option value="80">Dunia Pur</option>
                                                <option value="81">Eminabad</option>
                                                <option value="129">Esa Khel</option>
                                                <option value="83">Faisalabad</option>
                                                <option value="183511">Faqirwali</option>
                                                <option value="84">Farooqabad</option>
                                                <option value="88">Fateh Jang</option>
                                                <option value="85">Fateh pur</option>
                                                <option value="86">Feroz walla</option>
                                                <option value="87">Feroz watan</option>
                                                <option value="183512">Feroz Watwan</option>
                                                <option value="89">Fiza got</option>
                                                <option value="183513">Fort Abbass</option>
                                                <option value="90">Gadoon amazai</option>
                                                <option value="91">Gaggo mandi</option>
                                                <option value="92">Gakhar mandi</option>
                                                <option value="183491">Gambat</option>
                                                <option value="93">Gambet</option>
                                                <option value="94">Garh maharaja</option>
                                                <option value="95">Garh more</option>
                                                <option value="183492">Garhi yaseen</option>
                                                <option value="96">Gari habibullah</option>
                                                <option value="97">Gari mori</option>
                                                <option value="99">Gharo</option>
                                                <option value="100">Ghazi</option>
                                                <option value="101">Ghotki</option>
                                                <option value="102">Gilgit</option>
                                                <option value="103">Gohar ghoushti</option>
                                                <option value="105">Gojra</option>
                                                <option value="220">Goth Machi</option>
                                                <option value="106">Goular khel</option>
                                                <option value="107">Guddu</option>
                                                <option value="104">Gujar khan</option>
                                                <option value="108">Gujar Khan</option>
                                                <option value="109">Gujranwala</option>
                                                <option value="110">Gujrat</option>
                                                <option value="183501">Gwadar</option>
                                                <option value="111">Hafizabad</option>
                                                <option value="112">Hala</option>
                                                <option value="113">Hangu</option>
                                                <option value="183514">Harappa</option>
                                                <option value="114">Haripur</option>
                                                <option value="115">Hariwala</option>
                                                <option value="116">Haroonabad</option>
                                                <option value="117">Hasilpur</option>
                                                <option value="118">Hassan abdal</option>
                                                <option value="119">Hattar</option>
                                                <option value="183515">Hattian</option>
                                                <option value="120">Hattian lawrencepur</option>
                                                <option value="121">Havali Lakhan</option>
                                                <option value="122">Hawilian</option>
                                                <option value="123">Hayatabad</option>
                                                <option value="124">Hazro</option>
                                                <option value="125">Head marala</option>
                                                <option value="183489">Hub</option>
                                                <option value="183487">Hub-Balochistan</option>
                                                <option value="183516">Hujra Shah Mukeem</option>
                                                <option value="183488">Hunza</option>
                                                <option value="127">Hyderabad</option>
                                                <option value="183517">Iskandarabad</option>
                                                <option value="130">Jacobabad</option>
                                                <option value="142">Jahaniya</option>
                                                <option value="131">Jaja abasian</option>
                                                <option value="132">Jalalpur Jattan</option>
                                                <option value="133">Jalalpur Pirwala</option>
                                                <option value="134">Jampur</option>
                                                <option value="135">Jamrud road</option>
                                                <option value="136">Jamshoro</option>
                                                <option value="137">Jan pur</option>
                                                <option value="183518">Jand</option>
                                                <option value="138">Jandanwala</option>
                                                <option value="139">Jaranwala</option>
                                                <option value="183519">Jatlaan</option>
                                                <option value="183520">Jatoi</option>
                                                <option value="140">Jauharabad</option>
                                                <option value="141">Jehangira</option>
                                                <option value="406">Jhal Magsi</option>
                                                <option value="144">Jhand</option>
                                                <option value="145">Jhang</option>
                                                <option value="146">Jhatta bhutta</option>
                                                <option value="147">Jhelum</option>
                                                <option value="148">Jhudo</option>
                                                <option value="183521">Jin Pur</option>
                                                <option value="183522">K.N. Shah</option>
                                                <option value="150">Kabirwala</option>
                                                <option value="151">Kacha khooh</option>
                                                <option value="152">Kahuta</option>
                                                <option value="153">Kakul</option>
                                                <option value="154">Kakur town</option>
                                                <option value="155">Kala bagh</option>
                                                <option value="156">Kala shah kaku</option>
                                                <option value="158">Kalaswala</option>
                                                <option value="183523">Kallar Kahar</option>
                                                <option value="157">Kallar Saddiyian</option>
                                                <option value="159">Kallur kot</option>
                                                <option value="160">Kamalia</option>
                                                <option value="161">Kamalia musa</option>
                                                <option value="162">Kamber ali khan</option>
                                                <option value="183524">Kameer</option>
                                                <option value="163">Kamoke</option>
                                                <option value="164">Kamra</option>
                                                <option value="165">Kandh kot</option>
                                                <option value="166">Kandiaro</option>
                                                <option value="168">Karak</option>
                                                <option value="169">Karoor pacca</option>
                                                <option value="170">Karore lalisan</option>
                                                <option value="171">Kashmir</option>
                                                <option value="172">Kashmore</option>
                                                <option value="173">Kasur</option>
                                                <option value="174">Kazi ahmed</option>
                                                <option value="175">Khairpur</option>
                                                <option value="183525">Khairpur Mir</option>
                                                <option value="179">Khan Bela</option>
                                                <option value="178">Khan qah sharif</option>
                                                <option value="180">Khandabad</option>
                                                <option value="181">Khanewal</option>
                                                <option value="182">Khangarh</option>
                                                <option value="183551">Khanpur</option>
                                                <option value="183">Khanqah dogran</option>
                                                <option value="184">Khanqah sharif</option>
                                                <option value="185">Kharian</option>
                                                <option value="186">Khewra</option>
                                                <option value="187">Khoski</option>
                                                <option value="183494">Khudian Khas</option>
                                                <option value="188">Khurian wala</option>
                                                <option value="183527">Khurrianwala</option>
                                                <option value="189">Khushab</option>
                                                <option value="190">Khushal kot</option>
                                                <option value="191">Khuzdar</option>
                                                <option value="183526">Khyber</option>
                                                <option value="183528">Klaske</option>
                                                <option value="192">Kohat</option>
                                                <option value="193">Kot addu</option>
                                                <option value="194">Kot bunglow</option>
                                                <option value="195">Kot ghulam mohd</option>
                                                <option value="196">Kot mithan</option>
                                                <option value="183530">Kot Momin</option>
                                                <option value="197">Kot radha kishan</option>
                                                <option value="198">Kotla</option>
                                                <option value="199">Kotla arab ali khan</option>
                                                <option value="200">Kotla jam</option>
                                                <option value="201">Kotla Pathan</option>
                                                <option value="183529">Kotli Ak</option>
                                                <option value="202">Kotli Loharan</option>
                                                <option value="203">Kotri</option>
                                                <option value="204">Kumbh</option>
                                                <option value="205">Kundina</option>
                                                <option value="206">Kunjah</option>
                                                <option value="207">Kunri</option>
                                                <option value="209">Lakki marwat</option>
                                                <option value="210">Lala musa</option>
                                                <option value="211">Lala rukh</option>
                                                <option value="212">Laliah</option>
                                                <option value="213">Lalshanra</option>
                                                <option value="214">Larkana</option>
                                                <option value="407">Lasbela</option>
                                                <option value="215">Lawrence pur</option>
                                                <option value="216">Layyah</option>
                                                <option value="217">Liaqat Pur</option>
                                                <option value="218">Lodhran</option>
                                                <option value="183495">Lower Dir</option>
                                                <option value="219">Ludhan</option>
                                                <option value="221">Madina</option>
                                                <option value="223">Makli</option>
                                                <option value="183496">Malakand Agency</option>
                                                <option value="224">Malakwal</option>
                                                <option value="225">Mamu kunjan</option>
                                                <option value="226">Mandi bahauddin</option>
                                                <option value="227">Mandra</option>
                                                <option value="228">Manga mandi</option>
                                                <option value="229">Mangal sada</option>
                                                <option value="230">Mangi</option>
                                                <option value="231">Mangla</option>
                                                <option value="232">Mangowal</option>
                                                <option value="233">Manoabad</option>
                                                <option value="234">Mansehra</option>
                                                <option value="235">Mardan</option>
                                                <option value="236">Mari indus</option>
                                                <option value="237">Mastoi</option>
                                                <option value="239">Matli</option>
                                                <option value="240">Mehar</option>
                                                <option value="241">Mehmood kot</option>
                                                <option value="242">Mehrabpur</option>
                                                <option value="222">Melsi</option>
                                                <option value="243">Mian Channu</option>
                                                <option value="244">Mian Wali</option>
                                                <option value="183536">Minchanabad</option>
                                                <option value="245">Mingora</option>
                                                <option value="246">Mir ali</option>
                                                <option value="247">Miran shah</option>
                                                <option value="248">Mirpur A.K.</option>
                                                <option value="249">Mirpur khas</option>
                                                <option value="250">Mirpur mathelo</option>
                                                <option value="183532">Mithi</option>
                                                <option value="238">Mitiari</option>
                                                <option value="251">Mohen jo daro</option>
                                                <option value="252">More kunda</option>
                                                <option value="253">Morgah</option>
                                                <option value="254">Moro</option>
                                                <option value="255">Mubarik pur</option>
                                                <option value="256">Multan</option>
                                                <option value="257">Muridke</option>
                                                <option value="258">Murree</option>
                                                <option value="259">Musafir khana</option>
                                                <option value="260">Mustung</option>
                                                <option value="262">Muzaffar Gargh</option>
                                                <option value="261">Muzaffarabad</option>
                                                <option value="263">Nankana sahib</option>
                                                <option value="264">Narang mandi</option>
                                                <option value="265">Narowal</option>
                                                <option value="266">Naseerabad</option>
                                                <option value="268">Naukot</option>
                                                <option value="269">Naukundi</option>
                                                <option value="270">Nawabshah</option>
                                                <option value="271">New saeedabad</option>
                                                <option value="272">Nilore</option>
                                                <option value="273">Noor kot</option>
                                                <option value="183531">Nooriabad</option>
                                                <option value="274">Noorpur nooranga</option>
                                                <option value="277">Noshero Feroze</option>
                                                <option value="267">Noudero</option>
                                                <option value="275">Nowshera</option>
                                                <option value="276">Nowshera cantt</option>
                                                <option value="183535">Nowshera Virka</option>
                                                <option value="278">Okara</option>
                                                <option value="404">Other</option>
                                                <option value="279">Padidan</option>
                                                <option value="280">Pak china fertilizer</option>
                                                <option value="281">Pak pattan sharif</option>
                                                <option value="282">Panjan kisan</option>
                                                <option value="283">Panjgoor</option>
                                                <option value="284">Pano Aqil</option>
                                                <option value="183498">Pano Aqil</option>
                                                <option value="285">Pasni</option>
                                                <option value="286">Pasrur</option>
                                                <option value="287">Pattoki</option>
                                                <option value="289">Phagwar</option>
                                                <option value="290">Phalia</option>
                                                <option value="291">Phool nagar</option>
                                                <option value="292">Piaro goth</option>
                                                <option value="294">Pind Dadan Khan</option>
                                                <option value="183534">Pindi Bhattian</option>
                                                <option value="293">Pindi bohri</option>
                                                <option value="295">Pindi gheb</option>
                                                <option value="183537">Piplan</option>
                                                <option value="296">Pir mahal</option>
                                                <option value="297">Pishin</option>
                                                <option value="298">Qalandarabad</option>
                                                <option value="183543">Qamber Ali Khan</option>
                                                <option value="299">Qasba gujrat</option>
                                                <option value="300">Qazi ahmed</option>
                                                <option value="183544">Qila Deedar Singh</option>
                                                <option value="301">Quaid Abad</option>
                                                <option value="302">Quetta</option>
                                                <option value="304">Rahim Yar Khan</option>
                                                <option value="305">Rahwali</option>
                                                <option value="306">Raiwind</option>
                                                <option value="307">Rajana</option>
                                                <option value="308">Rajanpur</option>
                                                <option value="309">Rangoo</option>
                                                <option value="310">Ranipur</option>
                                                <option value="311">Rato Dero</option>
                                                <option value="312">Rawalakot</option>
                                                <option value="314">Rawat</option>
                                                <option value="315">Renala khurd</option>
                                                <option value="316">Risalpur</option>
                                                <option value="317">Rohri</option>
                                                <option value="318">Sadiqabad</option>
                                                <option value="319">Sagri</option>
                                                <option value="320">Sahiwal</option>
                                                <option value="321">Saidu sharif</option>
                                                <option value="322">Sajawal</option>
                                                <option value="183545">Sakhi Sarwar</option>
                                                <option value="324">Samanabad</option>
                                                <option value="325">Sambrial</option>
                                                <option value="326">Samma satta</option>
                                                <option value="328">Sanghar</option>
                                                <option value="329">Sanghi</option>
                                                <option value="330">Sangla Hills</option>
                                                <option value="331">Sangote</option>
                                                <option value="183546">Sanjarpur</option>
                                                <option value="332">Sanjwal</option>
                                                <option value="334">Sara e naurang</option>
                                                <option value="333">Sara-E-Alamgir</option>
                                                <option value="338">Sarai alamgir</option>
                                                <option value="335">Sargodha</option>
                                                <option value="336">Satiana</option>
                                                <option value="337">Sehar baqlas</option>
                                                <option value="183533">Sehwan Sharif</option>
                                                <option value="183547">Sekhat</option>
                                                <option value="339">Shadiwal</option>
                                                <option value="340">Shah kot</option>
                                                <option value="341">Shahdad kot</option>
                                                <option value="342">Shahdadpur</option>
                                                <option value="183542">Shahdara</option>
                                                <option value="343">Shahpur chakar</option>
                                                <option value="183548">Shahpur Saddar</option>
                                                <option value="183549">Shakargarh</option>
                                                <option value="345">Shamsabad</option>
                                                <option value="346">Shankiari</option>
                                                <option value="347">Shedani sharif</option>
                                                <option value="344">Sheikhupura</option>
                                                <option value="348">Sheikhupura</option>
                                                <option value="349">Shemier</option>
                                                <option value="350">Shikar pur</option>
                                                <option value="351">Shorkot</option>
                                                <option value="183541">Shorkot Cantt</option>
                                                <option value="352">Shuja Abad</option>
                                                <option value="353">Sialkot</option>
                                                <option value="354">Sibi</option>
                                                <option value="355">Sihala</option>
                                                <option value="356">Sikandarabad</option>
                                                <option value="357">Sillanwali</option>
                                                <option value="358">Sita road</option>
                                                <option value="359">Skardu</option>
                                                <option value="323">Skrand</option>
                                                <option value="361">Sohawa</option>
                                                <option value="360">Sohawa district daska</option>
                                                <option value="362">Sukkur</option>
                                                <option value="327">Sumandari</option>
                                                <option value="363">Swabi</option>
                                                <option value="183499">Swat</option>
                                                <option value="364">Swatmingora</option>
                                                <option value="365">Takhtbai</option>
                                                <option value="366">Talagang</option>
                                                <option value="367">Talamba</option>
                                                <option value="368">Talhur</option>
                                                <option value="183550">Tandiliyawala</option>
                                                <option value="369">Tando adam</option>
                                                <option value="370">Tando Allah Yar</option>
                                                <option value="371">Tando jam</option>
                                                <option value="372">Tando Muhammad Khan</option>
                                                <option value="373">Tank</option>
                                                <option value="374">Tarbela</option>
                                                <option value="375">Tarmatan</option>
                                                <option value="183540">Tatlay Wali</option>
                                                <option value="376">Taunsa sharif</option>
                                                <option value="377">Taxila</option>
                                                <option value="378">Tharo shah</option>
                                                <option value="379">Thatta</option>
                                                <option value="380">Theing jattan more</option>
                                                <option value="381">Thull</option>
                                                <option value="382">Tibba sultanpur</option>
                                                <option value="383">Toba Tek Singh</option>
                                                <option value="384">Topi</option>
                                                <option value="385">Toru</option>
                                                <option value="386">Tranda Muhammad Pannah</option>
                                                <option value="387">Turbat</option>
                                                <option value="388">Ubaro</option>
                                                <option value="183500">Ubauro</option>
                                                <option value="389">Ugoke</option>
                                                <option value="390">Ukba</option>
                                                <option value="391">Umer Kot</option>
                                                <option value="392">Upper deval</option>
                                                <option value="393">Usta Muhammad</option>
                                                <option value="394">Vehari</option>
                                                <option value="395">Village Sunder</option>
                                                <option value="396">Wah cantt</option>
                                                <option value="397">Wahi hassain</option>
                                                <option value="183539">Wahn Bachran</option>
                                                <option value="398">Wan radha ram</option>
                                                <option value="399">Warah</option>
                                                <option value="400">Warburton</option>
                                                <option value="401">Wazirabad</option>
                                                <option value="402">Yazman mandi</option>
                                                <option value="183538">Zafarwal</option>
                                                <option value="403">Zahir Peer</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb30">
                                        <label class="col-md-4"> Delivery Address<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-7">
                                            <div id="delivery-address">
                                                <input class="hidden" id="new-address" name="address_id" type="radio"
                                                    value="" />

                                                <textarea cols="3" id="address" maxlength="100" name="address"
                                                    placeholder="Add Shipping Address" rows="3"
                                                    style="width:100%;">{{Auth::user()->address ?? ''}}</textarea>
                                                <input id="order_address" name="order[address]" type="hidden"
                                                    value="" />
                                                <ul class="parsley-errors-list filled" id="parsley-id-4133">
                                                    <li class="parsley-required delivery-address-error"></li>
                                                </ul>
                                            </div>
                                            <ul id="recent-address" class="delivery-address">

                                            </ul>

                                        </div>
                                    </div>
                                    <input id="order_cart_id" name="order[cart_id]" type="hidden" value="13886328" />

                                    <input id="discount_coupon_code" name="discount_coupon_code" type="hidden" />
                                    <input disabled="disabled" id="product_id" name="product_id" type="hidden"
                                        value="56" />

                                </fieldset>


                            </div>



                        </div>
                        <div class="checkout-footer row-placer mt30 clearfix">
                            <a href="{{url('order-summary')}}" class="checkout-back pull-left" name="button" type="button"> Order Summary</a>
                            <button type="submit" class="btn btn-primary pull-right" style="height: 50px;" name="button"
                              >Proceed To
                                Payment
                                Method
</button>
                        </div>
                        </form>

                    </div>
                </div>
            </section>
        <!-- </form> -->
    </div>
</div>


@endsection
