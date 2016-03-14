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
