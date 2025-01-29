<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="fLECDhbkiYdPvCLvaoEQl3gKcFzGpxL7Mcz7Tlex">
    <meta name="csrf-param" content="_token">

    <title>Менеджер задач</title>

    <!-- Scripts -->
    <link rel="preload" as="style" href="https://php-task-manager-ru.hexlet.app/build/assets/app.4885a691.css"><link rel="modulepreload" href="https://php-task-manager-ru.hexlet.app/build/assets/app.42df0f0d.js"><link rel="stylesheet" href="https://php-task-manager-ru.hexlet.app/build/assets/app.4885a691.css"><script type="module" src="https://php-task-manager-ru.hexlet.app/build/assets/app.42df0f0d.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>


<body>
    <div id="app">
        <header class="fixed w-full">
            <nav class="bg-white border-gray-200 py-2.5 shadow-md">
                <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                    <a href="https://php-task-manager-ru.hexlet.app" class="flex items-center">
                        <span class="self-center text-xl font-semibold whitespace-nowrap">Менеджер задач</span>
                    </a>

                    <div class="flex items-center lg:order-2">
                                                    <a href="https://php-task-manager-ru.hexlet.app/logout" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                                Выход
                            </a>

                            <form id="logout-form" action="https://php-task-manager-ru.hexlet.app/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="fLECDhbkiYdPvCLvaoEQl3gKcFzGpxL7Mcz7Tlex" autocomplete="off">                            </form>
                                            </div>

                    <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="https://php-task-manager-ru.hexlet.app/tasks" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                    Задачи                                </a>
                            </li>
                            <li>
                                <a href="https://php-task-manager-ru.hexlet.app/task_statuses" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                    Статусы                                </a>
                            </li>
                            <li>
                                <a href="https://php-task-manager-ru.hexlet.app/labels" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                    Метки                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <section class="bg-white">
            <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                                <div class="grid col-span-full">
    <h1 class="mb-5">Изменение статуса</h1>
    <form class="w-50" method="POST" action="http://localhost:8000/task_statuses/8/edit"><input type="hidden" name="_method" id="_method" value="PATCH"><input type="hidden" name="_token" value="fLECDhbkiYdPvCLvaoEQl3gKcFzGpxL7Mcz7Tlex">
    <div class="flex flex-col">
        <div>
            <label for="name">Имя</label>
        </div>
        <div class="mt-2">
            <input class="rounded border-gray-300 w-1/3" type="text" name="name" id="name" value="{{ $taskStatus->name }}">
        </div>
                <div class="mt-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Обновить</button>
        </div>
    </div>
    </form>
</div>
            </div>
        </section>
    </div>


</body>