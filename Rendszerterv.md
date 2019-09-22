# Rendszerterv
* * *

###Bevezető

Az EasyPlanner célja, hogy megkönnyítse a rendszeresen összejáró csoportok számára a találkozók idejének a meghatározását és jól látható egyértelmű módon vizualizált formában is tudassa azt a felhasználóval. Ezt oly módon teszi, hogy a tagok mindegyike kiválasztja az egyes napokra a számáre legmegfelelőbb időpontokat, időintervallumot és ezek összegzése utána a rendszer minden egyes napra meghatároz idősávot/idősávokat, amelyben a lehető legtöbb tag elérhető. Továbbá ezt egy táblázatban ábrázolja is. A táblázatban látható legyen, hogy az adott napon kik és mikor érnek rá az adott tevékenységre, információt tudjon szolgáltatni arról, ha valaki egyáltalán nem ér ra aznap vagy épp nem biztos a megadott időpontban (talán elérhető a felhasználó).

###Projektterv

######Emberi erőforrások
Az EasyPlanner weboldalon a Tacos kft. tagjai név szerint: 
- Lácza Rolan
- Varga Attila
- Guzsik Dániel
- Erdős Péter

######Projekt időtartama
Az EasyPlanner weblap projektjének elkészülési határideje 2019. szeptember 30. (Amennyiben ez nem teljesül az elég nagy probléma lehet a Taco kft. számára)

######Mérföldkövek meghatározása:
1. Domain meghatározása: Megfelelő domain név meghatározása. Elérhető szolgáltató felkutatása és a domain lefoglalása, üzembe helyezése.
2. Regisztárlciós űrlap elkészítése: A regisztrálciós űrlap működőképes a jelszó tárolása biztonságos, a felhasználónév ütközések vizsgálata és azok tiltása
3. Bejelentkezés/Kijelentkezés: A már regisztrált felhasználók mindegyike képes az oldalra bejelentkezni és kijelentkezni.
4. Az alkalmas időpontok kezelése: A felhasználó meg tudja adni a számára elérhető időpontokat a renszer ezt képes kiértékelni a többi felhasználótól származó időpontokkal.
5. Táblázatok készítése a befolyt adatokból: A rendszer a hetit táblázatokat képes megalkotni, vizuális információt szolgáltat a táblázaton keresztül a megfelelő időpontokról
6. 1.0 verzió: Amennyiven a fentiek teljesülnek a rendszer 1.0 verziója késznek tekinthető


###Tesztelési tervezet
Az EasyPlanner projektet minden mérföldkő elérése után egy a fejlesztőkből álló csoport teszteli, mindig az aktuálisan implementált funkciókra kiemelt figyelmet fordítva (emellett az előzőekben implementáltakat is szúrópróba szerűen ellenörzik). A 1.0 verzió elérése után a projektet egy megközelítőleg 10 embert számláló csooport (ami függetlena készítőktől) magas intenzitású használat során teszteli (stressz tesztet hajt végre). Amennyiben a tesztelés hiba nélkül megy végbe a weboldalt átadjuk a megrendelőnek, míg hiba esetén azt javítjuk és a weblap visszakerül a tesztelő csoporthoz.

###Karbantartási tervezet

A projekt átadása után a megrendelővel együttesen meghatározott megállapodás alapján.