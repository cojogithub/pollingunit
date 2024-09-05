<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SenatorialDistrict;
use App\Models\FederalConstituency;

class FederalConstituencySeeder extends Seeder
{
    public function run()
    {
        $districtsAndConstituencies = [
            'Abia Central' => [
                'Ikwuano/Umuahia',
                'Isiala Ngwa North/Isiala Ngwa South',
                'Osisioma/Ugwunagbo/Obingwa'
            ],
            'Abia North' => [
                'Arochukwu/Ohafia',
                'Bende',
                'Isuikwuato/Umu-Nneochi'
            ],
            'Abia South' => [
                'Aba North/Aba South',
                'Ukwa East/Ukwa West'
            ],
            'Adamawa Central' => [
                'Gire 1/Yola North/Yola South',
                'Fufore/Song',
                'Gombi/Hong'
            ],
            'Adamawa North' => [
                'Madagali/Michika',
                'Mubi North/Mubi South/Maiha'
            ],
            'Adamawa South' => [
                'Demsa/Numan/Lamurde',
                'Mayo-Belwa/Toungo/Jada/Ganye'
            ],
            'Akwa Ibom North-East' => [
                'Etinan/Nsit Ibom/Nsit Ubium',
                'Itu/Ibiono Ibom',
                'Uyo/Uruan/Nsit Atai/Ibesikpo Asutan'
            ],
            'Akwa Ibom North-West' => [
                'Ikot Ekpene/Essien Udim/Obot Akara',
                'Abak/Etim Ekpo/Ika',
                'Ukanafun/Oruk Anam'
            ],
            'Akwa Ibom South' => [
                'Eket/Onna/Esit Eket/Ibeno',
                'Oron/Udung Uko/Mbo/Okobo/Urue-Offong/Oruko',
                'Ikot Abasi/Mkpat Enin/Eastern Obolo'
            ],
            'Anambra Central' => [
                'Awka North/Awka South',
                'Idemili North/Idemili South',
                'Njikoka/Dunukofia/Anaocha'
            ],
            'Anambra North' => [
                'Onitsha North/Onitsha South',
                'Ogbaru',
                'Oyi/Ayamelum'
            ],
            'Anambra South' => [
                'Nnewi North/Nnewi South/Ekwusigo',
                'Ihiala',
                'Aguata'
            ],
            'Bauchi Central' => [
                'Dass/Bogoro/Tafawa Balewa',
                'Bauchi',
                'Darazo/Ganjuwa'
            ],
            'Bauchi North' => [
                'Katagum',
                'Gamawa',
                'Jama\'are/Itas/Gadau'
            ],
            'Bauchi South' => [
                'Alkaleri/Kirfi',
                'Misau/Dambam',
                'Ningi/Warji'
            ],
            'Bayelsa Central' => [
                'Southern Ijaw',
                'Yenagoa/Kolokuma/Opokuma'
            ],
            'Bayelsa East' => [
                'Brass/Nembe',
                'Ogbia'
            ],
            'Bayelsa West' => [
                'Sagbama/Ekeremor'
            ],
            'Benue North-East' => [
                'Katsina-Ala/Ukum/Logo',
                'Kwande/Ushongo',
                'Vandeikya/Konshisha'
            ],
            'Benue North-West' => [
                'Gboko/Tarka',
                'Guma/Makurdi',
                'Buruku'
            ],
            'Benue South' => [
                'Ado/Okpokwu/Ogbadibo',
                'Otukpo/Ohimini',
                'Oju/Obi'
            ],
            'Borno Central' => [
                'Maiduguri Metropolitan',
                'Jere',
                'Bama/Ngala/Kalabalge'
            ],
            'Borno North' => [
                'Marte/Monguno/Nganzai',
                'Mobbar/Abadam/Guzamala',
                'Kukawa/Mobbar/Guzamala'
            ],
            'Borno South' => [
                'Chibok/Damboa/Gwoza',
                'Askira Uba/Hawul',
                'Biu/Kwaya Kusar/Bayo/Shani'
            ],
            'Cross River Central' => [
                'Abi/Yakurr',
                'Boki/Ikom',
                'Obubra/Etung'
            ],
            'Cross River North' => [
                'Ogoja/Yala',
                'Bekwara/Obudu/Obanliku'
            ],
            'Cross River South' => [
                'Akamkpa/Biase',
                'Calabar Municipality/Odukpani',
                'Akpabuyo/Bakassi/Calabar South'
            ],
            'Delta Central' => [
                'Ethiope East/Ethiope West',
                'Sapele/Uvwie/Okpe',
                'Ughelli North/Ughelli South/Udu'
            ],
            'Delta North' => [
                'Ndokwa East/Ndokwa West',
                'Aniocha North/Aniocha South',
                'Oshimili North/Oshimili South'
            ],
            'Delta South' => [
                'Isoko North/Isoko South',
                'Warri North/Warri South/Warri South-West',
                'Bomadi/Patani'
            ],
            'Ebonyi Central' => [
                'Ezza North/Ishielu',
                'Ezza South/Ikwo'
            ],
            'Ebonyi North' => [
                'Abakaliki/Izzi',
                'Ohaukwu'
            ],
            'Ebonyi South' => [
                'Afikpo North/Afikpo South',
                'Ohaozara/Onicha/Ivo'
            ],
            'Edo Central' => [
                'Esan Central/Esan West/Igueben',
                'Esan North-East/Esan South-East'
            ],
            'Edo North' => [
                'Akoko Edo',
                'Etsako East/Etsako West/Etsako Central',
                'Owan East/Owan West'
            ],
            'Edo South' => [
                'Oredo',
                'Orhionmwon/Uhunmwonde',
                'Ikpoba-Okha/Egor'
            ],
            'Ekiti Central' => [
                'Ado Ekiti/Irepodun-Ifelodun',
                'Ekiti West/Efon/Ijero'
            ],
            'Ekiti North' => [
                'Ikole/Oye',
                'Ido Osi/Moba/Ilejemeje'
            ],
            'Ekiti South' => [
                'Ekiti South-West/Ikere/Ise-Orun',
                'Emure/Gbonyin/Ekiti East'
            ],
            'Enugu East' => [
                'Enugu East/Isi Uzo',
                'Enugu North/Enugu South'
            ],
            'Enugu North' => [
                'Igbo Etiti/Uzo Uwani',
                'Nsukka/Igbo Eze South',
                'Igbo Eze North/Udenu'
            ],
            'Enugu West' => [
                'Aninri/Awgu/Oji River',
                'Udi/Ezeagu'
            ],
            'Gombe Central' => [
                'Akko',
                'Yamaltu/Deba'
            ],
            'Gombe North' => [
                'Dukku/Nafada',
                'Kwami/Funakaye/Gombe'
            ],
            'Gombe South' => [
                'Balanga/Billiri',
                'Shongom/Kaltungo'
            ],
            'Imo East' => [
                'Owerri Municipal/Owerri North/Owerri West',
                'Mbaitoli/Ikeduru'
            ],
            'Imo North' => [
                'Okigwe/Onuimo/Isiala Mbano',
                'Ehime Mbano/Ihitte Uboma/Obowo'
            ],
            'Imo West' => [
                'Orlu/Orsu/Oru East',
                'Ideato North/Ideato South'
            ],
            'Jigawa Central' => [
                'Dutse/Kiyawa',
                'Birnin Kudu/Buji'
            ],
            'Jigawa North-East' => [
                'Hadejia/Kafin Hausa/Auyo',
                'Birniwa/Guri/Kirikasamma'
            ],
            'Jigawa North-West' => [
                'Gwaram',
                'Garki/Babura',
                'Ringim/Taura'
            ],
            'Kaduna Central' => [
                'Birnin Gwari/Giwa',
                'Igabi/Kaduna North',
                'Kaduna South/Chikun'
            ],
            'Kaduna North' => [
                'Ikara/Kubau',
                'Kudan/Makarfi/Sabon Gari',
                'Soba/Zaria'
            ],
            'Kaduna South' => [
                'Jema\'a/Sanga',
                'Kachia/Kagarko',
                'Zangon Kataf/Jaba'
            ],
            'Kano Central' => [
                'Kano Municipal',
                'Dala/Gwale',
                'Nassarawa/Tarauni'
            ],
            'Kano North' => [
                'Gezawa/Gabasawa',
                'Gwarzo/Kabo',
                'Karaye/Rogo'
            ],
            'Kano South' => [
                'Rano/Bunkure/Kibiya',
                'Doguwa/Tudun Wada',
                'Sumaila/Albasu'
            ],
            'Katsina Central' => [
                'Katsina',
                'Rimi/Batagarawa/Charanchi'
            ],
            'Katsina North' => [
                'Daura/Sandamu/Mai\'Adua',
                'Baure/Zango',
                'Mani/Bindawa'
            ],
            'Katsina South' => [
                'Funtua/Dandume',
                'Bakori/Danja',
                'Malumfashi/Kafur'
            ],
            'Kebbi Central' => [
                'Birnin Kebbi/Kalgo/Bunza',
                'Aliero/Jega/Gwandu'
            ],
            'Kebbi North' => [
                'Argungu/Augie',
                'Arewa/Dandi'
            ],
            'Kebbi South' => [
                'Zuru/Fakai/Sakaba/Wasagu/Danko',
                'Yauri/Shanga/Ngaski'
            ],
            'Kogi Central' => [
                'Okene/Ogori-Magongo',
                'Okehi/Adavi'
            ],
            'Kogi East' => [
                'Dekina/Bassa',
                'Ankpa/Olamaboro/Omala'
            ],
            'Kogi West' => [
                'Kabba/Bunu/Ijumu',
                'Lokoja/Kogi'
            ],
            'Kwara Central' => [
                'Asa/Ilorin West',
                'Ilorin East/Ilorin South'
            ],
            'Kwara North' => [
                'Baruten/Kaiama',
                'Edu/Moro/Pategi'
            ],
            'Kwara South' => [
                'Ekiti/Isin/Irepodun/Oke-Ero',
                'Offa/Oyun/Ifelodun'
            ],
            'Lagos Central' => [
                'Lagos Island I/II',
                'Lagos Mainland',
                'Apapa'
            ],
            'Lagos East' => [
                'Epe I/II',
                'Ibeju-Lekki',
                'Kosofe'
            ],
            'Lagos West' => [
                'Agege',
                'Ifako-Ijaiye',
                'Alimosho'
            ],
            'Nasarawa North' => [
                'Akwanga/Nasarawa Eggon/Wamba'
            ],
            'Nasarawa South' => [
                'Lafia/Obi',
                'Awe/Doma/Keana'
            ],
            'Nasarawa West' => [
                'Karu/Keffi/Kokona',
                'Nasarawa/Toto'
            ],
            'Niger East' => [
                'Shiroro/Rafi/Munya'
            ],
            'Niger North' => [
                'Kontagora/Wushishi/Mariga/Mashegu',
                'Borgu/Agwara'
            ],
            'Niger South' => [
                'Bida/Gbako/Katcha',
                'Lavun/Edati/Mokwa'
            ],
            'Ogun Central' => [
                'Abeokuta North/Obafemi Owode/Odeda',
                'Abeokuta South'
            ],
            'Ogun East' => [
                'Ijebu North/Ijebu East/Ogun Waterside',
                'Ijebu Ode/Odogbolu/Ijebu North-East'
            ],
            'Ogun West' => [
                'Yewa North/Imeko Afon',
                'Yewa South/Ipokia'
            ],
            'Ondo Central' => [
                'Akure North/Akure South',
                'Idanre/Ifedore'
            ],
            'Ondo North' => [
                'Owo/Ose',
                'Akoko North-East/Akoko North-West'
            ],
            'Ondo South' => [
                'Ilaje/Ese-Odo',
                'Odigbo/Ile Oluji/Okeigbo'
            ],
            'Osun Central' => [
                'Ifelodun/Boripe/Odo Otin',
                'Ila/Irepodun/Orolu'
            ],
            'Osun East' => [
                'Ife Central/Ife East/Ife North/Ife South',
                'Atakunmosa East/Atakunmosa West/Ilesa East/Ilesa West'
            ],
            'Osun West' => [
                'Iwo/Ayedire/Ola-Oluwa',
                'Ayedaade/Isokan/Ede North/Ede South/Egbedore'
            ],
            'Oyo Central' => [
                'Afijio/Atiba/Oyo East/Oyo West',
                'Lagelu/Ona Ara'
            ],
            'Oyo North' => [
                'Irepo/Olorunsogo/Oorelope',
                'Kajola/Itesiwaju/Iwajowa'
            ],
            'Oyo South' => [
                'Ibadan North/Ibadan North-East/Ibadan North-West/Ibadan South-East/Ibadan South-West'
            ],
            'Plateau Central' => [
                'Bokkos/Mangu',
                'Pankshin/Kanke/Kanam'
            ],
            'Plateau North' => [
                'Barkin Ladi/Riyom',
                'Jos South/Jos East'
            ],
            'Plateau South' => [
                'Langtang North/Langtang South',
                'Mikang/Qua\'an Pan/Shendam'
            ],
            'Rivers East' => [
                'Emuoha/Ikwerre',
                'Etche/Omuma'
            ],
            'Rivers South-East' => [
                'Andoni/Opobo/Nkoro',
                'Gokana/Khana'
            ],
            'Rivers West' => [
                'Ahoada East/Ahoada West',
                'Abua/Odual'
            ],
            'Sokoto East' => [
                'Goronyo/Gada',
                'Isa/Sabon Birni'
            ],
            'Sokoto North' => [
                'Wurno/Rabah',
                'Wamakko'
            ],
            'Sokoto South' => [
                'Shagari/Yabo',
                'Tambuwal'
            ],
            'Taraba Central' => [
                'Bali/Gassol'
            ],
            'Taraba North' => [
                'Karim Lamido/Lau/Ardo-Kola',
                'Jalingo/Yorro/Zing'
            ],
            'Taraba South' => [
                'Donga/Ussa/Takum',
                'Wukari/Ibi'
            ],
            'Yobe East' => [
                'Gujba/Gulani',
                'Damaturu/Tarmuwa'
            ],
            'Yobe North' => [
                'Yusufari/Geidam',
                'Yunusari'
            ],
            'Yobe South' => [
                'Fune',
                'Nangere/Potiskum'
            ],
            'Zamfara Central' => [
                'Gusau/Tsafe',
                'Bungudu/Maru'
            ],
            'Zamfara North' => [
                'Zurmi/Shinkafi',
                'Kaura Namoda/Birnin Magaji'
            ],
            'Zamfara West' => [
                'Anka/Talata Mafara',
                'Bakura/Maradun'
            ],
            'FCT' => [
                'Abuja Municipal/Bwari',
                'Abaji/Gwagwalada/Kuje/Kwali'
            ]
        ];

        foreach ($districtsAndConstituencies as $districtName => $constituencies) {
            $district = SenatorialDistrict::where('name', $districtName)->first();
            if ($district) {
                foreach ($constituencies as $constituency) {
                    FederalConstituency::firstOrCreate([
                        'name' => $constituency,
                        'senatorial_district_id' => $district->id
                    ]);
                }
            }
        }
    }
}
