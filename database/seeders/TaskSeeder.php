<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\Label;
use App\Models\User;
use App\Models\TaskStatus;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $seeders = [
            [
                'name' => 'Исправить ошибку в какой-нибудь строке',
                'description' => 'Я тут ошибку нашёл, надо бы её исправить и так далее и так далее',
                // 'status_id' => TaskStatus::where('name', 'в архиве')->value('id'),
                // 'created_by_id' => User::where('name', 'Яна Максимовна Полякова')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Фёдоров Егор Алексеевич')->value('id'),
            ],
            [
                'name' => 'Допилить дизайн главной страницы',
                'description' => 'Вёрстка поехала в далёкие края. Нужно удалить бутстрап!',
                // 'status_id' => TaskStatus::where('name', 'в архиве')->value('id'),
                // 'created_by_id' => User::where('name', 'Фёдоров Егор Алексеевич')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Дарья Евгеньевна Некрасова')->value('id'),
            ],
            [
                'name' => 'Отрефакторить авторизацию',
                'description' => 'Выпилить всё легаси, которое найдёшь',
                // 'status_id' => TaskStatus::where('name', 'новая')->value('id'),
                // 'created_by_id' => User::where('name', 'Богданова Анастасия Дмитриевна')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Нелли Максимовна Трофимова')->value('id'),
            ],
            [
                'name' => 'Доработать команду подготовки БД',
                'description' => 'Заодно добавить тестовых данных',
                // 'status_id' => TaskStatus::where('name', 'выполняется')->value('id'),
                // 'created_by_id' => User::where('name', 'Нелли Максимовна Трофимова')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Викентий Иванович Шилов')->value('id'),
            ],
            [
                'name' => 'Пофиксить вон ту кнопку',
                'description' => 'Кажется она не того цвета',
                // 'status_id' => TaskStatus::where('name', 'новая')->value('id'),
                // 'created_by_id' => User::where('name', 'Нелли Максимовна Трофимова')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Платон Сергеевич Герасимов')->value('id'),
            ],
            [
                'name' => 'Исправить поиск',
                'description' => 'Не ищет то, что мне хочется',
                // 'status_id' => TaskStatus::where('name', 'новая')->value('id'),
                // 'created_by_id' => User::where('name', 'Платон Сергеевич Герасимов')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Полякова Антонина Максимовна')->value('id'),
            ],
            [
                'name' => 'Добавить интеграцию с облаками',
                'description' => 'Они такие мягкие и пушистые',
                // 'status_id' => TaskStatus::where('name', 'выполняется')->value('id'),
                // 'created_by_id' => User::where('name', 'Богданова Анастасия Дмитриевна')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Комиссарова Нелли Сергеевна')->value('id'),
            ],
            [
                'name' => 'Выпилить лишние зависимости',
                'description' => '',
                // 'status_id' => TaskStatus::where('name', 'выполняется')->value('id'),
                // 'created_by_id' => User::where('name', 'Комаров Игорь Александрович')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Комиссарова Нелли Сергеевна')->value('id'),
            ],
            [
                'name' => 'Запилить сертификаты',
                'description' => 'Кому-то же они нужны?',
                // 'status_id' => TaskStatus::where('name', 'новая')->value('id'),
                // 'created_by_id' => User::where('name', 'Воробьёва Ирина Сергеевна')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Комиссарова Нелли Сергеевна')->value('id'),
            ],
            [
                'name' => 'Выпилить игру престолов',
                'description' => 'Этот сериал никому не нравится! :)',
                // 'status_id' => TaskStatus::where('name', 'выполняется')->value('id'),
                // 'created_by_id' => User::where('name', 'Аркадий Романович Кононов')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Богданова Анастасия Дмитриевна')->value('id'),
            ],
            [
                'name' => 'Пофиксить спеку во всех репозиториях',
                'description' => 'Передать Олегу, чтобы больше не ронял прод',
                // 'status_id' => TaskStatus::where('name', 'завершена')->value('id'),
                // 'created_by_id' => User::where('name', 'Богданова Анастасия Дмитриевна')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Изабелла Львовна Фадеева')->value('id'),
            ],
            [
                'name' => 'Вернуть крошки',
                'description' => 'Андрей, это задача для тебя',
                // 'status_id' => TaskStatus::where('name', 'завершена')->value('id'),
                // 'created_by_id' => User::where('name', 'Викентий Иванович Шилов')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Платон Сергеевич Герасимов')->value('id'),
            ],
            [
                'name' => 'Установить Linux',
                'description' => 'Не забыть потестировать',
                // 'status_id' => TaskStatus::where('name', 'в архиве')->value('id'),
                // 'created_by_id' => User::where('name', 'Борис Александрович Туров')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Полякова Антонина Максимовна')->value('id'),
            ],
            [
                'name' => 'Потребовать прибавки к зарплате',
                'description' => 'Кризис это не время, чтобы молчать!',
                // 'status_id' => TaskStatus::where('name', 'завершена')->value('id'),
                // 'created_by_id' => User::where('name', 'Комаров Игорь Александрович')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Платон Сергеевич Герасимов')->value('id'),
            ],
            [
                'name' => 'Добавить поиск по фото',
                'description' => 'Только не по моему',
                // 'status_id' => TaskStatus::where('name', 'выполняется')->value('id'),
                // 'created_by_id' => User::where('name', 'Полякова Антонина Максимовна')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Богданова Анастасия Дмитриевна')->value('id'),
            ],
            [
                'name' => 'Съесть еще этих прекрасных французских булочек',
                'description' => '',
                // 'status_id' => TaskStatus::where('name', 'завершена')->value('id'),
                // 'created_by_id' => User::where('name', 'Некрасова Кристина Борисовна')->value('id'),
                // 'assigned_to_id' => User::where('name', 'Юдина Галина Владимировна')->value('id'),
            ],
        ];

        Task::factory()
            ->count(count($seeders))
            ->sequence(...$seeders)
            ->create();

        Task::all()->each(function ($task) {
            $labels = Label::inRandomOrder()
                ->limit(rand(1, Label::count()))
                ->get();

            $task->labels()->attach($labels);
        });
    }
}
