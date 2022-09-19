@extends('layouts.main')

@section('title')
<title> Used Bike List - 2Wheels</title>
@endsection

@section('contents')


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

        <section class="search-main-outer">
            <div id="top-search-heading" style="margin-top: 155px; background-color: rgb(155, 154, 154)"  class="search-main-head">
                <div class="container">
                    <h1>Find Used Bikes &amp; Motorcycles in Pakistan</h1>
                    <p>Used Honda, Suzuki, Yamaha &amp; More</p>
                </div>
            </div>
            <div class="search-main">


                <div class="" tabindex="0">
                    {{-- <form action="{{ route('bike_search_result') }}" method="POST">
                        @csrf
                        <div id="used-cars">
                            <ul class="list-unstyled search-fields search-fields3 mt20 clearfix">
                                <li class="home-autocomplete-field">
                                    <input id="home-query" name="company_model" placeholder="Bike Make or Model"
                                        tabindex="2" type="text" value="" />
                                </li>
                                <li class="home-chzn">
                                    <select name="city" id="UsedCity" class="chzn-select" tabindex="1">
                                        <option value="">All Cities</option>
                                        <optgroup label="Popular Cities">
                                            <option value="karachi">Karachi</option>
                                            <option value="lahore">Lahore</option>
                                            <option value="islamabad">Islamabad</option>
                                            <option value="rawalpindi">Rawalpindi</option>
                                            <option value="peshawar">Peshawar</option>
                                        </optgroup>
                                        <optgroup label="Other Cities">
                                            <option value="abdul-hakeem">Abdul Hakeem</option>
                                            <option value="abottabad">Abottabad</option>
                                            <option value="adda-jahan-khan">Adda jahan khan</option>
                                            <option value="adda-shaiwala">Adda shaiwala</option>
                                            <option value="ahmed-pur-east">Ahmed Pur East</option>
                                            <option value="ahmedpur-lamma">Ahmedpur Lamma</option>
                                            <option value="akhora-khattak">Akhora khattak</option>
                                            <option value="ali-chak">Ali chak</option>
                                            <option value="alipur-chatta">Alipur Chatta</option>
                                            <option value="allahabad">Allahabad</option>
                                            <option value="amangarh">Amangarh</option>
                                            <option value="arifwala">Arifwala</option>
                                            <option value="attock">Attock</option>
                                            <option value="babarloi">Babarloi</option>
                                            <option value="babri-banda">Babri banda</option>
                                            <option value="badin">Badin</option>
                                            <option value="bahawal-nagar">Bahawal Nagar</option>
                                            <option value="bahawalpur">Bahawalpur</option>
                                            <option value="balakot">Balakot</option>
                                            <option value="bannu">Bannu</option>
                                            <option value="baroute">Baroute</option>
                                            <option value="basirpur">Basirpur</option>
                                            <option value="basti-shorekot">Basti Shorekot</option>
                                            <option value="bat-khela">Bat khela</option>
                                            <option value="batang--2">Batang</option>
                                            <option value="bhai-pheru">Bhai pheru</option>
                                            <option value="bhakkar">Bhakkar</option>
                                            <option value="bhalwal">Bhalwal</option>
                                            <option value="bhan-saeedabad">Bhan saeedabad</option>
                                            <option value="bhera">Bhera</option>
                                            <option value="bhikky">Bhikky</option>
                                            <option value="bhimber">Bhimber</option>
                                            <option value="bhirya-road">Bhirya road</option>
                                            <option value="bhuawana">Bhuawana</option>
                                            <option value="buchay-key">Buchay key</option>
                                            <option value="burewala">Burewala</option>
                                            <option value="chacklala">Chacklala</option>
                                            <option value="chaininda">Chaininda</option>
                                            <option value="chak-4-b-c">Chak 4 b c</option>
                                            <option value="chak-46">Chak 46</option>
                                            <option value="chak-jamal">Chak jamal</option>
                                            <option value="chak-jhumra">Chak jhumra</option>
                                            <option value="chak-shahzad">Chak Shahzad</option>
                                            <option value="chaksawari">Chaksawari</option>
                                            <option value="chakwal">Chakwal</option>
                                            <option value="charsadda">Charsadda</option>
                                            <option value="chashma">Chashma</option>
                                            <option value="chawinda">Chawinda</option>
                                            <option value="chichawatni">Chichawatni</option>
                                            <option value="chiniot">Chiniot</option>
                                            <option value="chishtian">Chishtian</option>
                                            <option value="chitral">Chitral</option>
                                            <option value="chohar-jamali">Chohar jamali</option>
                                            <option value="choppar-hatta">Choppar hatta</option>
                                            <option value="chowha-saidan-shah">Chowha saidan shah</option>
                                            <option value="chowk-azam">Chowk azam</option>
                                            <option value="chowk-mailta">Chowk mailta</option>
                                            <option value="chowk-munda">Chowk munda</option>
                                            <option value="chunian">Chunian</option>
                                            <option value="d-g-khan">D.G.Khan</option>
                                            <option value="dadakhel">Dadakhel</option>
                                            <option value="dadu">Dadu</option>
                                            <option value="dadyal-ak">Dadyal Ak</option>
                                            <option value="daharki">Daharki</option>
                                            <option value="dandot">Dandot</option>
                                            <option value="dargai">Dargai</option>
                                            <option value="darya-khan">Darya khan</option>
                                            <option value="daska">Daska</option>
                                            <option value="daud-khel">Daud khel</option>
                                            <option value="daulatpur">Daulatpur</option>
                                            <option value="deh-pathaan">Deh pathaan</option>
                                            <option value="depal-pur">Depal pur</option>
                                            <option value="dera-allah-yar">Dera Allah Yar</option>
                                            <option value="dera-ismail-khan">Dera ismail khan</option>
                                            <option value="dera-murad-jamali">Dera murad jamali</option>
                                            <option value="dera-nawab-sahib">Dera nawab sahib</option>
                                            <option value="dhatmal">Dhatmal</option>
                                            <option value="dhoun-kal">Dhoun kal</option>
                                            <option value="digri">Digri</option>
                                            <option value="dijkot">Dijkot</option>
                                            <option value="dina">Dina</option>
                                            <option value="dinga">Dinga</option>
                                            <option value="dir">Dir</option>
                                            <option value="doaaba">Doaaba</option>
                                            <option value="doltala">Doltala</option>
                                            <option value="domeli">Domeli</option>
                                            <option value="donga-bonga">Donga Bonga</option>
                                            <option value="dudial">Dudial</option>
                                            <option value="dunia-pur">Dunia Pur</option>
                                            <option value="eminabad">Eminabad</option>
                                            <option value="esa-khel">Esa Khel</option>
                                            <option value="faisalabad">Faisalabad</option>
                                            <option value="faqirwali">Faqirwali</option>
                                            <option value="farooqabad">Farooqabad</option>
                                            <option value="fateh-jang">Fateh Jang</option>
                                            <option value="fateh-pur">Fateh pur</option>
                                            <option value="feroz-walla">Feroz walla</option>
                                            <option value="feroz-watan">Feroz watan</option>
                                            <option value="ferozwatowan">Ferozwatowan</option>
                                            <option value="fiza-got">Fiza got</option>
                                            <option value="fort-abbass">Fort Abbass</option>
                                            <option value="gadoon-amazai">Gadoon amazai</option>
                                            <option value="gaggo-mandi">Gaggo mandi</option>
                                            <option value="gakhar-mandi">Gakhar mandi</option>
                                            <option value="gambat">Gambat</option>
                                            <option value="gambet">Gambet</option>
                                            <option value="garh-maharaja">Garh maharaja</option>
                                            <option value="garh-more">Garh more</option>
                                            <option value="garhi-yaseen">Garhi yaseen</option>
                                            <option value="gari-habibullah">Gari habibullah</option>
                                            <option value="gari-mori">Gari mori</option>
                                            <option value="gharo">Gharo</option>
                                            <option value="ghazi">Ghazi</option>
                                            <option value="ghotki">Ghotki</option>
                                            <option value="gilgit">Gilgit</option>
                                            <option value="gohar-ghoushti">Gohar ghoushti</option>
                                            <option value="gojar-khan">Gojar khan</option>
                                            <option value="gojra">Gojra</option>
                                            <option value="goth-machi">Goth Machi</option>
                                            <option value="goular-khel">Goular khel</option>
                                            <option value="guddu">Guddu</option>
                                            <option value="gujar-khan">Gujar Khan</option>
                                            <option value="gujranwala">Gujranwala</option>
                                            <option value="gujrat">Gujrat</option>
                                            <option value="gwadar">Gwadar</option>
                                            <option value="hafizabad">Hafizabad</option>
                                            <option value="hala">Hala</option>
                                            <option value="hangu">Hangu</option>
                                            <option value="harappa">Harappa</option>
                                            <option value="hari-pur">Hari pur</option>
                                            <option value="hariwala">Hariwala</option>
                                            <option value="haroonabad">Haroonabad</option>
                                            <option value="hasilpur">Hasilpur</option>
                                            <option value="hassan-abdal">Hassan abdal</option>
                                            <option value="hattar">Hattar</option>
                                            <option value="hattian">Hattian</option>
                                            <option value="hattian-lawrencepur">Hattian lawrencepur</option>
                                            <option value="havali-lakhan">Havali Lakhan</option>
                                            <option value="hawilian">Hawilian</option>
                                            <option value="hayatabad">Hayatabad</option>
                                            <option value="hazro">Hazro</option>
                                            <option value="head-marala">Head marala</option>
                                            <option value="hub">Hub</option>
                                            <option value="hub-balochistan">Hub-Balochistan</option>
                                            <option value="hujra-shah-mukeem">Hujra Shah Mukeem</option>
                                            <option value="hunza">Hunza</option>
                                            <option value="hyderabad">Hyderabad</option>
                                            <option value="iskandarabad">Iskandarabad</option>
                                            <option value="jacobabad">Jacobabad</option>
                                            <option value="jahaniya">Jahaniya</option>
                                            <option value="jaja-abasian">Jaja abasian</option>
                                            <option value="jalalpur-jattan">Jalalpur Jattan</option>
                                            <option value="jalalpur-pirwala">Jalalpur Pirwala</option>
                                            <option value="jampur">Jampur</option>
                                            <option value="jamrud-road">Jamrud road</option>
                                            <option value="jamshoro">Jamshoro</option>
                                            <option value="jan-pur">Jan pur</option>
                                            <option value="jand">Jand</option>
                                            <option value="jandanwala">Jandanwala</option>
                                            <option value="jaranwala">Jaranwala</option>
                                            <option value="jatlaan">Jatlaan</option>
                                            <option value="jatoi">Jatoi</option>
                                            <option value="jauharabad">Jauharabad</option>
                                            <option value="jehangira">Jehangira</option>
                                            <option value="jehlum">Jehlum</option>
                                            <option value="jhal-magsi">Jhal Magsi</option>
                                            <option value="jhand">Jhand</option>
                                            <option value="jhang">Jhang</option>
                                            <option value="jhatta-bhutta">Jhatta bhutta</option>
                                            <option value="jhudo">Jhudo</option>
                                            <option value="jin-pur">Jin Pur</option>
                                            <option value="k-n-shah">K.N. Shah</option>
                                            <option value="kabirwala">Kabirwala</option>
                                            <option value="kacha-khooh">Kacha khooh</option>
                                            <option value="kahuta">Kahuta</option>
                                            <option value="kakul">Kakul</option>
                                            <option value="kakur-town">Kakur town</option>
                                            <option value="kala-bagh">Kala bagh</option>
                                            <option value="kala-shah-kaku">Kala shah kaku</option>
                                            <option value="kalaswala">Kalaswala</option>
                                            <option value="kallar-kahar">Kallar Kahar</option>
                                            <option value="kallar-saddiyian">Kallar Saddiyian</option>
                                            <option value="kallur-kot">Kallur kot</option>
                                            <option value="kamalia">Kamalia</option>
                                            <option value="kamalia-musa">Kamalia musa</option>
                                            <option value="kamber-ali-khan">Kamber ali khan</option>
                                            <option value="kameer">Kameer</option>
                                            <option value="kamoke">Kamoke</option>
                                            <option value="kamra">Kamra</option>
                                            <option value="kandh-kot">Kandh kot</option>
                                            <option value="kandiaro">Kandiaro</option>
                                            <option value="karak">Karak</option>
                                            <option value="karoor-pacca">Karoor pacca</option>
                                            <option value="karore-lalisan">Karore lalisan</option>
                                            <option value="kashmir">Kashmir</option>
                                            <option value="kashmore">Kashmore</option>
                                            <option value="kasur">Kasur</option>
                                            <option value="kazi-ahmed">Kazi ahmed</option>
                                            <option value="khair-pur-mirs">Khair Pur Mirs</option>
                                            <option value="khairpur">Khairpur</option>
                                            <option value="khan-bela">Khan Bela</option>
                                            <option value="khan-qah-sharif">Khan qah sharif</option>
                                            <option value="khandabad">Khandabad</option>
                                            <option value="khanewal">Khanewal</option>
                                            <option value="khangarh">Khangarh</option>
                                            <option value="khanqah-dogran">Khanqah dogran</option>
                                            <option value="khanqah-sharif">Khanqah sharif</option>
                                            <option value="kharian">Kharian</option>
                                            <option value="khebar">Khebar</option>
                                            <option value="khewra">Khewra</option>
                                            <option value="khoski">Khoski</option>
                                            <option value="khudian-khas">Khudian Khas</option>
                                            <option value="khurian-wala">Khurian wala</option>
                                            <option value="khurrianwala">Khurrianwala</option>
                                            <option value="khushab">Khushab</option>
                                            <option value="khushal-kot">Khushal kot</option>
                                            <option value="khuzdar">Khuzdar</option>
                                            <option value="klaske">Klaske</option>
                                            <option value="kohat">Kohat</option>
                                            <option value="kot-addu">Kot addu</option>
                                            <option value="kot-bunglow">Kot bunglow</option>
                                            <option value="kot-ghulam-mohd">Kot ghulam mohd</option>
                                            <option value="kot-mithan">Kot mithan</option>
                                            <option value="kot-momin">Kot Momin</option>
                                            <option value="kot-radha-kishan">Kot radha kishan</option>
                                            <option value="kotla">Kotla</option>
                                            <option value="kotla-arab-ali-khan">Kotla arab ali khan</option>
                                            <option value="kotla-jam">Kotla jam</option>
                                            <option value="kotla-pathan">Kotla Pathan</option>
                                            <option value="kotly-ak">Kotly Ak</option>
                                            <option value="kotly-loharana">Kotly Loharana</option>
                                            <option value="kotri">Kotri</option>
                                            <option value="kumbh">Kumbh</option>
                                            <option value="kundina">Kundina</option>
                                            <option value="kunjah">Kunjah</option>
                                            <option value="kunri">Kunri</option>
                                            <option value="laki-marwat">Laki marwat</option>
                                            <option value="lala-musa">Lala musa</option>
                                            <option value="lala-rukh">Lala rukh</option>
                                            <option value="laliah">Laliah</option>
                                            <option value="lalshanra">Lalshanra</option>
                                            <option value="larkana">Larkana</option>
                                            <option value="lasbella">Lasbella</option>
                                            <option value="lawrence-pur">Lawrence pur</option>
                                            <option value="layyah">Layyah</option>
                                            <option value="liaqat-pur">Liaqat Pur</option>
                                            <option value="lodhran">Lodhran</option>
                                            <option value="lower-dir">Lower Dir</option>
                                            <option value="ludhan">Ludhan</option>
                                            <option value="madina">Madina</option>
                                            <option value="makli">Makli</option>
                                            <option value="malakand-agency">Malakand Agency</option>
                                            <option value="malikwal">Malikwal</option>
                                            <option value="mamu-kunjan">Mamu kunjan</option>
                                            <option value="mandi-bahauddin">Mandi bahauddin</option>
                                            <option value="mandra">Mandra</option>
                                            <option value="manga-mandi">Manga mandi</option>
                                            <option value="mangal-sada">Mangal sada</option>
                                            <option value="mangi">Mangi</option>
                                            <option value="mangla">Mangla</option>
                                            <option value="mangowal">Mangowal</option>
                                            <option value="manoabad">Manoabad</option>
                                            <option value="mansahra">Mansahra</option>
                                            <option value="mardan">Mardan</option>
                                            <option value="mari-indus">Mari indus</option>
                                            <option value="mastoi">Mastoi</option>
                                            <option value="matli">Matli</option>
                                            <option value="mehar">Mehar</option>
                                            <option value="mehmood-kot">Mehmood kot</option>
                                            <option value="mehrabpur">Mehrabpur</option>
                                            <option value="melsi">Melsi</option>
                                            <option value="mian-channu">Mian Channu</option>
                                            <option value="mian-wali">Mian Wali</option>
                                            <option value="minchanaabad">Minchanaabad</option>
                                            <option value="mingora">Mingora</option>
                                            <option value="mir-ali">Mir ali</option>
                                            <option value="miran-shah">Miran shah</option>
                                            <option value="mirpur-a-k">Mirpur A.K.</option>
                                            <option value="mirpur-khas">Mirpur khas</option>
                                            <option value="mirpur-mathelo">Mirpur mathelo</option>
                                            <option value="mithi">Mithi</option>
                                            <option value="mitiari">Mitiari</option>
                                            <option value="mohen-jo-daro">Mohen jo daro</option>
                                            <option value="more-kunda">More kunda</option>
                                            <option value="morgah">Morgah</option>
                                            <option value="moro">Moro</option>
                                            <option value="mubarik-pur">Mubarik pur</option>
                                            <option value="multan">Multan</option>
                                            <option value="muridkay">Muridkay</option>
                                            <option value="murree">Murree</option>
                                            <option value="musafir-khana">Musafir khana</option>
                                            <option value="mustung">Mustung</option>
                                            <option value="muzaffar-gargh">Muzaffar Gargh</option>
                                            <option value="muzaffarabad">Muzaffarabad</option>
                                            <option value="nankana-sahib">Nankana sahib</option>
                                            <option value="narang-mandi">Narang mandi</option>
                                            <option value="narowal">Narowal</option>
                                            <option value="naseerabad">Naseerabad</option>
                                            <option value="naukot">Naukot</option>
                                            <option value="naukundi">Naukundi</option>
                                            <option value="nawabshah">Nawabshah</option>
                                            <option value="new-saeedabad">New saeedabad</option>
                                            <option value="nilore">Nilore</option>
                                            <option value="noor-kot">Noor kot</option>
                                            <option value="nooriabad">Nooriabad</option>
                                            <option value="noorpur-nooranga">Noorpur nooranga</option>
                                            <option value="noshero-feroze">Noshero Feroze</option>
                                            <option value="noudero">Noudero</option>
                                            <option value="nowshera">Nowshera</option>
                                            <option value="nowshera-cantt">Nowshera cantt</option>
                                            <option value="nowshera-virka">Nowshera Virka</option>
                                            <option value="okara">Okara</option>
                                            <option value="other">Other</option>
                                            <option value="padidan">Padidan</option>
                                            <option value="pak-china-fertilizer">Pak china fertilizer</option>
                                            <option value="pak-pattan-sharif">Pak pattan sharif</option>
                                            <option value="panjan-kisan">Panjan kisan</option>
                                            <option value="panjgoor">Panjgoor</option>
                                            <option value="panno-aqil">Panno Aqil</option>
                                            <option value="panu-aqil">Panu Aqil</option>
                                            <option value="pasni">Pasni</option>
                                            <option value="pasroor">Pasroor</option>
                                            <option value="pattoki">Pattoki</option>
                                            <option value="phagwar">Phagwar</option>
                                            <option value="phalia">Phalia</option>
                                            <option value="phool-nagar">Phool nagar</option>
                                            <option value="piaro-goth">Piaro goth</option>
                                            <option value="pind-dadan-khan">Pind Dadan Khan</option>
                                            <option value="pindi-bhattiya">Pindi Bhattiya</option>
                                            <option value="pindi-bhohri">Pindi bhohri</option>
                                            <option value="pindi-gheb">Pindi gheb</option>
                                            <option value="piplan">Piplan</option>
                                            <option value="pir-mahal">Pir mahal</option>
                                            <option value="pishin">Pishin</option>
                                            <option value="qalandarabad">Qalandarabad</option>
                                            <option value="qamber-ali-khan">Qamber Ali Khan</option>
                                            <option value="qasba-gujrat">Qasba gujrat</option>
                                            <option value="qazi-ahmed">Qazi ahmed</option>
                                            <option value="qila-deedar-singh">Qila Deedar Singh</option>
                                            <option value="quaid-abad">Quaid Abad</option>
                                            <option value="quetta">Quetta</option>
                                            <option value="rabwah">Rabwah</option>
                                            <option value="rahim-yar-khan">Rahim Yar Khan</option>
                                            <option value="rahwali">Rahwali</option>
                                            <option value="raiwind">Raiwind</option>
                                            <option value="rajana">Rajana</option>
                                            <option value="rajanpur">Rajanpur</option>
                                            <option value="rangoo">Rangoo</option>
                                            <option value="ranipur">Ranipur</option>
                                            <option value="rato-dero">Rato Dero</option>
                                            <option value="rawala-kot">Rawala kot</option>
                                            <option value="rawat">Rawat</option>
                                            <option value="renala-khurd">Renala khurd</option>
                                            <option value="risalpur">Risalpur</option>
                                            <option value="rohri">Rohri</option>
                                            <option value="sadiqabad">Sadiqabad</option>
                                            <option value="sagri">Sagri</option>
                                            <option value="sahiwal">Sahiwal</option>
                                            <option value="saidu-sharif">Saidu sharif</option>
                                            <option value="sajawal">Sajawal</option>
                                            <option value="sakhi-sarwar">Sakhi Sarwar</option>
                                            <option value="samanabad">Samanabad</option>
                                            <option value="sambrial">Sambrial</option>
                                            <option value="samma-satta">Samma satta</option>
                                            <option value="sanghar">Sanghar</option>
                                            <option value="sanghi">Sanghi</option>
                                            <option value="sangla-hills">Sangla Hills</option>
                                            <option value="sangote">Sangote</option>
                                            <option value="sanjarpur">Sanjarpur</option>
                                            <option value="sanjwal">Sanjwal</option>
                                            <option value="sara-e-naurang">Sara e naurang</option>
                                            <option value="sara-e-alamgir">Sara-E-Alamgir</option>
                                            <option value="sargodha">Sargodha</option>
                                            <option value="satiayana">Satiayana</option>
                                            <option value="sawabi">Sawabi</option>
                                            <option value="sehar-baqlas">Sehar baqlas</option>
                                            <option value="sehwan-sharif">Sehwan Sharif</option>
                                            <option value="sekhat">Sekhat</option>
                                            <option value="serai-alamgir">Serai alamgir</option>
                                            <option value="shadiwal">Shadiwal</option>
                                            <option value="shah-kot">Shah kot</option>
                                            <option value="shahdad-kot">Shahdad kot</option>
                                            <option value="shahdara">Shahdara</option>
                                            <option value="shahpur-chakar">Shahpur chakar</option>
                                            <option value="shahpur-saddar">Shahpur Saddar</option>
                                            <option value="shaikhupura">Shaikhupura</option>
                                            <option value="shakargarh">Shakargarh</option>
                                            <option value="shamsabad">Shamsabad</option>
                                            <option value="shankiari">Shankiari</option>
                                            <option value="shedani-sharif">Shedani sharif</option>
                                            <option value="shehdadpur">Shehdadpur</option>
                                            <option value="shemier">Shemier</option>
                                            <option value="shiekhopura">Shiekhopura</option>
                                            <option value="shikar-pur">Shikar pur</option>
                                            <option value="shorekot-cantt">Shorekot Cantt</option>
                                            <option value="shorkot">Shorkot</option>
                                            <option value="shuja-abad">Shuja Abad</option>
                                            <option value="sialkot">Sialkot</option>
                                            <option value="sibi">Sibi</option>
                                            <option value="sihala">Sihala</option>
                                            <option value="sikandarabad">Sikandarabad</option>
                                            <option value="sillanwali">Sillanwali</option>
                                            <option value="sita-road">Sita road</option>
                                            <option value="skardu">Skardu</option>
                                            <option value="skrand">Skrand</option>
                                            <option value="sohawa">Sohawa</option>
                                            <option value="sohawa-district-daska">Sohawa district daska</option>
                                            <option value="sukkur">Sukkur</option>
                                            <option value="sumandari">Sumandari</option>
                                            <option value="swat">Swat</option>
                                            <option value="swatmingora">Swatmingora</option>
                                            <option value="takhtbai">Takhtbai</option>
                                            <option value="talagang">Talagang</option>
                                            <option value="talamba">Talamba</option>
                                            <option value="talhur">Talhur</option>
                                            <option value="tandiliyawala">Tandiliyawala</option>
                                            <option value="tando-adam">Tando adam</option>
                                            <option value="tando-allah-yar">Tando Allah Yar</option>
                                            <option value="tando-jam">Tando jam</option>
                                            <option value="tando-muhammad-khan">Tando Muhammad Khan</option>
                                            <option value="tank">Tank</option>
                                            <option value="tarbela">Tarbela</option>
                                            <option value="tarmatan">Tarmatan</option>
                                            <option value="tatlay-wali">Tatlay Wali</option>
                                            <option value="taunsa-sharif">Taunsa sharif</option>
                                            <option value="taxila">Taxila</option>
                                            <option value="tharo-shah">Tharo shah</option>
                                            <option value="thatta">Thatta</option>
                                            <option value="theing-jattan-more">Theing jattan more</option>
                                            <option value="thull">Thull</option>
                                            <option value="tibba-sultanpur">Tibba sultanpur</option>
                                            <option value="toba-tek-singh">Toba Tek Singh</option>
                                            <option value="topi">Topi</option>
                                            <option value="toru">Toru</option>
                                            <option value="tranda-muhammad-pannah">Tranda Muhammad Pannah</option>
                                            <option value="turbat">Turbat</option>
                                            <option value="ubaro">Ubaro</option>
                                            <option value="ubauro">Ubauro</option>
                                            <option value="ugoke">Ugoke</option>
                                            <option value="ukba">Ukba</option>
                                            <option value="umer-kot">Umer Kot</option>
                                            <option value="upper-deval">Upper deval</option>
                                            <option value="usta-muhammad">Usta Muhammad</option>
                                            <option value="vehari">Vehari</option>
                                            <option value="village-sunder">Village Sunder</option>
                                            <option value="wah-cantt">Wah cantt</option>
                                            <option value="wahi-hassain">Wahi hassain</option>
                                            <option value="wahn-bachran">Wahn Bachran</option>
                                            <option value="wan-radha-ram">Wan radha ram</option>
                                            <option value="warah">Warah</option>
                                            <option value="warburton">Warburton</option>
                                            <option value="wazirabad">Wazirabad</option>
                                            <option value="yazman-mandi">Yazman mandi</option>
                                            <option value="zafarwal">Zafarwal</option>
                                            <option value="zahir-peer">Zahir Peer</option>
                                        </optgroup>
                                    </select>
                                </li>
                                <li class="range-widget">
                                    <select name="price_range" id="UsedCity" class="chzn-select">
                                        <option value="">Price Range</option>
                                        <option value='10000'>10,000 Rs</option>
                                        <option value='20000'>20,000 Rs</option>
                                        <option value='30000'>30,000 Rs</option>
                                        <option value='40000'>40,000 Rs</option>
                                        <option value='50000'>50,000 Rs</option>
                                        <option value='60000'>60,000 Rs</option>
                                        <option value='70000'>70,000 Rs</option>
                                        <option value='80000'>80,000 Rs</option>
                                        <option value='90000'>90,000 Rs</option>
                                        <option value='100000'>100,000 Rs</option>
                                        <option value='125000'>125,000 Rs</option>
                                        <option value='150000'>150,000 Rs</option>
                                        <option value='175000'>175,000 Rs</option>
                                        <option value='200000'>200,000 Rs</option>
                                    </select>
                                </li>

                            </ul>
                        </div>
                </div>


                <div class="search-functions clearfix nomargin">
                    <div class="pull-left">
                        <a href="javascript:void(0);" id="more_option" class="more_option">
                            More Search Options <i class="fa fa-caret-down"></i></a>
                    </div>
                    <div class="pull-right" id="search-row">
                        <button type="submit" class="btn btn-success btn-lg btn-block" style="height: 50px;"
                            id="used-bikes-search-btn">Search</button>
                    </div>
                </div>
                </form> --}}
                <form action="{{route('bike_search_result')}}" method="POST">
                    @csrf
                    <div class="row m-0 w-100">

                        <div class="col-md-6 my-1 col-12 pl-md-5 ">
                            <input type="text"  name="keyword" placeholder="Search Here" class="custom-control w-100 ">
                            <input type="hidden"  name="category" value="Used Bike">
                        </div>
                        <div class="col-md-2 my-1 col-12 px-md-0">
                            <input type="text" name="min_price" list="MinPrice" placeholder="Min Price"/>
                            <datalist id="MinPrice">
                                <option value="" selected disabled>Min Rs</option>
                                <option value='10000'>10,000 Rs</option>
                                <option value='20000'>20,000 Rs</option>
                                <option value='30000'>30,000 Rs</option>
                                <option value='40000'>40,000 Rs</option>
                                <option value='50000'>50,000 Rs</option>
                                <option value='60000'>60,000 Rs</option>
                                <option value='70000'>70,000 Rs</option>
                                <option value='80000'>80,000 Rs</option>
                                <option value='90000'>90,000 Rs</option>
                                <option value='100000'>100,000 Rs</option>
                                <option value='125000'>125,000 Rs</option>
                                <option value='150000'>150,000 Rs</option>
                                <option value='175000'>175,000 Rs</option>
                                <option value='200000'>200,000 Rs</option>
                            </datalist>
                        </div>
                        <div class="col-md-2 my-1 col-12 px-md-0 pr-md-3">
                            <input type="text" name="max_price" list="MaxPrice" placeholder="Max Price"/>
                            <datalist id="MaxPrice">
                                <option value="" selected disabled>Min Rs</option>
                                <option value='10000'>10,000 Rs</option>
                                <option value='20000'>20,000 Rs</option>
                                <option value='30000'>30,000 Rs</option>
                                <option value='40000'>40,000 Rs</option>
                                <option value='50000'>50,000 Rs</option>
                                <option value='60000'>60,000 Rs</option>
                                <option value='70000'>70,000 Rs</option>
                                <option value='80000'>80,000 Rs</option>
                                <option value='90000'>90,000 Rs</option>
                                <option value='100000'>100,000 Rs</option>
                                <option value='125000'>125,000 Rs</option>
                                <option value='150000'>150,000 Rs</option>
                                <option value='175000'>175,000 Rs</option>
                                <option value='200000'>200,000 Rs</option>
                            </datalist>
                        </div>
                        <div class="col-md-2 my-1 col-12 pl-md-0 pr-md-5 pb-1">
                            <button class="btn common-btn-clr w-100 h-100">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="sell-your-ad sell-blue text-center row mt30">
                    <div class="row">
                        <div class="col-md-3 line">
                            <img alt="Free-ad" height="50" src="{{ asset('website') }}/assets/img/img18.svg"
                                style="margin: 5px 0;" />
                            <div class="title"><span>Free</span> Ad</div>
                            Fill in your bike details and<br> post an ad on 2Wheels
                        </div>
                        <div class="col-md-3 line">
                            <img alt="Gen-buyer" height="60" src="{{ asset('website') }}/assets/img/img19.svg" />
                            <div class="title"><span>Genuine</span> Buyers</div>
                            Interested buyers start<br> contacting you instantly!
                        </div>
                        <div class="col-md-3 line">
                            <img alt="Bike-icon" height="54" src="{{ asset('website') }}/assets/img/img20.svg"
                                style="margin: 3px 0;" />
                            <div class="title">Sell <span>Faster</span></div>
                            Choose the best offer<br> and finalize the deal
                        </div>
                        <div class="col-md-3" style="padding-right: 10px;">
                            <img alt="Dotted-arrow" class="sell-dot-arrow" height="40"
                                src="{{ asset('website') }}/assets/img/img21.svg" />
                            <a class="btn btn-danger btn-lg mt30 sign-in-comp" href="{{ route('bike.create') }}"
                                style="height: 50px;padding-top:10px;color:#fff">Sell Your Bike </a>
                        </div>
                    </div>
                </div>

                <div class="main-google-ad-container">
                    <div style="max-width: 970px; margin: 0 auto;">
                        <div id="div-gpt_UsedBikes_TopBanner_970x90" class='top_banner' style='display:none;'>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2>
                    Featured Used Bikes for Sale

                    <div id="type-featured-used-bike-home" class="clear-link">
                        <a href="/used-bikes/search/-/featured_1/" class="more-link">View all featured used bikes</a>
                    </div>

                </h2>


                <div id="bikeSliderWrapper" class="carousel slide pos-rel lazy-slider" data-interval="false"
                    data-ride="carousel" dir="ltr">
                    <div id="slider" class="carousel-inner" style="max-height: 290px; overflow: hidden;">
                        <ul class="list-unstyled fs12 bike-featured-used-bike-home bike-slide-0 item active clearfix">
                            @foreach ($usedBikes as $key => $bike)
                                @php
                                    $key++;
                                @endphp
                                <li class="col-md-3">

                                    <div class="cards">
                                        <div class="featured-ribbon">
                                            <div class="inner">
                                                Feeatured
                                            </div>
                                        </div>

                                        <div class="img-box featured-listing">


                                            <a href="{{ route('bike.show', $bike->id) }}" rel="nofollow"
                                                title="Hi Speed Infinity 150 2021 for Sale">
                                                <div class="img-content img-valign">
                                                    <img alt="Hi Speed Infinity 150 2021 for Sale"
                                                        data-original="assests/img/image1.jpg"
                                                        src="{{ asset('storage') }}/images/bikes/{{ $bike->getImages()[0] }}"
                                                        title="Hi Speed Infinity 150 2021 for Sale" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="cards-content">
                                            <h3 class="nomargin truncate"><a href="#" rel="nofollow">{{ $bike->name }}
                                                    {{ $bike->company->name }}</a></h3>
                                            <div class="generic-green">
                                                PKR {{ $bike->price }}
                                            </div>
                                            <div class="generic-gray">{{ $bike->seller_address }}</div>
                                        </div>
                                    </div>
                                </li>

                                @if ($key % 4 == 0)
                        </ul>
                        <ul class="list-unstyled fs12 bike-featured-used-bike-home bike-slide-1 item  clearfix">
                            @endif
                            @endforeach

                        </ul>

                    </div>

                    <div class="carousel-control-outer">
                        <a class="carousel-control left" href="#bikeSliderWrapper" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control right" href="#bikeSliderWrapper" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>




        {{-- <section>
        <div class="container">
            <h2>Most Rated Used Bikes</h2>
            <div class="pos-rel">
                <div id="popular-used-bikes-slider" class="carousel slide lazy-slider" data-interval="false"
                    data-ride="carousel">
                    <div class="carousel-inner">
                        <ul class="nomargin list-unstyled item active clearfix">
                          @foreach ($usedBikes as $key => $bike)
                          @php
                          $key++;
                          @endphp
                            <li class="col-md-3">
                                <div class="panel-130-100-make">
                                    <a href="{{route('bike.show', $bike->id)}}" class="show cards">
                                        <div class="img-box">
                                            <div class="img-content background-grey">
                                                <img alt="CG 125" class="pic" data-original="assets/img/img9.png"
                                                    src="{{asset('storage')}}/images/bikes/{{$bike->getImages()[0]}}" title="CG 125" />
                                            </div>
                                        </div>
                                        <div class="cards-content">
                                            <h3 class="nomargin truncate">{{$bike->name}} {{$bike->company->name}}</h3>
                                            <div class="generic-green">
                                              PKR {{$bike->price}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>

                              @if ($key % 4 == 0)
                          </ul>
                          <ul class="nomargin list-unstyled item active clearfix">
                             @endif
                          @endforeach

                        </ul>

                    </div>
                </div>

                <div class="carousel-control-outer">
                    <a class="carousel-control left" href="#popular-used-bikes-slider" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control right" href="#popular-used-bikes-slider" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>


            </div>
            <div class="clearfix"></div>

        </div>
    </section> --}}

        <section>
            <div class="container">
                <h2>
                    Most Rated Used Bikes

                    <div id="type-featured-used-bike-home" class="clear-link">
                        <a href="/used-bikes/search/-/featured_1/" class="more-link">View all Most Rated Used Bikes</a>
                    </div>

                </h2>


                <div id="bikeSliderWrapper" class="carousel slide pos-rel lazy-slider" data-interval="false"
                    data-ride="carousel" dir="ltr">
                    <div id="slider" class="carousel-inner" style="max-height: 290px; overflow: hidden;">
                        <ul class="list-unstyled fs12 bike-featured-used-bike-home bike-slide-0 item active clearfix">
                            @foreach ($popularUsedBikes as $key => $bike)
                                @php
                                    $key++;
                                @endphp
                                <li class="col-md-3">

                                    <div class="cards">


                                        <div class="img-box featured-listing">


                                            <a href="{{ route('bike.show', $bike->id) }}" rel="nofollow"
                                                title="Hi Speed Infinity 150 2021 for Sale">
                                                <div class="img-content img-valign">
                                                    <img alt="Hi Speed Infinity 150 2021 for Sale"
                                                        data-original="assests/img/image1.jpg"
                                                        src="{{ asset('storage') }}/images/bikes/{{ $bike->getImages()[0] }}"
                                                        title="Hi Speed Infinity 150 2021 for Sale" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="cards-content">
                                            <h3 class="nomargin truncate"><a href="#" rel="nofollow">{{ $bike->name }}
                                                    {{ $bike->company->name }}</a></h3>
                                            <div class="generic-green">
                                                PKR {{ $bike->price }}
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                @if ($key % 4 == 0)
                        </ul>
                        <ul class="list-unstyled fs12 bike-featured-used-bike-home bike-slide-1 item  clearfix">
                            @endif
                            @endforeach

                        </ul>

                    </div>

                    <div class="carousel-control-outer">
                        <a class="carousel-control left" href="#bikeSliderWrapper" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control right" href="#bikeSliderWrapper" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>


        <section>
            <div class="container">
                <h2>Used Bikes by Make</h2>
                <div class="clearfix pos-rel carousel slide lazy-slider" id="browse-by-brand_used-bikes" dir="ltr"
                    data-ride="carousel" data-interval="false">
                    <div id="slider2" class="carousel-inner" style="overflow: hidden;">
                        <div class="vehicle-model-0 list-unstyled item active clearfix">

                            @foreach ($companies as $key => $company)
                                @php
                                    $key++;
                                @endphp
                                <ul class="make-list col-sm-2 list-unstyled new-car-list">
                                    <li class="heading">
                                        <a href="{{ route('used_bike_by_make', $company->id) }}" id="amk_honda"
                                            title="Honda Bike in Pakistan">
                                            <img alt="Honda" height="65" loading="lazy"
                                                src="{{ asset('website') }}/assets/img/{{ $company->name }}.png" />
                                            <h3 class="nomargin">{{ $company->name }}</h3>
                                        </a>
                                    </li>
                                    @foreach ($company->models as $model)
                                        <li><a href="{{ route('used_bike_by_model', $model->id) }}" id="amd_Honda,CG 125"
                                                title="{{ $company->name }} {{ $model->name }}"
                                                itemprop="relatedLink">{{ $model->name }}</a></li>
                                    @endforeach
                                </ul>

                                @if ($key % 6 == 0)
                        </div>
                        <div class="vehicle-model-1 list-unstyled item  clearfix">
                            @endif
                            @endforeach

                        </div>

                    </div>

                    <div class="carousel-control-outer">
                        <a class="carousel-control left" href="#browse-by-brand_used-bikes" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control right" href="#browse-by-brand_used-bikes" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>

                </div>


            </div>

        </section>

        <section>
            <div class="container">
                <h2>Used Motorcycles By Body Type</h2>
                <div class="">
                    <ul class="browse-listing row">
                        <li class="col-sm-2">
                            <a href="{{ route('used_bike_body_type', 'Standard') }}" class="shadow-box show"
                                data-category-name="" title="Standard Bikes for sale in Pakistan">
                                <img alt="Standard Bikes for sale in Pakistan" class="lazy"
                                    data-original="assets/img/standard-bc71a14c8235aa1dc0436d57d7113a39.svg"
                                    src="{{ asset('website') }}/assets/img/standard-bc71a14c8235aa1dc0436d57d7113a39.svg"
                                    style="height:93px" />
                                <div>Standard</div>
                            </a>
                        </li>
                        <li class="col-sm-2">
                            <a href="{{ route('used_bike_body_type', 'Heavy Bike') }}" class="shadow-box show"
                                data-category-name="" title="Heavy Bikes for sale in Pakistan">
                                <img alt="Heavy Bikes for sale in Pakistan" class="lazy"
                                    data-original="assets/img/heavy-bikes-c513c5bd0b6a791beda5290840efd7f2.svg"
                                    src="{{ asset('website') }}/assets/img/heavy-bikes-c513c5bd0b6a791beda5290840efd7f2.svg"
                                    style="height:93px" />
                                <div>Heavy Bikes</div>
                            </a>
                        </li>
                        <li class="col-sm-2">
                            <a href="{{ route('used_bike_body_type', 'Sports Bike') }}" class="shadow-box show"
                                data-category-name="" title="Sports Bikes for sale in Pakistan">
                                <img alt="Sports Bikes for sale in Pakistan" class="lazy"
                                    data-original="assets/img/sportsbike-fff0718d2ecc95736c8c76d031a6f612.svg"
                                    src="{{ asset('website') }}/assets/img/sportsbike-fff0718d2ecc95736c8c76d031a6f612.svg"
                                    style="height:93px" />
                                <div>Sports Bikes</div>
                            </a>
                        </li>
                        <li class="col-sm-2">
                            <a href="{{ route('used_bike_body_type', 'Dirt Bike') }}" class="shadow-box show"
                                data-category-name="" title="Dirt Bikes for sale in Pakistan">
                                <img alt="Dirt Bikes for sale in Pakistan" class="lazy"
                                    data-original="assets/img/dirt-bikes-924e9da583a901de9dded1f0a9791372.svg"
                                    src="{{ asset('website') }}/assets/img/dirt-bikes-924e9da583a901de9dded1f0a9791372.svg"
                                    style="height:93px" />
                                <div>Dirt Bikes</div>
                            </a>
                        </li>
                        <li class="col-sm-2">
                            <a href="{{ route('used_bike_body_type', 'ATV') }}" class="shadow-box show"
                                data-category-name="" title="ATV Bikes for sale in Pakistan">
                                <img alt="ATV Bikes for sale in Pakistan" class="lazy"
                                    data-original="assets/img/atv-693dd617375b1ccddbdbcdf70e6d001d.svg"
                                    src="{{ asset('website') }}/assets/img/atv-693dd617375b1ccddbdbcdf70e6d001d.svg"
                                    style="height:93px" />
                                <div>ATV</div>
                            </a>
                        </li>
                        <li class="col-sm-2">
                            <a href="{{ route('used_bike_body_type', 'Chopper') }}" class="shadow-box show"
                                data-category-name="" title="Chopper for sale in Pakistan">
                                <img alt="Chopper for sale in Pakistan" class="lazy"
                                    data-original="assets/img/cruiser-2f1d0c1af13002c31ed24688ca6558c2.svg"
                                    src="{{ asset('website') }}/assets/img/cruiser-2f1d0c1af13002c31ed24688ca6558c2.svg"
                                    style="height:93px" />
                                <div>Chopper</div>
                            </a>
                        </li>
                        <li class="col-sm-2">
                            <a href="{{ route('used_bike_body_type', 'Scooter') }}" class="shadow-box show"
                                data-category-name="" title="Scooty Bike for sale in Pakistan">
                                <img alt="Scooty Bike for sale in Pakistan" class="lazy"
                                    data-original="assets/img/scooter-ad857ad0c8e1ad45cc1546bc477a6129.svg"
                                    src="{{ asset('website') }}/assets/img/scooter-ad857ad0c8e1ad45cc1546bc477a6129.svg"
                                    style="height:93px" />
                                <div>Scooter</div>
                            </a>
                        </li>
                        <li class="col-sm-2">
                            <a href="{{ route('used_bike_body_type', 'Trail') }}" class="shadow-box show"
                                data-category-name="" title="Trail Bikes for sale in Pakistan">
                                <img alt="Trail Bikes for sale in Pakistan" class="lazy"
                                    data-original="assets/img/trail-9c788346d3b21ee8315c3df48ad14a19.svg"
                                    src="{{ asset('website') }}/assets/img/trail-9c788346d3b21ee8315c3df48ad14a19.svg"
                                    style="height:93px" />
                                <div>Trail</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <h2>Used Bikes By City</h2>
                <div class="pull-right p10" style="width: 320px;">
                    <div id="div-gpt-_UsedBikes_ATF_MediumRectangleBanner_300x250">
                    </div>
                </div>
                <div class="" style="position: relative;">
                    <div id="browse-by-city-carousel" class="carousel slide lazy-slider browse-left" data-ride="carousel"
                        data-interval="false">
                        <div class="carousel-inner">

                            <ul class="browse-listing item active browse-auto-link clearfix" id="browse-by-city-bike">
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Lahore') }}" id="ct_lahore"
                                        title="Bikes for sale in Lahore">
                                        Lahore
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Karachi') }}" id="ct_karachi"
                                        title="Bikes for sale in Karachi">
                                        Karachi
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Rawalpindi') }}" id="ct_rawalpindi"
                                        title="Bikes for sale in Rawalpindi">
                                        Rawalpindi
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Islamabad') }}" id="ct_islamabad"
                                        title="Bikes for sale in Islamabad">
                                        Islamabad
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Faisalabad') }}" id="ct_faisalabad"
                                        title="Bikes for sale in Faisalabad">
                                        Faisalabad
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Peshawar') }}" id="ct_peshawar"
                                        title="Bikes for sale in Peshawar">
                                        Peshawar
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Multan') }}" id="ct_multan"
                                        title="Bikes for sale in Multan">
                                        Multan
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Gujranwala') }}" id="ct_gujranwala"
                                        title="Bikes for sale in Gujranwala">
                                        Gujranwala
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Sialkot') }}" id="ct_sialkot"
                                        title="Bikes for sale in Sialkot">
                                        Sialkot
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Sargodha') }}" id="ct_sargodha"
                                        title="Bikes for sale in Sargodha">
                                        Sargodha
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Wah cantt') }}" id="ct_wah-cantt"
                                        title="Bikes for sale in Wah cantt">
                                        Wah cantt
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Attock') }}" id="ct_attock"
                                        title="Bikes for sale in Attock">
                                        Attock
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Bahawalpur') }}" id="ct_bahawalpur"
                                        title="Bikes for sale in Bahawalpur">
                                        Bahawalpur
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Hyderabad') }}" id="ct_hyderabad"
                                        title="Bikes for sale in Hyderabad">
                                        Hyderabad
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Gujrat') }}" id="ct_gujrat"
                                        title="Bikes for sale in Gujrat">
                                        Gujrat
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Abottabad') }}" id="ct_abottabad"
                                        title="Bikes for sale in Abottabad">
                                        Abottabad
                                    </a>
                                </li>
                            </ul>

                            <ul class="browse-listing item  browse-auto-link clearfix" id="browse-by-city-bike">
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Chakwal') }}" id="ct_chakwal"
                                        title="Bikes for sale in Chakwal">
                                        Chakwal
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Mardan') }}" id="ct_mardan"
                                        title="Bikes for sale in Mardan">
                                        Mardan
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Quetta') }}" id="ct_quetta"
                                        title="Bikes for sale in Quetta">
                                        Quetta
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Rahim Yar Khan') }}" id="ct_rahim-yar-khan"
                                        title="Bikes for sale in Rahim Yar Khan">
                                        Rahim Yar Khan
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Sahiwal') }}" id="ct_sahiwal"
                                        title="Bikes for sale in Sahiwal">
                                        Sahiwal
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Jehlum') }}" id="ct_jehlum"
                                        title="Bikes for sale in Jehlum">
                                        Jehlum
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Hari pur') }}" id="ct_hari-pur"
                                        title="Bikes for sale in Hari pur">
                                        Hari pur
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Okara') }}" id="ct_okara"
                                        title="Bikes for sale in Okara">
                                        Okara
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Mandi bahauddin') }}" id="ct_mandi-bahauddin"
                                        title="Bikes for sale in Mandi bahauddin">
                                        Mandi bahauddin
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Jhang') }}" id="ct_jhang"
                                        title="Bikes for sale in Jhang">
                                        Jhang
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Shaikhupura') }}" id="ct_shaikhupura"
                                        title="Bikes for sale in Shaikhupura">
                                        Shaikhupura
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Sukkur') }}" id="ct_sukkur"
                                        title="Bikes for sale in Sukkur">
                                        Sukkur
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'D.G.Khan') }}" id="ct_d-g-khan"
                                        title="Bikes for sale in D.G.Khan">
                                        D.G.Khan
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Khanewal') }}" id="ct_khanewal"
                                        title="Bikes for sale in Khanewal">
                                        Khanewal
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Taxila') }}" id="ct_taxila"
                                        title="Bikes for sale in Taxila">
                                        Taxila
                                    </a>
                                </li>
                                <li class="col-md-3">
                                    <a href="{{ route('used_bike_by_city', 'Chiniot') }}" id="ct_chiniot"
                                        title="Bikes for sale in Chiniot">
                                        Chiniot
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <ol class="carousel-indicators" style="bottom: -30px;">
                            <li data-target="#browse-by-city-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#browse-by-city-carousel" data-slide-to="1" class=""></li>
                        </ol>

                        <div class="carousel-control-outer">
                            <a class="carousel-control left" href="#browse-by-city-carousel" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control right" href="#browse-by-city-carousel" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2>Used Bikes by Price</h2>
                <table cellpadding="0" cellspacing="0" width="100%"
                    class="table table-bordered well budget-list budget-list-bikes">
                    <tr id="browse-by-price-range-bike">
                        <td><a href='{{ route('used_bike_by_price', 1) }}' rel='nofollow' id='searchby_Below-2-tho'
                                title=' Used Bikes for Sale - Below 20 thousands'>
                                <span class='seats'>
                                    <span class='seats2'></span>
                                </span>
                                <h3>Below 20
                                    <small>thousands</small>
                                </h3>
                            </a></td>
                        <td><a href='{{ route('used_bike_by_price', 2) }}' rel='nofollow' id='searchby_2-to-4-tho'
                                title=' Used Bikes for Sale - 20 to 40 thousands'>
                                <span class='seats'>
                                    <span class='seats4'></span>
                                </span>
                                <h3>20 to 40
                                    <small>thousands</small>
                                </h3>
                            </a></td>
                        <td><a href='{{ route('used_bike_by_price', 3) }}' rel='nofollow' id='searchby_4-to-6-tho'
                                title=' Used Bikes for Sale - 40 to 60 thousands'>
                                <span class='seats'>
                                    <span class='seats6'></span>
                                </span>
                                <h3>40 to 60
                                    <small>thousands</small>
                                </h3>
                            </a></td>
                        <td><a href='{{ route('used_bike_by_price', 4) }}' rel='nofollow' id='searchby_6-to-10-tho'
                                title=' Used Bikes for Sale - 60 to 100 thousands'>
                                <span class='seats'>
                                    <span class='seats10'></span>
                                </span>
                                <h3>60 to 100
                                    <small>thousands</small>
                                </h3>
                            </a></td>
                        <td><a href='{{ route('used_bike_by_price', 5) }}' rel='nofollow' id='searchby_10-to-14-tho'
                                title=' Used Bikes for Sale - 100 to 140 thousands'>
                                <span class='seats'>
                                    <span class='seats14'></span>
                                </span>
                                <h3>100 to 140
                                    <small>thousands</small>
                                </h3>
                            </a></td>
                        <td><a href='{{ route('used_bike_by_price', 6) }}' rel='nofollow' id='searchby_Above-14-tho'
                                title=' Used Bikes for Sale - Above 140 thousands'>
                                <span class='seats'>
                                    <span class='seatsabove'></span>
                                </span>
                                <h3>Above 140
                                    <small>thousands</small>
                                </h3>
                            </a></td>
                    </tr>
                </table>
            </div>
        </section>

    @endsection
