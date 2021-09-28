@extends('layouts.main')

@section('title', "Home")

@section('contents')

<div class="header-space" ></div>
<div class="container" style="margin-top:100px">
<section style="width:100%;background-image: url({{asset('website')}}/assets/img/2Wheel.png);background-size:cover;" >
  <div class="search-classified-text text-center generic-white">
    <h1 style="color: #333;">Find Used Bikes in Pakistan</h1>
    <p style="color: black">With thousands of Bikes, we have just the right one for you</p>
  </div>
  

<div class="search-classified" tabindex="0">
  <div id="used-cars">
    <ul class="list-unstyled search-front clearfix">
      <li class="home-autocomplete-">
        <input  placeholder="Car Make or Model" tabindex="2" type="text" value="" />
        <input type="hidden" name="UsedManID" id="UsedManID">
        <input type="hidden" name="UsedModelID" id="UsedModelID">
        <input type="hidden"  data-slug="" name="UsedVersionGroupID" id="UsedVersionGroupID">
        <input type="hidden"  data-slug="" name="UsedVersionIDAutoFill" id="UsedVersionIDAutoFill">
      </li>
      <li class="home-chzn">
        <select name="UsedCity" id="UsedCity" class="chzn-select" tabindex="1"">
            <option value="" >All Cities</option>
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
<option value="khanpur--2">Khanpur</option>
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
        <div id='pr-range-filter' tabindex='3' class="pos-rel  ">
          <span class="pr-text">Price Range</span>
          <!-- <i class="fa fa-sort-down pull-right"></i> -->
          <div class='pr-range' style="display:none;">
            <div class="pr-range-container ">
              <div class="pr-input-container clearfix"   >
                <div class="pr-input">
                  <input id="pr_from" name="pr_from" placeholder="Min" tabindex="4" type="text" value="" />lacs
                </div>
                <div class="pr-input">
                  <input id="pr_to" name="pr_to" placeholder="Max" tabindex="5" type="text" value="" />lacs
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      
        <li>
          <div id="search-row">
            <button type="submit" class="btn btn-success btn-lg btn-block" style="width:8vw"  tabindex="6"><small>Search</small></button>
          </div>
        </li>
    </ul>
  </div>
</div>


      <div class="btn-classified-container text-center" >
        <a href="advancefilter" class="btn btn-sm btn-link-outline btn-classified" style="z-index:5;position:relative;">Advanced Filter ></a>
      </div>

  <!-- <div class="search-clissic-overlay" style="margin-top:120px;height:80vh;background-image: url({{asset('website')}}/assets/img/2Wheel.png);background-size:100% 100%;z-index:-5;"></div> -->
  <div id="search-overlay" style="display:none;"></div>
</section>

</div>




    <div class="overview-area pt-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="overview-content">
                        <h1><span>2 Wheels</span> WORLD MOST </h1>
                        <h2>LATGEST <span>MOTORCYCLE STORE</span></h2>
                        <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                        <div class="question-area">
                            <h4>HAVE ANY QUESTION? </h4>
                            <div class="question-contact">
                                <div class="question-icon">
                                    <i class="icofont icofont-phone"></i>
                                </div>
                                <div class="question-content-number">
                                    <h6> +042-1245 658 698</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="overview-img">
                        <img class="tilter" src="{{asset('website')}}/assets/img/header_slider/honda_atlas_offical.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area pt-135 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="banner-wrapper mb-30">
                        <a href="#"><img src="{{asset('website')}}/assets/img/header_slider/Honda_CB_150.jpg" alt="image" style="height:295px;width:370px"></a>
                        <div class="banner-content">
                            <h2>BUY NEW BIKE</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="banner-wrapper mb-30">
                        <a href="#"><img src="{{asset('website')}}/assets/img/header_slider/hondamodi.jpg" alt="image" style="height:295px;width:370px"></a>
                        <div class="banner-content">
                            <h2>SELL YOUR BIKE</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="banner-wrapper mb-30">
                        <a href="#"><img src="{{asset('website')}}/assets/img/header_slider/Honda_CB_150.jpg" alt="image" style="height:295px;width:370px"></a>
                        <div class="banner-content">
                            <h2>FIND SPARE PARTS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-190">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>CHOOSE YOUR BIKE</h2>
                <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
            </div>
            <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
                <a class="active" href="#home1" data-toggle="tab" >
                    <h4>NEW BIKES </h4>
                </a>
                <a href="#home2" data-toggle="tab">
                    <h4> USED BIKES </h4>
                </a>
            </div>
            <div class="tab-content jump">
                <div class="tab-pane active" id="home1">
                    <div class="product-slider-active owl-carousel">
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/image.jpeg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>250 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                            <span>6600 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 85000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/image.jpeg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>480 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Demonissi Gori</a></h4>
                                            <span>6700 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 85000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/honda_ravi.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>200 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                            <span>5500 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 85000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/Honda_CB_150.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>150 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                            <span>3300 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 185000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/Honda_CB_150.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>150 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Matrio Max</a></h4>
                                            <span>4600 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 185000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/image.jpeg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>250 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Rigoniss Z 1000</a></h4>
                                            <span>8000 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 185000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used1.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>250 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                            <span>5500 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 225000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used2.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>350 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                            <span>3300 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 105000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="home2">
                    <div class="product-slider-active owl-carousel">
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used3.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>250 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                            <span>6600 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 86000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used4.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>480 CC</li>
                                        </ul>
                                    </div>
 
                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Demonissi Gori</a></h4>
                                            <span>6700 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 85000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used5.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>200 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                            <span>5500 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 85000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used6.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>150 CC</li>
                                        </ul>
                                    </div>
 
                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                            <span>3300 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 95000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used1.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>150 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Matrio Max</a></h4>
                                            <span>4600 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 25000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used7.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>250 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Rigoniss Z 1000</a></h4>
                                            <span>8000 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 35000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used4.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>250 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                            <span>RP 45000</span>
                                        </div>
                                        <div class="product-price">
                                            <span>$2549</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('website')}}/assets/img/header_slider/used1.jpg" alt="" style="height:488px;width:370px;">
                                    </a>
                                    <div class="product-item-dec">
                                        <ul>
                                            <li>2018</li>
                                            <li>MANUAL</li>
                                            <li>PETROL</li>
                                            <li>350 CC</li>
                                        </ul>
                                    </div>

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                            <span>3300 RPM</span>
                                        </div>
                                        <div class="product-price">
                                            <span>RP 85000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url({{asset('website')}}/assets/img/header_slider/hondamode.jpg);">
        <div class="container-fluid">
            <div class="latest-product-slider owl-carousel">
                <div class="single-latest-product slider-animated-2">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="latest-product-img">
                                <img class="animated" src="{{asset('website')}}/assets/img/header_slider/hondaold.jpg" alt="image" style="height:554px;width:895px;">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="latest-product-content">
                                <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                                <p class="animated"><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                <div class="latest-price">
                                    <h3 class="animated">NOW AT <span>RP 1,35000</span></h3>
                                    <span class="animated">35% DISCOUNT</span>
                                </div>
                                <div class="latext-btn">
                                    <a class="animated" href="#">SELECT A BIKE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-latest-product slider-animated-2">
                    <div class="row">
                        <div class="col-lg-7 col-col-12 col-12">
                            <div class="latest-product-img">
                                <img class="animated" src="{{asset('website')}}/assets/img/header_slider/image.jpeg" alt="image" style="height:554px;width:895px;">
                            </div>
                        </div>
                        <div class="col-lg-5 col-col-12 col-12">
                            <div class="latest-product-content">
                                <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                                <p class="animated"><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                <div class="latest-price">
                                    <h3 class="animated">NOW AT <span>$1250</span></h3>
                                    <span class="animated">35% DISCOUNT</span>
                                </div>
                                <div class="latext-btn">
                                    <a class="animated" href="#">SELECT A BIKE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accessories-area pt-152 pb-130">
        <div class="container-fluid">
            <div class="section-title section-fluid text-center mb-60">
                <h2>ACCESSORIES</h2>
                <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
            </div>
            <div class="accessories-wrapper">
                <div class="product-accessories-active owl-carousel">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="{{asset('website')}}/assets/img/header_slider/Honda_CB_150.jpg" alt="" style="height:450px;width:280px;">
                            </a>
                         
                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span>Price: RP 1,65000</span>
                                    <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="{{asset('website')}}/assets/img/header_slider/honda_ravi.jpg" alt="" style="height:450px;width:280px;">
                            </a>

                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span>Price: RP 1,95000</span>
                                    <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="{{asset('website')}}/assets/img/header_slider/Honda_CB_150.jpg" alt="" style="height:450px;width:280px;">
                            </a>

                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span>Price: RP 1,65000</span>
                                    <h4><a href="product-details.html">Softy Original Glove</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="{{asset('website')}}/assets/img/header_slider/honda_atlas_offical.jpg" alt="">
                            </a>

                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span>Price: $140</span>
                                    <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="{{asset('website')}}/assets/img/product/product-11.jpg" alt="">
                            </a>

                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span>Price: $150</span>
                                    <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="{{asset('website')}}/assets/img/product/product-7.jpg" alt="">
                            </a>

                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span>Price: $150</span>
                                    <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="{{asset('website')}}/assets/img/product/product-8.jpg" alt="">
                            </a>
 
                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span>Price: $160</span>
                                    <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img src="{{asset('website')}}/assets/img/product/product-9.jpg" alt="">
                            </a>
  
                            <div class="product-content-wrapper-2">
                                <div class="product-title-price-2 text-center">
                                    <span>Price: $120</span>
                                    <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-area">
        <div class="container">
            <div class="section-title-2 section-title-position">
                <h2>OUR CLIENTS REVIEW</h2>
            </div>
            <div class="testimonial-active owl-carousel">
                <div class="single-testimonial">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="testimonial-img pl-75">
                                <img alt="image" src="{{asset('website')}}/assets/img/header_slider/hondameter.jpg" style="height:522px;width:337px;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testimonial-content">
                                <div class="testimonial-dec">
                                    <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest  qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam quoten</p>
                                </div>
                                <div class="name-designation">
                                    <h4>Rayed Ayash Hisham</h4>
                                    <span>COO, ASEKHA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="testimonial-img pl-75">
                                <img alt="image" src="{{asset('website')}}/assets/img/header_slider/honda_atlas_offical.jpg" style="height:522px;width:337px;">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="testimonial-content">
                                <div class="testimonial-dec">
                                    <p><span>2 Wheels</span> Lorem ipsum dolor sit amet, consectetur adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis dolor in reprehenderit.</p>
                                </div>
                                <div class="name-designation">
                                    <h4>James Momen Nirob</h4>
                                    <span>CEO, ASEKHA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area pt-150 pb-110">
        <div class="container">
            <div class="section-title text-center mb-60">
                <h2>BLOG POST</h2>
                <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper mb-40">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{asset('website')}}/assets/img/header_slider/roadprincejet.jpg" alt="image" style="height:274px;width:368px;"></a>
                            <div class="blog-date">
                                <h4>24 February, 2018</h4>
                            </div>
                            <div class="blog-hm-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3><a href="blog-details.html">Sports Motorbike for play in desert </a></h3>
                            <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper mb-40">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{asset('website')}}/assets/img/header_slider/roadprincered.jpg" alt="image" style="height:274px;width:368px;"></a>
                            <div class="blog-date">
                                <h4>22 February, 2018</h4>
                            </div>
                            <div class="blog-hm-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3><a href="blog-details.html">Motorbike Racing at October</a></h3>
                            <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-hm-wrapper mb-40">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{asset('website')}}/assets/img/header_slider/hondamodi.jpg" alt="image" style="height:274px;width:368px;"></a>
                            <div class="blog-date">
                                <h4>20 February, 2018</h4>
                            </div>
                            <div class="blog-hm-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-hm-content">
                            <h3><a href="blog-details.html">Latest Motorbike Release this Year </a></h3>
                            <p><span>2 Wheels</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper-all theme-bg-2">
                <div class="row">
                    <div class="col-lg-5 col-12 col-md-12">
                        <div class="newsletter-img bg-img" style="background-image: url({{asset('website')}}/assets/img/banner/newsletter-bg.png)">
                            <img alt="image" src="{{asset('website')}}/assets/img/header_slider/united.jpg" style="height:274px;width:378px;">
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 col-md-12">
                        <div class="newsletter-wrapper text-center">
                            <div class="newsletter-title">
                                <h3>Subscribe our newsletter</h3>
                            </div>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form action="#" method="post" id="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email here..." required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="icofont icofont-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="{{asset('website')}}/assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="{{asset('website')}}/assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="{{asset('website')}}/assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                <img src="{{asset('website')}}/assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab">
                                <img src="{{asset('website')}}/assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab">
                                <img src="{{asset('website')}}/assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Aerion Carbon Helmet</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00  </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                   <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                               </div>
                               <div class="quickview-btn-cart">
                                    <a class="btn-style" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection