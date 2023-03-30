<?php

include __DIR__ . "/film.php";

$film1 = new Film("Alien");
$film1->generi = ['Sci-fi', 'Horror'];
$film1->durata = "1h57m";
$film1->anno_di_uscita = "1979";
$film1->regista = "Ridley Scott";

$film2 = new Film("Interstellar");
$film2->generi = ['Sci-fi', 'Drama'];
$film2->durata = "2h49m";
$film2->anno_di_uscita = "2014";
$film2->regista = "Christopher Nolan";

$film3 = new Film("Shutter Island");
$film3->generi = ['Mystery'];
$film3->durata = "2h18m";
$film3->anno_di_uscita = "2010";
$film3->regista = "Martin Scorsese";

$film4 = new Film("The Dark Knight");
$film4->generi = ['Action', 'Adventure'];
$film4->durata = "2h32m";
$film4->anno_di_uscita = "2008";
$film4->regista = "Christopher Nolan";

$film5 = new Film("The Lord of the Rings");
$film5->generi = ['Fantasy', 'Adventure'];
$film5->durata = "2h58m";
$film5->anno_di_uscita = "2001";
$film5->regista = "Peter Jackson";

$film6 = new Film("Back to the Future");
$film6->generi = ['Sci-fi', 'Comedy'];
$film6->durata = "1h56m";
$film6->anno_di_uscita = "1985";
$film6->regista = "Robert Zemeckis";

// var_dump($film1, $film2)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>OOP</title>
</head>

<body>
    <div class="container mx-auto">

        <h1 class="text-4xl py-5 text-center font-mono text-emerald-500">BEST MOVIES</h1>

        <div class="flex gap-4 justify-center flex-wrap">

            <div class="flex-none max-w-sm rounded overflow-hidden shadow-lg">
                <img style="height: 575px; width: 350px;" class="w-full" src="https://i.etsystatic.com/22034154/r/il/df7298/3424167639/il_570xN.3424167639_kjci.jpg" alt="Alien Poster">

                <div class="px-4 py-4">
                    <div class="font-bold text-xl mb-3"><?php echo $film1->getTitlo() ?></div>
                    <div class="text-md mb-2">Informazioni: <?php echo $film1->getInfos() ?></div>
                    <div>
                        <h5 class="pb-2">Generi:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film1->generi[0] ?></span>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film1->generi[1] ?></span>
                    </div>
                </div>

                <div class="px-4 pb-4">
                    <div>
                        <h5 class="pb-2">Regista:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film1->regista ?></span>
                    </div>
                </div>
            </div>

            <div class="flex-none max-w-sm rounded overflow-hidden shadow-lg">
                <img style="height: 575px; width: 350px;" class="w-full" src="https://www.themoviedb.org/t/p/original/h7zAAbQ0rtEteSEQf7HklyizBg5.jpg" alt="Interstellar Poster">

                <div class="px-4 py-4">
                    <div class="font-bold text-xl mb-3"><?php echo $film2->getTitlo() ?></div>
                    <div class="text-md mb-2">Informazioni: <?php echo $film2->getInfos() ?></div>
                    <div>
                        <h5 class="pb-2">Generi:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film2->generi[0] ?></span>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film2->generi[1] ?></span>
                    </div>
                </div>

                <div class="px-4 pb-4">
                    <div>
                        <h5 class="pb-2">Regista:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film2->regista ?></span>
                    </div>
                </div>
            </div>

            <div class="flex-none max-w-sm rounded overflow-hidden shadow-lg">
                <img style="height: 575px; width: 350px;" class="w-full" src="https://i.etsystatic.com/27725708/r/il/153e81/2891495262/il_fullxfull.2891495262_r94g.jpg" alt="Shutter Island Poster">

                <div class="px-4 py-4">
                    <div class="font-bold text-xl mb-3"><?php echo $film3->getTitlo() ?></div>
                    <div class="text-md mb-2">Informazioni: <?php echo $film3->getInfos() ?></div>
                    <div>
                        <h5 class="pb-2">Generi:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film3->generi[0] ?></span>
                    </div>
                </div>

                <div class="px-4 pb-4">
                    <div>
                        <h5 class="pb-2">Regista:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film3->regista ?></span>
                    </div>
                </div>
            </div>

            <div class="flex-none max-w-sm rounded overflow-hidden shadow-lg">
                <img style="height: 575px; width: 350px;" class="w-full" src="https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/81rGCm0PyHL._AC_SL1500_.jpg" alt="Shutter Island Poster">

                <div class="px-4 py-4">
                    <div class="font-bold text-xl mb-3"><?php echo $film4->getTitlo() ?></div>
                    <div class="text-md mb-2">Informazioni: <?php echo $film4->getInfos() ?></div>
                    <div>
                        <h5 class="pb-2">Generi:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film4->generi[0] ?></span>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film4->generi[1] ?></span>
                    </div>
                </div>

                <div class="px-4 pb-4">
                    <div>
                        <h5 class="pb-2">Regista:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film4->regista ?></span>
                    </div>
                </div>
            </div>

            <div class="flex-none max-w-sm rounded overflow-hidden shadow-lg">
                <img style="height: 575px; width: 350px;" class="w-full" src="https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_FMjpg_UX1000_.jpg" alt="Shutter Island Poster">

                <div class="px-4 py-4">
                    <div class="font-bold text-xl mb-3"><?php echo $film5->getTitlo() ?></div>
                    <div class="text-md mb-2">Informazioni: <?php echo $film5->getInfos() ?></div>
                    <div>
                        <h5 class="pb-2">Generi:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film5->generi[0] ?></span>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film5->generi[1] ?></span>
                    </div>
                </div>

                <div class="px-4 pb-4">
                    <div>
                        <h5 class="pb-2">Regista:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film5->regista ?></span>
                    </div>
                </div>

            </div>

            <div class="flex-none max-w-sm rounded overflow-hidden shadow-lg">
                <img style="height: 575px; width: 350px;" class="w-full" src="https://m.media-amazon.com/images/M/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg" alt="Shutter Island Poster">

                <div class="px-4 py-4">
                    <div class="font-bold text-xl mb-3"><?php echo $film6->getTitlo() ?></div>
                    <div class="text-md mb-2">Informazioni: <?php echo $film6->getInfos() ?></div>
                    <div>
                        <h5 class="pb-2">Generi:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film6->generi[0] ?></span>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film6->generi[1] ?></span>
                    </div>
                </div>

                <div class="px-4 pb-4">
                    <div>
                        <h5 class="pb-2">Regista:</h5>
                        <span class="inline-block bg-gray-200 rounded-full px-2 py-1 text-sm font-semibold text-gray-700 mb-2"><?php echo $film6->regista ?></span>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>