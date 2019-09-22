# Funkció specifikáció
* * *



- [Jelenlegi helyzet](#jelenlegi-helyzet)
- [A rendszer célja](#a-rendszer-célja)
- [Rendszer használata](#rendszer-használata)
- [Képernyő tervek](#képernyő-tervek)


#### Jelenlegi helyzet

A csapat Google Spreadsheets-ben vezeti a csapattagok számára megfelelő időintervallumokat. A tagok neveit egy oszlopba, a hét napjait pedig egy sorba vették fel és ebből csináltak egy táblázatot, majd ebből létrehoztak egy olyan sablon táblázatot, amit mintaként minden egyes héten manuálisan átmásolnak egy új munkalapra. A dátumok változása, és az egy új csapattag felvétele ugyancsak kézileg került felvitelre a táblázatban. Minden esetleges egyéb módosítást szintén kézzel végeznek. Problémák adódtak például a különböző készülékeken -úgymint okostelefon és tablet- keresztül történő módosításokkal is. Amennyiben valaki megjegyzést akart fűzni egy-egy naphoz, nem volt rá lehetőség, így az esetleges egyéb információkat a táblázat után írták a saját sorukba. A biztonsággal úgyszintén felmerültek komplikációk, mivel nem voltak korlátok szabva arra vonatkozóan, hogy bizonyos emberek mit módosíthatnak a táblázaton belül. Így tehát előfordulhatott az a helyzet is, hogy egy ember nem a saját "sorában” módosított adatokat, ha például elhibázta a sort. Továbbá, a megosztást egy szerkeszthetőséggel felruházó hivatkozással végezték, ennél fogva ennek a linknek a birtokában bárki módosíthatott bármit, ami ugyancsak nagymértékben csökkentette az információk megbízhatóságát. Gyakori jelenség volt, hogy valaki elfelejtette kitölteni a táblázatot, illetve az is, hogy az új hét kiírása (a sablon új munkalapra másolása és a dátumok módosítása) késve történt meg.

####A rendszer célja
A rendszerben szereplő összes felhasználónak először egy regisztrálciós folyamaton kell átesnie, ahol a regisztárlciós űrlapon megadja:
- megadja a felhasználói nevét
- egy aktív e-mail címet
- jelszavát (melynek tartalmazni kell: kisbetűt, nagybetűt és számot)

A bejelentkezett felhasználó a megfelelő felületet megválasztval, az általa elérhető időpontokat rögzíti és ezzel a csoport többi tagja számára is tudomásul adja. A rendszer ezeket az időpontokat összesítve (többi felhasználó időpontjaival) egy a csoport számára informatív táblázatot készít. Ez a táblázat szolgáltatja a legbővebb időintervallumot a hét egyes napjaira leosztva.

A felhasználónka lehetősége van időpontok helyett: 
- talán
- időpont nem alkalmas
válaszokat adni az adott napra.

####Rendszer használata

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




