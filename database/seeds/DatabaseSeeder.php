<?php

use App\FlowerArrangements;
use App\FlowerRequirements;
use App\Plant;
use App\PlantCategory;
use App\PlantCultivars;
use App\PlantCultivarsExamples;
use App\PlantHarvest;
use App\PlantHistory;
use App\PlantMaintenance;
use App\PlantMedical;
use App\PlantMedicalContent;
use App\PlantRecipe;
use App\PlantRecipeIngredients;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
            ['name' => 'admin', 'email' => 'admin@cvo.be', 'password' => Hash::make('secret')],
            ['name' => 'student', 'email' => 'student@cvo.be', 'password' => Hash::make('secret')]
        );

        foreach ($users as $user) {
            User::create($user);
        }

        $plant = Plant::create(array());

        $recipe = PlantRecipe::create(array(
            'name' => "Met lavendel geparfumeerde aubergines",
            'steps' => "Snij de aubergines door en blancheer ze gedurende 5 min. in gezouten water, laat uitlekken.
            Haal het vruchtvlees er uit zonder de schil te beschadigen.Hak het vruchtvlees samen met dat van de tomaten
            fijn en voeg er het gehakt, de eieren en de zachte kaas bij. Hak de sjalotten , de knoflookteentjes en de
            lavendel fijn en meng de helft van dit alles onder het vruchtvlees. Kruid met peper en zout.  Vul de
            aubergines en bestrooi met de overblijvende fijngehakte sjalot, knoflook en lavendel.
            Laat 30 min. gaar worden in een matig warme oven. (180°).",
            'plant_id' => $plant->id
        ));

        $ingredient1 = PlantRecipeIngredients::create(array(
            'ingredientName' => "4 aubergines",
            'plant_recipe_id' => $recipe->id
        ));

        $ingredient2 = PlantRecipeIngredients::create(array(
            'ingredientName' => "2 tomaten",
            'plant_recipe_id' => $recipe->id
        ));

        $category = PlantCategory::create(array(
            'categoryname' => "habitus/habitat",
            'species' => "vaste plant",
            'usage' => "vakbeplanting",
            'habitat' => "open plaats, heide, steenachtige bodem",
            'height' => "20 - 40 Cm",
            'flower_color' => "paars, blauw",
            'bloomTime' => "Juni - Augustus",
            'flowers' => "langgesteelde, sterkgeurende bloemaren. Eetbaar",
            'leafColor' => "grijs",
            'leaf' => "smal, harig, geurend",
            'leafDetail' => "bladhoudend",
            'sunlight' => "zon",
            'humidity' => "droog, normaal",
            'ph' => "kalkrijk,neutraal",
            'evergreen' => "matig",
            'planDensity' => "7-10 Per vierkante meter",
            'plant_id' => $plant->id
        ));

        $plantCultivar = PlantCultivars::create(array(
            'plantCultivarsInfo' => "Cultivars ontstaan na kruising, selectie en vermeerdering. Er moet een onderscheid
             gemaakt worden tussen de intraspecifieke cultivars ontstaan door kruising van verschillende variëteiten of
             lijnen binnen eenzelfde soort (in dit geval meestal Lavandula angustifolia) zoals: Lavandula angustifolia
             'Arctic Snow' ('Alba') (bloemen wit, hoogte 40 cm) Lavandula angustifolia 'Blue Mountain White' (bloemen
             wit hoogte 50-60 cm bloei juni-september) en de interspecifieke hybridencultivars ontstaan door kruising
              tussen verschillende soorten zoals Lavandula × intermedia 'Alba', een eveneens witbloemige cultivar in het
               hybridenras lavandin ( Lavandula × intermedia) ontstaan door kruising van Lavandula angustifolia en
               Lavandula latifolia. Er wordt voor de sierteelt meestal geselecteerd op hoogte, vorm, densiteit,
               kouderesistentie (wintervastheid), geur, bladkleur en bloemkleur. De bloemen gaan van wit over roze naar
               vele tinten tussen helderblauw en donkerviolet. De meeste cultivars worden vegetatief vermeerderd door
               stekken. Het zijn klonen.
               Lavandula angustifolia 'Lady' (bloemen donker violet in korte bolvormige aren, zeer aromatisch) is hierop een
               uitzondering: het is een zaadvast ras dat kan worden vermeerderd door uitzaaiing.
               Andere voorbeelden van cultivars van Lavandula angustifolia, buiten de reeds geciteerde, zijn:",
            'plant_id' => $plant->id
        ));

        $cultivarExample = PlantCultivarsExamples::create(array(
            'example' => "Lavandula angustifolia little lady = 'Batlad' (bloemen violetblauw)",
            'plant_cultivars_id' => $plantCultivar->id
        ));

        $plantHistory = PlantHistory::create(array(
            'plantHistory' => "Volgens een zeer oude Europese overlevering groeide de eerste lavendelstruik in de hof van
             Eden. Adam en Eva namen een twijgje van de welriekende plant mee, toen ze uit het Paradijs werden verdreven.
Lavendel wordt al duizenden jaren gebruikt. In het oude Egypte werden windsels voor mummies gedrenkt in een teerachtige
substantie die lavendelolie bevatte. Gebalsemde lichamen werden hierin gewikkeld en vervolgens in de zon gelegd zodat
de wikkels droogden en opstijfden.
In het graf van de farao Toetanchamon zou ook een kruik met deze substantie gevonden zijn. Het gaat dan dus niet, zoals
in sommige boeken verkeerdelijk voorgesteld, om een kruik lavendelolie zoals wij die nu kennen: het principe van de
destillatie werd immers pas veel later ontwikkeld (ten tijde van Abu Ali Ibn Sina (930-1037 C.E.), beter bekend als
Avicenna, aan wie al dan niet terecht de uitvinding van het destilleren wordt toegeschreven).
Zowel in het oude Griekenland als in de Romeinse gebieden werd lavendel gebruikt als badkruid, en dat zowel omwille van
zijn geur als om de therapeutische waarde.  De Griekse schrijver Padanius Dioscorides vermeldde het medicinaal gebruik
van lavendel in de eerste eeuw na Christus. De Romeinse troepen hadden ook zeker lavendel bij zich voor gewonde en
uitgeputte soldaten, en waren de eersten die  het voor oogst en verwerking plantten. Hierdoor verspreidden de Romeinen
het gebruik van lavendel over hun hele territorium.
In de Middeleeuwen werd Lavendel als het kruid van de liefde beschouwd. Ook werd het als strooikruid gebruikt omwille
van zijn schone, frisse geur en zijn insectenwerende eigenschappen.",
            'plant_id' => $plant->id
        ));

        $maintenance = PlantMaintenance::create(array(
            'maintenance' => "\"Hoe moet je lavendel snoeien?\"
Het is erg belangrijk dat je er vroeg mee begint. Jonge planten snoei je eventueel een of twee keer extra het eerste jaar. Wij toppen de stekken en jonge planten op onze kwekerij regelmatig. Hierdoor worden ze mooi vol en bossig. Dat komt doordat de vorming van nieuwe scheuten onderin de plant wordt gestimuleerd. Als je niet knipt blijft de plant van binnen vochtig en sterven er juist scheutjes af. Uiteindelijk wordt je plant dan kaal van binnen en kun je nooit meer diep snoeien.
De onderstaande snoeimethode is vooral van toepassing op een van de meest geschikte lavendel soorten voor ons klimaat; Lavandula angustifolia of echte lavendel. Deze verdraagt ingrijpende snoei het beste.
Blauwe lavendel en lavendel blauw bestaan niet, dat blauw heet officieel violet. Echte lavendel, of Lavandula angustifolia bloeit meestal zeer rijk en bestaat in heel veel verschillenden kleuren; wit, roze en helder tot zeer donker violet met al hun varianten zijn mogelijk. Er zijn cultivars met zeer grijs blad en er zijn dwergvormen en reuzen. Vanwege deze grote diversiteit menen wij zo'n 100 soorten lavendel te moeten vermeerderen.
Alle lavendel soorten zijn bladhoudende heesters. Ze slaan weinig energie op in hun wortels en moeten daarom altijd wat blad hebben om verder te kunnen groeien.
",
            'plant_id' => $plant->id
        ));

        $harvest = PlantHarvest::create(array(
            'plantHarvest' => "Lavendel vraagt een goed doorlatende, neutrale tot lichtalkalische bodem (pH 6.9 tot 7.3) en een beschutte, zonnige
standplaats (een plekje tegen een zuidmuur is vaak een goed keuze).
Als je op klei tuiniert kan het nodig zijn een hoeveelheid zand en kalk onder te werken.
Plant de struikjes niet te dicht bij elkaar (exacte afstanden verschillen naargelang van de variëteit, en dus van de uiteindelijke grootte van het struikje) zodat de lucht er voldoende tussen kan circuleren en de plant snel opdroogt als ze door dauw of regen nat is geworden. Lavendel is immers een plant van een droog, warm klimaat, en zal in vochtige omstandigheden gevoelig zijn voor schimmelaantasting. De planten mogen echter ook weer niet blootgesteld worden aan te felle wind, waardoor de stengels zouden breken.",
            'plant_id' => $plant->id
        ));

        $medical = PlantMedical::create(array(
            'properties' => "Lavendel is zenuwkalmerend, verzachtend, opbeurend en balancerend, en tevens ontsmettend, bacteriedodend en pijnstillend. Bovendien heeft het kruid slijmoplossende en bloeddrukverlagende eigenschappen, is het krampstillend en anti-nauseaus.
Ook is het een tonicum en zou het reuma tegengaan. Lavendel is tevens transpiratiebevorderend en koortsverlagend. Tenslotte is het kruid bloeddruk- verlagend, voorkomt maagkramp en misselijkheid en spijsverteringsstoornissen, en is een cholagoog.",
            'usage' => "Een lijst met indicaties voor het gebruik van lavendel is erg uitgebreid, ter illustratie een (nog steeds beperkt)
overzichtje: abcessen, acne, allergieÃ«n, aambeien, blauwe plekken, brandwonden, dermatitis, eczeem, hoofdroos, insectensteken, luizen, oorpijn, ontstekingen, psoriasis, puistjes, ringworm, schurft, steenpuisten, wonden, zonnebrand, zweren, zwemmerseczeem, lumbago, spierpijn, reuma, verstuikingen, verrekkingen, astma, bronchitis, keelinfecties, kinkhoest, laryngitis, slechte adem, slijmvliesontsteking, buikkramp, braakneigingen, dyspepsie, flatulentie, kolieken, misselijkheid, blaasontsteking, dysmenorroe, witte vloed,
depressiviteit, hoofdpijn, hypertensie, migraine, nervositeit, ischias, shock, slapeloosheid, stress, vertigo, griep, verkoudheid, winterhanden, vermoeide voeten en wintervoeten...
Zowel een aftreksel, de tinctuur en de etherische olie van lavendel worden gebruikt voor hun zowel lichamelijk als
psychisch ontspannende effect. Het is dan ook een goed middel bij angst en zenuwachtigheid en de fysieke componenten daarvan, zoals nerveuze hoofdpijn, hartkloppingen en slapeloosheid. Door de balancerende eigenschappen van de olie montert hij op, onderdrukt hij depressieve gevoelens en herstelt de innerlijke harmonie. Inderdaad is er naast de rustgevende, ook sprake van tonische eigenschappen, en herstelt het kruid de vitaliteit, vooral indien de adynamie
het gevolg is van nerveuze uitputting.
Het ontspannende effect van lavendel vindt ook toepassing bij spijsverteringsproblemen, bijvoorbeeld bij krampen en kolieken die het gevolg zijn van spanning en angst. Ook bij een opgeblazen gevoel, winderigheid, misselijkheid en indigestie kan lavendel worden toegepast, en het kan bovendien de eetlust bevorderen. Bij al deze gebruiken
geldt dat de werking het meest uitgesproken is als stress of angst aan de basis van de problemen liggen.
Als infusie, geïnhaleerde olie of smeersel is lavendel ook bruikbaar in de behandeling van verkoudheid, hoest, astma, bronchitis, longontsteking, griep, keelontsteking en slijmvliesontstekingen. De thee kan ook worden gedronken bij maag- en darminfecties die braken of diarree veroorzaken.
De transpiratiebevorderende en koortsverlagende
eigenschappen komen het best tot hun recht indien als infusie (kruidenthee) gedronken.
Bij uitwendig gebruik is lavendel een effectief ontsmettingsmiddel bij snij- en schaafwonden en zweren. Wanneer de olie in onverdunde vorm bij brandwonden wordt aangebracht, stimuleert het de genezing van weefsels en reduceert het de vorming van littekens. Bovendien komen de pijnstillende eigenschappen hier ook goed van pas. In verdunde vorm is het een goede remedie tegen eczeem, acne en ontstoken spataders.",
            'warnings' => "Omdat Lavendel een licht menstruatiebevorderend middel is, dat de maandelijkse bloedingen kan oproepen of stimuleren, moet lavendelolie gedurende de eerste drie maanden van de zwangerschap worden vermeden (dit geldt dus niet voor het gedroogde kruid als aftreksel of als strooikruid).
Verder is lavendel veilig voor alle leeftijdsgroepen, maar mensen met hooikoorts of astma kunnen er natuurlijk allergisch voor zijn.",
            'cosmetic' => "Lavendel kan gebruikt worden bij een tere en gevoelige huid omdat het de celgroei bevordert.
Ook wordt het kruid, omwille van zijn antiseptische eigenschappen, gebruikt bij acné.
De olie is ook te gebruiken bij massages tegen spierpijn, vochtretentie en cellulitis.  Bij jeugdpuistjes: 10 druppels Lavendel en 5 druppels Kamfer in een glas gekookt water doen en hiermee 2 keer per dag de huid afspoelen of deppen
Bij acne of rosacea druppels Lavendel, 2 druppels Citroen, 4 druppels Helicryse (strobloem), 2 druppels Petitgrain en 1 druppel Rozemarijn in 2 eetlepels St. Janskruid olie mengen, met dit mengsel dagelijks licht masseren.",
            'plant_id' => $plant->id
        ));

        $medicalContent1 = PlantMedicalContent::create(array(
            'content' => "Etherische olie",
            'plant_medical_id' => $medical->id
        ));

        $medicalContent2 = PlantMedicalContent::create(array(
            'content' => "Looizuren",
            'plant_medical_id' => $medical->id
        ));

        $flowerArrangement = FlowerArrangements::create(array(
            'title' => "Maken najaarsbloemstukje met hebe, lavendel, chrysanten en takjes van de witte abeel",
            'steps' => "Snijd een bol steekschuim in 2 delen (u heeft maar 1 deel nodig)
De halve nat maken en volledig vol steken met toefjes lavendel
Takjes hebe en chrysanten tussen de lavendel steken.
Fijne korte takjes van de witte abeel op draad zetten, zorg ervoor dat de draad stevig genoeg is.
Werk af door enkele takjes willekeurig in het bloemstukje te steken.",
            'plant_id' => $plant->id
        ));

        $flowerMaterial1 = FlowerRequirements::create(array(
            'requirement' => "Halve bol steekschuim",
            'flower_arrangements_id' => $flowerArrangement->id
        ));

        $flowerMaterial2 = FlowerRequirements::create(array(
            'requirement' => "Platte schaal",
            'flower_arrangements_id' => $flowerArrangement->id
        ));

        Model::reguard();
    }
}
