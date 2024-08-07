#### Список ссылок

- [GitSheet](https://gitsheet.wtf/)
- [Ветвление в Git - Перебазирование](https://git-scm.com/book/ru/v2/%D0%92%D0%B5%D1%82%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5-%D0%B2-Git-%D0%9F%D0%B5%D1%80%D0%B5%D0%B1%D0%B0%D0%B7%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)
- [Сходство и различие между Mercurial и Git](https://habr.com/ru/post/168675/)
- [Start a new git repository](https://kbroman.org/github_tutorial/pages/init.html)

### Version Control Systems

Наиболее популярны - `Git`, с большим отрывом идет `SVN (Subversion)` и `Mercurial`. Долю на рынке, сопоставимую с
массой
электрона, занимают осталные системы : `CVS (Concurrent Versions System)`, `Team Foundation Server`, `Bazaar`, `Darcs`
итд.

`Git` и `Mercurial` — распределенные системы, `SVN` — централизованная.

В первом случае у каждого разработчика на локальной машине хранится полная копия репозитория, и он работает с ней
автономно, периодически заливая обновления на сервер с главным репозиторием.

При этом `Git`, в отличие от `Mercurial`, работает не только с локальными коммитами, но и с локальными ветками, которые
можно вовсе не заливать в удаленный репозиторий.

`SVN` предполагает, что полная версия кода со всеми ветками хранится в удаленном репозитории, а у разработчика локально
находится только тот файл, который он сейчас модифицирует.

C этой точки зрения, `SVN` лучше вписывается в модель коммерческой разработки, где мы ежедневно контролируем объем и
качество выполненной работы.

При использовании `Git` или `Mercurial` проектному менеджеру необходимо установить правило ежедневных коммитов для
разработчиков, это особенно критично для удаленных команд или аутсорсеров.

### зачем нужны Source code management (SCM) [&uarr;](#devmap)

- `Доступ к коду`. Исходники кода хранятся в удаленном репозитории (хранилище данных), куда обращаются разработчики,
  чтобы забрать актуальную версию файлов или внести изменения. Так выстраивается командная разработка.

- `Логирование изменений в коде`. Отслеживание коммитов (внесений изменений в код), помогает найти кто, что и когда
  менял, решить конфликты при модифицировании одних и тех же файлов, откатиться на любое предыдущее состояние.

- `Ветвление разработки`. Программисты параллельно ведут разработку нового функционала в отдельных ветках, не затрагивая
  работоспособности старого.

- `Поддержка версионности продуктов`. При выпуске обновлений программных продуктов, мы обозначаем релизные версии,
  например, с помощью тегов, чтобы зафиксировать их в этом состоянии, для дебага или ретроспективы.

### какими пользовались [&uarr;](#devmap)

Git (Github, Gitlab, Bitbucket немного)

В целом, `Bitbucket` больше подходит для работы распределенных команд, а `GitHub` хорош для индивидуальных проектов.

Преимуществами `Bitbucket` в том, что в нем встроена интеграция с другими продуктами `Atlassian`. Если команда большая
удобнее работать с `Jira`, если небольшая и задач немного, то подойдет и `Trello`.

### `gitflow`, `cherypick`, `revert` [&uarr;](#devmap)

#### Git-flow

`Git-flow` — альтернативная модель ветвления `Git`, в которой используются функциональные ветки и несколько основных
веток. Эта модель была впервые
опубликована и популяризована Винсентом Дриссеном на сайте nvie. По сравнению с моделью магистральной разработки, в
`Git-flow` используется больше
веток, каждая из которых существует дольше, а коммиты обычно крупнее. В соответствии с этой моделью разработчики создают
функциональную ветку и
откладывают ее слияние с главной магистральной веткой до завершения работы над функцией. Такие долгосрочные
функциональные ветки требуют тесного
взаимодействия разработчиков при слиянии и создают повышенный риск отклонения от магистральной ветки. В них также могут
присутствовать конфликтующи
е обновления.

`Git-flow` можно использовать для проектов, в которых запланирован цикл релизов и реализуется характерная для DevOps
методика непрерывной поставки.
В этом рабочем процессе используются понятия и команды, которые были предложены в рамках рабочего процесса с
функциональными ветками.
Однако `Git-flow` привносит новые специфические роли для разных веток и определяет характер и частоту взаимодействия
между ними.
Помимо функциональных веток в рамках этого рабочего процесса используются отдельные ветки для подготовки, поддержки и
регистрации релизов.
При этом вы по-прежнему можете пользоваться преимуществами рабочего процесса с функциональными ветками, такими как
запросы pull, изолированные эксперименты и эффективное командное взаимодействие.

#### git cherry-pick

    Команда git cherry-pick берёт изменения, вносимые одним коммитом, и пытается повторно применить их в виде нового коммита в текущей ветке. 
    Эта возможность полезна в ситуации, когда нужно забрать парочку коммитов из другой ветки, а не сливать ветку целиком со всеми внесенными в нее изменениями.

#### git revert

    Команда git revert — полная противоположность git cherry-pick. 
    Она создаёт новый коммит, который вносит изменения, противоположные указанному коммиту, по существу отменяя его.

### как перенести изменения из одной ветку в другую (2 способа) [&uarr;](#devmap)

`merge` или `rebase`

### зачем нужна команда `git rebase` [&uarr;](#devmap)

`git rebase` — это «автоматизированный» `cherry-pick`. Он выполняет ту же работу, но для цепочки коммитов, тем самым как
бы
перенося ветку на новое место.

это наложение коммитов поверх другого базового коммита. Под базовым понимается тот коммит, к которому применяются
коммиты выбранной ветки.

Перебазирование в `git` используется для придания линейности истории ветки, чтобы удобно отслеживать изменения, или для
обновления ветки разработки последними изменениями из основной ветки.

### Чем отличается `rebase` от `merge` - описание `rebase`, `merge`, `stash` [&uarr;](#devmap)

#### Git Merge

Слияние — обычная практика для разработчиков, использующих системы контроля версий. Независимо от того, созданы ли ветки
для тестирования, исправления ошибок или по другим причинам, слияние фиксирует изменения в другом месте. Слияние
принимает содержимое ветки источника и объединяет их с целевой веткой. В этом процессе изменяется только целевая ветка.
История исходных веток остается неизменной.

    Плюсы:

    простота;
    сохраняет полную историю и хронологический порядок;
    поддерживает контекст ветки.


    Минусы:

    история коммитов может быть заполнена (загрязнена) множеством коммитов;
    отладка с использованием git bisect может стать сложнее.

#### Git Rebase

Rebase — еще один способ перенести изменения из одной ветки в другую. Rebase сжимает все изменения в один «патч». Затем
он интегрирует патч в целевую ветку.

В отличие от слияния, перемещение перезаписывает историю, потому что она передает завершенную работу из одной ветки в
другую. В процессе устраняется нежелательная история.

    Плюсы:

    Упрощает потенциально сложную историю
    Упрощение манипуляций с единственным коммитом
    Избежание слияния коммитов в занятых репозиториях и ветках
    Очищает промежуточные коммиты, делая их одним коммитом, что полезно для DevOps команд


    Минусы:

    Сжатие фич до нескольких коммитов может скрыть контекст
    Перемещение публичных репозиториев может быть опасным при работе в команде
    Появляется больше работы
    Для восстановления с удаленными ветками требуется принудительный пуш. Это приводит к обновлению всех веток, имеющих одно и то же имя, как локально, так и удаленно, и это ужасно.

    Если вы сделаете перемещение неправильно, история изменится, а это может привести к серьезным проблемам, поэтому убедитесь в том, что делаете!

#### Git squash

    Git squash — это прием, который помогает взять серию коммитов и уплотнить ее. Например, предположим: у вас есть серия из N коммитов и вы можете путем сжатия преобразовать ее в один-единственный коммит. 
    Сжатие через git squash в основном применяется, чтобы превратить большое число малозначимых коммитов в небольшое число значимых. Так становится легче отслеживать историю Git.

    Также этот прием используется при объединении ветвей. Чаще всего вам будут советовать всегда сжимать коммиты и выполнять перебазирование с родительской ветвью (например, master или develop). 
    В таком случае история главной ветки будет содержать только значимые коммиты, без ненужной детализации.

    сжатие коммитов меняет историю Git, поэтому не рекомендуется сжимать ветвь, если вы уже отправили ее в удаленный репозиторий. 
    Всегда выполняйте сжатие до того, как отправить пуш с изменениями.

    git rebase -i HEAD~3

### разница между `git` и `svn` (если есть) [&uarr;](#devmap)

    SVN – централизованная система контроля версий, Git – децентрализованная
    При ветвлении SVN копирует все содержимое ветки, Git – создает указатели

    Основное различие между этими двумя системами заключается в том, что Git — это распределенная система контроля версий, а Sagainst — централизованная система контроля версий. 
    Это означает, что вы держите репозиторий либо на своей машине (распределенный), так что вы можете работать локально, а затем синхронизировать изменения с общим сервером. В SVN весь код размещается в одном месте, и все разработчики должны быть подключены к нему, чтобы каждый мог синхронизировать и загружать изменения с сервера

### Основные используемые команды

- git checkout dev
- git reset --hard origin/dev
- git pull

-------------------------

- git checkout -b feature-{номер задачи}_{название задачи}
- git add .
- git commit -m '#{номер задачи} {что сделано}'

-------------------------

- git push -u origin feature-{номер задачи}_{название задачи}