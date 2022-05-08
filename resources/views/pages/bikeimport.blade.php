@extends('layouts.main')

@section('title')
<title> Bike Import - 2Wheels</title>
@endsection

@section('contents')
<div class="header-space" ></div>
<section >
  <div class="container">
    <h1>How to import a Bike in Pakistan? - Bike Import</h1>
    <div class="well">
      <div class="row">
        <div class="col-md-9">It is common to face difficulties when you are in the market to buy an imported Bike in Pakistan. Sometimes the color is undesirable, the grade is low, mileage is high; you’re not sure about your purchase. If you are one of those people who are not satisfied with the options available in the market, then you are at the right place. You can now import your favorite Bike with desired options, grade, mileage and any other thing that bothers you when buying a vehicle from the local market, without having to leave your computer. Just tell us your needs and let our partners take Bikee of the rest.</div>
        <div class="col-md-3 text-center">
          <button class="btn btn-primary mt40" data-toggle="modal" onclick="return show_popup_favourite('From - ImportLanding');">Import My Favourite Bike</button>
        </div>
      </div>
    </div>
  </div>
  <div id="action"></div>

<form accept-charset="UTF-8" action="/Bike-import/" class="form-horizontal nomargin text-left" data-parsley-validate="" enctype="multipart/form-data" id="new_Bike_import_lead" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="7Hsojy4MNZ2A6qAHtT41LyIsKJ/0fiJGbreoapjo7xw=" /></div>
  <input id="check_for_newsletter" name="check_for_newsletter" type="hidden" value="" />

  <div id="Bike_import_favourite" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4>Import Favourite Bike</h4>
      </div>
      <div class="modal-body">


    <div class="form-group" id="make"><label class="col-md-4 control-label">Make<span class="text-error">*</span></label><div class="col-md-8">
      <select name="Bike_import_lead[make_id]" id="Bike_import_lead_make_id" class="chzn-select" onchange="get_imported_models(this.value,'#Bike_import_lead_model_id');" data-parsley-required="true" data-parsley-trigger="change" data-parsley-error-message= "Please select make">
        <option value="">Make</option>
        <optgroup label='Popular Makes'>
        <option value="41">Suzuki</option>
<option value="42">Toyota</option>
<option value="14">Honda</option>
<option value="8">Daihatsu</option>
<option value="30">Nissan</option>
        </optgroup>
      <optgroup label='Other Makes'>
        <option value="66">Adam</option>
<option value="50">Alfa Romeo</option>
<option value="53">Audi</option>
<option value="103">Austin</option>
<option value="120">BAIC</option>
<option value="88">Bentley</option>
<option value="3">BMW</option>
<option value="54">Buick</option>
<option value="4">Cadillac</option>
<option value="68">Changan</option>
<option value="69">Chery</option>
<option value="5">Chevrolet</option>
<option value="56">Chrysler</option>
<option value="55">Citroen</option>
<option value="45">Classic Bike</option>
<option value="111">Daehan</option>
<option value="7">Daewoo</option>
<option value="96">Daimler</option>
<option value="57">Datsun</option>
<option value="102">DFSK</option>
<option value="52">Dodge</option>
<option value="109">Dongfeng</option>
<option value="93">FAW</option>
<option value="75">Ferrari</option>
<option value="11">Fiat</option>
<option value="58">Ford</option>
<option value="77">Geely</option>
<option value="13">GMC</option>
<option value="101">Golden Dragon</option>
<option value="100">Golf</option>
<option value="99">Hillman</option>
<option value="72">Hino</option>
<option value="78">Hummer</option>
<option value="16">Hyundai</option>
<option value="18">Isuzu</option>
<option value="108">JAC</option>
<option value="19">Jaguar</option>
<option value="20">Jeep</option>
<option value="117">Jinbei</option>
<option value="114">JMC</option>
<option value="112">JW Forland</option>
<option value="106">Kaiser Jeep</option>
<option value="21">KIA</option>
<option value="107">Lada</option>
<option value="87">Lamborghini</option>
<option value="23">Land Rover</option>
<option value="24">Lexus</option>
<option value="59">Lincoln</option>
<option value="104">Maserati</option>
<option value="92">Master</option>
<option value="26">Mazda</option>
<option value="116">McLaren</option>
<option value="27">Mercedes Benz</option>
<option value="60">MG</option>
<option value="28">MINI</option>
<option value="29">Mitsubishi</option>
<option value="89">Morris</option>
<option value="85">Moto Guzzi</option>
<option value="118">Mushtaq</option>
<option value="61">Oldsmobile</option>
<option value="31">Opel</option>
<option value="32">Peugeot</option>
<option value="62">Plymouth</option>
<option value="33">Pontiac</option>
<option value="70">Porsche</option>
<option value="115">Prince</option>
<option value="80">Proton</option>
<option value="49">Range Rover</option>
<option value="35">Renault</option>
<option value="98">Rolls Royce</option>
<option value="65">Roma</option>
<option value="67">Rover</option>
<option value="86">Royal Enfield</option>
<option value="64">Saab</option>
<option value="74">Scion</option>
<option value="39">Skoda</option>
<option value="79">Smart</option>
<option value="90">Sogo</option>
<option value="94">Sokon</option>
<option value="71">SsangYong</option>
<option value="40">Subaru</option>
<option value="110">Tesla</option>
<option value="95">Triumph</option>
<option value="113">United</option>
<option value="73">Vauxhall</option>
<option value="43">Volkswagen</option>
<option value="51">Volvo</option>
<option value="105">Willys</option>
<option value="119">ZOTYE</option>
      </optgroup>
      </select>
</div></div>
    <div class="form-group" id="model"><label class="col-md-4 control-label">Model<span class="text-error">*</span></label><div class="col-md-8">
      <select class="chzn-select" data-add-other="true" data-native-menu="true" data-parsley-error-message="Please select model" data-parsley-required="true" data-parsley-trigger="change" id="Bike_import_lead_model_id" name="Bike_import_lead[model_id]"><option value=''>Model</option></select>
      <p class="nomargin" id="model-error-message"></p>
</div></div>
    <div class="form-group" id="other"><label class="col-md-4 control-label">Bike Name<span class="text-error">*</span></label><div class="col-md-8">
      <input data-parsley-length="[2,30]" id="Bike_import_lead_Bike_name" name="Bike_import_lead[Bike_name]" placeholder="[Make] [Model]" size="30" type="text" />
</div></div>
    <div class="form-group" id=""><label class="col-md-4 control-label">Year<span class="text-error">*</span></label><div class="col-md-8">
      <select data-parsley-error-message="Please Select Year" data-parsley-required="true" data-parsley-trigger="change" id="Bike_import_lead_model_year" name="Bike_import_lead[model_year]"><option value="">Year</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option></select>
</div></div>
    <div class="form-group" id=""><label class="col-md-4 control-label">Name<span class="text-error">*</span></label><div class="col-md-8">
      <input data-parsley-error-message="Enter valid name" data-parsley-length="[3,25]" data-parsley-pattern="^[A-Za-z ]{3,25}$" data-parsley-required="true" data-parsley-trigger="change" id="Bike_import_lead_name" name="Bike_import_lead[name]" size="30" type="text" value="Ahmad Ijaz" />
</div></div>

            <input id="user_email" name="user[email]" type="hidden" value="ahmadijaz385@gmail.com" />


    <div class="form-group" id=""><label class="col-md-4 control-label">City<span class="text-error">*</span></label><div class="col-md-8">
      <select id="Bike_import_lead_city_id" name="Bike_import_lead[city_id]"><option value="409">Karachi</option>
<option value="410">Lahore</option>
<option value="408">Islamabad</option>
<option value="313">Rawalpindi</option>
<option value="288">Peshawar</option>
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
<option value="403">Zahir Peer</option></select>
</div></div>
    <div class="form-group" id=""><label class="col-md-4 control-label">Mobile Number<span class="text-error">*</span></label><div class="col-md-8">
      <input data-parsley-error-message="Enter a valid mobile number." data-parsley-maxlength="12" data-parsley-minlength="11" data-parsley-pattern="^03[0-9]{9}$" data-parsley-required="true" data-parsley-trigger="change" data-parsley-type="digits" id="Bike_import_lead_mobile" name="Bike_import_lead[mobile]" size="30" type="text" />
</div></div>
    <div class="form-group" id=""><label class="col-md-4 control-label"></label><div class="col-md-8">
      <!-- <div> -->
        <input checked="checked" id="checkboxmagazine" name="checkboxmagazine" type="checkbox" value="yes" />
        Send me updates and relevant news.
      <!-- </div> -->
</div></div>
    <div class="disclaimer">I authorize 2Wheels to share my contact information with its partners to get in touch with me through email, SMS or phone.</div>

      </div>
      <div class="modal-footer">
        <input id="submitbutton" value="Submit" class="btn btn-primary" type="submit" onclick="setValueForNewsLetter(&#39;#checkboxmagazine&#39;);trackEventAfterValidation(this,&#39;BikeImport&#39;, &#39;FormSubmitDone&#39;, $(&#39;#action&#39;).val())"/>
      </div>
    </div>
  </div>
</div>
</form>
<script charset="utf-8">
    $(document).ready(function() {
    //$('#Bike_import_lead_model_year').hide();
    $('#other').hide();

    });

    $("#Bike_import_lead_make_id").on('change',(function () {

        if($('#Bike_import_lead_make_id option:selected').text() == 'Others' || ($('#Bike_import_lead_make_id option:selected').text() == 'Others'))
        {


            $('#model').hide();
            $('#other').show();

           // $('form').parsley().destroy();
            //set required attribute on input to false
            $('#Bike_import_lead_model_id').attr('data-parsley-required', 'false');
            $('#other input').attr('data-parsley-required', 'true');
            $('#Bike_import_lead_model_id').val('Other');
            //reinitialize parsley
            $('form').parsley();
        }
        else
        {
            $('#model').show();
            $('#other').hide();

            $('#Bike_import_lead_model_id').attr('data-parsley-required', 'true');
            $('#other input').attr('data-parsley-required', 'false');
        }

    }));

    $("#Bike_import_lead_model_id").on('change',(function () {
        if( $('#Bike_import_lead_model_id option:selected').text() == 'Other' || $('#Bike_import_lead_model_id option:selected').text() == 'Others')
        {
            selected_make = '';
            var selected_make = $('#Bike_import_lead_make_id option:selected').text();
            $('#Bike_import_lead_Bike_name').val(selected_make);
            $('#other').show();
            $('#model').hide();
        }
        else
        {
            $('#make').show();
            $('#model').show();
            $('#other').hide();
        }

    }));
</script>
</section>

  <section>
    <div class="container">
      <h2>Popular Imported Bike in Pakistan</h2>
      <div class="well">
        <ul class="row fs12">
              <li class="col-md-3">
                <a href="/new-Bike/daihatsu/mira/2006-2017/">
                  <div class="img-box">
                    <img src="{{asset('website')}}/assets/img/Slide_chinese-bikes-ow-r3-400cc-2021-48793770.jpg" class="img-content" alt="Daihatsu Mira" />
                  </div>
                  <h3 class="nomargin mt10" id="mycurstodiv_0">Yamaha YZF-R6 2021</h3>
                </a>
                <a href="javascript:void;" data-toggle="modal" id="import_Bike_121" onclick="return show_popup(8,305,'From - PopularModels');">Import This Bike</a>
              </li>
              <li class="col-md-3">
                <a href="/new-Bike/toyota/vitz/">
                  <div class="img-box">
                    <img src="{{asset('website')}}/assets/img/Slide_chinese-bikes-ow-r3-400cc-2021-48793770.jpg" class="img-content" alt="Toyota Vitz" />
                  </div>
                  <h3 class="nomargin mt10" id="mycurstodiv_1">Yamaha YZF-R6 2021</h3>
                </a>
                <a href="javascript:void;" data-toggle="modal" id="import_Bike_139" onclick="return show_popup(42,294,'From - PopularModels');">Import This Bike</a>
              </li>
              <li class="col-md-3">
                <a href="/new-Bike/toyota/passo/2010-2016/">
                  <div class="img-box">
                    <img src="{{asset('website')}}/assets/img/Slide_kawasaki-ninja-zx300-2019-32848196.jpg" class="img-content" alt="Toyota Passo" />
                  </div>
                  <h3 class="nomargin mt10" id="mycurstodiv_2">Harley Davidson Night Rod Special 2021</h3>
                </a>
                <a href="javascript:void;" data-toggle="modal" id="import_Bike_145" onclick="return show_popup(42,338,'From - PopularModels');">Import This Bike</a>
              </li>
              <li class="col-md-3">
                <a href="/new-Bike/honda/vezel/">
                  <div class="img-box">
                    <img src="{{asset('website')}}/assets/img/honda_freed.jpg" class="img-content" alt="Honda Vezel" />
                  </div>
                  <h3 class="nomargin mt10" id="mycurstodiv_3">Super Power Leo 200 2021</h3>
                </a>
                <a href="javascript:void;" data-toggle="modal" id="import_Bike_285" onclick="return show_popup(14,826,'From - PopularModels');">Import This Bike</a>
              </li>
        </ul>
      </div>
    </div>
  </section>
<section>
  <div class="container">
    <div class="Bikeure-detail auction-detail auction-pinch clearfix">
  <img alt="Buying a japanese Bike?" class="right-img pull-right" src="{{asset('website')}}/assets/img/360-Black-SE-30.png" />
  <h3 class="mt0 mb5">Buying a japanese Bike?</h3>
  <p class="fs16 mb13">Get its verified auction sheet from 2Wheels</p>
</div>
  </div>
</section>
    <section>
      <div class="container">

      <h2>
        Bike Import News
        <div class="well">
          <ul class="row fs12">
            @forelse ($allnews as $news)
            <li class="col-md-3">
              <a href="/new-Bike/daihatsu/mira/2006-2017/">
                <div class="img-box">
                  <img src="{{asset('storage')}}/images/blogs/{{$news->image}}" class="img-content" alt="Daihatsu Mira" />
                </div>
                <h3 class="nomargin mt10" id="mycurstodiv_0">{{$news->name}}</h3>
              </a><p>{{$news->description}}</p></li>
            @empty
                <p>no news yet ..</p>
            @endforelse

          </ul>
        </div>
      </h2>
      <div class="blog-enteries clearfix primary-lang" dir="ltr">
        <div class="noborder nomargin">
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">

    </div>
  </section>



  <section itemscope itemtype="http://schema.org/WebPage" style="margin-bottom: 120px">
    <div class="container related_searches primary-lang fwn">
      <h2>Looking to buy a used Bike?</h2>
      <hr class="mb0">
          <div class='p15 fs12 '>
            <h3 class="fwm generic-grey mt0">Used Bike by Make Model</h3>
            <ul class='list-unstyled nomargin row generic-light-grey'>
              @foreach ($models as $model)
              <li class='col-md-3'>
                <a href="{{route('used_bike_by_model', $model->id)}}" itemprop="relatedLink" title="Corolla Bike for sale in Pakistan">{{$model->name}}</a>
                  ({{count($model->bikes)}}+)
              </li>
              @endforeach

          </ul>
        </div>
        <hr class='nomargin'>
          <div class='p15 fs12 '>
            <h3 class="fwm generic-grey mt0">Used Bike by Companies</h3>
            <ul class='list-unstyled nomargin row generic-light-grey'>
              @foreach ($companies as $company)
              <li class='col-md-3'>
                <a href="{{route('used_bike_by_make', $company->id)}}" itemprop="relatedLink" title="Corolla Bike for sale in Pakistan">{{$company->name}}</a>
                  ({{count($company->bikes)}}+)
              </li>
              @endforeach
          </ul>
        </div>

    </div>
  </section>



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

                <a href="/login-with-mobile" class="btn btn-social with-mobile btn-block" data-login-method="SignInWithMobileNumber"><i class='fa fa-mobile'></i> Continue with Mobile Number</a>

                <a href="/oauth/google" class="btn btn-block btn-social google" data-login-method="SignInWithGoogle" ><i class='fa fa-google'></i> Continue with Google</a>

                <a href="/oauth/facebook" class="btn btn-block btn-social facebook" data-login-method="SignInWithFacebook" ><i class='fa fa-facebook2'></i> Continue with Facebook</a>
                <div class="fb-faces" style="margin: auto;width: 300px">
                  <span class="fb-facepile" data-app-id="139280839547845" data-width="300px" data-height="28" data-max-rows="1" data-colorscheme="light" data-size="small" data-show-count="true"></span>
<div id="fb-root"></div><p></p>
                </div>

                <a href="/login" class="btn btn-block btn-social with-email" data-login-method="SignInWithEmail" ><i class='fa fa-envelope'></i> Continue with Email</a>
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

<script>
    $(document).ready(function() {
        if(false){
            if (true){
                $('.sign-in-comp').click(function(event) {
                    let not_to_follow_path = '/used-Bike/sell/select-option';
                    if( this.pathname !=  not_to_follow_path){
                        event.preventDefault();
                        if (this.pathname != "" && this.pathname != undefined){
                            $('#intent_url').val(this.pathname);
                        }
                        $('#sign_in_pop_up').modal('show');
                    }
                });
            }
            else{
                $('.sign-in-comp').click(function(event) {
                    let not_to_follow_path = '/used-Bike/sell/select-option';
                        event.preventDefault();
                        if (this.pathname != "" && this.pathname != undefined){
                            $('#intent_url').val(this.pathname);
                        }
                        $('#sign_in_pop_up').modal('show');

                });
            }

            $('.registration-span a').click(function() {
                if (this.href.indexOf('intent_url') == -1){
                    let _href = this.href
                    _href = appendParam(_href , "intent_url",$('#intent_url').val());
                    this.href = _href
                }
                if ($(this).data("login-method") != undefined){
                    setCookie("login_method", $(this).data("login-method"))
                    setCookie("login_screen", "Bike_import_leads - index")
                }

            });
        }

        if($.cookie("fire_success_event") == "true") {
            if ($.cookie("login_method") != undefined) {
                var event_action = $.cookie("login_method").replace("SignInWith", "").concat('VerificationSuccessful');
                if ($.cookie("login_screen") != undefined) {
                    trackEvents('Login', event_action, $.cookie("login_screen"));
                }
                $.removeCookie("login_method", {path: '/'});
                $.removeCookie("fire_success_event", {path: '/'});
                $.removeCookie("login_screen", {path: '/'});
            }
        }

    });

    function appendParam(url , key , value) {
        return url + (url.indexOf('?') != -1 ? "&" : "?") + key + "=" + value ;
    }

    $('#sign_in_pop_up').on('show.bs.modal', function () {
        trackEvents('Login', 'LoginPopUp - Pitch',"Bike_import_leads - index");
    });

    $('#sign_in_pop_up').on('hide.bs.modal', function () {
        trackEvents('Login', 'LoginPopUp - Closed', "Bike_import_leads - index");
    });

</script>















@endsection
