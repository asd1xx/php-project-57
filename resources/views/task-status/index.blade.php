<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="9O5v271LyKbd9SH0NR5iZON4r49r5smqrrkwSusE">
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
                        <a href="/" class="flex items-center">
                            <span class="self-center text-xl font-semibold whitespace-nowrap">Менеджер задач</span>
                        </a>
                        <div class="flex items-center lg:order-2">
                            <a href="/login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Вход
                            </a>
                            <a href="/register" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                                    Регистрация
                            </a>
                        </div>
                        <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>
                                    <a href="/tasks" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                        Задачи
                                    </a>
                                </li>
                                <li>
                                    <a href="/task_statuses" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                        Статусы
                                    </a>
                                </li>
                                <li>
                                    <a href="/labels" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                        Метки
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <section class="bg-white">
                <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
                    <div class="grid col-span-full">
                        <h1 class="mb-5">Статусы</h1>

                            <div>
                                <a href="http://localhost:8000/task_statuses/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Создать Статус
                                </a>
                            </div>

                        <table class="mt-4">
                            <thead class="border-b-2 border-solid border-black text-left">
                                <tr>
                                    <th>ID</th>
                                    <th>Имя</th>
                                    <th>Дата создания</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($taskStatuses as $taskStatus)
                                    <tr class="border-b border-dashed text-left">
                                        <td><?= htmlspecialchars($taskStatus['id']) ?></td>
                                        <td><?= htmlspecialchars($taskStatus['name']) ?></td>
                                        <td><?= htmlspecialchars($taskStatus['created_at']) ?></td>
                                        <td>
                                            <a data-confirm="Вы уверены?" data-method="DELETE" href="/<?= htmlspecialchars($taskStatus['id']) ?>" class="text-red-600 hover:text-red-900">
                                                Удалить
                                            </a>
                                            <a href="http://localhost:8000/task_statuses/<?= htmlspecialchars($taskStatus['id']) ?>/edit" class="text-blue-600 hover:text-blue-900">
                                                Изменить
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
