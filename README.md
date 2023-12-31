<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


<p align="center">
	<a href="#"  target="_blank" title="calculadora com livewire">
		<img src="public/images/gif-todo-3.gif" alt="Todo list with livewire" width="100%">
	</a>
</p>

<p align="center">
	<img src="https://img.shields.io/badge/version project-2.0-brightgreen" alt="version project todo">
    <img src="https://img.shields.io/badge/Php-8.2-informational&color=brightgreen" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Laravel&message=9.52.5&color=brightgreen?style=for-the-badge" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Livewire&message=2.12&color=brightgreen?style=for-the-badge" alt="stack project">
	<a href="https://opensource.org/licenses/GPL-3.0">
		<img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="GPLv3 License">
	</a>
</p>
<p align="center">
    <img src="https://img.shields.io/static/v1?label=Tailwindcss&message=3.3.3&color=brightgreen?style=for-the-badge" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=AlpineJs&message=2.8.2&color=brightgreen?style=for-the-badge" alt="stack project">
    <img src="https://img.shields.io/static/v1?label=Remixicon&message=2.5.0&color=brightgreen?style=for-the-badge" alt="stack project">
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


##### Descrição de funcionalidades do `app task` para a versão `2.0`.
Na versão 2.0 do app, além do `layout novo`, foi adicionado `propriedades computadas` do livewire, `autorizações` de usuários 
para suas atividades, `autenticação` básica de login/logout para demonstração do que um usuário pode visualizar e interagir no app e por 
fim `notificações` para cada ação.

- **Autenticação de usuário** _Criação demonstrativa de usuário direto pelo id_.
- **Politicas de Autenticação de usuário** _Usuários só podem criar, editar e deletar se estiverem logados_.
- **Autorização de ações** _Usuário não pode visualizar a deleção da atividade se a atividade não foi criada por ele_.
- **Negação de ações** _Usuário não pode editar atividade que não foi criada por ele_.
- **Notificações** _Criar notificações na tela para ações_.
- **Parametros da url** _Criar parametros nos filtro da URL para um histórico na navegação_.

<p align="center">
	<a href="#"  target="_blank" title="Diagrama">
		<img src="public/images/diagram-2.jpg" alt="Diagramação de componentes livewire" style="border-radius: 5px;" width="600">
	</a>
</p>

######  Tecnologias (serviços externos, libs, frameworks, hospedagem etc.) e instalações.

- <a href="#" target="_blank">Php `8.2`</a>
- <a href="#" target="_blank">Laravel `9.52.5`</a> [Projeto laravel] composer create-project laravel/laravel name-project
- <a href="#" target="_blank">Livewire `2.12`</a> [Livewire] composer require livewire/livewire
- <a href="#" target="_blank">laravel debugbar `3.8`</a> [Debugbar] composer require barryvdh/laravel-debugbar --dev
- <a href="#" target="_blank">Remixicon `2.5.0`</a> [Docs](https://remixicon.com/)
- <a href="#" target="_blank">Tailwindcss `3.3.3`</a> [Tailwindcss] npm install -D tailwindcss postcss autoprefixer
    - Configuração do framework esta neste link [Install Tailwind CSS with Laravel](https://tailwindcss.com/docs/guides/laravel)
- <a href="#" target="_blank">Alpine jS `2.8.2`</a> [Docs](https://github.com/alpinejs/alpine/tree/v2.8.2)

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



## Desenvolvimento para versão 2.0
- Estruturação de `migrate` e `model` da Todo.
    - Adição da foreignId `$table->foreignIdFor(\App\Models\User::class)->nullable();`
    - Adição da fillable user id `protected $fillable = ['title', 'checked', 'user_id']`
    - Metodo belongsTo da Todo pegar o usuário dono.
~~~~~~belongsTo
    public function user(){
        return $this->belongsTo(User::class);
    }
~~~~~~    
    
- Criação de `factories e seeders` para popular banco.
    - Exemplo
~~~~~~public function run()
    User::updateOrCreate([
        'name'=> 'Rafael Blum',
        'email'=> 'Rafaelblum_digital@hotmail.com',
        'email_verified_at' => now(),
        'password'=> Hash::make('123'),
        'remember_token' => Str::random(10),
    ]);


    User::updateOrCreate([
        'name' => fake()->name(),
        'email' => fake()->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ]);

    Todo::updateOrCreate([
        'checked' => fake()->boolean,
        'user_id' => User::where('email', 'Rafaelblum_digital@hotmail.com')->first()->id,
        'title' => fake()->sentence
    ]);
~~~~~~    

- Criação de politica todo.
    - `php artisan make:policy TodoPolicy --model=Todo ` [Criando politica] | _Cria a policy e com o `--model=Todo` cria todos metodos_.
    
- A criação de `notificações` seram acessados direto pelo componente que irá `iniciar um evento` e assendo as props de componente do blade.
~~~~~~componente livewire
    $this->emit('notifications', [
        'type'      => 'error',
        'message'   => 'Você precisa se logar para criar atividade'
    ]);
~~~~~~
- Metodo da classe Notifications
~~~~~~componente livewire
    protected $listeners = ['notifications'=>'notify'];

    public function notify($props)
    {
        $this->message = $props['message'];
        $this->type = $props['type'];
    }
~~~~~~
- view livewire e componente x-blade
~~~~~~componente livewire
<x-notification :type="$type">
    {!! $message !!}
</x-notification>

~~~~~~

~~~~~~componente blade e props
@props([
    'type'
])


<div {{$attributes->class([
    'w-80 text-center text-sm mb-2 font-semibold tracking-wide cursor-pointer',
    'text-yellow-500' => $type == 'warning',
    'text-red-500' => $type == 'error',
    'text-green-500' => $type == 'success',
    'text-indigo-500' => $type == 'info',
])}} >
    {{$slot}}
</div>
~~~~~~

- Autorizações de ações. 
    - Atraves da Politica criada da todo, cada metodo ira retornar e verificar se o user id do user logado é igual ao id do user_id da tabela Todo.
    - `return $user->is($todo->user);` 
    - Na classe Delete, por exemplo.
    
~~~~~~AuthorizesRequests;
    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use AuthorizesRequests;
    $this->authorize('delete', $this->todo);
~~~~~~

- Outra forma de autorização é utilizando o `can()`

~~~~~~can()
    if(!auth()->check() || !auth()->user()->can('update', $this->todo)){
        $this->emit('notifications', [
            'type'      => "error",
            'message'   => "Você não pode finalizar a atividade <br> {$this->todo->title}"
        ]);

        return;
    }
~~~~~~

- Nas views podemos também usar o @can()
    - Aqui se não é sua atividade, você não terá acesso a visualização do componente.
~~~~~~can()
    @can('update', $todo)
        ...
    @endcan
~~~~~~


## Contatos

- 👇🏼 [rafaelblum_digital@hotmail.com]

[![Youtube Badge](https://img.shields.io/badge/-Youtube-FF0000?style=flat-square&labelColor=FF0000&logo=youtube&logoColor=white&link=https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)](https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)
[![Instagram Badge](https://img.shields.io/badge/-rafablum_-violet?style=flat-square&logo=Instagram&logoColor=white&link=https://www.instagram.com/rafablum_/)](https://www.instagram.com/rafablum_/)
[![Twitter: universoCode](https://img.shields.io/twitter/follow/universoCode?style=social)](https://twitter.com/universoCode)
[![Linkedin: RafaelBlum](https://img.shields.io/badge/-RafaelBlum-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/rafael-blum-378656285/)](https://www.linkedin.com/in/rafael-blum-378656285/)
[![GitHub RafaelBlum](https://img.shields.io/github/followers/RafaelBlum?label=follow&style=social)](https://github.com/RafaelBlum)


<img src="https://media.giphy.com/media/LnQjpWaON8nhr21vNW/giphy.gif" width="60"> 
    <em><b>Adoro me conectar com pessoas diferentes,</b> então se você quiser dizer <b>oi, ficarei feliz em conhecê-lo mais!</b> :)</em>

