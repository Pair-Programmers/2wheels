@extends('layouts.main')

@section('title', "Checkout")

@section('contents')

<div class="" id="main-container">
     <script>
       let company = `{{$company}}`;
       if(company != 'all'){
          if(company == 'honda'){
            var elmntToView1 = document.getElementById('hondabikeprice');
            elmntToView1.scrollIntoView();
          }
          else if(company == 'ravi'){
            var elmntToView2 = document.getElementById('ravibikeprice');
            elmntToView2.scrollIntoView();
          }
          else if(company == 'hero'){
            var elmntToView3 = document.getElementById('herobikeprice');
            elmntToView3.scrollIntoView();
          }
          else if(company == 'pak-hero'){
            var elmntToView4 = document.getElementById('pak-herobikeprice');
            elmntToView4.scrollIntoView();
          }
          else if(company == 'suzuki'){
            var elmntToView5 = document.getElementById('suzukibikeprice');
            elmntToView5.scrollIntoView();
          }
          else if(company == 'yamaha'){
            var elmntToView6 = document.getElementById('yamahabikeprice');
            elmntToView6.scrollIntoView();
          }
        
       }
       
      
     </script>
      
      <section>
  <div class="container">
  
   <ul class="breadcrumb"></li><li><a href="/bikes/new-bikes/" itemprop="url"><span itemprop="name">New Bikes</span></a>
    </li><li class="active">Motorcycle Prices</span><meta content="3" itemprop="position"></li></ul>


    <div style="margin-top: 75px;" class="pb-4">
      <div class="icn-bikes"><a href="/new-cars/pricelist/" rel="nofollow">Looking for new Bike prices?</a></div>
      <h1>Motorcycle Prices</h1>
    </div>

    <div class="row">
      <div class="col-md-10">
        <ul class="list-unstyled pricelist-box mb30 clearfix row">
          <li class="col-md-3 mb20">
            <a href="#aprilia">
            
            <div class="logo">
              <img alt="Aprilia Prices" src="{{asset('website')}}/assets/img/logo-aprilia-motor_2.png" title="Aprilia Prices" />
            </div>
            <div class="car-name">
              Aprilia
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#benelli">
            
            <div class="logo">
              <img alt="Benelli Prices" src="{{asset('website')}}/assets/img/Benelli.png" title="Benelli Prices" />
            </div>
            <div class="car-name">
              Benelli
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#bml">
            
            <div class="logo">
              <img alt="BML Prices" src="{{asset('website')}}/assets/img/bml.png" title="BML Prices" />
            </div>
            <div class="car-name">
              BML
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#bmw">
            
            <div class="logo">
              <img alt="BMW Prices" src="{{asset('website')}}/assets/img/BMW.png" title="BMW Prices" />
            </div>
            <div class="car-name">
              BMW
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#chinese-bikes">
            
            <div class="logo">
              <img alt="Chinese Bikes Prices" src="{{asset('website')}}/assets/img/Chinese Bike.png" title="Chinese Bikes Prices" />
            </div>
            <div class="car-name">
              Chinese Bikes
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#crown">
            
            <div class="logo">
              <img alt="Crown Prices" src="{{asset('website')}}/assets/img/crown.png" title="Crown Prices" />
            </div>
            <div class="car-name">
              Crown
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#derbi">
            
            <div class="logo">
              <img alt="Derbi Prices" src="{{asset('website')}}/assets/img/derbi.png" title="Derbi Prices" />
            </div>
            <div class="car-name">
              Derbi
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#ducati">
            
            <div class="logo">
              <img alt="Ducati Prices" src="{{asset('website')}}/assets/img/ducati.png" title="Ducati Prices" />
            </div>
            <div class="car-name">
              Ducati
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#dyl">
            
            <div class="logo">
              <img alt="DYL Prices" src="{{asset('website')}}/assets/img/dyl.png" title="DYL Prices" />
            </div>
            <div class="car-name">
              DYL
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#eagle">
            
            <div class="logo">
              <img alt="Eagle Prices" src="{{asset('website')}}/assets/img/eagle.png" title="Eagle Prices" />
            </div>
            <div class="car-name">
              Eagle
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#fuego">
            
            <div class="logo">
              <img alt="FUEGO Prices" src="{{asset('website')}}/assets/img/fuego-logo.jpg" title="FUEGO Prices" />
            </div>
            <div class="car-name">
              FUEGO
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#ghani">
            
            <div class="logo">
              <img alt="Ghani Prices" src="{{asset('website')}}/assets/img/ghani_logo.png" title="Ghani Prices" />
            </div>
            <div class="car-name">
              Ghani
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#hero">
            
            <div class="logo">
              <img alt="Hero Prices" src="{{asset('website')}}/assets/img/hero.png" title="Hero Prices" />
            </div>
            <div class="car-name">
              Hero
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#hi-speed">
            
            <div class="logo">
              <img alt="Hi Speed Prices" src="{{asset('website')}}/assets/img/Hi Speed.png" title="Hi Speed Prices" />
            </div>
            <div class="car-name">
              Hi Speed
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#honda">
            
            <div class="logo">
              <img alt="Honda Prices" src="{{asset('website')}}/assets/img/Honda.png" title="Honda Prices" />
            </div>
            <div class="car-name">
              Honda
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#kawasaki">
            
            <div class="logo">
              <img alt="Kawasaki Prices" src="{{asset('website')}}/assets/img/Kawasaki.png" title="Kawasaki Prices" />
            </div>
            <div class="car-name">
              Kawasaki
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#keeway">
            
            <div class="logo">
              <img alt="KEEWAY Prices" src="{{asset('website')}}/assets/img/keeway.png" title="KEEWAY Prices" />
            </div>
            <div class="car-name">
              KEEWAY
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#lifan">
            
            <div class="logo">
              <img alt="Lifan Prices" src="{{asset('website')}}/assets/img/lifan.png" title="Lifan Prices" />
            </div>
            <div class="car-name">
              Lifan
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#metro">
            
            <div class="logo">
              <img alt="Metro Prices" src="{{asset('website')}}/assets/img/metro.png" title="Metro Prices" />
            </div>
            <div class="car-name">
              Metro
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#osaka">
            
            <div class="logo">
              <img alt="Osaka Prices" src="{{asset('website')}}/assets/img/OSAKA.png" title="Osaka Prices" />
            </div>
            <div class="car-name">
              Osaka
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#overdrive">
            
            <div class="logo">
              <img alt="OVERDRIVE Prices" src="{{asset('website')}}/assets/img/over-drive-logo.jpg" title="OVERDRIVE Prices" />
            </div>
            <div class="car-name">
              OVERDRIVE
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#ow">
            
            <div class="logo">
              <img alt="OW Prices" src="{{asset('website')}}/assets/img/ow-motors-com.png" title="OW Prices" />
            </div>
            <div class="car-name">
              OW
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#pak-hero">
            
            <div class="logo">
              <img alt="Pak Hero Prices" src="{{asset('website')}}/assets/img/pak-hero.png" title="Pak Hero Prices" />
            </div>
            <div class="car-name">
              Pak Hero
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#power">
            
            <div class="logo">
              <img alt="Power Prices" src="{{asset('website')}}/assets/img/Power_Motorcycle_Logo.png" title="Power Prices" />
            </div>
            <div class="car-name">
              Power
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#qingqi">
            
            <div class="logo">
              <img alt="QINGQI Prices" src="{{asset('website')}}/assets/img/qingqi.png" title="QINGQI Prices" />
            </div>
            <div class="car-name">
              QINGQI
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#ravi">
            
            <div class="logo">
              <img alt="Ravi Prices" src="{{asset('website')}}/assets/img/ravi.png" title="Ravi Prices" />
            </div>
            <div class="car-name">
              Ravi
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#road-prince">
            
            <div class="logo">
              <img alt="Road Prince Prices" src="{{asset('website')}}/assets/img/Road Prince.png" title="Road Prince Prices" />
            </div>
            <div class="car-name">
              Road Prince
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#super-power">
            
            <div class="logo">
              <img alt="Super Power Prices" src="{{asset('website')}}/assets/img/Super Power.png" title="Super Power Prices" />
            </div>
            <div class="car-name">
              Super Power
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#suzuki">
            
            <div class="logo">
              <img alt="Suzuki Prices" src="{{asset('website')}}/assets/img/Sazuki.png" title="Suzuki Prices" />
            </div>
            <div class="car-name">
              Suzuki
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#u-m">
            
            <div class="logo">
              <img alt="U.M Prices" src="{{asset('website')}}/assets/img/um-logo.jpg" title="U.M Prices" />
            </div>
            <div class="car-name">
              U.M
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#unique">
            
            <div class="logo">
              <img alt="Unique Prices" src="{{asset('website')}}/assets/img/unique.png" title="Unique Prices" />
            </div>
            <div class="car-name">
              Unique
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#united">
            
            <div class="logo">
              <img alt="United Prices" src="{{asset('website')}}/assets/img/United.png" title="United Prices" />
            </div>
            <div class="car-name">
              United
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#vespa">
            
            <div class="logo">
              <img alt="Vespa Prices" src="{{asset('website')}}/assets/img/Vespa.png" title="Vespa Prices" />
            </div>
            <div class="car-name">
              Vespa
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#yamaha">
            
            <div class="logo">
              <img alt="Yamaha Prices" src="{{asset('website')}}/assets/img/Yamaha.png" title="Yamaha Prices" />
            </div>
            <div class="car-name">
              Yamaha
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#zongshen">
            
            <div class="logo">
              <img alt="Zongshen Prices" src="{{asset('website')}}/assets/img/zongshen-logo.jpg" title="Zongshen Prices" />
            </div>
            <div class="car-name">
              Zongshen
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#zontes">
            
            <div class="logo">
              <img alt="Zontes Prices" src="{{asset('website')}}/assets/img/zontes.png" title="Zontes Prices" />
            </div>
            <div class="car-name">
              Zontes
            </div>
</a>          </li>
          <li class="col-md-3 mb20">
            <a href="#zxmco">
            
            <div class="logo">
              <img alt="ZXMCO Prices" src="{{asset('website')}}/assets/img/ZXMCO.png" title="ZXMCO Prices" />
            </div>
            <div class="car-name">
              ZXMCO
            </div>
</a>          </li>
        </ul>

        <div class="clearfix"></div>
        <div class="manufacturer-price-list">
            <div id="aprilia">
              <h2 id="apriliabikeprice">
                Aprilia Bike Prices
                <div class="clear-link"><a href="/bikes/aprilia/" class="more-link">Learn More About Aprilia</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/aprilia/rs-125/">Aprilia RS 125</a></td>
                    <td class="version-price generic-green"> PKR 625,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/aprilia/dorsoduro-900/">Aprilia DORSODURO-900</a></td>
                    <td class="version-price generic-green"> PKR 1,950,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/aprilia/rsv4/">Aprilia RSV4</a></td>
                    <td class="version-price generic-green"> PKR 4,400,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/aprilia/shiver-900/">Aprilia SHIVER 900</a></td>
                    <td class="version-price generic-green"> PKR 1,950,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/aprilia/tuono-1000/">Aprilia TUONO 1000 </a></td>
                    <td class="version-price generic-green"> PKR 3,000,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="benelli">
              <h2 id="benalibikeprice">
                Benelli Bike Prices
                <div  class="clear-link"><a href="/bikes/benelli/" class="more-link">Learn More About Benelli</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/tnt-25/">Benelli TNT 25</a></td>
                    <td class="version-price generic-green"> PKR 535,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/180s/">Benelli 180S</a></td>
                    <td class="version-price generic-green"> PKR 495,000</td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/302-r/">Benelli 302 R</a></td>
                    <td class="version-price generic-green"> PKR 850,000</td>
                    <td class="version-road-price">08-09-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/imperiale-400/">Benelli Imperiale 400</a></td>
                    <td class="version-price generic-green"> PKR 1,000,000</td>
                    <td class="version-road-price">08-09-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/tnt-150i/">Benelli TNT 150i</a></td>
                    <td class="version-price generic-green"> PKR 395,000</td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/tnt-600/">Benelli TNT 600</a></td>
                    <td class="version-price generic-green"> PKR 1,400,000</td>
                    <td class="version-road-price">08-09-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/trk-251/">Benelli TRK 251</a></td>
                    <td class="version-price generic-green"> PKR 800,000</td>
                    <td class="version-road-price">07-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/trk-502/">Benelli TRK 502</a></td>
                    <td class="version-price generic-green"> PKR 1,400,000</td>
                    <td class="version-road-price">08-09-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/benelli/trk-502x/">Benelli TRK 502X</a></td>
                    <td class="version-price generic-green"> PKR 1,500,000</td>
                    <td class="version-road-price">07-01-2021</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="bml">
              <h2 id="benalibikeprice">
                BML Bike Prices
                <div class="clear-link"><a href="/bikes/bml/" class="more-link">Learn More About BML</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/bml/bm-100/">BML BM 100</a></td>
                    <td class="version-price generic-green"> PKR 48,500</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/bml/bm-70/">BML BM 70</a></td>
                    <td class="version-price generic-green"> PKR 39,500</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="bmw">
              <h2 id="benalibikeprice">
                BMW Bike Prices
                <div class="clear-link"><a href="/bikes/bmw/" class="more-link">Learn More About BMW</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/bmw/s1000rr/">BMW S1000RR</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/bmw/f-700-gs/">BMW F 700 GS</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/bmw/r-nine-t/">BMW R NINE T</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/bmw/r1200-gs-adventure/">BMW R1200 GS Adventure</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="chinese-bikes">
              <h2 id="benalibikeprice">
                Chinese Bikes Bike Prices
                <div class="clear-link"><a href="/bikes/chinese-bikes/" class="more-link">Learn More About Chinese Bikes</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/chinese-bikes/ow-ninja-250cc/">Chinese Bikes OW Ninja 250cc</a></td>
                    <td class="version-price generic-green"> PKR 400,000</td>
                    <td class="version-road-price">10-02-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/chinese-bikes/ow-ninja-300cc/">Chinese Bikes OW Ninja 300cc</a></td>
                    <td class="version-price generic-green"> PKR 520,000</td>
                    <td class="version-road-price">10-02-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/chinese-bikes/ow-ninja-400cc/">Chinese Bikes OW Ninja 400cc</a></td>
                    <td class="version-price generic-green"> PKR 650,000</td>
                    <td class="version-road-price">10-02-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/chinese-bikes/ow-r3-250cc/">Chinese Bikes OW R3 250cc</a></td>
                    <td class="version-price generic-green"> PKR 425,000</td>
                    <td class="version-road-price">21-07-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/chinese-bikes/ow-r3-300cc/">Chinese Bikes OW R3 300cc</a></td>
                    <td class="version-price generic-green"> PKR 525,000</td>
                    <td class="version-road-price">21-07-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/chinese-bikes/ow-r3-400cc/">Chinese Bikes OW R3 400cc</a></td>
                    <td class="version-price generic-green"> PKR 650,000</td>
                    <td class="version-road-price">21-07-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="crown">
              <h2 id="benalibikeprice">
                Crown Bike Prices
                <div class="clear-link"><a href="/bikes/crown/" class="more-link">Learn More About Crown</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/crown/cr-70-hd-plus/">Crown CR 70 HD Plus</a></td>
                    <td class="version-price generic-green"> PKR 53,000</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/crown/cr-125-euro-ii--2/">Crown CR 125 Euro II</a></td>
                    <td class="version-price generic-green"> PKR 85,600</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/crown/cr-100-excellence/">Crown CR 100 Excellence</a></td>
                    <td class="version-price generic-green"> PKR 54,500</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/crown/cr-70-jazba/">Crown CR 70 Jazba</a></td>
                    <td class="version-price generic-green"> PKR 53,900</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/crown/cr-70-self-start/">Crown CR 70 Self Start</a></td>
                    <td class="version-price generic-green"> PKR 62,600</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/crown/fit-150-fighter/">Crown FIT 150 Fighter</a></td>
                    <td class="version-price generic-green"> PKR 140,000</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="derbi">
              <h2>
                Derbi Bike Prices
                <div class="clear-link"><a href="/bikes/derbi/" class="more-link">Learn More About Derbi</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/derbi/etx-150/">Derbi ETX 150</a></td>
                    <td class="version-price generic-green"> PKR 230,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/derbi/stx-150/">Derbi STX 150</a></td>
                    <td class="version-price generic-green"> PKR 230,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="ducati">
              <h2>
                Ducati Bike Prices
                <div class="clear-link"><a href="/bikes/ducati/" class="more-link">Learn More About Ducati</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/other--21/">Ducati Other</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/sports-1000-s/">Ducati Sports 1000 S</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/1098-r-bayliss-le/">Ducati 1098 R Bayliss LE</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/gt-1000/">Ducati GT 1000</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/streetfighter-848/">Ducati Streetfighter 848</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/1198/">Ducati 1198</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/696/">Ducati 696</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/848/">Ducati 848</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/1100-s/">Ducati 1100 S</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/1198-s/">Ducati 1198 S</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/848-nicky-hayden/">Ducati 848 Nicky Hayden</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/desmosedici-rr/">Ducati Desmosedici RR</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/gt-1000-touring/">Ducati GT 1000 Touring</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/scrambler-1100/">Ducati Scrambler 1100</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/sport-1000-biposto/">Ducati Sport 1000 Biposto</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ducati/streetfighter-s/">Ducati Streetfighter S</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="dyl">
              <h2>
                DYL Bike Prices
                <div class="clear-link"><a href="/bikes/dyl/" class="more-link">Learn More About DYL</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/dyl/dhoom-yd-70--2/">DYL Dhoom YD-70</a></td>
                    <td class="version-price generic-green"> PKR 55,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="eagle">
              <h2>
                Eagle Bike Prices
                <div class="clear-link"><a href="/bikes/eagle/" class="more-link">Learn More About Eagle</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/eagle/fire-bird-dg70/">Eagle Fire Bird DG70</a></td>
                    <td class="version-price generic-green"> PKR 38,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="fuego">
              <h2>
                FUEGO Bike Prices
                <div class="clear-link"><a href="/bikes/fuego/" class="more-link">Learn More About FUEGO</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/fuego/scrambler-250/">FUEGO SCRAMBLER 250</a></td>
                    <td class="version-price generic-green"> PKR 430,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/fuego/tekken-250/">FUEGO TEKKEN 250</a></td>
                    <td class="version-price generic-green"> PKR 425,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="ghani">
              <h2>
                Ghani Bike Prices
                <div class="clear-link"><a href="/bikes/ghani/" class="more-link">Learn More About Ghani</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/ghani/gi-70--2/">Ghani Gi 70</a></td>
                    <td class="version-price generic-green"> PKR 44,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ghani/gi-70-self-start/">Ghani Gi 70 Self Start</a></td>
                    <td class="version-price generic-green"> PKR 57,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="hero">
              <h2 id="herobikeprice">
                Hero Bike Prices
                <div class="clear-link"><a href="/bikes/hero/" class="more-link">Learn More About Hero</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/hero/rf-70--2/">Hero RF 70</a></td>
                    <td class="version-price generic-green"> PKR 47,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/hero/rf-125/">Hero RF 125</a></td>
                    <td class="version-price generic-green"> PKR 105,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/hero/plus-90/">Hero Plus 90</a></td>
                    <td class="version-price generic-green"> PKR 44,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/hero/splander-100/">Hero Splander 100</a></td>
                    <td class="version-price generic-green"> PKR 53,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="hi-speed">
              <h2>
                Hi Speed Bike Prices
                <div class="clear-link"><a href="/bikes/hi-speed/" class="more-link">Learn More About Hi Speed</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/hi-speed/infinity-150/">Hi Speed Infinity 150</a></td>
                    <td class="version-price generic-green"> PKR 185,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="honda">
              <h2 id="hondabikeprice">
                Honda Bike Prices
                <div class="clear-link"><a href="/bikes/honda/" class="more-link">Learn More About Honda</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cg-125--2/">Honda CG 125</a></td>
                    <td class="version-price generic-green"> PKR 134,900</td>
                    <td class="version-road-price">24-02-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cd-70--3/">Honda CD 70</a></td>
                    <td class="version-price generic-green"> PKR 81,900</td>
                    <td class="version-road-price">31-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/pridor/">Honda Pridor</a></td>
                    <td class="version-price generic-green"> PKR 113,500</td>
                    <td class="version-road-price">31-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cb-150f/">Honda CB 150F</a></td>
                    <td class="version-price generic-green"> PKR 250,900</td>
                    <td class="version-road-price">31-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cb-125f/">Honda CB 125F</a></td>
                    <td class="version-price generic-green"> PKR 195,900</td>
                    <td class="version-road-price">31-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cb-250f/">Honda CB 250F</a></td>
                    <td class="version-price generic-green"> PKR 875,250</td>
                    <td class="version-road-price">18-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cb-500x/">Honda CB 500X</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cbr-150r/">Honda CBR 150R</a></td>
                    <td class="version-price generic-green"> PKR 660,000</td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cbr-500r/">Honda CBR 500R</a></td>
                    <td class="version-price generic-green"> PKR 1,250,000</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cd-70-dream/">Honda CD 70 Dream</a></td>
                    <td class="version-price generic-green"> PKR 87,900</td>
                    <td class="version-road-price">31-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cg-125-dream/">Honda CG 125 Dream</a></td>
                    <td class="version-price generic-green"> PKR 106,900</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/cg-125-special-edition/">Honda CG 125 Special Edition</a></td>
                    <td class="version-price generic-green"> PKR 162,900</td>
                    <td class="version-road-price">31-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/honda/deluxe/">Honda Deluxe</a></td>
                    <td class="version-price generic-green"> PKR 129,500</td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="kawasaki">
              <h2>
                Kawasaki Bike Prices
                <div class="clear-link"><a href="/bikes/kawasaki/" class="more-link">Learn More About Kawasaki</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/kawasaki/ninja-zx300/">Kawasaki Ninja ZX300</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/kawasaki/gt-550/">Kawasaki GT 550</a></td>
                    <td class="version-price generic-green"> Call for price</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="keeway">
              <h2>
                KEEWAY Bike Prices
                <div class="clear-link"><a href="/bikes/keeway/" class="more-link">Learn More About KEEWAY</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/keeway/k-light/">KEEWAY K-Light </a></td>
                    <td class="version-price generic-green"> PKR 425,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/keeway/super-light/">KEEWAY Super Light</a></td>
                    <td class="version-price generic-green"> PKR 415,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="lifan">
              <h2>
                Lifan Bike Prices
                <div class="clear-link"><a href="/bikes/lifan/" class="more-link">Learn More About Lifan</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/lifan/kpr-200/">Lifan KPR 200</a></td>
                    <td class="version-price generic-green"> PKR 385,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="metro">
              <h2>
                Metro Bike Prices
                <div class="clear-link"><a href="/bikes/metro/" class="more-link">Learn More About Metro</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/metro/mr-70/">Metro MR 70</a></td>
                    <td class="version-price generic-green"> PKR 47,500</td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/metro/boom-70/">Metro Boom 70</a></td>
                    <td class="version-price generic-green"> PKR 40,500</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/metro/tez-raftar-70/">Metro TEZ RAFTAR 70</a></td>
                    <td class="version-price generic-green"> PKR 50,500</td>
                    <td class="version-road-price">01-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/metro/jeet-70/">Metro Jeet 70</a></td>
                    <td class="version-price generic-green"> PKR 39,000</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/metro/mr-125/">Metro MR 125 </a></td>
                    <td class="version-price generic-green"> PKR 85,500</td>
                    <td class="version-road-price">01-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/metro/mr-100/">Metro MR 100</a></td>
                    <td class="version-price generic-green"> PKR 60,000</td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="osaka">
              <h2>
                Osaka Bike Prices
                <div class="clear-link"><a href="/bikes/osaka/" class="more-link">Learn More About Osaka</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/osaka/af-125/">Osaka AF 125</a></td>
                    <td class="version-price generic-green"> PKR 72,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/osaka/af-70/">Osaka AF 70</a></td>
                    <td class="version-price generic-green"> PKR 42,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/osaka/thunder-af-70/">Osaka  Thunder AF 70</a></td>
                    <td class="version-price generic-green"> PKR 47,000</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="overdrive">
              <h2>
                OVERDRIVE Bike Prices
                <div class="clear-link"><a href="/bikes/overdrive/" class="more-link">Learn More About OVERDRIVE</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/overdrive/cougar/">OVERDRIVE COUGAR</a></td>
                    <td class="version-price generic-green"> PKR 625,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="ow">
              <h2>
                OW Bike Prices
                <div class="clear-link"><a href="/bikes/ow/" class="more-link">Learn More About OW</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/ducatin-250cc/">OW Ducatin 250cc</a></td>
                    <td class="version-price generic-green"> PKR 470,000</td>
                    <td class="version-road-price">11-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/ducatin-400cc/">OW Ducatin 400cc</a></td>
                    <td class="version-price generic-green"> PKR 670,000</td>
                    <td class="version-road-price">11-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/jackpot-300cc/">OW Jackpot 300cc</a></td>
                    <td class="version-price generic-green"> PKR 650,000</td>
                    <td class="version-road-price">01-02-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/jackpot-400cc/">OW Jackpot 400cc</a></td>
                    <td class="version-price generic-green"> PKR 700,000</td>
                    <td class="version-road-price">01-02-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/jupiter-125cc/">OW Jupiter 125cc </a></td>
                    <td class="version-price generic-green"> PKR 150,000</td>
                    <td class="version-road-price">03-02-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/ninja-250cc/">OW Ninja 250cc</a></td>
                    <td class="version-price generic-green"> PKR 400,000</td>
                    <td class="version-road-price">27-08-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/ninja-300cc/">OW Ninja 300cc</a></td>
                    <td class="version-price generic-green"> PKR 520,000</td>
                    <td class="version-road-price">27-08-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/ninja-400cc/">OW Ninja 400cc</a></td>
                    <td class="version-price generic-green"> PKR 650,000</td>
                    <td class="version-road-price">27-08-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/r3-250cc/">OW R3 250cc</a></td>
                    <td class="version-price generic-green"> PKR 425,000</td>
                    <td class="version-road-price">27-08-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/r3-300cc/">OW R3 300cc</a></td>
                    <td class="version-price generic-green"> PKR 525,000</td>
                    <td class="version-road-price">27-08-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/r3-400cc/">OW R3 400cc</a></td>
                    <td class="version-price generic-green"> PKR 650,000</td>
                    <td class="version-road-price">27-08-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/s1000rr-250cc/">OW S1000RR 250cc</a></td>
                    <td class="version-price generic-green"> PKR 425,000</td>
                    <td class="version-road-price">11-09-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/s1000rr-300cc/">OW S1000RR 300cc</a></td>
                    <td class="version-price generic-green"> PKR 525,000</td>
                    <td class="version-road-price">11-09-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ow/s1000rr-400cc/">OW S1000RR 400cc</a></td>
                    <td class="version-price generic-green"> PKR 650,000</td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="pak-hero">
              <h2 id="pak-herobikeprice">
                Pak Hero Bike Prices
                <div class="clear-link"><a href="/bikes/pak-hero/" class="more-link">Learn More About Pak Hero</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/pak-hero/ph-70/">Pak Hero PH 70</a></td>
                    <td class="version-price generic-green"> PKR 38,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="power">
              <h2>
                Power Bike Prices
                <div class="clear-link"><a href="/bikes/power/" class="more-link">Learn More About Power</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/power/pk-70/">Power PK 70</a></td>
                    <td class="version-price generic-green"> PKR 39,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="qingqi">
              <h2>
                QINGQI Bike Prices
                <div class="clear-link"><a href="/bikes/qingqi/" class="more-link">Learn More About QINGQI</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/qingqi/qm-70--2/">QINGQI QM 70</a></td>
                    <td class="version-price generic-green"> PKR 39,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/qingqi/electric-bike-sporty/">QINGQI Electric bike sporty</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/qingqi/mt-150/">QINGQI MT 150</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/qingqi/qm-150/">QINGQI QM 150</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/qingqi/shuttle-eco-150/">QINGQI Shuttle Eco 150</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="ravi">
              <h2 id="ravibikeprice">
                Ravi Bike Prices
                <div class="clear-link"><a href="/bikes/ravi/" class="more-link">Learn More About Ravi</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/ravi/piaggio-storm-125/">Ravi Piaggio Storm 125</a></td>
                    <td class="version-price generic-green"> PKR 112,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ravi/humsafar-70/">Ravi Humsafar 70</a></td>
                    <td class="version-price generic-green"> PKR 40,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/ravi/premium-r1/">Ravi Premium R1</a></td>
                    <td class="version-price generic-green"> PKR 43,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="road-prince">
              <h2>
                Road Prince Bike Prices
                <div class="clear-link"><a href="/bikes/road-prince/" class="more-link">Learn More About Road Prince</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/road-prince/rp-70-passion/">Road Prince RP 70 Passion</a></td>
                    <td class="version-price generic-green"> PKR 53,000</td>
                    <td class="version-road-price">06-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/road-prince/wego-150--2/">Road Prince Wego 150</a></td>
                    <td class="version-price generic-green"> PKR 235,000</td>
                    <td class="version-road-price">03-12-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/road-prince/rp-125-euro-ii/">Road Prince RP 125 Euro II</a></td>
                    <td class="version-price generic-green"> PKR 77,500</td>
                    <td class="version-road-price">06-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/road-prince/robinson-150/">Road Prince Robinson 150</a></td>
                    <td class="version-price generic-green"> PKR 215,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/road-prince/rp-110/">Road Prince RP 110</a></td>
                    <td class="version-price generic-green"> PKR 52,000</td>
                    <td class="version-road-price">25-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/road-prince/twister-125/">Road Prince Twister 125</a></td>
                    <td class="version-price generic-green"> PKR 77,500</td>
                    <td class="version-road-price">06-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/road-prince/rx3/">Road Prince RX3</a></td>
                    <td class="version-price generic-green"> PKR 485,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="super-power">
              <h2>
                Super Power Bike Prices
                <div class="clear-link"><a href="/bikes/super-power/" class="more-link">Learn More About Super Power</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/super-power/sp-70/">Super Power SP 70</a></td>
                    <td class="version-price generic-green"> PKR 53,500</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/super-power/pk-150-archi/">Super Power PK 150 Archi </a></td>
                    <td class="version-price generic-green"> PKR 137,000</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/super-power/sp-125/">Super Power SP 125</a></td>
                    <td class="version-price generic-green"> PKR 75,000</td>
                    <td class="version-road-price">02-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/super-power/deluxe-70--2/">Super Power Deluxe 70</a></td>
                    <td class="version-price generic-green"> PKR 70,000</td>
                    <td class="version-road-price">01-03-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/super-power/leo-200/">Super Power Leo 200</a></td>
                    <td class="version-price generic-green"> PKR 200,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/super-power/sp-110-cheetah/">Super Power SP 110 Cheetah</a></td>
                    <td class="version-price generic-green"> PKR 81,500</td>
                    <td class="version-road-price">02-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/super-power/sp-70-tokyo/">Super Power SP 70 Tokyo</a></td>
                    <td class="version-price generic-green"> PKR 65,000</td>
                    <td class="version-road-price">13-10-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/super-power/sultan-sp-250/">Super Power Sultan SP 250</a></td>
                    <td class="version-price generic-green"> PKR 290,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="suzuki">
              <h2 id="suzukibikeprice">
                Suzuki Bike Prices
                <div class="clear-link"><a href="/bikes/suzuki/" class="more-link">Learn More About Suzuki</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/gs-150/">Suzuki GS 150</a></td>
                    <td class="version-price generic-green"> PKR 197,000</td>
                    <td class="version-road-price">01-02-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/gd-110s/">Suzuki GD 110S</a></td>
                    <td class="version-price generic-green"> PKR 181,000</td>
                    <td class="version-road-price">02-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/gd-110/">Suzuki GD 110</a></td>
                    <td class="version-price generic-green"> PKR 119,000</td>
                    <td class="version-road-price">01-02-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/gs-150-se/">Suzuki GS 150 SE</a></td>
                    <td class="version-price generic-green"> PKR 214,000</td>
                    <td class="version-road-price">01-02-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/gsx-r600/">Suzuki GSX-R600</a></td>
                    <td class="version-price generic-green"> PKR 1,950,000</td>
                    <td class="version-road-price">02-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/bandit/">Suzuki Bandit</a></td>
                    <td class="version-price generic-green"> PKR 1,450,000</td>
                    <td class="version-road-price">02-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/gixxer-150/">Suzuki Gixxer 150</a></td>
                    <td class="version-price generic-green"> PKR 599,000</td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/gr-150/">Suzuki GR 150</a></td>
                    <td class="version-price generic-green"> PKR 290,000</td>
                    <td class="version-road-price">01-02-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/hayabusa--2/">Suzuki Hayabusa</a></td>
                    <td class="version-price generic-green"> PKR 2,600,000</td>
                    <td class="version-road-price">02-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/inazuma/">Suzuki Inazuma</a></td>
                    <td class="version-price generic-green"> PKR 599,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/inazuma-aegis/">Suzuki Inazuma Aegis</a></td>
                    <td class="version-price generic-green"> PKR 1,000,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/intruder/">Suzuki Intruder</a></td>
                    <td class="version-price generic-green"> PKR 1,700,000</td>
                    <td class="version-road-price">02-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/raider-110/">Suzuki Raider 110</a></td>
                    <td class="version-price generic-green"> PKR 101,400</td>
                    <td class="version-road-price">02-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/suzuki/sprinter-eco/">Suzuki Sprinter ECO</a></td>
                    <td class="version-price generic-green"> PKR 98,400</td>
                    <td class="version-road-price">02-11-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="u-m">
              <h2>
                U.M Bike Prices
                <div class="clear-link"><a href="/bikes/u-m/" class="more-link">Learn More About U.M</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/u-m/classic/">U.M CLASSIC</a></td>
                    <td class="version-price generic-green"> PKR 585,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/u-m/commando/">U.M COMMANDO</a></td>
                    <td class="version-price generic-green"> PKR 570,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/u-m/commando-sports/">U.M COMMANDO SPORTS</a></td>
                    <td class="version-price generic-green"> PKR 570,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="unique">
              <h2>
                Unique Bike Prices
                <div class="clear-link"><a href="/bikes/unique/" class="more-link">Learn More About Unique</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/unique/xtreme-ud-70/">Unique Xtreme UD 70</a></td>
                    <td class="version-price generic-green"> PKR 47,000</td>
                    <td class="version-road-price">05-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/unique/ud-100/">Unique UD 100</a></td>
                    <td class="version-price generic-green"> PKR 85,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/unique/ud-125/">Unique UD 125</a></td>
                    <td class="version-price generic-green"> PKR 75,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/unique/crazer-ud-150/">Unique Crazer UD-150</a></td>
                    <td class="version-price generic-green"> PKR 170,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="united">
              <h2>
                United Bike Prices
                <div class="clear-link"><a href="/bikes/united/" class="more-link">Learn More About United</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/united/us-70/">United US 70</a></td>
                    <td class="version-price generic-green"> PKR 49,000</td>
                    <td class="version-road-price">25-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/united/us-100/">United US 100</a></td>
                    <td class="version-price generic-green"> PKR 53,500</td>
                    <td class="version-road-price">25-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/united/us-125-euro-ii/">United US 125 Euro II</a></td>
                    <td class="version-price generic-green"> PKR 79,500</td>
                    <td class="version-road-price">25-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/united/us-100-jazba/">United Us 100 Jazba</a></td>
                    <td class="version-price generic-green"> PKR 59,000</td>
                    <td class="version-road-price">25-11-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/united/us-150-ultimate-thrill/">United US 150 Ultimate Thrill</a></td>
                    <td class="version-price generic-green"> PKR 142,000</td>
                    <td class="version-road-price">01-10-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="vespa">
              <h2>
                Vespa Bike Prices
                <div class="clear-link"><a href="/bikes/vespa/" class="more-link">Learn More About Vespa</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/vespa/primavera-150/">Vespa Primavera 150</a></td>
                    <td class="version-price generic-green"> PKR 299,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="yamaha">
              <h2 id="yamahabikeprice">
                Yamaha Bike Prices
                <div class="clear-link"><a href="/bikes/yamaha/" class="more-link">Learn More About Yamaha</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/yamaha/ybr-125/">Yamaha YBR 125</a></td>
                    <td class="version-price generic-green"> PKR 181,000</td>
                    <td class="version-road-price">27-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/yamaha/ybr-125g/">Yamaha YBR 125G</a></td>
                    <td class="version-price generic-green"> PKR 190,000</td>
                    <td class="version-road-price">04-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/yamaha/yb-125z/">Yamaha YB 125Z </a></td>
                    <td class="version-price generic-green"> PKR 163,000</td>
                    <td class="version-road-price">04-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/yamaha/yb-125z-dx/">Yamaha YB 125Z-DX</a></td>
                    <td class="version-price generic-green"> PKR 175,500</td>
                    <td class="version-road-price">07-01-2021</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/yamaha/yzf-r3/">Yamaha YZF-R3</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="zongshen">
              <h2>
                Zongshen Bike Prices
                <div class="clear-link"><a href="/bikes/zongshen/" class="more-link">Learn More About Zongshen</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/zongshen/rx1/">Zongshen RX1</a></td>
                    <td class="version-price generic-green"> PKR 385,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="zontes">
              <h2>
                Zontes Bike Prices
                <div class="clear-link"><a href="/bikes/zontes/" class="more-link">Learn More About Zontes</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/zontes/zt310-r/">Zontes ZT310-R</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/zontes/zt310-x/">Zontes ZT310-X</a></td>
                    <td class="version-price generic-green"> </td>
                    <td class="version-road-price">01-01-2021</td>
                  </tr>
                </tbody>
              </table>
            
</div>            <div id="zxmco">
              <h2>
                ZXMCO Bike Prices
                <div class="clear-link"><a href="/bikes/zxmco/" class="more-link">Learn More About ZXMCO</a></div>
              </h2>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th><strong>Model</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Last Updated On</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="version-name"><a href="/bikes/zxmco/kpr-200-cruise/">ZXMCO KPR 200 Cruise</a></td>
                    <td class="version-price generic-green"> PKR 245,000</td>
                    <td class="version-road-price">02-09-2019</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/zxmco/zx-100-shahsawar/">ZXMCO ZX 100 Shahsawar</a></td>
                    <td class="version-price generic-green"> PKR 55,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/zxmco/zx-70-city-rider/">ZXMCO ZX 70 City Rider</a></td>
                    <td class="version-price generic-green"> PKR 40,500</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/zxmco/zx-125-stallion/">ZXMCO ZX 125 Stallion</a></td>
                    <td class="version-price generic-green"> PKR 75,000</td>
                    <td class="version-road-price">30-06-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/zxmco/zx-70-thunder-plus/">ZXMCO ZX 70 Thunder Plus</a></td>
                    <td class="version-price generic-green"> PKR 47,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/zxmco/monster-zx-250-d/">ZXMCO Monster ZX 250-D</a></td>
                    <td class="version-price generic-green"> PKR 425,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/zxmco/zx-100-power-max/">ZXMCO ZX 100 Power Max</a></td>
                    <td class="version-price generic-green"> PKR 52,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                  <tr>
                    <td class="version-name"><a href="/bikes/zxmco/zx-70-city-rider-euro-ii/">ZXMCO ZX 70 City Rider Euro-II</a></td>
                    <td class="version-price generic-green"> PKR 44,000</td>
                    <td class="version-road-price">01-01-2020</td>
                  </tr>
                </tbody>
              </table>
            
</div>        </div>
      </div>
      <div class="col-md-2 sidebar-ad">
  <div id="div-gpt-Vertical_Bar_160x600">
  
    </div>
</div>
    </div>
  </div>
</section>

<section>
  <div class="container">
      <div class="gen_desc_large active " id="introduction" itemprop="description" style="height: 150px; overflow: hidden;">
        <p>While buying new or used bike, the most important thing is to find out which bike is within your budget. 
          2Wheels helps you by providing detailed information about bikes prices, reviews, and comparisons. Price is the 
          primary factor in consumer&#39;s buying decision. Reviews can be helpful in knowing about the right time to buy 
          or sell bikes in Pakistan. You can find reviews published by bikes owners of different makes on our site. 
          You can browse <a href="https://www.pakwheels.com/bikes/" title="Bikes on PakWheels"><strong>bikes</strong></a> prices 
          of local manufacturers including Honda, Suzuki, Yamaha, ZXMCO, United, Unique, Super Power, Metro, Ravi, BMW, Road 
          Prince, BML, Power, Pak Hero, etc. Moreover, you can also view prices and ads of bikes by body type &amp; categories 
          on PakWheels:&nbsp;<strong><a href="https://www.pakwheels.com/used-bikes/heavy-bikes/156586" title="Heavy Bikes for Sale in Pakistan">Heavy Bikes</a></strong>, <strong><a href="https://www.pakwheels.com/used-bikes/dirt-bikes/161468" title="Dirt Bikes for Sale in Pakistan">Dirt Bikes</a></strong>, <a href="https://pakwheels.com/used-bikes/"><strong>Motorcycles</strong></a>, <strong><a href="https://www.pakwheels.com/used-bikes/atv/161469" title="Quad Bikes for Sale in Pakistan">ATV</a></strong>, <strong><a href="https://www.pakwheels.com/used-bikes/scooter/156972" title="Scooter for Sale in Pakistan">Scooters</a></strong>, <strong><a href="https://www.pakwheels.com/used-bikes/trail-bikes/161467" title="Trail Bikes for Sale in Pakistan">Trail Bikes</a></strong>, <strong><a href="https://www.pakwheels.com/used-bikes/chopper/165823" title="Choppers for Sale in Pakistan">Cruisers</a></strong> &amp; <strong><a href="https://www.pakwheels.com/used-bikes/sport-bikes/161194" title="Sports Bikes for Sale in Pakistan">Sports Bikes</a></strong>.</p>

      </div>
      
      
  </div>
</section>

@endsection
