# Követelmény specifikáció
* * *

###Tartalomjegyzék
- [Áttekintés](#áttekintés)
- [Jelenlegi helyzet](#jelenlegi-helyzet)
- [Vágyálom rendszer](#vágyálom-rendszer)
- [Jelenlegi üzleti folyamatok](#jelenlegi-üzleti-folyamatok)
- [Kívánt üzleti folyamatok](#kívánt-üzleti-folyamatok)



#### Áttekintés
Egy hobbi játékosokból álló baráti társaság olyan időpontokat szeretne választani minden egyes héten, amelyek a legtöbb embernek egyszerre felelnek meg, valamint a játékhoz minimálisan szükséges létszám, azaz 10 fő/csapat, szimultán képes időt szakítani a közös programra. A társaságon belül több csapat létezik, melyeket sorszámokkal jelölnek (első, második csapat, stb.), és ezen csoportokon belül gyakran átfedések is létrejönnek, a kellő létszám elérése érdekében. Ez azt jelenti, hogy egy személy egy héten több csapatban is megfordulhat, saját szabadidejéhez, és a társaság igényeihez igazodva.
Szeretnék, ha a webalkalmazás kezelni tudna különböző felhasználókat és azok jogkörét. Ezzle biztosítva azt, hogy az oldalt használók minden esetben a számukra releváns, informatív és könnyen értelmezhető visszajelzést kapjanak az aktuális helyzetről.
#### Jelenlegi helyzet
![Jelenlegi helyzet](img/koordinátor.png)
A csapat Google Spreadsheets-ben vezeti a csapattagok számára megfelelő időintervallumokat. A tagok neveit egy oszlopba, a hét napjait pedig egy sorba vették fel és ebből csináltak egy táblázatot, majd ebből létrehoztak egy olyan sablon táblázatot, amit mintaként minden egyes héten manuálisan átmásolnak egy új munkalapra. A dátumok változása, és az egy új csapattag felvétele ugyancsak kézileg került felvitelre a táblázatban. Minden esetleges egyéb módosítást szintén kézzel végeznek. Problémák adódtak például a különböző készülékeken -úgymint okostelefon és tablet- keresztül történő módosításokkal is. Amennyiben valaki megjegyzést akart fűzni egy-egy naphoz, nem volt rá lehetőség, így az esetleges egyéb információkat a táblázat után írták a saját sorukba. A biztonsággal úgyszintén felmerültek komplikációk, mivel nem voltak korlátok szabva arra vonatkozóan, hogy bizonyos emberek mit módosíthatnak a táblázaton belül. Így tehát előfordulhatott az a helyzet is, hogy egy ember nem a saját "sorában” módosított adatokat, ha például elhibázta a sort. Továbbá, a megosztást egy szerkeszthetőséggel felruházó hivatkozással végezték, ennél fogva ennek a linknek a birtokában bárki módosíthatott bármit, ami ugyancsak nagymértékben csökkentette az információk megbízhatóságát. Gyakori jelenség volt, hogy valaki elfelejtette kitölteni a táblázatot, illetve az is, hogy az új hét kiírása (a sablon új munkalapra másolása és a dátumok módosítása) késve történt meg. Jelenleg ezek a folyamatok játszódnak le, pontokba szedve:

- <b>Táblázat létrehozása</b>: Amint említettük egy Google Spreadsheets-ben töltögetjük a táblázatunkat, ezért létre kellett hozni minden héten a táblát, ki kellett törölni az előző adatokat, szóval nagyon időigényessé tette a szervezést.
- <b>Táblázat kitöltése a felhasználói adatokkal</b>: Rengeteg problémát okozott, hogy két csapatunk van, ezért sokszor nem volt egyértelmű, hogy egy ember hova kerüljön.
- <b>Táblázat kitöltése időpontokkal</b></b>: Egyértelműnek tűnik, hogy bejelöljük mikor érünk rá, de rengeteg embernek ez nem sikerül és átlag 20-ból 4-5ember nem tölti ki, ez legtöbbször probléma, mert folyamatosan zaklatni kell őket.
- <b>Táblázat kiértékelése</b>: Az eddigi fő rendszerünk gyengesége, hogy nagyon sok időt elvett tőlünk az, hogy kiértékeljük a legjobb időpontot, ami mindenkinek megfelelő, és ott tud lenni az eseményen. Ez egy 20 fős társaság esetében általában fél órát vett igénybe, de később szeretnénk terjeszkedni és több, nagyobb csapatokat kialakítani.

#### Vágyálom rendszer
A társaság számára a kívánt cél egy olyan weboldal létrehozása lenne, ahol a játékosok beregisztrálhatnak, és -kizárólag- maguknak beírhatják, hogy milyen időpontok felelnek meg nekik az adott héten. Ez alól kivételt képezzen(ek) a kijelölt moderátor(ok), aki(k)nek álljon módjukban más felhasználók adatait is kezelni. A késői új hét kiírás elkerülésére szeretnék, ha az új hét táblázata a megfelelő dátummal automatikusan megjelenne, illetve előre kitölthető lenne, valamint azt is szeretnék, hogy valamiféle emlékeztetőt kapjanak a tagok a kitöltésre. Szintén tudni óhajtják, mely felhasználók nem vittek még be adatot. Igényelnék a lehetőséget továbbá arra is, hogy megjegyzést fűzhessenek a kitöltésükhöz, hiszen szükséges valamilyen formában jelezniük, ha például az időpont ingatag, vagy várhatóan változni fog. Fontos lenne, hogy létrehozhassanak több csapatot, és ezeket vizuálisan jól elkülöníthetően kezelhessék, valamint számottevő, hogy egy felhasználó egyszerre több csapatba is tartozhasson.
#### Jelenlegi üzleti folyamatok
- Létrehozás: A táblák hétről-hétre manuálisan, egy sablont másolva kerülnek létrehozásra. A mintában szükséges módosítani a dátumokat. Bárkinek van erre felhatalmazása.
- Módosítás: Semmiféle módosítás nem felügyelt, vagy korlátozott, bárki módosíthat bármit. A cellák akármit tartalmazhatnak.
- Csapatok kezelése: Egy munkalapon két elszeparált táblázat létezik. Mindenki csak egy csapatban van feltüntetve.

#### Kívánt üzleti folyamatok
- Létrehozás
	- A táblák hétről-hétre automatizáltan kerüljenek létrehozásra, illetve legyenek előre elérhetőek.
- Módosítás
  - A felhasználók (a moderátor(ok) kivételével) csak és kizárólag saját adataikat módosíthassák. A cellák -az áttekinthetőség érdekében- mindössze meghatározott számokat és jeleket (pl: +, -, ?) tartalmazhassanak. Az egyéb információk a cellához rendelt megjegyzés részben legyenek elérhetőek.
- Csapatok kezelése:
	- Egy felhasználó több csapatban is szerepelhessen. A csapatok legyenek elkülöníthetők. Ne lépjen fel időpontütközés, vagy adatkülönbség egy felhasználótól sem.
