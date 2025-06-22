<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        
        DB::table('countries')->truncate();


Country::create([
    'name' => 'Belgium',
    'intro' => 'Discover Belgium, a charming country where rich history meets breathtaking landscapes and world-class cuisine. Whether youre exploring vibrant cities or enjoying serene nature Belgium offers unforgettable experiences for every traveler.',
    'description' => 'Belgium is a wonderful destination for travelers seeking a mix of rich history, breathtaking nature, and delightful culinary experiences. This versatile country has something for everyone, whether you are a city enthusiast, art lover, foodie, or nature admirer.',
    'activations' =>'
    Take a canal boat tour in Bruges
    Experience the romantic atmosphere of Bruges as you sail through its picturesque canals and enjoy stunning views of medieval buildings.

    Visit the Atomium in Brussels
    This iconic monument offers a unique view of the city and interactive exhibitions on science, design, and architecture.

    Hike through the Ardennes
    Explore the beautiful nature of the Ardennes with activities like hiking, kayaking, or visiting charming villages such as Durbuy.

    Attend the Last Post ceremony in Ypres
    A moving daily ceremony at the Menin Gate in remembrance of soldiers who fell during World War I.

    Taste Belgian specialties
    Savor chocolate, Belgian waffles, Trappist beer, and fries at the many cozy restaurants and cafés throughout the country.
        ',
    'days' => '5 dagen ',
    'img' => 'country/Belgium.jpg',
]);

Country::create([
    'name' => 'Netherlands',
    'intro' =>'The Netherlands is a country known for its beautiful canals, tulip fields, and iconic windmills. With its vibrant cities, rich history, and bike-friendly landscape, the Netherlands offers something unique for every traveler.',
    'description' => 'Nederland is een land dat wereldwijd bekendstaat om zijn schilderachtige grachten, uitgestrekte bloemenvelden en iconische windmolens. Het land heeft een rijke geschiedenis die teruggaat tot de Gouden Eeuw en staat bekend om zijn moderne steden zoals Amsterdam, Rotterdam en Utrecht, die allemaal een unieke mix van cultuur, kunst en architectuur bieden. Nederland is ook beroemd om zijn fietsvriendelijke landschap, waar je gemakkelijk het platteland en de prachtige kust kunt verkennen. Daarnaast is het land een ware topbestemming voor kunstliefhebbers, met wereldberoemde musea zoals het Van Gogh Museum en het Rijksmuseum.
     The Netherlands is a country renowned for its picturesque canals, expansive flower fields, and iconic windmills. The country boasts a rich history dating back to the Golden Age and is known for its modern cities like Amsterdam, Rotterdam, and Utrecht, each offering a unique blend of culture, art, and architecture. The Netherlands is also famous for its bike-friendly landscape, making it easy to explore the countryside and beautiful coastlines. Additionally, the country is a top destination for art lovers, with world-famous museums like the Van Gogh Museum and the Rijksmuseum.',
    'activations' =>'
    Cycle through the tulip fields
    Explore the iconic tulip fields in the Bollenstreek, especially in spring when the flowers are in full bloom.

    Visit the canals of Amsterdam
    Take a boat tour through Amsterdam’s famous canals and discover the city from a unique perspective, passing historic houses and bridges.

    Explore Zaanse Schans
    Visit this open-air museum near Amsterdam and experience traditional windmills, wooden houses, and artisan workshops.

    Hike in the Hoge Veluwe
    Explore the Hoge Veluwe National Park with its vast forests, heathlands, and the famous Kröller-Müller Museum, home to an impressive art collection.

    Visit the markets in Rotterdam
    Explore the markets of Rotterdam, such as the Markthal, and enjoy the diverse food and shopping options in this modern, architectural city.
    ',
    'days' => '10 dagen ',
    'img' => 'country/Netherlands.jpg',

]);
Country::create([
    'name' => 'France',
    'intro' =>'France is a country of romance, art, and gastronomy, with a rich history and unparalleled diversity in landscapes. From the iconic Eiffel Tower in Paris to the stunning vineyards of Bordeaux and the sunny beaches of the French Riviera, France offers an unforgettable experience for every traveler.',
    'description' =>'France is one of the most beloved travel destinations in the world, renowned for its rich culture, refined gastronomy, and breathtaking landscapes. The country has a long history dating back to Roman times and offers impressive historical landmarks, such as the castles of the Loire Valley and the medieval city of Carcassonne. Paris, the capital, is often seen as the city of love and art, featuring world-famous museums like the Louvre and iconic monuments such as the Eiffel Tower. Beyond the cities, visitors can explore Provence with its fragrant lavender fields, the French Alps for winter sports, and the expansive vineyards of Bordeaux and Burgundy. France is also a paradise for food lovers, thanks to its wine, cheeses, and gourmet dishes that are celebrated worldwide.',
    'activations' =>'
     Visit the Eiffel Tower in Paris
    Visit the iconic Eiffel Tower and enjoy panoramic views of the city from the top.

   
    Walk through the fragrant lavender fields of Provence, especially in the summer when the flowers are in full bloom.

    Cycle through the Vineyards of Bordeaux
    Take a bike tour through the famous vineyards of Bordeaux and taste the delicious French wines.

    Visit the Château de Versailles
    Explore the majestic Palace of Versailles and its expansive gardens, one of the finest examples of French royal architecture.

    Enjoy the French Riviera
    Relax on the sunny beaches of the French Riviera, with iconic cities like Nice, Cannes, and Monaco.
        ',
        'days' => '10 dagen ',
        'img' => 'country/France.webp',
]);
Country::create([
    'name' => 'Germany',
    'intro' =>'Germany is a country of rich history, innovative technology, and diverse landscapes. From vibrant cities like Berlin and Munich to the picturesque castles along the Rhine and the fairytale forests of the Black Forest, Germany offers a perfect blend of culture, nature, and modern development.',
    'description' =>'Germany is a fascinating country known for its rich history, diverse culture, and stunning architecture. The country is home to historical landmarks such as the Berlin Wall, Cologne Cathedral, and the medieval Neuschwanstein Castle, often regarded as a fairytale symbol of Germany. Germany is also a hub of art and science, boasting world-renowned universities, museums, and music festivals. For nature enthusiasts, Germany offers a diverse landscape, from the vast forests of the Black Forest to the romantic vineyards of the Moselle Valley and the majestic peaks of the Alps. Additionally, German cuisine is beloved worldwide, with classics like bratwurst, pretzels, and a variety of beers, celebrated annually during the famous Oktoberfest.',
    'activations' => '
    Visit the Brandenburg Gate
    Explore the iconic Brandenburg Gate in Berlin a symbol of Germanys history and unity.

    Tour the Neuschwanstein Castle
    Visit the fairytale-like Neuschwanstein Castle in Bavaria surrounded by breathtaking landscapes.

    Discover the Black Forest
    Hike through the Black Forest region known for its scenic beauty charming villages and dense woods.

    Explore the Colonge Cathedral
    Admire the stunning Gothic architecture of the Cologne Cathedral one of Germanys most famous landmarks.

    Visit the Berlin Wall Memorial
    Learn about Germanys history at the Berlin Wall Memorial and see remnants of the wall that divided the city during the Cold War.
    ',
    'days' => '20 dagen ',
    'img' => 'country/Germany.jpeg',
]);
Country::create([
    'name' => 'Luxembourg',
    'intro' =>'Luxembourg, a small yet charming country in the heart of Europe, is renowned for its fairytale castles, stunning nature, and rich history. Despite its modest size, Luxembourg offers a unique blend of modern cities, historic landmarks, and serene landscapes.',
    'description' =>'Luxembourg is a small yet versatile country known for its rich history, impressive architecture, and stunning natural surroundings. Situated at the heart of Europe, it serves as a crossroads of cultures, reflected in its official languages: Luxembourgish, French, and German. The capital, Luxembourg City, is a UNESCO World Heritage site thanks to its remarkable fortifications and charming old town. Beyond the city, Luxembourg offers picturesque villages, rolling hills, and vineyards along the Moselle River. The country is also a top destination for hikers and nature enthusiasts, with its expansive forests and trails in the Mullerthal region, also known as "Little Switzerland." Luxembourg blends a modern financial hub with a serene and historic atmosphere, making it a truly unique destination.',
    'activations' => '
    Visit the Castles of Luxembourg
    Explore the impressive castles of Luxembourg such as Vianden Castle and Bourglinster Castle which reflect the countrys rich historical heritage.

    Walk through Luxembourg City
    Discover the capital city of Luxembourg Luxembourg City and stroll through its picturesque old town with its fortifications charming streets and breathtaking views of the city.

    Explore the Mullerthal Region
    Take a hike through the Mullerthal Region also known as "Little Switzerland" and enjoy the stunning rock formations and scenic landscapes.

    Visit the European Court of Justice
    Explore the European Court of Justice in Luxembourg City the highest judicial body of the European Union and learn more about the workings of the EU.

    Enjoy local wines in the Moselle Valley
    Taste local wines in the Moselle Valley famous for its wine production and take a wine walk along the vineyards.
    ',
    'days' => '25 dagen ',
    'img' => 'country/Luxembourg.jpeg',

]);
}
    
}
