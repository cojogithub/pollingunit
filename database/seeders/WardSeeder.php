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
            'Fufore' => [
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
            'Numan' => [
                'Bare', 'Bolki', 'Gamadio', 'Imburu', 'Kodomti', 'Numan I', 'Numan Ii', 'Numan Iii', 'Sabon Pegi', 'Vulpi'
            ],
            'Shelleng' => [
                'Bakta', 'Bodwai', 'Gundo', 'Gwapopolok', 'Jumbul', 'Ketembere', 'Kiri', 'Libbo', 'Shelleng', 'Tallum'
            ],
            'Song' => [
                'Dirma', 'Dumne', 'Gudu Mboi', 'Kilange Funa', 'Kilange Hirna', 'Sigire', 'Song Gari', 'Song Waje', 'Suktu', 'Waltandi', 'Zumo'
            ],
            'Toungo' => [
                'Dawo I', 'Dawo II', 'Gumti', 'Kiri I', 'Kiri II', 'Kongin Baba I', 'Kongin Baba II', 'Toungo I', 'Toungo II', 'Toungo III'
            ],
            'Yola North' => [
                'Ajiya', 'Alkalawa', 'Doubeli', 'Gwadabawa', 'Jambutu', 'Karewa', 'Limawa', 'Luggere', 'Nassarawo', 'Rumde','Yelwa'
            ],
            'Yola South' => [
                'Adarawo', 'Bako', 'Bole Yolde Pate', 'Makama \'A\'', 'Makama \'B\'', 'Mbamba', 'Mbamoi', 'Namtari', 'Ngurore', 'Toungo', 'Yolde Kohi'
            ],


// 	AKWA IBOM  //
            'Abak' => [
                'Abak Urban 1', 'Abak Urban 11', 'Abak Urban 111', 'Abak Urban 1v', 'Afaha Obong 1', 'Afaha Obong 11', 'Midim 1', 'Midim 11', 'Otoro 1', 'Otoro 11', 'Otoro 111'
            ],

            'Eastern Obolo' => [
                'Eastern Obolo 1', 'Eastern Obolo 11', 'Eastern Obolo 111', 'Eastern Obolo 1V', 'Eastern Obolo V', 'Eastern Obolo V1', 'Eastern Obolo V11', 'Eastern Obolo V111', 'Eastern Obolo IX', 'Eastern Obolo X'
            ],
            'Eket' => [
                'Central 1', 'Central 11', 'Central 111', 'Central 1V', 'Central V', 'Okon 1', 'Okon 11', 'Urban 1', 'Urban 11', 'Urban 111', 'Urban 1V'
            ],
            'Esit Eket (Uquo)' => [
                'Akpautong', 'Ebe Ekpi', 'Ebighi Okpono', 'Edor', 'Ekpene Obo', 'Etebi Akwata', 'Etebi Idung Assan', 'Ikpa', 'Ntak Inyang', 'Uquo'
            ],
            'Essien Udim' => [
                'Adiasim', 'Afaha', 'Ekpeyong 1', 'Ekpeyong 11', 'Ikpe Annang', 'Odoro Ikot 1', 'Odoro Ikot 11', 'Okon', 'Ukana East', 'Ukana West 1', 'Ukana West 11'
            ],
            'Etim Ekpo' => [
                'Etim Ekpo 1', 'Etim Ekpo 11', 'Etim Ekpo 111', 'Etim Ekpo 1V', 'Etim Ekpo V',  'Etim Ekpo V1', 'Etim Ekpo V11', 'Etim Ekpo V111', 'Etim Ekpo IX', 'Etim Ekpo X'
            ],
            'Etinan' => [
                'Etinan Urban 1', 'Etinan Urban 11', 'Etinan Urban 111', 'Etinan Urban 1V', 'Etinan Urban V', 'Northern Iman 1', 'Northern Iman 11', 'Southern Iman 1', 'Southern Iman 11', 'Southern Iman 111', 'Southern Iman 1V'
            ],
            'Ibeno' => [
                'Ibeno 1', 'Ibeno 11', 'Ibeno 111', 'Ibeno 1V', 'Ibeno V', 'Ibeno VI', 'Ibeno V11', 'Ibeno V111', 'Ibeno IX', 'Ibeno X'
            ],
            'Ibesikpo Asutan' => [
                'Asutan 1', 'Asutan 11', 'Asutan 111', 'Asutan 1V', 'Asutan V', 'Ibesikpo 1', 'Ibesikpo 11', 'Ibesikpo 111', 'Ibesikpo 1V', 'Ibesikpo V'
            ],
            'Ibiono Ibom' => [
                'Ibiono Central 1', 'Ibiono Central 11', 'Ibiono Eastern 1', 'Ibiono Eastern 11', 'Ibiono Northern 1', 'Ibiono Northern 11', 'Ibiono Southern 1', 'Ibiono Southern 11', 'Ibiono Western 1', 'Ibiono Western 11', 'Ikpanyav'
            ],
            'Ika' => [
                'Achan Ika', 'Achan 11', 'Achan 111', 'Ito 1', 'Ito 11', 'Ito 111', 'Odoro 1', 'Odoro 11', 'Urban 1', 'Urban 11'
            ],
            'Ikono' => [
                'Ediene 1', 'Ediene 11', 'Ikono Middle 1', 'Ikono Middle 11', 'Ikono Middle 111', 'Ikono Middle 1V', 'Ikono South', 'Itak', 'Ndiya/Ikot Idana', 'Nkwot 1', 'Nkwot 11'
            ],
            'Ikot Abasi' => [
                'Edemaya 1', 'Edemaya 11', 'Edemaya 111', 'Ikpa Ibekwe 1', 'Ikpa Ibekwe 11', 'Ikpa Nung Asang 1', 'Ikpa Nung Asang 11', 'Ukpum Ete 1', 'Ukpum Ete 11', 'Ukpum Okon'
            ],
            'Ikot Ekpene' => [
                'Ikot Ekpene 1', 'Ikot Ekpene 11', 'Ikot Ekpene 111', 'Ikot Ekpene 1V', 'Ikot Ekpene V', 'Ikot Ekpene V1', 'Ikot Ekpene V11', 'Ikot Ekpene V111', 'Ikot Ekpene IX', 'Ikot Ekpene X', 'Ikot Ekpene X1',
            ],
            'Ini' => [
                'Ikono North 1', 'Ikono North 11', 'Ikono North 111', 'Ikpe 1', 'Ikpe 11', 'Itu Mbonuso', 'Iwerre', 'Nkari', 'Odoro Ukwok', 'Usuk Ukwok',
            ],
            'Itu' => [
                'East Itam 1', 'East Itam 11', 'East Itam 111', 'East Itam 1V', 'East Itam V', 'Mbiase/Ayadehe', 'Oku Iboku', 'West Itam 1', 'West Itam 11', 'West Itam 111'
            ],
            'Mbo' => [
                'Ebughu 1', 'Ebughu 11', 'Efiat 1', 'Efiat 11', 'Enwang 1', 'Enwang 11', 'Ibaka', 'Uda 1', 'Uda 11', 'Udesi',
            ],
            'Mkpat Enin' => [
                'Ibiaku 1', 'Ibiaku 11', 'Ibiaku 111', 'Ikpa Ibom 1', 'Ikpa Ibom 11', 'Ikpa Ibom 111', 'Ikpa Ibom 1V', 'Ikpa Ikono 1', 'Ikpa Ikono 11', 'Ikpa Ikono 111', 'Ukpum Minya 1', 'Ukpum Minya 11', 'Ukpum Minya 111', 'Ukpum Minya 1V',
            ],
            'Nsit Atai' => [
                'Eastern Nsit 1', 'Eastern Nsit 11', 'Eastern Nsit 111', 'Eastern Nsit 1V', 'Eastern Nsit V', 'Eastern Nsit V1', 'Eastern Nsit V11', 'Eastern Nsit V111', 'Eastern Nsit IX', 'Eastern Nsit X',
            ],
            'Nsit Ibom' => [
                'Asang 1', 'Asang 11', 'Asang 111', 'Asang 1V', 'Asang V', 'Mbaiso 1', 'Mbaiso 11', 'Mbaiso 111', 'Mbaiso 1V', 'Mbaiso V',
            ],
            'Nsit Ubium' => [
                'Ibiakpan Obotim 1', 'Ibiakpan/Obotim 11', 'Itreto', 'Ndiya', 'Ubium North 1', 'Ubium North 11', 'Ubium North 111', 'Ubium South 1', 'Ubium South 11', 'Ubium South 111',
            ],
            'Obot Akara' => [
                'Ikot Abia 1', 'Ikot Abia 11', 'Ikot Abia 111', 'Nto Edino 1', 'Nto Edino 11', 'Nto Edino 111', 'Nto Edino 1V', 'Obot Akara 1', 'Obot Akara 11', 'Obot Akara 111',
            ],
            'Okobo' => [
                'Akai/Mbukpo/Udung', 'Ekeya', 'Eweme 1', 'Eweme 11', 'Nung Atai/Ube 1', 'Nung Atai/Ube 11', 'Offi 1', 'Offi 11', 'Okopedi 1', 'Okopedi 11',
            ],
            'Onna' => [
                'Awa 1', 'Awa 11', 'Awa 111', 'Awa 1V', 'Nung Idem 1', 'Nung Idem 11', 'Oniong East 1', 'Oniong East 11', 'Oniong East 111', 'Oniong West 1', 'Oniong West 11', 'Oniong West 111',
            ],
            'Oron' => [
                'Oron Urban 1', 'Oron Urban 11', 'Oron Urban 111', 'Oron Urban 1V', 'Oron Urban V', 'Oron Urban V1', 'Oron Urban V11', 'Oron Urban V111', 'Oron Urban IX', 'Oron Urban X',
            ],
            'Oruk Anam' => [
                'Abak Midim 1', 'Abak Midim 11', 'Abak Midim 111', 'Abak Midim 1V', 'Ekparakwa', 'Ibesit', 'Ibesit/Nung Ikot 1', 'Ibesit/Nung Ikot 11', 'Ikot Ibritam 1', 'Ikot Ibritam 11', 'Ndot/Ikot Okoro 1', 'Ndot/Ikot Okoro 11', 'Ndot/Ikot Okoro 111',
            ],
            'Udung Uko' => [
                'Udung Uko 1', 'Udung Uko 11', 'Udung Uko 111', 'Udung Uko 1V', 'Udung Uko V', 'Udung Uko V1', 'Udung Uko V11', 'Udung Uko V111', 'Udung Uko IX', 'Udung Uko X',
            ],
            'Ukanafun' => [
                'Northern Afaha 1', 'Northern Afaha 11', 'Northern Ukanafun 1', 'Northern Ukanafun 11', 'Southern Afaha Adat Ifang 1', 'Southern Afaha/Adat Ifang 11', 'Southern Afaha Adat Ifang 111', 'Southern Afaha Adat Ifang 1V', 'Southern Ukanafun 1', 'Southern Ukanafun 11', 'Ukanafun Urban',
            ],
            'Uruan' => [
                'Central Uruan 1', 'Central Uruan 11', 'Central Uruan 111', 'Northern Uruan 1', 'Northern Uruan 11', 'Southern Uruan 1', 'Southern Uruan 11', 'Southern Uruan 111', 'Southern Uruan IV', 'Southern Uruan V', 'Southern Uruan V1',
            ],
            'Urue Offong Oruko' => [
                'Oruko 1', 'Oruko 11', 'Oruko 111', 'Oruko 1V', 'Oruko V', 'Urue Offong 1', 'Urue Offong 11', 'Urue Offong 111', 'Urue Offong 1V', 'Urue Offong V',
            ],
            'Uyo' => [
                'Etoi 1', 'Etoi 11', 'Ikono 1', 'Ikono 11', 'Offot 1', 'Offot 11', 'Oku 1', 'Oku 11', 'Uyo Urban 1', 'Uyo Urban 11', 'Uyo Urban 111',
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
