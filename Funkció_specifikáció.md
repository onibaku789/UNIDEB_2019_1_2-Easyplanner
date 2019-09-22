# Funkció specifikáció
* * *



- [Jelenlegi helyzet](#jelenlegi-helyzet)
- [A rendszer célja](#a-rendszer-célja)
- [Rendszer használata](#rendszer-használata)
- [Képernyő tervek](#képernyő-tervek)


#### Jelenlegi helyzet

A csapat Google Spreadsheets-ben vezeti a csapattagok számára megfelelő időintervallumokat. A tagok neveit egy oszlopba, a hét napjait pedig egy sorba vették fel és ebből csináltak egy táblázatot, majd ebből létrehoztak egy olyan sablon táblázatot, amit mintaként minden egyes héten manuálisan átmásolnak egy új munkalapra. A dátumok változása, és az egy új csapattag felvétele ugyancsak kézileg került felvitelre a táblázatban. Minden esetleges egyéb módosítást szintén kézzel végeznek. Problémák adódtak például a különböző készülékeken -úgymint okostelefon és tablet- keresztül történő módosításokkal is. Amennyiben valaki megjegyzést akart fűzni egy-egy naphoz, nem volt rá lehetőség, így az esetleges egyéb információkat a táblázat után írták a saját sorukba. A biztonsággal úgyszintén felmerültek komplikációk, mivel nem voltak korlátok szabva arra vonatkozóan, hogy bizonyos emberek mit módosíthatnak a táblázaton belül. Így tehát előfordulhatott az a helyzet is, hogy egy ember nem a saját "sorában” módosított adatokat, ha például elhibázta a sort. Továbbá, a megosztást egy szerkeszthetőséggel felruházó hivatkozással végezték, ennél fogva ennek a linknek a birtokában bárki módosíthatott bármit, ami ugyancsak nagymértékben csökkentette az információk megbízhatóságát. Gyakori jelenség volt, hogy valaki elfelejtette kitölteni a táblázatot, illetve az is, hogy az új hét kiírása (a sablon új munkalapra másolása és a dátumok módosítása) késve történt meg.

####A rendszer célja

Egy webalkalmazást fogunk írni, ami első körben tartalmazni fogja:
a regisztrációt, amiben egy felhasználónevet, jelszót, és egy email címet kell megadni,
a bejelentkezést, felhasználónév és jelszó párossal tudnak hozzáférni a felhasználójukhoz
továbbá lehetőséget adunk jelszóváltoztatásra, és egy előre megadott listából avatar választásra.
Ami a táblázatot illeti az első körben csak egy adott időintervallumban tudjuk vállalni az egyeztetést, ezáltal a rendszer letiltja azt az adott napot ahol már megadott egy intervallumot.
A napokhoz tartozik majd a dátumuk is, amelyet a rendszer automatikusan tölt ki, ezzel egyértelműen meglehet határozni, hogy ki mikor ér rá.
A moderátorok értesítést kapnak arról, hogyha egy csapattag nem töltötte még ki a táblázatot. Ez történhet egyaránt emailben és felületen megjelenő értesítésként is.
Megjegyzést lehet a beosztásukhoz fűzni, viszont a táblázatban dupla kattintással aktiválható lesz egy "Bizonytalan" státusz is, mely egyértelműen jelzi, hogy az illető nem biztos hogy ráér abban az időpontban.
Több csapat létrehozására is lesz lehetőség, mégpedig azok a felhasnzálók akik a csapatot létrehozzák, azok lesznek az úgynevezett Moderátorok, akik több információt is megadhatnak a csapatról, embereket hívhatnak meg, és rúghatnak ki. Egy felhasználó több csapatban is megjelenthet egyszerre, egy felületen megjelenő legördülő menüből lehet választani, hogy jelenleg melyik csapatban szeretnének utasításokat elvégezni.

####Rendszer használata

A rendszerben szereplő összes felhasználónak először egy regisztrálciós folyamaton kell átesnie, ahol a regisztárlciós űrlapon megadja:
- megadja a felhasználói nevét
- egy aktív e-mail címet
- jelszavát (melynek tartalmazni kell: kisbetűt, nagybetűt és számot)

A bejelentkezett felhasználó a megfelelő felületet megválasztval, az általa elérhető időpontokat rögzíti és ezzel a csoport többi tagja számára is tudomásul adja. A rendszer ezeket az időpontokat összesítve (többi felhasználó időpontjaival) egy a csoport számára informatív táblázatot készít. Ez a táblázat szolgáltatja a legbővebb időintervallumot a hét egyes napjaira leosztva.

A felhasználónka lehetősége van időpontok helyett: 
- talán
- időpont nem alkalmas
válaszokat adni az adott napra.

####Képernyő tervek
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




