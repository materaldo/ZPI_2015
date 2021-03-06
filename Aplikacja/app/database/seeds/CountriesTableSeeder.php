<?php
/**
* Seeder CountriesTableSeeder
* 
* Seeds database with countries data
*/

/**
* Class CountriesTableSeeder
* 
* Class used to seed countries table
*/
class CountriesTableSeeder extends Seeder 
{
	/**
	 * Run the country seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        DB::table('countries')->delete();
		DB::unprepared("ALTER TABLE countries AUTO_INCREMENT = 1;");
		Country::create(['country'=>'']);
Country::create(['country'=>'United States']);
Country::create(['country'=>'Canada']);
Country::create(['country'=>'Afghanistan']);
Country::create(['country'=>'Albania']);
Country::create(['country'=>'Algeria']);
Country::create(['country'=>'American Samoa']);
Country::create(['country'=>'Andorra']);
Country::create(['country'=>'Angola']);
Country::create(['country'=>'Anguilla']);
Country::create(['country'=>'Antarctica']);
Country::create(['country'=>'Antigua and/or Barbuda']);
Country::create(['country'=>'Argentina']);
Country::create(['country'=>'Armenia']);
Country::create(['country'=>'Aruba']);
Country::create(['country'=>'Australia']);
Country::create(['country'=>'Austria']);
Country::create(['country'=>'Azerbaijan']);
Country::create(['country'=>'Bahamas']);
Country::create(['country'=>'Bahrain']);
Country::create(['country'=>'Bangladesh']);
Country::create(['country'=>'Barbados']);
Country::create(['country'=>'Belarus']);
Country::create(['country'=>'Belgium']);
Country::create(['country'=>'Belize']);
Country::create(['country'=>'Benin']);
Country::create(['country'=>'Bermuda']);
Country::create(['country'=>'Bhutan']);
Country::create(['country'=>'Bolivia']);
Country::create(['country'=>'Bosnia and Herzegovina']);
Country::create(['country'=>'Botswana']);
Country::create(['country'=>'Bouvet Island']);
Country::create(['country'=>'Brazil']);
Country::create(['country'=>'British lndian Ocean Territory']);
Country::create(['country'=>'Brunei Darussalam']);
Country::create(['country'=>'Bulgaria']);
Country::create(['country'=>'Burkina Faso']);
Country::create(['country'=>'Burundi']);
Country::create(['country'=>'Cambodia']);
Country::create(['country'=>'Cameroon']);
Country::create(['country'=>'Cape Verde']);
Country::create(['country'=>'Cayman Islands']);
Country::create(['country'=>'Central African Republic']);
Country::create(['country'=>'Chad']);
Country::create(['country'=>'Chile']);
Country::create(['country'=>'China']);
Country::create(['country'=>'Christmas Island']);
Country::create(['country'=>'Cocos (Keeling) Islands']);
Country::create(['country'=>'Colombia']);
Country::create(['country'=>'Comoros']);
Country::create(['country'=>'Congo']);
Country::create(['country'=>'Cook Islands']);
Country::create(['country'=>'Costa Rica']);
Country::create(['country'=>'Croatia (Hrvatska)']);
Country::create(['country'=>'Cuba']);
Country::create(['country'=>'Cyprus']);
Country::create(['country'=>'Czech Republic']);
Country::create(['country'=>'Denmark']);
Country::create(['country'=>'Djibouti']);
Country::create(['country'=>'Dominica']);
Country::create(['country'=>'Dominican Republic']);
Country::create(['country'=>'East Timor']);
Country::create(['country'=>'Ecuador']);
Country::create(['country'=>'Egypt']);
Country::create(['country'=>'El Salvador']);
Country::create(['country'=>'Equatorial Guinea']);
Country::create(['country'=>'Eritrea']);
Country::create(['country'=>'Estonia']);
Country::create(['country'=>'Ethiopia']);
Country::create(['country'=>'Falkland Islands (Malvinas)']);
Country::create(['country'=>'Faroe Islands']);
Country::create(['country'=>'Fiji']);
Country::create(['country'=>'Finland']);
Country::create(['country'=>'France']);
Country::create(['country'=>'France, Metropolitan']);
Country::create(['country'=>'French Guiana']);
Country::create(['country'=>'French Polynesia']);
Country::create(['country'=>'French Southern Territories']);
Country::create(['country'=>'Gabon']);
Country::create(['country'=>'Gambia']);
Country::create(['country'=>'Georgia']);
Country::create(['country'=>'Germany']);
Country::create(['country'=>'Ghana']);
Country::create(['country'=>'Gibraltar']);
Country::create(['country'=>'Greece']);
Country::create(['country'=>'Greenland']);
Country::create(['country'=>'Grenada']);
Country::create(['country'=>'Guadeloupe']);
Country::create(['country'=>'Guam']);
Country::create(['country'=>'Guatemala']);
Country::create(['country'=>'Guinea']);
Country::create(['country'=>'Guinea-Bissau']);
Country::create(['country'=>'Guyana']);
Country::create(['country'=>'Haiti']);
Country::create(['country'=>'Heard and Mc Donald Islands']);
Country::create(['country'=>'Honduras']);
Country::create(['country'=>'Hong Kong']);
Country::create(['country'=>'Hungary']);
Country::create(['country'=>'Iceland']);
Country::create(['country'=>'India']);
Country::create(['country'=>'Indonesia']);
Country::create(['country'=>'Iran (Islamic Republic of)']);
Country::create(['country'=>'Iraq']);
Country::create(['country'=>'Ireland']);
Country::create(['country'=>'Israel']);
Country::create(['country'=>'Italy']);
Country::create(['country'=>'Ivory Coast']);
Country::create(['country'=>'Jamaica']);
Country::create(['country'=>'Japan']);
Country::create(['country'=>'Jordan']);
Country::create(['country'=>'Kazakhstan']);
Country::create(['country'=>'Kenya']);
Country::create(['country'=>'Kiribati']);
Country::create(['country'=>'Korea, Democratic Peoples Republic of']);
Country::create(['country'=>'Korea, Republic of']);
Country::create(['country'=>'Kosovo']);
Country::create(['country'=>'Kuwait']);
Country::create(['country'=>'Kyrgyzstan']);
Country::create(['country'=>'Lao Peoples Democratic Republic']);
Country::create(['country'=>'Latvia']);
Country::create(['country'=>'Lebanon']);
Country::create(['country'=>'Lesotho']);
Country::create(['country'=>'Liberia']);
Country::create(['country'=>'Libyan Arab Jamahiriya']);
Country::create(['country'=>'Liechtenstein']);
Country::create(['country'=>'Lithuania']);
Country::create(['country'=>'Luxembourg']);
Country::create(['country'=>'Macau']);
Country::create(['country'=>'Macedonia']);
Country::create(['country'=>'Madagascar']);
Country::create(['country'=>'Malawi']);
Country::create(['country'=>'Malaysia']);
Country::create(['country'=>'Maldives']);
Country::create(['country'=>'Mali']);
Country::create(['country'=>'Malta']);
Country::create(['country'=>'Marshall Islands']);
Country::create(['country'=>'Martinique']);
Country::create(['country'=>'Mauritania']);
Country::create(['country'=>'Mauritius']);
Country::create(['country'=>'Mayotte']);
Country::create(['country'=>'Mexico']);
Country::create(['country'=>'Micronesia, Federated States of']);
Country::create(['country'=>'Moldova, Republic of']);
Country::create(['country'=>'Monaco']);
Country::create(['country'=>'Mongolia']);
Country::create(['country'=>'Montenegro']);
Country::create(['country'=>'Montserrat']);
Country::create(['country'=>'Morocco']);
Country::create(['country'=>'Mozambique']);
Country::create(['country'=>'Myanmar']);
Country::create(['country'=>'Namibia']);
Country::create(['country'=>'Nauru']);
Country::create(['country'=>'Nepal']);
Country::create(['country'=>'Netherlands']);
Country::create(['country'=>'Netherlands Antilles']);
Country::create(['country'=>'New Caledonia']);
Country::create(['country'=>'New Zealand']);
Country::create(['country'=>'Nicaragua']);
Country::create(['country'=>'Niger']);
Country::create(['country'=>'Nigeria']);
Country::create(['country'=>'Niue']);
Country::create(['country'=>'Norfork Island']);
Country::create(['country'=>'Northern Mariana Islands']);
Country::create(['country'=>'Norway']);
Country::create(['country'=>'Oman']);
Country::create(['country'=>'Pakistan']);
Country::create(['country'=>'Palau']);
Country::create(['country'=>'Panama']);
Country::create(['country'=>'Papua New Guinea']);
Country::create(['country'=>'Paraguay']);
Country::create(['country'=>'Peru']);
Country::create(['country'=>'Philippines']);
Country::create(['country'=>'Pitcairn']);
Country::create(['country'=>'Poland']);
Country::create(['country'=>'Portugal']);
Country::create(['country'=>'Puerto Rico']);
Country::create(['country'=>'Qatar']);
Country::create(['country'=>'Reunion']);
Country::create(['country'=>'Romania']);
Country::create(['country'=>'Russian Federation']);
Country::create(['country'=>'Rwanda']);
Country::create(['country'=>'Saint Kitts and Nevis']);
Country::create(['country'=>'Saint Lucia']);
Country::create(['country'=>'Saint Vincent and the Grenadines']);
Country::create(['country'=>'Samoa']);
Country::create(['country'=>'San Marino']);
Country::create(['country'=>'Sao Tome and Principe']);
Country::create(['country'=>'Saudi Arabia']);
Country::create(['country'=>'Senegal']);
Country::create(['country'=>'Serbia']);
Country::create(['country'=>'Seychelles']);
Country::create(['country'=>'Sierra Leone']);
Country::create(['country'=>'Singapore']);
Country::create(['country'=>'Slovakia']);
Country::create(['country'=>'Slovenia']);
Country::create(['country'=>'Solomon Islands']);
Country::create(['country'=>'Somalia']);
Country::create(['country'=>'South Africa']);
Country::create(['country'=>'South Georgia South Sandwich Islands']);
Country::create(['country'=>'Spain']);
Country::create(['country'=>'Sri Lanka']);
Country::create(['country'=>'St. Helena']);
Country::create(['country'=>'St. Pierre and Miquelon']);
Country::create(['country'=>'Sudan']);
Country::create(['country'=>'Suricountry']);
Country::create(['country'=>'Svalbarn and Jan Mayen Islands']);
Country::create(['country'=>'Swaziland']);
Country::create(['country'=>'Sweden']);
Country::create(['country'=>'Switzerland']);
Country::create(['country'=>'Syrian Arab Republic']);
Country::create(['country'=>'Taiwan']);
Country::create(['country'=>'Tajikistan']);
Country::create(['country'=>'Tanzania, United Republic of']);
Country::create(['country'=>'Thailand']);
Country::create(['country'=>'Togo']);
Country::create(['country'=>'Tokelau']);
Country::create(['country'=>'Tonga']);
Country::create(['country'=>'Trinidad and Tobago']);
Country::create(['country'=>'Tunisia']);
Country::create(['country'=>'Turkey']);
Country::create(['country'=>'Turkmenistan']);
Country::create(['country'=>'Turks and Caicos Islands']);
Country::create(['country'=>'Tuvalu']);
Country::create(['country'=>'Uganda']);
Country::create(['country'=>'Ukraine']);
Country::create(['country'=>'United Arab Emirates']);
Country::create(['country'=>'United Kingdom']);
Country::create(['country'=>'United States minor outlying islands']);
Country::create(['country'=>'Uruguay']);
Country::create(['country'=>'Uzbekistan']);
Country::create(['country'=>'Vanuatu']);
Country::create(['country'=>'Vatican City State']);
Country::create(['country'=>'Venezuela']);
Country::create(['country'=>'Vietnam']);
Country::create(['country'=>'Virgin Islands (British)']);
Country::create(['country'=>'Virgin Islands (U.S.)']);
Country::create(['country'=>'Wallis and Futuna Islands']);
Country::create(['country'=>'Western Sahara']);
Country::create(['country'=>'Yemen']);
Country::create(['country'=>'Yugoslavia']);
Country::create(['country'=>'Zaire']);
Country::create(['country'=>'Zambia']);
Country::create(['country'=>'Zimbabwe']);

    }

}