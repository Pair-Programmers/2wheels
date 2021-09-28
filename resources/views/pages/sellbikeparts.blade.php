@extends('layouts.main')

@section('title', "Bike Finance")

@section('contents')




<div class="remove-section" >
  <section class="nopad" style="margin-top: 130px;">
    <div class="well text-center p30 fwl">
      <h1 class="nomargin fs28 fwb">
        Sell your Accessory With 3 Easy &amp; Simple Steps!
      </h1>
      <p class="fs16" style="color: #070707;">It&#39;s free and takes less than a minute</p>
      <div class="sell-header-list">
        <img alt=" Enter Your Accessory Information" src="{{asset('website')}}/assets/img/accesseries-138999a6504b59b3ab62cd96e08a0349.svg" /> Enter Your Accessory Information
        <img alt=" Upload Photos" src="{{asset('website')}}/assets/img/photos-708994063564767acaca738e1261f90d.svg" /> Upload Photos
        <img alt=" Enter Your Selling Price" src="{{asset('website')}}/assets/img/tag-3ba531fca999b37f89be28609fe9e9c0.svg" /> Enter Your Selling Price
      </div>
    </div>
  </section>

	<section>
	  <div class="container">
    	<script src="{{asset('website')}}/assets/js/ckeditor.js" type="text/javascript"></script>

<form accept-charset="UTF-8" action="/accessories-spare-parts" class="form-horizontal ga-accessory-form" data-parsley-validate="" enctype="multipart/form-data" id="submitAnad" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="7Hsojy4MNZ2A6qAHtT41LyIsKJ/0fiJGbreoapjo7xw=" /></div>
    
    
    <div class="linked-fields pos-rel sell-form-main">

      <div class="well">
        <fieldset class="nomargin sell-form">
          <legend class="nomargin noborder">Accessory Information
            <span class="sell-mandatory">(All fields marked with * are mandatory)</span>
          </legend>
          <div class="form-group mt20">
            <label class="col-md-3" for="title">Title<span class="text-error">*</span></label>
            <div class="col-md-9">
              <input data-parsley-error-message="Please enter valid title." data-parsley-required="true" data-parsley-trigger="change" id="ad_listing_title" maxlength="100" name="ad_listing[title]" placeholder="Title" size="100" type="text" />
            </div>
          </div>
          <input id="ad_listing_is_buyer" name="ad_listing[is_buyer]" type="hidden" value="false" />
          
<div class="form-group mt20">
  <label class="col-md-3" for="city"> <span id="city_label_id"> City </span><span class="text-error">*</span></label>
  <div class="col-md-5">
    <select class="ad_listing_city_id chzn-select filterable-select prefilled" data-parsley-error-container="#city-error-message" data-parsley-error-message="Enter city name" data-parsley-required="true" data-parsley-trigger="change" data-title="City" id="ad_listing_city_id" name="ad_listing[city_id]" onchange="updateCityArea(this, $(&#39;.ad_listing_city_area_id&#39;),&#39;City Area&#39;); reloadChosen(&#39;#ad_listing_city_area_id&#39;);;  " quick-change="#ad_listing_city_area_id"><option value="">City</option>
<optgroup label="Popular Cities"><option value="409">Karachi</option>
<option value="410">Lahore</option>
<option value="408">Islamabad</option>
<option value="313">Rawalpindi</option>
<option value="288">Peshawar</option></optgroup><optgroup label="Other Cities"><option value="2">Abdul Hakeem</option>
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
<option value="183551">Khanpur</option>
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
<option value="403">Zahir Peer</option></optgroup></select>
    <p class="nomargin" id="city-error-message"></p>
  </div>
  <div class="col-md-4">
    <div class="form-hint">
      <img alt="Hint" class="hint-img" src="{{asset('website')}}/assets/img/bulb.svg" />
      We don&#39;t allow duplicates of same ad.
    </div>
  </div>
</div>





<div id="city-area-dropdown" class="form-group" style="display:none">
  <label class="col-md-3" for="city_area"> City Area</label>
  <div class="col-md-9">
    <select class="ad_listing_city_area_id chzn-select " data-native-menu="true" data-parsley-pattern="*" data-parsley-trigger="change" id="ad_listing_city_area_id" name="ad_listing[city_area_id]"><option value="">City Area</option>
</select>
  </div>
</div>
          
          <!-- Modal for select Category/Subcategory-->
<script src="{{asset('website')}}/assets/js/category.js" type="text/javascript"></script>
<div id="get-car-name" class="modal get-car-name" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
<div class="modal-dialog" style="width:602px;">
    <div class="modal-content">    
  <div class="modal-body clearfix">
    <div class="col col-2 cat-selection makes pull-left active">
      <div class="header-car-info arrow-right">Category</div>
      <div class="form-group nomargin">
        <ul class="fs14 get-listing make-listings">
            <li class="make" data-make="256" id="category_256"><a href="#">Audio / Video <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="403" id="category_403"><a href="#">Bicycles <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="393" id="category_393"><a href="#">Bikes <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="309" id="category_309"><a href="#">Brakes <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="276" id="category_276"><a href="#">Car Care <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="434" id="category_434"><a href="#">Car Utilities  <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="293" id="category_293"><a href="#">Engine &amp; Mechanical <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="282" id="category_282"><a href="#">Exterior <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="314" id="category_314"><a href="#">Interior <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="265" id="category_265"><a href="#">Lights &amp; Electrical <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="356" id="category_356"><a href="#">Oils &amp; Lubricants <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="323" id="category_323"><a href="#">Other Vehicles <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="350" id="category_350"><a href="#">Security &amp; Sensors  <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="363" id="category_363"><a href="#">Tools &amp; Gadgets <i class="fa fa-angle-right"></i></a></li>
            <li class="make" data-make="251" id="category_251"><a href="#">Tyres &amp; Wheels <i class="fa fa-angle-right"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col col-2 cat-selection models pull-left">
      <div class="header-car-info arrow-right">Sub-Category</div>
      <div class="form-group nomargin">
            <ul class="model-listings fs14 get-listing models_for_256" style="display:none">
                <li class="model" data-model="258" id="model_258"><a href="#">Amplifiers</a></li>
                <li class="model" data-model="355" id="model_355"><a href="#">Audio Accessories</a></li>
                <li class="model" data-model="260" id="model_260"><a href="#">Base Tubes</a></li>
                <li class="model" data-model="263" id="model_263"><a href="#">Cables</a></li>
                <li class="model" data-model="114" id="model_114"><a href="#">Other</a></li>
                <li class="model" data-model="261" id="model_261"><a href="#">Players</a></li>
                <li class="model" data-model="257" id="model_257"><a href="#">Speakers</a></li>
                <li class="model" data-model="262" id="model_262"><a href="#">Video Displays</a></li>
                <li class="model" data-model="259" id="model_259"><a href="#">Woofers</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_403" style="display:none">
                <li class="model" data-model="404" id="model_404"><a href="#">Mountain Bikes</a></li>
                <li class="model" data-model="405" id="model_405"><a href="#">Sohrab</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_393" style="display:none">
                <li class="model" data-model="394" id="model_394"><a href="#">Bike Parts </a></li>
                <li class="model" data-model="395" id="model_395"><a href="#">Bikes Accessories</a></li>
                <li class="model" data-model="402" id="model_402"><a href="#">Helmets</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_309" style="display:none">
                <li class="model" data-model="310" id="model_310"><a href="#">Brake Pads</a></li>
                <li class="model" data-model="372" id="model_372"><a href="#">Brake Parts</a></li>
                <li class="model" data-model="422" id="model_422"><a href="#">Brake Rotors</a></li>
                <li class="model" data-model="396" id="model_396"><a href="#">Brake Shoe</a></li>
                <li class="model" data-model="311" id="model_311"><a href="#">Discs</a></li>
                <li class="model" data-model="312" id="model_312"><a href="#">Drums</a></li>
                <li class="model" data-model="423" id="model_423"><a href="#">Hand Brakes</a></li>
                <li class="model" data-model="313" id="model_313"><a href="#">Other</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_276" style="display:none">
                <li class="model" data-model="277" id="model_277"><a href="#">Air Freshner</a></li>
                <li class="model" data-model="324" id="model_324"><a href="#">Car Shampoo</a></li>
                <li class="model" data-model="333" id="model_333"><a href="#">Car Top Covers</a></li>
                <li class="model" data-model="325" id="model_325"><a href="#">Car Wax</a></li>
                <li class="model" data-model="279" id="model_279"><a href="#">Compounds</a></li>
                <li class="model" data-model="401" id="model_401"><a href="#">Coolants</a></li>
                <li class="model" data-model="391" id="model_391"><a href="#">Engine Cleaners </a></li>
                <li class="model" data-model="328" id="model_328"><a href="#">Glass Cleaners</a></li>
                <li class="model" data-model="329" id="model_329"><a href="#">Interior Care</a></li>
                <li class="model" data-model="327" id="model_327"><a href="#">Leather Care </a></li>
                <li class="model" data-model="326" id="model_326"><a href="#">Microfiber Clothes </a></li>
                <li class="model" data-model="281" id="model_281"><a href="#">Other</a></li>
                <li class="model" data-model="280" id="model_280"><a href="#">Paint</a></li>
                <li class="model" data-model="424" id="model_424"><a href="#">Polisher Machine &amp; Buffers</a></li>
                <li class="model" data-model="278" id="model_278"><a href="#">Polishes</a></li>
                <li class="model" data-model="330" id="model_330"><a href="#">Pressure Washers</a></li>
                <li class="model" data-model="390" id="model_390"><a href="#">Scratch Remover </a></li>
                <li class="model" data-model="389" id="model_389"><a href="#">Sealant/Glass Coat</a></li>
                <li class="model" data-model="331" id="model_331"><a href="#">Tyre Care </a></li>
                <li class="model" data-model="332" id="model_332"><a href="#">Vacuum Cleaners</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_434" style="display:none">
                <li class="model" data-model="435" id="model_435"><a href="#">Car Fridge </a></li>
                <li class="model" data-model="436" id="model_436"><a href="#">Portable Fans &amp; Heaters</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_293" style="display:none">
                <li class="model" data-model="297" id="model_297"><a href="#">A/C Belt</a></li>
                <li class="model" data-model="299" id="model_299"><a href="#">Air Conditioning &amp; Heating</a></li>
                <li class="model" data-model="301" id="model_301"><a href="#">Belts</a></li>
                <li class="model" data-model="307" id="model_307"><a href="#">Clutches</a></li>
                <li class="model" data-model="300" id="model_300"><a href="#">CNG Kits</a></li>
                <li class="model" data-model="294" id="model_294"><a href="#">Complete Engines</a></li>
                <li class="model" data-model="334" id="model_334"><a href="#">Condensor</a></li>
                <li class="model" data-model="306" id="model_306"><a href="#">Crank, Pistons &amp; Components</a></li>
                <li class="model" data-model="298" id="model_298"><a href="#">Fan Belt</a></li>
                <li class="model" data-model="373" id="model_373"><a href="#">Filters</a></li>
                <li class="model" data-model="384" id="model_384"><a href="#">Fuel Pump</a></li>
                <li class="model" data-model="305" id="model_305"><a href="#">Gasket &amp; Seals</a></li>
                <li class="model" data-model="302" id="model_302"><a href="#">Hoses &amp; Pipes</a></li>
                <li class="model" data-model="308" id="model_308"><a href="#">Other</a></li>
                <li class="model" data-model="295" id="model_295"><a href="#">Radiator, Fans &amp; Cooling Parts</a></li>
                <li class="model" data-model="381" id="model_381"><a href="#">Spark Plugs </a></li>
                <li class="model" data-model="398" id="model_398"><a href="#">Suspension</a></li>
                <li class="model" data-model="296" id="model_296"><a href="#">Timing Belts</a></li>
                <li class="model" data-model="303" id="model_303"><a href="#">Turbos &amp; Superchargers</a></li>
                <li class="model" data-model="304" id="model_304"><a href="#">Water Pumps</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_282" style="display:none">
                <li class="model" data-model="409" id="model_409"><a href="#">Air Flows</a></li>
                <li class="model" data-model="410" id="model_410"><a href="#">Antenna</a></li>
                <li class="model" data-model="348" id="model_348"><a href="#">Bumper Styling </a></li>
                <li class="model" data-model="374" id="model_374"><a href="#">Bumpers </a></li>
                <li class="model" data-model="284" id="model_284"><a href="#">Bumpers &amp; Components</a></li>
                <li class="model" data-model="376" id="model_376"><a href="#">Car Bonnets</a></li>
                <li class="model" data-model="377" id="model_377"><a href="#">Car Doors</a></li>
                <li class="model" data-model="375" id="model_375"><a href="#">Car Hoods </a></li>
                <li class="model" data-model="285" id="model_285"><a href="#">Car Mirrors</a></li>
                <li class="model" data-model="411" id="model_411"><a href="#">Car Wraps &amp; Tints</a></li>
                <li class="model" data-model="346" id="model_346"><a href="#">Chrome Accessories</a></li>
                <li class="model" data-model="406" id="model_406"><a href="#">Chrome Handle Covers</a></li>
                <li class="model" data-model="407" id="model_407"><a href="#">Chrome Trim &amp; Accessories</a></li>
                <li class="model" data-model="345" id="model_345"><a href="#">Door Guards</a></li>
                <li class="model" data-model="408" id="model_408"><a href="#">Door Mouldings</a></li>
                <li class="model" data-model="412" id="model_412"><a href="#">Double Sided Tapes</a></li>
                <li class="model" data-model="288" id="model_288"><a href="#">Emblems &amp; Stickers</a></li>
                <li class="model" data-model="383" id="model_383"><a href="#">Fenders </a></li>
                <li class="model" data-model="385" id="model_385"><a href="#">Grills</a></li>
                <li class="model" data-model="286" id="model_286"><a href="#">Guards</a></li>
                <li class="model" data-model="291" id="model_291"><a href="#">Immobilizers</a></li>
                <li class="model" data-model="347" id="model_347"><a href="#">Metal Logos</a></li>
                <li class="model" data-model="378" id="model_378"><a href="#">Mirrors/Screens</a></li>
                <li class="model" data-model="287" id="model_287"><a href="#">Mud Guards</a></li>
                <li class="model" data-model="290" id="model_290"><a href="#">Other</a></li>
                <li class="model" data-model="289" id="model_289"><a href="#">Rear View Camera</a></li>
                <li class="model" data-model="413" id="model_413"><a href="#">Roof Racks &amp; Rails</a></li>
                <li class="model" data-model="387" id="model_387"><a href="#">Side Mirrors </a></li>
                <li class="model" data-model="283" id="model_283"><a href="#">Spoilers &amp; Body Kits</a></li>
                <li class="model" data-model="349" id="model_349"><a href="#">Sun Visors </a></li>
                <li class="model" data-model="382" id="model_382"><a href="#">Trunk</a></li>
                <li class="model" data-model="380" id="model_380"><a href="#">Viper Blades </a></li>
                <li class="model" data-model="292" id="model_292"><a href="#">Window Tint</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_314" style="display:none">
                <li class="model" data-model="343" id="model_343"><a href="#">Armrest </a></li>
                <li class="model" data-model="414" id="model_414"><a href="#">Ashtray</a></li>
                <li class="model" data-model="415" id="model_415"><a href="#">Back &amp; Neck Care</a></li>
                <li class="model" data-model="419" id="model_419"><a href="#">Car Organizers</a></li>
                <li class="model" data-model="420" id="model_420"><a href="#">Car Tissue Box</a></li>
                <li class="model" data-model="316" id="model_316"><a href="#">Carpets</a></li>
                <li class="model" data-model="344" id="model_344"><a href="#">Cigarette Lighters</a></li>
                <li class="model" data-model="416" id="model_416"><a href="#">Console Box</a></li>
                <li class="model" data-model="417" id="model_417"><a href="#">Dashboard Carpet</a></li>
                <li class="model" data-model="320" id="model_320"><a href="#">Door Parts</a></li>
                <li class="model" data-model="315" id="model_315"><a href="#">Floor Mats</a></li>
                <li class="model" data-model="400" id="model_400"><a href="#">Gear Knobs</a></li>
                <li class="model" data-model="418" id="model_418"><a href="#">Interior Chrome Accessories</a></li>
                <li class="model" data-model="341" id="model_341"><a href="#">Mobile Chargers &amp; Holders</a></li>
                <li class="model" data-model="322" id="model_322"><a href="#">Other</a></li>
                <li class="model" data-model="342" id="model_342"><a href="#">Seat Belt</a></li>
                <li class="model" data-model="317" id="model_317"><a href="#">Seat Covers</a></li>
                <li class="model" data-model="318" id="model_318"><a href="#">Seats</a></li>
                <li class="model" data-model="321" id="model_321"><a href="#">Shades</a></li>
                <li class="model" data-model="319" id="model_319"><a href="#">Steering Covers</a></li>
                <li class="model" data-model="392" id="model_392"><a href="#">Trunk Mats</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_265" style="display:none">
                <li class="model" data-model="274" id="model_274"><a href="#">Alarm System</a></li>
                <li class="model" data-model="337" id="model_337"><a href="#">Bar Lights </a></li>
                <li class="model" data-model="270" id="model_270"><a href="#">Batteries</a></li>
                <li class="model" data-model="338" id="model_338"><a href="#">Bulbs </a></li>
                <li class="model" data-model="399" id="model_399"><a href="#">Cables</a></li>
                <li class="model" data-model="273" id="model_273"><a href="#">Central Locking</a></li>
                <li class="model" data-model="272" id="model_272"><a href="#">Fog Lamps</a></li>
                <li class="model" data-model="335" id="model_335"><a href="#">Headlights</a></li>
                <li class="model" data-model="268" id="model_268"><a href="#">HID&#39;s</a></li>
                <li class="model" data-model="379" id="model_379"><a href="#">Horns</a></li>
                <li class="model" data-model="386" id="model_386"><a href="#">Ignition Switch </a></li>
                <li class="model" data-model="340" id="model_340"><a href="#">Indicator Lights</a></li>
                <li class="model" data-model="339" id="model_339"><a href="#">Interior Lights </a></li>
                <li class="model" data-model="267" id="model_267"><a href="#">LED&#39;s</a></li>
                <li class="model" data-model="266" id="model_266"><a href="#">Lights</a></li>
                <li class="model" data-model="269" id="model_269"><a href="#">Navigation</a></li>
                <li class="model" data-model="115" id="model_115"><a href="#">Other</a></li>
                <li class="model" data-model="388" id="model_388"><a href="#">Plug Wire</a></li>
                <li class="model" data-model="271" id="model_271"><a href="#">Plugs</a></li>
                <li class="model" data-model="421" id="model_421"><a href="#">Switches &amp; Buttons</a></li>
                <li class="model" data-model="336" id="model_336"><a href="#">Tail Lights</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_356" style="display:none">
                <li class="model" data-model="360" id="model_360"><a href="#">ATF/MTF Oil</a></li>
                <li class="model" data-model="358" id="model_358"><a href="#">Brake Oil</a></li>
                <li class="model" data-model="362" id="model_362"><a href="#">CVTF Oil</a></li>
                <li class="model" data-model="357" id="model_357"><a href="#">Engine Oil</a></li>
                <li class="model" data-model="359" id="model_359"><a href="#">Gear Oil</a></li>
                <li class="model" data-model="361" id="model_361"><a href="#">PSF Oil</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_323" style="display:none">
                <li class="model" data-model="27" id="model_27"><a href="#">Boats - Ships</a></li>
                <li class="model" data-model="30" id="model_30"><a href="#">Other</a></li>
                <li class="model" data-model="29" id="model_29"><a href="#">Trucks - Commercial vehicles</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_350" style="display:none">
                <li class="model" data-model="354" id="model_354"><a href="#">Cameras</a></li>
                <li class="model" data-model="426" id="model_426"><a href="#">GPS Trackers</a></li>
                <li class="model" data-model="353" id="model_353"><a href="#">Locks</a></li>
                <li class="model" data-model="352" id="model_352"><a href="#">Parking Sensors </a></li>
                <li class="model" data-model="351" id="model_351"><a href="#">Security Alarm Systems</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_363" style="display:none">
                <li class="model" data-model="364" id="model_364"><a href="#">Air Compressor</a></li>
                <li class="model" data-model="368" id="model_368"><a href="#">Car Jack </a></li>
                <li class="model" data-model="367" id="model_367"><a href="#">Jump Starter Kits</a></li>
                <li class="model" data-model="370" id="model_370"><a href="#">Key Chains</a></li>
                <li class="model" data-model="366" id="model_366"><a href="#">Tool Kits</a></li>
                <li class="model" data-model="369" id="model_369"><a href="#">Tow Hooks &amp; Chains</a></li>
                <li class="model" data-model="365" id="model_365"><a href="#">Tyre Pressure Guage</a></li>
            </ul>
            <ul class="model-listings fs14 get-listing models_for_251" style="display:none">
                <li class="model" data-model="253" id="model_253"><a href="#">Alloy Wheels</a></li>
                <li class="model" data-model="425" id="model_425"><a href="#">Car Tyres</a></li>
                <li class="model" data-model="73" id="model_73"><a href="#">Other</a></li>
                <li class="model" data-model="252" id="model_252"><a href="#">Tyres</a></li>
                <li class="model" data-model="397" id="model_397"><a href="#">Wheel Bearings</a></li>
                <li class="model" data-model="254" id="model_254"><a href="#">Wheel Covers</a></li>
            </ul>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary submit-button" data-dismiss="modal" disabled>done</button>
  </div>
</div>
    </div>
  </div>
          <div class="form-group">
            <label class="col-md-3" for="make">Category<span class="text-error">*</span></label>
            <div class="col-md-9 car-select-parent">
              <input id="category_selector" name="category_selector" placeholder="Category/SubCategory" type="text" value="" />
              <i class="fa fa-check-circle input-success-icon generic-green"></i><i class="fa fa-exclamation-circle input-failure-icon generic-red"></i>
              <ul class="parsley-errors-list">
                <li id="category_selector_error"></li>
              </ul>
              <input class="apply-parsley" data-parsley-error-message="Accessory Sub-Category is Required" data-parsley-errors-container="#category_selector_error" data-parsley-required="true" data-parsley-trigger="change" id="parent_category_id" name="parent_category_id" type="hidden" />
              <input class="apply-parsley" data-parsley-error-message="Accessory Sub-Category is Required" data-parsley-errors-container="#category_selector_error" data-parsley-required="true" data-parsley-trigger="change" id="ad_listing_category_id" name="ad_listing[category_id]" type="hidden" />
              
            </div>
          </div>

            <div class="form-group">
              <label class="col-md-3" for="condition">
              Condition<span class="text-error">*</span>
              </label>
              <div class="col-md-5">
                <select data-parsley-error-message="Please select accessory condition" data-parsley-errors-container="" data-parsley-required="true" data-parsley-trigger="change" id="ad_listing_condition" name="ad_listing[condition]"><option value=""> - Select Condition - </option>
<option value="1">New</option>
<option value="2">Used</option></select>
              </div>
              <div class="col-md-4">
                <div class="form-hint">
                  <img alt="Hint" class="hint-img" src="{{asset('website')}}/assets/img/bulb.svg" />
                  We don&#39;t allow promotional messages that are not relevant to the ad
                </div>
              </div>
            </div>

              

          <input id="ad_listing_step" name="ad_listing[step]" type="hidden" value="0" />


          <div class="form-group ">
        <label class="col-md-3" for="description">
        Describe Your Accessory<span class="text-error">*</span></label>
        <div class="col-md-9">
    <textarea class="character-count ad_listing_description full-field" cols="40" columns="50" data-parsley-error-message="This value is required" data-parsley-pattern-message="Please remove any mobile or phone number from comments." data-parsley-pattern="^(?:(?![0-9]{3}[- ]*[0-9]{7})(.|\n|\r))*$" data-parsley-remote-validator="validateDescription" data-parsley-remote="1" data-parsley-required="true" data-parsley-trigger="change" id="ad_listing_description" maxlength="995" name="ad_listing[description]" onblur="return updateTextAreaCount(this, event,&#39;plus&#39;,&#39;.ad_listing_description&#39;,995, &#39;#remaining_chars_info&#39;); if(this.value==&#39;&#39;){this.style.fontStyle=&#39;italic&#39;;this.style.color=&#39;#7f7f7f&#39;;this.value=&#39;enter text&#39;;}" onchange="$(&#39;.parsley-errorField&#39;).remove();" onfocus="if(this.value==&#39;enter text&#39;){this.value=&#39;&#39;;this.style.color=&#39;#333&#39;;this.style.fontStyle=&#39;normal&#39;}" onkeydown="return updateTextAreaCount(this, event,&#39;plus&#39;,&#39;.ad_listing_description&#39;,995, &#39;#remaining_chars_info&#39;);" onkeypress="return updateTextAreaCount(this, event,&#39;plus&#39;,&#39;.ad_listing_description&#39;,995, &#39;#remaining_chars_info&#39;);" onkeyup="return updateTextAreaCount(this, event,&#39;plus&#39;,&#39;.ad_listing_description&#39;,995, &#39;#remaining_chars_info&#39;);" onpaste="return updateTextAreaCount(this, event,&#39;plus&#39;,&#39;.ad_listing_description&#39;,995, &#39;#remaining_chars_info&#39;);" placeholder="" rows="6"></textarea>
      
  </div>
</div>


        </fieldset>
      </div>
      
      <fieldset>
        <div class="well">
          <legend class="noborder">Expected Selling Price</legend>
          
  <div class="form-group">
    <label class="col-md-3" for="price" id="price-label"><span>Price<span class='text-error'>*</span> <span>(Rs.)</span></span></label>
    <div class="col-md-5">
      <div class="input-group">
        <span class="input-group-addon fs16">PKR</span>
        <input class="prefilled" data-parsley-error-message="Enter valid Price" data-parsley-errors-container="#error-price" data-parsley-pattern="^(([1-9][0-9,]*))$" data-parsley-required="true" data-parsley-trigger="change" id="price_formatted" maxlength="9" name="price_formatted" onkeyup="updateAmountInWords(&#39;#price_formatted&#39;, &#39;.ad_listing_price&#39;, &#39;.amountInWords&#39;);" placeholder="Price" type="text" value="" />
      </div>
      <div id="error-price"></div>
        <input class="ad_listing_price" id="ad_listing_price" name="ad_listing[price]" type="hidden" value="" />
      <p class="amountInWords nomargin generic-blue-light fs12" style="display:none"></p>
    </div>
    <div class="col-md-4">
      <div class="form-hint">
        <img alt="Hint" class="hint-img" src="{{asset('website')}}/assets/img/bulb.svg" />
        Please enter a realistic price to get more genuine responses.
      </div>
    </div>
  </div>





<div id="EvaluatePriceModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
    </div>
  </div>
</div>




        </div>
      </fieldset>


      <div class="well">
        <fieldset>
          

<legend class="nomargin noborder">
  Upload Photos
  <span class="text-error"></span>
</legend>
<div class="upload-image-hint clearfix mt20 pos-rel" id="img_upload_tr">  
  <div id="plupload_uploader" class="clearfix text-center">
    <div id="img_upload">
      <div id="moreUploads">
        <span id="uploadify_limit_reached" class="uploadify_help" onclick="$(this).hide(); $('#uploadify_limit_help').fadeIn(500);">
          <img alt="Error-msg-arrow" src="{{asset('website')}}/assets/img/error-msg-arrow-44fdb1d2522ee92c4d83a54fd63919e0.png" />
          Sorry, you have reached the maximum number of pictures allowed.
        </span>
        <div id="container">
          <img alt="Photos" src="{{asset('website')}}/assets/img/photos-d7a9ea70286f977064170de1eeb6dca8.svg" style="vertical-align: -5px" />
          <div class="add-photo mb30">
            <a id="pickfiles" class="pickfiles btn btn-success" href="javascript:" style="display:inline-block;height: 50px;">+ Add Photos</a>
            <p id="pickfiles" class="pickfiles btn btn-success" href="javascript:" onclick="$('#uploadify_limit_help').hide(); $('#uploadify_limit_reached').fadeIn(500);" style="display:none;">+ Add Photos</p>
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
      <strong class='generic-basic'>Adding at least 8 pictures</strong> improves the chances for a quick sale.
    </div>
    <div class="col-md-5 col-md-offset-1">
      <i class="fa fa-check-circle-o"></i>
        <strong class='generic-basic'>Adding clear pictures</strong> from All Sides of your accessory increases the quality of your Ad and gets you noticed more.
    </div>
    <div class="col-md-5 col-md-offset-4 mt30">
      <i class="fa fa-check-circle-o"></i> 
      <strong class='generic-basic'>Photos should be</strong>  in 'jpeg, jpg, png, gif' format only.
    </div>
  </div>
  

</div>
        </fieldset>
      </div>

      <div class="well">
        <fieldset>
          <legend class="noborder">Contact Information</legend>
<div id="contact_seller_div">

  

    <input id="ad_listing_display_name" name="ad_listing[display_name]" type="hidden" value="Ahmad Ijaz" />

    
      <input id="user_email" name="user[email]" type="hidden" />
</div>

<div class="form-group">
  <label class="col-md-3" for="phone_number"> Mobile Number<span class="text-error">*</span></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-th"></i></span>
      <input class="ad-mobile-number prefilled" data-parsley-error-message="Enter a valid mobile number." data-parsley-errors-container="#error-mobile-number" data-parsley-pattern="^03[0-9]{9}$" data-parsley-required="true" data-parsley-trigger="change" id="ad_listing_phone" maxlength="12" name="ad_listing[phone]" placeholder="Mobile Number" size="30" type="text" />
    </div>
    <div id="error-mobile-number"></div>
  </div>
  <div class="col-md-4">
    <div class="form-hint">
      <i class="fa fa-mobile hint-icon"></i>
      Enter a genuine 11 digit mobile no. with format 03XXXXXXXXX. All inquires will come on this number.
    </div>
  </div>

</div>
  <div class="form-group secondary-phone">
    <label class="col-md-3" for="second_phone" class="note">Secondary Number <span class="optional">(Optional)</span></label>
    <div class="col-md-9">
      <input data-parsley-error-message="Enter valid number" data-parsley-pattern="^[0-9]{7,}$" data-parsley-trigger="change" id="ad_listing_phone_1" maxlength="14" name="ad_listing[phone_1]" placeholder="Secondary Number" size="30" type="text" />
    </div>
  </div>

<div class="hide">
  <input id="ad_listing_date_expired" maxlength="100" name="ad_listing[date_expired]" size="100" type="text" value="45" />
</div>


<input id="ad_listing_scraped_id" name="ad_listing[scraped_id]" type="hidden" />
<input id="ad_listing_scraped_type" name="ad_listing[scraped_type]" type="hidden" />
<input id="scraped_category" name="scraped_category" type="hidden" />
        </fieldset>
      </div>

      <fieldset>
        <div class="form-group text-right mb30">
          <div class="col-md-12">
            <button type="submit" class="btn btn-success btn-lg fs16" style="height: 50px;" id="submit_form">Submit &amp; Continue</button>
          </div>
        </div>
      </fieldset>

    </div>

</form>

<div id="duplicate_ads_alert" ></div>

	  </div>
	</section>
</div>
    </div>
    <div id="sign_in_pop_up" class="modal" tabindex="-1" role="dialog" aria-labelledby="Sign In Pop Up" aria-hidden="true">
  <div class="modal-dialog" style="width: 680px">
    <div class="modal-content">
      <div class="modal-body p30">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin: -15px -15px 0 0;" onclick="$('#sign_in_pop_up').modal('hide');">×</button>

        <div class="row">
          <div class="col-md-6 why-login-left">
            <h2>Why Signin?</h2>
            <ul class="list-unstyled login-points-list">
              <li>
                <img class="pull-left" src="{{asset('website')}}/assets/img/login-point-1.png" />
                <h4>Safely Connect with Buyers</h4>
                <p>You can connect with thousands of buyers and quick search</p>
              </li>
              <li>
                <img class="pull-left" src="{{asset('website')}}/assets/img/login-point-2.png" />
                <h4>Create Quick Alerts</h4>
                <p>Create alerts quickly and get notified when new listing become available</p>
              </li>
              <li>
                <img class="pull-left" src="{{asset('website')}}/assets/img/login-point-3.png">
                <h4>Save Your Favourite Ads</h4>
                <p>Easily save ads and accessories for a later time</p>
              </li>
            </ul>
          </div>

          <div class="col-md-6 why-login-right">
            
            <div class="registration-page registration-panel" style="min-height: auto;">
              <div class="registration-span">
                <h2 class="text-center mb40">Sign in to continue</h2>

                <a href="#" class="btn btn-social with-mobile btn-block" data-login-method="SignInWithMobileNumber" onclick="trackEvents(&#39;Login&#39;,&#39;viaPhone&#39;,&#39;ad_listings - sell&#39;); $(&#39;#screen_name&#39;).text(&#39;ad_listings - sell&#39;);"><i class='fa fa-mobile'></i> Continue with Mobile Number</a>

                <a href="#" class="btn btn-block btn-social google" data-login-method="SignInWithGoogle"><i class='fa fa-google'></i> Continue with Google</a>

                <a href="#" class="btn btn-block btn-social facebook" data-login-method="SignInWithFacebook"><i class='fa fa-facebook2'></i> Continue with Facebook</a>
                <div class="fb-faces" style="margin: auto;width: 300px">
                  <span class="fb-facepile" data-app-id="139280839547845" data-width="300px" data-height="28" data-max-rows="1" data-colorscheme="light" data-size="small" data-show-count="true"></span>
<div id="fb-root"></div><p></p>
                </div>

                <a href="/loginRegister" class="btn btn-block btn-social with-email" data-login-method="SignInWithEmail" ><i class='fa fa-envelope'></i> Continue with Email</a>
                <input id="intent_url" name="intent_url" type="hidden" value="" />
                <input id="screen_name" name="screen_name" type="hidden" />
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>














@endsection