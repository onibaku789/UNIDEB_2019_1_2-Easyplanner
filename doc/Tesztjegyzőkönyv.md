# Tesztjegyzőkönyv

Az alábbi táblázat a EasyPlanner webalkalmazásnak a tesztelési jegyzőkönyyvét tartalmazza.
<table  style="width:100%" border="1px thin black" >
    <tr>
        <th>Név
        <th>Tesztjegy
        <th>Művelet
        <th>Várt hatás
        <th>Eredmény
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0001
        <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami előzetesen nem regisztrált a rendszerben.
        <td>Hiba, a felület kijelzi, hogy a felhasználó és jelszó páros nem helyes.
        <td>A várható hatásnak megfelelő eredmény született.
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0002
        <td>A bejelentkező űrlapot olyan felhasználóval töltik ki ami nem szerepel az adatbázisan.
        <td>Hiba, a felület kijelzi, hogy a felhasználó nem szerepel a rendszerben.
        <td>A várható hatásnak megfelelő eredmény született.
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0003
        <td>A bejelentkező űrlapot olyan  jelszóval párral töltik ki ami nem szerepel az adatbázisban.
        <td>Hiba, a felület kijelzi, hogy a felhasználó és jelszó páros nem helyes.
        <td>A várható hatásnak megfelelő eredmény született.
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0004
        <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami szerepel az adatbázisan.
        <td>Siker, a felület a "Home" oldalra irányít át.
        <td>A várható hatásnak megfelelő eredmény született.
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0005
        <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező nem üres és megfelelnek a követelményeknek.
        <td> Siker, a felület a "Home" oldalra irányít át, bejelentkezve.
        <td>A várható hatásnak megfelelő eredmény született.
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0006
        <td>A regisztrációs űrlap email mezőjében a beírt szöveg nem megfelel az email cím szabványnak és a többi mező nem üres.
        <td>Hiba, a felület kijelzi, hogy az email mezőbe írt szöveg nem megfelelő emailcím.
        <td>A várható hatásnak megfelelő eredmény született.
    </tr>   
    <tr>
        <td>Erdős Péter
        <td>H0007
        <td>A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a többi mező üres.
        <td>Hiba, a felület kijelzi, hogy a felhasználó, jelszó és a jelszó megerősítő túl rövid vagy nincs kitöltve. 
        <td>A várható hatásnak megfelelő eredmény született.
    </tr>   
    <tr>
        <td>
        <td>H0008
        <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami előzetesen nem regisztrált a rendszerben.
        <td>Hiba, a felület kijelzi, hogy a jelszó mezőbe írt karaktersorozat túl rövid.
        <td>
    </tr>   
    <tr>
        <td>
        <td>H0009
        <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza nagyobb vagy egyenlő mint 6, viszont a felhasználónév már megtalálható az adatbázisban.
        <td>Hiba, a felület kijelzi, hogy a felhaználónév már szerepel az adatbázisban, válasszon ettől különbözőt.
        <td>
    </tr>   
    <tr>
        <td>
        <td>H0010
        <td>A regisztrációs oldalon a "Regisztrálok" szövegre kattintás.
        <td>  Siker, az webalkamazás átirányít a bejelentkező oldalra,
        <td>
    </tr>   
    <tr>
        <td>
        <td>H0011
        <td>A kijelentkezés gombra kattintás.
        <td>Siker, felugró ablakban jelezve, a felhasználó kiléptetését.
        <td>
    </tr>   
    <tr>
        <td>
        <td>H0012
        <td>Csapat létrehozása gombra kattintás.
        <td> Siker, az alkalmazás a csapat létrehozá oldalra navigál.
        <td>
    <tr>
        <td>
        <td>H0013
        <td>Időpont megadása mezőre kattintva
        <td>Siker, a táblázat kattintott mezője szít vált (fehérről zöldre vagy fordítva).
        <td>
    </tr>
    <tr>
        <td>
        <td>H0014
        <td>Változtatások mentése gombra kattintva
        <td>Siker, felugró ablakban jelezve, a változtatások mentését.
        <td>
    </tr>
    <tr>
        <td>
        <td>H0015
        <td>Legördülő menüre kattintás (aktuális csapatnév)
        <td>Siker, kiválaszthatjuk kattintással a felhasználó csapatait, annak táblázata jelenik meg.
        <td>
    </tr>
    <tr>
        <td>
        <td>H0016
        <td>Legördülő menüben csapatnévre kattintás
        <td>Siker, kiválasztjuk a csapatot
        <td>
    </tr>
    <tr>
        <td>
        <td>H0017
        <td> 'Csapat létrehozása gombra' kattintás
        <td>Siker, csapat létrehozó űrlapra dobja a felhasználót
        <td>
    </tr>
    <tr>
        <td>
        <td>H0018
        <td>Csapat név kitöltése 3 karakternél hosszabb, de 32 karakternél rövidebb névvel, és a csapat leírás kitöltése 15-nél hosszabb, de 128 karakternél rövidebb leírással.
        <td>Siker, csapat létrehozva megadott névvel és leírással
        <td>
    </tr>
    <tr>
        <td>
        <td>H0019
        <td>Csapat név és leírás kitöltése a kritériumoknak nem megfelelően.
        <td>Hiba, megfelelő hibaüzenet megjelenítése.
        <td>
    </tr>
    <tr>
        <td>
        <td>H0020
        <td>Csapatra kattintás
        <td>Siker, átvisz a csapat menüpontba
        <td>
    </tr>
    <tr>
        <td>
        <td>H0021
        <td>Ha csapatvezető vagy, akkor meghívó link gomb megjelenítése
        <td>Siker, a gomb megjelent
        <td>
    </tr>
    <tr>
        <td>
        <td>H0022
        <td>Meghívó link gombra kattintás
        <td>Siker, az eddig üres mezőbe egy link generálódott, amit a mellette lévő ollóval ki lehet másolni
        <td>
    </tr>
    <tr>
        <td>
        <td>H0023
        <td>Az ollóra kattintással vágólapra tenni az inputban lévő linket
        <td>Siker, az inputban lévő link a vágólapon
        <td>
    </tr>
    <tr>
        <td>
        <td>H0024
        <td>A kimásolt linkkel látogatva az oldalt ha az illető nincs bejelentkezve, akkor a bejelentkezés pontra dobja
        <td>Siker, az illetőt a bejelentkezés menüpontra dobja.
        <td>
    </tr>
    <tr>
        <td>
        <td>H0025
        <td>Bejelentkezés után bedobja a meghívott csapatba. innentől az is kiválasztható.
        <td>Siker, bejelentkezés után a csapat megjelenik és kiválasztható
        <td>
    </tr>
</table>