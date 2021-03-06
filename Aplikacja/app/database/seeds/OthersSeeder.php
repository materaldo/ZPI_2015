<?php
/**
* Seeder OthersSeeder
* 
* Seeds database with test data
*/

/**
* Class OthersSeeder
* 
* Class used to seed database with test data about users
*/
class OthersSeeder extends Seeder 
{
	/**
	 * Run the data test seeds.
	 *
	 * @return void
	 */
    public function run()
    {
        Protector::create(['id'=>'4','first_name'=>'Tomasz','last_name'=>'Nowak','date_of_birth'=>'05.08.1967','phone_number'=>'603054612','id_coun'=>'2','id_first_lang'=>'3','id_second_lang'=>'4','id_third_lang'=>'5','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Protector::create(['id'=>'5','first_name'=>'Katarzyna','last_name'=>'Kwiatkowska','date_of_birth'=>'12.10.1989','phone_number'=>'820123456','id_coun'=>'174','id_first_lang'=>'27','id_second_lang'=>'2','document_number'=>'d82j8agd9d','insurance_number'=>'jd2fdh3389j']);
		Protector::create(['id'=>'6','first_name'=>'Mateusz','last_name'=>'Kowalski','date_of_birth'=>'22.12.1990','phone_number'=>'546512135','id_coun'=>'82','id_first_lang'=>'11','id_second_lang'=>'2','id_third_lang'=>'3','document_number'=>'d8adf83d9d','insurance_number'=>'afgaefjgaer']);
		
		Group::create(['id_coun'=>'2','id_first_lang'=>'3', 'id_prot'=>'4', 'number_of_people'=>'10', 'mean_of_transport'=>'Autobus','confirmed'=>0]);
		Group::create(['id_coun'=>'174','id_first_lang'=>'27', 'id_prot'=>'5', 'number_of_people'=>'22', 'mean_of_transport'=>'Samochod osobowy','confirmed'=>1]);
		Group::create(['id_coun'=>'82','id_first_lang'=>'11', 'id_prot'=>'6', 'number_of_people'=>'16', 'mean_of_transport'=>'Samolot','confirmed'=>1]);
		
		Participant::create(['id'=>'7','first_name'=>'Mateusz','last_name'=>'Kowalski','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_gr'=>'1','id_coun'=>'2','id_first_lang'=>'3','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Participant::create(['id'=>'8','first_name'=>'Joanna','last_name'=>'Nowakowska','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_gr'=>'2','id_coun'=>'174','id_first_lang'=>'27','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Participant::create(['id'=>'9','first_name'=>'Kamil','last_name'=>'Nowak','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_gr'=>'3','id_coun'=>'82','id_first_lang'=>'11','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Participant::create(['id'=>'10','first_name'=>'Zbigniew','last_name'=>'Bak','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_gr'=>'3','id_coun'=>'82','id_first_lang'=>'2','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Participant::create(['id'=>'11','first_name'=>'Franciszek','last_name'=>'Abacki','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_gr'=>'2','id_coun'=>'174','id_first_lang'=>'27','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Participant::create(['id'=>'12','first_name'=>'Mariusz','last_name'=>'Pudzianowski','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_gr'=>'2','id_coun'=>'174','id_first_lang'=>'27','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		Participant::create(['id'=>'13','first_name'=>'Wojciech','last_name'=>'Nowakowski','date_of_birth'=>'11.02.1990','phone_number'=>'377543427','id_gr'=>'1','id_coun'=>'2','id_first_lang'=>'3','document_number'=>'d82j83d9d','insurance_number'=>'jd29h3389j']);
		
		Accommodation::create(['name'=>'Hotel Zacisze','street'=>'ul. Zielona','building'=>'40','post_code'=>'54-325','city'=>'Wroclaw','phone_number'=>'453453453','image'=>'http://ser1.hastalavista.pl/wp-content/uploads/2013/02/Hotel-Orbis1.jpg','map'=>'https://goo.gl/maps/lOZM2','free_places'=>'20','all_places'=>'20','price'=>'69']);
		Accommodation::create(['name'=>'Szkola Podstawowa nr 3 im. Krolowej Jadwigi','street'=>'os. Wojska Polskiego','building'=>'12','post_code'=>'54-322','city'=>'Wroclaw','phone_number'=>'438461654','image'=>'http://bi.gazeta.pl/im/cb/89/fc/z16550347Q,Nowy-budynek-szkoly-muzycznej-jest-niemal-w-calosc.jpg','map'=>'https://goo.gl/maps/JVGmc','free_places'=>'15','all_places'=>'15','price'=>'19']);
		Accommodation::create(['name'=>'Politechnika Wroclawska DS T-15','street'=>'ul. Wittiga','building'=>'6','post_code'=>'55-352','city'=>'Wroclaw','phone_number'=>'1658655464','image'=>'http://dolny-slask.org.pl/foto/224/224207.jpg','map'=>'https://goo.gl/maps/XQgWQ','free_places'=>'18','all_places'=>'18','price'=>'80']);
    }

}