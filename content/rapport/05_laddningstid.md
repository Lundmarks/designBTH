KMOM05: Analys av Laddningstider
=======================


Denna rapport kommer kort och koncist behandla de laddningstider som finns i ett urval av hemsidor, vilka fördröjningar som sker och vad som kan göras för att snabba upp laddningen på både mobil och dator. Jag kommer även undersöka eventuella gemensamma nämnare emellan hemsidorna, och ifall de delar förbättringspotentialer emellan.

Urval
-----------------------

<!-- Välj ut 3 webbplatser som skall analyseras, berätta hur du gjorde urvalet. -->

Jag har valt att undersöka och diskutera tre olika hemsidors värden och upplägg:
<ul>
<li><a href="https://www.google.com/">Google.com</a></li>
<li><a href="https://www.aftonbladet.se/">Aftonbladet.se</a></li>
<li><a href="https://www.audi.se/se/web/sv.html">Audi.se</a></li>
</ul>


Min hela grundtanke kring detta urval var faktiskt att få ett så brett upplägg som möjligt. Vi har sökjätten Google, som vid det här laget har en väldigt enkel och snabb hemsida som används av hundratusentals människor, varje dag. Varje millisekund blir väldigt stora siffror, väldigt snabbt. Vi har nyhetssidan Aftonbladet, som innehåller en balanserad blandning emellan många mindre bilder, stora titlar och lite brödtext tillsammans med många element och boxar av information som hämtas från olika ställen. Och till sist har vi bilmärket och bilsäljningshemsidan Audi, som innehåller flertalet stora högupplösta bilder som tillsammans med text gör till en (kanske) tungdriven hemsida.

Metod
-----------------------

<!-- Beskriv vilka verktyg du använde och hur du utförde arbetet för att samla in dina mätvärden. Det blir en kort beskrivning av din metod. -->

De verktyg som används i denna rapport är följande verktyg:

<h3 style="font-size:19px;margin-bottom:0px;">Google Pagespeed</h3>
Pagespeed är Googles egna verktyg för att mäta hastigheten utav laddningen på hemsidan, noterar ner kritiska tidpunkter för när hemsidan exempelvis är färdigladdad och användbar, och noterar även hur mycket datorn får jobba för att ladda sidan och hur väloptimerad inladdningen är. Även större siffror såsom sidans totala storlek visas, tillsammans med det totala antalet laddade resurser.                 

<h3 style="font-size:19px;margin-bottom:0px;">Google Drive</h3>
Drive användes mest för att spara de dokumenterade resultaten i ett excel-ark, för att enkelt och snabbt kunna få en överblick över siffrorna i denna analys. Denna kan hittas <a href="https://docs.google.com/spreadsheets/d/1HaBv6cQDVL0x4TNK7Bv4xp4iRSvcQpj43Rz8bEOoH_o/edit?usp=sharing">om du klickar här</a>.

<h3 style="font-size:19px;margin-bottom:0px;">Google Chrome</h3>
Jag använder även i viss utsträckning Google Chrome för att dels visa hemsidorna och ta skärmdumpar, men även så använder jag fliken Network Tools för att kunna få ut data såsom hur många requests som gjordes under tiden jag laddade sidan, och även hur stor plats sidan i sin helhet tog upp efter att ha laddats upp på min webbläsare.

Innan informationen samlades i denna rapport, så genomgicks samma test tre gånger för att få fram ett medelvärde.

Resultat
-----------------------

<!-- Skapa ett excelark, till exempel Google Kalkylark, för att spara dina mätningar i. För allt du nu skall mäta, dokumentera det i excelarket. Länka till ditt excelark så man ser rådatan.

För varje webbplats, gör följande:

Ta en snapshot (bild) på webbplatsen.
Välj ut tre sidor (bifoga länkarna) som skall mätas med Google Pagespeed. Mät på både Mobile och Desktop. Notera de betyg som ges.
För varje sida, mät med devtools flik networks och notera sidans laddningstid tillsammans med antalet resurser som laddas samt sidans totala storlek. För varje sida gör mätningen tre gånger och ta snittet av mätvärdena.-->

Som nämnt ovan, så sparar jag all min data i ett Excel-ark på Google Drive. Det kan hittas <a href="https://docs.google.com/spreadsheets/d/1HaBv6cQDVL0x4TNK7Bv4xp4iRSvcQpj43Rz8bEOoH_o/edit?usp=sharing">här</a>!

Jag går igenom mina resultat per hemsida, för att under analysen diskutera de likheter och skillnader som finns emellan hemsidorna.

Vi börjar ovanifrån, helt enkelt.

<h3 style="font-size:20px;margin-bottom:0px;">Google</h3>
<h3 style="font-size:14px;font-style:italic;margin-top:0px;">Google.com</h3>
Google må vara en av världens mest besökta hemsidor, och har extremt mycket trafik. Alla förseningar eller ineffektiva delar på Google påverkar tusentals om inte miljontals inom kort tid, och även ett par millisekunder kan bli många minuter till timmar rätt fort. Med det sagt, så håller sig Google väldigt optimerat och snabbt även fast det inte är hundraprocentigt.

Googles förstasida
<img src="../htdocs/img/reports/google.png" alt="Google homepage">

På mobila enheter, så får Googles hemsida snittbetyget 93 av deras egna tjänst, som kallas PageSpeed. Deras datorhemsida å andra sidan passerade testet utan problem, med ett slutresultat på 100. De båda hemsidorna har en snabb inladdning, och tiden tog 4,5 sekunder för processorn att sluta bearbeta hemsidan på mobilen, men endast 1,2 sekunder på datorhemsidan. Detta resulterade i den totala laddtiden på mobilhemsidan att vara 4,9 sekunder, och 1,4 sekunder för datorhemsidan. Detta gjorde den även väldigt effektivt, och de uppmätta sparningarna som kan göras enligt verktyget själv resulterar i att den största tidsinsparningen i detta fallet landar på 1,26 sekunder för mobilhemsidan (På grund av onödiga vidaredirigeringar av hemside-addressen), och  0,38 sekunder på datorhemsidan av samma anledning.

Den totala storleken för Googles förstasida slutade på 1200kb för mobilhemsidan respektive 902kb för datorhemsidan. Det var en slående likhet i de efterfrågningar som gjordes när man laddade hemsidorna, med 28 efterfrågningar på mobilversionen och 29 stycken på hemsidan.

<h3 style="font-size:20px;margin-bottom:0px;">Aftonbladet</h3>
<h3 style="font-size:14px;font-style:italic;margin-top:0px;">Aftonbladet.se</h3>

Aftonbladet är en hemsida som först och främst är väldigt informationspackad. Aftonbladet är en hemsida som är viktig att den laddar snabbt och effektivt, samtidigt som den innehåller mycket information av skilda slag såsom små och stora bilder, reklampelare och brödtexter med länkar. För att en läsare inte ska tappa intresset, så är det väldigt viktigt att hemsidan laddar snabbt samtidigt som allting håller sig läsbart och urskiljbart när det kommer till bilder.

Aftonbladet, under tiden då artikeln skrevs:
<img src="../htdocs/img/reports/aftonbladet.png" alt="Aftonbladet homepage">

När Aftonbladet fick köras igenom Googles PageSpeed, så fick det ett betydligt lägre betyg än Googles förstasida. Det tog 18,8 sekunder för processorn att få ta ett break från mobilhemsidans laddning, och datorhemsidan tog 4,7 sekunder på sig att ladda klart.

Detta resulterade i en laddningstid på 20,3 sekunder för mobilhemsidan, och 5,3 sekunder för datorhemsidan. Detta tillsammans med andra faktorer gav Aftonbladets mobilhemsida en överskådlig rankning på 22 av hundra, medans deras datorhemsida nätt och jämnt klarade sig över hälften med ett slutresultat på 52.

Aftonbladets hemsidor var dock väldigt optimerade, och Googles verktyg kunde endast hitta sparningar i korta tider såsom 0,82 sekunder för mobilhemsidan och 0,56 sekunder på datorhemsidan. Enligt Googles verktyg, så är det som tar upp tiden helt enkelt resurser som blockerar renderingen av hemsidan. Det handlar alltså om back-end javascript och CSS-kod, som förhindrar att vissa element ritas upp så fort de bara kan.

Det som får Aftonbladet att sticka ut betydligt mer än Googles söksida är såklart hur mycket plats sidan tar upp, tillsammans med dess resurser som laddas in. På mobilhemsidan laddades det in 150 efterfrågningar av resurser, som tillsammans slutligen tog upp cirka 6500kb. Det var dock ingenting upp emot datorhemsidan, som tog upp 15200kb tillsammans med dess efterfrågningar som var 156 stycken.  

<h3 style="font-size:20px;margin-bottom:0px;">Audi</h3>
<h3 style="font-size:14px;font-style:italic;margin-top:0px;">Audi.se</h3>

Sist men inte minst så har vi en hemsida som lägger stor tyngd på dess visuella uttryck, och det är bilmärket Audi med deras hemsida, för information och bilförsäljning. Det är en hemsida med stora titlar, stora bilder och en hemsida som antagligen gärna vill ha snygga skarpa bilder som de dessutom känner att de kan lägga lite mer användartid på för att ladda fram.

Deras förstasida, och den sidan som man möts av:
<img src="../htdocs/img/reports/audi.jpg" alt="Audi homepage">

Detta återspeglas även i deras resultat enligt PageSpeed, med ett överskådligt resultat på 7 för mobilhemsidan, samt 38 för datorhemsidan. Enligt PageSpeeds undersökningsdel, så är detta starkt kopplat till de bilder som valt att användas, samt hur de implementeras. På mobilhemsidan finns det en eventuell sparning på 11,7 sekunder enbart med anledningen av att bilder som inte visas på skärmen fortfarande laddas in, men detta skiljer sig lite från datorhemsidan som istället har en största tidsbesparning på 1,32 sekunder genom att ändra bildformatet som används just nu till en mer effektiv motsvarighet.

På Audis mobilhemsida så tog det cirka 20 sekunder för processorn att få sin första paus, medans den totala laddningstiden för hemsidan slutade på 30 sekunder. Datormotsvarigheten gick något snabbare, med 3,9 sekunder för processorn att varva ner med en total laddningstid för hemsidan på 6,7 sekunder.

De resurser som hemsidan använder är större än båda de tidigare hemsidorna, med 217 efterfrågningar på mobilhemsidan och 230 efterfrågningar på datorn. När allting var färdigladdat och inläst, så slutade storleken på 11800kb för mobilhemsidan och 11400kb på datorversionen.

Analys
-----------------------

<!--
Diskutera och skriv en mening om hur webbplatsen kan förbättra sig.

 Sammanfatta ditt resultat i en analys och skriv om vilka de vanligaste förbättringsåtgärderna verkar vara för ditt urval av webbplatser.

Rangordna dina webbplatser baserat på deras mätvärden och utse en vinnare i testet och kommentera resultatet.

Bestäm en gräns för absolut laddningstid som du själv uppfattar som snabb eller långsam webbplats. Skriv en mening om hur ditt urval av webbplatser klarar ditt gränsvärde och hur du upplever webbplatsernas snabbhet, rent generellt, i ditt urval.  -->

Som nämnt tidigare så har alla tre hemsidorna förbättringsmöjligheter. Även Google själva påstår att deras egna sida har förbättringar att göra, som enligt deras beräkningar anses spara stora tider med tanke på frekvensen av personer som använder den hemsidan.

Annars har Googles sökhemsida väldigt vagt med förbättringsmöjligheter av misstänkt flera anledningar. Dels är det ju frontlinen i hela deras företag, och man skulle kunna säga att det är tack vare deras sökfunktion som allting annat de bygger på finns idag. Som nämnt tidigare, så är Googles söksida argumenterbart en av de viktigaste sidorna i världen att vara väloptimerad, inte innehålla krafs som kan sakta ner användarupplevelsen, och åtminstone borde prestera felfritt i Googles egna verktyg, kan man tycka.

Aftonbladets värden var ändå förvånansvärt bra (speciellt datorhemsidan), med tanke på hur mycket information som sidan innehåller och hur rörig den kan framstå som. De laddningstider som framstod var hanterbara, men lite åt det längre hållet när det kommer till mobilhemsidans 20 sekunder. Datorhemsidans storlek var dock den största av alla sex hemsidor som undersöktes, men laddades ändå in snabbare än Audis datorhemsida som trots allt var mindre.

Aftonbladets hemsida gjorde cirka 150 requests under laddningen på både mobilsidan och datorsidan, någonting som kan ses som väldigt mycket i ett vakuum. När det dock ställs i relation till hur många requests Audi gjorde på sina hemsidor, i snitt 220 mellan mobil och dator-hemsidan, så är det inte lika många. Man kan tycka att det är lite väl många requests för en hemsida som inte borde ha så utspridd information, samtidigt som man vill att hemsidan ska laddas snabbt såklart. Jämfört med Googles sökmotor-hemsida så är det en självförklarig ökning gentemot Googles förhållandevis enkla och informationstomma förstasida.

Fortsättningsvis så kollade jag på Aftonbladets  förbättringsmöjligheter, där den som tidigare nämnt främst är att rätta till och möjligen ta bort resurser som förhindrar hemsidans inladdningstid att förbättras. Aftonbladet hade, trots deras antal bilder, storlek på hemsida och deras informationstäta upplägg, inte så många andra förbättringsmöjligheter enligt PageSpeed. Det ser ut att vara en relativt väloptimerad sida, som trots alla sina bilder bibehålla en acceptabel laddningstid.

Sist men inte minst så har vi bilmärket Audi med dess svenska sida, Audi.se. Audis hemsidor var väldigt långladdade både på den mobila versionen och datorversionen, med flertalet tidsinsparningar som kan användas. De största innefattar att skicka bilderna i modernare format (samma som Aftonbladet), att ta bort oanvänd CSS och att skjuta upp inläsning av objekt och bilder som inte visas på skärmen vid en första inladdning. Den sistnämnda var extra framgående under mobilhemsidans rapport i PageSpeed, där den totalt kunde spara in 11,7 sekunder enbart på denna punkt.

Båda Audis versioner av hemsidan får det lägsta betyg i respektive typ av hemsida av de tre jag testade, och detsamma gällde med inladdningstiden. Att mobilhemsidan tog 30 sekunder på sig att ladda in komplett och klart är något över gränsen i mina ögon. Även datorhemsidan tog längst av alla tre datorhemsidor att ladda in, men denna endast 1,4 sekunder efter Aftonbladets hemsida gentemot skillnaden på mobilhemsidorna, som är runt 10 sekunder istället.

Rent överskådligt så är dessa tre hemsidor svårt att dra några röda trådar igenom varenda en utav de tre. Man skulle exempelvis dra jämförelsen emellan Google och Aftonbladet med dess javascript som bakomliggande saktade ner hemsidan. Man skulle samtidigt kunna jämföra Audi och Aftonbladet, där det istället handlar om bilder (som Google helt saknar på deras hemsida i princip) och dess inladdning mer än skripter som körs i bakgrunden.

I en rangordning skulle jag, rent objektivt, ranka de tre hemsidorna på detta vis:

<ul>
<li>Google</li>
<li>Aftonbladet</li>
<li>Audi</li>
</ul>

Detta med anledningav att, uppifrån:
<ul>
<li>Det är svårt att slå Google när det kommer till effektivitet. De har en enkel hemsida att ladda in, hemsidan börjar inte med att ladda in alltför mycket information mer än användarenheten och det är inte mer än någon enstaka bild som behöver laddas in vid hemsidostarten. Man måste försöka rätt mycket, om den hemsidan inte resulterade i mycket bra betyg på deras egna tjänst PageSpeed</li>
<li>Aftonbladet är en mycket informationstät hemsida, som fick ett något medelvärdigt betyg genom PageSpeed. Det var nära att denna hemsida istället skulle hamnat på förstaplats rent med anledningen att den är väldigt snabbladdad med bra siffror och få förbättringsmöjligheter enligt verktyget, även fast det är (antagligen) den mest informationstäta hemsidan av alla dessa tre. Jag kunde dock inte bortse från Googles nästan helt fläckfria resultat.</li>
<li>Audi kommer tyvärr på sista plats, med stor del till att det är en stor och tungdriven hemsida som dessutom fick ett väldigt dåligt betyg på både mobilhemsidan och datorhemsidan enligt PageSpeed. När hemsidan väl är inladdad och allting är klart är det en vacker hemsida där allting ser bra ut, men siffrorna är helt enkelt för dåliga för att med gott samvete ranka den högre än de andra hemsidorna som var med i denna rapport.</li>
</ul>

Under tiden jag har analyserat och besökt dessa hemsidor, så har jag haft i baktanken vad en bra hemsida är för någonting, när det kommer till användbarhet och laddningstider. Jag har känt lite själv vad jag tycker är en lång laddningstid, och vad som är en laddningstid man inte lägger fler tankar på när hemsidan har laddat upp.

Jag skulle vilja säga att det skiljer sig från person till person med vad man anser är en bra laddningstid och vad som är en sämre, men personligen går min gräns vid ungefär 5-7 sekunder. Är det längre än så, så börjar man tänka på att hemsidan tar lång tid på sig att ladda och därmed fundera på om någonting är fel. Går tankarna dit så har man, enligt mig, misslyckats med att få ens hemsida så bra och snabb som möjligt.

Hemsidorna i denna rapport, främst ex. Audi, är fortfarande mycket optimerade att de på så sätt laddar in relativt fort även fast den på papper inte är så charmig. Den laddar in under fem sekunder på min webbläsare, även fast kanske objekt som inte syns på skärmen är klara än. Och det är självklart den upplevda väntetiden jag baserar min gräns på, och inte den tiden det tar för footerns små bilder att renderas i fullskalig vy när jag fortfarande läser huvudtiteln på hemsidan jag är inne på.

Så enligt mina tankar har alla dessa tre hemsidor gjort bra ifrån sig ur en användarsynpunkt då hemsidorna laddar in väldigt fort, man sitter inte och stirrar på en blank skärm inann saker händer, och den upplevda laddningstiden verkligen inte stämmer överens med de siffror som PageSpeed delar med sig av.


Olle Lundmark
2019-12-05
BTH
