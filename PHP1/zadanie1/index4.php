<!doctype html>
<html lang="en">
<?php
$title = 'Всё про чай';
$header1 = 'Всё о чае и чайной культуре';
$block1_p1 = 'Началась история чая в Древнем Китае более 5 тысячелетий назад. В то время государством правил просвещенный и
мудрый правитель Шэнь-Нун, который уже в то время понимал, что от сырой воды можно заразиться болезнями, и потому император 
приказывал кипятить воду, прежде чем пить ее.Периодически император посещал отдаленные регионы государства, и ему вместе 
со свитой приходилось останавливаться на отдых в пути. Во время одного из таких привалов слуги, как всегда, поставили воду 
на огонь, чтобы вскипятить ее и сделать пригодной для питья.';
$block1_p2 = 'Пока вода кипятилась, в нее случайно упали листья с расположенного рядом кустарника, и вода приобрела коричневый
оттенок. Этот кустарник был чайным кустом, но еще никто не знал, что благодаря завариванию этих листком можно получить 
вкусный и полезный напиток.';
$block1_p3 = 'Коричневую воду могли бы вылить, но императору стало интересно, и он попробовал немного получившегося напитка,
впоследствии назвав его приятным и освежающим. После этого чай стали заваривать целенаправленно, и он становился все популярнее.';
$block1_p4 = 'Ученые мифологи утверждают, что эта легенда вполне могла бы быть реальностью, однако подтвердить ее пока не
удалось, к сожалению.';
$src_img1 = 'https://prochaj.ru/wp-content/uploads/2013/03/tea.jpg';
$width_img1 = 800;
$height_img1 = 306;
$header2 = 'Растущая популярность чая в Китае';
$block2_p1 = 'С того момента, как император Шэнь-Нун  положительно оценил вкусовые качества чая, этот напиток стал активно
распространяться по стране, и количество его искренних поклонников только росло. Чуть позже китайцы заметили, что чай – 
это не только освежающий, вкусный и ароматный напиток, но еще и очень полезный, поэтому начали использовать его и в 
лекарственных целях.';
$block2_p2 = 'Лу Юй, сирота, который воспитывался буддийскими монахами, написал первую книгу о чае в 800 году н.э. Называлась
она «Ча Цзин», что можно перевести как «Трактат о чае».';
$block2_p3 = 'Начинающему писателю Лу Юй покровительствовал сам император, поэтому работал Лу над книгой тщательно, не отвлекаясь
на будничные проблемы. Он описал и систематизировал в своей книги известные на тот момент методы выращивания и приготовления 
чая, описал именно ту форму чайной церемонии, которую впоследствии миссионеры дзен-буддизма презентовали в Японии. Да и 
сама книга отражала философию дзен-буддизма, которая глубоко проникла в сознание Лу, еще когда он был ребенком и 
воспитывался монахами.';
$block2_p4 = 'Как уже упоминалось выше, китайцы заметили немало полезных свойств чая, и использовали его в лекарственных целях.
Собственно, именно в таком качестве чай и применялся до 5 века н.э. чаще всего.';
$block2_p5 = 'Однако среди богатых людей высшего сословия чай стал неким признаком хорошего вкуса и достатка: его было принято
дарить на праздники (это считалось очень ценным подарком), а также стало можно устраивать чайные церемонии во время 
домашних обедов, на приемах и встречах. Китайская чайная церемония развивалась все активнее, и скоро о ней узнали в Японии.';
$header3 = 'Распространение чая в Японии';
$block3_p1 = 'Япония за появление в ней чая должна по праву благодарить буддийского монаха Эйсая. Именно он привез сюда 
семена чайного дерева, так как заметил, насколько велико в Китае значения чая, и как этот напиток способствует укреплению 
религии.';
$block3_p2 = 'Сегодня имя Эйсая в Японии ассоциируется с «отцом чая», а сам чай – с дзен-буддизмом. Чай быстро стал популярным
в Японии, так как его распространении спонсировал сам император. Этот напиток сначала пили при дворе, потом в монастырях, 
а потом чай проник во все сферы жизни и слои общества.';
$src_img2 = 'https://prochaj.ru/wp-content/uploads/2013/03/tea-ceremony.jpg';
$alt_img2 = 'Китайские чайные церемонии';
$width_img2 = 299;
$height_img2 = 228;
?>

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>


<div>
    <h1><?= $header1; ?></h1>
    <p><?= $block1_p1 . '<br>' . $block1_p2 . '<br>' . $block1_p3 . '<br>' . $block1_p4; ?></p>
    <h2><?= $header2; ?></h2>
    <p><?= $block2_p1; ?></p>
    <p style="text-align:center;"><img src="<?= $src_img1; ?>" width="<?= $width_img1; ?>"
                                       height="<?= $height_img1; ?>"></p>
    <p><?= $block2_p2 . '<br>' . $block2_p3 . '<br>' . $block2_p4 . '<br>' . $block2_p5; ?></p>
    <h2><?= $header3; ?></h2>
    <p><?= $block3_p1; ?></p>
    <p><img src="<?= $src_img2; ?>" alt="<?= $alt_img2; ?>" width="<?= $width_img2; ?>" height="<?= $height_img2; ?>">
    </p>
    <p><?= $block3_p2; ?></p>
</div>
</body>
</html>