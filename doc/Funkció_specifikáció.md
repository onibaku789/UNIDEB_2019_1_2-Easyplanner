# Funkció specifikáció
* * *


###Tartalomjegyzék
- [1. Jelenlegi helyzet](#jelenlegi-helyzet)
- [2. A rendszer célja](#a-rendszer-célja)
- [3. A rendszer használata](#rendszer-használata)
- [4. Követelménylista](#követelménylista)
- [5. Kínált üzleti folymatok](#kínált_üzleti_folyamatok)
- [6. Követelménylista](#követelménylista)
- [7. Használati esetek](#használati-esetek)
- [8. Képernyőkép tervek](#képernyőkép-tervek)

<br>[1.]<br>
#### Jelenlegi helyzet

A csapat Google Spreadsheets-ben vezeti a csapattagok számára megfelelő időintervallumokat. A tagok neveit egy oszlopba, a hét napjait pedig egy sorba vették fel és ebből csináltak egy táblázatot, majd ebből létrehoztak egy olyan sablon táblázatot, amit mintaként minden egyes héten manuálisan átmásolnak egy új munkalapra. A dátumok változása, és az egy új csapattag felvétele ugyancsak kézileg került felvitelre a táblázatban. Minden esetleges egyéb módosítást szintén kézzel végeznek. Problémák adódtak például a különböző készülékeken -úgymint okostelefon és tablet- keresztül történő módosításokkal is. Amennyiben valaki megjegyzést akart fűzni egy-egy naphoz, nem volt rá lehetőség, így az esetleges egyéb információkat a táblázat után írták a saját sorukba. A biztonsággal úgyszintén felmerültek komplikációk, mivel nem voltak korlátok szabva arra vonatkozóan, hogy bizonyos emberek mit módosíthatnak a táblázaton belül. Így tehát előfordulhatott az a helyzet is, hogy egy ember nem a saját "sorában” módosított adatokat, ha például elhibázta a sort. Továbbá, a megosztást egy szerkeszthetőséggel felruházó hivatkozással végezték, ennél fogva ennek a linknek a birtokában bárki módosíthatott bármit, ami ugyancsak nagymértékben csökkentette az információk megbízhatóságát. Gyakori jelenség volt, hogy valaki elfelejtette kitölteni a táblázatot, illetve az is, hogy az új hét kiírása (a sablon új munkalapra másolása és a dátumok módosítása) késve történt meg.

- <b>Táblázat létrehozása</b>: Amint említettük egy Google Spreadsheets-ben töltögetjük a táblázatunkat, ezért létre kellett hozni minden héten a táblát, ki kellett törölni az előző adatokat, szóval nagyon időigényessé tette a szervezést.
- <b>Táblázat kitöltése a felhasználói adatokkal</b>: Rengeteg problémát okozott, hogy két csapatunk van, ezért sokszor nem volt egyértelmű, hogy egy ember hova kerüljön.
- <b>Táblázat kitöltése időpontokkal</b></b>: Egyértelműnek tűnik, hogy bejelöljük mikor érünk rá, de rengeteg embernek ez nem sikerül és átlag 20-ból 4-5ember nem tölti ki, ez legtöbbször probléma, mert folyamatosan zaklatni kell őket.
- <b>Táblázat kiértékelése</b>: Az eddigi fő rendszerünk gyengesége, hogy nagyon sok időt elvett tőlünk az, hogy kiértékeljük a legjobb időpontot, ami mindenkinek megfelelő, és ott tud lenni az eseményen. Ez egy 20 fős társaság esetében általában fél órát vett igénybe, de később szeretnénk terjeszkedni és több, nagyobb csapatokat kialakítani.<br>
<br>[2.]<br>
#### A rendszer célja

<br>[2.1]<br>
A rendszer célja, hogy rendszert vigyen játékos csoportok életébe és segítse őket a mindenki számára
elérhető, legkedvezőbb időpont megtalálásában. Ennek érdekében a Taco's kft.
Egy webalkalmazást fog írni, ami első körben tartalmazni fogja:
a regisztrációt, amiben egy felhasználónevet, jelszót, és egy email címet kell megadni,
a bejelentkezést, felhasználónév és jelszó párossal tudnak hozzáférni a felhasználójukhoz
továbbá lehetőséget adunk jelszóváltoztatásra, és egy előre megadott listából avatar választásra.
Ami a táblázatot illeti az első körben csak egy adott időintervallumban tudjuk vállalni az egyeztetést, ezáltal a rendszer letiltja azt az adott napot ahol már megadott egy intervallumot.
A napokhoz tartozik majd a dátumuk is, amelyet a rendszer automatikusan tölt ki, ezzel egyértelműen meglehet határozni, hogy ki mikor ér rá.
A moderátorok értesítést kapnak arról, hogyha egy csapattag nem töltötte még ki a táblázatot. Ez történhet egyaránt emailben és felületen megjelenő értesítésként is.
Megjegyzést lehet a beosztásukhoz fűzni, viszont a táblázatban dupla kattintással aktiválható lesz egy "Bizonytalan" státusz is, mely egyértelműen jelzi, hogy az illető nem biztos hogy ráér abban az időpontban.
Több csapat létrehozására is lesz lehetőség, mégpedig azok a felhasnzálók akik a csapatot létrehozzák, azok lesznek az úgynevezett Moderátorok, akik több információt is megadhatnak a csapatról, embereket hívhatnak meg, és rúghatnak ki.
Egy felhasználó több csapatban is megjelenthet egyszerre, egy felületen megjelenő legördülő menüből lehet választani, hogy jelenleg melyik csapatban szeretnének utasításokat elvégezni.
A webalkalmazás home page-e egy bejelentkezett felhasználónak az általa kiválasztott csapat (a kiválasztás egy legördülő menü keresztül történik) aktuális információit
 tartalmazza a táblázat helyzetéről. <br>
 
 A csapat menüpontban (amit az oldal felső részén elhelyezkedő sávból tudunk kiválasztani) olyan információkat érhetünk el mint:
 - az adott napoknak a legkedvezőbb időpontjait
 - csapat nevét
 - a leghosszabb intervallumot egy-egy napra


így a felhasználó könnyen, gyorsan informálódhat az aktuális helyzetről és az időpontokról, intervallumokról.
Nem regisztrált vagy nem bejelentkezett felhasználó ezeket az információkat nem érhetik el.
<br><br>[2.2]<br>
###### A rendszernek nem célja
A rendszernek nem célja vizsgálni azt, hogy a betervezett esemény megvalósult-e és azt, hogy
visszajelzett felhasználók megjelentek-e a kért időben.
<br>Továbbá a Taco's kft. munkatársai meglátása szerint a
kvíz funkciókat egy az easyplanner-től különálló, független webalkalmazásban érdemesebb lenne fejleszteni,
szemelőtt tartva az egyszerűséget és az alkalmazás átláthatóságat.

<br>[3.]<br>
#### Rendszer használata
<br>[3.1]<br>
A rendszer használatához szükség van egy felhasználóra, amelyet egy regisztrációs folyamaton keresztül hozhatunk létre, szükségünk lesznek a következő adatokra:
- Felhasználónév (kötelező, min. 3 karakter, max. 32 karakter )
- Jelszó
  - Jelszavad min. 6 karakter, max. 64 karakter lehet
  <br>Tartalmaznia kell a következőket<br>
    - Legalább egy kisbetű
    - Legalább egy nagybetű
    - Legalább egy szám
- Jelszó újra (meg kell egyeznie a jelszóval)
- E-mail cím (kötelező, érvényes e-mail címet kell használni)
<br>[3.2]<br>
Regisztráció után egyből a <b>Kezdőlapra</b> irányítja a felhasználót, ami a rendszerünk magja, de amíg nem csatlakoztunk csapathoz, vagy nem hoztunk létre egyet, addig nem tudjuk használni az időbeosztási táblát.
Ami után csatlakozott egy csapathoz, akár meghívásos alapon, akár jelentkezett megjelenik neki egy legördülő menü a <b>Kezdőlapon</b>, ahol ki tudja választani a csapatát, amelyhez aktualizálni akarja a szabadidejét.
<br>[3.3]<br>
A tábla a következőképpen néz ki:

- Az aktuális naptól az elkövetkezendő hét napot tartalmazza, minden naphoz egy órás blokkok találhatók 0-24 óráig.
- Alapból üresen (fehér állapotban vannak a blokkok), de viszont ha bejelölünk egy időpontot, akkor zöldre változik.

Ha végeztünk a táblázat kitöltésével, akkor a Mentés gombra kattintunk az oldal alján, és egy üzenet jelezni is fogja, hogy sikeres volt-e a mentésünk. Ha esetleg nem sikerül, akkor felajánlja a rendszer, hogy írjon egy Ticketet a fejlesztőknek, mert rendszerbeli probléma történhetett.
<br>[3.4]<br>
Található a menüsorban egy <b>Csapat</b> menüpont, ahol a statisztikák, és a napokra bontott összesítés történik: a rendszer kiszámolja, hogy melyik lenne a legjobb időpont rendezni egy programot.
Ebben a menüpontban kerülnének olyan statisztikák is, mint például, hogy átlagosan mikor érnek rá a csapat tagjai, ezáltal később akár előre lehet következtetni a szabadidőket.
Továbbá le lehet kérni, hogy ki pontosan mikor ér rá, mettől-meddig.
(hó, nap, óra) Amennyiben a csapatot mi hoztuk létre, úgy lehetőségünk van ezen felületen egy link generálására is. A link továbbíthatjuk már regisztrált felhasználók
számára, akik ennek segítségével könnyedén csatlakozhatnak a csapatunkhoz.<br>
<br>[3.5]<br>
Lehetősége van a felhasználónak új csapatot létrehozni, ezt a kezdőlapon található "csapat létrehozása" gombra kattintva teheti meg.
A létrehozáskor meg kell adjuk a csapat nevét és rövid leírását. Mindezek után a csapat létrehozása gombra kattinta az új csapatunk
táblázata már készen is áll a használatra, jelenleg egy csapattaggal (a csapat készítőjével).
<br>[3.6]<br>
Rendszerünkön jogrendszer található, vannak olyan részei, amit csak az úgynevezett <b>Adminisztrátorok</b> vehetnek igénybe. Ilyen például az Admin fül, ahol több beállítás található, például hogy egy csapat maximum hány fővel rendelkezhet, és dönthet arról, hogy egy csapatnak vagy felhasználónak jogosultsága van-e használni az oldalt (azaz lehet törölni/tiltani felhasználót, csapatot). <br>
<br>[3.7]<br>
Felhasználói jogrendszerben továbbá található egy menüpont, ahol megváltoztathatjuk az adatainkat, ez a <b>Profil</b> nevet kapta.
Itt tudunk beállítani magunknak avatart (JPG, max. 300x300, és 200kbyte), megváltoztatni a jelszavunkat, és becenevet is beállíthatunk magunknak.<br>
Ha már egy bejelentkezett felhasználó a <b>Kijelentkezés</b>re kattint, akkor visszakerül a <b>Kezdőlap</b>ra, ahonnan csak újra bejelentkezéssel tud hozzáférni adataihoz.
<br>
<br>[3.8]<br>
Az webalkalmazás minden lapján elérhető a felhasználó számára a kijelentkezés gomb. A kijelentekzett felhasználó értelem szerűen
nem fér hozzá és nem is látja sem a saját csapatai sem más csapatok táblázatait és egyéb információit.<br>
<br>[3.9]<br>
A kijelentkezéshez hasonlóan az admin felület is bárhonnan elérhető az adminok számára. Ezen a felületen az adminok töbekközött felhasználók jogköreit
tudják kezelni.


#### Követelménylista

##### A játékosok csoportja a következő folyamatokat mindenképpen szeretnék látni az elkészült webalkalmazásban:
- Felhasználók be és kijelentkezésének lehetőségét. Ezt kifejtve a következő pontban találjuk: [3.1]
- Felhasználok a számukra elérhető iőpontokat táblázatban szeretnék rögzíteni. Ezt kifejtve a következő pontban találjuk: [3.3]
- Felhasználók csapatokba jelentkezhessenek. Ezt kifejtve a következő pontban találjuk: [3.4]
- Felhasználóknak a táblázatok alapján egy külön oldal biztosítson információt az aktuális helyzetről. Ezt kifejtve a következő pontban találjuk: [3.4]
- Admin felület. Ezt kifejtve a következő pontban találjuk: [3.6]
- Aki nem tagja a csoportnak ne nézhesse meg a táblázatok állást. Ezt kifejtve a következő pontban találjuk: [3.8]
- Felhasználó adatainak módosítási lehetőség Ezt kifejtve a következő pontban találjuk: [3.7]
- könnyű csapatba való invitálás Ezt kifejtve a következő pontban találjuk: [3.4]

##### Azok a folyamatok melyek nem kulcsfontoságúak: 
- kvíz felület
- minden felhasználó hozasson létre kvízt
- kvízeken elért felhasználói eredményeket összhasonlíthassuk a csapat többi felhasználóinak eredményeivel

#### Képernyőkép tervek
Főbb funkciók oldakra bontva
Az weboldalon egy állandó fejléc, ahol a különböző menüpontok találhatóak.
- Bejelentkezés:
 A bejelentkező oldalon két ürlapmező található, ahol 		értelemszerűen be lehet jelentkezni, továbbá meg lehet 		adni az oldalnak, hogy emlékezzen a felhasználónkra és 		jelszavunkra.Illetve egy linket, ami átvisz minket a 		regisztrációs ürlapra.
- Regisztráció
   A regisztrációs oldalon négy ürlapmező található. Egy a felhasználónak, egy az e-mail címnek, kettő pedig a jelszónak és a jelszómegerősítésnek.
- Home
 	Bejelentkezés után.
- Profil
- Csapatprofil
