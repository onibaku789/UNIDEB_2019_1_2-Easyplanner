# Követelmény specifikáció
* * *

- [Áttekintés](#áttekintés)
- [Jelenlegi helyzet](#jelenlegi-helyzet)
- [Vágyálom rendszer](#vágyálom-rendszer)
- [Jelenlegi üzleti folyamatok](#jelenlegi-üzleti-folyamatok)
- [Kívánt üzleti folyamatok](#kívánt-üzleti-folyamatok)



#### Áttekintés
Egy hobbi játékosokból álló csapat olyan időpontokat szeretne választani minden egyes héten, ami a legtöbb embernek megfelel és a játékhoz a minimálisan szükséges ember ráér.
#### Jelenlegi helyzet
A csapat  Google Spreadsheets-ben vezeti a csapattagok időbeosztásait. A tagok neveit felvették egy oszlopba, a napokat egy sorba és ebből csináltak egy táblázatot, majd ebből csináltak egy mintát amit minden héten átmásolnak egy új munkalapra. Egy új csapatag felvétele kézileg kerül felvételre. Minden módosítást szintén kézzel végezik. Problémák adódtak a különbőző készülékeken való használatra is. A biztonsággal is adódtak problémák, mivel nem voltak korlátozva hogy bizonyos emberek mit módosíthatnak. Előfodrulhat az is, hogy egy ember nem a saját "sorát" módosítja. Továbbá, a megosztást egy szerkezthetőséggel felruházó hivatkozással végzik. A link birtokában bárki módosíthat bármit.
#### Vágyálom rendszer
A társaság számára a kívánt cél egy olyan weboldal létrehozása lenne, ahol a játékosok beregisztrálhatnak, és -kizárólag- maguknak beírhatják, hogy milyen időpontok felelnek meg nekik az adott héten. Ez alól kivételt képezzen(ek) a kijelölt moderátor(ok), aki(k)nek álljon módjukban más felhasználók adatait is kezelni. A késői új hét kiírás elkerülésére szeretnék, ha az új hét táblázata a megfelelő dátummal automatikusan megjelenne, illetve előre kitölthető lenne, valamint azt is szeretnék, hogy valamiféle emlékeztetőt kapjanak a tagok a kitöltésre. Szintén tudni óhajtják, mely felhasználók nem vittek még be adatot. Igényelnék a lehetőséget továbbá arra is, hogy megjegyzést fűzhessenek a kitöltésükhöz, hiszen szükséges valamilyen formában jelezniük, ha például az időpont ingatag, vagy várhatóan változni fog. Fontos lenne, hogy létrehozhassanak több csapatot, és ezeket vizuálisan jól elkülöníthetően kezelhessék, valamint számottevő, hogy egy felhasználó egyszerre több csapatba is tartozhasson.
#### Jelenlegi üzleti folyamatok
- Létrehozás: A táblák hétről-hétre manuálisan, egy sablont másolva kerülnek létrehozásra. A mintában szükséges módosítani a dátumokat. Bárkinek van erre felhatalmazása.
- Módosítás: Semmiféle módosítás nem felügyelt, vagy korlátozott, bárki módosíthat bármit. A cellák akármit tartalmazhatnak.
- Csapatok kezelése: Egy munkalapon két elszeparált táblázat létezik. Mindenki csak egy csapatban van feltüntetve.

#### Kívánt üzleti folyamatok
