# Rendszerterv
* * *
###Tartalomjegyzék
- [Bevezető](#bevezető)
- [Mérföldkövek](#Mérföldkövek)
- [Fizikai környezet](#fizikai-környezet)
- [Architekturális terv](#architekturális-terv)
- [Felhasználói felület](#felhasználói-felület)
- [Adatbázis terv](#adatbázis-terv)
- [Üzleti folyamatok](#üzleti-folyamatok)
- [Tesztterv](#tesztterv)
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
5. Táblázatok készítése a befolyt adatokból: A rendszer a heti táblázatokat képes megalkotni, vizuális információt szolgáltat a táblázaton keresztül a megfelelő időpontokról
7. Táblázat adatainak kiértékelése egy külön lapon
8. Csapat léterhozásának lehetősége felhasználók számára
9. Admin felület elkészítése, admin folyamatok implementálása(pl.:jogkör adás/elvétel)
10. My account felület elkészítése, felhasználói fiók kezelésének lehetsőge


###Projekt fizikai környezete
Az EasyPlanner egy böngészőben futó webalkalmazés, ennek következtében a használatához valamilyen böngésző (Google chrome, Firefox, Opera, Internet Explorer) használata szükséges. 

A projekt által támogatott eszközök:
- asztali számítógép/laptop
- mobil készülékek (modern maroktelefon, tablet)

A webalkalmazás bármely fentebb említett böngészőket futtatni képes operációsrendszeren elérhető.


### Karbantartási tervezet

A projekt átadása után a megrendelővel együttesen meghatározott megállapodás alapján.

### Felhasználói felület

**Belépés a rendszerbe**
A felhasználó a főoldalt, azon is csak bizonyos szövegeket fog látni, ezen kívül pedig csak bejelentkezni, és regisztrálni tud majd. Felhasználónév, jelszó megadásával belépteti a rendszer, és átdobja a főoldalra. Ezt regisztrációnál email cím, felhasználónév, jelszó megadásával  szintén bejelentkezteti a főoldalra.

Elképzelés:
![Kinezet terv](img/login-page.jpg)

**Csapathoz csatlakozás**
Minden felhasználónak első körben csatlakoznia kell, vagy létre kell hoznia egy csapatot, ezután átirányítja egy oldalra, ahol megadhatja a heti beosztását egy táblázat segítségével.

Elképzelés:
![Elképzelés](img/team-page.jpg)

**Profil szerkesztése**<br>
MInden felhasználónak lehetősége nyílik arra, hogy megváltoztassa a jelszavát és az avatarját egy előre definiált listából. Továbbá a felhasználó alap adatai is megjelennek az oldalon

Elképzelés:
![Elképzelés](img/profile-page.jpg)

###### Implementációs terv

Az alkalmazást PHP nyelven fogjuk megírni, keretrendszerek használata nélkül, csupán a Bootstrap, jQuery, popper.js könyvtárakat fogjuk igénybe venni.<br>A Model Controller View szerkezeti mintát követjük, és ez alapján építjük fel a mappaszerkezetet is.<br>Modulokban gondolkodunk, külön modul lesz egyes rendszerek implementálására, ilyen például a beléptető rendszer (login system), ezáltal könnyebb lesz bővíteni később a rendszert.<br>Minden modulon belül lesz külön az üzleti logikára koncentráló (model) rétegünk, ami nagyban elváll a megjelenéstől (view) és a vezérléstől (controller).<br>Egy-egy landing pagenek lesz külön absztrakciós osztálya, ami lebonyolítja a futási sorrend problémát, hogy mindenképpen először a felhasználó bemenő adatait kezeljük, és csak utána jelenítsük meg a végeredményt.<br>További tervezési mintákat is alkalmazunk a projekt során: factory method, singleton<br>Egyetlen belépési pont az index.php lesz, így könnyebb lesz levédeni esetleges támadások ellen.<br>A webalkalmazást egy külső webtárhelyen tároljuk amelyet egy szolgáltatótól bérlünk (RackHost).<br>
**Üzleti logikát implementáló osztályok**<br>
*User*<br>Magát a felhasználót reprezentálja, ennek az osztálynak a segítségével lehet beazonosítani egy embert.<br>
*Team*<br>Egy adott csapatot reprezentál, paraméterként kap egy azonosítót, amely alapján egy csapatot tud kezelni az interfészén keresztül.<br>
*TableManager*<br>A táblákat, csapatokat, felhasználókat összekötő manager osztály, ebben lehet lekérdezni az összes felhasználóhoz tartozó táblát, vagy akár csapat tagjaihoz tartozó táblákat, ez foglalkozik többek között az időpont-ütközésekkel is.

### Üzleleti folyamatok
- **Felhasználó felvétele**: Mivel az eddigi rendszerben  nem lehettünk biztosak abban, hogy a mezőket a megfelelő felhasználó töltötte-e ki, a jövőbeli rendszerben muszáj lesz előzetesen regisztrálni ahhoz, hogy valamilyen módosítást végezzünk.
- **Csapatok kezelése**: Az eddigi rendszerben a csapatok kezelése manuálisan kézileg és biztonsági szempontból is megkérdőjelezhetően működött. A weboldalon lehetőség lesz  csapatokat létrehozni. amibe csatlakozni felhasználó alapján felvétellel, csapatokhoz való jelentkezéssel vagy a csapatkapitány által generáltatható meghívó hivatkozás birtokánba lehet.
- **Csapattagok kezelése**: A csoport vezetőjének lehetősége lesz felhasználókat felvenni felhasználónév, és meghívó link által is. Továbbá, tagok kirúgására is van lehetőség.

### Adatbázisterv 
![Adatbázis](img/ADATBÁZISTERV.PNG)


### Teszterv
 <table  style="width:100%" border="1px thin black" >
 
 <tr>
 <th> Tesztjegy
 <th> Modul
 <th> Művelet
 <th> Hatás
 </tr>

 <tr>
 <td>H0001
 <td>Bejelentkezés
 <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami előzetesen nem regisztrált a rendszerben.
 <td> Hiba, a felület kijelzi, hogy a felhasználó és jelszó páros nem helyes.
 </tr>
 
 
 <tr>
  <td>H0002
  <td>Bejelentkezés
  <td>A bejelentkező űrlapot olyan felhasználóval töltik ki ami nem szerepel az adatbázisan.
  <td> Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.
  </tr>
  
  <tr>
   <td>H0003
   <td>Bejelentkezés
   <td>A bejelentkező űrlapot olyan  jelszóval párral töltik ki ami nem szerepel az adatbázisban.
   <td> Hiba, a felület kijelzi, hogy a jelszó nem szerepel az adatbázisban.
   </tr>
   
   <tr>
    <td>H0004
    <td>Bejelentkezés
    <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami szerepel az adatbázisan.
    <td> Siker, a felület a "Home" oldalra irányít át.
    </tr>
    
   <tr>
      <td>H0005
      <td>Regisztráció
      <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező nem üres és megfelelnek a követelményeknek.
      <td> Siker, a felület a "Home" oldalra irányít át, bejelentkezve.
   </tr>
   
   <tr>
         <td>H0006
         <td>Regisztráció
         <td> A regisztrációs űrlap email mezőjében a beírt szöveg nem megfelel az email cím szabványnak és a többi mező nem üres.
         <td> Hiba, a felület kijelzi, hogy az email mezőbe írt szöveg nem megfelelő emailcím.
   </tr>
   <tr>
         <td>H0007
         <td>Regisztráció
         <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező üres.
         <td> Hiba, a felület kijelzi, hogy a felhasználó, jelszó és a jelszó megerősítő túl rövid vagy nincs kitöltve.      
   </tr>
   
  <tr>
        <td>H0008
        <td>Regisztráció
        <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza kisebb mint 6
        <td> Hiba, a felület kijelzi, hogy a jelszó mezőbe írt karaktersorozat túl rövid.
  </tr>
    <tr>
          <td>H0009
          <td>Regisztráció
          <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza nagyobb vagy egyenlő mint 6, viszont a felhasználónév már megtalálható az adatbázisban.
          <td> Hiba, a felület kijelzi, hogy a felhaználónév már szerepel az adatbázisban, válasszon ettől különbözőt.
    </tr>
     <tr>
           <td>H0010
           <td>Regisztráció
           <td> A regisztrációs oldalon a "Regisztrálok" szövegre kattintás.
           <td> Siker, az webalkamazás átirányít a bejelentkező oldalra,
     </tr>
      <tr>
            <td>H0011
            <td>Home
            <td> A kijelentkezés gombra kattintás.
            <td> Siker, felugró ablakban jelezve, a felhasználó kiléptetését.
      </tr>
       <tr>
             <td>H0012
             <td>Home
             <td> Csapat létrehozása gombra kattintás.
             <td> Siker, az alkalmazás a csapat létrehozá oldalra navigál.
       </tr>
      <tr>
            <td>H0013
            <td>Home
            <td> Időpont megadása mezőre kattintva
            <td> Siker, a táblázat kattintott mezője szít vált (fehérről zöldre vagy fordítva).
      </tr>       
      <tr>
            <td>H0014
            <td>Home
            <td> Változtatások mentése gombra kattintva
            <td> Siker, felugró ablakban jelezve, a változtatások mentését.
      </tr>
      <tr>
            <td>H0015
            <td>Home
            <td> Legördülő menüre kattintás (aktuális csapatnév)
            <td> Siker, kiválaszthatjuk kattintással a felhasználó csapatait, annak táblázata jelenik meg.
      </tr>
                     
 </table>