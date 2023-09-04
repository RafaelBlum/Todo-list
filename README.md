<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
	<a href="#"  target="_blank" title="calculadora com livewire">
		<img src="public/images/gif-todo-2.gif" alt="Todo list with livewire" style="border-radius: 5px;" width="500">
	</a>
</p>

<p align="center">
	<img src="https://img.shields.io/badge/version project-2.0-brightgreen" alt="version project todo">
    <img src="https://img.shields.io/badge/Php-8.2-informational&color=brightgreen" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Laravel&message=9.52.5&color=brightgreen?style=for-the-badge" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Livewire&message=2.12&color=brightgreen?style=for-the-badge" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Tailwindcss&message=3.3.3&color=brightorange?style=for-the-badge" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=AlpineJs&message=2.8.2&color=brightgreen?style=for-the-badge" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Remixicon&message=2.5.0&color=brightgreen?style=for-the-badge" alt="stack project">
	<a href="https://opensource.org/licenses/GPL-3.0">
		<img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="GPLv3 License">
	</a>
</p>

## Projeto Todo task v.2.0
Este é uma `aplicação Laravel` utilizando a "extensão" `Livewire`. Uma extensão reativa, que agiliza o desenvolvimento
com `componentes reativo` "sem" o uso de javascript (Existe o javascript, mas não precisamos se preocupar com  desenvolvimento).

> Com **livewire** temos componentes responsivos e juntamente com o blade, temos uma ferramenta poderosa. Componentes que podemos atualizar sem
>precisar atualizar toda página de forma fácil e rápida.

##### Descrição de funcionalidades do `app task`
- **listagem de todas atividades** _Criação de compoenente `todo` e busca de atividades por `query` e `when` para filtro_ e messagem de listagem vazia caso não tenha.
- **Filtro das atividades por `pendentes` e `concluídas`** _Criação de propriedade `filter` com status `all, pending, done` para query `when`_.
- **Ordenação da listagem** _Utilização de `orderBy` por `checked` de atividades_.
- **`Check` com input da atividade concluída** _Criação de input do typo `checkbox` para concluir atividade com novo componente `item` com metodo updatedTodo da propriedade Propriedade `Todo $todo`_.
- **Reoordenação da listagem ao check da atividade** _Utilização de `event` livewire no compoente `Item` que vai ao `salvar` fazer o `refresh` na listagem do component `Todo` pelo evento `emitTo e listeners`_.
- **Creação de atividade** _A criação da atividade irá receber via `click` o titulo da atividade e refresh na lista `todo`_.
- **Exclusão da atividade** _Uma deleção básica e refresh na lista `todo`_.
- **No frontend:** _Layout responsivo e mode dark usando `Tailwindcss`_.


##### Descrição de funcionalidades do `app task` para a versão 2.0
- **Autenticação de usuário** _ _.
- **Usuários só podem criar, editar e deletar se estiverem logados** _ _.
- **Usuário só pode editar e deletar se a atividade for dele** _ _.
- **** _ _.

<p align="center">
	<a href="#"  target="_blank" title="Diagrama">
		<img src="public/images/diagram.jpg" alt="Diagramação de componentes livewire" style="border-radius: 5px;" width="600">
	</a>
</p>

######  Tecnologias (serviços externos, libs, frameworks, hospedagem etc.) e instalações.

- <a href="#" target="_blank">Php `8.2`</a>
- <a href="#" target="_blank">Laravel `9.52.5`</a> [Projeto laravel] composer create-project laravel/laravel name-project
- <a href="#" target="_blank">Livewire `2.12`</a> [Livewire] composer require livewire/livewire
- <a href="#" target="_blank">laravel debugbar `3.8`</a> [Debugbar] composer require barryvdh/laravel-debugbar --dev
- <a href="#" target="_blank">Remixicon `2.5.0`</a> [CDN]
- <a href="#" target="_blank">Tailwindcss `3.3.3`</a> [Tailwindcss] npm install -D tailwindcss postcss autoprefixer
    - Configuração do framework esta neste link [Install Tailwind CSS with Laravel](https://tailwindcss.com/docs/guides/laravel)


## Desenvolvimento (backend lógica e comandos)
- `php artisan serve --port=8000` [inicializando servidor] 
- `php artisan livewire:make todo ` [Criando componente todo] 
- `php artisan make:model Todo -m ` [Criado a tabela modelo para add propriedades] 
    - checked **boolean** _nullable false_
    - title **string**
- `php artisan make:factory TodoFactory --model=Todo ` [Criado a migration para tabela no banco] 
    - checked => **$this->faker->_boolean_**
    - title => **$this->faker->_sentence_**
- `php artisan migrate --seed ` [Criado a migration de todas tabelas no banco e seed populando dados fakes] 
- **Criação do componentes de interação**: _A ideia é trabalhar com cada `componente livewire` de modo separado e não no proprio componente `todo`, para assim não ter um componente com muitas responsabilidades e desta forma cada componente tera a sua._
    - `php artisan livewire:make todo.item ` [Criando componente todo item] | _Componente que terá a responsabilidade de realizar o checked da atividade_.
    - `php artisan livewire:make todo.create ` [Criando componente todo create] | _Componente que terá a responsabilidade de criar componente com seu titulo_.
    - `php artisan livewire:make todo.delete ` [Criando componente todo delete] | _Componente que terá a responsabilidade de deletar a tividade_.

    
## Desenvolvimento (Frontend layout e lógica)

`View blade *todo*` - listagem 
~~~~~~view
{{-- LIST TASKS --}}
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <livewire:todo.item :todo="$todo" :key="$todo->id" />
    @endforeach
@else
    <div class="flex justify-center rounded-lg font-medium tracking-wide text-red-500 text-xs mt-6 mb-6">
        <div>
            Não existem tarefas registradas!
        </div>
    </div>
@endif
~~~~~~

| Diretiva | Explicação |
| :---         |     :---      |
| `@foreach($todos as $todo)` | *Recebendo a listagem com todas atividades ou por filtro no componente `todo` com um foreach para mostrar cada um.* |
| `<livewire:todo.item :todo="$todo" :key="$todo->id" />` | *Passando cada atividade para `componente view item` e para que cada tenha sua identificação para livewire, passamos o `key` do `ID`.* |

######  Exemplo 1

`View blade *create*` - Como passar dados de input para metodo com click `Enter`.
~~~~~~
<input wire:model.defer="title" wire:keydown.enter="save"
~~~~~~


`Controller *create*`
~~~~~~Create
    public string $title ='';

    public function save()
    {
        $this->validate(['title' => ['required', 'min:3']],
            [
                'title.required' => 'Descrição é obrigatória!',
                'title.min'=> 'Mínimo de 3 letras, por favor!'
            ]);

        Todo::create(['title' => $this->title]);
        $this->reset('title');
        $this->emitTo(\App\Http\Livewire\Todo::class, 'todo::created');
    }
~~~~~~

`Controller *Todo*`
~~~~~~Create
protected $listeners = [
        'todo::updated' => '$refresh',
        'todo::created' => '$refresh',
        'todo::deleted' => '$refresh'
];
~~~~~~

| Classe | Explicação importantes |
| :---         |     :---      |
| `validate(['title' => ['required', 'min:3']]` | * Validação de criação e mensagens personalizadas de cada tipo* |
| `$this->emitTo` | *EmitTo é uma função que avisa um componente de alguma atividade realizada e apartir disso podemos por exemplo, realizar `refresh`* |


## Contatos

- 👇🏼 [rafaelblum_digital@hotmail.com]

[![Youtube Badge](https://img.shields.io/badge/-Youtube-FF0000?style=flat-square&labelColor=FF0000&logo=youtube&logoColor=white&link=https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)](https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)
[![Instagram Badge](https://img.shields.io/badge/-rafablum_-violet?style=flat-square&logo=Instagram&logoColor=white&link=https://www.instagram.com/rafablum_/)](https://www.instagram.com/rafablum_/)
[![Twitter: universoCode](https://img.shields.io/twitter/follow/universoCode?style=social)](https://twitter.com/universoCode)
[![Linkedin: RafaelBlum](https://img.shields.io/badge/-RafaelBlum-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/rafael-blum-378656285/)](https://www.linkedin.com/in/rafael-blum-378656285/)
[![GitHub RafaelBlum](https://img.shields.io/github/followers/RafaelBlum?label=follow&style=social)](https://github.com/RafaelBlum)


<img src="https://media.giphy.com/media/LnQjpWaON8nhr21vNW/giphy.gif" width="60"> 
    <em><b>Adoro me conectar com pessoas diferentes,</b> então se você quiser dizer <b>oi, ficarei feliz em conhecê-lo mais!</b> :)</em>

