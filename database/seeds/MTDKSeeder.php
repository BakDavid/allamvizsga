<?php

use Illuminate\Database\Seeder;

class MTDKSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);

        //Kategoriak
        DB::table('categories')->insert([
            'category_name' => 'Informatika',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Számítástechnika',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Épitőmérnök',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Automatizálás',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Biztonságtechnika',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Villamosmérnök',
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Földmérő és földrendező mérnök',
        ]);
        //Kategoriak vege

        //Konferencia
        DB::table('conferences')->insert([
            'name' => 'MTDK konferencia',
            'application_start' => '2019-04-07',
            'application_deadline' => '2019-04-11',
            'abstract_upload_deadline' => '2019-04-20',
            'thesis_upload_deadline' => '2019-04-20',
            'review_deadline' => '2019-04-27',
            'conference_day' => '2019-05-02',
            'room' => null,
            'university' => 'Temesvári Műszaki Egyetem',
            'address' => 'Temesvári Műszaki Egyetem',
            'city' => 'Temesvar',
            'country' => 'Romania',
            'zipcode' => null,
            'comment' => null,
            'conference_sponsor_id' => null,
            'participants' => 0,
            'max_participants' => null,
        ]);
        //Konferencia vege

        //User seeder part
        factory(App\User::class)->create([
            'first_name' => 'Bak',
            'last_name' => 'David',
            'email' => 'bak.david96@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
        ]);

        //207
        factory(App\User::class)->create([
            'first_name' => 'Oláh',
            'last_name' => 'Kátai Péter',
            'email' => 'katai@yahoo.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Informatika',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Reaction time measuring and enhancing system',
            'key_words' => null,
            'abstract' => 'Bizonyos tev´ekenys´egeink igencsak megko¨vetelhetik, hogy j´o koordin´acio´val, reﬂex id˝ovel, o¨szpontos´ıt´assal, ´ebers´eggel rendelkezzu¨nk, ´ıgy, ezen k´epess´egek fejleszt´ese jo´ kihata´ssal lehet ezen tev´ekenys´egeink kimenet´ere, illetve ﬁzikai vagy aka´r ment´alis k´eszs´egeink jav´ıt´asa´ra.
Mindemellett fontos hogy a k´eszs´egfejleszt´es olyan m´odon to¨rt´enjen, hogy tudjuk azt szem´elyes ig´enyeinkre, k¨ornyezetu¨nkre szabni, valamint az adott u¨gyess´egi szintu¨nkho¨z alak´ıtani a neh´ezs´eg´et az elv´egzend˝o mu¨veletsornak ilyen mo´don megl´evo˝ hata´rainkat feszegetve ´es kitolva, a gyorsabb fejlo˝d´es ´erdek´eben.
Rendszeru¨nk mindezen c´elkitu˝z´esekkel igyekszik, hogy felhaszn´alo´ja´nak a leheto˝ legrugalmasabb, legsokoldalu´bb felhaszna´l´ast nyu´jtsa, hogy minden koroszta´ly haszn´alhassa azt termett˝ol, mozga´si korl´atokto˝l fu¨ggetlenu¨l.
A megvalo´s´ıta´s sor´an egy szenzorh´alo´zatot hoztunk l´etre, amely k¨onnyen konﬁgura´lhato´, illetve egy telefonos applik´acio´val vez´erelheto˝, ´ıgy lehet˝ov´e t´eve hogy monitoriza´lni tudjuk a felhaszna´l´o teljes´ıtm´eny´et ´es fejlo˝d´es´et.
A vezet´ek n´elku¨li kapcsolatnak ko¨sz¨onhet˝oen szem´elyreszabhat´o elrendez´est, illetve neh´ezs´egi szintet biztos´ıt, hogy mindenki megtala´lhassa a sz´ama´ra legmegfelel˝obb fejlo˝d´esi ritmust.
Arra t¨orekedtu¨nk hogy az emberek sza´m´ara ko¨nnyen beszerezhet˝o lehessen aza´ltal, hogy a rendszerkomponensek kiv´alaszta´sa´n´al a ko¨lts´eghat´ekonysa´gnak nagy jelent˝os´eget tulajdon´ıtottunk.
Emellett a rendszer konﬁgura´la´s´at leegyszeru˝s´ıtettu¨k, ´es az auton´omia´ja´t a leheto˝ legnagyobbra no¨veltu¨k, hogy a felhaszna´l´as se okozzon neh´ezs´eget. Kulcsszavak: reﬂex, koordina´cio´, fejlo˝d´es, szenzorha´lo´zat, vezet´ek n´elku¨li.',
            'thesis_name_upload' => '207.pdf',
            'comment' => null,
            'category_id' => '1',
            'advisor_name' => 'Dr. Vajda Tamás',
            'advisor_email' => 'vajda@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '2',
            'submission_id' => '1',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '1',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Oláh',
            'last_name' => 'Kátai Péter',
            'email' => 'katai@yahoo.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Informatika',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Kovács',
            'last_name' => 'Attila',
            'email' => 'kovacs@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '1',
            'cooperator_id' => '1',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '1',
            'cooperator_id' => '2',
        ]);
        //207 vege

        //208
        factory(App\User::class)->create([
            'first_name' => 'Mészáros',
            'last_name' => 'Adél',
            'email' => 'meszaros@yahoo.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Kézfej vénák felismerése félig automatikus módszerekkel',
            'key_words' => 'képfeldolgozás, véna szegmentálás, infravörös képalkotás, képszűrés, hisztogram kiegyenlítés',
            'abstract' => 'A folyamatosan fejlődő képalkotó eljárások a modern orvosi gyakorlat egyik nélkülözhetetlen eszközévé váltak. Az orvosi képek feldolgozása, ezen belül a vénák és artériák képekből való meghatározása, kinyerése egy igényes és fontos feladat. A felületi véredények látható spektrumban alig, leginkább infravörös sugárzáson alapuló képalkotással válnak szemmel láthatóvá. Az érrendszer vizsgálata felhasználható az orvoslásban és személyazonosításban egyaránt. Dolgozatomban és a fejlesztett applikációban az NCUT (North China Universiti of Technology) által közzétett, nyilvános képadatbázist dolgozzuk fel, amely 2040 NIR (near infrared) képet tartalmaz 102 személy kézfejéről. A kutatás célja a képadatbázis bejelölése és az erek rajzolatának kinyerése bináris kép formájában. A feldolgozási folyamatot három szakaszra osztottuk fel: előfeldolgozás, szegmentálás és kiértékelés. Az előfeldolgozás feladata a képiinformáció egységesítése. E célból a következő művelet sorrend bizonyult a legmegfelelőbbnek: a zajszűrés, megvilágítás kiegyenlítés és kontrasztnövelés. A szegmentálást különböző szűrőket alkalmazva kísérletek alapján valósítottuk meg. A szegmentálási eredmény kiértékelése szemmel történt, mivel ezeken a képeken az erek nincsenek bejelölve. Tehát összehasonlítás végett ráillesztettük a kapott eredmény szkeletonját az eredeti képekre. Az erek szegmentálása érdekében többféle szűrést és képfeldolgozási algoritmust szükséges alkalmazni. A jelen dolgozatban bemutatásra kerülnek az alkalmazott szűrők és a megfelelő paraméterek értékeinek hatása a feldolgozandó képekre. Továbbá meghatároztuk a szűrők megfelelő alkalmazási sorrendjét, a lehető legjobb szegmentálási eredmény elérése érdekében. A képfeldolgozás programot Java nyelven fejlesztettük, felhasználva az ImageJ programcsomagot és a környezet által felkínált függvényeket, osztályokat. Az így létrehozott Plugins-okat sikeresen be tudtuk építeni az ImageJ keretrendszer környezetébe.',
            'thesis_name_upload' => '208.pdf',
            'comment' => null,
            'category_id' => '2',
            'advisor_name' => 'Dr. adj. Lefkovits László',
            'advisor_email' => 'lefko@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '3',
            'submission_id' => '2',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '2',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Mészáros',
            'last_name' => 'Adél',
            'email' => 'meszaros@yahoo.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '2',
            'cooperator_id' => '3',
        ]);
        //208 vege

        //209
        factory(App\User::class)->create([
            'first_name' => 'Kovács',
            'last_name' => 'Attila',
            'email' => 'kovacs@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('submissions')->insert([
            'title' => 'HuGo',
            'key_words' => null,
            'abstract' => 'Napjainkban a robotika igencsak felt¨orekv˝oben van ´es mindinka´bb ´eletu¨nk r´esz´et k´epezi, ilyen m´odon a lehet˝os´egek igencsak nagy t´arha´za´t ta´rva el´enk.
Ma m´ar sok teru¨leten tala´lhatunk olyan robotokat, amelyek valamilyen funkcio´t t¨oltenek be annak ´erdek´eben, hogy leegyszeru˝s´ıts´ek tennivalo´inkat vagy olyan feladatokat v´egezzenek el, amire neku¨nk nincs ido˝nk vagy leheto˝s´egu¨nk.
Mindezek ellen´ere bizonyos szerepko¨ro¨k beto¨lt´es´ere, fel´ep´ıt´esu¨nkbo˝l ado´d´oan, m´egis mi, emberek lenn´enk a legalkalmasabbak, viszont kell tala´lnunk egy mo´dot, hogy helyettes´ıteni tudjuk magunkat ezeken a teru¨leteken.
Az emberszeru˝ (humanoid) robotok ilyen m´odon to¨rt´eno˝ alkalmaza´sa leheto˝v´e tudja tenni ezt sza´munkra, ha ezen robotoknak a tervez´es´et˝ol eg´eszen a kivitelez´es´eig arra t¨orekszu¨nk, hogy a leheto˝ legto¨bb emberi k´epess´eggel ruh´azzuk fel, amelyek szu¨ks´egesek lehetnek.
Hogy ez a szeml´elet min´el t¨obb emberhez eljuthasson, a megval´os´ıta´s sora´n olyan eszko¨z¨ok ´es mo´dszerek felhaszn´ala´s´at va´lasztottuk, amelyek a legto¨bbu¨nk sza´m´ara el´erhet˝oek lehetnek.
A HuGo n´evre hallgat´o robot tervez´es´en´el ezeket a krit´eriumok voltak ﬁgyelembe v´eve, ´es u´gy alkottuk meg, hogy rendelkezzen az emberi egyensu´lyi, l´ata´si ´erz´ekel´eshez hasonlo´ ”´erz´ekekkel”, k´epes legyen emberszeru˝ mozga´sforma´kra ´es rendelkezzen mindazon szabads´agfokokkal amellyel egy ember is.
Mindezt szervomotorok, ku¨lo¨nf´ele szenzorok felhaszna´la´s´aval ´es FPGA alapu´ vez´erl´essel megvalo´s´ıtva.
Kulcsszavak: robotika, humanoid, FPGA, szenzorok, mozga´sforma.',
            'thesis_name_upload' => '208.pdf',
            'comment' => null,
            'category_id' => '2',
            'advisor_name' => 'Dr. Brassai S´andor Tiham´er ',
            'advisor_email' => 'tihi@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '4',
            'submission_id' => '3',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '3',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Kovács',
            'last_name' => 'Attila',
            'email' => 'kovacs@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '3',
            'cooperator_id' => '4',
        ]);
        //209 vege

        //210
        factory(App\User::class)->create([
            'first_name' => 'Ugrai',
            'last_name' => 'M´arton',
            'email' => 'ugrai@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Autonóm vonalkövető és útvonaltervező mobilis robot tervezése és kivitelezése',
            'key_words' => 'mobile robot, linefollower, graph, control, QRcode',
            'abstract' => 'Napjainkban a k¨ozleked´es forradalm´at ´elju¨k. Ez igaz t¨obb szempontb´ol is mivel a technol´ogia rohamos fejl˝od´es´evel egyre t¨obb elektromos hajt´asu´ aut´o jelenik meg a piacon valamint egyre t¨obb gy´art´ot foglalkoztat az ¨onvezet˝o aut´o fogalma. Val´osz´ınu˝leg ez ihlette a nagyszebeni Continental nevu¨ c´eget is, amikor 2017 december k¨ozep´en kihirdette a 2018as mu˝szaki verseny´et. A verseny l´enyege r¨oviden az volt, hogy a csapatoknak ´ep´ıteniu¨k kellett egy-egy olyan auton´om j´armu˝vet, ami k´epes egy vonalat (utat) k¨ovetni valamint u´tel´agaz´asok eset´eben d¨ont´eseket hozni egy r¨ovidebb u´tvonal, vagy k¨oztes pontok ´erint´ese ´erdek´eben, ahol az ´allom´asokat vonalra ragasztott QR k´odok jel¨olt´ek. Dolgozatunk ezen feladatok teljes´ıt´es´enek sor´an akadt kih´ıv´asokat, probl´em´akat ´es megold´asokat tartalmazza, valamint, hogy hogyan pr´ob´altunk k¨olts´eghat´ekonyan olyan robotot ´ep´ıteni, amely eleget tesz a k¨ovetelm´enyeknek. B´ar bel´atjuk, hogy az ´altalunk haszn´alt m´odszerek csak r´eszben alkalmazhat´oak az aut´oiparban, ¨osszess´eg´eben ´eszrevehet˝o ez a verseny ´es az aut´oipart napjainkban foglalkoztat´o probl´ema k¨ozo¨tti p´arhuzam. Kulcsszavak: mobilis robot, vonalk¨oveto˝, gr´afok, vez´erl´es, QR k´od.',
            'thesis_name_upload' => '210.pdf',
            'comment' => null,
            'category_id' => '2',
            'advisor_name' => 'Dr.Domokos József',
            'advisor_email' => 'domokos@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '5',
            'submission_id' => '4',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '4',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Ugrai',
            'last_name' => 'M´arton',
            'email' => 'ugrai@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Zsigmond',
            'last_name' => 'Andor Attila',
            'email' => 'zsigmond@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Automatizálás',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '4',
            'cooperator_id' => '5',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '4',
            'cooperator_id' => '6',
        ]);
        //210 vege

        //211
        factory(App\User::class)->create([
            'first_name' => 'Ambarus',
            'last_name' => 'Ádám',
            'email' => 'ambarus@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Augmentált valóságon alapuló mobilos játék Vuforia segítségével',
            'key_words' => 'Virtuális valóság, Kiterjesztett valóság, Unity, Vuforia, SDK ',
            'abstract' => 'Napjainkban a legfontosabb eszközeink közé tartozik a telefonunk. A fejlett technológiának köszönhetően az egyszerűbb teendőinket már a telefonjainkon is elvégezhetjük, nem szükséges számítógép elé ülnünk. Ilyen teendő lehet a böngészés, elektronikus levelek küldése és fogadása, vagy akár a játszás. A technológia rohamos fejlődésével a szórakoztatóipar is rákényszerül arra, hogy újabb és újabb módszerekkel kápráztassák el a felhasználókat. A dolgozat egy olyan mobilos játék megvalósítását tűzte ki célul, amely a valós környezetet tudja kibővíteni, díszíteni virtuális elemekkel.  Ezzel a felhasználó egyfajta kiterjesztett, augmentált valóságot fog érzékelni. A játék játszásához szükséges egy kompatibilis  okostelefon, egy gaming kontroller és egy Virtual Reality (VR) szemüveg. A telefont hozzá kell illeszteni a VR szemüveghez, és feltelepíteni a játékot. Mivel a telefon kijelzője így nem elérhető, a játék irányításához a kontrollert csatlakoztatjuk a telefonhoz. A felhasználó a játék használatakor a telefon kameráján keresztül a fejére helyezett VR szemüvegben a való világot látja, amelyhez hozzáadódnak a virtuális elemek: egy pálya, és karakterek. Ezeket az elemeket több szögből lehet megfigyelni. A szemüveg és a telefon kombinációjával nagyobb, valósághű élményt tud nyújtani a játék, a klasszikusokhoz viszonyítva. Az alkalmazás megvalósításához a Unity játék motort, illetve a Vuforia SDK-t használtuk.',
            'thesis_name_upload' => '211.pdf',
            'comment' => null,
            'category_id' => '2',
            'advisor_name' => 'Dr. Szántó Zoltán',
            'advisor_email' => 'szanto@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '6',
            'submission_id' => '5',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '5',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Ambarus',
            'last_name' => 'Ádám',
            'email' => 'ambarus@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Számítástechnika',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '5',
            'cooperator_id' => '7',
        ]);
        //211 vege

        //212
        factory(App\User::class)->create([
            'first_name' => 'Bács',
            'last_name' => 'Béla',
            'email' => 'bacs@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'UT Cluj',
            'department' => 'Épitőmérnök',
        ]);

        DB::table('submissions')->insert([
            'title' => 'FÖLDRENGÉSBIZTOS BALSAFATORONY OPTIMALIZÁLÁSA ÉS VISELKEDÉSÉNEK ELŐREJELZÉSE',
            'key_words' => null,
            'abstract' => 'Azokban a régiókban, ahol a földrengés előfordulásának esélye magas, komoly kihívás egy felhőkarcoló tervezése. Emellett napjaink modern épületei esetében, az egyik fő szempont a fenntarthatóság. Ezen elveket követve született meg a Mirage Tower, amelyet a Kolozsvári Műszaki Egyetem csapata tervezett a 2019-ben, Kanadában, Vancouverben megszervezett Seismic Design Competition nemzetközi vetélkedőre. A verseny fő kihívása egy, a rázóasztalon szimulált földrengéseknek ellenálló balsafa-szerkezet tervezése, optimalizálása és megépítése. A dolgozat az építészeti és szerkezeti koncepció mellett a statikai váz számítógépes modelljének kalibrálási folyamatát ás viselkedésének előrejelzését is taglalja. ',
            'thesis_name_upload' => '212.pdf',
            'comment' => null,
            'category_id' => '3',
            'advisor_name' => 'dr. Moldovan Paul és dr. Prodan Ovidiu',
            'advisor_email' => 'moldovan@ut.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '7',
            'submission_id' => '6',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '6',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Bács',
            'last_name' => 'Béla',
            'email' => 'bacs@gmail.com',
            'telephone' => '0765656565',
            'university' => 'UT Cluj',
            'department' => 'Épitőmérnök',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Gedő',
            'last_name' => 'Zsolt',
            'email' => 'gedo@gmail.com',
            'telephone' => '0765656565',
            'university' => 'UT Cluj',
            'department' => 'Műépítészet és városrendezés',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Lokodi',
            'last_name' => 'Mária',
            'email' => 'lofodi@gmail.com',
            'telephone' => '0765656565',
            'university' => 'UT Cluj',
            'department' => 'Műépítészet és városrendezés',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Nagy',
            'last_name' => 'Örs',
            'email' => 'ors@gmail.com',
            'telephone' => '0765656565',
            'university' => 'UT Cluj',
            'department' => 'Épitőmérnök',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '6',
            'cooperator_id' => '8',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '6',
            'cooperator_id' => '9',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '6',
            'cooperator_id' => '10',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '6',
            'cooperator_id' => '11',
        ]);
        //212 vege

        //214
        factory(App\User::class)->create([
            'first_name' => 'Zakariás',
            'last_name' => 'Attila',
            'email' => 'zakarias@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Automatizálás',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Számítógép vezérelt hőgradiens rendszer tervezése és kivitelezése',
            'key_words' => 'hőgradiens, optimális csíráztatás, hőmérséklet szabályozás',
            'abstract' => 'A XXI. században a kertészmérnökök munkáját nagymértékben megkönnyíti egy termo gradiens asztal, amellyel megfigyelhető a növények fejlődése különböző hőmérsékleteken. Így könnyen meghatározható az egyes növényfajok optimális környezeti hőmérséklete. Egy készen megvásárolható asztal ára nagyon magas, akár több tízezer eurót is elérheti. Innen jött az ötlet, hogy tervezzünk es készítsünk egy saját tervezésű, nagyságrendekkel olcsóbb berendezést, amellyel az intézményünkben tanuló kertészmérnökök dolgát megkönnyítenénk.',
            'thesis_name_upload' => '214.pdf',
            'comment' => null,
            'category_id' => '4',
            'advisor_name' => 'Dr. Papp Sándor',
            'advisor_email' => 'papp@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '8',
            'submission_id' => '7',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '7',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Zakariás',
            'last_name' => 'Attila',
            'email' => 'zakarias@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Automatizálás',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'László',
            'last_name' => 'Tamás',
            'email' => 'laszlo@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Automatizálás',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Krizbai',
            'last_name' => 'Csaba',
            'email' => 'krizbai@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Automatizálás',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Szabó',
            'last_name' => 'Tamás',
            'email' => 'szabo@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Automatizálás',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '7',
            'cooperator_id' => '12',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '7',
            'cooperator_id' => '13',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '7',
            'cooperator_id' => '14',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '7',
            'cooperator_id' => '15',
        ]);
        //214 vege

        //217
        factory(App\User::class)->create([
            'first_name' => 'Sándor',
            'last_name' => 'Barnabás',
            'email' => 'sandor@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Biztonságtechnika',
        ]);

        DB::table('submissions')->insert([
            'title' => 'VEZETÉK NÉLKÜLI HÁLÓZATOK FELDERÍTÉSE UAV SEGÍTSÉGÉVEL ',
            'key_words' => 'sérülékenységvizsgálat, vezeték nélküli hálózat, warflying, UAV',
            'abstract' => 'Dolgozatom célja az illetéktelen vezeték nélküli hálózati hozzáférési pontok feltérképezése UAV eszközről kritikus infrastruktúrák területén. A hipotézis felállításától kezdve bemutatom a rendszer megtervezésén át, a mérések kivitelezéséig a folyamatokat, a mérési eredményeket, majd az informatikai biztonsági javaslataimat.
Kutatásomhoz egy saját tervezésű Wi-Fi jel feltérképezésére alkalmas rendszert terveztem, majd építettem, mellyel a 2,4 GHz és az 5 GHz szabvány vezeték nélküli tartomány hálózati jeleit térképeztem fel, majd vizsgáltam meg.
A méréshez egy hatrotoros UAV eszközre rögzítettem a mérőegységet, melyet egy Raspberry Pi miniszámítógép vezérelt, a vezeték nélküli jeleket egy Alfa AWUS036NEH és egy Alfa AWUS036ACH Wi-Fi kártya vette, a lokalizációt pedig egy Adafruit GPS modul végezte. A repülés során keletkezett adatokat a Kismet Wireless célszoftver segítségével elemeztem, majd Google Maps térképre leképeztem a GPS koordináták alapján.
A kapott eredményeket és tapasztalatokat felhasználva a kutatás folytatásaként célom, hogy egy olyan rendszer fejlesztése, amivel az UAV-k önállóan működve fel tudják térképezni az előre betáplált területeket, miközben akár párhuzamosan egyéb mérések is kivitelezhetők legyenek. Ezzel is kiterjesztve az informatikai védelem határait és fejlesztve a fizikai biztonsági szolgálat hatékonyságát, segítve ezzel a telephelyet őrző biztonsági járőrszolgálat munkáját.',
            'thesis_name_upload' => '217.pdf',
            'comment' => null,
            'category_id' => '5',
            'advisor_name' => 'Prof. Dr. Kovács Tibor,Dr. Horváth Tamás,Váczi Dániel és Őszi Arnold',
            'advisor_email' => 'kovacs_tibor@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '9',
            'submission_id' => '8',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '8',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Sándor',
            'last_name' => 'Barnabás',
            'email' => 'sandor@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Biztonságtechnika',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '8',
            'cooperator_id' => '16',
        ]);
        //217 vege

        //220
        factory(App\User::class)->create([
            'first_name' => 'Vajdovich',
            'last_name' => 'Ádám',
            'email' => 'vajdovich@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Óbudai Egyetem',
            'department' => 'Villamosmérnök',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Lakóegységek és közintézmények tisztított víz felhasználást csökkentő többciklusú vízhasznosítási rendszer kifejlesztését megcélzó kutatás',
            'key_words' => null,
            'abstract' => 'Napjainkban egyre fokozódó problémát jelent a klímaváltozás, amely új kihívások elé állítja az emberiséget a jelenben és a jövőben egyaránt. A Föld legkülönbözőbb pontjain évről évre egyre sűrűbben találkozhatunk a víz szélsőséges megnyilvánulásaival. Egyes helyeken árvizek tombolnak, míg másutt aszályok pusztítanak. Erről a 2018.-as év is tanúbizonyságot tett, elég csak az Indiai árvizekre vagy az Ausztráliában lévő aszályra gondolni. Nem véletlen, hogy az ENSZ a 2018-2028-as időszakot a Víz és a Fenntartható Fejlődés Nemzetközi Évtizedévé nyilvánította.
"Víz! Se ízed nincs, se zamatod, nem lehet meghatározni téged, megízlelnek, anélkül, hogy megismernének. Nem szükséges vagy az életben: maga az élet vagy.” írta Saint-Exupéry.
Különösen súlyos következményekkel jár bolygónk édesvíz készleteinek csökkenése szerte a világon, hiszen az édesvíz létünk alapja. Társadalmunk számos más fontos eleme ettől függ, mint például, a gazdasági gyarapodás, egészségünk, biztonságunk, élelmiszer- és energiaellátásunk, munkahelyeink. Édesvíz készleteink csökkenéséhez azonban a klímaváltozás mellett hozzájárul a rekord sebességű népességnövekedés és az emberi tényező, azaz a tiszta víz pazarlása.
Kutatásom során arra keresem a megoldást, hogyan lehetséges vízfogyasztásunk csökkentése, milyen kiaknázatlan lehetőségek állnak rendelkezésre ennek megvalósításához, illetve hogyan vonható be az ember ebbe a folyamatba, mint aktív résztvevő.',
            'thesis_name_upload' => '220.pdf',
            'comment' => null,
            'category_id' => '6',
            'advisor_name' => 'Sándor Tamás',
            'advisor_email' => 'sandor_tamas@obuda.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '10',
            'submission_id' => '9',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '9',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Vajdovich',
            'last_name' => 'Ádám',
            'email' => 'vajdovich@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Óbudai Egyetem',
            'department' => 'Villamosmérnök',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '9',
            'cooperator_id' => '17',
        ]);
        //220 vege

        //223
        factory(App\User::class)->create([
            'first_name' => 'Kis',
            'last_name' => 'Bálint',
            'email' => 'kis_b@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Óbudai Egyetem',
            'department' => 'Villamosmérnök',
        ]);

        DB::table('submissions')->insert([
            'title' => 'FESTÉKÉRZÉKENYÍTETT NAPELEM CELLA VILLAMOS JELLEGGÖRBÉINEK KÍSÉRLETI VIZSGÁLATA A MESTERSÉGES MEGVILÁGÍTÁS TÍPUSÁNAK ÉS SPEKTRUMÁNAK FÜGGVÉNYÉBEN',
            'key_words' => null,
            'abstract' => 'Napjainkban rohamos tempóban fejlődnek és válnak elérhetővé a különböző fajtájú, típusú, és felépítésű napelemek, amelyek egyre jobb és jobb hatásfokkal rendelkeznek. A hatásfok szinte az a legfontosabb tényező egy egyszerű felhasználó számára, amelyet a napelem anyaga és a beeső fény hullámhossza együttesen befolyásol. Korunkban egy új, ígéretesnek tűnő technológia kémiai festékek és villamos elektródák kombinációjának villamosenergia termelésre való használata: ezek a festékérzékenyített napelem cellák (angol nevük után rövidítéssel DSSC, Dye Sensitised Solar Cells).
Célomul tűztem ki egy festékérzékenyített napelem cella fontosabb villamos paramétereinek, - úgy, mint villamos feszültség, elektromos áram és a megvilágító fényforrás fénye közötti kapcsolat - kísérleti vizsgálatát. Vizsgálataim céltárgyaként a svájci Solaronix® cégtől vásárolt napelem cellát használtam. Kísérleti módszerrel vizsgáltam a napelem villamos kapocsfeszültségét és elektromos áramát, a megvilágító fényforrás típusának függvényében (HQI és halogén). Ezt követően fényforrás típusonként, szűrőkkel, eltérő spektrumú megvilágításokat létrehozva további méréseket végeztem. A kapott adatokból jelleggörbéket készítettem. A jelleggörbéket a fényforrás típusának, valamint spektrumának függvényében külön-külön tanulmányoztam, majd következtetéseket vontam le a mérési adatok ismeretében. Vizsgálataim választ adtak arra, hogy a napelem cella villamos paraméterei függhetnek-e a DSSC cellát érő fényforrás típusától, illetve spektrumától. A választ dolgozatomban és elődadásomban adom meg.',
            'thesis_name_upload' => '223.pdf',
            'comment' => null,
            'category_id' => '6',
            'advisor_name' => 'Dr. Rácz Ervin Ph.D. és Hörömpöli Balázs',
            'advisor_email' => 'racz_ervin@obuda.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '11',
            'submission_id' => '10',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '10',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Kis',
            'last_name' => 'Bálint',
            'email' => 'kis_b@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Óbudai Egyetem',
            'department' => 'Villamosmérnök',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '10',
            'cooperator_id' => '18',
        ]);
        //223 vege

        //234
        factory(App\User::class)->create([
            'first_name' => 'Czakó',
            'last_name' => 'Bence Géza',
            'email' => 'czako@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Óbudai Egyetem',
            'department' => 'Automatizálás',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Daganatosbetegségekkezelésételősegítő robusztusszabályozásimódszerek kidolgozása',
            'key_words' => null,
            'abstract' => "Arákosmegbetegedéseknapjainkegyikvezet˝ohalálozásiokavilágszerte.AzEurópaiUniónbelül becslések szerint 2016-ban 1359500 ember haláláért tehet˝o felel˝ossé valamilyen rákos megbetegedés, míg az Egyesült Államokban ez a szám közelít˝oleg 595690 f˝o [1],[2]. A problémát súlyosbítja, hogy ezek a számok évr˝ol évre csak n˝onek, tehát a konvencionális megoldások nem képesek áttörést elérni. Az orvostudomány számára nagy kihívást jelent a betegség okainak a feltárása, ugyanakkor számos megoldás született a rákos megbetegedések kezelésére. Az orvosi gyakorlatban három különböz˝o módszer terjedt el, melyek a sebészeti beavatkozás, kemoterápia, valamint a sugárkezelés. A felsorolt kezelési formák ugyanakkor az esetek túlnyomó többségében valamilyen mellékhatással/mellékhatásokkal járnak, melyek akár a páciens életét is súlyosan veszélyeztethetik. Az orvostudomány fejl˝odésével napjainkban megjelent egy mer˝oben más megközelítés, a célzott molekuláris terápiák (targeted molecular therapies) csoportja, melyek mellékhatásai nem befolyásolják a páciens életét drasztikusan. Ilyen módszerek például a rák immunterápia, mely a páciens immunrendszerének aktiválásával pusztítja el a rákos sejteket, valamint az antiangiogenikus terápia, mely blokkolja a tumor növekedéséhez elengedhetetlen érképz˝odés biológiai komponenseit [3], [4]. Az említett módszereknek ugyanakkor van egy óriási hátulüt˝oje, mégpedig a kezelési költség, ami miatt nehézkesen terjednek el az orvosi gyakorlatban.Napjainkban egyre gyakrabban fordul el˝o a klasszikus természettudományok és a mérnöki módszerek együttes alkalmazása bizonyos problémák esetén, mely alól a biológia sem képez kivételt. Az egészségügyi mérnöki terület ( biomedical engineering) a jelenkor egyik legdinamikusabban fejl˝od˝o tudományága. Ezen belül az orvostudomány és a szabályozáselmélet keresztezése révén létrejött élettani és kórélettani szabályozások megoldást nyújthatnak az újabb rákkezelési módszerek költségkomponenseinek redukálására. Ennek a megközelítésnek a lényege, hogy egy matematikai modellen keresztül - mely leírja a tumor növekedését egy adott kezelés esetén - egy olyanszabályozó hozhatólétre, ami optimalizáljaa kezeléshatékonyságátid˝o,valamint költségek tekintetében.Jelen TDK dolgozat célja, hogy az Óbudai Egyetem Élettani Szabályozások Kutatóközpontjában folyó ERC StG pályázat keretében, az ÚNKP pályázatom során, egy optimális adagolási stratégiát hozzon létre az antiangiogenikus terápián belül, mely a célzott daganatterápiák közé sorolható. A dolgozatban els˝o lépésben ismertetésre kerül az antiangiogenikus terápia biológiai háttere, amely segíthet megérteni a kezelés matematikai modelljét. A biológiai bevezetés után bemutatomakezelésnemlineárismatematikaimodelljét,valamintannakazegyszeru˝sítettváltozatát. Jelen TDK dolgozat els˝o sorban lineáris szabályozások létrehozásával fog foglalkozni, így az olvasómegismerhetianemlineárismodelllinearizáltváltozatát,aklasszikusPID,valamintalineáris modell prediktív szabályozások (Model Predictive Control - MPC) alapjait. Bemutatok ezen felül egy visszacsatolás linearizáláson alapuló PID szabályozót, valamint a nemlineáris modell prediktív szabályozást (Nonlinear Model Predictive Control - NMPC) is. A munka során egy alternatív nemlineáris megközelítést is ismertetek, mely a Robusztus Fixpont Transzformáció (RFPT) alapú szabályozás újszeru˝ kombinációja az NMPC megközelítéssel. A dolgozat végén összehasonlítom a különböz˝o szabályozások által elért eredményeket, valamint értékelem a munka sikerességét.",
            'thesis_name_upload' => '234.pdf',
            'comment' => null,
            'category_id' => '4',
            'advisor_name' => 'PROF. DR. KOVÁCS LEVENTE, SÁJEVICSNÉ DR. SÁPI JOHANNA',
            'advisor_email' => 'sajevicsne@obuda.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '12',
            'submission_id' => '11',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '11',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Czakó',
            'last_name' => 'Bence Géza',
            'email' => 'czako@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Óbudai Egyetem',
            'department' => 'Automatizálás',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '11',
            'cooperator_id' => '19',
        ]);
        //234 vege

        //235
        factory(App\User::class)->create([
            'first_name' => 'Epresi',
            'last_name' => 'Konrád',
            'email' => 'epresi@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Óbudai Egyetem',
            'department' => 'Földmérő és földrendező mérnök',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Pontjelek automatikus felismerési lehetőségei a fotogrammetriában II.',
            'key_words' => null,
            'abstract' => "A ma már egyre szélesebb körben alkalmazott digitális adatnyerési technológiákra vonatkozóan fontos a szoftverek teljesítő képességének ismerete. Ez mind pontossági, mind gazdaságossági szempontból meghatározza a gyakorlati alkalmazás lehetőségeit. Ennek vizsgálata egy erre a célra létrehozott tesztmező többféle kialakítású (alak, szín, méret) pontjelei és eltérő körülmények között (pl.: repülési magasság, fényviszonyok) végzett felvételek segítségével végezhető. Célom az volt, hogy nyílt forráskódú szoftverek alkalmazásával a fotogrammetriában, a képek feldolgozásához alkalmazható pontjelek automatikus felismerési lehetőségeit vizsgáljam. Az automatikus pontjel felismerés megfelelő pontosságú elérése számos szakterületen meggyorsítaná, és ezzel gazdaságosabbá tenné a gyakorlati alkalmazást. Az UAV-val (Unmanned Aerial Vehicle) készített felvételek több területen is a mindennapi technológia részét képezik. Baleseti helyszínelések alkalmával fontos szerepe van a körülmények gyors és pontos rögzítésének, egyrészről a forgalom mielőbbi helyreállítása miatt, másrészről a rögzített adatok perdöntő bizonyítékként szolgálhatnak. Az UAV alkalmazások egyik jelentős felhasználási területe az agrárágazat, ezen belül is a precíziós mezőgazdaság. A korszerű, GPS-szel felszerelt agráreszközök lehetőséget biztosítanak a táblán belüli művelés közbeni differenciálásra, így például a műtrágyázásnál, vagy öntözésnél. Az említett szakterületek jól hasznosíthatnák azokat az eredményeket, amelyek a fotogrammetriai pontjelek megfelelő pontosságú, automatikus felismerésével válnának lehetővé. A tudományos diákköri dolgozatomban először bemutatom az automatizált digitális képfeldolgozást, majd a fotogrammetriai pontjelöléseket, amelyek egy részének felismerését automatizáltam. Dolgozatom folytatásában ismertetem az általam használt programozási nyelvet (Python) és annak a képfeldolgozáshoz szükséges könyvtárát (OpenCV), majd az általam készített programot fogom bemutatni kiemelt figyelmet fordítva a Hough-transzformációra, annak előnyeire és hátrányaira. Felhasználtam a korábban végzett kutatásaim tapasztalatait. A teljes képterületen történő pontfelismerés eljárását több szakaszra bontottam. Elsőként a Houghtranszformáció alkalmazásával leválogattam azokat a képrészeket, amelyeken újabb módszert és algoritmust alkalmazva végeztem el a pontjel nagy pontosságú detektálását. Minden egyes kiemelt képrészleten szegmentálással különítettem el a pixeleknek azt a csoportját, amelyek a keresés szempontjából értékes pixeleknek tekinthetők. Először a Hough-transzformációval azonosított körön belül található valamennyi alakzat (síkidom) kontúrját meghatároztam az „Image moment” módszer alkalmazásával, majd kiszámítottam az alakzatok súlyközéppontját. A súlyközéppontokra illesztett regressziós kör középpontja – függetlenül a síkidomok alakjától – nagy pontosággal szolgáltatja az eredeti pontjel helyét a képkivágaton. Mivel a képkivágat helyzete ismert a teljes képterületen, így a detektált pontjel középpontja ismertnek tekinthető a teljes képterületre vonatkozóan is. A Hough-transzformációval azonosított kör torzulása (a képen ellipszisként történő megjelenése) lehetőséget ad a tárgysík és képsík közötti dőlésszög meghatározására is. Szakirodalom alapján tudom, hogy a Hough-transzformáció alkalmas közvetlenül az ellipszis detektálására is, de a kutatás folytatásaként megvalósított vizsgálataim során szerettem volna más módszert is kipróbálni. Ezért, valamint a pontosság növelése reményében saját módszert dolgoztam ki.",
            'thesis_name_upload' => '235.pdf',
            'comment' => null,
            'category_id' => '7',
            'advisor_name' => 'Balázsik Valária, Dr. Tóth Zoltán',
            'advisor_email' => 'balazsik@obuda.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '13',
            'submission_id' => '12',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '12',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Epresi',
            'last_name' => 'Konrád',
            'email' => 'epresi@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Óbudai Egyetem',
            'department' => 'Földmérő és földrendező mérnök',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '12',
            'cooperator_id' => '20',
        ]);
        //235 vege

        //237
        factory(App\User::class)->create([
            'first_name' => 'Nagy',
            'last_name' => 'Serbán Tünde',
            'email' => 'nagyserbantunde@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Szamitástechnika',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Saját tervezésű, RISC processzor megvalósítása és tesztelése FPGA áramkörön',
            'key_words' => 'Processzor, Architektúra, FPGA, Benchmark, AD/DA interfészek',
            'abstract' => "Napjainkban a számítógépek világa rohamosan fejlődik a különböző elemek újra tervezésével, optimalizálásával. A processzor a számítógép központi feldolgozó egysége, amely végrehajtja az utasításokat. Több típusú processzort terveztek meg, különböző architektúrákkal (Harvardarchitektúra, Neumann-architektúra). Az első a Neumann-architektúra volt, ennek tulajdonsága, hogy a programmemóriából való kiolvasás és az aritmetikai logikai művelet végzés egyszerre nem történhet meg, mert egy közös adatsínt használnak. Mi egy saját tervezésű processzort terveztünk és implementáltunk, a Harvard architektúra elveinek felhasználásával. Ez az elv abban különbözik a Neumann-architektúrától, hogy a programmemóriából olvasott utasítások és az aritmetikai logikai műveletvégzés két külön adatsínen történik. A processzor tervezésénél figyelembe vettük a RISC processzor tervezési stratégiát is, amelynek fő jellemzője, hogy kevés utasítás áll a rendelkezésünkre és ezek az utasítások egyszerűen végrehajthatóak. Utasításkészletünket három csoportra oszthatjuk: adatmozgató utasítások, aritmetikai/logikai utasítások és elágazásképző (ugrási és függvényhívási) utasítások. Ezek szerkezete típustól függően változik. Ezen kívül alkalmaztuk a Load-Store architektúrát is, amelynek célja, hogy az adatmemóriához csupán két utasítással férünk hozzá. Egyik utasítással beleírunk az adatmemóriába míg a másikkal kiolvasunk belőle. Optimalizálás szempontjában alkalmaztuk a csővezeték elvét is. Processzorunk négy fő komponenst tartalmaz, amelyeket VHDL nyelvben írtuk meg. Komponensei: Instruction Fetch and Decode Unit, ALU, I/O és nem utolsó sorban az adatmemória. Ezeknek az elemeknek különböző órajel szükségeleti vannak, a legtöbbet az I/O modul használja fel. Processzorunkhoz tartozik egy saját készítésű fordító program is, amelynek jellegzetes tulajdonsága a hordozhatóság. Ez azért fontos, hogy majdnem minden számítógépen futtatható legyen. Ezen kívül, a fordítónk másik fontos tulajdonsága az egyszerű hibakezelés. Ennek célja, hogy a felhasználó egy futtatás után megkapja az összes hibát egyszerre, így megkönnyítve a hibás kód kijavítási lehetőségét. A hibák megjelenésekor nem csak azt adja vissza a fordító, hogy hol van a hiba hanem azt is, hogy az adott hibás sorban tulajdonképpen milyen típusú hibáról van szó. Kutatásunk célja összehasonlítást végezni az eredeti Xilinx PicoBlaze processzor és az általunk megtervezett processzor között, számítási teljesítmény és folyamatvezérlési alkalmazásokhoz való alkalmasság szempontjából. A kutatás alatt használtunk hardveres eszközöket is: egy FPGA fejlesztőlapot, egy-egy AD/DA interfészt, egy oszcilloszkópot és egy jelgenerátort. A teszteket benchmark kódok segítségével végeztük, melyek assembly nyelven íródtak. A tesztelés folyamata: a processzort feltöltjük az FPGA lapra, amelyen van egy analóg-digitál (AD) és egy digitál-analóg (DA) átalakító, amelyeken keresztül jeleket küldünk egy oszcilloszkópnak, majd innen leolvassuk az értékeket. Az analóg-digitál (AD) interfész működése abból áll, hogy SPI komunikáció által egy analóg jelből egy 16 bites számot alakít ki. Ezzel ellentétben a digitál-analóg (DA) interfész digitális 16 bites számból szintén SPI komunikáció felhasználásával egy analóg jelet alakít ki, amelyeket egy osszciloszkóp segítségével mintavételezni tudunk. Az aritmetikai műveletek teljesítményéhez MIPS értékeket számoltunk, és ezzel tudtunk egy átlag értékeket is kapni. Ezekből az átlag értékekből sikerült felmérni, hogy a Xilinx által készített PicoBalze processzor és a saját tervezésű processzor hogyan teljesít aritmetikai logikai művelet végzés esetén. Processzorunkat erőforrás szempontjából is összehasonlítottuk a PicoBlaze processzorral.",
            'thesis_name_upload' => '237.pdf',
            'comment' => null,
            'category_id' => '2',
            'advisor_name' => 'Dr. Bakó László',
            'advisor_email' => 'lbako@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '14',
            'submission_id' => '13',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '13',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Nagy',
            'last_name' => 'Serbán Tünde',
            'email' => 'nagyserbantunde@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Szamitástechnika',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Gáll',
            'last_name' => 'János',
            'email' => 'zukatomo@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Szamitástechnika',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '13',
            'cooperator_id' => '21',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '13',
            'cooperator_id' => '22',
        ]);
        //237 vege

        //240
        factory(App\User::class)->create([
            'first_name' => 'Gál',
            'last_name' => 'Krisztián-Szilveszter',
            'email' => 'gal_krisztian_szilveszter@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'university' => 'Sapientia',
            'department' => 'Informatika',
        ]);

        DB::table('submissions')->insert([
            'title' => 'Kontextus-függő algoritmus vizualizáció',
            'key_words' => 'számítógépes gondolkodás, kontextus, algoritmusok, animáció, mérnökképzés',
            'abstract' => "A mai digitális világban egyre nagyobb hangsúlyt kap a számítógépes gondolkodás. Az utóbbi évek kutatásai intenzíven vizsgálták, hogy miként lehetne fejleszteni e készséget azáltal, hogy a társadalom minden tagját bevezetjük a számítógépes programozás világába. Ezt a megközelítést az is indokolja, hogy a számítógépes gondolkodás az algoritmikus gondolkodás fogalmából nőtt ki. Másfelől igazi kihívást jelent az oktatási rendszer minden szintjén, mindenkinek programozást tanítani. Ez ugyanis azt feltételezi, hogy már elemi szinten is, hogy középiskolában nem csak reál, hanem humán orientáltaknak is, illetve, hogy egyetemi szinten minden szakon oktatjuk. Egyik sikeres megközelítés az úgynevezett kontextus-alapú programozás-oktatás. Ez alatt azt értjük, hogy egy olyan kontextusban mutatjuk be a programozás alap-elemeit, fogalmait és elveit, amely közel áll a célközönséghez. A mérnök hallgatók esetében kiemelten fontos a programozás-oktatás. A szakma egyre inkább épít rá. Ennek egyik velejárója, hogy az alapfogalmaknál mélyebben kell behatolni a számítógépes algoritmusok világába. A Sapientián, például, Programozás-2 tantárgyból, algoritmustervezési stratégiák is terítékre kerülnek. A dolgozatunkban azt vizsgáljuk, hogy miként lehetne alkalmazni a kontextus-alapú megközelítést a dinamikus programozás tanításánál. Két algoritmus vizualizáló eszközt fejlesztettünk ki: egy hardver-közelibbet és egy szoftver alapút. Azt vizsgáltuk, hogy melyik gerjeszt erősebb motivációt informatikus, valamint mérnök hallgatóknál.",
            'thesis_name_upload' => '240.pdf',
            'comment' => null,
            'category_id' => '1',
            'advisor_name' => 'Kátai Zoltán',
            'advisor_email' => 'katai@ms.sapientia.ro',
            'advisor_verified_at' => Carbon\Carbon::now(),
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('user__submissions')->insert([
            'user_id' => '15',
            'submission_id' => '14',
        ]);

        DB::table('submission__conferences')->insert([
            'submission_id' => '14',
            'conference_id' => '1',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Gál',
            'last_name' => 'Krisztián-Szilveszter',
            'email' => 'gal_krisztian_szilveszter@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Informatika',
        ]);

        DB::table('cooperators')->insert([
            'first_name' => 'Dénes',
            'last_name' => 'Csaba-Antal',
            'email' => 'denes_csaba@gmail.com',
            'telephone' => '0765656565',
            'university' => 'Sapientia',
            'department' => 'Informatika',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '14',
            'cooperator_id' => '23',
        ]);

        DB::table('submission__cooperators')->insert([
            'submission_id' => '14',
            'cooperator_id' => '24',
        ]);
        //240 vege

        //Chair
        factory(App\User::class)->create([
            'first_name' => 'Chair',
            'last_name' => 'Man',
            'email' => 'chair@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'chair',
        ]);
        //Chair end

        //Reviewers
        factory(App\User::class)->create([
            'first_name' => 'Informatika Reviewer',
            'last_name' => 'Man 1',
            'email' => 'reviewer_informatika@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Informatika',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Informatika Reviewer',
            'last_name' => 'Man 2',
            'email' => 'reviewer_informatika2@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Informatika',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Szamitástechnika Reviewer',
            'last_name' => 'Man 1',
            'email' => 'reviewer_szamitastechnika@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Számítástechnika',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Szamitástechnika Reviewer',
            'last_name' => 'Man 2',
            'email' => 'reviewer_szamitastechnika2@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Számítástechnika',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Épitőmérnök Reviewer',
            'last_name' => 'Man 1',
            'email' => 'reviewer_epitomernok@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Épitőmérnök',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Épitőmérnök Reviewer',
            'last_name' => 'Man 2',
            'email' => 'reviewer_epitomernok2@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Épitőmérnök',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Automatizálás Reviewer',
            'last_name' => 'Man 1',
            'email' => 'reviewer_automatizalas@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Automatizálás',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Automatizálás Reviewer',
            'last_name' => 'Man 2',
            'email' => 'reviewer_automatizalas2@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Automatizálás',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Biztonságtechnika Reviewer',
            'last_name' => 'Man 1',
            'email' => 'reviewer_biztonsagtechnika@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Biztonságtechnika',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Biztonságtechnika Reviewer',
            'last_name' => 'Man 2',
            'email' => 'reviewer_biztonsagtechnika2@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Biztonságtechnika',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Villamosmérnök Reviewer',
            'last_name' => 'Man 1',
            'email' => 'reviewer_villamosmernok@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Villamosmérnök',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Villamosmérnök Reviewer',
            'last_name' => 'Man 2',
            'email' => 'reviewer_villamosmernok2@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Villamosmérnök',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Földmérő és földrendező mérnök Reviewer',
            'last_name' => 'Man 1',
            'email' => 'reviewer_foldmero@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Földmérő és földrendező mérnök',
        ]);

        factory(App\User::class)->create([
            'first_name' => 'Földmérő és földrendező mérnök Reviewer',
            'last_name' => 'Man 2',
            'email' => 'reviewer_foldmero2@gmail.com',
            'email_verified_at' => Carbon\Carbon::now(),
            'user_type' => 'reviewer',
            'department' => 'Földmérő és földrendező mérnök',
        ]);
        //Reviewers end
        //End of user seeder part
    }
}
