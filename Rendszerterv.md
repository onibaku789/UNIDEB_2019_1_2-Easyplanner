# Rendszerterv
* * *

### Bevezető

Az EasyPlanner célja, hogy megkönnyítse a rendszeresen összejáró csoportok számára a találkozók idejének a meghatározását és jól látható egyértelmű módon vizualizált formában is tudassa azt a felhasználóval. Ezt oly módon teszi, hogy a tagok mindegyike kiválasztja az egyes napokra a számáre legmegfelelőbb időpontokat, időintervallumot és ezek összegzése utána a rendszer minden egyes napra meghatároz idősávot/idősávokat, amelyben a lehető legtöbb tag elérhető. Továbbá ezt egy táblázatban ábrázolja is. A táblázatban látható legyen, hogy az adott napon kik és mikor érnek rá az adott tevékenységre, információt tudjon szolgáltatni arról, ha valaki egyáltalán nem ér ra aznap vagy épp nem biztos a megadott időpontban (talán elérhető a felhasználó).

### Projektterv

###### Emberi erőforrások
Az EasyPlanner weboldalon a Tacos kft. tagjai név szerint: 
- Lácza Roland
- Varga Attila
- Guzsik Dániel
- Erdős Péter

###### Projekt időtartama
Az EasyPlanner weblap projektjének elkészülési határideje 2019. szeptember 30. (Amennyiben ez nem teljesül az elég nagy probléma lehet a Taco kft. számára)


###### Mérföldkövek meghatározása:
1. Domain meghatározása: Megfelelő domain név meghatározása. Elérhető szolgáltató felkutatása és a domain lefoglalása, üzembe helyezése.
2. Regisztárlciós űrlap elkészítése: A regisztrálciós űrlap működőképes a jelszó tárolása biztonságos, a felhasználónév ütközések vizsgálata és azok tiltása
3. Bejelentkezés/Kijelentkezés: A már regisztrált felhasználók mindegyike képes az oldalra bejelentkezni és kijelentkezni.
4. Az alkalmas időpontok kezelése: A felhasználó meg tudja adni a számára elérhető időpontokat a renszer ezt képes kiértékelni a többi felhasználótól származó időpontokkal.
5. Táblázatok készítése a befolyt adatokból: A rendszer a hetit táblázatokat képes megalkotni, vizuális információt szolgáltat a táblázaton keresztül a megfelelő időpontokról
6. 1.0 verzió: Amennyiven a fentiek teljesülnek a rendszer 1.0 verziója késznek tekinthető

###Projekt fizikai környezete
Az EasyPlanner egy böngészőben futó webalkalmazés, ennek következtében a használatához valamilyen böngésző (Google chrome, Firefox, Opera, Internet Explorer) használata szükséges. 

A projekt által támogatott eszközök:
- asztali számítógép/laptop
- mobil készülékek (modern maroktelefon, tablet)

A webalkalmazás bármely fentebb említett böngészőket futtatni képes operációsrendszeren elérhető.


### Tesztelési tervezet
Az EasyPlanner projektet minden mérföldkő elérése után egy a fejlesztőkből álló csoport teszteli, mindig az aktuálisan implementált funkciókra kiemelt figyelmet fordítva (emellett az előzőekben implementáltakat is szúrópróba szerűen ellenörzik). A 1.0 verzió elérése után a projektet egy megközelítőleg 10 embert számláló csooport (ami függetlena készítőktől) magas intenzitású használat során teszteli (stressz tesztet hajt végre). Amennyiben a tesztelés hiba nélkül megy végbe a weboldalt átadjuk a megrendelőnek, míg hiba esetén azt javítjuk és a weblap visszakerül a tesztelő csoporthoz.

### Karbantartási tervezet

A projekt átadása után a megrendelővel együttesen meghatározott megállapodás alapján.

### Felhasználói felület

**Belépés a rendszerbe**
A felhasználó a főoldalt, azon is csak bizonyos szövegeket fog látni, ezen kívül pedig csak bejelentkezni, és regisztrálni tud majd. Felhasználónév, jelszó megadásával belépteti a rendszer, és átdobja a főoldalra. Ezt regisztrációnál email cím, felhasználónév, jelszó megadásával  szintén bejelentkezteti a főoldalra.

Elképzelés:
![Kinezet terv](https://raw.githubusercontent.com/onibaku789/UNIDEB_2019_1_2-Easyplanner/master/img/login-page.jpg)

**Csapathoz csatlakozás**
Minden felhasználónak első körben csatlakoznia kell, vagy létre kell hoznia egy csapatot, ezután átirányítja egy oldalra, ahol megadhatja a heti beosztását egy táblázat segítségével.

Elképzelés:
![Elképzelés](https://raw.githubusercontent.com/onibaku789/UNIDEB_2019_1_2-Easyplanner/master/img/team-page.jpg)

###### Implementációs terv

Az alkalmazást PHP nyelven fogjuk megírni, keretrendszerek használata nélkül, csupán a Bootstrap, jQuery, popper.js könyvtárakat fogjuk igénybe venni.<br>A Model Controller View szerkezeti mintát követjük, és ez alapján építjük fel a mappaszerkezetet is.<br>Modulokban gondolkodunk, külön modul lesz egyes rendszerek implementálására, ilyen például a beléptető rendszer (login system), ezáltal könnyebb lesz bővíteni később a rendszert.<br>Minden modulon belül lesz külön az üzleti logikára koncentráló (model) rétegünk, ami nagyban elváll a megjelenéstől (view) és a vezérléstől (controller).<br>Egy-egy landing pagenek lesz külön absztrakciós osztálya, ami lebonyolítja a futási sorrend problémát, hogy mindenképpen először a felhasználó bemenő adatait kezeljük, és csak utána jelenítsük meg a végeredményt.<br>További tervezési mintákat is alkalmazunk a projekt során: factory method, singleton<br>Egyetlen belépési pont az index.php lesz, így könnyebb lesz levédeni esetleges támadások ellen.<br>A webalkalmazást egy külső webtárhelyen tároljuk amelyet egy szolgáltatótól bérlünk (RackHost).<br>
**Üzleti logikát implementáló osztályok**<br>
*User*<br>Magát a felhasználót reprezentálja, ennek az osztálynak a segítségével lehet beazonosítani egy embert.<br>
*Team*<br>Egy adott csapatot reprezentál, paraméterként kap egy azonosítót, amely alapján egy csapatot tud kezelni az interfészén keresztül.<br>
*TableManager*<br>A táblákat, csapatokat, felhasználókat összekötő manager osztály, ebben lehet lekérdezni az összes felhasználóhoz tartozó táblát, vagy akár csapat tagjaihoz tartozó táblákat, ez foglalkozik többek között az időpont-ütközésekkel is.

### Üzleleti folyamatok
