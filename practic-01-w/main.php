<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="/style.css" >
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <div class="flex-container">
        
        <div class="header">
            <?php include 'logo.inc.php' //проверить ; ?>
            <?php include 'menu.inc.php' ?>
        </div>
        <h1><?php echo $p ?></h1>
        <div class="about_me">
                           
                <div class="data">
                    <div class="myImg">
                        <?php
                         echo '<img src="/img/php.jpg">';   
                        ?>
                    </div>
					
				
                </div>
                <div class="fullname">
                    <p>
                        <?php 
                            echo 'Меня зовут ' .$surname, ' ', $name . '<br><br>';
                            echo 'город', ' ', $sity; 
                        ?> 
                    </p>
                    <p>
                        Мне <?php echo $age; ?> лет
                    </p>
                    <p>Мы научились создавать переменные</p>
                    <p>Изучили простые операции с ними</p>

                </div>
				
        </div>
        <div class="knowledge">
					<?php include 'knowledge.inc.php'; ?>
					<p><?php 
					echo $a, ' ', $b, ' ',$c .'<br><br>';
					$a = 11;
					$b = 22;
					$c = $a + $b;
					echo 'Я теперь знаю чему будет равно \'c:  ', $a,' + ',$b ,' = ', $c;
					?></p>
					<p><?php echo $d;?> </p>
					<!--Добавляем переменную из предидущего блока Проверить код должно быть $-->

				</div>
		<p><button class = "in">Нажми что бы узнать больше</button></p>
        <div class="article">
        <script >
            $( document ).ready(function(){
              $( ".text" ).fadeOut(); // плавно изменяя прозрачность скрываем все элементы <div>
              });
        </script>
			<p class="text">
                Ученик первого класса обратился к своей учительнице, что бы его экстерном перевели в 3 класс.

-Но почему?

Мальчик ответил:

- Я слишком умный для первого класса. Моя сестра учится в третьем, а я умнее её! Значит я тоже должен учиться в третьем!

-Этот вопрос может решить только директор.

И они направились в его кабинет.

Мудрый директор ухмыльнулся, и со всей серьёзность обратился к певокласснику:

- Я проведу тест, и если ты не сможешь ответить на какой-нибудь из вопросов, то вернёшься в первый класс.

- Хорошо

- Сколько будет 3 x 3?

- 9

- 6 x 8?

- 48

Первоклассник отвечал , правильно,на все заданные вопросы которые, по мнению директора, третьеклассник должен знать ответ. Тогда директор обратился к учительнице и сказал:

- Полагаю,что мальчика можно перевести в третий класс.

Но учительница не сдавалась...

- У меня тоже есть вопросы:

-"Что есть у коровы в количестве 4, а у меня только 2?"

Мальчик, после паузы ответил:

- Ноги.

- А что есть такого в твоих брюках, чего нет в моих?

- Карманы.

- Что делает мужчина - стоя, женщина - сидя, а пес - на трех лапах?

Теперь глаза директора на самом деле выпучились широко, но прежде чем он успел, что-то сказатмь, мальчик ответил:

- Подают руку, а собака лапу

- Какое слово в английском языке начинается на F и заканчивается на K ,и означает много жара и волнений?

- Firetruck (Пожарка).

- Какое слово начинается с F и заканчивается на K? Если этого нет, тебе приходится работать руками?

- Fork (Вилка).

- Это есть у всех мужчин, у кого-то это длиннее, у кого-то короче и он

дает это своей жене, после свадьбы?

- Фамилию.

- У какого органа нет костей, но есть мышцы и много вен. Он пульсирует и отвечает за занятия любовью?

- Сердце.

Директор с облегчением выдохнул и сказал учительнице:

- Отправьте его на х*й в Академию! На последние 7 вопросов я сам ответил неправильно!🤣🤣🤣
            </p>
			<script>
			$( document ).ready(function(){
			  
			  $( ".in" ).click(function(){ 
				$( ".text" ).fadeIn(); 
			  });
			});
			</script>

        </div>
        <div class="footer"> <?php include 'footer.inc.php' ?></div>
    </div>
</body>