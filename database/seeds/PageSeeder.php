<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);

        DB::table('pages')->insert([
            'pages' => 'News',
            'pages_content' => '<div class="content-col content-col-wide">
        <h1>Hírek</h1>
        <h1 style="text-align: justify;"><span style="background-color: #333333; color: #ffffff;">2019</span></h1>
<h2>IX. KARI TUDOMÁNYOS DIÁKKÖRI KONFERENCIA</h2>
<h2 style="text-align: justify;">Felhívás</h2>
<p style="text-align: justify;">A Sapientia Erdélyi Magyar Tudományegyetem Kolozsvári Kara és a Kolozsvári Hallgatói Önkormányzat (kHÖK) immár kilencedik alkalommal szervez TDK-t, azzal a céllal, hogy tudományos és alkotói kutatómunkára ösztönözze az erdélyi felsőoktatásban részt vevő diákokat. A IX. Kari TDK a Sapientia EMTE hallgatóin kívül nyitott minden más felsőoktatási intézmény diákja előtt is, amennyiben az általános jelentkezési feltételeket teljesítik.</p>
<p style="text-align: justify;"><strong>A IX. Kari TDK-ra 2019. május 15–17. között kerül sor a kar Tordai úti épületében.</strong></p>
<p style="text-align: justify;">A Kari TDK megszervezésével a Sapientia EMTE célja, hogy időszerű tudományos előadásokkal járuljon hozzá az erdélyi felsőoktatásban részt vevő hallgatók szakmai fejlődéséhez. A TDK azoknak az egyetemi hallgatóknak szól, akik kedvet éreznek egy szabadon választott, napirenden lévő politikai, jogi, környezettudományi, művészettudományi vagy nemzetközi kapcsolatokat érintő kérdés kutatására, vizsgálatára és az eredmények ismertetésére, illetve a&nbsp;<em>Művészeti alkotások&nbsp;</em>szekció keretében egy elkészített művészi alkotás bemutatására.</p>
<p style="text-align: justify;"><strong>A IX. Kari Tudományos Diákköri Konferencia tervezett szekciói:</strong></p>
<ol style="text-align: justify;">
<li>Nemzetközi kapcsolatok és európai tanulmányok</li>
<li>Jog</li>
<li>Környezettudomány</li>
<li>Művészetelmélet</li>
<li>Művészeti alkotások (<span style="color: #0000ff;"><a href="https://tdk.kv.sapientia.ro/docs/felhivas_alkotoi_szekcio_2019.pdf"><span style="color: #0000ff;">külön felhívás érvényes rá</span></a></span>)</li>
</ol>
<p style="text-align: justify;">A jelentkezést különösen azért ajánljuk, mert a TDK-s szereplés igen jó lehetőség arra, hogy a hallgató egy vezetőtanár segítségével egy adott témában elmélyüljön, a megírt anyagra/bemutatott műalkotásra releváns reakciókat kapjon elismert szakemberek részéről, valamint előadási készségeit és technikáját fejleszthesse. A Sapientia EMTE Kolozsvári Karán a tutori programban részt vevő diákok számára a IX. Kari TDK-n való részvétel kötelező.</p>
<p style="text-align: justify;"><strong>A tavalyi évhez hasonlóan a Sapientia EMTE Kolozsvári Karának Kari Tudományos Diákköri Konferenciája egyben jelölő fórum (közvetlen kijutási lehetőség) a humán- és reáltudományi szakterületeken a 2021-es XXXV. Országos Tudományos Diákköri Konferenciára.</strong></p>
<p style="text-align: justify;">A Sapientia EMTE Kolozsvári Kara által szervezett IX. Kari TDK-ra való elektronikus jelentkezés határideje&nbsp;<strong>2019. március 22., 23.59 óra</strong>, eddig az időpontig kell feltölteni a dolgozat vagy művészeti alkotás kivonatát/leírását az online rendszerbe. A konferenciára csoportosan is lehet jelentkezni, egy dolgozatnak, alkotásnak több szerzője lehet.</p>
<p style="text-align: justify;">A dolgozat/művészeti alkotás dokumentációjának feltöltési határideje:&nbsp;<strong>2019. április 25., 23.59 óra.</strong></p>
<h3 style="text-align: justify;"><strong>A jelentkezés módja</strong></h3>
<p style="text-align: justify;">A IX. Kari TDK-ra való elektronikus jelentkezés határideje&nbsp;<strong>2019. március 22., 23:59</strong>, eddig kell regisztrálni a &nbsp;<a href="http://tdk.kv.sapientia.ro/">tdk.kv.sapientia.ro</a>&nbsp;honlap&nbsp;<em>Jelentkezés/Belépés&nbsp;</em>menüpontjánál. Ugyanezen menüpontnál bejelentkezve a regisztráció véglegesítéséhez a következő információkat szükséges megadni:</p>
<ul style="text-align: justify;">
<li>Az előadás címét, az előadó(k) nevét, azok intézményi címeit, témavezető/felkészítő tanár(ok) nevét és intézményét, az előadók elérhetőségeit.</li>
<li>Egy maximum 500 leütést tartalmazó kivonatot a dolgozatról/művészeti alkotásról – ennek feltöltése a regisztráció után válik lehetővé.</li>
</ul>
<p style="text-align: justify;">A dolgozatok, illetve prezentációk feltöltése ugyanezen a felületen elérhető.</p>
<p style="text-align: justify;">A Kari TDK-ra beküldendő kivonat/leírás formai követelményeit és a dolgozat formai követelményeit a Sapientia EMTE Szenátusa által elfogadott TDK-szabályzat tartalmazza, amely az egyetem központi honlapján a Tehetséggondozás/TDK szabályzat fül alatt&nbsp;érhető el.</p>
<p style="text-align: justify;">A bejelentkezési és kivonatelkészítési, valamint a dolgozatszerkesztési útmutatók a&nbsp;<a href="https://tdk.kv.sapientia.ro/index.php/site/page/">https://tdk.kv.sapientia.ro/</a>&nbsp;honlapon a&nbsp;<em>Dokumentumok&nbsp;&nbsp;</em>fül alatt elérhetőek.</p>
<p style="text-align: justify;">Kérjük a szabályzatban szereplő formai követelmények maradéktalan betartását mind a kivonat, mind a dolgozat és az alkotások esetében! Az egyes szekciókra vonatkozó specifikus elvárások az OTDT honlapján találhatóak:&nbsp;<a href="http://otdt.hu/">http://otdt.hu/</a>.</p>
<p style="text-align: justify;">Az OTDT szabályzata alapján mesteri disszertációval nem lehet a TDK-ra jelentkezni!</p>
<p style="text-align: justify;">Felhívjuk a figyelmet, hogy az egyetem Szenátusa által elfogadott TDK-szabályzat V. 2. pontja értelmében: „Határidőn túl történő bejelentkezés esetében a TDK Szervező Bizottság dönthet a dolgozat bemutatásának az engedélyezéséről, de az csak versenyen kívül történhet. Ebben az esetben ezen dolgozatok nem pontozódnak, továbbjutásuk az OTDK-ra nem javasolható.”</p>
<p style="text-align: justify;">A Kari TDK előadásai nyitottak az érdeklődő nagyközönség számára is.</p>
<hr>
<h1><span style="background-color: #333333; color: #ffffff;">2018</span></h1>
<h2>Sikeresen lezárult a VIII. Kari Tudományos Diákköri Konferencia</h2>
<div class="content-formatted">
<div class="lead">
<p>Közel hetven diák vett részt a VIII. Kari Tudományos Diákköri Konferencián, művészeti alkotásaikat, előadásokat és dolgozataikat mutatva be a szakmai zsűri előtt.</p>
</div>
</div>
<div class="content-formatted">
<p>Az idei diákköri konferencia más egyetemek számára is nyitott volt, hallgatóinkon kívül még öt intézmény diákjai vettek részt.&nbsp;Gratulálunk&nbsp;minden kedves TDK-zónak!</p>
<h2><span style="color: #ffffff; background-color: #339966;">EREDMÉNYEK</span></h2>
<table style="height: 1635px; width: 920px;" border="1" width="920" cellspacing="0" cellpadding="0"><colgroup><col><col><col><col><col></colgroup>
<tbody>
<tr style="text-align: center;">
<td style="text-align: center;" colspan="5" height="20">
<p><strong>Jogtudományi szekció</strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Hajducsi Árpád</td>
<td style="text-align: left;">A királyi lemondás és jogkövetkezményei</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">II. helyezés</td>
<td style="text-align: center;">Enyedi Tamás</td>
<td style="text-align: left;">A tömegverekedés bűncselekménynek vitatott elemei</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td colspan="5" height="20">
<p>&nbsp;</p>
<p style="text-align: center;"><strong>Művészetelméleti szekció</strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Ferencz Zsófia</td>
<td style="text-align: left;">Dühöngő bikaborjak. Egy korai Fellini-klasszikus továbbélései a 70-es, 80-as évek amerikai férfi coming-of-age filmjeiben</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">II. helyezés</td>
<td style="text-align: center;">Farkas Boglárka Angéla</td>
<td style="text-align: left;">Harc az arccal, avagy Bette Davis és Gena Rowlands gesztusai a&nbsp;Mi történt Baby Jane-nel?&nbsp;és a&nbsp;Premier&nbsp;c. filmben</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">III. helyezés</td>
<td style="text-align: center;">Incze Romhilda-Barbara</td>
<td style="text-align: left;">Az irracionalitás néma rejtelmeinek vörös világában</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">III. helyezés</td>
<td style="text-align: center;">Víg Zsombor</td>
<td style="text-align: left;">A Sapientia EMTE, Kolozsvári Kar kolozsvári diákjainak médiafogyasztási szokásai</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">dicséret</td>
<td style="text-align: center;">Patrubány Csilla</td>
<td style="text-align: left;">Nem látta senki – a sebezhetőség ezer árnyalata Barbara Loden&nbsp;Wanda&nbsp;című filmjében</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td colspan="5" height="20">
<p>&nbsp;</p>
<p style="text-align: center;"><strong>Művészeti alkotások szekció – Film és Színház tagozat</strong></p>
</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Tóthpál Béla&nbsp;</td>
<td style="text-align: left;">Nem kötöm meg!</td>
<td>Sapientia EMTE, Kolozsvári Kar</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Szabó János Szilárd</td>
<td style="text-align: left;">Nincstelenek (Anyánk minden este imádkozik)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>András Gedeon</td>
<td style="text-align: left;">Nincstelenek (A nővéremnek még mindig taknyos az orra)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Szekeres Blanka</td>
<td style="text-align: left;">Nincstelenek (Megáll a bogár)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Sosovicza Anna</td>
<td style="text-align: left;">Nincstelenek (Megvert anyám)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Scurtu David</td>
<td style="text-align: left;">Nincstelenek (A málnásban bújunk el a nővéremmel)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Borsos Tamás</td>
<td style="text-align: left;">Nincstelenek (A gyerekeket a gólya hozza)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Pelsőczy Luca</td>
<td style="text-align: left;">Nincstelenek (Anyám hisztériázik)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Tóth Zsófia</td>
<td style="text-align: left;">Nincstelenek (Elképzelem, hogy anyám halott)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">I. helyezés</td>
<td>Cserna Lili</td>
<td style="text-align: left;">Nincstelenek (Arra ébredek)</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>igen</td>
</tr>
<tr style="text-align: center;">
<td height="20">II. helyezés</td>
<td>Frunza Roland</td>
<td style="text-align: left;">Zavar</td>
<td>Sapientia EMTE, Kolozsvári Kar</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" height="20">II. helyezés</td>
<td>Barabás Hunor</td>
<td style="text-align: left;">Óra kattog</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="20">II. helyezés</td>
<td>Fosztó András</td>
<td style="text-align: left;">Egyszer élünk és ez már az!</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="20">III. helyezés</td>
<td>Gál Márk,&nbsp;Pogonyi Hunor, Nagy László</td>
<td style="text-align: left;">#blackout</td>
<td>Babeș–Bolyai Tudományegyetem</td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="20">III. helyezés</td>
<td>Purosz Leonidász</td>
<td style="text-align: left;">Fájdalomküszöb</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="20">III. helyezés</td>
<td>Csergő Tamás</td>
<td style="text-align: left;">„Korlátozott” kreativitás: Haikuk</td>
<td>Sapientia EMTE, Csíkszeredai Kar</td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="20">III. helyezés</td>
<td>Pásztor Márk</td>
<td style="text-align: left;">Dalszerzés színész szakon</td>
<td>Marosvásárhelyi Művészeti Egyetem</td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="20">dicséret</td>
<td>Patrubány Csilla</td>
<td style="text-align: left;">Moha</td>
<td>Sapientia EMTE, Kolozsvári Kar</td>
<td>&nbsp;</td>
</tr>
<tr>
<td height="20">dicséret</td>
<td>Szabó Norbert Zsolt&nbsp;</td>
<td style="text-align: left;">Hamu és kívánság</td>
<td>Sapientia EMTE, Kolozsvári Kar</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" colspan="5" height="20">
<p>&nbsp;</p>
<p><strong>Művészeti alkotások szekció – Fotó tagozat</strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Ilyés Zalán</td>
<td style="text-align: left;">West End Punk</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Mariș Cristian Daniel</td>
<td style="text-align: left;">Betekintés a bábművészet világába</td>
<td style="text-align: center;">Marosvásárhelyi Művészeti Egyetem</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Nagy László</td>
<td style="text-align: left;">Támpontok – egy elszigetelt roma közösség mindennapjai</td>
<td style="text-align: center;">Babeș–Bolyai Tudományegyetem</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Simon Róbert</td>
<td style="text-align: left;">A kenyér születése</td>
<td style="text-align: center;">Marosvásárhelyi Művészeti Egyetem</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">dicséret</td>
<td style="text-align: center;">Menyhárt László&nbsp;</td>
<td style="text-align: left;">Életképek a szénégetők hétköznapjaiból</td>
<td style="text-align: center;">Marosvásárhelyi Művészeti Egyetem</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" height="20">dicséret</td>
<td style="text-align: center;">Ferencz Zsófia</td>
<td style="text-align: left;">Blue Shift</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" colspan="5" height="20">
<p>&nbsp;</p>
<p><strong>Művészeti alkotások szekció – Zenei tagozat</strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Fábián Attila</td>
<td style="text-align: left;">Intés (dal zongorára és énekhangra)</td>
<td style="text-align: center;">Partiumi Keresztény Egyetem</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Gliga Tudor, Orosz Dávid</td>
<td style="text-align: left;">Duó</td>
<td style="text-align: center;">Gheorghe Dima Zeneakadémia</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">II. helyezés</td>
<td style="text-align: center;">Orosz Dávid</td>
<td style="text-align: left;">Mario Castelnuovo Tedesco – „hommage” Paganini művészetére</td>
<td style="text-align: center;">Gheorghe Dima Zeneakadémia</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" height="20">III. helyezés</td>
<td style="text-align: center;">Babțan-Varga Flórián</td>
<td style="text-align: left;">Zeneművészet klasszikus gitáron, barokktól napjainkig</td>
<td style="text-align: center;">Gheorghe Dima Zeneakadémia</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" height="20">dicséret</td>
<td style="text-align: center;">Elek Gergő</td>
<td style="text-align: left;">Ha jó a kedved</td>
<td style="text-align: center;">Partiumi Keresztény Egyetem</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" height="20">dicséret</td>
<td style="text-align: center;">Kibédi Levente, Gliga Tudor, Balogh Marcu, Gheorghiu Cristian</td>
<td style="text-align: left;">Gitárkvartett</td>
<td style="text-align: center;">Gheorghe Dima Zeneakadémia</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" colspan="5" height="20">
<p>&nbsp;</p>
<p><strong>Társadalomtudományi szekció – Nemzetközi tanulmányok tagozat</strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Gál Noémi</td>
<td style="text-align: left;">GMO-szabályozás az Európai Unióban és az Amerikai Egyesült Államokban</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">II. helyezés</td>
<td style="text-align: center;">Szabó Hunor</td>
<td style="text-align: left;">Az Egyesült Királyságban élő erdélyi magyarok helyzetének vizsgálata a BREXIT után</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td style="text-align: center;" height="20">III. helyezés</td>
<td style="text-align: center;">Bányász Bence-Ferenc</td>
<td style="text-align: left;">A hírszerzés és kémkedés hatása a modern diplomáciára, a 2016-os amerikai elnökválasztások tükrében</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
<tr>
<td colspan="5" height="20">
<p>&nbsp;</p>
<p style="text-align: center;"><strong>Társadalomtudományi szekció – Politikatudomány tagozat</strong></p>
</td>
</tr>
<tr>
<td style="text-align: center;" height="20">I. helyezés</td>
<td style="text-align: center;">Varga Szilvia</td>
<td style="text-align: left;">Kolozsvári középiskolások politikai szocializációja</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">II. helyezés</td>
<td style="text-align: center;">Sarány Orsolya</td>
<td style="text-align: left;">Támogatói érdek és hiteles tájékoztatás a romániai magyar nyomtatott sajtóban</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">igen</td>
</tr>
<tr>
<td style="text-align: center;" height="20">III. helyezés</td>
<td style="text-align: center;">Simó Helga</td>
<td style="text-align: left;">Erdélyi magyarok ellenségképe a migrációs válság tükrében</td>
<td style="text-align: center;">Sapientia EMTE, Kolozsvári Kar</td>
<td style="text-align: center;">&nbsp;</td>
</tr>
</tbody>
</table>
</div>
<h2>&nbsp;</h2>
<hr>
<h2>Prezentációk beküldése</h2>
<p>Kedves résztvevők!</p>
<p>Ma éjfélig&nbsp;várjuk a&nbsp;bemutatókat a <a href="mailto:ktdk@kv.sapientia.ro">ktdk@kv.sapientia.ro</a>&nbsp;címre (Prezi esetén az offline is megtekinthető Windows-verziót, minden tartalmi elemével). Sok sikert a felkészülésben!</p>
<p>A szervezők</p>
<p>(2018. április 23.)</p>
<hr>
<h2>A VIII. Kari TDK pogramja és szekciói</h2>
<p>Kedves Érdeklődők!</p>
<p>A&nbsp;<em><a href="https://tdk.kv.sapientia.ro/index.php/site/page/?p=9">Program</a>&nbsp;</em>menüpontban elérhető a konferencia programja&nbsp;a plenáris előadásokkal együtt. A benevezések alapján a VIII. Kari TDK-t hét szekcióval indítja el a Sapientia EMTE Kolozsvári Kara, ezek megtekinthetőek a&nbsp;<em><a href="https://tdk.kv.sapientia.ro/index.php/site/page/?p=10">Szekciók</a>&nbsp;</em>menüpontnál.</p>
<p>Szeretettel várunk mindenkit az előadásokra!</p>
<hr>
<h2>Filmmel nevezők, figyelem!</h2>
<p>A filmeket április 15-én éjfélig várjuk a <em>kdtk@kv.sapientia.ro</em>&nbsp;e-mail címre.</p>
<hr>
<h2>Új köntösben a Kari TDK-k: <em>OTDK-kvalifikációk és alkotói szekció is várható</em></h2>
<p style="text-align: justify;">A tehetséggondozás, az alkotói munkára ösztönzés és a tudományos kutatás felkarolása központi elemét képezi a Sapientia Erdélyi Tudományegyetem képzési programjainak. Az intézmény több éve szervez hallgatói számára kari Tudományos Diákköri Konferenciákat (TDK) a három oktatási helyszínen, az idei évtől azonban új szintre lép a rendezvény. A Sapientia által szervezett kari TDK-k a 2018-as évben ugyanis&nbsp;<strong>jelölő fórumai az Országos Tudományos Diákköri Konferenciának (OTDK)</strong>, így az ezeken résztvevő, jól teljesítő diákokat a szakmai zsűri ajánlhatja OTDK-részvételre. Ezáltal a kiemelkedő hallgatóknak lehetőségük nyílik arra, hogy – a korábbi évek agrár- és műszaki tudományi területei mellett – az idei évtől a humán- és reáltudományi szakterületeken is közvetlenül, a Sapientia kari diákköri konferenciáiról kvalifikáljanak a 2019-es XXXIV. Országos Tudományos Diákköri Konferenciára.</p>
<div class="content-formatted" style="text-align: justify;">
<p>Március 15 éjfélig még lehet jelentkezni a VIII. Kari Tudományos Diákköri Konferenciára, melyet a Kolozsvári Kar idén április 25–26. között szervez meg, és több újdonságot is tartogat. A 2018-as évben a konferencia-részvétel minden olyan hallgató számára nyitott és ingyenes, akik romániai egyetemen folytatják tanulmányaikat. A kincses városban szervezett Kari TDK-ra&nbsp;<em>Környezettudomány</em>,&nbsp;<em>Jogtudomány</em>,&nbsp;<em>Művészetelmélet</em>, illetve&nbsp;<em>Nemzetközi kapcsolatok és európai tanulmányok</em>&nbsp;szekciókban várják a dolgozatokat, emellett&nbsp;<strong>az idei évben először megszervezésre kerül a&nbsp;<em>Művészeti alkotások&nbsp;</em>szekció is</strong>. Ez az alkotói szekció más követelményrendszerrel működik, így nem dolgozatot, hanem pályamunkákat nyújtanak be a sík- és térbeli művészet (festészet, szobrászat, tervezőgrafika, fotó, design, installáció stb.), az időbeli művészet (animáció, rövidfilm, multimédia, intermédia, videó stb.), a zeneművészet (szóló és kamaraművek előadása), a színművészet-táncművészet, illetve az irodalom területéről. A Sapientia EMTE Kolozsvári Kara&nbsp;<strong>partnerintézményekkel közösen</strong>&nbsp;hirdette meg a szekciót, a Gheorghe Dima Zeneakadémia (Kolozsvár), a Képzőművészeti és Formatervezői Egyetem (Kolozsvár), a Marosvásárhelyi Művészeti Egyetem, a Partiumi Keresztény Egyetem (Nagyvárad), illetve a Sapientia EMTE Csíkszeredai Kara is társult a szervezésbe.</p>
<p>A&nbsp;<a href="https://tdk.kv.sapientia.ro/index.php/https://tdk.kv.sapientia.ro/index.php/">VIII. Kari TDK</a>-n természetesen nagy hangsúlyt kap a kiemelkedő szakmaiság és tudományművelés: neves előadókat hívnak meg zsűritagként, illetve izgalmas előadások várják a közönséget. A rendezvényt&nbsp;<strong>dr. Mezey Barna</strong>&nbsp;magyar jogtörténész, az Országos Tudományos Diákköri Tanács alelnöke, az ELTE Állam-és Jogtudományi Karának egyetemi tanára nyitja meg plenáris előadásával. Sógor Csaba európai parlamenti képviselőnek köszönhetően a konferencia programjának részét képezi&nbsp;<strong>David McAllister</strong>, az Európai Parlament Külügyi Bizottságának elnöke, EP-képviselő előadása, aki a&nbsp;<em>Nemzetközi kapcsolatok és európai tanulmányok&nbsp;</em>szekció és a TDK záróakkordjaként tart plenáris előadást. A&nbsp;<em>Művészetelmélet&nbsp;</em>és&nbsp;<em>Művészeti alkotások&nbsp;</em>területéről két szakember,&nbsp;<strong>Hajdu Szabolcs&nbsp;</strong>rendező és&nbsp;<strong>Török-Illyés Orsolya</strong>&nbsp;színésznő-forgatókönyvíró lesznek jelen.&nbsp;</p>
</div>
<hr>
<h2 style="text-align: justify;">Lezárult a jelentkezés</h2>
<p style="text-align: justify;">Köszönjük mindenkinek a VIII. Kari Tudományos Diákköri Konferenciára&nbsp;a beküldött kivonatokat, leírásokat. A programmal kapcsolatos részletekkel áprilisban jelentkezünk.</p>
<p style="text-align: justify;">(2018. március 16.)</p>
<hr>
<p style="text-align: justify;">&nbsp;Elérhetőség: ktdk@kv.sapientia.ro</p>
<hr>
<h2 style="text-align: justify;">FELHÍVÁS: Művészeti alkotások szekció</h2>
<p style="text-align: justify;"><span style="font-size: 10pt;"><strong>2018-ban először kerül megszervezésre a Kolozsvári Kar Tudományos Diákköri Konferenciája keretében a <em>Művészeti alkotások szekció</em>, amelyen a következő területek művelőit várjuk:</strong></span></p>
<ol style="list-style-type: lower-alpha; text-align: justify;">
<li>Sík- és térbeli művészet (festészet, szobrászat, tervezőgrafika, fotó, design, installáció stb.)</li>
<li>Időbeli művészet (animáció, rövidfilm, multimédia, intermédia, videó stb.)</li>
<li>Zeneművészet (szóló és kamaraművek előadása)</li>
<li>Színművészet, táncművészet</li>
<li>Irodalmi alkotások</li>
</ol>
<p style="text-align: justify;">&nbsp;A VIII. Kari TDK-ra való elektronikus jelentkezés határideje <strong>2018. március 15., 23:59</strong>, eddig kell regisztrálni a <a href="http://tdk.kv.sapientia.ro/">tdk.kv.sapientia.ro</a> honlap <em>Jelentkezés/Belépés </em>menüpontjánál. Ugyanezen menüpontnál bejelentkezve a regisztráció véglegesítéséhez a következő információkat szükséges megadni:</p>
<ul style="text-align: justify;">
<li>Az alkotás vagy előadás címét, az alkotó(k) vagy előadó(k) nevét, azok intézményi címeit, témavezető/felkészítő tanár(ok) nevét és intézményét.</li>
<li>Egy maximum 500 leütést tartalmazó leírást az alkotásról vagy az előadott műről – ennek feltöltése a regisztráció után válik lehetővé.</li>
</ul>
<p style="text-align: justify;">Az alkotói TDK-ra az alábbi feltételeket teljesítő műalkotásokkal/előadásokkal lehet jelentkezni:</p>
<ul style="text-align: justify;">
<li>A műalkotások esetében (szobor, festmény stb.) egy 1 méternél kisebb méretű alkotás, amelyhez maximum 5 művet tartalmazó, digitális vagy nyomtatott formátumú portfólió csatolható.</li>
<li>A bemutatók, előadások, vetítések maximális ideje <strong>10</strong><strong>–15 perc</strong> lehet.</li>
</ul>
<p style="text-align: justify;">Az alkotások esetében <strong>2018. április 15-ig</strong> kell beküldeni a művet, amelyet a portfólió, illetve a mű koncepciójának rövid leírása kísér.</p>
<p style="text-align: justify;">A VIII. Kari Tudományos Diákköri Konferencián a részvétel minden romániai egyetemen tanulmányokat folytató hallgató számára nyitott és ingyenes. Jelentkezni egyénileg vagy csoportosan lehet.</p>
<p style="text-align: justify;">A szekció partnerintézményei a&nbsp;Gheorghe Dima Zeneakadémia (Kolozsvár), a Képzőművészeti és Formatervezési Egyetem (Kolozsvár), a Marosvásárhelyi Művészeti Egyetem (Marosvásárhely), a Partiumi Keresztény Egyetem (Nagyvárad), illetve a Sapientia EMTE Csíkszeredai Kara.<br><strong><br></strong></p>
<p style="text-align: justify;">(2018.&nbsp;március 5.)</p>
<hr>
<h2 style="text-align: justify;">&nbsp;<strong>Fontos időpontok:</strong></h2>
<ul style="text-align: justify;">
<li>Jelentkezés és kivonat feltöltése:&nbsp;<strong>2018. március 15., éjfél</strong></li>
<li>Dolgozat beküldésének határideje: <strong>2018. április 15., éjfél</strong></li>
<li>Prezentáció beküldésének határideje:&nbsp;<strong>2018. április 23., éjfél</strong></li>
<li>Konferencia:<strong>&nbsp;2018. április 25–26.</strong></li>
</ul>
<p style="text-align: justify;">(2018.&nbsp;január 10.)</p>
<hr>
<h2 style="text-align: justify;"><strong>FELHÍVÁS</strong></h2>
<p style="text-align: justify;">A Sapientia Erdélyi Magyar Tudományegyetem Kolozsvári Kara és a Kolozsvári Hallgatói Önkormányzat (kHÖK) immár nyolcadik alkalommal szervez TDK-t, azzal a céllal, hogy tudományos és alkotói kutatómunkára ösztönözze az erdélyi felsőoktatásban részt vevő diákokat. A VIII. Kari TDK a Sapientia EMTE hallgatóin kívül nyitott minden más felsőoktatási intézmény diákja előtt is, aki az általános jelentkezési feltételeket teljesíti.</p>
<p style="text-align: justify;"><strong>A VIII. Kari TDK-ra 2018. április 25–26. között kerül sor a Kar Tordai úti épületében.</strong></p>
<p style="text-align: justify;">A TDK azoknak az egyetemi hallgatóknak szól, akik kedvet éreznek egy szabadon választott, napirenden lévő politikai, jogi, gazdasági, környezettudományi, művészettudományi vagy nemzetközi kapcsolatokat érintő kérdés kutatására, vizsgálatára és az eredmények ismertetésére, illetve az idén először megszervezésre kerülő&nbsp;<em>Művészeti alkotások&nbsp;</em>szekció keretében egy elkészített művészi alkotómunka bemutatására.</p>
<p style="text-align: justify;"><strong>A VIII. Kari Tudományos Diákköri Konferencia tervezett szekciói:</strong></p>
<ol style="text-align: justify;">
<li>Nemzetközi kapcsolatok és európai tanulmányok</li>
<li>Jog</li>
<li>Környezettudomány</li>
<li>Művészet és művészettudomány – 2018-ban először kerül megszervezésre<br>&nbsp; &nbsp; I. Művészetelmélet<br>&nbsp; &nbsp; II.&nbsp;Művészeti alkotások – a szekció iránt érdeklődők az erre vonatkozó <a href="http://kv.sapientia.ro/hu/hirek/muveszeti-alkotasok-szekcio-a-viii-kari-tdk-n-felhivas">felhívást</a>&nbsp;vegyék figyelembe</li>
</ol>
<p style="text-align: justify;">Egy dolgozatnak, alkotásnak több szerzője is lehet. A jelentkezést különösen ajánljuk a végzős hallgatóknak, mert a TDK-s szereplés igen jó lehetőség arra, hogy a szakdolgozat témáján dolgozzanak, abban elmélyüljenek, valamint fejlesszék előadási készségeiket, technikájukat. A Sapientián tutori programban részt vevő diákok számára a VIII. Kari TDK-n való részvétel kötelező.</p>
<p style="text-align: justify;"><strong>Az idei tanévtől a Sapientia EMTE Kolozsvári Karának Kari Tudományos Diákköri Konferenciája egyben jelölő fórum&nbsp;</strong><strong>(közvetlen kijutási lehetőség)&nbsp;</strong><strong>a humán- és reáltudományi szakterületeken a 2019-es&nbsp;</strong><strong>XXXIV. Országos Tudományos Diákköri Konferenciára.</strong></p>
<p style="text-align: justify;">A Sapientia EMTE által szervezett VIII. Kari TDK-ra való elektronikus jelentkezés&nbsp;<strong>2018. február 15., 00.01 óra&nbsp;</strong>és&nbsp;<strong>2018. március 15., 23.59 óra</strong>&nbsp;között zajlik, ebben az időszakban kell feltölteni a dolgozat vagy művészeti alkotás kivonatát/leírását is.&nbsp;A konferenciára csoportosan is lehet jelentkezni, egy dolgozatnak, alkotásnak több szerzője lehet.&nbsp;</p>
<p style="text-align: justify;">A dolgozat/művészeti alkotás dokumentációjának feltöltési határideje:&nbsp;<strong>2018. április 15., 23.59 óra.</strong></p>
<p style="text-align: justify;"><strong>&nbsp;</strong></p>
<h3 style="text-align: justify;"><strong>A jelentkezés módja</strong></h3>
<p style="text-align: justify;">A VIII. Kari TDK-ra való elektronikus jelentkezés határideje 2018. március 15., 23:59, eddig kell regisztrálni a&nbsp;<a href="http://tdk.kv.sapientia.ro/" data-cke-saved-href="http://tdk.kv.sapientia.ro">tdk.kv.sapientia.ro</a>&nbsp;honlap&nbsp;<em>Jelentkezés/Belépés&nbsp;</em>menüpontjánál. Ugyanezen menüpontnál bejelentkezve a regisztráció véglegesítéséhez a következő információkat szükséges megadni:</p>
<ul style="text-align: justify;">
<li>Az alkotás vagy előadás címét, az alkotó(k) vagy előadó(k) nevét, azok intézményi címeit, témavezető/felkészítő tanár(ok) nevét és intézményét.</li>
<li>Egy maximum 500 leütést tartalmazó leírást az alkotásról vagy az előadott műről – ennek feltöltése a regisztráció után válik lehetővé.</li>
</ul>
<p style="text-align: justify;">A dolgozatok, illetve prezentációk feltöltése ugyanezen a felületen elérhető.</p>
<p style="text-align: justify;">A Kari TDK-ra beküldendő kivonat/leírás formai követelményeit és a dolgozat formai követelményeit a Sapientia EMTE Szenátusa által elfogadott TDK-szabályzat tartalmazza, amely az egyetem központi honlapján a Tehetséggondozás/TDK szabályzat fül alatt&nbsp;érhető el.</p>
<p style="text-align: justify;">BEJELENTKEZÉS ÉS KIVONATMINTA innen tölthető le:&nbsp;<a href="http://www.sapientia.ro/hu/tdk/tdk-szabalyzat">http://www.sapientia.ro/hu/tdk/tdk-szabalyzat</a></p>
<p style="text-align: justify;">A DOLGOZATSZERKESZTÉSI ÚTMUTATÓ innen letölthető:&nbsp;<a href="http://www.sapientia.ro/hu/tdk/tdk-szabalyzat">http://www.sapientia.ro/hu/tdk/tdk-szabalyzat</a></p>
<p style="text-align: justify;">Kérjük, a szabályzatban szereplő formai követelmények maradéktalan betartását mind a kivonat, mind a dolgozat és az alkotások esetében!&nbsp;Az egyes szekciókra vonatkozó specifikus elvárások az OTDT honlapján találhatóak:&nbsp;<a href="http://otdt.hu/">http://otdt.hu/</a>.</p>
<p style="text-align: justify;">Az OTDT szabályzata alapján mesteri disszertációval nem lehet a TDK-ra jelentkezni.</p>
<p style="text-align: justify;">Felhívjuk a figyelmet, hogy az Egyetem Szenátusa által elfogadott TDK-szabályzat V. 2. pontja értelmében: „Határidőn túl történő bejelentkezés esetében a TDK Szervező Bizottság dönthet a dolgozat bemutatásának az engedélyezéséről, de az csak versenyen kívül történhet. Ebben az esetben ezen dolgozatok nem pontozódnak, továbbjutásuk az OTDK-ra nem javasolható.”</p>
<p style="text-align: justify;">A Kari TDK megszervezésével a Sapientia EMTE célja, hogy időszerű tudományos előadásokkal járuljon hozzá az erdélyi felsőoktatásban résztvevő hallgatók szakmai fejlődéséhez. A rendezvényhez középiskolás verseny is kapcsolódik.</p>
<p style="text-align: justify;">A Kari TDK nyitott az érdeklődő nagyközönség számára is.</p>
<p style="text-align: justify;">(2017. december 20.)</p></div>'
        ]);
        DB::table('pages')->insert([
            'pages' => 'Sections',
            'pages_content' => '<div class="content-col content-col-wide">
        <h1>Szekciók</h1>
        <h3><strong>A VIII. Kari TDK szekciói:</strong></h3>
<h3><em>Jogtudomány szekció</em></h3>
<p><strong>Zsűri:</strong></p>
<p>dr. Mezey Barna (Eötvös Loránd Tudományegyetem) – elnök<br>dr. Vallasek Magdolna (Sapientia Erdélyi Magyar Tudományegyetem, Kolozsvári Kar)<br>dr. Székely János (Sapientia Erdélyi Magyar Tudományegyetem, Kolozsvári Kar)</p>
<h3>&nbsp;</h3>
<h3><em>Művészetelmélet szekció</em></h3>
<p><strong>Zsűri:</strong></p>
<p>dr. Varga Anna (Budapesti Metropolitan Egyetem) – elnök<br>dr. Gregus Zoltán (Babeș–Bolyai Tudományegyetem, Történelem és Filozófia Kar)<br>dr. Pieldner Judit (Sapientia Erdélyi Magyar Tudományegyetem, Csíkszeredai Kar)</p>
<p>&nbsp;</p>
<h3><em>Művészeti alkotások szekció – Film és Színház tagozat</em></h3>
<p><strong>Zsűri:</strong></p>
<p>dr. Kós Anna (Marosvásárhelyi Művészeti Egyetem) – elnök<br>Hajdu Szabolcs (rendező, Budapest)<br>Török-Illyés Orsolya (színművész, Budapest)</p>
<h3>&nbsp;</h3>
<h3><strong><em>Művészeti alkotások szekció – Fotó tagozat</em></strong></h3>
<p><strong>Zsűri:</strong></p>
<p>dr. Dorel Găină (Képzőművészeti és Formatervezői Egyetem) – elnök<br>dr. Kalló Angéla (Képzőművészeti és Formatervezői Egyetem)<br>dr. Jakab Tibor (Marosvásárhelyi Művészeti Egyetem)</p>
<p>&nbsp;&nbsp;</p>
<h3><em>Művészeti alkotások szekció – Zenei tagozat</em></h3>
<p><strong>Zsűri:</strong></p>
<p>dr. Banciu Katalin (Gheorghe Dima Zeneakadémia) – elnök<br>dr. Csákány Csilla (Partiumi Keresztény Egyetem)<br>dr. Fazakas Áron (Sapientia Erdélyi Magyar Tudományegyetem, Kolozsvári Kar)</p>
<p>&nbsp;&nbsp;</p>
<h3><em>Társadalomtudományi szekció – Nemzetközi tanulmányok tagozat</em></h3>
<p><strong>Zsűri:</strong></p>
<p>dr. Rostoványi Zsolt (Corvinus Egyetem) – elnök<br>dr. Nyusztay László (Budapesti Gazdasági Egyetem)<br>dr. Lupescu Radu (Sapientia Erdélyi Magyar Tudományegyetem, Kolozsvári Kar)</p>
<p>&nbsp;</p>
<h3><em>Társadalomtudományi szekció – Politikatudomány tagozat</em></h3>
<p><strong>Zsűri:</strong></p>
<p>dr. Kántor Zoltán (Nemzetpolitikai Kutatóintézet) – elnök<br>dr. Kiss Ágnes (Nemzeti Kisebbségkutató Intézet)<br>dr. Tonk Márton (Sapientia Erdélyi Magyar Tudományegyetem, Kolozsvári Kar)</p>
<h4><em>A szekciók beosztása elérhető a&nbsp;<a href="https://tdk.kv.sapientia.ro/index.php/site/page/?p=9">Program</a>&nbsp;menüpontnál.</em></h4></div>'
        ]);
        DB::table('pages')->insert([
            'pages' => 'Documents',
            'pages_content' => '<div class="content-col content-col-wide">
        <h1>Dokumentumok</h1>
        <h3><strong>IX. Kari TDK – 2019</strong></h3>
<ul>
<li><strong>Felhívások:</strong>
<ul>
<li><a href="https://tdk.kv.sapientia.ro/docs/felhivas_kolozsvari_kari_tdk_2019.pdf" target="_blank"><em>Jog, Környezettudomány, Művészetelmélet, Nemzetközi kapcsolatok és európai tanulmányok&nbsp;</em>szekciók</a></li>
<li><a href="https://tdk.kv.sapientia.ro/docs/felhivas_alkotoi_szekcio_2019.pdf" target="_blank"><em>Művészeti alkotások&nbsp;</em>szekció</a></li>
</ul>
</li>
<li><strong><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/2019/EMTE_TDK_szabalyzat_2018_honlapra.pdf">TDK szabályzat</a></strong>
<ul>
<li><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/2019/I_melleklet_bejelentkezesi_utmutato%20.docx">I. melléklet -&nbsp;Útmutató a TDK bejelentkezéshez és a kivonat elkészítéséhez</a></li>
<li><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/2019/II_melleklet_szerkesztesi_utmutato%20.docx">II. melléklet - TDK dolgozat szerkesztési útmutató</a></li>
<li><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/2019/III_melleklet_dolgozat_biralati_lap.docx">III. melléklet -&nbsp;TDK dolgozat bírálati lap</a></li>
<li><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/2019/IV_melleklet_eloadas_biralati_lap%20.docx">IV. melléklet -&nbsp;TDK előadás bírálati lap</a></li>
</ul>
</li>
</ul></div>'
        ]);
        DB::table('pages')->insert([
            'pages' => 'Program',
            'pages_content' => '<div class="content-col content-col-wide">
        <h1>Program</h1>
        <p><strong>Április 24., kedd</strong></p>
<p>18:00–21:00 Masterclass és kerekasztal-beszélgetés filmrészletekkel – Hajdu Szabolcs rendezővel és Török-Illyés Orsolya színésznő-forgatókönyvíróval (Hunyadi Mátyás díszterem)</p>
<p><strong>&nbsp;</strong></p>
<p><strong>Április 25., szerda</strong></p>
<p>8:30–14:00 Művészeti alkotások szekció – Film és Színház tagozat&nbsp;(Hunyadi Mátyás díszterem, Stúdió)</p>
<p>14:00–16:00 Megnyitó&nbsp;(Hunyadi Mátyás díszterem)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <em>Magyar felsőoktatás-történet [Egyetemek, főiskolák, akadémiák]</em> – dr. Mezey Barna magyar jogtörténész, az Országos Tudományos Diákköri Tanács alelnöke tart plenáris előadást&nbsp;</p>
<p>16:00–17:30 Jogtudományi szekció (Mócsy László kriminalisztikai laboratórium – B301)</p>
<p>16:00–19:00 Társadalomtudományi szekció – Nemzetközi tanulmányok tagozat (Balogh Artúr előadóterem – A204)</p>
<p>16:00–19:00 Művészeti alkotások szekció – Zenei tagozat&nbsp;(Hunyadi Mátyás díszterem)</p>
<p><strong>&nbsp;</strong></p>
<p><strong>Április 26., csütörtök</strong></p>
<p>9:00–13:00 Művészetelméleti szekció (Herman Ottó előadóterem – A105)</p>
<p>10:00–14:00 Társadalomtudományi szekció – Politikatudomány tagozat&nbsp;(Balogh Artúr előadóterem – A204)</p>
<p>15:00–16:00 Plenáris záróelőadás – David McAllister EP-képviselő: <em>Brexit and its potential impacts</em> (angol nyelvű előadás szinkronfordítással)* (Hunyadi Mátyás díszterem)</p>
<p>14:00–19:00 Művészeti alkotások szekció – Fotó tagozat (Hunyadi Mátyás díszterem előtere, Herman Ottó előadóterem – A105)</p>
<p>20:00 Díjátadó&nbsp;ünnepség (Hunyadi Mátyás díszterem)</p>
<p>&nbsp;</p>
<p>* Sógor Csaba európai parlamenti képviselő hozzájárulásával.</p>
<p>&nbsp;</p>
<h1>SZEKCIÓK PROGRAMJA</h1>
<h2><span style="background-color: #008000; color: #ffffff;"><strong>Szerda, április 25.</strong></span></h2>
<h3><strong><em>8:30–13:00 Művészeti alkotások szekció – Film és Színház tagozat</em></strong></h3>
<p><em>Hunyadi Mátyás díszterem</em></p>
<table style="width: 868px;" border="0" width="868" cellspacing="0" cellpadding="0"><colgroup><col width="92"> <col width="380"> <col width="11"> <col width="385"> </colgroup>
<tbody>
<tr>
<td class="xl64" width="92" height="19">8:30-8:45</td>
<td class="xl64" width="380">Frunza Roland</td>
<td class="xl63" width="385">Zavar</td>
</tr>
<tr>
<td class="xl64" height="19">8:45-9:00</td>
<td class="xl63">Gál Márk, Pogonyi Hunor, Nagy László</td>
<td class="xl63">#blackout</td>
</tr>
<tr>
<td class="xl64" height="19">9:00-9:15</td>
<td class="xl65">Kovács Kriszta Orsolya</td>
<td class="xl63">Érettségi</td>
</tr>
<tr>
<td class="xl64" height="19">9:15-9:30</td>
<td class="xl63">Patrubány Csilla&nbsp;</td>
<td class="xl63">Moha</td>
</tr>
<tr>
<td class="xl64" height="19">9:30-9:45</td>
<td class="xl63">Purosz Leonidasz&nbsp;</td>
<td class="xl63">Fájdalomküszöb</td>
</tr>
<tr>
<td class="xl64" height="19">9:45-10:00</td>
<td class="xl63">Szabó Norbert Zsolt&nbsp;</td>
<td class="xl63">Hamu és kívánság</td>
</tr>
<tr>
<td class="xl64" height="19">10:00-10:15</td>
<td class="xl63">Tóthpál Béla&nbsp;</td>
<td class="xl63">Nem kötöm meg!</td>
</tr>
</tbody>
</table>
<p dir="ltr"><em>Stúdió</em></p>
<table style="height: 189px;" border="0" width="867" cellspacing="0" cellpadding="0"><colgroup><col width="92"> <col width="380"> <col width="385"> </colgroup>
<tbody>
<tr>
<td class="xl66" width="92" height="19">10:20-10:30</td>
<td class="xl67" width="380">Szabó János Szilárd</td>
<td class="xl65" width="385">Nincstelenek (Anyánk minden este imádkozik)</td>
</tr>
<tr>
<td class="xl66" height="19">10:30-10:40</td>
<td class="xl67">András Gedeon</td>
<td class="xl65">Nincstelenek (A nővéremnek még mindig taknyos az orra)</td>
</tr>
<tr>
<td class="xl66" height="19">10:40-10:50</td>
<td class="xl67">Szekeres Blanka</td>
<td class="xl65">Nincstelenek (Megáll a bogár)</td>
</tr>
<tr>
<td class="xl66" height="19">10:50-11:00</td>
<td class="xl67">Sosovicza Anna</td>
<td class="xl65">Nincstelenek (Megvert anyám)</td>
</tr>
<tr>
<td class="xl66" height="19">11:00-11:10</td>
<td class="xl67">Scurtu David</td>
<td class="xl65">Nincstelenek (A málnásban bújunk el a nővéremmel)</td>
</tr>
<tr>
<td class="xl66" height="19">11:10-11:20</td>
<td class="xl67">Borsos Tamás</td>
<td class="xl65">Nincstelenek (A gyerekeket a gólya hozza)</td>
</tr>
<tr>
<td class="xl66" height="19">11:20-11:30</td>
<td class="xl67">Pelsőczy Luca</td>
<td class="xl65">Nincstelenek (Anyám hisztériázik)</td>
</tr>
<tr>
<td class="xl66" height="19">11:30-11:40</td>
<td class="xl67">Tóth Zsófia</td>
<td class="xl65">Nincstelenek (Elképzelem, hogy anyám halott)</td>
</tr>
<tr>
<td class="xl66" height="19">11:40-11:50</td>
<td class="xl67">Cserna Lili</td>
<td class="xl65">Nincstelenek (Arra ébredek)</td>
</tr>
</tbody>
</table>
<p>Szünet</p>
<table border="0" width="857" cellspacing="0" cellpadding="0"><colgroup><col width="92"> <col width="380"> <col width="385"> </colgroup>
<tbody>
<tr>
<td class="xl67" width="92" height="19">12:00-12:15</td>
<td class="xl65" width="380">Barabás Hunor&nbsp;</td>
<td class="xl65" width="385">Óra kattog</td>
</tr>
<tr>
<td class="xl66" height="19">12:15-12:30</td>
<td class="xl65">Bugnár Szidónia, Erdős Orsolya, Köllő Andrea</td>
<td class="xl65">A Nyugatos lányok</td>
</tr>
<tr>
<td class="xl66" height="19">12:30-12:45</td>
<td class="xl65">Csergő Tamás&nbsp;</td>
<td class="xl65">„Korlátozott” kreativitás: Haikuk</td>
</tr>
<tr>
<td class="xl66" height="19">12:45-13:00</td>
<td class="xl65">Fosztó András&nbsp;</td>
<td class="xl65">Egyszer élünk és ez már az!</td>
</tr>
<tr>
<td class="xl66" height="19">13:00-13:15</td>
<td class="xl65">Pásztor Márk</td>
<td class="xl65">Dalszerzés színész szakon</td>
</tr>
</tbody>
</table>
<h3><strong><em>16:00–17:30&nbsp;Jogtudományi szekció<br></em></strong></h3>
<p><em>Mócsy László kriminalisztikai laboratórium – B301</em></p>
<table border="0" width="857" cellspacing="0" cellpadding="0"><colgroup><col width="92"> <col width="380"> <col width="385"> </colgroup>
<tbody>
<tr>
<td class="xl66" width="92" height="19">16:00-16:20</td>
<td class="xl66" width="380">Hajducsi Árpád</td>
<td class="xl65" width="385">A királyi lemondás és jogkövetkezményei</td>
</tr>
<tr>
<td class="xl66" height="19">16:20-16:40</td>
<td class="xl66">Enyedi Tamás</td>
<td class="xl65">A tömegverekedés bűncselekménynek vitatott elemei</td>
</tr>
<tr>
<td class="xl66" height="19">16:40-17:00</td>
<td class="xl66">Szabó Csaba</td>
<td class="xl65">A már jól ismert 13-as számú sürgősségi kormányrendelet</td>
</tr>
<tr>
<td class="xl66" height="19">17:00-17:20</td>
<td class="xl66">Czapp Árpád-Szilárd</td>
<td class="xl65">A borok eredetvédelméről</td>
</tr>
</tbody>
</table>
<h3>&nbsp;</h3>
<h3><em><strong>16:00–18:00 Társadalomtudományi szekció – Nemzetközi tanulmányok tagozat</strong></em></h3>
<p><em>Balogh Artúr előadóterem – A204</em></p>
<table border="0" width="857" cellspacing="0" cellpadding="0"><colgroup><col width="92"> <col width="380"> <col width="385"> </colgroup>
<tbody>
<tr>
<td class="xl70" width="92" height="57">16:00-16:20</td>
<td class="xl70" width="380">András Kinga, Beța Daniela Valentina</td>
<td class="xl65" width="385">A migráció kérdésének emberjogi aspektusai. Milyen sávszélességű internet jár az Európába érkező menekülteknek?</td>
</tr>
<tr>
<td class="xl68" height="57">16:20-16:40</td>
<td class="xl68">Bányász Bence-Ferenc</td>
<td class="xl66" width="385">A hírszerzés és kémkedés hatása a modern diplomáciára, a 2016-os amerikai elnökválasztások tükrében</td>
</tr>
<tr>
<td class="xl68" height="38">16:40-17:00</td>
<td class="xl68">Gál Noémi</td>
<td class="xl66" width="385">GMO-szabályozás az Európai Unióban és az Amerikai Egyesült Államokban</td>
</tr>
<tr>
<td class="xl68" height="19">17:00-17:20</td>
<td class="xl71">Makai Csilla</td>
<td class="xl68">Migrációs kihívások – európai válaszok</td>
</tr>
<tr>
<td class="xl68" height="38">17:20-17:40</td>
<td class="xl71">Teleki Tibor Csongor</td>
<td class="xl69" width="385">A Várnai 4-ig vezető út és a balkáni országok együttműködésének lehetséges kilátásai</td>
</tr>
<tr>
<td class="xl68" height="57">17:40-18:00</td>
<td class="xl71">Szabó Hunor</td>
<td class="xl69" width="385">Az Egyesült Királyságban élő erdélyi magyarok helyzetének vizsgálata a BREXIT után</td>
</tr>
</tbody>
</table>
<h3>&nbsp;</h3>
<h3><strong><em>16:00–19:00 Művészeti alkotások szekció –&nbsp;Zenei tagozat</em></strong></h3>
<p><em>Hunyadi Mátyás díszterem</em></p>
<table border="0" width="857" cellspacing="0" cellpadding="0"><colgroup><col width="92"> <col width="380"> <col width="385"> </colgroup>
<tbody>
<tr>
<td class="xl66" width="92" height="19">16:00-16:20</td>
<td class="xl65" width="380">Babțan-Varga Flórián</td>
<td class="xl65" width="385">Zeneművészet klasszikus gitáron, barokktól napjainkig</td>
</tr>
<tr>
<td class="xl66" height="19">16:20:16:40</td>
<td class="xl65">Elek Gergő</td>
<td class="xl65">Ha jó a kedved</td>
</tr>
<tr>
<td class="xl66" height="19">16:40-17:00</td>
<td class="xl65">Fábián Attila</td>
<td class="xl65">Intés (dal zongorára és énekhangra)</td>
</tr>
<tr>
<td class="xl66" height="19">17:00-17:20</td>
<td class="xl65">Orosz Dávid</td>
<td class="xl65">Mario Castelnuovo Tedesco – „hommage” Paganini művészetére</td>
</tr>
<tr>
<td class="xl66" height="19">17:20-17:40</td>
<td class="xl65">Ömböli Péter</td>
<td class="xl65">Jazz blues funk</td>
</tr>
<tr>
<td class="xl66" height="19">17:40-18:00</td>
<td class="xl65">Tudor Gliga, Orosz Dávid</td>
<td class="xl65">Duó</td>
</tr>
<tr>
<td class="xl66" height="19">18:00-18:20</td>
<td class="xl65">Kibédi Levente, Tudor Gliga, Balogh Marcu, Gheorghiu Cristian</td>
<td class="xl65">Gitárkvartett</td>
</tr>
</tbody>
</table>
<h2>&nbsp;</h2>
<h2><span style="background-color: #008000; color: #ffffff;"><strong>Csütörtök, április 26.</strong></span></h2>
<h3><strong><em>9:00–12:00 Művészetelméleti szekció</em></strong></h3>
<p><em>Herman Ottó előadóterem – A105</em></p>
<table border="0" width="925" cellspacing="0" cellpadding="0"><colgroup><col width="79"> <col width="226"> <col width="620"> </colgroup>
<tbody>
<tr>
<td class="xl67" width="79" height="38">9:00-9:20</td>
<td class="xl69" width="226">Víg Zsombor</td>
<td class="xl68" width="620">A Sapientia EMTE kolozsvári diákjainak médiafogyasztási szokásai</td>
</tr>
<tr>
<td class="xl67" height="38">9:20-9:40</td>
<td class="xl69">Patrubány Csilla</td>
<td class="xl68" width="620">Nem látta senki – a sebezhetőség ezer árnyalata Barbara Loden <em>Wanda</em> című filmjében</td>
</tr>
<tr>
<td class="xl67" height="38">9:40-10:00</td>
<td class="xl69">Farkas Boglárka Angéla</td>
<td class="xl68" width="620">Harc az arccal, avagy Bette Davis és Gena Rowlands gesztusai a <em>Mi történt Baby Jane-nel?</em> és a <em>Premier</em> c. filmben</td>
</tr>
<tr>
<td class="xl67" height="38">10:00-10:20</td>
<td class="xl69">Kovács Flóra</td>
<td class="xl65" width="620">Oféliák mozgóképen: Stanley Kubrick Lady Lyndonjától Enyedi Ildikó Máriájáig</td>
</tr>
</tbody>
</table>
<p>Szünet&nbsp;</p>
<table border="0" width="925" cellspacing="0" cellpadding="0"><colgroup><col width="79"> <col width="226"> <col width="620"> </colgroup>
<tbody>
<tr>
<td class="xl67" width="79" height="38">10:40-11:00</td>
<td class="xl69" width="226">Farkas Boglárka Angéla</td>
<td class="xl68" width="620">Tenger alatt járók, avagy modern elvágyódás <em>A bikaborjak</em> és a <em>Trainspotting</em> c. filmben</td>
</tr>
<tr>
<td class="xl67" height="38">11:00-11:20</td>
<td class="xl69">Ferencz Zsófia</td>
<td class="xl68" width="620">Dühöngő bikaborjak. Egy korai Fellini-klasszikus továbbélései a 70-es, 80-as évek amerikai férfi<br>coming-of-age filmjeiben</td>
</tr>
<tr>
<td class="xl66" height="19">11:20-11:40</td>
<td class="xl65">Incze Romhilda-Barbara</td>
<td class="xl65">Az irracionalitás néma rejtelmeinek vörös világában</td>
</tr>
<tr>
<td class="xl67" height="38">11:40-12:00</td>
<td class="xl69">Sós Timothy-Valentin</td>
<td class="xl68" width="620">Istenség és szörnyeteg: bibliai vonatkozások és moralitás <em>A víz érintése</em> című filmben</td>
</tr>
</tbody>
</table>
<h3>&nbsp;</h3>
<h3><strong><em>10:00–12:00&nbsp;<em><strong>Társadalomtudományi szekció – Politikatudomány tagozat</strong></em></em></strong></h3>
<p><em>Balogh Artúr előadóterem – A204</em></p>
<table border="0" width="925" cellspacing="0" cellpadding="0"><colgroup><col width="79"> <col width="226"> <col width="620"> </colgroup>
<tbody>
<tr>
<td class="xl66" width="79" height="19">10:00-10:20</td>
<td class="xl66" width="226">Heveli Anett Mária</td>
<td class="xl65" width="620">A román–magyar határ szerepének változása</td>
</tr>
<tr>
<td class="xl66" height="19">10:20-10:40</td>
<td class="xl66">Brinzan-Antal Cristina</td>
<td class="xl65">Erdélyi középiskolák nyelvi tájképe</td>
</tr>
<tr>
<td class="xl67" height="38">10:40-11:00</td>
<td class="xl67">Bálint Emőke</td>
<td class="xl68" width="620">A néptanító szerepe a magyargyerőmonostori lokális identitás megteremtésében</td>
</tr>
<tr>
<td class="xl67" height="38">11:00-11:20</td>
<td class="xl67">Sarány Orsolya</td>
<td class="xl68" width="620">Támogatói érdek és hiteles tájékoztatás a romániai magyar nyomtatott sajtóban</td>
</tr>
<tr>
<td class="xl66" height="19">11:20-11:40</td>
<td class="xl66">Simó Helga</td>
<td class="xl65">Erdélyi magyarok ellenségképe a migrációs válság tükrében</td>
</tr>
<tr>
<td class="xl66" height="19">11:40-12:00</td>
<td class="xl66">Varga Szilvia</td>
<td class="xl65">Kolozsvári középiskolások politikai szocializációja</td>
</tr>
</tbody>
</table>
<h3>&nbsp;</h3>
<h3><strong><em>14:00–18:00 Művészeti alkotások szekció – Fotó tagozat</em></strong></h3>
<p><em>Hunyadi Mátyás díszterem előtere</em></p>
<p>14:00–15:00 Kiállított alkotások közös megtekintése</p>
<p><em>Herman Ottó előadóterem – A105</em></p>
<p>15:00–18:00 Bemutatók</p>
<table border="0" width="846" cellspacing="0" cellpadding="0"><colgroup><col width="226"> <col width="620"> </colgroup>
<tbody>
<tr>
<td class="xl67" width="226" height="19">Csiki Anikó</td>
<td class="xl65" width="620">Szabad Esés</td>
</tr>
<tr>
<td class="xl67" height="19">Hajdu Beáta</td>
<td class="xl65">A reklámok hatalma</td>
</tr>
<tr>
<td class="xl67" height="19">Ilyés Zalán</td>
<td class="xl65">West End Punk</td>
</tr>
<tr>
<td class="xl67" height="19">Kerestély Dóra</td>
<td class="xl65">Az én világom</td>
</tr>
<tr>
<td class="xl67" height="19">Kovács Kriszta Orsolya</td>
<td class="xl65">Gasztronómiai kavalkád</td>
</tr>
<tr>
<td class="xl67" height="19">Lakatos Ádám</td>
<td class="xl65">A város lüktető szíve</td>
</tr>
<tr>
<td class="xl67" height="19">Mariș Cristian Daniel</td>
<td class="xl65">Betekintés a bábművészet világába</td>
</tr>
<tr>
<td class="xl65" height="19">Menyhárt László&nbsp;</td>
<td class="xl65">Életképek a szénégetők hétköznapjaiból</td>
</tr>
<tr>
<td class="xl67" height="19">Nagy László</td>
<td class="xl65">Támpontok – egy elszigetelt roma közösség mindennapjai</td>
</tr>
<tr>
<td class="xl67" height="19">Sárkány Hilda-Sarolta</td>
<td class="xl65">Szülőfalum</td>
</tr>
<tr>
<td class="xl67" height="19">Simon Róbert</td>
<td class="xl65">A kenyér születése</td>
</tr>
<tr>
<td class="xl67" height="19">Farkas Boglárka Angéla</td>
<td class="xl65">Moving forward</td>
</tr>
<tr>
<td class="xl67" height="19">Ferencz Zsófia</td>
<td class="xl65">Blue Shift</td>
</tr>
<tr>
<td class="xl67" height="19">Páll Adél</td>
<td class="xl65">Split</td>
</tr>
<tr>
<td class="xl67" height="19">Tóthpál Béla</td>
<td class="xl65">Blue – Rush Hour</td>
</tr>
</tbody>
</table></div>'
        ]);
        DB::table('pages')->insert([
            'pages' => 'Archive',
            'pages_content' => '<div class="content-col content-col-wide">
        <h1>Archívum</h1>
        <h2>VIII. Kari Tudományos Diákköri Konferencia – 2018</h2>
<ul>
<li><strong>Felhívások:</strong>
<ul>
<li><a href="http://kv.sapientia.ro/data/Kari%20TDK_felhivas.pdf"><em>Jog, Környezettudomány, Művészetelmélet, Nemzetközi kapcsolatok és európai tanulmányok&nbsp;</em>szekciók</a></li>
<li><a href="http://kv.sapientia.ro/data/Muveszeti-alkotasok_szekcio_felhivas.pdf"><em>Művészeti alkotások&nbsp;</em>szekció</a></li>
</ul>
</li>
<li><strong><a href="https://tdk.kv.sapientia.ro/docs/kari_tdk_programarchivum.pdf" target="_blank">Program</a></strong></li>
<li><strong><a href="https://tdk.kv.sapientia.ro/docs/2018_kari_tdk_zsuri.pdf" target="_blank">Zsűri</a></strong></li>
<li><strong><a href="https://tdk.kv.sapientia.ro/docs/kari_tdk_hirek_2018.pdf" target="_blank">Hírek és eredmények</a></strong></li>
<li><strong>Szabályzatok:</strong>
<ul>
<li><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/EMTE_TDK_szabalyzat_honlapra.pdf" target="_blank">T</a><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/EMTE_TDK_szabalyzat_honlapra.pdf" target="_blank">DK szabályzat</a></li>
<li><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/EMTE_TDK_szabalyzat_I_melleklet_kivonat_bejelentkezes.docx" target="_blank">I. melléklet: Útmutató a TDK-bejelentkezéshez és a kivonat elkészítéséhez</a></li>
<li><a href="http://kv.sapientia.ro/data/EMTE_TDK_szabalyzat_II_melleklet_szerkesztesi%20utmutato.pdf" target="_blank">II. melléklet: TDK-dolgozat-szerkesztési útmutató</a></li>
<li><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/EMTE_TDK_szabalyzat_III_melleklet_dolgozat_biralati%20lap.docx" target="_blank">III. melléklet: TDK-dolgozat-bírálati lap</a></li>
<li><a href="http://www.sapientia.ro/data/Tehetseggondozas/TDKszabalyzat/EMTE_TDK_szabalyzat_IV_melleklet_eloadas_biralati%20lap.docx" target="_blank">IV. melléklet: TDK-előadás-bírálati lap</a></li>
</ul>
</li>
</ul></div>'
        ]);

    }

}
