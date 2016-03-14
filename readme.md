# Tuinbouw project backend with laravel

UI for backend is powered by Angular Js. Authorisation is done with
JWT. Communication is done with REST

## API

### Plants

#### Get plants

url = api/plant
method = GET

Example response

```json
[
  {
    "id": 1,
    "created_at": "2016-03-11 08:40:53",
    "updated_at": "2016-03-11 08:40:53",
    "plant_information": {
      "id": 1,
      "plant_id": 1,
      "title": "Lavandula angustifolia - Lavendel",
      "info": "Echte lavendel of smalbladige lavendel
      (Lavandula angustifolia) is een plant uit de lipbloemenfamilie
      (Lamiaceae). Deze fantastische tuinplant is perfect te gebruiken
      als solitaire struik, lage haagplant of bodembedekker (in
      blokbeplanting). Ook terraspotten en plantenbakken fleuren op
      met deze dankbare plant. Lavendel dankt zijn populariteit aan
      zijn lange bloeiperiode (2 maand of langer, afhankelijk van de
      cultivar) en zijn intense geur. Een ander pluspunt is zeker ook
      het grijsgroene blad dat trouwens ook in de winter aan de plant
      blijft. Het is een lage, sterk vertakte struik die bekend is
      vanwege de aromatische olie die gebruikt wordt in parfums. Echte
      lavendel is oorspronkelijk afkomstig uit Zuid-Europa, waar de p
      lant groeit op droge, rotsige, kalkrijke hellingen. Tegenwoordig
      is lavendel in grote delen van Europa een populaire tuinplant. De
      hoogte is circa 75 cm.",
      "family": "",
      "genus": "",
      "created_at": "2016-03-11 08:40:53",
      "updated_at": "2016-03-11 08:40:53"
    }
  }
]
```


#### Get plant by id

url = api/plant
method = POST

Example response

```json
{
  "id": 1,
  "created_at": "2016-03-14 10:10:23",
  "updated_at": "2016-03-14 10:10:23",
  "plant_category": {
    "id": 1,
    "species": "vaste plant",
    "habitat": "open plaats, heide, steenachtige bodem",
    "height": "20 - 40 Cm",
    "flower_color": "paars, blauw",
    "bloomTime": "Juni - Augustus",
    "flowers": "langgesteelde, sterkgeurende bloemaren. Eetbaar",
    "leafColor": "grijs",
    "leaf": "smal, harig, geurend",
    "leafDetail": "bladhoudend",
    "sunlight": "zon",
    "humidity": "droog, normaal",
    "ph": "kalkrijk,neutraal",
    "evergreen": "matig",
    "planDensity": "7-10 Per vierkante meter",
    "plant_id": 1,
    "usage": "vakbeplanting",
    "categoryname": "habitus/habitat"
  },
  "plant_maintenance": {
    "id": 1,
    "maintenance": "\"Hoe moet je lavendel snoeien?\"\nHet is erg belangrijk dat je er vroeg mee begint. Jonge planten snoei je eventueel een of twee keer extra het eerste jaar. Wij toppen de stekken en jonge planten op onze kwekerij regelmatig. Hierdoor worden ze mooi vol en bossig. Dat komt doordat de vorming van nieuwe scheuten onderin de plant wordt gestimuleerd. Als je niet knipt blijft de plant van binnen vochtig en sterven er juist scheutjes af. Uiteindelijk wordt je plant dan kaal van binnen en kun je nooit meer diep snoeien.\nDe onderstaande snoeimethode is vooral van toepassing op een van de meest geschikte lavendel soorten voor ons klimaat; Lavandula angustifolia of echte lavendel. Deze verdraagt ingrijpende snoei het beste.\nBlauwe lavendel en lavendel blauw bestaan niet, dat blauw heet officieel violet. Echte lavendel, of Lavandula angustifolia bloeit meestal zeer rijk en bestaat in heel veel verschillenden kleuren; wit, roze en helder tot zeer donker violet met al hun varianten zijn mogelijk. Er zijn cultivars met zeer grijs blad en er zijn dwergvormen en reuzen. Vanwege deze grote diversiteit menen wij zo'n 100 soorten lavendel te moeten vermeerderen.\nAlle lavendel soorten zijn bladhoudende heesters. Ze slaan weinig energie op in hun wortels en moeten daarom altijd wat blad hebben om verder te kunnen groeien.\n",
    "plant_id": 1
  },
  "plant_history": {
    "id": 1,
    "plantHistory": "Volgens een zeer oude Europese overlevering groeide de eerste lavendelstruik in de hof van\n             Eden. Adam en Eva namen een twijgje van de welriekende plant mee, toen ze uit het Paradijs werden verdreven.\nLavendel wordt al duizenden jaren gebruikt. In het oude Egypte werden windsels voor mummies gedrenkt in een teerachtige\nsubstantie die lavendelolie bevatte. Gebalsemde lichamen werden hierin gewikkeld en vervolgens in de zon gelegd zodat\nde wikkels droogden en opstijfden.\nIn het graf van de farao Toetanchamon zou ook een kruik met deze substantie gevonden zijn. Het gaat dan dus niet, zoals\nin sommige boeken verkeerdelijk voorgesteld, om een kruik lavendelolie zoals wij die nu kennen: het principe van de\ndestillatie werd immers pas veel later ontwikkeld (ten tijde van Abu Ali Ibn Sina (930-1037 C.E.), beter bekend als\nAvicenna, aan wie al dan niet terecht de uitvinding van het destilleren wordt toegeschreven).\nZowel in het oude Griekenland als in de Romeinse gebieden werd lavendel gebruikt als badkruid, en dat zowel omwille van\nzijn geur als om de therapeutische waarde.  De Griekse schrijver Padanius Dioscorides vermeldde het medicinaal gebruik\nvan lavendel in de eerste eeuw na Christus. De Romeinse troepen hadden ook zeker lavendel bij zich voor gewonde en\nuitgeputte soldaten, en waren de eersten die  het voor oogst en verwerking plantten. Hierdoor verspreidden de Romeinen\nhet gebruik van lavendel over hun hele territorium.\nIn de Middeleeuwen werd Lavendel als het kruid van de liefde beschouwd. Ook werd het als strooikruid gebruikt omwille\nvan zijn schone, frisse geur en zijn insectenwerende eigenschappen.",
    "plant_id": 1
  },
  "plant_harvest": {
    "id": 1,
    "plantHarvest": "Lavendel vraagt een goed doorlatende, neutrale tot lichtalkalische bodem (pH 6.9 tot 7.3) en een beschutte, zonnige\nstandplaats (een plekje tegen een zuidmuur is vaak een goed keuze).\nAls je op klei tuiniert kan het nodig zijn een hoeveelheid zand en kalk onder te werken.\nPlant de struikjes niet te dicht bij elkaar (exacte afstanden verschillen naargelang van de variëteit, en dus van de uiteindelijke grootte van het struikje) zodat de lucht er voldoende tussen kan circuleren en de plant snel opdroogt als ze door dauw of regen nat is geworden. Lavendel is immers een plant van een droog, warm klimaat, en zal in vochtige omstandigheden gevoelig zijn voor schimmelaantasting. De planten mogen echter ook weer niet blootgesteld worden aan te felle wind, waardoor de stengels zouden breken.",
    "plant_id": 1
  },
  "plant_cultivars": {
    "id": 1,
    "plantCultivarsInfo": "Cultivars ontstaan na kruising, selectie en vermeerdering. Er moet een onderscheid\n             gemaakt worden tussen de intraspecifieke cultivars ontstaan door kruising van verschillende variëteiten of\n             lijnen binnen eenzelfde soort (in dit geval meestal Lavandula angustifolia) zoals: Lavandula angustifolia\n             'Arctic Snow' ('Alba') (bloemen wit, hoogte 40 cm) Lavandula angustifolia 'Blue Mountain White' (bloemen\n             wit hoogte 50-60 cm bloei juni-september) en de interspecifieke hybridencultivars ontstaan door kruising\n              tussen verschillende soorten zoals Lavandula × intermedia 'Alba', een eveneens witbloemige cultivar in het\n               hybridenras lavandin ( Lavandula × intermedia) ontstaan door kruising van Lavandula angustifolia en\n               Lavandula latifolia. Er wordt voor de sierteelt meestal geselecteerd op hoogte, vorm, densiteit,\n               kouderesistentie (wintervastheid), geur, bladkleur en bloemkleur. De bloemen gaan van wit over roze naar\n               vele tinten tussen helderblauw en donkerviolet. De meeste cultivars worden vegetatief vermeerderd door\n               stekken. Het zijn klonen.\n               Lavandula angustifolia 'Lady' (bloemen donker violet in korte bolvormige aren, zeer aromatisch) is hierop een\n               uitzondering: het is een zaadvast ras dat kan worden vermeerderd door uitzaaiing.\n               Andere voorbeelden van cultivars van Lavandula angustifolia, buiten de reeds geciteerde, zijn:",
    "plant_id": 1,
    "examples": [
      {
        "id": 1,
        "example": "Lavandula angustifolia little lady = 'Batlad' (bloemen violetblauw)",
        "plant_cultivars_id": 1
      }
    ]
  },
  "plant_medical": {
    "id": 1,
    "properties": "Lavendel is zenuwkalmerend, verzachtend, opbeurend en balancerend, en tevens ontsmettend, bacteriedodend en pijnstillend. Bovendien heeft het kruid slijmoplossende en bloeddrukverlagende eigenschappen, is het krampstillend en anti-nauseaus.\nOok is het een tonicum en zou het reuma tegengaan. Lavendel is tevens transpiratiebevorderend en koortsverlagend. Tenslotte is het kruid bloeddruk- verlagend, voorkomt maagkramp en misselijkheid en spijsverteringsstoornissen, en is een cholagoog.",
    "usage": "Een lijst met indicaties voor het gebruik van lavendel is erg uitgebreid, ter illustratie een (nog steeds beperkt)\noverzichtje: abcessen, acne, allergieÃ«n, aambeien, blauwe plekken, brandwonden, dermatitis, eczeem, hoofdroos, insectensteken, luizen, oorpijn, ontstekingen, psoriasis, puistjes, ringworm, schurft, steenpuisten, wonden, zonnebrand, zweren, zwemmerseczeem, lumbago, spierpijn, reuma, verstuikingen, verrekkingen, astma, bronchitis, keelinfecties, kinkhoest, laryngitis, slechte adem, slijmvliesontsteking, buikkramp, braakneigingen, dyspepsie, flatulentie, kolieken, misselijkheid, blaasontsteking, dysmenorroe, witte vloed,\ndepressiviteit, hoofdpijn, hypertensie, migraine, nervositeit, ischias, shock, slapeloosheid, stress, vertigo, griep, verkoudheid, winterhanden, vermoeide voeten en wintervoeten...\nZowel een aftreksel, de tinctuur en de etherische olie van lavendel worden gebruikt voor hun zowel lichamelijk als\npsychisch ontspannende effect. Het is dan ook een goed middel bij angst en zenuwachtigheid en de fysieke componenten daarvan, zoals nerveuze hoofdpijn, hartkloppingen en slapeloosheid. Door de balancerende eigenschappen van de olie montert hij op, onderdrukt hij depressieve gevoelens en herstelt de innerlijke harmonie. Inderdaad is er naast de rustgevende, ook sprake van tonische eigenschappen, en herstelt het kruid de vitaliteit, vooral indien de adynamie\nhet gevolg is van nerveuze uitputting.\nHet ontspannende effect van lavendel vindt ook toepassing bij spijsverteringsproblemen, bijvoorbeeld bij krampen en kolieken die het gevolg zijn van spanning en angst. Ook bij een opgeblazen gevoel, winderigheid, misselijkheid en indigestie kan lavendel worden toegepast, en het kan bovendien de eetlust bevorderen. Bij al deze gebruiken\ngeldt dat de werking het meest uitgesproken is als stress of angst aan de basis van de problemen liggen.\nAls infusie, geïnhaleerde olie of smeersel is lavendel ook bruikbaar in de behandeling van verkoudheid, hoest, astma, bronchitis, longontsteking, griep, keelontsteking en slijmvliesontstekingen. De thee kan ook worden gedronken bij maag- en darminfecties die braken of diarree veroorzaken.\nDe transpiratiebevorderende en koortsverlagende\neigenschappen komen het best tot hun recht indien als infusie (kruidenthee) gedronken.\nBij uitwendig gebruik is lavendel een effectief ontsmettingsmiddel bij snij- en schaafwonden en zweren. Wanneer de olie in onverdunde vorm bij brandwonden wordt aangebracht, stimuleert het de genezing van weefsels en reduceert het de vorming van littekens. Bovendien komen de pijnstillende eigenschappen hier ook goed van pas. In verdunde vorm is het een goede remedie tegen eczeem, acne en ontstoken spataders.",
    "warnings": "Omdat Lavendel een licht menstruatiebevorderend middel is, dat de maandelijkse bloedingen kan oproepen of stimuleren, moet lavendelolie gedurende de eerste drie maanden van de zwangerschap worden vermeden (dit geldt dus niet voor het gedroogde kruid als aftreksel of als strooikruid).\nVerder is lavendel veilig voor alle leeftijdsgroepen, maar mensen met hooikoorts of astma kunnen er natuurlijk allergisch voor zijn.",
    "cosmetic": "Lavendel kan gebruikt worden bij een tere en gevoelige huid omdat het de celgroei bevordert.\nOok wordt het kruid, omwille van zijn antiseptische eigenschappen, gebruikt bij acné.\nDe olie is ook te gebruiken bij massages tegen spierpijn, vochtretentie en cellulitis.  Bij jeugdpuistjes: 10 druppels Lavendel en 5 druppels Kamfer in een glas gekookt water doen en hiermee 2 keer per dag de huid afspoelen of deppen\nBij acne of rosacea druppels Lavendel, 2 druppels Citroen, 4 druppels Helicryse (strobloem), 2 druppels Petitgrain en 1 druppel Rozemarijn in 2 eetlepels St. Janskruid olie mengen, met dit mengsel dagelijks licht masseren.",
    "plant_id": 1,
    "contents": [
      {
        "id": 1,
        "content": "Etherische olie",
        "plant_medical_id": 1
      },
      {
        "id": 2,
        "content": "Looizuren",
        "plant_medical_id": 1
      }
    ]
  },
  "plant_recipes": [
    {
      "id": 1,
      "name": "Met lavendel geparfumeerde aubergines",
      "plant_id": 1,
      "steps": "Snij de aubergines door en blancheer ze gedurende 5 min. in gezouten water, laat uitlekken.\n            Haal het vruchtvlees er uit zonder de schil te beschadigen.Hak het vruchtvlees samen met dat van de tomaten\n            fijn en voeg er het gehakt, de eieren en de zachte kaas bij. Hak de sjalotten , de knoflookteentjes en de\n            lavendel fijn en meng de helft van dit alles onder het vruchtvlees. Kruid met peper en zout.  Vul de\n            aubergines en bestrooi met de overblijvende fijngehakte sjalot, knoflook en lavendel.\n            Laat 30 min. gaar worden in een matig warme oven. (180°).",
      "ingredients": [
        {
          "id": 1,
          "ingredientName": "4 aubergines",
          "plant_recipe_id": 1
        },
        {
          "id": 2,
          "ingredientName": "2 tomaten",
          "plant_recipe_id": 1
        }
      ]
    }
  ],
  "flower_arrangements": [
    {
      "id": 1,
      "steps": "Snijd een bol steekschuim in 2 delen (u heeft maar 1 deel nodig)\nDe halve nat maken en volledig vol steken met toefjes lavendel\nTakjes hebe en chrysanten tussen de lavendel steken.\nFijne korte takjes van de witte abeel op draad zetten, zorg ervoor dat de draad stevig genoeg is.\nWerk af door enkele takjes willekeurig in het bloemstukje te steken.",
      "plant_id": 1,
      "title": "Maken najaarsbloemstukje met hebe, lavendel, chrysanten en takjes van de witte abeel",
      "requirements": [
        {
          "id": 1,
          "created_at": null,
          "updated_at": null,
          "flower_arrangements_id": 1,
          "requirement": "Halve bol steekschuim"
        },
        {
          "id": 2,
          "created_at": null,
          "updated_at": null,
          "flower_arrangements_id": 1,
          "requirement": "Platte schaal"
        }
      ]
    }
  ]
}
```


#### Create plant

url = api/plant
method = POST

Example post body

```json
{
  "projects": [
    {
      "name": "ssdfsdf",
      "steps": "<p>sfsdfdf</p>",
      "requirements": [
        "sdfsdfsdf"
      ]
    }
  ],
  "recipes": [
    {
      "name": "sdfsdfsdf",
      "steps": "<p>sdsdfsdf</p>",
      "ingredients": [
        "sdfsdf"
      ]
    }
  ],
  "medicalContent": [
    "sddfssdfdf"
  ],
  "medicalProperties": "<p>dsfsdf</p>",
  "medicalUsage": "<p>sffddsfsddf</p>",
  "medicalWarnings": "<p>sdfasfadf</p>",
  "medicalCosmetic": "<p>sdffsdfdfdsf</p>",
  "harvestPlant": "<p>fdfdfdsf</p>",
  "maintenancePlant": "<p>sdfsdfasdfsdf</p>",
  "historyPlant": "<p>fsdfdfddf</p>",
  "cultivarsInfo": "<p>sdfsdfdsfsdf</p>",
  "cultivarExamples": [
    "sdfsdfdsf",
    "ssdfsdf"
  ],
  "catTitle": "sdfdsdf",
  "catGebruik": "fdff",
  "catHabitat": "dsfdf",
  "catHeight": "dfsfdsf",
  "catFlowerColor": "sfdsdf",
  "catBlloomTime": "fddsf",
  "catFlowers": "fdsfdf",
  "catLeafColors": "fadsasdf",
  "catLeafs": "dfasdfadsf",
  "catLeafDetail": "adfasdfaf",
  "catLeafShadow": "sfsdfsdf",
  "catHumidity": "dsfsdf",
  "catPh": "dfsdf",
  "catEvergreen": "dsfdsf",
  "catDensity": "fsdfdfsdfdsf",
  "infoTitle": "sdfdsfsadf",
  "infoPlant": "<p>dsafasdfdf</p>",
  "infoFamily": "dfsdfasdf",
  "infoGenus": "sddfdf"
}
```

Response : plant id that is created


#### Update plant

url: api/plants/id
method : PUT

body payload example

```json
{
  "infoTitle": "Lavandula angustifolia - Lavendel",
  "infoPlant": "Echte lavendel of smalbladige lavendel (Lavandula angustifolia) is een plant uit de lipbloemenfamilie (Lamiaceae). Deze fantastische tuinplant is perfect te gebruiken als solitaire struik, lage haagplant of bodembedekker (in blokbeplanting). Ook terraspotten en plantenbakken fleuren op met deze dankbare plant. Lavendel dankt zijn populariteit aan zijn lange bloeiperiode (2 maand of langer, afhankelijk van de cultivar) en zijn intense geur. Een ander pluspunt is zeker ook het grijsgroene blad dat trouwens ook in de winter aan de plant blijft. Het is een lage, sterk vertakte struik die bekend is vanwege de aromatische olie die gebruikt wordt in parfums. Echte lavendel is oorspronkelijk afkomstig uit Zuid-Europa, waar de plant groeit op droge, rotsige, kalkrijke hellingen. Tegenwoordig is lavendel in grote delen van Europa een populaire tuinplant. De hoogte is circa 75 cm.",
  "infoFamily": "test",
  "infoGenus": "test",
  "catTitle": "vaste plant",
  "catGebruik": "vakbeplanting",
  "catHabitat": "open plaats, heide, steenachtige bodem",
  "catHeight": "20 - 40 Cm",
  "catFlowerColor": "paars, blauw",
  "catBlloomTime": "Juni - Augustus",
  "catFlowers": "langgesteelde, sterkgeurende bloemaren. Eetbaar",
  "catLeafColors": "grijs",
  "catLeafs": "smal, harig, geurend",
  "catLeafDetail": "bladhoudend",
  "catLeafShadow": "zon",
  "catHumidity": "droog, normaal",
  "catPh": "kalkrijk,neutraal",
  "catEvergreen": "matig",
  "catDensity": "7-10 Per vierkante meter",
  "cultivarsInfo": "Cultivars ontstaan na kruising, selectie en vermeerdering. Er moet een onderscheid\n             gemaakt worden tussen de intraspecifieke cultivars ontstaan door kruising van verschillende variëteiten of\n             lijnen binnen eenzelfde soort (in dit geval meestal Lavandula angustifolia) zoals: Lavandula angustifolia\n             'Arctic Snow' ('Alba') (bloemen wit, hoogte 40 cm) Lavandula angustifolia 'Blue Mountain White' (bloemen\n             wit hoogte 50-60 cm bloei juni-september) en de interspecifieke hybridencultivars ontstaan door kruising\n              tussen verschillende soorten zoals Lavandula × intermedia 'Alba', een eveneens witbloemige cultivar in het\n               hybridenras lavandin ( Lavandula × intermedia) ontstaan door kruising van Lavandula angustifolia en\n               Lavandula latifolia. Er wordt voor de sierteelt meestal geselecteerd op hoogte, vorm, densiteit,\n               kouderesistentie (wintervastheid), geur, bladkleur en bloemkleur. De bloemen gaan van wit over roze naar\n               vele tinten tussen helderblauw en donkerviolet. De meeste cultivars worden vegetatief vermeerderd door\n               stekken. Het zijn klonen.\n               Lavandula angustifolia 'Lady' (bloemen donker violet in korte bolvormige aren, zeer aromatisch) is hierop een\n               uitzondering: het is een zaadvast ras dat kan worden vermeerderd door uitzaaiing.\n               Andere voorbeelden van cultivars van Lavandula angustifolia, buiten de reeds geciteerde, zijn:",
  "cultivarExamples": [
    "Lavandula angustifolia little lady = 'Batlad' (bloemen violetblauw)"
  ],
  "historyPlant": "Volgens een zeer oude Europese overlevering groeide de eerste lavendelstruik in de hof van\n             Eden. Adam en Eva namen een twijgje van de welriekende plant mee, toen ze uit het Paradijs werden verdreven.\nLavendel wordt al duizenden jaren gebruikt. In het oude Egypte werden windsels voor mummies gedrenkt in een teerachtige\nsubstantie die lavendelolie bevatte. Gebalsemde lichamen werden hierin gewikkeld en vervolgens in de zon gelegd zodat\nde wikkels droogden en opstijfden.\nIn het graf van de farao Toetanchamon zou ook een kruik met deze substantie gevonden zijn. Het gaat dan dus niet, zoals\nin sommige boeken verkeerdelijk voorgesteld, om een kruik lavendelolie zoals wij die nu kennen: het principe van de\ndestillatie werd immers pas veel later ontwikkeld (ten tijde van Abu Ali Ibn Sina (930-1037 C.E.), beter bekend als\nAvicenna, aan wie al dan niet terecht de uitvinding van het destilleren wordt toegeschreven).\nZowel in het oude Griekenland als in de Romeinse gebieden werd lavendel gebruikt als badkruid, en dat zowel omwille van\nzijn geur als om de therapeutische waarde.  De Griekse schrijver Padanius Dioscorides vermeldde het medicinaal gebruik\nvan lavendel in de eerste eeuw na Christus. De Romeinse troepen hadden ook zeker lavendel bij zich voor gewonde en\nuitgeputte soldaten, en waren de eersten die  het voor oogst en verwerking plantten. Hierdoor verspreidden de Romeinen\nhet gebruik van lavendel over hun hele territorium.\nIn de Middeleeuwen werd Lavendel als het kruid van de liefde beschouwd. Ook werd het als strooikruid gebruikt omwille\nvan zijn schone, frisse geur en zijn insectenwerende eigenschappen.",
  "maintenancePlant": "\"Hoe moet je lavendel snoeien?\"\nHet is erg belangrijk dat je er vroeg mee begint. Jonge planten snoei je eventueel een of twee keer extra het eerste jaar. Wij toppen de stekken en jonge planten op onze kwekerij regelmatig. Hierdoor worden ze mooi vol en bossig. Dat komt doordat de vorming van nieuwe scheuten onderin de plant wordt gestimuleerd. Als je niet knipt blijft de plant van binnen vochtig en sterven er juist scheutjes af. Uiteindelijk wordt je plant dan kaal van binnen en kun je nooit meer diep snoeien.\nDe onderstaande snoeimethode is vooral van toepassing op een van de meest geschikte lavendel soorten voor ons klimaat; Lavandula angustifolia of echte lavendel. Deze verdraagt ingrijpende snoei het beste.\nBlauwe lavendel en lavendel blauw bestaan niet, dat blauw heet officieel violet. Echte lavendel, of Lavandula angustifolia bloeit meestal zeer rijk en bestaat in heel veel verschillenden kleuren; wit, roze en helder tot zeer donker violet met al hun varianten zijn mogelijk. Er zijn cultivars met zeer grijs blad en er zijn dwergvormen en reuzen. Vanwege deze grote diversiteit menen wij zo'n 100 soorten lavendel te moeten vermeerderen.\nAlle lavendel soorten zijn bladhoudende heesters. Ze slaan weinig energie op in hun wortels en moeten daarom altijd wat blad hebben om verder te kunnen groeien.\n",
  "harvestPlant": "Lavendel vraagt een goed doorlatende, neutrale tot lichtalkalische bodem (pH 6.9 tot 7.3) en een beschutte, zonnige\nstandplaats (een plekje tegen een zuidmuur is vaak een goed keuze).\nAls je op klei tuiniert kan het nodig zijn een hoeveelheid zand en kalk onder te werken.\nPlant de struikjes niet te dicht bij elkaar (exacte afstanden verschillen naargelang van de variëteit, en dus van de uiteindelijke grootte van het struikje) zodat de lucht er voldoende tussen kan circuleren en de plant snel opdroogt als ze door dauw of regen nat is geworden. Lavendel is immers een plant van een droog, warm klimaat, en zal in vochtige omstandigheden gevoelig zijn voor schimmelaantasting. De planten mogen echter ook weer niet blootgesteld worden aan te felle wind, waardoor de stengels zouden breken.",
  "medicalProperties": "Lavendel is zenuwkalmerend, verzachtend, opbeurend en balancerend, en tevens ontsmettend, bacteriedodend en pijnstillend. Bovendien heeft het kruid slijmoplossende en bloeddrukverlagende eigenschappen, is het krampstillend en anti-nauseaus.\nOok is het een tonicum en zou het reuma tegengaan. Lavendel is tevens transpiratiebevorderend en koortsverlagend. Tenslotte is het kruid bloeddruk- verlagend, voorkomt maagkramp en misselijkheid en spijsverteringsstoornissen, en is een cholagoog.",
  "medicalUsage": "Een lijst met indicaties voor het gebruik van lavendel is erg uitgebreid, ter illustratie een (nog steeds beperkt)\noverzichtje: abcessen, acne, allergieÃ«n, aambeien, blauwe plekken, brandwonden, dermatitis, eczeem, hoofdroos, insectensteken, luizen, oorpijn, ontstekingen, psoriasis, puistjes, ringworm, schurft, steenpuisten, wonden, zonnebrand, zweren, zwemmerseczeem, lumbago, spierpijn, reuma, verstuikingen, verrekkingen, astma, bronchitis, keelinfecties, kinkhoest, laryngitis, slechte adem, slijmvliesontsteking, buikkramp, braakneigingen, dyspepsie, flatulentie, kolieken, misselijkheid, blaasontsteking, dysmenorroe, witte vloed,\ndepressiviteit, hoofdpijn, hypertensie, migraine, nervositeit, ischias, shock, slapeloosheid, stress, vertigo, griep, verkoudheid, winterhanden, vermoeide voeten en wintervoeten...\nZowel een aftreksel, de tinctuur en de etherische olie van lavendel worden gebruikt voor hun zowel lichamelijk als\npsychisch ontspannende effect. Het is dan ook een goed middel bij angst en zenuwachtigheid en de fysieke componenten daarvan, zoals nerveuze hoofdpijn, hartkloppingen en slapeloosheid. Door de balancerende eigenschappen van de olie montert hij op, onderdrukt hij depressieve gevoelens en herstelt de innerlijke harmonie. Inderdaad is er naast de rustgevende, ook sprake van tonische eigenschappen, en herstelt het kruid de vitaliteit, vooral indien de adynamie\nhet gevolg is van nerveuze uitputting.\nHet ontspannende effect van lavendel vindt ook toepassing bij spijsverteringsproblemen, bijvoorbeeld bij krampen en kolieken die het gevolg zijn van spanning en angst. Ook bij een opgeblazen gevoel, winderigheid, misselijkheid en indigestie kan lavendel worden toegepast, en het kan bovendien de eetlust bevorderen. Bij al deze gebruiken\ngeldt dat de werking het meest uitgesproken is als stress of angst aan de basis van de problemen liggen.\nAls infusie, geïnhaleerde olie of smeersel is lavendel ook bruikbaar in de behandeling van verkoudheid, hoest, astma, bronchitis, longontsteking, griep, keelontsteking en slijmvliesontstekingen. De thee kan ook worden gedronken bij maag- en darminfecties die braken of diarree veroorzaken.\nDe transpiratiebevorderende en koortsverlagende\neigenschappen komen het best tot hun recht indien als infusie (kruidenthee) gedronken.\nBij uitwendig gebruik is lavendel een effectief ontsmettingsmiddel bij snij- en schaafwonden en zweren. Wanneer de olie in onverdunde vorm bij brandwonden wordt aangebracht, stimuleert het de genezing van weefsels en reduceert het de vorming van littekens. Bovendien komen de pijnstillende eigenschappen hier ook goed van pas. In verdunde vorm is het een goede remedie tegen eczeem, acne en ontstoken spataders.",
  "medicalWarnings": "Omdat Lavendel een licht menstruatiebevorderend middel is, dat de maandelijkse bloedingen kan oproepen of stimuleren, moet lavendelolie gedurende de eerste drie maanden van de zwangerschap worden vermeden (dit geldt dus niet voor het gedroogde kruid als aftreksel of als strooikruid).\nVerder is lavendel veilig voor alle leeftijdsgroepen, maar mensen met hooikoorts of astma kunnen er natuurlijk allergisch voor zijn.",
  "medicalCosmetic": "Lavendel kan gebruikt worden bij een tere en gevoelige huid omdat het de celgroei bevordert.\nOok wordt het kruid, omwille van zijn antiseptische eigenschappen, gebruikt bij acné.\nDe olie is ook te gebruiken bij massages tegen spierpijn, vochtretentie en cellulitis.  Bij jeugdpuistjes: 10 druppels Lavendel en 5 druppels Kamfer in een glas gekookt water doen en hiermee 2 keer per dag de huid afspoelen of deppen\nBij acne of rosacea druppels Lavendel, 2 druppels Citroen, 4 druppels Helicryse (strobloem), 2 druppels Petitgrain en 1 druppel Rozemarijn in 2 eetlepels St. Janskruid olie mengen, met dit mengsel dagelijks licht masseren.",
  "medicalContent": [
    "Etherische olie",
    "Looizuren"
  ],
  "recipes": [
    {
      "name": "Met lavendel geparfumeerde aubergines",
      "steps": "Snij de aubergines door en blancheer ze gedurende 5 min. in gezouten water, laat uitlekken.\n            Haal het vruchtvlees er uit zonder de schil te beschadigen.Hak het vruchtvlees samen met dat van de tomaten\n            fijn en voeg er het gehakt, de eieren en de zachte kaas bij. Hak de sjalotten , de knoflookteentjes en de\n            lavendel fijn en meng de helft van dit alles onder het vruchtvlees. Kruid met peper en zout.  Vul de\n            aubergines en bestrooi met de overblijvende fijngehakte sjalot, knoflook en lavendel.\n            Laat 30 min. gaar worden in een matig warme oven. (180°).",
      "ingredients": [
        "4 aubergines",
        "2 tomaten"
      ]
    }
  ],
  "projects": [
    {
      "name": "Maken najaarsbloemstukje met hebe, lavendel, chrysanten en takjes van de witte abeel",
      "steps": "Snijd een bol steekschuim in 2 delen (u heeft maar 1 deel nodig)\nDe halve nat maken en volledig vol steken met toefjes lavendel\nTakjes hebe en chrysanten tussen de lavendel steken.\nFijne korte takjes van de witte abeel op draad zetten, zorg ervoor dat de draad stevig genoeg is.\nWerk af door enkele takjes willekeurig in het bloemstukje te steken.",
      "requirements": [
        "Halve bol steekschuim",
        "Platte schaal"
      ]
    }
  ]
}
```

Response : plant id that is being updated
