<?php

date_default_timezone_set('Europe/Paris');
session_start();
$json_itemList = <<<'EOT'
[
    {
        "type": "planet",
        "name": "Kamino",
        "environment": "Kamino est une planète océanique balayée par des orages violents. Seules quelques cités, abritant les nombreux Kaminoans, contrastent avec l'aspect hostile de la planète. C'est depuis Tipoca, la capitale de Kamino, que le Premier ministre Kaminoan Lama Su gouverne son peuple.\nKamino n'a jamais réussi à surmonter l'épreuve qu'infligea la fonte des glaces intérieures. Ses océans ont rapidement augmenté, recouvrant les continents, forçant les Kaminoans à s'adapter. Les ingénieurs et techniciens construisirent alors des cités montées sur pilotis, dans le même style que leur ancienne colonies terrestres, pour pouvoir résister aux orages incessants et aux tempêtes destructrices.",
        "text1": "Trente-deux ans avant la bataille de Yavin, le maitre jedi Sifo-Dyas passa commande d'une armée de trois millions de soldats clones pour la République galactique auprès des Kaminoans ou plus précisément de Lama Su, Premier ministre de Kamino, et de sa conseillère scientifique Taun We sans en avertir personne. Un processus immense et complexe fut mis en route sous la direction de cette dernière.",
        "text2": "Les Kaminoans étaient considérés comme maîtres dans l'art du clonage, grâce à la qualité de leur production. Leur méthode était lente, mais totalement sûre. Ils avaient mis au point une technique de vieillissement accéléré qui leur permettait de produire un clone adulte, totalement entraîné et prêt à se battre en neuf ans.",
        "text3": "Dark Sidious fut mis au courant et envoya son nouvel apprenti, le comte Dooku, tuer Sifo-Dyas et prendre sa place au prés des Kaminoans. ",
        "capital": "Tipota City",
        "zone": "Wild Space",
        "moons": "Korasca, NC, NC",
        "diameter": "19 270 km",
        "gravity": "Standard",
        "ptype": "Planète océan"
    },
    {
        "type": "weapon",
        "name": "Sabre laser"
    },
    {
        "type": "character",
        "name": "Anakin Skywalker",
        "position": "Jedi",
        "affiliation": "République Galactique puis l'Empire",
        "biography": "Découvert comme esclave de Watto sur Tatooin par Qui Gon Gin. Il deviendra son apprenti. Malheureusement, Qui Gon Gin se fait bientôt tuer par le seigneur Sith Dark Maul. L’apprenti de Qui Gon, Obi Wan Kenobi, décide alors de prendre Anakin comme Padawan.\nLors de la bataille de Naboo, Anakin s’illustre en détruisant le vaisseau amiral de la Fédération du Commerce. Il rencontre alors Padmé Amidala.\n10 ans plus tard, Obi Wan et Anakin ont pour mission de protéger Amidala, désormais sénatrice. Anakin lui avoue son amour.\nEnsemble, ils décident d’aller sur Tatooin pour trouver la mère d’Anakin. Hélas, suite à une enquête, Anakin la découvre morte tuée par des hommes des sables.\nPeu aprés, ils décident d’aller sauver Qui Gon Gin sur Géonosis. Ils participent alors à la bataille de Géonosis débutant la Guerre des clones.\nRevenus sur Naboo, Anakin et Padmé décident d’avoir des enfants malgré les règles de l’ordre Jedi. Padmé enfantera plus tard en cachette de Luke et Leia.",
        "planet": "Tatooine",
        "born": "41 av BY",
        "dead": "4 ap BY",
        "weapons": "Sabre laser",
        "vehicles": "Starfighter Jedi\nSpeeder\nChasseur tie x1 avancé\nSuper star destroyer\nExecutor",
        "masters": "Qui Gon Gin\nObi Wan Kenobi",
        "quote": "Général Grievous, je vous imaginais plus grand."
    },
    {
        "type": "character",
        "name": "Dark Vador",
        "position": "Sith",
        "affiliation": "Empire Galactique, Ordre Sith",
        "biography": "Dark Vador (Darth Vader en anglais, \"Vader\" signifiant \"père\" en néérlandais), de son vrai nom Anakin Skywalker, est un Sith, second commandant de l'Empire. Il porte une armure noire qui le maintient en vie depuis qu'il a été brûlé par les laves de Mustafar. ",
        "planet": "Tatooine",
        "born": "42 av BY",
        "dead": "5 ap BY",
        "weapons": "Sabre laser",
        "vehicles": "TIE x1 avancé",
        "masters": "Qui Gon Gin\nObi Wan Kenobi",
        "quote": "Je suis ton père."
    },
    {
        "type": "special",
        "name": "C3PO"
    },
    {
        "type": "character",
        "name": "Mace Windu",
        "position": "Jedi",
        "affiliation": "Ordre Jedi puis République Galactique\n",
        "biography": "Malgré le décès de ses parents alors que le futur Jedi n'était qu'un enfant, Mace Windu surpassa cette épreuve que la vie avait placée en travers de sa route. Alors qu'il errait plus ou moins sur Haruun Kal, il finit par intégrer l'Ordre Jedi. N'ayant plus d'attache, Mace se voua corps et âme dans sa formation et gravit rapidement les échelons de l'Ordre. Connu pour être un grand orateur, Mace Windu était également intraitable au combat. Durant toute sa vie, seuls deux Jedi vivant à son époque le surpassaient : Dooku et Yoda. ",
        "planet": "Haruun Kal",
        "born": "72 av BY",
        "dead": "19 av BY",
        "weapons": "Sabre laser",
        "vehicles": "Intercepteur Jedi Actis Eta-2",
        "masters": "Yoda\n",
        "quote": "Au nom de l'Assemblée Galactique du Sénat de la République, vous êtes en état d'arrestation, mon seigneur."
    },
    {
        "type": "character",
        "name": "Dooku",
        "position": "Sith",
        "affiliation": "Seigneur Sith",
        "biography": "Le Comte Dooku fut formé par les Jedi et plus particulièrement par Maître Yoda. Durant plusieurs années, il se perfectionna au duel de sabres laser pour devenir un formidable combattant. Après sa formation il retourna dans son monde natal pour recevoir son titre de Comte. Il devint ensuite l'apprenti d'un seigneur Sith appelé Dark Sidious et continua ainsi sa formation.",
        "planet": "Serenno",
        "born": "102 av BY",
        "dead": "19 av BY",
        "weapons": "Sabre laser et éclairs",
        "vehicles": "Voilier solaire, speeder géonosien",
        "masters": "YodaDark Sidious\n",
        "quote": "La force est avec nous, Maître Sidious."
    },
    {
        "type": "character",
        "name": "Qui-Gon Jinn",
        "position": "Jedi",
        "affiliation": "Ordre Jedi",
        "biography": "Qui-Gon Jinn était un Chevalier Jedi non-conventionnel, Padawan du Comte Dooku et maître d'Obi-Wan.\nQui-Gon provoquait souvent des divergences au Conseil Jedi. Tout au long de sa vie, il a voulu aider les nécessiteux. Malgré son opposition au conseil, il était considéré par beaucoup de Jedi comme très sage et intelligent.",
        "planet": "Une planète terrestre",
        "born": "92 av BY",
        "dead": "32 av.BY",
        "weapons": "Sabre laser",
        "vehicles": "Intercepteur Jedi Actis Eta-2",
        "masters": "Comte Dooku",
        "quote": "Je peux seulement vous protéger, je ne peux pas mener une guerre pour vous."
    },
    {
        "type": "special",
        "name": "calendar"
    },
    {
        "type": "character",
        "name": "Dark Maul",
        "position": "Sith",
        "affiliation": "Apprenti ordre Sith",
        "biography": "Symbole vivant du retour des Sith sur le devant de la scène en l'an 32 avant la bataille de Yavin, Dark Maul est un combattant accompli totalement immergé dans le côté obscur et les arcanes Sith. Ce guerrier d'élite, élève de Dark Sidious, jouera un grand rôle dans l'accomplissement du plan du Sith et l'extermination de l'Ordre Jedi.",
        "planet": "Dathomir",
        "born": "54 av BY",
        "weapons": "Double sabre-laser",
        "vehicles": "Infiltrateur Sith\nSpeeder Sith",
        "masters": "Dark Sidious",
        "quote": "Bien sûr que j'ai survécu."
    },
    {
        "type": "character",
        "name": "Yoda",
        "position": "Jedi",
        "affiliation": "Maître Ordre Jedi",
        "biography": "Yoda est l'un des maîtres du conseil Jedi. Il représente la sagesse et est l'un des plus grands maîtres Jedi de l'ordre avec Mace Windu. Avec Obi-wan Kenobi, il est l'un des maîtres à avoir formé Luke Skywalker.\nMalgré sa petite taille et son âge avancé, il n'en est pas moins très agile et capable de rivaliser en personne avec les plus grands Siths comme Dark Sidious.",
        "planet": "Coruscant",
        "born": "896 av BY",
        "dead": "4 ap BY",
        "weapons": "Sabre laser, canne",
        "vehicles": "Chu'unthor",
        "quote": "Beaucoup encore il te reste à apprendre."
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    },
    {
        "type": "character"
    }

]
EOT;

$itemList = json_decode($json_itemList,true);

$id_max = floor(((time()-mktime(6,0,0,12,17,2014))/3600)/12);

// $id_max = floor((heure_actuelle-heure_debut_6h)/12)

$filteredItemList = array();
foreach ($itemList as $id => $item)
{
    if ($id <= $id_max)
        $filteredItemList[] = array_merge($item,array('locked' => false, 'id' => $id));
    else
    {
        $filteredItemList[] = array_merge(array_intersect_key($item, array_flip(array('name','type'))),array('locked' => true, 'name' => '?',  'id' => $id));
    }
}

function toURLable($str) { return strtolower(str_replace(' ','',$str)); }

if ($_GET['method'] === 'getItemList')
    echo json_encode($filteredItemList);
else if ($_GET['method'] === 'getItem' && ctype_digit($_GET['id']))
    echo json_encode($filteredItemList[$_GET['id']]);
else if ($_GET['method'] === 'getItemByName')
{
    foreach ($filteredItemList as $fid => $fitem)
    {
        if (!$fitem['locked'] && toURLable($fitem['name']) == toURLable($_GET['name']))
        {
            echo json_encode($fitem);
            return;
        }
    }
}
else if (((int)date("H")>18 || (int)date("H")<6) && $_GET['method'] == 'vote' && (ctype_digit($_GET['id']) && $_GET['id'] == $id_max || $_GET['id'] == $id_max-1))
{
    if (isset($_SESSION['voted_'.$_GET['id']]))
        return;
    $_SESSION['voted_'.$_GET['id']] = true;
    file_put_contents('votes/'.$_GET['id'],1+(int)(@file_get_contents('votes/'.$_GET['id']) || 0));
}