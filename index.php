<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skillometer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/output.css">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class=" ">
    <div class="min-h-screen bg-[#16151B]">
        <div class="container mx-auto w-4/5">
            <div class="flex flex-col space-y-10">
                <div class="py-3 flex items-center justify-between">
                    <div class="text-[#3077FF] text-2xl">
                        Skillometer
                    </div>
                    <div class="text-white flex space-x-4">
                        <a class="cursor-pointer hover:border-b" onclick="document.querySelector('#why').scrollIntoView({
                            behavior: 'smooth'
                        });">Преимущества</a>
                        <a class="cursor-pointer hover:border-b" onclick="document.querySelector('#was').scrollIntoView({
                            behavior: 'smooth'
                        });">Было/Стало</a>
                        <a class="cursor-pointer hover:border-b" onclick="document.querySelector('#zay').scrollIntoView({
                            behavior: 'smooth'
                        });">Оставьте заявку</a>
                    </div>
                </div>

                <div class="flex flex-col space-y-20">

                    <div class="text-4xl font-semibold text-center uppercase text-white">образовательные <span class="text-[#8146FF]">курсы</span> и <span class="text-[#8146FF]">вакансии</span></div>
                    <div class="flex justify-between">
                        <div class="flex flex-col space-y-4   rounded-3xl justify-around p-4 text-[#201E26] text-lg font-semibold w-[350px] bg-white">
                            <img src="img/1.png" alt="">
                            <p>Прикладные исследования в области графена</p>
                        </div>
                        <div class="flex flex-col space-y-4 rounded-3xl justify-around p-4 text-[#201E26] text-lg font-semibold w-[350px] bg-white">
                            <img src="img/2.png" alt="">
                            <p>Modern Methods of Education//Современные методики обучения</p>
                        </div>
                        <div class="flex flex-col space-y-4 rounded-3xl justify-around p-4 text-[#201E26] font-semibold text-lg  w-[350px] bg-white">
                            <img src="img/3.png" alt="">
                            <p>Практический онлайн-курс: “Cоздание и настройка чат ботов”</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center space-y-4">
                        <button class="bg-[#3077FF] w-1/5 shadow-md shadow-blue-500/50 p-3 px-8 rounded-3xl text-white">Подробнее</button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="min-h-screen bg-white" id="why">
        <div class="container mx-auto w-4/5">
            <div class="flex flex-col space-y-20">
                <div class="text-4xl font-semibold text-center mt-20">Почему нас выбирают</div>
                <div class="flex justify-between ">
                    <div class="flex w-1/2 items-center space-x-4">
                        <div class="flex bg-[#343843] w-[110px] h-[110px] rounded-3xl justify-center  items-center">

                            <img src="img/cl.png" width="60%" alt="">

                        </div>
                        <div class="font-semibold  w-[60%]">
                            Наша платформа помогает быстро адаптироваться под изменения рынка
                        </div>
                    </div>
                    <div class="flex w-1/2 items-center space-x-4 ">
                        <div class="flex bg-[#343843] w-[110px] h-[110px] rounded-3xl justify-center align-middle items-center">
                            <svg width="60" height="29" viewBox="0 0 80 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 22.7851L29.0563 45L77 3" stroke="#fff" stroke-width="6" stroke-linecap="round" />
                            </svg>

                        </div>
                        <div class="font-semibold  w-[60%] ">
                            Удобный и интуитивно понятный интерфейс как для эксперта, так и для ученика
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex w-1/2 items-center space-x-4">
                        <div class="flex bg-[#343843] w-[110px] h-[110px] rounded-3xl justify-center  items-center">
                            <img src="img/whproffession.png" width="78" alt="">
                        </div>
                        <div class="font-semibold  w-[60%]">
                            Ваши выпускники смогут найти работу уже во время прохождения курса, используя сервис по поиску работы на основе AI- технологий
                        </div>
                    </div>
                    <div class="flex w-1/2 items-center space-x-4">
                        <div class="flex bg-[#343843] w-[110px] h-[110px] rounded-3xl justify-center align-middle items-center">
                            <img src="img/whm.png" width="70px" alt="">

                        </div>
                        <div class="font-semibold w-[60%]">
                            Узнаваемость бренда. Вы повысите узнаваемость бренда среди наших пользователей, все они ваши потенциальные ученики
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex w-1/2 items-center space-x-4">
                        <div class="flex bg-[#343843] w-[110px] h-[110px] rounded-3xl justify-center  items-center">
                            <img src="img/whpeople.png" width="70" alt="">
                        </div>
                        <div class="font-semibold  w-[60%]">
                            Помощь в создании курса от команды Skillometer

                        </div>
                    </div>
                    <div class="flex w-1/2 items-center space-x-4">
                        <div class="flex bg-[#343843] shadow-custom w-[110px] h-[110px] rounded-3xl justify-center align-middle items-center">
                            <img src="img/wcp.png" width="78" alt="">


                        </div>
                        <div class="font-semibold w-[60%]">
                            Мобильное приложение, чтобы учиться в любом месте и в любое время
                        </div>
                    </div>

                </div>


            </div>
        </div>


    </div>
    <div class="min-h-screen bg-[#16151B]">
        <div class="container mx-auto w-4/5">
            <div class="flex ">
                <div class="w-1/2 flex space-y-8 z-10 flex-col min-h-screen justify-center   ">
                    <img src="img/logo.png" width="50%" alt="">
                    <div class="text-white fomt-bold text-2xl">
                        Вы преподаватель? Тогда загрузите свой первый курс и станьте нашим партнером!
                        <br>
                        <br><br>
                        Вы ученик? Тогда вы можете пройти несколько бесплатных курсов и сделать первые шаги!
                    </div>
                    <a href="https://web.skillometer.ru/course-list" class=" hover:bg-[#2b6ce4] text-center bg-[#3077FF] text-white p-3 rounded-2xl">Бесплатные курсы</a>
                </div>
                <div class="flex items-center w-1/2 ">

                    <img src="img/courses.png" class="absolute w-1/2 z-10" alt="">
                    <img src="img/snow.gif" class="absolute  -rotate-90 mt-[20px] mr-[200px] w-[30%] h-[500px]  z-0" alt="">



                </div>
            </div>
        </div>
    </div>
    <div class="min-h-screen bg-white" id="was">
        <div class="container mx-auto w-4/5">
            <div class="flex flex-col space-y-10">
                <div class="text-4xl font-semibold text-center mt-10">Было/Стало</div>

                <div class="flex justify-around">

                    <div class="flex w-[480px] items-center space-x-4 rounded-[25px] shadow-[12px_15px_50px_-12px_rgba(255,48,48,0.6)]">
                        <div class="flex w-[110px] h-[110px] justify-center align-middle items-center">
                            <svg width="60" class="rounded" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FF3030" d="M4.11 2.697L2.698 4.11 6.586 8l-3.89 3.89 1.415 1.413L8 9.414l3.89 3.89 1.413-1.415L9.414 8l3.89-3.89-1.415-1.413L8 6.586l-3.89-3.89z"></path>
                            </svg>
                        </div>
                        <div class="font-semibold  w-[60%]">
                            Ученик покупает курс без конечной мотивации
                        </div>
                    </div>

                    <div class="flex w-[480px] items-center space-x-4 rounded-[25px] shadow-[12px_15px_50px_-12px_rgba(36,255,0,0.6)]">
                        <div class="flex w-[110px] h-[110px] rounded-3xl justify-center align-middle items-center">
                            <svg width="60" height="30" viewBox="0 0 80 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 22.7851L29.0563 45L77 3" stroke="#24FF00" stroke-width="6" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="font-semibold  w-[60%] ">
                            Ученик определяет свой профессиональный вектор развития
                        </div>
                    </div>

                </div>

                <div class="flex justify-around">

                    <div class="flex w-[480px] items-center space-x-4 rounded-[25px] shadow-[12px_15px_50px_-12px_rgba(255,48,48,0.6)]">
                        <div class="flex w-[110px] h-[110px] justify-center align-middle items-center">
                            <svg width="60" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FF3030" d="M4.11 2.697L2.698 4.11 6.586 8l-3.89 3.89 1.415 1.413L8 9.414l3.89 3.89 1.413-1.415L9.414 8l3.89-3.89-1.415-1.413L8 6.586l-3.89-3.89z"></path>
                            </svg>
                        </div>
                        <div class="font-semibold  w-[60%]">
                            Ученик не доучивается и забивает на учёбу
                        </div>
                    </div>

                    <div class="flex w-[480px] items-center space-x-4 rounded-[25px] shadow-[12px_15px_50px_-12px_rgba(36,255,0,0.6)]">
                        <div class="flex w-[110px] h-[110px] rounded-3xl justify-center align-middle items-center">
                            <svg width="60" height="30" viewBox="0 0 80 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 22.7851L29.0563 45L77 3" stroke="#24FF00" stroke-width="6" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="font-semibold w-[60%]">
                            Ученик уверен в выборе курса и замотивирован (благодаря интеграции с рынком труда)
                        </div>
                    </div>

                </div>

                <div class="flex justify-around">

                    <div class="flex w-[480px] items-center space-x-4 rounded-[25px] shadow-[12px_15px_50px_-12px_rgba(255,48,48,0.6)]">
                        <div class="flex w-[110px] h-[110px] justify-center align-middle items-center">
                            <svg width="60" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FF3030" d="M4.11 2.697L2.698 4.11 6.586 8l-3.89 3.89 1.415 1.413L8 9.414l3.89 3.89 1.413-1.415L9.414 8l3.89-3.89-1.415-1.413L8 6.586l-3.89-3.89z"></path>
                            </svg>
                        </div>
                        <div class="font-semibold  w-[60%]">
                            Учебный центр теряет прибыль
                        </div>
                    </div>

                    <div class="flex w-[480px] items-center space-x-4 rounded-[25px] shadow-[12px_15px_50px_-12px_rgba(36,255,0,0.6)]">
                        <div class="flex w-[110px] h-[110px] rounded-3xl justify-center align-middle items-center">
                            <svg width="60" height="30" viewBox="0 0 80 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 22.7851L29.0563 45L77 3" stroke="#24FF00" stroke-width="6" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="font-semibold w-[60%]">
                            Учебный центр получает мотивированного ученика на долгосрочную перспективу
                        </div>
                    </div>

                </div>

                <div class="flex justify-around">

                    <div class="flex w-[480px] items-center space-x-4 rounded-[25px] shadow-[12px_15px_50px_-12px_rgba(255,48,48,0.6)]">
                        <div class="flex w-[110px] h-[110px] justify-center align-middle items-center">
                            <svg width="60" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FF3030" d="M4.11 2.697L2.698 4.11 6.586 8l-3.89 3.89 1.415 1.413L8 9.414l3.89 3.89 1.413-1.415L9.414 8l3.89-3.89-1.415-1.413L8 6.586l-3.89-3.89z"></path>
                            </svg>
                        </div>
                        <div class="font-semibold  w-[60%]">
                            Понижение рентабельности
                        </div>
                    </div>

                    <div class="flex w-[480px] items-center space-x-4 rounded-[25px] shadow-[12px_15px_50px_-12px_rgba(36,255,0,0.6)]">
                        <div class="flex w-[110px] h-[110px] rounded-3xl justify-center align-middle items-center">
                            <svg width="60" height="30" viewBox="0 0 80 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 22.7851L29.0563 45L77 3" stroke="#24FF00" stroke-width="6" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="font-semibold w-[60%]">
                            Учебный центр увеличивает прибыль за счет нескольких продаж благодаря механике образовательной траектории
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
    <div class="min-h-screen bg-[#16151B] text-white" id="zay">
        <div class="container mx-auto w-4/5">
            <div class="flex">
                <div class="flex min-h-screen w-1/2  items-center  ">
                    <div class="flex  flex-col space-y-10 w-full">
                        <div class="flex flex-col space-y-2">
                            <div class="text-2xl">
                                Оставьте вашу заявку
                            </div>
                            <div class="text-sm">Наш менеджер ответит вам в течении дня</div>
                        </div>
                        <form action="sendmail.php" method="POST" class="flex flex-col space-y-10">
                            <input type="text" name="name" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#3077FF] peer focus:bg-none" placeholder="Имя, фамилия" required autocomplete="email" />
                            <input type="text" name="number" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#3077FF] peer focus:bg-none" placeholder="Номер телефона" required autocomplete="email" />
                            <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-[#3077FF] peer focus:bg-none" placeholder="Электронная почта" required autocomplete="email" />
                            <textarea name="content" rows="5" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Ваше сообщение" required></textarea>
                            <input type="submit" value="Отправить" class="hover:bg-[#2b6ce4] text-center bg-[#3077FF] text-white p-3 rounded-2xl">
                        </form>

                    </div>

                </div>
                <div class="flex min-h-screen w-1/2 items-center justify-center  ">
                    <div class="flex flex-col  w-4/5  space-y-10">

                        <div class="text-6xl text-[#3077FF] text-center">Контакты</div>
                        <div class="text-xl">Вы можете связатся с нами в социальных сетях. Мы с радостью ответим на все ваши вопросы</div>


                        <div class="flex items-center">
                            <div class="w-[250px] flex items-center space-x-4">
                                <img src="img/tgFoot.png" alt="" class="w-[23px]">
                                <div>Skillometer - Telegram</div>
                            </div>
                            <div class="w-[250px] flex items-center space-x-4">
                                <img src="img/phoneFoot.png" alt="" class="w-[23px]">
                                <div>+7 (964) 076 8777</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-[250px] flex items-center space-x-4">
                                <img src="img/vkFoot.png" alt="" class="w-[23px]">
                                <div>Skillometer - ВКонтакте</div>
                            </div>
                            <div class="w-[250px] flex items-center space-x-4">
                                <img src="img/mailFoot.png" alt="" class="w-[23px]">
                                <div>softway-ykt@mail.ru</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-[#8146FF] p-8 text-white flex justify-around items-center" id="footer">
        <div class="w-[400px] flex-col">
            <img src="img/logoFoot.png" width="50%" alt="">
            <div class="text-xs">платформа для повышения профессиональных компетенций с использованием технологий искусственного интеллекта.</div>
        </div>
        <div class="w-[500px] flex flex-col justify-center space-y-4 text-xs">
            <div class="flex items-center">
                <div class="w-[250px] flex items-center space-x-4">
                    <img src="img/tgFoot.png" alt="" class="w-[23px]">
                    <div>Skillometer - Telegram</div>
                </div>
                <div class="w-[250px] flex items-center space-x-4">
                    <img src="img/phoneFoot.png" alt="" class="w-[23px]">
                    <div>+7 (964) 076 8777</div>
                </div>
            </div>
            <div class="flex items-center">
                <div class="w-[250px] flex items-center space-x-4">
                    <img src="img/vkFoot.png" alt="" class="w-[23px]">
                    <div>Skillometer - ВКонтакте</div>
                </div>
                <div class="w-[250px] flex items-center space-x-4">
                    <img src="img/mailFoot.png" alt="" class="w-[23px]">
                    <div>softway-ykt@mail.ru</div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/index.js"></script>
</body>

</html>