<style> .select2-container--default .select2-selection--single,.visa_btn_wrp button{padding-left: 6px; padding-right: 6px;border-radius: 2px;}
                .country-select {
                    width: 35%;
                }
                .visa_btn_wrp {
                    width: 25%;
                }
                .utility-wrp {
                    display: flex;
                    justify-content: space-between;
                }
                .visa_btn_wrp button{width: 100%;}
                @media  screen and (max-width: 520px) {
                    .country-select,.visa_btn_wrp {
                        width: 100%;
                    }
                    .utility-wrp{flex-direction: column;}
} </style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://www.vaidam.com/assets/visa/css/style.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">

<section class="py-5"> <div class="container"> <div class="row"> <div class="utility-head col-xs-12 text-center"> <h1 class="u_title">Need Visa for your Medical trip?</h1> <p>Please select the country you want to travel from and your destination country</p> </div> </div> </div> 
</section>

<section class="py-5 bg-light">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-12 mx-auto">
            <div class="utility-wrp">
               <div class="country-select from_country">
                  <label>From</label> 
                    <select name="country" class="country_selectbox select2-hidden-accessible" id="f_country" tabindex="-1" aria-hidden="true">
                        
                    </select>
               </div>
               <div class="country-select destination_country col-md-5">
                  <label>To</label> 
                  <select name="country" class="country_selectbox select2-hidden-accessible" id="d_country" tabindex="-1" aria-hidden="true">
                    
                  </select>
               </div>
               <div class="col-md-2 visa_btn_wrp"> <label>&nbsp;</label> <button type="button" class="search_btn" onclick="getCurrentUrl()">See Details</button> </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" type="text/javascript"></script>
<script type="text/javascript"> 
var base_url = "<?php echo base_url(); ?>";
(function ($) {
                                $(function () {
                                    var isoCountries = [{"id":"AF","text":"Afghanistan"},{"id":"AX","text":"Aland Islands"},{"id":"AL","text":"Albania"},{"id":"DZ","text":"Algeria"},{"id":"AS","text":"American Samoa"},{"id":"AD","text":"Andorra"},{"id":"AO","text":"Angola"},{"id":"AI","text":"Anguilla"},{"id":"AQ","text":"Antarctica"},{"id":"AG","text":"Antigua and Barbuda"},{"id":"AR","text":"Argentina"},{"id":"AM","text":"Armenia"},{"id":"AW","text":"Aruba"},{"id":"AU","text":"Australia"},{"id":"AT","text":"Austria"},{"id":"AZ","text":"Azerbaijan"},{"id":"BS","text":"Bahamas"},{"id":"BH","text":"Bahrain"},{"id":"BD","text":"Bangladesh"},{"id":"BB","text":"Barbados"},{"id":"BY","text":"Belarus"},{"id":"BE","text":"Belgium"},{"id":"BZ","text":"Belize"},{"id":"BJ","text":"Benin"},{"id":"BM","text":"Bermuda"},{"id":"BT","text":"Bhutan"},{"id":"BO","text":"Bolivia"},{"id":"BA","text":"Bosnia and Herzegovina"},{"id":"BW","text":"Botswana"},{"id":"BV","text":"Bouvet Island"},{"id":"BR","text":"Brazil"},{"id":"IO","text":"British Indian Ocean Territory"},{"id":"VG","text":"British Virgin Islands"},{"id":"BN","text":"Brunei"},{"id":"BG","text":"Bulgaria"},{"id":"BF","text":"Burkina Faso"},{"id":"BI","text":"Burundi"},{"id":"KH","text":"Cambodia"},{"id":"CM","text":"Cameroon"},{"id":"CA","text":"Canada"},{"id":"CV","text":"Cape Verde"},{"id":"BQ","text":"Caribbean Netherlands"},{"id":"KY","text":"Cayman Islands"},{"id":"CF","text":"Central African Republic"},{"id":"TD","text":"Chad"},{"id":"CL","text":"Chile"},{"id":"CN","text":"China"},{"id":"CX","text":"Christmas Island"},{"id":"CC","text":"Cocos (Keeling) Islands"},{"id":"CO","text":"Colombia"},{"id":"KM","text":"Comoros"},{"id":"CG","text":"Congo (Brazzaville)"},{"id":"CD","text":"Congo (Kinshasa)"},{"id":"CK","text":"Cook Islands"},{"id":"CR","text":"Costa Rica"},{"id":"HR","text":"Croatia"},{"id":"CU","text":"Cuba"},{"id":"CW","text":"Cura\u00e7ao"},{"id":"CY","text":"Cyprus"},{"id":"CZ","text":"Czech Republic"},{"id":"DK","text":"Denmark"},{"id":"DJ","text":"Djibouti"},{"id":"DM","text":"Dominica"},{"id":"DO","text":"Dominican Republic"},{"id":"EC","text":"Ecuador"},{"id":"EG","text":"Egypt"},{"id":"SV","text":"El Salvador"},{"id":"GQ","text":"Equatorial Guinea"},{"id":"ER","text":"Eritrea"},{"id":"EE","text":"Estonia"},{"id":"ET","text":"Ethiopia"},{"id":"FK","text":"Falkland Islands"},{"id":"FO","text":"Faroe Islands"},{"id":"FJ","text":"Fiji"},{"id":"FI","text":"Finland"},{"id":"FR","text":"France"},{"id":"GF","text":"French Guiana"},{"id":"PF","text":"French Polynesia"},{"id":"TF","text":"French Southern Territories"},{"id":"GA","text":"Gabon"},{"id":"GM","text":"Gambia"},{"id":"GE","text":"Georgia"},{"id":"DE","text":"Germany"},{"id":"GH","text":"Ghana"},{"id":"GI","text":"Gibraltar"},{"id":"GR","text":"Greece"},{"id":"GL","text":"Greenland"},{"id":"GD","text":"Grenada"},{"id":"GP","text":"Guadeloupe"},{"id":"GU","text":"Guam"},{"id":"GT","text":"Guatemala"},{"id":"GG","text":"Guernsey"},{"id":"GN","text":"Guinea"},{"id":"GW","text":"Guinea-Bissau"},{"id":"GY","text":"Guyana"},{"id":"HT","text":"Haiti"},{"id":"HM","text":"Heard Island and McDonald Islands"},{"id":"HN","text":"Honduras"},{"id":"HK","text":"Hong Kong S.A.R., China"},{"id":"HU","text":"Hungary"},{"id":"IS","text":"Iceland"},{"id":"IN","text":"India"},{"id":"ID","text":"Indonesia"},{"id":"IR","text":"Iran"},{"id":"IQ","text":"Iraq"},{"id":"IE","text":"Ireland"},{"id":"IM","text":"Isle of Man"},{"id":"IL","text":"Israel"},{"id":"IT","text":"Italy"},{"id":"CI","text":"Ivory Coast"},{"id":"JM","text":"Jamaica"},{"id":"JP","text":"Japan"},{"id":"JE","text":"Jersey"},{"id":"JO","text":"Jordan"},{"id":"KZ","text":"Kazakhstan"},{"id":"KE","text":"Kenya"},{"id":"KI","text":"Kiribati"},{"id":"KW","text":"Kuwait"},{"id":"KG","text":"Kyrgyzstan"},{"id":"LA","text":"Laos"},{"id":"LV","text":"Latvia"},{"id":"LB","text":"Lebanon"},{"id":"LS","text":"Lesotho"},{"id":"LR","text":"Liberia"},{"id":"LY","text":"Libya"},{"id":"LI","text":"Liechtenstein"},{"id":"LT","text":"Lithuania"},{"id":"LU","text":"Luxembourg"},{"id":"MO","text":"Macao S.A.R., China"},{"id":"MK","text":"Macedonia"},{"id":"MG","text":"Madagascar"},{"id":"MW","text":"Malawi"},{"id":"MY","text":"Malaysia"},{"id":"MV","text":"Maldives"},{"id":"ML","text":"Mali"},{"id":"MT","text":"Malta"},{"id":"MH","text":"Marshall Islands"},{"id":"MQ","text":"Martinique"},{"id":"MR","text":"Mauritania"},{"id":"MU","text":"Mauritius"},{"id":"YT","text":"Mayotte"},{"id":"MX","text":"Mexico"},{"id":"FM","text":"Micronesia"},{"id":"MD","text":"Moldova"},{"id":"MC","text":"Monaco"},{"id":"MN","text":"Mongolia"},{"id":"ME","text":"Montenegro"},{"id":"MS","text":"Montserrat"},{"id":"MA","text":"Morocco"},{"id":"MZ","text":"Mozambique"},{"id":"MM","text":"Myanmar"},{"id":"NA","text":"Namibia"},{"id":"NR","text":"Nauru"},{"id":"NP","text":"Nepal"},{"id":"NL","text":"Netherlands"},{"id":"AN","text":"Netherlands Antilles"},{"id":"NC","text":"New Caledonia"},{"id":"NZ","text":"New Zealand"},{"id":"NI","text":"Nicaragua"},{"id":"NE","text":"Niger"},{"id":"NG","text":"Nigeria"},{"id":"NU","text":"Niue"},{"id":"NF","text":"Norfolk Island"},{"id":"MP","text":"Northern Mariana Islands"},{"id":"KP","text":"North Korea"},{"id":"NO","text":"Norway"},{"id":"OM","text":"Oman"},{"id":"PK","text":"Pakistan"},{"id":"PW","text":"Palau"},{"id":"PS","text":"Palestinian Territory"},{"id":"PA","text":"Panama"},{"id":"PG","text":"Papua New Guinea"},{"id":"PY","text":"Paraguay"},{"id":"PE","text":"Peru"},{"id":"PH","text":"Philippines"},{"id":"PN","text":"Pitcairn"},{"id":"PL","text":"Poland"},{"id":"PT","text":"Portugal"},{"id":"PR","text":"Puerto Rico"},{"id":"QA","text":"Qatar"},{"id":"RE","text":"Reunion"},{"id":"RO","text":"Romania"},{"id":"RU","text":"Russia"},{"id":"RW","text":"Rwanda"},{"id":"BL","text":"Saint Barth\u00e9lemy"},{"id":"SH","text":"Saint Helena"},{"id":"KN","text":"Saint Kitts and Nevis"},{"id":"LC","text":"Saint Lucia"},{"id":"MF","text":"Saint Martin (French part)"},{"id":"PM","text":"Saint Pierre and Miquelon"},{"id":"VC","text":"Saint Vincent and the Grenadines"},{"id":"WS","text":"Samoa"},{"id":"SM","text":"San Marino"},{"id":"ST","text":"Sao Tome and Principe"},{"id":"SA","text":"Saudi Arabia"},{"id":"SN","text":"Senegal"},{"id":"RS","text":"Serbia"},{"id":"SC","text":"Seychelles"},{"id":"SL","text":"Sierra Leone"},{"id":"SG","text":"Singapore"},{"id":"SX","text":"Sint Maarten"},{"id":"SK","text":"Slovakia"},{"id":"SI","text":"Slovenia"},{"id":"SB","text":"Solomon Islands"},{"id":"SO","text":"Somalia"},{"id":"ZA","text":"South Africa"},{"id":"GS","text":"South Georgia and the South Sandwich Islands"},{"id":"KR","text":"South Korea"},{"id":"SS","text":"South Sudan"},{"id":"ES","text":"Spain"},{"id":"LK","text":"Sri Lanka"},{"id":"SD","text":"Sudan"},{"id":"SR","text":"Suriname"},{"id":"SJ","text":"Svalbard and Jan Mayen"},{"id":"SZ","text":"Swaziland"},{"id":"SE","text":"Sweden"},{"id":"CH","text":"Switzerland"},{"id":"SY","text":"Syria"},{"id":"TW","text":"Taiwan"},{"id":"TJ","text":"Tajikistan"},{"id":"TZ","text":"Tanzania"},{"id":"TH","text":"Thailand"},{"id":"TL","text":"Timor-Leste"},{"id":"TG","text":"Togo"},{"id":"TK","text":"Tokelau"},{"id":"TO","text":"Tonga"},{"id":"TT","text":"Trinidad and Tobago"},{"id":"TN","text":"Tunisia"},{"id":"TR","text":"Turkey"},{"id":"TM","text":"Turkmenistan"},{"id":"TC","text":"Turks and Caicos Islands"},{"id":"TV","text":"Tuvalu"},{"id":"VI","text":"U.S. Virgin Islands"},{"id":"UG","text":"Uganda"},{"id":"UA","text":"Ukraine"},{"id":"AE","text":"United Arab Emirates"},{"id":"GB","text":"United Kingdom"},{"id":"US","text":"United States"},{"id":"UM","text":"United States Minor Outlying Islands"},{"id":"UY","text":"Uruguay"},{"id":"UZ","text":"Uzbekistan"},{"id":"VU","text":"Vanuatu"},{"id":"VA","text":"Vatican"},{"id":"VE","text":"Venezuela"},{"id":"VN","text":"Vietnam"},{"id":"WF","text":"Wallis and Futuna"},{"id":"EH","text":"Western Sahara"},{"id":"YE","text":"Yemen"},{"id":"ZM","text":"Zambia"},{"id":"ZW","text":"Zimbabwe"},{"id":"XK","text":"Kosovo"}];
                                    var DisoCountries = [{"id":"IN","text":"India"},{"id":"TH","text":"Thailand"},{"id":"TR","text":"Turkey"},{"id":"AE","text":"United Arab Emirates"}];

                                    function formatCountry(country) {
                                        if (!country.id) { return country.text; }
                                        var $country = $(
                                            '<span class="flag-icon flag-icon-' + country.id.toLowerCase() + ' flag-icon-squared"></span>' +
                                            '<span class="flag-text">' + country.text + "</span>"
                                        );
                                        return $country;
                                    };

                                    function formatDCountry(Dcountry) {
                                        if (!Dcountry.id) { return Dcountry.text; }
                                        var $Dcountry = $(
                                            '<span class="flag-icon flag-icon-' + Dcountry.id.toLowerCase() + ' flag-icon-squared"></span>' +
                                            '<span class="flag-text">' + Dcountry.text + "</span>"
                                        );
                                        return $Dcountry;
                                    };

                                    $("#f_country").select2({
                                        placeholder: "From",
                                        templateResult: formatCountry,
                                        data: isoCountries,
                                    });
                                   
                                    
                                    $("#d_country").select2({
                                        placeholder: "To",
                                        templateResult: formatDCountry,
                                        data: DisoCountries
                                    });
                                    //Set Default Value for Destination
                                    $('#d_country').val('TR');
                                    $('#d_country').trigger('change.select2');
                                    $('#select2-d_country-container').attr('class', '').addClass('select2-selection__rendered flag-bg flag-icon-tr')


                                    $('.country_selectbox').on('change', function () {
                                        let id = $(this).attr('id');
                                        let value = $(this).val();
                                        console.log(id, value);
                                        $('#select2-' + id + '-container').attr('class', '').addClass('select2-selection__rendered flag-bg flag-icon-' + value.toLowerCase())
                                    })
                                });
                            })(jQuery);


   function getCurrentUrl(){
    var country = $('#f_country option:selected').text()
    var sourceCountry=country.replace(/ /g,'-');
    var dcountry = $('#d_country option:selected').text()
    var destinationCountry=dcountry.replace(/ /g,'-');
    //   alert(space);
    
   var url = sourceCountry.toString().toLowerCase()+'-'+destinationCountry.toString().toLowerCase();
  //  alert(url);
//    alert(base_url);
   location.replace(base_url+'/travel-visa/'+url);
  
  
   } </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/javascript"></script>

<script src="https://www.vaidam.com/assets/js/visalocation.js" type="text/javascript"></script>

<section class="py-5">
    <div class="container">
        <div class="row aboutusContainer section-padding">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <span class="fs-3 fw-bolder text-center d-block">About Medassure</span> 
                    <p class="fs-5 text-center">Patients from 85+ countries have trusted Medassure</p>
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <div class="text-left pad-30">
                                <p class="theam-color fs-5">Why Medassure</p>
                                <p class="aboutusTextTitle">NABH Certified Healthcare Discovery Platform</p>
                                <p class="d-flex gap-3 align-items-center"> 
                                    <img alt="NABH Certified Healthcare Discovery Platform" title="NABH Certified Healthcare Discovery Platform" class="imgAboutVaidam pull-left" loading="lazy" src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/an_tb/nabh.png" width="60" height="60"> 
                                    <span>Medassure is NABH certified healthcare discovery platform that will connect you to top-notch medical experts, hospitals, wellness options, and trusted travel partners to help identify and make the right healthcare choices.</span> 
                                </p>
                                <hr class="line-g hidden-md hidden-lg hidden-xl">
                                <p class="aboutusTextTitle">Researched &amp; Personalized Treatment Plan - Under One Roof</p>
                                <p class="d-flex gap-3 align-items-center"> 
                                    <img alt="Researched and Personalized Treatment Plan - Under One Roof" title="Researched and Personalized Treatment Plan - Under One Roof" class="imgAboutVaidam img-rounded pull-left" loading="lazy" src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/aboutVaidam_2.png" width="60" height="60"> 
                                    <span>You can search for the best hospitals in India to treat cancer and ailments of the heart, bones or kidney, read about them, view photographs of the facilities at the hospitals and the places at which the hospitals are located, and check the cost of treatment.</span> 
                                </p>
                                <hr class="line-g hidden-md hidden-lg hidden-xl">
                                <p class="aboutusTextTitle">Quality Treatment Within Your Budget</p>
                                <p class="d-flex gap-3 align-items-center"> 
                                    <img alt="Quality Treatment Within Your Budget" title="Quality Treatment Within Your Budget" class="imgAboutVaidam img-rounded pull-left" loading="lazy" src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/aboutVaidam_3.png" width="60" height="60"> 
                                    <span>As soon as you post an enquiry, the patient relation team will collect details from you, share them with the doctors and hospitals on Vaidam's panel, and get a personalized treatment plan. We research to get quality treatment within your budget.</span> 
                                </p>
                                <hr class="line-g hidden-md hidden-lg hidden-xl">
                                <p class="aboutusTextTitle">Treatment to Travel</p>
                                <p class="d-flex gap-3 align-items-center"> 
                                    <img alt="Treatment to Travel" title="Treatment to Travel" class="imgAboutVaidam img-rounded pull-left" loading="lazy" src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/aboutVaidam_4.png" width="60" height="60"> 
                                    <span>Medassure concierge assists patients, to get medical Visa to travel to India, the best airline fares and arrangements for your stay. Our concierge also helps you with daily travel, language, and food concerns. Medassure does everything to be your perfect host. All of Vaidam’s services are free of cost to patients.</span> 
                                </p>
                                <hr class="line-g hidden-md hidden-lg hidden-xl">
                                <p class="aboutusTextTitle">International Reach</p>
                                <p class="d-flex gap-3 align-items-center"> 
                                    <img alt="International Reach" title="International Reach" class="imgAboutVaidam img-rounded pull-left" loading="lazy" src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/aboutVaidam_5.png" width="60" height="60"> 
                                    <span>I you are looking for medical care in India (New Delhi, Mumbai, Chennai, Hyderabad or Ahmedabad) or in Turkey (Istanbul,Ankara or Antalya), Vaidam Health has a network in each of those cities.</span> 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-4 col-sm-6">
                            <div class="text-left border-lxs-1s">
                                <a title="Medassure News" class="theam-color fs-5" href="https://www.vaidam.com/knowledge-center/life-at-vaidam">Medassure News</a> 
                                <p class="spacer15">&nbsp;</p>
                                <div class="row">
                                    <div class="col-4"> 
                                        <a title="Medassure Health gets the prestigious NABH accreditation" href="https://www.vaidam.com/knowledge-center/vaidam-become-india%E2%80%99s-first-online-health-facilitator-accredited-nabh"> 
                                            <img alt="Medassure Health gets the prestigious NABH accreditation" title="Medassure Health gets the prestigious NABH accreditation" class="imgNewsThumb" loading="lazy" src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/an_tb/nabh.png" width="80" height="80"> 
                                        </a> 
                                    </div>
                                    <div class="col-8">
                                        <p class="newsrowHeading">Medassure Health gets the prestigious NABH accreditation</p>
                                        <p> <a title="Medassure Health gets the prestigious NABH accreditation" class="linkSmall" href="https://www.vaidam.com/knowledge-center/vaidam-become-india%E2%80%99s-first-online-health-facilitator-accredited-nabh">Show more</a> </p>
                                    </div>
                                </div>
                                <hr class="line-g">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>