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
        <td>Lácza Roland
        <td>H0008
        <td>A bejelentkező űrlapot olyan felhasználó és jelszó párral töltik ki ami előzetesen nem regisztrált a rendszerben.
        <td>Hiba, a felület kijelzi, hogy a jelszó mezőbe írt karaktersorozat túl rövid.
        <td>A tesztelés során a vártnak megfelelő működést tapasztaltam.
    </tr>   
    <tr>
        <td>Lácza Roland
        <td>H0009
        <td> A regisztrációs űrlap email mezőjében a beírt szöveg megfelel az email cím szabványnak és a jelszó mezőbe beírt karaktersorozat hossza nagyobb vagy egyenlő mint 6, viszont a felhasználónév már megtalálható az adatbázisban.
        <td>Hiba, a felület kijelzi, hogy a felhaználónév már szerepel az adatbázisban, válasszon ettől különbözőt.
        <td>A tesztelés során a vártnak megfelelő működést tapasztaltam.
    </tr>   
    <tr>
        <td>Lácza Roland
        <td>H0010
        <td>A regisztrációs oldalon a "Regisztrálok" szövegre kattintás.
        <td>  Siker, az webalkamazás átirányít a bejelentkező oldalra,
        <td>A tesztelés során a vártnak megfelelő működést tapasztaltam.
    </tr>   
    <tr>
        <td>Lácza Roland
        <td>H0011
        <td>A kijelentkezés gombra kattintás.
        <td>Siker, felugró ablakban jelezve, a felhasználó kiléptetését.
        <td>A tesztelés során a vártnak megfelelő működést tapasztaltam.
    </tr>   
    <tr>
        <td>Lácza Roland
        <td>H0012
        <td>Csapat létrehozása gombra kattintás.
        <td> Siker, az alkalmazás a csapat létrehozá oldalra navigál.
        <td>A tesztelés során a vártnak megfelelő működést tapasztaltam.
    <tr>
        <td>Lácza Roland
        <td>H0013
        <td>Időpont megadása mezőre kattintva
        <td>Siker, a táblázat kattintott mezője szít vált (fehérről zöldre vagy fordítva).
        <td>A tesztelés során a vártnak megfelelő működést tapasztaltam.
    </tr>
    <tr>
        <td>Lácza Roland
        <td>H0014
        <td>Változtatások mentése gombra kattintva
        <td>Siker, felugró ablakban jelezve, a változtatások mentését.
        <td>>A tesztelés során a vártnak megfelelő működést tapasztaltam.
    </tr>
    <tr>
        <td>Lácza Roland
        <td>H0015
        <td>Legördülő menüre kattintás (aktuális csapatnév)
        <td>Siker, kiválaszthatjuk kattintással a felhasználó csapatait, annak táblázata jelenik meg.
        <td>>A tesztelés során a vártnak megfelelő működést tapasztaltam.
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0016
        <td>Legördülő menüben csapatnévre kattintás
        <td>Siker, kiválasztjuk a csapatot
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0017
        <td> 'Csapat létrehozása gombra' kattintás
        <td>Siker, csapat létrehozó űrlapra dobja a felhasználót
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0018
        <td>Csapat név kitöltése 3 karakternél hosszabb, de 32 karakternél rövidebb névvel, és a csapat leírás kitöltése 15-nél hosszabb, de 128 karakternél rövidebb leírással.
        <td>Siker, csapat létrehozva megadott névvel és leírással
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0019
        <td>Csapat név és leírás kitöltése a kritériumoknak nem megfelelően.
        <td>Hiba, megfelelő hibaüzenet megjelenítése.
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0020
        <td>Csapatra kattintás
        <td>Siker, átvisz a csapat menüpontba
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0021
        <td>Ha csapatvezető vagy, akkor meghívó link gomb megjelenítése
        <td>Siker, a gomb megjelent
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0022
        <td>Meghívó link gombra kattintás
        <td>Siker, az eddig üres mezőbe egy link generálódott, amit a mellette lévő ollóval ki lehet másolni
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0023
        <td>Az ollóra kattintással vágólapra tenni az inputban lévő linket
        <td>Siker, az inputban lévő link a vágólapon
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0024
        <td>A kimásolt linkkel látogatva az oldalt ha az illető nincs bejelentkezve, akkor a bejelentkezés pontra dobja
        <td>Siker, az illetőt a bejelentkezés menüpontra dobja.
        <td>
    </tr>
    <tr>
        <td> Varga Attila
        <td>H0025
        <td>Bejelentkezés után bedobja a meghívott csapatba. innentől az is kiválasztható.
        <td>Siker, bejelentkezés után a csapat megjelenik és kiválasztható
        <td>
    </tr>
        <td>Erdős Péter
        <td>H0026
        <td> Az időpontok kiválasztása és mentése után a csapat menüpont szabadidők tábla változása.
        <td>A mentett időpontok megjelennek intervallumként a táblán.
        <td>Minden a vártaknak megfelelően történt a tesztjegy tesztelése során.
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0027
        <td>Az időpontok törlése és mentése után a csapat menüpont szabadidők tábla változása.
        <td> A törölt időpontok eltűnnek a Szabadidő oszlopából.
        <td>Minden a vártaknak megfelelően történt a tesztjegy tesztelése során.
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0028
        <td>Időpontok megadása után a közös időpontok változása.
        <td> Siker, ha nincs más embernek megjelölt időpontja a lista üres.
        <td>Minden a vártaknak megfelelően történt a tesztjegy tesztelése során.
    </tr>
    <tr>
        <td>Erdős Péter
        <td>H0029
        <td>Időpontok megadása után a közös időpontok változása.
        <td>Amennyiben van közös időpont az időpont kezdete és vége megjelenik a táblán.
        <td>Minden a vártaknak megfelelően történt a tesztjegy tesztelése során.
    </tr>    
    <tr>
        <td>Erdős Péter
        <td>H0030
        <td>Időpontok törlése után a közös időpontok változása.
        <td>A törölt időpontok kikerülnek a közös időpontokból, amennyiben már csak egy embernek megfelelő az időpont.
        <td>Minden a vártaknak megfelelően történt a tesztjegy tesztelése során.
    </tr>
</table>