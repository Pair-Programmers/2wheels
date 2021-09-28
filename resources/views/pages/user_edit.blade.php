@extends('layouts.main')

@section('title', "Profile Setting")

@section('contents')

<section class="pt-150 pb-100">
    <div class="container">
        <div class="well">

            @if (\Session::has('success'))
                  <div class="alert alert-success">
                    <ul>
                      <li>{!! \Session::get('success') !!}</li>
                    </ul>
                  </div>
                @endif
            <form  action="{{route('user.update', Auth::id())}}" class="form-horizontal"
                enctype="multipart/form-data" id="upload-avatar" method="post">
                @csrf
                <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
                        value="&#x2713;" /><input name="authenticity_token" type="hidden"
                        value="YhQpmPL/zP+33++M7wVDKUYrNXzsIX0cA0nzjrhqYhg=" /></div>
                <div class="form-group">
                    <label class="col-md-4 nopad">
                        <div class="profile-photo pull-right"
                            style="background-image: url({{asset('storage')}}/images/users/{{Auth::user()->image}});">
                        </div>
                    </label>
                    <div class="col-md-8">

                        <input id="file" name="image"  type="file" />

                    </div>
                </div>
          
            <hr />
                <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden"
                        value="&#x2713;" /><input name="_method" type="hidden" value="put" /><input
                        name="authenticity_token" type="hidden" value="YhQpmPL/zP+33++M7wVDKUYrNXzsIX0cA0nzjrhqYhg=" />
                </div>
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-4">Full Name</label>
                        <div class="col-md-8">
                            <input data-parsley-error-message="Enter valid full name" data-parsley-length="[3,25]"
                                data-parsley-pattern="/^(((?!pakwheels)[a-z0-9 ]){3,25})$/i"
                                data-parsley-required="true" data-parsley-trigger="change" id="user_display_name"
                                name="name" placeholder="Full Name" size="30" type="text"
                                value="{{Auth::user()->name}}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Gender</label>
                        <div class="col-md-8">
                            <select id="user_gender" name="gender">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <script>
							let propertySelect = document.getElementById('user_gender');
							propertySelect.value = `{{Auth::user()->gender}}`;
                            
						</script>

                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Date of Birth</label>
                        <div class="col-md-8">
                            <div id="datetimepicker" class="input-group">
                                <input data-behaviour="datepicker" data-format="dd-MM-yyyy"
                                    data-parsley-pattern="^\d{2}-\d{2}-\d{4}$" id="user_birthday" name="date_of_birth"
                                    placeholder="DD-MM-YYYY" size="30" value="{{Auth::user()->date_of_birth}}" type="date" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Address</label>
                        <div class="col-md-8">
                            <div id="datetimepicker" class="input-group">
                                <input name="address"
                                    placeholder="adress" size="30" value="{{Auth::user()->address}}" type="text" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Country</label>
                        <div class="col-md-8">
                            <select id="user_country" name="country" >
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D&#39;Ivoire">Cote D&#39;Ivoire</option>
                                <option value="Croatia (local name: Hrvatska)">Croatia (local name: Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People&#39;s Democratic Republic">Lao People&#39;s Democratic
                                    Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan" selected="selected">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying
                                    Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet NAM">Viet NAM</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <script>
							let countrySelect = document.getElementById('user_country');
							countrySelect.value = `{{Auth::user()->country}}`;
						</script>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">City</label>
                        <div class="col-md-8">
                            <select id="user_city" name="city">
                                <option value="">City</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="Rawalpindi">Rawalpindi</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Abbottabad">Abbottabad</option>
                                <option value="Abdul Hakeem">Abdul Hakeem</option>
                                <option value="Adda jahan khan">Adda jahan khan</option>
                                <option value="Adda shaiwala">Adda shaiwala</option>
                                <option value="Ahmed Pur East">Ahmed Pur East</option>
                                <option value="Ahmedpur Lamma">Ahmedpur Lamma</option>
                                <option value="Akora khattak">Akora khattak</option>
                                <option value="Ali chak">Ali chak</option>
                                <option value="Alipur Chatta">Alipur Chatta</option>
                                <option value="Allahabad">Allahabad</option>
                                <option value="Amangarh">Amangarh</option>
                                <option value="Arifwala">Arifwala</option>
                                <option value="Attock">Attock</option>
                                <option value="Babarloi">Babarloi</option>
                                <option value="Babri banda">Babri banda</option>
                                <option value="Badin">Badin</option>
                                <option value="Bahawalnagar">Bahawalnagar</option>
                                <option value="Bahawalpur">Bahawalpur</option>
                                <option value="Balakot">Balakot</option>
                                <option value="Bannu">Bannu</option>
                                <option value="Baroute">Baroute</option>
                                <option value="Basirpur">Basirpur</option>
                                <option value="Basti Shorekot">Basti Shorekot</option>
                                <option value="Bat khela">Bat khela</option>
                                <option value="Batang">Batang</option>
                                <option value="Bhai pheru">Bhai pheru</option>
                                <option value="Bhakkar">Bhakkar</option>
                                <option value="Bhalwal">Bhalwal</option>
                                <option value="Bhan saeedabad">Bhan saeedabad</option>
                                <option value="Bhera">Bhera</option>
                                <option value="Bhikky">Bhikky</option>
                                <option value="Bhimber">Bhimber</option>
                                <option value="Bhirya road">Bhirya road</option>
                                <option value="Bhuawana">Bhuawana</option>
                                <option value="Buchay key">Buchay key</option>
                                <option value="Burewala">Burewala</option>
                                <option value="Chaininda">Chaininda</option>
                                <option value="Chak 4 b c">Chak 4 b c</option>
                                <option value="Chak 46">Chak 46</option>
                                <option value="Chak jamal">Chak jamal</option>
                                <option value="Chak jhumra">Chak jhumra</option>
                                <option value="Chak Shahzad">Chak Shahzad</option>
                                <option value="Chaklala">Chaklala</option>
                                <option value="Chaksawari">Chaksawari</option>
                                <option value="Chakwal">Chakwal</option>
                                <option value="Charsadda">Charsadda</option>
                                <option value="Chashma">Chashma</option>
                                <option value="Chawinda">Chawinda</option>
                                <option value="Chenab Nagar">Chenab Nagar</option>
                                <option value="Chichawatni">Chichawatni</option>
                                <option value="Chiniot">Chiniot</option>
                                <option value="Chishtian">Chishtian</option>
                                <option value="Chitral">Chitral</option>
                                <option value="Chohar jamali">Chohar jamali</option>
                                <option value="Choppar hatta">Choppar hatta</option>
                                <option value="Chowha saidan shah">Chowha saidan shah</option>
                                <option value="Chowk azam">Chowk azam</option>
                                <option value="Chowk mailta">Chowk mailta</option>
                                <option value="Chowk munda">Chowk munda</option>
                                <option value="Chunian">Chunian</option>
                                <option value="D.G.Khan">D.G.Khan</option>
                                <option value="Dadakhel">Dadakhel</option>
                                <option value="Dadu">Dadu</option>
                                <option value="Dadyal Ak">Dadyal Ak</option>
                                <option value="Daharki">Daharki</option>
                                <option value="Dandot">Dandot</option>
                                <option value="Dargai">Dargai</option>
                                <option value="Darya khan">Darya khan</option>
                                <option value="Daska">Daska</option>
                                <option value="Daud khel">Daud khel</option>
                                <option value="Daulatpur">Daulatpur</option>
                                <option value="Deh pathan">Deh pathan</option>
                                <option value="Depal pur">Depal pur</option>
                                <option value="Dera Allah Yar">Dera Allah Yar</option>
                                <option value="Dera ismail khan">Dera ismail khan</option>
                                <option value="Dera murad jamali">Dera murad jamali</option>
                                <option value="Dera nawab sahib">Dera nawab sahib</option>
                                <option value="Dhatmal">Dhatmal</option>
                                <option value="Dhoun kal">Dhoun kal</option>
                                <option value="Digri">Digri</option>
                                <option value="Dijkot">Dijkot</option>
                                <option value="Dina">Dina</option>
                                <option value="Dinga">Dinga</option>
                                <option value="Dir">Dir</option>
                                <option value="Doaba">Doaba</option>
                                <option value="Doltala">Doltala</option>
                                <option value="Domeli">Domeli</option>
                                <option value="Donga Bonga">Donga Bonga</option>
                                <option value="Dudial">Dudial</option>
                                <option value="Dunia Pur">Dunia Pur</option>
                                <option value="Eminabad">Eminabad</option>
                                <option value="Esa Khel">Esa Khel</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Faqirwali">Faqirwali</option>
                                <option value="Farooqabad">Farooqabad</option>
                                <option value="Fateh Jang">Fateh Jang</option>
                                <option value="Fateh pur">Fateh pur</option>
                                <option value="Feroz walla">Feroz walla</option>
                                <option value="Feroz watan">Feroz watan</option>
                                <option value="Feroz Watwan">Feroz Watwan</option>
                                <option value="Fiza got">Fiza got</option>
                                <option value="Fort Abbass">Fort Abbass</option>
                                <option value="Gadoon amazai">Gadoon amazai</option>
                                <option value="Gaggo mandi">Gaggo mandi</option>
                                <option value="Gakhar mandi">Gakhar mandi</option>
                                <option value="Gambat">Gambat</option>
                                <option value="Gambet">Gambet</option>
                                <option value="Garh maharaja">Garh maharaja</option>
                                <option value="Garh more">Garh more</option>
                                <option value="Garhi yaseen">Garhi yaseen</option>
                                <option value="Gari habibullah">Gari habibullah</option>
                                <option value="Gari mori">Gari mori</option>
                                <option value="Gharo">Gharo</option>
                                <option value="Ghazi">Ghazi</option>
                                <option value="Ghotki">Ghotki</option>
                                <option value="Gilgit">Gilgit</option>
                                <option value="Gohar ghoushti">Gohar ghoushti</option>
                                <option value="Gojra">Gojra</option>
                                <option value="Goth Machi">Goth Machi</option>
                                <option value="Goular khel">Goular khel</option>
                                <option value="Guddu">Guddu</option>
                                <option value="Gujar khan">Gujar khan</option>
                                <option value="Gujar Khan">Gujar Khan</option>
                                <option value="Gujranwala">Gujranwala</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="Gwadar">Gwadar</option>
                                <option value="Hafizabad">Hafizabad</option>
                                <option value="Hala">Hala</option>
                                <option value="Hangu">Hangu</option>
                                <option value="Harappa">Harappa</option>
                                <option value="Haripur">Haripur</option>
                                <option value="Hariwala">Hariwala</option>
                                <option value="Haroonabad">Haroonabad</option>
                                <option value="Hasilpur">Hasilpur</option>
                                <option value="Hassan abdal">Hassan abdal</option>
                                <option value="Hattar">Hattar</option>
                                <option value="Hattian">Hattian</option>
                                <option value="Hattian lawrencepur">Hattian lawrencepur</option>
                                <option value="Havali Lakhan">Havali Lakhan</option>
                                <option value="Hawilian">Hawilian</option>
                                <option value="Hayatabad">Hayatabad</option>
                                <option value="Hazro">Hazro</option>
                                <option value="Head marala">Head marala</option>
                                <option value="Hub">Hub</option>
                                <option value="Hub-Balochistan">Hub-Balochistan</option>
                                <option value="Hujra Shah Mukeem">Hujra Shah Mukeem</option>
                                <option value="Hunza">Hunza</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Iskandarabad">Iskandarabad</option>
                                <option value="Jacobabad">Jacobabad</option>
                                <option value="Jahaniya">Jahaniya</option>
                                <option value="Jaja abasian">Jaja abasian</option>
                                <option value="Jalalpur Jattan">Jalalpur Jattan</option>
                                <option value="Jalalpur Pirwala">Jalalpur Pirwala</option>
                                <option value="Jampur">Jampur</option>
                                <option value="Jamrud road">Jamrud road</option>
                                <option value="Jamshoro">Jamshoro</option>
                                <option value="Jan pur">Jan pur</option>
                                <option value="Jand">Jand</option>
                                <option value="Jandanwala">Jandanwala</option>
                                <option value="Jaranwala">Jaranwala</option>
                                <option value="Jatlaan">Jatlaan</option>
                                <option value="Jatoi">Jatoi</option>
                                <option value="Jauharabad">Jauharabad</option>
                                <option value="Jehangira">Jehangira</option>
                                <option value="Jhal Magsi">Jhal Magsi</option>
                                <option value="Jhand">Jhand</option>
                                <option value="Jhang">Jhang</option>
                                <option value="Jhatta bhutta">Jhatta bhutta</option>
                                <option value="Jhelum">Jhelum</option>
                                <option value="Jhudo">Jhudo</option>
                                <option value="Jin Pur">Jin Pur</option>
                                <option value="K.N. Shah">K.N. Shah</option>
                                <option value="Kabirwala">Kabirwala</option>
                                <option value="Kacha khooh">Kacha khooh</option>
                                <option value="Kahuta">Kahuta</option>
                                <option value="Kakul">Kakul</option>
                                <option value="Kakur town">Kakur town</option>
                                <option value="Kala bagh">Kala bagh</option>
                                <option value="Kala shah kaku">Kala shah kaku</option>
                                <option value="Kalaswala">Kalaswala</option>
                                <option value="Kallar Kahar">Kallar Kahar</option>
                                <option value="Kallar Saddiyian">Kallar Saddiyian</option>
                                <option value="Kallur kot">Kallur kot</option>
                                <option value="Kamalia">Kamalia</option>
                                <option value="Kamalia musa">Kamalia musa</option>
                                <option value="Kamber ali khan">Kamber ali khan</option>
                                <option value="Kameer">Kameer</option>
                                <option value="Kamoke">Kamoke</option>
                                <option value="Kamra">Kamra</option>
                                <option value="Kandh kot">Kandh kot</option>
                                <option value="Kandiaro">Kandiaro</option>
                                <option value="Karak">Karak</option>
                                <option value="Karoor pacca">Karoor pacca</option>
                                <option value="Karore lalisan">Karore lalisan</option>
                                <option value="Kashmir">Kashmir</option>
                                <option value="Kashmore">Kashmore</option>
                                <option value="Kasur">Kasur</option>
                                <option value="Kazi ahmed">Kazi ahmed</option>
                                <option value="Khairpur">Khairpur</option>
                                <option value="Khairpur Mir">Khairpur Mir</option>
                                <option value="Khan Bela">Khan Bela</option>
                                <option value="Khan qah sharif">Khan qah sharif</option>
                                <option value="Khandabad">Khandabad</option>
                                <option value="Khanewal">Khanewal</option>
                                <option value="Khangarh">Khangarh</option>
                                <option value="Khanpur">Khanpur</option>
                                <option value="Khanqah dogran">Khanqah dogran</option>
                                <option value="Khanqah sharif">Khanqah sharif</option>
                                <option value="Kharian">Kharian</option>
                                <option value="Khewra">Khewra</option>
                                <option value="Khoski">Khoski</option>
                                <option value="Khudian Khas">Khudian Khas</option>
                                <option value="Khurian wala">Khurian wala</option>
                                <option value="Khurrianwala">Khurrianwala</option>
                                <option value="Khushab">Khushab</option>
                                <option value="Khushal kot">Khushal kot</option>
                                <option value="Khuzdar">Khuzdar</option>
                                <option value="Khyber">Khyber</option>
                                <option value="Klaske">Klaske</option>
                                <option value="Kohat">Kohat</option>
                                <option value="Kot addu">Kot addu</option>
                                <option value="Kot bunglow">Kot bunglow</option>
                                <option value="Kot ghulam mohd">Kot ghulam mohd</option>
                                <option value="Kot mithan">Kot mithan</option>
                                <option value="Kot Momin">Kot Momin</option>
                                <option value="Kot radha kishan">Kot radha kishan</option>
                                <option value="Kotla">Kotla</option>
                                <option value="Kotla arab ali khan">Kotla arab ali khan</option>
                                <option value="Kotla jam">Kotla jam</option>
                                <option value="Kotla Pathan">Kotla Pathan</option>
                                <option value="Kotli Ak">Kotli Ak</option>
                                <option value="Kotli Loharan">Kotli Loharan</option>
                                <option value="Kotri">Kotri</option>
                                <option value="Kumbh">Kumbh</option>
                                <option value="Kundina">Kundina</option>
                                <option value="Kunjah">Kunjah</option>
                                <option value="Kunri">Kunri</option>
                                <option value="Lakki marwat">Lakki marwat</option>
                                <option value="Lala musa">Lala musa</option>
                                <option value="Lala rukh">Lala rukh</option>
                                <option value="Laliah">Laliah</option>
                                <option value="Lalshanra">Lalshanra</option>
                                <option value="Larkana">Larkana</option>
                                <option value="Lasbela">Lasbela</option>
                                <option value="Lawrence pur">Lawrence pur</option>
                                <option value="Layyah">Layyah</option>
                                <option value="Liaqat Pur">Liaqat Pur</option>
                                <option value="Lodhran">Lodhran</option>
                                <option value="Lower Dir">Lower Dir</option>
                                <option value="Ludhan">Ludhan</option>
                                <option value="Madina">Madina</option>
                                <option value="Makli">Makli</option>
                                <option value="Malakand Agency">Malakand Agency</option>
                                <option value="Malakwal">Malakwal</option>
                                <option value="Mamu kunjan">Mamu kunjan</option>
                                <option value="Mandi bahauddin">Mandi bahauddin</option>
                                <option value="Mandra">Mandra</option>
                                <option value="Manga mandi">Manga mandi</option>
                                <option value="Mangal sada">Mangal sada</option>
                                <option value="Mangi">Mangi</option>
                                <option value="Mangla">Mangla</option>
                                <option value="Mangowal">Mangowal</option>
                                <option value="Manoabad">Manoabad</option>
                                <option value="Mansehra">Mansehra</option>
                                <option value="Mardan">Mardan</option>
                                <option value="Mari indus">Mari indus</option>
                                <option value="Mastoi">Mastoi</option>
                                <option value="Matli">Matli</option>
                                <option value="Mehar">Mehar</option>
                                <option value="Mehmood kot">Mehmood kot</option>
                                <option value="Mehrabpur">Mehrabpur</option>
                                <option value="Melsi">Melsi</option>
                                <option value="Mian Channu">Mian Channu</option>
                                <option value="Mian Wali">Mian Wali</option>
                                <option value="Minchanabad">Minchanabad</option>
                                <option value="Mingora">Mingora</option>
                                <option value="Mir ali">Mir ali</option>
                                <option value="Miran shah">Miran shah</option>
                                <option value="Mirpur A.K.">Mirpur A.K.</option>
                                <option value="Mirpur khas">Mirpur khas</option>
                                <option value="Mirpur mathelo">Mirpur mathelo</option>
                                <option value="Mithi">Mithi</option>
                                <option value="Mitiari">Mitiari</option>
                                <option value="Mohen jo daro">Mohen jo daro</option>
                                <option value="More kunda">More kunda</option>
                                <option value="Morgah">Morgah</option>
                                <option value="Moro">Moro</option>
                                <option value="Mubarik pur">Mubarik pur</option>
                                <option value="Multan">Multan</option>
                                <option value="Muridke">Muridke</option>
                                <option value="Murree">Murree</option>
                                <option value="Musafir khana">Musafir khana</option>
                                <option value="Mustung">Mustung</option>
                                <option value="Muzaffar Gargh">Muzaffar Gargh</option>
                                <option value="Muzaffarabad">Muzaffarabad</option>
                                <option value="Nankana sahib">Nankana sahib</option>
                                <option value="Narang mandi">Narang mandi</option>
                                <option value="Narowal">Narowal</option>
                                <option value="Naseerabad">Naseerabad</option>
                                <option value="Naukot">Naukot</option>
                                <option value="Naukundi">Naukundi</option>
                                <option value="Nawabshah">Nawabshah</option>
                                <option value="New saeedabad">New saeedabad</option>
                                <option value="Nilore">Nilore</option>
                                <option value="Noor kot">Noor kot</option>
                                <option value="Nooriabad">Nooriabad</option>
                                <option value="Noorpur nooranga">Noorpur nooranga</option>
                                <option value="Noshero Feroze">Noshero Feroze</option>
                                <option value="Noudero">Noudero</option>
                                <option value="Nowshera">Nowshera</option>
                                <option value="Nowshera cantt">Nowshera cantt</option>
                                <option value="Nowshera Virka">Nowshera Virka</option>
                                <option value="Okara">Okara</option>
                                <option value="Other">Other</option>
                                <option value="Padidan">Padidan</option>
                                <option value="Pak china fertilizer">Pak china fertilizer</option>
                                <option value="Pak pattan sharif">Pak pattan sharif</option>
                                <option value="Panjan kisan">Panjan kisan</option>
                                <option value="Panjgoor">Panjgoor</option>
                                <option value="Pano Aqil">Pano Aqil</option>
                                <option value="Pano Aqil">Pano Aqil</option>
                                <option value="Pasni">Pasni</option>
                                <option value="Pasrur">Pasrur</option>
                                <option value="Pattoki">Pattoki</option>
                                <option value="Phagwar">Phagwar</option>
                                <option value="Phalia">Phalia</option>
                                <option value="Phool nagar">Phool nagar</option>
                                <option value="Piaro goth">Piaro goth</option>
                                <option value="Pind Dadan Khan">Pind Dadan Khan</option>
                                <option value="Pindi Bhattian">Pindi Bhattian</option>
                                <option value="Pindi bohri">Pindi bohri</option>
                                <option value="Pindi gheb">Pindi gheb</option>
                                <option value="Piplan">Piplan</option>
                                <option value="Pir mahal">Pir mahal</option>
                                <option value="Pishin">Pishin</option>
                                <option value="Qalandarabad">Qalandarabad</option>
                                <option value="Qamber Ali Khan">Qamber Ali Khan</option>
                                <option value="Qasba gujrat">Qasba gujrat</option>
                                <option value="Qazi ahmed">Qazi ahmed</option>
                                <option value="Qila Deedar Singh">Qila Deedar Singh</option>
                                <option value="Quaid Abad">Quaid Abad</option>
                                <option value="Quetta">Quetta</option>
                                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                <option value="Rahwali">Rahwali</option>
                                <option value="Raiwind">Raiwind</option>
                                <option value="Rajana">Rajana</option>
                                <option value="Rajanpur">Rajanpur</option>
                                <option value="Rangoo">Rangoo</option>
                                <option value="Ranipur">Ranipur</option>
                                <option value="Rato Dero">Rato Dero</option>
                                <option value="Rawalakot">Rawalakot</option>
                                <option value="Rawat">Rawat</option>
                                <option value="Renala khurd">Renala khurd</option>
                                <option value="Risalpur">Risalpur</option>
                                <option value="Rohri">Rohri</option>
                                <option value="Sadiqabad">Sadiqabad</option>
                                <option value="Sagri">Sagri</option>
                                <option value="Sahiwal">Sahiwal</option>
                                <option value="Saidu sharif">Saidu sharif</option>
                                <option value="Sajawal">Sajawal</option>
                                <option value="Sakhi Sarwar">Sakhi Sarwar</option>
                                <option value="Samanabad">Samanabad</option>
                                <option value="Sambrial">Sambrial</option>
                                <option value="Samma satta">Samma satta</option>
                                <option value="Sanghar">Sanghar</option>
                                <option value="Sanghi">Sanghi</option>
                                <option value="Sangla Hills">Sangla Hills</option>
                                <option value="Sangote">Sangote</option>
                                <option value="Sanjarpur">Sanjarpur</option>
                                <option value="Sanjwal">Sanjwal</option>
                                <option value="Sara e naurang">Sara e naurang</option>
                                <option value="Sara-E-Alamgir">Sara-E-Alamgir</option>
                                <option value="Sarai alamgir">Sarai alamgir</option>
                                <option value="Sargodha">Sargodha</option>
                                <option value="Satiana">Satiana</option>
                                <option value="Sehar baqlas">Sehar baqlas</option>
                                <option value="Sehwan Sharif">Sehwan Sharif</option>
                                <option value="Sekhat">Sekhat</option>
                                <option value="Shadiwal">Shadiwal</option>
                                <option value="Shah kot">Shah kot</option>
                                <option value="Shahdad kot">Shahdad kot</option>
                                <option value="Shahdadpur">Shahdadpur</option>
                                <option value="Shahdara">Shahdara</option>
                                <option value="Shahpur chakar">Shahpur chakar</option>
                                <option value="Shahpur Saddar">Shahpur Saddar</option>
                                <option value="Shakargarh">Shakargarh</option>
                                <option value="Shamsabad">Shamsabad</option>
                                <option value="Shankiari">Shankiari</option>
                                <option value="Shedani sharif">Shedani sharif</option>
                                <option value="Sheikhupura">Sheikhupura</option>
                                <option value="Sheikhupura">Sheikhupura</option>
                                <option value="Shemier">Shemier</option>
                                <option value="Shikar pur">Shikar pur</option>
                                <option value="Shorkot">Shorkot</option>
                                <option value="Shorkot Cantt">Shorkot Cantt</option>
                                <option value="Shuja Abad">Shuja Abad</option>
                                <option value="Sialkot">Sialkot</option>
                                <option value="Sibi">Sibi</option>
                                <option value="Sihala">Sihala</option>
                                <option value="Sikandarabad">Sikandarabad</option>
                                <option value="Sillanwali">Sillanwali</option>
                                <option value="Sita road">Sita road</option>
                                <option value="Skardu">Skardu</option>
                                <option value="Skrand">Skrand</option>
                                <option value="Sohawa">Sohawa</option>
                                <option value="Sohawa district daska">Sohawa district daska</option>
                                <option value="Sukkur">Sukkur</option>
                                <option value="Sumandari">Sumandari</option>
                                <option value="Swabi">Swabi</option>
                                <option value="Swat">Swat</option>
                                <option value="Swatmingora">Swatmingora</option>
                                <option value="Takhtbai">Takhtbai</option>
                                <option value="Talagang">Talagang</option>
                                <option value="Talamba">Talamba</option>
                                <option value="Talhur">Talhur</option>
                                <option value="Tandiliyawala">Tandiliyawala</option>
                                <option value="Tando adam">Tando adam</option>
                                <option value="Tando Allah Yar">Tando Allah Yar</option>
                                <option value="Tando jam">Tando jam</option>
                                <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                <option value="Tank">Tank</option>
                                <option value="Tarbela">Tarbela</option>
                                <option value="Tarmatan">Tarmatan</option>
                                <option value="Tatlay Wali">Tatlay Wali</option>
                                <option value="Taunsa sharif">Taunsa sharif</option>
                                <option value="Taxila">Taxila</option>
                                <option value="Tharo shah">Tharo shah</option>
                                <option value="Thatta">Thatta</option>
                                <option value="Theing jattan more">Theing jattan more</option>
                                <option value="Thull">Thull</option>
                                <option value="Tibba sultanpur">Tibba sultanpur</option>
                                <option value="Toba Tek Singh">Toba Tek Singh</option>
                                <option value="Topi">Topi</option>
                                <option value="Toru">Toru</option>
                                <option value="Tranda Muhammad Pannah">Tranda Muhammad Pannah</option>
                                <option value="Turbat">Turbat</option>
                                <option value="Ubaro">Ubaro</option>
                                <option value="Ubauro">Ubauro</option>
                                <option value="Ugoke">Ugoke</option>
                                <option value="Ukba">Ukba</option>
                                <option value="Umer Kot">Umer Kot</option>
                                <option value="Upper deval">Upper deval</option>
                                <option value="Usta Muhammad">Usta Muhammad</option>
                                <option value="Vehari">Vehari</option>
                                <option value="Village Sunder">Village Sunder</option>
                                <option value="Wah cantt">Wah cantt</option>
                                <option value="Wahi hassain">Wahi hassain</option>
                                <option value="Wahn Bachran">Wahn Bachran</option>
                                <option value="Wan radha ram">Wan radha ram</option>
                                <option value="Warah">Warah</option>
                                <option value="Warburton">Warburton</option>
                                <option value="Wazirabad">Wazirabad</option>
                                <option value="Yazman mandi">Yazman mandi</option>
                                <option value="Zafarwal">Zafarwal</option>
                                <option value="Zahir Peer">Zahir Peer</option>
                            </select>
                        </div>

                        <script>
							let citySelect = document.getElementById('user_city');
							citySelect.value = `{{Auth::user()->city}}`;
						</script>
                        
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Mobile Number</label>
                        <div class="col-md-8">
                            <input type="number" placeholder="Phone Number" name="phone" size="30"  value="{{Auth::user()->phone}}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Email</label>
                        <div class="col-md-8">
                            <input placeholder="Email Address" type="text" value="{{Auth::user()->email}}" name="emai" disabled />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4">Password</label>
                        <div class="col-md-8">
                            <input placeholder="*********" type="password"  name="password"  />
                        </div>
                    </div>



                </fieldset>
                <fieldset>

                    <div class="form-group sell-btn-main">
                        <div class="col-md-offset-4 col-md-8">
                            <input class="btn btn-primary btn-large" style="height: 4vh;" name="commit" type="submit"
                                value="Save Changes" />
                        </div>
                    </div>
                </fieldset>

                <hr />


            </form>
        </div>
    </div>
</section>


</div>


@endsection