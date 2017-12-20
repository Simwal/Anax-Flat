Laddningstid
===============================
Jag valde att testa laddningstiden på de webbsidor jag använde som underlag för färganalysen:  <a href="https://www.reddit.com">Reddit</a>, <a href="https://www.aftonbladet.se">Aftonbladet</a> och <a href="https://www.elgiganten.se">Elgiganten</a>. Jag tyckte att de ger analyserna en röd tråd.

Jag använde mig av <a href="https://developers.google.com/speed/pagespeed/">Google PageSpeed</a> och Google Chrome för att mäta laddningstiderna, samt <a href="https://www.google.com/intl/sv_sE/sheets/about/">Google Kalkylark</a> för att dokumentera siffrorna.

Resultaten finns att tillgå i ett kalkylark som ni når här: <a href="https://docs.google.com/spreadsheets/d/1jdwxPUer_7tamWyenxxlodKynl5bz5_BoVeApaZfBVE/edit?usp=sharing">rådata</a>

<h2>Reddit</h2>

[FIGURE src="image/reddit.png" alt="reddit"]

<h4>PageSpeed</h4>

<a href="https://www.reddit.com">Reddit.com</a> : <b>Mobil:</b> 64/100 (Poor), <b>Dator:</b> 72/100 (Needs Work)

<a href="https://www.reddit.com/r/popular/">Reddit.com/r/popular</a> : <b>Mobil:</b> 64/100 (Poor), <b>Dator:</b> 72/100 (Needs Work)

<a href="https://www.reddit.com/r/worldnews/">Reddit.com/r/worldnews</a> : <b>Mobil:</b> 64/100 (Poor), <b>Dator:</b> 79/100 (Needs Work)

<h4>Optimeringsmöjligheter</h4>

Om bilder hade optimerats och webbplatsen utnyttjar webbläsarens cachelagring bättre hade laddningstiden antagligen förkortats. Om resurer hade komprimerats med gzip hade antalet byte som skickas via nätverket minskat och även det kan reducera laddningstiden.

<h2>Aftonbladet</h2>

[FIGURE src="image/aftonbladet.png" alt="aftonbladet"]

<h4>PageSpeed</h4>

<a href="https://www.aftonbladet.se">Aftonbladet.se</a> : <b>Mobil:</b> 61/100 (Poor), <b>Dator:</b> 61/100 (Poor)

<a href="https://www.aftonbladet.se/sportbladet">Aftonbladet.se/sportbladet</a> : <b>Mobil:</b> 67/100 (Needs Work), <b>Dator:</b> 78/100 (Needs Work)

<a href="http://kampanjer.aftonbladet.se/plus-saljsida/">Aftonbladet Plus</a> : <b>Mobil:</b> 64/100 (Poor), <b>Dator:</b> 39/100 (Poor)

<h4>Optimeringsmöjligheter</h4>

Det kan gå snabbare att tolka sidan om HTML, JavaScript och CSS-kod minifieras. Om bilder hade optimerats och webbplatsen utnyttjar webbläsarens cachelagring bättre hade laddningstiden antagligen förkortats. Om resurer hade komprimerats med gzip hade antalet byte som skickas via nätverket minskat och även det kan reducera laddningstiden.

<h2>Elgiganten</h2>

[FIGURE src="image/elgiganten.png" alt="elgiganten"]

<h4>PageSpeed</h4>

<a href="https://www.elgiganten.se">Elgiganten.se</a> : <b>Mobil:</b> 63/100 (Poor), <b>Dator:</b> 65/100 (Needs Work)

<a href="https://www.elgiganten.se/cms/elgigantens-kundtjanst/kundtjanst/">Elgiganten kundtjänst</a> : <b>Mobil:</b> 55/100 (Poor), <b>Dator:</b> 71/100 (Needs Work)

<a href="https://www.elgiganten.se/cms/om-elgiganten/om-elgiganten/">Om elgiganten</a> : <b>Mobil:</b> 46/100 (Poor), <b>Dator:</b> 58/100 (Poor)

<h4>Optimeringsmöjligheter</h4>

Om bilder hade optimerats och webbplatsen utnyttjar webbläsarens cachelagring bättre hade laddningstiden antagligen förkortats. Om resurer hade komprimerats med gzip hade antalet byte som skickas via nätverket minskat och även det kan reducera laddningstiden.

<h2>Sammanfattning</h2>

1. Elgiganten
2. Reddit
3. Aftonbladet

Optimeringsmöjligheterna verkar vara näst intill identiska för alla 3 webbplatserna. Det handlar mycket om att utnyttja cachelagring bättre samt att komprimera och optimera bilder.
Jag tycker att webbplatsernas resultat i PageSpeed är ganska snarlika men en sak jag märkte vid mätningar i webbläsaren är att Aftonbladet har väldigt mycket mer resurser att ladda in än andra sidor.

 Elgiganten är den webbplatsen som presterar bäst i mätningarna i webbläsaren, tätt följt av Reddit och Aftonbladet kommer hjälplöst sist. Detta baserar jag på det sammanlagda reslutatet av PageSpeed samt mätningar i webbläsaren. Jag vill dock tillägga att samtliga webbsidor laddar relativt snabbt om du går på det ytliga, de laddar in de resurser som är viktigast på en kort tid, men Aftonbladet fortsätter att bakgrundsladda mycket längre än de andra.

 Det är väldigt svårt att sätta en absolut laddningstid och bedömma om det är snabbt eller långsamt. Men jag skulle säga att om en webbsida laddar i mer än 5 sekunder skulle jag betrakta den som långsam. Då talar jag inte om bakgrundsladdning i mätinstrumenten utan faktiskt laddning, från det att jag skriver in adressen till att jag tittar på sidan. Jag tycker att alla sidor utan Aftonbladet klarar detta test. Aftonbladet laddar in artiklar direkt, men reklambanners och liknande kan ta över 5 sekunder att ladda klar vilket kan vara distraherande.

 Jag arbetade ensam med denna uppgift.
