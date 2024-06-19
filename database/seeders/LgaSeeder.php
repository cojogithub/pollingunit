<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FederalConstituency;
use App\Models\Lga;

class LgaSeeder extends Seeder
{
    public function run()
    {
        $constituenciesAndLgas = [
            // Abia State
            'Ikwuano/Umuahia' => ['Ikwuano', 'Umuahia North', 'Umuahia South'],
            'Isiala Ngwa North/Isiala Ngwa South' => ['Isiala Ngwa North', 'Isiala Ngwa South'],
            'Osisioma/Ugwunagbo/Obingwa' => ['Osisioma', 'Ugwunagbo', 'Obingwa'],
            'Arochukwu/Ohafia' => ['Arochukwu', 'Ohafia'],
            'Bende' => ['Bende'],
            'Isuikwuato/Umu-Nneochi' => ['Isuikwuato','Umu-Nneochi'] ,
            'Aba North/Aba South' => ['Aba North', 'Aba South'],
            'Ukwa East/Ukwa West' => ['Ukwa East', 'Ukwa West'],

            // Adamawa State
            'Gire 1/Yola North/Yola South' => ['Gire 1', 'Yola North', 'Yola South'],
            'Fufore/Song' => ['Fufore', 'Song'],
            'Gombi/Hong' => ['Gombi', 'Hong'],
            'Madagali/Michika' => ['Madagali', 'Michika'],
            'Mubi North/Mubi South/Maiha' => ['Mubi North', 'Mubi South', 'Maiha'],
            'Demsa/Numan/Lamurde' => ['Demsa', 'Numan', 'Lamurde'],
            'Mayo-Belwa/Toungo/Jada/Ganye' => ['Mayo-Belwa', 'Toungo', 'Jada', 'Ganye'],

            // Akwa Ibom State
            'Etinan/Nsit Ibom/Nsit Ubium' => ['Etinan', 'Nsit Ibom', 'Nsit Ubium'],
            'Itu/Ibiono Ibom' => ['Itu', 'Ibiono Ibom'],
            'Uyo/Uruan/Nsit Atai/Ibesikpo Asutan' => ['Uyo', 'Uruan', 'Nsit Atai', 'Ibesikpo Asutan'],
            'Ikot Ekpene/Essien Udim/Obot Akara' => ['Ikot Ekpene', 'Essien Udim', 'Obot Akara'],
            'Abak/Etim Ekpo/Ika' => ['Abak', 'Etim Ekpo', 'Ika'],
            'Ukanafun/Oruk Anam' => ['Ukanafun', 'Oruk Anam'],
            'Eket/Onna/Esit Eket/Ibeno' => ['Eket', 'Onna', 'Esit Eket', 'Ibeno'],
            'Oron/Udung Uko/Mbo/Okobo/Uruan' => ['Oron', 'Udung Uko', 'Mbo', 'Okobo', 'Uruan'],
            'Ikot Abasi/Mkpat Enin/Eastern Obolo' => ['Ikot Abasi', 'Mkpat Enin', 'Eastern Obolo'],

            // Anambra State
            'Awka North/Awka South' => ['Awka North', 'Awka South'],
            'Idemili North/Idemili South' => ['Idemili North', 'Idemili South'],
            'Njikoka/Dunukofia/Anaocha' => ['Njikoka', 'Dunukofia', 'Anaocha'],
            'Onitsha North/Onitsha South' => ['Onitsha North', 'Onitsha South'],
            'Ogbaru' => ['Ogbaru'],
            'Oyi/Ayamelum' => ['Oyi', 'Ayamelum'],
            'Nnewi North/Nnewi South/Ekwusigo' => ['Nnewi North', 'Nnewi South', 'Ekwusigo'],
            'Ihiala' => ['Ihiala'],
            'Aguata' => ['Aguata'],

            // Bauchi State
            'Dass/Bogoro/Tafawa Balewa' => ['Dass', 'Bogoro', 'Tafawa Balewa'],
            'Bauchi' => ['Bauchi'],
            'Darazo/Ganjuwa' => ['Darazo', 'Ganjuwa'],
            'Katagum' => ['Katagum'],
            'Gamawa' => ['Gamawa'],
            'Jama\'are/Itas/Gadau' => ['Jama\'are', 'Itas', 'Gadau'],
            'Alkaleri/Kirfi' => ['Alkaleri', 'Kirfi'],
            'Misau/Dambam' => ['Misau', 'Dambam'],
            'Ningi/Warji' => ['Ningi', 'Warji'],

            // Bayelsa State
            'Southern Ijaw' => ['Southern Ijaw'],
            'Yenagoa/Kolokuma/Opokuma' => ['Yenagoa', 'Kolokuma', 'Opokuma'],
            'Brass/Nembe/Ogbia' => ['Brass', 'Nembe', 'Ogbia'],
            'Sagbama/Ekeremor' => ['Sagbama', 'Ekeremor'],

            // Benue State
            'Katsina-Ala/Ukum/Logo' => ['Katsina-Ala', 'Ukum', 'Logo'],
            'Kwande/Ushongo' => ['Kwande', 'Ushongo'],
            'Vandeikya/Konshisha' => ['Vandeikya', 'Konshisha'],
            'Gboko/Tarka' => ['Gboko', 'Tarka'],
            'Guma/Makurdi' => ['Guma', 'Makurdi'],
            'Buruku' => ['Buruku'],
            'Ado/Okpokwu/Ogbadibo' => ['Ado', 'Okpokwu', 'Ogbadibo'],
            'Otukpo/Ohimini' => ['Otukpo', 'Ohimini'],
            'Oju/Obi' => ['Oju', 'Obi'],

            // Borno State
            'Maiduguri Metropolitan' => ['Maiduguri Metropolitan'],
            'Jere' => ['Jere'],
            'Bama/Ngala/Kalabalge' => ['Bama', 'Ngala', 'Kalabalge'],
            'Marte/Monguno/Nganzai' => ['Marte', 'Monguno', 'Nganzai'],
            'Mobbar/Abadam/Guzamala' => ['Mobbar', 'Abadam', 'Guzamala'],
            'Kukawa/Ngala/Gwoza' => ['Kukawa', 'Ngala', 'Gwoza'],
            'Chibok/Damboa/Gwoza' => ['Chibok', 'Damboa', 'Gwoza'],
            'Askira Uba/Hawul' => ['Askira Uba', 'Hawul'],
            'Biu/Bayo/Kwaya Kusar/Bayo/Shani' => ['Biu', 'Bayo', 'Kwaya Kusar', 'Shani'],

            // Cross River State
            'Abi/Yakurr' => ['Abi', 'Yakurr'],
            'Boki/Ikom' => ['Boki', 'Ikom'],
            'Obubra/Etung' => ['Obubra', 'Etung'],
            'Ogoja/Yala' => ['Ogoja', 'Yala'],
            'Bekwara/Obudu/Obanliku' => ['Bekwara', 'Obudu', 'Obanliku'],
            'Akamkpa/Biase' => ['Akamkpa', 'Biase'],
            'Calabar Municipality/Odukpani' => ['Calabar Municipality', 'Odukpani'],
            'Akpabuyo/Bakassi/Calabar South' => ['Akpabuyo', 'Bakassi', 'Calabar South'],

            // Delta State
            'Ethiope East/Ethiope West' => ['Ethiope East', 'Ethiope West'],
            'Sapele/Uvwie/Okpe' => ['Sapele', 'Uvwie', 'Okpe'],
            'Ughelli North/Ughelli South/Udu' => ['Ughelli North', 'Ughelli South', 'Udu'],
            'Ndokwa East/Ndokwa West' => ['Ndokwa East', 'Ndokwa West'],
            'Aniocha North/Aniocha South' => ['Aniocha North', 'Aniocha South'],
            'Oshimili North/Oshimili South' => ['Oshimili North', 'Oshimili South'],
            'Isoko North/Isoko South' => ['Isoko North', 'Isoko South'],
            'Warri North/Warri South/Warri South-West' => ['Warri North', 'Warri South', 'Warri South-West'],
            'Bomadi/Patani' => ['Bomadi', 'Patani'],

            // Ebonyi State
            'Ezza North/Ishielu' => ['Ezza North', 'Ishielu'],
            'Ezza South/Ikwo' => ['Ezza South', 'Ikwo'],
            'Abakaliki/Izzi' => ['Abakaliki', 'Izzi'],
            'Ohaukwu' => ['Ohaukwu'],
            'Afikpo North/Afikpo South' => ['Afikpo North', 'Afikpo South'],
            'Ohaozara/Onicha/Ivo' => ['Ohaozara', 'Onicha', 'Ivo'],

            // Edo State
            'Esan Central/Esan West/Igueben' => ['Esan Central', 'Esan West', 'Igueben'],
            'Esan North-East/Esan South-East' => ['Esan North-East', 'Esan South-East'],
            'Akoko Edo' => ['Akoko Edo'],
            'Etsako East/Etsako West/Etsako Central' => ['Etsako East', 'Etsako West', 'Etsako Central'],
            'Owan East/Owan West' => ['Owan East', 'Owan West'],
            'Oredo' => ['Oredo'],
            'Orhionmwon/Uhunmwonde' => ['Orhionmwon', 'Uhunmwonde'],
            'Ikpoba-Okha/Egor' => ['Ikpoba-Okha', 'Egor'],

            // Ekiti State
            'Ado Ekiti/Irepodun-Ifelodun' => ['Ado Ekiti', 'Irepodun-Ifelodun'],
            'Ekiti West/Efon/Ijero' => ['Ekiti West', 'Efon', 'Ijero'],
            'Ikole/Oye' => ['Ikole', 'Oye'],
            'Ido Osi/Moba/Ilejemeje' => ['Ido Osi', 'Moba', 'Ilejemeje'],
            'Ekiti South-West/Ikere/Ise-Orun' => ['Ekiti South-West', 'Ikere', 'Ise-Orun'],
            'Emure/Gbonyin/Ekiti East' => ['Emure', 'Gbonyin', 'Ekiti East'],

            // Enugu State
            'Enugu East/Isi Uzo' => ['Enugu East', 'Isi Uzo'],
            'Enugu North/Enugu South' => ['Enugu North', 'Enugu South'],
            'Igbo Etiti/Uzo Uwani' => ['Igbo Etiti', 'Uzo Uwani'],
            'Nsukka/Igbo Eze South' => ['Nsukka', 'Igbo Eze South'],
            'Igbo Eze North/Udenu' => ['Igbo Eze North', 'Udenu'],
            'Aninri/Awgu/Oji River' => ['Aninri', 'Awgu', 'Oji River'],
            'Udi/Ezeagu' => ['Udi', 'Ezeagu'],

            // Gombe State
            'Akko' => ['Akko'],
            'Yamaltu/Deba' => ['Yamaltu/Deba'],
            'Dukku/Nafada' => ['Dukku', 'Nafada'],
            'Kwami/Funakaye/Gombe' => ['Kwami', 'Funakaye', 'Gombe'],
            'Balanga/Billiri' => ['Balanga', 'Billiri'],
            'Shongom/Kaltungo' => ['Shongom', 'Kaltungo'],

            // Imo State
            'Owerri Municipal/Owerri North/Owerri West' => ['Owerri Municipal', 'Owerri North', 'Owerri West'],
            'Mbaitoli/Ikeduru' => ['Mbaitoli', 'Ikeduru'],
            'Okigwe/Onuimo/Isiala Mbano' => ['Okigwe', 'Onuimo', 'Isiala Mbano'],
            'Ehime Mbano/Ihitte Uboma/Obowo' => ['Ehime Mbano', 'Ihitte Uboma', 'Obowo'],
            'Orlu/Orsu/Oru East' => ['Orlu', 'Orsu', 'Oru East'],
            'Ideato North/Ideato South' => ['Ideato North', 'Ideato South'],

            // Jigawa State
            'Dutse/Kiyawa' => ['Dutse', 'Kiyawa'],
            'Birnin Kudu/Buji' => ['Birnin Kudu', 'Buji'],
            'Hadejia/Kafin Hausa/Auyo' => ['Hadejia', 'Kafin Hausa', 'Auyo'],
            'Birniwa/Guri/Kirikasamma' => ['Birniwa', 'Guri', 'Kirikasamma'],
            'Gwaram' => ['Gwaram'],
            'Garki/Babura' => ['Garki', 'Babura'],
            'Ringim/Taura' => ['Ringim', 'Taura'],

            // Kaduna State
            'Birnin Gwari/Giwa' => ['Birnin Gwari', 'Giwa'],
            'Igabi/Kaduna North' => ['Igabi', 'Kaduna North'],
            'Kaduna South/Chikun' => ['Kaduna South', 'Chikun'],
            'Ikara/Kubau' => ['Ikara', 'Kubau'],
            'Kudan/Makarfi/Sabon Gari' => ['Kudan', 'Makarfi', 'Sabon Gari'],
            'Soba/Zaria' => ['Soba', 'Zaria'],
            'Jema\'a/Sanga' => ['Jema\'a', 'Sanga'],
            'Kachia/Kagarko' => ['Kachia', 'Kagarko'],
            'Zangon Kataf/Jaba' => ['Zangon Kataf', 'Jaba'],

            // Kano State
            'Kano Municipal' => ['Kano Municipal'],
            'Dala/Gwale' => ['Dala', 'Gwale'],
            'Nassarawa/Tarauni' => ['Nassarawa', 'Tarauni'],
            'Gezawa/Gabasawa' => ['Gezawa', 'Gabasawa'],
            'Gwarzo/Kabo' => ['Gwarzo', 'Kabo'],
            'Karaye/Rogo' => ['Karaye', 'Rogo'],
            'Rano/Bunkure/Kibiya' => ['Rano', 'Bunkure', 'Kibiya'],
            'Doguwa/Tudun Wada' => ['Doguwa', 'Tudun Wada'],
            'Sumaila/Albasu' => ['Sumaila', 'Albasu'],

            // Katsina State
            'Katsina' => ['Katsina'],
            'Rimi/Batagarawa/Charanchi' => ['Rimi', 'Batagarawa', 'Charanchi'],
            'Daura/Sandamu/Mai\'Adua' => ['Daura', 'Sandamu', 'Mai\'Adua'],
            'Baure/Zango' => ['Baure', 'Zango'],
            'Mani/Bindawa' => ['Mani', 'Bindawa'],
            'Funtua/Dandume' => ['Funtua', 'Dandume'],
            'Bakori/Danja' => ['Bakori', 'Danja'],
            'Malumfashi/Kafur' => ['Malumfashi', 'Kafur'],

            // Kebbi State
            'Birnin Kebbi/Kalgo/Bunza' => ['Birnin Kebbi', 'Kalgo', 'Bunza'],
            'Aliero/Jega/Gwandu' => ['Aliero', 'Jega', 'Gwandu'],
            'Argungu/Augie' => ['Argungu', 'Augie'],
            'Arewa/Dandi' => ['Arewa', 'Dandi'],
            'Zuru/Fakai/Sakaba/Wasagu/Danko' => ['Zuru', 'Fakai', 'Sakaba', 'Wasagu/Danko'],
            'Yauri/Shanga/Ngaski' => ['Yauri', 'Shanga', 'Ngaski'],

            // Kogi State
            'Okene/Ogori-Magongo' => ['Okene', 'Ogori-Magongo'],
            'Okehi/Adavi' => ['Okehi', 'Adavi'],
            'Dekina/Bassa' => ['Dekina', 'Bassa'],
            'Ankpa/Olamaboro/Omala' => ['Ankpa', 'Olamaboro', 'Omala'],
            'Kabba/Bunu/Ijumu' => ['Kabba', 'Bunu', 'Ijumu'],
            'Lokoja/Kogi' => ['Lokoja', 'Kogi'],

            // Kwara State
            'Asa/Ilorin West' => ['Asa', 'Ilorin West'],
            'Ilorin East/Ilorin South' => ['Ilorin East', 'Ilorin South'],
            'Baruten/Kaiama' => ['Baruten', 'Kaiama'],
            'Edu/Moro/Pategi' => ['Edu', 'Moro', 'Pategi'],
            'Ekiti/Isin/Irepodun/Oke-Ero' => ['Ekiti', 'Isin', 'Irepodun', 'Oke-Ero'],
            'Offa/Oyun/Ifelodun' => ['Offa', 'Oyun', 'Ifelodun'],

            // Lagos State
            'Lagos Island I/II' => ['Lagos Island I', 'Lagos Island II'],
            'Lagos Mainland' => ['Lagos Mainland'],
            'Apapa' => ['Apapa'],
            'Epe I/II' => ['Epe I', 'Epe II'],
            'Ibeju-Lekki' => ['Ibeju-Lekki'],
            'Kosofe' => ['Kosofe'],
            'Agege' => ['Agege'],
            'Ifako-Ijaiye' => ['Ifako-Ijaiye'],
            'Alimosho' => ['Alimosho'],

            // Nasarawa State
            'Akwanga/Nasarawa Eggon/Wamba' => ['Akwanga', 'Nasarawa Eggon', 'Wamba'],
            'Lafia/Obi' => ['Lafia', 'Obi'],
            'Awe/Doma/Keana' => ['Awe', 'Doma', 'Keana'],
            'Karu/Keffi/Kokona' => ['Karu', 'Keffi', 'Kokona'],
            'Nasarawa/Toto' => ['Nasarawa', 'Toto'],

            // Niger State
            'Shiroro/Rafi/Munya' => ['Shiroro', 'Rafi', 'Munya'],
            'Kontagora/Wushishi/Mariga/Mashegu' => ['Kontagora', 'Wushishi', 'Mariga', 'Mashegu'],
            'Borgu/Agwara' => ['Borgu', 'Agwara'],
            'Bida/Gbako/Katcha' => ['Bida', 'Gbako', 'Katcha'],
            'Lavun/Edati/Mokwa' => ['Lavun', 'Edati', 'Mokwa'],

            // Ogun State
            'Abeokuta North/Obafemi Owode/Odeda' => ['Abeokuta North', 'Obafemi Owode', 'Odeda'],
            'Abeokuta South' => ['Abeokuta South'],
            'Ijebu North/Ijebu East/Ogun Waterside' => ['Ijebu North', 'Ijebu East', 'Ogun Waterside'],
            'Ijebu Ode/Odogbolu/Ijebu North-East' => ['Ijebu Ode', 'Odogbolu', 'Ijebu North-East'],
            'Yewa North/Imeko Afon' => ['Yewa North', 'Imeko Afon'],
            'Yewa South/Ipokia' => ['Yewa South', 'Ipokia'],

            // Ondo State
            'Akure North/Akure South' => ['Akure North', 'Akure South'],
            'Idanre/Ifedore' => ['Idanre', 'Ifedore'],
            'Owo/Ose' => ['Owo', 'Ose'],
            'Akoko North-East/Akoko North-West' => ['Akoko North-East', 'Akoko North-West'],
            'Ilaje/Ese-Odo' => ['Ilaje', 'Ese-Odo'],
            'Odigbo/Ile Oluji/Okeigbo' => ['Odigbo', 'Ile Oluji/Okeigbo'],

            // Osun State
            'Ifelodun/Boripe/Odo Otin' => ['Ifelodun', 'Boripe', 'Odo Otin'],
            'Ila/Irepodun/Orolu' => ['Ila', 'Irepodun', 'Orolu'],
            'Ife Central/Ife East/Ife North/Ife South' => ['Ife Central', 'Ife East', 'Ife North', 'Ife South'],
            'Atakunmosa East/Atakunmosa West/Ilesa East/Ilesa West' => ['Atakunmosa East', 'Atakunmosa West', 'Ilesa East', 'Ilesa West'],
            'Iwo/Ayedire/Ola-Oluwa' => ['Iwo', 'Ayedire', 'Ola-Oluwa'],
            'Ayedaade/Isokan/Ede North/Ede South/Egbedore' => ['Ayedaade', 'Isokan', 'Ede North', 'Ede South', 'Egbedore'],

            // Oyo State
            'Afijio/Atiba/Oyo East/Oyo West' => ['Afijio', 'Atiba', 'Oyo East', 'Oyo West'],
            'Lagelu/Ona Ara' => ['Lagelu', 'Ona Ara'],
            'Irepo/Olorunsogo/Oorelope' => ['Irepo', 'Olorunsogo', 'Oorelope'],
            'Kajola/Itesiwaju/Iwajowa' => ['Kajola', 'Itesiwaju', 'Iwajowa'],
            'Ibadan North/Ibadan North-East/Ibadan North-West/Ibadan South-East/Ibadan South-West' => ['Ibadan North', 'Ibadan North-East', 'Ibadan North-West', 'Ibadan South-East', 'Ibadan South-West'],

            // Plateau State
            'Bokkos/Mangu' => ['Bokkos', 'Mangu'],
            'Pankshin/Kanke/Kanam' => ['Pankshin', 'Kanke', 'Kanam'],
            'Barkin Ladi/Riyom' => ['Barkin Ladi', 'Riyom'],
            'Jos South/Jos East' => ['Jos South', 'Jos East'],
            'Langtang North/Langtang South' => ['Langtang North', 'Langtang South'],
            'Mikang/Qua\'an Pan/Shendam' => ['Mikang', 'Qua\'an Pan', 'Shendam'],

            // Rivers State
            'Emuoha/Ikwerre' => ['Emuoha', 'Ikwerre'],
            'Etche/Omuma' => ['Etche', 'Omuma'],
            'Andoni/Opobo/Nkoro' => ['Andoni', 'Opobo', 'Nkoro'],
            'Gokana/Khana' => ['Gokana', 'Khana'],
            'Ahoada East/Ahoada West' => ['Ahoada East', 'Ahoada West'],
            'Abua/Odual' => ['Abua', 'Odual'],

            // Sokoto State
            'Goronyo/Gada' => ['Goronyo', 'Gada'],
            'Isa/Sabon Birni' => ['Isa', 'Sabon Birni'],
            'Wurno/Rabah' => ['Wurno', 'Rabah'],
            'Wamakko' => ['Wamakko'],
            'Shagari/Yabo' => ['Shagari', 'Yabo'],
            'Tambuwal' => ['Tambuwal'],

            // Taraba State
            'Bali/Gassol' => ['Bali', 'Gassol'],
            'Karim Lamido/Lau/Ardo-Kola' => ['Karim Lamido', 'Lau', 'Ardo-Kola'],
            'Jalingo/Yorro/Zing' => ['Jalingo', 'Yorro', 'Zing'],
            'Donga/Ussa/Takum' => ['Donga', 'Ussa', 'Takum'],
            'Wukari/Ibi' => ['Wukari', 'Ibi'],

            // Yobe State
            'Gujba/Gulani' => ['Gujba', 'Gulani'],
            'Damaturu/Tarmuwa' => ['Damaturu', 'Tarmuwa'],
            'Yusufari/Geidam' => ['Yusufari', 'Geidam'],
            'Yunusari' => ['Yunusari'],
            'Fune' => ['Fune'],
            'Nangere/Potiskum' => ['Nangere', 'Potiskum'],

            // Zamfara State
            'Gusau/Tsafe' => ['Gusau', 'Tsafe'],
            'Bungudu/Maru' => ['Bungudu', 'Maru'],
            'Zurmi/Shinkafi' => ['Zurmi', 'Shinkafi'],
            'Kaura Namoda/Birnin Magaji' => ['Kaura Namoda', 'Birnin Magaji'],
            'Anka/Talata Mafara' => ['Anka', 'Talata Mafara'],
            'Bakura/Maradun' => ['Bakura', 'Maradun'],

            // Federal Capital Territory (FCT)
            'Abuja Municipal/Bwari' => ['Abuja Municipal', 'Bwari'],
            'Abaji/Gwagwalada/Kuje/Kwali' => ['Abaji', 'Gwagwalada', 'Kuje', 'Kwali']
        ];

        foreach ($constituenciesAndLgas as $constituencyName => $lgas) {
            $constituency = FederalConstituency::where('name', $constituencyName)->first();
            if ($constituency) {
                foreach ($lgas as $lgaName) {
                    Lga::updateOrCreate(
                        ['name' => $lgaName, 'federal_constituency_id' => $constituency->id]
                    );
                }
            }
        }
    }
}
?>
