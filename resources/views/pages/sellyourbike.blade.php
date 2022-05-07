@extends('layouts.main')

@section('title')
<title> Sell Your Bike - 2Wheels</title>
@endsection

@section('contents')





<div class="clearfix"></div>
    <div class="header-space" style="height:64px;"></div>

    <!-- #TODO : Multiple checks for ad to not show -->

    <div class="hide" id="featured-tooltip-content">
        <a href='#' onclick='' class='pull-right fs12 mt15'>Learn More</a>
        <h4>Why Feature your Ad?</h4>
        <ul class='feature-popover-points'>
            <li><i class='fa fa-tick'></i>Ad appears at the top</li>
            <li><i class='fa fa-tick'></i>Ad standouts with the Featured tag</li>
            <li><i class='fa fa-tick'></i>Get more calls &amp; Sell up to 10x faster</li>
        </ul>
    </div>

    <div class="" id="main-container">

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
            <section class="nopad">
                <div class="well text-center p30 fwl" style="margin-top: 130px;">
                    <h1 class="nomargin fs28 fwb">
                        Sell your Bike With 3 Easy &amp; Simple Steps!
                    </h1>
                    <p class="fs16" style="color: #070707;">It&#39;s free and takes less than a minute</p>
                    <div class="sell-header-list">
                        <img alt=" Enter Your Bike Information"
                            src="{{asset('website')}}/assets/img/bikepic.svg" />
                        Enter Your Bike Information
                        <img alt=" Upload Photos"
                            src="{{asset('website')}}/assets/img/gallery.svg" />
                        Upload Photos
                        <img alt=" Enter Your Selling Price"
                            src="{{asset('website')}}/assets/img/tag.svg" />
                        Enter Your Selling Price
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <form accept-charset="UTF-8" action="/used-bikes" class="form-horizontal ga-used-bike-form"
                        data-parsley-validate="" enctype="multipart/form-data" id="submitAnad" method="post">
                        <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
                                value="&#x2713;" /><input name="authenticity_token" type="hidden"
                                value="/Fk5Jf4hVOvQHIysgaRtSomt6Eql1n4WCNtIvEryx+g=" /></div>



                        <div class="linked-fields sell-form-main">
                            <div class="well">
                                <fieldset class="nomargin sell-form">
                                    <legend class="nomargin noborder">Bike Information
                                        <span class="sell-mandatory">
                                            All fields marked with * are mandatory</span>
                                    </legend>



                                    <div class="form-group mt20">
                                        <label class="col-md-3" for="city"> <span id="city_label_id"> City </span><span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5">
                                            <select class="ad_listing_city_id chzn-select filterable-select prefilled"
                                                data-parsley-error-container="#city-error-message"
                                                data-parsley-error-message="Enter city name"
                                                data-parsley-required="true" data-parsley-trigger="change"
                                                data-title="City" id="used_bike_ad_listing_attributes_city_id"
                                                name="used_bike[ad_listing_attributes][city_id]"
                                                onchange="updateCityArea(this, $(&#39;.ad_listing_city_area_id&#39;),&#39;City Area&#39;); reloadChosen(&#39;#used_bike_ad_listing_attributes_city_area_id&#39;);; $(&#39;#used_bike_reg_city_id&#39;).val(this.value); reloadChosen(&#39;#used_bike_reg_city_id&#39;);"
                                                quick-change="#used_bike_ad_listing_attributes_city_area_id">
                                                <option value="">City</option>
                                                <optgroup label="Popular Cities">
                                                    <option value="409">Karachi</option>
                                                    <option value="410">Lahore</option>
                                                    <option value="408">Islamabad</option>
                                                    <option value="313">Rawalpindi</option>
                                                    <option value="288">Peshawar</option>
                                                </optgroup>
                                                <optgroup label="Other Cities">
                                                    <option value="2">Abdul Hakeem</option>
                                                    <option value="1">Abottabad</option>
                                                    <option value="3">Adda jahan khan</option>
                                                    <option value="4">Adda shaiwala</option>
                                                    <option value="183503">Ahmed Pur East</option>
                                                    <option value="183504">Ahmedpur Lamma</option>
                                                    <option value="5">Akhora khattak</option>
                                                    <option value="6">Ali chak</option>
                                                    <option value="183505">Alipur Chatta</option>
                                                    <option value="7">Allahabad</option>
                                                    <option value="8">Amangarh</option>
                                                    <option value="10">Arifwala</option>
                                                    <option value="11">Attock</option>
                                                    <option value="18">Babarloi</option>
                                                    <option value="12">Babri banda</option>
                                                    <option value="13">Badin</option>
                                                    <option value="14">Bahawal Nagar</option>
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
                                                    <option value="32">Chacklala</option>
                                                    <option value="33">Chaininda</option>
                                                    <option value="34">Chak 4 b c</option>
                                                    <option value="35">Chak 46</option>
                                                    <option value="36">Chak jamal</option>
                                                    <option value="37">Chak jhumra</option>
                                                    <option value="39">Chak Shahzad</option>
                                                    <option value="38">Chaksawari</option>
                                                    <option value="40">Chakwal</option>
                                                    <option value="41">Charsadda</option>
                                                    <option value="42">Chashma</option>
                                                    <option value="43">Chawinda</option>
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
                                                    <option value="64">Deh pathaan</option>
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
                                                    <option value="76">Doaaba</option>
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
                                                    <option value="183512">Ferozwatowan</option>
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
                                                    <option value="104">Gojar khan</option>
                                                    <option value="105">Gojra</option>
                                                    <option value="220">Goth Machi</option>
                                                    <option value="106">Goular khel</option>
                                                    <option value="107">Guddu</option>
                                                    <option value="108">Gujar Khan</option>
                                                    <option value="109">Gujranwala</option>
                                                    <option value="110">Gujrat</option>
                                                    <option value="183501">Gwadar</option>
                                                    <option value="111">Hafizabad</option>
                                                    <option value="112">Hala</option>
                                                    <option value="113">Hangu</option>
                                                    <option value="183514">Harappa</option>
                                                    <option value="114">Hari pur</option>
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
                                                    <option value="147">Jehlum</option>
                                                    <option value="406">Jhal Magsi</option>
                                                    <option value="144">Jhand</option>
                                                    <option value="145">Jhang</option>
                                                    <option value="146">Jhatta bhutta</option>
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
                                                    <option value="183525">Khair Pur Mirs</option>
                                                    <option value="175">Khairpur</option>
                                                    <option value="179">Khan Bela</option>
                                                    <option value="178">Khan qah sharif</option>
                                                    <option value="180">Khandabad</option>
                                                    <option value="181">Khanewal</option>
                                                    <option value="182">Khangarh</option>
                                                    <option value="183">Khanqah dogran</option>
                                                    <option value="184">Khanqah sharif</option>
                                                    <option value="185">Kharian</option>
                                                    <option value="183526">Khebar</option>
                                                    <option value="186">Khewra</option>
                                                    <option value="187">Khoski</option>
                                                    <option value="183494">Khudian Khas</option>
                                                    <option value="188">Khurian wala</option>
                                                    <option value="183527">Khurrianwala</option>
                                                    <option value="189">Khushab</option>
                                                    <option value="190">Khushal kot</option>
                                                    <option value="191">Khuzdar</option>
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
                                                    <option value="183529">Kotly Ak</option>
                                                    <option value="202">Kotly Loharana</option>
                                                    <option value="203">Kotri</option>
                                                    <option value="204">Kumbh</option>
                                                    <option value="205">Kundina</option>
                                                    <option value="206">Kunjah</option>
                                                    <option value="207">Kunri</option>
                                                    <option value="209">Laki marwat</option>
                                                    <option value="210">Lala musa</option>
                                                    <option value="211">Lala rukh</option>
                                                    <option value="212">Laliah</option>
                                                    <option value="213">Lalshanra</option>
                                                    <option value="214">Larkana</option>
                                                    <option value="407">Lasbella</option>
                                                    <option value="215">Lawrence pur</option>
                                                    <option value="216">Layyah</option>
                                                    <option value="217">Liaqat Pur</option>
                                                    <option value="218">Lodhran</option>
                                                    <option value="183495">Lower Dir</option>
                                                    <option value="219">Ludhan</option>
                                                    <option value="221">Madina</option>
                                                    <option value="223">Makli</option>
                                                    <option value="183496">Malakand Agency</option>
                                                    <option value="224">Malikwal</option>
                                                    <option value="225">Mamu kunjan</option>
                                                    <option value="226">Mandi bahauddin</option>
                                                    <option value="227">Mandra</option>
                                                    <option value="228">Manga mandi</option>
                                                    <option value="229">Mangal sada</option>
                                                    <option value="230">Mangi</option>
                                                    <option value="231">Mangla</option>
                                                    <option value="232">Mangowal</option>
                                                    <option value="233">Manoabad</option>
                                                    <option value="234">Mansahra</option>
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
                                                    <option value="183536">Minchanaabad</option>
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
                                                    <option value="257">Muridkay</option>
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
                                                    <option value="284">Panno Aqil</option>
                                                    <option value="183498">Panu Aqil</option>
                                                    <option value="285">Pasni</option>
                                                    <option value="286">Pasroor</option>
                                                    <option value="287">Pattoki</option>
                                                    <option value="289">Phagwar</option>
                                                    <option value="290">Phalia</option>
                                                    <option value="291">Phool nagar</option>
                                                    <option value="292">Piaro goth</option>
                                                    <option value="294">Pind Dadan Khan</option>
                                                    <option value="183534">Pindi Bhattiya</option>
                                                    <option value="293">Pindi bhohri</option>
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
                                                    <option value="303">Rabwah</option>
                                                    <option value="304">Rahim Yar Khan</option>
                                                    <option value="305">Rahwali</option>
                                                    <option value="306">Raiwind</option>
                                                    <option value="307">Rajana</option>
                                                    <option value="308">Rajanpur</option>
                                                    <option value="309">Rangoo</option>
                                                    <option value="310">Ranipur</option>
                                                    <option value="311">Rato Dero</option>
                                                    <option value="312">Rawala kot</option>
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
                                                    <option value="335">Sargodha</option>
                                                    <option value="336">Satiayana</option>
                                                    <option value="363">Sawabi</option>
                                                    <option value="337">Sehar baqlas</option>
                                                    <option value="183533">Sehwan Sharif</option>
                                                    <option value="183547">Sekhat</option>
                                                    <option value="338">Serai alamgir</option>
                                                    <option value="339">Shadiwal</option>
                                                    <option value="340">Shah kot</option>
                                                    <option value="341">Shahdad kot</option>
                                                    <option value="183542">Shahdara</option>
                                                    <option value="343">Shahpur chakar</option>
                                                    <option value="183548">Shahpur Saddar</option>
                                                    <option value="344">Shaikhupura</option>
                                                    <option value="183549">Shakargarh</option>
                                                    <option value="345">Shamsabad</option>
                                                    <option value="346">Shankiari</option>
                                                    <option value="347">Shedani sharif</option>
                                                    <option value="342">Shehdadpur</option>
                                                    <option value="349">Shemier</option>
                                                    <option value="348">Shiekhopura</option>
                                                    <option value="350">Shikar pur</option>
                                                    <option value="183541">Shorekot Cantt</option>
                                                    <option value="351">Shorkot</option>
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
                                                </optgroup>
                                            </select>
                                            <p class="nomargin" id="city-error-message"></p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <img alt="Hint" class="hint-img"
                                                    src="{{asset('website')}}/assets/img/bulb.svg" />
                                                We don&#39;t allow duplicates of same ad.
                                            </div>
                                        </div>
                                    </div>





                                    <div id="city-area-dropdown" class="form-group" style="display:none">
                                        <label class="col-md-3" for="city_area"> City Area</label>
                                        <div class="col-md-9">
                                            <select class="ad_listing_city_area_id chzn-select " data-native-menu="true"
                                                data-parsley-pattern="*" data-parsley-trigger="change"
                                                id="used_bike_ad_listing_attributes_city_area_id"
                                                name="used_bike[ad_listing_attributes][city_area_id]">
                                                <option value="">City Area</option>
                                            </select>
                                        </div>
                                    </div>

                                    <input class="apply-parsley"
                                        data-parsley-error-message="Bike Model Year is Required"
                                        data-parsley-errors-container="#car_selector_error" data-parsley-required="true"
                                        data-parsley-trigger="change" id="used_bike_model_year"
                                        name="used_bike[model_year]" type="hidden" />
                                    <!-- Modal for select Make/Model-->

                                    <div id="get-car-name" class="modal get-car-name" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="width:602px;">
                                            <div class="modal-content">
                                                <div class="modal-body clearfix">

                                                    <div class='col col-3 cat-selection year pull-left active'>
                                                        <div class='header-car-info arrow-right'>Model Year</div>
                                                        <div class='form-group nomargin'>
                                                            <ul class="fs14 get-listing year-listings">
                                                                <li class="model_year" data-year="2021"
                                                                    id="model_year_2021">
                                                                    <a href="#">
                                                                        2021 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2020"
                                                                    id="model_year_2020">
                                                                    <a href="#">
                                                                        2020 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2019"
                                                                    id="model_year_2019">
                                                                    <a href="#">
                                                                        2019 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2018"
                                                                    id="model_year_2018">
                                                                    <a href="#">
                                                                        2018 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2017"
                                                                    id="model_year_2017">
                                                                    <a href="#">
                                                                        2017 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2016"
                                                                    id="model_year_2016">
                                                                    <a href="#">
                                                                        2016 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2015"
                                                                    id="model_year_2015">
                                                                    <a href="#">
                                                                        2015 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2014"
                                                                    id="model_year_2014">
                                                                    <a href="#">
                                                                        2014 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2013"
                                                                    id="model_year_2013">
                                                                    <a href="#">
                                                                        2013 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2012"
                                                                    id="model_year_2012">
                                                                    <a href="#">
                                                                        2012 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2011"
                                                                    id="model_year_2011">
                                                                    <a href="#">
                                                                        2011 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2010"
                                                                    id="model_year_2010">
                                                                    <a href="#">
                                                                        2010 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2009"
                                                                    id="model_year_2009">
                                                                    <a href="#">
                                                                        2009 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2008"
                                                                    id="model_year_2008">
                                                                    <a href="#">
                                                                        2008 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2007"
                                                                    id="model_year_2007">
                                                                    <a href="#">
                                                                        2007 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2006"
                                                                    id="model_year_2006">
                                                                    <a href="#">
                                                                        2006 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2005"
                                                                    id="model_year_2005">
                                                                    <a href="#">
                                                                        2005 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2004"
                                                                    id="model_year_2004">
                                                                    <a href="#">
                                                                        2004 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2003"
                                                                    id="model_year_2003">
                                                                    <a href="#">
                                                                        2003 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2002"
                                                                    id="model_year_2002">
                                                                    <a href="#">
                                                                        2002 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2001"
                                                                    id="model_year_2001">
                                                                    <a href="#">
                                                                        2001 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="2000"
                                                                    id="model_year_2000">
                                                                    <a href="#">
                                                                        2000 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1999"
                                                                    id="model_year_1999">
                                                                    <a href="#">
                                                                        1999 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1998"
                                                                    id="model_year_1998">
                                                                    <a href="#">
                                                                        1998 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1997"
                                                                    id="model_year_1997">
                                                                    <a href="#">
                                                                        1997 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1996"
                                                                    id="model_year_1996">
                                                                    <a href="#">
                                                                        1996 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1995"
                                                                    id="model_year_1995">
                                                                    <a href="#">
                                                                        1995 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1994"
                                                                    id="model_year_1994">
                                                                    <a href="#">
                                                                        1994 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1993"
                                                                    id="model_year_1993">
                                                                    <a href="#">
                                                                        1993 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1992"
                                                                    id="model_year_1992">
                                                                    <a href="#">
                                                                        1992 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1991"
                                                                    id="model_year_1991">
                                                                    <a href="#">
                                                                        1991 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1990"
                                                                    id="model_year_1990">
                                                                    <a href="#">
                                                                        1990 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1989"
                                                                    id="model_year_1989">
                                                                    <a href="#">
                                                                        1989 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1988"
                                                                    id="model_year_1988">
                                                                    <a href="#">
                                                                        1988 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1987"
                                                                    id="model_year_1987">
                                                                    <a href="#">
                                                                        1987 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1986"
                                                                    id="model_year_1986">
                                                                    <a href="#">
                                                                        1986 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1985"
                                                                    id="model_year_1985">
                                                                    <a href="#">
                                                                        1985 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1984"
                                                                    id="model_year_1984">
                                                                    <a href="#">
                                                                        1984 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1983"
                                                                    id="model_year_1983">
                                                                    <a href="#">
                                                                        1983 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1982"
                                                                    id="model_year_1982">
                                                                    <a href="#">
                                                                        1982 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1981"
                                                                    id="model_year_1981">
                                                                    <a href="#">
                                                                        1981 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1980"
                                                                    id="model_year_1980">
                                                                    <a href="#">
                                                                        1980 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1979"
                                                                    id="model_year_1979">
                                                                    <a href="#">
                                                                        1979 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1978"
                                                                    id="model_year_1978">
                                                                    <a href="#">
                                                                        1978 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1977"
                                                                    id="model_year_1977">
                                                                    <a href="#">
                                                                        1977 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1976"
                                                                    id="model_year_1976">
                                                                    <a href="#">
                                                                        1976 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1975"
                                                                    id="model_year_1975">
                                                                    <a href="#">
                                                                        1975 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1974"
                                                                    id="model_year_1974">
                                                                    <a href="#">
                                                                        1974 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1973"
                                                                    id="model_year_1973">
                                                                    <a href="#">
                                                                        1973 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1972"
                                                                    id="model_year_1972">
                                                                    <a href="#">
                                                                        1972 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1971"
                                                                    id="model_year_1971">
                                                                    <a href="#">
                                                                        1971 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1970"
                                                                    id="model_year_1970">
                                                                    <a href="#">
                                                                        1970 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1969"
                                                                    id="model_year_1969">
                                                                    <a href="#">
                                                                        1969 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1968"
                                                                    id="model_year_1968">
                                                                    <a href="#">
                                                                        1968 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1967"
                                                                    id="model_year_1967">
                                                                    <a href="#">
                                                                        1967 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1966"
                                                                    id="model_year_1966">
                                                                    <a href="#">
                                                                        1966 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1965"
                                                                    id="model_year_1965">
                                                                    <a href="#">
                                                                        1965 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1964"
                                                                    id="model_year_1964">
                                                                    <a href="#">
                                                                        1964 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1963"
                                                                    id="model_year_1963">
                                                                    <a href="#">
                                                                        1963 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1962"
                                                                    id="model_year_1962">
                                                                    <a href="#">
                                                                        1962 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1961"
                                                                    id="model_year_1961">
                                                                    <a href="#">
                                                                        1961 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1960"
                                                                    id="model_year_1960">
                                                                    <a href="#">
                                                                        1960 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1959"
                                                                    id="model_year_1959">
                                                                    <a href="#">
                                                                        1959 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1958"
                                                                    id="model_year_1958">
                                                                    <a href="#">
                                                                        1958 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1957"
                                                                    id="model_year_1957">
                                                                    <a href="#">
                                                                        1957 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1956"
                                                                    id="model_year_1956">
                                                                    <a href="#">
                                                                        1956 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1955"
                                                                    id="model_year_1955">
                                                                    <a href="#">
                                                                        1955 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1954"
                                                                    id="model_year_1954">
                                                                    <a href="#">
                                                                        1954 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1953"
                                                                    id="model_year_1953">
                                                                    <a href="#">
                                                                        1953 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1952"
                                                                    id="model_year_1952">
                                                                    <a href="#">
                                                                        1952 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1951"
                                                                    id="model_year_1951">
                                                                    <a href="#">
                                                                        1951 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1950"
                                                                    id="model_year_1950">
                                                                    <a href="#">
                                                                        1950 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1949"
                                                                    id="model_year_1949">
                                                                    <a href="#">
                                                                        1949 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1948"
                                                                    id="model_year_1948">
                                                                    <a href="#">
                                                                        1948 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1947"
                                                                    id="model_year_1947">
                                                                    <a href="#">
                                                                        1947 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1946"
                                                                    id="model_year_1946">
                                                                    <a href="#">
                                                                        1946 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1945"
                                                                    id="model_year_1945">
                                                                    <a href="#">
                                                                        1945 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1944"
                                                                    id="model_year_1944">
                                                                    <a href="#">
                                                                        1944 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1943"
                                                                    id="model_year_1943">
                                                                    <a href="#">
                                                                        1943 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1942"
                                                                    id="model_year_1942">
                                                                    <a href="#">
                                                                        1942 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1941"
                                                                    id="model_year_1941">
                                                                    <a href="#">
                                                                        1941 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="model_year" data-year="1940"
                                                                    id="model_year_1940">
                                                                    <a href="#">
                                                                        1940 <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                    <div class="col col-3 cat-selection makes pull-left active">
                                                        <div class="header-car-info arrow-right">Make</div>
                                                        <div class="form-group nomargin">
                                                            <ul class="fs14 get-listing make-listings hide">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="make" data-make="16" id="make_16"><a
                                                                        href="#">Honda <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="2" id="make_2"><a
                                                                        href="#">Yamaha <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="5" id="make_5"><a
                                                                        href="#">Suzuki <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="6" id="make_6"><a
                                                                        href="#">Super Power <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="32" id="make_32"><a
                                                                        href="#">Chinese Bikes <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="15" id="make_15"><a
                                                                        href="#">Kawasaki <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="10" id="make_10"><a
                                                                        href="#">Road Prince <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="3" id="make_3"><a
                                                                        href="#">Unique <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="35" id="make_35"><a
                                                                        href="#">United <i
                                                                            class="fa fa-angle-right"></i></a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                                <li class="make" data-make="28" id="make_28"><a
                                                                        href="#">Aprilia <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="44" id="make_44"><a
                                                                        href="#">Asia Hero <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="27" id="make_27"><a
                                                                        href="#">Benelli <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="26" id="make_26"><a
                                                                        href="#">Bimota <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="25" id="make_25"><a
                                                                        href="#">Blue Star <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="46" id="make_46"><a
                                                                        href="#">BML <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="24" id="make_24"><a
                                                                        href="#">BMW <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="52" id="make_52"><a
                                                                        href="#">BSA <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="23" id="make_23"><a
                                                                        href="#">Buell <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="56" id="make_56"><a
                                                                        href="#">Can-am spyder <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="22" id="make_22"><a
                                                                        href="#">Crown <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="59" id="make_59"><a
                                                                        href="#">Derbi <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="21" id="make_21"><a
                                                                        href="#">Diamond <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="20" id="make_20"><a
                                                                        href="#">Ducati <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="33" id="make_33"><a
                                                                        href="#">DYL <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="19" id="make_19"><a
                                                                        href="#">Eagle <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="70" id="make_70"><a
                                                                        href="#">FUEGO <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="36" id="make_36"><a
                                                                        href="#">Geo Motorcyles <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="55" id="make_55"><a
                                                                        href="#">Ghani <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="48" id="make_48"><a
                                                                        href="#">Gold Star <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="18" id="make_18"><a
                                                                        href="#">Habib <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="17" id="make_17"><a
                                                                        href="#">Harley Davidson <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="29" id="make_29"><a
                                                                        href="#">Hero <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="51" id="make_51"><a
                                                                        href="#">Hi Speed <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="68" id="make_68"><a
                                                                        href="#">KEEWAY <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="14" id="make_14"><a
                                                                        href="#">KTM <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="63" id="make_63"><a
                                                                        href="#">Lifan <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="64" id="make_64"><a
                                                                        href="#">Loncin <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="30" id="make_30"><a
                                                                        href="#">Metro <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="67" id="make_67"><a
                                                                        href="#">NPTC <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="49" id="make_49"><a
                                                                        href="#">Osaka <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="71" id="make_71"><a
                                                                        href="#">OVERDRIVE <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="73" id="make_73"><a
                                                                        href="#">OW <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="13" id="make_13"><a
                                                                        href="#">Pak Hero <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="54" id="make_54"><a
                                                                        href="#">Power <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="39" id="make_39"><a
                                                                        href="#">Prince <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="41" id="make_41"><a
                                                                        href="#">QINGQI <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="12" id="make_12"><a
                                                                        href="#">Ravi <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="11" id="make_11"><a
                                                                        href="#">Razy Motors <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="66" id="make_66"><a
                                                                        href="#">Royal Enfield <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="45" id="make_45"><a
                                                                        href="#">Royal Star <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="43" id="make_43"><a
                                                                        href="#">Safari <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="62" id="make_62"><a
                                                                        href="#">Sigma <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="9" id="make_9"><a
                                                                        href="#">Sohrab <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="50" id="make_50"><a
                                                                        href="#">Sonica <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="8" id="make_8"><a
                                                                        href="#">Star <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="7" id="make_7"><a
                                                                        href="#">Super Asia <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="47" id="make_47"><a
                                                                        href="#">Super Speed <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="34" id="make_34"><a
                                                                        href="#">Super Star <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="60" id="make_60"><a
                                                                        href="#">Supreme <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="37" id="make_37"><a
                                                                        href="#">SUTLEJ <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="57" id="make_57"><a
                                                                        href="#">Tekken <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="42" id="make_42"><a
                                                                        href="#">Toyo <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="53" id="make_53"><a
                                                                        href="#">Treet <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="4" id="make_4"><a
                                                                        href="#">Triumph <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="69" id="make_69"><a
                                                                        href="#">U.M <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="40" id="make_40"><a
                                                                        href="#">Union Star <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="31" id="make_31"><a
                                                                        href="#">Vespa <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="65" id="make_65"><a
                                                                        href="#">Zongshen <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="61" id="make_61"><a
                                                                        href="#">Zontes <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                                <li class="make" data-make="1" id="make_1"><a
                                                                        href="#">ZXMCO <i
                                                                            class="fa fa-angle-right"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col col-3 cat-selection models pull-left">
                                                        <div class="header-car-info arrow-right">Model</div>
                                                        <div class="form-group nomargin">

                                                            <ul class="model-listings fs14 get-listing models_for_16"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="470" id="model_470"><a
                                                                        href="#">CG 125</a></li>
                                                                <li class="model" data-model="468" id="model_468"><a
                                                                        href="#">CD 70</a></li>
                                                                <li class="model" data-model="473" id="model_473"><a
                                                                        href="#">Pridor</a></li>
                                                                <li class="model" data-model="462" id="model_462"><a
                                                                        href="#">CG 125 Deluxe</a></li>
                                                                <li class="model" data-model="610" id="model_610"><a
                                                                        href="#">CB 150F</a></li>
                                                                <li class="model" data-model="456" id="model_456"><a
                                                                        href="#">CD 200 </a></li>
                                                                <li class="model" data-model="244" id="model_244"><a
                                                                        href="#">CD-100</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="251" id="model_251"> <a
                                                                        href="#"> Fury</a></li>
                                                                <li class="model" data-model="487" id="model_487"> <a
                                                                        href="#">50cc</a></li>
                                                                <li class="model" data-model="747" id="model_747"> <a
                                                                        href="#">Africa Twin CRF 1000L</a></li>
                                                                <li class="model" data-model="693" id="model_693"> <a
                                                                        href="#">CB 125F</a></li>
                                                                <li class="model" data-model="553" id="model_553"> <a
                                                                        href="#">CB 180</a></li>
                                                                <li class="model" data-model="632" id="model_632"> <a
                                                                        href="#">CB 250F</a></li>
                                                                <li class="model" data-model="447" id="model_447"> <a
                                                                        href="#">CB 350</a></li>
                                                                <li class="model" data-model="631" id="model_631"> <a
                                                                        href="#">CB 500X</a></li>
                                                                <li class="model" data-model="587" id="model_587"> <a
                                                                        href="#">CB 900F</a></li>
                                                                <li class="model" data-model="545" id="model_545"> <a
                                                                        href="#">CB400</a></li>
                                                                <li class="model" data-model="248" id="model_248"> <a
                                                                        href="#">CBR 1000RR</a></li>
                                                                <li class="model" data-model="528" id="model_528"> <a
                                                                        href="#">CBR 150R</a></li>
                                                                <li class="model" data-model="428" id="model_428"> <a
                                                                        href="#">CBR 400</a></li>
                                                                <li class="model" data-model="480" id="model_480"> <a
                                                                        href="#">CBR 450</a></li>
                                                                <li class="model" data-model="529" id="model_529"> <a
                                                                        href="#">CBR 500R</a></li>
                                                                <li class="model" data-model="250" id="model_250"> <a
                                                                        href="#">CBR 600RR</a></li>
                                                                <li class="model" data-model="483" id="model_483"> <a
                                                                        href="#">CBR 919 RR</a></li>
                                                                <li class="model" data-model="442" id="model_442"> <a
                                                                        href="#">CBR250 RR</a></li>
                                                                <li class="model" data-model="557" id="model_557"> <a
                                                                        href="#">CBX</a></li>
                                                                <li class="model" data-model="467" id="model_467"> <a
                                                                        href="#">CD 100 Euro 2</a></li>
                                                                <li class="model" data-model="488" id="model_488"> <a
                                                                        href="#">CD 175</a></li>
                                                                <li class="model" data-model="527" id="model_527"> <a
                                                                        href="#">CD 70 Dream</a></li>
                                                                <li class="model" data-model="540" id="model_540"> <a
                                                                        href="#">CG 125 Dream</a></li>
                                                                <li class="model" data-model="694" id="model_694"> <a
                                                                        href="#">CG 125 Special Edition</a></li>
                                                                <li class="model" data-model="261" id="model_261"> <a
                                                                        href="#">CRF 230L</a></li>
                                                                <li class="model" data-model="530" id="model_530"> <a
                                                                        href="#">CRF 250L</a></li>
                                                                <li class="model" data-model="252" id="model_252"> <a
                                                                        href="#">CRF230M</a></li>
                                                                <li class="model" data-model="469" id="model_469"> <a
                                                                        href="#">Deluxe</a></li>
                                                                <li class="model" data-model="255" id="model_255"> <a
                                                                        href="#">DN-01</a></li>
                                                                <li class="model" data-model="253" id="model_253"> <a
                                                                        href="#">Gold Wing</a></li>
                                                                <li class="model" data-model="249" id="model_249"> <a
                                                                        href="#">Interceptor</a></li>
                                                                <li class="model" data-model="546" id="model_546"> <a
                                                                        href="#">Magna</a></li>
                                                                <li class="model" data-model="479" id="model_479"> <a
                                                                        href="#">NSR 150</a></li>
                                                                <li class="model" data-model="391" id="model_391"> <a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="259" id="model_259"> <a
                                                                        href="#">Rebel</a></li>
                                                                <li class="model" data-model="523" id="model_523"> <a
                                                                        href="#">Road Master </a></li>
                                                                <li class="model" data-model="258" id="model_258"> <a
                                                                        href="#">Shadow Line</a></li>
                                                                <li class="model" data-model="254" id="model_254"> <a
                                                                        href="#">ST 1300</a></li>
                                                                <li class="model" data-model="435" id="model_435"> <a
                                                                        href="#">VFR 400 RR</a></li>
                                                                <li class="model" data-model="257" id="model_257"> <a
                                                                        href="#">VTX 1300 Line</a></li>
                                                                <li class="model" data-model="256" id="model_256"> <a
                                                                        href="#">VTX 1800 Line</a></li>
                                                                <li class="model" data-model="260" id="model_260"> <a
                                                                        href="#">XR 650L</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_2"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="574" id="model_574"><a
                                                                        href="#">YBR 125</a></li>
                                                                <li class="model" data-model="576" id="model_576"><a
                                                                        href="#">YBR 125G</a></li>
                                                                <li class="model" data-model="394" id="model_394"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="4" id="model_4"><a
                                                                        href="#">Dhoom YD-70</a></li>
                                                                <li class="model" data-model="53" id="model_53"><a
                                                                        href="#">YZF-R6</a></li>
                                                                <li class="model" data-model="74" id="model_74"><a
                                                                        href="#">4 YD 100</a></li>
                                                                <li class="model" data-model="24" id="model_24"><a
                                                                        href="#">Royale YB 100</a></li>
                                                                <li class="model" data-model="2" id="model_2"><a
                                                                        href="#">YD-100 Junoon</a></li>
                                                                <li class="model" data-model="5" id="model_5"><a
                                                                        href="#">YZF-R1</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="57" id="model_57"> <a
                                                                        href="#"> FJR1300A</a></li>
                                                                <li class="model" data-model="58" id="model_58"> <a
                                                                        href="#"> FJR1300AE</a></li>
                                                                <li class="model" data-model="443" id="model_443"> <a
                                                                        href="#"> Fzr 250 </a></li>
                                                                <li class="model" data-model="21" id="model_21"> <a
                                                                        href="#"> Majesty</a></li>
                                                                <li class="model" data-model="20" id="model_20"> <a
                                                                        href="#"> Morphous</a></li>
                                                                <li class="model" data-model="19" id="model_19"> <a
                                                                        href="#"> PW50</a></li>
                                                                <li class="model" data-model="35" id="model_35"> <a
                                                                        href="#"> Road Star Midnight</a></li>
                                                                <li class="model" data-model="33" id="model_33"> <a
                                                                        href="#"> Road Star Silverado</a></li>
                                                                <li class="model" data-model="34" id="model_34"> <a
                                                                        href="#"> Road Star Silverado S</a></li>
                                                                <li class="model" data-model="28" id="model_28"> <a
                                                                        href="#"> Stratoliner</a></li>
                                                                <li class="model" data-model="26" id="model_26"> <a
                                                                        href="#"> Stratoliner S</a></li>
                                                                <li class="model" data-model="16" id="model_16"> <a
                                                                        href="#"> TT-R110E</a></li>
                                                                <li class="model" data-model="41" id="model_41"> <a
                                                                        href="#"> V Star 1100 Classic</a></li>
                                                                <li class="model" data-model="38" id="model_38"> <a
                                                                        href="#"> V Star 1300</a></li>
                                                                <li class="model" data-model="39" id="model_39"> <a
                                                                        href="#"> V Star 1300 Tourer</a></li>
                                                                <li class="model" data-model="43" id="model_43"> <a
                                                                        href="#"> V Star 950 Tourer</a></li>
                                                                <li class="model" data-model="47" id="model_47"> <a
                                                                        href="#"> V Star Custom</a></li>
                                                                <li class="model" data-model="45" id="model_45"> <a
                                                                        href="#"> V Star Silverado</a></li>
                                                                <li class="model" data-model="22" id="model_22"> <a
                                                                        href="#"> Vino 125</a></li>
                                                                <li class="model" data-model="48" id="model_48"> <a
                                                                        href="#"> Warrior</a></li>
                                                                <li class="model" data-model="69" id="model_69"> <a
                                                                        href="#"> WR250F</a></li>
                                                                <li class="model" data-model="60" id="model_60"> <a
                                                                        href="#"> WR250R</a></li>
                                                                <li class="model" data-model="11" id="model_11"> <a
                                                                        href="#"> WR450F</a></li>
                                                                <li class="model" data-model="9" id="model_9"> <a
                                                                        href="#"> YZ125</a></li>
                                                                <li class="model" data-model="7" id="model_7"> <a
                                                                        href="#"> YZ250</a></li>
                                                                <li class="model" data-model="6" id="model_6"> <a
                                                                        href="#"> YZ450F</a></li>
                                                                <li class="model" data-model="10" id="model_10"> <a
                                                                        href="#"> YZ85</a></li>
                                                                <li class="model" data-model="432" id="model_432"> <a
                                                                        href="#">ATV Blaster</a></li>
                                                                <li class="model" data-model="52" id="model_52"> <a
                                                                        href="#">FZ1</a></li>
                                                                <li class="model" data-model="55" id="model_55"> <a
                                                                        href="#">FZ6</a></li>
                                                                <li class="model" data-model="56" id="model_56"> <a
                                                                        href="#">FZ6R</a></li>
                                                                <li class="model" data-model="436" id="model_436"> <a
                                                                        href="#">FZR 400</a></li>
                                                                <li class="model" data-model="548" id="model_548"> <a
                                                                        href="#">Mini 100 Euro II</a></li>
                                                                <li class="model" data-model="76" id="model_76"> <a
                                                                        href="#">PW80</a></li>
                                                                <li class="model" data-model="37" id="model_37"> <a
                                                                        href="#">Road Star</a></li>
                                                                <li class="model" data-model="32" id="model_32"> <a
                                                                        href="#">Road Star Midnight Silverado</a></li>
                                                                <li class="model" data-model="36" id="model_36"> <a
                                                                        href="#">Road Star S</a></li>
                                                                <li class="model" data-model="31" id="model_31"> <a
                                                                        href="#">Roadliner</a></li>
                                                                <li class="model" data-model="30" id="model_30"> <a
                                                                        href="#">Roadliner Midnight</a></li>
                                                                <li class="model" data-model="29" id="model_29"> <a
                                                                        href="#">Roadliner S</a></li>
                                                                <li class="model" data-model="25" id="model_25"> <a
                                                                        href="#">Royal Star Tour Deluxe</a></li>
                                                                <li class="model" data-model="484" id="model_484"> <a
                                                                        href="#">RX 115</a></li>
                                                                <li class="model" data-model="577" id="model_577"> <a
                                                                        href="#">Star Stryker</a></li>
                                                                <li class="model" data-model="578" id="model_578"> <a
                                                                        href="#">Star Stryker</a></li>
                                                                <li class="model" data-model="27" id="model_27"> <a
                                                                        href="#">Stratoliner Midnight</a></li>
                                                                <li class="model" data-model="73" id="model_73"> <a
                                                                        href="#">TT-R125E</a></li>
                                                                <li class="model" data-model="72" id="model_72"> <a
                                                                        href="#">TT-R125L-LE</a></li>
                                                                <li class="model" data-model="71" id="model_71"> <a
                                                                        href="#">TT-R230</a></li>
                                                                <li class="model" data-model="70" id="model_70"> <a
                                                                        href="#">TT-R250</a></li>
                                                                <li class="model" data-model="17" id="model_17"> <a
                                                                        href="#">TT-R50E</a></li>
                                                                <li class="model" data-model="62" id="model_62"> <a
                                                                        href="#">TW200</a></li>
                                                                <li class="model" data-model="49" id="model_49"> <a
                                                                        href="#">V Max</a></li>
                                                                <li class="model" data-model="42" id="model_42"> <a
                                                                        href="#">V Star 1100 Custom</a></li>
                                                                <li class="model" data-model="40" id="model_40"> <a
                                                                        href="#">V Star 1100 Silverado</a></li>
                                                                <li class="model" data-model="44" id="model_44"> <a
                                                                        href="#">V Star 950</a></li>
                                                                <li class="model" data-model="46" id="model_46"> <a
                                                                        href="#">V Star Classic</a></li>
                                                                <li class="model" data-model="23" id="model_23"> <a
                                                                        href="#">Vino Classic</a></li>
                                                                <li class="model" data-model="50" id="model_50"> <a
                                                                        href="#">Virago 250</a></li>
                                                                <li class="model" data-model="12" id="model_12"> <a
                                                                        href="#">WR250F</a></li>
                                                                <li class="model" data-model="59" id="model_59"> <a
                                                                        href="#">WR250X</a></li>
                                                                <li class="model" data-model="68" id="model_68"> <a
                                                                        href="#">WR450F</a></li>
                                                                <li class="model" data-model="550" id="model_550"> <a
                                                                        href="#">XJ6</a></li>
                                                                <li class="model" data-model="61" id="model_61"> <a
                                                                        href="#">XT250</a></li>
                                                                <li class="model" data-model="554" id="model_554"> <a
                                                                        href="#">XT660R</a></li>
                                                                <li class="model" data-model="555" id="model_555"> <a
                                                                        href="#">XT660X</a></li>
                                                                <li class="model" data-model="608" id="model_608"> <a
                                                                        href="#">YB 125Z </a></li>
                                                                <li class="model" data-model="739" id="model_739"> <a
                                                                        href="#">YB 125Z-DX</a></li>
                                                                <li class="model" data-model="535" id="model_535"> <a
                                                                        href="#">YD-125</a></li>
                                                                <li class="model" data-model="433" id="model_433"> <a
                                                                        href="#">YFR 4000</a></li>
                                                                <li class="model" data-model="66" id="model_66"> <a
                                                                        href="#">YZ125</a></li>
                                                                <li class="model" data-model="65" id="model_65"> <a
                                                                        href="#">YZ250F</a></li>
                                                                <li class="model" data-model="63" id="model_63"> <a
                                                                        href="#">YZ450</a></li>
                                                                <li class="model" data-model="67" id="model_67"> <a
                                                                        href="#">YZ85</a></li>
                                                                <li class="model" data-model="623" id="model_623"> <a
                                                                        href="#">YZF-R3</a></li>
                                                                <li class="model" data-model="54" id="model_54"> <a
                                                                        href="#">YZF-R6S</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_5"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="96" id="model_96"><a
                                                                        href="#">GS 150</a></li>
                                                                <li class="model" data-model="556" id="model_556"><a
                                                                        href="#">GD 110S</a></li>
                                                                <li class="model" data-model="100" id="model_100"><a
                                                                        href="#">GSX-R1000</a></li>
                                                                <li class="model" data-model="494" id="model_494"><a
                                                                        href="#">GD 110</a></li>
                                                                <li class="model" data-model="94" id="model_94"><a
                                                                        href="#">GS500E</a></li>
                                                                <li class="model" data-model="392" id="model_392"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="600" id="model_600"><a
                                                                        href="#">GS 150 SE</a></li>
                                                                <li class="model" data-model="102" id="model_102"><a
                                                                        href="#">GSX-R600</a></li>
                                                                <li class="model" data-model="101" id="model_101"><a
                                                                        href="#">GSX-R750</a></li>
                                                                <li class="model" data-model="430" id="model_430"><a
                                                                        href="#">Sprinter</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="128" id="model_128"> <a
                                                                        href="#">B-King</a></li>
                                                                <li class="model" data-model="129" id="model_129"> <a
                                                                        href="#">B-King ABS</a></li>
                                                                <li class="model" data-model="579" id="model_579"> <a
                                                                        href="#">Bandit</a></li>
                                                                <li class="model" data-model="130" id="model_130"> <a
                                                                        href="#">Bandit 1250S</a></li>
                                                                <li class="model" data-model="131" id="model_131"> <a
                                                                        href="#">Bandit 1250S ABS</a></li>
                                                                <li class="model" data-model="491" id="model_491"> <a
                                                                        href="#">Bandit 250VC</a></li>
                                                                <li class="model" data-model="492" id="model_492"> <a
                                                                        href="#">Bandit 400VC</a></li>
                                                                <li class="model" data-model="113" id="model_113"> <a
                                                                        href="#">Boulevard C109R</a></li>
                                                                <li class="model" data-model="114" id="model_114"> <a
                                                                        href="#">Boulevard C109RT</a></li>
                                                                <li class="model" data-model="117" id="model_117"> <a
                                                                        href="#">Boulevard C50</a></li>
                                                                <li class="model" data-model="118" id="model_118"> <a
                                                                        href="#">Boulevard C50 Special Edition</a></li>
                                                                <li class="model" data-model="119" id="model_119"> <a
                                                                        href="#">Boulevard C50T</a></li>
                                                                <li class="model" data-model="115" id="model_115"> <a
                                                                        href="#">Boulevard C90</a></li>
                                                                <li class="model" data-model="116" id="model_116"> <a
                                                                        href="#">Boulevard C90T</a></li>
                                                                <li class="model" data-model="107" id="model_107"> <a
                                                                        href="#">Boulevard M109R</a></li>
                                                                <li class="model" data-model="108" id="model_108"> <a
                                                                        href="#">Boulevard M109R Limited Edition</a>
                                                                </li>
                                                                <li class="model" data-model="109" id="model_109"> <a
                                                                        href="#">Boulevard M109R2</a></li>
                                                                <li class="model" data-model="111" id="model_111"> <a
                                                                        href="#">Boulevard M50</a></li>
                                                                <li class="model" data-model="112" id="model_112"> <a
                                                                        href="#">Boulevard M50 Special Edition</a></li>
                                                                <li class="model" data-model="110" id="model_110"> <a
                                                                        href="#">Boulevard M90</a></li>
                                                                <li class="model" data-model="122" id="model_122"> <a
                                                                        href="#">Boulevard S40</a></li>
                                                                <li class="model" data-model="121" id="model_121"> <a
                                                                        href="#">Boulevard S50</a></li>
                                                                <li class="model" data-model="120" id="model_120"> <a
                                                                        href="#">Boulevard S83</a></li>
                                                                <li class="model" data-model="153" id="model_153"> <a
                                                                        href="#">Burgman 400</a></li>
                                                                <li class="model" data-model="154" id="model_154"> <a
                                                                        href="#">Burgman 400 ABS</a></li>
                                                                <li class="model" data-model="151" id="model_151"> <a
                                                                        href="#">Burgman 650</a></li>
                                                                <li class="model" data-model="152" id="model_152"> <a
                                                                        href="#">Burgman 650 Exec</a></li>
                                                                <li class="model" data-model="144" id="model_144"> <a
                                                                        href="#">DR-Z.DR-Z400E</a></li>
                                                                <li class="model" data-model="146" id="model_146"> <a
                                                                        href="#">DR-Z125</a></li>
                                                                <li class="model" data-model="148" id="model_148"> <a
                                                                        href="#">DR-Z125</a></li>
                                                                <li class="model" data-model="145" id="model_145"> <a
                                                                        href="#">DR-Z125L</a></li>
                                                                <li class="model" data-model="141" id="model_141"> <a
                                                                        href="#">DR-Z400S</a></li>
                                                                <li class="model" data-model="143" id="model_143"> <a
                                                                        href="#">DR-Z400SM</a></li>
                                                                <li class="model" data-model="147" id="model_147"> <a
                                                                        href="#">DR-Z70</a></li>
                                                                <li class="model" data-model="142" id="model_142"> <a
                                                                        href="#">DR200SE</a></li>
                                                                <li class="model" data-model="140" id="model_140"> <a
                                                                        href="#">DR650SE</a></li>
                                                                <li class="model" data-model="691" id="model_691"> <a
                                                                        href="#">Gixxer 150</a></li>
                                                                <li class="model" data-model="134" id="model_134"> <a
                                                                        href="#">Gladius</a></li>
                                                                <li class="model" data-model="524" id="model_524"> <a
                                                                        href="#">GN 250</a></li>
                                                                <li class="model" data-model="536" id="model_536"> <a
                                                                        href="#">GP 100</a></li>
                                                                <li class="model" data-model="624" id="model_624"> <a
                                                                        href="#">GR 150</a></li>
                                                                <li class="model" data-model="95" id="model_95"> <a
                                                                        href="#">GS-125</a></li>
                                                                <li class="model" data-model="106" id="model_106"> <a
                                                                        href="#">GS500F</a></li>
                                                                <li class="model" data-model="455" id="model_455"> <a
                                                                        href="#">GS750</a></li>
                                                                <li class="model" data-model="457" id="model_457"> <a
                                                                        href="#">GSF 400</a></li>
                                                                <li class="model" data-model="564" id="model_564"> <a
                                                                        href="#">GSF 650</a></li>
                                                                <li class="model" data-model="474" id="model_474"> <a
                                                                        href="#">GSX600F Katana</a></li>
                                                                <li class="model" data-model="103" id="model_103"> <a
                                                                        href="#">GSX650F</a></li>
                                                                <li class="model" data-model="441" id="model_441"> <a
                                                                        href="#">Gsxr 250cc</a></li>
                                                                <li class="model" data-model="135" id="model_135"> <a
                                                                        href="#">GZ250</a></li>
                                                                <li class="model" data-model="500" id="model_500"> <a
                                                                        href="#">Hayabusa</a></li>
                                                                <li class="model" data-model="498" id="model_498"> <a
                                                                        href="#">Inazuma</a></li>
                                                                <li class="model" data-model="605" id="model_605"> <a
                                                                        href="#">Inazuma Aegis</a></li>
                                                                <li class="model" data-model="499" id="model_499"> <a
                                                                        href="#">Intruder</a></li>
                                                                <li class="model" data-model="504" id="model_504"> <a
                                                                        href="#">Lt-Z 400k9</a></li>
                                                                <li class="model" data-model="466" id="model_466"> <a
                                                                        href="#">Raider 110</a></li>
                                                                <li class="model" data-model="485" id="model_485"> <a
                                                                        href="#">RG 125</a></li>
                                                                <li class="model" data-model="124" id="model_124"> <a
                                                                        href="#">RM-Z250</a></li>
                                                                <li class="model" data-model="123" id="model_123"> <a
                                                                        href="#">RM-Z450</a></li>
                                                                <li class="model" data-model="125" id="model_125"> <a
                                                                        href="#">RM250</a></li>
                                                                <li class="model" data-model="127" id="model_127"> <a
                                                                        href="#">RM85</a></li>
                                                                <li class="model" data-model="126" id="model_126"> <a
                                                                        href="#">RM85L</a></li>
                                                                <li class="model" data-model="98" id="model_98"> <a
                                                                        href="#">SHOGUN</a></li>
                                                                <li class="model" data-model="97" id="model_97"> <a
                                                                        href="#">Sprinter ECO</a></li>
                                                                <li class="model" data-model="132" id="model_132"> <a
                                                                        href="#">SV650</a></li>
                                                                <li class="model" data-model="133" id="model_133"> <a
                                                                        href="#">SV650 ABS</a></li>
                                                                <li class="model" data-model="104" id="model_104"> <a
                                                                        href="#">SV650SF</a></li>
                                                                <li class="model" data-model="105" id="model_105"> <a
                                                                        href="#">SV650SF ABS</a></li>
                                                                <li class="model" data-model="136" id="model_136"> <a
                                                                        href="#">TU250X</a></li>
                                                                <li class="model" data-model="137" id="model_137"> <a
                                                                        href="#">V-Strom 1000</a></li>
                                                                <li class="model" data-model="138" id="model_138"> <a
                                                                        href="#">V-Strom 650</a></li>
                                                                <li class="model" data-model="139" id="model_139"> <a
                                                                        href="#">V-Strom 650 ABS</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_6"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="157" id="model_157"><a
                                                                        href="#">SP 70</a></li>
                                                                <li class="model" data-model="405" id="model_405"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="619" id="model_619"><a
                                                                        href="#">PK 150 Archi </a></li>
                                                                <li class="model" data-model="589" id="model_589"><a
                                                                        href="#">SP 125 Delux</a></li>
                                                                <li class="model" data-model="156" id="model_156"><a
                                                                        href="#">SP 125</a></li>
                                                                <li class="model" data-model="155" id="model_155"><a
                                                                        href="#">SP-100</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="746" id="model_746"> <a
                                                                        href="#">Deluxe 70</a></li>
                                                                <li class="model" data-model="639" id="model_639"> <a
                                                                        href="#">Leo 200</a></li>
                                                                <li class="model" data-model="637" id="model_637"> <a
                                                                        href="#">SP 110 Cheetah</a></li>
                                                                <li class="model" data-model="638" id="model_638"> <a
                                                                        href="#">SP 150 Archi</a></li>
                                                                <li class="model" data-model="740" id="model_740"> <a
                                                                        href="#">SP 70 Tokyo</a></li>
                                                                <li class="model" data-model="661" id="model_661"> <a
                                                                        href="#">Sultan SP 250</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_32"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="461" id="model_461"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="450" id="model_450"><a
                                                                        href="#">150cc</a></li>
                                                                <li class="model" data-model="586" id="model_586"><a
                                                                        href="#">70</a></li>
                                                                <li class="model" data-model="588" id="model_588"><a
                                                                        href="#">125</a></li>
                                                                <li class="model" data-model="444" id="model_444"><a
                                                                        href="#">Lifan</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="719" id="model_719"> <a
                                                                        href="#">OW Ninja 250cc</a></li>
                                                                <li class="model" data-model="720" id="model_720"> <a
                                                                        href="#">OW Ninja 300cc</a></li>
                                                                <li class="model" data-model="721" id="model_721"> <a
                                                                        href="#">OW Ninja 400cc</a></li>
                                                                <li class="model" data-model="725" id="model_725"> <a
                                                                        href="#">OW R3 250cc</a></li>
                                                                <li class="model" data-model="726" id="model_726"> <a
                                                                        href="#">OW R3 300cc</a></li>
                                                                <li class="model" data-model="727" id="model_727"> <a
                                                                        href="#">OW R3 400cc</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_15"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="477" id="model_477"><a
                                                                        href="#">GTO 125</a></li>
                                                                <li class="model" data-model="393" id="model_393"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="429" id="model_429"><a
                                                                        href="#">GTO</a></li>
                                                                <li class="model" data-model="203" id="model_203"><a
                                                                        href="#">Ninja ZX-10R</a></li>
                                                                <li class="model" data-model="580" id="model_580"><a
                                                                        href="#">Ninja ZX300</a></li>
                                                                <li class="model" data-model="478" id="model_478"><a
                                                                        href="#">GTO 100</a></li>
                                                                <li class="model" data-model="476" id="model_476"><a
                                                                        href="#">GTO 110</a></li>
                                                                <li class="model" data-model="532" id="model_532"><a
                                                                        href="#">GT 550</a></li>
                                                                <li class="model" data-model="193" id="model_193"><a
                                                                        href="#">Ninja 250R</a></li>
                                                                <li class="model" data-model="201" id="model_201"><a
                                                                        href="#">Ninja ZX-6R</a></li>
                                                                <li class="model" data-model="200" id="model_200"><a
                                                                        href="#">Z1000</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="206" id="model_206"> <a
                                                                        href="#">Concours 14</a></li>
                                                                <li class="model" data-model="209" id="model_209"> <a
                                                                        href="#">Eliminator 125</a></li>
                                                                <li class="model" data-model="544" id="model_544"> <a
                                                                        href="#">Eliminator ZL 750 </a></li>
                                                                <li class="model" data-model="196" id="model_196"> <a
                                                                        href="#">ER-6n</a></li>
                                                                <li class="model" data-model="486" id="model_486"> <a
                                                                        href="#">GTO 70</a></li>
                                                                <li class="model" data-model="641" id="model_641"> <a
                                                                        href="#">KDX200</a></li>
                                                                <li class="model" data-model="223" id="model_223"> <a
                                                                        href="#">KLR650</a></li>
                                                                <li class="model" data-model="232" id="model_232"> <a
                                                                        href="#">KLX110</a></li>
                                                                <li class="model" data-model="233" id="model_233"> <a
                                                                        href="#">KLX110 Monster Energy</a></li>
                                                                <li class="model" data-model="228" id="model_228"> <a
                                                                        href="#">KLX140</a></li>
                                                                <li class="model" data-model="229" id="model_229"> <a
                                                                        href="#">KLX140 Monster Energy</a></li>
                                                                <li class="model" data-model="230" id="model_230"> <a
                                                                        href="#">KLX140L</a></li>
                                                                <li class="model" data-model="231" id="model_231"> <a
                                                                        href="#">KLX140L Monster Energy</a></li>
                                                                <li class="model" data-model="224" id="model_224"> <a
                                                                        href="#">KLX250S</a></li>
                                                                <li class="model" data-model="199" id="model_199"> <a
                                                                        href="#">KLX250SF</a></li>
                                                                <li class="model" data-model="227" id="model_227"> <a
                                                                        href="#">KLX450R</a></li>
                                                                <li class="model" data-model="238" id="model_238"> <a
                                                                        href="#">KX100</a></li>
                                                                <li class="model" data-model="239" id="model_239"> <a
                                                                        href="#">KX100 Monster Energy</a></li>
                                                                <li class="model" data-model="240" id="model_240"> <a
                                                                        href="#">KX250F</a></li>
                                                                <li class="model" data-model="241" id="model_241"> <a
                                                                        href="#">KX250F Monster Energy</a></li>
                                                                <li class="model" data-model="242" id="model_242"> <a
                                                                        href="#">KX450F</a></li>
                                                                <li class="model" data-model="243" id="model_243"> <a
                                                                        href="#">KX450F Monster Energy</a></li>
                                                                <li class="model" data-model="234" id="model_234"> <a
                                                                        href="#">KX65</a></li>
                                                                <li class="model" data-model="235" id="model_235"> <a
                                                                        href="#">KX65 Monster Energy</a></li>
                                                                <li class="model" data-model="236" id="model_236"> <a
                                                                        href="#">KX85</a></li>
                                                                <li class="model" data-model="237" id="model_237"> <a
                                                                        href="#">KX85 Monster Energy</a></li>
                                                                <li class="model" data-model="194" id="model_194"> <a
                                                                        href="#">Ninja 500R</a></li>
                                                                <li class="model" data-model="195" id="model_195"> <a
                                                                        href="#">Ninja 650R</a></li>
                                                                <li class="model" data-model="753" id="model_753"> <a
                                                                        href="#">Ninja H2</a></li>
                                                                <li class="model" data-model="755" id="model_755"> <a
                                                                        href="#">Ninja H2 R</a></li>
                                                                <li class="model" data-model="754" id="model_754"> <a
                                                                        href="#">Ninja H2 SX</a></li>
                                                                <li class="model" data-model="204" id="model_204"> <a
                                                                        href="#">Ninja ZX-14</a></li>
                                                                <li class="model" data-model="205" id="model_205"> <a
                                                                        href="#">Ninja ZX-14 Monster Energy</a></li>
                                                                <li class="model" data-model="202" id="model_202"> <a
                                                                        href="#">Ninja ZX-6R Monster Energy</a></li>
                                                                <li class="model" data-model="226" id="model_226"> <a
                                                                        href="#">Super Sherpa</a></li>
                                                                <li class="model" data-model="197" id="model_197"> <a
                                                                        href="#">Versys</a></li>
                                                                <li class="model" data-model="214" id="model_214"> <a
                                                                        href="#">Vulcan 1500 Classic</a></li>
                                                                <li class="model" data-model="217" id="model_217"> <a
                                                                        href="#">Vulcan 1600 Classic</a></li>
                                                                <li class="model" data-model="215" id="model_215"> <a
                                                                        href="#">Vulcan 1600 Mean Streak</a></li>
                                                                <li class="model" data-model="216" id="model_216"> <a
                                                                        href="#">Vulcan 1600 Nomad</a></li>
                                                                <li class="model" data-model="218" id="model_218"> <a
                                                                        href="#">Vulcan 1700 Classic</a></li>
                                                                <li class="model" data-model="219" id="model_219"> <a
                                                                        href="#">Vulcan 1700 Classic LT</a></li>
                                                                <li class="model" data-model="207" id="model_207"> <a
                                                                        href="#">Vulcan 1700 Nomad</a></li>
                                                                <li class="model" data-model="208" id="model_208"> <a
                                                                        href="#">Vulcan 1700 Voyager</a></li>
                                                                <li class="model" data-model="220" id="model_220"> <a
                                                                        href="#">Vulcan 2000</a></li>
                                                                <li class="model" data-model="221" id="model_221"> <a
                                                                        href="#">Vulcan 2000 Classic</a></li>
                                                                <li class="model" data-model="222" id="model_222"> <a
                                                                        href="#">Vulcan 2000 Classic LT</a></li>
                                                                <li class="model" data-model="210" id="model_210"> <a
                                                                        href="#">Vulcan 500 LTD</a></li>
                                                                <li class="model" data-model="211" id="model_211"> <a
                                                                        href="#">Vulcan 900 Classic</a></li>
                                                                <li class="model" data-model="212" id="model_212"> <a
                                                                        href="#">Vulcan 900 Classic LT</a></li>
                                                                <li class="model" data-model="213" id="model_213"> <a
                                                                        href="#">Vulcan 900 Custom</a></li>
                                                                <li class="model" data-model="636" id="model_636"> <a
                                                                        href="#">ZL900 Eliminator</a></li>
                                                                <li class="model" data-model="537" id="model_537"> <a
                                                                        href="#">ZZR-250</a></li>
                                                                <li class="model" data-model="198" id="model_198"> <a
                                                                        href="#">ZZR600</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_10"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="164" id="model_164"><a
                                                                        href="#">RP 70 Passion</a></li>
                                                                <li class="model" data-model="590" id="model_590"><a
                                                                        href="#">Wego 150</a></li>
                                                                <li class="model" data-model="591" id="model_591"><a
                                                                        href="#">RP 125 Euro II</a></li>
                                                                <li class="model" data-model="409" id="model_409"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="596" id="model_596"><a
                                                                        href="#">Robinson 150</a></li>
                                                                <li class="model" data-model="519" id="model_519"><a
                                                                        href="#">RP 110</a></li>
                                                                <li class="model" data-model="531" id="model_531"><a
                                                                        href="#">Bullet</a></li>
                                                                <li class="model" data-model="595" id="model_595"><a
                                                                        href="#">Twister 125</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="634" id="model_634"> <a
                                                                        href="#">RX3</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_3"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="78" id="model_78"><a
                                                                        href="#">Xtreme UD 70</a></li>
                                                                <li class="model" data-model="452" id="model_452"><a
                                                                        href="#">UD 100</a></li>
                                                                <li class="model" data-model="402" id="model_402"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="501" id="model_501"><a
                                                                        href="#">UD 125</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="622" id="model_622"> <a
                                                                        href="#">Crazer UD-150</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_35"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="458" id="model_458"><a
                                                                        href="#">US 70</a></li>
                                                                <li class="model" data-model="518" id="model_518"><a
                                                                        href="#">US 100</a></li>
                                                                <li class="model" data-model="459" id="model_459"><a
                                                                        href="#">US 125 Euro II</a></li>
                                                                <li class="model" data-model="602" id="model_602"><a
                                                                        href="#">Us 100 Jazba</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="665" id="model_665"> <a
                                                                        href="#">US 125 Deluxe</a></li>
                                                                <li class="model" data-model="635" id="model_635"> <a
                                                                        href="#">US 150 Ultimate Thrill</a></li>
                                                                <li class="model" data-model="664" id="model_664"> <a
                                                                        href="#">US Scooty 100</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_28"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="427" id="model_427"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="363" id="model_363"><a
                                                                        href="#">MANA 850</a></li>
                                                                <li class="model" data-model="364" id="model_364"><a
                                                                        href="#">MANA 850 ABS</a></li>
                                                                <li class="model" data-model="387" id="model_387"><a
                                                                        href="#">SPORTCITY CUBE 125 - 200 - 300</a></li>
                                                                <li class="model" data-model="372" id="model_372"><a
                                                                        href="#">RS 125</a></li>
                                                                <li class="model" data-model="360" id="model_360"><a
                                                                        href="#">RSV4 Factory</a></li>
                                                                <li class="model" data-model="366" id="model_366"><a
                                                                        href="#">DORSODURO 750</a></li>
                                                                <li class="model" data-model="367" id="model_367"><a
                                                                        href="#">DORSODURO 750 ABS</a></li>
                                                                <li class="model" data-model="373" id="model_373"><a
                                                                        href="#">RS 50</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="711" id="model_711"> <a
                                                                        href="#">DORSODURO-900</a></li>
                                                                <li class="model" data-model="365" id="model_365"> <a
                                                                        href="#">MANA 850 GT ABS</a></li>
                                                                <li class="model" data-model="380" id="model_380"> <a
                                                                        href="#">MXV 4.5</a></li>
                                                                <li class="model" data-model="374" id="model_374"> <a
                                                                        href="#">PEGASO 650</a></li>
                                                                <li class="model" data-model="375" id="model_375"> <a
                                                                        href="#">PEGASO 650 FACTORY</a></li>
                                                                <li class="model" data-model="376" id="model_376"> <a
                                                                        href="#">PEGASO 650 TRAIL</a></li>
                                                                <li class="model" data-model="748" id="model_748"> <a
                                                                        href="#">RS 660</a></li>
                                                                <li class="model" data-model="708" id="model_708"> <a
                                                                        href="#">RSV4</a></li>
                                                                <li class="model" data-model="378" id="model_378"> <a
                                                                        href="#">RX 125</a></li>
                                                                <li class="model" data-model="379" id="model_379"> <a
                                                                        href="#">RX 50</a></li>
                                                                <li class="model" data-model="377" id="model_377"> <a
                                                                        href="#">RXV 4.5 - 5.5</a></li>
                                                                <li class="model" data-model="368" id="model_368"> <a
                                                                        href="#">SHIVER 750</a></li>
                                                                <li class="model" data-model="369" id="model_369"> <a
                                                                        href="#">SHIVER 750 ABS</a></li>
                                                                <li class="model" data-model="370" id="model_370"> <a
                                                                        href="#">SHIVER 750 GT</a></li>
                                                                <li class="model" data-model="371" id="model_371"> <a
                                                                        href="#">SHIVER 750 GT ABS</a></li>
                                                                <li class="model" data-model="710" id="model_710"> <a
                                                                        href="#">SHIVER 900</a></li>
                                                                <li class="model" data-model="388" id="model_388"> <a
                                                                        href="#">SPORTCITY ONE 50 4t - 125 4t</a></li>
                                                                <li class="model" data-model="389" id="model_389"> <a
                                                                        href="#">SPORTCITY ONE 50 STREET</a></li>
                                                                <li class="model" data-model="384" id="model_384"> <a
                                                                        href="#">SR 50 R</a></li>
                                                                <li class="model" data-model="385" id="model_385"> <a
                                                                        href="#">SR 50 R FACTORY</a></li>
                                                                <li class="model" data-model="386" id="model_386"> <a
                                                                        href="#">SR 50 STREET</a></li>
                                                                <li class="model" data-model="382" id="model_382"> <a
                                                                        href="#">SX 125</a></li>
                                                                <li class="model" data-model="383" id="model_383"> <a
                                                                        href="#">SX 50</a></li>
                                                                <li class="model" data-model="381" id="model_381"> <a
                                                                        href="#">SXV 4.5 - 5.5</a></li>
                                                                <li class="model" data-model="709" id="model_709"> <a
                                                                        href="#">TUONO 1000 </a></li>
                                                                <li class="model" data-model="362" id="model_362"> <a
                                                                        href="#">TUONO 1000 R</a></li>
                                                                <li class="model" data-model="361" id="model_361"> <a
                                                                        href="#">TUONO 1000 R FACTORY</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_44"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="502" id="model_502"><a
                                                                        href="#">CDI 70</a></li>
                                                                <li class="model" data-model="511" id="model_511"><a
                                                                        href="#">125cc Self Start</a></li>
                                                                <li class="model" data-model="507" id="model_507"><a
                                                                        href="#">125</a></li>
                                                                <li class="model" data-model="506" id="model_506"><a
                                                                        href="#">Deluxe 70</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_27"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="609" id="model_609"><a
                                                                        href="#">TNT 25</a></li>
                                                                <li class="model" data-model="426" id="model_426"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="350" id="model_350"><a
                                                                        href="#">2ue 756</a></li>
                                                                <li class="model" data-model="351" id="model_351"><a
                                                                        href="#">Cafe Racer 1130</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="735" id="model_735"> <a
                                                                        href="#">180S</a></li>
                                                                <li class="model" data-model="626" id="model_626"> <a
                                                                        href="#">302 R</a></li>
                                                                <li class="model" data-model="347" id="model_347"> <a
                                                                        href="#">BX 449 Cross</a></li>
                                                                <li class="model" data-model="348" id="model_348"> <a
                                                                        href="#">BX 505 Enduro</a></li>
                                                                <li class="model" data-model="349" id="model_349"> <a
                                                                        href="#">BX 570 Motard</a></li>
                                                                <li class="model" data-model="724" id="model_724"> <a
                                                                        href="#">Imperiale 400</a></li>
                                                                <li class="model" data-model="352" id="model_352"> <a
                                                                        href="#">Titanium 07</a></li>
                                                                <li class="model" data-model="640" id="model_640"> <a
                                                                        href="#">TNT 150i</a></li>
                                                                <li class="model" data-model="625" id="model_625"> <a
                                                                        href="#">TNT 600</a></li>
                                                                <li class="model" data-model="353" id="model_353"> <a
                                                                        href="#">Tornado Naked Tree 1130 Sport Evo</a>
                                                                </li>
                                                                <li class="model" data-model="354" id="model_354"> <a
                                                                        href="#">Tornado Naked Tree 899</a></li>
                                                                <li class="model" data-model="355" id="model_355"> <a
                                                                        href="#">Tornado Naked Tree 899 S</a></li>
                                                                <li class="model" data-model="356" id="model_356"> <a
                                                                        href="#">Tornado Tree 1130</a></li>
                                                                <li class="model" data-model="358" id="model_358"> <a
                                                                        href="#">Tre 1130 K</a></li>
                                                                <li class="model" data-model="359" id="model_359"> <a
                                                                        href="#">Tre 1130 K Amazonas</a></li>
                                                                <li class="model" data-model="357" id="model_357"> <a
                                                                        href="#">Tre 899 K</a></li>
                                                                <li class="model" data-model="723" id="model_723"> <a
                                                                        href="#">TRK 251</a></li>
                                                                <li class="model" data-model="662" id="model_662"> <a
                                                                        href="#">TRK 502</a></li>
                                                                <li class="model" data-model="722" id="model_722"> <a
                                                                        href="#">TRK 502X</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_26"
                                                                style="display:none">


                                                                <li class="model" data-model="343" id="model_343"> <a
                                                                        href="#">DB5R</a></li>
                                                                <li class="model" data-model="342" id="model_342"> <a
                                                                        href="#">DB5S</a></li>
                                                                <li class="model" data-model="344" id="model_344"> <a
                                                                        href="#">DB6 Delirio</a></li>
                                                                <li class="model" data-model="345" id="model_345"> <a
                                                                        href="#">DB6 R</a></li>
                                                                <li class="model" data-model="346" id="model_346"> <a
                                                                        href="#">DB7</a></li>
                                                                <li class="model" data-model="425" id="model_425"> <a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="341" id="model_341"> <a
                                                                        href="#">Tesi3D</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_25"
                                                                style="display:none">


                                                                <li class="model" data-model="340" id="model_340"> <a
                                                                        href="#">BS 70</a></li>
                                                                <li class="model" data-model="424" id="model_424"> <a
                                                                        href="#">Other</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_46"
                                                                style="display:none">


                                                                <li class="model" data-model="517" id="model_517"> <a
                                                                        href="#">BM 100</a></li>
                                                                <li class="model" data-model="516" id="model_516"> <a
                                                                        href="#">BM 70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_24"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="330" id="model_330"><a
                                                                        href="#">F 800 GS</a></li>
                                                                <li class="model" data-model="581" id="model_581"><a
                                                                        href="#">S1000RR</a></li>
                                                                <li class="model" data-model="612" id="model_612"><a
                                                                        href="#">F 700 GS</a></li>
                                                                <li class="model" data-model="335" id="model_335"><a
                                                                        href="#">K 1300 S</a></li>
                                                                <li class="model" data-model="332" id="model_332"><a
                                                                        href="#">R 1200 GS Adventure</a></li>
                                                                <li class="model" data-model="390" id="model_390"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="329" id="model_329"><a
                                                                        href="#">F 650 GS</a></li>
                                                                <li class="model" data-model="328" id="model_328"><a
                                                                        href="#">G 650 GS</a></li>
                                                                <li class="model" data-model="583" id="model_583"><a
                                                                        href="#">HP 4 </a></li>
                                                                <li class="model" data-model="331" id="model_331"><a
                                                                        href="#">R 1200 GS</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="336" id="model_336"> <a
                                                                        href="#">F 800 ST</a></li>
                                                                <li class="model" data-model="749" id="model_749"> <a
                                                                        href="#">F 850 GS</a></li>
                                                                <li class="model" data-model="327" id="model_327"> <a
                                                                        href="#">G 450 X</a></li>
                                                                <li class="model" data-model="333" id="model_333"> <a
                                                                        href="#">G 650 Xcountry</a></li>
                                                                <li class="model" data-model="325" id="model_325"> <a
                                                                        href="#">HP 2 Megamoto</a></li>
                                                                <li class="model" data-model="326" id="model_326"> <a
                                                                        href="#">HP 2 Sport</a></li>
                                                                <li class="model" data-model="582" id="model_582"> <a
                                                                        href="#">HP 4 COMPETITION</a></li>
                                                                <li class="model" data-model="338" id="model_338"> <a
                                                                        href="#">K 1200 LT</a></li>
                                                                <li class="model" data-model="339" id="model_339"> <a
                                                                        href="#">K 1300 GT</a></li>
                                                                <li class="model" data-model="751" id="model_751"> <a
                                                                        href="#">K 1600 GT</a></li>
                                                                <li class="model" data-model="752" id="model_752"> <a
                                                                        href="#">K 1600 GTL</a></li>
                                                                <li class="model" data-model="533" id="model_533"> <a
                                                                        href="#">R 1100 GS</a></li>
                                                                <li class="model" data-model="334" id="model_334"> <a
                                                                        href="#">R 1200 R</a></li>
                                                                <li class="model" data-model="337" id="model_337"> <a
                                                                        href="#">R 1200 RT</a></li>
                                                                <li class="model" data-model="750" id="model_750"> <a
                                                                        href="#">R 1250 GS Adventure</a></li>
                                                                <li class="model" data-model="611" id="model_611"> <a
                                                                        href="#">R NINE T</a></li>
                                                                <li class="model" data-model="613" id="model_613"> <a
                                                                        href="#">R1200 GS Adventure</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_52"
                                                                style="display:none">


                                                                <li class="model" data-model="559" id="model_559"> <a
                                                                        href="#">A 10</a></li>
                                                                <li class="model" data-model="558" id="model_558"> <a
                                                                        href="#">B 20</a></li>
                                                                <li class="model" data-model="560" id="model_560"> <a
                                                                        href="#">REGAL CLUBMAN SR</a></li>
                                                                <li class="model" data-model="561" id="model_561"> <a
                                                                        href="#">REGAL G40SR</a></li>
                                                                <li class="model" data-model="562" id="model_562"> <a
                                                                        href="#">REGAl Gold SR</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_23"
                                                                style="display:none">


                                                                <li class="model" data-model="321" id="model_321"> <a
                                                                        href="#">1125CR</a></li>
                                                                <li class="model" data-model="317" id="model_317"> <a
                                                                        href="#">1125R</a></li>
                                                                <li class="model" data-model="318" id="model_318"> <a
                                                                        href="#">Firebolt XB12R</a></li>
                                                                <li class="model" data-model="422" id="model_422"> <a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="319" id="model_319"> <a
                                                                        href="#">Ulysses XB12X</a></li>
                                                                <li class="model" data-model="320" id="model_320"> <a
                                                                        href="#">Ulysses XB12XT</a></li>
                                                                <li class="model" data-model="323" id="model_323"> <a
                                                                        href="#">XB12Scg</a></li>
                                                                <li class="model" data-model="322" id="model_322"> <a
                                                                        href="#">XB12Ss</a></li>
                                                                <li class="model" data-model="324" id="model_324"> <a
                                                                        href="#">XB9SX</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_56"
                                                                style="display:none">


                                                                <li class="model" data-model="601" id="model_601"> <a
                                                                        href="#">RS SM5</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_22"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="513" id="model_513"><a
                                                                        href="#">CR 70 HD Plus</a></li>
                                                                <li class="model" data-model="565" id="model_565"><a
                                                                        href="#">CR 125 Euro II</a></li>
                                                                <li class="model" data-model="566" id="model_566"><a
                                                                        href="#">CR 125 Euro II</a></li>
                                                                <li class="model" data-model="316" id="model_316"><a
                                                                        href="#">CRLF 70</a></li>
                                                                <li class="model" data-model="421" id="model_421"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="515" id="model_515"><a
                                                                        href="#">CR 100 Excellence</a></li>
                                                                <li class="model" data-model="512" id="model_512"><a
                                                                        href="#">CRLF 70cc Euro ll</a></li>
                                                                <li class="model" data-model="399" id="model_399"><a
                                                                        href="#">RF 70</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="563" id="model_563"> <a
                                                                        href="#">CR 70 Jazba</a></li>
                                                                <li class="model" data-model="663" id="model_663"> <a
                                                                        href="#">CR 70 Self Start</a></li>
                                                                <li class="model" data-model="514" id="model_514"> <a
                                                                        href="#">CRLF Spoke Wheel</a></li>
                                                                <li class="model" data-model="692" id="model_692"> <a
                                                                        href="#">FIT 150 Fighter</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_59"
                                                                style="display:none">


                                                                <li class="model" data-model="617" id="model_617"> <a
                                                                        href="#">Aprilla</a></li>
                                                                <li class="model" data-model="616" id="model_616"> <a
                                                                        href="#">ETX 150</a></li>
                                                                <li class="model" data-model="615" id="model_615"> <a
                                                                        href="#">STX 150</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_21"
                                                                style="display:none">


                                                                <li class="model" data-model="420" id="model_420"> <a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="315" id="model_315"> <a
                                                                        href="#">SD 70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_20"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="398" id="model_398"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="307" id="model_307"><a
                                                                        href="#">Sports 1000 S</a></li>
                                                                <li class="model" data-model="310" id="model_310"><a
                                                                        href="#">1098 R Bayliss LE</a></li>
                                                                <li class="model" data-model="304" id="model_304"><a
                                                                        href="#">GT 1000</a></li>
                                                                <li class="model" data-model="308" id="model_308"><a
                                                                        href="#">Streetfighter 848</a></li>
                                                                <li class="model" data-model="311" id="model_311"><a
                                                                        href="#">1198</a></li>
                                                                <li class="model" data-model="302" id="model_302"><a
                                                                        href="#">696</a></li>
                                                                <li class="model" data-model="313" id="model_313"><a
                                                                        href="#">848</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="303" id="model_303"> <a
                                                                        href="#">1100 S</a></li>
                                                                <li class="model" data-model="312" id="model_312"> <a
                                                                        href="#">1198 S</a></li>
                                                                <li class="model" data-model="314" id="model_314"> <a
                                                                        href="#">848 Nicky Hayden</a></li>
                                                                <li class="model" data-model="299" id="model_299"> <a
                                                                        href="#">Desmosedici RR</a></li>
                                                                <li class="model" data-model="305" id="model_305"> <a
                                                                        href="#">GT 1000 Touring</a></li>
                                                                <li class="model" data-model="300" id="model_300"> <a
                                                                        href="#">Scrambler 1100</a></li>
                                                                <li class="model" data-model="306" id="model_306"> <a
                                                                        href="#">Sport 1000 Biposto</a></li>
                                                                <li class="model" data-model="309" id="model_309"> <a
                                                                        href="#">Streetfighter S</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_33"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="573" id="model_573"><a
                                                                        href="#">Dhoom YD-70</a></li>
                                                                <li class="model" data-model="445" id="model_445"><a
                                                                        href="#">YB 100 </a></li>
                                                                <li class="model" data-model="572" id="model_572"><a
                                                                        href="#">Junoon YD-100</a></li>
                                                                <li class="model" data-model="446" id="model_446"><a
                                                                        href="#">Yama 4</a></li>
                                                                <li class="model" data-model="549" id="model_549"><a
                                                                        href="#">YD-125 </a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_19"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="503" id="model_503"><a
                                                                        href="#">ES 70</a></li>
                                                                <li class="model" data-model="418" id="model_418"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="539" id="model_539"><a
                                                                        href="#">Fire Bolt ES70</a></li>
                                                                <li class="model" data-model="510" id="model_510"><a
                                                                        href="#">Super Speed 70 cc</a></li>
                                                                <li class="model" data-model="508" id="model_508"><a
                                                                        href="#">Challenger 70cc</a></li>
                                                                <li class="model" data-model="298" id="model_298"><a
                                                                        href="#">Fire Bird DG70</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="509" id="model_509"> <a
                                                                        href="#">Vicky 70cc</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_70"
                                                                style="display:none">


                                                                <li class="model" data-model="716" id="model_716"> <a
                                                                        href="#">SCRAMBLER 250</a></li>
                                                                <li class="model" data-model="715" id="model_715"> <a
                                                                        href="#">TEKKEN 250</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_36"
                                                                style="display:none">


                                                                <li class="model" data-model="538" id="model_538"> <a
                                                                        href="#">SI 70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_55"
                                                                style="display:none">


                                                                <li class="model" data-model="598" id="model_598"> <a
                                                                        href="#">Gi 70</a></li>
                                                                <li class="model" data-model="599" id="model_599"> <a
                                                                        href="#">Gi 70 Self Start</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_48"
                                                                style="display:none">


                                                                <li class="model" data-model="521" id="model_521"> <a
                                                                        href="#">70 cc</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_18"
                                                                style="display:none">


                                                                <li class="model" data-model="297" id="model_297"> <a
                                                                        href="#">HB 70</a></li>
                                                                <li class="model" data-model="417" id="model_417"> <a
                                                                        href="#">Other</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_17"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="285" id="model_285"><a
                                                                        href="#">V-Rod Muscle</a></li>
                                                                <li class="model" data-model="268" id="model_268"><a
                                                                        href="#">1200 Custom</a></li>
                                                                <li class="model" data-model="263" id="model_263"><a
                                                                        href="#">883 Low</a></li>
                                                                <li class="model" data-model="283" id="model_283"><a
                                                                        href="#">V-Rod</a></li>
                                                                <li class="model" data-model="264" id="model_264"><a
                                                                        href="#">883 Custom</a></li>
                                                                <li class="model" data-model="265" id="model_265"><a
                                                                        href="#">Iron 883</a></li>
                                                                <li class="model" data-model="274" id="model_274"><a
                                                                        href="#">Fat Bob</a></li>
                                                                <li class="model" data-model="277" id="model_277"><a
                                                                        href="#">Fat Boy</a></li>
                                                                <li class="model" data-model="284" id="model_284"><a
                                                                        href="#">Night Rod Special</a></li>
                                                                <li class="model" data-model="397" id="model_397"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="276" id="model_276"><a
                                                                        href="#">Softail Custom</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="267" id="model_267"> <a
                                                                        href="#">1200 Low</a></li>
                                                                <li class="model" data-model="282" id="model_282"> <a
                                                                        href="#">Cross Bones</a></li>
                                                                <li class="model" data-model="291" id="model_291"> <a
                                                                        href="#">Electra Glide Classic</a></li>
                                                                <li class="model" data-model="290" id="model_290"> <a
                                                                        href="#">Electra Glide Standard</a></li>
                                                                <li class="model" data-model="279" id="model_279"> <a
                                                                        href="#">Heritage Softail Classic</a></li>
                                                                <li class="model" data-model="273" id="model_273"> <a
                                                                        href="#">Low Rider</a></li>
                                                                <li class="model" data-model="275" id="model_275"> <a
                                                                        href="#">Night Train</a></li>
                                                                <li class="model" data-model="266" id="model_266"> <a
                                                                        href="#">Nightster</a></li>
                                                                <li class="model" data-model="295" id="model_295"> <a
                                                                        href="#">Road Glide</a></li>
                                                                <li class="model" data-model="286" id="model_286"> <a
                                                                        href="#">Road King</a></li>
                                                                <li class="model" data-model="287" id="model_287"> <a
                                                                        href="#">Road King Classic</a></li>
                                                                <li class="model" data-model="280" id="model_280"> <a
                                                                        href="#">Rocker</a></li>
                                                                <li class="model" data-model="281" id="model_281"> <a
                                                                        href="#">Rocker C</a></li>
                                                                <li class="model" data-model="278" id="model_278"> <a
                                                                        href="#">Softail Deluxe</a></li>
                                                                <li class="model" data-model="294" id="model_294"> <a
                                                                        href="#">Softail Springer</a></li>
                                                                <li class="model" data-model="272" id="model_272"> <a
                                                                        href="#">Street Bob</a></li>
                                                                <li class="model" data-model="288" id="model_288"> <a
                                                                        href="#">Street Glide</a></li>
                                                                <li class="model" data-model="271" id="model_271"> <a
                                                                        href="#">Super Glide Custom</a></li>
                                                                <li class="model" data-model="293" id="model_293"> <a
                                                                        href="#">Tri Glide Ultra Classic</a></li>
                                                                <li class="model" data-model="292" id="model_292"> <a
                                                                        href="#">Ultra Classic Electra Glide</a></li>
                                                                <li class="model" data-model="269" id="model_269"> <a
                                                                        href="#">XR 1200</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_29"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="431" id="model_431"><a
                                                                        href="#">RF 70</a></li>
                                                                <li class="model" data-model="396" id="model_396"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="454" id="model_454"><a
                                                                        href="#">RF 125</a></li>
                                                                <li class="model" data-model="606" id="model_606"><a
                                                                        href="#">Plus 90</a></li>
                                                                <li class="model" data-model="607" id="model_607"><a
                                                                        href="#">Splander 100</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_51"
                                                                style="display:none">


                                                                <li class="model" data-model="575" id="model_575"> <a
                                                                        href="#">CDI SR-70CC EURO-2</a></li>
                                                                <li class="model" data-model="621" id="model_621"> <a
                                                                        href="#">Infinity 150</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_68"
                                                                style="display:none">


                                                                <li class="model" data-model="706" id="model_706"> <a
                                                                        href="#">K-Light </a></li>
                                                                <li class="model" data-model="707" id="model_707"> <a
                                                                        href="#">Super Light</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_14"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="177" id="model_177"><a
                                                                        href="#">250 SX F</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="173" id="model_173"> <a
                                                                        href="#">105 SX</a></li>
                                                                <li class="model" data-model="186" id="model_186"> <a
                                                                        href="#">1190 RC8</a></li>
                                                                <li class="model" data-model="174" id="model_174"> <a
                                                                        href="#">125 SX 2010</a></li>
                                                                <li class="model" data-model="175" id="model_175"> <a
                                                                        href="#">150 SX 2010</a></li>
                                                                <li class="model" data-model="176" id="model_176"> <a
                                                                        href="#">250 SX 2010</a></li>
                                                                <li class="model" data-model="169" id="model_169"> <a
                                                                        href="#">450 EXC</a></li>
                                                                <li class="model" data-model="178" id="model_178"> <a
                                                                        href="#">450 SX F</a></li>
                                                                <li class="model" data-model="179" id="model_179"> <a
                                                                        href="#">50 SX</a></li>
                                                                <li class="model" data-model="181" id="model_181"> <a
                                                                        href="#">50 SX Junior</a></li>
                                                                <li class="model" data-model="180" id="model_180"> <a
                                                                        href="#">50 SX Mini</a></li>
                                                                <li class="model" data-model="170" id="model_170"> <a
                                                                        href="#">530 EXC</a></li>
                                                                <li class="model" data-model="182" id="model_182"> <a
                                                                        href="#">65 SX</a></li>
                                                                <li class="model" data-model="183" id="model_183"> <a
                                                                        href="#">65 XC</a></li>
                                                                <li class="model" data-model="189" id="model_189"> <a
                                                                        href="#">690 Duke</a></li>
                                                                <li class="model" data-model="171" id="model_171"> <a
                                                                        href="#">690 Enduro R</a></li>
                                                                <li class="model" data-model="192" id="model_192"> <a
                                                                        href="#">690 SMC</a></li>
                                                                <li class="model" data-model="184" id="model_184"> <a
                                                                        href="#">85 SX</a></li>
                                                                <li class="model" data-model="185" id="model_185"> <a
                                                                        href="#">85 XC</a></li>
                                                                <li class="model" data-model="172" id="model_172"> <a
                                                                        href="#">950 Super Enduro</a></li>
                                                                <li class="model" data-model="187" id="model_187"> <a
                                                                        href="#">990 Adventure</a></li>
                                                                <li class="model" data-model="188" id="model_188"> <a
                                                                        href="#">990 Adventure R</a></li>
                                                                <li class="model" data-model="190" id="model_190"> <a
                                                                        href="#">990 Super Duke</a></li>
                                                                <li class="model" data-model="191" id="model_191"> <a
                                                                        href="#">990 SuperDuke R</a></li>
                                                                <li class="model" data-model="413" id="model_413"> <a
                                                                        href="#">Other</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_63"
                                                                style="display:none">


                                                                <li class="model" data-model="668" id="model_668"> <a
                                                                        href="#">150</a></li>
                                                                <li class="model" data-model="670" id="model_670"> <a
                                                                        href="#">250</a></li>
                                                                <li class="model" data-model="671" id="model_671"> <a
                                                                        href="#">350</a></li>
                                                                <li class="model" data-model="672" id="model_672"> <a
                                                                        href="#">400</a></li>
                                                                <li class="model" data-model="673" id="model_673"> <a
                                                                        href="#">500</a></li>
                                                                <li class="model" data-model="669" id="model_669"> <a
                                                                        href="#">KPR 200</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_64"
                                                                style="display:none">


                                                                <li class="model" data-model="677" id="model_677"> <a
                                                                        href="#">GP 150</a></li>
                                                                <li class="model" data-model="676" id="model_676"> <a
                                                                        href="#">GP 200</a></li>
                                                                <li class="model" data-model="675" id="model_675"> <a
                                                                        href="#">GP 250</a></li>
                                                                <li class="model" data-model="674" id="model_674"> <a
                                                                        href="#">GP 300</a></li>
                                                                <li class="model" data-model="678" id="model_678"> <a
                                                                        href="#">GP 400</a></li>
                                                                <li class="model" data-model="679" id="model_679"> <a
                                                                        href="#">GP 500</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_30"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="434" id="model_434"><a
                                                                        href="#">MR 70</a></li>
                                                                <li class="model" data-model="472" id="model_472"><a
                                                                        href="#">Boom 70</a></li>
                                                                <li class="model" data-model="604" id="model_604"><a
                                                                        href="#">TEZ RAFTAR 70</a></li>
                                                                <li class="model" data-model="471" id="model_471"><a
                                                                        href="#">Dabang Euro ll 70</a></li>
                                                                <li class="model" data-model="490" id="model_490"><a
                                                                        href="#">Jeet 70</a></li>
                                                                <li class="model" data-model="448" id="model_448"><a
                                                                        href="#">MR 125 </a></li>
                                                                <li class="model" data-model="460" id="model_460"><a
                                                                        href="#">MR-70 Limited Edition</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="603" id="model_603"> <a
                                                                        href="#">MR 100</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_67"
                                                                style="display:none">



                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_49"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="542" id="model_542"><a
                                                                        href="#">AF 125</a></li>
                                                                <li class="model" data-model="541" id="model_541"><a
                                                                        href="#">AF 70</a></li>
                                                                <li class="model" data-model="543" id="model_543"><a
                                                                        href="#"> Thunder AF 70</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_71"
                                                                style="display:none">


                                                                <li class="model" data-model="717" id="model_717"> <a
                                                                        href="#">COUGAR</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_73"
                                                                style="display:none">


                                                                <li class="model" data-model="741" id="model_741"> <a
                                                                        href="#">Ducatin 250cc</a></li>
                                                                <li class="model" data-model="742" id="model_742"> <a
                                                                        href="#">Ducatin 400cc</a></li>
                                                                <li class="model" data-model="743" id="model_743"> <a
                                                                        href="#">Jackpot 300cc</a></li>
                                                                <li class="model" data-model="744" id="model_744"> <a
                                                                        href="#">Jackpot 400cc</a></li>
                                                                <li class="model" data-model="745" id="model_745"> <a
                                                                        href="#">Jupiter 125cc </a></li>
                                                                <li class="model" data-model="729" id="model_729"> <a
                                                                        href="#">Ninja 250cc</a></li>
                                                                <li class="model" data-model="730" id="model_730"> <a
                                                                        href="#">Ninja 300cc</a></li>
                                                                <li class="model" data-model="731" id="model_731"> <a
                                                                        href="#">Ninja 400cc</a></li>
                                                                <li class="model" data-model="732" id="model_732"> <a
                                                                        href="#">R3 250cc</a></li>
                                                                <li class="model" data-model="733" id="model_733"> <a
                                                                        href="#">R3 300cc</a></li>
                                                                <li class="model" data-model="734" id="model_734"> <a
                                                                        href="#">R3 400cc</a></li>
                                                                <li class="model" data-model="736" id="model_736"> <a
                                                                        href="#">S1000RR 250cc</a></li>
                                                                <li class="model" data-model="737" id="model_737"> <a
                                                                        href="#">S1000RR 300cc</a></li>
                                                                <li class="model" data-model="738" id="model_738"> <a
                                                                        href="#">S1000RR 400cc</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_13"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="168" id="model_168"><a
                                                                        href="#">PH 70</a></li>
                                                                <li class="model" data-model="262" id="model_262"><a
                                                                        href="#">RF 70</a></li>
                                                                <li class="model" data-model="412" id="model_412"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="449" id="model_449"><a
                                                                        href="#">PK125</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_54"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="592" id="model_592"><a
                                                                        href="#">PK 70</a></li>
                                                                <li class="model" data-model="594" id="model_594"><a
                                                                        href="#">PK DELUXE </a></li>
                                                                <li class="model" data-model="593" id="model_593"><a
                                                                        href="#">PK 125</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_39"
                                                                style="display:none">


                                                                <li class="model" data-model="481" id="model_481"> <a
                                                                        href="#">150</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_41"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="495" id="model_495"><a
                                                                        href="#">100cc</a></li>
                                                                <li class="model" data-model="551" id="model_551"><a
                                                                        href="#">QM 70</a></li>
                                                                <li class="model" data-model="552" id="model_552"><a
                                                                        href="#">QM 70</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="630" id="model_630"> <a
                                                                        href="#">Electric bike sporty</a></li>
                                                                <li class="model" data-model="627" id="model_627"> <a
                                                                        href="#">MT 150</a></li>
                                                                <li class="model" data-model="628" id="model_628"> <a
                                                                        href="#">QM 150</a></li>
                                                                <li class="model" data-model="629" id="model_629"> <a
                                                                        href="#">Shuttle Eco 150</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_12"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="166" id="model_166"><a
                                                                        href="#">Piaggio Storm 125</a></li>
                                                                <li class="model" data-model="463" id="model_463"><a
                                                                        href="#">Humsafar 70</a></li>
                                                                <li class="model" data-model="464" id="model_464"><a
                                                                        href="#">Humsafar Plus</a></li>
                                                                <li class="model" data-model="411" id="model_411"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="167" id="model_167"><a
                                                                        href="#">Premium R1</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_11"
                                                                style="display:none">


                                                                <li class="model" data-model="410" id="model_410"> <a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="165" id="model_165"> <a
                                                                        href="#">SR 70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_66"
                                                                style="display:none">


                                                                <li class="model" data-model="689" id="model_689"> <a
                                                                        href="#">Bullet 350</a></li>
                                                                <li class="model" data-model="690" id="model_690"> <a
                                                                        href="#">Bullet 350 ES</a></li>
                                                                <li class="model" data-model="688" id="model_688"> <a
                                                                        href="#">Bullet 500</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_45"
                                                                style="display:none">


                                                                <li class="model" data-model="505" id="model_505"> <a
                                                                        href="#">RS 70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_43"
                                                                style="display:none">


                                                                <li class="model" data-model="497" id="model_497"> <a
                                                                        href="#">SD 70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_62"
                                                                style="display:none">


                                                                <li class="model" data-model="704" id="model_704"> <a
                                                                        href="#">CLASSIC 200CC</a></li>
                                                                <li class="model" data-model="649" id="model_649"> <a
                                                                        href="#">Desire 150</a></li>
                                                                <li class="model" data-model="648" id="model_648"> <a
                                                                        href="#">Desire 250</a></li>
                                                                <li class="model" data-model="703" id="model_703"> <a
                                                                        href="#">ELIGATOR 250CC</a></li>
                                                                <li class="model" data-model="657" id="model_657"> <a
                                                                        href="#">Enduro 450</a></li>
                                                                <li class="model" data-model="659" id="model_659"> <a
                                                                        href="#">Fighter 150</a></li>
                                                                <li class="model" data-model="651" id="model_651"> <a
                                                                        href="#">Gladiator 200</a></li>
                                                                <li class="model" data-model="701" id="model_701"> <a
                                                                        href="#">Hawk 150cc</a></li>
                                                                <li class="model" data-model="650" id="model_650"> <a
                                                                        href="#">Hawk 250</a></li>
                                                                <li class="model" data-model="647" id="model_647"> <a
                                                                        href="#">Hurricane 150</a></li>
                                                                <li class="model" data-model="646" id="model_646"> <a
                                                                        href="#">Hurricane 250</a></li>
                                                                <li class="model" data-model="695" id="model_695"> <a
                                                                        href="#">NEUNE 150cc</a></li>
                                                                <li class="model" data-model="658" id="model_658"> <a
                                                                        href="#">Neune 250</a></li>
                                                                <li class="model" data-model="699" id="model_699"> <a
                                                                        href="#">Rokk 200cc</a></li>
                                                                <li class="model" data-model="696" id="model_696"> <a
                                                                        href="#">SCORPION 150 cc</a></li>
                                                                <li class="model" data-model="698" id="model_698"> <a
                                                                        href="#">SCORPION 350 RR</a></li>
                                                                <li class="model" data-model="702" id="model_702"> <a
                                                                        href="#">SKYLINE 150cc</a></li>
                                                                <li class="model" data-model="655" id="model_655"> <a
                                                                        href="#">Skyline 250</a></li>
                                                                <li class="model" data-model="656" id="model_656"> <a
                                                                        href="#">Skyline 250</a></li>
                                                                <li class="model" data-model="654" id="model_654"> <a
                                                                        href="#">Skyline 350</a></li>
                                                                <li class="model" data-model="660" id="model_660"> <a
                                                                        href="#">Storm 250</a></li>
                                                                <li class="model" data-model="652" id="model_652"> <a
                                                                        href="#">Thunder 150</a></li>
                                                                <li class="model" data-model="653" id="model_653"> <a
                                                                        href="#">Thunder 250</a></li>
                                                                <li class="model" data-model="697" id="model_697"> <a
                                                                        href="#">VALENTINO 150cc</a></li>
                                                                <li class="model" data-model="645" id="model_645"> <a
                                                                        href="#">Valentino 250</a></li>
                                                                <li class="model" data-model="644" id="model_644"> <a
                                                                        href="#">Valentino 350</a></li>
                                                                <li class="model" data-model="643" id="model_643"> <a
                                                                        href="#">Warrior 350</a></li>
                                                                <li class="model" data-model="700" id="model_700"> <a
                                                                        href="#">Wing 150cc</a></li>
                                                                <li class="model" data-model="705" id="model_705"> <a
                                                                        href="#">Zongshen RX3S 400cc </a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_9"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="162" id="model_162"><a
                                                                        href="#">JS 70</a></li>
                                                                <li class="model" data-model="163" id="model_163"><a
                                                                        href="#">SD 70</a></li>
                                                                <li class="model" data-model="408" id="model_408"><a
                                                                        href="#">Other</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="526" id="model_526"> <a
                                                                        href="#">125cc</a></li>
                                                                <li class="model" data-model="395" id="model_395"> <a
                                                                        href="#">Other</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_50"
                                                                style="display:none">


                                                                <li class="model" data-model="534" id="model_534"> <a
                                                                        href="#">SM 70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_8"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="161" id="model_161"><a
                                                                        href="#">DS 70</a></li>
                                                                <li class="model" data-model="493" id="model_493"><a
                                                                        href="#">125cc</a></li>
                                                                <li class="model" data-model="160" id="model_160"><a
                                                                        href="#">DL 70</a></li>
                                                                <li class="model" data-model="407" id="model_407"><a
                                                                        href="#">Other</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_7"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="158" id="model_158"><a
                                                                        href="#">SA 70</a></li>
                                                                <li class="model" data-model="406" id="model_406"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="159" id="model_159"><a
                                                                        href="#">VIKING</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_47"
                                                                style="display:none">


                                                                <li class="model" data-model="520" id="model_520"> <a
                                                                        href="#">70 cc</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_34"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="475" id="model_475"><a
                                                                        href="#">CD 70</a></li>
                                                                <li class="model" data-model="525" id="model_525"><a
                                                                        href="#">100 cc</a></li>
                                                                <li class="model" data-model="451" id="model_451"><a
                                                                        href="#">125cc</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_60"
                                                                style="display:none">


                                                                <li class="model" data-model="618" id="model_618"> <a
                                                                        href="#">SP 70 Plus</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_37"
                                                                style="display:none">


                                                                <li class="model" data-model="465" id="model_465"> <a
                                                                        href="#">70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_57"
                                                                style="display:none">



                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_42"
                                                                style="display:none">


                                                                <li class="model" data-model="496" id="model_496"> <a
                                                                        href="#">70cc</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_53"
                                                                style="display:none">


                                                                <li class="model" data-model="585" id="model_585"> <a
                                                                        href="#">EURO II TR 70</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_4"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="403" id="model_403"><a
                                                                        href="#">Other</a></li>
                                                                <li class="model" data-model="92" id="model_92"><a
                                                                        href="#">America</a></li>
                                                                <li class="model" data-model="87" id="model_87"><a
                                                                        href="#">Bonneville T100</a></li>
                                                                <li class="model" data-model="79" id="model_79"><a
                                                                        href="#">Daytona 675</a></li>
                                                                <li class="model" data-model="83" id="model_83"><a
                                                                        href="#">Sprint ST</a></li>
                                                                <li class="model" data-model="93" id="model_93"><a
                                                                        href="#">Speedmaster</a></li>
                                                                <li class="model" data-model="85" id="model_85"><a
                                                                        href="#">Thruxton</a></li>
                                                                <li class="model" data-model="82" id="model_82"><a
                                                                        href="#">Tiger</a></li>
                                                                <li class="model" data-model="453" id="model_453"><a
                                                                        href="#">Tiger</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="88" id="model_88"> <a
                                                                        href="#">New Bonneville</a></li>
                                                                <li class="model" data-model="86" id="model_86"> <a
                                                                        href="#">New Bonneville SE</a></li>
                                                                <li class="model" data-model="89" id="model_89"> <a
                                                                        href="#">Rocket III</a></li>
                                                                <li class="model" data-model="91" id="model_91"> <a
                                                                        href="#">Rocket III Classic</a></li>
                                                                <li class="model" data-model="90" id="model_90"> <a
                                                                        href="#">Rocket III Touring</a></li>
                                                                <li class="model" data-model="84" id="model_84"> <a
                                                                        href="#">Scrambler</a></li>
                                                                <li class="model" data-model="80" id="model_80"> <a
                                                                        href="#">Street Triple</a></li>
                                                                <li class="model" data-model="81" id="model_81"> <a
                                                                        href="#">Street Triple R</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_69"
                                                                style="display:none">


                                                                <li class="model" data-model="712" id="model_712"> <a
                                                                        href="#">CLASSIC</a></li>
                                                                <li class="model" data-model="713" id="model_713"> <a
                                                                        href="#">COMMANDO</a></li>
                                                                <li class="model" data-model="714" id="model_714"> <a
                                                                        href="#">COMMANDO SPORTS</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_40"
                                                                style="display:none">


                                                                <li class="model" data-model="667" id="model_667"> <a
                                                                        href="#">125</a></li>
                                                                <li class="model" data-model="666" id="model_666"> <a
                                                                        href="#">70 Deluxe</a></li>
                                                                <li class="model" data-model="489" id="model_489"> <a
                                                                        href="#">70cc</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_31"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="437" id="model_437"><a
                                                                        href="#">150cc</a></li>
                                                                <li class="model" data-model="439" id="model_439"><a
                                                                        href="#"> PIAGGIO</a></li>
                                                                <li class="model" data-model="440" id="model_440"><a
                                                                        href="#">P150x </a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>
                                                                <li class="model" data-model="438" id="model_438"> <a
                                                                        href="#">160cc</a></li>
                                                                <li class="model" data-model="633" id="model_633"> <a
                                                                        href="#">Primavera 150</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_65"
                                                                style="display:none">


                                                                <li class="model" data-model="680" id="model_680"> <a
                                                                        href="#">150</a></li>
                                                                <li class="model" data-model="681" id="model_681"> <a
                                                                        href="#">200</a></li>
                                                                <li class="model" data-model="683" id="model_683"> <a
                                                                        href="#">300</a></li>
                                                                <li class="model" data-model="686" id="model_686"> <a
                                                                        href="#">350</a></li>
                                                                <li class="model" data-model="684" id="model_684"> <a
                                                                        href="#">400</a></li>
                                                                <li class="model" data-model="685" id="model_685"> <a
                                                                        href="#">500</a></li>
                                                                <li class="model" data-model="682" id="model_682"> <a
                                                                        href="#">RC3</a></li>
                                                                <li class="model" data-model="718" id="model_718"> <a
                                                                        href="#">RX1</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_61"
                                                                style="display:none">


                                                                <li class="model" data-model="642" id="model_642"> <a
                                                                        href="#">ZT310-R</a></li>
                                                                <li class="model" data-model="687" id="model_687"> <a
                                                                        href="#">ZT310-X</a></li>

                                                            </ul>
                                                            <ul class="model-listings fs14 get-listing models_for_1"
                                                                style="display:none">
                                                                <li class="heading">
                                                                    <h4>Popular</h4>
                                                                </li>

                                                                <li class="model" data-model="614" id="model_614"><a
                                                                        href="#">KPR 200 Cruise</a></li>
                                                                <li class="model" data-model="570" id="model_570"><a
                                                                        href="#">ZX 100 Shahsawar</a></li>
                                                                <li class="model" data-model="1" id="model_1"><a
                                                                        href="#">ZX 70 City Rider</a></li>
                                                                <li class="model" data-model="547" id="model_547"><a
                                                                        href="#">ZX 125</a></li>
                                                                <li class="model" data-model="571" id="model_571"><a
                                                                        href="#">ZX 125 Stallion</a></li>
                                                                <li class="model" data-model="569" id="model_569"><a
                                                                        href="#">ZX 70 Thunder Plus</a></li>
                                                                <li class="model" data-model="620" id="model_620"><a
                                                                        href="#">Monster ZX 250-D</a></li>
                                                                <li class="model" data-model="568" id="model_568"><a
                                                                        href="#">ZX 100 Power Max</a></li>
                                                                <li class="model" data-model="567" id="model_567"><a
                                                                        href="#">ZX 70 City Rider Euro-II</a></li>

                                                                <li class="heading">
                                                                    <h4>Others</h4>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary submit-button" data-dismiss="modal"
                                                        disabled>done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3" for="make">Bike Information<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-9 car-select-parent">
                                            <input id="bike_selector" name="bike_selector" placeholder="Make/Model"
                                                type="text" value="" />
                                            <i class="fa fa-check-circle input-success-icon generic-green" ,></i><i
                                                class="fa fa-exclamation-circle input-failure-icon generic-red"></i>
                                            <ul class="parsley-errors-list">
                                                <li id="car_selector_error"></li>
                                            </ul>
                                            <input class="apply-parsley"
                                                data-parsley-error-message="Bike Make is Required"
                                                data-parsley-errors-container="#car_selector_error"
                                                data-parsley-required="true" data-parsley-trigger="change"
                                                id="used_bike_bike_manufacturer_id"
                                                name="used_bike[bike_manufacturer_id]" type="hidden" />
                                            <input class="apply-parsley"
                                                data-parsley-error-message="Bike Model is Required"
                                                data-parsley-errors-container="#car_selector_error"
                                                data-parsley-required="true" data-parsley-trigger="change"
                                                id="used_bike_bike_model_id" name="used_bike[bike_model_id]"
                                                type="hidden" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3" for="registration_city">Registration City
                                            (Optional)</label>
                                        <div class="col-md-9">
                                            <select class="chzn-select" style="width: 54%;" id="used_bike_reg_city_id"
                                                name="used_bike[reg_city_id]">
                                                <option value="">Registration City</option>
                                                <optgroup label="Un-Registered">
                                                    <option value="">Un-Registered</option>
                                                </optgroup>
                                                <optgroup label="Popular Cities">
                                                    <option value="409">Karachi</option>
                                                    <option value="410">Lahore</option>
                                                    <option value="408">Islamabad</option>
                                                    <option value="313">Rawalpindi</option>
                                                    <option value="288">Peshawar</option>
                                                </optgroup>
                                                <optgroup label="Other Cities">
                                                    <option value="2">Abdul Hakeem</option>
                                                    <option value="1">Abottabad</option>
                                                    <option value="3">Adda jahan khan</option>
                                                    <option value="4">Adda shaiwala</option>
                                                    <option value="183503">Ahmed Pur East</option>
                                                    <option value="183504">Ahmedpur Lamma</option>
                                                    <option value="5">Akhora khattak</option>
                                                    <option value="6">Ali chak</option>
                                                    <option value="183505">Alipur Chatta</option>
                                                    <option value="7">Allahabad</option>
                                                    <option value="8">Amangarh</option>
                                                    <option value="10">Arifwala</option>
                                                    <option value="11">Attock</option>
                                                    <option value="18">Babarloi</option>
                                                    <option value="12">Babri banda</option>
                                                    <option value="13">Badin</option>
                                                    <option value="14">Bahawal Nagar</option>
                                                    <option value="15">Bahawalpur</option>
                                                    <option value="16">Balakot</option>
                                                    <option value="17">Bannu</option>
                                                    <option value="105">Gojra</option>
                                                    <option value="220">Goth Machi</option>
                                                    <option value="106">Goular khel</option>
                                                    <option value="107">Guddu</option>
                                                    <option value="108">Gujar Khan</option>
                                                    <option value="109">Gujranwala</option>
                                                    <option value="110">Gujrat</option>
                                                    <option value="183501">Gwadar</option>
                                                    <option value="111">Hafizabad</option>
                                                    <option value="112">Hala</option>
                                                    <option value="113">Hangu</option>
                                                    <option value="183514">Harappa</option>
                                                    <option value="114">Hari pur</option>
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
                                        </div>
                                    </div>

                                </fieldset>


                                <fieldset>

                                    <input id="used_bike_ad_listing_attributes_step"
                                        name="used_bike[ad_listing_attributes][step]" type="hidden" value="0" />

                                    <div class="form-group">
                                        <label class="col-md-3" for="hpi_mileage" style="transform:translateX(-213px);margin-top:10px"> Mileage<span
                                                class="text-error">*</span> </label>
                                                <!--  -->
                                                <div>
                                        <div class="col-md-9">
                                            <div class="input-group p-0" style="margin-left:-213px;margin-top:10px">
                                                <span class="input-group-addon fs16">KM</span>
                                                <input data-parsley-error-message="Enter valid mileage (1-1000000)"
                                                    data-parsley-errors-container="#error-mileage"
                                                    data-parsley-pattern="^([1-9][0-9]{0,5}|1000000)$"
                                                    data-parsley-range="[1, 1000000]" data-parsley-required="true"
                                                    data-parsley-trigger="change" id="mileage_text" maxlength="6"
                                                    name="mileage_text" placeholder="Mileage" type="text" value="" />
                                            </div>
                                            <div id="error-mileage"></div>
                                            <p class="mileage nomargin generic-blue-light fs12" style="display:none">
                                            </p>
                                            <input class="bike_mileage" id="used_bike_mileage" name="used_bike[mileage]"
                                                type="hidden" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3" for="engine_type" style="transform:translateX(-213px);margin-top:10px"> Engine Type<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5" style="margin-left:-213px;margin-top:10px">
                                            <select data-parsley-error-message="Please select engine type"
                                                data-parsley-required="true" data-parsley-trigger="change"
                                                id="used_bike_engine_type" name="used_bike[engine_type]">
                                                <option value="">Engine Type</option>
                                                <option value='2-stroke'>2 Stroke</option>
                                                <option value='4-stroke'>4 Stroke</option>
                                            </select>
                                        </div>

                                        <!--  -->
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <img alt="Hint" class="hint-img"
                                                    src="{{asset('website')}}/assets/img/bulb.svg" />
                                                We don&#39;t allow promotional messages that are not relevant to the ad
                                            </div>
                                        </div>
                                        </div>
                                    </div>



                                </fieldset>

                            </div>


                            <fieldset>
                                <div class="well">
                                    <legend class="noborder">Expected Selling Price</legend>

                                    <div class="form-group">
                                        <label class="col-md-3" for="price" id="price-label"><span>Price<span
                                                    class='text-error'>*</span> <span>(Rs.)</span></span></label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-addon fs16">PKR</span>
                                                <input class="prefilled" data-parsley-error-message="Enter valid Price"
                                                    data-parsley-errors-container="#error-price"
                                                    data-parsley-pattern="^(([1-9][0-9,]*))$"
                                                    data-parsley-required="true" data-parsley-trigger="change"
                                                    id="price_formatted" maxlength="9" name="price_formatted"
                                                    onkeyup="updateAmountInWords(&#39;#price_formatted&#39;, &#39;.ad_listing_price&#39;, &#39;.amountInWords&#39;);"
                                                    placeholder="Price" type="text" value="" />
                                            </div>
                                            <div id="error-price"></div>
                                            <input class="ad_listing_price" id="used_bike_ad_listing_attributes_price"
                                                name="used_bike[ad_listing_attributes][price]" type="hidden" value="" />
                                            <p class="amountInWords nomargin generic-blue-light fs12"
                                                style="display:none"></p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <img alt="Hint" class="hint-img"
                                                    src="{{asset('website')}}/assets/img/bulb.svg" />
                                                Please enter a realistic price to get more genuine responses.
                                            </div>
                                        </div>
                                    </div>





                                    <div id="EvaluatePriceModal" class="modal" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="well">
                                    <legend class="noborder">Additional Information</legend>

                                    <div class="form-group">
                                        <label class="col-md-3" for="features">Features</label>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled list-inline sell-feature-list col-12">
                                                <li>
                                                    <label class="d-flex align-items-center"><input name="used_bike[anti_theft_lock]" type="hidden"
                                                            value="0" /><input style="height: 15px;" id="used_bike_anti_theft_lock"
                                                            name="used_bike[anti_theft_lock]" type="checkbox"
                                                            value="1" /> <span style="width: 28vw;">Anti Theft Lock</span></label>
                                                </li>
                                                <li>
                                                    <label class="d-flex align-items-center"><input name="used_bike[disc_break]" type="hidden"
                                                            value="0" /><input style="height: 15px;" id="used_bike_disc_break"
                                                            name="used_bike[disc_break]" type="checkbox" value="1" />
                                                            <span style="width: 22vw;">Disc Brake</span></label>
                                                </li>
                                                <li>
                                                    <label class="d-flex align-items-center"><input id="used_bike_led_light"
                                                            name="used_bike[led_light]" style="height: 15px;" type="checkbox" value="1" />
                                                            <span style="width: 22vw;">Led Light</span></label>
                                                </li>
                                                <li>
                                                    <label class="d-flex align-items-center"><input name="used_bike[wind_shield]" type="hidden"
                                                            value="0" /><input style="height: 15px;" id="used_bike_wind_shield"
                                                            name="used_bike[wind_shield]" type="checkbox" value="1" />
                                                            <span style="width: 22vw;">Wind Shield</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="well">


                                    <legend class="nomargin noborder">
                                        Upload Photos
                                        <span class="text-error"></span>
                                    </legend>
                                    <div class="upload-image-hint clearfix mt20 pos-rel" id="img_upload_tr">
                                        <div id="plupload_uploader" class="clearfix text-center">
                                            <div id="img_upload">
                                                <div id="moreUploads">
                                                    <span id="uploadify_limit_reached" class="uploadify_help"
                                                        onclick="$(this).hide(); $('#uploadify_limit_help').fadeIn(500);">
                                                        <img alt="Error-msg-arrow"
                                                            src="{{asset('website')}}/assets/img/error-msg-arrow-44fdb1d2522ee92c4d83a54fd63919e0.png" />
                                                        Sorry, you have reached the maximum number of pictures allowed.
                                                    </span>
                                                    <div id="container">
                                                        <img alt="Photos"
                                                            src="{{asset('website')}}/assets/img/gal.svg"
                                                            style="vertical-align: -5px" />
                                                        <div class="add-photo mb30">
                                                            <a id="pickfiles" style="height: 40px;" class="pickfiles btn btn-success"
                                                                href="javascript:" style="display:inline-block;">+ Add
                                                                Photos</a>

                                                            <div class="generic-gray mt5">
                                                                (Max limit 5 MB per image)
                                                            </div>
                                                        </div>
                                                        <div id="filelist">
                                                        </div>
                                                    </div>
                                                    <div id="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="row fs13 generic-gray add-photo-info mt40 mb30">
                                            <div class="col-md-4 col-md-offset-1">
                                                <i class="fa fa-check-circle-o"></i>
                                                <strong class='generic-basic'>Adding at least 8 pictures</strong>
                                                improves the chances for a quick sale.
                                            </div>
                                            <div class="col-md-5 col-md-offset-1">
                                                <i class="fa fa-check-circle-o"></i>
                                                <strong class='generic-basic'>Adding clear Front, Back and Side
                                                    pictures</strong> of your bike increases the quality of your Ad and
                                                gets you noticed more.
                                            </div>
                                            <div class="col-md-5 col-md-offset-4 mt30">
                                                <i class="fa fa-check-circle-o"></i>
                                                <strong class='generic-basic'>Photos should be</strong> in 'jpeg, jpg,
                                                png, gif' format only.
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="well">
                                    <legend class="noborder">Contact Information</legend>
                                    <div id="contact_seller_div">



                                        <div class="form-group">
                                            <label class="col-md-3 prefill" for="display_name"> Seller Name<span
                                                    class="text-error">*</span></label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input class="prefilled"
                                                        data-parsley-error-message="Enter valid name"
                                                        data-parsley-errors-container="#error-name-number"
                                                        data-parsley-length="[3, 100]"
                                                        data-parsley-pattern="/^(((?!pakwheels)[a-z ]){3,100})$/i"
                                                        data-parsley-required="true" data-parsley-trigger="change"
                                                        id="used_bike_ad_listing_attributes_display_name"
                                                        maxlength="100"
                                                        name="used_bike[ad_listing_attributes][display_name]"
                                                        placeholder="Seller Name" size="30" type="text" />
                                                </div>
                                                <div id="error-name-number"></div>
                                            </div>
                                        </div>


                                        <input id="user_email" name="user[email]" type="hidden" />
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3" for="phone_number"> Mobile Number<span
                                                class="text-error">*</span></label>
                                        <div class="col-md-5">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                                <input class="ad-mobile-number prefilled"
                                                    data-parsley-error-message="Enter a valid mobile number."
                                                    data-parsley-errors-container="#error-mobile-number"
                                                    data-parsley-pattern="^03[0-9]{9}$" data-parsley-required="true"
                                                    data-parsley-trigger="change"
                                                    id="used_bike_ad_listing_attributes_phone" maxlength="12"
                                                    name="used_bike[ad_listing_attributes][phone]"
                                                    placeholder="Mobile Number" size="30" type="text"
                                                    value="" />
                                            </div>
                                            <div id="error-mobile-number"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-hint">
                                                <i class="fa fa-mobile hint-icon"></i>
                                                Enter a genuine 11 digit mobile no. with format 03XXXXXXXXX. All
                                                inquires will come on this number.
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group secondary-phone">
                                        <label class="col-md-3" for="second_phone" class="note">Secondary Number <span
                                                class="optional">(Optional)</span></label>
                                        <div class="col-md-9">
                                            <input data-parsley-error-message="Enter valid number"
                                                data-parsley-pattern="^[0-9]{7,}$" data-parsley-trigger="change"
                                                id="used_bike_ad_listing_attributes_phone_1" maxlength="14"
                                                name="used_bike[ad_listing_attributes][phone_1]"
                                                placeholder="Secondary Number" size="30" type="text" />
                                        </div>
                                    </div>

                                    <div class="hide">
                                        <input id="used_bike_ad_listing_attributes_date_expired" maxlength="100"
                                            name="used_bike[ad_listing_attributes][date_expired]" size="100" type="text"
                                            value="45" />
                                    </div>


                                    <input id="used_bike_ad_listing_attributes_scraped_id"
                                        name="used_bike[ad_listing_attributes][scraped_id]" type="hidden" />
                                    <input id="used_bike_ad_listing_attributes_scraped_type"
                                        name="used_bike[ad_listing_attributes][scraped_type]" type="hidden" />
                                    <input id="scraped_category" name="scraped_category" type="hidden" />
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="form-group text-right mb30">
                                    <div class="col-md-12">
                                        <button style="height: 40px;" type="submit" class="btn btn-success btn-lg fs16"
                                            id="submit_form">Submit &amp; Continue</button>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                    </form>
                    <div id="duplicate_ads_alert"></div>

                </div>
            </section>
        </div>
    </div>
    <div id="sign_in_pop_up" class="modal" tabindex="-1" role="dialog" aria-labelledby="Sign In Pop Up"
        aria-hidden="true">
        <div class="modal-dialog" style="width: 680px">
            <div class="modal-content">
                <div class="modal-body p30">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                        style="margin: -15px -15px 0 0;" onclick="$('#sign_in_pop_up').modal('hide');">×</button>

                    <div class="row">
                        <div class="col-md-6 why-login-left">
                            <h2>Why Signin?</h2>
                            <ul class="list-unstyled login-points-list">
                                <li>
                                    <img class="pull-left"
                                        src="{{asset('website')}}/assets/img/login-point-1.png" />
                                    <h4>Safely Connect with Buyers</h4>
                                    <p>You can connect with thousands of buyers and quick search</p>
                                </li>
                                <li>
                                    <img class="pull-left"
                                        src="{{asset('website')}}/assets/img/login-point-2.png" />
                                    <h4>Create Quick Alerts</h4>
                                    <p>Create alerts quickly and get notified when new listing become available</p>
                                </li>
                                <li>
                                    <img class="pull-left"
                                        src="{{asset('website')}}/assets/img/login-point-3.png">
                                    <h4>Save Your Favourite Ads</h4>
                                    <p>Easily save ads and accessories for a later time</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

@endsection
