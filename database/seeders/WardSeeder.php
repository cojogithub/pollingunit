<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lga;
use App\Models\Ward;

class WardSeeder extends Seeder
{
    public function run()
    {
        $wards = [
// ABIA STATE //
            'Aba North' => [
                'Area Ariaria Market', 'Eziama', 'Industrial', 'Ogbor I', 'Ogbor II', 'Old Aba Gra', 'Osusu I', 'Osusu II', 'St Eugenes By Okigwe Rd', 'Umuogor', 'Umuola', 'Uratta'
            ],
            'Aba South' => [
                'Aba River', 'Aba Town Hall', 'Asa', 'Ekeoha', 'Enyimba', 'Eziukwu', 'Gloucester', 'Igwebuike', 'Mosque', 'Ngwa', 'Ohazu I', 'Ohazu II'
            ],
            'Arochukwu' => [
                'Arochukwu I', 'Arochukwu II', 'Arochukwu III', 'Eleoha Ihechiowa', 'Ikwun Ihechiowa', 'Isu', 'Ohaeke', 'Ohafor I', 'Ohafor II', 'Ovukwu', 'Ututu'
            ],
            'Bende' => [
                'Amankalu/Akoliufu', 'Bende', 'Igbere A', 'Igbere B', 'Item A', 'Item B', 'Item C', 'Itumbauzo', 'Ozuitem', 'Ugwueke/Ezeukwu', 'Umu - Imenyi', 'Umuhu / Ezechi', 'Uzuakoli'
            ],
            'Ikwuano' => [
                'Iloko I', 'Iloko II', 'Ibere I', 'Ibere II', 'Oboro I', 'Oboro II', 'Oboro III', 'Oboro IV', 'Ariam', 'Usaka'
            ],
            'Isiala Ngwa North' => [
                'Amapu Ntigha', 'Amasaa Nsulu', 'Amasaa Ntigha', 'Ihie', 'Isiala Nsulu', 'Mbawsi / Umuomainta', 'Ngwa Ukwu I', 'Ngwa Ukwu II', 'Umunna Nsulu', 'Umuoha'
            ],
            'Isiala Ngwa South' => [
                'Akunekpu Eziama Na Obuba', 'Amaise / Amaise Anaba', 'Ehina Guru Osokwa', 'Mbutu Ngwa', 'Mbutu Ukwu', 'Ngwaobi', 'Okporo Ahaba', 'Omoba', 'Ovungwu', 'Ovuokwu'
            ],
            'Isuikwuato' => [
                'Achara / Mgbugwu', 'Ezere', 'Ikeagha I', 'Ikeagha II', 'Imenyi', 'Isiala Amawu', 'Isu Amawu', 'Ogunduasa', 'Umuanyi / Absu', 'Umunnekwu'
            ],
            'Obingwa' => [
                'Abayi I', 'Abayi II', 'Ahiaba', 'Akumaimo', 'Alaukwu Ohanze', 'Ibeme', 'Maboko Amairi', 'Mgboko Itungwa', 'Mgboko Umuanunu', 'Ndiakata / Amairinabua', 'Ntighauzo Amairi'
            ],
            'Ohafia' => [
                'Agboji Abiriba', 'Amaeke Abiriba', 'Amaogudu Abiriba', 'Ania Ohoafia', 'Ebem Ohafia', 'Isiama Ohafia', 'Ndi Agbo Nkporo', 'Ndi Elu Nkporo', 'Ndi Etiti Nkporo', 'Ohafor Ohoafia', 'Okanu Ohoafia'
            ],
            'Osisioma' => [
                'Ama - Asaa', 'Amaitolu Mbutu Umuojima', 'Amasator', 'Amator', 'Amavo', 'Aro - Ngwa', 'Okpor - Umuobo', 'Oso - Okwa', 'Umunneise', 'Urtta'
            ],
            'Ukwa East' => [
                'Akwete', 'Azumini', 'Ikwueke East', 'Ikwueke West', 'Ikwuorie', 'Ikwuriator East', 'Ikwuriator West', 'Nkporobe/Ohuru', 'Obohia', 'Umuigube Achara'
            ],
            'Ukwa West' => [
                'Asa North', 'Asa South', 'Ipu East', 'Ipu South', 'Ipu West', 'Obokwe', 'Obuzor', 'Ogwe', 'Ozaa Ukwu', 'Ozaa West'
            ],
            'Umu-Nneochi' => [
                'Amuda', 'Eziama - Agbo', 'Eziama - Ugwu', 'Ezingodo', 'Mbala/Achara', 'Ndiawa/Umuelem/I', 'Obinolu/Obiagu/La', 'Ubahu/Akawa/Arokpa', 'Umuaku', 'Umuchieze I', 'Umuchieze II', 'Umuchieze III'
            ],
            'Umuahia North' => [
                'Afugiri', 'Ibeku East I', 'Ibeku East II', 'Ibeku West', 'Isingwu', 'Ndume', 'Nkwoachara', 'Nkwoegwu', 'Umuahia Urban I', 'Umuahia Urban II', 'Umuahia Urban III', 'Umuhu'
            ],
            'Umuahia South' => [
                'Ahiaukwu I', 'Ahiaukwu II', 'Amakama', 'Ezeleke/Ogbodiukwu', 'Nsirimo', 'Ohiaocha', 'Old Umuahia', 'Omaegwu', 'Ubakala A', 'Ubakala B'
            ],

// ADAMAWA //
            'Demsa' => [
                'Bille', 'Borrong', 'Demsa', 'Dilli', 'Dong', 'Dwam', 'Gwamba', 'Kpasham', 'Mbula Kuli', 'Nassarawo Demsa'
            ],
            'Fofore' => [
                'Beti', 'Farang', 'Fufore', 'Gurin', 'Karlahi', 'Mayo Ine', 'Pariya', 'Ribadu', 'Uki Tuki', 'Wuro Bokk', 'Yadim'
            ],
            'Ganye' => [
                'Bakari Guso', 'Gamu', 'Ganye I', 'Ganye II', 'Gurum', 'Jaggu', 'Sangasumi', 'Sugu', 'Timdore', 'Yebbi'
            ],
            'Gire 1' => [
                'Dakri', 'Damare', 'Gerei I', 'Gereng', 'Girei II', 'Jera Bakari', 'Jera Bonyo', 'Modire Vinikilang', 'Tambo', 'Wuro Dole'
            ],
            'Gombi' => [
                 'BOGA/ DINGAI', 'DUWA', 'GA\'ANDA', 'GABUN', 'GARKIDA', 'GOMBI NORTH', 'GOMBI SOUTH', 'GUYAKU', 'TAWA', 'YANG'
            ],
            'Guyuk' => [
                'Banjiram', 'Bobini', 'Bodeno', 'Chikila', 'Dukul', 'Dumna', 'Guyuk', 'Kola', 'Lokoro', 'Purokayo'
            ],
            'Hong' => [
                'Bangshika', 'Daksiri', 'Garaha', 'Gaya', 'Hildi', 'Hong', 'Hushere Zum', 'Kwarhi', 'Mayo Lope', 'Shangui', 'Thilbang', 'Uba'
            ],
            'Jada' => [
                'Danaba', 'Jada I', 'Jada II', 'Koma I', 'Koma II', 'Leko', 'Mapeo', 'Mayokalaye', 'Mbulo', 'Nyibango', 'Yelli'
            ],
            'Lamurde' => [
                'Dubwangun', 'Gyawana', 'Lafiya', 'Lamurde', 'Mgbebongun', 'Ngbakowo', 'Opalo', 'Rigange', 'Suwa', 'Waduku'
            ],
            'Madagali' => [
                'Babel', 'Duhu/Shuwa', 'Gulak', 'Hyambula', 'K/Wuro Ngayandi', 'Madagali', 'Pallam', 'Shelmi/Sukur/Vapura', 'Wagga', 'Wula'
            ],
            'Maiha' => [
                'Belel', 'Humbutudi', 'Konkol', 'Maiha Gari', 'Manjekin', 'Mayonguli', 'Pakka', 'Sorau A', 'Sorau B', 'Tambajam'
            ],
            'Mayo-Belwa' => [
                'Bajama', 'Binyeri', 'Gangfada', 'Gengle', 'Gorobi', 'Mayo-Belwa', 'Mayo Farang', 'Nassarawo Jereng', 'Ndikong', 'Ribadu', 'Tola', 'Yoffo'
            ],
            'Michika' => [
                'Bazza Margi', 'Futudou / Futules', 'Garta / Ghunchi', 'Jigalambu', 'Madzi', 'Michika I', 'Michika II',
                'Minkisi/ Wuro Ngiki', 'Moda / Dlaka / Ghenjuwa', 'Munkavicita', 'Sina / Kamale / Kwande',
                'Sukumu / Tillijo', 'Thukudou / Sufuku / Zah', 'Tumbara / Ngabili', 'Vi / Boka', 'Wamblimi / Tilli'
            ],
            'Mubi North' => [
                'Bahuli', 'Betso', 'Digil', 'Kolere', 'Lokuwa', 'Mayo Bani', 'Mijilu', 'Muchalla', 'Sabon Layi', 'Vimtim', 'Yelwa'
            ],
            'Mubi South' => [
                'Dirbishi/Gandira', 'Duvu/Chaba/Girburum', 'Gella', 'Gude', 'Kwaja', 'Lamorde', 'Mugulbu/Yadafa', 'Mujara', 'Nassarawo', 'Nduku'
            ],


// EDO STATE //
            'Akoko Edo' => [
                'Enwan/Atte/Ikpeshi/Egbigele', 'Igarra 1', 'Igarra 2', 'Ibillo/Ekpesa/Ekor/Ikeran-Ile/Oke',
                'Imoga/Lampese/Bekuma/Ekpe', 'Makeke/Ojah/Dangbala/Ojirami/Anyawoza',
                'Oloma/Okpe/Ijaja/Kakuma/Anyara', 'Ososo', 'Somorika/Ogbe/Sasaro/Onumu/Eshawa/Ogugu/Iboshi-Afe/Igboshi-Ele/Aiye',
                'Uneme-Nekhua/Akpama/Aiyetoro/Ekpedo/Erhunrun/Uneme-Osu'
            ],
            'Egor' => [
                'Egor', 'Evbareke', 'Ogida/Use', 'Okhoro', 'Oliha', 'Otubu', 'Ugbowo',
                'Uselu I', 'Uselu II', 'Uwelu'
            ],
            'Esan Central' => [
                'Ewu 1', 'Ewu 2', 'Ikekato', 'Opoji', 'Oturuwo 1', 'Oturuwo 2', 'Ugbegun',
                'Uneah', 'Uwessan 1', 'Uwessan 2'
            ],
            'Esan North-East' => [
                'Amedokhian', 'Arue', 'Ebele', 'Efandion', 'Ewoyi', 'Idumu Okojie', 'Obeidu',
                'Ubierumu', 'Uelen/Okugbe', 'Uwalor', 'Uzea'
            ],
            'Esan South-East' => [
                'Emu', 'Ewatto', 'Ewohimi 1', 'Ewohimi 2', 'Illushi 1', 'Illushi 2', 'Ohordua',
                'Ubiaja 1', 'Ubiaja 2', 'Ugboha'
            ],
            'Esan West' => [
                'Egoro/Idoa/Ukhun', 'Emaudo/Eguare/Ekpoma', 'Emuhi/Ukpenu/Ujoelen/Igor', 'Illeh/Eko-Ine', 'Ihunmudumu/Idumebo/Ujemen',
                'Iruekpen', 'Ogwa', 'Uhiele', 'Ujiogba', 'Urohi'
            ],
            'Etsako Central' => [
                'Ekperi 1', 'Ekperi 2', 'Ekperi 3', 'Fugar 1', 'Fugar 2', 'Fugar 3',
                'Iraokhor', 'Ogbona', 'South Uneme 1', 'South Uneme 2'
            ],
            'Etsako East' => [
                'Agenebode', 'Okpella 1', 'Okpella 2', 'Okpella 3', 'Okpella 4', 'Okpekpe',
                'Three Ibies', 'Wanno 1', 'Wanno 2', 'Weppa'
            ],
            'Etsako West' => [
                'Anwain', 'Auchi', 'Auchi 1', 'Auchi 2', 'Auchi 3', 'Aviele', 'Jagbe', 'South Ibie',
                'Uzairue North-East', 'Uzairue North-West', 'Uzairue South-East', 'Uzairue South-West', 'Warake'
            ],
            'Igueben' => [
                'Afuda/Idumuoka', 'Amahor/Ugun', 'Ekekhen/Idumuogo/Egbiki', 'Ekpon', 'Ewossa',
                'Idigun/Idumedo', 'Okalo/Okpujie', 'Owu/Okuta/Eguare Ebelle', 'Udo', 'Uhe/Idumuogbo/Idumueke'
            ],
            'Ikpoba-Okha' => [
                'Aduwawa/Evbo Modu', 'Gorretti', 'Idogbo', 'Iwogban/Uteh', 'Obayantor', 'Ogbeson',
                'Ologbo', 'Oregbeni', 'St. Saviour', 'Ugbekun'
            ],
            'Orhionmwon' => [
                'Aibiokunla I', 'Aibiokunla II', 'Evboesi', 'Igbanke East', 'Igbanke West', 'Iyoba',
                'Ugbeka', 'Ugboko', 'Ugu', 'Ukpato', 'Urhonigbe North', 'Urhonigbe South'
            ],
            'Oredo' => [
                'Gra/Etete', 'Ibiwe/Iwegie/Ugbague', 'Ihogbe/Isekhere/Oreoghene/Ibiwe/Ice Road', 'Ikpema/Eguadase', 'New Benin I',
                'New Benin II', 'Ogbelaka/Nekpenekpen', 'Ogbe', 'Oredo', 'Unueru/Ogboka', 'Urubi/Evbiemwen/Iwehen', 'Uzebu'
            ],
            'Owan East' => [
                'Emai 1', 'Emai 2', 'Igue/Ikao', 'Ihievbe 1', 'Ihievbe 2', 'Ivbiadaobi', 'Ivbimion',
                'Otuo 1', 'Otuo 2', 'Uokha/Ake', 'Warake'
            ],
            'Owan West' => [
                'Avbiosi', 'Eme-Ora/Oke', 'Eruere', 'Okhuse-Osi', 'Okpuje', 'Ozalla', 'Sabongida/Ora/Ogbeturu',
                'Sobe', 'Uhonmora', 'Uzebba 1', 'Uzebba 2'
            ],
            'Uhunmwonde' => [
                'Egbede', 'Ehor', 'Igieduma', 'Irhue', 'Isi North', 'Isi South', 'Ohuan',
                'Uhi', 'Umagbae North', 'Umagbae South'
            ],
        ];


        foreach ($wards as $lgaName => $wardList) {
            $lga = Lga::where('name', $lgaName)->first();
            if ($lga) {
                foreach ($wardList as $wardName) {
                    Ward::firstOrCreate([
                        'name' => $wardName,
                        'lga_id' => $lga->id,
                    ]);
                }
            }
        }
    }
}
