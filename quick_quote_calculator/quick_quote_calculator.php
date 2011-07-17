<?php
/*
Plugin Name: quick_quote_calculator
Author: Clare Vivarelli
Description: A calculator which gets a travel insuranvce quote from World Nomads
Version: 1.0

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

	//Loads the javascript and css files
	function init_scripts() {
	  wp_enqueue_script( 'jquery' );
	  wp_enqueue_script( 'qq', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', array( 'jquery' ) );
	  wp_register_style( 'base', 'http://www.worldnomads.com/turnstile/qp/common/styles/base.min.css' );
	  wp_enqueue_style('base');
	}    
	 
	add_action('init', 'init_scripts');
		
	//Loads the quick quote calculator
	function display_qq_calculator() {
?>
 
   <style type="text/css" media="screen">    
    #wn_quote_panel #wn_qq_146x429 { padding:10px; width:175px; height:429px; background:#fff; border:1px solid #d1d1d1;  -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }
	#wn_quote_panel #wn_qq_146x429,
	#wn_quote_panel #wn_qq_146x429 p,
	#wn_quote_panel #wn_qq_146x429 fieldset { font-size: 11px; color: #555; }
    #wn_quote_panel #wn_qq_146x429 #policy_type { position:relative; }
    #wn_quote_panel #wn_qq_146x429 #policy_type .submit { float: right; margin-top: 10px;}
    #wn_quote_panel #wn_qq_146x429 .wn_footer{clear:both; margin-top:10px; border-top:1px solid #eee; padding-top:10px; position:relative; }
    #wn_quote_panel #wn_qq_146x429 #wn_logo { position:relative; float:right; }
  </style>
  
    <div id="wn_quote_panel">
         <div id="wn_qq_146x429">
            <h2>
              Travel Insurance
              <br>
        <span>Simple &amp; Flexible.</span>
            </h2>

            <form action="http://www.worldnomads.com/afturnstile.aspx" method="get" target="_blank">
              <fieldset id="hidden-fields">
                <input type="hidden" name="affiliate" id="qp3_affiliate" value="<INSERT CODE HERE>">
                <input type="hidden" name="utm_source" id="qp3_utm_source" value="<INSERT CODE HERE>">
                <input type="hidden" name="subid" id="qp3_subid" value="">
                <input type="hidden" name="utm_medium" id="qp3_utm_medium" value="Affiliate">
                <input type="hidden" name="utm_content" id="qp3_utm_content" value="Quick-Quote">
                <input type="hidden" name="utm_term" id="qp3_utm_term" value="QQ-192x444-eng">	
                <input type="hidden" name="utm_campaign" id="qp3_utm_campaign" value="QQ-Eng">
              </fieldset>
      
        <p>
         <label for="country-residence">I am a permanent resident of… </label>
         <select name="country" id="country-residence">
            <option value=""> Choose a country</option> <option value="AND"> Andorra </option> <option value="ANT"> Antarctica </option> <option value="ARG"> Argentina </option> <option value="ARM"> Armenia </option> <option value="ABW"> Aruba </option> <option value="AUS"> Australia </option> <option value="AUT"> Austria </option> <option value="AZE"> Azerbaijan </option> <option value="BHS"> Bahamas </option> <option value="BHR"> Bahrain </option> <option value="BGD"> Bangladesh </option> <option value="BRB"> Barbados </option> <option value="BLR"> Belarus </option> <option value="BEL"> Belgium </option> <option value="BLZ"> Belize </option> <option value="BMU"> Bermuda </option> <option value="BTN"> Bhutan </option> <option value="BOL"> Bolivia </option> <option value="BIH"> Bosnia </option> <option value="BWA"> Botswana </option> <option value="BRA"> Brazil </option> <option value="BRN"> Brunei Darussalam </option> <option value="BGR"> Bulgaria </option> <option value="KHM"> Cambodia </option> <option value="CMR"> Cameroon </option> <option value="CAN"> Canada </option> <option value="CYM"> Cayman Islands </option> <option value="CHL"> Chile </option> <option value="CHN"> China </option> <option value="COL"> Colombia </option> <option value="CRI"> Costa Rica </option> <option value="HRV"> Croatia </option> <option value="CUB"> Cuba </option> <option value="CYP"> Cyprus </option> <option value="CZE"> Czech Republic </option> <option value="DNK"> Denmark </option> <option value="DOM"> Domninican Republic </option> <option value="ECU"> Ecuador </option> <option value="EGY"> Egypt </option> <option value="SLV"> El Salvador </option> <option value="EST"> Estonia </option> <option value="FLK"> Falkland Islands </option> <option value="FJI"> Fiji </option> <option value="FIN"> Finland </option> <option value="FRA"> France </option> <option value="PYF"> French Polynesia </option> <option value="GEO"> Georgia </option> <option value="DEU"> Germany </option> <option value="GIB"> Gibraltar </option> <option value="GRC"> Greece </option> <option value="GRL"> Greenland </option> <option value="GLP"> Guadeloupe </option> <option value="GUM"> Guam </option> <option value="GTM"> Guatemala </option> <option value="HND"> Honduras </option> <option value="HKG"> Hong Kong </option> <option value="HUN"> Hungary </option> <option value="ISL"> Iceland </option> <option value="IND"> India </option>
<option value="IDN"> Indonesia </option> <option value="IRN"> Iran </option> <option value="IRL"> Ireland </option> <option value="ISR"> Israel </option> <option value="ITA"> Italy </option> <option value="JAM"> Jamaica </option> <option value="JPN"> Japan </option> <option value="JOR"> Jordan </option> <option value="KAZ"> Kazakhstan </option> <option value="KEN"> Kenya </option> <option value="KWT"> Kuwait </option> <option value="KGZ"> Kyrgyzstan </option> <option value="LAO"> Laos </option> <option value="LVA"> Latvia </option> <option value="LIE"> Liechtenstein </option> <option value="LTU"> Lithuania </option> <option value="LUX"> Luxembourg </option> <option value="MAC"> Macau </option> <option value="MKD"> Macedonia </option> <option value="MDG"> Madagascar </option> <option value="MYS"> Malaysia </option> <option value="MDV"> Maldives </option> <option value="MLT"> Malta </option> <option value="MUS"> Mauritius </option> <option value="MEX"> Mexico </option> <option value="MDA"> Moldova </option> <option value="MCO"> Monaco </option> <option value="MNG"> Mongolia </option> <option value="MAR"> Morrocco </option> <option value="NPL"> Nepal </option> <option value="NLD"> Netherlands </option> <option value="NAT"> Netherlands Antilles </option> <option value="NCL"> New Caledonia </option> <option value="NZL"> New Zealand </option> <option value="NIC"> Nicaragua </option> <option value="NOR"> Norway </option> <option value="OMN"> Oman </option> <option value="PAK"> Pakistan </option> <option value="PLW"> Palau </option> <option value="PAN"> Panama </option> <option value="PNG"> Papua New Guinea </option> <option value="PRY"> Paraguay </option> <option value="PER"> Peru </option> <option value="PHL"> Philippines </option> <option value="POL"> Poland </option> <option value="PRT"> Portugal </option> <option value="PRI"> Puerto Rico </option> <option value="QAT"> Qatar </option> <option value="ROU"> Romania </option> <option value="RUS"> Russia </option> <option value="WSM"> Samoa </option> <option value="SMR"> San Marino </option> <option value="SAU"> Saudi Arabia </option> <option value="SGP"> Singapore </option> <option value="SVK"> Slovakia </option> <option value="SVN"> Slovenia </option> <option value="SLB"> Solomon Islands </option> <option value="ZAF"> South Africa </option> <option value="KOR"> South Korea </option> <option value="ESP"> Spain </option> <option value="LKA"> Sri Lanka </option> <option value="SWE"> Sweden </option> <option value="CHE"> Switzerland </option> <option value="TWN"> Taiwan </option> <option value="TJK"> Tajikistan </option> <option value="THA"> Thailand </option> <option value="TON"> Tonga </option> <option value="TTO"> Trinidad and Tobago </option> <option value="TUN"> Tunisia </option> <option value="TUR"> Turkey </option> <option value="TKM"> Turkmenistan </option> <option value="UKR"> Ukraine </option> <option value="ARE"> United Arab Emirates </option> <option value="GBR"> United Kingdom </option> <option value="URY"> Uruguay </option> <option value="USA"> USA </option> <option value="UZB"> Uzbekistan </option> <option value="VUT"> Vanuatu </option> <option value="VEN"> Venezuela </option> <option value="VNM"> Vietnam </option> <option value="VGB"> Virgin Islands (British) </option>
        </select>
       </p>
       <p id="canadian-provinces" style="display: none; ">
        <label for="qp-province">Province</label>
        <select id="qp-province" name="province" disabled="">
          <option value=""> Select your province </option> <option value="AB"> Alberta </option> <option value="BC"> British Columbia </option> <option value="MB"> Manitoba </option> <option value="NB"> New Brunswick </option> <option value="NL"> Newfoundland and Labrador </option> <option value="NT"> Northwest Territories </option> <option value="NS"> Nova Scotia </option> <option value="NU"> Nunavut </option> <option value="ON"> Ontario </option> <option value="PE"> Prince Edward Island </option> <option value="QC"> Quebec </option> <option value="SK"> Saskatchewan </option> <option value="YT"> Yukon </option>
        </select>
       </p>
       <p id="cover-region" style="display: none; ">
         <label for="qp-coverage">Cover region</label>
         <select name="coverage" id="qp-coverage" disabled="">
           <option>Region</option>
         </select>
       </p>
       <p>
         <label for="qp3_startmonth">When would you like your policy to start?</label>
         <select name="startmonth" id="qp3_startmonth">
            <option value="1"> Jan </option> <option value="2"> Feb </option> <option value="3"> Mar </option> <option value="4"> Apr </option> <option value="5"> May </option> <option value="6"> Jun </option> <option value="7"> Jul </option> <option value="8"> Aug </option> <option value="9"> Sept </option> <option value="10"> Oct </option> <option value="11"> Nov </option> <option value="12"> Dec </option>
         </select>
         <select name="startday" id="qp3_startday">
            <option value="1"> 1 </option> <option value="2"> 2 </option> <option value="3"> 3 </option> <option value="4"> 4 </option> <option value="5"> 5 </option> <option value="6"> 6 </option> <option value="7"> 7 </option> <option value="8"> 8 </option> <option value="9"> 9 </option> <option value="10"> 10 </option> <option value="11"> 11 </option> <option value="12"> 12 </option> <option value="13"> 13 </option> <option value="14"> 14 </option> <option value="15"> 15 </option> <option value="16"> 16 </option> <option value="17"> 17 </option> <option value="18"> 18 </option> <option value="19"> 19 </option> <option value="20"> 20 </option> <option value="21"> 21 </option> <option value="22"> 22 </option> <option value="23"> 23 </option> <option value="24"> 24 </option> <option value="25"> 25 </option> <option value="26"> 26 </option> <option value="27"> 27 </option> <option value="28"> 28 </option> <option value="29"> 29 </option> <option value="30"> 30 </option> <option value="31"> 31 </option>
         </select>
         <select name="startyear" id="qp3_startyear"><option value="2011">2011</option><option value="2012">2012</option></select>
       </p>
       <p>
         <label for="qp3_duration">How long would you like your policy for?</label> 
         <select name="duration" id="qp3_duration"><option value="2d">2 days</option><option value="3d">3 days</option><option value="5d">5 days</option><option value="1w">1 week</option><option value="2w">2 weeks</option><option value="3w">3 weeks</option><option value="4w">4 weeks</option><option value="5w">5 weeks</option><option value="6w">6 weeks</option><option value="7w">7 weeks</option><option value="2m">2 months</option><option value="3m">3 months</option><option value="4m">4 months</option><option value="5m">5 months</option><option value="6m">6 months</option><option value="7m">7 months</option><option value="8m">8 months</option><option value="9m">9 months</option><option value="10m">10 months</option><option value="11m">11 months</option><option value="12m">12 months</option></select>
		<p class="fontSm">You can always extend your policy while you are away.</p>
        <fieldset id="policy_type">
          <h4>What type of policy would you like?</h4>
              <div class="checkbox">
            <input id="qp3_typeofpolicy_single" type="radio" checked="checked" value="single" name="typeofpolicy"><label for="qp3_typeofpolicy_single">Single</label>
              </div>
              <div class="checkbox">
                <input id="qp3_typeofpolicy_family" type="radio" value="family" name="typeofpolicy"><label for="qp3_typeofpolicy_family">Family</label>
              </div>        
                 <div class="submit button">
            <button type="submit" class="call-to-action"><span>Get a Quote »</span></button>
                 </div>
        </fieldset>
        <div class="wn_footer clearfix">
				<img src="http://www.worldnomads.com/turnstile/qp/common/images/wn_logo_125_tagline.png" width="130" height="31" alt="World Nomads - Keep travelling safely" id="wn_logo">
	          </div>
            </form></div>

<?php
    }
    
	//Places the widget in the sidebar
    wp_register_sidebar_widget(
        'qq-calculator-1',        // nique widget id
        'Quote Calculator',       // widget name
        'display_qq_calculator',  // callback function
        array(                    // options
            'description' => 'A calculator which gets a travel insurance quote from World Nomads'
        )
    );
?>  
